<?php
	require_once("conn.php");
	$cname=$_POST["c_name"];
	$cgst=$_POST["c_gst"];
	$add=$_POST["c_addr"];
	$city=$_POST["c_city"];
	$state=$_POST["c_state"];
	$pin=$_POST["c_pin"];
	$gender=$_POST['gender'];
	$con=$_POST["c_phone"];
	$mob=$_POST["c_mob"];
	$email=$_POST['email'];
	$dob = $_POST['dob'];
	
	$sql=mysqli_query($conn, "INSERT INTO customer (`custname`, `gender`, `dob`, `cno1`, `cno2`, `sid`, `city`, `addr`, `pincode`, `email`, `reg`, `gstin`) values('$cname','$gender','$dob','$con','$mob','$state','$city','$add','$pin','$email','$current_date','$cgst') ")or die(mysqli_error());  
   if($sql) {
   echo "1";
   }else{
	echo "0";
   }

?>