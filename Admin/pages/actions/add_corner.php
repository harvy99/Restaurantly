<?php

include('../../includes/dbcon.php');

if(isset($_POST['name'])){
    
    $name = $_POST['name']; 

    mysqli_query($con,"INSERT INTO corners( `name` )
                VALUES( '$name' )")or die(mysqli_error($con));
        
    // echo'<script>document.location="../corners.php"</script>';
}
?>