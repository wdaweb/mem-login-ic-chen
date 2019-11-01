<?php
/***************************************************
 * 會員登入行為：
 * 1.建立連線資料庫的參數
 * 2.判斷是否有送來表單資料
 * 3.從資料庫取得資料
 * 4.比對表單資料和資料庫資料是否一致
 * 5.根據比對的結果決定畫面的行為
  ***************************************************/
echo $acc=$_POST['acc'];
echo "<br>";
echo $pw=$_POST['pw'];
echo "<br>";

include("db_info.php");
// $dsn="mysql:host=localhost;dbname=mydb;charset=utf8";
// $pdo=new PDO($dsn,'root','');

// $sql="SELECT COUNT(*) AS 'num' FROM `user` WHERE `acc`='$acc' && `pw`='$pw'";
$sql="SELECT `id` FROM `user` WHERE `acc`='$acc' && `pw`='$pw'";

$data=$pdo->query($sql)->fetch();
print_r($data);
echo "<br>";

session_start();
if($data['id']) {
  $_SESSION['login']=1;
  $_SESSION['id']=$data['id'];
  // setcookie("login",1,time()+60);
  // setcookie("id",$data['id'],time()+60);
  echo "登入成功";
  header("location:member_center.php");
} else {
  echo "登入失敗";
  header("location:index.php?err=1");
}


?>