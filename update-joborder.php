<?php
include "restrict.php";
include "php/cons.php";

$jonumber = $_POST['jonumber'];
$jodate = date('Y-m-d', strtotime($_POST['jodate']));
$custname = $_POST['custname'];
$address = $_POST['address'];
$telno = $_POST['telno'];
$servicetype = $_POST['servicetype'];
$warrantyinfo = $_POST['warrantyinfo'];
$otherinfo = $_POST['otherinfo'];
$accessories = $_POST['accessories'];
$complain = $_POST['complain'];
$repairaction = $_POST['repairaction'];
$dealer = $_POST['dealer'];
$datepurchase = date('Y-m-d', strtotime($_POST['datepurchase']));
$labor = $_POST['labor'];
$transportation = $_POST['transportation'];
$shippingcost = $_POST['shippingcost'];
$othercharges = $_POST['othercharges'];

$jodiagnosed = ($_POST['jodiagnosed'] != '')? date('Y-m-d', strtotime($_POST['jodiagnosed'])) : '';
$jorepair = ($_POST['jorepair'] != '')? date('Y-m-d', strtotime($_POST['jorepair'])) : '';
$jopullout = ($_POST['jopullout'] != '')? date('Y-m-d', strtotime($_POST['jopullout'])) : '';
$jorepaired = ($_POST['jorepaired'] != '')? date('Y-m-d', strtotime($_POST['jorepaired'])) : '';
$jodateout = ($_POST['jodateout'] != '')? date('Y-m-d', strtotime($_POST['jodateout'])) : '';
$customerinformed = $_POST['customerinformed'];
$cidate = $_POST['cidate'];
//echo $customerinformed . '<br />';
//echo $cidate . '<br />';
$transid = $_POST['transid'];
$checkupfee = $_POST['checkupfee'];
$discount = $_POST['discount'];

echo $jodiagnosed;

switch ($repairaction) {
	case 'open':
		$jodiagnosed = '1970-01-01';
		$jorepair = '1970-01-01';
		$jopullout = '1970-01-01';
		$jorepaired = '1970-01-01';
		$jodateout = '1970-01-01';
		break;

	case 'check and diagnose':
		$jorepair = '1970-01-01';
		$jopullout = '1970-01-01';
		$jorepaired = '1970-01-01';
		$jodateout = '1970-01-01';
		
		if($jodiagnosed == ''){
			$jodiagnosed = date('Y-m-d');

		}
		break;
	
	case 'check and repair':
		$jopullout = '1970-01-01';
		$jorepaired = '1970-01-01';
		$jodateout = '1970-01-01';
		if($jorepair == ''){
			$jorepair = date('Y-m-d');
		}
		break;

	case 'for pull out with check up':
		$jorepaired = '1970-01-01';
		$jodateout = '1970-01-01';
		if($jopullout == ''){
			$jopullout = date('Y-m-d');
		}
		break;

	case 'repaired':
		$jodateout = '1970-01-01';
		if($jorepaired == ''){
			$jorepaired = date('Y-m-d');
		}
		break;


	case 'claimed':
		$jodateout = date('Y-m-d');
		break;

	case 'pull out':
		$jodateout = date('Y-m-d');
		break;

}

switch ($customerinformed) {
	case 'yes':
		$cidate = date('Y-m-d');
		break;
	case 'no':
		$cidate = '1970-01-01';
		break;
}

echo '<br>'.$jodiagnosed;
/*
$sql = "UPDATE joborder SET jodate= ?, custname= ?, address= ?, telno= ?, servicetype= ?, warrantyinfo= ?, otherinfo= ?, accessories= ?, complain= ?, repairaction= ?, dealer= ?, datepurchase= ?, labor= ?, transportation= ?, shippingcost= ?, othercharges= ?, jodateout= ?, jorepair = ?, customerinformed = ?, cidate = ?, jodiagnosed = ?, jopullout = ?, jorepaired = ?  WHERE jonumber = ? ";
*/

$sql = "UPDATE joborder set custname = ?, address = ?, telno = ?, servicetype = ?, warrantyinfo = ?, otherinfo = ? where jonumber = ?";

$stmt = $mycon->prepare($sql);

if ( false===$stmt ) {
  // and since all the following operations need a valid/ready statement object
  // it doesn't make sense to go on
  // you might want to use a more sophisticated mechanism than die()
  // but's it's only an example
  die('prepare() failed: ' . htmlspecialchars($mycon->error));
}



$rc = $stmt->bind_param('ssssssi', 
	$custname,
	$address,
	$telno,
	$servicetype,
	$warrantyinfo,
	$otherinfo,
	$jonumber
);

if ( false===$rc ) {
  // again execute() is useless if you can't bind the parameters. Bail out somehow.
  die('bind_param() failed: ' . htmlspecialchars($stmt->error));
}


$rc = $stmt->execute();

if ( false===$rc ) {
  die('execute() failed: ' . htmlspecialchars($stmt->error));
}


$sqltrans = "UPDATE transaction set jodate =? , jodiagnosed = ?, jorepair = ?, jopullout = ?, jorepaired = ?, jodateout = ?, customerinformed = ?, cidate = ?, repairaction = ?, accessories = ?, complain = ?, dealer = ?, datepurchase = ?, labor = ?, transportation = ?, shippingcost = ?, othercharges = ?, checkupfee = ?, discount = ? where transid = ?";

$stmttrans = $mycon->prepare($sqltrans);

if ( false===$stmttrans ) {
  die('prepare() failed: ' . htmlspecialchars($mycon->error));
}

$rctrans = $stmttrans->bind_param('ssssssssssssssdddddi', 
	$jodate,
	$jodiagnosed,
	$jorepair,
	$jopullout,
	$jorepaired,
	$jodateout,
	$customerinformed,
	$cidate,
	$repairaction,
	$accessories,
	$complain,
	$dealer,
	$datepurchase,
	$labor,
	$transportation,
	$shippingcost,
	$othercharges,
	$checkupfee,
	$discount,
	$transid
);

if ( false===$rctrans ) {
  // again execute() is useless if you can't bind the parameters. Bail out somehow.
  die('bind_param() failed: ' . htmlspecialchars($stmttrans->error));
}


$rctrans = $stmttrans->execute();

if ( false===$rctrans ) {
  die('execute() failed: ' . htmlspecialchars($stmttrans->error));
}




$last_id = $jonumber;

//------------------- codes for model unit -----------------
$mycon->query("delete from unitinfo where uijonumber=".$jonumber);

$models = json_decode($_POST['mymodel'],true);

foreach ($models as $model) {
	$uijonumber = $last_id;
	$brand = $model['bunit'];
	$mymodel = $model['model'];
	$serial = $model['serial'];	
	
	$sql2 = "INSERT INTO unitinfo (uijonumber, brand, model, serialno) VALUES ( ?, ?, ?, ?)";
	//echo $uijonumber.' '.$brand.' '.$mymodel.' '.$serial;
	$stmt2 = $mycon->prepare($sql2);
	$stmt2->bind_param('isss',$uijonumber,$brand,$mymodel,$serial);
	$stmt2->execute();
	$stmt2->close();
}

$mycon->query("delete from repairdetail where rdtransid=".$transid);

$last_id = $transid;

$repairs = json_decode($_POST['myrepair'],true);

foreach ($repairs as $repair) {
	$rdtransid = $last_id;
	$rdno = $repair['rdno'];
	$partnumber = $repair['partnumber'];
	$partdescription = $repair['partdescription'];
	$qty = $repair['qty'];
	$unitprice = $repair['unitprice'];
	$sql3 = "INSERT INTO repairdetail ( rdtransid, rdno, partnumber, partdescription, qty, unitprice) VALUES ( ?, ?, ?, ?, ?, ?)";
	$stmt3 = $mycon->prepare($sql3);
	$stmt3->bind_param('iissid', $rdtransid, $rdno, $partnumber, $partdescription, $qty, $unitprice);
	$stmt3->execute();
	$stmt3->close();
}


$stmt->close();
$mycon->close();



switch ($repairaction) {
	case 'open':
		$logoutGoTo = "index.php";
		header("Location: $logoutGoTo");
		break;

	case 'check and diagnose':
		$logoutGoTo = "diagnose.php";
		header("Location: $logoutGoTo");
		break;
	
	case 'check and repair':
		$logoutGoTo = "under-repair.php";
		header("Location: $logoutGoTo");
		break;

	case 'for pull out with check up':
		$logoutGoTo = "repair-pullout.php";
		header("Location: $logoutGoTo");
		break;

	case 'repaired':
		$logoutGoTo = "repaired.php";
		header("Location: $logoutGoTo");
		break;


	case 'claimed':
		$logoutGoTo = "archive.php";
		header("Location: $logoutGoTo");
		break;

	case 'pull out':
		$logoutGoTo = "archive.php";
		header("Location: $logoutGoTo");
		break;

}

?>