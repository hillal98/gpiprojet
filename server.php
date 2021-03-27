<?php 
session_start();

	// variable declaration
	$admin_email = "";
	$email    = "";
	$ndname= "";
	$stname="";
	$password_1="";

	$errors = array(); 
	$_SESSION['success'] = "";

	include 'db_conn.php';
	

	// ... 

	// LOGIN USER
	if (isset($_POST['login_button'])  ) {
		$username = mysqli_real_escape_string($database, $_POST['email']);
		$password = mysqli_real_escape_string($database, $_POST['password']);
		if (empty($username)) {
			array_push($errors, "email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
            $password = md5($password);

			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($database, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['user_name']=$username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index-user.php');
			}else {

				array_push($errors, "Les information sans incorrect");
			}
		}





	}

	elseif (isset($_POST['login_button_admin'])  ) {
		$username = mysqli_real_escape_string($database, $_POST['email']);
		$password = mysqli_real_escape_string($database, $_POST['password']);
		if (empty($username)) {
			array_push($errors, "email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
            $password = md5($password);

			$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
			$results = mysqli_query($database, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['admin']=$username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {

				array_push($errors, "Les information sans incorrect");
			}
		}





	}
	
?>