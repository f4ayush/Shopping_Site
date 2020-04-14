<?php
$pass_change = '';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $user_id = $_SESSION['user_id'];
    $old_password=$_POST['old_Password'];
    $new_password=$_POST['new_password'];
    $confirm_new_password=$_POST['conf_password'];
        
         
    if (strlen($new_password) < 6) {
      echo "Password should have at-least 6 characters";
    }else if($new_password!=$confirm_new_password){
        echo 'passwords do not match';
    }

    
    if($new_password===$confirm_new_password){
        $user_registration_query = "select password from users where id='".$user_id."' AND password = '".$old_password."'";
        $select_query_result = mysqli_query($con,$user_registration_query);
        $result_password = mysqli_fetch_assoc($select_query_result)['password'];
        if($result_password===$old_password) {
          $user_registration_query = "UPDATE users set password='".$new_password."' WHERE id='".$user_id."'";
          $select_query_result = mysqli_query($con,$user_registration_query) or die(mysqli_errno($con));  
          $pass_change = '<h4 class="text-center" style="margin: 10px; padding: 10px; background-color: green;">Password Changed</h4>';
        } else {
            $pass_change = '<h4 class="text-center" style="margin: 10px; padding: 10px; background-color: yellow;">Password not Changed</h4>';
        }
    } else {
        $pass_change = '<h4 class="text-center" style="margin: 10px; padding: 10px; background-color: red;">Password not matched</h4>';    
    }
}
?>