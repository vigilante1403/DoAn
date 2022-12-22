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
<div class="banner" style="background-image: url({{ asset('img/banner-11.jpeg') }})">
  <div class="banner__content">
    <div class="container">
      <div class="row g-3 justify-content-center">
        <div class="col-lg-10 text-center">
          <h2 class="mt-0 text--white">Experiences</h2>
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
              <a href="/Pages" class="t-link breadcrumbs__link text--white">
                Pages
              </a>
            </li>
            <li class="list--row__item breadcrumbs__item">
              <a
                href="/experiences"
                class="t-link breadcrumbs__link text--white"
              >
                Experiences
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

    
<div class="section">
  <div class="container">
    <div class="row g-4" style="justify-content:center;"  >
      <div class="col-11 col-lg-11" style="font-size: 1.2rem;">

            <div class="row g-4" style="flex-direction:row">
              <div class="col-lg-4" >
                <div class="event-card" style="flex-direction:column;align-items:center">
                  <h5 class="event-card__title mb-2" style="">
                    <a
                      href="/services/animal-encounters"
                      class="t-link event-card__title-link"
                    >
                    <span>Animal Encounters</span>
                    </a>
                  </h5>
                  <div class="" style="width:100%">
                    <img
                      src="{{ asset('img/encounter-image.jpeg') }}"
                      alt="image"
                      class="event-card__img-is"
                    />

                  </div>
                  <div class="event-card__content" style="align-items:flex-start">
                    
                  
                    <p>Join us for a one of a kind experience!</p>
                  <p>Jenkinson's Aquarium offers the unique opportunity to meet one of our amazing animals while learning all about them from the keepers who know them best!</p>
                  <p>During this 30 minute experience, you'll be able to see one of our penguins or sloth (you may know his name already...Wally!) and see how our keepers are able to work with these animals on a daily basis. Learn what they like to eat, what their favorite enrichment is, how long they sleep and so much more. Don't forget your camera (or phone), these photos are something you will love to look back at!</p>
                  <p>Whether you are looking for the perfect gift or looking to treat yourself, our animal encounters are truly unique and fun.</p> 
                  </div>
                </div>
              </div>
              <div class="col-lg-4" >
                <div class="event-card" style="flex-direction:column;align-items:center">
                  <h5 class="event-card__title mb-2">
                    <a
                      href=""
                      class="t-link event-card__title-link"
                    >
                    Private Behind the Scenes Tour
                    </a>
                  </h5>
                  <div class="" style="width:100%">
                    <img
                      src="{{ asset('img/behind-tour.jpeg') }}"
                      alt="image"
                      class="event-card__img-is"
                    />

                  </div>
                  <div class="event-card__content">
                   
                    <p >Book a private Behind the Scenes Tour and learn all the SEAcrets about what it takes to run an aquarium during this 60 minute tour. Discover what goes on behind the glass and what's involved with taking care of a variety of marine life. From life support and the food prep area to a look over our shark exhibit, this tour is sure to be memorable!</p>
                    <p>All participants must wear a mask/facial covering during the program.<strong><br>
                    </strong>Closed toed shoes must me worn</p>
                    <p>Minimum 2 guests<br>
                      $40 per Adult<br>
                      $25 per Child (Ages 5 and up)<br>
                      Includes admission to the Aquarium</p>
                      <p>Pre-registration is required. Please call 732-899-1659 or fill out the form below for more information.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4" >
                <div class="event-card" style="flex-direction:column;align-items:center">
                  <h5 class="event-card__title mb-2">
                    <a
                      href=""
                      class="t-link event-card__title-link"
                    >
                      <span>Proposals
                      </span>
                    </a>
                  </h5>
                  <div class="" style="width:100%">
                    <img
                      src="{{ asset('img/proposals-image.jpeg') }}"
                      alt="image"
                      class="event-card__img-is"
                    />

                  </div>
                  <div class="event-card__content">
                   
                    <p>Whether you are looking to propose or ask a date to prom, Jenkinson's Aquarium provides a unique and memorable setting for your special moment.</p>
                    <p>Our S.C.U.B.A diver will show off your personalized sign (customer must provide sign) underwater to that special someone.</p>
                    <p>For more information or to setup your proposal or promposal call 732-899-1659 or fill out the form below and an aquarium member will be in touch.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4" >
                <div class="event-card" style="flex-direction:column;;align-items:center">
                  <h5 class="event-card__title mb-2">
                    <a
                      href=""
                      class="t-link event-card__title-link"
                    >
                    <span>Virtual Programs</span>
                    </a>
                  </h5>
                  <div class="" style="width:100%">
                    <img
                      src="{{ asset('img/vitural-program.jpeg') }}"
                      alt="image"
                      class="event-card__img-is"
                    />

                  </div>
                  <div class="event-card__content">
                    
                  <p>All the fun of the Aquarium in the comfort of your home! </p>
                  <p>Jenkinson’s Aquarium is going virtual for schools, camps, and libraries! All educational programs are adapted to the appropriate grade level and support the New Jersey Core Curriculum Content Standards.</p>
                  <p>The programs currently being offered are: Penguin Pointers, Parrot Palooza, Outrageous Reptiles, No Bones About It, NJ’s Precious Pinelands, and Sloth Safari.</p>
                  <p>The cost for one 45-minute program is $150.00 which includes an environmental conservation component, live animal ambassador, and time for questions.</p>
                  <p>For additional information or if you would like to book a virtual program, please call 732-899-1659 or fill out the form below.</p>


                  </div>
                </div>
              </div>
              <div class="col-lg-4" >
                <div class="event-card" style="flex-direction:column;align-items:center">
                  <h5 class="event-card__title mb-2">
                    <a
                      href=""
                      class="t-link event-card__title-link"
                    >
                    Animal Educational Programs
                    </a>
                  </h5>
                  <div class="" style="width:100%">
                    <img
                      src="{{ asset('img/educaton-program.jpeg') }}"
                      alt="image"
                      class="event-card__img-is"
                    />

                  </div>
                  <div class="event-card__content">
                    
                    <p><strong>Scoop on Sloths</strong><br>
                      Meet Wally, our two-toed sloth, and learn all about this amazing animal from the keepers who know him best! Get your questions and cameras ready!</p>
                      <p><strong>Penguin Pointers</strong><br>
                        Meet one of our famous feathered friends while learning about them and their wild cousins.</p>
                        <p>Limited amount of participants<br>
                          30 minutes per program</p>
                          <p>All participants must wear a mask/facial covering during the program.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4" >
                <div class="event-card" style="flex-direction:column;;align-items:center">
                  <h5 class="event-card__title mb-2">
                    <a
                      href=""
                      class="t-link event-card__title-link"
                    >
                      <span>Adopt-An-Animal</span>
                    </a>
                  </h5>
                  <div class="" style="width:100%">
                    <img
                      src="{{ asset('img/Adpot-animal.jpeg') }}"
                      alt="image"
                      class="event-card__img-is"
                    />

                  </div>
                  <div class="event-card__content">
                    <p>A Wild way to support the animals you love the most!</p>
                    <p>Adopt your favorite animal(s) from Jenkinson's Aquarium! Choose from Penguins, Sloth, Seals, Sharks or Sea Turtle - each kit comes with a plush animal, adoption certificate, photo, 2 aquarium passes and more!</p>
                    <p>Adoption kits make great gifts for the holidays, birthdays or any special occasion.</p>
                  </div>
                </div>
              </div>
              
            </div>
          
        

        
      </div>
      
      
    </div>
  </div>
</div>

   

<div class="container">
  <div class="">
    <div class="section__head">
      <div class="container">
        <h4>Related Articles</h4>
      </div>
      <div class="container">
        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <div class="blog-post">
              <img
                src="{{ asset('img/ourmissionbg.jpeg') }}"
                alt="image"
                class="blog-post__img"
              />
              <div class="blog-post__overlay">
               
                <div class="blog-post__content">
                  <h4 class="blog-post__title">
                    <a href="/our-mission" class="t-link blog-post__title-link">
                      Our Mission
                    </a>
                  </h4>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="blog-post">
              <img
                src="{{ asset('img/education-programs.jpeg') }}"
                alt="image"
                class="blog-post__img"
              />
              <div class="blog-post__overlay">
               
                <div class="blog-post__content">
                  <h4 class="blog-post__title">
                    <a href="/education" class="t-link blog-post__title-link">
                     Education
                    </a>
                  </h4>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="blog-post">
              <img
                src="{{ asset('img/proposals-image.jpeg') }}"
                alt="image"
                class="blog-post__img"
              />
              <div class="blog-post__overlay">
               
                <div class="blog-post__content">
                  <h4 class="blog-post__title">
                    <a href="/Proposals" class="t-link blog-post__title-link">
                      Proposals
                    </a>
                  </h4>
                  
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <hr>
  </div>
</div>
 

  <!-- Client Section Slider -->
  <div class="section--sm">
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
  