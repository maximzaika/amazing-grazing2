<!-- Server side files -->
<?php 
	require_once "server_config.php";
	require_once "php/gnewsAPI.php";
	
	$testquery = "SELECT testID, firstpage_info FROM test";
	$test_result = $con -> query($testquery);
	
	$final;
	if ($test_result->num_rows > 0) {
		while($row = $test_result->fetch_assoc()) {
			$post_firstpage_result = $row['firstpage_info'];
			$post_id_result = $row['testID'];

			$final =  $final .'<h1>' . $post_firstpage_result . '</h1>';
		}
	}
	
	$con -> close();
?>

<!DOCTYPE html>
<html lang="en">
	<body>
		<?php echo htmlspecialchars_decode($final);?>
	</body>
	
	<?php echo $data;
	      echo '<br>';
	      $data = json_decode($data);
		  #foreach ($data as $data) {
			  
		  #}
		  echo '<br>';
	      echo $data->articles;
    ?>
</html>