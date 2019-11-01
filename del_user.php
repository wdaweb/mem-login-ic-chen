<?php
include "db_info.php";
$sql="DELETE FROM `user` WHERE `id`='".$_GET['id']."'";

$pdo->exec($sql);

echo "<a href='admin.php'>刪除完成，回到管理頁面</a>";

?>