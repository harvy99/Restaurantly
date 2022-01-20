<?php

include('../../../includes/dbcon.php');



if(isset($_POST['ids'])){
 
    $arr=  json_decode($_POST['ids'], true);
  
    // $arr = explode(",",$arr -> selected) ;  
    // var_dump($arr);

    // echo( $arr -> fields->field1['id']);
 
      
    foreach( $arr['fields'] as $key) {
      
      $active = $key['active']; 
      $admin_type = $key['adminType']; 
      $firstname = $key['firstname']; 
      $lastname = $key['lastname']; 
      $username = $key['username']; 
      $password = $key['password']; 
      $email = $key['email'];  
        $id = $key['id']; 
        mysqli_query($con,"update admin_accounts set 
        `username`='$username',`password`='$password',`first_name`='$firstname',`last_name`='$lastname',
        `email`='$email',`admin_type_id`='$admin_type',`active`='$active'
        where id =$id
        ")or die(mysqli_error($con));
    }
 
    echo'<script>alert("Edit successfully")</script>';
    echo'<script>document.location="../../admin_account.php"</script>';
  
  } 
 
?>