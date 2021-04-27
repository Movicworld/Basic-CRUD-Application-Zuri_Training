<?php
	session_start();

		if(!isset($_SESSION['username']) || ($_SESSION["loggedin"] != true)) {
			header("Location: /login.php");
			exit();
		}
?>