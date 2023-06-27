<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Compiled and minified CSS -->
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
                      <!--Import Google Icon Font-->
                      <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
<?php
session_start();
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database_name = "greenwich_db";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database_name);
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $_SESSION['id'] = $id;
                $sql = "SELECT * FROM inventory WHERE id = '$id'";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    $_SESSION['item'] = $row["item"];
                    $_SESSION['itemdescription'] = $row["itemdescription"];
                    $_SESSION['price'] = $row["sellingprice"];
                echo "<div class='container z-depth-2' style='margin-top:100px;margin-bottom:100px;'>
                <form action='checkout.php' method='POST' style='padding:50px;'>
                <h3>Carted Item</h3>
                <table id='priceTable'>
                    <thead>
                        <tr >
                            <th>Item</th>
                            <th>Item Description</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>". $row["item"] . "</td>
                            <td>". $row["itemdescription"] . "</td>
                            <td>&#8369; ". $row["sellingprice"] . ".00</td>
                            
                        </tr>
                    </tbody>
                </table><br><br>
                <div class='input-field'>
                        <input style='color: black;font-weight:bolder;' type='text' id='priceinput' name='itemprice' onkeyup='sum();' readonly>
                        <label for='itemprice' style='color: black;font-weight:bolder;'>Item Price</label>
                    </div>
                    <div class='input-field'>
                        <input type='text' id='cash' name='cash' onkeyup='sum();'>
                        <label for='cash'>Enter Customer's Cash (&#8369;)</label>
                    </div><br>
                        <div class='input-field'>
                            <input style='color: black;font-weight:bolder;' value='&#8369; 0.00' type='text' id='change' name='custchange' placeholder='' readonly>
                            <label style='color: black;font-weight:bolder;' id='list'>CHANGE</label>
                        </div>
                        
                        <input type='submit' value='CHECKOUT' name='pay'  class='btn green darken-2 right'>
                    </form></div>";
                    
                }    
                
                // $users = "SELECT u.username FROM cashieraccounts u WHERE u.id = '$user'";
                // $userss = $conn->query($users);
                // while($row = $userss->fetch_assoc()) {
                //     $cashier = $row['username'];
                //     if ($row > 0) {
                //         $success = true;
                //     }else {
                //         echo "<script>alert.('You are an admin');</script>";
                //     }
                // }
                
                // $item = "SELECT u.item FROM inventory u WHERE u.id = '$id'";
                // $itemq = $conn->query($item);
                // while($row = $itemq->fetch_assoc()) {
                //     $items = $row['item'];
                // }
                // $profit = "SELECT u.sellingprice FROM inventory u WHERE u.id = '$id'";
                // $profits = $conn->query($profit);
                // while($row = $profits->fetch_assoc()) {
                //     $price = $row['sellingprice'];
                // }
                // $date =  date("l, M j Y | h:i A");
                // $move = "INSERT INTO reports (id,cashier,item,price,date) 
                //             VALUES ('$id','$cashier','$items','$price','$date')";
                // $final = $conn->query($move);
                // $delete= "DELETE FROM `inventory` WHERE id = '$id'";
                // $result = $conn->query($delete);
            
        }
        if(isset($_POST['pay'])){
            $itemprice = $_POST['itemprice'];
            $cash = $_POST['cash'];
            $custchange = $_POST['custchange'];
            $_SESSION['custchange'] = $custchange;
            $_SESSION['cash'] = $cash;
            $success = false;
            $user = $_SESSION["userid"];
            $users = "SELECT u.username FROM cashieraccounts u WHERE u.id = '$user'";
                $userss = $conn->query($users);
                while($row = $userss->fetch_assoc()) {
                    $cashier = $row['username'];
                    if ($row > 0) {
                        $success = true;
                    }else {
                        echo "<script>alert.('You are an admin');</script>";
                    }
                }
            $itemid = $_SESSION["id"];
            $item = $_SESSION['item'];
            $itemdescript = $_SESSION['itemdescription'];
            $price = $_SESSION['price'];
            $date =  date("l, M j Y | h:i A");
            $move = "INSERT INTO checkout (cashier,item,itemdescription,price,cash,custchange,date) 
                       VALUES ('$cashier','$item','$itemdescript','$price','$cash',' $custchange','$date')";
            $final = $conn->query($move);
            
            if (mysqli_query($conn, $move))
            $final = $conn->query($move);        
  {
    echo "<script>window.location.replace('print.php')</script>";
    $delete= "DELETE FROM `inventory` WHERE id = '$itemid'";
                $result = $conn->query($delete);
  }
        }
        ?>

<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
<script>
    var origs = document.getElementById('priceTable').rows[1].cells[2].innerHTML;
        document.getElementById('priceinput').value = origs;
  
    function sum() {
        var orig = document.getElementById('priceinput').value.replace( /^\D+/g, '');
        var sell = document.getElementById('cash').value.replace( /^\D+/g, '');
        var total = parseInt(sell) - parseInt(orig);
        var unicode = '20B1';
        
        var peso =  String.fromCharCode( parseInt(unicode, 16) );
        var totals = peso + " " + total + ".00";
        if (!isNaN(total)) {
                document.getElementById('change').value = totals;
            } 
  }
</script>
</body>
</html>
