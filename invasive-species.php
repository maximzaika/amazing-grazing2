<!--
 * Last Edited: 25/10/2020
 * 
 * Developed by: MC CM Team (Monash Students)
 * Project Name: Amazing Grazing
 * Project Description: Protecting Australia Grasslands by 
 *					    encouraging farmer education
 *
 * Usage:
 *  - loads the invasive species page by typing invasive-species.php in the browser
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
	require_once "php/invasive-species-content.php"; // Used to update the landing (spinner, intro, preventative measures)
	require_once "php/generate-feedback-tab.php"; // Accesses the file that generates the feedback tab
	require_once "php/invasive-species-gallery-get-js.php"; // Returns the javascript code to the bottom of the page that stores the maps from the db
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Amazing Grazing - Invasive Species</title>
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

		<!-- Added in iteration 3 -->
		<link rel="stylesheet" href="css/amazing-grazing/custom.css">
		<link rel="stylesheet" href="css/amazing-grazing/feedback.css">
	</head>
	<body>	
		<!-- Navigation Bar -->
		<?php echo htmlspecialchars_decode(generateNavTabs($con, 'invasive-species.php', ''));?>
		<!-- End Navigation Bar -->
		
		<!-- Start: Modal pops up when user clicks "Show affected areas" -->
		<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 id="modal-title-id" class="modal-title font-weight-bold" id="exampleModalLongTitle">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body" style="z-index: 1000;">
				<div id="tableau-chart" class="container" style="padding-left: 0px; padding-right: 0px;">
					<!--Graph content goes here. It gets updated based on user selection choice -->
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		<!-- End: Modal pops up when user clicks "Show affected areas" -->
		
		<!-- Section 1: Page header - Invasive Species -->
		<section class="hero-wrap hero-wrap-2" style="background-image: url('images/invasive-species-header.jpg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div> <!-- add the darkness to the photo -->
				<div class="container">
					<div class="row no-gutters slider-text align-items-end justify-content-center">
						<div class="col-md-9 ftco-animate pb-5 text-center">
							<h1 class="mb-3 bread">Invasive Species</h1>
						</div>
					</div>
				</div>
		</section>
		<!-- End Section 1: Page header - Invasive Species -->
		
		<!-- Feedback Section -->
		<?php echo htmlspecialchars_decode(feedbackRead(basename(__FILE__, '.php')));?>
		<!-- End Feedback Section -->
		
		<!-- Breadcrumbs -->
		<div class="container-fluid bg-light ftco-animate">
			<div class="container" style="padding-top: 15px;">
				<div class="row">
					<div class="col-md-12 pull-left">
						<h5 class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span><span><u><i>Invasive Species </i><i class="ion-ios-arrow-forward"></i></u></span></h5>
						<hr>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumb -->
		
		<!-- Section 2: Invasive species impact grasslands -->
		<section class="ftco-section ftco-no-pt ftco-no-pb bg-light iq-features ftco-animate">
			<div class="container">
				<div class="row ">
					<!-- Spinner containing root cause, animals, management, dangerous, species -->
					<div class="col-md-12 col-lg-7 col-xl-6 col-xxl-5 order-xxs-2 order-lg-1 align-items-center overflow-hidden hide-circle">
						<?php echo htmlspecialchars_decode($spinner_full);?>
					</div> 
					<!-- End Spinner containing root cause, animals, management, dangerous, species -->
					
					<!-- Invasive species impact grasslands section -->
					<div class="col-md-12 col-lg-5 col-xl-6 col-xxl-7 order-xxs-1 order-lg-2">
						<?php echo htmlspecialchars_decode($species_intro);?>
					</div>
					<!-- End Invasive species impact grasslands section -->
				</div>
			</div>
		</section>
		<!-- End Section 2: Invasive species impact grasslands -->
		
		<!-- Section 3: INVASIVE SPECIES & LOCATIONS -->
		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-animate sort-species">
			<div class="container">
				<div class="container" style="padding-top: 4em;">
					<div class="row justify-content-center">
						<div class="col-md-12 text-center heading-section">
							<h2>INVASIVE SPECIES & LOCATIONS</h2>
							<span class="mb-4 subheading">Plants and feral animals are considered as invasive species</span>
						</div>
					</div>
				</div>
				
				<!-- Sort -->
				<div class="row" data-aos="fade-up" data-aos-delay="150">
				  <div class="col-lg-12 d-flex justify-content-center">
					<ul id="sort-species-flters">
						<li data-filter=".filter-plants" class="filter-active">Plants</li>
					    <li data-filter=".filter-animals">Animals</li>
					</ul>
				  </div>
				</div>
				<!-- /Sort -->
				
				<!-- Gallery -->
				<div class="row sort-species-container" data-aos="fade-up" data-aos-delay="300">
					<div class="col-md-12 sort-species-item filter-animals">
						<div id="animals-content" class="carousel-species owl-carousel ftco-owl">
							<!-- animals content goes here -->
						</div>
					</div>
					<div class="col-md-12 sort-species-item filter-plants">
						<div id="plants-content" class="carousel-species owl-carousel ftco-owl">
						  <!-- plant content goes here -->
						</div>
					</div>
				</div>
				<!-- /Gallery -->
			</div>
		</section>
		<!-- End Section 3: INVASIVE SPECIES & LOCATIONS -->
		
		<!-- Section 4: PREVENTATIVE MEASURES -->
		<section class="ftco-section ftco-no-pt ftco-no-pb bg-light ftco-animate">
			<div class="container">
				<div class="container" style="padding-top: 4em;">
					<div class="row justify-content-center">
						<div class="col-md-12 text-center heading-section">
							<h2>PREVENTATIVE MEASURES</h2>
							<span class="mb-4 subheading">The following methods need to be used wisely to ensure that other aspects are not affected</span>
						</div>
					</div>
				</div>
				
				<div class="row" style="padding-bottom: 2em;">
					<div class="col-lg-12 services-wrap px-4">
						<div class="row pt-md-3">
							<div class="col-md-6">
								<div class="container measures-wrap">
									<div class="row">
										<div class="col-md-12 prevent-measures-header align-items-center justify-content-center">
											<div class="hero-wrap hero-wrap2 prevent-measures-img prevent-measures-round-corners" style="background-image: url(images/invasive-species/headers/plants-header.jpg);">
												<div class="overlay prevent-measures-round-corners" style="opacity: 0.2;"></div>
												<div class="prevent-measures-round-corners no-gutters slider-text align-items-end justify-content-center" style="padding:0px;">
													<div class="col-md-12 text-center">
														<h1 class="bread" style="line-height: 2.2;">Plants</h1>
														<a href="download/AG-preventative-measures-brochure.pdf" class="btn-download-large-screen btn btn-primary" type="button" download><i class="fa fa-download" aria-hidden="true"></i> Download</a>
														<a href="download/AG-preventative-measures-brochure.pdf" class="btn-download-small-screen btn btn-primary" type="button" download><i class="fa fa-download" aria-hidden="true"></i></a>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-md-12 measures-list custom-scrollbar-css" style="height: 350px; padding: 0px;">
											<?php echo htmlspecialchars_decode($plants_measures);?>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="container measures-wrap">
									<div class="row">
										<div class="col-md-12 prevent-measures-header align-items-center justify-content-center">
											<div class="hero-wrap hero-wrap2 prevent-measures-img prevent-measures-round-corners" style="background-image: url(images/invasive-species/headers/animals-header.jpg);">
												<div class="overlay prevent-measures-round-corners" style="opacity: 0.2;"></div>
												<div class="prevent-measures-round-corners no-gutters slider-text align-items-end justify-content-center" style="padding:0px;">
													<div class="col-md-12 text-center">
														<h1 class="bread" style="line-height: 2.2;">Animals</h1>
														<a href="download/AG-preventative-measures-brochure.pdf" class="btn-download-large-screen btn btn-primary" type="button" download><i class="fa fa-download" aria-hidden="true"></i> Download</a>
														<a href="download/AG-preventative-measures-brochure.pdf" class="btn-download-small-screen btn btn-primary" type="button" download><i class="fa fa-download" aria-hidden="true"></i></a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12 measures-list custom-scrollbar-css" style="height: 350px; padding: 0px;">
											<?php echo htmlspecialchars_decode($animal_measures);?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END Section 3: PREVENTATIVE MEASURES -->
		
		<!-- Section 4: Footer -->
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
								<li><a href="employment-statistics.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Employment rate is reducing and requires attention.</a></li>
								<li><a href="drought.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Learn drought locations, impacts, and solutions.</a></li>
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
						| Images of the plants retrieved from the <a style="color: #4e9525;"  href="https://www.anbg.gov.au/gardens/">Australian National Botanic Gardens.</a>
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
		
		<!-- jQuery to scroll up -->
		<div class="scrollToTop js-top"><a href="" class="js-gotop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></div> 
		
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
		<script src="js/amazing-grazing/animated-spinner.js"></script><!-- triggers spinner when the page is fully loaded -->	
		<script type='text/javascript'>
			/* 
				Description: initiates the execution of AOS function that initiates sorting/animations (Learn more online)
				Pre-condition:
				  - data-aos must be within the container to identify where it needs to be executed
				Post-condition
				  - used to sort the species (by plants or animals)
				Return:
				  - none, but makes a visual difference
			*/
			function aos_init() {
				AOS.init({
				  duration: 1000,
				  once: true
				});
			}
			
			/* Execute on load */
			$(window).on('load', function() {
				/* 
					Description: receive the gallery content from the database
					Pre-condition:
					  - page must be fully loaded
					  - container with ids must be on the page (where gallery will go):
						* animals-content
					    * plants-content
					Post-condition
					  - calls invasive-species-gallery.php server file to generate the gallery
					  - calls readMoreJS to enable hide/show long/short text
				      - resize the containers of the gallery to match the height (based on maximum height)
				      - initializes carousel
					  - initializes animations
                      - initializes the conversion of special characters in the graph into HTML readable format
					  - inserts the graph inside the modal based on user selection
					Return:
					  - none, but makes a visual difference
				*/
				$.ajax({
					type: "POST",
					dataType: 'json',
					url: 'php/invasive-species-gallery.php',
					data: {},
					success: function(data) {
						document.getElementById('animals-content').innerHTML = data.animals; // replace the content of the animals gallery with the content retrieved from the db
						document.getElementById('plants-content').innerHTML = data.plants; // replace the content of the plants gallery with the content retrieved from the db
						
						$(document).ready(function(){
							/* 
								Description: - calls readMoreJS.min.js file to add hide/show button to long/short text
										     - Used for the description of teh gallery text
								Pre-condition:
								  - readMoreJS.min.js needs to be called (it is custom modified to work with our website
									any other readMoreJS.min.js version is not going to function)
								  - every text that needs to be hidden/shown must contain 'dummy' id and '<a>' inside this id
								Post-condition
								  - adds hide/show button to long/short text
								Return:
								  - none, but renames the button
							*/
							$readMoreJS.init({
								target: '.dummy a',
								numOfWords: 10,
								toggle: true,
								moreLink: ' <i>read more</i>',
								lessLink: ' <i>read less</i>'
							});
							
							/* 
								Description: scan through each GALLERY card and resize based on the maximum height
								Pre-condition:
								  - origin max height must be -1 (anything below 0)
								  - card must have 'p_' class
								  - page must be refreshed each time if the screen size changes
								Post-condition
								  - scan throught 'p_' class
								  - find max height
								  - resize all the max height
								  - add extra 25 height to accomodate space for the button
								Return:
								  - none, visually change the height of each card
							*/
							var maxHeight = -1
				
							$('.p_').each(function() { // get the max height out of all plants containers
								maxHeight = maxHeight > $(this).height() ? maxHeight :     $(this).height();
							});
							
							maxHeight = maxHeight+25; // increase height to provide enough space for the bottom button
							
							
							$('.p_').each(function() { // change the height of all plants containers to max
							   $(this).height(maxHeight);
							 });
							 
							var maxHeight = -1
							
							/* 
								Description: scan through each GALLERY card and resize based on the maximum height
								Pre-condition:
								  - origin max height must be -1 (anything below 0)
								  - card must have 'a_' class
								  - page must be refreshed each time if the screen size changes
								Post-condition
								  - scan throught 'a_' class
								  - find max height
								  - resize all the max height
								  - add extra 25 height to accomodate space for the button
								Return:
								  - none, visually change the height of each card
							*/
							$('.a_').each(function() { // get the max height out of all animals containers
								maxHeight = maxHeight > $(this).height() ? maxHeight :     $(this).height();
							});
							
							maxHeight = maxHeight+25; // increase height to provide enough space for the bottom button
							
							$('.a_').each(function() { // change the height of all animals containers to max
							   $(this).height(maxHeight);
							 });
							
							$('.filter-active').click(); // trigger the click of the filter just to resize the whole gallery container
						});

						/* 
							Description: executes the carousel for the seasonal grazing technique page ONLY
							Pre-condition:
							  - carousel must have class 'carousel-species'
							  - js/owl.carousel.min.js file MUST BE executed
							Post-condition
							  - send the attributes to the owl.carousel.min.js
							Return:
							  - none, but carousel needs to be functional
						*/
						$('.carousel-species').owlCarousel({
							center: false,
							loop: false,
							rewind: true,
							items:5,
							margin: 30,
							stagePadding: 0,
							mouseDrag: false,
							nav: true,
							navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
							responsive:{
								0:{
									items: 1,
									startPosition: 1
								},
								600:{
									items: 2,
									startPosition: 0
								},
								1000:{
									items: 3,
									startPosition: 0
								},
								1600:{
									items: 4,
									startPosition: 0
								}
							}
						});
						
						//----- Start initiates the animations required for the filter (Plants/Feral Animals) -----//
						var portfolioIsotope = $('.sort-species-container').isotope({
						  itemSelector: '.sort-species-item'
						});

						$('#sort-species-flters li').on('click', function() {
						  $("#sort-species-flters li").removeClass('filter-active');
						  $(this).addClass('filter-active');

						  portfolioIsotope.isotope({
							filter: $(this).data('filter')
						  });
						  aos_init();
						});
						
						$('.venobox').venobox({
							'share': false
						  });
						
						aos_init();
						//----- End initiates the animations required for the filter (Plants/Feral Animals) -----//
						
						/* 
							Description: converts special chars "&#47" to "/" to make it a tableau URL
							Pre-condition:
							  - must be called the .ajax() triggered by the button "SHOW GRAPH" with id "hide-graph"
							Attributes:
							  - str: string sent by the .ajax() retrieved from the database table
							Post-condition
							  - replaces "&#47" withj "/"
							Return:
							  - clean URL string back to $("#hide-graph").click(function())
						*/
						function specialToHTML(str) {
							return str.replaceAll("&#47;", "/");
						}
						
						/* 
							Description: display the graph selected by the user
							Pre-condition:
							  - the modal container must have an id "tableau-chart" which indicates where the graph needs to go
							  - php file php/invasive-species-gallery-get-js.php must be read on page load
							Attributes:
							  - none
							Post-condition
							 - creates the graph with the data received from the php file 
							Return:
							  - graph
						*/
						$(".location-button").click(function() {
							$("#tableau-chart").empty(); // clear the char just in case there is something inside there (usually after user clicks the button 2nd time)
							
							<?php echo htmlspecialchars_decode($if_statement);?> // if statatements that push the graph content to the page
							
							//----- Start Container for the tableau graph -----//
							var div = document.createElement('div');
							div.classList.add('tableauPlaceholder');
							div.setAttribute('id', div_id);
							div.setAttribute('style', 'position: relative; width:100%;');
							
							// add noscript
							var noscript = document.createElement('noscript');
							div.appendChild(noscript); // add to element
							
								// add a href
								var noscript_a = document.createElement('a');
								noscript_a.setAttribute('href', '#');
								noscript.appendChild(noscript_a);
							
									// add img
									var noscript_img = document.createElement('img');
									noscript_img.setAttribute('alt', ' ');
									noscript_img.setAttribute('src', specialToHTML(img_src));
									noscript_img.setAttribute('style', 'border: none');
									noscript_a.appendChild(noscript_img);
							
							// add object
							var table_object = document.createElement('object');
							table_object.classList.add('tableauViz');
							table_object.setAttribute('style', 'display:none;');
							div.appendChild(table_object);
							
								// add params - host_url
								var o_host_url = document.createElement('param');
								o_host_url.setAttribute('name', 'host_url');
								o_host_url.setAttribute('value', o_h_url);
								table_object.appendChild(o_host_url);
								
								// add params - embed_code_version
								var o_embed_code_version = document.createElement('param');
								o_embed_code_version.setAttribute('name', 'embed_code_version');
								o_embed_code_version.setAttribute('value', '3');
								table_object.appendChild(o_embed_code_version);
								
								// add params - site_root
								var o_site_root = document.createElement('param');
								o_site_root.setAttribute('name', 'site_root');
								o_site_root.setAttribute('value', '');
								table_object.appendChild(o_site_root);
								
								// add params - name
								var o_name = document.createElement('param');
								o_name.setAttribute('name', 'name');
								o_name.setAttribute('value', specialToHTML(o_name_val));
								table_object.appendChild(o_name);
								
								// add params - tabs
								var o_tabs = document.createElement('param');
								o_tabs.setAttribute('name', 'tabs');
								o_tabs.setAttribute('value', 'no');
								table_object.appendChild(o_tabs);
								
								// add params - toolbar
								var o_toolbar = document.createElement('param');
								o_toolbar.setAttribute('name', 'toolbar');
								o_toolbar.setAttribute('value', 'yes');
								table_object.appendChild(o_toolbar);
								
								// add params - static_image
								var o_static_image = document.createElement('param');
								
								o_static_image.setAttribute('name', 'static_image');
								o_static_image.setAttribute('value', specialToHTML(o_static_url));
								table_object.appendChild(o_static_image);
								
								// add params - animate_transition
								var o_animate_transition = document.createElement('param');
								o_animate_transition.setAttribute('name', 'animate_transition');
								o_animate_transition.setAttribute('value', 'yes');
								table_object.appendChild(o_animate_transition);
								
								// add params - display_static_image
								var o_display_static_image = document.createElement('param');
								o_display_static_image.setAttribute('name', 'display_static_image');
								o_display_static_image.setAttribute('value', 'yes');
								table_object.appendChild(o_display_static_image);
								
								// add params - display_spinner
								var o_display_spinner = document.createElement('param');
								o_display_spinner.setAttribute('name', 'display_spinner');
								o_display_spinner.setAttribute('value', 'yes');
								table_object.appendChild(o_display_spinner);
								
								// add params - display_overlay
								var o_display_overlay = document.createElement('param');
								o_display_overlay.setAttribute('name', 'display_overlay');
								o_display_overlay.setAttribute('value', 'yes');
								table_object.appendChild(o_display_overlay);
								
								// add params - display_count
								var o_display_count = document.createElement('param');
								o_display_count.setAttribute('name', 'display_count');
								o_display_count.setAttribute('value', 'yes');
								table_object.appendChild(o_display_count);
								
								// add params - language
								var o_language = document.createElement('param');
								o_language.setAttribute('name', 'language');
								o_language.setAttribute('value', 'en');
								table_object.appendChild(o_language);
								
								// add params - filter
								var o_filter = document.createElement('param');
								o_filter.setAttribute('name', 'filter');
								o_filter.setAttribute('value', 'publish=yes');
								table_object.appendChild(o_filter);
							
							$("#modal-title-id").text(title_name);
							document.getElementById("tableau-chart").appendChild(div); // add graph to the modal
							//----- End Container for the tableau graph -----//
							
							//----- Start create the source link from the database -----//
							var create_Source = document.createElement('h5');
							create_Source.classList.add('text-center');
							var full_source = "Source: <i><u><b><a href='"+graph_source_url+"'>"+graph_source_licence+"</a></b></u></i>";
							create_Source.innerHTML = full_source;
							document.getElementById("tableau-chart").appendChild(create_Source); // add graph to the modal
							//----- End create the source link from the database -----//
							
							//----- Start Execute the tableau graph -----//
							var divElement = document.getElementById(div_id);                    
							var vizElement = divElement.getElementsByTagName('object')[0]; 
							vizElement.style.width='100%';
							vizElement.style.height=(500)+'px';		
							var scriptElement = document.createElement('script');      
							scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';   
							vizElement.parentNode.insertBefore(scriptElement, vizElement);
							//----- End Execute the tableau graph -----//
						});
					}, 
					error: (error) => { // receive error from the server if any error with receiving php content
						console.log(JSON.stringify(error));
					}
				});
			});  
			
			/* 
				Description: calls readMoreJS2.min.js file to add hide/show button to long/short text
							 The second one is used for the "PREVENTATIVE MEASURES"
				Pre-condition:
				  - page must be loaded
				  - readMoreJS2.min.js needs to be called (it is custom modified to work with our website
					any other readMoreJS.min.js version is not going to function)
				  - every text that needs to be hidden/shown must contain 'd2' id and '<a>' inside this id
				Post-condition
				  - adds hide/show button to long/short text
				Return:
				  - none, but renames the button
			*/
			$(document).ready(function(){
				$readMoreJS2.init({
					target: '.d2 a',
					numOfWords: 10,
					toggle: true,
					moreLink: ' <i>read more</i>',
					lessLink: ' <i>read less</i>'
				});
			});
		</script>
	</body>
</html>

<?php $con -> close(); ?>