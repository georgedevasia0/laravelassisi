@extends('layouts.headerandfooter')
@section("contents") 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <link href="/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/user/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/user/vendor/aos/aos.css">
    <link rel="stylesheet" href="/user/css/youtube.css">
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
        <div class="fluid-container bg-light mt-5">
            <div class="container pt-5 pb-5 bg-light">
                <h2 class="text-center font-weight-bold pt-5" style="color:#2C234D;">Our Videos</h2>
                <div class="row">

                    <div class="testimonial-wrap pt-4 py-2  mx-auto">
                        <div class="col-md-12 col-lg-4 order-md-2">
                            <div class="block-16">
                                <figure>
                                  <iframe width="330" height="280" style="border-radius:5px;"
                                      src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                  </iframe>
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-wrap pt-4 py-2  mx-auto">
                        <div class="col-md-12 col-lg-4 order-md-2">
                            <div class="block-16">
                                <figure>
                                  <iframe width="330" height="280" style="border-radius:5px;"
                                      src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                  </iframe>
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-wrap pt-4 py-2  mx-auto">
                        <div class="col-md-12 col-lg-4 order-md-2">
                            <div class="block-16">
                                <figure>
                                  <iframe width="330" height="280" style="border-radius:5px;"
                                      src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                  </iframe>
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-wrap pt-4 py-2  mx-auto">
                        <div class="col-md-12 col-lg-4 order-md-2">
                            <div class="block-16">
                                <figure>
                                  <iframe width="330" height="280" style="border-radius:5px;"
                                      src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                  </iframe>
                                </figure>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <script src="/user/vendor/jquery/jquery.min.js"></script>
    <script src="/user/vendor/wow/wow.min.js"></script>
    <script src="/user/vendor/aos/aos.js"></script>
    <script src="/user/vendor/superfish/superfish.min.js"></script>
    <script src="/user/vendor/owl.carousel/owl.carousel.min.js"></script>


    <script src="/user/js/script.js"></script>
    
</body>
</html>
@endsection