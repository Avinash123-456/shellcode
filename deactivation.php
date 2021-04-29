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
    <title>Hello, world!</title>
  </head>
  <body style="background-color: white">
  
    <div class="container-md space-y-3">
      <div class="head">
        <h3 class="font-bold  text-xl deactivate-heading">Deactivate your account</h3>

      </div>
      <div class="body">
        <div class="row gy-5">

                <div class="col-auto">
                <img src="images/profile.png" class="account-edit-profile-image">
              </div>
              <div class="col">
                <h4><strong>Anirudh</strong></h4>
                <button class="edit-info-subscribe border-1 border-black border-dashed">SUBSCRIBE</button>
                
              </div>
              </div>
          <div class="row gy-5" style="position: relative;top: 5px">
            <div class="col">
                <div class="card" style="width:auto;border: none;">
                <div class="card-body">
                  <h5 class="font-extrabold">This will deactivate your account</h5>
                  
                  <p class="card-text">you are about to start the process of deactivating your vind account.Your display name,@username and public profile will no longer be availabe on vind.com and you will no longer be able to access the live session and other classes</p>
                  <div class="card-body" style="background-color: white">
                    <button type="button" class="btn" onclick="deactivate();" style="background-color: red">Deactivate</button>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>    
      </div>

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
  <script> function deactivate()
    {
        if(confirm("Are you sure?"))
        window.location.replace("deactivate_account.php");
    }
    </script>
</html>