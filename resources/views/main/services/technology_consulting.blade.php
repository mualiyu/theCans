@extends('layouts.main.index')

@section('content')
<section class="container pt-5 py-5 mt-5 mt-sm-5 mt-xl-5 mt-xxl-5 pt-sm-5">
    <h2 class="h1 text-center pb-3 pb-lg-4">Technology Consulting</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">

        <!-- Item -->
        <div class="col">
            <div class="card bg-primary border-0 h-100 overflow-hidden pt-3 pt-xl-4 px-lg-3 px-xl-4">
                <div class="card-body position-relative z-2 pb-0">
                    <h3 class="h4 card-title text-light">Tech Platform Development</h3>
                    <p class="card-text text-light opacity-80 pb-sm3 pb-md-4 mb-0">We Implement and develop services to
                        assist your particular business needs in the development of an online sales channel. We offer
                        you the opportunity to develop the platform that best suits your actual online channel needs.
                        Get the most suitable solution for your company without compromising with a certain technology.
                        Our service includes: </p>
                        <ul class="list-unstyled pb-3 mb-3 mb-lg-4">
                            <li class="d-flex pt-1 mt-2 mx-2 mx-md-0  text-light"><i class="ai-check-alt text-light fs-4 mt-n1 me-2"></i>1. Domain hiring and hosting selection of the online store.</li>
                            <li class="d-flex pt-1 mt-2 mx-2 mx-md-0  text-light"><i class="ai-check-alt text-light fs-4 mt-n1 me-2"></i>2. Design and layout of the online store.</li>
                            <li class="d-flex pt-1 mt-2 mx-2 mx-md-0  text-light"><i class="ai-check-alt text-light fs-4 mt-n1 me-2"></i>3. Photographic management of the product and audiovisual production.</li>
                            <li class="d-flex pt-1 mt-2 mx-2 mx-md-0  text-light"><i class="ai-check-alt text-light fs-4 mt-n1 me-2"></i>4. Functional analysis of the technological platform.</li>
                            <li class="d-flex pt-1 mt-2 mx-2 mx-md-0  text-light"><i class="ai-check-alt text-light fs-4 mt-n1 me-2"></i>5. End to end development of the online platform.</li>
                        </ul>
                    {{-- <a class="btn btn-lg btn-link text-light px-0" href="#">
                        Read case study
                        <i class="ai-arrow-right ms-2"></i>
                    </a> --}}
                </div>
                {{-- <div class="d-flex justify-content-end mt-sm-n5 me-n4">
                    <img src="{{asset('assets/img/landing/business-consulting/case-studies/01.png')}}" width="347" alt="Image">
                </div> --}}
            </div>
        </div>

        <!-- Item -->
        <div class="col">
            <div class="card bg-primary bg-opacity-10 border-0 h-100 overflow-hidden pt-3 pt-xl-4 px-lg-3 px-xl-4">
                <div class="card-body position-relative z-2 pb-0">
                    <h3 class="h4 card-title text-primary">Online Payment  Methods</h3>
                    <p class="card-text text-primary pb-sm3 pb-md-4 mb-2">Because each company has its own payment preference, we ensure selection and integration of the most suitable payment method in the best interest of our clients.
                        The Cans has the necessary knowledge and experience to help manage and integrate the existing payment means in the online market:</p>
                        <ul class="list-unstyled pb-3 mb-3 mb-lg-4">
                            <li class="d-flex pt-1 mt-2 mx-2 mx-md-0  text-primary"><i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>1. Virtual POS: 3D secure system</li>
                            <li class="d-flex pt-1 mt-2 mx-2 mx-md-0  text-primary"><i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>2. Cash on delivery (COD)</li>
                            <li class="d-flex pt-1 mt-2 mx-2 mx-md-0  text-primary"><i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>3. Debit/Credit card</li>
                            <li class="d-flex pt-1 mt-2 mx-2 mx-md-0  text-primary"><i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>4. Mobile Money</li>
                            <li class="d-flex pt-1 mt-2 mx-2 mx-md-0  text-primary"><i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>5. Alternative payment systems</li>
                            <li class="d-flex pt-1 mt-2 mx-2 mx-md-0  text-primary"><i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>6. Bank transfer</li>
                            <li class="d-flex pt-1 mt-2 mx-2 mx-md-0  text-primary"><i class="ai-check-alt text-primary fs-4 mt-n1 me-2"></i>7. Payment Methods of the big players</li>
                        </ul>
                    {{-- <a class="btn btn-lg btn-link px-0" href="#">
                        Read case study
                        <i class="ai-arrow-right ms-2"></i>
                    </a> --}}
                </div>
                {{-- <div class="d-flex justify-content-end mt-n4 mt-sm-n5 me-n4">
                    <img src="{{asset('assets/img/landing/business-consulting/case-studies/02.png')}}" width="291" alt="Image">
                </div> --}}
            </div>
        </div>
    </div>

    <!-- More button -->
    {{-- <div class="text-center my-2 mt-sm-3 mt-lg-0 pt-4 pb-1 pb-sm-3 pb-md-4 pt-lg-5">
        <a class="btn btn-outline-primary" href="#">Read all case studies</a>
    </div> --}}
</section>

<section class=" py-3">
    <div class="container">
        <h2 class="h1 text-center">Previous Projects and Clients</h2>
        {{-- <p class="text-center pb-4 mb-2 mb-lg-3">We provide a wide range of consulting services</p> --}}
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">

          <!-- Item -->
          <div class="col">
            <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="#">
              <div class="card-body pb-0">
                <svg class="d-block text-warning mb-4" width="40" height="40" viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.7276 27.5001C1.21683 28.3857 0.916576 29.3769 0.850062 30.3971C0.783549 31.4173 0.952558 32.4391 1.34402 33.3835C1.73548 34.328 2.33891 35.1697 3.10764 35.8437C3.87638 36.5177 4.78982 37.0058 5.77734 37.2704C6.76486 37.5349 7.8 37.5689 8.80272 37.3695C9.80544 37.1701 10.7489 36.7428 11.5601 36.1206C12.3713 35.4983 13.0285 34.6979 13.4809 33.7811C13.9334 32.8643 14.1689 31.8558 14.1693 30.8334C14.1698 29.3654 13.6858 27.9382 12.7924 26.7734C11.8989 25.6085 10.6459 24.7712 9.22787 24.3913C7.80984 24.0114 6.30606 24.1101 4.94991 24.6722C3.59375 25.2344 2.46105 26.2284 1.7276 27.5001Z"></path>
                  <path d="M11.7344 10.1667L4.23438 23.1667C5.42383 22.6595 6.71498 22.4361 8.00568 22.5142C9.29638 22.5922 10.5512 22.9695 11.6709 23.6163C12.7906 24.263 13.7444 25.1615 14.4569 26.2405C15.1694 27.3196 15.621 28.5496 15.776 29.8333L19.0427 24.1667C12.8427 13.45 11.9427 12.425 11.7344 10.1667Z"></path>
                  <path d="M38.2784 27.5C37.8534 26.7833 25.6701 5.6083 25.4284 5.29996C24.4255 3.9011 22.9204 2.94436 21.2281 2.62997C19.5358 2.31559 17.7875 2.66792 16.3491 3.61323C14.9107 4.55855 13.8936 6.02357 13.5108 7.70171C13.1279 9.37984 13.409 11.141 14.2951 12.6166C14.2118 12.6166 13.8784 11.9 26.7284 34.1666C27.1662 34.925 27.749 35.5898 28.4437 36.1229C29.1383 36.656 29.9311 37.0471 30.7769 37.2739C31.6227 37.5006 32.5049 37.5585 33.373 37.4443C34.2412 37.3301 35.0784 37.046 35.8368 36.6083C36.5952 36.1706 37.2599 35.5877 37.793 34.8931C38.3262 34.1984 38.7173 33.4056 38.944 32.5598C39.1707 31.714 39.2287 30.8319 39.1145 29.9637C39.0003 29.0955 38.7162 28.2583 38.2784 27.5Z"></path>
                </svg>
                <h3 class="h4 card-title mt-0">Peregrine tracker technology</h3>
                <p class="card-text">An enterprise resource platform developed for the Ministry of Finance to ease approval processes.</p>
              </div>
              <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                  <i class="ai-arrow-right"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- Item -->
          <div class="col">
            <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="#">
              <div class="card-body pb-0">
                <svg class="d-block text-warning mb-4" width="40" height="40" viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M32.6213 22.7824C26.4943 23.0213 20.6934 24.6146 15.525 27.255L8.87893 31.0927C7.12129 32.1061 4.87665 31.4978 3.86795 29.7493L0.49035 23.9008C-0.520513 22.1491 0.0820047 19.9007 1.83372 18.8898L7.33997 15.7103C7.65881 15.5262 8.06657 15.6354 8.25074 15.9543L12.5774 23.4483C12.7647 23.7727 13.1836 23.8804 13.5051 23.6822C13.816 23.4905 13.9009 23.074 13.7182 22.7577L9.36036 15.2095C9.18727 14.9097 9.27227 14.5269 9.55686 14.3297C14.1026 11.1781 17.9484 7.16404 20.9018 2.48266C22.0206 0.707687 24.6278 0.755188 25.6794 2.57599L34.9289 18.5981C35.9801 20.415 34.7215 22.7007 32.6213 22.7824ZM33.8082 11.6236C34.1506 9.6637 33.0019 7.69797 31.1452 7.02512C30.5616 6.81361 30.0322 7.44872 30.3425 7.98632C31.0812 9.2661 31.8225 10.5503 32.5721 11.8482C32.8853 12.3903 33.7004 12.2404 33.8082 11.6236ZM18.4184 35.2136L15.2546 29.7215C15.0708 29.4024 14.6625 29.2929 14.3434 29.477C12.6288 30.4663 12.564 30.5047 10.2768 31.8249C9.95788 32.009 9.84821 32.417 10.0324 32.736L13.2016 38.2245C13.6078 38.9274 14.3384 39.3096 15.0824 39.3096C15.8041 39.3096 16.0801 39.0654 17.625 38.1737C18.66 37.5762 19.0159 36.2478 18.4184 35.2136ZM38.676 6.55444C38.9948 6.37035 39.1041 5.96259 38.92 5.64375C38.736 5.32499 38.3284 5.21557 38.0093 5.39974L36.2843 6.39569C35.694 6.73653 35.9409 7.63989 36.6183 7.63989C36.8554 7.63981 36.8079 7.63297 38.676 6.55444ZM32.5456 3.09976L32.9663 1.53004C33.0616 1.17437 32.8505 0.808857 32.495 0.713521C32.139 0.618351 31.7737 0.829274 31.6783 1.18495L31.2577 2.75466C31.1444 3.17734 31.4629 3.5941 31.902 3.5941C32.1964 3.59402 32.4658 3.3976 32.5456 3.09976ZM39.9772 13.6731C40.0725 13.3175 39.8613 12.9519 39.5057 12.8566L37.9359 12.436C37.5803 12.3409 37.2148 12.5519 37.1194 12.9075C37.0241 13.2631 37.2353 13.6286 37.5909 13.724C39.3076 14.184 39.2134 14.1675 39.3336 14.1675C39.6279 14.1675 39.8973 13.971 39.9772 13.6731Z"></path>
                </svg>
                <h3 class="h4 card-title mt-0">JEJE</h3>
                <p class="card-text">It is an app developed for the UK embassy in Nigeria for their election observers.</p>
              </div>
              <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                  <i class="ai-arrow-right"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- Item -->
          <div class="col">
            <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="#">
              <div class="card-body pb-0">
                <svg class="d-block text-warning mb-4" width="40" height="40" viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M26.7306 12.5C25.4119 6.375 22.5994 2.5 19.9981 2.5C17.3969 2.5 14.5844 6.375 13.2656 12.5H26.7306Z"></path>
                  <path d="M12.5 20C12.4997 21.6722 12.6112 23.3426 12.8338 25H27.1663C27.3888 23.3426 27.5003 21.6722 27.5 20C27.5003 18.3278 27.3888 16.6574 27.1663 15H12.8338C12.6112 16.6574 12.4997 18.3278 12.5 20Z"></path>
                  <path d="M13.2656 27.5C14.5844 33.625 17.3969 37.5 19.9981 37.5C22.5994 37.5 25.4119 33.625 26.7306 27.5H13.2656Z"></path>
                  <path d="M29.2956 12.5H37.1706C35.9874 9.80721 34.1895 7.42918 31.9213 5.55667C29.6531 3.68416 26.9775 2.36928 24.1094 1.7175C26.4806 3.80375 28.3406 7.66125 29.2956 12.5Z"></path>
                  <path d="M38.0638 15H29.6887C29.895 16.6587 29.9981 18.3286 29.9975 20C29.9977 21.6715 29.8941 23.3413 29.6875 25H38.0625C38.9741 21.729 38.9741 18.271 38.0625 15H38.0638Z"></path>
                  <path d="M24.1094 38.2825C26.978 37.6311 29.654 36.3164 31.9227 34.4438C34.1914 32.5713 35.9896 30.1931 37.1731 27.5H29.2981C28.3406 32.3388 26.4806 36.1963 24.1094 38.2825Z"></path>
                  <path d="M10.7109 27.5H2.83594C4.01943 30.1931 5.81766 32.5713 8.08636 34.4438C10.3551 36.3164 13.0311 37.6311 15.8997 38.2825C13.5259 36.1963 11.6659 32.3388 10.7109 27.5Z"></path>
                  <path d="M15.8919 1.7175C13.0233 2.36893 10.3472 3.68365 8.07854 5.55618C5.80984 7.42871 4.01161 9.80692 2.82812 12.5H10.7031C11.6606 7.66125 13.5206 3.80375 15.8919 1.7175Z"></path>
                  <path d="M9.99868 20C9.99852 18.3285 10.102 16.6587 10.3087 15H1.93369C1.0221 18.271 1.0221 21.729 1.93369 25H10.3087C10.102 23.3413 9.99852 21.6715 9.99868 20Z"></path>
                </svg>
                <h3 class="h4 card-title mt-0">SMARTPASS</h3>
                <p class="card-text">Hac erat leo proin odio est sed sit felis facilisi integer sed congue neque turpis dictumst sit sed volutpat aliquet tortor non.</p>
              </div>
              <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                  <i class="ai-arrow-right"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- Item -->
          <div class="col">
            <a class="card card-hover-primary border-0 h-100 text-decoration-none" href="#">
              <div class="card-body pb-0">
                <svg class="d-block text-warning mb-4" width="40" height="40" viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M26.7306 12.5C25.4119 6.375 22.5994 2.5 19.9981 2.5C17.3969 2.5 14.5844 6.375 13.2656 12.5H26.7306Z"></path>
                  <path d="M12.5 20C12.4997 21.6722 12.6112 23.3426 12.8338 25H27.1663C27.3888 23.3426 27.5003 21.6722 27.5 20C27.5003 18.3278 27.3888 16.6574 27.1663 15H12.8338C12.6112 16.6574 12.4997 18.3278 12.5 20Z"></path>
                  <path d="M13.2656 27.5C14.5844 33.625 17.3969 37.5 19.9981 37.5C22.5994 37.5 25.4119 33.625 26.7306 27.5H13.2656Z"></path>
                  <path d="M29.2956 12.5H37.1706C35.9874 9.80721 34.1895 7.42918 31.9213 5.55667C29.6531 3.68416 26.9775 2.36928 24.1094 1.7175C26.4806 3.80375 28.3406 7.66125 29.2956 12.5Z"></path>
                  <path d="M38.0638 15H29.6887C29.895 16.6587 29.9981 18.3286 29.9975 20C29.9977 21.6715 29.8941 23.3413 29.6875 25H38.0625C38.9741 21.729 38.9741 18.271 38.0625 15H38.0638Z"></path>
                  <path d="M24.1094 38.2825C26.978 37.6311 29.654 36.3164 31.9227 34.4438C34.1914 32.5713 35.9896 30.1931 37.1731 27.5H29.2981C28.3406 32.3388 26.4806 36.1963 24.1094 38.2825Z"></path>
                  <path d="M10.7109 27.5H2.83594C4.01943 30.1931 5.81766 32.5713 8.08636 34.4438C10.3551 36.3164 13.0311 37.6311 15.8997 38.2825C13.5259 36.1963 11.6659 32.3388 10.7109 27.5Z"></path>
                  <path d="M15.8919 1.7175C13.0233 2.36893 10.3472 3.68365 8.07854 5.55618C5.80984 7.42871 4.01161 9.80692 2.82812 12.5H10.7031C11.6606 7.66125 13.5206 3.80375 15.8919 1.7175Z"></path>
                  <path d="M9.99868 20C9.99852 18.3285 10.102 16.6587 10.3087 15H1.93369C1.0221 18.271 1.0221 21.729 1.93369 25H10.3087C10.102 23.3413 9.99852 21.6715 9.99868 20Z"></path>
                </svg>
                <h3 class="h4 card-title mt-0">ONE FINANCE</h3>
                <p class="card-text">Hac erat leo proin odio est sed sit felis facilisi integer sed congue neque turpis dictumst sit sed volutpat aliquet tortor non.</p>
              </div>
              <div class="card-footer border-0 py-3 my-3 mb-sm-4">
                <div class="btn btn-lg btn-icon btn-outline-primary rounded-circle pe-none">
                  <i class="ai-arrow-right"></i>
                </div>
              </div>
            </a>
          </div>

        </div>
    </div>
  </section>
@endsection
