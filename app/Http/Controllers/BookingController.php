<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Space;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BookingController extends Controller
{
    // public function index()
    // {
    //     $bookings = Booking::with(['space', 'payments'])
    //         ->orderBy('created_at', 'desc')
    //         ->paginate(10);

    //     return view('admin.bookings.index', compact('bookings'));
    // }

    public function index(Request $request)
{
    $search = $request->input('search');

    $bookingsQuery = Booking::query();

    if ($search) {
        $bookingsQuery->where('b_id', 'like', "%{$search}%")
            ->orWhere('customer_first_name', 'like', "%{$search}%")
            ->orWhere('customer_last_name', 'like', "%{$search}%")
            ->orWhereHas('space', function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%");
            });
    }

    $bookings = $bookingsQuery->orderBy('created_at', 'desc')->paginate(15);

    return view('admin.bookings.index', compact('bookings'));
}

    public function space_bookings(Space $space)
    {
        $bookings = Booking::with(['payments'])
            ->where('space_id', $space->id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.bookings.index', compact('bookings', 'space'));
    }

    public function getBookingDetails(string $bookingId): JsonResponse
    {
        $booking = Booking::with(['space', 'payments'])
            ->where('b_id', $bookingId)
            ->first();

        if (!$booking) {
            return response()->json(['error' => 'Booking not found'], 404);
        }

        return response()->json([
            'b_id' => $booking->b_id,
            'customer_first_name' => $booking->customer_first_name,
            'customer_last_name' => $booking->customer_last_name,
            'customer_email' => $booking->customer_email,
            'customer_phone' => $booking->customer_phone,
            'space' => [
                'name' => $booking->space->name,
            ],
            'booking_type' => $booking->booking_type,
            'start_date' => $booking->start_date,
            'total_price' => $booking->total_price,
            'is_confirmed' => $booking->is_confirmed,
            'payments' => $booking->payments->map(function ($payment) {
                return [
                    'is_successful' => $payment->is_successful,
                    // Add other payment details as needed
                ];
            }),
        ]);
    }
}
