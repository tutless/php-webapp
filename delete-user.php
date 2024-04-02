<?php
include "restrict.php";
include "php/cons.php";

$userid = $_GET['userid'];

$sql = "delete from users where userid = ?";
$stmt = $mycon->prepare($sql);
$stmt->bind_param('i',$userid);
$stmt->execute();
$stmt->close();
$mycon->close();

$logoutGoTo = "users.php";
header("Location: $logoutGoTo");
?>