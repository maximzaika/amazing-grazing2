<?php  /* This file retrieves/creates the content of teh techniques page */
	    function retrieveTechniques($con, $page) {
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
					
					if ($page == 'ALL') { /* Print all the techniques on techniques.php page */
						if ($secCount % 2 == 0) { /* every 1st/3rd technique has white background */
							$technContent = $technContent .   '<section class="ftco-section ftco-no-pt ftco-no-pb bg-light">';
						} else { /* every 2nd technique has grey background */
							$technContent = $technContent .   '<section class="ftco-section ftco-no-pt ftco-no-pb">';
						}
						
						$technContent = $technContent .    '<div class="container">'.
															'<div class="row justify-content-center mb-5">'.
															  '<div class="col-md-12 py-5 text-center heading-section coftco-animate">'.
																'<h2 class="mb-4 text-center" style=" color: #228B22;">'.$techn_title.'</h2>'.
																
																'<div class="row">'.
																  '<div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12 col-lg-6" style="margin:auto;">'.
																	'<img src="images/'.$techn_img.'" class="animated-gif" style="border-radius:40px;">'.
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
							$technContent = $technContent .		  '<button onclick="location.href='."'".$techn_continue."'".'" type="button" class="w-100 btn btn-topic btn-amazing-techniques" style="margin-top: 10px;">Continue reading <i class="fa fa-arrow-right" aria-hidden="true"></i></button>'.
																  '<div class="row">'.
																	'<div class="col-md-6">'.
																	  '<a href="download/'.$techn_brochure.'" class="w-100 btn btn-topic btn-amazing-techniques" style="margin-top: 10px;  padding-top: 13px;"><i class="fa fa-eye" aria-hidden="true"></i> View brochure</a>'.
																	'</div>'.
																	
																	'<div class="col-md-6">'.
																	  '<a href="download/'.$techn_brochure.'" class="w-100 btn btn-topic btn-amazing-techniques" style="margin-top: 10px; padding-top: 13px;" download><i class="fa fa-download" aria-hidden="true"></i> Download brochure</a>'.
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
					} else { /* Print the content of the Specific technique only - dedicated to its own page */
						if ($page == $techn_title) {
							$technContent = $technContent .   '<section class="ftco-section ftco-no-pt ftco-no-pb">'; /* in this case background is always white */
							
							$technContent = $technContent .    '<div class="container">'.
																'<div class="row justify-content-center mb-5">'.
																  '<div class="col-md-12 py-5 text-sm-center text-md-center text-lg-left text-center heading-section coftco-animate">'.
																	'<h2 class="mb-4 text-center" style=" color: #228B22;">'.$techn_title.'</h2>'.
																	
																	'<div class="row">'.
																	  '<div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12 col-lg-6" style="margin:auto;">'.
																		'<img src="images/'.$techn_img.'" class="animated-gif">'.
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
								$technContent = $technContent .       '<div class="row">'.
																		'<div class="col-md-6">'.
																		  '<a href="download/'.$techn_brochure.'" class="w-100 btn btn-topic btn-amazing-techniques" style="margin-top: 10px;  padding-top: 13px;"><i class="fa fa-eye" aria-hidden="true"></i> View brochure</a>'.
																		'</div>'.
																		
																		'<div class="col-md-6">'.
																		  '<a href="download/'.$techn_brochure.'" class="w-100 btn btn-topic btn-amazing-techniques" style="margin-top: 10px; padding-top: 13px;" download><i class="fa fa-download" aria-hidden="true"></i> Download brochure</a>'.
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
							
							if ($page == $techn_title) {
								break;
							}
						}
					}
				}
			}

			return $technContent;
		}
		
		function retrieveTechniquePage($con, $page, $extraContent) {
			$get_techn = "SELECT selected_id, selected_techn, selected_title, selected_text, selected_img, selected_indiv_section_title, selected_indiv_img, selected_indiv_title, selected_indiv_text FROM technique_selected";
			$techn_data = $con -> query($get_techn);
			

			$technContent = '';
			$iCount = 0; /* count icons */
			$secCount = 0; /* count section */
			if ($techn_data->num_rows > 0) {
				while($row = $techn_data->fetch_assoc()) {
					$selected_id = $row['selected_id'];
					$selected_techn = $row['selected_techn'];
					$selected_text = $row['selected_text'];
					$selected_title = $row['selected_title'];
					$selected_img = $row['selected_img'];
					$selected_indiv_section_title = $row['selected_indiv_section_title'];
					$selected_indiv_img = $row['selected_indiv_img'];
					$selected_indiv_title = $row['selected_indiv_title'];
					$selected_indiv_text = $row['selected_indiv_text'];
					
					$selected_indiv_images = explode(";", $selected_indiv_img);
					$selected_indiv_titles = explode(";", $selected_indiv_title);
					$selected_indiv_texts = explode(";", $selected_indiv_text);
					

					if ($page == $selected_techn) { /* Check the received page */
						$technContent = $technContent . 
					                '<section class="ftco-section ftco-no-pt ftco-no-pb">'.
										'<div class="container">';
						
						if ($selected_img != '') { /* If why should I use it section contains 2 grids */
							$technContent = $technContent . 
											'<div class="row justify-content-center mb-5">'.
												'<div class="col-md-12 text-center heading-section coftco-animate">'.
													'<h2 class="mb-4" style="color: #228B22;">'.$selected_title.'</h2>'.
													'<div class="row">'.
														'<div class="col-xxs-12 col-sx-12 col-sm-12 col-md-12 col-lg-6 text-justify" style="margin:auto;">'.
															'<h5>'.$selected_text.'</h5>'.
														'</div>'.
														
														'<div class="col-xxs-12 col-xs-12 col-sm-12 col-md-12 col-lg-6" style="margin:auto;">'.
															'<img src="images/'.$selected_img.'" class="techn-img">'.
														'</div>'.
													'</div>'.
												'</div>'.
											'</div>';
						} else { /* If why should I use it section contains 1 grid */
							$technContent = $technContent . 
							                '<div class="row">'.
												'<div class="col-lg-12 py-5">'.
													'<div class="heading-section ftco-animate">'.
														'<h2 class="mb-4 text-center" style="color: #228B22;">'.$selected_title.'</h2>'.
														'<h5 style="padding-bottom: 15px; text-align: justify;">'.$selected_text.'</h5>'.
													'</div>'.
												'</div>'.
											'</div>';
														
						}
						
						$technContent = $technContent . 
										'</div>'.
									'</section>';
									
						if ($extraContent == 'Methods') { /* If page contains Methods section (like rotational) */
							$countContent = count($selected_indiv_images);
							
							$technContent = $technContent .
											'<section class="ftco-section ftco-no-pt ftco-no-pb">'.
												'<div class="container">'.
													'<div class="row justify-content-center mb-5 pb-3">'.
														'<div class="col-md-10 heading-section text-center ftco-animate">'.
															'<h2 style="color: #228B22;">'.$selected_indiv_section_title.'</h2>'.
														'</div>'.
													'</div>'.
													
													'<div class="row d-flex">';
							
							for ($i=0;$i<$countContent;$i++) {
								$technContent = $technContent .
														'<div class="col-lg-4 d-flex ftco-animate">'.
															'<div class="blog-entry justify-content-end">'.
																'<a class="block-20" style="background-image: url('."'images/".$selected_indiv_images[$i]."'".');"></a>'.
																'<div class="text p-4 float-right d-block" style="height: 100%;">'.
																	'<h5 class="heading mb-0 text-center"><b>'.$selected_indiv_titles[$i].'</b></h5>'.
																	'<h5 class="text-justify" style="padding-top:20px;">'.$selected_indiv_texts[$i].'</h5>'.
																'</div>'.
															'</div>'.
														'</div>';
							}
							
							$technContent = $technContent .
							                        '</div>'.
												'</div>'.
											'</section>';	
						}
						
						if ($extraContent == 'Carousel') { /* If page contains Carousel section (like rotational) */
							$countContent = count($selected_indiv_images);
							
							$technContent = $technContent .
											'<section class="ftco-section ftco-no-pt ftco-no-pb">'.
												'<div class="container">'.
													'<div class="row">'.
														'<div class="col-md-12">'.
															'<div class="carousel-seasonal owl-carousel ftco-owl">';
							
							for ($i=0;$i<$countContent;$i++) {
								$technContent = $technContent .
																'<div class="item">'.
																	'<div class="wrap">'.
																		'<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/'.$selected_indiv_images[$i].');"></div>'.
																		'<div class="text text-center px-4">'.
																			'<h3>'.$selected_indiv_titles[$i].'</h3>'.
																			'<p>'.$selected_indiv_texts[$i].'</p>'.
																		'</div>'.
																	'</div>'.
																'</div>';
																		
							}
							
							$technContent = $technContent .
															'</div>'.
														'</div>'.
													'</div>'.
												'</div>'.
											'</section>';
						}
						
						$technContent = $technContent .
										'<section class="ftco-section ftco-no-pt ftco-no-pb">'.
											'<div class="container">'.
												'<div class="row justify-content-center mb-5">'.
													'<div class="col-md-12 py-5 text-center heading-section ftco-animate">'.
														'<h2 class="mb-4" style="color: #228B22; ">OUR SUGGESTIONS</h2>'.
														'<div class="services-wrap">';
						
						$get_techn_cont = "SELECT suggestion_id, suggestion_techn, suggestion_text FROM suggestion_tech";
						$techn_cont_data = $con -> query($get_techn_cont);
						
						if ($techn_cont_data->num_rows > 0) {
							while($row_ = $techn_cont_data->fetch_assoc()) {
								$suggestion_id = $row_['suggestion_id'];
								$suggestion_techn = $row_['suggestion_techn'];
								$suggestion_text = $row_['suggestion_text'];
								
								
								if ($page == $suggestion_techn) {
									$technContent = $technContent .
															'<li class="service-techniques services-color text-justify">'.
																'<div class="container">'.
																	'<div class="row">'.
																		'<div class="col-md-2 text-center" style="margin: auto;">'.
																			'<i class="fa fa-check fa-check-techniques" aria-hidden="true"></i>'.
																		'</div>'.
																		'<div class="col-md-10" style="margin: auto;">'.
																			'<h5>'.$suggestion_text.'</h5>'.
																		'</div>'.
																	'</div>'.
																'</div>'.
															'</li>';
								}
							}
						}
						
						$technContent = $technContent .
														'</div>'.
													'</div>'.
												'</div>'.
											'</div>'.
										'</section>';
					}
				}
			}
			return $technContent;
		}
		
?>