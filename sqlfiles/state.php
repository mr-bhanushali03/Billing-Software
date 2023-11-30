<?php
	require_once("conn.php");
	$state = $_POST['state'];
	$sid = $_POST['sid'];
	
	$s = mysqli_query($conn, "SELECT * FROM state")or die(mysqli_error());
	while($r = mysqli_fetch_array($s)){
		if($r['state'] == $state){
			$var = "3";
			break;
		}elseif ($r['state_code'] == $sid) {
			$var = "2";
			break;
		}else{
			$var =1 ;			
		}
	}

	if($var == "3"){
		echo "3";
	}elseif($var == '2'){
		echo "2";
	}else{
		$sql=mysqli_query($conn, "INSERT INTO state (state_code, state) values('$sid','$state') ")or die(mysqli_error());  		
			if($sql){
				echo "1";
			}else{
				echo "0";
			}
	}
?>