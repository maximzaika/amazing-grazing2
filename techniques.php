
<?php 
    /* Server side files */
	require_once "server_config.php";
	require_once "php/navigation.php";
	require_once "php/retrieve_techniques.php";
	require_once "php/generate-feedback-tab.php"; // Accesses the file that generates the feedback tab
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Amazing Grazing - Grazing Techiques</title>
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
		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-animate sort-species">
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
							<h2 class="logo"><a href="#"><span>Educate</span> yourself <span>more</span></a></h2>
							<ul class="list-unstyled">
								<li><a href="news.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Stay up-to-date with recent news regarding grazing, wildfires, livestock, and drought. <u>Click to find out more.</u></a></li>
								<li><a href="livestock-statistics.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Livestock numbers are reducing and require attention. <u>Click to find out more.</u></a></li>
								<li><a href="employment-statistics.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Employment rate are reducing and require attention. <u>Click to find out more.</u></a></li>
							</ul>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="ftco-footer-widget mb-4">
							<h2 class="logo"><a href="#">Why does <span>Grazing matter?</span></a></h2>
							<p class="text-justify">Livestock is playing an important role in the Australian economy.
							                        However, its numbers have been reducing yearly since the 1970s.
													The cause of it are ineffective grazing techniques, reduction of educated farmers, and droughts.
													It cannot be prevented but must be controlled.
													Objective is to educate farmers and bring awareness to everyone who has an interest in our future.</p>
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
			$(document).ready(function(){
				$readMoreJS3.init({
					target: '.d2 a',
					numOfWords: 10,
					toggle: true,
					moreLink: ' <i>show more facts</i>',
					lessLink: ' <i>show less facts</i>'
				});
							
				$('.carousel-farmer-actions').owlCarousel({
					center: true,
					loop: false,
					rewind: true,
					startPosition: 1,
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
							items: 1
						},
						600:{
							items: 2
						},
						1000:{
							items: 3
						},
						1440:{
							items: 3
						},
						1600:{
							items: 3
						}
					}
				});
				
				//----- Start resize the gallery container on initial load -----//
				var maxHeight = -1
	
				$('.t_').each(function() { // get the max height out of all plants containers
					maxHeight = maxHeight > $(this).height() ? maxHeight :     $(this).height();
				});
				
				maxHeight = maxHeight+70; // increase height to provide enough space for the bottom button
				
				$('.t_').each(function() { // change the height of all plants containers to max
				   $(this).height(maxHeight);
				 });
				//----- End resize the gallery container on initial load -----//
			});
		</script>
	</body>
</html>

<?php $con -> close(); ?>