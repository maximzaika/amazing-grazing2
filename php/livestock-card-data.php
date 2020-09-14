<?php
 	require_once "../server_config.php";
	
	function retrieveLivestockCards($con, $type, $column) {
		/* Get the Token from the DB */
		$get_yrData = "SELECT card_id, card_type, card_preview, card_title, card_text FROM card_information";
		$all_years = $con -> query($get_yrData);
		
		if ($all_years->num_rows > 0) {
			while($row = $all_years->fetch_assoc()) {
				$card_id = $row['card_id'];
				$card_type = $row['card_type'];
				$card_preview = $row['card_preview'];
				$card_title = $row['card_title'];
				$card_text = $row['card_text'];
				
				if ($card_type == $type) {
					
				}
			}
		}
	}
	
?>