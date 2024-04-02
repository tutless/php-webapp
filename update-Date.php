<?php
include "restrict.php";
include "php/cons.php";

$transid = $_POST['transid'];
$field = $_POST['updatefield'];
$dateValue = date('Y-m-d', strtotime($_POST['datevalue']));
$formMode = $_POST['formMode'];

$sql = "update transaction set {$field} = '{$dateValue}' , repairaction = '{$formMode}' where transid = {$transid}";
$result = $mycon->query($sql);

if(!$result){
	die('Error Updating');
}




switch ($formMode) {
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