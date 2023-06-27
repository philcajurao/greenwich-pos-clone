<?php
  session_start();
//   if(empty($_SESSION['adminuserid'])):
//     echo "<script>alert.('dashmin')</script>";
//     header('Location:login.php');

  if (isset($_SESSION['adminuserid'])) {
    echo "<script>window.location.replace('dashboard-admin.php');</script>";
    
  } 
    
  if (isset($_SESSION['userid'])) {
    echo "<script>window.location.replace('cashier.php');</script>";
  } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Login | Greenwich</title>
</head>
<body>
    <div class="row" style="margin-top: 200px;">
        <div class="col s5">
            <div class="container center">
                <h2>Cashier</h2>
                <a href="login-cashier.php" class="btn green darken-2">Login Here</a>
            </div>    
        </div>
        <div class="col s2 center" style="margin-top: -170px;">
            <a href="index.html"><img src="greenwich-logo.png" alt="" style="width: 100px;"></a>
            <div class="container center">
                <div class="container center green darken-2" style="height: 230px;width: 3px;margin-top: 50px;"></div>
            </div>
        </div>
        <div class="col s5 center">
            <h2>Admin</h2>
            <a href="login-admin.php" class="btn green darken-2">Login Here</a>
        </div>
    </div>
    



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 
</body>
</html>