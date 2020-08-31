<?php
	define("DB_SERVER", "localhost");
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'amazing-grazing');
	
	// Create SQL connection 
	$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	
	// Check SQL connection
	if ($con -> connect_error) {
		die("Connection failed: " . $con->connect_error);
	}
?>