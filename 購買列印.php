<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>客戶購買資料查詢</title>
  </head>
  <body>
  <?php
    include('db_1.php');
    $query = 'SELECT * FROM Customer_purchases';
    $query_run = mysqli_query($link,$query);
    $num = mysqli_num_rows($query_run);
  ?>
  <h3>客戶購買資料查詢</h3>
    <table border="3">
      <tr>
      <td>PName</td>
      <td>PID</td>
      <td>ID</td>
      <td>supplier</td>
      <td>purchases_Quantity</td>
      <td>sales_price</td>
      <td>discounted_price</td>
      <td>訂購日期</td>
      <td>預計交貨日期</td>
      <td>實際交貨日期</td>
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
      <td><?php echo $row[8]; ?></td>
      <td><?php echo $row[9]; ?></td>
      </tr>
      <?php } ?>
    </table> 
  </body>
</html>