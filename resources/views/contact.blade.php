<!-- meta tags and other links -->
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

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
</head>
<body>
    <header class="header-fixed header--primary">
        <div class="container">
          <div class="row g-0 align-items-center">
            <div class="col-6 col-lg-2">
              <!-- Logo  -->
              <a href="/" class="logo">
                <img
                  src="{{ asset('img/jenkinsons-logo.png') }}"
                  alt="viserhyip"
                  class="img-fluid logo__is"
                />
              </a>
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
                    <li class="primary-menu__list">
                      <a href="/" class="primary-menu__link text-capitalize">
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
                    <li class="primary-menu__list ">
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
      
    <!-- Banner  -->
<div class="banner" style="background-image: url({{ asset('img/banner-1.jpeg') }})">
    <div class="banner__content">
      <div class="container">
        <div class="row g-3 justify-content-center">
          <div class="col-lg-10 text-center">
            <h2 class="mt-0 text--white">Contact Us</h2>
            <!-- Breadcrumbs  -->
            <ul
              class="list list--row breadcrumbs justify-content-center"
              style="--gap: 2rem"
            >
              <li class="list--row__item breadcrumbs__item">
                <a href="{{ route('test') }}" class="t-link breadcrumbs__link text--white">
                  Home
                </a>
              </li>
              <li class="list--row__item breadcrumbs__item">
                <a
                  href="/contact"
                  class="t-link breadcrumbs__link text--white"
                >
                  Contact
                </a>
              </li>
            </ul>
            <!-- Breadcrumbs End -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner End -->

  

  <div class="section--sm section--top">
    <div class="container">
        <div class="row g-4 justify-content-between">
            <div class="col-md-5 col-xl-4">
                <h4 class="mt-0">
                    How can i help you?
                </h4>
                <p class="section__para">
                    Jenkinson's Aquarium is now open daily from 10:00 am–10:00 pm. Advance timed reservations are required for all guests. We look forward to seeing you!
                </p>
                <ul class="list">
                    <li>
                        <div class="d-flex align-items-center border gap-3 px-4 py-2">
                            <span class="d-inline-block text--base xxl-text">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                            <span class="d-block flex-grow-1">
                                +123 - 456 - 789000
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center border gap-3 px-4 py-2">
                            <span class="d-inline-block text--base xxl-text">
                                <i class="far fa-envelope"></i>
                            </span>
                            <span class="d-block flex-grow-1">
                                <a href="https://template.viserlab.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3f4c4a4f4f504d4b7f525e5653115c5052">[email&#160;protected]</a>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center border gap-3 px-4 py-2">
                            <span class="d-inline-block text--base xxl-text">
                                <i class="fas fa-globe"></i>
                            </span>
                            <span class="d-block flex-grow-1">
                                www.Jenkinson.com
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="zoo-box">
                    <form action="#" class="row g-4">
                        <div class="col-12">
                            <input type="text" class="form-control form--control" placeholder="Name*">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control form--control" placeholder="Email Address">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control form--control" placeholder="Subject">
                        </div>
                        <div class="col-12">
                            <textarea rows="5" class="form-control form--control" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <a href="#" class="btn btn--md btn--base text-uppercase"> Send </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
   <!-- Map Section  -->
<div class="section--sm">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="map-view">
                    <iframe class="map-view__frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55301685.08255781!2d-125.98605305!3d32.2218223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c18621bb20dec7%3A0x2591b3f455f36651!2sJenkinson&#39;s%20Aquarium!5e0!3m2!1svi!2s!4v1670576848196!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- <iframe class="map-view__frame" src = "https://maps.google.com/maps?q=23.7925,90.4078&amp;hl=es;z=14&amp;output=embed"></iframe> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Map Section End -->



  
<footer class="footer">
  <div class="section">
    <div class="container">
      <div class="row g-4 justify-content-xl-between">
        <div class="col-md-6 col-lg-3">
          <h4 class="info-section__title mt-0 text--white">Contact info</h4>
          <ul class="list" style="--gap: .5rem;">
            <li>
              <div class="list list--row">
                <span class="info-section__icon" >
                  <i class="fas fa-map-marker-alt"></i>
                </span>
                <p class="mb-0 text--white t-short-para" >
                  300 Ocean Ave N, Point Pleasant Beach, NJ 08742
                </p>
              </div>
            </li>
            <li>
              <div class="list list--row">
                <span class="info-section__icon" >
                  <i class="far fa-envelope"></i>
                </span>
                <ul class="list" style="--gap: 0.5rem">
                  <li >
                    <p class="mb-0 text--white t-short-para">
                      support24/7.com
                    </p>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <div class="list list--row">
                <span class="info-section__icon" >
                  <i class="fas fa-phone-alt"></i>
                </span>
                <ul class="list" style="--gap: 0.5rem">
                  <li >
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
            UseFul Link
          </h4>
          <ul class="list list--column">
            <li class="list--column__item">
              <a
                href="/our-mission"
                class="t-link t-link--base text--white d-inline-block"
              >
                Our Mission
              </a>
            </li>
            <li class="list--column__item">
              <a
                href="/education"
                class="t-link t-link--base text--white d-inline-block"
              >
                Education
              </a>
            </li>
            <li class="list--column__item">
              <a
                href="/error"
                class="t-link t-link--base text--white d-inline-block"
              >
                Peguin Cam
              </a>
            </li>
            <li class="list--column__item">
              <a
                href="/gallery"
                class="t-link t-link--base text--white d-inline-block"
              >
                Gallery
              </a>
            </li>
            <li class="list--column__item">
              <a
                href="/contact"
                class="t-link t-link--base text--white d-inline-block"
              >
                Contact
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-3 col-xl-2">
          <h4 class="info-section__title mt-0 text--white">
           Services
          </h4>
          <ul class="list list--column">
            <li class="list--column__item">
              <a
                href="/adopt-an-animal"
                class="t-link t-link--base text--white d-inline-block"
              >
                Adopt-An-Animal
              </a>
            </li>
            <li class="list--column__item">
              <a
                href="/animal-encounters"
                class="t-link t-link--base text--white d-inline-block"
              >
              Animals-Encounters
              </a>
            </li>
            <li class="list--column__item">
              <a
                href="/Promotions"
                class="t-link t-link--base text--white d-inline-block"
              >
                Promotions
              </a>
            </li>
            <li class="list--column__item">
              <a
                href="/Feeding-Schedule"
                class="t-link t-link--base text--white d-inline-block"
              >
               Feeding-Schedule
              </a>
            </li>
            <li class="list--column__item">
              <a
                href="/Proposals"
                class="t-link t-link--base text--white d-inline-block"
              >
                Proposals
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
                         
                        <div class="newsletter ms-md-auto me-md-0">
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
      <a href="#" class="t-link t-link--base text--base">Viserlife</a>
    </p>
  </div>
</footer>
      <!-- Footer End -->
            <!-- jQuery library -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/lib/jquery-3.6.0.min.js"></script>
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
      