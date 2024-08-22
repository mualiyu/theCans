@extends('layouts.index')

@section('content')
     <!-- Page content-->
          <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
            <h1 class="h2 mb-4">Add Space</h1>
            <!-- Basic info-->
            @include('layouts.flash')
            <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
              <form action="{{route('store_space')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="d-flex align-items-center mt-sm-n1 pb- mb-0 mb-lg-1 mb-xl-3">
                      <p>Add space information below</p>

                  </div>
                  <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                    <div class="col-sm-6">
                      <label class="form-label" for="jn">Space Name*</label>
                      <input class="form-control pe-5" type="text" name="name" value="" id="fjn" required>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="img">Image</label>
                        <input class="form-control" type="file" value="" id="img" name="imagei">
                    </div>

                    <div class="col-sm-6">
                      <label class="form-label" for="description">Description</label>
                      <textarea class="form-control" rows="4" placeholder="Write Description" id="description" name="description"></textarea>
                    </div>

                    <div class="col-sm-6">
                      <label class="form-label" for="benefits">Benefits</label>
                      <textarea class="form-control" rows="4" placeholder="Write a short benefits" id="benefits" name="benefit"></textarea>
                    </div>

                    <hr>
                    <div class="col-sm-4">
                        <label class="form-label" for="p_h_d">Price/Half Day</label>
                        <input class="form-control" type="number" id="p_h_d" value="0" name="price_half_day">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="p_d">Price/Day</label>
                        <input class="form-control" type="number" id="p_d" name="price_daily" value="0">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="p_w">Price/Weekly</label>
                        <input class="form-control" type="number" id="p_w" name="price_weekly" value="0">
                    </div>
                    <hr>
                    <div class="col-sm-4">
                        <label class="form-label" for="p_m">Price/Month</label>
                        <input class="form-control" type="number" id="p_m" value="0" name="price_monthly">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="p_a">Price/Annually</label>
                        <input class="form-control" type="number" id="p_a" name="price_annually" value="0">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label" for="nop">Number of Persons</label>
                        <input class="form-control" type="number" id="nop" name="no_of_persons" value="1">
                    </div>

                    <div class="col-sm-12">
                        <div class="input-group">
                            <span class="input-group-text text-dark">Maximum &amp; Minimum number of days/months(i.e., 30 days) per booking:</span>
                            <input type="number" class="form-control" name="min_no_of_days" placeholder="Min">
                            <span class="border-end border-input"></span>
                            <input type="number" class="form-control" name="max_no_of_days" placeholder="Max">
                          </div>
                    </div>

                    <hr>
                    <div class="col-12 d-flex justify-content-end pt-3 end">
                      <button onclick="history.back()" class="btn btn-secondary" type="button">Cancel</button>
                      <button class="btn btn-primary ms-3" type="submit">Add</button>
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
