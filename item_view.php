<?php

include_once("conn.php");
$id = $_REQUEST['i_id'];
$retrive_query = mysqli_query($conn, "select * from item_detail where p_sno='$id'") or die(mysqli_error());
$r = mysqli_fetch_array($retrive_query)

?>
<!DOCTYPE html>
<html>

<head>
	<title>VIEW ITEM</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<style>
		input:focus {
			background-color: yellow;
		}
	</style>

</head>

<body>

	<?php include_once("menu.php"); ?>
	<div style="padding-left:16px">
		<h2>ITEM DETAIL........</h2>
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
									<input type="text" value="<?php echo $r['p_code']; ?>" data-error="Enter product code" required="required" name="prd_no" class="form-control white-class">
								</th>
							</tr>
							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Item Name: </label>
								</th>

								<th class="col-md-8">
									<input type="text" value="<?php echo $r['p_name']; ?>" data-error="Enter product Type" required="required" name="itm_name" class="form-control white-class">
								</th>
							</tr>
							<tr>
								<th class="text-center">
									<label value="<?php echo $r['p_code']; ?>" class="col-xl-3 control-label">Item Service Code: </label>
								</th>

								<th class="col-md-8">
									<input type="text" value="<?php echo $r['p_hsn']; ?>" data-error="Enter HSN" required="required" name="SAC" class="form-control white-class">
								</th>
							</tr>
							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Tax Rate %: </label>
								</th>

								<th class="col-md-8">
									<input type="number" value="<?php echo $r['p_taxrate']; ?>" data-error="Enter tax rate" required="required" name="tax_no" class="form-control white-class">
								</th>
							</tr>
							<tr>


								<th class="col-md-8 text-center" colspan="2">
									<a href="item_update.php?id=<?php echo $r['p_sno'] ?>" class="btn btn-primary text-orange" target="" class="on-default remove-row"><i class="fa fa-eye"> Want to Update???</i></a>
									<a href="item-list.php" class="btn btn-primary text-orange" target="" class="on-default remove-row"><i class="fa fa-eye"> Cancel</i></a>
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