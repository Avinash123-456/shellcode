<?php
session_start();
require("util/master.php");
dbconnect();
if(isset($_GET['sub']))
{
    if($_GET['action']==1){
        $id=getuser("id");
        $sql_query = "SELECT * FROM subscribe WHERE uid = '$id'";
        $result = mysqli_query($conn, $sql_query)or die($mysqli_error($conn));
        $num = mysqli_num_rows($result);
        if ($num != 0) {
          mysqli_query($conn,"DELETE FROM `subscribe` WHERE `subscribe`.`id` = $id");
        } 
        else  {
            $sub=$_GET['sub'];
            $insert_query = "INSERT INTO subscribe(uid,subject) VALUES
            ('$id','$sub')";	
            mysqli_query($conn,$insert_query) or die(mysqli_error($conn));
            
            echo '<script>alert("Subscribed Successfully ");
            window.location.replace("bookpage.php");
            </script>';
            }
        }
	
    else{
        $id=getuser("id");
        $sql_query = "SELECT * FROM subscribe WHERE uid = '$id'";
        $result = mysqli_query($conn, $sql_query)or die($mysqli_error($conn));
        $num = mysqli_num_rows($result);
        
        if ($num != 0) {
            mysqli_query($conn,"DELETE FROM `subscribe` WHERE `subscribe`.`uid` = ".$id." ");
          //echo '<script>alert("' . $num . '");	</script>'; 
        }

        echo '<script>alert("Unsubscribed Successfully ");
        window.location.replace("bookpage.php");
        </script>';

    }
}
?>