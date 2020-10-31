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
	 *  - called by the invasive-species.php on load
	 *  - Generates JavaScript code that goes to the bottom of the invasive-species.php page
     *  - The code is used to identify the graphs when user selects them
     *
	 * Attributes:
	 *  - none
	 *
	 * Pre-condition:
	 *  - invasive-species.php web page executes this file on load
	 *  - it should be placed directly inside the javascript at the bottom of the page
	 *
	 * Post-condition
	 *  - access db table species_types to retrieve tableau data content
	 *
	 * Return:
	 *  - $if_statement containing the if-statement code that is used to identify what graph needs to be displayed
	*/

	$get_gallery_content = "SELECT species_id, species_type, species_img, species_name,
								species_sci, species_description, spec_graph_id, 
								spec_img_src, spec_o_h_url, spec_o_name_val,
								spec_o_static_url, graph_source_url, graph_source_licence
							FROM species_types";
	$gallery_content = $con -> query($get_gallery_content);
	
	$animal_content = "";
	$plants_content = "";
	$count_if = 0;
	$if_statement = "";
	$readMoreLess = "";
	
	if ($gallery_content->num_rows > 0) {
		while($row = $gallery_content->fetch_assoc()) {
			$species_id = $row['species_id'];
			$species_type = $row['species_type'];
			$species_name = $row['species_name'];
			$spec_graph_id = $row['spec_graph_id'];
			$spec_img_src = $row['spec_img_src'];
			$spec_o_h_url = $row['spec_o_h_url'];
			$spec_o_name_val = $row['spec_o_name_val'];
			$spec_o_static_url = $row['spec_o_static_url'];
			$graph_source_url = $row['graph_source_url'];
			$graph_source_licence = $row['graph_source_licence'];
			
			if ($species_type == "plants") {
				if ($count_if == 0) { // create if statement for the tableau graph
					$if_statement = "if (this.id == '".$species_type."_".$species_id."') {".
										"var div_id = '".$spec_graph_id."';".
										"var img_src = '".$spec_img_src."';".
										"var o_h_url = '".$spec_o_h_url."';".
										"var o_name_val = '".$spec_o_name_val."';".
										"var title_name = '".$species_name."';".
										"var graph_source_url = '".$graph_source_url."';".
										"var graph_source_licence = '".$graph_source_licence."';".
										"var o_static_url = '".$spec_o_static_url."'; }";
					$count_if = 1;
				} else { // create else statement
					$if_statement = $if_statement . "else if (this.id == '".$species_type."_".$species_id."') {".
													"var div_id = '".$spec_graph_id."';".
													"var img_src = '".$spec_img_src."';".
													"var o_h_url = '".$spec_o_h_url."';".
													"var o_name_val = '".$spec_o_name_val."';".
													"var title_name = '".$species_name."';".
													"var graph_source_url = '".$graph_source_url."';".
													"var graph_source_licence = '".$graph_source_licence."';".
													"var o_static_url = '".$spec_o_static_url."'; }";
				}
			} else {
				if ($count_if == 0) { // create else statement for the tableau graph
					$if_statement = "if (this.id == '".$species_type."_".$species_id."') {".
										"var div_id = '".$spec_graph_id."';".
										"var img_src = '".$spec_img_src."';".
										"var o_h_url = '".$spec_o_h_url."';".
										"var o_name_val = '".$spec_o_name_val."';".
										"var title_name = '".$species_name."';".
										"var graph_source_url = '".$graph_source_url."';".
										"var graph_source_licence = '".$graph_source_licence."';".
										"var o_static_url = '".$spec_o_static_url."'; }";
					$count_if = 1;
				} else { // create else statement
					$if_statement = $if_statement . "else if (this.id == '".$species_type."_".$species_id."') {".
													"var div_id = '".$spec_graph_id."';".
													"var img_src = '".$spec_img_src."';".
													"var o_h_url = '".$spec_o_h_url."';".
													"var o_name_val = '".$spec_o_name_val."';".
													"var title_name = '".$species_name."';".
													"var graph_source_url = '".$graph_source_url."';".
													"var graph_source_licence = '".$graph_source_licence."';".
													"var o_static_url = '".$spec_o_static_url."'; }";
				}
			}
		}
	}
?>