<?php
// session_start();
// unset($_SESSION['login']);
// unset($_SESSION['id']);
// header("location:index.php");

setcookie("login","",time()-1);
setcookie("id","",time()-1);
header("location:index.php");
?>