<?php
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$Address="";
	$contact="";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'foodbank');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$Address= mysqli_real_escape_string($db, $_POST['address']);
		$contact=mysqli_real_escape_string($db, $_POST['contact']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (preg_match('/\s/',$username)) {array_push($errors,"No whitespace between the string");}
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if (empty($Address)) { array_push($errors, "Address is required"); }
		if (empty($contact)) { array_push($errors, "Contact is required"); }
		if(!preg_match("/^\+?[0-9]+$/",$contact))
        { array_push($errors, "Phone contains numbers & '+'only"); }

        if(strlen($contact)<12)
        {
        	 array_push($errors, "Please Enter a valid number");
        }
        if(strlen($contact)>12)
        {
        	array_push($errors,"The number is too large");
        }


		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			//$password = $password_1;
			$query = "INSERT INTO users (username, email, password, address, contact)
					  VALUES('$username', '$email', '$password','$Address', '$contact')";
			mysqli_query($db, $query);
            header("Location:http://localhost/ajkerbazar/");
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			//header('location: index.php');

		}



	}

	// ...

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
		    $password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header("Location:http://localhost/ajkerbazar/");
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>
