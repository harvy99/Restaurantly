<?php

include('../../../includes/dbcon.php');

if(isset($_POST['admin_type'])){
    
    $admin_type = $_POST['admin_type']; 
    $firstname = $_POST['firstname']; 
    $lastname = $_POST['lastname']; 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    $email = $_POST['email'];  

    mysqli_query($con,"INSERT INTO admin_accounts( `username`,`password`,`first_name`,`last_name`,`email`,`admin_type_id`,`active` )
                VALUES( '$username','$password','$firstname','$lastname','$email',$admin_type,1 )")or die(mysqli_error($con));
        
    // echo'<script>document.location="../corners.php"</script>';
}
?>