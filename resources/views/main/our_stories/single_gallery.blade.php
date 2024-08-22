@extends('layouts.main.index')

@section('content')

<section class="pt-5 pb-sm-3 mt-5 mb-2 mb-md-3 mb-lg-4 mb-xxl-5">
    <div class="container">
        <div class="col-lg-12 pb-2 pb-lg-0 mb-4 mb-lg-0 pt-5">
            <a href="#" onclick="window.history.go(-1)"><span class="badge text-primary fs-xs border"> <i
                        class="ai-arrow-left-in fs-2"></i>Back</span></a>
            <h3 class="display-6 pb-lg-2 text-dark">{{$gallery->name}}</h3>
            <p class="fs-sm fw-bold text-dark pb-4">{{date('d M, Y', strtotime($gallery->created_at))}}</p>
        </div>
    </div>
</section>

<section class="container  mt-md-2 mt-lg-3 mt-xl-4">
    {{-- <p>{{$gallery->description}}</p> --}}
    @if (count($gallery->images)>0)
    <div class="gallery row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4" data-thumbnails="true">
        <?php $i=1;?>
        @foreach ($gallery->images as $im)
        <div class="col">
            <a href="/storage/gallery/{{$im->image}}" class="gallery-item d-block card-hover">
                <div
                    class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-4 overflow-hidden zindex-2 opacity-0">
                    <i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
                    <div
                        class="position-absolute bottom-0 start-0 w-100 text-center text-white fs-sm fw-medium zindex-2 pb-3">
                        {{$gallery->name}} #{{$i}}
                    </div>
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                </div>
                <img src="/storage/gallery/{{$im->image}}" class="d-block rounded-4" style="width: 100%;"
                    alt="Image #1">
            </a>
        </div>
        <?php $i++;?>
        @endforeach
    </div>
    @else
    <h5 class="fs-3">No Photos.</h5>
    @endif
</section>

@endsection
