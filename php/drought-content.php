<?php   /* This file is called by the drought.php file.
           1) Intro (the right side)
		   2) What the government does */

		/* ------------- 1) Intro ------------- */		
		$get_drought_intro = "SELECT drought_landing_id, drought_landing_title, drought_landing_subheading, drought_landing_description, drought_landing_icon, drought_landing_content FROM drought_landing";
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
		
		/* ------------- 1) What the government does ------------- */
		$get_drought_govern = "SELECT govern_id,
									  govern_ico,
									  govern_title,
									  govern_fron_descr,
									  govern_back_descr,
									  govern_url
							  FROM drought_government";
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
		
?>