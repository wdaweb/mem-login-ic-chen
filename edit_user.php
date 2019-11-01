<?php
include "db_info.php";
$name=$_POST['name'];
$addr=$_POST['addr'];
$tel=$_POST['tel'];
$birthday=$_POST['birthday'];
$email=$_POST['email'];
$id=$_POST['id'];

// $sql="UPDATE `user` 
// SET `name`='$name',
// `addr`='$addr',`tel`='$tel',`birthday`='$birthday',`email`='$email' 
// WHERE `id`='".$_COOKIE['id']."'";
$sql="UPDATE `user` 
SET `name`='$name',
`addr`='$addr',`tel`='$tel',`birthday`='$birthday',`email`='$email' 
WHERE `id`='$id'";

$pdo->exec($sql);
echo "<a href='member_center.php'>編輯完成，回會員中心</a>";


?>