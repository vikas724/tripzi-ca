<?php
$pagename = "CONTACT US";
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
                            <h3 class="pb-100">Contact Us</h3>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadccrumb-bg">
                <ul class="breadcrumb justify-content-center pt-20 pb-20">
                    <li class="bd-items"><a href="index.php">Home</a></li>
                    <li class="bd-items bdritems">|</li>
                    <li class="bd-items"> <a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
        </div>
        <!-- page title area end -->

        <main>

            <!-- Contact  area start -->
            <div class="contact__area">
                <div class="contact__vmap">
                    <iframe src="https://maps.google.com/maps?q=4818+Westwinds+Dr%2CNe%2CCalgary&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6"></div>
                        <div class="col-xl-6 col-xl-6 col-lg-6">
                            <div class="contact__form pt-110">
                                <h2 class="contact-form__title">
                                    Get in <span>Touch </span>
                                </h2>
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <input name="contact_name" class="contact__input" type="text" placeholder="Your Name">
                                        </div>
                                        <div class="col-xl-6">
                                            <input name="contact_email" class="contact__input" type="email" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <input name="contact_phone" class="contact__input" type="text" placeholder="Phone">
                                        </div>
                                        <div class="col-xl-6">
                                            <input name="contact_services" class="contact__input" type="text" placeholder="Subject">
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <textarea name="contact_msg" class="contact__input txt-area " cols="30" rows="10" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <button class="theme-btn" type="submit" name="contact_submit">Submit Now</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="ajax-response"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- Contact  area end -->

            <!-- Contact group info start -->
            <div class="contact-group-area pb-70 pt-145">
                <div class="container">
                    <div class="row">
                        <div class="d-flex justify-content-center">
                            <div class="col-xxl-4 col-xl-6 col-lg-6 d-flex align-items-center wow fadeInUp" style="width: 100%;" data-wow-delay="0.3s">
                                <div class="contact__gpinfo grey-soft2-bg mb-50" style="width: 100%; text-align: center; display: flex; flex-direction: column; align-items: center;">
                                    <div class="contact__gpinfo-icon text-center">
                                        <i class="flaticon-pin" style="font-size: 48px; margin-bottom: 15px;"></i>
                                    </div>
                                    <div class="contact__gpinfo-content">
                                        <h3 class="contact__gpinfo-content-title text-center mb-25">
                                            Washington Office
                                        </h3>
                                        <ul style="list-style-type: none; padding: 0; text-align: left;"> <!-- Set text-align to left -->
                                            <li><a href="contact.php"> <span>Address</span>: <p>4818 Westwinds Dr,Ne,Calgary, AB T3J3Z5 office No # 231 Green Plaza Building-A, Above Lovely Sweetsp</p></a></li>
                                            <li><a href="https://wphix.com/cdn-cgi/l/email-protection#98f1f6fef7d8fde0f9f5e8f4fdb6fbf7f5"> <span>Email</span>: <p> <span class="__cf_email__" data-cfemail="tripzi.canada@gmail.com">tripzi.canada@gmail.com</span></p></a></li>
                                            <li><a href="tel:+2980589360"> <span>Phone</span>: <p>+1 587 893 7199 | +1 403 801 6969</p> </a></li>
                                            <li><a href="#"><span>Opening</span>: <p>Sun - Thu : 10 AM - 10 PM</p> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact group info end -->
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
