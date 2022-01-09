<?php

include('../../../includes/dbcon.php');



if(isset($_POST['ids'])){
 
    $arr=  json_decode($_POST['ids'], true);
  
    // $arr = explode(",",$arr -> selected) ;  
    // var_dump($arr);

    // echo( $arr -> fields->field1['id']);
 
      
    foreach( $arr['fields'] as $key) {
        $id = $key['id'];
        $name = $key['name'];
        mysqli_query($con,"update corners set name='$name' where id ='$id' ")or die(mysqli_error($con));
    }

    echo'<script>alert("Edit successfully")</script>';
    echo'<script>document.location="../../corners.php"</script>';
  
  } 
 
?>