@extends('layouts.main.index')

@section('content')
<section class="container pt-5 pb-sm-3 mt-5 mb-2 mb-md-3 mb-lg-4 mb-xxl-5">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Spaces</li>
        </ol>
    </nav>

    <!-- Page title -->
    <h1 class="pb-3">Our Spaces</h1>
    @include('layouts.flash')
    <p class="mb-5">Experience a unique and sustainable coworking environment at The CANs Park, designed for
        startups, entrepreneurs, and SMEs. Our spaces are built from refurbished containers, promoting
        eco-friendliness while providing all the amenities you need to thrive.</p>

    @if (count($spaces)>0)
    @foreach ($spaces as $space)
    <!-- Item -->
    <div id="spacesection{{$space->id}}"></div>
    <div class="row align-items-center pt-xl-2 pb-5 mb-lg-2 mb-xl-3 mb-xxl-4">
        <div class="col-md-7 col-lg-6 mb-4 mb-md-0">
            <a class="d-block position-relative" href="#">
                <div class="bg-primary rounded-5 position-absolute top-0 start-0 w-100 h-100 aos-init aos-animate"
                    data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div>
                <img class="d-block position-relative z-2 w-90 mx-auto aos-init aos-animate" src="{{$space->image}}"
                    width="500" alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250">
            </a>
        </div>
        <div class="col-md-5 col-xl-4 offset-lg-1 aos-init aos-animate" data-aos="fade-up" data-aos-duration="400"
            data-aos-offset="170">
            <div class="ps-md-3 ps-lg-0">
                <h2 class="h4">{{$space->name}}</h2>
                <p class="fs-sm pb-2 pb-lg-2 mb-1">{{$space->description}}</p>
                <div class="d-flex align-items-center pt-2">
                    {{-- <h6 class="text-body mb-3 me-3">Benefits:</h6> --}}
                    <ul>
                        <?php $benefits = explode(', ', $space->benefit); ?>
                        @foreach ($benefits as $b)
                        <li class="d-flex pt-1 mt-0 mx-2 mx-md-0"><i
                                class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>{{$b}}</li>
                        @endforeach
                        <li class="d-flex pt-1 mt-0 mx-2 mx-md-0"><i
                                class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>No. of persons:
                            {{$space->no_of_persons}}</li>
                    </ul>
                </div>
                <div class="d-flex">
                    {{-- <select class="form-control w-50 mx-3" name="booking_type" id="">
                        <option selected default hidden>Select your plan</option>
                        <option disabled></option>
                        <option value="half_day"> Half Day Plan (N {{$space->price_half_day}})</option>
                        <option value="daily"> Daily Plan (N {{$space->price_daily}})</option>
                        <option value="weekly"> Weekly Plan (N {{$space->price_weekly}})</option>
                        <option value="monthly"> Monthly Plan (N {{$space->price_monthly}})</option>
                        <option value=annually"> Annual Plan (N {{$space->price_annually}})</option>
                    </select> --}}
                    <button type="button" class="btn btn-sm btn-outline-dark rounded-pill" data-bs-toggle="modal"
                        data-bs-target="#modalId-{{$space->id}}">Book Space Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Vertically centered modal -->
    <div class="modal fade" id="modalId-{{$space->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{$space->name}}</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body tab-content">
                    <div class="row align-items-center">
                        <div class="col-md-5 col-lg-5 mb-1 mb-md-0">
                            <a href="#" class="d-block position-relative">
                                <div class="bg-info rounded-5 position-absolute top-0 start-0 w-100 h-100"
                                    data-aos="zoom-in" data-aos-duration="600" data-aos-offset="250"></div>
                                <img src="{{$space->image}}" class="d-block position-relative z-2 mx-auto" width="636"
                                    alt="Image" data-aos="fade-in" data-aos-duration="400" data-aos-offset="250">
                            </a>
                        </div>
                        <div class="col-md-7 col-xl-7 offset-lg-0" data-aos="fade-up" data-aos-duration="400"
                            data-aos-offset="170">
                            <div class="ps-md-1 ps-lg-0">
                                <p class="fs-sm pb-1">{{$space->description}}</p>
                                <div class="d-flex align-items-center pt-0">
                                    <ul>
                                        <?php $benefits = explode(', ', $space->benefit); ?>
                                        @foreach ($benefits as $b)
                                        <li class="d-flex pt-1 mt-0 mx-2 mx-md-0"><i
                                                class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>{{$b}}</li>
                                        @endforeach
                                        <li class="d-flex pt-1 mt-0 mx-2 mx-md-0"><i
                                                class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>No. of persons:
                                            {{$space->no_of_persons}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="tab-pane fade show active mt-n2" id="signin" autocomplete="off" method="POST"
                        action="{{route('main.pay')}}">
                        @csrf
                        <input type="hidden" name="booking_id" value="{{rand(1111, 9999)}}">
                        <input type="hidden" name="space_id" value="{{$space->id}}">

                        {{-- <input type="hidden" name="split_code" value="SPL_EgunGUnBeCareful"> --}}

                        <div class="mb-2 mt-3 mb-sm-4">
                            <label for="b_type" class="form-label">Select Booking</label>
                            <select class="form-control" name="booking_type" id="b_type">
                                <option selected default hidden>Select your plan</option>
                                <option disabled></option>
                                <option value="half_day"> Half Day Plan (N {{$space->price_half_day}})</option>
                                <option value="daily"> Daily Plan (N {{$space->price_daily}})</option>
                                <option value="weekly"> Weekly Plan (N {{$space->price_weekly}})</option>
                                <option value="monthly"> Monthly Plan (N {{$space->price_monthly}})</option>
                                {{-- <option value=annually"> Annual Plan (N {{$space->price_annually}})</option> --}}
                            </select>
                        </div>

                        <div class="mb-3 mb-sm-4">
                            <label for="dateFormat" class="form-label">Start Date</label>
                            <input type="text" class="form-control" name="start_date" id="dateFormat-{{$space->id}}"
                                data-format='{"date": true, "delimiter": "-", "datePattern": ["Y", "m", "d"]}'
                                placeholder="yyyy-mm-dd" onblur="checkDate({{$space->id}})">

                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3 mb-sm-4">
                                    <label for="name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="first_name" id="name"
                                        placeholder="Mukeey">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3 mb-sm-4">
                                    <label for="name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" id="name"
                                        placeholder="Mukeey">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 mb-sm-4">
                            <label for="email1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email1" name="email"
                                placeholder="mualiyuoox@gmail.com">
                        </div>

                        <div class="mb-3 mb-sm-4">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone"
                                placeholder="eg., 08167236629">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Book Space Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endforeach
    @endif

</section>

<section class="bg-secondary pt-5 pb-4">
    <div class="container py-lg-2 py-xl-4 py-xxl-5">
        <div class="row mt-1 pt-sm-2 pt-md-3 pt-lg-4">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <h2 class="h1">Additional Perks</h2> {{-- Benefits of working with us --}}
                {{-- <p class="pb-1 pb-md-0 mb-4 mb-md-5">Morbi et massa fames ac scelerisque sit commodo dignissim
                    faucibus vel quisque proin lectus.</p> --}}
                <h6 class="mb-0">Send your request!</h6>

                <!-- Contact form -->
                @livewire('user.contact_us')
                {{-- <form class="needs-validation row g-4" novalidate="">
                    <div class="col-lg-10">
                        <label class="form-label fs-base" for="name">Name</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Your name" required=""
                            id="name">
                        <div class="invalid-feedback">Please enter your name!</div>
                    </div>
                    <div class="col-lg-10">
                        <label class="form-label fs-base" for="email">Email</label>
                        <input class="form-control form-control-lg" type="email" placeholder="Email address" required=""
                            id="email">
                        <div class="invalid-feedback">Please provide a valid email address!</div>
                    </div>
                    <div class="col-lg-10">
                        <label class="form-label fs-base" for="message">Message</label>
                        <textarea class="form-control form-control-lg" placeholder="Your message" rows="4" required=""
                            id="message"></textarea>
                        <div class="invalid-feedback">Please write your message!</div>
                    </div>
                    <div class="col-lg-10">
                        <button class="btn btn-lg btn-dark rounded-pill mt-2" type="submit">Send request</button>
                    </div>
                </form> --}}
            </div>

            <!-- Benefits -->
            <div class="col-lg-7 col-xl-6 offset-xl-1">
                <div class="row row-cols-1 row-cols-sm-2">
                    <div class="col">

                        <!-- Card -->
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <svg class="d-block mb-3" width="36" height="36" viewBox="0 0 36 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="text-warning"
                                        d="M31.5412 14.6389C30.9843 23.6874 23.7303 30.927 14.6641 31.4828V35.9999H36.0671V14.6389H31.5412Z"
                                        fill="currentColor"></path>
                                    <path class="text-primary"
                                        d="M13.5469 27.0373C21.0277 27.0373 27.0922 20.9848 27.0922 13.5186H13.5469V27.0373Z"
                                        fill="currentColor"></path>
                                    <path class="text-warning"
                                        d="M26.3276 9.03734C24.475 3.77395 19.4522 0 13.5453 0C6.06443 0 0 6.0525 0 13.5187C0 19.4139 3.78139 24.4269 9.05514 26.2758V9.03734H26.3276Z"
                                        fill="currentColor"></path>
                                </svg>
                                <h3 class="h4" style="max-width: 180px;">Shy Corner</h3>
                                <p class="card-text fs-sm">A serene praying corner for our Muslim friends.
                                </p>
                            </div>
                        </div>

                        <!-- Card -->
                        <div class="card border-0 bg-primary" data-bs-theme="dark">
                            <div class="card-body">
                                <svg class="d-block mb-3" width="36" height="36" viewBox="0 0 36 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.7496 11.4756C25.3743 8.85089 25.3743 4.59539 22.7496 1.97068C20.1249 -0.654032 15.8694 -0.654033 13.2447 1.97068C10.6199 4.59539 10.6199 8.85089 13.2447 11.4756C15.8694 14.1003 20.1249 14.1003 22.7496 11.4756Z"
                                        fill="white"></path>
                                    <path class="text-warning"
                                        d="M13.2173 26.3746C14.0903 24.3107 15.2282 22.395 16.6119 20.6516C12.48 16.1818 6.56698 13.3827 0 13.3827V36H11.2733C11.2733 32.6628 11.9274 29.4243 13.2173 26.3746Z"
                                        fill="currentColor"></path>
                                    <path class="text-warning"
                                        d="M36.0001 36.0001V13.3828C23.5089 13.3828 13.3828 23.5089 13.3828 36.0001H36.0001Z"
                                        fill="currentColor"></path>
                                </svg>
                                <h3 class="h4" style="max-width: 180px;">Reception Area</h3>
                                <p class="card-text fs-sm text-white">Welcoming visitors with professionalism.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col d-flex flex-column pt-4 mt-sm-3">

                        <!-- Card -->
                        <div class="card border-0 order-sm-2 mb-4 mb-sm-0">
                            <div class="card-body">
                                <svg class="d-block mb-3" width="36" height="36" viewBox="0 0 36 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="text-warning"
                                        d="M31.5412 14.6389C30.9843 23.6874 23.7303 30.927 14.6641 31.4828V35.9999H36.0671V14.6389H31.5412Z"
                                        fill="currentColor"></path>
                                    <path class="text-primary"
                                        d="M13.5469 27.0373C21.0277 27.0373 27.0922 20.9848 27.0922 13.5186H13.5469V27.0373Z"
                                        fill="currentColor"></path>
                                    <path class="text-warning"
                                        d="M26.3276 9.03734C24.475 3.77395 19.4522 0 13.5453 0C6.06443 0 0 6.0525 0 13.5187C0 19.4139 3.78139 24.4269 9.05514 26.2758V9.03734H26.3276Z"
                                        fill="currentColor"></path>
                                </svg>
                                <h3 class="h4" style="max-width: 200px;">Information Desk</h3>
                                <p class="card-text fs-sm">Assistance and support for all your needs.</p>
                            </div>
                        </div>

                        <!-- Card -->
                        <div class="card border-0 bg-primary order-sm-1 mb-sm-4" data-bs-theme="dark">
                            <div class="card-body">
                                <svg class="d-block mb-3" width="36" height="36" viewBox="0 0 36 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.4844 22.4814H36.0031V36.0001H22.4844V22.4814Z" fill="white"></path>
                                    <path class="text-warning"
                                        d="M8.96266 18C8.96266 13.0088 13.0088 8.96266 18 8.96266C22.9912 8.96266 27.0373 13.0088 27.0373 18H36C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36V27.0373C13.0088 27.0373 8.96266 22.9912 8.96266 18Z"
                                        fill="currentColor"></path>
                                </svg>
                                <h3 class="h4" style="max-width: 180px;">Microwave</h3>
                                <p class="card-text fs-sm text-white">Convenient kitchen facilities for all users.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Gallery -->
{{-- <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
    <div class="text-center pb-3 pt-sm-3 pt-md-4 mx-auto mt-xxl-1 mb-3 mb-lg-4" style="max-width: 705px;">
        <h2 class="h1">Gallery</h2>
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
</section> --}}

{{-- <section class="container py-4 pt-sm-5 pb-md-5 my-2 my-lg-3 my-xxl-4">
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

                <div class="d-flex d-md-none d-lg-flex justify-content-between w-100 pb-2 pb-xl-2 mb-2 mb-sm-2 mb-xl-2"
                    style="max-width: 440px;">
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
</section> --}}


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
                    href="https://www.youtube.com/embed/AJgQ7QY6Vqc?si=sM0pCUlh17PMTZCX" data-bs-toggle="video"
                    aria-label="Play video" data-lg-id="22bab652-b541-4121-9e4a-19bb150d2950">
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


@section('script')
<script>
    function checkDate(index) {
        var inputDate = document.getElementById('dateFormat-' + index).value;
        var today = new Date().toISOString().split('T')[0];

        if (inputDate < today) {
            alert('Start date cannot be in the past.');
            document.getElementById('dateFormat-' + index).value = '';
        }
    }
</script>
@endsection
