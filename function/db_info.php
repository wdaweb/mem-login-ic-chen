<?php
$dsn="mysql:host=localhost;dbname=mydb;charset=utf8";
$pdo=new PDO($dsn,'root','');

// all()-給定資料表名後，會回傳整個資料表的資料
// find()-會回傳資料表指定id的資料
// update()-給定資料表的條件後，會去更新相應的資料。
// insert()-給定資料內容後，會去新增資料到資料表
// del()-給定條件後，會去刪除指定的資料

function all($table) {
    global $pdo;
    $sql="SELECT * FROM `$table`";
    $row=$pdo->query($sql)->fetchAll();
    return $row;
}

function find($table,$id) {
    global $pdo;
    $sql="SELECT * FROM `$table` WHERE `id`='$id'";
    return $pdo->query($sql)->fetch();
}

function insert($table,$acc,$pw,$name,$addr,$tel,$birthday,$email) {
    global $pdo;
    $sql="INSERT INTO `$table`(`acc`, `pw`, `name`, `addr`, `tel`, `birthday`, `email`) 
    VALUES ('$acc','$pw','$name','$addr','$tel','$birthday','$email')";
    $pdo->exec($sql);
}


?>