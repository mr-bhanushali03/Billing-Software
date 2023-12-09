<?php
include_once("conn.php");
if (isset($_POST["Add"])) {

	$cid = $_POST["cust_id"];
	$cname = strtoupper($_POST["c_name"]);
	$con = $_POST["c_phone"];
	$cont = strtoupper($_POST["c_country"]);
	$state = $_POST["c_state"];
	$gstinn = $_POST["gstinn"];
	$city = strtoupper($_POST["c_city"]);
	$add = $_POST["c_addr"];
	$pin = $_POST["c_pin"];
	$eml = $_POST["emaill"];
	$date = date("Y-m-d");

	$sql = "INSERT INTO consignee (cust_id, custname, cno, country, sid, city, addr, pin_code, email, reg, gstin) 
        VALUES ('$cid', '$cname', '$con', '$cont', '$state', '$city', '$add', '$pin', '$eml', '$date', '$gstinn')";
	if (mysqli_query($conn, $sql)) {
		echo '<script type="text/javascript">';
		echo 'alert("Consignee successfully Added");';
		echo 'window.location.href = "consignee-list.php";';
		echo '</script>';
	} else {
		header("Location: consignee.php");
	}
}

?>

<html>

<head>
	<title>CONSIGNEE</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<?php include_once("menu.php"); ?>
	<div style="padding-left:16px">
		<h2>CREATE CONSIGNEE</h2>
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
									<input type="text" data-error="Enter consignee Id" required="required" name="cust_id" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Consignee Name: </label>
								</th>

								<th class="col-md-8">
									<input type="text" data-error="Enter customer name" required="required" name="c_name" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">GSTIN: </label>
								</th>

								<th class="col-md-8">
									<input type="text" data-error="Enter gstin" required="" name="gstinn" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Address: </label>
								</th>
								<th class="col-md-18">
									<textarea name="c_addr" class="form-control white-class" required></textarea>
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">City: </label>
								</th>

								<th class="col-md-8">
									<input type="text" data-error="Enter city" required="required" name="c_city" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">State: </label>
								</th>
								<th class="col-md-8">
									<select id="c_state" name="c_state" class="form-control select2" onchange="validateState()" required>
										<option value="" selected disabled>--state--</option>
										<?php
										$sql = mysqli_query($conn, "select * from state") or die(mysqli_error());
										while ($row = mysqli_fetch_array($sql)) {
										?>
											<option value="<?php echo $row['sid']; ?>"> <?php echo $row['state']; ?></option>
										<?php } ?>
									</select>
									<div id="stateError" style="color: red;"></div>
								</th>
							</tr>
							<script>
								function validateState() {
									var stateSelect = document.getElementById("c_state");
									var stateError = document.getElementById("stateError");

									if (stateSelect.value === "") {
										stateError.innerHTML = "Please select a state.";
									} else {
										stateError.innerHTML = "";
									}
								}
							</script>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Country </label>
								</th>

								<th class="col-md-8">
									<input type="text" data-error="Enter country" required="required" name="c_country" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Pin code: </label>
								</th>

								<th class="col-md-8">
									<input type="text	" data-error="Enter 6-digit pin code" required="required" name="c_pin" class="form-control white-class" pattern="\d{6}">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Contact No: </label>
								</th>

								<th class="col-md-8">
									<input type="text" data-error="Enter phone No" required="required" name="c_phone" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Email Id: </label>
								</th>

								<th class="col-md-8">
									<input type="email" data-error="Enter Email id" required="required" name="emaill" class="form-control white-class">
								</th>
							</tr>

							<tr>

								<th class="col-md-8 text-center" colspan="2">
									<input type="submit" name="Add" value="Add" class="button">

									<input type="reset" name="cancel" value="Reset" class="button">
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