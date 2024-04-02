<?php
if (!isset($_SESSION)) {
  session_start();
}

$_SESSION['MM_username'] = NULL;
$_SESSION['MM_adminid'] = NULL;
$_SESSION['MM_nick']= NULL;

unset($_SESSION['MM_username']);
unset($_SESSION['MM_adminid']);
unset($_SESSION['MM_adminid']);

$redirect = 'login.php';  
header("Location: " . $redirect );


?>