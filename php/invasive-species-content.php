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
	 *  - 1) updates the spinner content on the page by retrieving it from the db and creating it.
	 *  - 2) retrieves the intro content from db
     *  - 3) retrieves preventatitve measures
     *
	 * Attributes:
	 *  - none
	 *
	 * Pre-condition:
	 *  - invasive-species.php web page executes this file on load
	 *
	 * Post-condition
	 *  - access db tables: species_spinner_text, species_landing and species_measures to retrieve spinner content, intro content, and preventative measures
	 *
	 * Return:
	 *  - $spinner_full, $species_intro, & $animal_measures can be requested by the client (invasive-species.php)
	*/

	/* ------------- 1) Spinner ------------- */
	$get_species_spinner = "SELECT species_spinner_id, species_spinner_icon, species_spinner_title, species_spinner_text FROM species_spinner";
	$species_spinner = $con -> query($get_species_spinner);
	
	$spinner_dot = '';
	$spinner_content = '';
	
	if ($species_spinner->num_rows > 0) {
		while($row = $species_spinner->fetch_assoc()) {
			$species_spinner_id = $row['species_spinner_id'];
			$species_spinner_icon = $row['species_spinner_icon'];
			$species_spinner_title = $row['species_spinner_title'];
			$species_spinner_text = $row['species_spinner_text'];
			
			if ($species_spinner_id == 1) { // the first item becomes active
				$spinner_dot = $spinner_dot . '<span class="itemDot active itemDot'.$species_spinner_id.' '.$species_spinner_icon.'" data-tab="'.$species_spinner_id.'">';
				$spinner_content = $spinner_content . '<div class="CirItem title-box active CirItem'.$species_spinner_id.'">';
			} else { // all other items are inactive
				$spinner_dot = $spinner_dot . '<span class="itemDot itemDot'.$species_spinner_id.' '.$species_spinner_icon.'" data-tab="'.$species_spinner_id.'">';
				$spinner_content = $spinner_content . '<div class="CirItem title-box CirItem'.$species_spinner_id.'">';
			};
			
			// continue the section based on the above changes
			$spinner_dot = $spinner_dot . 	'<span class="forActive"></span>'.
										  '</span>';
			
			// continue the section based on the above changes
			$spinner_content = $spinner_content . '<h2 class="title"><span>'.$species_spinner_title.'</span></h2>'.
													'<p>'.$species_spinner_text.'</p>'.
													'<i class="'.$species_spinner_icon.'"></i>'.
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
	$get_species_intro = "SELECT species_landing_id, species_landing_title, species_landing_subheading, species_landing_description, species_landing_icon, species_landing_content FROM species_landing";
	$species_intro_data = $con -> query($get_species_intro);

	$species_intro = '<div class="row justify-content-start py-5">'.
					'<div class="col-md-12 heading-section ftco-animate">';
	
	if ($species_intro_data->num_rows > 0) {
		while($row = $species_intro_data->fetch_assoc()) {
			$species_landing_id = $row['species_landing_id'];
			$species_landing_icon = $row['species_landing_icon'];
			$species_landing_content = $row['species_landing_content'];
			
			if ($species_landing_id == 1) { // retrieve title, subheading, description 
				$species_landing_title = $row['species_landing_title'];
				$species_landing_subheading = $row['species_landing_subheading'];
				$species_landing_description = $row['species_landing_description'];
				
				$species_intro = $species_intro . '<h2 class="text-xxs-center text-sm-center text-md-left">'.$species_landing_title.'</h2>'.
											'<span class="mb-4 subheading text-xxs-center text-sm-center text-md-left">'.$species_landing_subheading.'</span>'.
											'<h5 class="text-xxs-center text-sm-center text-md-left">'.$species_landing_description.'</h5>'.
											'<div class="employee-wrap">';
			}
			
			$species_intro = $species_intro . 		'<a class="employee-list"><h5>'.$species_landing_content.'</h5>'.
													'<div class="btn-custom service-color-green d-flex align-items-center justify-content-center" style="border: 3px solid red;"><span><i class="fa '.$species_landing_icon.'" aria-hidden="true"></i></span></div>'.
												'</a>';
		}
	}
	
	$species_intro = $species_intro . '</div></div></div>';
	
	/* ------------- 3) Preventative Masures ------------- */		
	$get_measures = "SELECT measures_icon, measures_type, measures_desc FROM species_measures";
	$measure_data = $con -> query($get_measures);
	
	$plants_measures = "";
	$animal_measures = "";
	
	if ($measure_data->num_rows > 0) {
		while($row = $measure_data->fetch_assoc()) {
			$measures_icon = $row['measures_icon'];
			$measures_type = $row['measures_type'];
			$measures_desc = $row['measures_desc'];
			
			if ($measures_type == "plants") {
				$plants_measures = $plants_measures . 
					'<div class="col-md-12" style="padding-top: 20px; padding-bottom: 20px; padding-left: 128px; padding-right: 20px;">'.
						'<div class="icon d-flex align-items-center justify-content-center">'.
							'<span class="'.$measures_icon.'"></span>'.
						'</div>'.
						'<div class="d2"><h5><a>'.$measures_desc.'</a></h5></div>'.
					'</div>';
			} else {
				$animal_measures = $animal_measures . 
					'<div class="col-md-12" style="padding-top: 20px; padding-bottom: 20px; padding-left: 128px; padding-right: 20px;">'.
						'<div class="icon d-flex align-items-center justify-content-center">'.
							'<span class="'.$measures_icon.'"></span>'.
						'</div>'.
						'<div class="d2"><h5><a>'.$measures_desc.'</a></h5></div>'.
					'</div>';
			}
		}
	}
?>