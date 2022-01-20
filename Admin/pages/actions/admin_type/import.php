
<?php 

include('../../../includes/dbcon.php');

$str= '';
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
 {
  $firstname = $csv[1];  
  $lastname = $csv[2];  
  $username = $csv[3];  
  $password = $csv[4];  
  $email = $csv[5];   

  $str= $str.$name; 
 
  mysqli_query($con,"INSERT INTO admin_accounts( `username`,`password`,`first_name`,`last_name`,`email`,`admin_type_id`,`active` )
            VALUES( '$username','$password','$firstname','$lastname','$email',1,1 )")or die(mysqli_error($con));
 } 

 echo $str;
?>