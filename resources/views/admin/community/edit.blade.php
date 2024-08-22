@extends('layouts.index')

@section('content')
     <!-- Page content-->
          <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
            <h1 class="h2 mb-4">Edit {{$community->name}}</h1>
            <!-- Basic info-->
            @include('layouts.flash')
            <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
              <form action="{{route('update_community', ['community'=>$community->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="d-flex align-items-center mt-sm-n1 pb- mb-0 mb-lg-1 mb-xl-3">
                        <img src="{{$community->image}}" class="w-10" style="width: 100px; right:0;" alt="">

                      </div>
                  <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                    <div class="col-sm-6">
                      <label class="form-label" for="jn">Name*</label>
                      <input class="form-control pe-5" type="text" name="name" value="{{$community->name}}" id="fjn" required>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="img">Image</label>
                        <input class="form-control" type="file" value="" id="img" name="imagei">
                    </div>

                    <div class="col-sm-12">
                      <label class="form-label" for="description">Description</label>
                      <textarea class="form-control" rows="4" placeholder="Write Description" id="description" name="description" required>{{$community->description}}</textarea>
                    </div>

                    <hr>
                    <div class="col-sm-6">
                        <label class="form-label" for="p_d">Category</label>
                        <select class="form-control" required id="p_d"  name="category" >
                            <option value="{{$community->category}}" selected>{{$community->category}}</option>
                            <option value="Startups">Startups</option>
                            <option value="Entrepreneurs">Entrepreneurs</option>
                            <option value="SMEs">SMEs</option>
                            <option value="NPOs">NPOs</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="nop">Link</label>
                        <input class="form-control" value="{{$community->link}}" type="text" id="nop" name="link" >
                    </div>
                    <div class="col-12 d-flex justify-content-end pt-3 end">
                      <button onclick="history.back()" class="btn btn-secondary" type="button">Cancel</button>
                      <button class="btn btn-primary ms-3" type="submit">Update Community</button>
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
