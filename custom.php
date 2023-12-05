<?php
include_once("conn.php");
if (isset($_POST["Add"])) {
	$cid = $_POST['cust_id'];
	$cname = strtoupper($_POST['c_name']);
	$gst = $_POST['gstinn'];
	$addr = $_POST['c_addr'];
	$city = strtoupper($_POST['c_city']);
	$state = $_POST['c_state'];
	$country = strtoupper($_POST['c_country']);
	$pin = $_POST['c_pin'];
	$phone = $_POST['c_phone'];
	$email = $_POST['emaill'];
	$date = date("Y-m-d");

	$sql = "INSERT INTO customer (cust_id, custname, cno, country, sid, city, addr, pin_code, email,reg, gstin) 
            VALUES ('$cid', '$cname', '$phone', '$country', '$state', '$city', '$addr', '$pin', '$email', '$date', '$gst')";

	if (mysqli_query($conn, $sql)) {
		echo '<script type="text/javascript">';
		echo 'alert("Customer successfully Added");';
		echo 'window.location.href = "customer-list.php";';
		echo '</script>';
	} else {
		echo '<script type="text/javascript">';
		echo 'alert("Customer not Added");';
		echo 'window.location.href = "customer.php";';
		echo '</script>';
	}
}
?>

<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<?php include_once("menu.php"); ?>
	<div style="padding-left:16px">
		<h2>CREATE CUSTOMER</h2>
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
									<label class="col-xl-3 control-label">Customer Id: </label>
								</th>

								<th class="col-md-8">
									<input type="text" data-error="Enter customer Id" required="required" name="cust_id" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Customer Name: </label>
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
									<span id="gstatus">Please enter a valid GSTIN Number.</span></br>
									<input type="text" data-error="Enter gstin" required="" name="gstinn" class="form-control white-class">
								</th>
							</tr>

							<tr>

								<th class="text-center">
									<label class="col-xl-3 control-label">Address: </label>
								</th>

								<th class="col-md-18">
									<textarea name="c_addr"> </textarea>
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


									<select id="c_state " name="c_state" class="form-control select2">
										<option selected>--state--</option>
										<?php
										$sql = mysqli_query($conn, "select * from state") or die(mysqli_error());
										while ($row = mysqli_fetch_array($sql)) {
										?>
											<option value="<?php echo $row['sid']; ?>"> <?php echo $row['state']; ?></option>
										<?php } ?>


									</select>
								</th>
							</tr>

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
									<input type="number" data-error="Enter pin code" required="required" name="c_pin" class="form-control white-class">
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