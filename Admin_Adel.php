<?php
require('dataBase.php');
$title=$_GET['title'];
$SQL="DELETE FROM announce WHERE title='$title'";
mysqli_query($link, $SQL);
header('Location: Admin_announces.php');
?>