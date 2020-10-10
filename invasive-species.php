
<?php 
    /* Server side files */
	require_once "server_config.php"; // Accesses to the database
	require_once "php/navigation.php"; // Updates the navigation bar
	require_once "php/invasive-species-content.php"; // Used to update the landing (spinner, intro, filter & year controls)
	require_once "php/generate-feedback-tab.php"; // Accesses the file that generates the feedback tab
	require_once "php/invasive-species-gallery-get-js.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Amazing Grazing - Invasive Species</title>
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
		<!--<link rel="stylesheet" href="css/venobox.css">
		<link rel="stylesheet" href="css/aos.css">-->

		<!-- Added in iteration 2 -->
		<link rel="stylesheet" href="css/amazing-grazing/custom.css">
		
		<!-- Added in iteration 2 -->
		<link rel="stylesheet" href="css/amazing-grazing/custom.css">
		
		<!-- Added in iteration 3 -->
		<link rel="stylesheet" href="css/amazing-grazing/feedback.css">
	</head>
	<body>	
		<!-- Navigation Bar -->
		<?php echo htmlspecialchars_decode(generateNavTabs($con, 'invasive-species.php'));?>
		<!-- End Navigation Bar -->
		
		<!-- Section 1: Page header - Livestock Statistics -->
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
		<!-- End Section 1: Page header - Livestock Statistics -->
		
		<!-- Feedback Section -->
		<?php echo htmlspecialchars_decode(feedbackRead(basename(__FILE__, '.php')));?>
		<!-- End Feedback Section -->
		
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
						<?php echo htmlspecialchars_decode($spinner_full);?>
					</div> 
					<!-- End Spinner containing livestock, beef, milk, wool, land use -->
					
					<!-- Livestock reducting impacts grasslands section -->
					<div class="col-md-12 col-lg-5 col-xl-6 col-xxl-7">
						<?php echo htmlspecialchars_decode($live_intro);?>
					</div>
					<!-- End Livestock reducting impacts grasslands section -->
				</div>
			</div>
		</section>
		
		
		<!-- Modal -->
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
				<div id="tableau-chart" class="container" style="padding-left: 0px; padding-right: 0px;"> <!-- added -->
					<!--<div class='tableauPlaceholder' id='viz1599895574623'>
						<noscript><a href='#'><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;sheep1973-2030&#47;SheepNumbersfrom1973to2030&#47;1_rss.png' style='border: none' /></a>
						</noscript>
						<object class='tableauViz'  style='display:none;'>
							<param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> 
							<param name='embed_code_version' value='3' /> 
							<param name='site_root' value='' />
							<param name='name' value='sheep1973-2030&#47;SheepNumbersfrom1973to2030' />
							<param name='tabs' value='no' />
							<param name='toolbar' value='yes' />
							<param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;sheep1973-2030&#47;SheepNumbersfrom1973to2030&#47;1.png' /> 
							<param name='animate_transition' value='yes' />
							<param name='display_static_image' value='yes' />
							<param name='display_spinner' value='yes' />
							<param name='display_overlay' value='yes' />
							<param name='display_count' value='yes' />
							<param name='language' value='en' />
							<param name='filter' value='publish=yes' />
						</object>
					</div>-->
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		
		
		<!-- Section 3: DOMINANT LIFESTOCK IS DRASTICALLY REDUCING -->
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
				
				<!-- Button trigger modal -->
				

				<div class="row" data-aos="fade-up" data-aos-delay="150">
				  <div class="col-lg-12 d-flex justify-content-center">
					<ul id="sort-species-flters">
						<li data-filter=".filter-plants" class="filter-active">Plants</li>
					    <li data-filter=".filter-animals">Feral Animals</li>
					</ul>
				  </div>
				</div>
				
				<div class="row sort-species-container" data-aos="fade-up" data-aos-delay="300">
					<div class="col-md-12 sort-species-item filter-animals">
						<div id="animals-content" class="carousel-species owl-carousel ftco-owl">
							
						  
						</div>
					</div>
					
					<div class="col-md-12 sort-species-item filter-plants">
						
						<div id="plants-content" class="carousel-species owl-carousel ftco-owl">
						  
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section 3: Page header - Livestock is reducing -->
		
		<!--<section class="ftco-section ftco-no-pt ftco-no-pb ftco-animate sort-species">
			<div class="container">
				<div class="container" style="padding-top: 4em;">
					<div class="row justify-content-center">
						<div class="col-md-12 text-center heading-section">
							<h2>INVASIVE SPECIES & LOCATIONS</h2>
							<span class="mb-4 subheading">Filter invasive species by type</span>
						</div>
					</div>
				</div>
				
				
				

				<div class="row" data-aos="fade-up" data-aos-delay="150">
				  <div class="col-lg-12 d-flex justify-content-center">
					<ul id="sort-species-flters">
						<li data-filter=".filter-plants" class="filter-active">Plants</li>
					    <li data-filter=".filter-animals">Animals</li>
					</ul>
				  </div>
				</div>
				
				<div class="row sort-species-container" data-aos="fade-up" data-aos-delay="300">
					<div class="col-md-12 sort-species-item filter-animals">
						<div id="animals-content22" class="carousel-species owl-carousel ftco-owl">
							
							
						  <div class="item bg-light">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/employment-statistics.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="#">Animals</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									
									<button id="animals" class="btn btn-primary location-button" type="button" data-toggle="modal" data-target="#exampleModalLong">
										<i class="fa fa-map-marker" aria-hidden="true"></i> Show affected areas
									</button>
								</div>
							</div>
						  </div>
						  
						  <div class="item bg-light">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/employment-statistics.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="#">Animals</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
										<i class="fa fa-map-marker" aria-hidden="true"></i> Show affected areas
									</button>
								</div>
							</div>
						  </div>
						  
						  <div class="item bg-light">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/livestock-statistics.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="#">Fall</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						  </div>
						  
						  <div class="item bg-light">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/news-php-header.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="#">Fall</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						  </div>
						  
						  <div class="item bg-light">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/news-php-header.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="#">Fall</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						  </div>
						  
						</div>
					</div>
					
					<div class="col-md-12 sort-species-item filter-plants">
						
						<div id="plants-content" class="carousel-species owl-carousel ftco-owl">
						  
						  <div class="item bg-light">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/employment-statistics.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="#">Plants</a></h3>
									
									<h5 class="dummy"><a>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.<a></h5>
									
									
									<button id="plants" class="btn btn-primary location-button" type="button" data-toggle="modal" data-target="#exampleModalLong">
										<i class="fa fa-map-marker" aria-hidden="true"></i> Show affected areas
									</button>
								</div>
							</div>
						  </div>
						  
						  <div class="item bg-light">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/index-header.jpeg);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="#">Summer</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						  </div>
						  
						  <div class="item bg-light">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/invasive-species-header.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="#">Winter</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						  </div>
						  
						  <div class="item bg-light">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/livestock-statistics.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="#">Fall</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						  </div>
						  
						  <div class="item bg-light">
							<div class="wrap">
								<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/news-php-header.jpg);">
								</div>
								<div class="text text-center px-4">
									<h3><a href="#">Fall</a></h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</section>-->
		
		
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
						</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a style="color: #4e9525;"  href="https://colorlib.com" target="_blank">Colorlib.</a>
						<br>
						Most of the images of plants retrieved from the <a style="color: #4e9525;"  href="https://www.anbg.gov.au/gardens/">Australian National Botanic Gardens.</a>
						<br>
						Free icons retrieved from the <a style="color: #4e9525;"  href="fonts/flaticon/license/license.html">Flaticon.</a>
						<br>
						Free images retrieved from the <a href="https://unsplash.com">Unsplash</a>, <a href="https://stockfreeimages.com">StockFreeImages</a>, & <a style="color: #4e9525;"  href="https://pixabay.com">Pixabay.</a></p> 
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
		
		<!-- Added in Iteration 2 -->
		<script src="js/amazing-grazing/main.js"></script> <!-- Floating back to top button, scroll to anchor -->
		<script src="js/amazing-grazing/counterup.min.js"></script>		
		
		
		<!-- Added in Iteration 3 -->
		<script src="js/amazing-grazing/feedback.js"></script> <!-- used for feedback section -->
		<script src='https://www.google.com/recaptcha/api.js'></script> <!-- used for feedback section -->
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/venobox.min.js"></script>
		<script src="js/aos.js"></script>
		<!--<script src="js/amazing-grazing/invasive-species-gallery.js"></script>-->
		<script src="js/readMoreJS.min.js"></script>
		<script type='text/javascript'> <!-- triggers changes when the page is fully loaded only -->
			function aos_init() {
				AOS.init({
				  duration: 1000,
				  once: true
				});
			  }
			  
			
			
			$(window).on('load', function() {
				$.ajax({
					type: "POST",
					dataType: 'json',
					url: 'php/invasive-species-gallery.php',
					data: {},
					success: function(data) {
						document.getElementById('animals-content').innerHTML = data.animals;
						document.getElementById('plants-content').innerHTML = data.plants;
						
						/* Calls the readMore function to enable hide/show the of the images */
						$(document).ready(function(){
							$readMoreJS.init({
								target: '.dummy a',
								numOfWords: 10,
								toggle: true,
								moreLink: ' <i>read more</i>',
								lessLink: ' <i>read less</i>'
							});
						});

						/* Initiates owl carousel */
						$('.carousel-species').owlCarousel({
							center: true,
							loop: true,
							items:1,
							margin: 30,
							stagePadding: 0,
							mouseDrag: true,
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
						
						/* Initiates the animations required for the sort */
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
						
						$('.filter-active').click(); // trigger the click of the filter
						
						$('.venobox').venobox({
							'share': false
						  });
						
						aos_init();
						
						
						
						function specialToHTML(str) {
							return str.replaceAll("&#47;", "/");
						}
						
						$(".location-button").click(function() {
							$("#tableau-chart").empty();
							
							console.log(this.id);
							
							<?php echo htmlspecialchars_decode($if_statement);?>
							
							/*if (this.id == 'plants') {
								console.log('clicked button id > ' + this.id);
								var div_id = 'viz1599912357011';
								var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016&#47;1_rss.png';
								var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
								var o_name_val = 'beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016';
								var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2016&#47;BeefCattleNumbersfrom1973to2016&#47;1.png';
							} else {
								console.log('clicked button id > ' + this.id);
								var div_id = 'viz1599895069661';
								var img_src = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1_rss.png';
								var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
								var o_name_val = 'beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030';
								var o_static_url = 'https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;be&#47;beefcattle1973-2030&#47;BeefCattleNumbersfrom1973to2030&#47;1.png';
							}*/
							
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
							
							// Create the source link from the database
							var create_Source = document.createElement('h5');
							create_Source.classList.add('text-center');
							var full_source = "<i><u><b><a href='"+graph_source_url+"'>"+graph_source_licence+"</a></b></u></i>";
							create_Source.innerHTML = full_source;
							document.getElementById("tableau-chart").appendChild(create_Source); // add graph to the modal
							
							// Execute the tableau graph
							var divElement = document.getElementById(div_id);                    
							var vizElement = divElement.getElementsByTagName('object')[0]; 
							vizElement.style.width='100%';
							vizElement.style.height=(500)+'px';		
							var scriptElement = document.createElement('script');      
							scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';   
							vizElement.parentNode.insertBefore(scriptElement, vizElement);
						});
					}, 
					error: (error) => {
						console.log(JSON.stringify(error));
					}
				});
			});  
			
			
			/*$(window).on('load', function() {
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
				
				$('.filter-active').click(); // trigger the click of the filter

				// Initiate venobox (lightbox feature used in portofilo)
				$(document).ready(function() {
				  $('.venobox').venobox({
					'share': false
				  });
				});
			  });
			 
			// Init AOS
			  function aos_init() {
				AOS.init({
				  duration: 1000,
				  once: true
				});
			  }
			  $(window).on('load', function() {
				aos_init();
			  });*/
			
			$(document).ready(function(){
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
		
	</body>
</html>

<?php $con -> close(); ?>