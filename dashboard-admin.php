<?php
        session_start();
        if(empty($_SESSION['adminuserid'])):
            header('Location:login.php');
        endif;

        
        session_start();
        if(empty($_SESSION['adminuserid'])):
            header('Location:login.php');
        endif;

        $session = $_SESSION['adminuserid'];

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
 
             
    <title>Greenwich</title>
    
    <style>
        
        .main {
            z-index: 100000;
        }
        .login h1{
            width: 100%;
            margin-top: 0;
        }
        .side {
            width: 250px;
        }
      
        .side li {
            width: 100%;
            padding: 0;
        }
        .side li a {
            text-decoration: none;
            color: white;
            width: 100%;
           
        }
        .side li:hover {
            background-color: rgba(0,0,0,0.5);
            transition: 0.5s;
        }

        .user {
            display: block;
            font-size: 20px;
            line-height: 1;
            color: white;
            margin-top: 5px;
        }
        .user p {
            margin-top: 0;
            margin-bottom: 45px;
         
        }
        .row i {
            font-size: 70px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.5);
        }
        .row i:hover {
            font-size: 70px;
            text-shadow: 0px 0px 0px rgba(0,0,0,0.5);
        }
        .dash {
            text-align: center;
            margin-top: 40px;
            margin-left: 300px;  
        }
        .content {
            margin-top: 300px;
            margin-left: 300px;
            margin-right: 29.4062px;
            border-top: 3px solid #212121 ;
        }
        
        .logo2 {
            font-size: 30.45px;
            padding-top: 20px;
        }
        @media screen and (max-width: 601px) {
            .user {
                margin-top: 56px;
            }
            .logo2 {
            display: none;
            }
            
        }
        @media screen and (max-width: 992px) {
           
            .dash {
                margin: auto;
            }
        }
        label {
            font-size: 15px;
        }
        .reports table {
            max-height: 100px;
            height: 10px;
            overflow: hidden;
        }
    </style>
</head>
<body>

    <nav class="nav-wrapper navbar-fixed green darken-2 main"> 
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
 
        <div class="container center">
            <a href="index.html" class="brand-logo"><b>greenwich</b></a>
        </div>
    </nav>
    

    <ul id="slide-out" class="sidenav sidenav-fixed grey darken-4 center-align scrollspy side">
        <div class="container logo2">
            <a href="#" class="green-text text-darken-2"><b>greenwich</b></a>
        </div>
            <div class="container user user-view">
                <i class="large material-icons">account_circle</i>
                <p><b>Admin</b></p>
            </div>
       
        <li><a href="#dashboard">Dashboard</a></li>
        <li><a href="#inventory">Inventory</a></li>
        <li><a href="#users">Users</a></li>
        <li><a href="#reports">Sales Records</a></li>
        
        <br><br><br>
        <form>
            <a href="admin-signup.html" class="btn green darken-2">CREATE ADMIN</a>
        </form>
            <form action="logout.php">
                <input type="submit" value="Logout" class="btn green darken-2">
            </form>
        <br>
            <footer>
                <p class="grey-text" style="font-size: 12px;padding: 0;margin: 12px 0px 0px 0px;">All Rights Reserved 2021 Greenwich&copy;</p>
            </footer>
        
    </ul>
  


    <section class="container dash center section scrollspy" id="dashboard">
        
        <div class="row">
            <h1>Point of Sale</h1><br><br>
            <div class="col s6">
                <h5>Dashboard</h5>
                <a href="#dashboard">
                    <i class="material-icons green-text text-darken-2">dashboard</i>
                </a>
            </div>
            <div class="col s6">
                <h5>Inventory</h5>
                <a href="#inventory">
                    <i class="material-icons green-text text-darken-2">inventory</i>
                </a>
            </div>
            
        </div><br><br>
        <div class="row">
            
            <div class="col s6">
                <h5>Users</h5>
                <a href="#cashiers">
                    <i class="material-icons green-text text-darken-2">group</i>
                </a>
            </div>
            <div class="col s6">
                <h5>Sales Records</h5>
                <a href="#reports">
                    <i class="material-icons green-text text-darken-2">assessment</i>
                </a>
            </div>
        </div>
    </section>
    
    <section class="container right content section scrollspy" id="inventory">
        <div class="row">
            <div class="col s12">
                <h4><i class="material-icons green-text text-darken-2" style="position:relative">inventory</i> Inventory</h4>
            </div>
        </div>
        <div class="row">
            <div class="col s5">
                <form action="dashboard-admin.php?#inventory" method="POST">
                    <div class="input-field">
                        <input type="text" class="validate" id="item" name="item">
                        <label for="item">Item</label>
                    </div><br>
                    <div class="input-field">
                        <textarea class="materialize-textarea" id="item_description" name="item_des"></textarea>
                        <label for="item_description">Item Description</label>
                    </div><br>
                    <div class="input-field">
                        <input type="text" id="orig_price" name="origprice" onkeyup="sum();">
                        <label for="orig_price">Original Price</label>
                    </div><br>
                    <div class="input-field">
                        <input type="text" id="sell_price" name="sellprice" onkeyup="sum();">
                        <label for="sell_price">Selling Price</label>
                    </div><br><br>
            </div>
            <div class="col s5 offset-s1">
            
                <div class="input-field">
                        <input style="color: black;font-weight:bolder;" value="&#8369; 0.00" type="text" id="profit" name="profit" placeholder=" " readonly>
                        <label style="color: black;font-weight:bolder;" id="list">PROFIT</label>
                    </div>
                    <input type="submit" name="additem" value="ADD ITEM" class="btn right green darken-2" style="margin-top: 20px;">
                </form>
            </div>
        </div>
        <br>
        
        <div class="row">
            <div class="row left">
                <div class="col s12">
                    <h5 style="padding: 0;margin: 0;">List of Items</h5>
            </div>
            </div>
            <div class="col s12">
                 <table class="reponsive-table">
                     <thead>
                         <th>Item</th>
                         <th>Item Description</th>
                         <th>Original Price</th>
                         <th>Selling Price</th>
                         <th>Profit Each</th>
                     </thead>
                     <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database_name = "greenwich_db";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database_name);
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $delete= mysqli_query($conn, "DELETE FROM `inventory` WHERE id = '$id'");
            }
        
        if(isset($_POST['additem'])) {
            $item = $_POST['item'];
            $itemdes = $_POST['item_des'];
            $origprice = $_POST['origprice'];
            $sellprice = $_POST['sellprice'];
            $profit = $_POST['profit'];


            $sql_query = "INSERT INTO inventory (item,itemdescription,originalprice,sellingprice,profiteach)
            VALUES ('$item','$itemdes','$origprice','$sellprice','$profit')";
            $result = $conn->query($sql_query);
        }
        $success = false;
            $sql = "SELECT * FROM inventory";
            $results = $conn->query($sql);
                if ($results->num_rows > 0) {     
                    while($row = $results->fetch_assoc()) {
                    echo "
                    <tbody>
                        <tr>
                            <td>" . $row["item"] . "</td>
                            <td>" . $row["itemdescription"] . "</td>
                            <td>&#8369; " . $row["originalprice"] . ".00</td>
                            <td>&#8369; " . $row["sellingprice"] . ".00</td>
                            <td>" . $row["profiteach"] . "</td>
                            <td><a href='dashboard-admin.php?id=" . $row['id'] . "#list' class='btn red' '>Remove</a> " . "</td>
                               
                        </tr>
                    </tbody>";
                    if($row["id"] > 0)
                            {
                                $success = true;
                            }
                    }
            } 
            if ($success == true)
            {       
                echo "<script>yuo = 'success';
                                alert.(yuo);</script>";
            }
            
            else {
                echo "Error" . mysqli_error($conn);
              }
            
            mysqli_close($conn);      
        
        ?>
                     
                 </table>
            </div>    
         </div>
    </section>

    
    
    <section class="container right content section scrollspy" id="cashiers">
        <div class="row">
            <div class="col s12">
                <h4><i class="material-icons green-text text-darken-2">group</i> Users</h4>
            </div>
        </div>
        <div class="row">
                <div class="col s9">
                    <h5 style="padding: 0;margin: 0;">Accounts</h5>
                </div>
                
             <div class="col s2">
              <a href="cashier-signup.html" class="btn green darken-2 flow-text"> Add User</a>   
             </div>
         </div>
            <div class="col s12">
                 <table class="reponsive-table">
                     <thead>
                         <tr>
                            <th>Username</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Password</th>
                            <th> </th>
                         </tr>
                     </thead>
                     <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database_name = "greenwich_db";
        
                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $database_name);
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $delete= mysqli_query($conn, "DELETE FROM `cashieraccounts` WHERE id = '$id'");
                    }

                    $success = false;

                    $sql = "SELECT * FROM cashieraccounts";
                    
                    $result = $conn->query($sql);
                        if ($result->num_rows > 0) {     
                            while($row = $result->fetch_assoc()) {
                            echo "
                            <tbody>
                                <tr>
                                    <td>" . $row["username"] . "</td>
                                    <td>" . $row["fname"] . "</td>
                                    <td>" . $row["lname"] . "</td>
                                    <td>" . $row["email"] . "</td>
                                    <td>" . $row["contact"] . "</td>
                                    <td>" . $row["password"] . "</td>
                                    <td>" . "<a href='dashboard-admin.php?id=" . $row['id'] . "#admins' class='btn red' '>Remove</a> " . "</td>
                                </tr>
                            </tbody>";
                            if($row["id"] > 0)
                            {
                                $success = true;
                                
                            }
                            }
                        }
                    if ($success == true)
                    {       
                        echo "<script>yuo = 'success';
                                alert.(yuo);</script>";
                    }
                    else {
                        echo "Error" . mysqli_error($conn);
                      }
                      mysqli_close($conn);      
                    ?>  
                 </table>
            </div>    
         </div>

    </section>
    <section class="container right content section scrollspy" id="reports">
        <div class="row">
            <div class="col s12">
                <h4><i class="material-icons green-text text-darken-2">assessment</i> Sales Records</h4>
            </div>
        </div>
        <div class="row reports" >
                <div class="col s5">
            <div class="input-field">
                        <input type="text" id="records" name="item" onkeyup="myFunction()">
                        <label for="item">Search Receipt No.</label>
                    </div>
            </div>
            <div class="col s12">
                 <table id="myTable" class="reponsive-table">
                     <thead>
                         <th>Receipt No.</th>
                         <th>Cashier</th>
                         <th>Item</th>
                         <th>Item Description</th>
                         <th>Price</th>
                         <th>Customer's Cash</th>
                         <th>Change</th>
                         <th>Date</th>
                     </thead>
                     <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database_name = "greenwich_db";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database_name);
        
        

            $sql = "SELECT * FROM checkout";
            $results = $conn->query($sql);
                if ($results->num_rows > 0) {     
                    while($row = $results->fetch_assoc()) {
                    echo "
                    <tbody>
                        <tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["cashier"] . "</td>
                            <td>" . $row["item"] . "</td>
                            <td>" . $row["itemdescription"] . "</td>
                            <td>&#8369; " . $row["price"] . ".00</td>
                            <td>&#8369; " . $row["cash"] . ".00</td>
                            <td>&#8369; " . $row["custchange"] . ".00</td>
                            <td>" . $row["date"] . "</td>  
                        </tr>
                    </tbody>";
                    if($row["id"] > 0)
                            {
                                $success = true;
                            }
                    }
            } 
            if ($success == true)
            {       
                echo "<script>yuo = 'success';
                                alert.(yuo);</script>";
            }
            
            else {
                echo "Error" . mysqli_error($conn);
              }
            
            mysqli_close($conn);      
        
        ?>
                     
                 </table>
            </div>    
         </div>
    </section>
    
    
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script>
        function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("records");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }       
        }

        
        }

    </script>
     <script>
$(document).ready(function(){
    $('select').formSelect();
  });
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  $(document).ready(function(){
    $('.scrollspy').scrollSpy();
  });
  $(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
     $(".side li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          $(this).addClass("active");
     })
});

$(document).ready(function(){
    $('.modal').modal();
  });

  function sum() {
        var orig = document.getElementById('orig_price').value;
        var sell = document.getElementById('sell_price').value;
        var total = parseInt(sell) - parseInt(orig);
        var unicode = '20B1';
        
        var peso =  String.fromCharCode( parseInt(unicode, 16) );
        var totals = peso + " " + total + ".00";
        if (!isNaN(total)) {
                document.getElementById('profit').value = totals;
            }
            
  }
     </script>

</body>
</html>