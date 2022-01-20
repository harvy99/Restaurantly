<?php

include('../../../includes/dbcon.php');
 
    
    $active = $_POST['active'];  
    $admin_type = $_POST['admin_type']; 
    $firstname = $_POST['firstname']; 
    $lastname = $_POST['lastname']; 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $email = $_POST['email'];  
    $id = $_POST['id'];

      mysqli_query($con,"update admin_accounts set 
      `username`='$username',`password`='$password',`first_name`='$firstname',`last_name`='$lastname',
      `email`='$email',`admin_type_id`='$admin_type',`active`='$active'
      where id =$id
      ")or die(mysqli_error($con));
         
    // echo'<script>document.location="../corners.php"</script>'; 
?>