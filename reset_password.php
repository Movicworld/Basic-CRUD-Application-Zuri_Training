<?php
session_start();
include("conn.php");
if (!isset($_SESSION['username']) || $_SESSION["loggedin"] != true) {
    echo "Kindly login first";
    header('location: login.php');
}


if (isset($_POST['submit'])) {
    $cu_pass = $_POST['curr_password'];
    $cu_pass = md5($cu_pass);
    $n_pass = $_POST['new_password'];
    $c_pass = $_POST['confirm_password'];
    $user = $_SESSION['username'];


    $check = "SELECT * FROM users WHERE username= '$user'";
    $results = mysqli_query($conn, $check);
    $pass = mysqli_fetch_assoc($results);

    if ($n_pass !== $c_pass) {
        echo "Password does not match";
    }
    elseif ($pass['password'] == $cu_pass) {
        $n_pass = md5($n_pass);
        $sql = "UPDATE users SET password='$n_pass' WHERE username='$user'";
        $query = mysqli_query($conn, $sql);
        echo "Password changed sucessfully";  
    }    
    else{
        echo "Incorrect password";
    }

    $conn->close();    

}    

?>


<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>

    <h1>Reset Password</h1>
    <p>Please fill out this form to reset your password.</p>
    
    <form action="" method="post"> 

        <input type="password" name="curr_password" placeholder="Current password" required="required"><br>
        <input type="password" name="new_password" placeholder="New Password" required="required"><br>
        <input type="password" name="confirm_password" placeholder="Confirm password" required="required"><br>
        <input type="submit" name="submit"><br>
        Return to dashboard <a href="home.php">Dashboard</a><br>
    </form>
</body>
</html>