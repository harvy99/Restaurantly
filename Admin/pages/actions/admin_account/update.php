<?php

include('../../../includes/dbcon.php');
 
    
if(isset($_POST['json_file'])){
  
    $json = file_get_contents("../../json/".$_POST['json_file']);
    $json = json_decode($json,true);

    $set_values =''; 
    $x = 0;

    foreach($json['fields'] as $key ) {
      if($key['property']['editable'] == 1){ 
          
          // not first time loop
          if($x > 0) { 
              $set_values .=', '; 
          }
          $x++;

          $set_values .= "`".$key['name']."`='".$_POST[$key['name']]."'" ;  

      }
    }  

    $table = $json['tableName']; 
    $id = $_POST['edit_id'];

    
    mysqli_query($con,"update $table set $set_values
    where id =$id
    ")or die(mysqli_error($con));

      // mysqli_query($con,"update admin_accounts set 
      // `username`='$username',`password`='$password',`first_name`='$firstname',`last_name`='$lastname',
      // `email`='$email',`admin_type_id`='$admin_type',`active`='$active'
      // where id =$id
      // ")or die(mysqli_error($con));
         
}
    // echo'<script>document.location="../corners.php"</script>'; 
?>