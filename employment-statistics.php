<!--
 * Last Edited: 25/10/2020
 * 
 * Developed by: MC CM Team (Monash Students)
 * Project Name: Amazing Grazing
 * Project Description: Protecting Australia Grasslands by 
 *					    encouraging farmer education
 *
 * Usage:
 *  - loads the livestock statistics page by typing employment-statistics.php in the browser
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
	require_once "php/employee-statistics-content.php"; // Used to update the landing (intro & agricultural communities)
	require_once "php/generate-feedback-tab.php"; // Accesses the file that generates the feedback tab
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Amazing Grazing - Employment Statistics</title>
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
		
		<!-- Added in iteration 2 -->
		<link rel="stylesheet" href="css/amazing-grazing/custom.css">
		
		<!-- Added in iteration 3 -->
		<link rel="stylesheet" href="css/amazing-grazing/feedback.css">
	</head>
	<body>		
		<!-- Navigation Bar -->
		<?php echo htmlspecialchars_decode(generateNavTabs($con, 'Statistics', 'employment-statistics.php'));?>
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
		
		<!-- Feedback Section -->
		<?php echo htmlspecialchars_decode(feedbackRead(basename(__FILE__, '.php')));?>
		<!-- End Feedback Section -->
							
		<!-- Breadcrumbs -->
		<div class="container-fluid bg-light ftco-animate">
			<div class="container" style="padding-top: 15px;">
				<div class="row">
					<div class="col-md-12 pull-left">
						<h5 class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span><span><u><i>Employment Stats </i><i class="ion-ios-arrow-forward"></i></u></span></h5>
						<hr>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb -->
		
		<!-- Section 2: FARMERS CAN MAKE A DIFFERENCE -->
		<section class="ftco-section ftco-no-pt ftco-no-pb bg-light ftco-animate">
			<div class="container">
				<div class="row d-flex">
					<!-- Left and right sides (video & content) retrieved from db -->
					<?php echo htmlspecialchars_decode($emp_landing);?>					
				</div>
			</div>
		</section>
		<!-- End Section 2: FARMERS CAN MAKE A DIFFERENCE -->
		
		<!-- Section 3: NUMBER OF EDUCATED & YOUNG FARMERS IS REDUCING -->
		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-animate" style="z-index:2;">
			<div class="container" style="padding: 4em 0;">
				<!-- Title and subheading -->
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 text-center heading-section">
							<h2>NUMBER OF EDUCATED & YOUNG FARMERS IS REDUCING</h2>
							<span class="mb-4 subheading">Reduced beef & dairy cattle and sheep employment rates lead to livestock reduction. The following numbers are concerning!</span>
						</div>
					</div>
				</div>
				<!-- End Title and subheading -->
				
				<!-- Buttons, graph & source-->
				<div class="container">
					<div class="container" style="padding-left: 0px; padding-right: 0px; padding-bottom:15px;">
						<div class="row">
							<!-- Sorting -->
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
								<br>
							</div>
							<!-- Sorting -->
							
							
							<div class="col-md-12">
								<div class="container" style="padding-right: 0px; padding-left: 0px;"> <!-- border: 3px solid #4e9525; -->
									<div id="tableau-chart" class="container" style="padding: 0px;"> 
										<!-- Graph will be inserted here -->
									</div>
									
								</div>
								<div id="reference">
									<!-- URL to dataset will be inserted here -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Buttons, graph & source -->
				
				<!-- Card section-->
				<div class="container">
					<div id="cards-data" class="carousel-services owl-carousel ftco-owl pt-md-3"> 
						<!-- Cards will be inserted here -->
					</div>
				</div>
				<!-- End Card section-->
			</div>
		</section>
		<!-- End Section 3: NUMBER OF EDUCATED & YOUNG FARMERS IS REDUCING -->
		
		<!-- Section 4: AGRICULTURAL COMMUNITIES -->
		<section style="padding: 4em 0;" class="ftco-section ftco-no-pt ftco-animate bg-light">
			<div class="container pt-4">
				<div class="row justify-content-center pt-4">
					<div class="col-md-12 text-center heading-section">
						<h2>AGRICULTURAL COMMUNITIES</h2>
						<span class="mb-4 subheading">Keep in touch with your fellow farmers to stay up-to-date and educated</span>
						
						<div class="row ftco-animate">
							<div class="col-md-12">
								<!-- Start carousel -->
								<div class="carousel-testimony owl-carousel ftco-owl text-justify">
									<?php echo htmlspecialchars_decode($emp_agri);?>									  
								</div>
								<!-- End Start carousel -->
							</div>
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
		<!-- End Section 5: Footer -->
		
		<div id="update-notification">Entire page content is being updated.</div>
		
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
			/* 
				Description: pauses & initiates the agricultural communities carousel rotation upon hovering it
				Pre-condition:
				  - initiates auto rotation on load every 4 second
                  - the carousel must have classe "owl-item"
				Post-condition
				  - detects hover over and sends pause/start to owlCarousel
                  - unique to this webpage only
				Return:
				  - none, but visually executes the carousel rotation
			*/
			var block = false;
			var owl1 = $('.carousel-testimony');
			$(".owl-item").mouseenter(function(){
				if(!block) {
					block = true;
					owl1.trigger('stop.owl.autoplay');
					block = false;
				}
			});
			
			$(".owl-item").mouseleave(function(){
				if(!block) {
					block = true;
					owl1.trigger('play.owl.autoplay',[4000]);
					block = false;
				}
			});
			
			/* 
				Description: pop-ups to play the video on the page
				Pre-condition:
				  - the video container must have an id "#headerVideoLink"
				Post-condition
				  - pops up the video container
				Return:
				  - none, but visaully pop up on the screen
			*/
			/* Added in iteration 3 - pop-up to play the video */
			$('#headerVideoLink').magnificPopup({ 
				type:'inline',
				midClick: true 
			});
			
			var execute_once = 0; // make sure that the upper notification bar is not appearring when user makes changes to the filter
			                      /* Added in iteration 3 */
			$(document).ready(function(){
				/* Added in iteration 3 - Enables auto play on the carousel */
				owl1.trigger('play.owl.autoplay',[4000]); 
				
				/* 
					Description: triggers a click on the drop down employment type selection
					Pre-condition:
					  - by default button must be set to a correct name of the record
					Post-condition
					  - trigger click on any of the buttons to intiate page update
					Return:
					  - none, but visaully show the changes (graph, cards, etc)
				*/
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
				
				execute_once++;
				
				/* 
					Description: scan through agricultural community card and resize based on max height
					Pre-condition:
					  - origin max height must be 0 (anything below 0)
					  - card must have 'testimony-wrap' class
					  - page must be refreshed each time if the screen size changes
					Post-condition
					  - scan throught 'testimony-wrap' class
					  - find max height
					  - resize all the max height
					Return:
					  - none, visually change the height of each card
				*/
				var maxHeight = 0;
				$(".testimony-wrap").each(function(){
					maxHeight = Math.max(maxHeight, $(this).height());  
				});
				$(".testimony-wrap").height(maxHeight);
			});

			/* 
				Description: renames the drop down employment type button & triggers the graph update
				Pre-condition:
				  - employment type must be clicked with the class "select-employment"
				Post-condition
				  - identify clicked drop down button, and rename the original button with the clicked button
                  - trigger the click to execute the graph and cards
                  - trigger update notification that lasts for 3 seconds
				Return:
				  - none, visually change the height of each card
			*/
			$(".select-employment").click(function() {
				if (execute_once > 0) {
					var x = document.getElementById("update-notification");
					x.className = "show";
					setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
				}
				
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
		
		<!-- Added in Iteration 3 -->
		<script src="js/amazing-grazing/feedback.js"></script> <!-- used for feedback section -->
		<script src='https://www.google.com/recaptcha/api.js'></script> <!-- used for feedback section -->
	</body>
</html>

<?php $con -> close(); ?>