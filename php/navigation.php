<?php   /* This file is run by every page to display the navigation bar. */
	    function generateNavTabs($con, $pageReceived) {
			$get_Nav = "SELECT nav_id, nav_link, nav_title FROM nav_bar";
			$nav_Data = $con -> query($get_Nav);
			
			$selectItem = 'active';
			$fullTabHTML = '';
			
			if ($nav_Data->num_rows > 0) {
				while($row = $nav_Data->fetch_assoc()) {
					$post_NavID = $row['nav_id'];
					$post_NavLink = $row['nav_link'];
					$post_NavTitle = $row['nav_title'];
					
					$fullTabHTML = $fullTabHTML . '<li class="nav-item ';
					
					if ($post_NavLink == $pageReceived) { /* if this is the received page, then make it active */
						$fullTabHTML = $fullTabHTML . $selectItem;
					} 
					
					$fullTabHTML = $fullTabHTML . '"><a href="' . 
								   $post_NavLink . '" class="nav-link">' .
								   $post_NavTitle . '</a></li>';
				}
			}
			
			$fullNav = '<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">'.
			             '<div class="container-fluid">'.
						   '<a class="navbar-brand" style="margin-bottom:0" href="index.php">'.
						     '<img src="images/amazing-grazing-logo_crop_100_39.png" alt="">'.
						   '</a>'.
						 
						   '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">'.
						     '<span class="fa fa-bars"></span> Menu'.
						   '</button>'.
						 
						   '<div class="collapse navbar-collapse" id="ftco-nav">'.
						     '<ul class="navbar-nav m-auto">'.
						        $fullTabHTML.
						     '</ul>'.
						   '</div>'.
						  '</div>'.
						 '</div>'.
					    '</nav>';
			
			return $fullNav;
		}
		
?>