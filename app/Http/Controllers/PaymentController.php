<?php

namespace App\Http\Controllers;

use App\Mail\FailedPay;
use App\Mail\InitialPay;
use App\Mail\SuccessfulPay;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\Space;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Unicodeveloper\Paystack\Facades\Paystack;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PaymentController extends Controller
{

    public function redirectToGateway(Request $request)
    {
        try {
            // Validate request
            $request->validate([
                'space_id' => 'required|exists:spaces,id',
                'booking_type' => 'required',
                'start_date' => 'required|date|after_or_equal:today',
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
            ]);

            // Get space details
            $space = Space::find($request->space_id);
            $bookingId = $this->generateBookingId();

            // Create a new booking
            $booking = Booking::create([
                'space_id' => $space->id,
                'b_id' => $bookingId,
                'booking_type' => $request->booking_type,
                'start_date' => $request->start_date,
                'customer_first_name' => $request->first_name,
                'customer_last_name' => $request->last_name,
                'customer_email' => $request->email,
                'customer_phone' => $request->phone,
                'total_price' => $this->calculateTotalPrice($space, $request->booking_type),
            ]);

            $callbackUrl = route('main.payment_call_back');
            // Add additional data to Paystack request
            $request->merge([
                'email' => $booking->customer_email,
                'first_name' => $booking->customer_first_name,
                'last_name' => $booking->customer_last_name,
                'phone' => $booking->customer_phone,
                'amount' => $booking->total_price * 100, // Paystack requires the amount in kobo
                'currency' => "NGN",
                'reference' => Paystack::genTranxRef(),
                'metadata' => json_encode([
                    'booking_id' => $booking->id,
                    'space_id' => $booking->space_id,
                ]),
                'callback_url' => $callbackUrl,
            ]);

            Mail::to($booking->customer_email)->send(new InitialPay($booking));
            // Mail::to(env('SYSTEM_EMAIL'))->send(new InitialPay($booking));
            // Redirect to Paystack payment page
            return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->with('error', 'The paystack token has expired. Please refresh the page and try again.');
        }
    }

    public function redirectToGateway_again(Request $request, $b_id)
    {
        try {
            $booking = Booking::where('b_id', '=', $b_id)->get();

            if (count($booking) > 0 && !$booking[0]->is_confirmed) {
                $booking = $booking[0];

                $space = $booking->space->id;

                $callbackUrl = route('main.payment_call_back');
                // Add additional data to Paystack request
                $request->merge([
                    'email' => $booking->customer_email,
                    'first_name' => $booking->customer_first_name,
                    'last_name' => $booking->customer_last_name,
                    'phone' => $booking->customer_phone,
                    'amount' => $booking->total_price * 100, // Paystack requires the amount in kobo
                    'currency' => "NGN",
                    'reference' => Paystack::genTranxRef(),
                    'metadata' => json_encode([
                        'booking_id' => $booking->id,
                        'space_id' => $booking->space_id,
                    ]),
                    'callback_url' => $callbackUrl,
                ]);

                // Redirect to Paystack payment page
                return Paystack::getAuthorizationUrl()->redirectNow();
            } else {
                return redirect()->route('main.booking.success', ['b_id' => $booking->b_id]);
            }

            // Get space details
        } catch (\Exception $e) {
            return Redirect::back()->with('error', 'The paystack token has expired. Please refresh the page and try again.');
        }
    }

    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // Fetch the booking by the reference metadata
        $booking = Booking::find($paymentDetails['data']['metadata']['booking_id']);

        // Create a payment record
        $payment = Payment::create([
            'booking_id' => $booking->id,
            'amount' => $paymentDetails['data']['amount'] / 100, // Convert kobo to NGN
            'payment_method' => 'Paystack',
            'transaction_id' => $paymentDetails['data']['reference'],
            'is_successful' => $paymentDetails['data']['status'] == 'success',
        ]);

        // Handle the payment success or failure
        if ($paymentDetails['data']['status'] == 'success') {
            // Mark booking as confirmed
            $booking->is_confirmed = true;
            $booking->save();

            // ####### send email to customer
            // Generate QR code and save it temporarily
            $qrCodePath = $this->generateQRCode($booking);
            // Send email
            Mail::to($booking->customer_email)->send(new SuccessfulPay($booking, $payment, $qrCodePath));
            // Optionally, delete the QR code after sending the email
            Storage::delete('public/qrcodes/' . $booking->b_id . '.png');


            // Redirect or send a response indicating success
            return redirect()->route('main.booking.success', ['b_id' => $booking->b_id]);
        } else {

            // Send email
            Mail::to($booking->customer_email)->send(new FailedPay($booking));
            // Handle failed payment, maybe retry or inform the user
            return redirect()->route('main.booking.failed', ['b_id' => $booking->b_id]);
        }
    }

    // Helper Function
    private function calculateTotalPrice(Space $space, string $bookingType)
    {
        switch ($bookingType) {
            case 'half_day':
                return $space->price_half_day;
            case 'daily':
                return $space->price_daily;
            case 'weekly':
                return $space->price_weekly;
            case 'monthly':
                return $space->price_monthly;
            case 'annually':
                return $space->price_annually;
            default:
                throw new \Exception("Invalid booking type: {$bookingType}");
        }
    }

    // Helper Function
    private function generateBookingId()
    {
        $unique = false;
        $bookingId = '';

        while (!$unique) {
            // Generate a random 8-digit alphanumeric string
            $bookingId = strtoupper(Str::random(8));

            // Check if the booking ID already exists in the database
            $existingBooking = Booking::where('b_id', $bookingId)->first();

            if (!$existingBooking) {
                $unique = true;
            }
        }

        return $bookingId;
    }

    // Helper fuction
    private function generateQRCode($booking)
    {
        // Ensure the qrcodes directory exists
        $directoryPath = storage_path('app/public/qrcodes');
        if (!File::exists($directoryPath)) {
            File::makeDirectory($directoryPath, 0755, true);
        }

        // Generate QR code and save it
        $qrCodePath = $directoryPath . '/' . $booking->b_id . '.png';
        QrCode::format('png')->size(200)->generate(route('main.booking.success', ['b_id' => $booking->b_id]), $qrCodePath);

        // Return the path for embedding in email
        return $qrCodePath;
    }

    public function get_all_trans()
    {
        $pp = Paystack::getAllTransactions();

        dd($pp);
    }

    public function success_booking($b_id)
    {
        $booking = Booking::where('b_id', '=', $b_id)->get();

        if (count($booking) > 0 && $booking[0]->is_confirmed) {
            $booking = $booking[0];
            return view('main.bookings.success', compact('booking'))->with('success', "You have Paid for " . $booking->space->name . " and it will start counting form $booking->start_date.");
        } else {
            return redirect()->route('main.booking.failed', ['b_id' => $booking[0]->b_id]);
        }
    }

    public function failed_booking($b_id)
    {
        $booking = Booking::where('b_id', '=', $b_id)->get();

        if (count($booking) > 0 && !$booking[0]->is_confirmed) {
            $booking = $booking[0];
            return view('main.bookings.failed', compact('booking'))->with('error', "Payment failed! You can try again later.");
        } else {
            return redirect()->route('main.booking.success', ['b_id' => $booking[0]->b_id]);
            abort(404);
        }
    }
}
