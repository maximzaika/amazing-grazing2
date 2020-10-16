
<?php 
    /* Server side files */
	require_once "server_config.php"; // Accesses to the database
	require_once "php/navigation.php"; // Updates the navigation bar
	require_once "php/generate-feedback-tab.php"; // Accesses the file that generates the feedback tab
	require_once "php/drought-content.php"; // Used to update the landing (spinner, intro, filter & year controls)
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

		<!-- Added in iteration 3 -->
		<link rel="stylesheet" href="css/amazing-grazing/custom.css">
		<link rel="stylesheet" href="css/amazing-grazing/feedback.css">
	</head>
	<body>	
		<!-- Navigation Bar -->
		<?php echo htmlspecialchars_decode(generateNavTabs($con, 'drought.php', ''));?>
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
		
		<!-- Section 1: Drought species impact grasslands -->
		<section class="ftco-section ftco-no-pt ftco-no-pb bg-light iq-features ftco-animate">
			<div class="container">
				<div class="row ">
					<!-- Graph containing drought information -->
					<div id="tableau-graph" class="col-md-12 col-lg-6 col-xl-6 col-xxl-5 order-xxs-2 order-lg-1 d-flex align-items-center align-content-center" style="padding: 0px;">
						<?php //echo htmlspecialchars_decode($spinner_full);?> <!-- just in case the spinner needs to be used -->
						<div class='tableauPlaceholder' id='viz1602816114213' style='position: relative'>
							<noscript>
								<a href='#'><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;AU&#47;AUDrought&#47;Dashboard1&#47;1_rss.png' style='border: none' /></a>
							</noscript>
							<object class='tableauViz'  style='display:none;'>
								<param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> 
								<param name='embed_code_version' value='3' /> 
								<param name='site_root' value='' />
								<param name='name' value='AUDrought&#47;Dashboard1' />
								<param name='tabs' value='no' />
								<param name='toolbar' value='yes' />
								<param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;AU&#47;AUDrought&#47;Dashboard1&#47;1.png' /> 
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
					<!-- End Spinner containing root cause, animals, management, dangerous, species -->
					
					<!-- Invasive species impact grasslands section -->
					<div class="col-md-12 col-lg-6 col-xl-6 col-xxl-7 order-xxs-1 order-lg-2 justify-content-center">
						<?php echo htmlspecialchars_decode($drought_intro);?>
					</div>
					<!-- End Invasive species impact grasslands section -->
				</div>
			</div>
		</section>
		<!-- End Section 1: Invasive species impact grasslands -->
		
		<!--<div class="wrap">
									<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url('images/employment-statistics.jpg');"></div>
									<div class="text text-center px-4">
										<h3>test test 1</h3>
										<h5 class="dummy"><a>test test 1<a></h5>
										
										
									</div>
										
									
									<a class="d-flex justify-content-center">
										<button id="" style="position: absolute; bottom: 18px;" class="btn btn-primary location-button" type="button" data-toggle="modal" data-target="#exampleModalLong">
											<i class="fa fa-map-marker" aria-hidden="true"></i> Show affected areas
										</button>
									</a>
								</div>-->
								
		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-animate sort-species">
			<div class="container">
				<div class="container" style="padding-top: 4em;">
					<div class="row justify-content-center">
						<div class="col-md-12 text-center heading-section">
							<h2>PREPARE YOURSELF FOR DROUGHT</h2>
							<span class="mb-4 subheading">The following actions need to be taken to prepare for drought</span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="carousel-farmer-actions owl-carousel ftco-owl">
							
							<div class="item d-flex align-items-stretch">
								<div class="wrap">
									<div class="container measures-wrap">
										<div class="row">
											<div class="col-md-12 prevent-measures-header align-items-center justify-content-center">
												<div class="hero-wrap hero-wrap2 prevent-measures-img prevent-measures-round-corners" style="background-image: url(images/drought/action-plan/header-livestock.jpeg);">
													<div class="overlay prevent-measures-round-corners" style="opacity: 0.2;"></div>
													<div class="prevent-measures-round-corners no-gutters slider-text align-items-end justify-content-center" style="padding:0px;">
														<div class="col-md-12 text-center" style="position: absolute; bottom: 18px; right: 0; left: 0;">
															<h1 class="bread" style=" font-size: 30px;">Livestock Situation</h1>
														</div>
													</div>
												</div>
											</div>
											
											<div class="col-md-12 measures-list custom-scrollbar-css" style="height: 350px; padding: 0px; padding-top: 20px;">
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a><b>Use the map above to estimate the possible weather pattern</b>, which is likely to change, and plan forward to avoid livestock starving and becoming distressed during drought.</a></h5></div>
												</div>
												
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a>Planning is the key - take time to <b>perform calculations</b> to prepare the amount, time, and cost of feeding the livestock.</a></h5></div>
												</div>
												
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a>Do not be afraid to <b>overestimate the resources</b>, even if your area is less affected by drought.</a></h5></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="item d-flex align-items-stretch">
								<div class="wrap">
									<div class="container measures-wrap">
										<div class="row">
											<div class="col-md-12 prevent-measures-header align-items-center justify-content-center">
												<div class="hero-wrap hero-wrap2 prevent-measures-img prevent-measures-round-corners" style="background-image: url(images/drought/action-plan/header-mental.jpg);">
													<div class="overlay prevent-measures-round-corners" style="opacity: 0.2;"></div>
													<div class="prevent-measures-round-corners no-gutters slider-text align-items-end justify-content-center" style="padding:0px;">
														<div class="col-md-12 text-center" style="position: absolute; bottom: 18px; right: 0; left: 0;">
															<h1 class="bread" style=" font-size: 30px;">Health Situation</h1>
														</div>
													</div>
												</div>
											</div>
											
											<div class="col-md-12 measures-list custom-scrollbar-css" style="height: 350px; padding: 0px; padding-top: 20px;">
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a><b>Drought is not the end of the world.</b> It is important to keep yourself safe and avoid stressing out.</a></h5></div>
												</div>
												
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a><b>Have a place, where you and your family members can bond together</b>, forget about the business for a second, and relax.</a></h5></div>
												</div>
												
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a><b>Read books, watch TV, enjoy your free time</b> even if it is not the best time, and most importantly do not keep thoughts to yourself - always discuss them with someone.</a></h5></div>
												</div>
												
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a>Most importantly, <b>the Australian government is here to help</b> and to support you. Read below what the government does.</a></h5></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="item d-flex align-items-stretch">
								<div class="wrap">
									<div class="container measures-wrap">
										<div class="row">
											<div class="col-md-12 prevent-measures-header align-items-center justify-content-center">
												<div class="hero-wrap hero-wrap2 prevent-measures-img prevent-measures-round-corners" style="background-image: url(images/drought/action-plan/header-strategy.jpg);">
													<div class="overlay prevent-measures-round-corners" style="opacity: 0.2;"></div>
													<div class="prevent-measures-round-corners no-gutters slider-text align-items-end justify-content-center" style="padding:0px;">
														<div class="col-md-12 text-center" style="position: absolute; bottom: 18px; right: 0; left: 0;">
															<h1 class="bread" style=" font-size: 30px;">Effective Strategy</h1>
														</div>
													</div>
												</div>
											</div>
											
											<div class="col-md-12 measures-list custom-scrollbar-css" style="height: 350px; padding: 0px; padding-top: 20px;">
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a><b>Preparing for a drought:</b> build ecological capital, practice effective <span onclick="window.location.href='techniques.php';" style="cursor: pointer; color: #4e9525;"><u><i>grazing techniques</u></i></span>, try to remove <span onclick="window.location.href='invasive-species.php';" style="cursor: pointer; color: #4e9525;"><u><i>invasive weeds</u></i></span>, develop water infrastructure for sufficient water supply, and consider selling some of your livestock.</a></h5></div>
												</div>
												
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a><b>Managing during a drought:</b> make use of the preparation phase, decide the right rotation method to feed livestock to lower the budget, reduce the number of mobs on the pastures, and make use of <span onclick="window.location.href='techniques.php';" style="cursor: pointer; color: #4e9525;"><u><i>grazing techniques</u></i></span> to allow grassland to heal.</a></h5></div>
												</div>
												
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a><b>Recovering from drought:</b> analyse the current state, manage cashflow effectively, slowly match the stocking rate to carrying capacity, and finally reflect on what has been done and what can be improved.</a></h5></div>
												</div>
											</div>
										</div>
									</div>	
								</div>
							</div>
							
							<div class="item d-flex align-items-stretch">
								<div class="wrap">
									<div class="container measures-wrap">
										<div class="row">
											<div class="col-md-12 prevent-measures-header align-items-center justify-content-center">
												<div class="hero-wrap hero-wrap2 prevent-measures-img prevent-measures-round-corners" style="background-image: url(images/drought/action-plan/header-finance.jpg);">
													<div class="overlay prevent-measures-round-corners" style="opacity: 0.2;"></div>
													<div class="prevent-measures-round-corners no-gutters slider-text align-items-end justify-content-center" style="padding:0px;">
														<div class="col-md-12 text-center" style="position: absolute; bottom: 18px; right: 0; left: 0;">
															<h1 class="bread" style=" font-size: 30px;">Financial Situation</h1>
														</div>
													</div>
												</div>
											</div>
											
											<div class="col-md-12 measures-list custom-scrollbar-css" style="height: 350px; padding: 0px; padding-top: 20px;">
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a><b>List out</b> all <b>physical and financial resources of the farm</b> to consider possible effects on both short- and long-term strategies.</a></h5></div>
												</div>
												
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a><b>Prepare at least 6 months of cash flow budget</b> against possible financial difficulties. It is a good practice to overestimate just to stay safe.</a></h5></div>
												</div>
												
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a><b>Consider reducing the livestock numbers</b> by selling them to minimise the maintenance because there is no exact way to predict the duration of drought.</a></h5></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
							
							<div class="item d-flex align-items-stretch">
								<div class="wrap">
									<div class="container measures-wrap">
										<div class="row">
											<div class="col-md-12 prevent-measures-header align-items-center justify-content-center">
												<div class="hero-wrap hero-wrap2 prevent-measures-img prevent-measures-round-corners" style="background-image: url(images/drought/action-plan/grassland-header.jpeg);">
													<div class="overlay prevent-measures-round-corners" style="opacity: 0.2;"></div>
													<div class="prevent-measures-round-corners no-gutters slider-text align-items-end justify-content-center" style="padding:0px;">
														<div class="col-md-12 text-center" style="position: absolute; bottom: 18px; right: 0; left: 0;">
															<h1 class="bread" style=" font-size: 30px;">Grassland Situation</h1>
														</div>
													</div>
												</div>
											</div>
											
											<div class="col-md-12 measures-list custom-scrollbar-css" style="height: 350px; padding: 0px; padding-top: 20px;">
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a><b>Consider the effects of the strategy on the grassland pastures</b> and soil in a long run. It is important to ensure that soil heals well before using it for grazing.</a></h5></div>
												</div>
												
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a>During the drought, <b>livestock</b>, like cattle, <b>may cause more damage to soil, native vegetation, and flora species.</b> It is advised to keep the situation under control.</a></h5></div>
												</div>
												
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a>Give at least few weeks to <b>allow grassland to regrow and recover</b>, during the autumn break, by the use of effective <span onclick="window.location.href='techniques.php';" style="cursor: pointer; color: #4e9525;"><u><i>grazing techniques</u></i></span>.</a></h5></div>
												</div>
												
												<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">
													<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
														<i class="fa fa-check" style="font-size: 35px;" aria-hidden="true"></i>
													</div>
													<div class="d2" style="padding-top: 5px;"><h5><a><b>Plant more trees</b> to allow its roots to keep the soil moist for a longer period of time.</a></h5></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Section 4: Footer -->
		<footer class="ftco-footer ftco-bg-dark ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<div class="ftco-footer-widget mb-4">
							<h2 class="logo"><a href="#"><span>Educate</span> yourself <span>more</span></a></h2>
							<ul class="list-unstyled">
								<li><a href="news.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Stay up-to-date with recent news regarding grazing, wildfires, livestock, and drought.</a></li>
								<li><a href="techniques.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Various grazing techniques that should be practiced by the farmers.</a></li>
								<li><a href="livestock-statistics.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Livestock numbers are reducing and require attention.</a></li>
								<li><a href="employment-statistics.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Employment rate are reducing and require attention.</a></li>
								<li><a href="invasive-species.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Species.</a></li>
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
						</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a style="color: #4e9525;"  href="https://colorlib.com" target="_blank">Colorlib.</a>
						| Free icons retrieved from the <a style="color: #4e9525;"  href="fonts/flaticon/license/license.html">Flaticon.</a>
						| Free images retrieved from the <a style="color: #4e9525;" href="https://unsplash.com">Unsplash</a>, <a style="color: #4e9525;" href="https://stockfreeimages.com">StockFreeImages</a>, & <a style="color: #4e9525;"  href="https://pixabay.com">Pixabay.</a></p> 
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
				</div>
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
		
		<!-- Added in Iteration 3 -->
		<script src="js/amazing-grazing/main.js"></script> <!-- Floating back to top button, scroll to anchor -->
		<script src="js/amazing-grazing/feedback.js"></script> <!-- used for feedback section -->
		<script src='https://www.google.com/recaptcha/api.js'></script> <!-- used for feedback section -->
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/venobox.min.js"></script>
		<script src="js/aos.js"></script>
		<script src="js/readMoreJS.min.js"></script>
		<script src="js/readMoreJS2.min.js"></script>
		<script type='text/javascript'>                    
			var divElement = document.getElementById('viz1602816114213');                    
			var vizElement = divElement.getElementsByTagName('object')[0];                    
			var heightIntroRightSide = $('#right-side-intro').height();
			var widthIntroRightSide = $('#right-side-intro').width();
			vizElement.style.width = '100%';

			var graphDivHeight = $('#tableau-graph').height()
			if (window.innerWidth > 1599) {
				var setHeight = widthIntroRightSide*0.7;
				console.log('Set height > ' + setHeight);
				vizElement.style.height=(graphDivHeight)+'px';
			} else if (window.innerWidth > 1439) {
				//vizElement.style.height = heightIntroRightSide + 'px';
				var setHeight = widthIntroRightSide*0.77;
				vizElement.style.height=(setHeight)+'px';
			} else if (window.innerWidth > 1199) {
				//vizElement.style.height = heightIntroRightSide + 'px';
				var setHeight = heightIntroRightSide;
				vizElement.style.height=(setHeight)+'px';
			} else if (window.innerWidth > 992) {
				//vizElement.style.height = heightIntroRightSide + 'px';
				var setHeight = heightIntroRightSide;
				vizElement.style.height=(setHeight)+'px';
			} else if (window.innerWidth > 767) {
				console.log('Screen size 767');
				var setHeight = 480;//widthIntroRightSide*0.85;
				console.log('Set height > ' + setHeight);
				vizElement.style.height=(setHeight)+'px';
			} else if (window.innerWidth > 666) {
				var setHeight = 480;//widthIntroRightSide*1.0;
				vizElement.style.height=(setHeight)+'px';
			} else if (window.innerWidth > 574) {
				var setHeight = widthIntroRightSide*1.1;
				vizElement.style.height=(setHeight)+'px';
			} else if (window.innerWidth > 374) {
				var setHeight = 600;//window.innerWidth*2.3;
				vizElement.style.height=(setHeight)+'px';
			}

			var scriptElement = document.createElement('script');                    
			scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    
			vizElement.parentNode.insertBefore(scriptElement, vizElement);                
		</script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				$readMoreJS2.init({
					target: '.d2 a',
					numOfWords: 10,
					toggle: true,
					moreLink: ' <i>read more</i>',
					lessLink: ' <i>read less</i>'
				});
							
				$('.carousel-farmer-actions').owlCarousel({
					center: true,
					loop: false,
					rewind: true,
					startPosition: 2,
					items:5,
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