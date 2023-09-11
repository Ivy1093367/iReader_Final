<?php
require("dataBase.php");
$isbn_arr=array();
$isbn_arr=$_POST['isbn'];
$num_arr=array();
$num_arr=$_POST['num'];
$type_arr=array();
$type_arr=$_POST['type'];
$cost_arr=array();
$cost_arr=$_POST['cost'];
$uNo=$_COOKIE['uNo'];
$sName=$_POST['name'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$amount=$_POST['amount'];
$payment=$_POST['payment'];
$address=$_POST['address'];
$deliver="處理中";

$SQL="INSERT INTO orders(uNo, sName, sTel, sMail, amount, sPayment, sAddress, sDelivery) VALUE('$uNo', '$sName', '$phone', '$mail', '$amount', '$payment', '$address', '$deliver')";
if(mysqli_query($link, $SQL)){
    $oNo=mysqli_insert_id($link);
    $time=time()+86400;
    for($i=0;$i<sizeof($isbn_arr);$i++){
        $isbn=$isbn_arr[$i];
        $num=$num_arr[$i];
        $type=$type_arr[$i];
        $cost=$cost_arr[$i];
        $SQL="INSERT INTO orderdetail(oNo, ISBN, num, cost, type) VALUE ('$oNo', '$isbn', '$num', '$cost', '$type')";
        echo $cost."<br/>";
        if(mysqli_query($link, $SQL)){
            if($type!="RB"){
                if($type=="IR"){
                    $SQL="INSERT INTO usersbook(uNo, ISBN, time) VALUE ('$uNo', '$isbn', '$time')";
                }else if($type=="IB"){
                    $SQL="INSERT INTO usersbook(uNo, ISBN, time) VALUE ('$uNo', '$isbn', 1)";
                }
                mysqli_query($link, $SQL);
            }else{
                $SQL="INSERT INTO usersbook(uNo, ISBN, time) VALUE ('$uNo', '$isbn', 0)";
                mysqli_query($link, $SQL);
                $SQL2="SELECT bAmount FROM books WHERE ISBN=".$isbn;
                if($result2=mysqli_query($link, $SQL2)){
                    while($row2=mysqli_fetch_assoc($result2)){
                        if($row2['bAmount']>0){
                            $a=$row2['bAmount']-1;
                            $SQL2="UPDATE books SET bAmount='$a' WHERE ISBN=".$isbn;
                            mysqli_query($link, $SQL2);
                        }
                    }
                }
            }
            foreach ($_COOKIE as $name => $value) {
                echo $name."->".$value."<br/>";
                $item=explode("_",$name);
                if (($item[0]=="Cart") && ($item[1]==$isbn)&&($item[2]==$type)){
                    setcookie($name,'',time()-1);
                }
            }
        }else{
            $SQL="DELETE FROM orders WHERE oNo=".$oNo;
            mysqli_query($link, $SQL);
            echo "<script type='text/javaScript'>";
            echo "alert('未知錯誤請重試......');";
            echo "</script>";
            header("Location: cart.php");
        }
    }
}
header("Location:Mybooks.php");
?>