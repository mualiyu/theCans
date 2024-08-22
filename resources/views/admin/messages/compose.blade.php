@extends('layouts.index')

@section('content')
    <!-- Page content-->
    <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
        <div class="d-flex align-items-center mb-4">
            <h1 class="h2 mb-0">Compose Email</h1>
            {{-- <div class="ms-auto">
                <a class="btn btn-sm btn-primary ms-auto" style="float: right;" href="{{ route('show_create_space') }}">Add a
                    New Email</a>
            </div> --}}
        </div>
        {{-- <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4"> --}}


    </div>
    @include('layouts.flash')
@endsection
