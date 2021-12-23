<?php
error_reporting(0);
$con = mysqli_connect("localhost","root","","diners");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  date_default_timezone_set("Asia/Manila"); 
?>

