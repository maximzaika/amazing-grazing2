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
	 *  - generates the cards in the SERVICES section of the page
	 *
	 * Attributes:
	 *  - $con: server connection from server_config.php
	 *
	 * Pre-condition:
	 *  - called by webpage: index.php
	 *  - must be called by the page
	 *  - database must be available
	 * Post-condition
	 *  - retrieves index_offerings table from db
	 *  - generate full HTML code into $ofrContent variable
	 * Return:
	 *  - $ofrContent HTML code
	*/
	
	function generateOfferings2($con) {
		$get_Ofr = "SELECT ofr_id, ofr_icon, ofr_title, ofr_descr, ofr_url FROM index_offerings";
		$ofr_Data = $con -> query($get_Ofr);
		
		$ofrContent = '';
		
		if ($ofr_Data->num_rows > 0) {
			while($row = $ofr_Data->fetch_assoc()) {
				$post_ofrId = $row['ofr_id'];
				$post_ofrIcon = $row['ofr_icon'];
				$post_ofrTitle = $row['ofr_title'];
				$post_ofrDescr = $row['ofr_descr'];
				$post_ofrUrl = $row['ofr_url'];
								
				$ofrContent = $ofrContent . 
								'<div class="item bg-light  d-flex align-items-stretch">'.
									'<div class="wrap">'.
										'<div class="services text-center p_">'.
											'<div class="icon d-flex justify-content-center align-items-center">'.
												'<span class="'.$post_ofrIcon.'"></span>'.
											'</div>'.
											'<div class="text" style="padding-bottom:25px;">'.
												'<h4><b>'.$post_ofrTitle.'</b></h4>'.
												'<h5>'.$post_ofrDescr.'</h5>'.
											'</div>'.
											'<a href="'.$post_ofrUrl.'" class="btn-custom d-flex align-items-center justify-content-center"><span>Read more &nbsp </span><span class="ion-ios-arrow-round-forward"></span></a>'.
										'</div>'.
									'</div>'.
								'</div>';		
			}
		}
		
		return $ofrContent;
	}
		
?>