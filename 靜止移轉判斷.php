<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<?php
  $con = mysqli_connect("localhost","root","root","THU_gardening_company");
  if (!$con){
  die('Could not connect: ' . mysql_error());}
  mysqli_select_db("Hold_Customers", $con);
  $sql = "INSERT INTO Customers (NAME,ID,birthday,customer_TEL,Email,Age,photo,Member_discount) SELECT NAME,ID,birthday,customer_TEL,Email,Age,photo,Member_discount FROM Hold_Customers
  WHERE ID = '$_GET[id]'";
  if ($con->query($sql) === TRUE) {
    echo "已移轉到客戶資料表<br>";}
  else {
    echo "Error: " . $sql . "<br>" . $con->error;}
  $sql = "DELETE FROM Hold_Customers WHERE ID = '$_GET[id]'";
  if ($con->query($sql) === TRUE) {
    echo "已從靜止客戶資料表中移除";}
  else {
    echo "Error: " . $sql . "<br>" . $con->error;}
  $con->close();
?>