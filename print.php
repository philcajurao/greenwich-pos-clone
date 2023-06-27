
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
        body {
            border: 1px solid black;
        }
        h3 {
            margin-bottom: 0;
        }
        p {
            margin: 0;
        }
        h1 {
            margin-top: 7px;
        }
        td {
            text-align: center;
            
        }
        tr {
            border: none;
        }
        th {
            font-weight: bold;
            text-align: center;
        }
        hr {
            border-top: 1px dashed black;
        }
        .sign p {
            text-align: center;
        }
    </style>
    <?php
     session_start();
     $servername = "localhost";
            $username = "root";
            $password = "";
            $database_name = "greenwich_db";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database_name);
    ?>
</head>
<body>
<div class="row">
    <div class="col s12 center first">
        <h3>Greenwich</h3>
        <p>Antipolo City, Philippines</p>
    </div>
</div>
<div style="width: 100%;overflow:hidden;">
<h6>==========================================================================================================================================</h6>
</div>
<div class="row" style="margin:0;">
    <div class="col s6 center">
        <p><b>Date:</b></p>
    </div>
    <div class="col s6 center">
        <p><b>Time:</b></p>
    </div>
</div>
<div class="row" style="margin:0;">
    <div class="col s6 center">
        <p id="date">xx</p>
    </div>
    <div class="col s6 center">
        <p id="time">xx</p>
    </div>
</div>
<div style="width: 100%;overflow:hidden;">
<h6>==========================================================================================================================================</h6>
</div>
<div class="row">
    
<table>
    <thead>
        <tr>
            <th>Item</th>
            <th>Item Description</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $_SESSION['item']; ?></td>
            <td><?php echo $_SESSION['itemdescription']; ?></td>
            <td>&#8369; <?php echo $_SESSION['price']; ?>.00</td>
        </tr>
    </tbody>
</table>
</div>
<hr>
<br>
<div class="row">
    <div class="col s12 center">
        <p><b>TOTAL: &#8369;<?php echo $_SESSION['price']; ?>.00</b></p>
        <p><b>CASH: &#8369;<?php echo $_SESSION['cash']; ?>.00</b></p>
        <p><b>CHANGE: <?php echo $_SESSION['custchange']; ?></b></p>
        
    </div>
</div><hr>

<footer>
<div class="row">
    <div class="col s12 center">
        <b><p>THIS SERVES AS YOUR OFFICIAL RECEIPT</p></b>
        
        <br>
        <p>For any feedback, contact us:</p>
        <p><b>Email: </b>feedback@greenwich.org</p>
        <p><b>Hotline: </b>(02) 898-7777</p>
        <p><b>SMS: </b>(0917) 800-7000</p>
        <br>
        <b><p>VALID FOR FIVE (5) YEARS FROM THE DATE OF THE PREMIT TO USE</p></b>
    </div>
</div>
</footer>
<br><br><br><br><br><br><br>
<div class="row">
    <div class="col s6 offset-s6 sign">
        <p>____________________________</p>
        <p>Signature</p>
    </div>
</div>


    

<script>
   var dateObj = new Date();
var month = dateObj.getUTCMonth() + 1; //months from 1-12
var day = dateObj.getUTCDate();
var year = dateObj.getUTCFullYear();
var newdate = year + "/" + month + "/" + day;
document.getElementById('date').innerHTML = newdate;

const d = new Date();
const hrs = d.getHours();
const mins = d.getMinutes();
var newtime = hrs + ":" + mins;
document.getElementById("time").innerHTML = newtime;
</script>
    
<script>
    window.print();
</script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    

</body>
</html>