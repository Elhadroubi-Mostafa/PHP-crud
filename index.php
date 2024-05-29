<?php
  include 'connect.php';
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    $sql = "SELECT username FROM crudtable WHERE username = '$username'";
    $result = mysqli_query($con, $sql);
    if($result){
      $row = mysqli_num_rows($result);
      if($row > 0){
        echo "Already exist";
      }
      else{
        $sql = "INSERT INTO crudtable(username, email, mobile, address)
        VALUES('$username', '$email', '$mobile', '$address')";
        $result = mysqli_query($con, $sql);
        if($result){
          header('location:display.php');
        }
        else{
          die(mysqli_error($con));
        }
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>PHP CRUD</h1>
  <a href="display.php">View data</a>
  <form action="" method="post">
    <input type="text" name="username" placeholder="Enter your name" autocomplete="off">
    <input type="text" name="email" placeholder="Enter your email" autocomplete="off">
    <input type="number" name="mobile" placeholder="Enter your mobile" autocomplete="off">
    <input type="text" name="address" placeholder="Enter your address" autocomplete="off">
    <button type="submit" class="btn" name="submit">Submit</button>
  </form>
</body>
</html>