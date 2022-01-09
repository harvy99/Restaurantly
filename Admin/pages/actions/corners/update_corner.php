<?php

include('../../../includes/dbcon.php');

if(isset($_POST['name'])){
    
    $id = $_POST['id']; 
    $name = $_POST['name']; 

    mysqli_query($con,"update corners set name='$name' where id ='$id' ")or die(mysqli_error($con));
        
    // echo'<script>document.location="../corners.php"</script>';
}
?>