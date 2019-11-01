<?php
session_start();
if(empty($_SESSION['login'])) {
  header("location:index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>會員中心</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="member">
    <div class="wellcome">
      HI! 歡迎光臨!以下是你的個人資料:
      <br>
      <a href="logout.php">登出</a>
    </div>
    <div class="private">
      <!--請自行設計個人資料的呈現方式並從資料庫取得會員資料-->
      <?php
      include("db_info.php");
      // $dsn="mysql:host=localhost;dbname=mydb;charset=utf8";
      // $pdo=new PDO($dsn,'root','');

      $sql="SELECT * FROM `user` WHERE `id`='".$_SESSION['id']."'";

      $data=$pdo->query($sql)->fetch();
      // print_r($data);
      ?>
      <form action="edit_user.php" method="post">
      <p>帳號：    <?=$data['acc']?></p>
      <p>密碼：    <?=$data['pw']?></p>
      <p>姓名：    <input type="text" name="name" id="name" value="<?=$data['name']?>"></p>
      <p>地址：    <input type="text" name="addr" id="addr" value="<?=$data['addr']?>"></p>
      <p>電話：    <input type="text" name="tel" id="tel" value="<?=$data['tel']?>"></p>
      <p>生日：    <input type="text" name="birthday" id="birthday" value="<?=$data['birthday']?>"></p>
      <p>電子郵件：<input type="text" name="email" id="email" value="<?=$data['email']?>"></p>
      <input type="hidden" name="id" id="id" value="<?=$data['id']?>">
      <input type="submit" value="編輯">
      </form>



    </div>
  </div>
</body>
</html>