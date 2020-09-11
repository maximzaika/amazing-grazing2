<?php
	require_once('PHPExcel.php');
	require_once "../server_config.php";
	
	function pushToDB($con, $filename, $create_sql, $insert_record) {
		$inputFile = $filename;
		$inputFileType = PHPExcel_IOFactory::identify($inputFile);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objPHPExcel = $objReader->load($inputFile);
		
		$sheet = $objPHPExcel->getSheet(0); 
		$highestRow = $sheet->getHighestRow(); 
		$highestColumn = $sheet->getHighestColumn();
		
		$column = array();
		$year_arr = array();
		$type_arr = array();
		$qty_arr = array();
		
		$index = 0;
		for ($row = 1; $row <= $highestRow; $row++){
			// set the array of data from the indexed row
			$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
			// push the data into an array (note: a-g and 0-7 reference all of the column iterations - you would need to call a and 1, through g and 7)
			$column[$index]['COLUMN_A'] = $rowData[0][0];
			$column[$index]['COLUMN_B'] = $rowData[0][1];
			$column[$index]['COLUMN_C'] = $rowData[0][2];
			
			array_push($year_arr, $column[$index]['COLUMN_A']);
			array_push($type_arr, $column[$index]['COLUMN_B']);
			array_push($qty_arr, $column[$index]['COLUMN_C']);
			
			$index = $index + 1;
		}
		
		$array_len = count($type_arr);
		
		/* Get the Token from the DB */
		for ($i=0; $i<$array_len; $i++) {
			if ($i == 0) {
				$con->query($create_sql);				
			}

			$record_sql = $insert_record .$year_arr[$i].','.
										'"'.$type_arr[$i].'",'.
										$qty_arr[$i].');';
			$con->query($record_sql);
		}
	}
	$create_original = 'CREATE TABLE livestock_dataset ('.
								'stock_id int NOT NULL AUTO_INCREMENT,'.
								'stock_year int NOT NULL,'.
								'stock_type varchar(20) NOT NULL,'.
								'stock_qty float NOT NULL,'.
								'PRIMARY KEY (stock_id)'.
							  ');';
	
	$original_sql_record = ' INSERT INTO livestock_dataset (stock_year, stock_type, stock_qty)'.
						   ' VALUES (';
						   
	$create_prediction = 'CREATE TABLE prediction_dataset ('.
								'predict_id int NOT NULL AUTO_INCREMENT,'.
								'predict_year int NOT NULL,'.
								'predict_type varchar(20) NOT NULL,'.
								'predict_qty float NOT NULL,'.
								'PRIMARY KEY (stock_id)'.
							  ');';
	
	$prediciton_sql_record = ' INSERT INTO livestock_dataset (predict_year, predict_type, predict_qty)'.
						   ' VALUES (';
								   
	pushToDB($con, "livestock_year_1973_2016.xlsx", $create_original, $record_sql);
	pushToDB($con, "livestock_year_2017_and_more.xlsx", $create_prediction, $prediciton_sql_record);
	
	
	$con -> close();
?>