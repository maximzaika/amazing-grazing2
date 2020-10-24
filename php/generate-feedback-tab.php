<?php
	/*
	 * Last Edited: 25/10/2020
	 *
	 * Developed by: MC CM Team (Monash Students)
	 * Project Name: Amazing Grazing
	 * Project Description: Protecting Australia Grasslands by 
	 *                      encouraging farmer education
	 *
	 * Description::
	 *  - generates the feedback html code to be displayed on the page
	 *
	 * Attributes:
	 *  - $page_received: file page name
	 *
	 * Pre-condition:
	 *  - called by any of the following web pages:
	 *    * index.php
	 *    * employment-statistics.php
	 *    * livestock-statistics.php
	 *    * techniques.php
	 *    * drought.php
	 *    * invasive-species.php
	 *  - must be called within the page itself
	 * Post-condition
	 *  - generate full HTML code into $feedback_form variable
	 * Return:
	 *  - $feedback_form HTML code
	*/
	
	function feedbackRead($page_received) {
		$page_received = $page_received.'.php';
		$feedback_form = 
			'<div id="feedback-sent">Feedback has been sent to our team.</div>'.
			'<div id="feedback-captcha">Please check reCAPTCHA to verify that you are a person.</div>'.
			'<div id="feedback-not-sent">Unknown problem sending your feedback, please try again.</div>'.
			'<div id="feedback-tab" class="" data-toggle="modal" href="#feedback-modal">Feedback</div>'.
			
			'<div class="modal fade" id="feedback-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">'.
				'<div class="modal-dialog modal-dialog-centered" role="document">'.
					'<div class="modal-content">'.
						'<div class="modal-header">'.
							'<h5 class="modal-title font-weight-bold" style="color: #4e9525;">Feedback</h5>'.
							'<button type="button" class="close" data-dismiss="modal" aria-label="Close">'.
								'<span aria-hidden="true">&times;</span>'.
							'</button>'.
						'</div>'.
						'<div id="feedback-form" class="modal-body">'.
							'<h4>Did you find content useful and related to protecting Australian grasslands?</h5>'.
							'<p style="color: black;">1 star = not useful and unrelated</p>'.
							'<p style="color: black; margin-top: -8px;">5 stars = I found it useful</p>'.
							
							'<form method="POST" action="" class="form panel-body" role="form">'.
								'<div class="form-group">'.
									'<div class="main text-center">'.
										'<i class="fa fa-star checked" style="margin-right:10px;" id="rate-1"></i>'.
										'<i class="fa fa-star checked" style="margin-right:10px;" id="rate-2"></i>'.
										'<i class="fa fa-star checked" style="margin-right:10px;" id="rate-3"></i>'.
										'<i class="fa fa-star checked" style="margin-right:10px;" id="rate-4"></i>'.
										'<i class="fa fa-star checked" style="margin-right:10px;" id="rate-5"></i>'.
									'</div>'.
								'</div>'.
								
								'<p style="margin-top: 30px; color: black;">Please tell us more about your time on the site.</p>'.
								'<div class="form-group">'.
									'<textarea id="form-text" maxlength="800" class="form-control" name="body" required placeholder="Please write your feedback here (maximum 800 characters)" rows="5"></textarea>'.
									'<div id="page-received" class="'.$page_received.'" style="visibility: hidden;"></div>'.
								'</div>'.
								
								'<p id="count-characters">Characters: 0<p>'.
								
								'<div class="captcha_wrapper"><div class="g-recaptcha" data-sitekey="6LcxX9QZAAAAAB3B59tBl0Fud4a8CU_2Fu009i94"></div></div>'.
								'<br>'.
								
								'<div class="modal-footer">'.
									'<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'.
									'<button class="btn btn-primary" type="submit" style="padding-left:43px; padding-right:50px;">Send</button>'.
								'</div>'.
							'</form>'.
						'</div>'.
					'</div>'.
				'</div>'.
			'</div>';
		
		return $feedback_form;
	}
?>