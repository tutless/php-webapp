<?php
include "restrict.php";
include "php/cons.php";

$transid = $_GET['transid'];
$jodateout = date('Y-m-d');

$sql = "UPDATE transaction SET repairaction= 'claimed' , jodateout = ? WHERE transid = ? ";

$stmt = $mycon->prepare($sql);

if ( false===$stmt ) {
  // and since all the following operations need a valid/ready statement object
  // it doesn't make sense to go on
  // you might want to use a more sophisticated mechanism than die()
  // but's it's only an example
  die('prepare() failed: ' . htmlspecialchars($mycon->error));
}



$rc = $stmt->bind_param('si',
	$jodateout, 
	$transid
);

if ( false===$rc ) {
  // again execute() is useless if you can't bind the parameters. Bail out somehow.
  die('bind_param() failed: ' . htmlspecialchars($stmt->error));
}


$rc = $stmt->execute();

if ( false===$rc ) {
  die('execute() failed: ' . htmlspecialchars($stmt->error));
}


$stmt->close();
$mycon->close();

$logoutGoTo = "archive.php";
header("Location: $logoutGoTo");

?>