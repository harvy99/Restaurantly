<?php

// header('Content-Type: application/json'); 

include('../../includes/dbcon.php');

$request = file_get_contents('php://input'); 
$request = json_decode($request);

// $data = [
//     'viewCount' => (time()%10000) *3 ,
//     'game_id' => $request -> game_id,
//     'max_id' => $request -> max_id

// ];

// $gameid = 1;
// $max_id = 1;

$arr = explode(",",$request -> selected) ; 
 
foreach ($arr as $value) { 
    // echo "$value <br>"; 
    mysqli_query($con,"delete from corners where id =$value ")or die(mysqli_error($con));
  }

 

echo 'GREAT' ;



?>