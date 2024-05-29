<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <style>
    th, td{
  border: 1px solid #000;
  padding: 5px;
  color: green;
  text-align: center;
}

  </style>
</head>
<body>
  <h1>Display Data</h1>
  <a href="index.php">Back</a>
  
      <?php
        include 'connect.php';
        $sql = "SELECT * FROM crudtable";
        $result = mysqli_query($con, $sql);
        $rowNum = mysqli_num_rows($result);
        
        if($rowNum > 0){
          $num = 1;
          echo "<table>
                  <thead>
                    <tr>
                      <th>SI num</th>
                      <th>username</th>
                      <th>email</th>
                      <th>Mobile Number</th>
                      <th>Address</th>
                      <th>Operations</th>
                    </tr>
                  </thead>
                  <tbody>";
          while($row = mysqli_fetch_assoc($result)){
            ?>
              <tr>
                <td><?php echo $num?></td>
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['mobile']?></td>
                <td><?php echo $row['address']?></td>
                <td>
                  <button><a href="update.php?updateid=<?php echo $row['id']?>" >Update</a></button>
                  <button><a href="delete.php?deleteid=<?php echo $row['id']?>" onclick="return alert('Are you sure you want to delete this data')">Delete</button>
                </td>
            </tr>
          <?php
          $num++;
          }
        }
        else  echo "<div>No product</div>";
         
        
      ?>
    </tbody>
  </table>
</body>
</html>