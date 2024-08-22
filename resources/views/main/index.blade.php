@extends('layouts.main.index')

@section('content')
<!-- Hero -->
<section class="bg-primary bg-opacity-10 d-flex min-vh-100 overflow-hidden py-5">
    <div class="container d-flex justify-content-center pb-sm-3 py-md-4 py-xl-5">
        <div class="row align-items-center pt-5 mt-4 mt-xxl-0">

            <!-- Video + Parallax -->
            <div class="col-lg-6 mb-4 mb-lg-0 pb-3 pb-lg-0">
                <div class="parallax mx-auto mx-lg-0" style="max-width: 582px;">
                    <div class="parallax-layer z-3" data-depth="0.1">
                        <div class="position-relative bg-dark mx-auto"
                            style="max-width: 61%; padding: .3125rem; margin-bottom: 9.9%; border-radius: calc(var(--ar-border-radius) * 2.125);">
                            <div class="position-absolute start-50 translate-middle-x" style="top: 4.4%; width: 85%;">
                                <div class="row row-cols-4 gx-2 mb-3">
                                    <div class="col">
                                        <div class="border-white border opacity-80"></div>
                                    </div>
                                    <div class="col">
                                        <div class="border-white border opacity-80"></div>
                                    </div>
                                    <div class="col">
                                        <div class="border-white border opacity-80"></div>
                                    </div>
                                    <div class="col position-relative">
                                        <div
                                            class="position-absolute top-0 start-0 w-100 border-white border opacity-30">
                                        </div>
                                        <div
                                            class="position-absolute top-0 start-0 w-50 border-white border opacity-80">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{asset('assets/img/imagesa/logo.svg')}}"
                                        width="35" alt="Avatar">
                                    <div class="fs-xs ps-2" data-bs-theme="light">
                                        <span class="text-nav fw-bold me-1">thecans.ng</span>
                                        <span class="text-body-secondary">12 min</span>
                                    </div>
                                </div>
                            </div>
                            <video class="d-block w-100" autoplay loop muted
                                style="border-radius: calc(var(--ar-border-radius) * 1.875);">
                                <source src="{{asset('assets/img/imagesa/cans-video.mp4')}}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="parallax-layer" data-depth="0.3">
                        <img src="assets/img/landing/marketing-agency/hero/shape01.svg" alt="Background shape">
                    </div>
                    <div class="parallax-layer z-2" data-depth="-0.1">
                        <img src="assets/img/landing/marketing-agency/hero/shape02.svg" alt="Background shape">
                    </div>
                    <div class="parallax-layer" data-depth="-0.15">
                        <img src="assets/img/landing/marketing-agency/hero/shape03.svg" alt="Background shape">
                    </div>
                    <div class="parallax-layer z-2" data-depth="-0.25">
                        <img src="assets/img/landing/marketing-agency/hero/shape04.svg" alt="Background shape">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center text-sm-start">
                <h5 class="display-6 pb-3 mb-4">We support entrepreneurs & startups building for the future</h5>
                <div class="row row-cols-1">
                    <div class="col">
                        <p class="mb-0">At <span class="fw-normal">the CANs</span>, we believe in the power of
                            technology to impact lives.</p>
                    </div>
                </div>
                <div class="d-sm-flex justify-content-center justify-content-lg-start pt-5 mt-lg-2">
                    <a class="btn btn-lg btn-primary w-100 w-sm-auto mb-2 mb-sm-0 me-sm-1"
                        href="{{route('main.contact_us')}}">Get in
                        touch</a>
                    <a class="btn btn-lg btn-link" href="{{route('main.coworking')}}">
                        Book Spaces Here
                        <i class="ai-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="container py-5 my-md-1 my-lg-2 my-xl-3">
    <div class="row align-items-center py-1 py-sm-2 py-md-3 my-lg-1">
        <div class="col-lg-4 offset-xl-1">
            <h2 class="h1 text-center text-lg-start pb-3 pb-lg-1">Our Services</h2>

            <!-- Show on screens > 992px -->
            <ul class="list-unstyled d-none d-lg-block pb-3 mb-3 mb-lg-4">
                <li class="d-flex pt-2">
                    <i class="ai-check-alt fs-4 text-primary mt-n1 me-2"></i>
                    Our Co-working Space
                </li>
                <li class="d-flex pt-2">
                    <i class="ai-check-alt fs-4 text-primary mt-n1 me-2"></i>
                    Technology Consulting
                </li>
                <li class="d-flex pt-2">
                    <i class="ai-check-alt fs-4 text-primary mt-n1 me-2"></i>
                    Our Community
                </li>
            </ul>
            {{-- <a class="btn btn-primary d-none d-lg-inline-flex" href="#">See all servises</a> --}}
        </div>

        <div class="col-lg-8 col-xl-7 col-xxl-6">
            <div class="row row-cols-1 row-cols-sm-2">
                <div class="col">
                    <div class="card border-0 bg-primary bg-opacity-10">
                        <div class="card-body">
                            <i class="ai-search-settings fs-1 text-primary d-block mb-3"></i>
                            <h3 class="h4">Our Co-working Space</h3>
                            <p class="fs-sm">Workspace to meet and collaborate with like minds.</p>
                        </div>
                    </div>
                    <div class="card border-0 bg-info bg-opacity-10 mt-4">
                        <div class="card-body">
                            <i class="ai-bulb-alt fs-1 text-info d-block mb-3"></i>
                            <h3 class="h4">Our Community</h3>
                            <p class="fs-sm">Join our thriving community of innovators.</p>
                        </div>
                    </div>
                </div>
                <div class="col pt-lg-3">
                    <div class="card border-0 bg-warning bg-opacity-10 mt-4 mt-sm-0 mt-lg-4">
                        <div class="card-body">
                            <i class="ai-mail-filled fs-1 text-warning d-block mb-3"></i>
                            <h3 class="h4">Technology Consulting</h3>
                            <p class="fs-sm">Strategic and technology solutions.</p>
                        </div>
                    </div>
                    <div class="card border-0 bg-danger bg-opacity-10 mt-4">
                        <div class="card-body">
                            <i class="ai-telegram fs-2 text-danger d-block mb-3"></i>
                            <h3 class="h4">Our Foundation</h3>
                            <p class="fs-sm">Enabling Social Development Partner through collaboration</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- The cans foundation -->
<section class=" py-5 mb-md-1 mb-lg-2 mb-xl-3">
    <div class="container pt-2 pt-sm-4 pt-lg-5 mt-xxl-2">
        <div style="text-align: center;">
            <div class="text-uppercase mb-3">The cans foundation</div>
            <h2 class="display-6 pb-3 mb-lg-4">Social Problems Solved One Project at a Time </h2>
        </div>
        <div class="swiper" data-swiper-options='
        {
          "spaceBetween": 24,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "576": { "slidesPerView": 2 },
            "992": { "slidesPerView": 3 }
          }
        }
      '>
            <div class="swiper-wrapper">

                <!-- Item -->
                <div class="swiper-slide h-auto">
                    <div class="card border-0 bg-secondary rounded-5 h-100">
                        <div class="card-body">
                            <img class="d-block mt-1 mt-sm-0 mb-2" style=" height:50px;"
                                src="{{asset('assets/img/imagesa/backup_logo.png')}}" height="28" /><span
                                class="badge bg-info bg-opacity-10 text-info ms-3" style="float: right;">2021</span>
                            <h3 class="h4">Back Up</h3>
                            <p class="mb-0">Anti Police Brutality platform that helps victims seek help</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto">
                    <div class="card border-0 bg-secondary rounded-5 h-100">
                        <div class="card-body">
                            <img class="d-block mt-1 mt-sm-0 mb-2" style="height:50px;"
                                src="{{asset('assets/img/imagesa/rise-logo.png')}}" height="28" /><span
                                class="badge bg-info bg-opacity-10 text-info ms-3" style="float: right;">2020</span>
                            <h3 class="h4">RISE </h3>
                            <p class="mb-0">Relief, Intervention and Symptoms Evaluation</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto">
                    <div class="card border-0 bg-secondary rounded-5 h-100">
                        <div class="card-body">
                            <img class="d-block mt-1 mt-sm-0 mb-2" style=" height:50px;"
                                src="{{asset('assets/img/imagesa/engage-logo.png')}}" height="28" /><span
                                class="badge bg-info bg-opacity-10 text-info ms-3" style="float: right;">2021</span>
                            <h3 class="h4">Engage </h3>
                            <p class="mb-0">Government accountability platform</p>
                            {{-- <img class="d-block mt-1 mt-sm-0 mb-4"
                                src="{{asset('assets/img/imagesa/UNSUBlogo.png')}}" height="40" />
                            <h3 class="h4">UNSUB</h3>
                            <p class="mb-0">Gender based violence</p> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative bottom-0 mt-2 pt-4 d-lg-none"></div>
        </div>
    </div>
</section>

<!-- Spaces -->
@if (count($spaces)>0)
<section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
    <h2 class="h1 text-center pb-3 pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-md-3 mt-lg-0 mb-3 mb-lg-4">Our Spaces</h2>
    <div class="row align-items-center pt-md-4 mt-2 mt-sm-3">
        <div class="col-md-6 position-relative pb-3 pb-md-0 mb-2 mb-sm-3 mb-md-0">
            <div class="d-none d-xxl-block position-absolute"
                style="width: 861px; height: 719px; top: 50px; left: -260px;" data-aos="zoom-in" data-aos-duration="700"
                data-aos-offset="400">
                <svg class="text-primary opacity-10" width="861" height="719" viewBox="0 0 861 719" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M25.1985 361.161C26.6142 363.592 28.4042 365.854 30.3902 367.846L115.89 453.613C117.366 455.093 119.008 456.457 120.69 457.697C220.882 531.542 166.267 694.09 321.314 716.256C481 739.09 730.799 588.084 806.496 453.151C844.188 385.962 885.87 273.92 840.453 199.651C808.854 147.97 742.627 142.437 686.285 142.442C616.832 142.453 556.116 167.459 491.294 135.468C449.5 114.831 426.769 82.5406 392.702 51.7928C206.459 -116.148 -88.0611 166.69 25.1985 361.161Z">
                    </path>
                </svg>
            </div>

            <!-- Binded items -->
            <div class="binded-content z-2 mb-3">

                <?php $ii = 1; ?>
                @foreach ($spaces as $space)
                <!-- Item -->
                <div class="binded-item {{$ii==1 ? 'active':''}}" id="image{{$space->id}}">
                    <img class="d-block rounded-5" src="{{$space->image}}" alt="Image">
                </div>
                <?php $ii++; ?>
                @endforeach
            </div>
        </div>
        <div class="col-md-6 col-xl-5 offset-xl-1">
            <div class="ps-md-4 ps-xl-0">

                <!-- Slider control buttons (Prev / Next) -->
                <div class="d-flex align-items-center ms-n3 pb-3 mb-sm-2 mb-xl-4">
                    <button class="btn btn-icon btn-link" type="button" id="prev-case-study" aria-label="Prev">
                        <i class="ai-arrow-left"></i>
                    </button>
                    <div class="text-center text-nowrap mx-3" id="slides-count" style="width: 33px;"></div>
                    <button class="btn btn-icon btn-link" type="button" id="next-case-study" aria-label="Next">
                        <i class="ai-arrow-right"></i>
                    </button>
                </div>

                <!-- Swiper slider -->
                <div class="swiper" data-swiper-options='{
                "spaceBetween": 40,
                "autoHeight": true,
                "bindedContent": true,
                "pagination": {
                  "el": "#slides-count",
                  "type": "fraction"
                },
                "navigation": {
                  "prevEl": "#prev-case-study",
                  "nextEl": "#next-case-study"
                }
              }'>
                    <div class="swiper-wrapper">

                        @foreach ($spaces as $space)
                        <!-- Item -->
                        <div class="swiper-slide pb-1" data-swiper-binded="#image{{$space->id}}">
                            <h3 class="h4">{{$space->name}}
                            </h3>
                            <p class="pb-3 mb-3 mb-xl-4">{{$space->description}}.</p>
                            <div class="d-flex d-md-none d-lg-flex justify-content-between w-100 pb-4 pb-xl-5 mb-2 mb-sm-3 mb-xl-2"
                                style="max-width: 440px;">
                                <div class="pe-4">
                                    <div class="h2 mb-1">{{$space->price_daily==0 ? "-": "₦".$space->price_daily}}</div>
                                    <div class="fs-sm">Price Daily</div>
                                </div>
                                <div class="pe-4">
                                    <div class="h2 mb-1">{{$space->price_monthly==0 ? "-":"₦".$space->price_monthly}}
                                    </div>
                                    <div class="fs-sm">Price Monthly</div>
                                </div>
                                <div>
                                    <div class="h2 mb-1">{{$space->no_of_persons}}</div>
                                    <div class="fs-sm">No. of persons</div>
                                </div>
                            </div>
                            <div class="d-sm-flex">
                                <a class="btn btn-primary w-100 w-sm-auto mb-3 mb-sm-0 me-sm-3 me-xl-4" href="{{route('main.coworking')}}#spacesection{{$space->id}}">Book
                                    Space Now</a>
                                <a class="btn btn-outline-primary w-100 w-sm-auto d-md-none d-lg-inline-flex"
                                    href="{{route('main.coworking')}}">View All Spaces</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Patners -->
<section class="container my-lg-3 my-xl-4 my-xxl-5">
    <div class="bg-primary bg-opacity-10 rounded-5 py-5 px-4 p-sm-5">
        <div class="d-lg-flex align-items-center g-0 py-2 py-sm-3 py-md-4 p-xl-5">
            <div class="order-lg-2 text-center text-lg-start ps-lg-5 mx-auto me-lg-0">
                <h2 class="h1 mb-4">Our Partners</h2>
                <p class="pb-3 mb-3 mb-lg-4">At The Cans, we are proud to collaborate with leading organizations that
                    share our vision for excellence.
                    Our partners provide the expertise, resources, and support that help us deliver top-quality services
                    and innovative solutions to our users.
                    Together, we drive progress and achieve great results.</p>
                {{-- <a class="btn btn-primary d-none d-lg-inline-flex" href="#">See all tools</a> --}}
            </div>
            <div class="order-lg-1 w-100 mx-auto mx-lg-0" style="max-width: 558px;">
                <div class="row row-cols-3 g-3 g-sm-4 g-lg-3 g-xl-4">
                    <div class="col">
                        <div class="bg-light rounded-3" data-aos="zoom-in" data-aos-easing="ease-out-back"
                            data-aos-delay="300">
                            <img src="{{asset('assets/img/imagesa/ibm.png')}}" alt="Bing">
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-light rounded-3" data-aos="zoom-in" data-aos-easing="ease-out-back"
                            data-aos-delay="600">
                            <img class="d-dark-mode-none" src="{{asset('assets/img/imagesa/mof.png')}}" alt="Admitad">
                            <img class="d-none d-dark-mode-block" src="{{asset('assets/img/imagesa/mof.png')}}"
                                alt="Admitad">
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-light rounded-3" data-aos="zoom-in" data-aos-easing="ease-out-back"
                            data-aos-delay="200">
                            <img class="d-dark-mode-none" src="{{asset('assets/img/imagesa/jaiz.png')}}" alt="Facebook">
                            <img class="d-none d-dark-mode-block" src="{{asset('assets/img/imagesa/mof.png')}}"
                                alt="Facebook">
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-light rounded-3" data-aos="zoom-in" data-aos-easing="ease-out-back"
                            data-aos-delay="800">
                            <img src="{{asset('assets/img/imagesa/TheWorldBank.png')}}" alt="Google">
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-light rounded-3" data-aos="zoom-in" data-aos-easing="ease-out-back">
                            <img class="d-dark-mode-none" src="{{asset('assets/img/imagesa/OSIWA-Grant-of-80000.png')}}"
                                alt="Google Ads">
                            <img class="d-none d-dark-mode-block"
                                src="{{asset('assets/img/imagesa/OSIWA-Grant-of-80000.png')}}" alt="Google Ads">
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-light rounded-3" data-aos="zoom-in" data-aos-easing="ease-out-back"
                            data-aos-delay="500">
                            <img src="{{asset('assets/img/imagesa/ie.png')}}" alt="Facebook">
                        </div>
                    </div>
                </div>
                <div class="d-lg-none text-center pt-4 mt-2 mt-md-3" data-aos="zoom-in" data-aos-easing="ease-out-back"
                    data-aos-delay="900">
                    <a class="btn btn-primary" href="#">See all tools</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
{{-- <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
    <h2 class="h1 text-center pb-3 pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-md-3 mt-lg-0 mb-3 mb-lg-4">Our benefits</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 gy-4 gy-sm-5 gx-4 pb-3 pb-md-4 pb-lg-5 mb-md-3 mb-lg-0">

        <!-- Item -->
        <div class="col text-center">
            <div class="ratio ratio-1x1 position-relative mx-auto mb-3 mb-sm-4" style="width: 68px;">
                <i
                    class="ai-search-settings text-primary fs-1 d-flex align-items-center justify-content-center position-absolute start-0"></i>
                <svg class="position-absolute top-0 start-0 text-primary" width="68" height="68" viewBox="0 0 68 68"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M56.0059 60.5579C44.1549 78.9787 18.0053 58.9081 6.41191 46.5701C-2.92817 35.5074 -2.81987 12.1818 11.7792 3.74605C30.0281 -6.79858 48.0623 7.40439 59.8703 15.7971C71.6784 24.1897 70.8197 37.5319 56.0059 60.5579Z"
                        fill-opacity="0.1"></path>
                </svg>
            </div>
            <h3 class="h4 pb-2 mb-1">Community</h3>
            <p class="fs-sm mb-0">Join our thriving community of innovators.</p>
        </div>

        <!-- Item -->
        <div class="col text-center">
            <div class="ratio ratio-1x1 position-relative mx-auto mb-3 mb-sm-4" style="width: 68px;">
                <i
                    class="ai-bulb-alt text-primary fs-1 d-flex align-items-center justify-content-center position-absolute start-0"></i>
                <svg class="position-absolute top-0 start-0 text-primary" width="68" height="68" viewBox="0 0 68 68"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M65.0556 29.2672C75.4219 46.3175 48.5577 59.7388 33.8299 64.3181C21.0447 67.5599 1.98006 58.174 0.888673 42.8524C-0.475555 23.7004 18.3473 14.5883 29.9289 8.26059C41.5104 1.93285 52.0978 7.9543 65.0556 29.2672Z"
                        fill-opacity="0.1"></path>
                </svg>
            </div>
            <h3 class="h4 pb-2 mb-1">Foundation</h3>
            <p class="fs-sm mb-0">Enabling Social Development Partner through collaboration</p>
        </div>

        <!-- Item -->
        <div class="col text-center">
            <div class="ratio ratio-1x1 position-relative mx-auto mb-3 mb-sm-4" style="width: 68px;">
                <i
                    class="ai-circle-check-filled text-primary fs-2 d-flex align-items-center justify-content-center position-absolute start-0"></i>
                <svg class="position-absolute top-0 start-0 text-primary" width="68" height="68" viewBox="0 0 68 68"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.61057 18.2783C10.8205 -1.22686 39.549 7.51899 53.3869 14.3301C64.8949 20.7749 72.2705 40.7038 62.5199 52.5725C50.3318 67.4085 30.4034 61.0689 17.6454 57.6914C4.88745 54.314 1.3482 42.6597 6.61057 18.2783Z"
                        fill-opacity="0.1"></path>
                </svg>
            </div>
            <h3 class="h4 pb-2 mb-1">Spaces</h3>
            <p class="fs-sm mb-0">Workspace to meet and collaborate with like minds.</p>
        </div>

        <!-- Item -->
        <div class="col text-center">
            <div class="ratio ratio-1x1 position-relative mx-auto mb-3 mb-sm-4" style="width: 68px;">
                <i
                    class="ai-rocket text-primary fs-2 d-flex align-items-center justify-content-center position-absolute start-0"></i>
                <svg class="position-absolute top-0 start-0 text-primary" width="68" height="68" viewBox="0 0 68 68"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9.34481 53.5078C-7.24653 42.4218 11.4487 18.9206 22.8702 8.55583C33.0946 0.223307 54.3393 0.690942 61.7922 14.1221C71.1082 30.9111 57.886 47.1131 50.0546 57.7358C42.2233 68.3586 30.084 67.3653 9.34481 53.5078Z"
                        fill-opacity="0.1"></path>
                </svg>
            </div>
            <h3 class="h4 pb-2 mb-1">Consultation</h3>
            <p class="fs-sm mb-0">Strategic and technology solutions.</p>
        </div>
    </div>
</section> --}}

<!-- Review -->
{{-- <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
    <h2 class="h1 text-center pb-3 pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-md-3 mt-lg-0 mb-3 mb-lg-4">Reviews</h2>
    <div class="gy-4 gy-sm-5 gx-4 pb-3 pb-md-4 pb-lg-5 mb-md-3 mb-lg-0">
        <div class='sk-ww-google-reviews' data-embed-id='25446683'></div>

    </div>
</section> --}}

<!-- Testimonials (Slider) -->
{{-- <section class="container">
    <div class="card border-0 bg-primary bg-opacity-10 position-relative overflow-hidden">
        <svg class="d-block position-absolute top-0 start-0 text-white text-dark-mode-dark" width="125" height="99"
            viewBox="0 0 125 99" fill="none" stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M-17.819-8.269c-.305.249-.567.498-.814.791-1.018 1.172-1.585 2.695-2.08 4.204-4.145 12.479-9.482 29.206-10.223 42.652-.553 10.063 2.516 19.232 8.885 27.317 9.729 12.347 18.367 9.096 32.037 9.887 16.084.937 25.391 8.173 39.497 16.156 13.103 7.426 27.427 6.943 39.163-1.128 13.859-9.521 26.045-30.056 30.495-46.387 4.494-16.493 8.071-34.611.247-51.865-12.273-27.053-55.726-15.233-74.457-11.996-8.827 1.523-17.131 5.829-26.176 6.708-5.73.556-11.547-.527-17.349-.059-5.25.425-14.935.234-19.225 3.72z">
            </path>
            <path
                d="M-3.201 8.561c-.582.923-1.003 1.992-1.28 3.105-2.414 9.594-4.974 20.77-4.552 29.792.175 3.589.945 7.016 2.458 10.282 1.323 2.871 3.127 5.595 5.395 8.188 7.329 8.378 13.801 6.459 23.631 7.162 11.721.849 18.862 5.727 29.143 10.795 9.467 4.658 19.705 3.882 28.285-2.402 10.049-7.323 18.571-22.058 21.581-33.937 3.054-12.054 5.104-25.134-.742-37.438-9.074-19.188-39.54-11.981-53.836-9.828-7.199 1.084-14.979 4.409-22.468 5.463-2.429.337-4.683.483-6.588.469-2.516.234-5.002.601-7.358 1.435C6.499 3.054-.074 4.474-2.692 7.829c-.204.234-.349.483-.509.732z">
            </path>
            <path
                d="M12.237 24.598c-.189.63-.407 1.304-.48 2.007-.625 6.781-.509 12.23 1.12 16.932.625 1.787 1.44 3.545 2.763 5.288 1.134 1.494 2.487 2.944 4.043 4.35 4.915 4.423 9.249 3.823 15.226 4.423 7.344.747 12.303 3.296 18.803 5.419 5.831 1.904 11.983.806 17.393-3.662C77.329 54.2 82.186 45.28 83.771 37.854c1.6-7.617 2.109-15.658-1.745-23.025-5.904-11.293-23.355-8.774-33.229-7.66-5.555.63-12.826 3.047-18.774 4.233-2.283.454-4.203.791-5.41.894a14.19 14.19 0 0 0-5.148 2.973c-2.69 2.432-6.151 5.39-7.082 8.656-.058.234-.087.469-.146.674z">
            </path>
            <path
                d="M31.449 24.407c-3.548 2.915-5.337 11.454-3.766 16.243 2.021 6.166 4.77 4.409 10.194 5.258 9.962 1.567 16.666 6.796 24.475-2.666 8.725-10.56 1.251-23.538-11.605-23.142-5.831.176-17.756 3.676-19.298 4.306z">
            </path>
        </svg>
        <svg class="d-block position-absolute bottom-0 end-0 text-info opacity-20" width="140" height="86"
            viewBox="0 0 140 86" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1.56155 84.728C3.89813 95.3168 8.77193 105.696 14.3618 114.354C31.1345 140.282 61.2598 159.203 93.1024 149.868C115.683 143.25 136.909 120.078 146.906 99.6379C157.262 78.4816 157.784 62.3169 149.314 40.7686C138.656 13.647 114.088 -10.3284 84.9291 4.90565C72.6616 11.3094 61.6112 19.2912 48.9043 25.2334C37.333 30.6501 22.7611 33.4689 12.9718 42.2129C0.148055 53.665 -1.80519 69.4006 1.56155 84.728Z">
            </path>
        </svg>
        <svg class="d-block position-absolute text-danger opacity-20" width="100" height="109" viewBox="0 0 100 109"
            fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="right: 60px; bottom: 62px;">
            <path
                d="M13.0417 15.1485C18.7381 10.3806 25.7233 6.78779 32.3773 4.42805C52.3217 -2.62478 76.5803 -0.291377 89.9528 18.0914C99.436 31.1261 101.262 52.5761 98.137 67.8474C94.9071 83.6571 88.4295 92.6458 74.8221 100.795C57.6962 111.053 34.339 113.786 24.8896 93.3249C20.9119 84.7197 18.2546 75.7674 13.8455 67.2289C9.83276 59.4504 3.10546 51.8265 1.45115 42.988C-0.716922 31.4112 4.80452 22.0566 13.0417 15.1485Z">
            </path>
        </svg>
        <div class="card-body position-relative z-2 px-lg-0 py-lg-5">
            <div class="row py-2 py-sm-1 py-md-3 py-lg-4 py-xl-5">
                <div class="col-md-4 col-lg-3 offset-lg-1 mb-3 mb-md-0">

                    <!-- Binded items -->
                    <div class="binded-content">

                        <!-- Item -->
                        <div class="binded-item active" id="author1">
                            <img class="d-block rounded-circle mb-3" src="assets/img/avatar/13.jpg" width="86"
                                alt="Lilianna Bocouse">
                            <h4 class="mb-0">Lilianna Bocouse</h4>
                            <p class="fs-lg text-body-secondary mb-0">Head of Marketing</p>
                        </div>

                        <!-- Item -->
                        <div class="binded-item" id="author2">
                            <img class="d-block rounded-circle mb-3" src="assets/img/avatar/14.jpg" width="86"
                                alt="Darell Steward">
                            <h4 class="mb-0">Darell Steward</h4>
                            <p class="fs-lg text-body-secondary mb-0">Project Manager</p>
                        </div>

                        <!-- Item -->
                        <div class="binded-item" id="author3">
                            <img class="d-block rounded-circle mb-3" src="assets/img/avatar/15.jpg" width="86"
                                alt="Annette Black">
                            <h4 class="mb-0">Annette Black</h4>
                            <p class="fs-lg text-body-secondary mb-0">Lead Designer</p>
                        </div>

                        <!-- Item -->
                        <div class="binded-item" id="author4">
                            <img class="d-block rounded-circle mb-3" src="assets/img/avatar/16.jpg" width="86"
                                alt="Ralph Edwards">
                            <h4 class="mb-0">Ralph Edwards</h4>
                            <p class="fs-lg text-body-secondary mb-0">CEO, Co-Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-7">

                    <!-- Swiper slider -->
                    <div class="swiper" data-swiper-options='{
                  "spaceBetween": 40,
                  "loop": true,
                  "autoHeight": true,
                  "bindedContent": true,
                  "pagination": {
                    "el": "#testimonials-bullets",
                    "clickable": true
                  }
                }'>
                        <div class="swiper-wrapper">

                            <!-- Item -->
                            <div class="swiper-slide" data-swiper-binded="#author1">
                                <p class="text-dark lead mb-0">“Around provides us with the detailed and accurate data
                                    we need to make strategic decisions. All tools are constantly being improved and
                                    contain a lot of useful and interesting information. Thanks to Around, we can
                                    constantly analyze our big data quickly and efficiently.”</p>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide" data-swiper-binded="#author2">
                                <p class="text-dark lead mb-0">“Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Integer ac pretium dui. Aliquam rutrum justo lorem, in efficitur odio efficitur vel.
                                    Integer mattis, neque malesuada sagittis porttitor, enim tortor ullamcorper diam, id
                                    eleifend sem mauris at turpis. Curabitur sed nisi nec ligula dictum maximus eu ut
                                    ante.”</p>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide" data-swiper-binded="#author3">
                                <p class="text-dark lead mb-0">“Quisque rutrum sit amet magna sit amet tristique.
                                    Vivamus rhoncus ac purus vitae convallis. Aliquam erat volutpat. Proin egestas,
                                    mauris ut semper semper, ipsum felis mattis ligula, et porttitor ante arcu nec ante.
                                    Aliquam congue est eu turpis sollicitudin, et ullamcorper tortor aliquam.”</p>
                            </div>

                            <!-- Item -->
                            <div class="swiper-slide" data-swiper-binded="#author4">
                                <p class="text-dark lead mb-0">“Vestibulum faucibus lectus eget augue pharetra, quis
                                    semper lectus gravida. Vestibulum pretium in elit sed iaculis. Curabitur elementum
                                    turpis at ipsum molestie, id maximus odio tincidunt. Praesent id lacinia orci.
                                    Phasellus at varius arcu. Ut nec lobortis velit. Mauris vel risus quis lacus
                                    placerat fringilla.”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Swiper pagination (bullets) -->
    <div class="swiper-pagination position-relative bottom-0 pt-4 mt-2 mt-md-3" id="testimonials-bullets"></div>
</section> --}}


<!-- Resources (Blog) -->
<section class="bg-primary bg-opacity-10 py-5">
    <div class="container py-sm-2 pt-md-3 py-lg-2 py-xl-4 py-xxl-5">
        <h3 class="h1 text-center pt-2 pt-sm-3 pb-3 mb-3 mb-lg-4">Blog News</h3>

        <!-- Swiper slider -->
        <div class="swiper" data-swiper-options='
            {
              "spaceBetween": 24,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "breakpoints": {
                "576": { "slidesPerView": 2 },
                "992": { "slidesPerView": 3 }
              }
            }
          '>
            <div class="swiper-wrapper">

                @foreach ($news as $n)
                <!-- Article -->
                <article class="swiper-slide h-auto">
                    <div class="card border-0 h-100">
                        <div class="card-body pb-4">
                            <div class="d-flex align-items-center mb-4 mt-n1">
                                <span class="fs-sm text-body-secondary">{{date('d M, Y', strtotime($n->created_at))}}</span>
                                <span class="fs-xs opacity-20 mx-3">|</span>
                                <a class="badge text-nav fs-xs border"
                                    href="{{route('main.single_blog', ['title'=>$n->title])}}">Inspiration</a>
                            </div>
                            <h3 class="h4 card-title">
                                <a href="{{route('main.single_blog', ['title'=>$n->title])}}">{{$n->title}}</a>
                            </h3>
                            <?php
                                $words = explode(" ", $n->description);
                                $first20Words = implode(" ", array_slice($words, 0, 15));
                            ?>
                            <p class="card-text">{{$first20Words}}...</p>
                        </div>
                        {{-- <div class="card-footer pt-3">
                            <a class="d-flex align-items-center text-decoration-none pb-2"
                                href="{{route('main.single_blog', ['title'=>$n->title])}}">
                                <img class="rounded-circle" src="assets/img/avatar/07.jpg" width="48" alt="Post author">
                                <h6 class="ps-3 mb-0">Ashley Best</h6>
                            </a>
                        </div> --}}
                    </div>
                </article>
                @endforeach


            </div>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative bottom-0 mt-2 pt-4 d-lg-none"></div>
        </div>

        <!-- Read more button -->
        <div class="text-center pt-4 pb-1 pb-sm-2 pb-md-4 py-lg-5 my-2 mt-lg-0">
            <a class="btn btn-outline-primary" href="{{route('main.coworking')}}">Read More</a>
        </div>
    </div>
</section>


<!-- Contact form -->
<section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-2">
        <div class="col">
            <h3 class="h1 text-center pt-2 pt-sm-3">Contact Us</h3>
            @livewire('user.contact_us')
        </div>
        <div class="col">
            <!-- Map for screens < 992px -->
            <div class="d-lg-none rounded-5 overflow-hidden">
                <div class="interactive-map" data-map-options='{
                "center": [9.0862597,7.4579765],
                "zoom": 12,
                "scrollWheelZoom": false,
                "markers": [
                  {
                    "position": [9.0862597,7.4979765],
                    "popup": "<div class=&#39;p-3&#39;><h6>Hi, we are in Abuja</h6><p class=&#39;fs-sm pt-1 mt-n3 mb-0&#39;>Located at Maitama Amusement Park.</p></div>"
                  },
                  {
                    "position": [9.069346, 7.492841],
                    "popup": "<div class=&#39;p-3&#39;><h6>Hi, we are in Abuja</h6><p class=&#39;fs-sm pt-1 mt-n3 mb-0&#39;>Located at Harrow Park.</p></div>"
                  }
                ]
              }' style="height: 350px;"></div>
            </div>
            <div class="position-relative overflow-hidden rounded-5 px-lg-5 mt-lg-3 mt-xl-5">
                <div class="d-none d-xxl-block" style="height: 160px;"></div>
                <div class="d-none d-xl-block d-xxl-none" style="height: 130px;"></div>
                <div class="d-none d-lg-block d-xl-none" style="height: 100px;"></div>
                <div class="d-block position-relative z-5 ms-lg-5" style="max-width: 530px;">
                    <div class="card border-0">
                        {{-- <div class="card-body">
                            <h2 class="h4 mb-sm-4">At TheCans Park</h2>
                            <div class="d-sm-flex mb-3">
                                <div class="mb-3 mb-sm-0 me-sm-4">
                                    <p class="mb-0"><a target="__blank"
                                            href="https://maps.app.goo.gl/46gqqKWbzAU92X976">Ibrahim
                                            Babangida Blvd, Maitama, Abuja 904101, Federal Capital Territory.</a></p>
                                    <p class="mb-0">+234 907 6599 631</p>
                                </div>
                                <div class="d-none d-sm-block border-end"></div>
                                <div class="ms-sm-4">
                                    <p class="mb-0"><a target="__blank"
                                            href="https://maps.app.goo.gl/Y8QuBb4JVX2YTWwP8">Ahmadu
                                            Bello Way, Central Business District, Wuse 2, Abuja 102215</a></p>
                                    <p class="mb-0">+234 907 6599 631</p>
                                </div>
                            </div><a href="milto:hello@thecans.ng">hello@thecans.ng</a>
                        </div> --}}
                    </div>
                </div>
                <div class="d-none d-xxl-block" style="height: 160px;"></div>
                <div class="d-none d-xl-block d-xxl-none" style="height: 130px;"></div>
                <div class="d-none d-lg-block d-xl-none" style="height: 100px;"></div>

                <!-- Map for screens > 992px -->
                <div class="d-none d-lg-block interactive-map position-absolute z-1 top-0 start-0 w-100 h-100"
                    data-map-options='{
                "center": [9.0862597,7.4579765],
                "zoom": 13,
                "scrollWheelZoom": false,
                "markers": [
                  {
                    "position": [9.0862597,7.4979765],
                    "popup": "<div class=&#39;p-3&#39;><h6>Hi, we are open Abuja</h6><p class=&#39;fs-sm pt-1 mt-n3 mb-0&#39;><a target=&#39;__blank&#39; href=&#39;https://maps.app.goo.gl/46gqqKWbzAU92X976&#39; > At Maitama Amusement Park.</a></p></div>"
                  },
                  {
                    "position": [9.069346, 7.492841],
                    "popup": "<div class=&#39;p-3&#39;><h6>Hi, we are open Abuja</h6><p class=&#39;fs-sm pt-1 mt-n3 mb-0&#39;> <a target=&#39;__blank&#39; href=&#39;https://maps.app.goo.gl/Y8QuBb4JVX2YTWwP8&#39; >  At Harrow Park. </a></p></div>"
                  }
                ]
              }'></div>
            </div>
        </div>

    </div>
</section>
@endsection

@section('script')
<script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>
@endsection
