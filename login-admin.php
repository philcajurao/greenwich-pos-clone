<?php
  session_start();
?>

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
    <style>
        .box {
            width: 400px;
            margin-top: 20px;
           
        }
        .box form {
            padding: 30px 70px 30px 70px;
        }
        .box form h5 {
            margin: 0;
            display: block;
        }
        .submit a {
            display: block;
        }
    </style>
   
</head>
<body>

    <div class="container center-align">
        <a href="index.html"><img src="greenwich-logo.png" alt="" style="width: 100px;margin-top: 10px;"></a>
    </div>
    <div class="container box z-depth-2">
        
        <form action="login-admin.php" method="POST" >
            <div class="center-align">
                <i class="large material-icons green-text text-darken-3">account_circle</i>
                <h5> ADMIN LOGIN</h5><br><br>
            </div>

            <div class="input-field">
                <label for="username" >Username</label>
                <input type="text" name="usename" id="" required>
             </div>

            <div class="input-field">
                <label for="password">Password</label>
                <input type="password" name="pass" id="" required><br><br><br>
            </div>

            <div class="row submit">
            <input type="submit" name="save" value="Login" class="btn col s12 green darken-2"><br>
            
            </div>
        </form>
    </div>

    <?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "greenwich_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database_name);
    
    if(isset($_POST['save']))
    { 
      $usename = $_POST['usename'];
      $pass = $_POST['pass'];
    
      
      $success = false;
    
    
      $sql_query = "SELECT u.id FROM adminaccounts u WHERE u.username = '$usename' AND u.password = '$pass'";
      
      $result = $conn->query($sql_query);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              if($row["id"] > 0)
              {
                  $success = true;
                  $_SESSION["adminuserid"] = $row["id"];
              }
            }
          }
      if ($success == true)
      {       
        echo "<script>window.location.replace('dashboard-admin.php');</script>";
      }                                        
      else {
        echo "<script>
              alert('Wrong Username or Password!')
              window.location.replace('login.php');; 
              </script>";
      }
      mysqli_close($conn);
    }
    ?>

    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script>
          $(document).ready(function(){
    $('select').formSelect();
  });
     </script>
</body>
</html>