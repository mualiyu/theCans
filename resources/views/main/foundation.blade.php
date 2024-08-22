@extends('layouts.main.index')

@section('content')

<section class="overflow-hidden">
    <div class="container pt-5 pb-sm-3 mt-5 mb-2 mb-md-3 mb-lg-4 mb-xxl-5">

      <!-- Breadcrumb -->
      {{-- <nav aria-label="breadcrumb">
        <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Foundation</li>
        </ol>
      </nav> --}}

      <!-- Page title -->
      <h1 class="text-center pb-3 pb-md-4 pb-lg-5 mb-lg-0 mb-xl-2 mb-xxl-4">Foundation</h1>

      <!-- Item -->
      <article class="row align-items-center card-hover pb-5 mb-md-2 mb-lg-3 mb-xl-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="600" data-aos-offset="280">
        <div class="col-md-4 offset-xxl-1 mb-4 mb-md-0">
          <a href="https://unsub.africa/">
            <img class="rounded-5" src="{{asset('/assets/img/imagesa/UNSUBlogo.png')}}" width="700" alt="Image">
          </a>
        </div>
        <div class="col-md-8 col-xl-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="850" data-aos-offset="180" data-disable-parallax-down="md">
          <div class="ms-md-4 ms-lg-5 ms-xxl-0" style="max-width: 330px;">
            {{-- <div class="text-body-secondary mb-2">Branding, Strategy</div> --}}
            <h2 class="mb-lg-4">
              <a href="https://unsub.africa/">UNSUB AFRICA</a>
            </h2>
            <p class="mb-0 mb-md-1 mb-lg-3">UNSUB is a web and mobile application designed to help connect victims and survivors of sexual and gender-based violence (SGBV) in Nigeria, with civil society organizations and initiatives within their location that can provide the support needed. UNSUB seeks to optimize gender-based violence response and intervention, as well as data management.</p>
            <a class="btn btn-lg btn-link px-0 opacity-0 d-none d-md-inline-flex" href="https://unsub.africa/">
              Read more
              <i class="ai-arrow-right ms-2"></i>
            </a>
          </div>
        </div>
      </article>

      <!-- Item -->
      <article class="row align-items-center card-hover pb-5 mb-md-2 mb-lg-3 mb-xl-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="600" data-aos-offset="280">
        <div class="col-md-4 order-md-2 mb-4 mb-md-0">
          <a href="https://rise.com.ng/">
            <img class="rounded-5" src="{{asset('/assets/img/imagesa/rise-logo.png')}}" width="700" alt="Image">
          </a>
        </div>
        <div class="col-md-8 col-xl-4 offset-xxl-1 order-md-1 aos-init aos-animate" data-aos="fade-up" data-aos-duration="850" data-aos-offset="180" data-disable-parallax-down="md">
          <div class="me-md-4 me-lg-5 me-xxl-0" style="max-width: 330px;">
            {{-- <div class="text-body-secondary mb-2">Branding</div> --}}
            <h2 class="mb-lg-4">
              <a href="https://rise.com.ng/">RISE</a>
            </h2>
            <p class="mb-0 mb-md-1 mb-lg-3">RISE, which is an acronym for Relief Intervention and Symptom Evaluation is a user-friendly web and USSD application that focuses on helping people at the bottom of the pyramid to access relief in this pandemic period, by connecting them to relief providers within their location.</p>
            <a class="btn btn-lg btn-link px-0 opacity-0 d-none d-md-inline-flex" href="https://rise.com.ng/">
              Read more
              <i class="ai-arrow-right ms-2"></i>
            </a>
          </div>
        </div>
      </article>

      <!-- Item -->
      <article class="row align-items-center card-hover pb-5 mb-md-2 mb-lg-3 mb-xl-4 aos-init" data-aos="fade-up" data-aos-duration="600" data-aos-offset="280">
        <div class="col-md-4 offset-xxl-1 mb-4 mb-md-0">
          <a href="https://www.mybackup.ng/">
            <img class="rounded-5" src="{{asset('/assets/img/imagesa/backup_logo.png')}}" width="700" alt="Image">
          </a>
        </div>
        <div class="col-md-8 col-xl-4 aos-init" data-aos="fade-up" data-aos-duration="850" data-aos-offset="180" data-disable-parallax-down="md">
          <div class="ms-md-4 ms-lg-5 ms-xxl-0" style="max-width: 330px;">
            {{-- <div class="text-body-secondary mb-2">Identity, Packaging</div> --}}
            <h2 class="mb-lg-4"><a href="https://www.mybackup.ng/">Backup</a></h2>
            <p class="mb-0 mb-md-1 mb-lg-3">BackUp is a GPS enabled mobile application to protect persons whose rights are infringed on to easily report an emergency arrest, harassment or human rights violation propagated by law enforcement agencies.</p>
            <a class="btn btn-lg btn-link px-0 opacity-0 d-none d-md-inline-flex" href="https://www.mybackup.ng/">
              Read more
              <i class="ai-arrow-right ms-2"></i>
            </a>
          </div>
        </div>
      </article>

      <!-- Item -->
      <article class="row align-items-center card-hover pb-5 mb-md-2 mb-lg-3 mb-xl-4 aos-init" data-aos="fade-up" data-aos-duration="600" data-aos-offset="280">
        <div class="col-md-4 order-md-2 mb-4 mb-md-0">
          <a href="https://play.google.com/store/apps/details?id=com.zabe.android">
            <img class="rounded-5" src="{{asset('/assets/img/imagesa/zabe.webp')}}" width="700" alt="Image">
          </a>
        </div>
        <div class="col-md-8 col-xl-4 offset-xxl-1 order-md-1 aos-init" data-aos="fade-up" data-aos-duration="850" data-aos-offset="180" data-disable-parallax-down="md">
          <div class="me-md-4 me-lg-5 me-xxl-0" style="max-width: 330px;">
            {{-- <div class="text-body-secondary mb-2">E-book, Branding</div> --}}
            <h2 class="mb-lg-4">
              <a href="https://play.google.com/store/apps/details?id=com.zabe.android">Zabe</a>
            </h2>
            <p class="mb-0 mb-md-1 mb-lg-3">Zabe is one of the only three digital monitoring systems that was accepted by the Nigerian government and the development community as a credible system to generate the required information and data to monitor election results by civil society organisations. The results were used as a benchmark baseline measurement tool against other declarations and have become a veritable database for benchmarking in the future.</p>
            <a class="btn btn-lg btn-link px-0 opacity-0 d-none d-md-inline-flex" href="https://play.google.com/store/apps/details?id=com.zabe.android">
              Read more
              <i class="ai-arrow-right ms-2"></i>
            </a>
          </div>
        </div>
      </article>

      <!-- Item -->
      <article class="row align-items-center card-hover pb-5 mb-md-2 mb-lg-3 mb-xl-4 aos-init" data-aos="fade-up" data-aos-duration="600" data-aos-offset="280">
        <div class="col-md-4 offset-xxl-1 mb-4 mb-md-0">
          <a href="#">
            <img class="rounded-5" src="{{asset('/assets/img/imagesa/engage-logo.png')}}" width="700" alt="Image">
          </a>
        </div>
        <div class="col-md-8 col-xl-4 aos-init" data-aos="fade-up" data-aos-duration="850" data-aos-offset="180" data-disable-parallax-down="md">
          <div class="ms-md-4 ms-lg-5 ms-xxl-0" style="max-width: 330px;">
            {{-- <div class="text-body-secondary mb-2">Branding, Strategy</div> --}}
            <h2 class="mb-lg-4">
              <a href="#">Engage</a>
            </h2>
            <p class="mb-0 mb-md-1 mb-lg-3">Engage is a crowdsourcing platform that provides citizens with a means to interact with governments on critical issues in their immediate communities. Engage empowers and amplifies the voices of the citizen and seeks to make governments accountable and accessible to the common man.</p>
            <a class="btn btn-lg btn-link px-0 opacity-0 d-none d-md-inline-flex" href="#">
              Read more
              <i class="ai-arrow-right ms-2"></i>
            </a>
          </div>
        </div>
      </article>
    </div>
  </section>

@endsection
