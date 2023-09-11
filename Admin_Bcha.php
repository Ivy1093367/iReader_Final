<?php
require("dataBase.php");
$ISBN=$_GET['isbn'];
if(isset($_GET['launch'])){
    $la=$_GET['launch'];
    $SQL="UPDATE books SET launch='$la' WHERE ISBN=".$ISBN;
    mysqli_query($link, $SQL);
    header('Location: Admin_books.php');
}else if(isset($_GET['del'])){
    if($_GET['del']){
        $SQL="DELETE FROM books WHERE ISBN=".$ISBN;
        mysqli_query($link, $SQL);
    }
    header('Location: Admin_books.php');
}else{
$SQL="SELECT * FROM books WHERE ISBN=".$ISBN;
$result=mysqli_query($link, $SQL);
$row=mysqli_fetch_assoc($result);
?>
<form action="" method="post" enctype="multipart/form-data">
    ISBN: <?php echo $ISBN;?><br/>
    書名: <input type="text" name="name" value="<?php echo $row['bName'];?>" required="required"><br/>
    作者: <input type="text" name="author" value="<?php echo $row['Author'];?>" required="required"><br/>
    出版社: <input type="text" name="pub" value="<?php echo $row['bPublish'];?>" required="required"><br/>
    分類: <input type="text" name="class" value="<?php echo $row['bClass'];?>" required="required"><br/>
    概要(100字元以內) (換行請打 <span style="font-size:20px;">\</span> ):
    <br/><textarea name="info" cols="33" rows="3" max=99 required="required"><?php echo $row['bInfo'];?></textarea><br/>
    庫存: <input type="number" name="amo" min="0" value="<?php echo $row['bAmount'];?>" required="required"><br/>
    實體售價: <input type="number" name="rb" min="0" value="<?php echo $row['paper_buy'];?>" required="required"><br/>
    電子購買: <input type="number" name="ib" value="<?php echo $row['i_buy'];?>" min="0" required="required"><br/>
    電子租閱: <input type="number" name="ir" value="<?php echo $row['i_rent'];?>" min="0" required="required"><br/>
    上/下架: <select name="launch">
        <?php echo $row['i_buy'];
            if($row['launch']){
                echo "<option>上架中</option><option>未售</option></select><br/>";
            }else{
                echo "<option>未售</option><option>上架中</option></select><br/>";
            }
        ?>
    圖片更換: <input type="file" name="pic"><br>
    目前圖片: <img src="images/<?php echo $ISBN;?>.png" width=200px><br>
    <br>
    <input type="submit" value="確認">
</form>
<a href="Admin_books.php">不修改</a>
<br/><br/>
<a href='Admin_Bcha.php?del=1&isbn=<?php echo $ISBN;?>'>刪除所有資料</a>

<?php
}
if(isset($_POST['name'])){
    $na=$_POST['name'];
    $au=$_POST['author'];
    $pu=$_POST['pub'];
    $cl=$_POST['class'];
    $in=$_POST['info'];
    $in=str_replace("\\","\\\\",$in);
    $am=$_POST['amo'];
    $rb=$_POST['rb'];
    $ib=$_POST['ib'];
    $ir=$_POST['ir'];
    if($_POST['launch']=="上架中"){
        $la=1;
    }else{
        $la=0;
    }
    $SQL="UPDATE books SET bName='$na', Author='$au', bPublish='$pu', bClass='$cl', bInfo='$in', bAmount='$am', paper_buy='$rb', i_buy='$ib', i_rent='$ir', launch='$la' WHERE ISBN=".$ISBN;
    if(!empty($_FILES['pic']['tmp_name'])){
        $filename="images/".$ISBN.".png";
        copy($_FILES['pic']['tmp_name'],$filename);
    }
    mysqli_query($link, $SQL);
    header('Location: Admin_books.php');
}
?>