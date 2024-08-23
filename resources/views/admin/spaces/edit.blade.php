@extends('layouts.index')

@section('content')
     <!-- Page content-->
          <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
            <h1 class="h2 mb-4">Edit {{$space->name}}</h1>
            <!-- Basic info-->
            @include('layouts.flash')
            <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
              <form action="{{route('update_space', ['space'=>$space->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="d-flex align-items-center mt-sm-n1 pb- mb-0 mb-lg-1 mb-xl-3">
                      <img src="{{$space->image}}" class="w-10" style="width: 100px; right:0;" alt="">

                    </div>
                    <div class="form-check form-switch">
                      <input type="checkbox" class="form-check-input" name="isActive" id="customSwitch1" {{$space->isActive ? "checked":""}}>
                      <label class="form-check-label" for="customSwitch1"> {{!$space->isActive ? "Toggle this switch to activate space":"Toggle off the switch to deactivate space"}}</label>
                    </div>
                  <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                    <div class="col-sm-6">
                      <label class="form-label" for="jn">Space Name*</label>
                      <input class="form-control pe-5" type="text" name="name" value="{{$space->name}}" id="fjn" required>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="img">Image</label>
                        <input class="form-control" type="file" value="" id="img" name="imagei">
                    </div>

                    <div class="col-sm-6">
                      <label class="form-label" for="description">Description</label>
                      <textarea class="form-control" rows="4" placeholder="Write Description" id="description" value="{{$space->description}}" name="description">{{$space->description}}</textarea>
                    </div>

                    <div class="col-sm-6">
                      <label class="form-label" for="benefits">Benefits</label>
                      <textarea class="form-control" rows="4" placeholder="Write a short benefits" id="benefits" value="{{$space->benefit}}" name="benefit">{{$space->benefit}}</textarea>
                    </div>

                    <hr>
                    <div class="col-sm-4">
                        <label class="form-label" for="p_h_d">Price/Half Day</label>
                        <input class="form-control" type="number" id="p_h_d" value="{{$space->price_half_day}}" name="price_half_day">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="p_d">Price/Day</label>
                        <input class="form-control" type="number" id="p_d" name="price_daily" value="{{$space->price_daily}}">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="p_w">Price/Weekly</label>
                        <input class="form-control" type="number" id="p_w" name="price_weekly" value="{{$space->price_weekly}}">
                    </div>
                    <hr>
                    <div class="col-sm-4">
                        <label class="form-label" for="p_m">Price/Month</label>
                        <input class="form-control" type="number" id="p_m" value="{{$space->price_monthly}}" name="price_monthly">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="p_a">Price/Annually</label>
                        <input class="form-control" type="number" id="p_a" name="price_annually" value="{{$space->price_annually}}">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="nop">Number of Persons</label>
                        <input class="form-control" type="number" id="nop" name="no_of_persons" value="{{$space->no_of_persons}}">
                    </div>

                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-text text-dark">Maximum &amp; Minimum number of days/months(i.e., 30 days) per booking:</span>
                            <input type="number" class="form-control" name="min_no_of_days" value="{{$space->min_no_of_days}}" placeholder="Min">
                            <span class="border-end border-input"></span>
                            <input type="number" class="form-control" name="max_no_of_days" value="{{$space->max_no_of_days}}" placeholder="Max">
                          </div>
                    </div>

                    <hr>
                    <div class="col-12 d-flex justify-content-end pt-3 end">
                      <button onclick="history.back()" class="btn btn-secondary" type="button">Cancel</button>
                      <button class="btn btn-primary ms-3" type="submit">Update</button>
                    </div>
                  </div>
                </div>
              </form>
            </section>
          </div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
