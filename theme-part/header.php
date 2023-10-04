<?php
include './mailer/sender.php';
if (isset($_POST['con_submit'])) {
    $your_name = $_POST['con_name'];
    $your_email = $_POST['con_email'];
    $your_phone = $_POST['con_phone'];
    ob_start();
    ?>
    <html lang="en">

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="format-detection" content="telephone=no">
            <title>Tripzi</title>
            <style>
                table {
                    border-color: rgba(240, 240, 240, 0.52);
                }

                td {
                    padding: 15px;
                }
            </style>
        </head>

        <body style="margin:0; padding:0;" bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

            <table border='0' width='100%' height='100%' cellpadding='0' cellspacing='0' bgcolor='#F0F0F0'>
                <tr>
                    <td align='center' valign='top' bgcolor='#F0F0F0' style='background-color: #F0F0F0;'>
                        <br class='myhide'>
                        <table border='0' width='600' cellpadding='0' cellspacing='0' class='container' style='width:600px;max-width:600px'>
                            <tr class='myhide'>
                                <td class='container-padding header' align='left' style='font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;color:#DF4726;padding: 0px;'>
                            <center><img  style='width: 50%;margin-bottom:5%;' src='https://tripzi.ca/assets/img/logo/logo.png'></center>
                    </td>
                </tr>
                <tr>
                    <td class='container-padding content' align='left' style='padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff'>
                        <br>
                        <div class='title myhide' style='font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550'>
                            Dear, Admin,
                        </div>
                        <div class='body-text myhide' style='font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left; '>
                            <?php echo $your_name; ?> Website Contact Us Inquiry 
                            <br>
                            <br>
                            <table>
                                <tr>
                                    <td>Name : </td>
                                    <td> <?php echo $your_name; ?></td>
                                </tr>
                                <tr>
                                    <td>Email : </td>
                                    <td><?php echo $your_email; ?></td>
                                </tr>
                                <tr>
                                    <td>Phone : </td>
                                    <td><?php echo $your_phone; ?></td>
                                </tr>
                            </table>
                        </div>
            </table>
        </td>
    </tr>
    </table>

    </body>

    </html>

    <?php
    $mail_body = ob_get_contents();
    ob_end_clean();
    if (SendMail('noreply@tripzi.ca', 'Website Contact Us Inquiry', 'tripzi.canada@gmail.com', 'Webite Contact Us Inquiry For Tripzi', $mail_body)) {
        echo "<script>alert('Your Contact Us Inquiry Successfully Submitted');</script>";
    } else {
        echo "<script>alert('Please Try After Some Time!');</script>";
    }
}
if (isset($_POST['contact_submit'])) {
    $contact_name = $_POST['contact_name'];
    $contact_phone = $_POST['contact_phone'];
    $contact_email = $_POST['contact_email'];
    $contact_services = $_POST['contact_services'];
    $contact_msg = $_POST['contact_msg'];
    ob_start();
    ?>
    <html lang="en">

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="format-detection" content="telephone=no">
            <title>Tripzi</title>
            <style>
                table {
                    border-color: rgba(240, 240, 240, 0.52);
                }

                td {
                    padding: 15px;
                }
            </style>
        </head>

        <body style="margin:0; padding:0;" bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

            <table border='0' width='100%' height='100%' cellpadding='0' cellspacing='0' bgcolor='#F0F0F0'>
                <tr>
                    <td align='center' valign='top' bgcolor='#F0F0F0' style='background-color: #F0F0F0;'>
                        <br class='myhide'>
                        <table border='0' width='600' cellpadding='0' cellspacing='0' class='container' style='width:600px;max-width:600px'>
                            <tr class='myhide'>
                                <td class='container-padding header' align='left' style='font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;color:#DF4726;padding: 0px;'>
                            <center><img  style='width: 50%;margin-bottom:5%;' src='https://tripzi.ca/assets/img/logo/logo.png'></center>
                    </td>
                </tr>
                <tr>
                    <td class='container-padding content' align='left' style='padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff'>
                        <br>
                        <div class='title myhide' style='font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550'>
                            Dear, Admin,
                        </div>
                        <div class='body-text myhide' style='font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left; '>
                            <?php echo $contact_name; ?> Website Contact Us Inquiry 
                            <br>
                            <br>
                            <table>
                                <tr>
                                    <td>Name : </td>
                                    <td> <?php echo $contact_name; ?></td>
                                </tr>
                                <tr>
                                    <td>Email : </td>
                                    <td><?php echo $contact_email; ?></td>
                                </tr>
                                <tr>
                                    <td>Phone : </td>
                                    <td><?php echo $contact_phone; ?></td>
                                </tr>
                                <tr>
                                    <td>Product : </td>
                                    <td><?php echo $contact_services; ?></td>
                                </tr>
                                <tr>
                                    <td>Message : </td>
                                    <td><?php echo $contact_msg; ?></td>
                                </tr>
                            </table>
                        </div>
            </table>
        </td>
    </tr>
    </table>

    </body>

    </html>

    <?php
    $mail_body = ob_get_contents();
    ob_end_clean();
    if (SendMail('noreply@tripzi.ca', 'Website Contact Us Inquiry', 'tripzi.canada@gmail.com', 'Webite Contact Us Inquiry For Tripzi', $mail_body)) {
        echo "<script>alert('Your Contact Us Inquiry Successfully Submitted');</script>";
    } else {
        echo "<script>alert('Please Try After Some Time!');</script>";
    }
}
?>
    <div class="container">
    <div class="row align-items-center">
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-8">
            <div class="header-logo ">
                <a href="index.php"><img src="assets/img/logo/logo.png" class="img-fluid" alt="img"></a>
            </div>
        </div>
        <div class="col-xxl-7 col-xl-7 col-lg-7 col-4">
            <div class="main-menu d-none d-lg-block ">
                <nav id="mobile-menu">
                    <ul>
                        <li><a href="index.php">HOME</a></li>

                        <li class="menu-item-has-children"><a href="#">Services</a>
                            <ul class="sub-menu">
                                <li><a href="#">Air Tickets</a></li>
                                <li><a href="#">Hotel Booking</a></li>
                                <li><a href="#">Cruise Tour</a></li>
                                <li><a href="#">Family Tour</a></li>
                                <li><a href="#">MICE</a></li>

                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">TOUR</a>
                            <ul class="sub-menu">
                                <li class="sub-menu-level-3rd-li"><a href="#">USA</a>
                                    <ul class="sub-menu sub-menu-level-3rd">
                                        <li><a href="exotic-east-cost.php">EXOTIC EAST COST 06/07 DAYS</a></li>
                                        <li><a href="wonderfull-west-coast.php">WONDERFULL WEST COAST 06/07 DAYS</a></li>
                                        <li><a href="amazing-america.php">AMAZING AMERICA 12/13 DAYS</a></li>
                                        <li><a href="ultimate-america.php">ULTIMATE AMERICA 19/20 DAYS</a></li>
                                    </ul>

                                </li>
                                <li class="sub-menu-level-3rd-li"><a href="#">CANADA</a>
                                    <ul class="sub-menu sub-menu-level-3rd">
                                        <li><a href="magical-east-cost.php">MAGICAL EAST COST 05/06 DAYS</a></li>
                                        <li><a href="mystic-canada.php">MYSTIC CANADA 12/13 DAYS</a></li>
                                        <li><a href="canadian-rockies.php">CANADIAN ROCKIES</a></li>
                                    </ul>

                                </li>
                                <li class="sub-menu-level-3rd-li"><a href="#">MEXICO</a>
                                    <ul class="sub-menu sub-menu-level-3rd">
                                        <li><a href="exotic-mexico.php">EXOTIC MEXICO 08/09 DAYS</a></li>
                                    </ul>

                                </li>
                                

                            </ul>
                        </li>
                        <li><a href="about.php">About Us</a></li>

                        <li><a href="our-team.php">Our Team</a></li>

                        <li><a href="contact.php">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
            <div class="side-menu-icon d-lg-none text-end">
                <button class="side-toggle"><i class="far fa-bars"></i></button>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3">
            <div class="main-menu-wrapper d-flex align-items-center justify-content-end">
                <div class="main-menu-wrapper__search text-left">
                    <a class="search-btn nav-search search-trigger" href="#"><i class="fal fa-search"></i></a>
                </div>
                <div class="main-menu-wrapper__call-number d-flex align-items-center">
                    <div class="main-menu-wrapper__call-icon mr-10">
                        <img src="assets/img/menu-icon/chatting.png" alt="">
                    </div>
                    <div class="main-menu-wrapper__call-text">
                        <h5><a href="tel:+1 587 893 7199">+1 587 893 7199 <br>+1 403 801 6969</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>