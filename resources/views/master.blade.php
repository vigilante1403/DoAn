<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jenkinson’s Aquarium</title>
    <!-- favicon -->
    <link
      rel="icon"
      href="{{ asset('images/favicon.png') }}"
      sizes="16x16"
      type="image/png"
    />

    <!--bao kink fontawesome and lineawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">

  <!-- bootstrap 5  -->
  <link rel="stylesheet" href="{{ asset('css/lib/bootstrap.min.css') }}">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />
  <!-- lineawesome font -->
  <link rel="stylesheet" href="{{ asset('css/line-awesome.css') }}" />
  <!-- slick slider css -->
  <link rel="stylesheet" href="{{ asset('css/lib/slick.css') }}" />
  <!-- Magnific Popup  -->
  <link rel="stylesheet" href="{{ asset('css/lib/magnific-popup.css') }}" />
   <!-- Odometer -->
   <link rel="stylesheet" href="{{ asset('css/lib/odometer-theme-default.css') }}">
  <!-- main css -->
  <link rel="stylesheet" href="{{ asset('css/test.project.css') }}">
{{-- 
  <link rel="stylesheet" href="{{ asset('css/main.css') }}"> --}}

</head>
<body>

    <!-- preloader start -->
    <div class="preloader">
      <div class="preloader__loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <!-- preloader end -->
    
    <!-- Back To Top -->
    <div class="back-to-top">
      <a href="#head">
      <span class="back-top">
        <i class="las la-angle-double-up"></i>
        
      </span>
    </a>
    </div>
    <!-- Back To Top End -->

    <!-- search Popup -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
      <form action="#" class="search-form">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search....." />
        </div>
        <button type="submit" class="submit-btn xl-text">
          <i class="las la-search"></i>
        </button>
      </form>
    </div>
    <!--search Popup -->
    <!-- Header -->
<header class="header-fixed header--primary">
  <div class="container">
    <div class="row g-0 align-items-center">
      <div class="col-6 col-lg-2">
        <!-- Logo  -->
        <a href="{{ route('test') }}" class="logo">
          <img
            src="{{ asset('img/jenkinsons-logo.png') }}"
            alt="viserhyip"
            class="img-fluid logo__is"
          />
        </a>
        {{-- <p style="position:absolute;margin-top:-20px;color:white;margin-left:40px;">Views: {{ $totalViews }}</p> --}}
        <!-- Logo End -->
      </div>
      <div class="col-6 col-lg-10">
        <div class="nav-container">
          <!-- Navigation Toggler  -->
          <div class="d-flex justify-content-end align-items-center d-lg-none">
            <a
              href="#" 
              class="primary-menu__link t-link search--toggler text-center text--white border-bottom-0"
            >
              <i class="las la-search"></i>
            </a>
            <button
              type="button"
              class="btn btn--sqr btn--base nav--toggle text--white"
            >
              <i class="las la-bars"></i>
            </button>
          </div>
          <!-- Navigation Toggler End -->

          <!-- Navigation  -->
          <nav class="navs">
            <!-- Primary Menu  -->
            <ul class="list primary-menu">
              <li class="primary-menu__list ">
                <a href="{{ route('test') }}" class="primary-menu__link text-capitalize">
                  Home</a>
              </li>
              
              <li class="primary-menu__list has-sub">
                <a href="/pages" class="primary-menu__link text-capitalize">Pages</a>
                <ul class="primary-menu__sub">
                  <li class="primary-menu__sub-list">
                    <a
                      href="/our-mission"
                      class="t-link primary-menu__sub-link text-capitalize"
                    >
                      Our Mission
                    </a>
                  </li>
                  <li class="primary-menu__sub-list">
                    <a
                      href="/experiences"
                      class="t-link primary-menu__sub-link text-capitalize"
                    >
                    Experiences
                    </a>
                  </li>
                  <li class="primary-menu__sub-list">
                    <a
                      href="/education"
                      class="t-link primary-menu__sub-link text-capitalize"
                    >
                    Education
                    </a>
                  </li>
                </ul>
              </li>
              
              <li class="primary-menu__list has-sub">
                <a href="/services" class="primary-menu__link text-capitalize">Service</a>
                <ul class="primary-menu__sub">
                  <li class="primary-menu__sub-list">
                    <a
                      href="/services/adopt-an-animal"
                      class="t-link primary-menu__sub-link text-capitalize"
                      >Adopt-An-Animal</a
                    >
                  </li>
                  <li class="primary-menu__sub-list">
                    <a
                      href="/services/animal-encounters"
                      class="t-link primary-menu__sub-link text-capitalize"
                      >Animal-Encounters</a
                    >
                  </li>
                  <li class="primary-menu__sub-list">
                    <a
                      href="/services/promotions"
                      class="t-link primary-menu__sub-link text-capitalize"
                      >Promotions
                    </a>
                  </li>
                  <li class="primary-menu__sub-list">
                    <a
                      href="/services/feeding-schedule"
                      class="t-link primary-menu__sub-link text-capitalize"
                      >Feeding-Schedule
                    </a>
                  </li>
                  <li class="primary-menu__sub-list">
                    <a
                      href="/services/programs"
                      class="t-link primary-menu__sub-link text-capitalize"
                      >Animal Programs
                    </a>
                  </li>
                  <li class="primary-menu__sub-list">
                    <a
                      href="/services/proposals"
                      class="t-link primary-menu__sub-link text-capitalize"
                      >Proposals</a
                    >
                  </li>
                </ul>
              </li>
              <li class="primary-menu__list has-sub">
                <a href="/explore" class="primary-menu__link text-capitalize">Explore</a>
                <ul class="primary-menu__sub">
                  <li class="primary-menu__sub-list">
                    <a
                      href="/exhibits"
                      class="t-link primary-menu__sub-link text-capitalize"
                      >Animals & Exhibits</a
                    >
                  </li>
                  <li class="primary-menu__sub-list">
                    <a
                      href="/error"
                      class="t-link primary-menu__sub-link text-capitalize"
                      >Peguin Cam</a
                    >
                  </li>
                  <li class="primary-menu__sub-list">
                    <a
                      href="/animal-art"
                      class="t-link primary-menu__sub-link text-capitalize"
                      >Animal Art</a
                    >
                  </li>
                </ul>
              </li>
              <li class="primary-menu__list">
                <a href="/viewgallery" class="primary-menu__link text-capitalize">Gallery</a>
              </li>
              <li class="primary-menu__list">
                <a
                  href="/contact"
                  class="primary-menu__link text-capitalize"
                  >Contact</a
                >
              </li>
              @if(Auth::user()&&Auth::user()->authorize==1)
              <li class="primary-menu__list has-sub">
                <a href="#" class="primary-menu__link text-capitalize">Others</a>
                <ul class="primary-menu__sub">
                 
                  <li class="primary-menu__sub-list">
                    <a
                      href="/admin/home"
                      class="t-link primary-menu__sub-link text-capitalize"
                    >
                      Manage
                    </a>
                  </li>
                  
                  <li class="primary-menu__sub-list">
                    <a
                      href="/error"
                      class="t-link primary-menu__sub-link text-capitalize"
                    >
                      404 
                    </a>
                  </li>
                </ul>
              </li>
              @endif
              <li class="primary-menu__list d-none d-lg-block">
                <a
                  href="#"
                  class="primary-menu__link t-link search--toggler text-center"
                >
                  <i class="las la-search"></i>
                </a>
              </li>
              <li >
                <ul style="padding-top:10px;padding-bottom:10px"class="list list--row" style="--gap: .5rem;">
                  <li>
                    <a href="#" class="t-link icon icon--circle icon--xs expert-card__icon">
                    <i class="fab fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="t-link icon icon--circle icon--xs expert-card__icon">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="t-link icon icon--circle icon--xs expert-card__icon">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="t-link icon icon--circle icon--xs expert-card__icon">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <!-- Primary Menu End -->

            <!-- User Login  -->
            @if(!Auth::check())
            <div class="mx-3 ms-lg-auto me-lg-0">
              <ul class="list primary-menu primary-menu--alt">
                <li class="primary-menu__list text-center">
                  <a href="{{ route('register') }}" class="btn btn--md btn--base w-100"> Sign Up </a>
                </li>
              </ul>
            </div>
            @else 
            <div class="mx-3 ms-lg-auto me-lg-0">
              <ul class="list primary-menu primary-menu--alt">
                
                <li class="primary-menu__list text-center">
                  {{-- Hello{{ $name[0]['name'] }} --}}
                  Hello {{ Auth::user()->name }}
                </li>
                
                <li class="primary-menu__list text-center">
                  <a href="/logout">Logout</a>
                </li>
                
              </ul>
            </div>
            
            @endif
            <!-- User Login End -->
          </nav>
          <!-- Navigation End -->
        </div>
      </div>
    </div>
  </div>
</header>
@yield('main')

<footer class="footer">
    <div class="section">
      <div class="container">
        <div class="row g-4 justify-content-xl-between">
          <div class="col-md-6 col-lg-3">
            <h4 class="info-section__title mt-0 text--white">Contact info</h4>
            <ul class="list" style="--gap: .5rem;">
              <li>
                <div class="list list--row">
                  <span class="info-section__icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </span>
                  <p class="mb-0 text--white t-short-para">
                    300 Ocean Ave N, Point Pleasant Beach, NJ 08742, Hoa Kỳ
                  </p>
                </div>
              </li>
              <li>
                <div class="list list--row">
                  <span class="info-section__icon">
                    <i class="far fa-envelope"></i>
                  </span>
                  <ul class="list" style="--gap: 0.5rem">
                    <li>
                      <p class="mb-0 text--white t-short-para">
                        support24/7.com
                      </p>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <div class="list list--row">
                  <span class="info-section__icon">
                    <i class="fas fa-phone-alt"></i>
                  </span>
                  <ul class="list" style="--gap: 0.5rem">
                    <li>
                      <p class="mb-0 text--white t-short-para">
                        +123 - 456 - 789000
                      </p>
                    </li>
                  </ul>
                </div>
              </li>
              
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 col-xl-2">
            <h4 class="info-section__title mt-0 text--white">
              Animals
            </h4>
            <ul class="list list--column">
              <li class="list--column__item">
                <a
                  href="about.html"
                  class="t-link t-link--base text--white d-inline-block"
                >
                  About Us
                </a>
              </li>
              <li class="list--column__item">
                <a
                  href="faq.html"
                  class="t-link t-link--base text--white d-inline-block"
                >
                  FAQ
                </a>
              </li>
              <li class="list--column__item">
                <a
                  href="member.html"
                  class="t-link t-link--base text--white d-inline-block"
                >
                  Membership
                </a>
              </li>
              <li class="list--column__item">
                <a
                  href="blog.html"
                  class="t-link t-link--base text--white d-inline-block"
                >
                  Blog
                </a>
              </li>
              <li class="list--column__item">
                <a
                  href="contact.html"
                  class="t-link t-link--base text--white d-inline-block"
                >
                  Contact
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 col-xl-2">
            <h4 class="info-section__title mt-0 text--white">
              Useful Link
            </h4>
            <ul class="list list--column">
              <li class="list--column__item">
                <a
                  href="animal.html"
                  class="t-link t-link--base text--white d-inline-block"
                >
                  Animals
                </a>
              </li>
              <li class="list--column__item">
                <a
                  href="animal-details.html"
                  class="t-link t-link--base text--white d-inline-block"
                >
                Animals Details
                </a>
              </li>
              <li class="list--column__item">
                <a
                  href="event.html"
                  class="t-link t-link--base text--white d-inline-block"
                >
                  Events
                </a>
              </li>
              <li class="list--column__item">
                <a
                  href="event-details.html"
                  class="t-link t-link--base text--white d-inline-block"
                >
                  Event Details
                </a>
              </li>
              <li class="list--column__item">
                <a
                  href="cart.html"
                  class="t-link t-link--base text--white d-inline-block"
                >
                  Cart
                </a>
              </li>
            </ul>
          </div>
          
        <div class="col-md-6 col-lg-3">
            <h4 class="info-section__title mt-0 text--white">
                Stay Connected
              </h4>
              <p class="mb-0 text--white t-short-para">Subscribe for our</p>
              <ul class="list list--column">
                <li class="list--column__item">
                    <div class="col-sm-10">
                        <div class="text-center text-md-end">
                           
                          <div class="newsletter mx-auto ms-md-auto me-md-0">
                            <div class="newsletter__container rounded-pill">
                              <input
                                type="text"
                                class="form-control form--control newsletter__input flex-grow-1 rounded-pill"
                                placeholder="Subscribe now.."
                              />
                              <button class="btn xxl-text lh-1 text--white rounded-pill sm-text" style="background-color:#1aa1ff">
                                  <i class="far fa-paper-plane"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                </li>
             
            <li> <ul style="padding-top:10px;padding-bottom:10px"class="list list--row" style="--gap: .5rem;">
                  <li>
                    <a href="#" class="t-link icon icon--circle icon--xs expert-card__icon">
                    <i class="fab fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="t-link icon icon--circle icon--xs expert-card__icon">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="t-link icon icon--circle icon--xs expert-card__icon">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="t-link icon icon--circle icon--xs expert-card__icon">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </li>
                </ul></li>
              
               
            </ul>  
        </div>
          
        </div>
      </div>
    </div>
    <div class="footer__copyright py-3">
      <p class="mb-0 sm-text text--white text-center">
        Copyright © 2022. All Rights Reserved By
        <a href="#top" class="t-link t-link--base text--base">Viserlife</a>
      </p>
    </div>
  </footer>
  <!-- Footer End -->
        <!-- jQuery library -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{ asset('js/lib/jquery-3.6.0.min.js') }}"></script>
        <!-- bootstrap 5 js -->
        <script src="{{ asset('js/lib/bootstrap.bundle.min.js') }}"></script>
        <!-- slick  slider js -->
        <script src="{{ asset('js/lib/slick.js') }}"></script>
         <!-- Viewport -->
         <script src="{{ asset('js/lib/viewport.js') }}"></script>
        <!-- Magnific Popup -->
        <script src="{{ asset('js/lib/jquery.magnific-popup.js') }}"></script>
        <!-- Filterizer -->
        <script src="{{ asset('js/lib/jquery.filterizr.min.js') }}"></script>
        <!-- Odometer -->
        <script src="{{ asset('js/lib/odometer.js') }}"></script>
      
          <!--main js-->
          <script src="{{ asset('js/app.js') }}"></script>
     
    </body>
  
  </html>