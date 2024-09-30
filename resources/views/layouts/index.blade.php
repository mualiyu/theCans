<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>theCans | Admin - Dashboard</title>

    <meta name="description" content="theCans - Admin system">
    {{-- <meta name="keywords" content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, dark mode, html5, css3, javascript, gallery, slider, touch, creative"> --}}
    <meta name="author" content="mualiyuoox@gmail.com">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/admin_assets/img/imagesa/logo.svg')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin_assets/img/imagesa/logo.svg')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/admin_assets/img/imagesa/logo.svg')}}">
    <link rel="manifest" href="{{asset('admin_assets/favicon/site.webmanifest')}}">
    <link rel="mask-icon" color="#6366f1" href="{{asset('/admin_assets/img/imagesa/logo.svg')}}">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="{{asset('/admin_assets/img/imagesa/logo.svg')}}">
    <meta name="theme-color" content="white">
    <!-- Theme mode-->
    <script>
      let mode = window.localStorage.getItem('mode'),
          root = document.getElementsByTagName('html')[0];
      if (mode !== undefined && mode === 'dark') {
        root.classList.add('dark-mode');
      } else {
        root.classList.remove('dark-mode');
      }


    </script>
    <!-- Page loading styles-->
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
      .dark-mode .page-loading {
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
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        font-weight: normal;
        color: #6f788b;
      }
      .dark-mode .page-loading-inner > span {
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
      .dark-mode .page-spinner {
        background-color: rgba(255,255,255,.25);
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
    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          const preloader = document.querySelector('.page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 1500);
        };
      })();

    </script>
    <!-- Import Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" id="google-font">
    <!-- Vendor styles-->
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{asset('admin_assets/css/theme1.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/vendor/flatpickr/dist/flatpickr.min.css ')}}">
    <link rel="stylesheet" media="screen" href="{{asset('admin_assets/vendor/simplebar/dist/simplebar.min.css')}}">
    <script src="{{asset('admin_assets/js/theme-switcher.js')}}"></script>

    <link rel="stylesheet" href="{{asset('admin_assets/awesome/awesomplete.css')}}" />
    <script src="{{asset('admin_assets/awesome/awesomplete.js')}}"></script>

  </head>
  <!-- Body-->
  <body class="bg-secondary">
    <!-- Page loading spinner-->
    <div class="page-loading active">
      <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    <!-- Page wrapper-->
    <main class="page-wrapper">


      <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
      <header class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a class="navbar-brand pe-sm-3" href="{{url('/')}}">
              <img src="{{asset('admin_assets/img/imagesa/logo-dark.svg')}}" class="" style="width: 200px">
          </a>

          <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
            <input class="form-check-input" type="checkbox" id="theme-mode">
            <label class="form-check-label" for="theme-mode"><i class="ai-sun fs-lg"></i></label>
            <label class="form-check-label" for="theme-mode"><i class="ai-moon fs-lg"></i></label>
          </div>


          <!-- User signed in state. Account dropdown on screens > 576px-->
          <div class="dropdown nav d-none d-sm-block order-lg-3">
            <a class="nav-link d-flex align-items-center p-0" href="#" data-bs-toggle="dropdown" aria-expanded="false">
{{--              <img class="border rounded-circle" src="{{ Auth::user()->image }}" width="48" alt="{{Auth::user()->name}}">--}}
              <div class="ps-2">
                <div class="fs-xs lh-1 opacity-60">Hello,</div>
                <div class="fs-sm dropdown-toggle">{{ Auth::user()->name }}</div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end my-1">
              <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="ai-logout fs-lg opacity-70 me-2"></i>Sign out
              </a>
            </div>
          </div>

          <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
          <nav class="collapse navbar-collapse" id="navbarNav">

          </nav>
        </div>
      </header>


      <!-- Page content-->
      <div class="container py-5 mt-4 mt-lg-5 mb-lg-4 my-xl-5">
        <div class="row pt-sm-2 pt-lg-0">

          <!-- Sidebar (offcanvas on sreens < 992px)-->
          <aside class="col-lg-3 pe-lg-4 pe-xl-5 mt-n3">
            <div class="position-lg-sticky top-0">
              <div class="d-none d-lg-block" style="padding-top: 105px;"></div>
              <div class="offcanvas-lg offcanvas-start" id="sidebarAccount">
                <button class="btn-close position-absolute top-0 end-0 mt-3 me-3 d-lg-none" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebarAccount"></button>
                <div class="offcanvas-body">
{{--                  <div class="pb-2 pb-lg-0 mb-4 mb-lg-5">--}}
{{--                    <img class="d-block rounded-circle mb-2" src="{{Auth::user()->image}}" width="80" alt="{{ Auth::user()->name }}">--}}
{{--                    <h3 class="h5 mb-1">{{ Auth::user()->name }}</h3>--}}
{{--                    <p class="fs-sm text-muted mb-0">{{ Auth::user()->email }}</p>--}}
{{--                  </div>--}}
                  <nav class="nav flex-column pb-2 pb-lg-4 mb-3">
{{--                    <h4 class="fs-xs fw-medium text-muted text-uppercase pb-1 mb-2">System</h4>--}}
                    <a class="nav-link fw-semibold py-2 px-0 {{ Route::currentRouteName() == 'home' ? 'active':''}}" href="{{route('home')}}"><i class="ai-grid fs-5 opacity-60 me-2"></i>Dashboard</a>
                    <a class="nav-link fw-semibold py-2 px-0 {{ Route::currentRouteName() == 'news' ? 'active':''}}" href="{{route('news')}}"><i class="ai-dashboard fs-5 opacity-60 me-2"></i>Blogs</a>

                    <a class="nav-link fw-semibold py-2 px-0 {{ Route::currentRouteName() == 'galleries' ? 'active':''}}" href="{{route('galleries')}}"><i class="ai-card fs-5 opacity-60 me-2"></i>Gallery</a>
                    <a class="nav-link fw-semibold py-2 px-0 {{ Route::currentRouteName() == 'spaces' ? 'active':''}}" href="{{route('spaces')}}"><i class="ai-database fs-5 opacity-60 me-2"></i>Spaces</a>

                    <a class="nav-link fw-semibold py-2 px-0 {{ Route::currentRouteName() == 'bookings.index' ? 'active':''}}" href="{{ route('bookings.index') }}"><i class="ai-database fs-5 opacity-60 me-2"></i>Bookings</a>

                    <a class="nav-link fw-semibold py-2 px-0 {{ Route::currentRouteName() == 'messages' ? 'active':''}}" href="{{route('messages')}}"><i class="ai-messages fs-5 opacity-60 me-2"></i>Message</a>
                    <a class="nav-link fw-semibold py-2 px-0 {{ Route::currentRouteName() == 'faqs' ? 'active':''}}" href="{{route('faqs')}}"><i class="ai-minimize fs-5 opacity-60 me-2"></i>Faq</a>

                    <a class="nav-link fw-semibold py-2 px-0 {{ Route::currentRouteName() == 'communities' ? 'active':''}}" href="{{route('communities')}}"><i class="ai-heart fs-5 opacity-60 me-2"></i>Our community</a>
                    <a class="nav-link fw-semibold py-2 px-0 {{ Route::currentRouteName() == 'neighbors' ? 'active':''}}" href="{{route('neighbors')}}"><i class="ai-wallet fs-5 opacity-60 me-2"></i>Neighbors</a>
                      {{-- <a class="nav-link fw-semibold py-2 px-0" href="{{route('applications')}}"><i class="ai-messages fs-5 opacity-60 me-2"></i>Applications</a> --}}
                      {{-- <a class="nav-link fw-semibold py-2 px-0" href="account-earnings.html"><i class="ai-activity fs-5 opacity-60 me-2"></i>Jobs</a> --}}
                      {{-- <a class="nav-link fw-semibold py-2 px-0" href="{{route('jobs')}}"><i class="ai-card fs-5 opacity-60 me-2"></i>Jobs</a> --}}
                      {{-- <a class="nav-link fw-semibold py-2 px-0" href="{{route('database')}}"><i class="ai-database fs-5 opacity-60 me-2"></i>Database</a> --}}

                      </nav>
                      {{-- <nav class="nav flex-column pb-2 pb-lg-4 mb-1">
                          <a class="nav-link fw-semibold py-2 px-0" href="{{route('news')}}"><i class="ai-settings fs-5 opacity-60 me-2"></i>News</a>
                      </nav> --}}
                  <nav class="nav flex-column pb-2 pb-lg-4 mb-1">

                      <a class="nav-link fw-semibold py-2 px-0 {{ Route::currentRouteName() == 'settings' ? 'active':''}}" href="{{route('settings')}}"><i class="ai-settings fs-5 opacity-60 me-2"></i>Settings</a>
                      <a class="nav-link fw-semibold py-2 px-0" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <i class="ai-logout fs-5 opacity-60 me-2"></i>Sign out
                      </a>
                  </nav>
                </div>
              </div>
            </div>
          </aside>


          @yield('content')


        </div>
      </div>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
      <!-- Divider for dark mode only-->
      <hr class="d-none d-dark-mode-block">
      <!-- Sidebar toggle button-->
      <button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" data-bs-toggle="offcanvas" data-bs-target="#sidebarAccount"><i class="ai-menu me-2"></i>Account menu</button>
    </main>
    <!-- Footer-->
    <footer class="footer bg-dark position-relative pb-4 pt-md-3 py-lg-4 py-xl-5">
      <div class="dark-mode container position-relative zindex-2 pb-2">

      </div>
    </footer>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll>
      <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
      </svg><i class="ai-arrow-up"></i></a>
    <!-- Vendor scripts: js libraries and plugins-->
    <script src="{{asset('admin_assets/vendor/flatpickr/dist/flatpickr.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/flatpickr/dist/plugins/rangePlugin.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>

    <script src="{{asset('admin_assets/vendor/chart.js/dist/chart.umd.js')}}"></script>
    <!-- Main theme script-->
    <script src="{{asset('admin_assets/js/theme.min.js')}}"></script>

    <script src="{{asset('admin_assets/vendor/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/customizer.min.js')}}"></script>

    @yield('script')
  </body>
</html>
