<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>靜止客戶資料表</title>
  </head>
  <body>
  <?php
    include('db_1.php');
    $query = 'SELECT * FROM Hold_Customers';
    $query_run = mysqli_query($link,$query);
    $num = mysqli_num_rows($query_run);
    $a = mysqli_num_rows($query_run);
  ?>
  <h3>靜止客戶資料表</h3>
  <table border="3">
    <tr>
    <td>NAME</td>
    <td>ID</td>
    <td>birthday</td>
    <td>customer_TEL</td>
    <td>Email</td>
    <td>Age</td>
    <td>photo</td>
    <td>Member_discount</td>
    </tr>
    <?php while ($row = mysqli_fetch_array($query_run)) {?>
    <tr>
    <td><?php echo $row[0]; ?></td>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[2]; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[4]; ?></td>
    <td><?php echo $row[5]; ?></td>
    <td><?php echo $row[6]; ?></td>
    <td><?php echo $row[7]; ?></td>
    </tr>
    <?php } ?>
  </table> 
  </body>
</html>