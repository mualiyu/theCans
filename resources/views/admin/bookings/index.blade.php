@extends('layouts.index')

@section('content')
    <!-- Page content-->
    <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
      <div class="d-flex align-items-center mb-4">
        <h1 class="h2 mb-0">Bookings</h1>
        <div class="ms-auto d-flex">
          <form action="{{ route('bookings.index') }}" method="GET" class="me-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search bookings..." name="search" value="{{ request('search') }}">
              <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
          </form>
          <button class="btn btn-primary" id="scanQRButton">Scan QR</button>
        </div>
      </div>
      @include('layouts.flash')
      <div class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4">
        <div class="card-body pb-4">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Customer</th>
                        <th>Space</th>
                        <th>Status</th>
                        <th>Start Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
            @if (count($bookings) > 0)
                @foreach ($bookings as $booking)
                    <tr>
                        <td class="text-dark">{{$booking->b_id}}</td>
                        <td>{{$booking->customer_first_name}} {{$booking->customer_last_name}}</td>
                        <td>{{$booking->space->name}}</td>
                        <td>
                            @if($booking->is_confirmed)
                                <span class="badge bg-success">Confirmed</span>
                            @else
                                <span class="badge bg-warning">Pending</span>
                            @endif
                        </td>
                        <td>{{date('M d, Y', strtotime($booking->start_date))}}</td>
                        <td>
                            <a href="#" class="nav-link text-default fs-sm fw-normal text-primary py-1 pe-0 ps-1 ms-2" type="button" data-bs-toggle="modal" data-bs-target="#bookingModal{{$booking->id}}" aria-label="View">
                                View
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="text-center">
                        <h5>No Bookings Yet</h5>
                    </td>
                </tr>
            @endif
            </tbody>
            </table>
        </div>

        <div class="d-sm-flex align-items-center pt-4 pt-sm-5">
            {{ $bookings->appends(request()->query())->links() }}
        </div>

        </div>
      </div>
    </div>

    <!-- Booking Modals -->
    @foreach($bookings as $booking)
    <div class="modal fade" id="bookingModal{{$booking->id}}" tabindex="-1" aria-labelledby="bookingModalLabel{{$booking->id}}" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="bookingModalLabel{{$booking->id}}">Booking Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p><strong>Booking ID:</strong> {{$booking->b_id}}</p>
            <p><strong>Customer:</strong> {{$booking->customer_first_name}} {{$booking->customer_last_name}}</p>
            <p><strong>Email:</strong> {{$booking->customer_email}}</p>
            <p><strong>Phone:</strong> {{$booking->customer_phone}}</p>
            <p><strong>Space:</strong> {{$booking->space->name}}</p>
            <p><strong>Booking Type:</strong> {{ucfirst($booking->booking_type)}}</p>
            <p><strong>Start Date:</strong> {{$booking->start_date->format('M d, Y')}}</p>
            <p><strong>Total Price:</strong> ₦{{number_format($booking->total_price, 2)}}</p>
            <p><strong>Status:</strong>
                @if($booking->is_confirmed)
                    <span class="badge bg-success">Confirmed</span>
                @else
                    <span class="badge bg-warning">Pending</span>
                @endif
            </p>
            @if($booking->payments->isNotEmpty())
                <p><strong>Payment Status:</strong>
                    @if($booking->payments->last()->is_successful)
                        <span class="badge bg-success">Paid</span>
                    @else
                        <span class="badge bg-danger">Failed</span>
                    @endif
                </p>
            @else
                <p><strong>Payment Status:</strong> <span class="badge bg-secondary">No Payment</span></p>
            @endif
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    @endforeach

    <!-- QR Scanner Modal -->
    <div class="modal fade" id="qrScannerModal" tabindex="-1" aria-labelledby="qrScannerModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="qrScannerModalLabel">Scan QR Code</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div id="qr-reader" style="width:100%"></div>
            <div class="mt-3">
              <p>If you're unable to scan, enter the Booking ID manually:</p>
              <div class="input-group">
                <input type="text" id="manualBookingId" class="form-control" placeholder="Enter Booking ID">
                <button class="btn btn-primary" type="button" onclick="fetchManualBookingDetails()">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Booking Details Modal -->
    <div class="modal fade" id="scannedBookingModal" tabindex="-1" aria-labelledby="scannedBookingModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="scannedBookingModalLabel">Scanned Booking Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="scannedBookingDetails">
            <!-- Booking details will be populated here -->
          </div>
        </div>
      </div>
    </div>

@endsection


{{-- @section('script') --}}

@section('script')
<script src="https://unpkg.com/html5-qrcode@2.3.8/html5-qrcode.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const scanQRButton = document.getElementById('scanQRButton');
    if (scanQRButton) {
        scanQRButton.addEventListener('click', openQRScanner);
    }
});

function openQRScanner() {
    const modal = new bootstrap.Modal(document.getElementById('qrScannerModal'));
    modal.show();

    const html5QrCode = new Html5Qrcode("qr-reader");
    const qrCodeSuccessCallback = (decodedText, decodedResult) => {
        html5QrCode.stop().then(() => {
            modal.hide();
            fetchBookingDetails(decodedText);
        }).catch((err) => {
            console.error("Failed to stop camera:", err);
        });
    };
    const config = { fps: 10, qrbox: { width: 250, height: 250 } };

    html5QrCode.start({ facingMode: "environment" }, config, qrCodeSuccessCallback)
        .catch((err) => {
            console.error("Error starting camera:", err);
            document.getElementById('qr-reader').innerHTML = '<p class="text-danger">Unable to access camera. Please use manual input below.</p>';
            if (err.name === "NotAllowedError") {
                alert("Camera access was denied. Please grant permission to use your camera or use manual input.");
            } else if (err.name === "NotFoundError") {
                alert("No camera found on your device. Please use manual input.");
            } else {
                alert("Error accessing the camera. Please use manual input or try a different device.");
            }
        });
}

function fetchManualBookingDetails() {
    const bookingId = document.getElementById('manualBookingId').value.trim();
    if (bookingId) {
        const modal = bootstrap.Modal.getInstance(document.getElementById('qrScannerModal'));
        modal.hide();
        fetchBookingDetails(bookingId);
    } else {
        alert("Please enter a valid Booking ID.");
    }
}

function fetchBookingDetails(bookingId) {
    // Replace with your actual API endpoint
    fetch(`/bookings/api/${bookingId}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Booking not found');
            }
            return response.json();
        })
        .then(data => {
            displayBookingDetails(data);
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Failed to fetch booking details. ' + error.message);
        });
}

function displayBookingDetails(booking) {
    const detailsHtml = `
        <p><strong>Booking ID:</strong> ${booking.b_id}</p>
        <p><strong>Customer:</strong> ${booking.customer_first_name} ${booking.customer_last_name}</p>
        <p><strong>Email:</strong> ${booking.customer_email}</p>
        <p><strong>Phone:</strong> ${booking.customer_phone}</p>
        <p><strong>Space:</strong> ${booking.space.name}</p>
        <p><strong>Booking Type:</strong> ${booking.booking_type}</p>
        <p><strong>Start Date:</strong> ${new Date(booking.start_date).toLocaleDateString()}</p>
        <p><strong>Total Price:</strong> ₦${booking.total_price.toFixed(2)}</p>
        <p><strong>Status:</strong> ${booking.is_confirmed ? '<span class="badge bg-success">Confirmed</span>' : '<span class="badge bg-warning">Pending</span>'}</p>
        <p><strong>Payment Status:</strong> ${booking.payments && booking.payments.length > 0 ? (booking.payments[booking.payments.length - 1].is_successful ? '<span class="badge bg-success">Paid</span>' : '<span class="badge bg-danger">Failed</span>') : '<span class="badge bg-secondary">No Payment</span>'}</p>
        <button type="button" class="btn btn-primary mt-3" onclick="confirmBooking('${booking.b_id}')">Confirm Booking</button>
    `;

    document.getElementById('scannedBookingDetails').innerHTML = detailsHtml;
    const modal = new bootstrap.Modal(document.getElementById('scannedBookingModal'));
    modal.show();
}

function confirmBooking(bookingId) {
    if (confirm('Are you sure you want to confirm this booking?')) {
        fetch(`/bookings/api/confirm/${bookingId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to confirm booking');
            }
            return response.json();
        })
        .then(data => {
            alert('Booking confirmed successfully!');
            location.reload(); // Refresh the page to show updated status
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Failed to confirm booking. ' + error.message);
        });
    }
}
</script>
@endsection
