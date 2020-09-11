<?php
 	require_once "../server_config.php";

	
	$year = $_POST['receivedYear'];
	
	/* Get the Token from the DB */
	$get_yrData = "SELECT techn_id, beef_yr, beef_no FROM test_beef";
	$all_years = $con -> query($get_yrData);
	
	$selected_year = 0;
	$latest_year = 0;
	if ($all_years->num_rows > 0) {
		while($row = $all_years->fetch_assoc()) {
			$techn_id = $row['techn_id'];
			$beef_yr = $row['beef_yr'];
			$beef_no = $row['beef_no'];
			
			if ($year == $beef_yr) {
				$selected_year = $beef_no;
			}
			
			if ($beef_yr == 2016) {
				$latest_year = $beef_no;
			}
		}
	}
	
	echo json_encode(array("selYr"=>$selected_year, 'latestYr'=>$latest_year)); /* Encode back into the json and send to the javascript, which will push the data to the HTML */
?>