
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

		<!-- Added in iteration 2 -->
		<link rel="stylesheet" href="css/amazing-grazing/custom.css">
		
		<!-- Added in iteration 2 -->
		<link rel="stylesheet" href="css/amazing-grazing/custom.css">
	</head>
	<body>
		<!-- Navigation Bar -->
		<?php echo htmlspecialchars_decode(generateNavTabs($con, 'statistics.php'));?>
		<!-- End Navigation Bar -->
		
		<!-- Error -->
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
		
		<!-- Section 1: Page header - Grazing Techniques -->
		<section class="hero-wrap hero-wrap-2" style="background-image: url('images/grazing_methods.jpg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div> <!-- add the darkness to the photo -->
				<div class="container">
					<div class="row no-gutters slider-text align-items-end justify-content-center">
						<div class="col-md-9 ftco-animate pb-5 text-center">
							<h1 class="mb-3 bread">Livestock Statistics</h1>
						</div>
					</div>
				</div>
		</section>
		<!-- End Section 1: Page header - Grazing Techniques -->
		
		<!-- Breadcrumbs -->
		<div class="container-fluid bg-light">
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
		
		<section class="ftco-section ftco-no-pt ftco-no-pb bg-light" >
			<div class="container pt-md-4">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center heading-section coftco-animate">
						<h2 class="mb-4" style="color: #228B22;">LIVESTOCK IS REDUCING</h2>
					</div>
				</div>
			</div>
			
			<div class="container">
				
				<h5><i class="fa fa-filter" aria-hidden="true"></i> Filter by livestock</h5>				
				<div class="container" style="padding-left: 0px; padding-right: 0px; padding-bottom:15px;">
					<button id="show-filter" class="w-100 btn btn-topic btn-amazing-livestock-on hidden d-md-none" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus" aria-hidden="true"></i> Open filter</button>
					
					<div class="collapse dont-collapse-sm" id="collapseExample">
					  
						<div class="row mb-3">
							<div class="col-xs-3 col-md-3" style="padding-bottom: 5px; padding-top: 5px;">
								<button id="livestock_beef" type="button" class="w-100 btn btn-topic btn-amazing-livestock-off update-livestock">Beef cattle</button>
							</div>
							
							<div class="col-xs-3 col-md-3" style="padding-bottom: 5px; padding-top: 5px;">
								<button id="livestock_dairy" type="button" class="w-100 btn btn-topic btn-amazing-livestock-off update-livestock">Dairy cattle</button>
							</div>
							
							<div class="col-xs-3 col-md-3" style="padding-bottom: 5px; padding-top: 5px;">
								<button id="livestock_sheep" type="button" class="w-100 btn btn-topic btn-amazing-livestock-on update-livestock">Sheep</button>
							</div>
							
							<div class="col-xs-3 col-md-3" style="padding-bottom: 5px; padding-top: 5px;">
								<button id="livestock_total" type="button" class="w-100 btn btn-topic btn-amazing-livestock-off update-livestock">Total</button>
							</div>
						</div> 
					  
					</div>
				</div>

				<div id="tableau-chart" class="container" style="padding-left: 0px; padding-right: 0px;"> <!-- added -->
					<div class='tableauPlaceholder' id='viz1599651184552' style='position: relative; width:100%;'>
						<noscript>
							<a href='#'><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;sheepnumbers-greenline&#47;SheepNumbersinAustraliafrom1973to2016&#47;1_rss.png' style='border: none;' /></a>
						</noscript>
						<object class='tableauViz'  style='display:none;'>
							<param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> 
							<param name='embed_code_version' value='3' /> 
							<param name='site_root' value='' />
							<param name='name' value='sheepnumbers-greenline&#47;SheepNumbersinAustraliafrom1973to2016' />
							<param name='tabs' value='no' />
							<param name='toolbar' value='yes' />
							<param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;sheepnumbers-greenline&#47;SheepNumbersinAustraliafrom1973to2016&#47;1.png' /> 
							<param name='animate_transition' value='yes' />
							<param name='display_static_image' value='yes' />
							<param name='display_spinner' value='yes' />
							<param name='display_overlay' value='yes' />
							<param name='display_count' value='yes' />
							<param name='language' value='en' />
							<param name='filter' value='publish=yes' />
						</object>
					</div>
				</div>
			</div>
		</section>
		
		<section id="offerings" class="ftco-section ftco-no-pt bg-light" style="padding: 4em 0;">
			<div class="container pt-md-4">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center heading-section coftco-animate">
						<h2 class="mb-4" style="color: #228B22;">FACTS ABOUT FUTURE</h2>
					</div>
					<div class="col-md-12">
						<h5><i class="fa fa-check-square-o" aria-hidden="true"></i> Select year to show prediction</h5>
					</div>
					
					<div class="col-md-4">
						<div class="dropdown">
						  <button id="drop-year" class="w-100 btn btn-topic btn-amazing-grazing dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">2020</button>
						  <div class="w-100 text-center dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a id="y_2020" class="dropdown-item lvstYearPrediction">2020</a>
							<a id="y_2025" class="dropdown-item lvstYearPrediction">2025</a>
							<a id="y_2030" class="dropdown-item lvstYearPrediction">2030</a>
							<a id="y_2035" class="dropdown-item lvstYearPrediction">2035</a>
							<a id="y_2040" class="dropdown-item lvstYearPrediction">2040</a>
							<a id="y_2045" class="dropdown-item lvstYearPrediction">2045</a>
							<a id="y_2050" class="dropdown-item lvstYearPrediction">2050</a>
							<a id="y_2055" class="dropdown-item lvstYearPrediction">2055</a>
							<a id="y_2060" class="dropdown-item lvstYearPrediction">2060</a>
						  </div>
						</div>
					</div>
					<div class="col-md-4 offset-md-4"></div>
				</div>
			</div>
			
			<div class="container">
				<div class="row">
					<div class="col-lg-12 services-wrap px-4">
						<div id="prediction-data" class="row pt-md-3">
							<div class="col-sm-4 col-md-4 d-flex align-items-stretch">
								<div class="services text-center" style="padding-bottom: 10px;">
									<div class="icon d-flex justify-content-center align-items-center">
									
										<span class="flaticon-livestock"></span>
									</div>
									
									<div class="text">
										<h4><b>Beef cattle in</b></h4>
										<hr>
										<div class="container">
											
											<div class="row">
												<div class="col-md-12">
												
													<h4><b>2016</b></h4>
													<h5><i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp<span data-toggle="counter-up">70,000,000</span></h5>
												</div>
												<div class="col-md-12">
												
													<h4><b>2020</b></h4>
													<h5><i class="fa fa-arrow-circle-down" aria-hidden="true"></i>&nbsp<span data-toggle="counter-up">59,999,666</span></h5>
												</div>
												
											</div>
										</div>
										
									</div>
								</div>
							</div>
							
							<div class="col-sm-4 col-md-4 d-flex align-items-stretch">
								<div class="services text-center" style="padding-bottom: 10px;">
									<div class="icon d-flex justify-content-center align-items-center">
									
										<span class="flaticon-milk"></span>
									</div>
									
									<div class="text">
										<h4><b>Litres of milk in</b></h4>
										<hr>
										<div class="container">
											
											<div class="row">
												<div class="col-md-12">
												
													<h4><b>2016</b></h4>
													<h5><i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp<span data-toggle="counter-up">70,000,000</span></h5>
												</div>
												<div class="col-md-12">
												
													<h4><b>2020</b></h4>
													<h5><i class="fa fa-arrow-circle-down" aria-hidden="true"></i>&nbsp<span data-toggle="counter-up">59,999,666</span></h5>
												</div>
												
											</div>
										</div>
										
									</div>
								</div>
							</div>
							
							<div class="col-sm-4 col-md-4 d-flex align-items-stretch">
								<div class="services text-center">
									<div class="icon d-flex justify-content-center align-items-center">
									
										<span class="flaticon-meat"></span>
									</div>
									
									<div class="text">
										<h4><b>Kg of beef in</b></h4>
										<hr>
										<div class="container">
											
											<div class="row">
												<div class="col-md-12">
												
													<h4><b>2016</b></h4>
													<h5><i class="fa fa-dot-circle-o" aria-hidden="true"></i>&nbsp<span data-toggle="counter-up">30,566,777</span></h5>
												</div>
												<div class="col-md-12">
												
													<h4><b>2020</b></h4>
													<h5><i class="fa fa-arrow-circle-down" aria-hidden="true"></i>&nbsp<span data-toggle="counter-up">25,444,333</span></h5>
												</div>
												
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<!--
							<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 d-flex align-items-stretch">
								<div class="services text-center">
									<div class="icon d-flex justify-content-center align-items-center">
									
										<span class="flaticon-meat"></span>
									</div>
									
									<div class="text" style="padding-bottom:25px;">
										<h4><b>Meat QTY in 2016</b></h4>
										<h5><span data-toggle="counter-up">45,532,548</span></h5>
									</div>
								</div>
							</div>
							
							<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 d-flex align-items-stretch">
								<div class="services text-center">
									<div class="icon d-flex justify-content-center align-items-center">
									
										<span class="flaticon-news"></span>
									</div>
									
									<div class="text" style="padding-bottom:25px;">
										<h4><b>Meat QTY in 2020</b></h4>
										<h5><span data-toggle="counter-up">35,666,555</span></h5>
									</div>
								</div>
							</div>-->
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Section 3: Footer -->
		<footer class="ftco-footer ftco-bg-dark ftco-section">
			<div class="container">
				<div class="row mb-5">
				
					<div class="col-md-6">
						<div class="ftco-footer-widget mb-4">
							<h2 class="logo"><a href="#"><span>Educate</span> yourself <span>more</span></a></h2>
							<ul class="list-unstyled">
								<li><a href="news.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Did you know that we aim to provide the most recent information about grazing, livestock, wildfires, and drought possible? <u>Click to find out more.</u></a></li>
								<!-- <li><a href="wip.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Did you know that the livestock numbers in Australia have reduced by 80 million since 1970s? <u>Click to find out more.</u></a></li> -->
								<!-- <li><a href="wip.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Did you know that drought leads to wildfires and loss of wetland habitats? <u>Try out our drought prediction technique that might assist you.</u></a></li> -->
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
		
		<!-- Added in ITteration 2 -->
		<script src="js/amazing-grazing/main.js"></script> <!-- Floating back to top button, scroll to anchor -->
		<script src="js/amazing-grazing/livestock-prediction.js"></script>
		<script src="js/amazing-grazing/livestock-picker.js"></script>
		<script src="js/amazing-grazing/counterup.min.js"></script>
		
		<script type='text/javascript'> <!-- initially triggers the tableau -->                    
			window.onload = function() {
				var divElement = document.getElementById('viz1599651184552');                    
				var vizElement = divElement.getElementsByTagName('object')[0]; 
				
				if (divElement.offsetWidth > 700) {
					vizElement.style.width='100%';
					vizElement.style.height=(500*0.75)+'px';
					console.log('size is more than 700');
				} else if (divElement.offsetWidth > 320) {
					console.log('size is more than 370');
					vizElement.style.width='100%';
					vizElement.style.height=(500)+'px';
				} else {
					vizElement.style.width='100%';
					vizElement.style.height=(divElement.offsetWidth*0.75)+'px';
					console.log('size is less than 370');
				}
							
				var scriptElement = document.createElement('script');      
				scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';   
				vizElement.parentNode.insertBefore(scriptElement, vizElement);
			};
		</script>
		
		<script type='text/javascript'> <!-- renames the filter button upon click -->
			$("#show-filter").click(function() {
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
		
		<script type='text/javascript'> <!-- enables the counter script -->
			$('[data-toggle="counter-up"]').counterUp({
				delay: 10,
				time: 500
			  });
		</script>
	</body>
</html>

<?php $con -> close(); ?>