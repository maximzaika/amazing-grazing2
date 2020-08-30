<?php 
    /* Server side files */
	require_once "server_config.php";
	require_once "php/navigation.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Amazing Grazing - Rotational Grazing</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Browser tab logo -->
		<link rel="icon" href="images/amazing-grazing-logo_small.png"> 
	
		<!-- Original files -->
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
		<link rel="stylesheet" href="css/top.css">
	</head>
	<body>
	<!--"Go to top button"-->
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    
	<!-- Navigation Bar -->
	<?php echo generateNavTabs($con, 'techniques.php');?>
	<!-- End Navigation Bar -->
    
    <!-- Section 1: Page header - Grazing Techniques -->
	<section class="hero-wrap hero-wrap-2" style="background-image: url('images/grazing_methods.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div> <!-- add the darkness to the photo -->
			<div class="container">
				<div class="row no-gutters slider-text align-items-end justify-content-center">
					<div class="col-md-9 ftco-animate pb-5 text-center">
						<h1 class="mb-3 bread">Grazing Techniques</h1>
					</div>
				</div>
			</div>
	</section>
	<!-- End Section 1: Page header - Grazing Techniques -->
	
	<!-- Breadcrumbs -->
	<div class="container" style="padding-top: 15px;">
		<div class="row">
			<div class="col-md-12 pull-left">
				<h5 class="breadcrumbs">
					<span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a>
					<span class="mr-2"><a href="techniques.php">Techniques <i class="ion-ios-arrow-forward"></i></a>
					<span><u><i>Rotational grazing</i> <i class="ion-ios-arrow-forward"></u></i></a>
				</h5> 
				<hr>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->
	
	<!-- Section 2: Rotational Grazing -->
	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-8 py-5">
					<div class="heading-section ftco-animate">
						<h2 class="mb-4" style="text-align:left; color: #228B22;">ROTATIONAL GRAZING</h2>
						<p style="text-align: justify;">Rotational grazing technique and its terminology might be hard to start without comprehensive understanding. Therefore, read through these explanations of standard terminologies of rotational grazing. In order to express the frequency of moves and herd density, guidelines are regarded as grazing systems like how many days per graze and cow numbers in total per acre.
						</p>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-6 col-lg-4 py-5 text-center">
					<img src="images/rotational-grazing.gif" alt="Rotational Grazing" width="300" height="300">
				</div>
			</div>
        </div>
    </section>
	<!-- End Section 2: Rotational Grazing -->

	<!--Section 2: Why Should I use it?-->
	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row">
    			<div class="col-lg-12 pull left">
					<div class="heading-section ftco-animate">
						<h2 class="mb-4" style="text-align:left; color: #228B22;">WHY SHOULD I USE IT?</h2>
						<p style="padding-bottom: 15px; text-align: justify;">Rotational grazing can express much higher stocking rates of paddock-by-paddock than regular pre-set stocking. It enhances the nutritious level of the grazing plants in the best growth stage of their lifecycle, therefore enabling multiple livestock to be able to continue their thriving. Using this technique, you can maintain your land forage as high productive pasture which extends the period of balanced growth. At the same time, compared to continuous grazing, you can decrease the methane emissions from livestock by up to 22% (per unit of cattle gain).
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--end why use it-->
	
	<!-- DIFFERENT ROTATIONAL GRAZING METHODS--> 
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
					<div class="col-md-10 heading-section text-center ftco-animate">
						<h2 style=" color: #228B22; ">DIFFERENT ROTATIONAL GRAZING METHODS</h2>
					</div>
				</div>
				<div class="row d-flex">
					<div class="col-lg-4 d-flex ftco-animate">
						<div class="blog-entry justify-content-end">
								<a href="blog-single.html" class="block-20" style="background-image: url('images/management_intensive_grazing.jpeg');">
								</a>
							<div class="text p-4 float-right d-block">								
								<h3 class="heading mb-0"><a href="#">Slow Rotational Grazing</a></h3>
								<p>Slow rotational grazing is pastures of 2 or more with standard moves from every 2 weeks to every few months in order to enable land recovery and rest.</p>	
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 d-flex ftco-animate">
						<div class="blog-entry justify-content-end">
							<a href="blog-single.html" class="block-20" style="background-image: url('images/mod_grazing.jpeg');">
							</a>
							<div class="text p-4 float-right d-block">								
								<h3 class="heading mb-0"><a href="#">Mob Grazing</a></h3>
								<p>Requires significantly higher stock densities between 75-300+ AU per acre. Multiple moves per day are required to maintain ideal stock densities. Temporary fencing is often used to create small paddocks.</p>								
							</div>
						</div>
					</div>
				
					<div class="col-lg-4 d-flex ftco-animate">
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
		<!-- END DIFFERENT ROTATIONAL GRAZING METHODS -->
	<!--our suggestion-->
	<section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
				<div class="col-md-10 py-5 text-center heading-section ftco-animate">
					<!--<span class="subheading">Tips &amp; Techniques</span>-->
					<h2 class="mb-4" style=" color: #228B22; ">Our suggestion</h2>
					<div class="services-wrap">
						<ul style="list-style: circle outside;">
							<li style="text-align: justify;" class="services-list">
							According to sustainable grazing, we suggest that keeping your livestock in the first divided paddock in which the land is in the most optimal condition to start the rotation.
							</li>
							<li style="text-align: justify;" class="services-list">
							When the livestock consumed around 1/2 forage height, it is the time to move them to the next paddock that is in ideal condition.
							</li>
							<li style="text-align: justify;" class="services-list">
							It is the time you let the first paddock to regrowth and rest! It will involve in a new grazing sequence as long as it is again suitable with the optimal land condition.
							</li>
							<li style="text-align: justify;" class="services-list">
							Case by case, we suggest you apply this technique with a different time period that suits your situation best. From < 5-day short grazing to 15-40-day long grazing or even decided by your own observation to the forage land maturity and height.
							</li>
							<li style="text-align: justify;" class="services-list">
							For your information, this technique may require relatively greater labor efforts to arrange the stocking and more supports from the infrastructure side like fencing staff. However, it always allows higher stocking rates in general.
							</li>
						</ul>
					</div>
				</div>
			</div>
    	</div>
    </section>
	<!--End Patch-burn grazing-->


<!--view and download brochure-->
	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-10 py-5 text-center heading-section ftco-animate">
					<a href="download/rotational_grazing_brochure.pdf" class="btn btn-primary" style="margin: 10px;">View the Brochure</a>
					<a href="download/rotational_grazing_brochure.pdf" class="btn btn-primary" style="margin: 10px;" download>Downlaod the Brochure</a>
				</div>
			</div>
		</div>
	</section>
<!--end view and download brochure here-->
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