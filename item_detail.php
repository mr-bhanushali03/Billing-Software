<?php

include_once("conn.php");
if (isset($_POST["Add"])) {
	$pc = $_POST['prd_no'];
	$pn = $_POST['ratio'] . "," . $_POST['va'] . "VA, " . 'Cl.' . $_POST['class'] . ", " . $_POST['size'] . ", " . $_POST['prd_name'];
	$phsn = $_POST['hsn_no'];
	$ptax = $_POST['tax_no'];

	$sql = "insert into item_detail(p_code,p_name,p_hsn,p_taxrate) values('" . $pc . "','" . $pn . "','" . $phsn . "','" . $ptax . "') ";

	if (mysqli_query($conn, $sql)) {
		$msg = "Added Successfully";
		//windows.alert("added");
	} else {
		$msg = "required field missing";
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
		<h2>CREATE ITEM</h2>
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
									<label class="col-xl-3 control-label">product code: </label>
								</th>

								<th class="col-md-8">
									<input type="text" data-error="Enter product code" required="required" name="prd_no" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Product Type: </label>
								</th>

								<th class="col-md-8">
									<input type="text" data-error="Enter product Type" required="required" name="prd_name" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Ratio: </label>
								</th>

								<th class="col-md-8">
									<input type="text" data-error="Enter product Type" required="required" name="ratio" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">VA: </label>
								</th>

								<th class="col-md-8">
									<input type="text" data-error="Enter product Type" required="required" name="va" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Class </label>
								</th>

								<th class="col-md-8">
									<input type="text" data-error="Enter product Type" required="required" name="class" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Size/Model: </label>
								</th>

								<th class="col-md-8">
									<input type="text" data-error="Enter product Type" required="required" name="size" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Product HSN: </label>
								</th>

								<th class="col-md-8">
									<input type="text" data-error="Enter HSN" required="required" name="hsn_no" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Tax Rate %: </label>
								</th>

								<th class="col-md-8">
									<input type="number" data-error="Enter tax rate" required="required" name="tax_no" class="form-control white-class">
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
	<script>
		$(document).ready(function() {
			$("#tab_logic").on('submit') {
				alert("Successfully added");
			}
		});
	</script>
</body>

</html>