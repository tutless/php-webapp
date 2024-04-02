<?php
$hostname_ilm = "localhost";
$database_ilm = "tacchronicle2";
$username_ilm = "root";
$password_ilm = "";
$mycon = new mysqli($hostname_ilm, $username_ilm, $password_ilm,$database_ilm ); 


if($mycon->connect_errno > 0){
    die('Unable to connect to database [' . $mycon->connect_error . ']');
}

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  	
$hostname_ilm = "localhost";
$database_ilm = "tacchronicle2";
$username_ilm = "root";
$password_ilm = "";
$mycon = mysqli_connect($hostname_ilm, $username_ilm, $password_ilm,$database_ilm ); 
	
	
	
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($mycon,$theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}


?>