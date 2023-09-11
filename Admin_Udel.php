<?php
require('dataBase.php');
$uNo=$_GET['uNo'];
$SQL="DELETE FROM user WHERE uNo='$uNo'";
mysqli_query($link, $SQL);
header('Location: Admin_users.php');
?>