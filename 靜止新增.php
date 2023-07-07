<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>靜止客戶資料新增表</title>
  </head>
  <body>
    <h3>靜止客戶新增資料表</h3>
    <form method="GET" action="靜止新增判斷.php">
      <input type="text" name=name placeholder="Enter NAME" /><h6>varchar(16)</h6><br/><br/>
      <input type="text" name=id placeholder="Enter ID"/><h6>varchar(10)</h6><br/><br/>
      <input type="date" name=birthday placeholder="birthday"/><h6>date</h6><br/><br/>
      <input type="text" name=tel placeholder="Enter customer_TEL"/><h6>char(16)</h6><br/><br/>
      <input type="text" name=address placeholder="Enter Address"/><h6>varchar(42)</h6><br/><br/>
      <input type="text" name=age placeholder="Enter Age"/><h6>int(11)</h6><br/><br/>
      <input type="file" placeholder="photo"/><h6>blob</h6><br/><br/>
      <input type="text" name=discount placeholder="Enter Member_discount"/><h6>decimal(3,2)</h6><br/>
      <input type="submit" value="送出">
    </form>
  </body>
</html>