<?php
include "restrict.php";
include "php/cons.php";

$username = $_POST['username'];
$password = $_POST['password'];
$nickname = $_POST['nickname'];

$sql = "insert into users (username, password, nickname) values ( ?, ?, ?)";
$stmt = $mycon->prepare($sql);
$stmt->bind_param('sss',$username,$password,$nickname);
$stmt->execute();
$stmt->close();
$mycon->close();

$logoutGoTo = "users.php";
header("Location: $logoutGoTo");
?>