<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>供應商資料查詢</title>
  </head>
  <body>
    <?php
      include('db_1.php');
      $query = 'SELECT * FROM Supplier';
      $query_run = mysqli_query($link,$query);
      $num = mysqli_num_rows($query_run);
    ?>
    <h3>供應商資料表</h3>
    <table border="3">
      <tr>
      <td>supplier</td>
      <td>supplier_ID</td>
      <td>supplier_TEL</td>
      <td>supplier_Email</td>
      <td>principal</td>
      </tr>
      <?php while ($row = mysqli_fetch_array($query_run)) {?>
      <tr>
      <td><?php echo $row[0]; ?></td>
      <td><?php echo $row[1]; ?></td>
      <td><?php echo $row[2]; ?></td>
      <td><?php echo $row[3]; ?></td>
      <td><?php echo $row[4]; ?></td>
      </tr>
      <?php } ?>
    </table>
    <form action="供應查詢判斷.php" method="GET">
      <hr><h3>客戶資料查詢</h3>
      <input type="text" name=id placeholder="請輸入要查詢的供應商ID或姓名">
      <input type="submit" value="查詢">
    </form>
  </body>
</html>