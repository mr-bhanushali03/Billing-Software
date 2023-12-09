<?php
include_once("conn.php");
$id = $_REQUEST['C_id'];
$sql = mysqli_query($conn, "SELECT * FROM consignee WHERE id='$id' ") or die(mysqli_error());
$row = mysqli_fetch_array($sql);

if (isset($_POST["update"])) {
	$current_date = date("Y-m-d");
	$cid = $_POST["cust_id"];
	$cname = strtoupper($_POST["c_name"]);
	$con = $_POST["c_phone"];
	$cont = strtoupper($_POST["c_country"]);
	$state = $_POST["c_state"];
	$gstinn = $_POST["gstinn"];
	$city = strtoupper($_POST["c_city"]);
	$ad1 = $_POST["ad1"];
	$pin = $_POST["c_pin"];
	$eml = $_POST["emaill"];
	$sql = "update consignee set cust_id='" . $cid . "', custname='" . $cname . "',cno='" . $con . "',country='" . $cont . "',sid='" . $state . "',city='" . $city . "',addr='" . $ad1 . "',pin_code='" . $pin . "',email='" . $eml . "',reg='" . $current_date . "',gstin='" . $gstinn . "' where id=$id";
	if (mysqli_query($conn, $sql)) {
		echo '<script type="text/javascript">';
		echo 'alert("Consignee successfully Updated");';
		echo 'window.location.href = "consignee-list.php";';
		echo '</script>';
	} else {
		header("location:consignee_update.php");
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>UPDATE CONSIGNEE</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<?php include_once("menu.php"); ?>
	<div style="padding-left:16px">
		<h2>UPDATE CONSIGNEE</h2>
		<LEGEND></LEGEND>
	</div>
	<div class="container">
		<div class="row clearfix">
			<div class="col-md-8 column">
				<table class="table table-bordered table-hover" id="tab_logic">
					<form method="post" action="">
						<thead>
							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Consignee Id: </label>
								</th>

								<th class="col-md-8">
									<input type="text" data-error="Enter customer Id" required="required" name="cust_id" value="<?php echo $row['cust_id']; ?>" class="form-control white-class">
								</th>
							</tr>
							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Customer Name: </label>
								</th>
								<th class="col-md-8">
									<input type="text" data-error="Enter customer name" required="true" name="c_name" value="<?php echo $row['custname']; ?>" class="form-control white-class">
								</th>
							</tr>
							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">GSTIN: </label>
								</th>

								<th class="col-md-8">
									<span id="gstatus">Please enter a valid GSTIN Number.</span></br>
									<input type="text" data-error="Enter gstin" required="true" name="gstinn" value="<?php echo $row['gstin']; ?>" s class="form-control white-class" onkeyup="gstinn_validate(this.value);">
								</th>
							</tr>
							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Address </label>
								</th>
								<th class="col-md-18">
									<textarea name="ad1" class="form-control white-class" required="true"><?php echo $row['addr']; ?></textarea>
								</th>
							</tr>
							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">City: </label>
								</th>
								<th class="col-md-8">
									<input type="text" data-error="Enter city" required="required" name="c_city" value="<?php echo $row['city']; ?>" class="form-control white-class">
								</th>
							</tr>
							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">State: </label>
								</th>
								<th class="col-md-8">
									<?php
									$idd = $_REQUEST['C_id'];
									$sql = mysqli_query($conn, "SELECT * FROM consignee WHERE id='$idd' ") or die(mysqli_error());
									while ($r = mysqli_fetch_array($sql)) {
										$state = $r['sid'];
										$stat = mysqli_query($conn, "SELECT * FROM state WHERE sid='$state' ") or die(mysqli_error());
										$name = mysqli_fetch_array($stat);
									?>
										<select id="c_state " name="c_state" class="form-control select2">
											<option selected value="<?php echo $row['sid']; ?>"><?php echo $name['state']; ?></option>
											<?php
											$sql = mysqli_query($conn, "select * from state") or die(mysqli_error());
											while ($row = mysqli_fetch_array($sql)) {
											?>
												<option value="<?php echo $row['sid']; ?>"> <?php echo $row['state']; ?></option>
											<?php } ?>
										</select>
								</th>

							</tr>
						<?php } ?>

						<tr>
							<?php
							$id = $_REQUEST['C_id'];
							$sql = mysqli_query($conn, "SELECT * FROM consignee WHERE id='$id' ") or die(mysqli_error());
							$row = mysqli_fetch_array($sql);
							?>
							<th class="text-center">
								<label class="col-xl-3 control-label">Country </label>
							</th>

							<th class="col-md-8">
								<input type="text" data-error="Enter country" required="required" name="c_country" value="<?php echo $row['country']; ?>" class="form-control white-class">
							</th>
						</tr>

						<tr>
							<th class="text-center">
								<label class="col-xl-3 control-label">Pin code: </label>
							</th>

							<th class="col-md-8">
								<input type="text" data-error="Enter 6-digit pin code" required="required" name="c_pin" value="<?php echo $row['pin_code']; ?>" class="form-control white-class" pattern="\d{6}">
							</th>
						</tr>
						<tr>
							<th class="text-center">
								<label class="col-xl-3 control-label">Contact No: </label>
							</th>
							<th class="col-md-8">
								<input type="text" data-error="Enter phone No" required="required" name="c_phone" value="<?php echo $row['cno']; ?>" class="form-control white-class">
							</th>
						</tr>
						<tr>
							<th class="text-center">
								<label class="col-xl-3 control-label">Email Id: </label>
							</th>

							<th class="col-md-8">
								<input type="email" data-error="Enter Email id" required="required" name="emaill" value="<?php echo $row['email']; ?>" class="form-control white-class">
							</th>
						</tr>
						<tr>
							<th class="col-md-8 text-center" colspan="2">
								<input type="submit" name="update" value="UPDATE" class="btn btn-primary text-orange">

								<a href="consignee-list.php" name="cancel" class="btn btn-primary text-red">CANCEL</a>
							</th>
						</tr>
						</thead>
						<tbody>
						</tbody>
					</form>
				</table>
			</div>
		</div>
	</div>
</body>

</html>