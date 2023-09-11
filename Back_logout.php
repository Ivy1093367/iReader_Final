<?php
session_start();
session_destroy();
setcookie("uNo",'',time()-86400);
foreach ($_COOKIE as $name => $value) {
    $item=explode("_",$name);
    if ($item[0]=="Cart"||$item[0]=="Like"){
        setcookie($name,'',time()-86400);
    }
}
header('Location: index.php');
?>