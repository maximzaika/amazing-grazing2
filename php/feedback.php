<?php
	/* Initiate a session to protect the website & database from CSRF attacks */
	session_start();
	
	if (empty($_SESSION['csrf_token'])) {
		$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
	}
	
	header('Content-Type: application/json');
	
	$headers = apache_request_headers();
	
	if (isset($headers['CsrfToken'])) {
		if ($headers['CsrfToken'] !== $_SESSION['csrf_token']) {
			exit(json_encode(['error' => 'Wrong CSRF token.']));
		}
	} else {
		exit(json_encode(['error' => 'No CSRF token.']));
	}
	/* End Initiate a session to protect the website & database from CSRF attacks */
	
	/* Start writing to the server if the CSRF tests pass */
	require_once "../server_config.php";
	
	$stars = $_POST['stars'];
	$feedback = $_POST['feedback'];
	$page = $_POST['page'];
	
	$todayDate = date("d-m-Y");
	$todayTime = date("h:i:sa");
	$feedback = str_replace('"', "'", $feedback);
	
	//$feedback = $con->real_escape_string($feedback);
	$sql = "INSERT INTO user_feedback (feedback_date, feedback_time, feedback_rate, feedback_text, feedback_page)".
		   "VALUES ('$todayDate','$todayTime',$stars,'$feedback','$page');";
					
	

	$response = $_POST["response"];	
	$url = 'https://www.google.com/recaptcha/api/siteverify?secret=';
	$secret = '6LcxX9QZAAAAAMlmIhKdoJssgr4ZOuU3SY0ddZwh';
		
	$verify = file_get_contents($url.$secret.'&response='.$response);
	$captcha_success = json_decode($verify);
	if ($captcha_success->success==false) {
		$server_feedback = 'error-captcha';
	} else if ($captcha_success->success==true) {
		if ($con->query($sql) === TRUE) {
			$server_feedback = 'Successful update';
		} else {
			$server_feedback = 'Unsuccessful update';
		}
	}
	/* End writing to the server if the CSRF tests pass */
	
	echo json_encode(array("feedback"=>$server_feedback,
						   "sql"=>$sql)); // send server feedback to the ajax/client
?>