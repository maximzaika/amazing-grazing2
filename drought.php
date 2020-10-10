
<?php 
    /* Server side files */
	require_once "server_config.php"; // Accesses to the database
	require_once "php/navigation.php"; // Updates the navigation bar
	require_once "php/generate-feedback-tab.php"; // Accesses the file that generates the feedback tab
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Amazing Grazing - Drought</title>
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
		
		<!-- Added in iteration 3 -->
		<link rel="stylesheet" href="css/amazing-grazing/feedback.css">
	</head>
	<body>	
		<!-- Navigation Bar -->
		<?php echo htmlspecialchars_decode(generateNavTabs($con, 'livestock-statistics.php'));?>
		<!-- End Navigation Bar -->
		
		<!-- Section 1: Page header - Livestock Statistics -->
		<section class="hero-wrap hero-wrap-2" style="background-image: url('images/drought.jpg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div> <!-- add the darkness to the photo -->
				<div class="container">
					<div class="row no-gutters slider-text align-items-end justify-content-center">
						<div class="col-md-9 ftco-animate pb-5 text-center">
							<h1 class="mb-3 bread">Drought</h1>
						</div>
					</div>
				</div>
		</section>
		<!-- End Section 1: Page header - Livestock Statistics -->
		
		<!-- Feedback Section -->
		<?php echo htmlspecialchars_decode(feedbackRead(basename(__FILE__, '.php')));?>
		<!-- End Feedback Section -->
		
		<!-- Breadcrumbs -->
		<div class="container-fluid bg-light ftco-animate">
			<div class="container" style="padding-top: 15px;">
				<div class="row">
					<div class="col-md-12 pull-left">
						<h5 class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span><span><u><i>Drought </i><i class="ion-ios-arrow-forward"></i></u></span></h5>
						<hr>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb -->
		
		
		<!-- Section 4: Footer -->
		<footer class="ftco-footer ftco-bg-dark ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<div class="ftco-footer-widget mb-4">
							<h2 class="logo"><a href="#"><span>Educate</span> yourself <span>more</span></a></h2>
							<ul class="list-unstyled">
								<li><a href="news.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Stay up-to-date with recent news regarding grazing, wildfires, livestock, and drought. <u>Click to find out more.</u></a></li>
								<li><a href="techniques.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Use appropriate grazing techniques to keep grasslands safe. <u>Click to find out more.</u></a></li>
								<li><a href="employment-statistics.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Employment rate is reducing. Attention is required! <u>Click to find out more.</u></a></li>
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
				
				<div id="update-notification">Entire page content is being updated.</div> <!-- show a notification when user changes the filter/prediction to let them know of the update -->
				<div id="update-notification-bad">At least one graph must be selected.</div> <!-- show error when user tries to select <1 graph -->
			</div>
		</footer>
		<!-- End Section 4: Footer -->
		
		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
		
		<!-- Added in Iteration 2 -->
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
		
		<!-- Added in Iteration 2/3 -->
		<script src="js/amazing-grazing/main.js"></script> <!-- Floating back to top button, scroll to anchor -->
		<script src="js/amazing-grazing/livestock-prediction.js"></script>
		<script src="js/amazing-grazing/livestock-picker.js"></script>
		<script src="js/amazing-grazing/counterup.min.js"></script>		
		<script type='text/javascript'> <!-- triggers changes when the page is fully loaded only -->
			var execute_once = 0; // make sure that the upper notification bar is not appearring when user makes changes to the filter

			$(document).ready(function(){
				/* Trigger the card update based on the year selected */
				var yearContent = document.getElementById("drop-year").textContent;
				var selectedYear = "#y_"+yearContent;
				$(selectedYear).trigger("click");
				execute_once++;
				
				
				/* Control the Animated Spinner that containes 5 items */
				let i=2;

				var radius = 200;
				var fields = $('.itemDot');
				var container = $('.dotCircle');
				var width = container.width();
				radius = width/2.5;
				 
				var height = container.height();
				var angle = 0, step = (2*Math.PI) / fields.length;
				fields.each(function() {
					var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
					var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);

					$(this).css({
						left: x + 'px',
						top: y + 'px'
					});
					
					angle += step;
				});
		
				$('.itemDot').click(function(){
					var dataTab = $(this).data("tab");
					$('.itemDot').removeClass('active');
					$(this).addClass('active');
					$('.CirItem').removeClass('active');
					$( '.CirItem'+ dataTab).addClass('active');
					i = dataTab;
					
					$('.dotCircle').css({ // controls the rotations of the spinning circle
						"transform":"rotate("+((i-1)*36)+"deg)",
						"transition":"2s"
					});
					
					$('.itemDot').css({ // controls the rotations of the boxes. Must be opposite of the spinning circle
						"transform":"rotate("+((-1)*(i-1)*36)+"deg)",
						"transition":"1s"
					});
				});
		
				setInterval (function() { // Function that auto executes every 5 seconds to enable auto spin
					var dataTab = $('.itemDot.active').data("tab");
					
					if (dataTab>5 || i>5) {
						dataTab=1;
						i=1;
					};
					
					$('.itemDot').removeClass('active');
					$('[data-tab="'+i+'"]').addClass('active');
					$('.CirItem').removeClass('active');
					$( '.CirItem'+i).addClass('active');
					i++;
					
					$('.dotCircle').css({ // controls the rotations of the spinning circle
						"transform":"rotate("+((i-2)*36)+"deg)",
						"transition":"2s"
					});
					
					$('.itemDot').css({ // controls the rotations of the boxes. Must be opposite of the spinning circle
						"transform":"rotate("+((-1)*(i-2)*36)+"deg)",
						"transition":"1s"
					});
				}, 5000); 
		});
		</script>
		<script type='text/javascript'> <!-- Executes pop-up when updating filter & rename the filter when changed -->		
			$(".lvstYearPrediction").click(function() { // controls the execution of the notification when user changes prediction year/filter
				if (execute_once > 0) {
					var x = document.getElementById("update-notification");
					x.className = "show";
					setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
				}
			});
			
			$("#show-filter").click(function() { // renames the filter button upon click
				var max_btn = '<i class="fa fa-plus" aria-hidden="true"></i> Open filter';
				var min_btn = '<i class="fa fa-minus" aria-hidden="true"></i> Close filter';
				
				var curr_text = document.getElementById("show-filter").innerHTML;
				
				if (curr_text == max_btn) {
					document.getElementById("show-filter").innerHTML  = min_btn;
				} else {
					document.getElementById("show-filter").innerHTML  = max_btn;
				}
			});
		</script>
		
		<!-- Added in Iteration 3 -->
		<script type='text/javascript'> <!-- Tracks the height of the card to make it same when the card is not expanded -->
			var clickedCard = [];
			var maximumHeight = '';
			var countClick = 0;
			
			function removeHeight(cardID) {
				if (countClick == 0) {
					maximumHeight = ($('#'+cardID).height()); // get the original height
					countClick++;
				}
				
				if (clickedCard.includes(cardID)) { // need to hide it by including the original height
					$('#'+cardID).find("div").eq(0).css('height',maximumHeight); // set original height back
					const index = clickedCard.indexOf(cardID); // get index of the card in array
					clickedCard.splice(index, 1); // remove the card from the array
				} else { //remove the original height
					$('#'+cardID).find("div").eq(0).css('height',''); // remove the original height
					clickedCard.push(cardID); // add to currently open card list
				};
			};
		</script>
		
		<!-- Added in Iteration 3 -->
		<script src="js/amazing-grazing/feedback.js"></script> <!-- used for feedback section -->
		<script src='https://www.google.com/recaptcha/api.js'></script> <!-- used for feedback section -->
	</body>
</html>

<?php $con -> close(); ?>