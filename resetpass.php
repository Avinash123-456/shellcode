<?php
session_start();
require("util/master.php");
dbconnect();
if(isset($_POST['oldpass']))
{
$oldpass= mysqli_real_escape_string($conn,$_POST['oldpass']);
$newpass=(mysqli_real_escape_string($conn,$_POST['newpass']));
$newpass2= mysqli_real_escape_string($conn,$_POST['newpass2']);

    if ($newpass != $newpass2) {
      echo '<script>alert("confirm password do not match.");
	window.location.replace("home.php");
	</script>';
    } 
    else  {
		if(resetpass($oldpass,$newpass)==1){
		echo '<script>alert("Password changed successfully.");
		window.location.replace("home.php");
		</script>';}
		else
		{
		echo '<script>alert("Some error occured.");
		window.location.replace("home.php");
		</script>';
		}
    }
  }
?>