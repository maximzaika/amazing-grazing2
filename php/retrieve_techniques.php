<?php  /* This file executes the offerings on the main page. */
	    function retrieveTechniques($con) {
			$get_techn = "SELECT techn_id, techn_title, techn_img, techn_ico, techn_continue, techn_brochure FROM techniques";
			$techn_data = $con -> query($get_techn);
			
			
			
			$technContent = '';
			$iCount = 0; /* count icons */
			$secCount = 0; /* count section */
			if ($techn_data->num_rows > 0) {
				while($row = $techn_data->fetch_assoc()) {
					$techn_id = $row['techn_id'];
					$techn_title = $row['techn_title'];
					$techn_img = $row['techn_img'];
					$techn_ico = $row['techn_ico'];
					$techn_continue = $row['techn_continue'];
					$techn_brochure = $row['techn_brochure'];
					$techn_icons = explode(";", $techn_ico);
					
					if ($secCount % 2 == 0) {
						$technContent = $technContent .   '<section class="ftco-section ftco-no-pt ftco-no-pb bg-light">';
					} else {
						$technContent = $technContent .   '<section class="ftco-section ftco-no-pt ftco-no-pb">';
					}
					
					$technContent = $technContent .    '<div class="container">'.
													    '<div class="row justify-content-center mb-5">'.
														  '<div class="col-md-12 py-5 text-center heading-section coftco-animate">'.
														    '<h2 class="mb-4" style=" color: #228B22;">'.$techn_title.'</h2>'.
															
															'<div class="row">'.
															  '<div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12 col-lg-6" style="margin:auto;">'.
															    '<img src="images/'.$techn_img.'" class="animated-gif" style="border-radius:40px;" alt="Seasonal Grazing">'.
															  '</div>'.
															
															  '<div class="col-xxs-12 col-sx-12 col-sm-12 col-md-12 col-lg-6" style="margin:auto;">'.
															    '<div class="services-wrap">';
					
					$get_techn_cont = "SELECT techn_cont_id, techn_cont_title2, techn_cont_content FROM techniques_content";
			        $techn_cont_data = $con -> query($get_techn_cont);
					
					if ($techn_cont_data->num_rows > 0) {
						while($row_ = $techn_cont_data->fetch_assoc()) {
							$techn_cont_id = $row_['techn_cont_id'];
							$techn_cont_title = $row_['techn_cont_title2'];
							$techn_cont_content = $row_['techn_cont_content'];
							
							if ($techn_title == $techn_cont_title) {
								$technContent = $technContent . '<li class="service-techniques services-color">'.
																	'<div class="container">'.
																	  '<div class="row">'.
																		'<div class="col-xxs-4 col-xs-4 col-sm-1 col-md-2 col-lg-2 text-center" style="margin: auto;">'.
																		  '<i class="fa '.$techn_icons[$iCount].' '.$techn_icons[$iCount].'-techniques" aria-hidden="true"></i>'.
																		'</div>'.
																	  
																		'<div class="col-xxs-8 col-xs-8 col-sm-11 col-md-10 col-lg-10" style="margin: auto;">'.
																		  '<h5>'.$techn_cont_content.'</h5>'.
																		'</div>'.
																	  '</div>'.
																	'</div>'.
																  '</li>';
																  
								$iCount++;
								if ($iCount == 4) {
									$iCount = 0;
								}
							}
						}
					}
					
					$technContent = $technContent .			'</div>';
					
					if ($techn_continue != '') {
						$technContent = $technContent .		  '<button onclick="location.href='."'".$techn_continue."'".'" type="button" class="w-100 btn btn-topic btn-primary" style="margin-top: 10px;">Continue reading <i class="fa fa-arrow-right" aria-hidden="true"></i></button>'.
						                                      '<div class="row">'.
																'<div class="col-md-6">'.
																  '<a href="download/'.$techn_brochure.'" class="w-100 btn btn-topic btn-primary" style="margin-top: 10px;  padding-top: 13px;"><i class="fa fa-eye" aria-hidden="true"></i> View brochure</a>'.
																'</div>'.
																
															    '<div class="col-md-6">'.
															      '<a href="download/'.$techn_brochure.'" class="w-100 btn btn-topic btn-primary" style="margin-top: 10px; padding-top: 13px;" download><i class="fa fa-download" aria-hidden="true"></i> Download brochure</a>'.
																'</div>'.
															  '</div>';
					}
					
					$technContent = $technContent .       '</div>'.
														'</div>'.
													'</div>'.
												'</div>'.
											'</div>'.
										'</section>';
										
					$secCount++;
					
				}
			}

			return $technContent;
		}
		
?>