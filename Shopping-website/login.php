<?php
require_once 'includes/common.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" href="btsrp/css/bootstrap.min.css">
        <link rel="stylesheet" href="login.css" type="text/css">
        <script src="btsrp/js/jquery-3.3.1.min.js"></script>
        <script src="btsrp/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        </head>
    <body>
      <?php
        include 'includes/header.php';
        require_once './login_submit.php';
        ?>  
       <div class="container">
            <div class="row row-style">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p>
                                login
                            </p>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="">
                                 <div class="form-group">
                                 <input type="email" class="form-control"  placeholder="Email"  name="e-mail" required = "true">
                                 </div>
                                <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">login</button>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account? <a href="signup.html">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       <!------footer----------->
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>