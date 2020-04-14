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
          function check_if_added_to_cart($items_id, $con) {
             $user_id = $_SESSION['user_id'];
//             $user_reegistration_query = "SELECT * FROM user_items";
            $user_reegistration_query="SELECT * FROM users_items WHERE item_id='".$items_id."' AND user_id ='".$user_id."' AND status='added to cart'";
            $select_query_result= mysqli_query($con, $user_reegistration_query);
            if(mysqli_num_rows($select_query_result)>=1){
                return TRUE;
            } else {
                return FALSE;    
            }
        }
        ?>
    </body>
</html>
