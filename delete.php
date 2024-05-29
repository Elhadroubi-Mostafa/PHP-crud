<?php
  include 'connect.php';
  $id = $_GET['deleteid'];
  $sql = "DELETE FROM crudtable WHERE id = $id";
  $result = mysqli_query($con, $sql);
  if($result){
    // echo "<script>alert(\"Deleted successfully!\");</script>";
    header('location:display.php');
  }
?>