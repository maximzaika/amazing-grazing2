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
		
		/* ------------- 3) Controls ------------- */		
		$get_live_control = "SELECT livestock_control_type, livestock_control_type_ext, livestock_control_name FROM livestock_control";
		$live_control_data = $con -> query($get_live_control);
		
		$live_control_livestock = "";
		$live_control_year = "";
		
		if ($live_control_data->num_rows > 0) {
			while($row = $live_control_data->fetch_assoc()) {
				$livestock_control_type = $row['livestock_control_type'];
				$livestock_control_type_ext = $row['livestock_control_type_ext'];
				$livestock_control_name = $row['livestock_control_name'];
				
				if ($livestock_control_type == "livestock_") { // livestock control
					$live_control_livestock = $live_control_livestock . '<div class="col-xs-12 col-md-12" style="padding-bottom: 5px; padding-top: 5px;">';
					
					if ($livestock_control_type_ext != 'total') { // other livestocks are enabled by default so need to make it 'on'
						$live_control_livestock = $live_control_livestock . '<button id="'.$livestock_control_type.$livestock_control_type_ext.'" type="button" class="w-100 btn btn-topic btn-amazing-livestock-on update-livestock">'.$livestock_control_name.'</button>';
					} else { // total is disabled so need to make it 'off'
						$live_control_livestock = $live_control_livestock . '<button id="'.$livestock_control_type.$livestock_control_type_ext.'" type="button" class="w-100 btn btn-topic btn-amazing-livestock-off update-livestock">'.$livestock_control_name.'</button>';
					}
					
					$live_control_livestock = $live_control_livestock . '</div>';
				} else { // year control
					$live_control_year = $live_control_year . '<a id="'.$livestock_control_type.$livestock_control_type_ext.'" class="dropdown-item lvstYearPrediction" style="cursor: pointer;">'.$livestock_control_name.'</a>';
				}
			}
		}
		
		$live_control = '<h5><i class="fa fa-filter" aria-hidden="true"></i> Filter page by livestock</h5>'.
						'<button id="show-filter" class="w-100 btn btn-topic btn-amazing-livestock-on hidden d-md-none" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus" aria-hidden="true"></i> Open filter</button>'.
						'<div class="collapse dont-collapse-sm" id="collapseExample">'.
							'<div class="row mb-3">'.
								$live_control_livestock.
							'</div>'.
						'</div>'.
						'<h5><i class="fa fa-hand-o-up" aria-hidden="true"></i> Select year to predict</h5>'.
						'<div class="dropdown" >'.
							'<button id="drop-year" class="w-100 btn btn-topic btn-amazing-grazing dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">2030</button>'.
							'<div class="w-100 text-center dropdown-menu" aria-labelledby="dropdownMenuButton">'.
								$live_control_year.
							'</div>'.
						'</div>';
?>