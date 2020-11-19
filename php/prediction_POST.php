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
	 *  - called by the livestock-prediction.js when user to decides to replace the filters
     *    * related to livestock-statistics.php web page
	 *  - retrieves the card content from the database
     * 
     * Pre-condition:
	 *  - server_config.php file must be available
     *  - must be called by livestock-prediction.js's .ajax()
	 *  - db table must be available: livestock_prediction_dataset & livestock_cards
     *
	 * Post-condition:
	 *  - access livestock_prediction_dataset table to retrieve the predict values of all the livestock
     *  - access livestock_cards to retrieve the content related to the datasets
     *
	 * Return:
     *  - JSON Array containing the predicted values & card content
	*/

 	require_once "../server_config.php";
	
	$year = $_POST['selectedYear'];
	
	// Get the predicted values from the database
	$get_yrData = "SELECT predict_id, predict_year, predict_type, predict_qty FROM livestock_prediction_dataset";
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
			
			// Selected data (future)
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
			
			// Current data (today)
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
	
	echo json_encode(array("year"=>$year,
						   "current_total_qty"=>$current_total_qty));
	/*
	// Get the livestock card content from the database
	$get_cardData = "SELECT card_id, card_type, card_preview, card_title, card_text FROM livestock_cards";
	$card_Data = $con -> query($get_cardData);

	$preview_beef = array();
	$modal_beef_title = array();
	$modal_beef_text = array();
	
	$preview_dairy = array();
	$modal_dairy_title = array();
	$modal_dairy_text = array();
	
	$preview_milk = array();
	$modal_milk_title = array();
	$modal_milk_text = array();
	
	$preview_sheep = array();
	$modal_sheep_title = array();
	$modal_sheep_text = array();
	
	$preview_wool = array();
	$modal_wool_title = array();
	$modal_wool_text = array();
	
	$preview_land = array();
	$modal_land_title = array();
	$modal_land_text = array();
	
	$preview_meat = array();
	$modal_meat_title = array();
	$modal_meat_text = array();
	
	$preview_yarn = array();
	$modal_yarn_title = array();
	$modal_yarn_text = array();
	
	$preview_total = array();
	$modal_total_title = array();
	$modal_total_text = array();
	
	if ($card_Data->num_rows > 0) {
		while($row = $card_Data->fetch_assoc()) {
			$card_id = $row['card_id'];
			$card_type = $row['card_type'];
			$card_preview = $row['card_preview'];
			$card_title = $row['card_title'];
			$card_text = $row['card_text'];
			
			if ($card_type == "beef cattle") {
				array_push($preview_beef, $card_preview);
				array_push($modal_beef_title, $card_title);
				array_push($modal_beef_text, $card_text);
			} else if ($card_type == "Dairy cattle") {
				array_push($preview_dairy, $card_preview);
				array_push($modal_dairy_title, $card_title);
				array_push($modal_dairy_text, $card_text);
			} else if ($card_type == "Milk") {
				array_push($preview_milk, $card_preview);
				array_push($modal_milk_title, $card_title);
				array_push($modal_milk_text, $card_text);
			} else if ($card_type == "Sheep") {
				array_push($preview_sheep, $card_preview);
				array_push($modal_sheep_title, $card_title);
				array_push($modal_sheep_text, $card_text);
			} else if ($card_type == "Wool") {
				array_push($preview_wool, $card_preview);
				array_push($modal_wool_title, $card_title);
				array_push($modal_wool_text, $card_text);
			} else if ($card_type == "Land") {
				array_push($preview_land, $card_preview);
				array_push($modal_land_title, $card_title);
				array_push($modal_land_text, $card_text);
			} else if ($card_type == "Meat") {
				array_push($preview_meat, $card_preview);
				array_push($modal_meat_title, $card_title);
				array_push($modal_meat_text, $card_text);
			} else if ($card_type == "Yarn") {
				array_push($preview_yarn, $card_preview);
				array_push($modal_yarn_title, $card_title);
				array_push($modal_yarn_text, $card_text);
			} else { // Total
				array_push($preview_total, $card_preview);
				array_push($modal_total_title, $card_title);
				array_push($modal_total_text, $card_text);
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
						   "current_total_qty"=>$current_total_qty,
						   "preview_beef"=>implode('~',$preview_beef),
						   "modal_beef_title"=>implode('~',$modal_beef_title),
						   "modal_beef_text"=>implode('~',$modal_beef_text),
						   "preview_dairy"=>implode('~',$preview_dairy),
						   "modal_dairy_title"=>implode('~',$modal_dairy_title),
						   "modal_dairy_text"=>implode('~',$modal_dairy_text),
						   "preview_milk"=>implode('~',$preview_milk),
						   "modal_milk_title"=>implode('~',$modal_milk_title),
						   "modal_milk_text"=>implode('~',$modal_milk_text),
						   "preview_sheep"=>implode('~',$preview_sheep),
						   "modal_sheep_title"=>implode('~',$modal_sheep_title),
						   "modal_sheep_text"=>implode('~',$modal_sheep_text),
						   "preview_wool"=>implode('~',$preview_wool),
						   "modal_wool_title"=>implode('~',$modal_wool_title),
						   "modal_wool_text"=>implode('~',$modal_wool_text),
						   "preview_land"=>implode('~',$preview_land),
						   "modal_land_title"=>implode('~',$modal_land_title),
						   "modal_land_text"=>implode('~',$modal_land_text),
						   "preview_meat"=>implode('~',$preview_meat),
						   "modal_meat_title"=>implode('~',$modal_meat_title),
						   "modal_meat_text"=>implode('~',$modal_meat_text),
						   "preview_yarn"=>implode('~',$preview_yarn),
						   "modal_yarn_title"=>implode('~',$modal_yarn_title),
						   "modal_yarn_text"=>implode('~',$modal_yarn_text),
						   "preview_total"=>implode('~',$preview_total),
						   "modal_total_title"=>implode('~',$modal_total_title),
						   "modal_total_text"=>implode('~',$modal_total_text)));*/
?>