<?php
 	require_once "../server_config.php";

	$year = $_POST['selectedYear'];
	
	/* Get the Token from the DB */
	$get_yrData = "SELECT predict_id, predict_year, predict_type, predict_qty FROM prediction_dataset";
	$all_years = $con -> query($get_yrData);
	
	$selected_beef_qty = 0;
	$selected_dairy_qty = 0;
	$selected_sheep_qty = 0;
	$selected_total_qty = 0;
	
	$current_beef_qty = 0;
	$current_dairy_qty = 0;
	$current_sheep_qty = 0;
	$current_total_qty = 0;
	if ($all_years->num_rows > 0) {
		while($row = $all_years->fetch_assoc()) {
			$predict_id = $row['predict_id'];
			$predict_yr = $row['predict_year'];
			$predict_type = $row['predict_type'];
			$predict_qty = $row['predict_qty'];
			
			/* Selected data (future) */
			if (($predict_type == "Beef cattle") && ($year == $predict_yr)) {
				$selected_beef_qty = $predict_qty;
			}
			
			if (($predict_type == "Dairy cattle") && ($year == $predict_yr)) {
				$selected_dairy_qty = $predict_qty;
			}
			
			if (($predict_type == "Sheep") && ($year == $predict_yr)) {
				$selected_sheep_qty = $predict_qty;
			}
			
			if (($predict_type == "Total") && ($year == $predict_yr)) {
				$selected_total_qty = $predict_qty;
			}
			
			/* Current data (today) */
			if (($predict_type == "Beef cattle") && (date("Y") == $predict_yr)) {

				$current_beef_qty = $predict_qty;
			}
			
			if (($predict_type == "Dairy cattle") && (date("Y") == $predict_yr)) {
				
				$current_dairy_qty = $predict_qty;
			}
			
			if (($predict_type == "Sheep") && (date("Y") == $predict_yr)) {
				$current_sheep_qty = $predict_qty;
				
			}
			
			if (($predict_type == "Total") && (date("Y") == $predict_yr)) {
				$current_total_qty = $predict_qty;
				
			}
		}
	}
	
	echo json_encode(array("selected_beef_qty"=>$selected_beef_qty, 
						   "selected_dairy_qty"=>$selected_dairy_qty,
						   "selected_sheep_qty"=>$selected_sheep_qty,
						   "selected_total_qty"=>$selected_total_qty,
						   "current_beef_qty"=>$current_beef_qty,
						   "current_dairy_qty"=>$current_dairy_qty,
						   "current_sheep_qty"=>$current_sheep_qty,
						   "current_total_qty"=>$current_total_qty)); /* Encode back into the json and send to the javascript, which will push the data to the HTML */
?>