
<?php 
    /* Server side files */
	require_once "server_config.php";
	//require_once "php/gnewsAPI.php";
	require_once "php/navigation.php";
	require_once "php/home_offerings.php";
	//require_once "php/news_navigation.php";
	require_once "php/generate-feedback-tab.php"; // Accesses the file that generates the feedback tab
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Amazing Grazing - Protecting Australian Grasslands</title>
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
		
		<!-- Added in iteration 1 -->
		<link rel="stylesheet" href="css/bootstrap-datepicker.css">
		
		<!-- Added in iteration 2 -->
		<link rel="stylesheet" href="css/amazing-grazing/custom.css">
		
		<!-- Added in iteration 3 -->
		<link rel="stylesheet" href="css/amazing-grazing/feedback.css">
	</head>
	<body>		
		<!-- Navigation Bar -->
		<?php echo htmlspecialchars_decode(generateNavTabs($con, 'index.php', ''));?>
		<!-- End Navigation Bar -->
		
		<!-- Header -->
		<div class="hero-wrap js-fullheight" style="background-image: url('images/index-header.jpeg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div> <!-- add the darkness to the photo -->
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h2 class="subheading"><i>Welcome to Amazing Grazing</i></h2>
						<h1>Make a difference in protecting Australian grasslands</h1>
						<p class="mb-4">By effective grazing and preserving your livestock</p>
						<p><a href="#offerings" class="btn btn-primary mr-md-4 py-2 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End Header -->
		
		<!-- Feedback Section -->
		<?php echo htmlspecialchars_decode(feedbackRead(basename(__FILE__, '.php')));?>
		<!-- End Feedback Section -->

		
		
		<section id="offerings" class="ftco-section ftco-no-pt bg-light" style="padding-bottom: 4em;">
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
							<div class="carousel-species owl-carousel ftco-owl">
								<?php echo htmlspecialchars_decode(generateOfferings2($con));?>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-3 col-xxxl-3 d-flex align-items-stretch pt-3">
							<div class="card card-flip h-100">
								<div class="card-front text-white">
									<div class="services text-center">
										<div class="icon d-flex justify-content-center align-items-center">
											<span class="flaticon-news"></span>
										</div>
										
										<div class="text" style="padding-bottom:25px;">
											<h4><b>Latest News</b></h4>
											<h5>Today's news regarding grazing, livestock, drought & wildfires</h5>
										</div>
										
										<div class="card-custom d-flex align-items-center justify-content-center">
											TAP TO VIEW
										</div>
									</div>
								</div>
								
								<div class="card-back bg-white">
									<div class="card-body">
										<h4 class="card-title"><b>Latest News</b></h4>
										<h5 class="card-text">Filter news by topic and country. Other countries might provide some information that cannot be found in Australia.</h5>
										
										<button onclick="location.href='news.php'" type="button" class="btn btn-topic text-center btn-amazing-techniques" style="padding-left: 30px; padding-right: 30px;">Continue</button>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-3 col-xxxl-3 d-flex align-items-stretch pt-3">
							<div class="card card-flip h-100">
								<div class="card-front text-white">
									<div class="services text-center">
										<div class="icon d-flex justify-content-center align-items-center">
											<span class="flaticon-horse-grazing-black-silhouette"></span>
										</div>
										
										<div class="text" style="padding-bottom:25px;">
											<h4><b>Grazing Techniques</b></h4>
											<h5>grassland's nature can be preserved through regenerative grazing</h5>
										</div>
										
										<div class="card-custom d-flex align-items-center justify-content-center">
											TAP TO VIEW
										</div>
									</div>
								</div>
								
								<div class="card-back bg-white">
									<div class="card-body">
										<h4 class="card-title"><b>Grazing Techniques</b></h4>
										<h5 class="card-text">Learn and select the most suitable grazing techniques to protect Australian grassland, livestock, and our future.</h5>
										
										<button onclick="location.href='techniques.php'" type="button" class="btn btn-topic text-center btn-amazing-techniques" style="padding-left: 30px; padding-right: 30px;">Continue</button>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-3 col-xxxl-3 d-flex align-items-stretch pt-3">
							<div class="card card-flip">
								<div class="card-front text-white">
									<div class="services text-center">
										<div class="icon d-flex justify-content-center align-items-center">
											<span class="flaticon-chicken"></span>
										</div>
										
										<div class="text" style="padding-bottom:25px;">
											<h4><b>Statistics</b></h4>
											<h5>Representation of the livestock numbers and employment rate in Australia</h5>
										</div>
										
										<div class="card-custom d-flex align-items-center justify-content-center">
											TAP TO VIEW
										</div>
									</div>
								</div>
								
								<div class="card-back bg-white">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<h4 class="card-title"><b>Livestock</b></h4>
												<h5 class="card-text">Drastically reduced livestock numbers affect grasslands and economy.</h5>
										
												<button onclick="location.href='techniques.php'" type="button" class="btn btn-topic text-center btn-amazing-techniques" style="padding-left: 30px; padding-right: 30px;">Continue</button>
											</div>
											
											<div class="col-md-6">
												<h4 class="card-title"><b>Employment</b></h4>
												<h5 class="card-text">Australia needs more farmers to make a difference in protecting grassland.</h5>
												<button onclick="location.href='techniques.php'" type="button" class="btn btn-topic text-center btn-amazing-techniques" style="padding-left: 30px; padding-right: 30px;">Continue</button>
											
											</div>
										</div>
										
										
										
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-3 col-xxxl-3 d-flex align-items-stretch pt-3">
							<div class="card card-flip h-100">
								<div class="card-front text-white">
									<div class="services text-center">
										<div class="icon d-flex justify-content-center align-items-center">
											<span class="flaticon-horse-grazing-black-silhouette"></span>
										</div>
										
										<div class="text" style="padding-bottom:25px;">
											<h4><b>Grazing Techniques</b></h4>
											<h5>Grassland's nature can be preserved through regenerative grazing</h5>
										</div>
										
										<div class="card-custom d-flex align-items-center justify-content-center">
											TAP TO VIEW
										</div>
									</div>
								</div>
								
								<div class="card-back bg-white">
									<div class="card-body">
										<h4 class="card-title"><b>Grazing Techniques</b></h4>
										<h5 class="card-text">Inapropriate grazing techniques are stated and appropriate techniques are highlighted. Preserve nature and inrease livestock numbers through effective grazing.</h5>
										
										<a href="news.php" class="btn btn-custom btn-outline-secondary">Continue</a>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
		
		<!-- Section 1: SERVICES -->
		<section id="offerings" class="ftco-section ftco-no-pt" style="padding-bottom: 4em;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10 justify-content-center text-center heading-section ftco-animate">
						<h2>SERVICES</h2>
						<span class="mb-4 subheading">Thoroughly researched and narrowed down solutions are provided</span>
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-12 services-wrap px-4">
						<div class="row pt-md-3">
						    <?php echo htmlspecialchars_decode(generateOfferings($con));?>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- End Section 1: SERVICES -->
		
		<!-- Section 2: News -->
		<!--<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center pb-3">
					<div class="col-md-7 heading-section text-center ftco-animate">
					    <h2>NEWS</h2>
						<span class="subheading">Your personalised latest news</span>
					</div>
				</div>
				
				
				<?php //echo htmlspecialchars_decode(generateNewsNav($con, $startDate));?>
				
		
			    <hr> 
				
				
				<div id="update-news" class="row pre-scrollable">
					<?php //echo htmlspecialchars_decode(newsGenerator($newsData, $totalNews));?>
				</div>
			</div>
		</section>-->
		<!-- End Section 2: News -->
		
		<!-- Section 3: Footer -->
		<footer class="ftco-footer ftco-bg-dark ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-5">
						<div class="ftco-footer-widget mb-4">
							<h2 class="logo"><a href="#">Why does <span>Grazing matter?</span></a></h2>
							<p class="text-justify">Livestock is playing an important role in the Australian economy.
							                        However, its numbers have been reducing yearly since the 1970s.
													The cause of it are ineffective grazing techniques, reduction of educated farmers, and droughts.
													It cannot be prevented but must be controlled.
													Objective is to educate farmers and bring awareness to everyone who has an interest in our future.</p>
						</div>
					</div>
			  
					<div class="col-md-7">
						<div class="ftco-footer-widget mb-4 ml-md-5">
							<h2 class="ftco-heading-2">Areas of interest</h2>
							<ul class="list-unstyled">
								<li><a href="news.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Stay up-to-date with recent news regarding grazing, wildfires, livestock, and drought.</a></li>
								<li><a href="techniques.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Various grazing techniques that should be practiced by the farmers.</a></li>
								<li><a href="livestock-statistics.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Livestock numbers are reducing and require attention.</a></li>
								<li><a href="employment-statistics.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Employment rate are reducing and require attention.</a></li>
								<li><a href="invasive-species.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Invasive species overgraze the land and compete with livestock.</a></li>
								<li><a href="drought.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Drought.</a></li>
								<!--<li><a href="wip.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Drought tracking to predict upcoming drought seasons to preserve soil and grasslands.</a></li>-->
							</ul>
						</div>
					</div>
				</div>
				
				<!-- License -->
				<div class="row">
					<div class="col-md-12 text-center">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<p>Copyright &copy;<script>document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.</a> 
						| Free icons are taken from the <a href="fonts/flaticon/license/license.html">Flaticon </a>
						| Free images are taken from the <a href="https://unsplash.com">Unsplash</a>, <a href="https://stockfreeimages.com">StockFreeImages</a>, <a href="https://pixabay.com">Pixabay</a></p>
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
	  
		<!-- Added in Iteration 1 -->
		<script src="js/amazing-grazing/news-picker-detection.js"></script>
		<script src="js/amazing-grazing/news-picker.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		
		<!-- Added in Iteration 2 -->
		<script src="js/amazing-grazing/main.js"></script> <!-- Floating back to top button, scroll to anchor -->
		
		<!-- Added in Iteration 3 -->
		<script src="js/amazing-grazing/feedback.js"></script> <!-- used for feedback section -->
		<script src='https://www.google.com/recaptcha/api.js'></script> <!-- used for feedback section -->
		<script type='text/javascript'> <!-- Changes the icon for the news filter in mobile version -->					
			/*$("#show-filter").click(function() { // renames the filter button upon click
				var max_btn = '<i class="fa fa-plus" aria-hidden="true"></i> Open filter';
				var min_btn = '<i class="fa fa-minus" aria-hidden="true"></i> Close filter';
				
				var curr_text = document.getElementById("show-filter").innerHTML;
				
				if (curr_text == max_btn) {
					document.getElementById("show-filter").innerHTML  = min_btn;
				} else {
					document.getElementById("show-filter").innerHTML  = max_btn;
				}
			});*/
		</script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				
							
				$('.carousel-species').owlCarousel({
							center: true,
							loop: true,
							items:1,
							margin: 30,
							stagePadding: 0,
							mouseDrag: false,
							nav: true,
							//autoplay: true,
							//autoplayHoverPause: true,
							//autoplayTimeout: 7000,
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
				
			});
		</script>
	</body>
</html>

<?php $con -> close(); ?>