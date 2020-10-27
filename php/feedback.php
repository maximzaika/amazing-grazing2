<?php
	/*
	 * Last Edited: 25/10/2020
     *
	 * Developed by: MC CM Team (Monash Students)
	 * Project Name: Amazing Grazing
	 * Project Description: Protecting Australia Grasslands by 
	 *                      encouraging farmer education
     *
	 * Description::
	 *  - gets called by the feedback.js file (.ajax function inside it)
	 *  - receives user feedback, verifies the user, and sends the feedback to the database
     *
	 * Pre-condition:
	 *  - session token needs to be on the website for it to work to prevent CSRF attacks
	 *  - google capcha response needs to be inside the HTML code
	 *  - server_config.php file needs to be in the main directory to allow access to the database
	 * Post-condition
	 *  - receive session to verify the user's session to prevent CSRF attacks
	 *  - access phpMyAdmin using server_config.php
	 *  - use real_escape_string() to prevent SQL Injections
	 * Return:
	 *  - json array "feedback"=>$server_feedback back to .ajax
	*/

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
	
	/* SQL Injection Protection - take care of special characters so that they cannot be manipulated */
	$feedback = $con->real_escape_string($feedback);
	$todayDate = $con->real_escape_string($todayDate);
	$todayTime = $con->real_escape_string($todayTime);
	$page = $con->real_escape_string($page);
	
	$sql = "INSERT INTO user_feedback (feedback_date, feedback_time, feedback_rate, feedback_text, feedback_page)".
		   "VALUES ('$todayDate','$todayTime',$stars,'$feedback','$page');";

	$response = $_POST["response"];	
	$url = 'https://www.google.com/recaptcha/api/siteverify?secret=';
	$secret = '6LcxX9QZAAAAAMlmIhKdoJssgr4ZOuU3SY0ddZwh';
	
	$test = '';
	$verify = file_get_contents($url.$secret.'&response='.$response);
	$captcha_success = json_decode($verify);
	if ($captcha_success->success==false) {
		$server_feedback = 'error-captcha';
	} else if ($captcha_success->success==true) {
		if ((str_contains($feedback, '<') !== false) || (str_contains($feedback, '>') !== false)) { // if feedback contains characters < > notify user to remove
			$server_feedback = 'feedback-bracket-character';
			$test = 'errrrrro';
		} else { // no < > found so continue writing
			if ($con->query($sql) === TRUE) {
				$server_feedback = 'Successful update';
			} else {
				$server_feedback = 'Unsuccessful update';
			}
		}
	}
	/* End writing to the server if the CSRF tests pass */
	
	echo json_encode(array("feedback"=>$server_feedback,
						  "test"=>$test)); // send server feedback to the ajax/client
?>