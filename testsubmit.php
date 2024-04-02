<?php

$str = json_decode($_POST['mymodel'], true); 
		echo json_encode($str);
		echo "<br />";

$str = json_decode($_POST['myrepair'], true); 
		echo json_encode($str);

?>