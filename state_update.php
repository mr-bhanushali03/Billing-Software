<?php
require_once("sqlfiles/conn.php");
$id = $_REQUEST['s_id'];
$retrive_query = mysqli_query($conn, "select * from state where sid='$id' ") or die(mysqli_error());
$r = mysqli_fetch_array($retrive_query);

if (isset($_POST["update"])) {
	$state = strtoupper($_POST['state']);
	$sid = $_POST['sid'];

	$sql = "update state set state_code='" . $sid . "', state='" . $state . "' where sid=$id";
	if (mysqli_query($conn, $sql)) {
		echo '<script language="javascript">';
		echo 'alert("Record updated successfully");';
		echo 'window.location.href = "state-list.php";';
		echo '</script>';
	} else {
		header("location:state_update.php");
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>UPDATE STATE</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<?php include_once("menu.php"); ?>
	<br><br>
	<div class="content-page">

		<!-- Start content -->

		<div class="content">
			<div class="container">
				<legend class="header-title m-t-0 m-b-30"> <B>Update State.........</b></Legend>
				<div class="row clearfix">
					<div class="col-md-8 column">
						<table class="table table-bordered table-hover" id="tab_logic">
							<form method="post" action="" id="item_entry">
								<thead>
									<tr>
										<th class="text-center">
											<label class="col-xl-3 control-label">State Name: </label>
										</th>
										<th class="col-md-8">
											<input type="text" value="<?php echo $r['state']; ?>" data-error="Enter State name" required="required" name="state" class="form-control white-class" placeholder="Enter State name">
										</th>
									</tr>
									<tr>
										<th class="text-center">
											<label class="col-xl-3 control-label">State ID: </label>
										</th>
										<th class="col-md-8">
											<input type="text" value="<?php echo $r['state_code']; ?>" data-error="Enter State ID" required="" name="sid" class="form-control white-class" placeholder="State ID">
										</th>
									</tr>
									<tr>
										<th class="col-md-8 text-center" colspan="2">
											<input type="submit" name="update" value="UPDATE" class="btn btn-primary text-orange">

											<a href="state-list.php" name="cancel" class="btn btn-primary text-red">CANCEL</a>
										</th>
									</tr>
								</thead>
							</form>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>

</html>