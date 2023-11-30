<?php
	require_once("conn.php");
	$i_name = $_POST['i_name'];
	$hsn = $_POST['hsn'];
	
	$s = mysqli_query($conn, "SELECT * FROM item")or die(mysqli_error());
	while($r = mysqli_fetch_array($s)){
		if($r['p_name'] == $i_name){
			$var = "3";
			break;
		}elseif ($r['p_hsn'] == $hsn) {
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
		$sql=mysqli_query($conn, "INSERT INTO item (p_name, p_hsn) values('$i_name','$hsn') ")or die(mysqli_error());  		
			if($sql){
				echo "1";
			}else{
				echo "0";
			}
	}
?>