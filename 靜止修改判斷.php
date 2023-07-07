<?php
  $con = mysqli_connect("localhost","root","root","THU_gardening_company");
  if (!$con){
  die('Could not connect: ' . mysql_error());}
  mysqli_select_db("Hold_Customers", $con);
  $sql = "UPDATE Hold_Customers SET $_GET[cus_field]='$_GET[fix]' WHERE ID='$_GET[cus]'";
  if ($con->query($sql) === TRUE) {
    echo "靜止客戶資料修改成功";}
  else {
    echo "Error: " . $sql . "<br>" . $con->error;}
  $con->close();
?>