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
        include 'includes/common.php';
        $user_id = $_SESSION['user_id'];
        $item_id = $_GET['id'];
        
         $user_registration_query = "INSERT INTO users_items(user_id, item_id, status) VALUES('".$user_id."', '".$item_id."', 'Added to cart')";
        $select_query_result = mysqli_query($con,$user_registration_query);
        
        header('location:product.php');
        ?>
    </body>
</html>
