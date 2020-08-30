
<?php 
    /* Server side files */
	require_once "server_config.php";
	require_once "php/gnewsAPI.php";
	require_once "php/navigation.php";
	require_once "php/home_offerings.php";
	require_once "php/news_navigation.php";
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
		
		<!-- Added in teration 1 -->
		<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	</head>
	<body>
		
		<!-- Navigation Bar -->
		<?php echo htmlspecialchars_decode(generateNavTabs($con, 'index.php'));?>
		<!-- End Navigation Bar -->
		
		<!-- Header -->
		<div class="mb-5 hero-wrap js-fullheight" style="background-image: url('images/test-graze-3.jpeg');" data-stellar-background-ratio="0.5">
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
		<section class="ftco-section ftco-no-pt" style="padding-bottom: 1em;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10 justify-content-center text-center heading-section ftco-animate">
						<span class="subheading">Offerings</span>
						<h2 class="mb-4">We Protect by Providing</h2>
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
		<!-- End Section 1: We Protect by Providing -->
		
		<!-- Section 2: News -->
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center pb-3">
					<div class="col-md-7 heading-section text-center ftco-animate">
						<span class="subheading">Our news</span>
						<h2>News</h2>
					</div>
				</div>
				
				<!-- News Navigation (Select topic, select start date, select region) -->
				<div class="row">
					 <?php echo htmlspecialchars_decode(generateNewsNav($con));?>
				</div>
		
			    <hr> <!-- add horizonal line between the news and navigation -->
				
				<!-- All The news are displayed here -->
				<div id="update-news" class="row d-flex pre-scrollable">
					<?php echo htmlspecialchars_decode(newsGenerator($newsData, $totalNews));?>
				</div>
			</div>
		</section>
		<!-- End Section 2: News -->
		
		<!-- Section 3: Footer -->
		<footer class="ftco-footer ftco-bg-dark ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-7">
						<div class="ftco-footer-widget mb-4">
							<h2 class="logo"><a href="#">Why does <span>Grazing matter?</span></a></h2>
							<p class="text-justify">Australian livestock plays an important role in the Australian economy. Australia is known for its export of wool, lamb, beef, milk, etc. However, both dominate (sheep and cattle) and non-dominate (goats) livestock have been reducing yearly since the 1970s. This is caused due to ineffective grazing techniques, reduction of educated farmers, droughts, and other areas that should be paid attention. Grazing ruins our grassland. Unfortunately, it cannot be prevented but can be controlled.  Our objective is to educate farmers and bring awareness to everyone who has an interest in this area.</p>
						</div>
					</div>
			  
					<div class="col-md-5">
						<div class="ftco-footer-widget mb-4 ml-md-5">
							<h2 class="ftco-heading-2">Areas of interest</h2>
							<ul class="list-unstyled">
								<li><a href="news.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Various news related to drought, fire, grazing, and livestock.</a></li>
								<li><a href="wip.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Statistics that show that livestock is affected.</a></li>
								<li><a href="techniques.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Various grazing techniques that should be practiced by the farmers.</a></li>
								<li><a href="wip.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Drought tracking to predict upcoming drought seasons to preserve soil and grasslands.</a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12 text-center">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<p>Copyright &copy;<script>document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.</a> 
						| Free icons are taken from the <a href="fonts/flaticon/license/license.html">Flaticon </a>
						| Free image is take from the <a href="https://unsplash.com">Unsplash</a></p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
				</div>
			</div>
		</footer>
		<!-- End Section 3: Footer -->
  
		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
		
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
    
	</body>
</html>

<?php $con -> close(); ?>