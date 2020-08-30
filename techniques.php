
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
	
	<!-- Section 2: Continuous grazing-->
	<section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
		<!-- Breadcrumbs -->
		<div class="container" style="padding-top: 15px;">
			<div class="row">
				<div class="col-md-12 pull-left">
					<h5 class="breadcrumbs"><span class="mr-2"><a href="index.php" style="color: white;">Home <i class="ion-ios-arrow-forward"></i></a></span><span><u><i>Techniques </i><i class="ion-ios-arrow-forward"></i></u></span></h5>
					<hr>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb -->
    	
		<div class="container">
    		<div class="row">
    			<div class="col-lg-6" style="padding-top:25px;">
					<div class="heading-section ftco-animate">
						<h2 class="mb-4" style="text-align:left;color: white;">CONTINUOUS GRAZING</h2>
						<p style="color: white; text-align: justify;">
						Continuous grazing has been chosen by most farmers as a popular grazing technique according to its low effort on labour and simple approaches. Temporary fencing and subtracting animals were used to assist in common. On the other hand, continuous grazing is a very intensive technique related to low productivity and unsustainable development in the long-term. Therefore, we recommend the following techniques that are more efficient in protect the grassland!
						</p>
					</div>
    			</div>
				<div class="col-lg-6 py-5" style="padding-top: 0rem !important;">
					<img src="images/continuous_grazing.png" alt="Continuous grazing" class="img-fluid rounded" style="padding-top: 50px;">
				</div>
		    </div>
    	</div>
	</section>
	<!-- End Section 2: Continuous grazing-->
	
	<!-- Section 3: Rotational grazing-->
	<section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-4 py-5 text-center">
					<img src="images/rotational-grazing.gif" alt="Rotational Grazing" width="300" height="300">
    			</div>
    			
				<div class="col-sm-12 col-md-6 col-lg-8 py-5" style="padding-top:25px;">
					<div class="heading-section ftco-animate">
						<h2 class="mb-4" style="text-align:right;color: #228B22;">ROTATIONAL GRAZING</h2>
						<p style="padding-bottom: 15px; text-align: justify;">Rotational grazing technique and its terminology might be hard to start without comprehensive understanding. Therefore, read through these explanations of standard terminologies of rotational grazing. In order to express the frequency of moves and herd density, guidelines are regarded as grazing systems like how many days per graze and cow numbers in total per acre.
						</p>
						<p><a href="rotational.php" class="btn btn-amazing-techniques">Read more</a></p>
					</div>
    			</div>
		    </div>
    	</div>
	</section>
	<!-- End Section 3: Rotational grazing-->
	
	<!-- Section 4: Seasonal grazing-->
	<section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-8 py-5">
					<div class="heading-section ftco-animate">
						<h2 class="mb-4" style="text-align:left;color: white;">SEASONAL GRAZING</h2>
						<p style="color: white; text-align: justify;">Seasonal grazing is a great technique that only operating in a specific portion during certain seasons of the whole year. 
						Seasonal grazing also can be combined using rotational and continuous grazing that takes place in that season. 
						By applying this technique, it enables to shorten that time consumption spending on the farming infrastructure and livestock managing.
						</p>
						<p><a href="seasonal.php" class="btn btn-amazing-grazing">Read more</a></p>
					</div>
    			</div>
				<div class="col-lg-4 py-5 align-items-center">
					<img src="images/seasonal_grazing.png" alt="Seasonal grazing" class="img-fluid rounded" style="padding-top: 50px;">
				</div>
		    </div>
    	</div>
	</section>
	<!-- End Section 4: Seasonal grazing -->

	<!-- Section 5: Patch-burn grazing -->
	<section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row">
				<div class="col-lg-6 py-5">
					<img src="images/patch-burn.png" alt="Patch-burn Grazing" class="img-fluid rounded" style="padding-top: 100px;">
    			</div>
    			<div class="col-lg-6 py-5">
					<div class="heading-section ftco-animate">
						<h2 class="mb-4" style="text-align:right;color: #228B22;">PATCH-BURN GRAZING</h2>
						<p style="padding-bottom: 15px; text-align: justify;">Patch-burn is a good technique that you can apply in your sustainable grazing. It helps to manage the grassland through burning certain areas of the paddock in a certain year to attract the grazing livestock. Thus, livestock will focus on grazing in the specific burned patch across the whole paddock. The rest of the portion of the grassland will be shifted for the new burning. In this way, always using the most recent burned section enable the regrowth and recovery of those already burned and used patches.
						</p>
						<p><a href="rotational.php" class="btn btn-amazing-techniques">Read more</a></p>
					</div>
    			</div>
		    </div>
    	</div>
	</section>
	<!-- End Section 5: Patch-burn grazing -->

    <!-- Section 3: Footer -->
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
	<!-- End Section 3: Footer -->
    
  

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