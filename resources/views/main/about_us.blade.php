@extends('layouts.main.index')

@section('content')

<!-- About -->
<section class="bg-primary bg-opacity-10 d-flex min-vh-100 overflow-hidden py-5">
    <div class="container d-flex justify-content-center pb-sm-3 py-md-4 py-xl-5">
        <div class="row align-items-center pt-2 mt-1 mt-xxl-0">
            <div class="col-md-5 col-lg-3">
                <div class="fs-sm text-uppercase mb-3">About Us</div>
                <h2 class="display-6">At The CANs</h2>
            </div>
            <div class="col-md-7 col-xl-7 offset-lg-1 offset-xl-2 pt-1 pt-sm-2 pt-md-5">
                <p class="fs-xl w-100">At The CANs Park, our <strong>mission</strong> is to empower young leaders to
                    become drivers of change through innovation. We strive to provide the support, and collaborative
                    environment necessary to catalyze sustainable development and positive social impact throughout
                    Africa. We are community-centered and believe in creating leverage for people who can. Through our
                    innovation hub, we provide and facilitate SMEs, Startups, and Entrepreneurs with the right tools to
                    be empowered in the digital economy.</p>
                <p class="fs-xl w-100">Our coworking spaces serve as a home to our community of varying individuals. We
                    also offer technological services to private and government organizations and Industrial
                    technological training services.</p>
                <p class="fs-xl mb-0 w-100">We <strong>envision</strong> an Africa where young people are empowered to
                    become leaders who use innovation to create life-changing impact. Through our dedication to
                    technology, collaboration, and community, we aim to shape a future where creativity and innovation
                    thrive, driving meaningful change across the continent.</p>
            </div>
        </div>
    </div>
</section>

<!-- How we work (Steps) -->
<section class="container pt-5 mt-1 mt-sm-2 mt-xl-4 mt-xxl-5">
    <div class="row align-items-center pt-2 pt-sm-3 pt-md-4 pt-lg-5 mt-xl-2 mt-xxl-3">
        <div class="col-md-6 col-xl-5 pb-3 pb-md-0 mb-4 mb-md-0">
            <div class="ratio ratio-1x1 d-flex align-items-center position-relative rounded-circle overflow-hidden bg-size-cover mx-auto"
                style="max-width: 530px; background-image: url(assets/img/about/agency/steps-image.jpg);">
                <div class="bg-black position-absolute top-0 start-0 w-100 h-100 opacity-50"></div>
                <div class="position-relative z-2 p-4" data-bs-theme="dark">
                    <div class="text-center mx-auto" style="max-width: 275px;">
                        {{-- <span class="d-block text-body fs-sm text-uppercase mb-3">How we work</span> --}}
                        <h2 class="display-6 mb-0" style="color: aliceblue;">Our Core Values</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-5 offset-xl-1">
            <div class="ps-md-4 ps-xl-0">
                <div class="steps steps-hoverable">
                    <div class="step py-3 py-xl-4">
                        <div class="step-number">
                            <div class="step-number-inner">01</div>
                        </div>
                        <div class="step-body">
                            <h3 class="h5 pb-1 mb-2">Innovation</h3>
                            <p class="mb-0">We embrace creativity, curiosity, and forward-thinking approaches to address
                                complex challenges and drive positive change.</p>
                        </div>
                    </div>
                    <div class="step py-3 py-xl-4">
                        <div class="step-number">
                            <div class="step-number-inner">02</div>
                        </div>
                        <div class="step-body">
                            <h3 class="h5 pb-1 mb-2">Collaboration</h3>
                            <p class="mb-0">We believe in the power of collaboration and partnership to amplify our
                                impact and achieve shared goals, fostering a culture of teamwork, mutual respect, and
                                collective action.</p>
                        </div>
                    </div>
                    <div class="step py-3 py-xl-4">
                        <div class="step-number">
                            <div class="step-number-inner">03</div>
                        </div>
                        <div class="step-body">
                            <h3 class="h5 pb-1 mb-2">Technology for Good</h3>
                            <p class="mb-0">We use innovation and digital solutions to address social challenges and
                                drive sustainable development, harnessing technology's potential for positive change.
                            </p>
                        </div>
                    </div>
                    <div class="step py-3 py-xl-4">
                        <div class="step-number">
                            <div class="step-number-inner">04</div>
                        </div>
                        <div class="step-body">
                            <h3 class="h5 pb-1 mb-2">Community</h3>
                            <p class="mb-0">We cultivate a supportive and inclusive community of innovators,
                                entrepreneurs, and changemakers, where diverse perspectives are valued, and individuals
                                are empowered to thrive and succeed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary bg-opacity-10 pt-5 mt-md-2 mt-xl-4 mt-xxl-5">
    <div class="container d-flex justify-content-center pb-sm-3 py-md-4 py-xl-5">
        <div class="row align-items-center pt-2 mt-1 mt-xxl-0">
            <div class="col-md-5 col-lg-5">
                <h2 class="display-6">Our coworking spaces and community</h2>
            </div>
            <div class="col-md-7 col-xl-5 offset-lg-1 offset-xl-2 pt-1 pt-sm-2 pt-md-5">
                <p class="fs-xl mb-0 w-100">Built from refurbished containers, we pride ourselves on sustainable
                    coworking spaces offering fast unlimited internet, uninterrupted power supply, and an eco-friendly
                    environment. Our unique community offers a home to all startups, entrepreneurs, and SMEs.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary bg-opacity-10 pt-2">
    <div class="container d-flex justify-content-center pb-sm-3 py-md-4 py-xl-5">

        <div class="row align-items-center pt-2 mt-1 mt-xxl-0">
            <div class="col-md-5 col-lg-5">
                <p class="fs-xl mb-0 w-100">At The CANs Foundation, we're dedicated to using technology for social
                    change. Committed to peace, transparency, and development, we focus on tackling pressing issues in
                    Africa. Aligned with the United Nations Sustainable Development Goals (5,10,16 and 17), we empower
                    communities for a brighter future. (links to the foundation website).</p>
            </div>
            <div class="col-md-7 col-xl-5 offset-lg-1 offset-xl-2 pt-1 pt-sm-2 pt-md-5">
                <h2 class="display-6">Foundation</h2>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary bg-opacity-10 pt-2">
    <div class="container d-flex justify-content-center pb-sm-3 py-md-4 py-xl-5">

        <div class="row align-items-center pt-2 mt-1 mt-xxl-0">
            <div class="col-md-5 col-lg-5">
                <h2 class="display-6">Technology consulting</h2>
            </div>
            <div class="col-md-7 col-xl-5 offset-lg-1 offset-xl-2 pt-1 pt-sm-2 pt-md-5">
                <p class="fs-xl mb-0 w-100">We offer consultancy services to guide companies in defining their digital
                    strategy and establishing their presence in the digital landscape. Through a thorough analysis of
                    key areas and processes essential to digital business strategy, we gather quantitative and
                    qualitative data in collaboration with our clients. Our consultancy provides a comprehensive
                    assessment of online success possibilities, including economic models, functional structures, key
                    metrics, and indicators for effective management. Additionally, we develop a tailored action plan to
                    drive optimal outcomes.</p>
            </div>
        </div>

    </div>
</section>

<section class="pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
    <div class="container pt-2 pt-sm-4 pt-lg-5 mt-md-2">
        <div class="row">

            <!-- Sticky sidebar -->
            <div class="col-md-5 col-xl-4 mb-5 mb-md-0" style="margin-top: -125px;">
                <div class="position-sticky top-0" style="padding-top: 125px;">
                    <h2 class="h1 pb-2 pb-lg-3">Our projects</h2>
                </div>
            </div>

            <!-- Pricing list -->
            <div class="col-md-7 offset-xl-1">
                <div class="ps-md-4 ps-xxl-5">

                    <!-- Pricing card -->
                    <div class="card border-0 bg-secondary rounded-4 position-relative mb-3">
                        <div class="card-body d-sm-flex align-items-start text-center text-sm-start">
                            <div class="w-100 pe-sm-4 mb-3 mb-sm-0" style="max-width:100%;">
                                <h3 class="mb-2">The RISE</h3>
                                <p class="fs-lg mb-0">Everything negative- pressure, challenges- is all an opportunity
                                    for me to RISE” -Kobe Bryant. In line with the growing need for relief materials, as
                                    exacerbated by the outbreak of the COVID-19 pandemic, The CANS developed a platform
                                    designed to enable the seamless distribution of relief materials to the most
                                    vulnerable within our communities. This platform is referred to as RISE. RISE is a
                                    user-friendly web and USSD application that focuses on helping people at the bottom
                                    of the pyramid to access relief in this pandemic period, by connecting them to
                                    relief providers within their location.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing card -->
                    <div class="card border-0 bg-secondary rounded-4 position-relative mb-3">
                        <div class="card-body d-sm-flex align-items-start text-center text-sm-start">
                            <div class="w-100 pe-sm-4 mb-3 mb-sm-0" style="max-width:100%;">
                                <h3 class="mb-2">The UNSUB</h3>
                                <p class="fs-lg mb-0">UNSUB was borne out of the pressing need to strengthen the fight
                                    against SGBV in the country. It was developed by the CANS Foundation in
                                    collaboration with the National Human Rights Commission (NHRC) with support from the
                                    Open Society Initiative of West Africa (OSIWA), the Office of the Vice President
                                    through the Rule of Law Advisory Team, and the Office of the Senate President
                                    through its Gender Desk. UNSUB is a web and mobile application that connects victims
                                    of sexual and gender-based violence (SGBV) to support providers e.g government
                                    institutions and agencies like NHRC, Sexual Assault Referral Centres(SARCs), SGBV
                                    State Response Teams, as well as Civil Society Organizations, actively working in
                                    the SGBV response space within their location.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing card -->
                    <div class="card border-0 bg-secondary rounded-4 position-relative mb-3">
                        <div class="card-body d-sm-flex align-items-start text-center text-sm-start">
                            <div class="w-100 pe-sm-4 mb-3 mb-sm-0" style="max-width:100%;">
                                <h3 class="mb-2">WOMEN CAN</h3>
                                <p class="fs-lg mb-0">The Women CAN program is a capacity development initiative to
                                    empower female-owned impact entrepreneurs through a one-week intensive training. It
                                    focused on business consultation, and post-COVID business strategy development, and
                                    provided three months of complimentary co-working space access for five selected
                                    participants. The program saw 34 participants, who benefited from workshops on
                                    financial planning, market analysis, digital transformation, and crisis resilience.
                                    Key outcomes included enhanced business skills, improved strategic planning, and
                                    increased networking opportunities, highlighting the program's success in supporting
                                    female entrepreneurs' growth and innovation.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class=" bg-primary bg-opacity-10 pt-5 mt-lg-3 mt-xl-4 mt-xxl-5">
    <div class="container pt-2 pt-sm-4 pt-lg-5 mt-md-2">
        <div class="row">

            <!-- Sticky sidebar -->
            <div class="col-md-5 col-xl-4 mb-5 mb-md-0" style="margin-top: -125px;">
                <div class="position-sticky top-0" style="padding-top: 125px;">
                    <h2 class="h1 pb-2 pb-lg-3">Partnered projects</h2>
                </div>
            </div>

            <!-- Pricing list -->
            <div class="col-md-7 offset-xl-1">
                <div class="ps-md-4 ps-xxl-5">

                    <!-- Pricing card -->
                    <div class="card border-0 bg-secondary rounded-4 position-relative mb-3">
                        <div class="card-body d-sm-flex align-items-start text-center text-sm-start">
                            <div class="w-100 pe-sm-4 mb-3 mb-sm-0" style="max-width:100%;">
                                <h3 class="mb-2">Every Girl</h3>
                                <p class="fs-lg mb-0">The EveryGirl project aimed at increasing the number of young
                                    females in the tech industry is a project by the KSH foundation. For the maiden
                                    edition of the program, the KSH foundation partnered with The CANs Park to immerse 8
                                    unique and innovative young girls with ICT skills and empowered with laptops to kick
                                    off their digital careers.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing card -->
                    <div class="card border-0 bg-secondary rounded-4 position-relative mb-3">
                        <div class="card-body d-sm-flex align-items-start text-center text-sm-start">
                            <div class="w-100 pe-sm-4 mb-3 mb-sm-0" style="max-width:100%;">
                                <h3 class="mb-2">Fasaha</h3>
                                <p class="fs-lg mb-0">The FASAHA 2.0 Digital Skills Development Programme is a project
                                    of the World Bank in collaboration with Equals-in-Tech and Natview Technology to
                                    equip young women with in-demand digital and bridge the digital gender divide. The
                                    Bootcamp Series is designed to assist young women in developing lifelong learning,
                                    cognitive, and soft/social skills. The CANs partnered with Natview in the delivery
                                    and execution of the Fasaha 4.0 with tremendous success in impacting over 100 young
                                    girls in the field of ICT.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- Approach -->
{{-- <section class="pt-3 mt-md-1 mt-xl-3 mt-xxl-4">
    <div class="container pt-2 pt-sm-4 pt-lg-5 mt-xxl-2">
        <div class="fs-sm text-uppercase mb-3">Our Mission</div>
        <h2 class="display-6 pb-3 mb-lg-4">Professional approach </h2>
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
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40"
                                xmlns="http://www.w3.org/2000/svg">
                                <g class="text-info">
                                    <path
                                        d="M20.0004 36.0226L10.982 21.3535C9.42594 23.3156 8.49609 25.7968 8.49609 28.4955C8.49609 34.8492 13.6467 39.9998 20.0004 39.9998C26.3541 39.9998 31.5047 34.8492 31.5047 28.4955C31.5047 25.7969 30.5749 23.3156 29.0188 21.3535L20.0004 36.0226Z"
                                        fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path
                                        d="M39.3962 0H0.605469L20.0009 31.5477L39.3962 0ZM25.7601 7.62359L20.0009 16.9914L14.2416 7.62359H25.7601Z"
                                        fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Individual approach</h3>
                            <p class="mb-0">Find aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur neque congue aliqua dolor.</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto">
                    <div class="card border-0 bg-secondary rounded-5 h-100">
                        <div class="card-body">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40"
                                xmlns="http://www.w3.org/2000/svg">
                                <g class="text-info">
                                    <path
                                        d="M26.307 23.1116C26.307 28.3136 22.09 32.5307 16.888 32.5307C11.6859 32.5307 7.46891 28.3136 7.46891 23.1116C7.46891 17.9096 11.6859 13.6925 16.888 13.6925C17.1467 13.6925 17.4028 13.7038 17.6562 13.7243V6.24121C17.4016 6.22973 17.1455 6.22363 16.888 6.22363C7.56102 6.22363 0 13.7846 0 23.1116C0 32.4386 7.56102 39.9996 16.888 39.9996C26.2149 39.9996 33.7759 32.4386 33.7759 23.1116C33.7759 22.8541 33.7698 22.598 33.7584 22.3433H26.2753C26.2958 22.5968 26.307 22.8529 26.307 23.1116Z"
                                        fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path d="M40 20C40 8.9543 31.0457 0 20 0V20H40Z" fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Integrated analytics</h3>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget
                                molestie massa. Donec egestas nulla pariatur.</p>
                        </div>
                    </div>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto">
                    <div class="card border-0 bg-secondary rounded-5 h-100">
                        <div class="card-body">
                            <svg class="d-block mt-1 mt-sm-0 mb-4" width="40" height="40" viewBox="0 0 40 40"
                                xmlns="http://www.w3.org/2000/svg">
                                <g class="text-primary">
                                    <path
                                        d="M25.2791 12.7502C28.1954 9.83389 28.1954 5.10556 25.2791 2.18921C22.3627 -0.727136 17.6344 -0.727137 14.718 2.18921C11.8017 5.10556 11.8017 9.83389 14.718 12.7502C17.6344 15.6666 22.3627 15.6666 25.2791 12.7502Z"
                                        fill="currentColor"></path>
                                </g>
                                <g class="text-info">
                                    <path
                                        d="M14.6859 29.3056C15.6559 27.0123 16.9202 24.8838 18.4577 22.9467C13.8666 17.9802 7.29664 14.8701 0 14.8701V40.0004H12.5259C12.5259 36.2925 13.2527 32.6942 14.6859 29.3056Z"
                                        fill="currentColor"></path>
                                </g>
                                <g class="text-primary">
                                    <path
                                        d="M40.0014 40.0004V14.8701C26.1223 14.8701 14.8711 26.1214 14.8711 40.0004H40.0014Z"
                                        fill="currentColor"></path>
                                </g>
                            </svg>
                            <h3 class="h4">Step by step work</h3>
                            <p class="mb-0">More erat leo proin odio est sed sit felis facilisi integer sed congue neque
                                turpis dictumst sit sed volutpat aliquet tortor.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative bottom-0 mt-2 pt-4 d-lg-none"></div>
        </div>
    </div>
</section> --}}


@endsection
