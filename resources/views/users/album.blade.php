@extends('layouts.headerandfooter')
@section("contents") 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <link href="/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/user/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/user/vendor/aos/aos.css">
    <link rel="stylesheet" href="/user/vendor/Magnific-Popup/magnific-popup.css">
    <link rel="stylesheet" href="/user/css/album.css">
    <link rel="stylesheet" href="/user/css/style.css">
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
    <!--================ Gallery section Start =================-->
  <section class="section-padding--large gallery-area bg-light mt-5">
    <div class="container pt-5">

      <div class="row no-gutters mt-5 pb-5">

        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="50">
            <div class="p-3">
                <a href="/user/img/gallery/1.jpg" class="img-gal">
                  <div class="single-imgs relative p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img" src="/user/img/gallery/1.jpg" alt="" style="border-top-radius:10px;">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">AIFL launched a barand new edutainment platform on youtube.</p>
                  </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="p-3">
                <a href="/user/img/gallery/2.jpg" class="img-gal">
                  <div class="single-imgs relative  p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img rounded-0" src="/user/img/gallery/2.jpg" alt="">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">AIFL launched a barand new edutainment platform on youtube.</p>
                  </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="150">
            <div class="p-3">
                <a href="/user/img/gallery/3.jpg" class="img-gal">
                  <div class="single-imgs relative  p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img rounded-0" src="/user/img/gallery/3.jpg" alt="">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">AIFL launched a barand new edutainment platform on youtube.</p>
                  </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="50">
            <div class="p-3">
                <a href="/user/img/gallery/4.jpg" class="img-gal">
                  <div class="single-imgs relative  p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img rounded-0" src="/user/img/gallery/4.jpg" alt="">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">AIFL launched a barand new edutainment platform on youtube.</p>
                  </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="p-3">
                <a href="/user/img/gallery/5.jpg" class="img-gal">
                  <div class="single-imgs relative  p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img rounded-0" src="/user/img/gallery/5.jpg" alt="">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">AIFL launched a barand new edutainment platform on youtube.</p>
                  </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="150">
            <div class="p-3">
                <a href="/user/img/gallery/6.jpg" class="img-gal">
                  <div class="single-imgs relative  p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img rounded-0" src="/user/img/gallery/6.jpg" alt="">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">AIFL launched a barand new edutainment platform on youtube.</p>
                  </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="50">
            <div class="p-3">
                <a href="/user/img/gallery/7.jpg" class="img-gal">
                  <div class="single-imgs relative  p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img rounded-0" src="/user/img/gallery/7.jpg" alt="">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">AIFL launched a barand new edutainment platform on youtube.</p>
                  </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="p-3">
                <a href="/user/img/gallery/8.jpg" class="img-gal">
                  <div class="single-imgs relative  p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img rounded-0" src="/user/img/gallery/8.jpg" alt="">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">AIFL launched a barand new edutainment platform on youtube.</p>
                  </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="150">
            <div class="p-3">
                <a href="/user/img/gallery/9.jpg" class="img-gal">
                  <div class="single-imgs relative  p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img rounded-0" src="/user/img/gallery/9.jpg" alt="">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">AIFL launched a barand new edutainment platform on youtube.</p>
                  </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="50">
            <div class="p-3">
                <a href="/user/img/gallery/10.jpg" class="img-gal">
                  <div class="single-imgs relative  p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img rounded-0" src="/user/img/gallery/10.jpg" alt="">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">AIFL launched a barand new edutainment platform on youtube.</p>
                  </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="p-3">
                <a href="/user/img/gallery/11.jpg" class="img-gal">
                  <div class="single-imgs relative  p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img rounded-0" src="/user/img/gallery/11.jpg" alt="">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">AIFL launched a barand new edutainment platform on youtube.</p>
                  </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="150">
            <div class="p-3">
                <a href="/user/img/gallery/12.jpg" class="img-gal">
                  <div class="single-imgs relative  p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img rounded-0" src="/user/img/gallery/12.jpg" alt="">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">AIFL launched a barand new edutainment platform on youtube.</p>
                  </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="50">
            <div class="p-3">
                <a href="/user/img/gallery/13.jpg" class="img-gal">
                  <div class="single-imgs relative  p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img rounded-0" src="/user/img/gallery/13.jpg" alt="">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">AIFL launched a barand new edutainment platform on youtube.</p>
                  </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="p-3">
                <a href="/user/img/gallery/14.jpg" class="img-gal">
                  <div class="single-imgs relative  p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img rounded-0" src="/user/img/gallery/14.jpg" alt="">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">AIFL launched a barand new edutainment platform on youtube.</p>
                  </div>
                </a>
            </div>
        </div>


        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="150">
            <div class="p-3">
                <a href="/user/img/gallery/15.jpg" class="img-gal">
                  <div class="single-imgs relative  p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img rounded-0" src="/user/img/gallery/15.jpg" alt="">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">AIFL launched a barand new edutainment platform on youtube.</p>
                  </div>
                </a>
            </div>
        </div>


        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="50">
            <div class="p-3">
                <a href="/user/img/gallery/16.jpg" class="img-gal">
                  <div class="single-imgs relative  p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img rounded-0" src="/user/img/gallery/16.jpg" alt="">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">AIFL launched a barand new edutainment platform on youtube.</p>
                  </div>
                </a>
            </div>
        </div>

      </div>
    </div>
  </section>
    <script src="/user/vendor/jquery/jquery.min.js"></script>
    <script src="/user/vendor/wow/wow.min.js"></script>
    <script src="/user/vendor/aos/aos.js"></script>
    <script src="/user/vendor/superfish/superfish.min.js"></script>
    <script src="/user/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/user/vendor/Magnific-Popup/jquery.magnific-popup.min.js"></script>

    <script src="/user/js/album.js"></script>

    <script src="/user/js/script.js"></script>
</body>
</html>
@endsection