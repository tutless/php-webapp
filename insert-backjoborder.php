<?php
include "restrict.php";
include "php/cons.php";
include "myfunctions.php";

$jonumber = $_POST['jonumber'];
$jodate = date('Y-m-d', strtotime($_POST['jodate']));
//$custname = $_POST['custname'];
//$address = $_POST['address'];
//$telno = $_POST['telno'];
//$servicetype = $_POST['servicetype'];
//$warrantyinfo = $_POST['warrantyinfo'];
//$otherinfo = $_POST['otherinfo'];
$accessories = $_POST['accessories'];
$complain = $_POST['complain'];
$repairaction = $_POST['repairaction'];
$dealer = $_POST['dealer'];
$datepurchase = date('Y-m-d', strtotime($_POST['datepurchase']));
$labor = $_POST['labor'];
$transportation = $_POST['transportation'];
$shippingcost = $_POST['shippingcost'];
$othercharges = $_POST['othercharges'];
$jodateout = '1970-1-1';
$customerinformed = 'no';
$cidate = '1970-1-1';

/*
$sql = "INSERT INTO joborder ( jonumber, custname, address, telno, servicetype, warrantyinfo, otherinfo) VALUES ( ?, ?, ?, ?, ?, ?, ?)";

$stmt = $mycon->prepare($sql);

if ( false===$stmt ) {
  // and since all the following operations need a valid/ready statement object
  // it doesn't make sense to go on
  // you might want to use a more sophisticated mechanism than die()
  // but's it's only an example
  die('prepare() failed: ' . htmlspecialchars($mycon->error));
}



$rc = $stmt->bind_param('issssss', 
	$jonumber,
	$custname,
	$address,
	$telno,
	$servicetype,
	$warrantyinfo,
	$otherinfo
);

if ( false===$rc ) {
  // again execute() is useless if you can't bind the parameters. Bail out somehow.
  die('bind_param() failed: ' . htmlspecialchars($stmt->error));
}


$rc = $stmt->execute();

if ( false===$rc ) {
  die('execute() failed: ' . htmlspecialchars($stmt->error));
}

$last_id = $jonumber;
$stmt->close();
*/
//------------------ codes for transaction ----------------
$transsql = sprintf("insert into transaction ( transjonumber, transtype, jodate, customerinformed, repairaction, accessories, complain, dealer, datepurchase, labor, transportation, shippingcost, othercharges) Values ( %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", 
	GetSQLValueString($jonumber,'int'),
	GetSQLValueString('back job','text'),
	GetSQLValueString($jodate,'text'),
	GetSQLValueString($customerinformed,'text'),
	GetSQLValueString($repairaction,'text'),
	GetSQLValueString($accessories,'text'),
	GetSQLValueString($complain,'text'),
	GetSQLValueString($dealer,'text'),
	GetSQLValueString($datepurchase,'text'),
	GetSQLValueString($labor,'double'),
	GetSQLValueString($transportation,'double'),
	GetSQLValueString($shippingcost,'double'),
	GetSQLValueString($othercharges,'double'));


	if($mycon->query($transsql) === false) {
		trigger_error('Wrong SQL: ' . $transsql . ' Error: ' . $mycon->error, E_USER_ERROR);
	} else {
		$last_inserted_id = $mycon->insert_id;
		$affected_rows = $mycon->affected_rows;
	}	



//------------------- codes for model unit -----------------
/*

$models = json_decode($_POST['mymodel'],true);

foreach ($models as $model) {
	$uijonumber = $last_id;
	$brand = $model['bunit'];
	$mymodel = $model['model'];
	$serial = $model['serial'];	
	
	$sql2 = "INSERT INTO unitinfo (uijonumber, brand, model, serialno) VALUES ( ?, ?, ?, ?)";
	echo $uijonumber.' '.$brand.' '.$mymodel.' '.$serial;
	$stmt2 = $mycon->prepare($sql2);
	$stmt2->bind_param('isss',$uijonumber,$brand,$mymodel,$serial);
	$stmt2->execute();
	$stmt2->close();
}
*/
$repairs = json_decode($_POST['myrepair'],true);

if (sizeof($repairs) > 0){
foreach ($repairs as $repair) {
	$rdjonumber = $last_inserted_id;
	$rdno = $repair['rdno'];
	$partnumber = $repair['partnumber'];
	$partdescription = $repair['partdescription'];
	$qty = $repair['qty'];
	$unitprice = $repair['unitprice'];
	$sql3 = "INSERT INTO repairdetail ( rdtransid, rdno, partnumber, partdescription, qty, unitprice) VALUES ( ?, ?, ?, ?, ?, ?)";
	$stmt3 = $mycon->prepare($sql3);
	$stmt3->bind_param('iissid', $rdjonumber, $rdno, $partnumber, $partdescription, $qty, $unitprice);
	$stmt3->execute();
	$stmt3->close();
}
}//---------- if sizeof ------------


$paymentid = getLastPaymentId();
$payjonumber = $last_inserted_id;
$particular = "Downpayment";
$payamount = $_POST['downpayment'];
$paydate = date('Y-m-d');

if($payamount > 0){
$paysql = "insert into payments(paymentid,payjonumber,article,payamount, paydate) VALUES ( ?, ?, ?, ?, ? )";
$stmt4 = $mycon->prepare($paysql);
$stmt4->bind_param('iisds', $paymentid,$payjonumber,$particular,$payamount, $paydate);
$stmt4->execute();
$stmt4->close();
}
$mycon->close();

$logoutGoTo = "open.php";
header("Location: $logoutGoTo");
?>