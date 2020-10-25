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
	 *  - gets called by the techniques.php page
	 *  - contains functions factContent($techn_ico, $techn_fact), retrieveTechniques($con), and 
	 *    retrieveTechniquePage($con, $page, $extraContent)
	 *    * factContent() creates HTML code for the text below the animated gif of each technique card
	 *    * retrieveTechniqes() receives the data of each technique card, makes it into HTML and sends to the client's browser
	 *    * retrieveTecniquePage() receives the data of specific technique selected by the user
	*/
	   

	/*
	  Description::
	   - creates HTML code for the text below the animated gif of each technique card
     
	  Attributes:
	   - $techn_ico: icon to the left side of the text (received from the db table)
	   - $techn_fact: text to the right side of the icon
	 
	  Pre-condition:
	   - must be called by the retrieveTechniques() function when content is needed
	 
	  Post-condition
	   - create HTML code that gets send to the client's HTML
	 
	  Return:
	   - $factContent: sends HTML code back to retrieveTechniques()
	*/
	function factContent($techn_ico, $techn_fact) {
		$factContent = 
			'<li class="service-techniques services-color" style="padding-top: 0px; margin-bottom: 0px; box-shadow: 0px 0px 0px;">'.
				'<div class="container" style="padding-right: 0px; padding-left: 0px;">'.
					'<div class="row">'.
						'<div class="technique-icon-position">'.
							'<i class="fa '.$techn_ico.'" style="font-size: 30px;" aria-hidden="true"></i>'.
						'</div>'.
						'<div class="col-xxs-8 col-xs-8 col-sm-11 col-md-10 col-lg-10" style="margin: auto; padding-right: 0px; padding-left: 0px;">'.
							'<h5>'.$techn_fact.'</h5>'.
						'</div>'.
					'</div>'.
				'</div>'.
			'</li>';
										
		return $factContent;
	}
	
	/*
	  Description::
	   - receives the data of each technique card, makes it into HTML and sends to the client's browser
     
	  Attributes:
	   - $con: connection from the server_config.php file
	 
	  Pre-condition:
	   - must be called by the client (techniques.php web page)
	 
	  Post-condition
	   - retrieve the content of the techniques_landing table
	   - uses $factCount to identify the required action:
	     * 1 = initial execution, which initiates the creation of all the cards + retrieves content from the factContent() function
		 * 2, 4, 5 = continue retrieving content from the factContent() function
		 * 3 = add the div that contains 'd2 a' to initiate show/hide text for short/long text (only when more than 2 facts displayed)
		 * 5 = close 'd2 a' to indicate the end of it. Also add a button if $techn_target has a button content in the db & reset $factCount to 1
	 
	  Return:
	   - $technContent: sends HTML code back to the client (techniques.php)
	*/
	function retrieveTechniques($con) {
		$get_techn = "SELECT techn_id, techn_img, techn_title, techn_ico, techn_fact, techn_target, tech_downl FROM techniques_landing";
		$techn_data = $con -> query($get_techn);
		
		$technContent = '';
		$factCount = 1;
		if ($techn_data->num_rows > 0) {
			while($row = $techn_data->fetch_assoc()) {
				$techn_id = $row['techn_id'];
				$techn_img = $row['techn_img'];
				$techn_title = $row['techn_title'];
				$techn_ico = $row['techn_ico'];
				$techn_fact = $row['techn_fact'];
				$techn_target = $row['techn_target'];
				$tech_downl = $row['tech_downl'];
				
				if ($factCount == 1) {
					$technContent = $technContent .
						'<div class="item" style="background-color: white;">'.
							'<div class="wrap" style="box-shadow: 0px 10px 30px -4px rgba(0, 0, 0, 0.15);">'.
								'<div class="techniques img d-flex align-items-center justify-content-center" style="background-image: url('.$techn_img.');"></div>'.
								'<div class="text text-center px-4 t_">'.
									'<h3>'.$techn_title.'</h3>'.
									'<div class="services-wrap">';
					
					$technContent = $technContent . factContent($techn_ico, $techn_fact);
				} else if ($factCount == 2 || $factCount == 4 || $factCount == 5) {
					$technContent = $technContent . factContent($techn_ico, $techn_fact);
				} else { // $factCount == 3
					$technContent = $technContent . '<div class="d2"><a>';
					$technContent = $technContent . factContent($techn_ico, $techn_fact);
				} 
				
				if ($factCount < 5) {
					$factCount++;
				} else { // $factCount == 5
					$technContent = $technContent . '</a></div></div>';
					
					if ($techn_target != '') {
						$technContent = $technContent . 
										'<div class="d-flex justify-content-center">'.
											'<div class="container">'.
												'<div style="position: absolute; bottom: 42px; left: 0; right: 0;">'.
													'<button class="btn '.$techn_target.' btn-primary location-button" type="button" data-toggle="modal" style="margin-right:10px;" data-target="#'.$techn_target.'">'.
														'<i class="fa fa-book" aria-hidden="true"></i> Read more'.
													'</button>'.
													
													'<a href="'.$tech_downl.'" class="btn btn-primary location-button">'.
														'<i class="fa fa-download" aria-hidden="true"></i> Download'.
													'</a>'.
												'</div>'.
											'</div>'.
										'</div>';
					}
					
					$technContent = $technContent .
									'</div>'.
								'</div>'.
							'</div>';
													
					$factCount = 1;
				}
				
				
			}
		}
		
		return $technContent;
	}
	
	/*
	  Description::
	   - receives the data of the technique clicked by the user
     
	  Attributes:
	   - $con: connection from the server_config.php file
	   - $page: name of the grazing technique
	   - $extraContent: to identify how to display the content (NO, Methods, Carousel)
	 
	  Pre-condition:
	   - must be called by the client (techniques.php web page)
	 
	  Post-condition
	   - retrieve the content of the technique_selected table
	   - compare the technique requested by the user with the content from the database
	   - create initial content, which is similar for all the pages
	   - create content specifically dedicated for $extraContent (NO, Method, Carousel)
	   - connect to the suggestion_tech table to retrieve suggestions related to specific technique
	 
	  Return:
	   - $technContent: sends HTML code back to the client (techniques.php)
	*/
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
														'<div class="carousel-seasons owl-carousel ftco-owl">';
						
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