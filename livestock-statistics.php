<!--
 * Last Edited: 25/10/2020
 * 
 * Developed by: MC CM Team (Monash Students)
 * Project Name: Amazing Grazing
 * Project Description: Protecting Australia Grasslands by 
 *					    encouraging farmer education
 *
 * Usage:
 *  - loads the livestock statistics page by typing livestock-statistics.php in the browser
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
	require_once "php/livestock-statistics-content.php"; // Used to update the landing (spinner, intro, filter & year controls)
	require_once "php/generate-feedback-tab.php"; // Accesses the file that generates the feedback tab
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Amazing Grazing - Livestock Statistics</title>
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
		<?php echo htmlspecialchars_decode(generateNavTabs($con, 'Statistics', 'livestock-statistics.php'));?>
		<!-- End Navigation Bar -->

		<!-- Start: Modal pops up when user clicks "Display Graph" -->
		<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 id="modal-title-id" class="modal-title font-weight-bold" id="exampleModalLongTitle">Graph</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body" style="z-index: 1000;">
				<h5><i>Note: livestock selection is based on the options selected before</i></h5>
				<div id="tableau-chart2" class="container" style="padding-left: 0px; padding-right: 0px;">
					<!--Graph content goes here. It gets updated based on user selection choice -->
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		<!-- End: Modal pops up when user clicks "Display Graph" -->
		
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
		
		<!-- Feedback Section -->
		<?php echo htmlspecialchars_decode(feedbackRead(basename(__FILE__, '.php')));?>
		<!-- End Feedback Section -->
		
		<!-- Breadcrumbs -->
		<div class="container-fluid bg-light ftco-animate">
			<div class="container" style="padding-top: 15px;">
				<div class="row">
					<div class="col-md-12 pull-left">
						<h5 class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span><span><u><i>Livestock Stats </i><i class="ion-ios-arrow-forward"></i></u></span></h5>
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
					<div class="col-md-12 col-lg-7 col-xl-6 col-xxl-5 order-xxs-2 order-lg-1 align-items-center overflow-hidden hide-circle">
						<?php echo htmlspecialchars_decode($spinner_full);?>
					</div> 
					<!-- End Spinner containing livestock, beef, milk, wool, land use -->
					
					<!-- Livestock reducting impacts grasslands section -->
					<div class="col-md-12 col-lg-5 col-xl-6 col-xxl-7 order-xxs-1 order-lg-2">
						<?php echo htmlspecialchars_decode($live_intro);?>
					</div>
					<!-- End Livestock reducting impacts grasslands section -->
				</div>
			</div>
		</section>
		
		
		<!-- Section 3: CONSEQUENCES OF LIVESTOCK REDUCTION IN THE FUTURE -->
		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-animate sort-livestock" style="z-index:2;">
			<!-- Title and subheading of this section -->
			<div class="container" style="padding-top: 4em;">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center heading-section">
						<h2>CONSEQUENCES OF LIVESTOCK REDUCTION IN THE FUTURE</h2>
						<span class="mb-4 subheading">View the graph and analysis based on livestock and year selected</span>
					</div>
				</div>
			</div>
			<!-- End Title and subheading of this section -->
			
			<div class="container">
				<div class="row">
					   <div class="col-xxs-12 col-md-4 col-lg-3 col-xl-3 col-xxl-2 col-xxxl-2 order-xxs-2 order-md-1 order-lg-1">
							<ul id="sort-livestock-flters">
								<li id="hide-graph" type="button" class="btn-amazing-livestock-off" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-line-chart"></i> Display graph</li>
							</ul>
					   </div>
					   
					   <div class="col-xxs-12 col-md-7 col-lg-8 col-xl-7 col-xxl-8 col-xxxl-8 order-xxs-1 order-md-2 order-lg-2 d-flex justify-content-center">
							<ul id="sort-livestock-flters">
								<li id="livestock_beef" class="btn-amazing-livestock-on update-livestock">Beef cattle</li>
								<li id="livestock_dairy" class="btn-amazing-livestock-on update-livestock">Dairy cattle</li>
								<li id="livestock_sheep" class="btn-amazing-livestock-on update-livestock">Sheep</li>
								<li id="livestock_total" class="btn-amazing-livestock-off update-livestock">Total</li>
								
								<li id="drop-year" data-filter=".filter-total" class="dropdown dropdown-toggle" style="color: white; background-color: #4e9525" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">2030</li>
								<div class="text-center dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a id="y_2030" class="dropdown-item lvstYearPrediction" style="cursor: pointer;">2030</a>
									<a id="y_2040" class="dropdown-item lvstYearPrediction" style="cursor: pointer;">2040</a>
									<a id="y_2050" class="dropdown-item lvstYearPrediction" style="cursor: pointer;">2050</a>
									<a id="y_2060" class="dropdown-item lvstYearPrediction" style="cursor: pointer;">2060</a>
								</div>
							</ul>
					  </div>
				</div>
			</div>
			
			<!-- Card section -->
			<div class="container" style="padding-bottom: 3em;">
				<div id="prediction-data" class="carousel-services owl-carousel ftco-owl pt-md-3"> 
					<!-- this part gets replaced by the javascript to update the year-->
				</div>
			</div>
			<!-- End Card section -->
		</section>
		<!-- End Section 3: Page header - CONSEQUENCES OF LIVESTOCK REDUCTION IN THE FUTURE -->
		
		
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
								<li><a href="employment-statistics.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Employment rate is reducing and requires attention.</a></li>
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
				
				<div id="update-notification">Graph & page content are updated.</div> <!-- show a notification when user changes the filter/prediction to let them know of the update -->
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
		<script src="js/amazing-grazing/animated-spinner.js"></script><!-- triggers spinner when the page is fully loaded -->	
		<script type='text/javascript'> <!-- triggers changes when the page is fully loaded only -->
			var execute_once = 0; // make sure that the upper notification bar is not appearring when user makes changes to the filter
			
			/* 
				Description: trigger card update when year is selected (only after page is fully loaded)
				Pre-condition:
				  - the year drop down menu must have an id "drop-year"
				Post-condition
				  - takes the year selected (its text), added extension "y_" infront
                    and triggers item with id "#y_XXXX" for it to execute.
                  - changes the execute_once to 1 to enable the notification of the page update (by default it is disabled)
				Return:
				  - none, but resizes visually
			*/
			$(document).ready(function(){
				var yearContent = document.getElementById("drop-year").textContent;
				var selectedYear = "#y_"+yearContent;
				$(selectedYear).trigger("click");
				execute_once++;
			});
		
			/* 
				Description: controls the execution of the notification when user changes prediction year/filter
				Pre-condition:
				  - the notification bar must have an id "update-notification"
				Post-condition
				  - adds class "show" to display it on the page
                  - removes the class "show" 2 seconds after to hide the notification
				Return:
				  - none, but visually shows/hides a notification
			*/
			$(".lvstYearPrediction").click(function() {
				if (execute_once > 0) {
					var x = document.getElementById("update-notification");
					x.className = "show";
					setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
				}
			});
		
			var clickedCard = [];
			var maximumHeight = '';
			var countClick = 0;
			
			/* 
				Description: Tracks the height of the card to make it same when the card is not expanded
				Pre-condition:
				  - called by the invisible span button within each container that has a unique ID
				Attributes:
                  - cardID: unique id of the card coming from the invisible <span> button within the card
				Post-condition
				  - gets the maximum height of all the cards
                  - sets the height of all the cards to maximum height
                  - removes the height of the card where "+ View Suggestion" button is clicked, and 
                    then adds back the maximum high if "+ View Suggestion" is clicked the second time
				Return:
				  - none, but visually shows/hides a notification
			*/
			function removeHeight(cardID) {
				if (countClick == 0) {
					maximumHeight = ($('#'+cardID).css('height').substr(0,3)); // get the original height
					countClick++;
				}
				
				if (clickedCard.includes(cardID)) { // need to hide it by including the original height
					setTimeout(function() { // delay the exucution to let the animation to go through
						$('#'+cardID).css('height',maximumHeight); // set original height back
					}, 200);
					
					const index = clickedCard.indexOf(cardID); // get index of the card in array
					clickedCard.splice(index, 1); // remove the card from the array
				} else { //remove the original height
					$('#'+cardID).css('height',''); // remove the original height
					clickedCard.push(cardID); // add to currently open card list
				};
			};
		
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
				Description: Receive the graph selected by the user
				Pre-condition:
				  - the button "SHOW GRAPH" with id "hide-graph" must be clicked
                  - all the filters must have btn-amazing-livestock-on or btn-amazing-livestock-off classes
                    that indicate whether filter is active or not
				Attributes:
                  - none
				Post-condition
				 - calls php/livestock-graph.php file to generate the graph on the page
				 - classifies clicked button by true, while unclicked button by false:
                    * example if BEEF CATTLE DAIRY CATTLE SHEEP are active and TOTAL is inactive:
                      -- true true true false
                  - usues .ajax() to send the above true/false condition to the database, which
                    contains the graphs and the conditions for comparison as well. If condition match
                    then db sends the record to .ajax() and then .ajax() converts this data to
                    HTML readable graph and sends back to the client (livestock-statisics.php)
				Return:
				  - graph
				  - server error
			*/
			$("#hide-graph").click(function() {
				$("#tableau-chart2").empty();
				
				var class_on  = 'btn-amazing-livestock-on';
				var checkActive = [];
				var buttons = ['#livestock_beef', '#livestock_dairy', '#livestock_sheep', '#livestock_total'];
				
				for (i = 0; i < 4; i++) {
					checkActive.push($(buttons[i]).hasClass(class_on));
				}
				
				/* Explanation of check_active
				
				false false false false
				 - shows error preventing the user from deselecting all the graphs

				(beef) (dairy) (sheep) (total)
				true   false   false    false
				false  true    false    false
				false  false   true     false
				true   false   true     false
				true   true    false    false
				false  true    true     false
				
				true   true    true     false 
				
				false  false   false    true
				 - No other options allowed together with total
				*/
				
				check_active = checkActive[0] + " " + checkActive[1] + " " + checkActive[2] + " " + checkActive[3];
				
				var yearContent = document.getElementById("drop-year").textContent;
				
				$.ajax({ // receive the gallery content from the database
					type: "POST",
					dataType: 'json',
					url: 'php/livestock-graph.php',
					data: {activeYear: yearContent,
					       activeLivestock: check_active},
					success: function(data) {
						var div_id = data.div_id;
						var img_src = data.img_src;
						var o_name_val = data.o_name_val;
						var o_static_url = data.o_static_url;
						var o_h_url = 'https%3A%2F%2Fpublic.tableau.com%2F';
						
						// add div
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
						
						document.getElementById("tableau-chart2").appendChild(div); // add to the webpage
						
						//----- Start create the source link from the database -----//
						var create_Source = document.createElement('h5');
						create_Source.classList.add('text-center');
						var full_source = "Source: <i><u><b><a href='https://data.gov.au/dataset/ds-dga-1f3da692-f0cf-4de4-a7d3-bae52d600bae/details'>ABARES, Agricultural Commodity Statistics 2017</a></b></u></i>";
						create_Source.innerHTML = full_source;
						document.getElementById("tableau-chart2").appendChild(create_Source); // add graph to the modal
						//----- End create the source link from the database -----//
						
						var divElement = document.getElementById(div_id);                    
						var vizElement = divElement.getElementsByTagName('object')[0]; 
						vizElement.style.width='100%';
						vizElement.style.height=(500)+'px';		
						var scriptElement = document.createElement('script');      
						scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';   
						vizElement.parentNode.insertBefore(scriptElement, vizElement);
					}, 
					error: (error) => { // receive error from the server if any error with receiving php content
						console.log(JSON.stringify(error));
					}
				});
			});
		</script>
		
		<!-- Added in Iteration 3 -->
		<script src="js/amazing-grazing/feedback.js"></script> <!-- used for feedback section -->
		<script src='https://www.google.com/recaptcha/api.js'></script> <!-- used for feedback section -->
	</body>
</html>

<?php $con -> close(); ?>