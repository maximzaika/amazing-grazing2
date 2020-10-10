<?php   /* This file is called by the livestock-statistics.php file.
            */
			
		require_once "../server_config.php";
	   
		$get_gallery_content = "SELECT species_id, species_type, species_img, species_name,
                                    species_sci, species_description, spec_graph_id, 
									spec_img_src, spec_o_h_url, spec_o_name_val,
									spec_o_static_url
								FROM species_types";
		$gallery_content = $con -> query($get_gallery_content);
		
		$animal_content = "";
		$plants_content = "";
		
		if ($gallery_content->num_rows > 0) {
			while($row = $gallery_content->fetch_assoc()) {
				$species_id = $row['species_id'];
				$species_type = $row['species_type'];
				$species_img = $row['species_img'];
				$species_img = explode(";", $species_img);
				$species_name = $row['species_name'];
				$species_sci = $row['species_sci'];
				$species_description = $row['species_description'];
				$spec_graph_id = $row['spec_graph_id'];
				$spec_img_src = $row['spec_img_src'];
				$spec_o_h_url = $row['spec_o_h_url'];
				$spec_o_name_val = $row['spec_o_name_val'];
				$spec_o_static_url = $row['spec_o_static_url'];
				
				if ($species_type == "plants") {
					$plants_content = $plants_content . 
						'<div class="item bg-light">'.
							'<div class="wrap">'.
								'<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/'.$species_img[0].');"></div>'.
								'<div class="text text-center px-4">';
					
					/*if ($species_sci != '') {
						$plants_content = $plants_content . '<h3><a href="#">'.$species_name.' '.'('.$species_sci.')'.'</a></h3>';
					} else {
						$plants_content = $plants_content . '<h3><a href="#">'.$species_name.'</a></h3>';
					}*/
					$plants_content = $plants_content . '<h3><a href="#">'.$species_name.'</a></h3>';
									
					$plants_content = $plants_content .'<h5 class="dummy"><a>'.$species_description.'<a></h5>'.
														'<button id="plants_'.$species_id.'" class="btn btn-primary location-button" type="button" data-toggle="modal" data-target="#exampleModalLong">'.
															'<i class="fa fa-map-marker" aria-hidden="true"></i> Show affected areas'.
														'</button>'.
													'</div>'.
												'</div>'.
											'</div>';
				} else {					
					$animal_content = $animal_content .  
						'<div class="item bg-light">'.
							'<div class="wrap">'.
								'<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/'.$species_img[0].');"></div>'.
								'<div class="text text-center px-4">';
					
					/*if ($species_sci != '') {
						$animal_content = $animal_content . '<h3><a href="#">'.$species_name.' '.'('.$species_sci.')'.'</a></h3>';
					} else {
						$animal_content = $animal_content . '<h3><a href="#">'.$species_name.'</a></h3>';
					}	*/				
					$animal_content = $animal_content . '<h3><a href="#">'.$species_name.'</a></h3>';
					$animal_content = $animal_content .'<h5 class="dummy"><a>'.$species_description.'<a></h5>'.
														'<button id="animals_'.$species_id.'" class="btn btn-primary location-button" type="button" data-toggle="modal" data-target="#exampleModalLong">'.
															'<i class="fa fa-map-marker" aria-hidden="true"></i> Show affected areas'.
														'</button>'.
													'</div>'.
												'</div>'.
											'</div>';
				}	
			}
		}
		
		echo json_encode(array("plants"=>$plants_content,
							   "animals"=>$animal_content));
		
		
?>