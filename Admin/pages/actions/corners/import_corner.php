
<?php 

include('../../../includes/dbcon.php');

$str= '';
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
 {
  $name = $csv[0];  
  $str= $str.$name;
  mysqli_query($con,"INSERT INTO corners( `name` )
    VALUES( '$name' )")or die(mysqli_error($con));
 } 

 echo $str;
?>