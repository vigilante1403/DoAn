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

 <!-- Bao responsive video-->
<style>
  video{
    width:100%;
    height:auto;
  }
</style>
@include('popup_style')
  <body>
    @include('popup_main')
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
        <a href="/" class="logo">
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
                      href="/cam"
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
<!-- Header End -->

    
    <!-- Hero-->
    <section class="hero hero_style_video">

      <div class="hero__video">
            <video autoplay="" loop="" muted="" playsinline="" poster="" id="head">
        <source src="{{ asset('img/Aquarium-Commercial-website.mp4') }}" type="video/mp4">
        </video>
            </div>
  
      
        <div class="wrap">
  
          <div class="hero__content">
            <p><img class="aligncenter size-full wp-image-9457" src="{{ asset('img/30th-logo-png.png') }} " width="50%" height="50%"></p>
            <!-- bao width,height -->
          </div>
          
          <a href="{{ asset('img/30th-logo-png.png') }}" class="hero__button button">
            30th Anniversary</a>
          
        </div>
  
      
      </section>
  <section class="page-section page-section_context_cta" style="background-color: #ffffff">
    <div class="container">
      <div class="page-cta page-cta-1 page-cta_style_no-image page-cta_style_has-button page-cta_bg_default">
        <div class="page-cta__text">
          <h1 class="page-cta__title"><span class="page-cta__title_style_alt">Welcome to</span> Jenkinson’s Aquarium</h1>
        <div class="page-cta__content">
          <p>Jenkinson’s Aquarium is a privately owned facility located on the boardwalk in Point Pleasant Beach, NJ.&nbsp; Since June of 1991, the aquarium has been dedicated to educating the public on all aspects of marine life and conservation. Each exhibit is designed to promote awareness of the animals, their habitats and conservation.&nbsp;We strive to provide our guests with a unique and memorable experience through creative exhibits as well as innovative educational and outreach programs</p>
        </div>
        </div>
        <div class="page-cta__action">
            <a class="page-cta__button button" href="/aquarium/visit/our-mission/">Find Out More!</a>
          </div>
        </div>
    </div>
  </section>
<!-- Hero End-->

    <!-- Welcome Section  -->
<div class="section welcome-section">
  <div class="container">
    <div class="row g-4 justify-content-center">
      <div class="col-md-10 col-xl-6">
        <div class="text-center text-xl-start">
          <span class="section__particles">
            <span class="section__subtitle"> Welcome to Jenkinson’s Aquarium </span>
          </span>
          <h2 class="section__title">
            Why You Should Visit <span>Jenkinson’s Aquarium</span>
          </h2>
          <p class="section__para mx-auto ms-xl-0 mb-5">
            Jenkinson’s Aquarium is now open daily from 10:00 am– 5 pm.Open everyday except Thanksgiving and Christmas. Please check out our Operating Schedule for daily closing times. We look forward to seeing you!
          </p>
        </div>
        <div class="row g-4">
          <div class="col-md-6">
            <div class="welcome-card">
              <div class="welcome-card__icon mx-auto ms-xl-0">
                <img
                  src="{{ asset('img/icon-car-parking.png') }}"
                  alt="image"
                  class="img-fluid"
                />
              </div>
              <div class="welcome-card__content">
                <h5 class="mt-xl-0 text-center text-xl-start">Aquarium Parking</h5>
                <p class="mb-0 text-center text-xl-start">
                  <span class="fw-md">Cost:</span> $17 (free for Bus)
                </p>
                <p class="mb-0 text-center text-xl-start">
                  Parking is available at the Jenkinson’s Inlet Parking Lot.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="welcome-card">
              <div class="welcome-card__icon mx-auto ms-xl-0">
                <img
                  src="{{ asset('img/wc-icon-2.png') }}"
                  alt="image"
                  class="img-fluid"
                />
              </div>
              <div class="welcome-card__content">
                <h5 class="mt-xl-0 text-center text-xl-start">Supper Eviorment</h5>
                <p class="mb-0 text-center text-xl-start">
                  300 ocean ave point pleasant beach nj 08742 united states.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="welcome-card">
              <div class="welcome-card__icon mx-auto ms-xl-0">
                <img
                  src="{{ asset('img/826963.png') }}"
                  alt="image"
                  class="img-fluid"
                />
              </div>
              <div class="welcome-card__content">
                <h5 class="mt-xl-0 text-center text-xl-start">World best Animals</h5>
                <p class="mb-0 text-center text-xl-start">
                  Connect with our animals, then connect with a bigger mission. Learn more about how we work to enlighten people.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="welcome-card">
              <div class="welcome-card__icon mx-auto ms-xl-0">
                <img
                  src="{{ asset('img/wc-icon-4.png') }}"
                  alt="image"
                  class="img-fluid"
                />
              </div>
              <div class="welcome-card__content">
                <h5 class="mt-xl-0 text-center text-xl-start">Guide & Security</h5>
                <p class="mb-0 text-center text-xl-start">
                  Safety for all is our highest priority, so for the benefit of the animals, guests, and staff, please follow the Jenkinson’s Aquarium safety .
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-10 col-xl-6 d-none d-xl-block">
        <div class="text-center">
          <img
            src="{{ asset('img/penguins_3158948.png') }}"
            alt="images"
            class="img-fluid mx-auto"
          />
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Welcome Section End -->

    <!-- Information Section  -->
<div class="info-section__container">
  <div class="section info-section">
    <div class="container">
      <div class="row gy-5 g-md-4">
        <div class="col-md-6 col-lg-4">
          <h4 class="info-section__title mt-0 text--white">Safety Info</h4>
          <ul class="list list--base">
            <li>
              <span class="d-block text--white">
                Smoking is prohibited, including e-cigarettes
              </span>
            </li>
            <li>
              <span class="d-block text--white">
                Do not feed the animals, throw objects
              </span>
            </li>
            <li>
              <span class="d-block text--white">
                Do not tap or bang on exhibit glass
              </span>
            </li>
            <li>
              <span class="d-block text--white">
                Respect walls and fences throughout the zoo
              </span>
            </li>
            <li>
              <span class="d-block text--white">
                Respect Zoo Rules & Gudie Line
              </span>
            </li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-4">
          <h4 class="info-section__title mt-0 text--white">Visiting Time</h4>
          <ul class="list list--underline">
            <li>
              <div class="list list--row justify-content-between">
                <div
                  class="list list--row align-items-center"
                  style="--gap: 0.5rem"
                >
                  <span class="text--base">
                  </span>
                  <span class="d-inline-block text--white sm-text">
                    10.00 AM
                  </span>
                </div>
                <span class="d-inline-block text--white sm-text">
                  Aquarium Opens
                </span>
              </div>
            </li>
            <li>
              <div class="list list--row justify-content-between">
                <div
                  class="list list--row align-items-center"
                  style="--gap: 0.5rem"
                >
                  <span class="text--base">
                  </span>
                  <span class="d-inline-block text--white sm-text">
                    03.30 PM
                  </span>
                </div>
                <span class="d-inline-block text--white sm-text">
                  Peguin Feeding
                </span>
              </div>
            </li>
            <li>
              <div class="list list--row justify-content-between">
                <div
                  class="list list--row align-items-center"
                  style="--gap: 0.5rem"
                >
                  <span class="text--base">
                  </span>
                  <span class="d-inline-block text--white sm-text">
                    04.30 PM
                  </span>
                </div>
                <span class="d-inline-block text--white sm-text">
                  Exhibits Close
                </span>
              </div>
            </li>
            <li>
              <div class="list list--row justify-content-between">
                <div
                  class="list list--row align-items-center"
                  style="--gap: 0.5rem"
                >
                  <span class="text--base">
                  </span>
                  <span class="d-inline-block text--white sm-text">
                    05.00 PM
                  </span>
                </div>
                <span class="d-inline-block text--white sm-text">
                  Aquarium Close
                </span>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-4">
          <h4 class="info-section__title mt-0 text--white">Contact info</h4>
          <ul class="list">
            <li>
              <div class="list list--row">
                <span class="info-section__icon">
                </span>
                <p class="mb-0 text--white t-short-para">
                  300 Ocean ave point pleasant Beach NJ 08742 United States.
                </p>
              </div>
            </li>
            <li>
              <div class="list list--row">
                <span class="info-section__icon">
                </span>
                <ul class="list" style="--gap: 0.5rem">
                  <li>
                    <p class="mb-0 text--white t-short-para">
                      information@jenkinsons.com
                    </p>
                  </li>
                  <li>
                    <p class="mb-0 text--white t-short-para">
                      <a href="https://template.viserlab.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="12717d7c667371667b7c747d52757f737b7e3c717d7f">[email&#160;protected]</a>
                    </p>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <div class="list list--row">
                <span class="info-section__icon">
                </span>
                <ul class="list" style="--gap: 0.5rem">
                  <li>
                    <p class="mb-0 text--white t-short-para">
                      +732.892.0600
                    </p>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Information Section End -->

    <!-- Gallery Section  -->
<!-- <div class="section--sm section--top">
  <div class="section__head">
    <div class="container">
      <div class="row g-4 justify-content-center">
        <div class="col-md-8 col-xl-6">
          <div class="text-center">
            <span class="section__particles">
              <span class="section__subtitle section__subtitle-dash"> Zoo Gallery </span>
            </span>
            <h2 class="section__title">
              Let`s see our Viserlife awsome <span>Gallery</span>
            </h2>
            <p class="section__para mx-auto mb-0">
              Animals at the Viserlife Zoo are on the move like never before. With a ground breaking animal exploration trail experience
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row g-4 justify-content-center">
      <div class="col-12">
        <ul class="list list--row gallery-list flex-wrap justify-content-center">
          <li>
            <button class="btn btn--md btn--gallery active" data-filter="all">
              ALL
            </button>
          </li>
          <li>
            <button class="btn btn--md btn--gallery" data-filter="tiger">
              TIGER
            </button>
          </li>
          <li>
            <button class="btn btn--md btn--gallery" data-filter="lion">
              LION
            </button>
          </li>
          <li>
            <button class="btn btn--md btn--gallery" data-filter="bird">
              WILD BIRDS
            </button>
          </li>
          <li>
            <button class="btn btn--md btn--gallery" data-filter="koala">
              KOALA
            </button>
          </li>
          <li>
            <button class="btn btn--md btn--gallery" data-filter="bear">
              BEAR
            </button>
          </li>
        </ul>
      </div>
      <div class="col-12">
        <div class="row filter-container show-img g-0">
          <div class="col-md-6 col-lg-4 filtr-item" data-category="all, tiger" data-sort="value">
            <div class="gallery-card">
              <img src="assets/images/gallery-1.png" alt="image" class="gallery-card__img">
              <div class="gallery-card__overlay">
                <a href="assets/images/gallery-1.png" class="t-link gallery-card__link">
                  <i class="las la-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 filtr-item" data-category="all, lion, bird" data-sort="value">
            <div class="gallery-card">
              <img src="assets/images/gallery-2.png" alt="image" class="gallery-card__img">
              <div class="gallery-card__overlay">
                <a href="assets/images/gallery-2.png" class="t-link gallery-card__link">
                  <i class="las la-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 filtr-item" data-category="all, bird" data-sort="value">
            <div class="gallery-card">
              <img src="assets/images/gallery-3.png" alt="image" class="gallery-card__img">
              <div class="gallery-card__overlay">
                <a href="assets/images/gallery-3.png" class="t-link gallery-card__link">
                  <i class="las la-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 filtr-item" data-category="all, lion, bear" data-sort="value">
            <div class="gallery-card">
              <img src="assets/images/gallery-4.png" alt="image" class="gallery-card__img">
              <div class="gallery-card__overlay">
                <a href="assets/images/gallery-4.png" class="t-link gallery-card__link">
                  <i class="las la-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 filtr-item" data-category="all, koala" data-sort="value">
            <div class="gallery-card">
              <img src="assets/images/gallery-5.png" alt="image" class="gallery-card__img">
              <div class="gallery-card__overlay">
                <a href="assets/images/gallery-5.png" class="t-link gallery-card__link">
                  <i class="las la-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 filtr-item" data-category="all, bird, tiger" data-sort="value">
            <div class="gallery-card">
              <img src="assets/images/gallery-6.png" alt="image" class="gallery-card__img">
              <div class="gallery-card__overlay">
                <a href="assets/images/gallery-6.png" class="t-link gallery-card__link">
                  <i class="las la-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 filtr-item" data-category="all, lion, bear" data-sort="value">
            <div class="gallery-card">
              <img src="assets/images/gallery-1.png" alt="image" class="gallery-card__img">
              <div class="gallery-card__overlay">
                <a href="assets/images/gallery-1.png" class="t-link gallery-card__link">
                  <i class="las la-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 filtr-item" data-category="all, koala, tiger" data-sort="value">
            <div class="gallery-card">
              <img src="assets/images/gallery-2.png" alt="image" class="gallery-card__img">
              <div class="gallery-card__overlay">
                <a href="assets/images/gallery-2.png" class="t-link gallery-card__link">
                  <i class="las la-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 filtr-item" data-category="all, bird, bear" data-sort="value">
            <div class="gallery-card">
              <img src="assets/images/gallery-3.png" alt="image" class="gallery-card__img">
              <div class="gallery-card__overlay">
                <a href="assets/images/gallery-3.png" class="t-link gallery-card__link">
                  <i class="las la-plus"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- Gallery Section End -->

    <!-- FAQ Section  -->
<!-- <div class="section--sm section--bottom">
  <div class="container">
    <div class="row g-4 justify-content-center">
      <div class="col-md-10 col-xl-6 col-xxl-5">
        <div class="text-center text-xl-start">
          <span class="section__particles">
            <span class="section__subtitle"> FAQ </span>
          </span>
          <h2 class="section__title">
            What`s you know about <span>Viserlife</span>
          </h2>
          <p class="section__para mx-auto ms-xl-0 mb-5">
            Need help with your science homework? Wondering about what our scientists do at the Zoo?
          </p>
        </div>
        <div class="accordion custom--accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
              >
                Why Viserlife?
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              data-bs-parent="#faqAccordion"
            >
              <div class="accordion-body">
                A world where humans and animals coexist in harmony—that's our vision. By supporting the Zoo, you can help us bring it to life.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
              >
                How to buy ticket in online?
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              data-bs-parent="#faqAccordion"
            >
              <div class="accordion-body">
                Viserlife Zoo is open daily from 9:30 am-5 pm. All guests, including members, must make advance online reservations.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
              >
              Adventure at Every Turn?
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              data-bs-parent="#faqAccordion"
            >
              <div class="accordion-body">
                Make your Viserlife Zoo visit memorable! From scavenger hunts and rope courses to carousel rides and animal experiences, we offer a number of attractions for visitors of all ages. Check below for details on what's currently open.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-10 col-xl-6 col-xxl-7 d-none d-xl-block">
          <div class="section__img-bottom text-center">
              <img src="assets/images/rhino.png" alt="images" class="img-fluid section__img-bottom-img">
          </div>
      </div>
    </div>
  </div>
</div> -->
<!-- FAQ Section End -->

    <!-- Fact Section  -->
<div class="fact-section-container">
  <div class="section fact-section">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-3 col-xl-3">
          <div class="counter-card">
            <div class="counter-card__head justify-content-center text-center">
              <h1 class="m-0">
                <span
                  class="counter-card__title odometer"
                  data-odometer-final="156"
                  >115</span
                >
              </h1>
            </div>
            <div class="counter-card__body">
              <h5 class="m-0 text-center text--white">Total type of animal</h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xl-3">
          <div class="counter-card">
            <div class="counter-card__head justify-content-center text-center">
              <h1 class="d-flex align-items-center gap-2 m-0">
                <span
                  class="counter-card__title odometer"
                  data-odometer-final="{{ $totalViews }}"
                >
                  8
                </span>
                <span class="counter-card__title">Mil</span>
              </h1>
            </div>
            <div class="counter-card__body">
              <h5 class="m-0 text-center text--white">Total Visitors</h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xl-3">
          <div class="counter-card">
            <div class="counter-card__head justify-content-center text-center">
              <h1 class="d-flex align-items-center gap-2 m-0">
                <span
                  class="counter-card__title odometer"
                  data-odometer-final="5"
                >
                  25
                </span>
                <span class="counter-card__title"></span>
              </h1>
            </div>
            <div class="counter-card__body">
              <h5 class="m-0 text-center text--white">Team Member</h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xl-3">
          <div class="counter-card">
            <div class="counter-card__head justify-content-center text-center">
              <h1 class="d-flex align-items-center gap-2 m-0">
                <span
                  class="counter-card__title odometer"
                  data-odometer-final="35"
                >
                  950
                </span>
                <span class="counter-card__title">k</span>
              </h1>
            </div>
            <div class="counter-card__body">
              <h5 class="m-0 text-center text--white">Save Wild Life</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fact Section End -->

    <!-- Feedback Section  -->
    <div class="feedback-section">
      <div class="section feedback-section__wrapper">
        <div class="section__head">
          <div class="container">
            <div class="row g-4 justify-content-center">
              <div class="col-md-10 col-xl-6">
                <div class="text-center">
                  <span class="section__particles">
                    <span class="section__subtitle section__subtitle-dash text--white"> Feedback </span>
                  </span>
                  <h2 class="section__title text--white">
                    What our visitor says about <span>Jenkinson's</span>
                  </h2>
                  <p class="section__para mx-auto text--white mb-0">
                    Your gift to Jenkinson;s Aquarium makes programs like these possible and supports animals here and around the world.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">

              <div class="feedback-slider">
                <div class="feedback-slider__item">
                  <div class="feedback-card">
                    <div class="feedback-card__head">
                      <div class="user user--xl">
                        <img
                          src="{{ asset('images/people-3.jpg') }}"
                          alt="image"
                          class="user__img"
                        />
                      </div>
                      <div class="flex-grow-1">
                        <h5 class="mt-0 mb-1">Robarts Jane</h5>
                        <span class="d-block sm-text"> Visitor </span>
                      </div>
                    </div>
                    <div class="feedback-card__body">
                      <p class="feedback-card__text mb-0">
                        By leading and supporting critical conservation projects in the field, encouraging and leveraging the power of thousands of visitors, and serving as an “ark” for endangered species, Viserlife Zoo has played an integral role in a variety of conservation efforts across numerous species.
                      </p>
                    </div>
                    <div class="feedback-card__footer">
                      <div class="feedback-card__quote-icon">
                     <i class="fas fa-solid fa-quote-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="feedback-slider__item">
                  <div class="feedback-card">
                    <div class="feedback-card__head">
                      <div class="user user--xl">
                        <img
                          src="{{ asset('images/people-4.jpg') }}"
                          alt="image"
                          class="user__img"
                        />
                      </div>
                      <div class="flex-grow-1">
                        <h5 class="mt-0 mb-1">Peter parker</h5>
                        <span class="d-block sm-text"> Visitor </span>
                      </div>
                    </div>
                    <div class="feedback-card__body">
                      <p class="feedback-card__text mb-0">
                        In addition to housing endangered animals—some extinct in the wild—and supporting conservation efforts around the world, Viserlife Zoo helps create empathy and understanding for wildlife through programs like the UNLESS Contest, which has inspired tens of thousands of students over the past decade to learn about and create advocacy campaigns to make a lasting impact on an endangered species of their choosing. 
                      </p>
                    </div>
                    <div class="feedback-card__footer">
                      <div class="feedback-card__quote-icon">
                     <i class="fas fa-solid fa-quote-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="feedback-slider__item">
                  <div class="feedback-card">
                    <div class="feedback-card__head">
                      <div class="user user--xl">
                        <img
                          src="{{ asset('images/people-5.jpg') }}"
                          alt="image"
                          class="user__img"
                        />
                      </div>
                      <div class="flex-grow-1">
                        <h5 class="mt-0 mb-1">Tony Stark</h5>
                        <span class="d-block sm-text"> Visitor </span>
                      </div>
                    </div>
                    <div class="feedback-card__body">
                      <p class="feedback-card__text mb-0">
                        To date, the UNLESS Contest has resulted in hundreds of trees planted in Brazil, thousands of signatures in support of a wildlife bridge, and dollars raised to support our partners in the field.
                      </p>
                    </div>
                    <div class="feedback-card__footer">
                      <div class="feedback-card__quote-icon">
                     <i class="fas fa-solid fa-quote-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="feedback-slider__item">
                  <div class="feedback-card">
                    <div class="feedback-card__head">
                      <div class="user user--xl">
                        <img
                          src="{{ asset('images/people-6.jpg') }}"
                          alt="image"
                          class="user__img"
                        />
                      </div>
                      <div class="flex-grow-1">
                        <h5 class="mt-0 mb-1">Steven Roger</h5>
                        <span class="d-block sm-text"> Visitor </span>
                      </div>
                    </div>
                    <div class="feedback-card__body">
                      <p class="feedback-card__text mb-0">
                        Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam
                        rhoncus. Maecenas tempus tellus eget condimentum rhoncus sem
                      </p>
                    </div>
                    <div class="feedback-card__footer">
                      <div class="feedback-card__quote-icon">
                     <i class="fas fa-solid fa-quote-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Feedback Section End -->
    <!-- Event Section  -->
<div class="section">
  <div class="section__head">
    <div class="container">
      <div class="row g-4 justify-content-center">
        <div class="col-md-8 col-xl-6">
          <div class="text-center">
            <span class="section__particles">
              <span class="section__subtitle section__subtitle-dash"
                >Latest Events</span
              >
            </span>
            <h2 class="section__title">Our Upcoming <span>Event</span></h2>
            <p class="section__para mx-auto mb-0">
              Aquarium animals are party animals.Plan your next unforgettable event with the Aquarium as your backdrop.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="event-card">
          <div class="event-card__img">
            <img
              src="{{ asset('img/Scoop on Sloths.jpg') }}"
              alt="image"
              class="event-card__img-is"
            />
            <div class="event-card__date">
              <div class="event-card__date-content">
                <h5 class="mt-0 mb-1 text-center text--white">8</h5>
                <h6 class="m-0 text-center text--white">DEC</h6>
              </div>
            </div>
          </div>
          <div class="event-card__content">
            <h5 class="event-card__title mb-2">
              <a
                href="#"
                class="t-link event-card__title-link"
              >
                Scoop on Sloths
              </a>
            </h5>
            <ul class="list list--row flex-wrap" style="--gap: 0.5rem">
              <li>
                <a href="#" class="t-link t-link--base text-clr sm-text fw-md">
                  8 December 2022
                </a>
              </li>
              <li>
                <a href="#" class="t-link t-link--base text-clr sm-text fw-md">
                  Jenkinson’s Aquarium
                </a>
              </li>
            </ul>
            <p class="mt-3 mb-0">
              Did you know that two-toed sloths spend most of their lives hanging upside down from trees? Meet Wally and find out why they do that and more!
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="event-card">
          <div class="event-card__img">
            <img
              src="{{ asset('img/Sea-of-Lightssquare.jpg') }}"
              alt="image"
              class="event-card__img-is"
            />
            <div class="event-card__date">
              <div class="event-card__date-content">
                <h5 class="mt-0 mb-1 text-center text--white">17</h5>
                <h6 class="m-0 text-center text--white">DEC</h6>
              </div>
            </div>
          </div>
          <div class="event-card__content">
            <h5 class="event-card__title mb-2">
              <a
                href="#"
                class="t-link event-card__title-link"
              >
              Sea of Lights
              </a>
            </h5>
            <ul class="list list--row flex-wrap" style="--gap: 0.5rem">
              <li>
                <a href="#" class="t-link t-link--base text-clr sm-text fw-md">
                  17 December 2022
                </a>
              </li>
              <li>
                <a href="#" class="t-link t-link--base text-clr sm-text fw-md">
                  Jenkinson’s Aquarium
                </a>
              </li>
            </ul>
            <p class="mt-3 mb-0">
              Join us for our Holiday Lights Spectacular this December 9th, 10th, 16th, 17th, 27th & 28th from 4-8pm each night (entertainment 5-8pm)!
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="event-card">
          <div class="event-card__img">
            <img
              src="{{ asset('img/Sea-of-Lightssquare.jpg') }}"
              alt="image"
              class="event-card__img-is"
            />
            <div class="event-card__date">
              <div class="event-card__date-content">
                <h5 class="mt-0 mb-1 text-center text--white">27</h5>
                <h6 class="m-0 text-center text--white">DEC</h6>
              </div>
            </div>
          </div>
          <div class="event-card__content">
            <h5 class="event-card__title mb-2">
              <a
                href="#"
                class="t-link event-card__title-link"
              >
              Sea Of Lights
              </a>
            </h5>
            <ul class="list list--row flex-wrap" style="--gap: 0.5rem">
              <li>
                <a href="#" class="t-link t-link--base text-clr sm-text fw-md">
                  27 December 2022
                </a>
              </li>
              <li>
                <a href="#" class="t-link t-link--base text-clr sm-text fw-md">
                  Jenkinson’s Aquarium
                </a>
              </li>
            </ul>
            <p class="mt-3 mb-0">
              Join us for our Holiday Lights Spectacular this December 9th, 10th, 16th, 17th, 27th & 28th from 4-8pm each night (entertainment 5-8pm)!
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="event-card">
          <div class="event-card__img">
            <img
              src="{{ asset('img/Sea-of-Lightssquare.jpg') }}"
              alt="image"
              class="event-card__img-is"
            />
            <div class="event-card__date">
              <div class="event-card__date-content">
                <h5 class="mt-0 mb-1 text-center text--white">28</h5>
                <h6 class="m-0 text-center text--white">DEC</h6>
              </div>
            </div>
          </div>
          <div class="event-card__content">
            <h5 class="event-card__title mb-2">
              <a
                href="#"
                class="t-link event-card__title-link"
              >
                Sea Of Lights
              </a>
            </h5>
            <ul class="list list--row flex-wrap" style="--gap: 0.5rem">
              <li>
                <a href="#" class="t-link t-link--base text-clr sm-text fw-md">
                  28 December 2022
                </a>
              </li>
              <li>
                <a href="#" class="t-link t-link--base text-clr sm-text fw-md">
                  Jenkinson’s Aquarium
                </a>
              </li>
            </ul>
            <p class="mt-3 mb-0">
              Join us for our Holiday Lights Spectacular this December 9th, 10th, 16th, 17th, 27th & 28th from 4-8pm each night (entertainment 5-8pm)!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Event Section End -->

    <!-- Expert Authority  -->
<!-- <div class="section expert-section">
  <div class="section__head">
    <div class="container">
      <div class="row g-4 justify-content-center">
        <div class="col-md-8 col-xl-6">
          <div class="text-center">
            <span class="section__particles">
              <span class="section__subtitle section__subtitle-dash">Authority</span>
            </span>
            <h2 class="section__title">
              Our Expert <span>Authority</span>
            </h2>
            <p class="section__para mx-auto mb-0">
              A world where humans and animals coexist in harmony that's our vision. By supporting us, you can help us bring it to life.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="expert-card">
          <div class="expert-card__head">
            <h5 class="mt-0 mb-2 text-center text--white">Kushiyan Jebas</h5>
            <p class="m-0 text-center text--base">Founder & CEO</p>
          </div>
          <div class="expert-card__body">
            <img
              src="assets/images/member-img-3.png"
              alt="image"
              class="expert-card__img"
            />
            <div class="expert-card__overlay">
              <ul class="list list--row flex-wrap" style="--gap: 0.5rem">
                <li>
                  <a
                    href="#"
                    class="t-link icon icon--circle icon--sm expert-card__icon"
                  >
                  <i class="fas fa-solid fa-quote-right"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="t-link icon icon--circle icon--sm expert-card__icon"
                  >
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="t-link icon icon--circle icon--sm expert-card__icon"
                  >
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="expert-card">
          <div class="expert-card__head">
            <h5 class="mt-0 mb-2 text-center text--white">Robart Williams</h5>
            <p class="m-0 text-center text--base">Geologist</p>
          </div>
          <div class="expert-card__body">
            <img
              src="assets/images/member-img-4.png"
              alt="image"
              class="expert-card__img"
            />
            <div class="expert-card__overlay">
              <ul class="list list--row flex-wrap" style="--gap: 0.5rem">
                <li>
                  <a
                    href="#"
                    class="t-link icon icon--circle icon--sm expert-card__icon"
                  >
                  <i class="fas fa-solid fa-quote-right"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="t-link icon icon--circle icon--sm expert-card__icon"
                  >
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="t-link icon icon--circle icon--sm expert-card__icon"
                  >
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="expert-card">
          <div class="expert-card__head">
            <h5 class="mt-0 mb-2 text-center text--white">Jonson Likans</h5>
            <p class="m-0 text-center text--base">Animal Specialist</p>
          </div>
          <div class="expert-card__body">
            <img
              src="assets/images/signup-img.png"
              alt="image"
              class="expert-card__img"
            />
            <div class="expert-card__overlay">
              <ul class="list list--row flex-wrap" style="--gap: 0.5rem">
                <li>
                  <a
                    href="#"
                    class="t-link icon icon--circle icon--sm expert-card__icon"
                  >
                  <i class="fas fa-solid fa-quote-right"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="t-link icon icon--circle icon--sm expert-card__icon"
                  >
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="t-link icon icon--circle icon--sm expert-card__icon"
                  >
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="expert-card">
          <div class="expert-card__head">
            <h5 class="mt-0 mb-2 text-center text--white">Kushiyan Jebas</h5>
            <p class="m-0 text-center text--base">veterinarian</p>
          </div>
          <div class="expert-card__body">
            <img
              src="assets/images/people-6.jpg"
              alt="image"
              class="expert-card__img"
            />
            <div class="expert-card__overlay">
              <ul class="list list--row flex-wrap" style="--gap: 0.5rem">
                <li>
                  <a
                    href="#"
                    class="t-link icon icon--circle icon--sm expert-card__icon"
                  >
                  <i class="fas fa-solid fa-quote-right"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="t-link icon icon--circle icon--sm expert-card__icon"
                  >
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="#"
                    class="t-link icon icon--circle icon--sm expert-card__icon"
                  >
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- Expert Authority End -->

    <!-- Exhibition Section  -->

<!-- Exhibition Section End -->

    <!-- Blog Post  -->

<!-- Blog Post End -->

    <!-- Client Section  -->
<!-- <div class="section--sm section--bottom">
    <div class="container">
        <div class="row g-4 g-sm-0 justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="client-card">
                    <img src="assets/images/client-1.png" alt="image" class="client-card__img">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="client-card">
                    <img src="assets/images/client-2.png" alt="image" class="client-card__img">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="client-card">
                    <img src="assets/images/client-3.png" alt="image" class="client-card__img">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="client-card">
                    <img src="assets/images/client-4.png" alt="image" class="client-card__img">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="client-card">
                    <img src="assets/images/client-5.png" alt="image" class="client-card__img">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="client-card">
                    <img src="assets/images/client-6.png" alt="image" class="client-card__img">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="client-card">
                    <img src="assets/images/client-7.png" alt="image" class="client-card__img">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="client-card">
                    <img src="assets/images/client-8.png" alt="image" class="client-card__img">
                </div>
            </div>
        </div>
    </div>
</div> -->
<div style="background-color:hsl(var(--dark))">
<div class="feedback container" style="color:white">
  <div class="title" style="margin-top:15px;">
  <h4 style="color:white" >Reviews/Ratings</h4>
  </div>
  @include('comments.feedbacksDisplay')
                    <form method="post" action="{{ route('feedbacks.store') }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="text"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success mt-3" value="Add Comment" />
                        </div>
                    </form>
</div>
</div>
  <!-- Client Section Slider -->
  <div class="section--sm section--bottom">
  <div class="section__head">
      <div class="container">
        <div class="row g-4 justify-content-center">
          <div class="col-md-8 col-xl-6">
            <div class="text-center">
              <span class="section__particles">
                <span class="section__subtitle section__subtitle-dash"
                  >Our Partner</span
                >
              </span>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="client-slider">
              <div class="client-slider__item">
                <div class="client-card">
                    <img src="{{ asset('img/American-Littoral-Society.png') }}" alt="image" class="client-card__img">
                </div>
            </div>
            <div class="client-slider__item">
                <div class="client-card">
                    <img src="{{ asset('img/Clean-Ocean-Action-300x294.jpg') }}" alt="image" class="client-card__img">
                </div>
            </div>
            <div class="client-slider__item">
                <div class="client-card">
                    <img src="{{ asset('img/Gotham-Whale-.png') }}" alt="image" class="client-card__img">
                </div>
            </div>
            <div class="client-slider__item">
                <div class="client-card">
                    <img src="{{ asset('img/reclam.png') }}" alt="image" class="client-card__img">
                </div>
            </div>
            <div class="client-slider__item">
                <div class="client-card">
                    <img src="{{ asset('img/SANCCOB-.png') }}" alt="image" class="client-card__img">
                </div>
            </div>
            <div class="client-slider__item">
                <div class="client-card">
                    <img src="{{ asset('img/Sea-Turtle-Recovery.jpg') }}" alt="image" class="client-card__img">
                </div>
            </div>
            <div class="client-slider__item">
                <div class="client-card">
                    <img src="{{ asset('img/Ocean-Conservancy.png') }}" alt="image" class="client-card__img">
                </div>
            </div>
            <div class="client-slider__item">
                <div class="client-card">
                    <img src="{{ asset('img/Turtle-Survival-Alliance.jpg') }}" alt="image" class="client-card__img">
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- Client Section End -->
<!-- Subscribe Section End -->


    
<!-- Footer  -->

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
      
      <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="{{ asset('js/has-sub.js') }}"></script>
      <script src="{{ asset('js/lib/jquery-3.6.0.min.js') }}"></script>
      <!-- bootstrap 5 js -->
      <script src="{{ asset('js/app.js') }}"></script>
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
        
   
  </body>
@include('popup_script')
<script>
  var Slideshow = {

paginate: function () {
var slides = $('div.client-slider__item', '#slideshow'),
  total = slides.length;
$('#slideshow-nav-total').text(total);
slides.each(function (i) {
  $(this).data('index', i + 1);
});
},

navigate: function () {
$('a', '#slideshow-nav').click(function (e) {
  e.preventDefault();
  var $a = $(this);
  var slide = $($a.attr('href'));
  var wrapper = $('#slideshow-wrapper');

  wrapper.animate(function () {
      $('#slideshow-nav-current').text(slide.data('index'));
      $a.addClass('active').siblings('a').removeClass('active');
  });

});
},

init: function () {
this.paginate();
this.navigate();
}

};

$(function () {
Slideshow.init();
});
</script>
</html>
