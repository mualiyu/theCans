@extends('layouts.main.index')

@section('content')
<section class="container pt-5 pb-sm-3 mt-5 mb-2 mb-md-3 mb-lg-4 mb-xxl-5">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/coworking')}}">Spaces</a></li>
            <li class="breadcrumb-item"><a href="#">Bookings</a></li>
            <li class="breadcrumb-item"><a href="#">Not Paid</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$booking->b_id}}</li>
        </ol>
    </nav>
    @include('layouts.flash')
    <div class="card bg-secondary bg-opacity-10 border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
        <div class="card-body">
            <form action="{{route('main.pay.again', ['b_id'=>$booking->b_id])}}" method="POST">
                @csrf
                <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                    <i class="ai-user text-primary lead pe-1 me-2"></i>
                    <h2 class="h4 mb-0">Booking info</h2>
                    <button class="btn btn-sm btn-primary ms-auto" href="#">
                        <i class="ai-edit ms-n1 me-2"></i>
                        Pay ₦{{$booking->total_price}}
                    </button>
                </div>
            </form>
            <div class="d-md-flex align-items-center">
                <div class="d-sm-flex align-items-center">
                    <div class="rounded-circle bg-size-cover bg-position-center flex-shrink-0"
                        style="width: 80px; height: 80px; background-image: url({{$booking->space->image}});"></div>
                    <div class="pt-3 pt-sm-0 ps-sm-3">
                        <h3 class="h5 mb-2">{{$booking->space->name}}<i
                                class="ai-circle-check-filled fs-base text-success ms-2"></i></h3>
                        <div class="text-body-secondary fw-medium d-flex flex-wrap flex-sm-nowrap align-iteems-center">
                            <div class="d-flex align-items-center me-3">
                                {{-- <i class="ai-mail me-1"></i> --}}
                                {{$booking->space->description}}
                            </div>
                            <div class="d-flex align-items-center text-nowrap">
                                {{-- <i class="ai-map-pin me-1"></i> --}}
                                ₦{{$booking->total_price}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 pt-3 pt-md-0 ms-md-auto" style="max-width: 212px;">
                    <div class="d-flex justify-content-between fs-sm pb-1 mb-2">
                        Pendig Payment
                        <strong class="ms-2">0%</strong>
                    </div>
                    <div class="progress" style="height: 5px;">
                        <div class="progress-bar " role="progressbar" style="width: 0%" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="row py-4 mb-2 mb-sm-3">
                <div class="col-md-6 mb-4 mb-md-0">
                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <td class="border-0 text-body-secondary py-1 px-0">Booking ID</td>
                                <td class="border-1 fw-medium py-1 ps-3 text-green-900" >{{$booking->b_id}}</td>
                            </tr>
                            <tr>
                                <td class="border-0 text-body-secondary py-1 px-0">Name</td>
                                <td class="border-0 text-dark fw-medium py-1 ps-3">{{$booking->customer_first_name}}
                                    {{$booking->customer_last_name}}</td>
                            </tr>
                            <tr>
                                <td class="border-0 text-body-secondary py-1 px-0">Phone</td>
                                <td class="border-0 text-dark fw-medium py-1 ps-3">{{$booking->customer_phone}}</td>
                            </tr>
                            <tr>
                                <td class="border-0 text-body-secondary py-1 px-0">Email</td>
                                <td class="border-0 text-dark fw-medium py-1 ps-3">{{$booking->customer_email}}</td>
                            </tr>
                            <tr>
                                <td class="border-0 text-body-secondary py-1 px-0">Booking Type</td>
                                <td class="border-0 text-dark fw-medium py-1 ps-3">{{$booking->booking_type}}</td>
                            </tr>
                            <tr>
                                <td class="border-0 text-body-secondary py-1 px-0">Start Date</td>
                                <td class="border-0 text-dark fw-medium py-1 ps-3">{{$booking->start_date->format('d M,
                                    Y')}}</td>
                            </tr>
                            <tr>
                                <td class="border-0 text-body-secondary py-1 px-0">Total Amount Paid</td>
                                <td class="border-0 text-dark fw-medium py-1 ps-3">₦{{$booking->total_price}}</td>
                            </tr>
                            <tr>
                                <td class="border-0 text-body-secondary py-1 px-0">Status</td>
                                <td class="border-0 text-dark fw-medium py-1 ps-3">
                                    @if ($booking->is_confirmed)
                                    <span class="badge bg-primary bg-opacity-5 text-white">Confirmed</span>
                                    @else
                                    <span class="badge bg-danger bg-opacity-5 text-dark">Not Confirmed</span>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6 d-md-flex justify-content-end">
                    <div class="w-100 border rounded-3 p-3" style="max-width: 212px;">
                        {!! QrCode::size(210)->generate(route('main.booking.success', ['b_id' => $booking->b_id])) !!}
                        {{-- <img class="d-block mb-2" src="assets/img/account/gift-icon.svg" width="24"
                            alt="Gift icon"> --}}
                        {{-- <h4 class="h5 lh-base mb-0">123 bonuses</h4>
                        <p class="fs-sm text-body-secondary mb-0">1 bonus = $1</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
