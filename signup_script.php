<?php
require 'includes/common.php';
?>

<!DOCTYPE html>
<!--Signup_script.php
● Add common.php file.
● Use backend validations.
● Use the select query to fetch id of the user whose email is the email entered by the user in the signup form. 
  This means we do not allow duplicate entry of emails. 
● If mysqli_num_rows > 0, show error that email id already exists.
● Else write the insert query to insert the new user.
● After mysqli_query function, use mysqli_insert_id($con) function to get the primary key of the new user inserted.
● Initialize session variable as we have done after succesful login.
● Redirect the user to products.php page using header function.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       
    </head>
    <body>
        
         <?php
        $email=$_POST['e-mail'];
        $name=$_POST['name'];
        $password=$_POST['password'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        $city=$_POST['city'];
         $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location:signup.php?email_error=enter correct email');
}
if (strlen($password) < 6) {
  echo "Password should have at-least 6 characters";
}
$email1 = mysqli_real_escape_string($con, $email);
$name1= mysqli_real_escape_string($con, $name);
$password1 = mysqli_real_escape_string($con, $password);
$contact1 = mysqli_real_escape_string($con, $contact);
$address1 = mysqli_real_escape_string($con, $address);
$city1 = mysqli_real_escape_string($con, $city);
$user_registration_query = "Select * from users where email='".$email."'";
        $select_query_result = mysqli_query($con,$user_registration_query);
        if (mysqli_num_rows($select_query_result) != 0){
            echo 'user already exists';
        }
        else { 
            $user_registration_query = "Select * from users where email='".$email."'";
        $select_query_result = mysqli_query($con,$user_registration_query);
        mysqli_insert_id($con);
        
             $_SESSION['email'];
             $_SESSION['password'];
             header('location:product.php'); 
         }
        

        
               
        ?>
    </body>
</html>
