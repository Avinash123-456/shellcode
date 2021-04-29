<?php
session_start();
require("util/master.php");
dbconnect();
if(isset($_POST['psw']))
{
$email= mysqli_real_escape_string($conn,$_POST['uname']);
$pass=(mysqli_real_escape_string($conn,$_POST['psw']));
if(login($email,$pass)==1)
	{
		echo '<script>
		window.location.replace("home.php");
		</script>';
	}
else
{
	echo '<script>alert("Invalid credential");
	window.location.replace("Login.html");
	</script>';
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login </h2>

<form action="#" method="post">

<label for="uname"><h2>Dummy login page</h2></label>
  <div class="container" style="width:80%;">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" class="btn btn-primary">signup</button>

    <span class="psw"><a href="signup.php">signup</a></span>
      </div>
</form>

</body>
</html>
