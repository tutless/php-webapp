<?php
if (!isset($_SESSION)) {
  session_start();
}

if(!isset($_SESSION['MM_adminid'] )){

	$logoutGoTo = "login.php";
	header("Location: $logoutGoTo");	
}



?>