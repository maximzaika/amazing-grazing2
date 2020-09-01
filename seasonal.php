<?php 
    /* Server side files */
	require_once "server_config.php";
	require_once "php/navigation.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Amazing Grazing - Seasonal Grazing</title>
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
						<span><u><i>Seasonal grazing</i> <i class="ion-ios-arrow-forward"></u></i></a>
					</h5> 
					<hr>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb -->
		
		<!-- Section 1: Seasonal grazing-->
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<!-- Top part -->
				<div class="row mb-5">
					<div class="col-md-12 py-4 text-center heading-section ftco-animate justify-content-center">
						<h2 style="color: #228B22;">SEASONAL GRAZING</h2>
						<p style="text-align: justify;">Seasonal grazing is a great technique that only operates in a specific portion during certain seasons of the whole year. Seasonal grazing also can be combined using rotational and continuous grazing that takes place in that season. By applying this technique, it enables to shorten that time consumption spending on the farming infrastructure and livestock managing.
						</p>
						<p style="text-align: justify;">Different season conditions provide different use of land for certain species. The benefits and disadvantages of seasonal grazing on the grassland can be very different based on the season you selected. Seasonal grazing offers a great chance to adjust your grazing regime of the year. It can benefit the targeted flora species in the habitat for better effectivity in the long-term.
						</p>
						<a href="download/seasonal_grazing_brochure.pdf" class="btn btn-amazing-techniques">View the Brochure</a>
						<a href="download/seasonal_grazing_brochure.pdf" class="btn btn-amazing-techniques" download>Downlaod the Brochure</a>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<!-- Carousel -->
						<div class="carousel-seasonal owl-carousel ftco-owl">
							<!-- Item 1: Spring -->
							<div class="item">
								<div class="wrap">
									<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/spring.jpeg);">
									</div>
									<div class="text text-center px-4">
										<h3>Spring</h3>
										<p>Not the most appropriate time for effective grazing. It is better to keep relatively light grazing.</p>
										<!--<p style="text-align: justify;">
										It is not the most appropriate time for effective grazing that strong flowering field the layer of the flora can be disturbing regards to the quality of the grassland in general like plant species of butterfly–source. 
										Therefore, grazing heavily during spring may decrease the diversity of flora species then cause unwanted plant dominance by those robust and resistant flora species in general, and further break the balance of the grassland bio-ecosystem. 
										However, you still can apply seasonal grazing in spring, but keep in mind, it is better to keep relatively light grazing in regards to other seasons of the year.
										</p>-->
									</div>
								</div>
							</div>
							<!-- End Item 1: Spring -->
							
							<!-- Item 2: Summer -->
							<div class="item">
								<div class="wrap">
									<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/summer.jpeg);">
									</div>
									<div class="text text-center px-4">
										<h3>Summer</h3>
										<p>Not the best time. Light grazing is a more ideal option.</p>
										<!--<p style="text-align: justify;">
										We are sorry but it is still not the best time! 
										Light grazing is a more ideal option that intensive grazing in this season can largely destroy the plant saplings and seedlings. 
										In addition, it may decrease the grassland potential for sustainable development that decrease the diversity of flora and further imbalance the ecosystem.
										Again, you still can apply seasonal grazing in summer, but in a light way. 
										Just need to be aware of the decrease of balanced grassland species diversity and other habitat sustainability.
										</p>-->
									</div>
								</div>
							</div>
							<!-- End Item 2: Summer -->
							
							<!-- Item 3: Autumn -->
							<div class="item">
								<div class="wrap">
									<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/autumn.jpeg);">
									</div>
									<div class="text text-center px-4">
										<h3>Autumn</h3>
										<p>The most suitable time to apply heavy grazing combined with a rotational or continuous technique.</p>
										<!--<p style="text-align: justify;">
										Finally! The best time of the year has come. 
										If you have not approached heavy grazing in spring or summer, the autumn biomass will be its best condition that can maximise its potential for effective grazing. 
										The benefits of conduct heavy grazing in this season is quite obvious that autumn provides the most nutritious natural food for the livestock, 
										and it is also easy to maintain its balance of the ecosystem and minimise the disadvantages related to grazing. 
										It is the most suitable time to apply heavy grazing combined with a rotational or continuous technique for better results.
										
										</p>-->
									</div>
								</div>
							</div>
							<!-- End Item 3: Autumn -->
							
							<!-- Item 4: Winter -->
							<div class="item">
								<div class="wrap">
									<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/winter.jpeg);">
									</div>
									<div class="text text-center px-4">
										<h3>Winter</h3>
										<p>It is a chance that you can adjust your whole year grazing regime.</p>
										<!--<p style="text-align: justify;">
										Winter is a chance that you can adjust your whole year grazing regime. 
										A heavy grain in this season is not appropriate that significant grassland disturbance can be found that it is better to let the grass seeds finding their suitable niches for germination in the coming seasons. 
										On the other hand, it provides an opportunity to decrease the bracken and grass litter that very limited impact will be shown on spring flora species.
										Also, livestock can consume optimal grass in winter to decrease the buying cost of hay by seeding grassland in warm weather like spring and summer to boost the growth of the land. 
										You can spread the seeds on top of the snow during the later stage of winter to allow it melts and keep moist into the land for better regrowth and rest.
										</p>-->
									</div>
								</div>
							</div>
							<!-- End Item 4: Winter -->
						</div>
						<!-- End Carousel -->
					</div> 
				</div>
			</div>
		</section>
	
		<!-- Section 2: Our Suggestion-->
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
											Set your grazing regime and goals. Be clear with your grazing and productivity expectation.
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
											Determine your concerns or problems that need to be solved regarding different seasons.
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
											Based on your understanding of these seasonal characteristics, plan your very own solution to overcome these challenges to maximize the grazing effectivity.
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
											Always keep track of your records including livestock, land condition, water consumptions, forages growth, and other infrastructure use based on 12-month consideration for next year’s plan.
										</div>
									</div>
								</div>
							</li>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section 2: Our Suggestion-->
	
		<!-- Section 5: Footer -->
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
		<!-- End Section 5: Footer -->
    
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