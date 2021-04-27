<?php 

include("sessions.php");
include("conn.php");

if (!isset($_SESSION['username']) || $_SESSION["loggedin"] != true) {
    echo "Kindly login first";
    header('location: login.php');
}


$username = $_SESSION['username'];
$sql="SELECT * FROM course WHERE username='$username'";
$check=mysqli_query($conn,$sql);
if (mysqli_num_rows($check) != 0) {
    $row=mysqli_fetch_assoc($check);
    $track=$row['track'];
    $language=$row['language'];

    if ($row['track']==NULL) {
        $res1 = "kindly select a course of study<br>";
        $res2 = '<a href="add.php">Add a course</a>';
        $res3 = "";
        $res4 = "";
    }
    elseif ($row['track'] != NULL) {
        $res1 = "Your selected track is $track <br>";
        $res2 = "And your course is $language";
        $res3 = '<br><a href="update.php">Update course</a><br>';
        $res4 = '<a href="delete.php">Delete a course</a><br>';
    }
}
else{
    $res1 = "You have not selected a course </br>";
    $res2 = '<a href="add.php">Add a course</a>';
    $res3 = "";
    $res4 = "";

}

$conn->close();


?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1 align = "center"> Hi, <?php echo ($_SESSION["username"]);
    ?></h1>
    <h2 align = "center"> Welcome to your Dashboard</h2>

    <?php echo $res1, $res2, $res3, $res4; ?> <br>

    <!--<a href="update.php">Update courses</a><br> 

        <a href="delete.php">Delete a course</a><br>-->
        <p>
            <a href="reset_password.php">Reset password</a>
          </p>
          <p>
        <a href="logout.php">Logout</a>
        </p>
    </body>
    </html>