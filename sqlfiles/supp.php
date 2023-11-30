<?php
	require_once("../conn.php");
	$id = $_REQUEST['id'];
	$sql = mysqli_query($conn, "SELECT * FROM customer WHERE id='$id' ")or die(mysqli_error());
	$row = mysqli_fetch_array($sql);
	echo json_encode($row);
?>