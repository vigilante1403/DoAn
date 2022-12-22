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
<style>
    *
  {
    font-family: 'PT Sans Caption', sans-serif, 'arial', 'Times New Roman';
  }
  /* Error Page */
      .error .clip .shadow
      {
          height: 180px;  /*Contrall*/
      }
      .error .clip:nth-of-type(2) .shadow
      {
          width: 130px;   /*Contrall play with javascript*/ 
      }
      .error .clip:nth-of-type(1) .shadow, .error .clip:nth-of-type(3) .shadow
      {
          width: 250px; /*Contrall*/
      }
      .error .digit
      {
          width: 150px;   /*Contrall*/
          height: 150px;  /*Contrall*/
          line-height: 150px; /*Contrall*/
          font-size: 120px;
          font-weight: bold;
      }
      .error h2   /*Contrall*/
      {
          font-size: 32px;
      }
      .error .msg /*Contrall*/
      {
          top: -190px;
          left: 30%;
          width: 80px;
          height: 80px;
          line-height: 80px;
          font-size: 32px;
      }
      .error span.triangle    /*Contrall*/
      {
          top: 70%;
          right: 0%;
          border-left: 20px solid #535353;
          border-top: 15px solid transparent;
          border-bottom: 15px solid transparent;
      }
  
  
      .error .container-error-404
      {
        margin-top: 5%;
          position: relative;
          height: 250px;
          padding-top: 40px;
      }
      .error .container-error-404 .clip
      {
          display: inline-block;
          transform: skew(-45deg);
      }
      .error .clip .shadow
      {
          
          overflow: hidden;
      }
      .error .clip:nth-of-type(2) .shadow
      {
          overflow: hidden;
          position: relative;
          box-shadow: inset 20px 0px 20px -15px rgba(150, 150, 150,0.8), 20px 0px 20px -15px rgba(150, 150, 150,0.8);
      }
      
      .error .clip:nth-of-type(3) .shadow:after, .error .clip:nth-of-type(1) .shadow:after
      {
          content: "";
          position: absolute;
          right: -8px;
          bottom: 0px;
          z-index: 9999;
          height: 100%;
          width: 10px;
          background: linear-gradient(90deg, transparent, rgba(173,173,173, 0.8), transparent);
          border-radius: 50%;
      }
      .error .clip:nth-of-type(3) .shadow:after
      {
          left: -8px;
      }
      .error .digit
      {
          position: relative;
          top: 8%;
          color: white;
          background: #07B3F9;
          border-radius: 50%;
          display: inline-block;
          transform: skew(45deg);
      }
      .error .clip:nth-of-type(2) .digit
      {
          left: -10%;
      }
      .error .clip:nth-of-type(1) .digit
      {
          right: -20%;
      }.error .clip:nth-of-type(3) .digit
      {
          left: -20%;
      }    
      .error h2
      {
          color: #A2A2A2;
          font-weight: bold;
          padding-bottom: 20px;
      }
      .error .msg
      {
          position: relative;
          z-index: 9999;
          display: block;
          background: #535353;
          color: #A2A2A2;
          border-radius: 50%;
          font-style: italic;
      }
      .error .triangle
      {
          position: absolute;
          z-index: 999;
          transform: rotate(45deg);
          content: "";
          width: 0; 
          height: 0; 
      }
  
  /* Error Page */
  @media(max-width: 767px)
  {
      /* Error Page */
              .error .clip .shadow
              {
                  height: 100px;  /*Contrall*/
              }
              .error .clip:nth-of-type(2) .shadow
              {
                  width: 80px;   /*Contrall play with javascript*/ 
              }
              .error .clip:nth-of-type(1) .shadow, .error .clip:nth-of-type(3) .shadow
              {
                  width: 100px; /*Contrall*/
              }
              .error .digit
              {
                  width: 80px;   /*Contrall*/
                  height: 80px;  /*Contrall*/
                  line-height: 80px; /*Contrall*/
                  font-size: 52px;
              }
              .error h2   /*Contrall*/
              {
                  font-size: 24px;
              }
              .error .msg /*Contrall*/
              {
                  top: -110px;
                  left: 15%;
                  width: 40px;
                  height: 40px;
                  line-height: 40px;
                  font-size: 18px;
              }
              .error span.triangle    /*Contrall*/
              {
                  top: 70%;
                  right: -3%;
                  border-left: 10px solid #535353;
                  border-top: 8px solid transparent;
                  border-bottom: 8px solid transparent;
              }
  .error .container-error-404
    {
      height: 150px;
    }
          /* Error Page */
  }
  
  /*--------------------------------------------Framework --------------------------------*/
  
  .overlay { position: relative; z-index: 20; } /*done*/
      .ground-color { background: white; }  /*done*/
      .item-bg-color { background: #EAEAEA } /*done*/
      
      /* Padding Section*/
          .padding-top { padding-top: 10px; } /*done*/
          .padding-bottom { padding-bottom: 10px; }   /*done*/
          .padding-vertical { padding-top: 10px; padding-bottom: 10px; }
          .padding-horizontal { padding-left: 10px; padding-right: 10px; }
          .padding-all { padding: 10px; }   /*done*/
  
          .no-padding-left { padding-left: 0px; }    /*done*/
          .no-padding-right { padding-right: 0px; }   /*done*/
          .no-vertical-padding { padding-top: 0px; padding-bottom: 0px; }
          .no-horizontal-padding { padding-left: 0px; padding-right: 0px; }
          .no-padding { padding: 0px; }   /*done*/
      /* Padding Section*/
  
      /* Margin section */
          .margin-top { margin-top: 10px; }   /*done*/
          .margin-bottom { margin-bottom: 10px; } /*done*/
          .margin-right { margin-right: 10px; } /*done*/
          .margin-left { margin-left: 10px; } /*done*/
          .margin-horizontal { margin-left: 10px; margin-right: 10px; } /*done*/
          .margin-vertical { margin-top: 10px; margin-bottom: 10px; } /*done*/
          .margin-all { margin: 10px; }   /*done*/
          .no-margin { margin: 0px; }   /*done*/
  
          .no-vertical-margin { margin-top: 0px; margin-bottom: 0px; }
          .no-horizontal-margin { margin-left: 0px; margin-right: 0px; }
  
          .inside-col-shrink { margin: 0px 20px; }    /*done - For the inside sections that has also Title section*/ 
      /* Margin section */
  
      hr
      { margin: 0px; padding: 0px; border-top: 1px dashed #999; }
  /*--------------------------------------------FrameWork------------------------*/
  
  </style>
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
          <a href="{{ route('test') }}" class="logo">
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
                  <a href="{{ route('test') }}" class="primary-menu__link text-capitalize">
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
<div class="banner" style="background-image: url({{ asset('img/banner-1.jpeg') }})">
  <div class="banner__content">
    <div class="container">
      <div class="row g-3 justify-content-center">
        <div class="col-lg-10 text-center">
          <h2 class="mt-0 text--white">Pages Not Found</h2>
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
                Error
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

     <!-- Error Page -->
     <div class="error">
        <div class="container-floud">
            <div class="col-xs-12 ground-color text-center">
                <div class="container-error-404">
                    <div class="clip"><div class="shadow"><span class="digit thirdDigit"></span></div></div>
                    <div class="clip"><div class="shadow"><span class="digit secondDigit"></span></div></div>
                    <div class="clip"><div class="shadow"><span class="digit firstDigit"></span></div></div>
                    <div class="msg">OH!<span class="triangle"></span></div>
                </div>
                <h2 class="h1">Sorry! Page not found</h2>
                <h6 style="color: #07B3F9;margin-bottom:5%;">Go to back <a href="{{ route('test') }}">Home</a></h6>
            </div>
        </div>
    </div>
<!-- Error Page -->
   


 


   


          
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
     
    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
      <script>
        function randomNum() {
        "use strict";
        return Math.floor(Math.random() * 9) + 1;
      }
      var loop1,
        loop2,
        loop3,
        time = 30,
        i = 0,
        number,
        selector3 = document.querySelector(".thirdDigit"),
        selector2 = document.querySelector(".secondDigit"),
        selector1 = document.querySelector(".firstDigit");
      loop3 = setInterval(function () {
        "use strict";
        if (i > 40) {
          clearInterval(loop3);
          selector3.textContent = 4;
        } else {
          selector3.textContent = randomNum();
          i++;
        }
      }, time);
      loop2 = setInterval(function () {
        "use strict";
        if (i > 80) {
          clearInterval(loop2);
          selector2.textContent = 0;
        } else {
          selector2.textContent = randomNum();
          i++;
        }
      }, time);
      loop1 = setInterval(function () {
        "use strict";
        if (i > 100) {
          clearInterval(loop1);
          selector1.textContent = 4;
        } else {
          selector1.textContent = randomNum();
          i++;
        }
      }, time);
      
      </script></body>
  
  </html>
  