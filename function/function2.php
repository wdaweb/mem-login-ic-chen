<?php
include_once "db_info.php";

$user=find('user',3);
echo $user['name'];
echo "<br>";
$user2=find('user',4);
echo $user2['name'];
echo "<br>";

insert('user','cathy','dsfsf','cathy liu','dsff','8777897','1988-8-1','cathy@gmail.com');
?>

