
<?php 
    /* Server side files */
	require_once "server_config.php";
	require_once "php/gnewsAPI.php";
		
	$con -> close();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Amazing Grazing - Protecting Australian Grasslands</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="icon" href="images/amazing-grazing-logo_small.png">
    
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
		<link rel="stylesheet" href="css/animate.css">
    
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">

		<link rel="stylesheet" href="css/ionicons.min.css">
    
		<link rel="stylesheet" href="css/flaticon.css">
		<link rel="stylesheet" href="css/icomoon.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
        
		<!-- White container -->
		<!-- <div class="container pt-5 pb-4">
			<div class="row justify-content-between">
				<div class="col-md-8 order-md-last">
					<div class="row">
						
						<!-- Title -->
						<!--<div class="col-md-6 text-center">
							<a class="navbar-brand" href="index.html">Lawn<span>Care</span></a>
						</div>-->
						
						<!-- Search -->
						<!--<div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
							<form action="#" class="searchform order-lg-last">
								<div class="form-group d-flex">
									<input type="text" class="form-control pl-3" placeholder="Search">
									<button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
								</div> 
							</form>
						</div> -->
					<!-- </div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="social-media">
					
					    <!-- Social Media -->
						<!-- <p class="mb-0 d-flex">
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						</p>-->
					
					<!--</div>
				</div>
			</div>
		</div>-->
		
		
		<!-- Navigation Bar -->
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container-fluid">
				<!-- Website Logo -->
				<a class="navbar-brand" style="margin-bottom:0" href="#">
					<img src="images/amazing-grazing-logo_crop_100_39.png" alt=""> <!-- logo size 100x39 px -->
				</a>
			
			    <!-- Bootstrap settings used when the window is minimized / on smaller screens -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span> Menu
				</button>
				
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav m-auto">
						<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="about.php" class="nav-link">News</a></li>
						<li class="nav-item"><a href="techniques.php" class="nav-link">Techniques</a></li>
						<li class="nav-item"><a href="gallery.php" class="nav-link">Statistics</a></li>
						<li class="nav-item"><a href="blog.php" class="nav-link">Predict Drought</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End Navigation Bar -->
		
		<!-- Header -->
		<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h2 class="subheading"><i>Welcome to Amazing Grazing</i></h2>
						<h1>Make a difference in protecting Australian grasslands</h1>
						<p class="mb-4">By grazing and preserving your livestock</p>
						<p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End Header -->
		
		<!-- Section 1: We Protect by Providing -->
		<section class="ftco-section ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-10 text-center heading-section ftco-animate">
						<span class="subheading">Offerings</span>
						<h2 class="mb-4">We Protect by Providing</h2>
					</div>
					
					<div class="col-lg-12 services-wrap px-4 pt-5">
						<div class="row pt-md-3">
						    <!-- Tile 1: News -->
							<div class="col-md-3 d-flex align-items-stretch">
								<div class="services text-center">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="flaticon-news"></span>
									</div>
									<div class="text">
										<h3>News</h3>
										<p>Staying up to date with the news regarding grazing, fires, drought, and livestock is important for all of us.</p>
									</div>
									<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span>Read more &nbsp </span><span class="ion-ios-arrow-round-forward"></span></a>
								</div>
							</div>
							<!-- End Tile 1: News -->
							
							<!-- Tile 2: Statistics -->
							<div class="col-md-3 d-flex align-items-stretch">
								<div class="services text-center">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="flaticon-statistics"></span>
									</div>
									<div class="text">
										<h3>Statistics</h3>
										<p>Dominants livestock has been reducing since 1970 up until now. Various graphs related to specific livestock provides some analysis regarding the current situation.</p>
									</div>
									<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span>Read more &nbsp </span><span class="ion-ios-arrow-round-forward"></span></a>
								</div>
							</div>
							<!-- End Tile 2: Statistics -->
							
							<!-- Tile 3: Grazing Techniques -->
							<div class="col-md-3 d-flex align-items-stretch">
								<div class="services text-center">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="flaticon-horse-grazing-black-silhouette""></span>
									</div>
									<div class="text">
										<h3>Grazing Techniques</h3>
										<p>Preserving grassland's nature, soil, and grass is important to improve livestock and its safety. Various techniques are provided to guide you.</p>
									</div>
									<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span>Read more &nbsp </span><span class="ion-ios-arrow-round-forward"></span></a>
								</div>
							</div>
							<!-- End Tile 3: Grazing Techniques -->
							
							<!-- Tile 4: Drought Prediction -->
							<div class="col-md-3 d-flex align-items-stretch">
								<div class="services text-center">
									<div class="icon d-flex justify-content-center align-items-center">
										<span class="flaticon-drought"></span>
									</div>
									<div class="text">
										<h3>Drought Prediction</h3>
										<p>Drought is one of the issues that prevent effective grazing, ruins the soil, causes fires, and leads to livestock reduction. We aim to predict drought seasons to assist you.</p>
									</div>
									<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span>Read more &nbsp </span><span class="ion-ios-arrow-round-forward"></span></a>
								</div>
							</div>
							<!-- End Tile 4: Drought Prediction -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section 1: We Protect by Providing -->
		
		<!-- Section 2: News -->
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
					<div class="col-md-7 heading-section text-center ftco-animate">
						<span class="subheading">Our news</span>
						<h2>News</h2>
					</div>
				</div>
			    
				<!-- All The news are displayed here -->
				<div class="row d-flex">
					<?php echo htmlspecialchars_decode(newsGenerator($newsData));?>
				</div>
			</div>
		</section>
		<!-- Section 2: News -->
		
		<!-- Secion 3: About us -->
		<section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-6 d-flex">
						<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(images/about.jpg);">
							<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
								<span class="icon-play"></span>
							</a>
						</div>
					</div>
					<div class="col-md-6 pl-md-5">
						<div class="row justify-content-start py-5">
							<div class="col-md-12 heading-section ftco-animate">
								<span class="subheading">Welcome to Lawn Care</span>
								<h2 class="mb-4">Welcome to Lawn Care Company</h2>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
								<div class="services-wrap">
									<a href="#" class="services-list">Gutter cleaning
										<div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div>
									</a>
									<a href="#" class="services-list">Organinc fertilization and weed control
										<div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div>
									</a>
									<a href="#" class="services-list">Compost top dressing &amp; compost tea application
										<div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div>
									</a>
									<a href="#" class="services-list">New lawn installation
										<div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div>
									</a>
									<a href="#" class="services-list">Mulch and other services available
										<div class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Secion 3: About us -->
        
		<!-- Section 4: Seasonal Lawn Care Tips-->
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
					<div class="col-md-10 text-center heading-section ftco-animate">
						<span class="subheading">Tips &amp; Techniques</span>
						<h2 class="mb-4">Seasonal Lawn Care Tips</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="carousel-seasonal owl-carousel ftco-owl">
							<div class="item">
								<div class="wrap">
									<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/seasonal-1.jpg);">
									</div>
									
									<div class="text text-center px-4">
										<h3><a href="#">Spring</a></h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="wrap">
									<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/seasonal-2.jpg);">
									</div>
									
									<div class="text text-center px-4">
										<h3><a href="#">Summer</a></h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="wrap">
									<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/seasonal-3.jpg);">
									</div>
									
									<div class="text text-center px-4">
										<h3><a href="#">Winter</a></h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="wrap">
									<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/seasonal-4.jpg);">
									</div>
								
									<div class="text text-center px-4">
										<h3><a href="#">Fall</a></h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section 4: Seasonal Lawn Care Tips-->
		
		<!-- Section 5: Contact us -->
		<section class="ftco-intro bg-primary py-5">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-md-6">
						<h2>Contact with us</h2>
						<p>Do you have any comments or questions about the products then contact us.</p>
					</div>
					
					<div class="col-md-5 text-md-right">
						<span class="contact-number">+00(123) 456-78-09</span>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section 5: Contact us -->
		

		<!-- Section 6: Happy Clients -->
		<section class="ftco-section testimony-section">
		  <div class="container">
			<div class="row justify-content-center mb-5">
			  <div class="col-md-7 text-center heading-section ftco-animate">
				<span class="subheading">Testimonial</span>
				<h2 class="mb-4">Happy Clients</h2>
			  </div>
			</div>
			<div class="row ftco-animate">
			  <div class="col-md-12">
				<div class="carousel-testimony owl-carousel ftco-owl">
				  <div class="item">
					<div class="testimony-wrap py-4">
					  <div class="text">
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
							<div class="pl-3">
								<p class="name">Roger Scott</p>
								<span class="position">Marketing Manager</span>
							  </div>
						  </div>
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="testimony-wrap py-4">
					  <div class="text">
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
							<div class="pl-3">
								<p class="name">Roger Scott</p>
								<span class="position">Marketing Manager</span>
							  </div>
						  </div>
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="testimony-wrap py-4">
					  <div class="text">
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
							<div class="pl-3">
								<p class="name">Roger Scott</p>
								<span class="position">Marketing Manager</span>
							  </div>
						  </div>
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="testimony-wrap py-4">
					  <div class="text">
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
							<div class="pl-3">
								<p class="name">Roger Scott</p>
								<span class="position">Marketing Manager</span>
							  </div>
						  </div>
					  </div>
					</div>
				  </div>
				  <div class="item">
					<div class="testimony-wrap py-4">
					  <div class="text">
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
							<div class="pl-3">
								<p class="name">Roger Scott</p>
								<span class="position">Marketing Manager</span>
							  </div>
						  </div>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</section>
		<!-- End Section 6: Happy Clients -->
		

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
      <div class="container">
        <div class="row d-flex justify-content-center">
        	<div class="col-lg-8 py-4">
        		<div class="row">
		          <div class="col-md-6 ftco-animate d-flex align-items-center">
		            <h2 class="mb-0" style="color:white; font-size: 24px;">Subcribe to our Newsletter</h2>
		          </div>
		          <div class="col-md-6 d-flex align-items-center">
		            <form action="#" class="subscribe-form">
		              <div class="form-group d-flex">
		                <input type="text" class="form-control" placeholder="Enter email address">
		                <input type="submit" value="Subscribe" class="submit px-3">
		              </div>
		            </form>
		          </div>
	          </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><a href="#">Lawn <span>Care</span></a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Garden Care</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Lawn mowing</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Lawn Care</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Gutter Cleaning</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>New Lawn Installation</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Contact information</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Business Hours</h2>
              <div class="opening-hours">
              	<h4>Opening Days:</h4>
              	<p class="pl-3">
              		<span>Monday – Friday : 9am to 20 pm</span>
              		<span>Saturday : 9am to 17 pm</span>
              	</p>
              	<h4>Vacations:</h4>
              	<p class="pl-3">
              		<span>All Sunday Days</span>
              		<span>All Official Holidays</span>
              	</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.</a> | Icons are taken from the <a href="fonts/flaticon/license/license.html">Flaticon.</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
    
  </body>
</html>