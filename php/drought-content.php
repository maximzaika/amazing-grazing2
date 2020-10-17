<?php   /* This file is called by the drought.php file.
           1) Intro (the right side)
		   2) */

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
		
			
		
?>