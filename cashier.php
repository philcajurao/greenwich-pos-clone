<?php
        session_start();
        if(empty($_SESSION['userid'])):
            header('Location:login.php');
        endif;
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
        
        .content {
            margin-top: 20px;
            margin-left: 300px;
            margin-right: 29.4062px;
            /* border-bottom: 3px solid #212121 ; */
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
        .input-field label {
            font-size: 15px;
            font-weight: bolder;
            color: black;
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
                <i class="large material-icons">person</i>
                <p><b>Cashier</b></p>
            </div>

        <li><a href="#cashier">Dashboard</a></li>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        
        <form action="logout.php">
            <input type="submit" value="Logout" class="btn green darken-2">
        </form>
       <br>
            <footer>
                <p class="grey-text" style="font-size: 12px;padding: 0;margin: 12px 0px 0px 0px;">All Rights Reserved 2021 Greenwich&copy;</p>
            </footer>
    </ul>
  
    
    <section class="container right content section scrollspy" id="cashier" >
        <div class="row">
            <div class="col s6">
                <h4><i class="material-icons green-text text-darken-2">assignment_ind</i> Cashier</h4>
            </div>
        </div>
        
  </div>
        <div class="row">
            <div class="col s5">
                    <div class="input-field">
                        <input type="text" id="item" name="itemsearch" onkeyup="myFunction()">
                        <label for="itemsearch">Search Item</label>
                    </div><br><br>
                </div>    
        </div>
    </section>
    <section class="container right content section scrollspy" id="list" style="margin-top:-40px;">
    <div class="row">
            <div class="row left">
                <div class="col s12">
                    <h5 style="padding: 0;margin: 0;">List of Items</h5>
                </div>
            </div>
            
            <div class="col s12">
                 <table id="myTable">
                     <thead>
                         <th>Item</th>
                         <th>Item Description</th>
                         <th>Price</th>
                     </thead>
                     <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database_name = "greenwich_db";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database_name);
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
                            <td>&#8369; " . $row["sellingprice"] . ".00</td>
                            <td>" . "<a href='checkout.php?id=" . $row['id'] . "' class='btn green' '>BUY</a> " . "</td>
                                
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
                echo " " . mysqli_error($conn);
              }
            
            mysqli_close($conn);      
        
        ?>
                     
                 </table>
            </div>    
         </div>
    </section>

    
    

    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <script>
        function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("item");
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
     </script>

</body>
</html>