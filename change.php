<?php
session_start();

$mysqli = new mysqli ("localhost", "root", "", "base");

$Cname = $_POST['Cname'];
$Clogin = $_POST['login'];
$Cemail = $_POST['Cemail'];
$Cpass = $_POST['Cpass'];
$Cpass = md5($Cpass);

$mysqli->query("INSERT INTO `base`.`users` `name` VALUE '$Cname' ");
$mysqli->query("UPDATE `base`.`users` SET `name` = '$Cname' WHERE `users`.`name` =$_SESSION['user']['name'];")

$mysqli->close();

header('Location:user_2.php');
?>
