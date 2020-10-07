<?php   /* This file is run by every page to display the navigation bar. */
	    function generateNavTabs($con, $pageReceived) {
			$get_Nav = "SELECT nav_id, nav_link, nav_title, nav_drop, nav_topic FROM nav_bar";
			$nav_Data = $con -> query($get_Nav);
			
			$selectItem = 'active';
			$full_nondrop = '';
			$full_drop = '';
			
			if ($nav_Data->num_rows > 0) {
				while($row = $nav_Data->fetch_assoc()) {
					$post_navid = $row['nav_id'];
					$post_navlink = $row['nav_link'];
					$post_navtitle = $row['nav_title'];
					$nav_drop = $row['nav_drop'];
					$nav_topic = $row['nav_topic'];
					
					/* No drop down */
					$full_nondrop = $full_nondrop . '<li class="nav-item ';
					
					if ($post_navlink == $pageReceived) { 
						$full_nondrop = $full_nondrop . $selectItem;
					} 
					
					$full_nondrop = $full_nondrop . '"><a href="' . 
								   $post_navlink . '" class="nav-link">' .
								   $post_navtitle . '</a></li>';
					
					/* Drop */
					/*if ($nav_drop == 0) {
						$full_nondrop = $full_nondrop . '<li class="nav-item ';
					
						if ($post_navlink == $pageReceived) {
							$full_nondrop = $full_nondrop . $selectItem;
						} 
						
						$full_nondrop = $full_nondrop . '"><a href="' . 
									   $post_navlink . '" class="nav-link">' .
									   $post_navtitle . '</a></li>';
					} else {
						if ($full_drop == '') {
							$full_drop = $full_drop . '<li class="nav-item dropdown">'.
													'<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.
														$nav_topic.
													'</a>'.
													'<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">'.
														'<a href="'.$post_navlink.'" class="dropdown-item">'.$post_navtitle.'</a>';
						} else {
							$full_drop = $full_drop . '<a href="'.$post_navlink.'" class="dropdown-item">'.$post_navtitle.'</a>';
						}
						
					}*/
					
				}
				//$full_drop = $full_drop . '</div></li>';
			}
			
			/* No drop down */
			$fullNav = '<header class="sticky-top">'.
							'<nav style="border-bottom:3px solid #000;" class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">'.
							 '<div class="container-fluid">'.
							   '<a class="navbar-brand" style="margin-bottom:0" href="index.php">'.
								 '<img src="images/amazing-grazing-logo_crop_100_39.png" alt="">'.
							   '</a>'.
							 
							   '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">'.
								 '<span class="fa fa-bars"></span> Menu'.
							   '</button>'.
							 
							   '<div class="collapse navbar-collapse" id="ftco-nav">'.
								 '<ul class="navbar-nav m-auto">'.
									$full_nondrop.
								 '</ul>'.
							   '</div>'.
							  '</div>'.
							 '</div>'.
							'</nav>'.
					    '</header>';
						
			/* Drop Down */
			/*$fullNav = '<header class="sticky-top">'.
							'<nav style="border-bottom:3px solid #000;" class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">'.
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
									$full_nondrop.
								 '</ul>'.
							   '</div>'.
							  '</div>'.
							 '</div>'.
							'</nav>'.
					    '</header>';*/
			return $fullNav;
		}
		
?>