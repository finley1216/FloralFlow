<?php
  $con = mysqli_connect("localhost","root","root","THU_gardening_company");
  if (!$con){
  die('Could not connect: ' . mysql_error());}
  mysqli_select_db("Supplier", $con);
  $sql = "INSERT INTO Supplier (supplier,supplier_ID,supplier_TEL,supplier_Email,principal) VALUES ('$_GET[supplier]', '$_GET[id]', '$_GET[tel]','$_GET[address]','$_GET[principal]')";
  if ($con->query($sql) === TRUE) {
    echo "供應商資料新增成功";}
  else {
    echo "Error: " . $sql . "<br>" . $con->error;}
  $con->close();
?>
