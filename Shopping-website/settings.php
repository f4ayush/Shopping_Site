<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
            header('location:index.php');
        
        }
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>products</title>
        <link rel="stylesheet" href="btsrp/css/bootstrap.min.css">
        <link rel="stylesheet" href="login.css" type="text/css">
        <script src="btsrp/js/jquery-3.3.1.min.js"></script>
        <script src="btsrp/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">        
    </head>
    <body>
        <?php
        include 'includes/header.php';
        require_once './settings_script.php';
        ?>
        
        <div class="container-fluid aa">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>Change Password</h2>
                        <?= $pass_change ?>
                        <form method="post" action="">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old Password" name="old_Password"  required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="New_Password"  name="new_password" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm_New_Password" name="conf_password" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Change</button>
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
