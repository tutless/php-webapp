<?php
include "restrict.php";
include "php/cons.php";

$userid = $_POST['userid'];
$username = $_POST['username'];
$password = $_POST['password'];
$nickname = $_POST['nickname'];

$sql = "update users set username = ?, password = ?, nickname = ? where userid = ?";
$stmt = $mycon->prepare($sql);
$stmt->bind_param('sssi',$username,$password,$nickname,$userid);
$stmt->execute();
$stmt->close();
$mycon->close();

$logoutGoTo = "users.php";
header("Location: $logoutGoTo");
?>