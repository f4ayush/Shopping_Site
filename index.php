<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) { 
    header('location: product.php');
    } 
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="btsrp/css/bootstrap.min.css">
        <link rel="stylesheet" href="index.css" type="text/css">
        <script src="btsrp/js/jquery-3.3.1.min.js"></script>
        <script src="btsrp/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <title>
           bootstrap
        </title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div id="banner-image">
            <div class="container">
                <center>
                <div id="banner-content">
                    <h1>We sell Lifestyle</h1>
                    <p>Flat 40% off on premium brands</p>
                    <a href="product.php"><button type="button" class="btn btn-danger btn-lg active">Shop now</button></a>
                </div>
                </center>
            </div>
            
        </div>
        
        <!------footer----------->
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>