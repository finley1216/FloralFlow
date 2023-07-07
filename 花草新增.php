<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>花草苗木新增表</title>
  </head>
  <body>
    <h3>花草苗木新增表</h3>
    <form method="GET" action="花草新增判斷.php">
      <input type="text" name=pname placeholder="Enter PName" /><h6>varchar(16)</h6><br/><br/>
      <input type="text" name=pid placeholder="Enter PID"/><h6>char(13)</h6><br/><br/>
      <input type="text" name=supplier placeholder="supplier"/><h6>varchar(16)</h6><br/><br/>
      <input type="text" name=quantity placeholder="Enter quantity"/><h6>decimal(10,0)</h6><br/><br/>
      <input type="text" name=unit placeholder="Enter unit"/><h6>varchar(4)</h6><br/><br/>
      <input type="text" name=price placeholder="Enter price"/><h6>decimal(10,2)</h6><br/><br/>
      <input type="text" name=locin placeholder="Enter LocInCompany"/><h6>varchar(20)</h6><br/><br/>
      <input type="date" name=date placeholder="Enter date"/><h6>date</h6><br/>
<!--      <input type="text" name=total placeholder="Enter total"/><h6>decimal(10,2)</h6><br/><br/>-->
      <input type="submit" value="送出">
    </form>
  </body>
</html>