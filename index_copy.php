<!-- Server side files -->
<?php 
	require_once "server_config.php";
    

						
	function generateNavTabs($con, $pageReceived) {
		$get_Nav = "SELECT nav_id, nav_link, nav_title FROM nav_bar";
		$nav_Data = $con -> query($get_Nav);
		
		$selectItem = 'active';
		$fullNavHTML = '';
		
		if ($nav_Data->num_rows > 0) {
			while($row = $nav_Data->fetch_assoc()) {
				$post_NavID = $row['nav_id'];
				$post_NavLink = $row['nav_link'];
				$post_NavTitle = $row['nav_title'];
				
				$fullNavHTML = $fullNavHTML . '<li class="nav-item ';
				
				if ($post_NavLink == $pageReceived) { /* if this is received page, then make it active */
					$fullNavHTML = $fullNavHTML . $selectItem;
				} 
				
				$fullNavHTML = $fullNavHTML . '"><a href="' . 
					           $post_NavLink . '" class="nav-link">' .
							   $post_NavTitle . '</a></li>';
			}
		}
		
		$con -> close();
		
		return $fullNavHTML;
	}
		
	
	
	
?>

<!DOCTYPE html>
<html lang="en">

	<?php 
		echo generateNavTabs($con, basename(__FILE__, '.php'); );

    ?>
</html>