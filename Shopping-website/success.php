<?php
require 'includes/common.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <link rel="stylesheet" href="btsrp/css/bootstrap.min.css">
        <link rel="stylesheet" href="login.css" type="text/css">
        <script src="btsrp/js/jquery-3.3.1.min.js"></script>
        <script src="btsrp/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <title>
           Sign up
        </title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        if (!isset($_SESSION['email'])) {
            header('location:index.php');
        
        }echo ' Your order is confirmed. Thank you for shopping with us.';
        echo "<a href=product.php>Click here</a>";
              echo  'to purchase any other item.';
        ?>
        
        <div class="container aa fl">
            <center>
            <p>
                Your order is confirmed. Thank you for shopping with us.<a href="product.html"> Click here</a> to purchase any other item. 
            </p>
            </center>
        </div>
        
        <!------footer----------->
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
