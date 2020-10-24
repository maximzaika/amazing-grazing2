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
	 *  - displays the navigation bar on each page
	 *
	 * Attributes:
	 *  - $con: server connection from server_config.php
	 *  - $pageReceived: file page name, must be same as nav_link in the database
	 *  - $pageREceived2: drop-down grouping, must be same as nav_topic in the database
	 *
	 * Pre-condition:
	 *  - called by any of the following web pages:
	 *    * index.php
	 *    * employment-statistics.php
	 *    * livestock-statistics.php
	 *    * techniques.php
	 *    * drought.php
	 *    * invasive-species.php
	 *  - database must be available
	 * Post-condition
	 *  - retrieves nav_bar table from db
	 *  - detects drop-down or not (nav_drop db row 0 = no, 1 = yes)
	 *  - generate full HTML into $fullNav variable
	 * Return:
	 *  - $fullNav HTML code
	*/

/* This file is run by every page to display the navigation bar. */
	function generateNavTabs($con, $pageReceived, $pageReceived2) {
		$get_Nav = "SELECT nav_id, nav_link, nav_title, nav_drop, nav_topic FROM nav_bar";
		$nav_Data = $con -> query($get_Nav);
		
		$selectItem = 'active';
		$full_nondrop = '';
		$full_drop = '';
		
		$active_drop = array();
		
		if ($nav_Data->num_rows > 0) {
			while($row = $nav_Data->fetch_assoc()) {
				$nav_id = $row['nav_id'];
				$nav_link = $row['nav_link'];
				$nav_title = $row['nav_title'];
				$nav_drop = $row['nav_drop'];
				$nav_topic = $row['nav_topic'];
									
				// If database record nav_drop is set to 0, that means it is not a drop down
				if ($nav_drop == 0) {
					$full_drop = $full_drop . '<li class="nav-item '; // active the nav bar tab if the user is located on the specific page
				
					if ($nav_link == $pageReceived) {
						$full_drop = $full_drop . $selectItem;
					} 
					
					$full_drop = $full_drop . '"><a href="' . 
								   $nav_link . '" class="nav-link">' .
								   $nav_title . '</a></li>';
				} else { // If database record nav_drop is set to 1, that means it is a drop down
					if (!in_array($nav_topic, $active_drop)) {					
						$full_drop = $full_drop . '<li class="nav-item dropdown ';
						
						if ($pageReceived == $nav_topic) { // active the drop down if it is statistics
							$full_drop = $full_drop . $selectItem;
						}
						
						$full_drop = $full_drop .   '"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.
														$nav_topic.
													'</a>'.
													'<div class="nav-bar-dropdown dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
						
						if ($nav_link == $pageReceived2) { // active the drop down if it is statistics
							$full_drop = $full_drop .	'<a href="'.$nav_link.'" class="dropdown-item '.$selectItem.'">'.$nav_title.'</a>';
						} else {
							$full_drop = $full_drop .	'<a href="'.$nav_link.'" class="dropdown-item">'.$nav_title.'</a>';
						}
						
						array_push($active_drop, $nav_topic);
					} else {
						if ($nav_link == $pageReceived2) { // active the drop down if it is statistics
							$full_drop = $full_drop .	'<a href="'.$nav_link.'" class="dropdown-item '.$selectItem.'">'.$nav_title.'</a>';
						} else {
							$full_drop = $full_drop .	'<a href="'.$nav_link.'" class="dropdown-item">'.$nav_title.'</a>';
						}
						
						$full_drop = $full_drop . '</div></li>';
					}
				}
				
			}
			
		}

		$fullNav = '<header class="sticky-top">'.
						'<nav style="border-bottom:1px solid #000;" class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">'.
						 '<div class="container-fluid">'.
						   '<a class="navbar-brand" style="margin-bottom:0" href="index.php">'.
							 '<img src="images/amazing-grazing-logo_crop_100_39.png" alt="">'.
						   '</a>'.
						 
						   '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">'.
							 '<span class="fa fa-bars"></span> Menu'.
						   '</button>'.
						 
						   '<div class="collapse navbar-collapse" id="ftco-nav">'.
							 '<ul class="navbar-nav m-auto">'.
								$full_drop.
							 '</ul>'.
						   '</div>'.
						  '</div>'.
						 '</div>'.
						'</nav>'.
					'</header>';
		return $fullNav;
	}
		
?>