



<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    


        
        
        
        $email = $_POST['e-mail'];    //here i am having error perhaps....
        $password = $_POST['password'];    //here i am having error perhaps....
        $user_registration_query = "Select * from users where email='".$email."' and password='".$password."'";
        $select_query_result = mysqli_query($con,$user_registration_query);
        echo $user_registration_query;
        if (mysqli_num_rows($select_query_result) == 0){
            echo 'no such user';
        }
        else { 
//            echo "<script>alert('hello');</script";
             $row = mysqli_fetch_array($select_query_result);
             $_SESSION['user_id'] = $row['id'];
            header('location:product.php'); 
         }
}
  
