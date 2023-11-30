<?php

include_once("conn.php");



?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<html>

<body>


	<div class="container">
		<div class="row clearfix">
			<div class="col-md-16 column">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="col-md-4 control-label">Invoice No: </label>
							<div class="col-md-8">
								<input type="text" data-error="Enter Invoice No" required="required" name="inv_no" class="form-control white-class">
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="col-md-4 control-label">Invoice Date: </label>
							<div class="col-md-8">
								<input type="text" data-error="Enter Invoice No" required="required" name="inv_no" class="form-control white-class">
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="col-md-4 control-label">Order No: </label>
							<div class="col-md-8">
								<input type="text" data-error="Enter Quotation Date" required="" value="" name="quot_date" class="form-control white-class" readonly>
								<input type="hidden" value="" name="quot_id">
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="col-md-4 control-label">Order Date: </label>
							<div class="col-md-8">
								<input type="DATE" data-error="Enter Quotation Date" required="" value="" name="quot_date" class="form-control white-class" readonly>
								<input type="hidden" value="" name="quot_id">
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>


				</div>

				<div class="row">

					<div class="col-xl-1 col-xl-1 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="col-md-1 control-label">Customer Name: </label>
							<div class="col-md-5">
								<select class="form-control white-class">
									<?php
									echo $sql = "select * from customer_detail";
									$result = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_row($result)) { ?>
										<option> <?php echo $row[1]; ?> </option>

									<?php }
									?>
								</select>

								<div class="help-block with-errors"></div>
							</div>
							<div>
							</div>


							<div class="form-group">
								<label class="col-md-1 control-label">GSTIN.: </label>
								<div class="col-md-5">
									<input type="text" data-error="Enter 10 Digits Mobile No " readonly required="required" name="mo_n" value="" class="form-control white-class" pattern="[0-9]{10}">
									<div class="help-block with-errors"></div>
								</div>
							</div>


						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-1 col-xl-1 col-sm-12 col-xs-12">
						<div class="form-group">
							<label class="col-md-1 control-label">consignee name</label>
							<div class="col-md-5">
								<select class="form-control white-class">
									<?php
									echo $sql = "select * from customer_detail";
									$result = mysqli_query($conn, $sql);
									while ($row = mysqli_fetch_row($result)) { ?>
										<option> <?php echo $row[1]; ?> </option>

									<?php }
									?>
								</select>
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
				</div>









				<table class="table table-bordered table-hover" id="tab_logic">
					<thead>
						<tr>
							<th class="text-center" rowspan="2">
								S.no

							</th>


							<th class="text-center col-lg-4 column">
								Item Description
							</th>
							<th class="text-center">
								HSN
							</th>
							<th class="text-center">
								Qty.
							</th>
							<th class="text-center">
								Unit
							</th>

							<th class="text-center">
								Rate
							</th>

							<th class="text-center">
								Total
							</th>

							<th class="text-center">
								Discount
							</th>

							<th class="text-center">
								Taxable value
							</th>

							<th class="text-center">
								Total
							</th>

			</div>
			</tr>
			</thead>



			<tbody>
				<tr id='addr0'>
					<td>
						1
					</td>
					<td>
						<select class="form-control white-class">
							<option>---------select Item-------</option>
							<?php

							echo $sql = "select * from product_detail";
							$result = mysqlii_query($sql);
							while ($row = mysqlii_fetch_row($result)) { ?>

								<option> <?php echo $row[2]; ?> </option>

							<?php }
							?>
						</select>
					</td>
					<td>
						<input type="text" name='hsn' placeholder='HSN' class="form-control" />
					</td>
					<td>
						<input type="text" name='qty' placeholder='0' class="form-control text-right" />
					</td>
					<td>
						<input type="text" name='unit' placeholder='unit' class="form-control" />
					</td>
					<td>
						<input type="text" name='rate' placeholder='0.00' class="form-control text-right" />
					</td>
					<td>
						<input type="text" name='total' placeholder='0.00' class="form-control text-right" />
					</td>
					<td>
						<input type="text" name='disc' placeholder='0%' class="form-control text-right" />
					</td>
					<td>
						<input type="text" name='mail0' placeholder='0.00' class="form-control text-right" />
					</td>
					<td>
						<input type="text" name='mail0' placeholder='0.00' class="form-control text-right" />
					</td>

				</tr>
				<tr id='addr1'></tr>


			</tbody>
			<tr>
				<th class="text-right" colspan="9">Sub Total</th>
				<th class="text-right" colspan="">1000.00</th>
			</tr>


			<tr>
				<th class="text-right" colspan="9">Add GST @ 5%</th>
				<th class="text-right" colspan="">50.00</th>
			</tr>

			<tr>
				<th class="text-right" colspan="9">Add GST @ 18%</th>
				<th class="text-right" colspan="">64.00</th>
			</tr>

			<tr>
				<th class="text-right" colspan="9">Add IGST @ 28%</th>
				<th class="text-right" colspan="">0.00</th>
			</tr>

			<tr>
				<th class="text-right" colspan="9">Round off</th>
				<th class="text-right" colspan="">0.00</th>
			</tr>

			<tr>
				<th class="text-right" colspan="9">Total</th>
				<th class="text-right" colspan="">10000.00</th>
			</tr>

			<tr>
				<th class="text-right" colspan="3"><input type="submit" name="save" value="Save"></th>

				<th class="text-right" colspan="2"><input type="reset" name="reset" value="Reset"></th>
				<th class="text-right" colspan="2"><input type="submit" name="print" value="print"></th>
				<th class="text-right" colspan="2"><input type="submit" name="view" value="view"></th>
			</tr>
			</table>
		</div>
	</div>

	<a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
	</div>
</body>

</html>
<script>
	$(document).ready(function() {
		var i = 1;
		$("#add_row").click(function() {
			$('#addr' + i).html("<td>" + (i + 1) + "</td><td><input name='name" + i + "' type='text' placeholder='Name' class='form-control input-md'  /> </td><td><input name='name" + i + "' type='text' placeholder='HSN' class='form-control input-md'  /> </td><td><input name='name" + i + "' type='text' placeholder='0' class='form-control text-right input-md'  /> </td><td><input name='name" + i + "' type='text' placeholder='unit' class='form-control input-md'  /> </td><td><input name='name" + i + "' type='text' placeholder='0.00' class='form-control text-right input-md'  /> </td><td><input name='name" + i + "' type='text' placeholder='0.00' class='form-control text-right input-md'  /> </td><td><input name='name" + i + "' type='text' placeholder='0%' class='form-control text-right input-md'  /> </td><td><input name='name" + i + "' type='text' placeholder='0.00' class='form-control text-right input-md'  /> </td><td><input name='name" + i + "' type='text' placeholder='0.00' class='form-control text-right input-md'  /> </td>");

			$('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
			i++;
		});
		$("#delete_row").click(function() {
			if (i > 1) {
				$("#addr" + (i - 1)).html('');
				i--;
			}
		});

	});
</script>