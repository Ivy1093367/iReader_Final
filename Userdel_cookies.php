<?php
if($_GET['group']=='C'){
    setcookie('Cart_'.$_GET['isbn']."_".$_GET['type'],"",time()-60);
    header('Location: cart.php');
}else if($_GET['group']=='L'){
    setcookie('Like_'.$_GET['isbn'],"",time()-60);
    header('Location: like.php');
}else{
    echo "<script type='text/javaScript'>";
        echo "alert('未知失敗，再試一次qq');";
        echo "</script>";
        header('Location: book.php?isbn='.$_GET['isbn']);
}
?>