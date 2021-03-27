<?php
session_start();

// variable declaration
	$user_username = "";
	$email    = "";
	$ndname= "";
	$stname="";
    $password_1="";
    	$user_name = "";
		$type = "";
		$address ="";
		$phone = "";
		$number ="";
		$code = "";

        $boss = "";
        
		$bossaddress = "";
		$bossphone = "";
		$email = "";
        $password = "";
        $confirm_password ="";
		$usernamelength= "";
        $passwordlength="";
        $foldername ="";

	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	include 'db_conn.php';

	// REGISTER USER
	if (isset($_POST['signup_button']) ) {
		// receive all input values from the form
        $user_name = mysqli_real_escape_string($database, $_POST['username']);

		$name = mysqli_real_escape_string($database, $_POST['name']);
		$address = mysqli_real_escape_string($database, $_POST['address']);
		$phone = mysqli_real_escape_string($database, $_POST['phone']);
		$email = mysqli_real_escape_string($database, $_POST['email']);
        $zip = mysqli_real_escape_string($database, $_POST['zip']);
		$city = mysqli_real_escape_string($database, $_POST['city']);
		$category = mysqli_real_escape_string($database, $_POST['category']);

		$birthday = mysqli_real_escape_string($database, $_POST['birthday']);
        $pass = mysqli_real_escape_string($database, $_POST['pass']);


		$password_1 = mysqli_real_escape_string($database, $_POST['pass1']);
		$usernamelength= strlen($user_name);
        $passwordlength= strlen($password_1);

		// form validation: ensure that the form is correctly filled
		

		if ($pass != $password_1) {
			array_push($errors, "Les deux mots de passe ne resemble pas");
		}
		if ($usernamelength <3){ array_push($errors, "Le Nom doit contenir au minimum 3 lettre"); }
		if ($passwordlength <6){ array_push($errors, "Le mots de passe doit contenir au minimum 6 lettre"); }

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$sql_u = "SELECT * FROM users WHERE username='$user_name'";
			$res_u = mysqli_query($database, $sql_u);
	  
			if (mysqli_num_rows($res_u) > 0) {
				array_push($errors, "L'Utilisateur est déja enrigistré");

            }else{

                $user_name = mysqli_real_escape_string($database, $_POST['username']);

                $name = mysqli_real_escape_string($database, $_POST['name']);
                $address = mysqli_real_escape_string($database, $_POST['address']);
                $phone = mysqli_real_escape_string($database, $_POST['phone']);
                $email = mysqli_real_escape_string($database, $_POST['email']);
                $zip = mysqli_real_escape_string($database, $_POST['zip']);
                $city = mysqli_real_escape_string($database, $_POST['city']);
                $category = mysqli_real_escape_string($database, $_POST['category']);
        
                $birthday = mysqli_real_escape_string($database, $_POST['birthday']);
                $pass = mysqli_real_escape_string($database, $_POST['pass']);
        
        
			$password = md5($pass);//encrypt the password before saving in the database
			$query = "INSERT INTO users (name, birthday, category, address, zip,city, phone, email, username, password) 
					  VALUES('$name', '$birthday', '$category','$address','$zip','$city', '$phone', '$email','$user_name','$password')";
			mysqli_query($database, $query);




            $_SESSION['user_name']=$user_name;
			$_SESSION['success'] = "You are now logged in";
			header('location: index-user.php');}
		}

    }else{
        header('location: login.php');}

    


    ?>