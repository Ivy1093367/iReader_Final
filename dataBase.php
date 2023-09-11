<?php
$link=@mysqli_connect(
    'sql300.epizy.com',
    'epiz_31856486',
    'imphpa109332467',
    'epiz_31856486_iReader');
    // $mysqli -> set_charset("utf8");
    mysqli_query($link, "set names utf8");
?>