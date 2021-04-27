<?php
session_start();
include("conn.php");
if (isset($_POST['submit'])) {
	
	$language =  $_POST['language'];
	$user = $_SESSION['username'];

	$sql="SELECT * FROM course WHERE username='$user'";
	$check = mysqli_query($conn,$sql);
	if (mysqli_num_rows($check) < 1 ) {

		if ($language=='python' or $language=='php' or $language=='node.js') {
			$add = "INSERT INTO course (username, track, language) VALUES ('$user', 'Backend', '$language')";
			mysqli_query($conn, $add);
			header('location: home.php');
		}
		elseif ($language=='html' or $language=='css' or $language=='javascript') {
			$add = "INSERT INTO course (username, track, language) VALUES ('$user', 'Frontend', '$language')";
			mysqli_query($conn, $add);
			header('location: home.php');
		}
		elseif ($language=='figma' or $language=='photoshop'){
			$add = "INSERT INTO course (username, track, language) VALUES ('$user', 'Design', '$language')";
			mysqli_query($conn, $add);
			header('location: home.php');
		}
		elseif ($language=='kotlin' or $language=='java' or $language=='c++') {
			$add = "INSERT INTO course (username, track, language) VALUES ('$user', 'Mobile App', $language')";
			mysqli_query($conn, $add);
			header('location: home.php');
		}
		else{
			echo "Connection failure";
		}
	}

	else {
		echo "You can only select one course";
	}

	$conn->close();
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Add new course</title>
</head>
<body>
	<h1>Hi, <?php echo ($_SESSION["username"]); ?>
	<h2>Select a Language and framework below</h2>
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
