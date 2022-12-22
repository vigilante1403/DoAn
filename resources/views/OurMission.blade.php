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
                <li class="primary-menu__list  ">
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
          <h2 class="mt-0 text--white">Our Mission</h2>
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
              <a href="/pages" class="t-link breadcrumbs__link text--white">
                Pages
              </a>
            </li>
            <li class="list--row__item breadcrumbs__item">
              <a
                href="/OurMission"
                class="t-link breadcrumbs__link text--white"
              >
                Our Mission
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

    
   


 <!-- Blog Details  -->
<div class="section">
  
  <div class="container">
    <div class="row g-4">
      <div class="col-md-7 col-lg-8">
        <img
          src="{{ asset('img/ourmissionbg.jpeg') }}"
          alt="image"
          class="img-fluid"
        />
        <ul class="list list--row flex-wrap classic-blog__meta">
          <li>
            Post By:
            <a href="#" class="t-link classic-blog__meta-link">Tomas Wood</a>
          </li>
          <li>
            Post On:
            <a href="#" class="t-link classic-blog__meta-link">22 Jan 2022</a>
          </li>
          <li>
            Tag:
            <a href="#" class="t-link classic-blog__meta-link">Birds</a>
          </li>
        </ul>
        <p class="mt-4">
          Jenkinson’s Aquarium is a privately owned facility located on the boardwalk in Point Pleasant Beach, NJ.
          </br>
          Opening in June of 1991, Jenkinson’s Aquarium has proven to be a valuable educational and recreational resource, as evidenced by its growing popularity. The aquarium is dedicated to educating the public on all aspects of marine life and conservation. Each exhibit is designed to promote awareness of the animals, their habitats and conservation.
        </p>
        <p class="">Exhibits such as Atlantic sharks, Pacific sharks, coral reefs, penguins, and seals give you the opportunity to get up close to animals from around the globe. Another attraction, the touch tank, allows visitors to touch live animals ranging from a sea star to a sting ray!</p>
        <p>In addition to the educational exhibits, the aquarium offers workshops for children of all ages, as well as professional development workshops for teachers and group tours for schools and scout groups. Groups are provided a general tour of the building and can choose between a number of Focus Programs that will highlight a chosen topic. If your group is unable to make it to the aquarium, we can come to you through our Outreach Program. If you are looking for somewhere special to have your child’s birthday party, the aquarium is just the place. We offer a Perky the Penguin Birthday Party for children turning four years or older. The aquarium is also available for evening functions such as wedding receptions, corporate parties or business meetings. For those who wish to volunteer their time, Jenkinson’s Aquarium has an extensive volunteer program for those over the age of sixteen. The aquarium staff, including volunteers, participate in many community programs including Adopt-a-Highway and NJ Community Water Watch.</p>
        <p>Either in the community or at the aquarium, our staff will greet you in a courteous and professional manner. The staff is on hand to answer any of your questions while visiting, making it an enjoyable and educational experience. On your way out, you can take the fun home with you after browsing through our aquarium Gift Shop which has an extensive selection of marine related products.</p>
        <p>Jenkinson’s Aquarium is accredited by the&nbsp;Association of Zoos and Aquariums&nbsp;(AZA). AZA is America’s leading accrediting organization for zoos and aquariums, and accredits only those institutions that have achieved rigorous, professional standards for animal welfare and management, veterinary care, wildlife conservation and research, education, safety, staffing, and more.</p>
        <p>The aquarium is open all year for your convenience, closing only on Thanksgiving, Christmas and New Year’s Day. If you would like information on the aquarium, educational workshops, our Outreach Program, birthday parties or rentals, please call&nbsp;(732) 899-1212. For information on group tours, please call Group Sales at&nbsp;(732) 892-3274. We look forward to hearing from you!</p>

        

        
        
      </div>
      
      <div class="col-md-5 col-lg-4">
        <div class="ps-xl-4 ps-xxl-5">
          <ul class="list" style="--gap: 2rem">
            <li>
              <div class="member-card">
                <img
                  src="{{ asset('images/member-card-1.png') }}"
                  alt="image"
                  class="member-card__img"
                />
                <div class="member-card__content align-items-start">
                  <h5 class="membership-card__title mb-2 text--white">
                    Premium
                  </h5>
                  <h4 class="membership-card__price mt-2">$108.59</h4>
                  <ul class="list list--base" style="--gap: 0.5rem">
                    <li class="text--white">20% Dsicount All Event</li>
                    <li class="text--white">Allow 2 adult person</li>
                  </ul>
                  <a href="#" class="btn btn--md btn--base mt-4">Buy Ticket</a>
                </div>
              </div>
            </li>
            <li>
              <div class="member-card">
                <img
                  src="{{ asset('images/member-card-1.png') }}"
                  alt="image"
                  class="member-card__img"
                />
                <div class="member-card__content align-items-start">
                  <h5 class="membership-card__title mb-2 text--white">
                    Premium
                  </h5>
                  <h4 class="membership-card__price mt-2">$108.59</h4>
                  <ul class="list list--base" style="--gap: 0.5rem">
                    <li class="text--white">20% Dsicount All Event</li>
                    <li class="text--white">Allow 2 adult person</li>
                  </ul>
                  <a href="#" class="btn btn--md btn--base mt-4">Buy Ticket</a>
                </div>
              </div>
            </li>
            

            
            <li>
              <div class="member-card">
                <img
                  src="{{ asset('images/member-card-1.png') }}"
                  alt="image"
                  class="member-card__img"
                />
                <div class="member-card__content align-items-start">
                  <h5 class="membership-card__title mb-2 text--white">
                    Premium
                  </h5>
                  <h4 class="membership-card__price mt-2">$108.59</h4>
                  <ul class="list list--base" style="--gap: 0.5rem">
                    <li class="text--white">20% Dsicount All Event</li>
                    <li class="text--white">Allow 2 adult person</li>
                  </ul>
                  <a href="#" class="btn btn--md btn--base mt-4">Buy Ticket</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
</div>
<!-- Blog Details End -->

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
                src="{{ asset('images/blog-post-1.png') }}"
                alt="image"
                class="blog-post__img"
              />
              <div class="blog-post__overlay">
               
                <div class="blog-post__content">
                  <h4 class="blog-post__title">
                    <a href="sub-html/Experiences" class="t-link blog-post__title-link">
                      Experiences
                    </a>
                  </h4>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="blog-post">
              <img
                src="{{ asset('images/blog-post-2.png') }}"
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
                src="{{ asset('images/blog-post-3.png') }}"
                alt="image"
                class="blog-post__img"
              />
              <div class="blog-post__overlay">
               
                <div class="blog-post__content">
                  <h4 class="blog-post__title">
                    <a href="/animal-art" class="t-link blog-post__title-link">
                      Animals Art
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
  