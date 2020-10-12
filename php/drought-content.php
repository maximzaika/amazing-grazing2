<?php   /* This file is called by the drought.php file.
           1) It is updating the spinner content on the page by retrieving it from db
              and creating it.
           2) Retrieves intro content 
		   3) Preventative measures */
	    
		/* ------------- 1) Spinner ------------- */
		$get_drought_spinner = "SELECT drought_spinner_id, drought_spinner_icon, drought_spinner_title, drought_spinner_text FROM drought_spinner";
		$drought_spinner = $con -> query($get_drought_spinner);
		
		$spinner_dot = '';
		$spinner_content = '';
		
		if ($drought_spinner->num_rows > 0) {
			while($row = $drought_spinner->fetch_assoc()) {
				$drought_spinner_id = $row['drought_spinner_id'];
				$drought_spinner_icon = $row['drought_spinner_icon'];
				$drought_spinner_title = $row['drought_spinner_title'];
				$drought_spinner_text = $row['drought_spinner_text'];
				
				if ($drought_spinner_id == 1) { // the first item becomes active
					$spinner_dot = $spinner_dot . '<span class="itemDot active itemDot'.$drought_spinner_id.' '.$drought_spinner_icon.'" data-tab="'.$drought_spinner_id.'">';
					$spinner_content = $spinner_content . '<div class="CirItem title-box active CirItem'.$drought_spinner_id.'">';
				} else { // all other items are inactive
					$spinner_dot = $spinner_dot . '<span class="itemDot itemDot'.$drought_spinner_id.' '.$drought_spinner_icon.'" data-tab="'.$drought_spinner_id.'">';
					$spinner_content = $spinner_content . '<div class="CirItem title-box CirItem'.$drought_spinner_id.'">';
				};
				
				// continue the section based on the above changes
				$spinner_dot = $spinner_dot . 	'<span class="forActive"></span>'.
											  '</span>';
				
				// continue the section based on the above changes
				$spinner_content = $spinner_content . '<h2 class="title"><span>'.$drought_spinner_title.'</span></h2>'.
													    '<p>'.$drought_spinner_text.'</p>'.
														'<i class="'.$drought_spinner_icon.'"></i>'.
													  '</div>';
			}
		}
		
		// full section contanining all the data required for execution
		$spinner_full = '<div class="holderCircle">'.
							'<div class="round"></div>'.
							'<div class="dotCircle">'.
								$spinner_dot.
							'</div>'.
							'<div class="contentCircle">'.
								$spinner_content.
							'</div>'.
						'</div>';
		

		/* ------------- 2) Intro ------------- */		
		$get_drought_intro = "SELECT drought_landing_id, drought_landing_title, drought_landing_subheading, drought_landing_description, drought_landing_icon, drought_landing_content FROM drought_landing";
		$drought_intro_data = $con -> query($get_drought_intro);

		$drought_intro = '<div class="row justify-content-start py-5">'.
						'<div class="col-md-12 heading-section ftco-animate">';
		
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
		
		/* ------------- 3) Preventative Masures ------------- */		
		
?>