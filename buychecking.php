<html>
    
    <?php
    require("dataBase.php");
    if(isset($_COOKIE['uNo'])){
        if(empty($_POST['select'])){
            echo "<script type='text/javaScript'>";
            echo "alert('未選擇!');";
            echo "</script>";
            echo "<meta http-equiv='refresh' content='0; url=cart.php'>";
        }else{
            ?>
            <script language='javascript'>
                alert('電子書規範(適用所有電子書類商品):\n    1. 一帳號租借商品僅該帳號擁有，不可轉讓\n    2. 不得以任何形式公開散播、傳閱!\n    3. 不可以任何形式二次租借或進行營利行為');
            </script>
            <?php
            $ids_arr=array();
            $ids_arr=$_POST['select'];
            $items_arr=array();
            $items_arr=$_POST['isbn'];
            $name_arr=array();
            $name_arr=$_POST['name'];
            $amount_arr=array();
            $amount_arr=$_POST['amount'];
            $type_arr=array();
            $type_arr=$_POST['type'];
            $cost_arr=array();
            $cost_arr=$_POST['cost'];
            $num_arr=array();
            $num_arr=$_POST['num'];
            $count=0;
            echo "<form action='Back_orderadd.php' method='post'>";
            
            $amount=0;
            for($i=0;$i<sizeof($items_arr);$i++){
                if($i==$ids_arr[$count]){
                    echo "ISBN: ".$items_arr[$i]." ";
                    echo "<input type='hidden' name='isbn[]' value='".$items_arr[$i]."'>";
                    echo "書名: ".$name_arr[$i]." ";
                    echo "價格: ".$cost_arr[$i]." ";
                    echo "<input type='hidden' name='type[]' value='".$type_arr[$i]."'>";
                    echo "<input type='hidden' name='cost[]' value='".$cost_arr[$i]."'>";
                    echo "數量: ".$num_arr[$i]." ";
                    echo "<input type='hidden' name='num[]' value='".$num_arr[$i]."'><br/>";
                    echo "總價: ";
                    echo $cost_arr[$i]*$num_arr[$i];
                    $amount+=$cost_arr[$i]*$num_arr[$i];
                    echo "<br/><br/>";
                    $count++;
                    if($count>=sizeof($ids_arr)){
                        break;
                    }
                }
            }
            echo "<input type='hidden' name='amount' value='".$amount."'><br/>";
            $SQL="SELECT uName, uMail, uTel FROM user WHERE uNo='".$_COOKIE['uNo']."'";
            if($result=mysqli_query($link,$SQL)){
                while($row=mysqli_fetch_assoc($result)){
                    echo "收貨人資訊 <br/>";
                    echo "姓名:";
                    echo "<input type='text' name='name' value='".$row['uName']." ' required='required'><br/>";
                    echo "E-mail:";
                    echo "<input type='email' name='mail' value='".$row['uMail']."' required='required'><br/>";
                    echo "手機:";
                    echo "<input type='tel' name='phone' value='".$row['uTel']."' required='required'><br/>";
                }
            }
            ?>
            付款方式:
            <select name="payment" required='required'>
                <option>取貨付款</option>
                <option>LINEPay</option>
                <option>信用卡/VISA</option>
                <option>ATM</option>
            </select>
            <br/>
            收貨地址:
            <input type="text" name="address" required='required'>
            <br/>
            <input type="submit" value="送出訂單">
            <a href="cart.php">回購物車</a>
            
        <?php    
        }
        echo "<br/>";
        echo "<br/>";
        echo "</form>";
    }else{
        echo "<script type='text/javaScript'>";
        echo "alert('請先登入!!!');";
        echo "</script>";
        header("Location: login.php");
    }
    ?>

</html>