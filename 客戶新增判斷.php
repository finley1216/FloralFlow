<?php
  $con = mysqli_connect("localhost","root","root","THU_gardening_company");
  if (!$con){
  die('Could not connect: ' . mysql_error());}
  mysqli_select_db("Customers", $con);
  $sql = "INSERT INTO Customers (NAME,ID,birthday,customer_TEL,Email,Age,photo,Member_discount) VALUES ('$_GET[name]', '$_GET[id]', '$_GET[birthday]','$_GET[tel]','$_GET[address]','$_GET[age]','$_GET[photo]','$_GET[discount]')";
  if ($con->query($sql) === TRUE) {
    echo "客戶資料新增成功";}
  else {
    echo "Error: " . $sql . "<br>" . $con->error;}
  $con->close();
?>
