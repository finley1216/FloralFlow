<?php
  $con = mysqli_connect("localhost","root","root","THU_gardening_company");
  if (!$con){
  die('Could not connect: ' . mysql_error());}
  mysqli_select_db("plantData", $con);
  $sql = "INSERT INTO plantData (PName,PID,supplier,quantity,unit,price,LocInCompany,date) VALUES ('$_GET[pname]', '$_GET[pid]', '$_GET[supplier]','$_GET[quantity]','$_GET[unit]','$_GET[price]','$_GET[locin]','$_GET[date]')";
  if ($con->query($sql) === TRUE) {
    echo "花草苗木資料新增成功<br><br>";}
  else {
    echo "Error: " . $sql . "<br>" . $con->error;}
  $sql = "ALTER TABLE plantData DROP total";
  if ($con->query($sql) === TRUE) {
    $sql ="ALTER TABLE plantData ADD total DECIMAL(10,2) AS (quantity*price) AFTER date";
    if ($con->query($sql) === TRUE) {
      echo "花草苗木資料總價更新成功";}
    else {
      echo "Error: " . $sql . "<br>" . $con->error;}}
  else {
    echo "Error: " . $sql . "<br>" . $con->error;}
  $con->close();
?>