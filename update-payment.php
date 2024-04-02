<?php
include "restrict.php";
include "php/cons.php";

$transid = $_POST['transid'];
$paymentid = $_POST['paymentid'];
$article = $_POST['article'];
$payamount = $_POST['payamount'];

echo $article;
$sql = "UPDATE payments set article = ?, payamount = ? where paymentid = ?";
$stmt = $mycon->prepare($sql);
if ( false===$stmt ) {
  // and since all the following operations need a valid/ready statement object
  // it doesn't make sense to go on
  // you might want to use a more sophisticated mechanism than die()
  // but's it's only an example
  die('prepare() failed: ' . htmlspecialchars($mycon->error));
}



$rc = $stmt->bind_param('sdi',$article,$payamount,$paymentid );

if ( false===$rc ) {
  // again execute() is useless if you can't bind the parameters. Bail out somehow.
  die('bind_param() failed: ' . htmlspecialchars($stmt->error));
}

$stmt->execute();

$stmt->close();
$mycon->close();

$logoutGoTo = "pay-details.php?transid=".$transid;
header("Location: $logoutGoTo");
?>