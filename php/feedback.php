<?php
	require_once "../server_config.php";
	
	$stars = $_POST['stars'];
	$feedback = $_POST['feedback'];
	
	$feedback = str_replace('"', "'", $feedback);
	
	$sql = "INSERT INTO user_feedback (feedback_rate, feedback_text)
			VALUES (".$stars.",
					'".$feedback."');";
	
	$response = $_POST["response"];	
	$url = 'https://www.google.com/recaptcha/api/siteverify?secret=';
	$secret = '6LcxX9QZAAAAAMlmIhKdoJssgr4ZOuU3SY0ddZwh';
	
	/*$data = array(
		'secret' => '6LcxX9QZAAAAAMlmIhKdoJssgr4ZOuU3SY0ddZwh',
		'response' => $_POST["response"]
	);

	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);*/
	
	
	
	//$context  = stream_context_create($options);
	$verify = file_get_contents($url.$secret.'&response='.$response);
	//$verify = file_get_contents($url, false, $context);
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
	
	echo json_encode(array("feedback"=>$server_feedback));
?>