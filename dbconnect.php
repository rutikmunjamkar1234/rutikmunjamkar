<?php
$connect=mysql_connect("localhost","root","");
mysql_select_db("gce_hostel",$connect);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
