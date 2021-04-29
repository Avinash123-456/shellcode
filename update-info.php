<?php
session_start();
require("util/master.php");
dbconnect();
if(isset($_POST['username']))
{
$uid= mysqli_real_escape_string($conn,$_POST['username']);
$name= mysqli_real_escape_string($conn,$_POST['name']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$gen= mysqli_real_escape_string($conn,$_POST['gender']);
$email=mysqli_real_escape_string($conn,$_POST['email']);


	$sql_query = "SELECT * FROM user WHERE userid = '$uid'";
    $result = mysqli_query($conn, $sql_query)or die($mysqli_error($conn));
    $num = mysqli_num_rows($result);
    if ($num == 0) {
      echo '<script>alert("something went wrong");
	window.location.replace("home.php");
	</script>';
    } 
    else  {
		$insert_query = "UPDATE `user` SET `name` = '$name', `email` = 'email', `phone` = '$phone' , `gender` = '$gen' WHERE `user`.`userid` = '$uid'";	
		mysqli_query($conn,$insert_query) or die(mysqli_error($conn));
		
		echo '<script>alert("Updated successfully.");
		window.location.replace("home.php");
		</script>';
    }
  }
?>