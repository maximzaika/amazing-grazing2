<!-- Server side files -->
<?php 
	require_once "server_config.php";
	
	$get_test = "SELECT testID, firstpage_info FROM test";
	$test_result = $con -> query($get_test);
	
	if ($test_result->num_rows > 0) {
			while($row = $test_result->fetch_assoc()) {
				$post_test_result = $row['firstpage_info'];
				$post_id_result = $row['testID'];
			}
	}
	
	$con -> close();
?>

<!DOCTYPE html>
<html lang="en">
	<body>
		<h1><?php echo htmlspecialchars_decode($post_id_result);?></h1>
	</body>
</html>

hi chongyang