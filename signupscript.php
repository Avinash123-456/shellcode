<?php
session_start();
require("util/master.php");
dbconnect();
$pass=(mysqli_real_escape_string($conn,$_POST['psw']));
$email=mysqli_real_escape_string($conn,$_POST['email']);


	$sql_query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql_query)or die($mysqli_error($conn));
    $num = mysqli_num_rows($result);
    if ($num != 0) {
      echo '<script>alert("Account already exist with this email.\n Please login to continue");
	window.location.replace("Login.html");
	</script>';
    } 
    else  {
		$insert_query = "INSERT INTO user(email,password) VALUES
		('$email','$pass')";	
		mysqli_query($conn,$insert_query) or die(mysqli_error($conn));
		
		echo '<script>alert("Account created successfully.\n Please login to continue");
		window.location.replace("Login.html");
		</script>';
    }

?>