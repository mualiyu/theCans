@extends('layouts.main.index')

@section('content')
    <!-- Page title + Сontact form -->
    <section class="container pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
        <h3 class="h1 text-center pt-2 pt-sm-3">Contact Us</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-2">
            <div class="col">
                @livewire('user.contact_us')
            </div>
            <div class="col">
                <div class="d-block position-relative z-5 ms-lg-5 mt-5 pt-3 my-4 ml-5" style="max-width: 530px;">
                    <div class="card border-0">
                        <div class="card-body">
                            <h2 class="h4 mb-sm-4">Visit us at theCans park</h2>
                            <div class="d-sm-flex mb-3">
                                <div class="mb-3 mb-sm-0 me-sm-4">
                                    <p class="mb-0"><a target="__blank" href="https://maps.app.goo.gl/46gqqKWbzAU92X976">Ibrahim
                                            Babangida Blvd, Maitama, Abuja 904101, Federal Capital Territory.</a></p>
                                    <p class="mb-0">+234 907 6599 631</p>
                                </div>
                                <div class="d-none d-sm-block border-end"></div>
                                <div class="ms-sm-4">
                                    <p class="mb-0"><a target="__blank" href="https://maps.app.goo.gl/Y8QuBb4JVX2YTWwP8">Ahmadu
                                            Bello Way, Central Business District, Wuse 2, Abuja 102215</a></p>
                                    <p class="mb-0">+234 907 6599 631</p>
                                </div>
                            </div><a href="milto:hello@thecans.ng">hello@thecans.ng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-cols-1 row-cols-sm-1 row-cols-lg-1">
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
                            <div class="card-body">
                                <h2 class="h4 mb-sm-4">At TheCans Park</h2>
                                <div class="d-sm-flex mb-3">
                                    <div class="mb-3 mb-sm-0 me-sm-4">
                                        <p class="mb-0"><a target="__blank" href="https://maps.app.goo.gl/46gqqKWbzAU92X976">Ibrahim
                                                Babangida Blvd, Maitama, Abuja 904101, Federal Capital Territory.</a></p>
                                        <p class="mb-0">+234 907 6599 631</p>
                                    </div>
                                    <div class="d-none d-sm-block border-end"></div>
                                    <div class="ms-sm-4">
                                        <p class="mb-0"><a target="__blank" href="https://maps.app.goo.gl/Y8QuBb4JVX2YTWwP8">Ahmadu
                                                Bello Way, Central Business District, Wuse 2, Abuja 102215</a></p>
                                        <p class="mb-0">+234 907 6599 631</p>
                                    </div>
                                </div><a href="milto:hello@thecans.ng">hello@thecans.ng</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-xxl-block" style="height: 160px;"></div>
                    <div class="d-none d-xl-block d-xxl-none" style="height: 130px;"></div>
                    <div class="d-none d-lg-block d-xl-none" style="height: 100px;"></div>

                    <!-- Map for screens > 992px -->
                    <div class="d-none d-lg-block interactive-map position-absolute z-1 top-0 start-0 w-100 h-100" data-map-options='{
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
