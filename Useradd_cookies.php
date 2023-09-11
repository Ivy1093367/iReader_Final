<?php
if($_GET['type']=='RB'){
    setcookie('Cart_'.$_GET['isbn'].'_RB',$_GET['isbn'],time()+86400);
    echo "<script type='text/javaScript'>";
    echo "alert('添加購物車成功');";
    echo "</script>";
}else if($_GET['type']=='IB'){
    setcookie('Cart_'.$_GET['isbn'].'_IB',$_GET['isbn'],time()+86400);
    echo "<script type='text/javaScript'>";
    echo "alert('添加購物車成功');";
    echo "</script>";
}else if($_GET['type']=='IR'){
    setcookie('Cart_'.$_GET['isbn'].'_IR',$_GET['isbn'],time()+86400);
    echo "<script type='text/javaScript'>";
    echo "alert('添加購物車成功');";
    echo "</script>";
}else if($_GET['type']=='L'){
    setcookie('Like_'.$_GET['isbn'],$_GET['isbn'],time()+86400);
    echo "<script type='text/javaScript'>";
    echo "alert('添加收藏成功');";
    echo "</script>";
}
else if($_GET['type']=='cookie'){
    setcookie("uNo",$_GET['uNo'],time()+86400);
    header('Location: login.php');
}else{
    echo "<script type='text/javaScript'>";
    echo "alert('未知失敗，再試一次qq');";
    echo "</script>";
}
// header('Location: book.php?isbn='.$_GET['isbn']);
echo "<meta http-equiv='refresh' content='0; url=book.php?isbn=".$_GET['isbn']."'>";
?>
