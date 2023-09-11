<?php
require('dataBase.php');
$rank=$_GET['rank'];
$isbn=$_GET['isbn'];
$SQL="UPDATE topbooks SET ISBN=$isbn WHERE rank=".$rank;
mysqli_query($link, $SQL);
//header('Location: Admin_top.php');
?>