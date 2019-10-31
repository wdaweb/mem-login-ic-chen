<?php
/***************************************************
 * 會員註冊行為：
 * 1.建立連線資料庫的參數
 * 2.判斷是否有送來表單資料
 * 3.建立所需的SQL語法
 * 4.將表單資料以變數形式填入SQL語法中
 * 5.執行資料庫連線並送出SQL語法
 * 6.判斷SQL語法是否執行成功，執行下一步
 ***************************************************/

echo $acc=$_POST['acc'];
echo "<br>";
echo $pw=$_POST['pw'];
echo "<br>";
echo $name=$_POST['name'];
echo "<br>";
echo $addr=$_POST['addr'];
echo "<br>";
echo $tel=$_POST['tel'];
echo "<br>";
echo $date=$_POST['date'];
echo "<br>";
echo $email=$_POST['email'];
echo "<br>";

$dsn="mysql:host=localhost;dbname=mydb;charset=utf8";
$pdo=new PDO($dsn,'root','');

$sql="INSERT INTO `user`(`acc`, `pw`, `name`, `addr`, `tel`, `birthday`, `email`) 
VALUES ('$acc','$pw','$name','$addr','$tel','$date','$email')";

// $pdo->exec($sql); 用於不須回傳資料，例如 del insert update
// print_r($pdo->query($sql));

if($pdo->exec($sql)){
    // echo "新增資料成功";
    header('location:./index.php?s=1');
} else {
    // echo "新增資料失敗";
    header('location:./reg.php?s=2');
}

?>