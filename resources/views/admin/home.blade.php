@extends('layouts.index')

@section('content')
<!-- Page content-->
<div class="col-lg-9 pt-4 pb-2 pb-sm-4">
    <div class="d-sm-flex align-items-center mb-4">
        <h1 class="h2 mb-4 mb-sm-0 me-4">Hi 👋 {{explode(' ', Auth::user()->name)[0]}}, Welcome Back</h1>
    </div>
  <!-- Basic info-->
  <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
    <div class="card-body">
        <div class="row g-3 g-xl-4 mb-10 py-3">
            <div class="col-md-4 col-sm-6">
                <div class="h-100 bg-secondary rounded-3 text-center p-4">
                    <h2 class="h6 pb-2 mb-1">News</h2>
                    <div class="h2 text-primary mb-2">{{count($news)}}</div>
                    {{-- <p class="fs-sm text-body-secondary mb-0">Sales 8/1/2023 - 8/15/2023</p> --}}
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="h-100 bg-secondary rounded-3 text-center p-4">
                    <h2 class="h6 pb-2 mb-1">Bookings</h2>
                    <div class="h2 text-primary mb-2">--</div>
                    {{-- <p class="fs-sm text-body-secondary mb-0">Sales 8/1/2023 - 8/15/2023</p> --}}
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="h-100 bg-secondary rounded-3 text-center p-4">
                    <h2 class="h6 pb-2 mb-1">Available Spaces</h2>
                    <div class="h2 text-primary mb-2">{{count($availableSpaces)}}</div>
                    {{-- <p class="fs-sm text-body-secondary mb-0">Sales 8/1/2023 - 8/15/2023</p> --}}
                </div>
            </div>
        </div>

        <div class="row g-4 py-4">
            <!-- Bookings table -->
            <div class="col-12">
              <div class="h-100 border rounded-3 p-4">
                <h2 class="h6 text-center text-sm-start mb-4">Recent Bookings</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Customer</th>
                            <th>Space</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $booking->customer_first_name }} {{ $booking->customer_last_name }}</td>
                                <td>{{ $booking->space->name }}</td>
                                <td>
                                    @if($booking->is_confirmed)
                                        <span class="badge bg-success">Confirmed</span>
                                    @else
                                        <span class="badge bg-warning">Pending</span>
                                    @endif
                                </td>
                                <td>{{ $booking->start_date->format('M d, Y') }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal{{ $booking->id }}">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
        </div>
    </div>
  </section>
</div>

<!-- Booking Modals -->
@foreach($bookings as $booking)
<div class="modal fade" id="bookingModal{{ $booking->id }}" tabindex="-1" aria-labelledby="bookingModalLabel{{ $booking->id }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookingModalLabel{{ $booking->id }}">Booking Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Customer:</strong> {{ $booking->customer_first_name }} {{ $booking->customer_last_name }}</p>
        <p><strong>Email:</strong> {{ $booking->customer_email }}</p>
        <p><strong>Phone:</strong> {{ $booking->customer_phone }}</p>
        <p><strong>Space:</strong> {{ $booking->space->name }}</p>
        <p><strong>Booking Type:</strong> {{ ucfirst($booking->booking_type) }}</p>
        <p><strong>Start Date:</strong> {{ $booking->start_date->format('M d, Y') }}</p>
        <p><strong>Total Price:</strong> ₦{{ number_format($booking->total_price, 2) }}</p>
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

@endsection
