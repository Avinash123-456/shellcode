<?php

session_start();
require_once("util/master.php");
dbconnect();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="css/uikit.min.css" />
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <script src="js/uikit.min.js"></script>
      <style type="text/css">
            @media (max-width: 727.98px) {
                
             #labelname{
                 font-size:80%;
             }   
            }
      </style>
    <title>Hello, world!</title>
  </head>
  <body style="background-color: transparent;overflow-x: hidden;">
      <div class="account-information  ">
        <h3 class="account-information-heading font-semibold">Account Information</h3>
        <table class="form-table container-lg ">
          <tr>
            <td>
              <div class="row">
                <div class="col-auto">
                <img src="images/profile.png" class="account-edit-profile-image" id="account-edit-profile-image">
              </div>
              <div class="col">
                <h4 class="account-edit-username" id="account-edit-username"><strong><?php echo logincheck()?getuser("name"):'Hello'?></strong></h4>
                <button class="edit-info-subscribe border-1 border-black border-dashed" id="edit-info-subscribe">SUBSCRIBE</button>
                  <div class="profile-input" uk-form-custom>
            <input type="file">
            <span class="uk-link" id="inputfile-text"><b>chane profile picture</b></span>
        </div>
              </div>
              </div> 

          </td>
          </tr>
          <tr>
            <td>
              <form method="POST" action="update-info.php" class="edit-info-form">
                <div class=" row mb-4">
                  <div class="col-3">
                  <label for="staticEmail" class=" col-form-label" id="labelname"><b>Name</b></label>
                </div>
                  <div class="col-8">
                    <input type="text" value="<?php echo logincheck()?getuser("name"):'Hello'?>"  class="form-control" id="inputName" name="name" placeholder="<?php echo logincheck()?getuser("name"):'Hello'?>">
                    <label for="staticEmail" class="text-xs col-form-label text-muted">You can only change  your name twice in within 14 days</label>
                  </div>
                </div>
                <div class="mb-4 row">
                  <label for="inputusername" class="col-3 col-form-label" id="labelname"><b>Username</b></label>
                  <div class="col-8">
                    <input type="text" value="<?php echo logincheck()?getuser("uid"):'Hello'?>" readonly class="form-control" id="inputuser" name="username" >
                  </div>
                </div>
                <div class="mb-4 row">
                  <label for="inputemail" class="col-3 col-form-label" id="labelname"><b>Email</b></label>
                  <div class="col-8">
                    <input type="text" class="form-control" id="inputuser" value="<?php echo getuser("email") ?>" name="email" placeholder="anirudh@gmail.com">
                  </div>
                </div>
                <div class="mb-4 row">
                  <label for="inputphone" class="col-3 col-form-label" id="labelname"><b>Phone Number</b></label>
                  <div class="col-8">
                    <input type="text" class="form-control" id="inputuser" name="phone" value="<?php echo getuser("mobile") ?>">
                  </div>
                </div>
                <div class="mb-4 row">
                  <label for="inputgender" class="col-3 col-form-label" id="labelname"><b>Gender</b></label>
                  <div class="col-8">
                   <select class="form-select" aria-label="Default select example" id="inputuser" name="gender" >
                      
                      <option value="male">Male</option>
                      <option  value="female">Female</option>
                    
                    </select>
                    <script>document.getElementsByName("gender").value="<?php echo getuser("gender") ?>";</script>
                  </div>
                </div>
                <center><button type="submit" id="edit-info-submit" class="btn btn-primary"> submit</button></center>
              </form>
            </td>
          </tr>
        </table>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>