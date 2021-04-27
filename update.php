<?php
session_start();
include("conn.php");
if (isset($_POST['submit'])) {
	
	$language =  $_POST['language'];
	$user = $_SESSION['username'];

	$sql="SELECT * FROM course WHERE username='$user'";
	$check = mysqli_query($conn,$sql);
	if (mysqli_num_rows($check) < 1 ) {
            echo "You have not registered any course";
        }
        else {
            if ($language=='python' or $language=='php' or $language=='node.js') {
			$update = "UPDATE course SET track='Backend', language='$language' WHERE username='$user'";
			mysqli_query($conn, $update);
			header('location: home.php');
            }
    	
            elseif ($language=='html' or $language=='css' or $language=='javascript')
        {
			$update = "UPDATE course SET track='Frontend', language='$language' WHERE username='$user'";
			mysqli_query($conn, $update);
			header('location: home.php');
            }
		
		elseif ($language=='figma' or $language=='adobe')
        {
			$update = "UPDATE course SET track='Design', language='$language' WHERE username='$user'";
			mysqli_query($conn, $update);
			header('location: home.php');
            }
		
		elseif ($language=='kotlin' or $language=='java' or $language=='c++')
         {
			$update = "UPDATE course SET track='Mobile', language='$language' WHERE username='$user'";
			mysqli_query($conn, $update);
			header('location: home.php');
            }
		
		else{
			echo "Connection failure";
		}

	$conn->close();
}

}
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Update course</title>
</head>
<body>
	<h1>Hi, <?php echo ($_SESSION["username"]); ?>
	<h2>Select a new Language and framework below</h2>
	<br>

	<form action="" method="POST">
		<label for="track">Choose a track and language:</label>
		<select name="language" id="language">
			<optgroup label="Backend">
				<option value="python">Python</option>
				<option value="php">PHP</option>
				<option value="node.js">Node.js</option>
			</optgroup>
			<optgroup label="Frontend">
				<option value="html">HTML</option>
				<option value="css">CSS</option>
				<option value="javascript">Javascript</option>
			</optgroup>
			<optgroup label="Design">
				<option value="figma">Figma</option>
				<option value="photoshop">Adobe Photoshop</option>
		
			</optgroup>
			<optgroup label="Mobile">
				<option value="kotlin">Kotlin</option>
				<option value="java">Java</option>
				<option value="c++">C++</option>
			</optgroup>

		</select>
		<br><br>
		<input type="submit" name="submit">
	</form>

	<br>
	<a href="home.php">Home</a><br>
	<a href="logout.php">Sign Out</a>


</body>
</html>
