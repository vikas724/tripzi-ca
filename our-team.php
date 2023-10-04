<?php
$pagename = "OUR TEAM";
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
                            <h3 class="pb-100">Our Team </h3>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadccrumb-bg">
                <ul class="breadcrumb justify-content-center pt-20 pb-20">
                    <li class="bd-items"><a href="index.php">Home</a></li>
                    <li class="bd-items bdritems">|</li>
                    <li class="bd-items"> <a href="our-team.php">Our Team</a></li>
                </ul>
            </nav>
        </div>
        <!-- page title area end -->

        <main>
            <!-- About-us area start here -->
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
                                <a href="contact.php" class="theme-btn partner-btn">Contact Now</a>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                            <div class="team text-center mb-30">
                                <div class="team__thumb team__thumb-2 mb-25">
                                    <img src="assets/img/team/t-2.jpg" alt="">
                                    <div class="team__thumb-info">
                                        <div class="team-social">
                                            <a href="https://www.facebook.com/daxesh.dalwadi.946"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://www.instagram.com/ddalwadi1310/"><i class="fab fa-instagram"></i></a>
                                            <a href="https://twitter.com/Dhkndcanada"><i class="fab fa-twitter"></i></a>
                                            <a href="https://www.linkedin.com/in/daxesh-dalwadi-aa603a1aa"><i class="fab fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__text">
                                    <h3 class="team__text-title">
                                        <a href="daxesh-dalwadi.php">Daxesh Dalwadi</a> 
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
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="https://www.linkedin.com/in/atulkumar-panchal-a1816120/"><i class="fab fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team__text">
                                    <h3 class="team__text-title">
                                        <a href="atul-panchal.php">Atul Panchal</a> 
                                    </h3>
                                    <span>Director</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About-us area end here -->
            <!-- abbrand-area end -->
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
