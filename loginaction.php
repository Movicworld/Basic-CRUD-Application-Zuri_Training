<?php
	session_start(); 
	include("conn.php");
	if($_POST) {
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$npassword = md5($password);
	
		$check = "SELECT * FROM users WHERE username='$username' AND password='$npassword'";
		$result = mysqli_query($conn, $check);
		if (mysqli_num_rows($result) == 1) {
		  $_SESSION['username'] = $username;
		  $_SESSION["loggedin"] = true;
		  echo "You are now logged in";
		  header('location: home.php');
	  }
	  else {
		echo "Wrong username or password";
	  }

	}
?>