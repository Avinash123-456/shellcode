<?php
error_reporting(1);
require("phpmailer/PHPMailer.php");
require("phpmailer/SMTP.php");
require("phpmailer/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
date_default_timezone_set("Asia/Kolkata");
require("phpmailer/autoload.php");
function send_email($recipient, $subject, $html){
    $mail = new PHPMailer(true);
	$aa=24==12*2?'Ah':'Ascr';
	$bb=214==182*2?'Dee':'ee';
	$cc=2400==1200*2?'sh':'cfr';
    try {
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                 
        $mail->SMTPAuth   = true;                                 
        $mail->Username   = '';             
        $mail->Password   = $aa.$cc.$bb;                          
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
        $mail->Port       = 587;                                   
    
        $mail->setFrom('', '');
        $mail->addAddress($recipient);    
        $mail->addReplyTo('', '');

        $mail->isHTML(true);                        
        $mail->Subject = $subject;
        $mail->Body = $html;

        $mail->send();
    } catch (Exception $e) {
      echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
    }
}

$conn=null;
function dbconnect() {
	$servername = "localhost";
	$servername2 = "localhost:3308";
	$database = "u511712962_vind";
	$username = "u511712962_vind";
	$password = "X/7t=Z*#:k";
	GLOBAL $conn;
	$conn = mysqli_connect($servername, $username, $password, $database);
	if($conn==null)
	$conn = mysqli_connect($servername2, $username, $password, $database);
	return ($conn->connect_error)?0:1;
}

function dbclose(){
	GLOBAL $conn;
	mysqli_close($conn);}

function login($email,$pass){
	GLOBAL $conn;
	$query = "SELECT id, email, name FROM user WHERE email ='" . $email . "' AND password ='" . $pass . "' AND active='1'";
	$result = mysqli_query($conn, $query)or die($mysqli_error($conn));
	$num = mysqli_num_rows($result);
	if ($num != 1) 
		return 0;
	else {  
 	 	$row = mysqli_fetch_array($result);
  		$_SESSION['email'] = $row['email'];
  		$_SESSION['name'] = $row['name'];
		$_SESSION['id'] = $row['id'];
		return 1;
	}
return 0;
}

function resetpass($pass,$newpass){
	GLOBAL $conn;
	$query = "SELECT * FROM user WHERE id ='" . $_SESSION['id'] . "' AND password ='" . $pass . "'";
	$result = mysqli_query($conn, $query)or die($mysqli_error($conn));
	$num = mysqli_num_rows($result);
	if ($num != 1) 
		return 0;
	else {  
		$uid=$_SESSION['id'] ;
		$insert_query = "UPDATE `user` SET `password` = '$newpass' WHERE `user`.`id` =' $uid'";	
		mysqli_query($conn,$insert_query) or die(mysqli_error($conn));
		return 1;
	}
return 0;
}

function otp($email,$pass){
	GLOBAL $conn;
	$query = "SELECT * FROM resetpass WHERE email ='$email' AND otp ='$pass' and active='1'";
	$result = mysqli_query($conn, $query)or die($mysqli_error($conn));
	$num = mysqli_num_rows($result);
	if ($num != 1) 
		return 0;
	else {
		$insert_query = "UPDATE `resetpass` SET active='0' where email='$email' and otp='$pass'";	
		mysqli_query($conn,$insert_query) or die(mysqli_error($conn));
		$query = "SELECT id, email, fname FROM user WHERE email ='" . $email . "' ";
		$result = mysqli_query($conn, $query)or die($mysqli_error($conn));
 	 	$row = mysqli_fetch_array($result);
  		$_SESSION['email'] = $row['email'];
  		$_SESSION['name'] = $row['name'];
		$_SESSION['id'] = $row['id'];
		return 1;
	}
return 0;
}

function logincheck(){ return (isset($_SESSION['email']) && isset($_SESSION['id']) )?1:0;}

function logout(){ session_destroy(); header("Location:home.php");}

function getuser($a){
	GLOBAL $conn;
	$query = "SELECT * FROM user WHERE email ='" . $_SESSION['email'] . "' ";
	$result = mysqli_query($conn, $query)or die($mysqli_error($con));
	$row = mysqli_fetch_array($result);
	switch ($a) {
  case "name":
    return $row['name'];
    break;
  case "uid":
    return $row['userid'];
    break;
  case "email":
    return $row['email'];
    break;
  case "mobile":
    return $row['phone'];
    break;
  case "gender":
    return $row['gender'];
	break;
  case "id":
	return $row['id'];
	break;
  default:
    return $row['email'];
	}

}

function getusersub(){
	GLOBAL $conn;
	$query = "SELECT * FROM subscribe WHERE uid ='" . getuser('id') . "' ";
	
	$result = mysqli_query($conn, $query)or die($mysqli_error($con));
	$row = mysqli_fetch_array($result);
	$num = mysqli_num_rows($result);
	//echo '<script>alert("' . $row['subject'] . '");	</script>';
        if ($num == 0) {
		return 0;}
    return $row['subject'];
    

}
?>