
<?php 
    /* Server side files */
	require_once "server_config.php";
	require_once "php/gnewsAPI.php";
	require_once "php/navigation.php";
	require_once "php/home_offerings.php";
	require_once "php/news_navigation.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Amazing Grazing - Protecting Australian Grasslands</title>
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
		
		<!-- Added in iteration 1 -->
		<link rel="stylesheet" href="css/bootstrap-datepicker.css">
		
		<!-- Added in iteration 2 -->
		<link rel="stylesheet" href="css/amazing-grazing/custom.css">
		
		<!-- Added in iteration 3 -->
		<link rel="stylesheet" href="css/amazing-grazing/feedback.css">
	</head>
	<body>		
		<!-- Navigation Bar -->
		<?php echo htmlspecialchars_decode(generateNavTabs($con, 'index.php'));?>
		<!-- End Navigation Bar -->
		
		<!-- Header -->
		<div class="mb-5 hero-wrap js-fullheight" style="background-image: url('images/index-header.jpeg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div> <!-- add the darkness to the photo -->
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h2 class="subheading"><i>Welcome to Amazing Grazing</i></h2>
						<h1>Make a difference in protecting Australian grasslands</h1>
						<p class="mb-4">By grazing and preserving your livestock</p>
						<p><a href="#offerings" class="btn btn-primary mr-md-4 py-2 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End Header -->
		
		<!-- Feedback Section -->
		<div id="feedback-sent">Feedback has been sent to our team.</div>
		<div id="feedback-captcha">Please 'check' reCAPTCHA to verify that you are a person.</div>
		<div id="feedback-not-sent">Unknown problem sending your feedback, please try again.</div>
		<div id="feedback-tab" data-toggle="modal" href="#exampleModal">Feedback</div> <!-- attach feedback to right -->
		
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  
		  <div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title font-weight-bold" style="color: #4e9525;">Feedback</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div id="feedback-form" class="modal-body">
				<h4>Did you find content useful and related to protecting Australian grasslands?</h5>
				<p style="color: black;">1 star = not useful and unrelated</p>
				<p style="color: black; margin-top: -8px;">5 stars = I found it useful</p>

				<form method="POST" action="" class="form panel-body" role="form">
					<div class="form-group">
						<div class='main text-center'>
							<i class='fa fa-star checked' style="margin-right:10px;" id='rate-1'></i>
							<i class='fa fa-star checked' style="margin-right:10px;" id='rate-2'></i>
							<i class='fa fa-star checked' style="margin-right:10px;" id='rate-3'></i>
							<i class='fa fa-star checked' style="margin-right:10px;" id='rate-4'></i>
							<i class='fa fa-star checked' style="margin-right:10px;" id='rate-5'></i>
						</div>
					</div>
					
					<p style="margin-top: 30px; color: black;">Please tell us more about your time on the site.</p>
					<div class="form-group">
					  <textarea id="form-text" maxlength="800" class="form-control" name="body" required placeholder="Please write your feedback here (maximum 800 characters)" rows="5"></textarea>
					</div>
					
					<p id="count-characters">Characters: 0<p>
					
					<div class="captcha_wrapper"><div class="g-recaptcha" data-sitekey="6LcxX9QZAAAAAB3B59tBl0Fud4a8CU_2Fu009i94"></div></div> <!-- reCAPTCHA key -->
					<br>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button class="btn btn-primary" type="submit" style="padding-left:43px; padding-right:50px;">Send</button>
					</div>
				</form>
			  </div>
			</div>
		  </div>
		</div>
		
		
		
		<!-- Section 1: Offerings -->
		<section id="offerings" class="ftco-section ftco-no-pt" style="padding-bottom: 4em;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10 justify-content-center text-center heading-section ftco-animate">
						<h2 class="mb-4">OFFERINGS</h2>
						<span class="subheading">We protect by providing</span>
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-12 services-wrap px-4">
						<div class="row pt-md-3">
						    <?php echo htmlspecialchars_decode(generateOfferings($con));?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section 1: We Protect by Providing -->
		
		<!-- Section 2: News -->
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center pb-3">
					<div class="col-md-7 heading-section text-center ftco-animate">
					    <h2>NEWS</h2>
						<span class="subheading">Your personalised latest news</span>
					</div>
				</div>
				
				<!-- News Navigation (Select topic, select start date, select region) -->
				<div class="row">
					 <?php 
					 echo htmlspecialchars_decode(generateNewsNav($con, $startDate));?>
				</div>
		
			    <hr> <!-- add horizonal line between the news and navigation -->
				
				<!-- All The news are displayed here -->
				<div id="update-news" class="row pre-scrollable">
					<?php echo htmlspecialchars_decode(newsGenerator($newsData, $totalNews));?>
				</div>
			</div>
		</section>
		<!-- End Section 2: News -->
		
		<!-- Section 3: Footer -->
		<footer class="ftco-footer ftco-bg-dark ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-5">
						<div class="ftco-footer-widget mb-4">
							<h2 class="logo"><a href="#">Why does <span>Grazing matter?</span></a></h2>
							<p class="text-justify">Livestock is playing an important role in the Australian economy.
							                        However, its numbers have been reducing yearly since the 1970s.
													The cause of it are ineffective grazing techniques, reduction of educated farmers, and droughts.
													It cannot be prevented but must be controlled.
													Objective is to educate farmers and bring awareness to everyone who has an interest in our future.</p>
						</div>
					</div>
			  
					<div class="col-md-7">
						<div class="ftco-footer-widget mb-4 ml-md-5">
							<h2 class="ftco-heading-2">Areas of interest</h2>
							<ul class="list-unstyled">
								<li><a href="news.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Stay up-to-date with recent news regarding grazing, wildfires, livestock, and drought. <u>Click to find out more.</u></a></li>
								<li><a href="techniques.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Various grazing techniques that should be practiced by the farmers. <u>Click to find out more.</u></a></li>
								<li><a href="livestock-statistics.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Livestock numbers are reducing and require attention. <u>Click to find out more.</u></a></li>
								<li><a href="employment-statistics.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Employment rate are reducing and require attention. <u>Click to find out more.</u></a></li>
								<!--<li><a href="wip.php" class="py-1 d-block text-justify"><span class="ion-ios-arrow-forward mr-3"></span>Drought tracking to predict upcoming drought seasons to preserve soil and grasslands.</a></li>-->
							</ul>
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
	  
		<!-- Added in Iteration 1 -->
		<script src="js/amazing-grazing/news-picker-detection.js"></script>
		<script src="js/amazing-grazing/news-picker.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		
		<!-- Added in Iteration 2 -->
		<script src="js/amazing-grazing/main.js"></script> <!-- Floating back to top button, scroll to anchor -->
		
		<!-- Added in Iteration 3 -->
		<script src="js/amazing-grazing/feedback.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script type='text/javascript'> <!-- Executes pop-up when updating filter & rename the filter when changed -->		
			$("#form-text").keyup(function(){
			  $("#count-characters").text('Characters: ' + $(this).val().length);
			});
		</script>
		
	</body>
</html>

<?php $con -> close(); ?>