<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assisi Institute of Foreign Languages</title>

    <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">
    <link href="https://cdn.boomcdn.com/libs/owl-carousel/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--<link rel="stylesheet" href="assets/vendor/aos/aos.css">-->
    
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <style>
      .logo1 {
            width: 150px !important;
            margin-top: -30px !important;
        }

        @media (max-width: 992px) {
            .logo1 {
                width: 150px !important;
                margin-top: -30px !important;
            }

            @media (max-width: 768px) {
                .logo1 {
                    width: 200px !important;
                    margin-top: -35px !important;
                }

                .logo {
                    height: 150px;
                }

                #header #logo img {
                    max-height: 70px;
                }
            }
        }
    </style>
</head>
<body>
  <header id="header" style="background-color: #FFFFFF;">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <!--<h1><a href="#intro" class="scrollto">Assissi</a></h1>-->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="#intro"><img class="logo1" src="assets/img/logo/logo.png" alt=""></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="/">Home</a></li>
                <li class="menu-has-children"><a href="/aboutus">About Us</a>
                    <ul>
                        <li><a href="/aboutus">ASSISI IFL</a></li>
                        <li><a href="/aboutus">OUR INSPIRATION</a></li>
                        <li><a href="/aboutus">OUR VISION</a></li>
                        <li><a href="/aboutus">OUR MISSION</a></li>
                        <li><a href="/aboutus">FACULTY</a></li>
                        <li><a href="/aboutus">PHILODOPHY OF AIFL</a></li>
                    </ul>
                </li>
                <li class="menu-has-children"><a href="/courses">COURSES</a>
                    <ul>
                        <li><a href="/courses">GERMAN</a></li>
                        <li><a href="/courses">FRENCH</a></li>
                        <li><a href="/courses">ITALIAN</a></li>
                        <li><a href="/courses">ENGLISH</a></li>
                    </ul>
                </li>
                <li class="menu-has-children"><a href="/facilities">FACILITIES</a>
                    <ul>
                        <li><a href="/facilities">LAB</a></li>
                        <li><a href="/facilities">HOSTEL</a></li>
                        <li><a href="/facilities">LIBRARY</a></li>
                    </ul>
                </li>
                <li><a href="/gallery">GALLERY</a></li>
                <li><a href="/contact">CONTACT</a>
                </li>
                <li><a href="/register">REGISTER</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header>
<!-- header ends here -->
@yield('contents') <!-- contents to display for the assets -->
    <footer>
        <div class="footer-wrappr pt-5 section-bg"
            style="background-image:url(assets/img/footer_bg.png);background-size:100%">
            <div class="footer-area pt-5 pb-5 ">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12 mb-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4 data-aos="fade-right" style="color:#2C234D;"><b>Information</b></h4>
                                    <ul data-aos="fade-up">
                                        <li><a href="#"><i class="fa fa-chevron-right"></i> Campus
                                                Tour</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i> Student
                                                Life</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i>
                                                Scholorship</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i>
                                                Admission</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i>
                                                Leadership</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12 mb-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4 data-aos="fade-left" style="color:#2C234D;"><b>Courses</b></h4>
                                    <ul data-aos="fade-right">
                                        <li><a href="#"><i class="fa fa-chevron-right"></i>
                                                German</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i>
                                                French</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i>
                                                Italian</a></li>
                                        <li><a href="#"><i class="fa fa-chevron-right"></i>
                                                English</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4 data-aos="fade-right" style="color:#2C234D;"><b>Contact Us</b></h4>
                                    <ul data-aos="fade-left">
                                        <li><a href="#"><i class="fa fa-map-marker"></i> Assisi
                                                Institute of foreign Languages<br>
                                                Opp:St. Alphonsa Shrine,<br> Bharanaganam - 686578<br>
                                                Kottayam Dt, Kerala.</a></li>
                                        <li><a href="#"><i class="fa fa-phone"></i> 04822236457,
                                                9961246648</a></li>
                                        <li><a href="#"><i class="fa fa-envelope"></i>
                                                assisiifl@gmail.com</a></li>
                                        <li><a href="#"><i class="fa fa-globe"></i>
                                                assisiinstitute.org</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 mb-5">
                            <div class="single-footer-caption mb-50 p-3">
                                <!-- logo -->
                                <div class="footer-logo mb-25 pb-3" data-aos="fade-left">
                                    <a href="#intro"><img src="assets/img/logo/logo.png" alt=""
                                            style="height:80px;margin-top:-15px;"></a>
                                </div>
                                <div class="footer-tittle mb-50">
                                    <p data-aos="fade-right" style="color:#2C234D;">Subscribe our newsletter to get
                                        updates about our services
                                    </p>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="/subcription" method="post"
                                            class="subscribe_form relative mail_part" novalidate="true">
                                            @csrf
                                            <input type="email" style="color:#2C234D;" data-aos="fade-right"
                                                name="email" id="newsletter-form-email" placeholder=" Email Address "
                                                class=" placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Your email address'">
                                            <div class="form-icon" data-aos="fade-left">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon text-white newsletter-submit button-contactForm">
                                                    Subscribe
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social mt-5">
                                    <a href="#" data-aos="fade-up"><i class="text-info fa fa-twitter"></i></a>
                                    <a href="#" data-aos="fade-up"><i class="text-info fa fa-facebook-f"></i></a>
                                    <a href="#" data-aos="fade-up"><i class="text-info fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div>
                        <div class="row">
                            <div class="col-xl-10 ">
                                <div class="footer-copy-right">
                                    <p style="color:#2C234D;">
                                        Copyright &copy;
                                        <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                        Developed by Foxiton
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.10/js/superfish.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.boomcdn.com/libs/owl-carousel/2.3.4/owl.carousel.min.js"></script>-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/superfish/superfish.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <!--<script src="assets/vendor/aos/aos.js"></script>-->
    
    
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/superfish/superfish.min.js"></script>
    <script src="assets/vendor/jquery-touchswipe/jquery.touchSwipe.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <script src="assets/js/script.js"></script>

</html>