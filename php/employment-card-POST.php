<?php
 	require_once "../server_config.php";
	
	$active = $_POST['active'];
	
	$ext = 'thousand';
	$changeText = 'hello world';

	$icon_man = 'flaticon-man';		
	$icon_farmer = 'flaticon-farmer';
	$icon_agriculture = 'flaticon-agriculture';
	$icon_mortarboard = 'flaticon-mortarboard';
	$icon_age = 'flaticon-age';
	
	$icon_same = "fa-dot-circle-o";
	$icon_good = "fa-arrow-circle-up";
	$icon_bad = "fa-arrow-circle-down";
	$icon_warning = "fa-exclamation-circle";
	
	$all_cards = "";
	$modals = "";
	
	$URL = 'techniques.php';
	if ($active == 'e-beef') {
		$stock = 'Beef Cattle Farmers';
	}
	
	if ($active == 'e-dairy') {
		$stock = 'Dairy Cattle Farmers';
	}
	
	if ($active == 'e-sheep') {
		$stock = 'Sheep Farmers';
	}
	
	// --------------------------------- Number of Farmers in 2011 ---------------------------------
	$sql_state_beef_2011 = "SELECT SUM(emp_state_numb) FROM emp_state WHERE emp_state_year = '2011' and emp_state_type = '".$stock."';";
	$beef_state_2011_tb = $con -> query($sql_state_beef_2011);
	
	if ($beef_state_2011_tb->num_rows > 0) {
		while($row = $beef_state_2011_tb->fetch_assoc()) {
			$beef_state_2011 = round($row['SUM(emp_state_numb)'],0);
		}
	}
	
	$sql_state_beef_2016 = "SELECT SUM(emp_state_numb) FROM emp_state WHERE emp_state_year = '2016' and emp_state_type = '".$stock."';";
	$beef_state_2016_tb = $con -> query($sql_state_beef_2016);
	
	if ($beef_state_2016_tb->num_rows > 0) {
		while($row = $beef_state_2016_tb->fetch_assoc()) {
			$beef_state_2016 = round($row['SUM(emp_state_numb)'],0);
		}
	}
	
	if ($beef_state_2016 < $beef_state_2011) {
		$icon = $icon_warning;

		$beef_state_2011 = round($beef_state_2011 / 1000, 0);
		$beef_state_2016 = round($beef_state_2016 / 1000, 0);
		$beef_state_diff = $beef_state_2011 - $beef_state_2016;
	}
	
	$random_button = '_' . rand(10,1000) . '_button'; // Creates the ID of each button to make it unique
	
	// Initializes the card creation
	$all_cards = $all_cards . '<div style="padding-bottom:40px;" class="col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 col-xxxl-4 align-items-stretch animated fadeInLeft">'.
							   '<div class="services text-center" style="padding-bottom: 10px; height:100%;">'.
							     '<div class="icon justify-content-center align-items-center">'.
								   '<span class="'.$icon_farmer.'"></span>'.
								 '</div>'.
								 
								 '<div class="text" style="padding-bottom:60px;">'.
								   '<h4><b>'.$stock.' in</b></h4>'.
								   '<hr>'.
								   '<div class="container">'.
										'<div class="row">'.
											'<div class="col-sm-12 col-md-6">'.
												'<h4><b>2011</b></h4>'.
												'<h5><span data-toggle="counter-up">'.$beef_state_2011.'</span> '.$ext.'</h5>'.
											'</div>'.
											'<div class="col-sm-12 col-md-6">'.
												'<h4><b>2016</b></h4>'.
												'<h5><span data-toggle="counter-up">'.$beef_state_2016.'</span> '.$ext.'</h5>'.
											'</div>'.
										'</div>'.
									'</div>'.
									'<hr>'.
									'<h5 class="text-center"><i class="fa '.$icon.'" aria-hidden="true"></i> Reduced by <span data-toggle="counter-up">'.$beef_state_diff.'</span> '.$ext.'.</h5>'.
									'<h5 class="text-center"><i class="fa '.$icon_good.'" aria-hidden="true"></i> Challenge free career.</h5>'.
									'<hr>'.
									'<div class="container">'.
										'<div class="row">'.
											'<ul style="margin-bottom:0px;">';
	
	$farmer_data = "SELECT farmer_url, farmer_url2,  farmer_card, farmer_text, farmer_modal_title, farmer_modal_text FROM emp_cards WHERE farmer_card = 'Farmer'";
	$get_farmer_data = $con -> query($farmer_data);
	
	if ($get_farmer_data->num_rows > 0) {
		$countFarmer = 0;
		while($row = $get_farmer_data->fetch_assoc()) {
			$farmer_url = $row['farmer_url'];
			$farmer_url2 = $row['farmer_url2'];
			$farmer_card = $row['farmer_card'];
			$farmer_text = $row['farmer_text'];
			$farmer_modal_title = $row['farmer_modal_title'];
			$farmer_modal_text = $row['farmer_modal_text'];
			
			if ($countFarmer == 0) { // Initializes the first line of text
				$all_cards = $all_cards . '<li><h5 class="text-justify">'.$farmer_text.'</h5></li>';
			} 

			if ($countFarmer == 1) { // Initializes the show statistics button that leads to livestock statistics page
				$all_cards = $all_cards . '<li><h5 class="text-justify">'.$farmer_text." <a type='button' style='color:#4e9525;cursor:pointer;' href='".$farmer_url."'><u><b><i> Show statistics</i></b></u></a>".'</h5></li>';
			}
			$countFarmer++;
		}
	}										
											
	$all_cards = $all_cards .				'</ul>'.
											'<div class="collapse" id="'.$random_button.'">'.
												'<ul>';
	
	$modal_content = "";
	
	$farmer_data = "SELECT farmer_url, farmer_url2,  farmer_card, farmer_text, farmer_modal_title, farmer_modal_text FROM emp_cards WHERE farmer_card = 'Farmer'";
	$get_farmer_data = $con -> query($farmer_data);
	
	if ($get_farmer_data->num_rows > 0) {
		$countFarmer = 0;
		while($row = $get_farmer_data->fetch_assoc()) {
			$random_modal = '_' . rand(10,1000) . '_modal';
			$farmer_url = $row['farmer_url'];
			$farmer_url2 = $row['farmer_url2'];
			$farmer_card = $row['farmer_card'];
			$farmer_text = $row['farmer_text'];
			$farmer_modal_title = $row['farmer_modal_title'];
			$farmer_modal_text = $row['farmer_modal_text'];
			
			if ($countFarmer > 1) {
				//$all_cards = $all_cards . '<li><h5 class="text-justify">'.$farmer_text.'</h5></li>';
				$modal_content = $modal_content . '<li><h5 class="text-justify">'.$farmer_text.'</h5></li>';
				
				/*$all_cards = $all_cards . '<li><h5 class="text-justify">'.$farmer_text." <a type='button' style='color:#4e9525;cursor:pointer;' data-toggle='modal' data-target='#".$random_modal."'><u><b><i>Learn more</i></b></u></a>".'</h5></li>';*/
				
			} else {
				$countFarmer++;
			}
		}
		$modals = $modals . '<div class="modal fade" id="'.$random_modal.'" tabindex="-1" role="dialog"  aria-labelledby="'.$random_modal.'Label" aria-hidden="true">'.
										'<div class="modal-dialog modal-xl modal-dialog-centered" role="document">'.
											'<div class="modal-content">'.
												'<div class="modal-header">'.
													'<h5 class="modal-title" id="'.$random_modal.'Label"><b>'.$stock.'</b></h5>'.
													'<button type="button" class="close" data-dismiss="modal" aria-label="Close">'.
													'<span aria-hidden="true">&times;</span>'.
												'</button>'.
											'</div>'.
											'<div class="modal-body">'.
											    '<ul>'.
													$modal_content.
												'</ul>'.
											'</div>'.
											'<div class="modal-footer">'.
												'<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'.
											'</div>'.
										'</div>'.
									'</div>'.
								'</div>';
	}	
													
	$all_cards = $all_cards .                 '</ul>'.
											'</div>'.
										'</div>'.
									'</div>'.
								  '</div>'.
								  //'<a class="btn-custom align-items-center justify-content-center" style="width: 180px; cursor: pointer;" data-toggle="collapse" data-target="#'.$random_button.'" aria-expanded="false" aria-controls="state-2011-2016"><span><i class="fa fa-expand" aria-hidden="true"></i> View suggestions</span></a>'.
									'<a class="btn-custom align-items-center justify-content-center" style="width: 180px; cursor: pointer;" data-toggle="modal" data-target="#'.$random_modal.'"><span><i class="fa fa-expand" aria-hidden="true"></i> View suggestions</span></a>'.
								'</div>'.
							  '</div>';
	
	// --------------------------------- Highest qualification 2011 ---------------------------------
	$sql_educ_beef_2011 = "SELECT emp_educ_qual, 
	                              emp_educ_numb,
								  emp_educ_perc 
						   FROM emp_education 
						   WHERE emp_educ_numb = (
									SELECT MAX(emp_educ_numb) 
									FROM emp_education 
									WHERE emp_educ_year = '2011' and 
									emp_educ_type = '".$stock."');";
	$beef_educ_2011_tb = $con -> query($sql_educ_beef_2011);
	
	if ($beef_educ_2011_tb->num_rows > 0) {
		while($row = $beef_educ_2011_tb->fetch_assoc()) {
			$beef_educ_2011_qual = $row['emp_educ_qual']; // highest 2011 qualification
			$beef_educ_2011_numb = $row['emp_educ_numb']; // highest 2011 qualification
			$beef_educ_2011_perc = $row['emp_educ_perc']; // highest 2011 qualification
		}
	}
	
	$sql_educ_beef_2016 = "SELECT emp_educ_qual, 
	                              emp_educ_numb,
								  emp_educ_perc
						   FROM emp_education 
						   WHERE emp_educ_numb = (
									SELECT MAX(emp_educ_numb) 
									FROM emp_education 
									WHERE emp_educ_year = '2016' and 
									emp_educ_type = '".$stock."');";
	$beef_educ_2016_tb = $con -> query($sql_educ_beef_2016);
	
	if ($beef_educ_2016_tb->num_rows > 0) {
		while($row = $beef_educ_2016_tb->fetch_assoc()) {
			$beef_educ_2016_qual = $row['emp_educ_qual']; // highest 2016 qualification
			$beef_educ_2016_numb = $row['emp_educ_numb']; // highest 2016 qualification
			$beef_educ_2016_perc = $row['emp_educ_perc']; // highest 2016 qualification
		}
	}

	$random_button = '_' . rand(10,1000) . '_button';
	
	$all_cards = $all_cards . '<div style="padding-bottom:40px;" class="col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 col-xxxl-4 align-items-stretch animated fadeInLeft">'. // col-xs-12 col-sm-12 col-md-6
							   '<div class="services text-center" style="padding-bottom: 10px; height:100%;">'.
							     '<div class="icon justify-content-center align-items-center">'.
								   '<span class="'.$icon_mortarboard.'"></span>'.
								 '</div>'.
								 
								 '<div class="text" style="padding-bottom:60px;">'.
								   '<h4><b>Highest Qualification in</b></h4>'.
								   '<hr>'.
								   '<div class="container">'.
										'<div class="row">'.
											'<div class="col-sm-12 col-md-6">'.
												'<h4><b>2011</b></h4>'.
												'<h5>'.$beef_educ_2016_qual.'</h5>'.
											'</div>'.
											'<div class="col-sm-12 col-md-6">'.
												'<h4><b>2016</b></h4>'.
												'<h5>'.$beef_educ_2016_qual.'</h5>'.
											'</div>'.
										'</div>'.
									'</div>'.
									'<hr>'.
									
									'<h5 class="text-center"><i class="fa '.$icon_warning.'" aria-hidden="true"></i> Current qualification is poor.</h5>'.
									'<h5 class="text-center"><i class="fa '.$icon_good.'" aria-hidden="true"></i> The best chance to advance the career.</h5>'.
									'<hr>'.
									'<div class="container">'.
										'<div class="row">'.
											'<ul style="margin-bottom:0px;">';
	
	$farmer_data = "SELECT farmer_url, farmer_url2,  farmer_card, farmer_text, farmer_modal_title, farmer_modal_text FROM emp_cards WHERE farmer_card = 'Education'";
	$get_farmer_data = $con -> query($farmer_data);
	
	if ($get_farmer_data->num_rows > 0) {
		$countFarmer = 0;
		while($row = $get_farmer_data->fetch_assoc()) {
			$random_modal = '_' . rand(10,1000) . '_modal';
			$farmer_url = $row['farmer_url'];
			$farmer_url2 = $row['farmer_url2'];
			$farmer_card = $row['farmer_card'];
			$farmer_text = $row['farmer_text'];
			$farmer_modal_title = $row['farmer_modal_title'];
			$farmer_modal_text = $row['farmer_modal_text'];
			
			if ($countFarmer == 0) {
				$all_cards = $all_cards . '<li><h5 class="text-justify">'.$farmer_text.'</h5></li>';
			} 

			if ($countFarmer == 1) {
				$all_cards = $all_cards . '<li><h5 class="text-justify">'.$farmer_text." <a type='button' style='color:#4e9525;cursor:pointer;' href='".$farmer_url."'><u><b><i> Show statistics</i></b></u></a>".'</h5></li>';
				
			}
			
			$countFarmer++;
		}
	}							
	
	$all_cards = $all_cards .			'</ul>'.
											'<div class="collapse" id="'.$random_button.'">'.
												'<ul>';
												
	$farmer_data = "SELECT farmer_url, farmer_url2,  farmer_card, farmer_text, farmer_modal_title, farmer_modal_text FROM emp_cards WHERE farmer_card = 'Education'";
	$get_farmer_data = $con -> query($farmer_data);
	
	if ($get_farmer_data->num_rows > 0) {
		$countFarmer = 0;
		while($row = $get_farmer_data->fetch_assoc()) {
			$farmer_url = $row['farmer_url'];
			$farmer_url2 = $row['farmer_url2'];
			$farmer_card = $row['farmer_card'];
			$farmer_text = $row['farmer_text'];
			$farmer_modal_title = $row['farmer_modal_title'];
			$farmer_modal_text = $row['farmer_modal_text'];
			
			if ($countFarmer > 1) {
				/*$all_cards = $all_cards . '<li><h5 class="text-justify">'.$farmer_text.'</h5></li>';*/
				$modal_content = $modal_content . '<li><h5 class="text-justify">'.$farmer_text.'</h5></li>';
				/*$all_cards = $all_cards . '<li><h5 class="text-justify">'.$farmer_text." <a type='button' style='color:#4e9525;cursor:pointer;' data-toggle='modal' data-target='#".$random_modal."'><u><b><i>Learn more</i></b></u></a>".'</h5></li>';*/
			} else {
				$countFarmer++;
			}
		}
		$modals = $modals . '<div class="modal fade" id="'.$random_modal.'" tabindex="-1" role="dialog"  aria-labelledby="'.$random_modal.'Label" aria-hidden="true">'.
										'<div class="modal-dialog modal-xl modal-dialog-centered" role="document">'.
											'<div class="modal-content">'.
												'<div class="modal-header">'.
													'<h5 class="modal-title" id="'.$random_modal.'Label"><b>Qualification</b></h5>'.
													'<button type="button" class="close" data-dismiss="modal" aria-label="Close">'.
													'<span aria-hidden="true">&times;</span>'.
												'</button>'.
											'</div>'.
											'<div class="modal-body">'.
												'<ul>'.
													$modal_content.
												'</ul>'.
											'</div>'.
											'<div class="modal-footer">'.
												'<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'.
											'</div>'.
										'</div>'.
									'</div>'.
								'</div>';
	}		
	
													
	$all_cards = $all_cards .					'</ul>'.
											'</div>'.
										'</div>'.
									'</div>'.
								  '</div>'.
								  //'<a class="btn-custom align-items-center justify-content-center" style="width: 180px; cursor: pointer;" data-toggle="collapse" data-target="#'.$random_button.'" aria-expanded="false" aria-controls="state-2011-2016"><span><i class="fa fa-expand" aria-hidden="true"></i> View suggestions</span></a>'.
									'<a class="btn-custom align-items-center justify-content-center" style="width: 180px; cursor: pointer;" data-toggle="modal" data-target="#'.$random_modal.'"><span><i class="fa fa-expand" aria-hidden="true"></i> View suggestions</span></a>'.
								'</div>'.
							  '</div>';
							  
							  
							  
	// --------------------------------- Age group 2011 ---------------------------------
	$sql_age_beef_2011 = "SELECT emp_age_age as '15-44', 
	                             emp_age_numb,
								 emp_age_perc
						   FROM emp_age 
						   WHERE emp_age_year = '2011' and 
						         emp_age_type = '".$stock."';";
	$beef_age_2011_tb = $con -> query($sql_age_beef_2011);
	$beef_age_2011_15_44 = 0;
	$beef_age_2011_44_65 = 0;
	$beef_age_2011_15_44_perc = 0;
	$beef_age_2011_44_65_perc = 0;
	
	if ($beef_age_2011_tb->num_rows > 0) {
		while($row = $beef_age_2011_tb->fetch_assoc()) {
			$beef_age_2011_age = $row['15-44']; // highest 2016 qualification
			$beef_age_2011_numb = $row['emp_age_numb']; // highest 2016 qualification
			$beef_age_2011_perc = $row['emp_age_perc']; // highest 2016 qualification
			
			if ($beef_age_2011_age == '15-19') {
				$beef_age_2011_15_44 = $beef_age_2011_15_44 + $beef_age_2011_numb;
				$beef_age_2011_15_44_perc = $beef_age_2011_15_44_perc + $beef_age_2011_perc;
			} else if ($beef_age_2011_age == '20-24') {
				$beef_age_2011_15_44 = $beef_age_2011_15_44 + $beef_age_2011_numb;
				$beef_age_2011_15_44_perc = $beef_age_2011_15_44_perc + $beef_age_2011_perc;
			} else if ($beef_age_2011_age == '25-34') {
				$beef_age_2011_15_44 = $beef_age_2011_15_44 + $beef_age_2011_numb;
				$beef_age_2011_15_44_perc = $beef_age_2011_15_44_perc + $beef_age_2011_perc;
			} else if ($beef_age_2011_age == '35-44') {
				$beef_age_2011_15_44 = $beef_age_2011_15_44 + $beef_age_2011_numb;
				$beef_age_2011_15_44_perc = $beef_age_2011_15_44_perc + $beef_age_2011_perc;
			} else if ($beef_age_2011_age == '45-54') {
				$beef_age_2011_44_65 = $beef_age_2011_44_65 + $beef_age_2011_numb;
				$beef_age_2011_44_65_perc = $beef_age_2011_44_65_perc + $beef_age_2011_perc;
			} else if ($beef_age_2011_age == '55-59') {
				$beef_age_2011_44_65 = $beef_age_2011_44_65 + $beef_age_2011_numb;
				$beef_age_2011_44_65_perc = $beef_age_2011_44_65_perc + $beef_age_2011_perc;
			} else if ($beef_age_2011_age == '60-64') {
				$beef_age_2011_44_65 = $beef_age_2011_44_65 + $beef_age_2011_numb;
				$beef_age_2011_44_65_perc = $beef_age_2011_44_65_perc + $beef_age_2011_perc;
			} else if ($beef_age_2011_age == '65 and Over') {
				$beef_age_2011_44_65 = $beef_age_2011_44_65 + $beef_age_2011_numb;
				$beef_age_2011_44_65_perc = $beef_age_2011_44_65_perc + $beef_age_2011_perc;
			}
		}
	}
	
	// Age group 2016
	$sql_age_beef_2016 = "SELECT emp_age_age as '15-44', 
	                             emp_age_numb,
								 emp_age_perc
						   FROM emp_age 
						   WHERE emp_age_year = '2016' and 
						         emp_age_type = '".$stock."';";
	$beef_age_2016_tb = $con -> query($sql_age_beef_2016);
	$beef_age_2016_15_44 = 0;
	$beef_age_2016_44_65 = 0;
	$beef_age_2016_15_44_perc = 0;
	$beef_age_2016_44_65_perc = 0;
	
	if ($beef_age_2016_tb->num_rows > 0) {
		while($row = $beef_age_2016_tb->fetch_assoc()) {
			$beef_age_2016_age = $row['15-44']; // highest 2016 qualification
			$beef_age_2016_numb = $row['emp_age_numb']; // highest 2016 qualification
			$beef_age_2016_perc = $row['emp_age_perc']; // highest 2016 qualification
			
			if ($beef_age_2016_age == '15-19') {
				$beef_age_2016_15_44 = $beef_age_2016_15_44 + $beef_age_2016_numb;
				$beef_age_2016_15_44_perc = $beef_age_2016_15_44_perc + $beef_age_2016_perc;
			} else if ($beef_age_2016_age == '20-24') {
				$beef_age_2016_15_44 = $beef_age_2016_15_44 + $beef_age_2016_numb;
				$beef_age_2016_15_44_perc = $beef_age_2016_15_44_perc + $beef_age_2016_perc;
			} else if ($beef_age_2016_age == '25-34') {
				$beef_age_2016_15_44 = $beef_age_2016_15_44 + $beef_age_2016_numb;
				$beef_age_2016_15_44_perc = $beef_age_2016_15_44_perc + $beef_age_2016_perc;
			} else if ($beef_age_2016_age == '35-44') {
				$beef_age_2016_15_44 = $beef_age_2016_15_44 + $beef_age_2016_numb;
				$beef_age_2016_15_44_perc = $beef_age_2016_15_44_perc + $beef_age_2016_perc;
			} else if ($beef_age_2016_age == '45-54') {
				$beef_age_2016_44_65 = $beef_age_2016_44_65 + $beef_age_2016_numb;
				$beef_age_2016_44_65_perc = $beef_age_2016_44_65_perc + $beef_age_2016_perc;
			} else if ($beef_age_2016_age == '55-59') {
				$beef_age_2016_44_65 = $beef_age_2016_44_65 + $beef_age_2016_numb;
				$beef_age_2016_44_65_perc = $beef_age_2016_44_65_perc + $beef_age_2016_perc;
			} else if ($beef_age_2016_age == '60-64') {
				$beef_age_2016_44_65 = $beef_age_2016_44_65 + $beef_age_2016_numb;
				$beef_age_2016_44_65_perc = $beef_age_2016_44_65_perc + $beef_age_2016_perc;
			} else if ($beef_age_2016_age == '65 and Over') {
				$beef_age_2016_44_65 = $beef_age_2016_44_65 + $beef_age_2016_numb;
				$beef_age_2016_44_65_perc = $beef_age_2016_44_65_perc + $beef_age_2016_perc;
			}
		}
	}
	
	if (strlen($beef_age_2016_44_65_perc) < 3) {
		$beef_age_2016_44_65_perc = $beef_age_2016_44_65_perc . '.0';
	}
	
	if (strlen($beef_age_2016_15_44_perc) < 3) {
		$beef_age_2016_15_44_perc = $beef_age_2016_15_44_perc . '.0';
	}
	
	if (strlen($beef_age_2011_15_44_perc) < 3) {
		$beef_age_2011_15_44_perc = $beef_age_2011_15_44_perc . '.0';
	}
	
	if (strlen($beef_age_2011_44_65_perc) < 3) {
		$beef_age_2011_44_65_perc = $beef_age_2011_44_65_perc . '.0';
	}
	
	$random_button = '_' . rand(10,1000) . '_button';
	
	$all_cards = $all_cards . '<div style="padding-bottom:40px;" class="col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4 col-xxxl-4 align-items-stretch animated fadeInLeft">'. //col-xs-12 col-sm-12 col-md-6
							   '<div class="services text-center" style="padding-bottom: 10px; height:100%;">'.
							     '<div class="icon justify-content-center align-items-center">'.
								   '<span class="'.$icon_age.'"></span>'.
								 '</div>'.
								 
								 '<div class="text" style="padding-bottom:60px;">'.
								   '<h4><b>Age Group in</b></h4>'.
								   '<hr>'.
								   '<div class="container">'.
										'<div class="row">'.
											'<div class="col-sm-12 col-md-12">'.
												'<h4><b>2011 & 2016</b></h4>'.
												'<div class="container">'.
													'<div class="row">'.
														'<div class="col-sm-6 col-md-6">'.
															'<h5>15-44: '.$beef_age_2011_15_44_perc.'%</h5>'.
														'</div>'.
														
														'<div class="col-sm-6 col-md-6">'.
															'<h5>45-65: '.$beef_age_2011_44_65_perc.'%</h5>'.
														'</div>'.
													'</div>'.
												'</div>'.
											'</div>'.
											
											/*'<div class="col-sm-12 col-md-6">'.
												'<h4><b>2016</b></h4>'.
												'<div class="container">'.
													'<div class="row">'.
														'<div class="col-sm-12 col-md-6">'.
															'<h5>15-44: '.$beef_age_2016_15_44_perc.'%</h5>'.
														'</div>'.
														
														'<div class="col-sm-12 col-md-6">'.
															'<h5>45-65: '.$beef_age_2016_44_65_perc.'%</h5>'.
														'</div>'.
													'</div>'.
												'</div>'.
												
												
											'</div>'.*/
										'</div>'.
									'</div>'.
									'<hr>'.
									'<h5 class="text-center"><i class="fa '.$icon_warning.'" aria-hidden="true"></i> Majority of elderly farmers retire.</h5>'.
									'<h5 class="text-center"><i class="fa '.$icon_good.'" aria-hidden="true"></i> Many opportunities for younger farmers.</h5>'.
									'<hr>'.
									'<div class="container">'.
										'<div class="row">'.
											'<ul style="margin-bottom:0px;">';
											
	$farmer_data = "SELECT farmer_url, farmer_url2,  farmer_card, farmer_text, farmer_modal_title, farmer_modal_text FROM emp_cards WHERE farmer_card = 'Age'";
	$get_farmer_data = $con -> query($farmer_data);
	
	if ($get_farmer_data->num_rows > 0) {
		$countFarmer = 0;
		while($row = $get_farmer_data->fetch_assoc()) {
			$random_modal = '_' . rand(10,1000) . '_modal';
			$farmer_url = $row['farmer_url'];
			$farmer_url2 = $row['farmer_url2'];
			$farmer_card = $row['farmer_card'];
			$farmer_text = $row['farmer_text'];
			$farmer_modal_title = $row['farmer_modal_title'];
			$farmer_modal_text = $row['farmer_modal_text'];
			
			if ($countFarmer < 2) {
				$all_cards = $all_cards . '<li><h5 class="text-justify">'.$farmer_text.'</h5></li>';
				$countFarmer++;
			} 
		}
	}						
						
	$all_cards = $all_cards .				'</ul>'.
											'<div class="collapse" id="'.$random_button.'">'.
												'<ul>';
	
	$farmer_data = "SELECT farmer_url, farmer_url2,  farmer_card, farmer_text, farmer_modal_title, farmer_modal_text FROM emp_cards WHERE farmer_card = 'Age'";
	$get_farmer_data = $con -> query($farmer_data);
	
	if ($get_farmer_data->num_rows > 0) {
		$countFarmer = 0;
		while($row = $get_farmer_data->fetch_assoc()) {
			$farmer_url = $row['farmer_url'];
			$farmer_url2 = $row['farmer_url2'];
			$farmer_card = $row['farmer_card'];
			$farmer_text = $row['farmer_text'];
			$farmer_modal_title = $row['farmer_modal_title'];
			$farmer_modal_text = $row['farmer_modal_text'];
			
			if ($countFarmer > 1) {
				//$all_cards = $all_cards . '<li><h5 class="text-justify">'.$farmer_text.'</h5></li>';
				$modal_content = $modal_content . '<li><h5 class="text-justify">'.$farmer_text.'</h5></li>';
				
				//$all_cards = $all_cards . '<li><h5 class="text-justify">'.$farmer_text." <a type='button' style='color:#4e9525;cursor:pointer;' data-toggle='modal' data-target='#".$random_modal."'><u><b><i>Learn more</i></b></u></a>".'</h5></li>';
			} else {
				$countFarmer++;
			}
		}
		$modals = $modals . '<div class="modal fade" id="'.$random_modal.'" tabindex="-1" role="dialog"  aria-labelledby="'.$random_modal.'Label" aria-hidden="true">'.
										'<div class="modal-dialog modal-xl modal-dialog-centered" role="document">'.
											'<div class="modal-content">'.
												'<div class="modal-header">'.
													'<h5 class="modal-title" id="'.$random_modal.'Label"><b>Age Group</b></h5>'.
													'<button type="button" class="close" data-dismiss="modal" aria-label="Close">'.
													'<span aria-hidden="true">&times;</span>'.
												'</button>'.
											'</div>'.
											'<div class="modal-body">'.
												'<ul>'.
													$modal_content.
												'</ul>'.
											'</div>'.
											'<div class="modal-footer">'.
												'<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'.
											'</div>'.
										'</div>'.
									'</div>'.
								'</div>';
	}							
	
	$all_cards = $all_cards .				'</ul>'.
											'</div>'.
										'</div>'.
									'</div>'.
								  '</div>'.
								  //'<a class="btn-custom align-items-center justify-content-center" style="width: 180px; cursor: pointer;" data-toggle="collapse" data-target="#'.$random_button.'" aria-expanded="false" aria-controls="state-2011-2016"><span><i class="fa fa-expand" aria-hidden="true"></i> View suggestions</span></a>'.
									'<a class="btn-custom align-items-center justify-content-center" style="width: 180px; cursor: pointer;" data-toggle="modal" data-target="#'.$random_modal.'"><span><i class="fa fa-expand" aria-hidden="true"></i> View suggestions</span></a>'.
								'</div>'.
							  '</div>';
	
	
	echo json_encode(array("card"=>$all_cards,
						   "modal"=>$modals));
	
?>