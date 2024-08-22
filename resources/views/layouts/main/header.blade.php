<header class="navbar navbar-expand-lg fixed-top">
    <div class="container">

        <!-- Navbar brand (Logo) -->
        <a class="navbar-brand pe-sm-3" href="{{url('/')}}">
            <span class="text-primary flex-shrink-0 me-2">
                <img width="50" height="50" viewBox="0 0 36 33" src="{{asset('assets/img/imagesa/logo.svg')}}"
                    xmlns="http://www.w3.org/2000/svg"></img>
            </span>
            <span class="pt-1">theCans</span>
        </a>

        <!-- Theme switcher -->
        {{-- <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
            <input class="form-check-input" type="checkbox" id="theme-mode">
            <label class="form-check-label" for="theme-mode">
                <i class="ai-sun fs-lg"></i>
            </label>
            <label class="form-check-label" for="theme-mode">
                <i class="ai-moon fs-lg"></i>
            </label>
        </div> --}}

        <!-- Mobile menu toggler (Hamburger) -->
        {{-- <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}
        <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>

        <!-- Navbar collapse (Main navigation) -->
        <nav class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">


                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('main.index')}}" aria-expanded="false">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('main.aboutus')}}" aria-expanded="false">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="landing-marketing-agency.html#"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-expanded="false">Services</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item"
                                href="{{route('main.coworking')}}">The Coworking
                                Space</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                                href="{{route('main.technology_consulting')}}">Technology
                                Consulting</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="landing-marketing-agency.html#"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-expanded="false">The CANs Park</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item"
                                href="{{route('main.community')}}">
                                Our Community</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                                href="{{route('main.neighbors')}}">
                                Neighbors of the park</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{route('main.foundation')}}">Foundation</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="landing-marketing-agency.html#"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-expanded="false">Our Stories</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item"
                                href="{{route('main.blog')}}">
                                Blog</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                                href="{{route('main.gallery')}}">
                                Gallery</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('main.contact_us')}}">Contact
                        Us</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
