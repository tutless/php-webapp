<?php
include "restrict.php";
include "php/cons.php";

$paymentid = $_POST['paymentid'];
$paytransid = $_POST['transid'];
$particular = $_POST['article'];;
$payamount = $_POST['amount'];
$paydate = date('Y-m-d');

if($payamount > 0){
$paysql = "insert into payments(paymentid,paytransid,article,payamount, paydate) VALUES ( ?, ?, ?, ?, ? )";
$stmt = $mycon->prepare($paysql);
$stmt->bind_param('iisds', $paymentid,$paytransid,$particular,$payamount, $paydate);
$stmt->execute();
$stmt->close();
}

$mycon->close();

$logoutGoTo = "pay-details.php?transid=".$paytransid;
header("Location: $logoutGoTo");

?>