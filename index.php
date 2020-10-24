
<?php 
    session_start();
	if (empty($_SESSION['csrf_token'])) {
		$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
	}
	
	/* Server side files */
	require_once "server_config.php";
	require_once "php/navigation.php";
	require_once "php/home_offerings.php";
	require_once "php/generate-feedback-tab.php"; // Accesses the file that generates the feedback tab
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Amazing Grazing - Protecting Australian Grasslands</title>
		<meta charset="utf-8">
		<meta name="csrf-token" content="<?php $_SESSION['csrf_token']; ?>">
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
		
		<!-- Added in iteration 2 -->
		<link rel="stylesheet" href="css/amazing-grazing/custom.css">
		
		<!-- Added in iteration 3 -->
		<link rel="stylesheet" href="css/amazing-grazing/feedback.css">
	</head>
	<body>		
		<!-- Navigation Bar -->
		<?php echo htmlspecialchars_decode(generateNavTabs($con, 'index.php', ''));?>
		<!-- End Navigation Bar -->
		
		<!-- Section 1: Page header - Home -->
		<div class="hero-wrap js-fullheight" style="background-image: url('images/index-header.jpeg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div> <!-- add the darkness to the photo -->
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h2 class="subheading"><i>Welcome to Amazing Grazing</i></h2>
						<h1>Farmers make a difference in protecting Australian grasslands</h1>
						<p class="mb-4">By effective grazing, keeping track of drought, and removing invasive species</p>
						<p><a href="#offerings" class="btn btn-primary mr-md-4 py-2 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End Section 1: Page header - Home -->
		
		<!-- Feedback Section -->
		<?php echo htmlspecialchars_decode(feedbackRead(basename(__FILE__, '.php')));?>
		<!-- End Feedback Section -->

		
		<!-- Section 2: SERVICES -->
		<section id="offerings" class="ftco-section bg-light" style="padding-bottom: 4em; padding-top: 4em;"">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10 justify-content-center text-center heading-section ftco-animate">
						<h2>SERVICES</h2>
						<span class="mb-4 subheading">Thoroughly researched and narrowed down solutions are provided</span>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="carousel-services owl-carousel ftco-owl">
								<?php echo htmlspecialchars_decode(generateOfferings2($con));?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section 2: SERVICES -->

		<!-- Section 3: Footer -->
		<footer class="ftco-footer ftco-bg-dark ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<div class="ftco-footer-widget mb-4">
							<h2 class="logo"><a href="#">Why does <span>Grazing matter?</span></a></h2>
							<h5 class="text-justify" style="color: rgba(255, 255, 255, 0.7);">Livestock is playing an important role in the Australian economy.
							                        However, its numbers have been reducing yearly since the 1970s.
													The cause of it is ineffective grazing techniques, reduction of high qualification farmers, droughts, and invasive species.
													These impacts cannot be prevented but can be controlled.
													The objective is to educate farmers and bring awareness to everyone who has an interest in our future.</h5>
						</div>
					</div>
			  
					<div class="col-md-6">
						<div class="ftco-footer-widget mb-4 ml-md-5">
							<h2 class="logo"><a href="#">Our <span>services</span></a></h2>
							<ul class="list-unstyled">
								<li><a href="news.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Stay up-to-date with recent news.</a></li>
								<li><a href="techniques.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Various grazing techniques that should be practiced by the farmers.</a></li>
								<li><a href="livestock-statistics.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Livestock numbers are reducing and require attention.</a></li>
								<li><a href="employment-statistics.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Employment rate is reducing and requires attention.</a></li>
								<li><a href="drought.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Learn drought locations, impacts, and solutions.</a></li>
								<li><a href="invasive-species.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Invasive species overgraze the land and compete with livestock.</a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- License -->
				<div class="row">
					<div class="col-md-12 text-center">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<p>Copyright &copy;<script>document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a style="color: #4e9525;"  href="https://colorlib.com" target="_blank">Colorlib.</a>
						| Free icons retrieved from the <a style="color: #4e9525;"  href="fonts/flaticon/license/license.html">Flaticon.</a>
						| Free images retrieved from the <a style="color: #4e9525;" href="https://unsplash.com">Unsplash</a>, <a style="color: #4e9525;" href="https://stockfreeimages.com">StockFreeImages</a>, & <a style="color: #4e9525;"  href="https://pixabay.com">Pixabay.</a></p> 
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
				</div>
			</div>
		</footer>
		<!-- End Section 3: Footer -->
  
		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

		<!-- Added in iteration 2 -->
		<div class="scrollToTop js-top"><a href="" class="js-gotop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></div> <!-- jQuery to scroll up -->
		
		<!-- Original Scripts -->
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
		<script src="js/main.js"></script>
		
		
		
		<!-- Added in Iteration 2 -->
		<script src="js/amazing-grazing/main.js"></script> <!-- Floating back to top button, scroll to anchor -->
		
		<!-- Added in Iteration 3 -->
		<script src="js/amazing-grazing/feedback.js"></script> <!-- used for feedback section -->
		<script src='https://www.google.com/recaptcha/api.js'></script> <!-- used for feedback section -->
		<script type="text/javascript">
			$(document).ready(function(){		
				//----- Start: Initiate carousel -----
				$('.carousel-services').owlCarousel({
					center: true,
					loop: true,
					items:1,
					margin: 30,
					stagePadding: 0,
					mouseDrag: false,
					nav: true,
					autoplay: true,
					autoplayHoverPause: true,
					autoplayTimeout: 5000,
					navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
					responsive:{
						0:{
							items: 1
						},
						600:{
							items: 2
						},
						1000:{
							items: 3
						},
						1600:{
							items: 4
						}
					}
				});
				//----- End: Initiate carousel -----
				
				//----- Start: Initiate resizing the service containers to make sure the size of these containers is the same -----
				var maxHeight = -1
				
				$('.p_').each(function() { // get the max height out of all plants containers
					maxHeight = maxHeight > $(this).height() ? maxHeight :     $(this).height();
				});
				
				//maxHeight = maxHeight+25; // increase height to provide enough space for the bottom button
				
				$('.p_').each(function() { // change the height of all plants containers to max
				   $(this).height(maxHeight);
				 });
				//----- End: Initiate resizing the service containers to make sure the size of these containers is the same -----
			});
				
		</script>
	</body>
</html>

<?php $con -> close(); ?>