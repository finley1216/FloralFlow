<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>供應商資料新增表</title>
  </head>
  <body>
    <h3>供應商新增資料表</h3>
    <form method="GET" action="供應新增判斷.php">
      <input type="text" name=supplier placeholder="Enter supplier" /><h6>varchar(16)</h6><br/><br/>
      <input type="text" name=id placeholder="Enter supplier_ID"/><h6>varchar(10)</h6><br/><br/>
      <input type="text" name=tel placeholder="Enter supplier_TEL"/><h6>char(16)</h6><br/><br/>
      <input type="text" name=address placeholder="Enter supplier_Email"/><h6>varchar(42)</h6><br/><br/>
      <input type="text" name=principal placeholder="Enter principal"/><h6>varchar(16)</h6><br/><br/>
      <input type="submit" value="送出">
    </form>
  </body>
</html>