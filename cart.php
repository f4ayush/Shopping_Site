<?php        
require 'includes/common.php';
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
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
        
        <!----Header----->
        
       <?php
       include 'includes/header.php';
       $cart_empty = '';
       $available = FALSE;
       $user_registration_query = "select * from users_items inner join items on users_items.item_id=items.id WHERE users_items.user_id='".$user_id."'";
//       $user_registration_query = "SELECT * FROM users_items WHERE user_id = '".$user_id."'";
        $select_query_result = mysqli_query($con,$user_registration_query);
        if(mysqli_num_rows($select_query_result)==0){
            $cart_empty = 'add items to cart first';
        } else {
              $available = TRUE; 
        }
       ?>
        
        <!------------ Table--------------->
        
        <div class="container aa">
            <div><?= $cart_empty ?></div>
            <table class="table table-striped">
                <tbody>
                    <tr><th>Item number</th>
                        <th>Item Name</th>
                        <th class="text-right">Price</th>
                        <th></th>
                    </tr>
                    <?php
                    $price = 0;
                    if($available){
                        while ($row = mysqli_fetch_assoc($select_query_result)) {
                            echo "<tr><td>".$row['item_id']."</td>";
                            echo "<td>".$row['item']."</td>";
                            echo "<td class='text-right'>".$row['price']."</td>";
                            echo '<td class="text-right" style="padding-right: 20px;"><a href="cart_remove.php?id='.$row["item_id"].'">Remove</a></td></tr>';
                            $price += $row['price'];
                        }
                    }
                    ?>
                    <tr>
                        <td></td>
                        <td>Total</td>
                        <td class="text-right">Rs. <?= $price ?>/- </td>
                        <td class="text-right"><a href="success.php"><input type="button" value="Confirm Order" class="btn btn-primary"></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!--footer-->
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
<?php 
               }
               ?>