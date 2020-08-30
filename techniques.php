
<?php 
    /* Server side files */
	require_once "server_config.php";
	require_once "php/navigation.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Amazing Grazing - Grazing Techiques</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Browser tab logo -->
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
	<link rel="stylesheet" href="css/techniques.css">
  </head>
  <body>
	<!--"Go to top button"-->
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<!-- Navigation Bar -->
	<?php echo generateNavTabs($con, 'techniques.php');?>
	<!-- End Navigation Bar -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/grazing_methods.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate pb-5 text-center">
				<h1 class="mb-3 bread">GRAZING METHODS</h1>
			<!--
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Techniques <i class="ion-ios-arrow-forward"></i></span></p>
          -->
		  </div>
        </div>
      </div>
    </section>
	
	<div class="container" style="padding-top: 15px;">
		<div class="row">
			<div class="col-md-12 pull-left">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Techniques <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
	<!--Coninuous grazing-->
	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="row">
			<div class="col-xs-12 col-md-1"></div>
			<div class="col-xs-12 col-md-5">
				<div class="heading-section ftco-animate"  style="padding-left: 60px;">
					<div class="row">
						<h2 style="color: #228B22;text-align: left;">CONTINUOUS GRAZING</h2>
						<p style="text-align: justify;">No rotation of livestock with single pasture system.</p>
						<p style="text-align: justify;">Continuous grazing requires high conservative stocking rates in general.</p>
					</div>
					<!--<div class="row">
						<div class="col-xs-12 col-md-6">
							<a href="download/rotational_grazing.png" class="btn btn-warning py-2 px-3" id="bochure">Look at the Brochure</a>
						</div>
						<div class="col-xs-12 col-md-6">
							<a href="download/rotational_grazing.png" class="btn btn-warning py-2 px-3" download id="bochure">Download Brochure</a>
						</div>
					</div>-->
				</div>
			</div>
			<!--video/gif/image-->
			<div class="col-xs-12 col-md-5 d-flex justify-content-center align-items-center">
				<img src="images/continuous_grazing.png" alt="Continuous grazing"  height="220" style="padding-right: 60px;">
			</div>
			<div class="col-xs-12 col-md-1"></div>
		</div>	
	</section>
	<br/><br/>
	<!--rotational grazing
	<section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
         <div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-1"></div>
				<div class="col-xs-12 col-md-4">
					<img src="images/rotational-grazing.gif" alt="Rotational Grazing" width="300" height="300" style="margin:30px 20px">
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="heading-section ftco-animate" style="margin:30px 30px">
						
						<h2 style="text-align:right; color:white;">ROTATIONAL GRAZING</h2>
						<p style="color:white; text-align: justify;">Slow Rotational Grazing: Pastures of 2 or more with standard moves from every 2 weeks to every few months.</p>
						<p style="color:white; text-align: justify;">Planned Rotational Grazing: Strategic moves in every 3 to 10 days to enable land recovery and rest in grazed pastures.</p>
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<a href="download/rotational_grazing.png" class="btn btn-warning py-2 px-3" id="bochure">Look at the Brochure</a>
							</div>
							<div class="col-xs-12 col-md-6">
								<a href="download/rotational_grazing.png" class="btn btn-warning py-2 px-3" download id="bochure">Download Brochure</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xs-12 col-md-1"></div>
			</div>
        </div>
    </section>-->
	
		<!--rotational grazing-->
	<section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
         <div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-1"></div>
				<div class="col-xs-12 col-md-4">
				<img src="images/rotational-grazing.gif" alt="Rotational Grazing" width="300" height="300" style="margin:30px 30px">
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="heading-section ftco-animate">
						<br/>
						<h2 style="text-align:right; color:white;padding: 30px;">ROTATIONAL GRAZING</h2>
						<p style="color:white;px;padding-bottom: 15px;">
						Rotating the livestock by dividing different sections of the whole paddock. 
						While the last paddock in the series was grazed, the first section was in a rested state which allows adequate time for the
						regrowth of the pasture in that section of paddock, and the grazing sequence can be
						commenced in a sustainable and effective way.
						</p>
						<p style="color:white;px;padding-bottom: 15px;">
						Rotational grazing can express much higher stocking rates of paddock-bypaddock
						than regular pre-set stocking. It enhanced the nutritious level of the grazing
						plants in the best growth stage of their lifecycle, therefore enables multiple livestock
						to be able to continue their thriving.
						</p>
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<a href="download/rotational_grazing.png" class="btn btn-warning py-2 px-3" id="bochure">Look at the Brochure</a>
							</div>
							<div class="col-xs-12 col-md-6">
								<a href="download/rotational_grazing.png" class="btn btn-warning py-2 px-3" download id="bochure">Download Brochure</a>
							</div>
							<div class="col-xs-12 col-md-6">
								<p style="padding: 30px;"></p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xs-12 col-md-1"></div>
			</div>
        </div>
    </section>
	<!--rotational grazing-->
	
	<!--rotational grazing 2-->
	<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="row">
				<div class="col-xs-12 col-md-3"></div>
				<div class="col-xs-12 col-md-6">
					<div class="heading-section ftco-animate">
						<h2 style="padding-top: 60px; color: #228B22;text-align: center; ">WHY USE IT?</h2>
					</div>
				</div>
			</div>
			<div class="row">
			<div class="col-xs-12 col-md-3"></div>
				<div class="col-xs-12 col-md-6">
					<div class="heading-section ftco-animate" >
						<div class="row" style="padding-top: 30px;padding-bottom: 60px;text-align: center;">
							<p>Rotational grazing can express much higher stocking rates of paddock-bypaddock
							than regular pre-set stocking. It enhanced the nutritious level of the grazing
							plants in the best growth stage of their lifecycle, therefore enables multiple livestock
							to be able to continue their thriving.
							</p>
							<p>
							Using this technique, you can maintain your land forage as high productive
							pasture which extends the period of balanced growth. At the same time, compared to
							continuous grazing, you can decrease the methane emissions from livestock by up to
							22% (per unit of cattle gain).
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-1"></div>
			</div>
		</div>
	</section>
	<!--rotational grazing 2-->
	
	<!-- DIFFERENT ROTATIONAL GRAZING METHODS -->
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
					<div class="col-md-10 heading-section text-center ftco-animate">
						<h2>DIFFERENT ROTATIONAL GRAZING METHODS</h2>
					</div>
				</div>
			
				<div class="row d-flex">
					<div class="col-md-4 d-flex ftco-animate">
						<div class="blog-entry justify-content-end">
								<a href="blog-single.html" class="block-20" style="background-image: url('images/management_intensive_grazing.jpeg');">
								</a>
							<div class="text p-4 float-right d-block">								
								<h3 class="heading mb-0"><a href="#">Slow Rotational Grazing</a></h3>
								<p>Slow rotational grazing is pastures of 2 or more with standard moves from every 2 weeks to every few months in order to enable land recovery and rest.</p>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 d-flex ftco-animate">
						<div class="blog-entry justify-content-end">
							<a href="blog-single.html" class="block-20" style="background-image: url('images/mod_grazing.jpeg');">
							</a>
							<div class="text p-4 float-right d-block">								
								<h3 class="heading mb-0"><a href="#">Mob Grazing</a></h3>
								<p>Requires significantly higher stock densities between 75-300+ AU per acre. Multiple moves per day are required to maintain ideal stock densities. Temporary fencing is often used to create small paddocks.</p>								
							</div>
						</div>
					</div>
				
					<div class="col-md-4 d-flex ftco-animate">
						<div class="blog-entry justify-content-end">
							<a href="blog-single.html" class="block-20" style="background-image: url('images/adaptive_high_stock_density_grazing.jpeg');">
							</a>
							<div class="text p-4 float-right d-block">														
								<h3 class="heading mb-0"><a href="#">Adaptive High-Stock Density Grazing</a></h3>
								<p>Apply multiple of the previous methods of grazing to enable graziers to adjust herd density to achieve nutritional needs of livestock and satisfy the conditions of the soil.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- DIFFERENT ROTATIONAL GRAZING METHODS -->
	
	
	<!--Seasonal grazing-->
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
				<div class="col-md-10 text-center heading-section ftco-animate">
					<!--<span class="subheading">Tips &amp; Techniques</span>
					<h2 class="mb-4">Seasonal Lawn Care Tips</h2>-->
					<h2 style="color: #228B22;">SEASONAL GRAZING</h2>
					<p style="text-align: justify;">Seasonal grazing is a great technique that only operating in a specific portion during certain seasons of the whole year. Seasonal grazing also can be combined using rotational and continuous grazing that takes place in that season. By applying this technique, it enables to shorten that time consumption spending on the farming infrastructure and livestock managing.
					</p>
					<p style="text-align: justify;">Different season conditions provide different use of land for certain species. The benefits and disadvantages of seasonal grazing on the grassland can be very different based on the season you selected. Seasonal grazing offers a great chance to adjust your grazing regime of the year. It can benefit the targeted flora species in the habitat for better effectivity in the long-term.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1  d-flex align-items-center justify-content-center">
				</div>
				<div class="col-md-10">
					<div class="carousel-seasonal owl-carousel ftco-owl">
						<div class="item">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/seasonal-1.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3>Spring</h3>
									<p>Not the most appropriate time for effective grazing. It is better to keep relatively light grazing.
									</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/seasonal-2.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3>Summer</h3>
									<p>Not the best time. Light grazing is a more ideal option.
									</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/seasonal-3.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3>Winter</h3>
									<p>It is a chance that you can adjust your whole year grazing regime.
									</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/seasonal-4.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3>Autumn</h3>
									<p>The most suitable time to apply heavy grazing combined with a rotational or continuous technique.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-1 d-flex align-items-center justify-content-center"> 
				</div>
			</div>
			<div class="row justify-content-center mb-5">
				<div class="col-md-10 text-center heading-section ftco-animate">
					</br>
					<h2 class="mb-4">Our Suggestion</h2>
					<p style="text-align: justify;">Set your grazing regime and goals. Be clear with your grazing and productivity expectation.
					</p>
					<p style="text-align: justify;">Determine your concerns or problems that need to be solved regarding different seasons.
					</p>
				</div>
			</div>
    	</div>
    </section>

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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
    <script src="js/top.js"></script>
  </body>
</html>

<?php $con -> close(); ?>