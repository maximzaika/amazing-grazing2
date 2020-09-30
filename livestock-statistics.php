
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
		<!-- Navigation Bar -->
		<?php echo htmlspecialchars_decode(generateNavTabs($con, 'livestock-statistics.php'));?>
		<!-- End Navigation Bar -->
		
		<!-- Error: When User Select <1 Graph -->
		<div class="modal fade" id="selection-error" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-exclamation-triangle" style="color:red" aria-hidden="true"></i> Something went wrong...</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				At least 1 option needs to be selected at the time. Please, try again.
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		<!-- End Error: When User Select <1 Graph -->
		
		<!-- Section 1: Page header - Livestock Statistics -->
		<section class="hero-wrap hero-wrap-2" style="background-image: url('images/livestock-statistics.jpg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div> <!-- add the darkness to the photo -->
				<div class="container">
					<div class="row no-gutters slider-text align-items-end justify-content-center">
						<div class="col-md-9 ftco-animate pb-5 text-center">
							<h1 class="mb-3 bread">Livestock Statistics</h1>
						</div>
					</div>
				</div>
		</section>
		<!-- End Section 1: Page header - Livestock Statistics -->
		
		<!-- Breadcrumbs -->
		<div class="container-fluid bg-light ftco-animate">
			<div class="container" style="padding-top: 15px;">
				<div class="row">
					<div class="col-md-12 pull-left">
						<h5 class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span><span><u><i>Livestock Statistics </i><i class="ion-ios-arrow-forward"></i></u></span></h5>
						<hr>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb -->
		
		<!-- Section 2: Livestock reduction impacts grasslands -->
		<section class="ftco-section ftco-no-pt ftco-no-pb bg-light iq-features ftco-animate">
			<div class="container">
				<div class="row ">
					<!-- Spinner containing livestock, beef, milk, wool, land use -->
					<div class="col-md-12 col-lg-7 col-xl-6 col-xxl-5 align-items-center overflow-hidden">
						<div class="holderCircle">
							<div class="round"></div>
							<div class="dotCircle">
								<span class="itemDot active itemDot1 flaticon-livestock" data-tab="1">
									<span class="forActive"></span>
								</span>
					   
								<span class="itemDot itemDot2 flaticon-meat" data-tab="2">
									<span class="forActive"></span>
								</span>
					   
								<span class="itemDot itemDot3 flaticon-milk" data-tab="3">
									<span class="forActive"></span>
								</span>
					   
								<span class="itemDot itemDot4 flaticon-sheep-1" data-tab="4">
									<span class="forActive"></span>
								</span>
					   
								<span class="itemDot itemDot5 flaticon-region" data-tab="5">
									<span class="forActive"></span>
								</span>
							</div>
					
							<div class="contentCircle">
								<div class="CirItem title-box active CirItem1">
									<h2 class="title"><span>Livestock</span></h2>
									<p>The numbers are drastically reducing since 1970s and will extinct in 2060 if no action will be taken! The following numbers are alarming!</p>
									<i class="flaticon-livestock"></i>
								</div>
								
								<div class="CirItem title-box CirItem2">
									<h2 class="title"><span>Beef</span></h2>
									<p>Production of beef is greatly impacted by the beef cattle numbers. Eventually there won't beef remain. The following numbers are alarming!</p>
									<i class="flaticon-meat"></i>
								</div>
					   
								<div class="CirItem title-box CirItem3">
									<h2 class="title"><span>Milk</span></h2>
									<p>Production of milk is greatly impacted by the dairy cattle numbers. Eventually there won't milk remain. The following numbers are alarming!</p>
									<i class="flaticon-milk"></i>
								</div>
								
								<div class="CirItem title-box CirItem4">
									<h2 class="title"><span>Wool</span></h2>
									<p>Production of wool is greatly impacted by the sheep numbers. Wool is used for blankets, carpenting and yarn production. Eventually there won't wool remain!</p>
									<i class="flaticon-sheep-1"></i>
								</div>
					   
								<div class="CirItem title-box CirItem5">
									<h2 class="title"><span>Land use</span></h2>
									<p>Livestock is important to preserve the grasslands, though, the right grazing techniques need to be utilized to achieve a large volume of production.</p>
									<i class="flaticon-region"></i>
								</div>
							</div>
						</div>
					</div> 
					<!-- End Spinner containing livestock, beef, milk, wool, land use -->
					
					<!-- Livestock reducting impacts grasslands section -->
					<div class="col-md-12 col-lg-5 col-xl-6 col-xxl-7">
						<div class="row justify-content-start py-5">
							<div class="col-md-12 heading-section ftco-animate">
								<h2 class="text-xxs-center text-sm-center text-md-left">LIVESTOCK REDUCTION IMPACTS GRASSLANDS</h2>
								<span class="mb-4 subheading text-xxs-center text-sm-center text-md-left">Livestock is required for food production and grazing to improve soil quality</span>
								<h5 class="text-xxs-center text-sm-center text-md-left">Lack of younger and educated farmers is one of the causes that leads to livestock reduction. Refer to <i><u><a href="employment-statistics.php">employment statistics page</a></u></i> to gain insight knowledge.</h5>
								
								<div class="employee-wrap">
									<a class="employee-list"><h5>Livestock is drastically reducing and will lead to its extinction!</h5>
										<div class="btn-custom service-color-green d-flex align-items-center justify-content-center" style="border: 3px solid red;"><span><i class="fa fa-exclamation-small fa-exclamation" aria-hidden="true"></i></span></div>
									</a>
									
									<a class="employee-list"><h5>Livestock is directly affecting beef, milk, wool, and yarn production!</h5>
										<div class="btn-custom service-color-green d-flex align-items-center justify-content-center" style="border: 3px solid red;"><span><i class="fa fa-exclamation-small fa-exclamation" aria-hidden="true"></i></span></div>
									</a>
									
									<a class="employee-list"><h5>Our future is not looking safe. The following numbers prove it!</h5>
										<div class="btn-custom service-color-green d-flex align-items-center justify-content-center" style="border: 3px solid red;"><span><i class="fa fa-exclamation-small fa-exclamation" aria-hidden="true"></i></span></div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Livestock reducting impacts grasslands section -->
				</div>
			</div>
		</section>
		
		<!-- Section 3: DOMINANT LIFESTOCK IS DRASTICALLY REDUCING -->
		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-animate" style="z-index:2;">
			<!-- Title and subheading of this section -->
			<div class="container" style="padding-top: 4em;">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center heading-section">
						<h2>DOMINANT LIFESTOCK IS DRASTICALLY REDUCING</h2>
						<span class="mb-4 subheading">Lack of livestock will degrade the soil quality and lead to reduced quantities of food and material</span>
					</div>
				</div>
			</div>
			<!-- End Title and subheading of this section -->
			
			<!-- Filter and year selection buttons and graph content -->
			<div class="container">		
				<div class="container" style="padding-left: 0px; padding-right: 0px; padding-bottom:15px;">
					<div class="row">
						<div class="col-md-3">
							<h5><i class="fa fa-filter" aria-hidden="true"></i> Filter page by livestock</h5>	
							<button id="show-filter" class="w-100 btn btn-topic btn-amazing-livestock-on hidden d-md-none" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus" aria-hidden="true"></i> Open filter</button>
							<div class="collapse dont-collapse-sm" id="collapseExample">
								<div class="row mb-3 ">
									<div class="col-xs-12 col-md-12" style="padding-bottom: 5px; padding-top: 5px;">
										<button id="livestock_beef" type="button" class="w-100 btn btn-topic btn-amazing-livestock-on update-livestock">Beef cattle</button>
									</div>
									
									<div class="col-xs-12 col-md-12" style="padding-bottom: 5px; padding-top: 5px;">
										<button id="livestock_dairy" type="button" class="w-100 btn btn-topic btn-amazing-livestock-on update-livestock">Dairy cattle</button>
									</div>
									
									<div class="col-xs-12 col-md-12" style="padding-bottom: 5px; padding-top: 5px;">
										<button id="livestock_sheep" type="button" class="w-100 btn btn-topic btn-amazing-livestock-on update-livestock">Sheep</button>
									</div>
									
									<div class="col-xs-12 col-md-12" style="padding-bottom: 5px; padding-top: 5px;">
										<button id="livestock_total" type="button" class="w-100 btn btn-topic btn-amazing-livestock-off update-livestock">Total</button>
									</div>
									
								</div> 
							</div>
							<h5><i class="fa fa-hand-o-up" aria-hidden="true"></i> Select year to predict</h5>
							<div class="dropdown" >
							  <button id="drop-year" class="w-100 btn btn-topic btn-amazing-grazing dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">2030</button>
							  <div class="w-100 text-center dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a id="y_2030" class="dropdown-item lvstYearPrediction" style="cursor: pointer;">2030</a>
								<a id="y_2040" class="dropdown-item lvstYearPrediction" style="cursor: pointer;">2040</a>
								<a id="y_2050" class="dropdown-item lvstYearPrediction" style="cursor: pointer;">2050</a>
								<a id="y_2060" class="dropdown-item lvstYearPrediction" style="cursor: pointer;">2060</a>
							  </div>
							</div>
						</div>
						
						<div class="col-md-9">
							<h5><i class="fa fa-line-chart" aria-hidden="true"></i> Prediction graph</h5>
							<div id="tableau-chart" class="container" style="padding-left: 0px; padding-right: 0px;"> <!-- added -->
								<!-- Graph is updated by the javascript -->
							</div>
							<div id="reference">
								<h5 class="text-center">Source: <i><u><b><a href="https://data.gov.au/dataset/ds-dga-1f3da692-f0cf-4de4-a7d3-bae52d600bae/details">ABARES, Agricultural Commodity Statistics 2017</a></b></u></i></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Filter and year selection buttons and graph content -->
			
			<!-- Card section -->
			<div class="container" style="padding-bottom: 4em;">
				<div class="row">
					<div class="col-lg-12 services-wrap">
						<div id="prediction-data" class="row pt-md-3"> 
							<!-- this part gets replaced by the javascript to update the year-->
						</div>
					</div>
				</div>
			</div>
			<!-- End Card section -->
		</section>
		<!-- End Section 3: Page header - Livestock is reducing -->
		
		
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
				
				<div id="update-notification">Entire page content is being updated.</div>
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
					setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
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
	</body>
</html>

<?php $con -> close(); ?>