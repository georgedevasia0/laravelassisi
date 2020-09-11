@extends('layouts.headerandfooter')
@section("contents") 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rank Holders</title>
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <link href="/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/user/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/user/vendor/aos/aos.css">
    <link rel="stylesheet" href="/user/css/rankers.css">
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
    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
                <div class="col-md-6 heading-section text-center ftco-animate">
                <h2 class="mb-4 pt-3 font-weight-bold" style="color:#163269">A2 Winners</h2>
          </div>
        </div>
        <div class="row">
            <!--first row-->
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-5.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Lloyd Wilson</h3>
							<span class="position mb-4">German</span>
		                </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-1.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Rachel Parker</h3>
							<span class="position mb-4">French</span>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-2.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Ian Smith</h3>
							<span class="position mb-4">German</span>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-3.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Alicia Henderson</h3>
							<span class="position mb-4">Italian</span>
                        </div>
					</div>
				</div>
            </div>
            
            <!--second row-->
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-5.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Lloyd Wilson</h3>
							<span class="position mb-4">German</span>
		                </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-1.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Rachel Parker</h3>
							<span class="position mb-4">French</span>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-2.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Ian Smith</h3>
							<span class="position mb-4">German</span>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-3.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Alicia Henderson</h3>
							<span class="position mb-4">Italian</span>
                        </div>
					</div>
				</div>
            </div>
            
            <!--third row-->
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-5.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Lloyd Wilson</h3>
							<span class="position mb-4">German</span>
		                </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-1.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Rachel Parker</h3>
							<span class="position mb-4">French</span>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-2.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Ian Smith</h3>
							<span class="position mb-4">German</span>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-3.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Alicia Henderson</h3>
							<span class="position mb-4">Italian</span>
                        </div>
					</div>
				</div>
			</div>
        </div>
        


        <!--B2 Winners-->
        <div class="container mt-5">
    		<div class="row justify-content-center pb-5">
                <div class="col-md-6 heading-section text-center ftco-animate">
                <h2 class="mb-4 pt-3 font-weight-bold" style="color:#163269">B2 Winners</h2>
          </div>
        </div>
        <div class="row">
            <!--first row-->
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-5.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Lloyd Wilson</h3>
							<span class="position mb-4">German</span>
		                </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-1.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Rachel Parker</h3>
							<span class="position mb-4">French</span>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-2.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Ian Smith</h3>
							<span class="position mb-4">German</span>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-3.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Alicia Henderson</h3>
							<span class="position mb-4">Italian</span>
                        </div>
					</div>
				</div>
            </div>
            
            <!--second row-->
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-5.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Lloyd Wilson</h3>
							<span class="position mb-4">German</span>
		                </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-1.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Rachel Parker</h3>
							<span class="position mb-4">French</span>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-2.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Ian Smith</h3>
							<span class="position mb-4">German</span>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-3.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Alicia Henderson</h3>
							<span class="position mb-4">Italian</span>
                        </div>
					</div>
				</div>
            </div>
            
            <!--third row-->
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-5.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Lloyd Wilson</h3>
							<span class="position mb-4">German</span>
		                </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-1.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Rachel Parker</h3>
							<span class="position mb-4">French</span>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-2.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Ian Smith</h3>
							<span class="position mb-4">German</span>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff mb-3 pt-3">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(/user/img/testimonials/testimonials-3.jpg);"></div>
					</div>
					<div class="text d-flex align-items-center pt-3 text-center">
						<div>
							<h3 class="mb-2 font-weight-bold">Alicia Henderson</h3>
							<span class="position mb-4">Italian</span>
                        </div>
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


    <script src="/user/js/script.js"></script>
</body>
</html>
@endsection