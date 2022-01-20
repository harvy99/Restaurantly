<?php

// header('Content-Type: application/json'); 

include('../../../includes/dbcon.php');

if(isset($_POST['id'])){

  $json = file_get_contents("../../json/".$_POST['json_file']);
  $json = json_decode($json,true);
  
  $table = $json['tableName'];

  $id = $_POST['id'];
  
  mysqli_query($con,"delete from $table where id =$id ")or die(mysqli_error($con));

}else{
  
  $request = file_get_contents('php://input'); 
  $request = json_decode($request);

  
  $json = file_get_contents("../../json/".$request -> json_file);
  $json = json_decode($json,true);
    
  $table = $json['tableName'];
  $arr = explode(",",$request -> selected) ; 
  
  foreach ($arr as $value) { 
      // echo "$value <br>"; 
      mysqli_query($con,"delete from $table where id =$value ")or die(mysqli_error($con));
    }

}

 

echo 'GREAT' ;



?>