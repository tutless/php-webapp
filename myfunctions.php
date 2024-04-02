<?php

function getLastPaymentId(){
	include "php/cons.php";

	$sql = 'select Max(paymentid) as maxid from payments';
	$result = $mycon->query($sql);
	if($result){
		if($result->num_rows > 0){
			$row = $result->fetch_assoc();
			$maxid = ($row['maxid'] == 0)? 1800: $row['maxid'] + 1;
		}

	}else{
		$maxid = 18000;
	}
return $maxid;
}

function getTotalRepairs( $transid){
	include "php/cons.php";
	$sql = 'select * from repairdetail where rdtransid =' . $transid;
	$result = $mycon->query($sql);
	if($result){
		if($result->num_rows > 0 ) {
			$result->data_seek(0);
			$mytotal = 0;
			while( $row = $result->fetch_assoc()){
				$mytotal += ($row['qty'] * $row['unitprice']); 
			}
		$mycon->close();
		$result->close();	
		return $mytotal;		
		}else{
			return 0 ;
		}


	}else{
		return 0;
	}

}//----------- end of function -------------------

function getOverallTotal($transid){
	include "php/cons.php";
	$sql = 'select * from transaction where transid =' . $transid;
	$result = $mycon->query($sql);
	if($result){
		if($result->num_rows > 0 ) {
			$result->data_seek(0);
			$mytotal = 0;
			$repairs = getTotalRepairs($transid);
			$row = $result->fetch_assoc();
			$mytotal = $row['labor'] + $row['transportation'] + $row['shippingcost'] + $row['othercharges'] + $row['checkupfee'] - $row['discount'] + $repairs; 
		$mycon->close();
		$result->close();	
			
		return $mytotal;		
		}else{
			return 0 ;
		}


	}else{
		return 0;
	}

}//--------------end of function ---------------------


function getPayments($transid){
	include "php/cons.php";
	$sql = 'select * from payments where paytransid =' . $transid;
	$result = $mycon->query($sql);
	if($result){
		if($result->num_rows > 0 ) {
			$result->data_seek(0);
			$mytotal = 0;
			while($row = $result->fetch_assoc()){
			$mytotal += $row['payamount']; 
			}
		$mycon->close();
		$result->close();	
			
		return $mytotal;		
		}else{
			return 0 ;
		}

	}else{
		return 0;
	}

}//--------------end of function ---------------------

function getBalance($transid){
	$OverallTotal = getOverallTotal($transid);
	$payments = getPayments($transid);
	$balance = $OverallTotal - $payments;
	return $balance;

}



?>