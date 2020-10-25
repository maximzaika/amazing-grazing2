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
	 *  - 1) updates the introduction (right side of the graph)
	 *  - 2) retrieves the content of what the governemnt does from teh database
     *  - 3) retrieves the content of what farmers need to do the prepare themselves for drought
	 *
	 * Attributes:
	 *  - none
	 *
	 * Pre-condition:
	 *  - drought.php web page executes this file on load
	 *
	 * Post-condition
	 *  - access db tables: drought_landing, drought_government, & drought_prepare to retrieve intro, what gov. does, and what farmers should do
	 *
	 * Return:
	 *  - $drought_intro, governmentInfo, & prepareInfo can be requested by the client (drought.php.php)
	*/

	/* ------------- 1) Intro ------------- */		
	$get_drought_intro = "SELECT drought_landing_id, drought_landing_title, drought_landing_subheading, drought_landing_description, drought_landing_icon, drought_landing_content FROM drought_landing;";
	$drought_intro_data = $con -> query($get_drought_intro);

	$drought_intro = '<div class="py-5">'.
					'<div id="right-side-intro" class="heading-section ftco-animate"  style="padding-bottom: 0px;">';
	
	if ($drought_intro_data->num_rows > 0) {
		while($row = $drought_intro_data->fetch_assoc()) {
			$drought_landing_id = $row['drought_landing_id'];
			$drought_landing_icon = $row['drought_landing_icon'];
			$drought_landing_content = $row['drought_landing_content'];
			
			if ($drought_landing_id == 1) { // retrieve title, subheading, description 
				$drought_landing_title = $row['drought_landing_title'];
				$drought_landing_subheading = $row['drought_landing_subheading'];
				$drought_landing_description = $row['drought_landing_description'];
				
				$drought_intro = $drought_intro . '<h2 class="text-xxs-center text-sm-center text-md-left">'.$drought_landing_title.'</h2>'.
											'<span class="mb-4 subheading text-xxs-center text-sm-center text-md-left">'.$drought_landing_subheading.'</span>'.
											'<h5 class="text-xxs-center text-sm-center text-md-left">'.$drought_landing_description.'</h5>'.
											'<div class="employee-wrap">';
			}
			
			$drought_intro = $drought_intro . 		'<a class="employee-list"><h5>'.$drought_landing_content.'</h5>'.
													'<div class="btn-custom service-color-green d-flex align-items-center justify-content-center" style="border: 3px solid red;"><span><i class="fa '.$drought_landing_icon.'" aria-hidden="true"></i></span></div>'.
												'</a>';
		}
	}
	
	$drought_intro = $drought_intro . '</div></div></div>';
	
	/* ------------- 2) What the government does ------------- */
	$get_drought_govern = "SELECT govern_id,
								  govern_ico,
								  govern_title,
								  govern_fron_descr,
								  govern_back_descr,
								  govern_url
						  FROM drought_government;";
	$drought_govern_data = $con -> query($get_drought_govern);

	$governmentInfo = '';
	
	if ($drought_govern_data->num_rows > 0) {
		while($row = $drought_govern_data->fetch_assoc()) {
			$govern_id = $row['govern_id'];
			$govern_ico = $row['govern_ico'];
			$govern_title = $row['govern_title'];
			$govern_fron_descr = $row['govern_fron_descr'];
			$govern_back_descr = $row['govern_back_descr'];
			$govern_url = $row['govern_url'];
			
			$governmentInfo = $governmentInfo .
				'<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-3 col-xxxl-3 d-flex align-items-stretch pt-3">'.
					'<div class="card card-flip h-100 w-100">'.
						'<div class="card-front text-white">'.
							'<div class="services text-center bg-light">'.
								'<div class="icon d-flex justify-content-center align-items-center">'.
									'<span class="'.$govern_ico.'"></span>'.
								'</div>'.
									
								'<div class="text" style="padding-bottom:25px;">'.
									'<h4><b>'.$govern_title.'</b></h4>'.
									'<h5>'.$govern_fron_descr.'</h5>'.
								'</div>'.
								
								'<div class="card-custom d-flex align-items-center justify-content-center">'.
									'TAP TO VIEW'.
								'</div>'.
							'</div>'.
						'</div>'.
						
						'<div class="card-back bg-light">'.
							'<div class="card-body">'.
								'<h4 class="card-title"><b>'.$govern_title.'</b></h4>'.
								'<h5 class="card-text">'.$govern_back_descr.'</h5>'.
								'<button onclick="'."location.href='".$govern_url."'".'"'.'  type="button" class="btn btn-topic text-center btn-amazing-techniques" style="padding-left: 30px; padding-right: 30px;">Learn more</button>'.
							'</div>'.
						'</div>'.
					'</div>'.
				'</div>';
		}
	}
	
	/* ------------- 3) Prepare yourself for drought ------------- */
	$get_drought_prepare = "SELECT prepare_id,
								  prepare_img,
								  prepare_title,
								  prepare_ico,
								  prepare_text
						  FROM drought_prepare;";
	$drought_prepare_data = $con -> query($get_drought_prepare);

	$prepareInfo = '';
	
	$prevCard = ''; // keep track of cards changing
	$prevCard2 = '';// for verifying the end of the card
	$addHeader = 0;
	if ($drought_prepare_data->num_rows > 0) {
		while($row = $drought_prepare_data->fetch_assoc()) {
			$prepare_id = $row['prepare_id'];
			$prepare_img = $row['prepare_img'];
			$prepare_title = $row['prepare_title'];
			$prepare_ico = $row['prepare_ico'];
			$prepare_text = $row['prepare_text'];
			
			// check the end of the card
			// if prevCard2 isn't matching the title then it is an end
			// this is only true when prevCard2 isn't empty
			if ($prevCard2 !== $prepare_title && $prevCard2 !== '') { 
				$prepareInfo = $prepareInfo .
					'</div></div></div></div></div>';
			}
			
			// check whether prepare_img is not empty
			// in db it is empty when it is not a header
			// otherwise is a header
			if ($prepare_img !== '') {
				$prevCard = $prepare_title;
				$addHeader = 1;
				$prepareInfo = $prepareInfo .
					'<div class="item d-flex align-items-stretch">'.
						'<div class="wrap">'.
							'<div class="container measures-wrap">'.
								'<div class="row">';
			}
			
			// since we received an image, addHeader changed to 1 meaning
			// that we need to add a header and change back to 0 
			// to indicate that it is added
			if ($addHeader == 1) {
				$prepareInfo = $prepareInfo .
					'<div class="col-md-12 prevent-measures-header align-items-center justify-content-center">'.
						'<div class="hero-wrap hero-wrap2 prevent-measures-img prevent-measures-round-corners" style="background-image: url(images/'.$prepare_img.');">'.
							'<div class="overlay prevent-measures-round-corners" style="opacity: 0.2;"></div>'.
							'<div class="prevent-measures-round-corners no-gutters slider-text align-items-end justify-content-center" style="padding:0px;">'.
								'<div class="col-md-12 text-center" style="position: absolute; bottom: 18px; right: 0; left: 0;">'.
									'<h1 class="bread" style=" font-size: 30px;">'.$prepare_title.'</h1>'.
								'</div>'.
							'</div>'.
						'</div>'.
					'</div>'.
					
					'<div class="col-md-12 measures-list custom-scrollbar-css" style="height: 350px; padding: 0px; padding-top: 20px;">';
				$addHeader = 0; // change back to false to indicate that it is already there
			}
			
			// this is usually always executed when card is matching the title to
			// add the text inside it
			if ($prevCard == $prepare_title) {
				$prepareInfo = $prepareInfo .
					'<div class="col-md-12" style="padding-bottom: 20px; padding-left: 86px; padding-right: 20px;">'.
						'<div class="icon d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">'.
							'<i class="'.$prepare_ico.'" style="font-size: 35px;" aria-hidden="true"></i>'.
						'</div>'.
						'<div class="d2" style="padding-top: 5px;"><h5><a>'.$prepare_text.'</a></h5></div>'.
					'</div>';
				
				$prevCard2 = $prevCard; // for verifying the end of the card
			}	
		}
	}
?>