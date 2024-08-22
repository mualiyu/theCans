@extends('layouts.main.index')

@section('content')

<section class="container  pt-5 pb-sm-3 mt-5 mb-2 mb-md-3 mb-lg-4 mb-xxl-5">
    <h1 class="pb-3">The CANs Gallery</h1>
    <div class="">
        @if (count($galleries)>0)
        <div class="masonry-grid mb-2 mb-md-4 pb-lg-3 rounded-0 shuffle" data-columns="3"
            style="position: relative; height: 548.469px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1);">

            <!-- Blog item-->
            @foreach ($galleries as $g)
            <article class="masonry-grid-item rounded-0 shuffle-item shuffle-item--visible"
                {{-- style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;" --}}
                >
                <div class="card border-0 bg-secondary rounded-0"><a
                        href="{{route('main.single_gallery', ['gallery'=>$g->id])}}">
                        <img class="card-img-top rounded-0" style="height: 400px;"
                            src="/storage/gallery/{{$g->images[0]->image}}" alt="Post image"></a>
                    <div class="card-body pb-4 rounded-0">
                        <div class="d-flex align-items-center mb-4 mt-n1"><span class="fs-sm text-muted">
                            {{date('d M, Y', strtotime($g->created_at))}}</span>
                            <span
                                class="fs-xs opacity-20 mx-3">|</span>
                                <a
                                class="badge text-white fs-xs border bg-primary">Gallery</a></div>
                        <h3 class="h5 text-dark card-title"><a
                                href="{{route('main.single_gallery', ['gallery'=>$g->id])}}">{{$g->name}}</a></h3>
                        <p class="card-text mb-4">{{$g->description}}</p>
                    </div>

                </div>
            </article>
            @endforeach
        </div>
        @else
        </h3>
        @endif

    </div>
</section>

@endsection
