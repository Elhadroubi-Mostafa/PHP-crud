<?php
  $con = new mysqli('localhost', 'root', '', 'crud');
  if($con){
    // echo "connected successfully";
  }
  else{
    die(mysqli_error($con));
  }
?>