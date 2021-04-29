<?php
session_start();
require("util/master.php");
dbconnect();
$uid=getuser("uid");
	$insert_query = "UPDATE `user` SET `active` = '0' WHERE `user`.`userid` = '$uid'";	
		mysqli_query($conn,$insert_query) or die(mysqli_error($conn));
echo "<script> window.location.replace('index.php'); </script>";
?>