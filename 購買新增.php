<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>客戶購買資料新增表</title>
  </head>
  <body>
    <?php
    include('db_1.php');
    $query = 'SELECT * FROM Customers';
    $query_run = mysqli_query($link,$query);
    ?>
    <h3>客戶資料表</h3>
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
    <?php
    $query = 'SELECT * FROM plantData';
    $query_run = mysqli_query($link,$query);
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
      <?php } ?>
    </table>
    <?php
    $query = 'SELECT * FROM Supplier';
    $query_run = mysqli_query($link,$query);
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
    <h3>客戶購買資料新增表</h3>
    <form method="GET" action="購買新增判斷.php">
      <input type="text" name=pname placeholder="Enter PName" /><h6>varchar(16)</h6><br/><br/>
      <input type="text" name=pid placeholder="Enter PID"/><h6>char(13)</h6><br/><br/>
      <input type="text" name=id placeholder="Enter ID"/><h6>varchar(10)</h6><br/><br/>
      <input type="text" name=supplier placeholder="Enter supplier" /><h6>varchar(16)</h6><br/><br/>
      <input type="text" name=quantitiy placeholder="Enter purchases_Quantity"/><h6>decimal(10,0)</h6><br/><br/>
      <input type="text" name=sales_price placeholder="Enter sales_price"/><h6>decimal(10,2)</h6><br/><br/>
      <input type="text" name=discounted_price placeholder="Enter discounted_price"/><h6>decimal(10,2)</h6><br/><br/>
      <input href="date" name=date_1 placeholder="Enter 訂購日期"><h6>date</h6><br/><br/>
      <input href="date" name=date_2 placeholder="Enter 預計交貨日期"><h6>date</h6><br/><br/>
      <input href="date" name=date_3 placeholder="Enter 實際交貨日期"><h6>date</h6><br/><br/>
      <input type="submit" value="送出">
    </form>
  </body>
</html>