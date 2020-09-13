@extends('layouts.headerandfooter')
@section("contents") 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/aos/aos.css">
    <link rel="stylesheet" href="assets/css/gallery.css">
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
<body style="font-family: 'Raleway', sans-serif;">
        <div class="popular-directorya-area mt-5 bg-light  border-bottom section-padding40 fix">
            <div class="container">
                <div class="directory-active row">
                    <!-- Single -->
                    <div class="properties pb-20 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="50">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="album.php"><img src="assets/img/slide1.jpg" alt="" height="210" width="300"></a>
                                <div class="img-text">
                                    <span>28-02-2020</span>
                                    <!--<span>Closed</span>-->
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file-image-o fa-3x" style="color:#11CFE1;"></i>
                                </div>
                            </div>
                            <div class="properties__caption">
                                <h3><a href="album.php">Album</a></h3>
                                <p style="margin-bottom:25px;">Let's uncover the College Festival Album</p>
                            </div>
                            <div class="properties__footer d-flex justify-content-between align-items-center">
                                <div class="restaurant-name col-lg-12">
                                    <span><h5 style="float:left;line-height:1.5"><i class="fa fa-bank pr-2"></i>College Festival</h5><a href="/gallery/album"><button class="btn px-3 text-white" style="float:right;background-color:#FF7E5F;border-radius:20px;">View</button></a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-20 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="rankers.php"><img src="assets/img/img_2.jpg" alt="" height="210" width="300"></a>
                                <div class="img-text">
                                    <span>28-02-2020</span>
                                    <!--<span>Closed</span>-->
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file-image-o fa-3x" style="color:#11CFE1;"></i>
                                </div>
                            </div>
                            <div class="properties__caption">
                                <h3><a href="rankers.php">Rank Holders</a></h3>
                                <p style="margin-bottom:25px;">View our recent Rank holders.</p>
                            </div>
                            <div class="properties__footer d-flex justify-content-between align-items-center">
                                <div class="restaurant-name col-lg-12">
                                    <span><h5 style="float:left;line-height:1.5"><i class="fas fa-user-graduate pr-2"></i>Our Winners</h5><a href="/gallery/rankers"><button class="btn px-3 text-white" style="float:right;background-color:#FF7E5F;border-radius:20px;">View</button></a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-20 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="150">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="youtube.php"><img src="assets/img/img_1.jpg" alt=""></a>
                                <div class="img-text">
                                    <span>28-02-2020</span>
                                    <!--<span>Closed</span>-->
                                </div>
                                <div class="icon">
                                    <i class="fa fa-video fa-3x" style="color:#11CFE1;"></i>
                                </div>
                            </div>
                            <div class="properties__caption">
                                <h3><a href="youtube.php">Videos</a></h3>
                                <p style="margin-bottom:25px;">Our Functional and Educative videos</p>
                            </div>
                            <div class="properties__footer d-flex justify-content-between align-items-center">
                                <div class="restaurant-name col-lg-12">
                                    <span><h5 style="float:left;line-height:1.5"><i class="fab fa-youtube pr-2"></i>Youtube Videos</h5><a href="/gallery/youtube"><button class="btn px-3 text-white" style="float:right;background-color:#FF7E5F;border-radius:20px;">View</button></a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="properties pb-20 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="youtube.php"><img src="assets/img/img_1.jpg" alt=""></a>
                                <div class="img-text">
                                    <span>28-02-2020</span>
                                    <!--<span>Closed</span>-->
                                </div>
                                <div class="icon">
                                    <img src="assets/img/categori_icon1.png" alt=""> 
                                </div>
                            </div>
                            <div class="properties__caption">
                                <h3><a href="youtube.php">Videos</a></h3>
                                <p style="margin-bottom:25px;">Our Functional and Educative videos</p>
                            </div>
                            <div class="properties__footer d-flex justify-content-between align-items-center">
                                <div class="restaurant-name col-lg-12">
                                    <span><h5 style="float:left;line-height:1.5"><i class="fab fa-youtube pr-2"></i>Youtube Videos</h5><a href="youtube.php"><button class="btn px-3 text-white" style="float:right;background-color:#FF7E5F;border-radius:20px;">View</button></a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/superfish/superfish.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>


    <script src="assets/js/script.js"></script>
</body>
</html>
@endsection