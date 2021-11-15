<?php
include('dbcon.php');

$id = $_POST['id'];

$arr_variant_name = array();
$arr_variant_price = array();
$arr_variant_id = array();
$count =0;

$sql="SELECT * FROM `product_variants` 
where product_id = $id ";
$query=mysqli_query($con,$sql)or 
die(print("SQL Error"));
while($row=mysqli_fetch_array($query)){

    $count ++;

    
    array_push($arr_variant_name, $row['variant_name']);
    array_push($arr_variant_price, $row['price']);
    array_push($arr_variant_id, $row['id']);

} 






    
    print json_encode(array("name"=>$arr_variant_name,"price"=>$arr_variant_price,"id"=>$arr_variant_id,"count"=>$count)); 

?>

 