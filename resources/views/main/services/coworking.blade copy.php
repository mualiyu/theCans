@extends('layouts.main.index')

@section('content')
<!-- Hero with contact form -->
<section class="pt-5" style="background-image: url(assets/img/landing/coworking-space/parallax-image.jpg);">
    <div class="container position-relative z-2 pt-5 mt-3 mt-sm-4 mt-md-5">
        <div class="row pt-xl-3 pt-xxl-4">
            <div class="col-lg-7 col-xxl-6">
                <h1 class="display-3 text-center text-lg-start">Your Eco-Friendly Coworking Space in Abuja</h1>
            </div>
            <div class="col-lg-5 offset-xxl-1 pt-sm-3">
                {{-- <p class="fs-lg text-center text-lg-start pb-3 pb-sm-0 pb-md-2 mb-4 mb-sm-5">Magna in purus in
                    facilisis pretium eleifend in nullamer magna morbi eleifend vel convallis quis utrices neque tellus
                    purus in facilisis pretium eleifend vel convallis.</p> --}}

                <!-- Contact form -->
                <div class="card border-0 bg-primary py-4 px-xxl-4">
                    <form class="card-body" data-bs-theme="dark">
                        <h2 class="h3 card-title text-white text-center pb-2 pb-xxl-3">Reserve your spot</h2>
                        <div class="mb-3">
                            <label class="form-label fs-base" for="space">Available Space</label>
                            <select class="form-select form-select-lg" required id="space">
                                <option value="" disabled>Choose space</option>
                                <option value="Coworking main room">Coworking main room</option>
                                <option value="Coworking terrace">Coworking terrace</option>
                                <option value="Skype room 1" selected>Skype room 1</option>
                                <option value="Skype room 2">Skype room 2</option>
                                <option value="Meeting room 1">Meeting room 1</option>
                                <option value="Meeting room 2">Meeting room 2</option>
                                <option value="Gaming room">Gaming room</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fs-base" for="company">Company size</label>
                            <input class="form-control form-control-lg" type="number" value="1" required id="company">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date and time</label>
                            <div class="position-relative">
                                <input class="form-control form-control-lg date-picker pe-5" type="text"
                                    placeholder="Choose date/time"
                                    data-datepicker-options='{"enableTime": true, "altInput": true, "altFormat": "F j, Y H:i", "dateFormat": "Y-m-d H:i"}'>
                                <i
                                    class="ai-calendar position-absolute top-50 end-0 translate-middle-y fs-lg text-white opacity-80 me-3"></i>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fs-base" for="email">Email address</label>
                            <input class="form-control form-control-lg" type="email" placeholder="johnDoe@example.com"
                                required id="email">
                        </div>
                        <div
                            class="d-flex flex-column flex-sm-row flex-lg-column flex-xxl-row align-items-center justify-content-center justify-content-lg-start pt-3 pt-xxl-4">
                            <button
                                class="btn btn-light w-100 w-sm-auto w-lg-100 w-xxl-auto mb-2 mb-sm-0 mb-lg-2 mb-xxl-0 me-sm-3 me-lg-0 me-xxl-3"
                                type="submit">Book space now</button>
                            <a class="d-flex align-items-center fs-sm fw-semibold text-white text-decoration-none px-3 py-2"
                                href="tel:+2349076599631">
                                <i class="ai-phone fs-xl me-2"></i>
                                +234&nbsp;907 6599 631
                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Gallery -->
<section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
    <div class="text-center pb-3 pt-sm-3 pt-md-4 mx-auto mt-xxl-1 mb-3 mb-lg-4" style="max-width: 705px;">
        <h2 class="h1">Our space</h2>
        <p class="mb-0">Experience a unique and sustainable coworking environment at The CANs Park, designed for
            startups, entrepreneurs, and SMEs. Our spaces are built from refurbished containers, promoting
            eco-friendliness while providing all the amenities you need to thrive.</p>
    </div>

    <!-- Navs -->
    <ul class="nav nav-tabs flex-nowrap overflow-auto text-nowrap w-100 mx-auto pb-3 mb-3 mb-lg-4" role="tablist"
        style="max-width: 700px;">
        <li class="nav-item mb-0">
            <a class="nav-link active" href="#" role="tab">Maitama Park</a>
        </li>
        <li class="nav-item mb-0">
            <a class="nav-link" href="#" role="tab">Harror Park</a>
        </li>
    </ul>

    <!-- Gallery grid -->
    <div class="gallery row g-4 g-sm-3 g-lg-4 pb-2 pb-sm-4 pb-xl-5 mb-lg-2 mb-xl-0 mb-xxl-2">
        <div class="col-sm-5">
            <a class="d-block gallery-item card-hover zoom-effect"
                href="assets/img/landing/coworking-space/gallery/01.jpg">
                <div
                    class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                    <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                </div>
                <div class="zoom-effect-wrapper rounded-5">
                    <img class="zoom-effect-img" src="assets/img/landing/coworking-space/gallery/th01.jpg"
                        alt="Open space">
                </div>
            </a>
        </div>
        <div class="col-sm-7">
            <a class="d-block gallery-item card-hover zoom-effect"
                href="assets/img/landing/coworking-space/gallery/02.jpg">
                <div
                    class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                    <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                </div>
                <div class="zoom-effect-wrapper rounded-5">
                    <img class="zoom-effect-img" src="assets/img/landing/coworking-space/gallery/th02.jpg"
                        alt="Kitchen">
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a class="d-block gallery-item card-hover zoom-effect"
                href="assets/img/landing/coworking-space/gallery/03.jpg">
                <div
                    class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                    <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                </div>
                <div class="zoom-effect-wrapper rounded-5">
                    <img class="zoom-effect-img" src="assets/img/landing/coworking-space/gallery/th03.jpg"
                        alt="Lounge zone">
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a class="d-block gallery-item card-hover zoom-effect"
                href="assets/img/landing/coworking-space/gallery/04.jpg" style="max-width: 458px;">
                <div
                    class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                    <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                </div>
                <div class="zoom-effect-wrapper rounded-5">
                    <img class="zoom-effect-img" src="assets/img/landing/coworking-space/gallery/th04.jpg"
                        alt="Open space">
                </div>
            </a>
        </div>
        <div class="col-sm-4">
            <a class="d-block gallery-item card-hover zoom-effect"
                href="assets/img/landing/coworking-space/gallery/05.jpg">
                <div
                    class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-5 overflow-hidden z-2 opacity-0">
                    <i class="ai-zoom-in fs-2 text-white position-relative z-2"></i>
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-40"></div>
                </div>
                <div class="zoom-effect-wrapper rounded-5"><img class="zoom-effect-img "
                        src="assets/img/landing/coworking-space/gallery/th03.jpg" alt="Cafe"></div>
            </a>
        </div>
    </div>
</section>

<section class="container py-4 pt-sm-5 pb-md-5 my-2 my-lg-3 my-xxl-4">
    @if (count($spaces)>0)
    @foreach ($spaces as $space)

    <!-- Item -->
    <div class="row align-items-center py-2 py-sm-2 py-lg-3 my-sm-2 my-md-2 my-lg-0 my-xl-1 my-xxl-3">
        <div class="col-md-5 col-lg-5 col-xl-6 offset-xl-1 order-md-2 pb-1 pb-sm-2 pb-md-0 mb-4 mb-md-0"><img
                class="d-block rounded-5" src="{{$space->image}}" style="float:right;" alt="Image"></div>
        <div class="col-md-7 col-lg-5 order-md-1">
            <div class="pe-md-4 pe-lg-0">
                <h2 class="h1 pb-sm-2 pb-lg-3">{{$space->name}}</h2>
                <p class="fs-xl mb-lg-4">{{$space->description}}</p>
                <ul class="list-unstyled pb-3 mb-2 mb-lg-2">
                    <?php $benefits = explode(', ', $space->benefit); ?>
                    @foreach ($benefits as $b)
                    <li class="d-flex pt-1 mt-2 mx-2 mx-md-0"><i
                            class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>{{$b}}</li>
                    @endforeach
                </ul>

                <div class="d-flex d-md-none d-lg-flex justify-content-between w-100 pb-2 pb-xl-2 mb-2 mb-sm-2 mb-xl-2" style="max-width: 440px;">
                    <div class="pe-4">
                        <div class="h2 mb-1">₦{{$space->price_daily}}</div>
                        <div class="fs-sm">Price Daily</div>
                    </div>
                    <div class="pe-4">
                        <div class="h2 mb-1">₦{{$space->price_monthly}}
                        </div>
                        <div class="fs-sm">Price Monthly</div>
                    </div>
                    <div>
                        <div class="h2 mb-1">{{$space->no_of_persons}}</div>
                        <div class="fs-sm">No. of persons</div>
                    </div>
                </div>
                <a class="btn btn-primary" href="#">Book Space</a>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</section>


{{-- Virtual tor --}}
<section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
    <div class="row text-center text-md-start pb-3 pt-1 pt-sm-3 pt-md-4 pt-xl-5 mt-lg-2 mt-xl-0 mb-3 mb-lg-4">
        <div class="col-md-6">
            <h2 class="h1 mb-md-0">Virtual Tour of The Spaces</h2>
        </div>
        <div class="col-md-6 pt-2">
            {{-- <p class="mb-0">Morbi et massa fames ac scelerisque sit commodo dignissim aucibus vel quisque proin
                lectus laoreet sem adipiscing sollicitudin erat massa tellus lorem aenean.</p> --}}
        </div>
    </div>
    <div class="rounded-5 overflow-hidden">
        <div class="jarallax ratio ratio-16x9 d-flex align-items-center justify-content-center" data-jarallax=""
            data-speed="0.6">

            <div class="w-auto position-relative p-4">
                <a class="btn btn-icon btn-xl btn-primary rounded-circle stretched-link"
                    href="https://www.youtube.com/watch?v=IxRVa1DbSAg" data-bs-toggle="video" aria-label="Play video"
                    data-lg-id="22bab652-b541-4121-9e4a-19bb150d2950">
                    <i class="ai-play-filled"></i>
                </a>
            </div>

            <div id="jarallax-container-1" class="jarallax-container"
                style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);">
                <div class="jarallax-img"
                    style="background-image: url(&quot;assets/img/landing/coworking-space/parallax-image.jpg&quot;); object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 358px; height: 458.425px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; margin-top: 192.787px; transform: translate3d(0px, -544.938px, 0px);"
                    data-jarallax-original-styles="background-image: url(assets/img/landing/coworking-space/parallax-image.jpg);">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
