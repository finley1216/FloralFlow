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
  <?php
    $con = mysqli_connect("localhost","root","root","THU_gardening_company");
    if (!$con){
    die('Could not connect: ' . mysql_error());}
    mysqli_select_db("Supplier", $con);
    while ($row = mysqli_fetch_array($query_run)){
      if($row[0]==$_GET[id] or $row[1]==$_GET[id]){?>
        <h3>查詢結果</h3>
        <table border="3">
          <tr>
          <td>supplier</td>
          <td>supplier_ID</td>
          <td>supplier_TEL</td>
          <td>supplier_Email</td>
          <td>principal</td>
          </tr>
          <tr>
          <td><?php echo $row[0]; ?></td>
          <td><?php echo $row[1]; ?></td>
          <td><?php echo $row[2]; ?></td>
          <td><?php echo $row[3]; ?></td>
          <td><?php echo $row[4]; ?></td>
          </tr>
        </table><?php }}?>
  </body>
</html>
