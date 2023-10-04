<?php
$pagename = "Home";
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <?php
        include './theme-part/header-script.php';
        ?>
    </head>
    <body>
        <!-- preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- preloader end  -->
        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->
        <!-- header area start here -->
        <header>
            <div class="header-top">
                <?php
                include './theme-part/top-bar.php';
                ?>
            </div>
            <div class="header-menu header-sticky">
                <?php
                include './theme-part/header.php';
                ?>
            </div>
            <div class="offcanvas-overlay"></div>
            <div class="fix">
                <div class="side-info">
                    <button class="side-info-close"><i class="fal fa-times"></i></button>
                    <div class="side-info-content">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Fullscreen search -->
        <div class="search-wrap">
            <div class="search-inner">
                <i class="fal fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search Entire Website...">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end fullscreen search -->
        <!-- header area end here -->
        <main>
            <!-- hero area start here -->
            <section class="slider-area fix">
                <div class="slider-active swiper-container">
                    <div class="swiper-wrapper">
                        <div class="single-slider slider-height d-flex align-items-center swiper-slide" data-swiper-autoplay="5000">
                            <div class="slide-bg" data-background="assets/img/hero/slider-bg-1.jpg"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="aslider z-index">
                                            <span class="slider-top-text" data-animation="fadeInUp" data-delay=".5s">Find the Best Travel Deals</span>
                                            <h2 class="aslider--title mb-25" data-animation="fadeInUp" data-delay=".7s">Canada Tour <br> Booking</h2>
                                            <p class="aslider--subtitle mb-40" data-animation="fadeInUp" data-delay=".9s">Book flight tickets at lowest price guaranteed. For the best flights <br>booking offers, the lowest airfare, and discounts visit Tripzi </p>
                                            <div class="aslider--btn" data-animation="fadeInUp" data-delay=".9s">
                                                <a href="https://www.webmehigh.com/Tripzi/contact.php" class="theme-btn blacks-hover">Contact Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider slider-height d-flex align-items-center swiper-slide" data-swiper-autoplay="5000">
                            <div class="slide-bg" data-background="assets/img/hero/slider-bg-2.jpg"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="aslider z-index">
                                            <span class="slider-top-text" data-animation="fadeInUp" data-delay=".5s">Search, Compare and Save</span>
                                            <h2 class="aslider--title mb-25" data-animation="fadeInUp" data-delay=".7s">USA Tour <br> Booking</h2>
                                            <p class="aslider--subtitle mb-40" data-animation="fadeInUp" data-delay=".9s">Book hotels online & avail great discounts and offers in CANADA <br>  and worldwide from Budget, Luxury, Chain & Star rated hotels</p>
                                            <div class="aslider--btn" data-animation="fadeInUp" data-delay=".9s">
                                                <a href="https://www.webmehigh.com/Tripzi/contact.php" class="theme-btn blacks-hover">Contact Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider slider-height d-flex align-items-center swiper-slide" data-swiper-autoplay="5000">
                            <div class="slide-bg" data-background="assets/img/hero/slider-bg-3.jpg"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="aslider z-index">
                                            <span class="slider-top-text" data-animation="fadeInUp" data-delay=".5s">Search, Compare and Save</span>
                                            <h2 class="aslider--title mb-25" data-animation="fadeInUp" data-delay=".7s">JAPAN Tour <br> Booking</h2>
                                            <p class="aslider--subtitle mb-40" data-animation="fadeInUp" data-delay=".9s">Book hotels online & avail great discounts and offers in CANADA <br>  and worldwide from Budget, Luxury, Chain & Star rated hotels</p>
                                            <div class="aslider--btn" data-animation="fadeInUp" data-delay=".9s">
                                                <a href="https://www.webmehigh.com/Tripzi/contact.php" class="theme-btn blacks-hover">Contact Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider slider-height d-flex align-items-center swiper-slide" data-swiper-autoplay="5000">
                            <div class="slide-bg" data-background="assets/img/hero/slider-bg-4.jpg"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="aslider z-index">
                                            <span class="slider-top-text" data-animation="fadeInUp" data-delay=".5s">Search, Compare and Save</span>
                                            <h2 class="aslider--title mb-25" data-animation="fadeInUp" data-delay=".7s">MAXICO Tour <br> Booking</h2>
                                            <p class="aslider--subtitle mb-40" data-animation="fadeInUp" data-delay=".9s">Book hotels online & avail great discounts and offers in CANADA <br>  and worldwide from Budget, Luxury, Chain & Star rated hotels</p>
                                            <div class="aslider--btn" data-animation="fadeInUp" data-delay=".9s">
                                                <a href="https://www.webmehigh.com/Tripzi/contact.php" class="theme-btn blacks-hover">Contact Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider slider-height d-flex align-items-center swiper-slide" data-swiper-autoplay="5000">
                            <div class="slide-bg" data-background="assets/img/hero/slider-bg-5.jpg"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="aslider z-index">
                                            <span class="slider-top-text" data-animation="fadeInUp" data-delay=".5s">Search, Compare and Save</span>
                                            <h2 class="aslider--title mb-25" data-animation="fadeInUp" data-delay=".7s">India Tour <br> Booking</h2>
                                            <p class="aslider--subtitle mb-40" data-animation="fadeInUp" data-delay=".9s">Book hotels online & avail great discounts and offers in CANADA <br>  and worldwide from Budget, Luxury, Chain & Star rated hotels</p>
                                            <div class="aslider--btn" data-animation="fadeInUp" data-delay=".9s">
                                                <a href="https://www.webmehigh.com/Tripzi/contact.php" class="theme-btn blacks-hover">Contact Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider slider-height d-flex align-items-center swiper-slide" data-swiper-autoplay="5000">
                            <div class="slide-bg" data-background="assets/img/hero/slider-bg-6.jpg"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="aslider z-index">
                                            <span class="slider-top-text" data-animation="fadeInUp" data-delay=".5s">Search, Compare and Save</span>
                                            <h2 class="aslider--title mb-25" data-animation="fadeInUp" data-delay=".7s">Cruise Tour <br> Booking</h2>
                                            <p class="aslider--subtitle mb-40" data-animation="fadeInUp" data-delay=".9s">Book hotels online & avail great discounts and offers in CANADA <br>  and worldwide from Budget, Luxury, Chain & Star rated hotels</p>
                                            <div class="aslider--btn" data-animation="fadeInUp" data-delay=".9s">
                                                <a href="https://www.webmehigh.com/Tripzi/contact.php" class="theme-btn blacks-hover">Contact Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev slide-prev"><i class="far fa-long-arrow-left"></i></div>
                    <div class="swiper-button-next slide-next"><i class="far fa-long-arrow-right"></i></div>
                </div>
            </section>
            <!-- hero area end here -->

            <!-- visa area start here -->
            <section class="visa-area theme-bg">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="visa__items br-none">
                                <div class="visa__items-single d-flex align-items-center">
                                    <div class="visa__items-single-icon">
                                        <i class="flaticon-passport"></i>
                                    </div>
                                    <h4 class="visa__items-single-title">
                                        <a href="https://www.webmehigh.com/Tripzi/contact.php"> Air Tickets Booking</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="visa__items">
                                <div class="visa__items-single d-flex align-items-center">
                                    <div class="visa__items-single-icon">
                                        <i class="flaticon-calendar"></i>
                                    </div>
                                    <h4 class="visa__items-single-title">
                                        <a href="https://www.webmehigh.com/Tripzi/contact.php"> Hotel<br> 
                                            Booking</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="visa__items">
                                <div class="visa__items-single d-flex align-items-center">
                                    <div class="visa__items-single-icon">
                                        <i class="flaticon-explore"></i>
                                    </div>
                                    <h4 class="visa__items-single-title">
                                        <a href="https://www.webmehigh.com/Tripzi/contact.php">Cruise Tour 
                                            Booking</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="visa__items">
                                <div class="visa__items-single d-flex align-items-center">
                                    <div class="visa__items-single-icon">
                                        <i class="flaticon-customer"></i>
                                    </div>
                                    <h4 class="visa__items-single-title">
                                        <a href="https://www.webmehigh.com/Tripzi/contact.php">Group Tour 
                                            Booking</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- visa area end here -->

            <!-- featurs area start here -->
            <section class="featurs-services pt-110 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-10">
                            <div class="section_title_wrapper text-center mb-50 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <span class="subtitle">
                                    Featured Services
                                </span>                       
                                <h2 class="section-title">
                                    We Provide All Travel Related Services <br> From Experienced Team
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- featurs area end here -->
            <!-- Country-all start -->
            <section class="country-all">
                <div class="container">
                    <div class="brand-active  owl-carousel">
                        <div class="country_item__wrapper">
                            <div class="features">
                                <div class="features__thumb">
                                    <a href="#"><img src="assets/img/featurs/featurs-1.jpg" alt=""></a> 
                                </div>
                                <div class="features__content">
                                    <h3 class="features__content-title"> <a href="#">Air Tickets</a> </h3>
                                    <p>Get best discounts and deals on domestic and international flights booking around the world.</p>
                                    <a href="https://www.webmehigh.com/Tripzi/contact.php">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>

                        </div> 
                        <div class="country_item__wrapper">
                            <div class="features">
                                <div class="features__thumb">
                                    <a href="#"><img src="assets/img/featurs/featurs-2.jpg" alt=""></a> 
                                </div>
                                <div class="features__content">
                                    <h3 class="features__content-title"> <a href="#">Hotel Booking </a> </h3>
                                    <p>Make Your Dream Trip A Reality Find A Place That Suits Your Needs</p>
                                    <a href="https://www.webmehigh.com/Tripzi/contact.php">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>

                        </div> 
                        <div class="country_item__wrapper">
                            <div class="features">
                                <div class="features__thumb">
                                    <a href="#"><img src="assets/img/featurs/featurs-3.jpg" alt=""></a>  
                                </div>
                                <div class="features__content">
                                    <h3 class="features__content-title"> <a href="#">Cruise Tours</a> </h3>
                                    <p>Cruise Tour packages available that perfectly meet all your requirements.</p>
                                    <a href="https://www.webmehigh.com/Tripzi/contact.php">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> 
                        <div class="country_item__wrapper">
                            <div class="features">
                                <div class="features__thumb">
                                    <a href="#"><img src="assets/img/featurs/featurs-4.jpg" alt=""></a> 
                                </div>
                                <div class="features__content">
                                    <h3 class="features__content-title"> <a href="#">Group Tours</a> </h3>
                                    <p>Our meticulously planned group tour packages can take you to some magical destinations.</p>
                                    <a href="https://www.webmehigh.com/Tripzi/contact.php">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> 
                        <div class="country_item__wrapper">
                            <div class="features">
                                <div class="features__thumb">
                                    <a href="#"><img src="assets/img/featurs/MICE.jpg" alt=""></a> 
                                </div>
                                <div class="features__content">
                                    <h3 class="features__content-title"> <a href="#">M.I.C.E</a> </h3>
                                    <p>Get best discounts and deals on domestic and international flights booking around the world.</p>
                                    <a href="https://www.webmehigh.com/Tripzi/contact.php">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>

                        </div> 
                        <div class="country_item__wrapper">
                            <div class="features">
                                <div class="features__thumb">
                                    <a href="#"><img src="assets/img/featurs/Adventuretour.jpg" alt=""></a> 
                                </div>
                                <div class="features__content">
                                    <h3 class="features__content-title"> <a href="#">Adventure Tours</a> </h3>
                                    <p>Make Your Dream Trip A Reality Find A Place That Suits Your Needs</p>
                                    <a href="https://www.webmehigh.com/Tripzi/contact.php">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>

                        </div> 
                        <div class="country_item__wrapper">
                            <div class="features">
                                <div class="features__thumb">
                                    <a href="#"><img src="assets/img/featurs/Inclusivetours.jpg" alt=""></a>  
                                </div>
                                <div class="features__content">
                                    <h3 class="features__content-title"> <a href="#">All Inclusive Tours</a> </h3>
                                    <p>Cruise Tour packages available that perfectly meet all your requirements.</p>
                                    <a href="https://www.webmehigh.com/Tripzi/contact.php">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> 
                        <div class="country_item__wrapper">
                            <div class="features">
                                <div class="features__thumb">
                                    <a href="#"><img src="assets/img/featurs/Medicaltourism.jpg" alt=""></a> 
                                </div>
                                <div class="features__content">
                                    <h3 class="features__content-title"> <a href="#">Medical Tourism</a> </h3>
                                    <p>Our meticulously planned group tour packages can take you to some magical destinations.</p>
                                    <a href="https://www.webmehigh.com/Tripzi/contact.php">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> 
                        <div class="country_item__wrapper">
                            <div class="features">
                                <div class="features__thumb">
                                    <a href="#"><img src="assets/img/featurs/ReligiousTourism.jpg" alt=""></a> 
                                </div>
                                <div class="features__content">
                                    <h3 class="features__content-title"> <a href="#">Religious Tourism</a> </h3>
                                    <p>Our meticulously planned group tour packages can take you to some magical destinations.</p>
                                    <a href="https://www.webmehigh.com/Tripzi/contact.php">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="country_item__wrapper">
                            <div class="features">
                                <div class="features__thumb">
                                    <a href="#"><img src="assets/img/featurs/YogaHolidays.jpg" alt=""></a> 
                                </div>
                                <div class="features__content">
                                    <h3 class="features__content-title"> <a href="#">Yoga Holidays</a> </h3>
                                    <p>Our meticulously planned group tour packages can take you to some magical destinations.</p>
                                    <a href="https://www.webmehigh.com/Tripzi/contact.php">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </section>
            <!-- Country-all end -->
            <!-- CLIENT LOGO START -->
            <!-- abbrand-area start -->
            <div class="abbrand-area pt-60 pb-60 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="container">
                    <div class="abbrand-active owl-carousel">
                        <div class="abbrand-img wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <a href="#"><img src="assets/img/testimonial/1.jpg" alt=""></a> 
                        </div>
                        <div class="abbrand-img wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <a href="#"><img src="assets/img/testimonial/2.jpg" alt=""></a> 
                        </div>
                        <div class="abbrand-img wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <a href="#"><img src="assets/img/testimonial/3.jpg" alt=""></a> 
                        </div>
                        <div class="abbrand-img wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <a href="#"><img src="assets/img/testimonial/4.jpg" alt=""></a> 
                        </div>
                        <div class="abbrand-img wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                            <a href="#"><img src="assets/img/testimonial/5.jpg" alt=""></a> 
                        </div>
                        <div class="abbrand-img wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                            <a href="#"><img src="assets/img/testimonial/6.jpg" alt=""></a> 
                        </div>
                        <div class="abbrand-img wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
                            <a href="#"><img src="assets/img/testimonial/7.jpg" alt=""></a> 
                        </div>
                        <div class="abbrand-img wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 10s; animation-name: fadeInUp;">
                            <a href="#"><img src="assets/img/testimonial/8.jpg" alt=""></a> 
                        </div>
                        <div class="abbrand-img wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 11s; animation-name: fadeInUp;">
                            <a href="#"><img src="assets/img/testimonial/9.jpg" alt=""></a> 
                        </div>
                        <div class="abbrand-img wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 12s; animation-name: fadeInUp;">
                            <a href="#"><img src="assets/img/testimonial/10.jpg" alt=""></a> 
                        </div>
                        <div class="abbrand-img wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 13s; animation-name: fadeInUp;">
                            <a href="#"><img src="assets/img/testimonial/11.jpg" alt=""></a> 
                        </div>
                        <div class="abbrand-img wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 14s; animation-name: fadeInUp;">
                            <a href="#"><img src="assets/img/testimonial/12.jpg" alt=""></a> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- abbrand-area end -->
            <!-- CLIENT LOGO END-->

            <!-- Scholarship Programs start here -->
            <section class="scholarship-area d-flex align-items-center" style="background-image: url(assets/img/scholarship/scholarship-bg.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 ">
                            <div class="scholarship-left">
                                <img src="assets/img/scholarship/scholarship-left.png" alt="">
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="scholarship__wrapper pt-110 pb-90">
                                <h2 class="scholarship__wrapper-title mb-30">Pack your bags and get ready to embark on a journey of a lifetime!</h2>
                                <p>Whether you're dreaming of relaxing on pristine beaches, hiking through majestic mountains, or wandering through ancient cities, we've got the perfect destination for you</p>
                                <div class="scholarship__wrapper-img mb-40">
                                    <img src="assets/img/scholarship/s-3.png" alt="">
                                    <img src="assets/img/scholarship/s-2.png" alt="">
                                    <img src="assets/img/scholarship/S-6.jpg" alt="">
                                    <img src="assets/img/scholarship/s-1.png" alt="">
                                    <img src="assets/img/scholarship/S-7.jpg" alt="">
                                </div>
                                <h5>Share your travel dreams with us!</h5>
                                <a href="https://www.webmehigh.com/Tripzi/contact.php" class="theme-btn blacks-hover">Contact Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Scholarship Programs end here -->

            <!-- About  start here -->
            <section class="about-area pt-120 pb-90">
                <div class="container">
                    <div class="row wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 mb-30">
                            <div class="section_title_wrapper">
                                <span class="subtitle">
                                    About Tripzi
                                </span>                       
                                <h2 class="section-title about-span mb-30">
                                    <span>Travel </span>  is the main thing you purchase that makes you more extravagant
                                </h2>
                                <div class="section_title_wrapper-about-content">
                                    <h5>We, at ‘Tripzi, swear by this and put stock in satisfying travel dreams that 
                                        make you perpetually rich constantly.</h5>
                                    <p>We have been moving excellent encounters for a considerable length of time through our cutting-edge planned occasion bundles and other 
                                        fundamental travel administrations. We rouse our clients to carry on with a  rich life, brimming with extraordinary travel encounters</p>
                                    <a href="https://www.webmehigh.com/Tripzi/about.php" class="theme-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 mb-30">
                            <div class="about_wrapper">
                                <div class="about_wrapper__certificate">
                                    <img src="assets/img/about/certificate.png" alt="">
                                </div>  
                                <div class="about_wrapper__group">
                                    <div class="about_wrapper__group-top mb-15">
                                        <img src="assets/img/about/about-1.jpg" alt="">
                                    </div>
                                    <div class="about_wrapper__group-btm d-flex align-items-center justify-content-end">
                                        <div class="about_wrapper__group-btm-img1 ml-30">
                                            <img src="assets/img/about/about-2.jpg" alt="">
                                        </div>
                                        <div class="about_wrapper__group-btm-img2 ml-15">
                                            <img src="assets/img/about/about-3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About  end here -->

            <!-- fact-area start -->
            <section class="fact-area pb-90 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="fact text-center">
                                <h1 class="counter-count"><span class="counter">25</span>k+</h1>
                                <span>Happy Clients</span>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="fact text-center ">
                                <h1 class="counter-count"><span class="counter">80</span>+</h1>
                                <span>Countries for Travel</span>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="fact text-center ">
                                <h1 class="counter">100</h1>
                                <span>Enter Fact Details</span>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="fact text-center ">
                                <h1 class="counter-count"><span class="counter">23</span>k+</h1>
                                <span>Enter Fact Details</span>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- fact-area end -->

            <!-- popularct start -->
            <section class="popularct-area pt-110 pb-160" style="background-image: url(assets/img/popularct/plr-ct.jpg);">
                <div class="container">
                    <div class="row  justify-content-center">
                        <div class="col-xxl-10">
                            <div class="section_title_wrapper popularct-extra text-center">
                                <span class="subtitle">
                                    Popular Countries
                                </span>                       
                                <h2 class="section-title">
                                    Select Your Favorite Country <br> To Travel
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- popularct end -->

            <!-- Country-all start -->
            <section class="country-all">
                <div class="container">
                    <div class="brand-active  owl-carousel">
                        <div class="country_item__wrapper">
                            <div class="country_item__wrapper__top">
                                <div class="country_item__wrapper__top__img">
                                    <img src="assets/img/country-img/NewZealand.jpg" alt="">
                                </div>
                                <div class="country_item__wrapper__top__icon">
                                    <a href="#"><i class="fal fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="country_item__wrapper__bottom">
                                <h4 class="country_item__wrapper__bottom__title">
                                    <a href="#">New Zealand</a>
                                </h4>
                            </div>
                        </div> 

                        <div class="country_item__wrapper">
                            <div class="country_item__wrapper__top">
                                <div class="country_item__wrapper__top__img">
                                    <img src="assets/img/country-img/USA.jpg" alt="">
                                </div>
                                <div class="country_item__wrapper__top__icon">
                                    <a href="#"><i class="fal fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="country_item__wrapper__bottom">
                                <h4 class="country_item__wrapper__bottom__title">
                                    <a href="#">United States</a>
                                </h4>
                            </div>
                        </div>
                        <div class="country_item__wrapper">
                            <div class="country_item__wrapper__top">
                                <div class="country_item__wrapper__top__img">
                                    <img src="assets/img/country-img/UK.jpg" alt="">
                                </div>
                                <div class="country_item__wrapper__top__icon">
                                    <a href="#"><i class="fal fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="country_item__wrapper__bottom">
                                <h4 class="country_item__wrapper__bottom__title">
                                    <a href="#">United Kingdom</a>
                                </h4>
                            </div>
                        </div>
                        <div class="country_item__wrapper">
                            <div class="country_item__wrapper__top">
                                <div class="country_item__wrapper__top__img">
                                    <img src="assets/img/country-img/Switzerland.jpg" alt="">
                                </div>
                                <div class="country_item__wrapper__top__icon">
                                    <a href="#"><i class="fal fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="country_item__wrapper__bottom">
                                <h4 class="country_item__wrapper__bottom__title">
                                    <a href="#">Switzerland</a>
                                </h4>
                            </div>
                        </div>
                        <div class="country_item__wrapper">
                            <div class="country_item__wrapper__top">
                                <div class="country_item__wrapper__top__img">
                                    <img src="assets/img/country-img/INDIA.jpg" alt="">
                                </div>
                                <div class="country_item__wrapper__top__icon">
                                    <a href="#"><i class="fal fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="country_item__wrapper__bottom">
                                <h4 class="country_item__wrapper__bottom__title">
                                    <a href="#">India</a>
                                </h4>
                            </div>
                        </div>
                        <div class="country_item__wrapper">
                            <div class="country_item__wrapper__top">
                                <div class="country_item__wrapper__top__img">
                                    <img src="assets/img/country-img/CANADA.jpg" alt="">
                                </div>
                                <div class="country_item__wrapper__top__icon">
                                    <a href="#"><i class="fal fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="country_item__wrapper__bottom">
                                <h4 class="country_item__wrapper__bottom__title">
                                    <a href="#">CANADA</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>    
            </section>
            <!-- Country-all end -->
            <!-- Calltoaction area start -->
            <section class="calltoaction-area d-flex align-items-center" style="background-image: url(assets/img/calltoaction/cl-bg.jpg);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-3 col-xl-3 col-lg-3">
                            <div class="calltoaction-img ">
                                <img src="assets/img/calltoaction/cl-1.png" alt="">
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8">
                            <h4 class="calltoaction-title pt-80 pb-75">
                                Our experienced team is ready to help you plan your dream vacation
                            </h4>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                            <div class="calltoaction-btn text-right">
                                <a href="https://www.webmehigh.com/Tripzi/contact.php" class="theme-btn cl-btn">Contact Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Calltoaction area end -->
            <!-- Our Partners start -->
            <section class="partners-area pt-120 pb-100" style="background-image: url(assets/img/partners/partners-1.png);">
                <div class="container">
                    <div class="row ">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="section_title_wrapper partners-65 mb-30">
                                <span class="subtitle">
                                    Our Founders
                                </span>                       
                                <h2 class="section-title about-span">
                                    Let us introduce you to the <span>brilliant minds and passionate hearts</span> who founded our agency
                                </h2>
                                <p class="mt-30 mb-40"></p>
                                <a href="our-team.php" class="theme-btn partner-btn">See All Partners</a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="team text-center mb-30">
                                <div class="team__thumb team__thumb-2 mb-25">
                                    <img src="assets/img/team/t-2.jpg" alt="">
                                    <div class="team__thumb-info">
                                        <div class="team-social">
                                            <a href="https://www.facebook.com/daxesh.dalwadi.946"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://twitter.com/Dhkndcanada"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.linkedin.com/in/daxesh-dalwadi-aa603a1aa/"><i class="fab fa-linkedin"></i></a>
                                            <a href="https://www.instagram.com/ddalwadi1310/"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__text">
                                    <h3 class="team__text-title">
                                        <a href="Daxesh-Dalwadi.php">Daxesh Dalwadi</a> 
                                    </h3>
                                    <span>Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="team text-center mb-30">
                                <div class="team__thumb team__thumb-2 mb-25">
                                    <img src="assets/img/team/t-1.jpg" alt="">
                                    <div class="team__thumb-info">
                                        <div class="team-social">
                                            <a href="https://www.facebook.com/atul.panchal.1069/"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://twitter.com/chax74"><i class="fab fa-twitter"></i></a>
                                            <a href=" https://www.linkedin.com/in/atulkumar-panchal-a1816120/"><i class="fab fa-linkedin"></i></a>
                                            <a href="#"><i class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__text">
                                    <h3 class="team__text-title">
                                        <a href="Atul-panchal.php">Atul Panchal</a> 
                                    </h3>
                                    <span>Director </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Our Partners end -->

            <!-- Testimonail start -->
            <section class="testimonail-area grey-bg pt-110 pb-190">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-10">
                            <div class="section_title_wrapper text-center mb-50">
                                <span class="subtitle">
                                    Testimonials
                                </span>                       
                                <h2 class="section-title">
                                    What Clients Say About Us and <br> Our Services
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="textimonail-active owl-carousel">
                            <div class="testimonail__wrapper">
                                <div class="testimonail__wrapper__info d-flex align-items-center mb-25">
                                    <div class="testimonail__wrapper__info__img ">
                                        <img src="assets/img/testimonial/ts-1.png" alt="">
                                    </div>
                                    <div class="testimonail__wrapper__info__author">
                                        <h4>HARISH PATHASK</h4>
                                        <span>Student</span>
                                    </div>
                                    <div class="testimonail__wrapper__info__quotes">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                </div>
                                <div class="testimonail__wrapper__content">
                                    <p>"Usa's travel entry policy prioritizes safety. Travelers aged 12 and above from high-risk countries must present vaccination certificates, ensuring a safer travel experience."</p>
                                    <div class="testimonail__wrapper__content__reviews">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li>(Switzerland Visa)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonail__wrapper">
                                <div class="testimonail__wrapper__info d-flex align-items-center mb-25">
                                    <div class="testimonail__wrapper__info__img ">
                                        <img src="assets/img/testimonial/ts-1.png" alt="">
                                    </div>
                                    <div class="testimonail__wrapper__info__author">
                                        <h4>MANTHAN PANDYA</h4>
                                        <span>Business Man</span>
                                    </div>
                                    <div class="testimonail__wrapper__info__quotes">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                </div>
                                <div class="testimonail__wrapper__content">
                                    <p>"Canada exceeded our expectations! Our trip was a breathtaking blend of natural beauty and vibrant cities. we fell in love with every moment. A truly unforgettable adventure."</p>
                                    <div class="testimonail__wrapper__content__reviews ">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li>(Switzerland Visa)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonail__wrapper">
                                <div class="testimonail__wrapper__info d-flex align-items-center mb-25">
                                    <div class="testimonail__wrapper__info__img ">
                                        <img src="assets/img/testimonial/ts-1.png" alt="">
                                    </div>
                                    <div class="testimonail__wrapper__info__author">
                                        <h4>MANDEEP NARANG</h4>
                                        <span>Traveller</span>
                                    </div>
                                    <div class="testimonail__wrapper__info__quotes">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                </div>
                                <div class="testimonail__wrapper__content">
                                    <p>"Wow, our trip to Mexico was absolutely amazing! From the vibrant culture to the stunning beaches, every moment was unforgettable. Thanks to the impeccable planning,"</p>
                                    <div class="testimonail__wrapper__content__reviews">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li>(Switzerland Visa)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonail__wrapper">
                                <div class="testimonail__wrapper__info d-flex align-items-center mb-25">
                                    <div class="testimonail__wrapper__info__img ">
                                        <img src="assets/img/testimonial/ts-1.png" alt="">
                                    </div>
                                    <div class="testimonail__wrapper__info__author">
                                        <h4>HARISHBHAI</h4>
                                        <span>Student</span>
                                    </div>
                                    <div class="testimonail__wrapper__info__quotes">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                </div>
                                <div class="testimonail__wrapper__content">
                                    <p>"Wow, our Exotic East Coast trip exceeded all expectations! From the vibrant cities to the stunning landscapes, every moment was a true adventure. A journey of a lifetime!"</p>
                                    <div class="testimonail__wrapper__content__reviews">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li>(Switzerland Visa)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonail__wrapper">
                                <div class="testimonail__wrapper__info d-flex align-items-center mb-25">
                                    <div class="testimonail__wrapper__info__img ">
                                        <img src="assets/img/testimonial/ts-1.png" alt="">
                                    </div>
                                    <div class="testimonail__wrapper__info__author">
                                        <h4>ASHRAFBHAI</h4>
                                        <span>Student</span>
                                    </div>
                                    <div class="testimonail__wrapper__info__quotes">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                </div>
                                <div class="testimonail__wrapper__content">
                                    <p>"Our West Coast trip was absolutely fantastic! From the stunning coastline to the vibrant cities, it was a journey filled with awe and wonder. making memories that will last a lifetime."</p>
                                    <div class="testimonail__wrapper__content__reviews">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li>(Switzerland Visa)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonail__wrapper">
                                <div class="testimonail__wrapper__info d-flex align-items-center mb-25">
                                    <div class="testimonail__wrapper__info__img ">
                                        <img src="assets/img/testimonial/ts-1.png" alt="">
                                    </div>
                                    <div class="testimonail__wrapper__info__author">
                                        <h4>SUKHVIR SINGH</h4>
                                        <span>Student</span>
                                    </div>
                                    <div class="testimonail__wrapper__info__quotes">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                </div>
                                <div class="testimonail__wrapper__content">
                                    <p>"Exploring America with this tour was a dream come true. The guides were knowledgeable, and the itinerary was well-planned. An amazing journey through an amazing country!"</p>
                                    <div class="testimonail__wrapper__content__reviews">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li>(Switzerland Visa)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonail__wrapper">
                                <div class="testimonail__wrapper__info d-flex align-items-center mb-25">
                                    <div class="testimonail__wrapper__info__img ">
                                        <img src="assets/img/testimonial/ts-1.png" alt="">
                                    </div>
                                    <div class="testimonail__wrapper__info__author">
                                        <h4>MISHA MEHTA</h4>
                                        <span>Student</span>
                                    </div>
                                    <div class="testimonail__wrapper__info__quotes">
                                        <i class="flaticon-quote"></i>
                                    </div>
                                </div>
                                <div class="testimonail__wrapper__content">
                                    <p>"Exotic Maxico exceeded my expectations! From the stunning beaches to the vibrant culture, this destination offers a truly unforgettable experience."</p>
                                    <div class="testimonail__wrapper__content__reviews">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li>(Switzerland Visa)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonail end -->
        </main>
        <!-- Footer start -->
        <footer class="footer-area footer-bg pt-95 mt-100">
            <div class="container">
               <?php
                include './theme-part/footer.php';
                ?>
            </div>
        </footer>
        <!-- Footer Copy right start -->
        <div class="footer-copyright-area">
            <div class="container">
                <?php
                include './theme-part/copy-right.php';
                ?>
            </div>
        </div>
        <!-- Footer Copy right start -->
        <!-- Footer end -->
        <!-- JS here -->
        <?php
        include './theme-part/footer-script.php';
        ?>
    </body>


</html>
