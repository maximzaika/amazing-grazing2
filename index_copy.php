<!-- Server side files -->
<?php 
	require_once "server_config.php";
	require_once "php/livestock-card-data.php";
?>

<!DOCTYPE html>
<html lang="en">

	<?php 	
		#echo retrieveTechniquePage($con, "SEASONAL GRAZING", "Carousel");
		#echo retrieveTechniquePage($con, "ROTATIONAL GRAZING", "Methods");
		echo retrieveLivestockCards($con, "Beef cattle", "preview", "2");
		$con -> close();
    ?>
</html>