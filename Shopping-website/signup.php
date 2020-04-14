<?php
require 'includes/common.php';
if (isset($_SESSION['e-mail'])){
    header('location:product.php');
}
?>
<!--
Signup Page 
● Add common.php file. 
● This page will not be visited by logged in users i.e. if the session is set,
 redirect the user to products.php page.
● Remove header and footer code, include php files for the same.
● Use HTML5 validations for the form fields. 
● Form data will be send to signup_script.php page using POST method. 
 
-->

<!DOCTYPE html>
<html lang="en">
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
        ?>  
        <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <form method="post" action="signup_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name"  required = "true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="e-mail" required = "true">
                                <div> <?php
                                   // echo $_GET['email_error'];?></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true"
                                       pattern=".{6,}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" name="contact" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
 
            
        <!------footer----------->
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>