<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>花草苗木資料表</title>
  </head>
  <body>
  <?php
    include('db_1.php');
    $query = 'SELECT * FROM plantData';
    $query_run = mysqli_query($link,$query);
    $mon =0;
  ?>
  <h3>花草苗木資料表</h3>
    <table border="3">
      <tr>
      <td>PName</td>
      <td>PID</td>
      <td>supplier</td>
      <td>quentitiy</td>
      <td>unit</td>
      <td>price</td>
      <td>LocInCompany</td>
      <td>date</td>
      <td>total</td>
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
      </tr>
      <?php $mon+=$row[8]; ?>
      <?php } ?>
    </table>
    <hr>
    <?php printf("購買金額：%d",$mon)?>
  </body>
</html>