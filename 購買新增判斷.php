<?php
  $con = mysqli_connect("localhost","root","root","THU_gardening_company");
  if (!$con){
  die('Could not connect: ' . mysql_error());}
  mysqli_select_db("Customer_purchases", $con);
  $sql = "INSERT INTO Customer_purchases (PName,PID,ID,supplier,purchases_Quantity,sales_price,discounted_price,訂購日期,預計交貨日期,實際交貨日期) VALUES ('$_GET[pname]', '$_GET[pid]', '$_GET[id]','$_GET[supplier]','$_GET[quantity]','$_GET[sales_price]','$_GET[discounted_price]','$_GET[date_1]','$_GET[date_2]','$_GET[date_3]')";
  if ($con->query($sql) === TRUE) {
    echo "客戶購買資料新增表成功<br><br>";}
  else {
    echo "Error: " . $sql . "<br>" . $con->error;}
  $sql = "ALTER TABLE Customer_purchases DROP total_price";
  if ($con->query($sql) === TRUE) {
    $sql ="ALTER TABLE Customer_purchases ADD total_price DECIMAL(10,2) AS (sales_price*purchases_Quantity) AFTER sales_price";
    if ($con->query($sql) === TRUE) {
      echo "客戶購買資料總價更新成功";}
    else {
      echo "Error: " . $sql . "<br>" . $con->error;}}
  else {
    echo "Error: " . $sql . "<br>" . $con->error;}
  $con->close();
?>