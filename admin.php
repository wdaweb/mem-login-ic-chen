<?php
include "db_info.php";
$sql="SELECT `id`, `acc`, `name`, `addr`, `tel` 
FROM `user`";
$row=$pdo->query($sql)->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <style>
    table {
        border-spacing: 0;
    }
    td {
        border: 1px solid #ccc;
    }
    </style>
<body>
    <table>
        <tr>
            <td>帳號</td>
            <td>姓名</td>
            <td>地址</td>
            <td>電話</td>
            <td>操作</td>
        </tr>
<?php
foreach($row as $user) {
?>
        <tr>
            <td><?=$user['acc'];?></td>
            <td><?=$user['name'];?></td>
            <td><?=$user['addr'];?></td>
            <td><?=$user['tel'];?></td>
            <td><a href="del_user.php?id=<?=$user['id'];?>">刪除</a></td>
        </tr>
<?php
}
?>
    </table>
</body>
</html>