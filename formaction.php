<?php
	include 'conn.php';

if($_POST)
{
	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];
    $username = $_REQUEST['username'];
	$email = $_POST['email'];
	$password = $_REQUEST['password'];
	$password = md5($password);
		//generate users id
	$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$users_id = substr(str_shuffle($set), 0, 15);

	$sql="SELECT * FROM users WHERE username='$username' or email='$email'";
            $check = mysqli_query($conn,$sql);
            if (mysqli_num_rows($check) > 0) {
                $row = mysqli_fetch_assoc($check);
                if ($username==$row['username'])
                {
                    echo "Username already exists";
                }
				elseif($email==$row['email'])
                {
                    echo "Email already exists";
                }
                else 
                {
                	echo "Try Again";
                }
            }
            else 
			{  
                $add = "INSERT INTO users (users_id, firstname, lastname, username, email, password) VALUES('$users_id', '$firstname', '$lastname', '$username', '$email', '$password')";
  	            mysqli_query($conn, $add);
  	            $_SESSION['username'] = $username;
  	            echo "You are now logged in";
  	            header('location: login.php');
            }

            $conn->close();
    }        

?>