<?php 

	require_once("connection.php");

	session_start();

	$form = $_GET['q'];
	checkLogin($username, $password);

	if($form == "login") {
		$username = $_POST['login-username'];
		$password = $_POST['login-password'];
		if($username == "admin" && $password == "1234") {
			// Successfully login	
			$_SESSION['username'] = $username;
			//header("location:welcome.php");
		}else {
			header("location:index.php?login=error");
		}
		
	}else if($form == "logout") {
	    session_destroy();

	    header("location:index.php");
	}
?>