<!-- Server side files -->
<?php 
	require_once "server_config.php";
	require_once "php/create_table.php";
	require_once "php/insert_data.php";
?>

<!DOCTYPE html>
<html lang="en">

	<?php 	
		#echo retrieveTechniquePage($con, "SEASONAL GRAZING", "Carousel");
		#echo retrieveTechniquePage($con, "ROTATIONAL GRAZING", "Methods");
		#echo retrieveTechniquePage($con, "PATCH-BURN GRAZING", "No");
		$con -> close();
    ?>
</html>