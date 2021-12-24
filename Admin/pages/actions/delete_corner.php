<?php

// header('Content-Type: application/json'); 

include('../../includes/dbcon.php');

if(isset($_POST['id'])){

  $id = $_POST['id'];
  
  mysqli_query($con,"delete from corners where id =$id ")or die(mysqli_error($con));

}else{
  
  $request = file_get_contents('php://input'); 
  $request = json_decode($request);
    
  $arr = explode(",",$request -> selected) ; 
  
  foreach ($arr as $value) { 
      // echo "$value <br>"; 
      mysqli_query($con,"delete from corners where id =$value ")or die(mysqli_error($con));
    }

}

 

echo 'GREAT' ;



?>