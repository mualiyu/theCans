@extends('layouts.index')

@section('content')
     <!-- Page content-->
          <div class="col-lg-9 pt-4 pb-2 pb-sm-4">
            <h1 class="h2 mb-4">Update FAQ</h1>
            <!-- Basic info-->
             @include('layouts.flash')
            <section class="card border-0 py-1 p-md-2 p-xl-3 p-xxl-4 mb-4">
              <form action="{{route('update_faq', ['faq'=>$faq->id])}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                      {{-- <i class="ai-user text-primary lead pe-1 me-2"></i> --}}
                      {{-- <h2 class="h4 mb-0">Video info</h2> --}}
                  </div>
                  <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                    <div class="col-sm-12">
                      <label class="form-label" for="jn">Title</label>
                      <input class="form-control" type="text" name="title" value="{{$faq->title}}" id="fjn">
                    </div>
                    <div class="col-sm-12">
                      <label class="form-label" for="jn">Content</label>
                      <textarea class="form-control" rows="7" name="content" id="fjn">{{$faq->content}}</textarea>
                    </div>
                    <hr>
                    <div class="col-12 d-flex justify-content-end pt-3 end">
                      <button class="btn btn-secondary" onclick="history.back()" type="button">Cancel</button>
                      <button class="btn btn-primary ms-3" type="submit">Update FAQ</button>
                    </div>
                  </div>
                </div>
              </form>
            </section>
          </div>
@endsection

