<?php
$pagename = "EXOTIC MEXICO";
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
                            <h3 class="pb-100">EXOTIC MEXICO 08/09 DAYS</h3>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadccrumb-bg">
                <ul class="breadcrumb justify-content-center pt-20 pb-20">
                    <li class="bd-items"><a href="index.php">Home</a></li>
                    <li class="bd-items bdritems">|</li>
                    <li class="bd-items"> <a href="exotic-mexico.php">USA</a></li>
                    <li class="bd-items bdritems">|</li>
                    <li class="bd-items"> <a href="exotic-mexico.php">EXOTIC MEXICO 08/09 DAYS</a></li>
                </ul>
            </nav>
        </div>
        <!-- page title area end -->

        <main>


            <!-- business area start here -->
            <div class="businnes-area pt-120 pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4">
                            <div class="sidebar-left__wrapper">
                                <?php
                                include './theme-part/side-bar.php';
                                ?>
                            </div>
                        </div>

                        <div class="col-xxl-8 col-xl-8 col-lg-8">
                            <div class="sidebar__deatils">
                                <div class="visa-details">  
                                    <div class="visa-deatils__thumb mb-40">
                                        <img src="assets/img/business-visa/business-visa.jpg" alt="">
                                    </div>
                                    <div class="course-ieltes-txt">
                                        <h4 class="mb-15">TOUR START DATES 2023</h4>
                                        <div class="row g-0">
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                                <div class="course__items d-flex align-items-center">
                                                    <div class="course__items-icon">
                                                        <i class="flaticon-duration"></i>
                                                    </div>
                                                    <div class="course__items-dtext">
                                                        <span>04,11,18,25</span>
                                                        <h4>OCT</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6">
                                                <div class="course__items d-flex align-items-center">
                                                    <div class="course__items-icon">
                                                        <i class="flaticon-duration"></i>
                                                    </div>
                                                    <div class="course__items-dtext">
                                                        <span>01,15,29</span>
                                                        <h4>NOV</h4>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <ul class="necessary-link mb-40 mt-40">
                                            <li><i class="fal fa-check-square"></i><b>Day 1</b> :  (B,L) (D)</li>
                                            <li><i class="fal fa-check-square"></i><b>Day 2</b> :   (B,L)</li>
                                            <li><i class="fal fa-check-square"></i><b>Day 3</b> :  (B) </li>
                                            <li><i class="fal fa-check-square"></i><b>Day 4</b> :  (B,L) </li>
                                            <li><i class="fal fa-check-square"></i><b>Day 5</b> :  (B,L)</li>
                                            <li><i class="fal fa-check-square"></i><b>Day 6</b> :   (B,L)</li>
                                            <li><i class="fal fa-check-square"></i><b>Day 7</b> :  (B,L) </li>
                                            <li><i class="fal fa-check-square"></i><b>Day 8</b> :  (B)</li>
                                           


                                    </div>
                                </div>




                            </div>
                        </div>
                        <div class="business__items">
                            <div class="row">
                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                    <div class="business__items-single faq-bg mb-50" style=" padding-bottom: 150px;">
                                        <!-- <i class="flaticon-requirement"></i> -->
                                        <h4 class="business__items-single-title mt-25 mb-20 ">
                                            Hotels 
                                        </h4>
                                        <p>Accommodations at luxury, Deluxe and Budget property options available as per passenger request.</span>
                                        </p>
                                      


                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                    <div class="business__items-single faq-bg mb-50">
                                        <!-- <i class="flaticon-paperwork"></i> -->
                                        <h4 class="business__items-single-title mt-25 mb-20">
                                            Attractions Included
                                            <br>
                                        </h4>
                                        <p>City Tour that includes: Plaza de la Constitución</p>
                                        <p>Palacio Nacional (National Palace)</p>
                                        <p>Guadalupe Shrine</p>
                                        <p>Calzada de los Muertos</p>
                                        <p>Cañón del Sumidero</p>
                                        <p>San Cristóbal de las Casas.</p>
                                        <p>Agua Azul (Blue Water) waterfalls</p>
                                        <p>Palenque archaeological site</p>
                                        <p>Pakal’s tomb</p>
                                        <p>Pirámide del Adivino (The Fortuneteller’s Pyramid),</p>
                                        <p>Palacio de los Gobernadores (Governor’s Palace)</p>
                                        <p>Cuadrángulo de las Monjas (Quadrangle of the Nuns).</p>
                                        <p>Kukulcán Temple</p>




                                    </div>
                                </div>
                                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6">
                                    <div class="business__items-single faq-bg mb-50">
                                        <!-- <i class="flaticon-application"></i> -->
                                        <h4 class="business__items-single-title mt-25 mb-20">
                                            Inclusions <br>

                                        </h4>
                                        <p> Hotels as per confirmation </p>
                                        <p>Delicious Breakfast at the hotel </p>
                                        <p> Dinners</p>
                                       

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="necessary">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6">
                                    <div class="necessary__box-thumb">
                                        <img src="assets/img/Tours/Mexico1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <div class="necessary__box">
                                        <h4 class="necessary__title mb-25">
                                            Day 1 : Arriving in Toronto (D)    
                                        </h4>
                                        <p>Arrival at Mexico City International Airport and transfer to hotel Barcelo’ México Reforma or similar accommodation Overnight: Mexico city<br></p>
                                        <a href="services.php" class="business-btn">View More Requrements</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="necessary  mt-60">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 " >
                                    <div class="necessary__box-thumb">
                                        <img src="assets/img/Tours/Mexico2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <div class="necessary__box">
                                        <h4 class="necessary__title mb-25">
                                            Day 2 : (B,L) 
                                        </h4>
                                        <p>American breakfast in hotel and City Tour that includes: Plaza de la Constitución (The Constitution Plaza) known as Zócalo, surrounded by beautiful Baroque buildings, among which is the Cathedral (the country’s largest religious monument built over the great Aztec temple). The Palacio Nacional (National Palace) is the headquarter of the Presidency of Mexico, where visitors can admire murals painted by Diego Rivera. One of the main and most recently discovered attractions is the Templo Mayor, the great temple of the Aztec capital. Brief stop at the Guadalupe Shrine. The tour continues to Teotihuacán, named by the Aztecs as “the place where the Gods are born”. This location has three great constructions: The Pyramid of the Sun, Pyramid of the Moon and the Citadel; all of them were built over the so called “Calzada de los Muertos” (Road of the Dead).<br>Lunch in restaurant Return to Mexico City and accommodation <br>Overnight: Mexico city<br></p>
                                        <a href="services.php" class="business-btn">View More Requrements</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="necessary  mt-60">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 " >
                                    <div class="necessary__box-thumb">
                                        <img src="assets/img/Tours/Mexico3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <div class="necessary__box">
                                        <h4 class="necessary__title mb-25">
                                            Day 3 :  (B,L)
                                        </h4>
                                        <p>Transfer to the airport and flight to Tuxtla Gutiérrez, capital of the State of Chiapas. According to the flight schedule, visitors will be transferred to the Cahuaré wharf to enjoy a launch boat trip through the Cañón del Sumidero (Sumidero Canyon) ; the altitude and the beauty of the place will make the experience incredible. After that the tour continues to San Cristóbal de las Casas. Lunch in restaurant. Arrival and accommodation at the hotel Villa Mercedes San Cristobal or similar. Overnight: San Cristóbal de las Casas Meals: American breakfast, Lunch <br></p>
                                        <a href="services.php" class="business-btn">View More Requrements</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="necessary  mt-60">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 " >
                                    <div class="necessary__box-thumb">
                                        <img src="assets/img/Tours/Mexico4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <div class="necessary__box">
                                        <h4 class="necessary__title mb-15">
                                            Day 4 :   (B)
                                        </h4>
                                        <p>n the morning visit one of the most typical local markets where hundreds of Indigenous people sell their hand-made products every day; the tour continues to the Baroque Santo Domingo Church founded in 1547. Then visitors will meet the Indigenous communities of San Juan Chamula and Zinacantán; the San Juan Chamula community is particularly linked to this church where ceremonies were celebrated that had a great influence of paganism. The Indigenous population of Zinacantan, on the other hand is very loyal to the Catholic faith.Also you can taste a delicious “Tortilla” made by yourself and enjoy a shot of “Pox”, an ancient Mayan elixir! Return to San Cristóbal and accommodation Overnight: San Cristóbal de las Casas Meals: American breakfast</p>
                                        <a href="services.php" class="business-btn">View More Requrements</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="necessary  mt-60">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 " >
                                    <div class="necessary__box-thumb">
                                        <img src="assets/img/Tours/Mexico5.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <div class="necessary__box">
                                        <h4 class="necessary__title mb-25">
                                            Day 5 : (B,L)
                                        </h4>
                                        <p>Departure to Palenque with a stop at the Agua Azul (Blue Water) waterfalls; the trip will lasts approximately 5 hours on a mountain road and on the road the visitors can enjoy the abundant vegetation of this Chiapanecan (from the State of Chiapas) zone. Lunch in a rustic restaurant or box lunch. Arrival at Palenque and check-in at the hotel Villa Mercedes Palenque or similar.<br> Overnight: Palenque <br> Meals: American breakfast, Lunch</p>
                                        <a href="services.php" class="business-btn">View More Requrements</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="necessary  mt-60">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 " >
                                    <div class="necessary__box-thumb">
                                        <img src="assets/img/Tours/Mexico6.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <div class="necessary__box">
                                        <h4 class="necessary__title mb-25">
                                            Day 6 : (B,L)         
                                        </h4>
                                        <p>Visit of the Palenque archaeological site. The area displays beautiful Mayan work made in stone and stucco; <br>this area is frequently recognized as one of Mexico’s most beautiful places due to its ruins enclosed in the Chiapanecan jungle.<br>Its most important temple is called Templo de las Inscripciones (Temple of the Inscriptions), and it is here that explorers discovered Pakal’s tomb, with his famous jade green mask. Then the tour will go to Campeche, which is the capital of the Campeche State.<br>Lunch in restaurant on route.<br>After visiting the city, check-in at the hotel Plaza Campeche or similar accommodation.<br>Overnight: Campeche<br>Meals: American breakfast, Lunch</p>
                                        <a href="services.php" class="business-btn">View More Requrements</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="necessary  mt-60">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 " >
                                    <div class="necessary__box-thumb">
                                        <img src="assets/img/Tours/Mexico7.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <div class="necessary__box">
                                        <h4 class="necessary__title mb-25">
                                            Day 7 : (B,L) 
                                        </h4>
                                        <p>Departure to Mérida with visit of the Uxmal archaeological site on route. Uxmal means “built in three stages” and it is a typical example of the classic and post-classic Mayan period; its main constructions are: Pirámide del Adivino (The Fortuneteller’s Pyramid), Palacio de los Gobernadores (Governor’s Palace) andthe Cuadrángulo de las Monjas (Quadrangle of the Nuns).<br>Lunch at restaurant.Then visit Museum 'Choco-story", a living museum of cacao located next to the plantations of this product<br>and other innumerable varieties of trees and animals.<br>The tour continues to Mérida, also known as the “White City”, which has Colonial houses as well as houses that date back to the beginning of the century in Arabic, French and Italian styles. Those houses have witnessed all the old wealth that was generated thanks to the sisal culture.<br>Stop at Mérida’s Zócalo, where visitors can admire the city’s main monuments: the Cathedral, the<br>Government’s Palace, the Municipal Palace and the Francisco Montejo’s House.<br>Check-in at the hotel Presidente Intercontinental Villa Mercedes or similar accommodation.
                                         Overnight: Mérida<br>Meals: American breakfast, Lunch
                                         </p>
                                        <a href="services.php" class="business-btn">View More Requrements</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="necessary  mt-60">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 " >
                                    <div class="necessary__box-thumb">
                                        <img src="assets/img/Tours/Mexico8.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <div class="necessary__box">
                                        <h4 class="necessary__title mb-25">
                                            Day 8 : (B,L)   
                                        </h4>
                                        <p>Departure to visit Chichén Itzá archaeological site. Chichén Itzá was the Mayan capital of Yucatán and<br>flourished between the 5th and 10th centuries AD.<br>Visitors can admire the impressive buildings of the northern and central archaeological sites, such as: the Kukulcán Temple, the Ball Game, the Observatory, the Warrior’s Temple, the Convent of the Nuns and the Sacred Cenote.<br>Lunch at Chichén Itzá in restaurant. In the afternoon, continue to Riviera Maya, visiting Cenote Saamal on route, with some time for a refreshing swim. <br>Arrival and accommodation in the hotel Barcelo Maya Beach in all inclusive treatment.<br>Overnight: Riviera Maya<br>Meals: American breakfast, Lunch</p>
                                        <a href="services.php" class="business-btn">View More Requrements</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="necessary  mt-60">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 " >
                                    <div class="necessary__box-thumb">
                                        <img src="assets/img/Tours/Exotic_7.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <div class="necessary__box">
                                        <h4 class="necessary__title mb-25">
                                            Day 9 :(B)
                                        </h4>
                                        <p>Transfer to the Cancun International airport</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--<div class="necessary  mt-60">-->
                        <!--    <div class="row">-->
                        <!--        <div class="col-xxl-6 col-xl-6 " >-->
                        <!--            <div class="necessary__box-thumb">-->
                        <!--                <img src="assets/img/business-visa/USA-1.jpg" alt="">-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="col-xxl-6 col-xl-6">-->
                        <!--            <div class="necessary__box">-->
                        <!--                <h4 class="necessary__title mb-25">-->
                        <!--                    Day 10 : CUSCO – MACHU PICCHU (B, PL, D)     -->
                        <!--                </h4>-->
                        <!--                <p>Make it an early morning today after breakfast and proceed to do a day trip to Macchu Picchu.<br>Enjoy a scenic train ride, offering stunning views of the mountainous terrain that makes up the area near Machu Picchu Arrive in Aguas Calientes, the small village located at the base of this famous Inca site, and board a bus for the short ride to this sacred citadel.<br>Though the site today remains abandoned, many believe Macchu Picchu to be a key center of spiritual energy.<br>Following the route of the Urubamba River all the way to the cloud forest that surrounds Machu Picchu, enjoy the beautiful scenery of the high Andes throughout the course of the journey.<br>Evening come back to hotel in Cusco overnight at hotel.<br>Meals: Breakfast, lunch and dinner prepared by our own Indian Chef</a>-->
                        <!--            </div>-->
                        <!--        </div>-->

                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="necessary  mt-60">-->
                        <!--    <div class="row">-->
                        <!--        <div class="col-xxl-6 col-xl-6 " >-->
                        <!--            <div class="necessary__box-thumb">-->
                        <!--                <img src="assets/img/business-visa/USA-1.jpg" alt="">-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="col-xxl-6 col-xl-6">-->
                        <!--            <div class="necessary__box">-->
                        <!--                <h4 class="necessary__title mb-25">-->
                        <!--                    Day 10 : CUSCO – MACHU PICCHU (B, PL, D)     -->
                        <!--                </h4>-->
                        <!--                <p>After a hearty breakfast, proceed to do the city tour of Cusco.<br>Cusco was the Capital of Incan empire. Wander winding Incan streets to catch a look at the Sun temple.<br>This city is architecturally superior to many and boasts of vibrant markets to shop for souvenirs.<br>This fabulous half day tour takes you around all the most important sites of Cusco.<br>Including visits to Cusco's Cathedral, the Temple of the Sun (Qoricancha) and the various Inca sites found outside of the city you get to see an incredible mixture of Inca and Spanish-style and in the case of Qoricancha, the two combined. Overnight at hotel.<br>Meals: Breakfast, lunch and dinner prepared by our own Indian Chef</a>-->
                        <!--            </div>-->
                        <!--        </div>-->

                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="necessary  mt-60">-->
                        <!--    <div class="row">-->
                        <!--        <div class="col-xxl-6 col-xl-6 " >-->
                        <!--            <div class="necessary__box-thumb">-->
                        <!--                <img src="assets/img/business-visa/USA-1.jpg" alt="">-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="col-xxl-6 col-xl-6">-->
                        <!--            <div class="necessary__box">-->
                        <!--                <h4 class="necessary__title mb-25">-->
                        <!--                    Day 11 : CUSCO CITY TOUR (B, L, D)    -->
                        <!--                </h4>-->
                        <!--                <p>After a hearty breakfast, proceed to do the city tour of Cusco.<br>Cusco was the Capital of Incan empire. Wander winding Incan streets to catch a look at the Sun temple.<br>This city is architecturally superior to many and boasts of vibrant markets to shop for souvenirs.<br>This fabulous half day tour takes you around all the most important sites of Cusco.<br>Including visits to Cusco's Cathedral, the Temple of the Sun (Qoricancha) and the various Inca sites found outside of the city you get to see an incredible mixture of Inca and Spanish-style and in the case of Qoricancha, the two combined. Overnight at hotel.<br>Meals: Breakfast, lunch and dinner prepared by our own Indian Chef</a>-->
                        <!--            </div>-->
                        <!--        </div>-->

                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="necessary  mt-60">-->
                        <!--    <div class="row">-->
                        <!--        <div class="col-xxl-6 col-xl-6 " >-->
                        <!--            <div class="necessary__box-thumb">-->
                        <!--                <img src="assets/img/business-visa/USA-1.jpg" alt="">-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="col-xxl-6 col-xl-6">-->
                        <!--            <div class="necessary__box">-->
                        <!--                <h4 class="necessary__title mb-25">-->
                        <!--                    Day 12 :CUSCO – LIMA (BY FLIGHT) (B, L, D)   -->
                        <!--                </h4>-->
                        <!--                <p>Today after breakfast, Check-out from Cusco hotel and get transferred to airport for your flight to Lima by our representative.<br>Check into Lima upon arrival (check in time 3 pm).<br>Please make sure to book your flight arriving into Lima by 4 pm to avoid missing any portion of the tour.<br>Our itinerary next follows into the city with a tour of this beautiful and quaint town.<br>Discover wealth of history in this beautiful city of Lima as you explore the Incan architecture with religious shrines and churches.<br>Admire the gorgeous coastal landscape as you drive through this city.<br>Overnight in Lima.<br>Meals: Breakfast, lunch and dinner prepared by our own Indian Chef</a>-->
                        <!--            </div>-->
                        <!--        </div>-->

                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="necessary  mt-60">-->
                        <!--    <div class="row">-->
                        <!--        <div class="col-xxl-6 col-xl-6 " >-->
                        <!--            <div class="necessary__box-thumb">-->
                        <!--                <img src="assets/img/business-visa/USA-1.jpg" alt="">-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="col-xxl-6 col-xl-6">-->
                        <!--            <div class="necessary__box">-->
                        <!--                <h4 class="necessary__title mb-25">-->
                        <!--                    Day 13 : DEPARTURE FROM LIMA (B)   -->
                        <!--                </h4>-->
                        <!--                <p>After breakfast, check out and proceed to the airport to fly back home.<br>Our representative will drop you off at the airport (check out time is 11 am).<br>Take home wonderful memories of this beautiful destination and keep us in mind for your next trip</a>-->
                        <!--            </div>-->
                        <!--        </div>-->

                        <!--    </div>-->
                        <!--</div>-->
                        <div class="necessary  mt-60">
                            <div class="row">
                                <!--<div class="col-xxl-6 col-xl-6 " >
                                    <div class="necessary__box-thumb">
                                        <img src="assets/img/business-visa/USA-1.jpg" alt="">
                                    </div>
                                </div>-->
                                <div class="col-xxl-12 col-xl-12">
                                    <div class="necessary__box">
                                        <h4 class="necessary__title mb-25">
                                            Exclusions  
                                        </h4>
                                        <ul>
                                            <li  class="dot-icon"> Domestic flights (your flight will be arriving on Thursday at JFK &amp; departing out of buffalo, NY on wednesday). </li>
                                            <li  class="dot-icon">Lunches</li>
                                            <li  class="dot-icon">Mandatory tips  ($16 per person for the entire tour for the Driver and Guides) to be given to the tour director. this cannot be pre-paid.</li>
                                            <li  class="dot-icon"> Porterage</li>
                                            <li  class="dot-icon"> Visa processing fees</li>
                                        </ul>

                                        <!-- <a href="services.php" class="business-btn">View More Requrements</a> -->
                                    </div>
                                </div>
                                <div class="col-xxl-12 col-xl-12">
                                    <div class="necessary__box">
                                        <h4 class="necessary__title mb-25 ">
                                            Tour Notes
                                        </h4>
                                        <ul>
                                            <li class="dot-icon">
                                                All the hotels/restaurants/attractions confirmed for this tour comply with COVID guidelines as mandated by CDC. Passengers will have to follow the rules when on the premises of respective hotels.
                                            </li>
                                            <li class="dot-icon">
                                                Always make sure to have all the necessary documents with you.
                                            </li>
                                            <li class="dot-icon">
                                                Check in time at al hotels is 3 pm while the check out is 11 am. If the guests want to extend their stay, they can contact the front desk and request them. Early Check-in can only be requested, they are not guaranteed.
                                            </li>
                                            <li class="dot-icon"> 
                                                Children under 2 years travel free. Child price is applicable for children between the ages of 3 years to 9 years. 9 years and older are adults.
                                            </li>
                                            <li class="dot-icon">
                                                For the comfort of all passengers, we request passengers to travel light (recommended luggage: One carry on and One International size suitcase.
                                            </li>
                                            <li class="dot-icon">
                                                Hotels will ask for CC at the time of check-in towards incidentals. The hotel usually puts a hold on the CC and this hold will be released if no expenses are incurred. It usually takes anywhere from 2-3 weeks for the charge to disappear on the Credit statement. Make sure to get a Zero statement balance from the hotel. If paying cash to the front desk, please make sure to collect the same before checking out.
                                            </li>
                                            <li class="dot-icon">
                                                Our Pricing for the hotels includes room rate, taxes, and Breakfast if applicable. The passengers are liable to pay for any additional incidentals that they may incur at the hotel.
                                            </li>
                                            <li class="dot-icon">
                                                Our Tour manager will meet the group in the hotel lobby at 7 pm.
                                            </li>
                                            <li class="dot-icon">
                                                Please make sure to collect the contact information of the tour manager details. Please reconfirm the hotel list prior to your travel date.
                                            </li>
                                            <li class="dot-icon">
                                                Porterage/Baggage Handling is not a part of the tour. If the guests require this service, they can contact the bell desk at respective hotel and pay on own 
                                            </li>
                                            <li class="dot-icon">
                                                Seating Arrangement in the bus will be first come first serve. The coach size will vary based on the number of passengers. This can be 15 seater/25 seater/30 seater/55 seaters. For van tours with less than 15 passengers, we will have a driver/Tour Manager.
                                            </li>
                                            <li class="dot-icon">
                                                Standard room is with King bed. For 2 or more passengers (maximum occupancy is 4 per room), we will book a room with two double beds. For parents traveling with children, we will book a room with 2 beds. Rollaway beds are not allowed in a room with 2 beds.
                                            </li>
                                            <li class="dot-icon">
                                                The passengers are liable to pay for any damages caused while on tour either at the hotel they are staying in; the coach or at restaurants and attractions. We will collect the valued amount before the end of the tour.
                                            </li>
                                            <li class="dot-icon">
                                                The weather can vary considerably depending on the month of travel. Please make sure to have weather appropriate clothing. Walking shoes are recommended. Always carry jackets and closed comfortable shoes as it can get colder at the Glaciers and mountains
                                            </li>
                                            <li class="dot-icon">
                                                Tour Manager has the right to change the itinerary based on Weather and traffic conditions. Please follow protocol while on tour.
                                            </li>
                                            <li class="dot-icon">
                                                Tours Limited does not hold any responsibility for any injuries or accidents that might happen while on tour. Passengers are requested to carry Insurance with them to safeguard themselves in case of any eventuality. Our Tour managers will do all they can to aid the passengers in their time of need.
                                            </li>
                                            <li class="dot-icon">
                                                Tours Limited is not responsible for lost Valuables/Travel documents. We request the passengers to take care of their personal belongings.
                                            </li>
                                            <li class="dot-icon">
                                                Valid contact number for the passenger is a must at the time of reservation to ensure smooth transfers. Passengers need to wear masks upon entering the vehicle for their pick up.
                                            </li>
                                            <li class="dot-icon">
                                                We charge a late fee of $25 USD per person for bookings that come in within 10 days of travel and a $35 wire fee applies for all transactions.
                                            </li>
                                            <li class="dot-icon">
                                                keen on walking, can take an Uber or a cab to the destination on own. 
                                            </li>
                                            <li  class="dot-icon" >
                                                We recommend that the passengers keep political and religious discussions to none during the travel. This is a vacation package that is open to everyone irrespective of their difference.
                                            </li>
                                            <li class="dot-icon">
                                                We strongly encourage all the passengers to buy optional tours through us. We are not responsible for any bookings made on your own. Also, if the passengers are deviating from the itinerary, this must be mentioned clearly in the email and acknowledged.
                                            </li>
                                            <li class="dot-icon">
                                                Wheelchair passengers, if planning on joining our tour will need to have someone travel with them to assist the passengers. The tour manager will be unable to provide aid. Also, please note that our coaches are not equipped for handicapped travelers.
                                            </li>
                                        </ul>

                                        <!-- <a href="services.php" class="business-btn">View More Requrements</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---- <div class="information mt-60 ">
                              <h3 class="information__title mb-25">
                                  Visa Application Whole Process
                              </h3>
                              <p class="mb-30">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, quae temporibus? Placeat ea dolorum at officiis laborum recusandae enim magni.</p>
                              <div class="row">
                                  <div class="col-xxl-6">
                                      <div class="information-info">
                                          <ul>
                                              <li><span>Processing time</span>: <span>7 - 28 Days</span></li>
                                              <li><span>Stay period</span>: <span>Up to 180 Days</span></li>
                                              <li><span>Entry Persons</span>: <span>Single / Double</span></li>
                                              <li><span>Life Insurance</span>: <span>Yes</span></li>
                                              <li><span>Medical Checkup</span>: <span>Yes</span></li>
                                              <li><span>Total Charges</span>: <span>$23,570</span></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="col-xxl-6">
                                      <div class="information-right">
                                          <img src="assets/img/business-visa/bussiness-2.jpg" alt="">
                                          <div class="information__wrapper d-flex align-items-center theme-bg">
                                              <div class="information__wrapper-icon">
                                                  <i class="fal fa-headset"></i>
                                              </div>
                                              <div class="information__wrapper-cell">
                                                  <span>Call for support</span>
                                              <h5><a href="tel:+1878298023">+1 890 565 398</a></h5>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>-->
                        <!--- <div class="business-according">
                             <p class="mt-40 mb-40 ">England dotted with a lush, green landscape, rustic villages and throbbing with humanity. South Asian country that has plenty to offer to visitors with its diverse wildlife .We have helped students, business persons, tourists, clients with medical needs. There are many variations of passages of Lorem Ipsum available.</p>
                             <div class="tab-content mb-30">
                                 <div class="tab-pane fade show active">
                                     <div class="faq-content faq-white">
                                         <div class="accordion" id="accordionExample">
                                             <div class="accordion-item">
                                                 <h2 class="accordion-header" id="headingOne">
                                                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                         How long does it take for a Transit Visa to process?
                                                     </button>
                                                 </h2>
                                                 <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                     <div class="accordion-body">
                                                         The European business visa is mainly for people who want to participate in business meetings, conferences in Europe. Visa holders are not allowed to work or seek employment in Europe. Individuals and circumstances influence how long it takes to apply for a business visa.
                                                     </div>
                                                 </div>
                                             </div>
                                         <div class="accordion-item">
                                             <h2 class="accordion-header" id="headingTwo">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                 What is the purpose of the United States Business visa?
                                             </button>
                                             </h2>
                                             <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                             <div class="accordion-body">
                                                 <p>The European business visa is mainly for people who want to participate in business meetings, conferences in Europe. Visa holders are not allowed to work or seek employment in Europe. Individuals and circumstances influence how long it takes to apply for a business visa. </p>
                                             </div>
                                             </div>
                                         </div>
                                         <div class="accordion-item">
                                             <h2 class="accordion-header" id="headingThree">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                 If the applicant is intending to stay more than 3 months?
                                             </button>
                                             </h2>
                                             <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                             <div class="accordion-body">
                                                 <p>The European business visa is mainly for people who want to participate in business meetings, conferences in Europe. Visa holders are not allowed to work or seek employment in Europe. Individuals and circumstances influence how long it takes to apply for a business visa. </p>
                                             </div>
                                             </div>
                                         </div>
                                         <div class="accordion-item">
                                             <h2 class="accordion-header" id="headingThree1">
                                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                                                     What are the important things to know as a Transit Visa applicant?
                                                 </button>
                                             </h2>
                                             <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordionExample">
                                                 <div class="accordion-body">
                                                 <p>The European business visa is mainly for people who want to participate in business meetings, conferences in Europe. Visa holders are not allowed to work or seek employment in Europe. Individuals and circumstances influence how long it takes to apply for a business visa. </p>
                                                 </div>
                                             </div>
                                         </div>
                                         
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>-->
                    </div>
                </div>
                <!-- business area end here -->
                <!-- abbrand-area start -->
                <!--<div class="abbrand-area pb-120 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="container">
                        <div class="abbrand-active owl-carousel">
                            <div class="abbrand-img">
                               <a href="partners.php"><img src="assets/img/testimonial/1.png" alt=""></a> 
                            </div>
                            <div class="abbrand-img">
                                <a href="partners.php"><img src="assets/img/testimonial/2.png" alt=""></a> 
                             </div>
                             <div class="abbrand-img">
                                <a href="partners.php"><img src="assets/img/testimonial/3.png" alt=""></a> 
                             </div>
                             <div class="abbrand-img">
                                <a href="partners.php"><img src="assets/img/testimonial/4.png" alt=""></a> 
                             </div>
                             <div class="abbrand-img">
                                <a href="partners.php"><img src="assets/img/testimonial/5.png" alt=""></a> 
                             </div>
                             <div class="abbrand-img">
                                <a href="partners.php"><img src="assets/img/testimonial/4.png" alt=""></a> 
                             </div>
                        </div>
                    </div>
                </div>
                <!-- abbrand-area end -->
        </main>

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
