<!--
 * Last Edited: 25/10/2020
 * 
 * Developed by: MC CM Team (Monash Students)
 * Project Name: Amazing Grazing
 * Project Description: Protecting Australia Grasslands by 
 *					    encouraging farmer education
 *
 * Usage:
 *  - loads the techniques page by typing techniques.php in the browser
-->

<?php 
    /* Generate Unique Session & Unique Token */
	session_start();
	if (empty($_SESSION['csrf_token'])) {
		$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
	}
	
	/* Server side files */
	require_once "server_config.php"; // Accesses the database
	require_once "php/navigation.php"; // Generates the Navigation attached to the top of the website
	require_once "php/retrieve_techniques.php"; // Generates the Techniques received from the database
	require_once "php/generate-feedback-tab.php"; // Accesses the file that generates the feedback tab
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Amazing Grazing - Grazing Techiques</title>
		<meta charset="utf-8">
		<meta name="csrf-token" content="<?php $_SESSION['csrf_token']; echo $_SESSION['csrf_token']; ?>">
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
		<?php echo htmlspecialchars_decode(generateNavTabs($con, 'techniques.php', ''));?>
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
		
		<!-- Feedback Section -->
		<?php echo htmlspecialchars_decode(feedbackRead(basename(__FILE__, '.php')));?>
		<!-- End Feedback Section -->
		
		<!-- Breadcrumbs -->
		<div class="container-fluid  bg-light">
			<div class="container" style="padding-top: 15px;">
				<div class="row">
					<div class="col-md-12 pull-left">
						<h5 class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span><span><u><i>Techniques </i><i class="ion-ios-arrow-forward"></i></u></span></h5>
						<hr>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb -->
		
		<!-- Section 2: Grazing Technqiues-->
		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-animate bg-light sort-species">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="carousel-farmer-actions owl-carousel ftco-owl">
							<?php echo htmlspecialchars_decode(retrieveTechniques($con));?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section 2: Grazing Techniques-->
		
		<!-- Start: Pop up seasonal grazing modal when user clicks dedicated button -->
		<div class="modal fade" id="seasonal-grazing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 id="modal-title-id" class="modal-title font-weight-bold" id="exampleModalLongTitle">Seasonal Grazing</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body" style="z-index: 1000;">
				<?php echo retrieveTechniquePage($con, "SEASONAL GRAZING", "Carousel");?>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		<!-- End: Pop up seasonal grazing modal when user clicks dedicated button -->
		
		<!-- Start: Pop up rotational grazing modal when user clicks dedicated button -->
		<div class="modal fade" id="rotational-grazing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 id="modal-title-id" class="modal-title font-weight-bold" id="exampleModalLongTitle">Rotational Grazing</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body" style="z-index: 1000;">
				<?php echo retrieveTechniquePage($con, "ROTATIONAL GRAZING", "Methods");?>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		<!-- End: Pop up rotational grazing modal when user clicks dedicated button -->
		
		<!-- Start: Pop up patch-burn grazing modal when user clicks dedicated button -->
		<div class="modal fade" id="patch-burn-grazing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 id="modal-title-id" class="modal-title font-weight-bold" id="exampleModalLongTitle">Patch-burn Grazing</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body" style="z-index: 1000;">
				<?php echo retrieveTechniquePage($con, "PATCH-BURN GRAZING", "No");?>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		<!-- End: Pop up patch-burn grazing modal when user clicks dedicated button -->
		
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
		<script src="https://www.google.com/recaptcha/api.js"></script> <!-- used for feedback section -->
		
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/venobox.min.js"></script>
		<script src="js/aos.js"></script>
		<script src="js/readMoreJS3.min.js"></script>
		<script type="text/javascript">
			/* Executes when page is ready ONLY */
			$(document).ready(function(){
				/* 
					Description: calls readMoreJS3.min.js file to add hide/show button to long/short text
					Pre-condition:
					  - readMoreJS3.min.js needs to be called (it is custom modified to work with our website
					    any other readMoreJS.min.js version is not going to function)
					  - every text that needs to be hidden/shown must contain 'd2' id and '<a>' inside this id
					Post-condition
					  - adds hide/show button to long/short text
					Return:
					  - none, but renames the button
				*/
				$readMoreJS3.init({
					target: '.d2 a',
					numOfWords: 10,
					toggle: true,
					moreLink: ' <i>show more facts</i>',
					lessLink: ' <i>show less facts</i>'
				});
					
				/* 
					Description: executes the carousel on the main page for all the techniques
					Pre-condition:
					  - carousel must have class 'carousel-farmer-actions'
					  - js/owl.carousel.min.js file MUST BE executed
					Post-condition
					  - send the attributes to the owl.carousel.min.js
					Return:
					  - none, but carousel needs to be functional
				*/
				$('.carousel-farmer-actions').owlCarousel({
					center: false,
					loop: false,
					rewind: true,
					items:4,
					margin: 30,
					stagePadding: 0,
					mouseDrag: false,
					nav: true,
					autoplay: true,
					autoplayHoverPause: true,
					autoplayTimeout: 7000,
					navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
					responsive:{
						0:{
							items: 1,
							startPosition: 1
						},
						600:{
							items: 1,
							startPosition: 1
						},
						768:{
							items: 2,
							startPosition: 0
						},
						1000:{
							items: 3,
							startPosition: 0
						},
						1440:{
							items: 3,
							startPosition: 0
						},
						1600:{
							items: 3,
							startPosition: 0
						}
					}
				});
				
				/* 
					Description: executes the carousel for the seasonal grazing technique page ONLY
					Pre-condition:
					  - carousel must have class 'seasonal-grazing'
					  - js/owl.carousel.min.js file MUST BE executed
					Post-condition
					  - send the attributes to the owl.carousel.min.js
					Return:
					  - none, but carousel needs to be functional
				*/
				$(".seasonal-grazing").click(function() {
					setTimeout(function(){
						$('.carousel-seasons').owlCarousel({
							center: true,
							loop: true,
							startPosition: 0,
							items:3,
							margin: 30,
							stagePadding: 0,
							mouseDrag: false,
							nav: true,
							autoplay: true,
							autoplayHoverPause: true,
							autoplayTimeout: 7000,
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
								}
							}
						});
					}, 250);
				});
				
				/* 
					Description: scan through each TECHNIQUE card and resize based on the maximum height
					Pre-condition:
					  - origin max height must be -1 (anything below 0)
					  - card must have 't_' class
					  - page must be refreshed each time if the screen size changes
					Post-condition
					  - scan throught 't_' class
					  - find max height
					  - resize all the max height
					Return:
					  - none, visually change the height of each card
				*/
				var maxHeight = -1
	
				$('.t_').each(function() { // get the max height out of all plants containers
					maxHeight = maxHeight > $(this).height() ? maxHeight :     $(this).height();
				});
				
				maxHeight = maxHeight+70; // increase height to provide enough space for the bottom button
				
				$('.t_').each(function() { // change the height of all plants containers to max
				   $(this).height(maxHeight);
				 });
			});
		</script>
	</body>
</html>

<?php $con -> close(); ?>