<?php
$pagename = "About Us";
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
                            <input type="search" class="main-search-input" placeholder="Search Entire Store...">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end fullscreen search -->

        <!-- header area end here -->

        <!-- page title area start -->
        <div class="page-title__area pt-110" style="background-image: url(assets/img/about-us/ab-us.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="page__title-wrapper text-center">
                            <h3 class="pb-100">About Us </h3>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadccrumb-bg">
                <ul class="breadcrumb justify-content-center pt-20 pb-20">
                    <li class="bd-items"><a href="index.php">Home</a></li>
                    <li class="bd-items bdritems">|</li>
                    <li class="bd-items"> <a href="about.php"> About Us</a></li>
                </ul>
            </nav>
        </div>
        <!-- page title area end -->

        <main>
            <!-- About-us area start here -->
            <section class="about-area-2 pt-120 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 mb-30 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="about2-left d-flex">
                                <div class="about2-left__img1 mr-10">
                                    <img src="assets/img/about-2/about2.jpg" alt="">
                                </div>
                                <div class="about2-left__img2">
                                    <img src="assets/img/about-2/about2-1.jpg" alt="">
                                    <div class="about2-left__info d-flex align-items-center">
                                        <div class="about2-left__info__left mr-15">
                                            <img src="assets/img/about-2/seal.png" alt="">
                                        </div>
                                        <div class="about2-left__info__right">
                                            <h4>ISO Certified</h4>
                                            <p>1990-2000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 mb-30 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <div class="section_title_wrapper">
                                <span class="subtitle">
                                    About TRIPZI
                                </span>                       
                                <h2 class="section-title about-span mb-30">
                                    <span>“Travel</span>  is the main thing you purchase that makes you more extravagant”.
                                </h2>
                                <div class="section_title_wrapper__about-content mb-40">
                                    <p>We, at ‘Tripzi, swear by this and put stock in satisfying travel dreams that make you perpetually rich constantly</p>
                                </div>
                            </div>
                            <div class="about-trust">
                                <div class="row mb-10">
                                    <div class="col-lg-6">
                                        <div class="about2__item d-flex  mb-20">
                                            <div class="about2__icon">
                                                <i class="flaticon-fair-trade"></i>
                                            </div>
                                            <div class="about2__content">
                                                <h4>Trusted by Millions</h4>
                                                <p>Most trusted & recommended by millions of students</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="about2__item d-flex  mb-20">
                                            <div class="about2__icon">
                                                <i class="flaticon-trophy"></i>
                                            </div>
                                            <div class="about2__content">
                                                <h4>Awards Winner</h4>
                                                <p>Most trusted & recommended by millions of students</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About-us area end here -->

            <!-- Ab-fact-area start -->

            <div class="abfact-area pt-80 pb-170" style="background-image: url(assets/img/ab-fact/abfact.jpg);">
                <div class="container">
                    <div class="row mb-20">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="fact fact-2 abfact-items text-center">
                                <h1 class="counter-count"><span class="counter">25</span>k+</h1>
                                <span>Happy Clients & Students</span>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30 ">
                            <div class="fact fact-2 abfact-items text-center ">
                                <h1 class="counter-count"><span class="counter">80</span>+</h1>
                                <span>Countries Affiliation</span>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="fact fact-2 abfact-items text-center ">
                                <h1 class="counter">360</h1>
                                <span>Top University Partner</span>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-30">
                            <div class="fact fact-2 abfact-items text-center ">
                                <h1 class="counter-count"><span class="counter">23</span>k+</h1>
                                <span>Visa & Immigration</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ab-fact-area end -->

            <!-- intro-area start -->
            <section class="intro-area">
                <div class="container">
                    <div class="row abintro-top g-0">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 d-flex align-items-center wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="section_title_wrapper pl-50 pr-70 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                               <!-- <span class="subtitle">
                                    Our Missions
                                </span>  -->                     
                                <h2 class="section-title" style="margin-top:50px;">
                                    We Journey The Global Business to Ensuring The Guarantee
                                </h2>
                                <p class="pt-30 pb-15 " style="justify-content:center;">We have been moving excellent encounters for a considerable length of time through our cutting-edge planned occasion bundles and other fundamental travel administrations. We rouse our clients to carry on with a rich life, brimming with extraordinary travel encounters.</p>

                                <p class="pt-10 pb-15" style="justify-content:center;">Through our exceptionally curated occasion bundles, we need to take you on an adventure where you personally enjoy the stunning magnificence of World. We need you to observe sensational scenes that are a long way past your creative ability.Through our exceptionally curated occasion bundles, we need to take you on an adventure where you personally enjoy the stunning magnificence of World. We need you to observe sensational scenes that are a long way past your creative ability.</p>

                                <p class="pt-10 pb-15 " style="justify-content:center;">Regardless of whether it’s reserving flights or inns for your movement, Company Name offers everything under one umbrella. We likewise have journey occasions for individuals who are searching for solace and reasonable extravagance.</p>

                                <p class="pt-10 pb-15 " style="justify-content:center;">We offer the best limits on our top-rated visit bundles to clients who pick our viable administrations over and over. How about we remind you indeed that we don’t expect to be your visit and travel specialists; we endeavor to be your vacation accomplices until the end of time.</p>

                                <p class="pt-10 pb-15 "style="justify-content:center;">TRIPZI, is a division of Fly Away Teavel Agency,Which has always been trying to pursue our goals to the best of our abilities and is successfully growing in operation since 2005, located at the heart of Ahmedabad city in the state of Gujarat, Indi</p>

                                <p class="pt-10 pb-15" style="justify-content:center;">Tripzi, established with the concept of providing excellent range of domestic and international tour and travel services. We have diversified tour packages covering all the fields of the travel industry today. We offer Group Tours, Individual Holidays ,Air Tickets , Hotel Reservation, CruisesTours , Incentive Escorted Travel, FIT Travel, Online Travel, and Incentive Exhibition and have added another feather in its cap by specializing in MICE, (whether it is a discreet gathering for a few key decision-makers or a groundbreaking event for executives, meetings have to be organized with precision and planning)</p>

                                <div class="abinfro-btn d-flex align-items-center">
                                    <a href="contact.php" class="theme-btn">See Packages</a>
                                    <a href="#0" class="btn-download"> <i class="fal fa-download"></i> Download Brochure</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
            <!-- intro-area end -->

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
