<?php  /* This file executes the offerings on the main page. */
	    function generateOfferings($con) {
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
									'<div class="col-md-3 d-flex align-items-stretch">'.
										'<div class="services text-center">'.
											'<div class="icon d-flex justify-content-center align-items-center">'.
												'<span class="'.$post_ofrIcon.'"></span>'.
											'</div>'.
											'<div class="text">'.
												'<h3>'.$post_ofrTitle.'</h3>'.
												'<p>'.$post_ofrDescr.'</p>'.
											'</div>'.
											'<a href="'.$post_ofrUrl.'" class="btn-custom d-flex align-items-center justify-content-center"><span>Read more &nbsp </span><span class="ion-ios-arrow-round-forward"></span></a>'.
										'</div>'.
									'</div>';
				}
			}
			
			return $ofrContent;
		}
		
?>