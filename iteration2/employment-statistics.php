
<?php 
    /* Server side files */
	require_once "server_config.php";
	require_once "php/navigation.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Amazing Grazing - Livestock Statistics</title>
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
		
		<!-- Added in iteration 2 -->
		<link rel="stylesheet" href="css/amazing-grazing/custom.css">
	</head>
	<body>
		<!-- Iteration 2 - Floating share button -->
		<script src="https://apps.elfsight.com/p/platform.js" defer></script>
		<div class="elfsight-app-031a3983-a9c9-406d-80d1-99d2ac0275a7"></div>
		<!-- End Iteration 2 - Floating share button -->
		
		<!-- Navigation Bar -->
		<?php echo htmlspecialchars_decode(generateNavTabs($con, 'employment-statistics.php'));?>
		<!-- End Navigation Bar -->
		
		<!-- Section 1: Page header - Employment Statistics -->
		<section class="hero-wrap hero-wrap-2" style="background-image: url('images/employment-statistics.jpg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div> <!-- add the darkness to the photo -->
				<div class="container">
					<div class="row no-gutters slider-text align-items-end justify-content-center">
						<div class="col-md-9 ftco-animate pb-5 text-center">
							<h1 class="mb-3 bread">Employment Statistics</h1>
						</div>
					</div>
				</div>
		</section>
		<!-- End Section 1: Page header - Employment Statistics -->
							
		<!-- Breadcrumbs -->
		<div class="container-fluid bg-light ftco-animate">
			<div class="container" style="padding-top: 15px;">
				<div class="row">
					<div class="col-md-12 pull-left">
						<h5 class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span><span><u><i>Employment Statistics </i><i class="ion-ios-arrow-forward"></i></u></span></h5>
						<hr>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb -->
		
		<!-- Section 2: Australia Needs Farmers -->
		<section class="ftco-section ftco-no-pt ftco-no-pb bg-light ftco-animate" style="z-index:2;">
			<div class="container pt-md-4">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center heading-section">
						<h2 class="mb-4">AUSTRALIA NEEDS FARMERS</h2>
						<span class="subheading">Farmers can make a difference in protecting grasslands</span>
					</div>
				</div>
			</div>
			
			<div class="container py-5 pt-md-5">		
				<div class="container" style="padding-left: 0px; padding-right: 0px; padding-bottom:15px;">
					<div class="row">
						<div class="col-md-12">						
							<h5><i class="fa fa-hand-o-up" aria-hidden="true"></i> Select employment type</h5>
							<div class="dropdown" >
							  <button id="drop-employment" class="w-100 btn btn-topic btn-amazing-grazing dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dairy cattle employment rate</button>
							  <div class="w-100 text-center dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a id="e-beef" class="dropdown-item select-employment" style="cursor: pointer;">Beef cattle employment rate</a>
								<a id="e-dairy" class="dropdown-item select-employment" style="cursor: pointer;">Dairy cattle employment rate</a>
								<a id="e-sheep" class="dropdown-item select-employment" style="cursor: pointer;">Sheep employment rate</a>
							  </div>
							</div>
						</div>
						
						<div class="col-md-12">
							<div id="tableau-chart" class="container" style="padding-left: 0px; padding-right: 0px; padding-top: 20px;"> 
								<!-- Graph will be inserted here -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section 2: Page header - Livestock is reducing -->
		
		<!-- Section 3: FARMERS MAKE A DIFFERENCE -->
		<section style="padding: 1em 0;" class="ftco-section ftco-no-pt ftco-no-pb bg-light">
			<div class="container">
				<div class="row justify-content-center pt-md-4">
					<div class="col-md-12 text-center heading-section ftco-animate">
						<h2 class="mb-4">FARMERS MAKE A DIFFERENCE</h2>
						<span class="subheading">Poor education and lack of young farmers is something to worry about!</span>
					</div>
				</div>
			
			
			<!-- Card section -->
				<div class="row pt-md-5">
					<div class="col-lg-12 services-wrap">
						<div id="cards-data" class="row pt-md-3"> 
							<!-- Cards will be inserted here -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Card section -->
		</section>
		<!-- End Section 3: Facts About Future -->
		
		<!-- Section 4: AGRICULTURAL COMMUNITIES -->
		<section style="padding: 4em 0;" class="ftco-section ftco-no-pt bg-light">
			<div class="container">
				<div class="row justify-content-center pt-md-4">
					<div class="col-md-12 text-center heading-section ftco-animate">
						<h2 class="mb-4">AGRICULTURAL COMMUNITIES</h2>
						<span class="subheading">Keep in touch with your fellow farmers to stay up-to-date and educated</span>
						<div class="services-wrap py-5 pt-md-5">
							<li class="service-techniques services-color text-justify">
								<div class="container">
									<div class="row">
										<div class="col-md-2 text-center" style="margin: auto;">
											<i class="fa fa-check fa-check-techniques" aria-hidden="true"></i>
										</div>
										<div class="col-md-10" style="margin: auto;">
											<h5><a href="https://www.globalfarmers.com/" type='button' style='color:#4e9525;cursor:pointer;'><u><b><i>Global Farmers</i></b></u></a> - join a local & global network of leaders in agriculture. Get exclusive market & industry updates. Grow your business and your knowledge.</h5>
										</div>
									</div>
								</div>
							</li>
							
							<li class="service-techniques services-color text-justify">
								<div class="container">
									<div class="row">
										<div class="col-md-2 text-center" style="margin: auto;">
											<i class="fa fa-check fa-check-techniques" aria-hidden="true"></i>
										</div>
										<div class="col-md-10" style="margin: auto;">
											<h5><a href="https://exchange.farmtable.com.au/home" type='button' style='color:#4e9525;cursor:pointer;'><u><b><i>Farmer Exchange</i></b></u></a> - an agricultural community where Aussie farmers can connect and share their knowledge online. Additionally, you can get professional's advice.</h5>
										</div>
									</div>
								</div>
							</li>
							
							<li class="service-techniques services-color text-justify">
								<div class="container">
									<div class="row">
										<div class="col-md-2 text-center" style="margin: auto;">
											<i class="fa fa-check fa-check-techniques" aria-hidden="true"></i>
										</div>
										<div class="col-md-10" style="margin: auto;">
											<h5><a href="https://www.fog.org.au/" type='button' style='color:#4e9525;cursor:pointer;'><u><b><i>Friends of Grasslands</i></b></u></a> - an agricultural community that provides community activities, advocacy and resources that aim to protect Australian grasslands.</h5>
										</div>
									</div>
								</div>
							</li>
							
							<li class="service-techniques services-color text-justify">
								<div class="container">
									<div class="row">
										<div class="col-md-2 text-center" style="margin: auto;">
											<i class="fa fa-check fa-check-techniques" aria-hidden="true"></i>
										</div>
										<div class="col-md-10" style="margin: auto;">
											<h5><a href="https://www.farm4trade.com/" type='button' style='color:#4e9525;cursor:pointer;'><u><b><i>Farm4Trade</i></b></u></a> - helps farmers to keep track of their record information with the purpose to improve production, increase trading opportunities and connect with other farmers.</h5>
										</div>
									</div>
								</div>
							</li>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section 4: AGRICULTURAL COMMUNITIES -->
		
		
		<!-- Section 5: Footer -->
		<footer class="ftco-footer ftco-bg-dark ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<div class="ftco-footer-widget mb-4">
							<h2 class="logo"><a href="#"><span>Educate</span> yourself <span>more</span></a></h2>
							<ul class="list-unstyled">
								<li><a href="news.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Stay up-to-date with recent news regarding grazing, wildfires, livestock, and drought. <u>Click to find out more.</u></a></li>
								<li><a href="techniques.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Use appropriate grazing techniques to keep grasslands safe. <u>Click to find out more.</u></a></li>
								<li><a href="livestock-statistics.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Livestock numbers are reducing. Attention is required! <u>Click to find out more.</u></a></li>
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
		<script src="js/amazing-grazing/employment-picker.js"></script>
		<script src="js/amazing-grazing/counterup.min.js"></script>
		
		
		<script type='text/javascript'> // Trigger map and cards when page is loaded
			$(document).ready(function(){
				var emp_type = document.getElementById("drop-employment").textContent;
				if (emp_type == 'Beef cattle employment rate') {
					var emp_type_select = "#e-beef";
				}
				
				if (emp_type == 'Dairy cattle employment rate') {
					var emp_type_select = "#e-dairy";
				}
				
				if (emp_type == 'Sheep employment rate') {
					var emp_type_select = "#e-sheep";
				}
				
				$(emp_type_select).trigger("click");
			});
		</script>
		<script type='text/javascript'> <!-- Renames the drop down employment type button & triggers the graph-->		
			$(".select-employment").click(function() {
				var active_id = $(this).attr("id");
				
				var e_beef = 'Beef cattle employment rate';
				var e_dairy = 'Dairy cattle employment rate';
				var e_sheep = 'Sheep employment rate';
				
				if (active_id == "e-beef") {
					document.getElementById('drop-employment').innerHTML = e_beef;
				} else if (active_id == "e-dairy") {
					document.getElementById('drop-employment').innerHTML = e_dairy;
				} else { // e-sheep
					document.getElementById('drop-employment').innerHTML = e_sheep;
				}
			});
		</script>
		<script type='text/javascript'> <!-- enables the counter script -->
			$('[data-toggle="counter-up"]').counterUp({
				delay: 10,
				time: 500
			  });
		</script>
	</body>
</html>

<?php $con -> close(); ?>