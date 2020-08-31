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
							<a href="download/rotational_grazing_brochure.pdf" class="btn btn-amazing-techniques">View the Brochure</a>
							<a href="download/rotational_grazing_brochure.pdf" class="btn btn-amazing-techniques" download>Downlaod the Brochure</a>
						</div>
					</div>
					
					<div class="col-sm-12 col-md-6 col-lg-4 py-5 text-center">
						<img src="images/rotational-grazing.gif" alt="Rotational Grazing" width="300" height="300">
					</div>
				</div>
			</div>
		</section>
		<!-- End Section 2: Rotational Grazing -->

		<!--Section 3: Why Should I use it?-->
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 py-5">
						<div class="heading-section ftco-animate">
							<h2 class="mb-4" style="text-align:left;color: #228B22;">WHY SHOULD I USE IT?</h2>
							<p style="padding-bottom: 15px; text-align: justify;">Rotational grazing can express much higher stocking rates of paddock-by-paddock than regular pre-set stocking. It enhances the nutritious level of the grazing plants in the best growth stage of their lifecycle, therefore enabling multiple livestock to be able to continue their thriving. Using this technique, you can maintain your land forage as high productive pasture which extends the period of balanced growth. At the same time, compared to continuous grazing, you can decrease the methane emissions from livestock by up to 22% (per unit of cattle gain). In this case, cows will have more energy to produce milk.</p>
						</div>
					</div>
					<div class="col-lg-6 py-5 align-items-center">
						<img src="images/cow_life.png" alt="Seasonal grazing" class="img-fluid rounded" style="padding-top: 50px;">
					</div>
				</div>
			</div>
		</section>
		<!--End Section 3: Why Should I use it?-->
		
		<!-- Section 4: Different Rotational Grazing Methods --> 
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<!-- Title -->
				<div class="row justify-content-center mb-5 pb-3">
					<div class="col-md-10 heading-section text-center ftco-animate">
						<h2 style=" color: #228B22;">DIFFERENT ROTATIONAL GRAZING METHODS</h2>
					</div>
				</div>
				
				<!-- Methods -->
				<div class="row d-flex">
					<!-- Method 1 : Slow Rotational Grazing -->
					<div class="col-lg-4 d-flex ftco-animate">
						<div class="blog-entry justify-content-end">
								<a href="blog-single.html" class="block-20" style="background-image: url('images/management_intensive_grazing.jpeg');"></a>
							<div class="text p-4 float-right d-block">								
								<h3 class="heading mb-0 text-center">Slow Rotational</h3>
								<p class="text-justify" style="padding-top:20px;">Slow rotational grazing is pastures of 2 or more with standard moves from every 2 weeks to every few months in order to enable land recovery and rest.</p>	
							</div>
						</div>
					</div>
					
					<!-- Method 2 : Mob Grazing -->
					<div class="col-lg-4 d-flex ftco-animate">
						<div class="blog-entry justify-content-end">
							<a href="blog-single.html" class="block-20" style="background-image: url('images/mod_grazing.jpeg');"></a>
							<div class="text p-4 float-right d-block">								
								<h3 class="heading mb-0 text-center">Mob</h3>
								<p class="text-justify" style="padding-top:20px;">Requires significantly higher stock densities between 75-300+ AU per acre. Multiple moves per day are required to maintain ideal stock densities. Temporary fencing is often used to create small paddocks.</p>								
							</div>
						</div>
					</div>
					
					<!-- Method 3 : Adaptive High-Stock Density Grazing -->
					<div class="col-lg-4 d-flex ftco-animate">
						<div class="blog-entry justify-content-end">
							<a href="blog-single.html" class="block-20" style="background-image: url('images/adaptive_high_stock_density_grazing.jpeg');"></a>
							<div class="text p-4 float-right d-block">														
								<h3 class="heading mb-0 text-center">Adaptive High-Stock Density</h3>
								<p class="text-justify" style="padding-top:20px;">Apply multiple of the previous methods of grazing to enable graziers to adjust herd density to achieve the nutritional needs of livestock and satisfy the conditions of the soil.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section 4: Different Rotational Grazing Methods --> 
		
		<!-- Section 5: Our Suggestion-->
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row justify-content-center mb-5">
					<div class="col-md-12 py-5 text-center heading-section ftco-animate">
						<h2 class="mb-4" style=" color: #228B22; ">OUR SUGGESTIONS</h2>
						
						<!-- Suggestions -->
						<div class="services-wrap">
							<!-- Suggestion 1 -->
							<li style="text-align: justify;" class="services-list">
								<div class="container">
									<div class="row">
										<div class="col-md-2 text-center" style="margin-top: auto; margin-bottom: auto">
											<i class="fa fa-check" aria-hidden="true"></i>
										</div>
										<div class="col-md-10 align-center" style="margin-top: auto; margin-bottom: auto">
											According to sustainable grazing, we suggest that keeping your livestock in the first divided paddock in which the land is in the most optimal condition to start the rotation.
										</div>
									</div>
								</div>
							
							</li>
							
							<!-- Suggestion 2 -->
							<li style="text-align: justify;" class="services-list">
								<div class="container">
									<div class="row">
										<div class="col-md-2 text-center" style="margin-top: auto; margin-bottom: auto">
											<i class="fa fa-check" aria-hidden="true"></i>
										</div>
										<div class="col-md-10 align-center" style="margin-top: auto; margin-bottom: auto">
											When the livestock consumed around 1/2 forage height, it is the time to move them to the next paddock that is in ideal condition.
										</div>
									</div>
								</div>
							</li>
							
							<!-- Suggestion 3 -->
							<li style="text-align: justify;" class="services-list">
								<div class="container">
									<div class="row">
										<div class="col-md-2 text-center" style="margin-top: auto; margin-bottom: auto">
											<i class="fa fa-check" aria-hidden="true"></i>
										</div>
										<div class="col-md-10 align-center" style="margin-top: auto; margin-bottom: auto">
											It is the time you let the first paddock to regrowth and rest! It will involve in a new grazing sequence as long as it is again suitable with the optimal land condition.
										</div>
									</div>
								</div>
							</li>
							
							<!-- Suggestion 4 -->
							<li style="text-align: justify;" class="services-list">
								<div class="container">
									<div class="row">
										<div class="col-md-2 text-center" style="margin-top: auto; margin-bottom: auto">
											<i class="fa fa-check" aria-hidden="true"></i>
										</div>
										<div class="col-md-10 align-center" style="margin-top: auto; margin-bottom: auto">
											Case by case, we suggest you to apply this technique with a different time period that suits your situation best. The minimum grazing period is at least 5-day short grazing to 15-40-day long grazing, but the decision needs to be done based on own observation to the forage land maturity and height.
										</div>
									</div>
								</div>
							</li>
							
							<!-- Suggestion 5 -->
							<li style="text-align: justify;" class="services-list">
								<div class="container">
									<div class="row">
										<div class="col-md-2 text-center" style="margin-top: auto; margin-bottom: auto">
											<i class="fa fa-check" aria-hidden="true"></i>
										</div>
										<div class="col-md-10 align-center" style="margin-top: auto; margin-bottom: auto">
											For your information, this technique may require relatively greater labor efforts to arrange the stocking and more supports from the infrastructure side like fencing staff. However, it always allows higher stocking rates in general.
										</div>
									</div>
								</div>
							</li>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section 5: Our Suggestion-->

		<!-- Section 6: Footer -->
		<footer class="ftco-footer ftco-bg-dark ftco-section">
			<div class="container">
				<div class="row mb-5">
				
					<div class="col-md-6">
						<div class="ftco-footer-widget mb-4">
							<h2 class="logo"><a href="#"><span>Educate</span> yourself <span>more</span></a></h2>
							<ul class="list-unstyled">
								<li><a href="news.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Did you know that we aim to provide the most recent information about grazing, livestock, wildfires, and drought possible? <u>Click to find out more.</u></a></li>
								<li><a href="wip.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Did you know that the livestock numbers in Australia have reduced by 80 million since 1970s? <u>Click to find out more.</u></a></li>
								<li><a href="wip.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Did you know that drought leads to wildfires and loss of wetland habitats? <u>Try out our drought prediction technique that might assist you.</u></a></li>
							</ul>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="ftco-footer-widget mb-4">
							<h2 class="logo"><a href="#">Why does <span>Grazing matter?</span></a></h2>
							<p class="text-justify">Australian livestock plays an important role in the Australian economy. Australia is known for its export of wool, lamb, beef, milk, etc. However, both dominate (sheep and cattle) and non-dominate (goats) livestock have been reducing yearly since the 1970s. This is caused due to ineffective grazing techniques, reduction of educated farmers, droughts, and other areas that should be paid attention. Grazing ruins our grassland. Unfortunately, it cannot be prevented but can be controlled.  Our objective is to educate farmers and bring awareness to everyone who has an interest in this area.</p>
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
		<!-- End Section 6: Footer -->
		
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
		<script src="js/main.js"></script>

	</body>
</html>

<?php $con -> close(); ?>