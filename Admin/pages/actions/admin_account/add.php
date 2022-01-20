<?php

include('../../../includes/dbcon.php');


if(isset($_POST['json_file'])){

    
    $json = file_get_contents("../../json/".$_POST['json_file']);
    $json = json_decode($json,true);

    $insert ='(';
    $values ='VALUES(';
    $x = 0;

    foreach($json['fields'] as $key ) {
        if($key['property']['addable'] == 1){ 
            
            // not first time loop
            if($x > 0) { 
                $insert .=', ';
                $values .=', ';
            }
            $x++;

            $insert .= '`'.$key['name'].'`' ; 
            $values .= "'".$_POST[$key['name']]."'" ; 

        }
    } 
    
    $insert .=')';
    $values .=')';
    
    $table = $json['tableName'];
 

    mysqli_query($con,"INSERT INTO $table $insert $values")or die(mysqli_error($con));
     
    // mysqli_query($con,"INSERT INTO $table( `username`,`password`,`first_name`,`last_name`,`email`,`admin_type_id`,`active` )
    // VALUES( '$username','$password','$firstname','$lastname','$email',$admin_type,1 )")or die(mysqli_error($con));
    // echo'<script>document.location="../corners.php"</script>';
}
?>