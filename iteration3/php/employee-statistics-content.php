<?php   /* This file is called by the employee-statistics-content.php file.
           1) It is updating the landing image, video and information lading content
		   2) Agricultural communities content */
	    
		/* ------------- 1) Landing ------------- */
		$get_emp_landing = "SELECT employee_landing_id, 
								   employee_landing_img, 
								   employee_landing_video_url, 
								   employee_landing_title,
								   employee_landing_subheading,
								   employee_landing_description,
								   employee_landing_icon,
								   employee_landing_content
							FROM emp_landing";
		$emp_landing_data = $con -> query($get_emp_landing);
		
		$emp_vid = "";
		$emp_cont = "";
		$emp_cont_row = "";
		
		if ($emp_landing_data->num_rows > 0) {
			while($row = $emp_landing_data->fetch_assoc()) {
				$employee_landing_id = $row['employee_landing_id'];
				$employee_landing_img = $row['employee_landing_img'];
				$employee_landing_video_url = $row['employee_landing_video_url'];
				$employee_landing_title = $row['employee_landing_title'];
				$employee_landing_subheading = $row['employee_landing_subheading'];
				$employee_landing_description = $row['employee_landing_description'];
				$employee_landing_icon = $row['employee_landing_icon'];
				$employee_landing_content = $row['employee_landing_content'];
				
				if ($employee_landing_id == 1) { // contains both title and the video content
					$emp_vid = $emp_vid . '<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url('.$employee_landing_img.');">'.
											'<a href="#xxx_headerPopup" id="headerVideoLink" target="_blank" class="icon-video d-flex justify-content-center align-items-center"><span class="icon-play"></span></a>'.
											'<div id="xxx_headerPopup" class="mfp-hide embed-responsive embed-responsive-21by9">'.
												'<iframe width="560" height="315" src="'.$employee_landing_video_url.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'.
										    '</div>'.
										  '</div>';
										  
					$emp_cont = $emp_cont . '<h2 class="text-xxs-center text-sm-center text-md-left">'.$employee_landing_title.'</h2>'.
											'<span class="mb-4 subheading text-xxs-center text-sm-center text-md-left">'.$employee_landing_subheading.'</span>'.
											'<h5 class="text-xxs-center text-sm-center text-md-left">'.$employee_landing_description.'</h5>';
				}
				
				$emp_cont_row = $emp_cont_row . '<a class="employee-list"><h5>'.$employee_landing_content.'</h5>'.
													'<div class="btn-custom service-color-green d-flex align-items-center justify-content-center"><span><i class="fa '.$employee_landing_icon.'" aria-hidden="true"></i></span></div>'.
												'</a>';
			}
		}
		
		$emp_landing = '<div class="col-md-6 d-flex order-xxs-2 order-lg-1">'.
						$emp_vid.
					   '</div>'.
					   '<div class="col-md-6 pl-md-5 order-xxs-1 order-lg-2">'.
						'<div class="row justify-content-start py-5">'.
							'<div class="col-md-12 heading-section ftco-animate">'.
								$emp_cont.
								'<div class="employee-wrap">'.
									$emp_cont_row.
								'</div>'.
							'</div>'.
						'</div>'.
					   '</div>';
		
		/* ------------- 2) Agricultural communities content ------------- */
		$get_emp_agri = "SELECT employee_agri_description, 
								employee_agri_img, 
								employee_agri_title, 
								employee_agri_url
							FROM emp_agri_comm";
		$emp_agri_data = $con -> query($get_emp_agri);
		
		$emp_agri = "";
		
		if ($emp_agri_data->num_rows > 0) {
			while($row = $emp_agri_data->fetch_assoc()) {
				$employee_agri_description = $row['employee_agri_description'];
				$employee_agri_img = $row['employee_agri_img'];
				$employee_agri_title = $row['employee_agri_title'];
				$employee_agri_url = $row['employee_agri_url'];
			
				$emp_agri = $emp_agri . '<div class="item">'.
											'<div class="testimony-wrap py-4">'.
												'<div class="text">'.
													'<h5 class="community-text">'.$employee_agri_description.'</h5>'.
													'<div class="d-flex align-items-center">'.
														'<div class="user-img" style="background-image: url('.$employee_agri_img.')"></div>'.
														'<div class="pl-3">'.
															'<p class="name">'.$employee_agri_title.'</p>'.
															'<span class="position"><a href="'.$employee_agri_url.'" type="button" style="color:#4e9525;cursor:pointer;"><u><b><i>Learn more</i></b></u></a></span>'.
														'</div>'.
													'</div>'.
												'</div>'.
											'</div>'.
										'</div>';
			}
		}
?>