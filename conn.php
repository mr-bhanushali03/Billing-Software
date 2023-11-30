<?php
	
	// connect to mysqli
	$conn = mysqli_connect("localhost","root","Kev@l8347","saral2") or die("Sorry, can't connect to the mysqli.");
	
	$current_date_time=date('Y-m-d H:i:s'); //mysqli format with date 

	  $current_date=date('Y-m-d'); //mysqli format with Current date 

?>