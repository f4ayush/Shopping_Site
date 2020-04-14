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
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $user_id = $_SESSION['user_id'];
        $item_id = $_GET['id'];
        $user_registration_query = "delete from users_items where user_id='".$user_id."' and item_id='".$item_id."'";
        $select_query_result = mysqli_query($con,$user_registration_query);
        header('location:cart.php');
        ?>
    </body>
</html>
