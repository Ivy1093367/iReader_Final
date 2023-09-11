<?php
require("dataBase.php");
$name=$_POST['name'];
$birth=$_POST['birth'];
$gender=$_POST['gender'];
$tel=$_POST['tel'];
$mail=$_POST['mail'];
$pwd=$_POST['pwd'];
$pwdC=$_POST['checkpwd'];
// $img=$_POST['uPhoto'];
    if($pwd!=$pwdC){
        echo "<script type='text/javaScript'>";
        echo "alert('密碼不一致! 註冊失敗');";
        echo "</script>";
        echo "<meta http-equiv='refresh' content='0; url=enroll.php'>";
    }else{
        $SQL="SELECT COUNT(*) as total FROM user WHERE uMail LIKE'".$mail."' AND uPwd=".$pwd;
        if($result=mysqli_query($link, $SQL)){
            while($row=mysqli_fetch_assoc($result)){
                if($row['total']==1){
                    echo "<script type='text/javaScript'>";
                    echo "alert('已有註冊! 請更換註冊信箱與密碼!');";
                    echo "</script>";
                    echo "<meta http-equiv='refresh' content='0; url=enroll.php'>";                    
                }else{
                    $SQL="INSERT INTO user(uName, uMail, uPwd, uGender, uBirth, uTel, uRole, uPhoto) VALUE('$name', '$mail', '$pwd', '$gender', '$birth', '$tel', 'User', null)";
                    if(mysqli_query($link, $SQL)){
                        $uNo=mysqli_insert_id($link);
                        if(!empty($_FILES['img']['name'])){
                            $imgInfo=pathinfo($_FILES['img']['name']);
                            $ext=$imgInfo["extension"];
                            $pa="CP_".$uNo.".".$ext;
                            $filename="images/".$pa;
                            copy($_FILES['img']['tmp_name'], $filename);
                            $SQL="UPDATE user SET uPhoto='$pa' WHERE uNo=".$uNo;
                            mysqli_query($link, $SQL);
                        }
                    echo "<script type='text/javaScript'>";
                    echo "alert('成功!');";
                    echo "</script>";
                    echo "<meta http-equiv='refresh' content='0; url=login.php'>";
                    }
                }
            }
        }else{
            echo "<script type='text/javaScript'>";
            echo "alert('失敗......');";
            echo "</script>";
            echo "<meta http-equiv='refresh' content='0; url=enroll.php'>";
        }
    }
?>