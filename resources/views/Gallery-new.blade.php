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
        <span class="back-top">
          <i class="las la-angle-double-up"></i>
        </span>
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
                    Home
                  </a>
                </li>
                
                <li class="primary-menu__list has-sub ">
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
                
                <li class="primary-menu__list has-sub ">
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
                <li class="primary-menu__list has-sub ">
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
                <li class="primary-menu__list has-sub ">
                  <a href="/viewgallery" class="primary-menu__link text-capitalize">Gallery</a>
                </li>
                <li class="primary-menu__list has-sub">
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
                <li class="primary-menu__list has-sub d-none d-lg-block">
                  <a
                    href="#"
                    class="primary-menu__link t-link search--toggler text-center"
                  >
                    <i class="las la-search"></i>
                  </a>
                </li>
                <li class="primary-menu__list has-sub ">
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


    <!-- Banner  -->
<div class="banner" style="background-image: url({{ asset('img/banner-3.jpeg') }})">
  <div class="banner__content">
    <div class="container">
      <div class="row g-3 justify-content-center">
        <div class="col-lg-10 text-center">
          <h2 class="mt-0 text--white">Aquarium Gallery</h2>
          <!-- Breadcrumbs  -->
          <ul
            class="list list--row breadcrumbs justify-content-center"
            style="--gap: 2rem"
          >
            <li class="list--row__item breadcrumbs__item">
              <a href="/" class="t-link breadcrumbs__link text--white">
                Home
              </a>
            </li>
            <li class="list--row__item breadcrumbs__item">
              <a
                href="/viewgallery"
                class="t-link breadcrumbs__link text--white"
              >
                Gallery
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

    
    <!-- Zoo Gallery  -->
    <div class="section--top">
        <div class="section__head">
          <div class="container">
            <div class="row g-4 show-img">
              @foreach($pictures as $picture)
              <div class="col-md-6 col-lg-4">
                <div class="gallery-card">
                  <img
                    src="{{ asset($picture->img) }}"
                    alt="image"
                    class="gallery-card__img"
                  />
                  <div class="gallery-card__overlay">
                    <a
                      href="{{ asset($picture->img) }}"
                      class="t-link gallery-card__link show-img"
                    >
                      <i class="las la-plus"></i>
                    </a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
              <div class="col-12">
                <nav>
                    <ul class="pagination justify-content-center">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
              </div>
          </div>
        </div>
      </div>
      <!-- Zoo Gallery End -->


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

  <!-- Client Section Slider -->
  <div class="section--sm">
    
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
</div>
<!-- Client Section End -->

         
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
                href="sub-html/OurMission.html"
                class="t-link t-link--base text--white d-inline-block"
              >
                Our Mission
              </a>
            </li>
            <li class="list--column__item">
              <a
                href="sub-html/Education.html"
                class="t-link t-link--base text--white d-inline-block"
              >
                Education
              </a>
            </li>
            <li class="list--column__item">
              <a
                href="sub-html/PeguinCam.html"
                class="t-link t-link--base text--white d-inline-block"
              >
                Peguin Cam
              </a>
            </li>
            <li class="list--column__item">
              <a
                href="Gallery.html"
                class="t-link t-link--base text--white d-inline-block"
              >
                Gallery
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
           Services
          </h4>
          <ul class="list list--column">
            <li class="list--column__item">
              <a
                href="sub-html/Adopt-An-Animal.html"
                class="t-link t-link--base text--white d-inline-block"
              >
                Adopt-An-Animal
              </a>
            </li>
            <li class="list--column__item">
              <a
                href="sub-html/Animal-Encounters.html"
                class="t-link t-link--base text--white d-inline-block"
              >
              Animals-Encounters
              </a>
            </li>
            <li class="list--column__item">
              <a
                href="sub-html/Promotions.html"
                class="t-link t-link--base text--white d-inline-block"
              >
                Promotions
              </a>
            </li>
            <li class="list--column__item">
              <a
                href="sub-html/Feeding-Schedule.html"
                class="t-link t-link--base text--white d-inline-block"
              >
               Feeding-Schedule
              </a>
            </li>
            <li class="list--column__item">
              <a
                href="sub-html/Proposals.html"
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
     
    </body>
  
  </html>
  