<?php
require 'includes/common.php';
?>

<!DOCTYPE html>
<!--
Products Page: 
● Add common.php file.
● Remove navbar code. Include header.php code.
● Include Check-if-added.php page also after including header.php page. 
● Now we will change the buy now button code for every item.
● Let us start with the first item.
● Start the PHP tag after paragraph tag which include price for Cannon EOS.
● For logged out users, we will show button with Add to cart value with href="login.php".
● For logged in users, button will be disabled if a particular item is already added to cart by the user. 
Else show the link to add the item to the cart. 
● Else, use another if else condition inside it. 

 
● If condition is, call check_if_added_to_cart(1). For this item, item id is 1. If this function returns 1, 
add a button which is disabled and contains text Added to cart. Else show the button with href href="cart-add.php?id=1" and text Add to cart. 
● We have hardcoded the link. Href attribute will contain cart-add.php?id=1. This id=1 is for first item. For second item id=2 and so on. 
● The final button code will be  
 
                
● This code will be same for every item except the item id’s.  

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
        include 'includes/check_if_added.php';
        ?>
        
        <div class="container">
            <div class="jumbotron aa">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
            </div>
        
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                               
                        <div class="thumbnail">
                            <img src="img/camera.jpg" alt="Camera"> 
                            <div class="caption">  
                                <h3>Canon EOS</h3>  
                                <p>Price:60000</p> 
                                <p><?php if (!isset($_SESSION['email'])) { ?>    
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>      
                           <?php                             
                           
                                } else {    
                                    //We have created a function to check whether this particular product is added to cart or not.               
                                    if (check_if_added_to_cart(1, $con)) { //This is same as if(check_if_added_to_cart != 0)         
                                                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                                       } else {                                     ?>      
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                 
                                
                    <?php                                 }    
                                           }
                    ?></p> 
                            </div>
                        </div> 
                     
            </div>
            <div class="col-md-3 col-sm-6">
                    
                        <div class="thumbnail">
                            <img src="img/camera.jpg" alt="Camera"> 
                            <div class="caption">  
                                <h3>Canon EOS</h3>  
                                <p>Price:60000</p> 
                                <p><?php if (!isset($_SESSION['email'])) { ?>    
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>      
                           <?php                             
                           
                                } else {    
                                    //We have created a function to check whether this particular product is added to cart or not.               
                                    if (check_if_added_to_cart(2, $con)) { //This is same as if(check_if_added_to_cart != 0)         
                                                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                                       } else {                                     ?>      
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                 
                                
                    <?php                                 }    
                                           }
                    ?></p> 
                            </div>
                        </div> 
                     
            </div>
            <div class="col-md-3 col-sm-6">
                    
                        <div class="thumbnail">
                            <img src="img/camera.jpg" alt="Camera"> 
                            <div class="caption">  
                                <h3>Canon EOS</h3>  
                                <p>Price:60000</p> 
                                <p><?php if (!isset($_SESSION['email'])) { ?>    
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>      
                           <?php                             
                           
                                } else {    
                                    //We have created a function to check whether this particular product is added to cart or not.               
                                    if (check_if_added_to_cart(3, $con)) { //This is same as if(check_if_added_to_cart != 0)         
                                                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                                       } else {                                     ?>      
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                 
                                
                    <?php                                 }    
                                           }
                    ?></p> 
                            </div>
                        </div> 
                    
            </div>
            <div class="col-md-3 col-sm-6">
                    
                        <div class="thumbnail">
                            <img src="img/camera.jpg" alt="Camera"> 
                            <div class="caption">  
                                <h3>Canon EOS</h3>  
                                <p>Price:60000</p> 
                                <p><?php if (!isset($_SESSION['email'])) { ?>    
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>      
                           <?php                             
                           
                                } else {    
                                    //We have created a function to check whether this particular product is added to cart or not.               
                                    if (check_if_added_to_cart(4, $con)) { //This is same as if(check_if_added_to_cart != 0)         
                                                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                                       } else {                                     ?>      
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                 
                                
                    <?php                                 }    
                                           }
                    ?></p>
                            
                            </div>
                        </div> 
                   
            </div>
                                     
        </div>
        
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                               
                        <div class="thumbnail">
                            <img src="img/watch.jpg" alt="Camera"> 
                            <div class="caption">  
                                <h3>Titan Model #301</h3>  
                                <p>Price Rs.15000</p> 
                                <p><?php if (!isset($_SESSION['email'])) { ?>    
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>      
                           <?php                             
                           
                                } else {    
                                    //We have created a function to check whether this particular product is added to cart or not.               
                                    if (check_if_added_to_cart(5,$con)) { //This is same as if(check_if_added_to_cart != 0)         
                                                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                                       } else {                                     ?>      
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                 
                                
                    <?php                                 }    
                                           }
                    ?></p> 
                            </div>
                        </div> 
                     
            </div>
            <div class="col-md-3 col-sm-6">
                    
                        <div class="thumbnail">
                            <img src="img/camera.jpg" alt="Camera"> 
                            <div class="caption">  
                                <h3>Titan Model #201</h3>  
                                <p>Price Rs.3500</p> 
                                <p><?php if (!isset($_SESSION['email'])) { ?>    
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>      
                           <?php                             
                           
                                } else {    
                                    //We have created a function to check whether this particular product is added to cart or not.               
                                    if (check_if_added_to_cart(6,$con)) { //This is same as if(check_if_added_to_cart != 0)         
                                                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                                       } else {                                     ?>      
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                 
                                
                    <?php                                 }    
                                           }
                    ?></p> 
                            </div>
                        </div> 
                     
            </div>
            <div class="col-md-3 col-sm-6">
                    
                        <div class="thumbnail">
                            <img src="img/camera.jpg" alt="Camera"> 
                            <div class="caption">  
                                <h3>HMT Milan</h3>  
                                <p>Price Rs.8000</p> 
                                <p><?php if (!isset($_SESSION['email'])) { ?>    
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>      
                           <?php                             
                           
                                } else {    
                                    //We have created a function to check whether this particular product is added to cart or not.               
                                    if (check_if_added_to_cart(7,$con)) { //This is same as if(check_if_added_to_cart != 0)         
                                                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                                       } else {                                     ?>      
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                 
                                
                    <?php                                 }    
                                           }
                    ?></p> 
                            </div>
                        </div> 
                    
            </div>
            <div class="col-md-3 col-sm-6">
                    
                        <div class="thumbnail">
                            <img src="img/camera.jpg" alt="Camera"> 
                            <div class="caption">  
                                <h3>Faber Luba #111</h3>  
                                <p>Price Rs.60000</p> 
                                <p><?php if (!isset($_SESSION['email'])) { ?>    
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>      
                           <?php                             
                           
                                } else {    
                                    //We have created a function to check whether this particular product is added to cart or not.               
                                    if (check_if_added_to_cart(8, $con)) { //This is same as if(check_if_added_to_cart != 0)         
                                                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                                       } else {                                     ?>      
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                 
                                
                    <?php                                 }    
                                           }
                    ?></p> 
                            </div>
                        </div> 
                   
            </div>
                                     
        </div>
        
        <!-- shirt-->
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                               
                        <div class="thumbnail">
                            <img src="img/shirt.jpg" alt="shirt"> 
                            <div class="caption">  
                                <h3>H&W</h3>  
                                <p>Price Rs.800</p> 
                                <p><?php if (!isset($_SESSION['email'])) { ?>    
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>      
                           <?php                             
                           
                                } else {    
                                    //We have created a function to check whether this particular product is added to cart or not.               
                                    if (check_if_added_to_cart(9, $con)) { //This is same as if(check_if_added_to_cart != 0)         
                                                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                                       } else {                                     ?>      
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                 
                                
                    <?php                                 }    
                                           }
                    ?></p> 
                            </div>
                        </div> 
                     
            </div>
            <div class="col-md-3 col-sm-6">
                    
                        <div class="thumbnail">
                            <img src="img/camera.jpg" alt="Shirt"> 
                            <div class="caption">  
                                <h3>Louis Phill</h3>  
                                <p>Price Rs.1000</p> 
                                <p><?php if (!isset($_SESSION['email'])) { ?>    
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>      
                           <?php                             
                           
                                } else {    
                                    //We have created a function to check whether this particular product is added to cart or not.               
                                    if (check_if_added_to_cart(10, $con)) { //This is same as if(check_if_added_to_cart != 0)         
                                                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                                       } else {                                     ?>      
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                 
                                
                    <?php                                 }    
                                           }
                    ?></p> 
                            </div>
                        </div> 
                     
            </div>
            <div class="col-md-3 col-sm-6">
                    
                        <div class="thumbnail">
                            <img src="img/camera.jpg" alt="Shirt"> 
                            <div class="caption">  
                                <h3>John Zok</h3>  
                                <p>Price Rs.1500</p> 
                                <p><?php if (!isset($_SESSION['email'])) { ?>    
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>      
                           <?php                             
                           
                                } else {
                                    //We have created a function to check whether this particular product is added to cart or not.               
                                    if (check_if_added_to_cart(11, $con)) { //This is same as if(check_if_added_to_cart != 0)         
                                                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                                       } else {                                     ?>      
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                 
                                
                    <?php                                 }    
                                           }
                    ?></p> 
                            </div>
                        </div> 
                    
            </div>
            <div class="col-md-3 col-sm-6">
                    
                        <div class="thumbnail">
                            <img src="img/camera.jpg" alt="Camera"> 
                            <div class="caption">  
                                <h3>Jhalsani</h3>  
                                <p>Price Rs.1300</p> 
                                <p><?php if (!isset($_SESSION['email'])) { ?>    
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>      
                           <?php                             
                           
                                } else {    
                                    //We have created a function to check whether this particular product is added to cart or not.               
                                    if (check_if_added_to_cart(12, $con)) { //This is same as if(check_if_added_to_cart != 0)         
                                                               echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';   
                                                                                       } else {                                     ?>      
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                 
                                
                    <?php                                 }    
                                           }
                    ?></p> 
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
