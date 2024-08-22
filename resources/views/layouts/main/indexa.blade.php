<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO meta tags -->
    <title>TheCans | Innovation Hub</title>
    <meta name="description" content="Around - Multipurpose Bootstrap HTML Template">
    <meta name="keywords"
        content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, light and dark mode, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">

    <!-- Webmanifest + Favicon / App icons -->
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" type="image/png" href="{{asset('assets/img/imagesa/logo.svg')}}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/assets/img/imagesa/logo.svg')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/imagesa/logo.svg')}}">
    <link rel="manifest" href="{{asset('assets/favicon/site.webmanifest')}}">

    <meta name="msapplication-config" content="{{asset('/assets/img/imagesa/logo.svg')}}">
    <meta name="theme-color" content="white">

    <!-- Theme switcher (color modes) -->
    <script src="assets/js/theme-switcher.js"></script>

    <!-- Import Google font (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" id="google-font">

    <!-- Vendor styles -->
    <link rel="stylesheet" media="screen" href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('assets/vendor/aos/dist/aos.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('assets/vendor/lightgallery/css/lightgallery-bundle.min.css')}}">
    {{--
    <link rel="stylesheet" media="screen" href="assets/vendor/leaflet/dist/leaflet.css"> --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- Font icons -->
    <link rel="stylesheet" href="{{asset('assets/icons/around-icons.min.css')}}">

    <!-- Theme styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="{{asset('admin_assets/css/theme.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('assets/css/theme.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/awesome/awesomplete.css')}}" />
    <script src="{{asset('assets/awesome/awesomplete.js')}}"></script>

    <!-- Customizer generated styles -->
    <style id="customizer-styles"></style>

    <!-- Page loading styles -->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #fff;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        [data-bs-theme="dark"] .page-loading {
            background-color: #121519;
        }

        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }

        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }

        .page-loading.active>.page-loading-inner {
            opacity: 1;
        }

        .page-loading-inner>span {
            display: block;
            font-family: "Inter", sans-serif;
            font-size: 1rem;
            font-weight: normal;
            color: #6f788b;
        }

        [data-bs-theme="dark"] .page-loading-inner>span {
            color: #fff;
            opacity: .6;
        }

        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            background-color: #d7dde2;
            border-radius: 50%;
            opacity: 0;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }

        [data-bs-theme="dark"] .page-spinner {
            background-color: rgba(255, 255, 255, .25);
        }

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes spinner {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            50% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }
    </style>

    <script>
        let mode = window.localStorage.getItem('mode'),
        root = document.getElementsByTagName('html')[0];
    if (mode !== undefined && mode === 'dark') {
      root.classList.add('dark-mode');
    } else {
      root.classList.remove('dark-mode');
    }
    </script>
    <!-- Page loading scripts -->
    <script>
        (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading')
          preloader.classList.remove('active')
          setTimeout(function () {
            preloader.remove()
          }, 1500)
        }
      })()
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
</head>


<!-- Body -->

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
            style="display: none; visibility: hidden;" title="Google Tag Manager"></iframe>
    </noscript>


    <!-- Page loading spinner -->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div>
            <span>Loading...</span>
        </div>
    </div>


    <!-- Customizer modal -->
    <div class="modal fade" id="customizer-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Your custom styles</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-4">
                    <p class="mb-3">Grab the generated styles below. Wrap them inside <code>&lt;style&gt;</code> tag and
                        put in the <code>&lt;head&gt;</code> section of your HTML document.</p>
                    <p class="mb-4"><span class="fw-medium">IMPORTANT:</span> In order for these styles to take effect
                        you have to placed them
                        below:<br><code>&lt;link rel=&quot;stylesheet&quot; media=&quot;screen&quot; href=&quot;assets/css/theme.min.css&quot;&gt;</code>
                    </p>
                    <div class="bg-secondary overflow-hidden rounded-4">
                        <pre class="text-wrap bg-transparent border-0 text-dark p-4" id="custom-generated-styles"></pre>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary w-100 w-sm-auto mb-3 mb-sm-0" type="button"
                        data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary w-100 w-sm-auto ms-sm-3" type="button" id="copy-styles-btn">
                        <i class="ai-copy me-2 ms-n1"></i>
                        Copy styles
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Page wrapper -->
    <main class="page-wrapper">

        <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page -->
        @include('layouts.main.header')


        @yield('content')
    </main>


    <!-- Footer -->
    <footer class="footer py-5">
        <div class="container pt-md-2 pt-lg-3 pt-xl-4">
            <div class="row pb-5 pt-sm-2 mb-lg-2">
                <div class="col-md-12 col-lg-3 pb-2 pb-lg-0 mb-4 mb-lg-0">
                    <a class="navbar-brand py-0 mb-3 mb-lg-4" href="/">
                        <span class="text-primary flex-shrink-0 me-2">
                            <img width="50" height="50" viewBox="0 0 36 33" src="{{asset('assets/img/imagesa/logo.svg')}}"
                                xmlns="http://www.w3.org/2000/svg"></img>
                        </span>
                        <span class="text-nav">theCans</span>
                    </a>
                    <p class="fs-sm pb-2 pb-lg-3 mb-3">Tellus non diam morbi quam vel venenatis proin sed. Dolor
                        elementum nunc dictum</p>
                    <div class="d-flex">
                        <a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle me-3" href="#"
                            aria-label="Facebook">
                            <i class="ai-facebook"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle me-3" href="#"
                            aria-label="Instagram">
                            <i class="ai-instagram"></i>
                        </a>
                        <a class="btn btn-icon btn-sm btn-secondary btn-linkedin rounded-circle" href="#"
                            aria-label="LinkedIn">
                            <i class="ai-linkedin"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-2 offset-xl-1 mb-4 mb-sm-0">
                    <ul class="nav flex-column">
                        <li><a class="nav-link py-1 px-0" href="#">Services</a></li>
                        <li><a class="nav-link py-1 px-0" href="#">Reviews</a></li>
                        <li><a class="nav-link py-1 px-0" href="#">Case studies</a></li>
                        <li><a class="nav-link py-1 px-0" href="#">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-lg-2 mb-4 mb-sm-0">
                    <ul class="nav flex-column">
                        <li><a class="nav-link py-1 px-0" href="mailto:contact@example.com">contact@example.com</a></li>
                        <li><a class="nav-link py-1 px-0" href="tel:+15262200459">+1&nbsp;526&nbsp;220&nbsp;0459</a>
                        </li>
                        <li><a class="nav-link py-1 px-0" href="tel:+15262200444">+1&nbsp;526&nbsp;220&nbsp;0444</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-5 col-lg-4 col-xl-3 offset-lg-1">
                    <h3 class="h6 mb-2">Stay up to date</h3>
                    <p class="fs-sm">Subscribe to our news and case studies</p>
                    <div class="input-group input-group-sm">
                        <input class="form-control" type="text" placeholder="Your email">
                        <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                </div>
            </div>
            <p class="nav fs-sm mb-0">
                <span class="text-body-secondary">&copy; All rights reserved. Made by</span>
                <a class="nav-link fw-normal p-0 ms-1" href="https://createx.studio/" target="_blank"
                    rel="noopener">Createx Studio</a>
            </p>
        </div>
    </footer>


    <!-- Back to top button -->
    <a class="btn-scroll-top" href="#top" data-scroll aria-label="Scroll back to top">
        <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10">
            </circle>
        </svg>
        <i class="ai-arrow-up"></i>
    </a>


    <!-- Vendor scripts: JS libraries and plugins -->
    <script src="{{asset('assets/vendor/parallax-js/dist/parallax.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/dist/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/lightgallery/lightgallery.min.js')}}"></script>
    {{-- <script src="assets/vendor/leaflet/dist/leaflet.js"></script> --}}
    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
    </script>

    <!-- Bootstrap + Theme scripts -->
    <script src="{{asset('assets/js/theme.min.js')}}"></script>

    <!-- Customizer -->
    <script src="{{asset('assets/js/customizer.min.js')}}"></script>
</body>

</html>
