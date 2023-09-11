<?php
require("dataBase.php");
$uNo=$_GET['uNo'];
echo "uNo= ".$uNo;
echo "<br/><br/>";
$SQL="SELECT * FROM usersbook WHERE uNo=".$uNo;
if($result=mysqli_query($link, $SQL)){
    echo "<table border=1>";
    echo "<tr><td>ISBN</td><td>到期時間</td><td>狀態</td></tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['ISBN']."</td>";
        if($row['time']==1){
            echo "<td>無限期</td>";
        }else{
            echo "<td>".date("Y/m/d H:i:s", $row['time'])."</td>";
        }
        echo "<td>";
        if($row['time']>time()||$row['time']==1){
            echo "未到期";
        }else{
            echo "過期";
        }
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>