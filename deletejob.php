<?php
require 'restrict.php'; 
include 'php/cons.php';
	$sql = "Delete from joborder where jobnumber = ".$_GET['jobnumber'];
	if ($mycon->query($sql) === TRUE) {

	} else {
	    echo "Error: " . $sql . "<br>" . $mycon->error;
	}
	
$mycon->close();
$redirect = 'index.php';  
header("Location: " . $redirect );
?>