<?php 
include("sessions.php");
include("conn.php");
if (!isset($_SESSION['username']) || $_SESSION["loggedin"] != true) {
	echo "Kindly login first";
	header('location: login.php');
}

$user = $_SESSION['username'];
$delect = "DELETE FROM course WHERE username='$user'";
mysqli_query($conn, $delect);
echo "You have deleted a course";

?>

<a href="home.php">Home</a>