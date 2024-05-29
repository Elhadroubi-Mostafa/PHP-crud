<?php
  include 'connect.php';

    $id = $_GET['updateid'];
    $sql = "SELECT * FROM crudtable WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if($result){
      $row = mysqli_fetch_assoc($result);
      // $username = $row['username'];
      // $email = $row['email'];
      // $mobile = $row['mobile'];
      // $address = $row['address'];

      if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        echo $id;
        $sql = "UPDATE crudtable set id = $id, username = '$username',
        email = '$email', mobile = '$mobile', address = '$address' WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result){
          echo "dfdfg";
          // header('location:display.php');
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
  <h1>UPDATE DATA</h1>
  <a href="display.php">view data</a>
  <form action="" method="post">
    <input type="text" name="username" autocomplete="off" value="<?php echo $row['username'];?>" >
    <input type="text" name="email" autocomplete="off" value="<?php echo $row['email'];?>" >
    <input type="number" name="mobile" autocomplete="off" value="<?php echo $row['mobile'];?>" >
    <input type="text" name="address" autocomplete="off" value="<?php echo $row['address'];?>" >
    <button type="submit" class="btn" name="submit">Submit</button>
  </form>
</body>
</html>