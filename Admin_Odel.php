<?php
require('dataBase.php');
$oNo=$_GET['oNo'];
$SQL="DELETE FROM orderdetail WHERE oNo='$oNo'";
mysqli_query($link, $SQL);
$SQL="DELETE FROM orders WHERE oNo='$oNo'";
mysqli_query($link, $SQL);
header('Location: Admin_orders.php');
?>