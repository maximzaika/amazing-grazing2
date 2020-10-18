<?php   /* This file is called by the livestock-statistics.php file.
           1) It is updating the spinner content on the page by retrieving it from db
              and creating it.
           2) Retrieves intro content 
		   3) Filter & year control */
	    
		/* ------------- 1) Spinner ------------- */
		$get_live_spinner = "SELECT livestock_spinner_id, livestock_spinner_icon, livestock_spinner_title, livestock_spinner_text FROM livestock_spinner";
		$live_spinner = $con -> query($get_live_spinner);
		
		$spinner_dot = '';
		$spinner_content = '';
		
		if ($live_spinner->num_rows > 0) {
			while($row = $live_spinner->fetch_assoc()) {
				$livestock_spinner_id = $row['livestock_spinner_id'];
				$livestock_spinner_icon = $row['livestock_spinner_icon'];
				$livestock_spinner_title = $row['livestock_spinner_title'];
				$livestock_spinner_text = $row['livestock_spinner_text'];
				
				if ($livestock_spinner_id == 1) { // the first item becomes active
					$spinner_dot = $spinner_dot . '<span class="itemDot active itemDot'.$livestock_spinner_id.' '.$livestock_spinner_icon.'" data-tab="'.$livestock_spinner_id.'">';
					$spinner_content = $spinner_content . '<div class="CirItem title-box active CirItem'.$livestock_spinner_id.'">';
				} else { // all other items are inactive
					$spinner_dot = $spinner_dot . '<span class="itemDot itemDot'.$livestock_spinner_id.' '.$livestock_spinner_icon.'" data-tab="'.$livestock_spinner_id.'">';
					$spinner_content = $spinner_content . '<div class="CirItem title-box CirItem'.$livestock_spinner_id.'">';
				};
				
				// continue the section based on the above changes
				$spinner_dot = $spinner_dot . 	'<span class="forActive"></span>'.
											  '</span>';
				
				// continue the section based on the above changes
				$spinner_content = $spinner_content . '<h2 class="title"><span>'.$livestock_spinner_title.'</span></h2>'.
													    '<p>'.$livestock_spinner_text.'</p>'.
														'<i class="'.$livestock_spinner_icon.'"></i>'.
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
		$get_live_intro = "SELECT livestock_landing_id, livestock_landing_title, livestock_landing_subheading, livestock_landing_description, livestock_landing_icon, livestock_landing_content FROM livestock_landing";
		$live_intro_data = $con -> query($get_live_intro);

		$live_intro = '<div class="row justify-content-start py-5">'.
						'<div class="col-md-12 heading-section ftco-animate">';
		
		if ($live_intro_data->num_rows > 0) {
			while($row = $live_intro_data->fetch_assoc()) {
				$livestock_landing_id = $row['livestock_landing_id'];
				$livestock_landing_icon = $row['livestock_landing_icon'];
				$livestock_landing_content = $row['livestock_landing_content'];
				
				if ($livestock_landing_id == 1) { // retrieve title, subheading, description 
					$livestock_landing_title = $row['livestock_landing_title'];
					$livestock_landing_subheading = $row['livestock_landing_subheading'];
					$livestock_landing_description = $row['livestock_landing_description'];
					
					$live_intro = $live_intro . '<h2 class="text-xxs-center text-sm-center text-md-left">'.$livestock_landing_title.'</h2>'.
												'<span class="mb-4 subheading text-xxs-center text-sm-center text-md-left">'.$livestock_landing_subheading.'</span>'.
												'<h5 class="text-xxs-center text-sm-center text-md-left">'.$livestock_landing_description.'</h5>'.
												'<div class="employee-wrap">';
				}
				
				$live_intro = $live_intro . 		'<a class="employee-list"><h5>'.$livestock_landing_content.'</h5>'.
														'<div class="btn-custom service-color-green d-flex align-items-center justify-content-center" style="border: 3px solid red;"><span><i class="fa '.$livestock_landing_icon.'" aria-hidden="true"></i></span></div>'.
													'</a>';
			}
		}
		
		$live_intro = $live_intro . '</div></div></div>';
?>