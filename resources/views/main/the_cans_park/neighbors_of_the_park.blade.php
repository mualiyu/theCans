@extends('layouts.main.index')

@section('content')
{{-- <section class=" bg-opacity-10 d-flex overflow-hidden py-5">
    <div class="container d-flex justify-content-center pb-sm-3 py-md-4 py-xl-5">
        <div class="row align-items-center pt-2 mt-1 mt-xxl-0">
            <div class="col-md-12 col-lg-12 col-xl-12 ">
                <h2 class="display-6">Our Community</h2>
            </div>
        </div>
    </div>
</section> --}}

<section class="bg-primary bg-opacity-10 d-flex overflow-hidden py-5"">
    <div class=" container pb-sm-3 py-md-4 py-xl-5">
    <h2 class="h1 text-center">Neighbors of The Park </h2>
    <p class="text-center pb-4 mb-2 mb-lg-3"></p>

    <!-- Swiper slider -->
    <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden" data-swiper-options="
          {
            &quot;spaceBetween&quot;: 24,
            &quot;pagination&quot;: {
              &quot;el&quot;: &quot;.swiper-pagination&quot;,
              &quot;clickable&quot;: true
            },
            &quot;breakpoints&quot;: {
              &quot;576&quot;: { &quot;slidesPerView&quot;: 2 },
              &quot;992&quot;: { &quot;slidesPerView&quot;: 3 }
            }
          }
        ">
        <div class="swiper-wrapper" id="swiper-wrapper-735aeaaf10dba7b54" aria-live="polite">

            @if (count($neighbors)>0)
            @foreach ($neighbors as $n)

            <!-- Item -->
            <div class="swiper-slide h-auto swiper-slide-active" role="group" aria-label="1 / 3"
                style="width: 368px; margin-right: 24px;">
                <div class="card border-0 h-100">
                    <div class="card-img-top overflow-hidden">
                        <img class="rounded-5 rounded-end-0" style="width: 100%;" src="{{$n->image}}" alt="Image">
                    </div>
                    <div class="card-body">
                        <h3 class="h4 card-title">{{$n->name}}</h3>
                        <p class="mb-n2">{{$n->description}}</p>
                        <a class="mb-n2 right-0" style="float: right;" href="{{$n->link}}">Visit</a>
                        {{-- <ul class="ps-4 mb-n2">
                            <li class="mb-2">
                            </li>
                            <li class="mb-2">Rutrum tempor sit tincidunt</li>
                            <li class="mb-2">Imperdiet est quis enim facilisis</li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            @endforeach
            @endif

        </div>

        <!-- Pagination (bullets) -->
        <div
            class="swiper-pagination position-relative bottom-0 mt-2 pt-4 d-lg-none swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
            <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet"
                tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
    </div>
</section>
@endsection
