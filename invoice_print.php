<?php
require_once("conn.php");
$id = $_REQUEST['id'];
$sql = mysqli_query($conn, "SELECT * FROM invoice WHERE quot_id='$id' ") or die(mysqli_error());
$row = mysqli_fetch_array($sql);
?>

<html moznomarginboxes mozdisallowselectionprint>

<head>
	<title>INVOICE PRINT</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/icons.css" rel="stylesheet" type="text/css" />
	<link href="css/pages.css" rel="stylesheet" type="text/css" />
	<link href="css/font/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/responsive.css" rel="stylesheet" type="text/css" />

	<style type="text/css" media="print">
		@page {
			size: A4 landscape;
			margin-bottom: 20mm;
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

		table.tableizer-table {
			border-collapse: collapse;
			font-size: 12px;
			border: 1px solid black;
			font-family: Arial, Helvetica, sans-serif;
		}

		.tableizer-table td {
			padding: 4px;
			margin: 12px;
			border: 1px solid black;
		}

		.tableizer-table th {
			background-color: #f5f5f5;
			color: black;
			font-weight: bold;
		}

		td,
		th {
			border: 1px solid #000;
			padding: 2px;
		}

		.center {
			text-align: center;
		}

		.right {
			text-align: right;
		}

		.italic {
			font-style: italic;
		}

		.hidden {
			display: none;
		}

		.bottom {
			border-bottom: 1px solid black;
		}

		.left {
			border-left: 1px solid black;
		}

		.a {
			font-weight: bold;
		}
	</style>

</head>


<body>

	<div class="page">
		<table align="center" class="">
			<tr>

				<td colspan="26" align="right" height="10">
					<font size="2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<b><u>TAX INVOICE CUM CHALLAN</u></b></font> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Orignal
				</td>


			</tr>
		</table>
		<table class="tableizer-table" height="297mm" width="" align="center" border="">

			<thead>

				<tr>
					<th colspan="30" valign="bottam">
						<font size="6"><b>DEMO</b></font>
					</th>

				</tr>
			</thead>

			<tbody>
				<tr>

					<td colspan="30" align="center"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, animi.</br> Lorem ipsum dolor sit amet.</td>

				</tr>
				<tr>

					<td colspan="30" align="center">
						<font size=""><b>GSTIN: 26AANFS4221Q1ZN </b></font>
					</td>

				</tr>
				<tr>
					<td colspan="30"></td>

				</tr>
				<tr>
					<td colspan="12">Inv. No.</td>

					<td colspan="5" class="a"><?php echo $row['quot_no']; ?></td>

					<td colspan="1">Inv.Date</td>
					<td colspan="3" class="a"><?php $time = strtotime($row['inv_date']);
												$myFormatForView = date("d/m/Y", $time);
												//$myFormatForView = date("d/m/Y g:i A", $time);
												// $myFormatForView is some thing like: 01/31/14 1:05 PM
												//dd [.\t-] mm [.-] YY
												echo $myFormatForView; ?></td>

					<td colspan="3">Date of Supply </td>
					<td colspan="8"><?php
									//	$time = strtotime($row['supplydate']);
									//$myFormatForView = date("d/m/Y", $time);
									//		echo $myFormatForView; 
									echo $row['supplydate']; ?>
					</td>
				</tr>
				<tr>
					<td colspan="12">Ord. No. </td>
					<td colspan="5"> <?php echo $row['order_no']; ?> </td>

					<td colspan="1"> Ord.Date </td>
					<td colspan="3"> <?php $time = strtotime($row['order_date']);
										$myFormatForView = date("d/m/Y", $time);



										echo $myFormatForView;  ?></td>

					<td colspan="3">Place of Supply</td>
					<td colspan="8">&nbsp;</td>
				</tr>
				</tr>
				<tr>
					<td colspan="30"></td>

				</tr>
				<tr>
					<td colspan="21" align="center">Details of Reciver / Bill to:</td>

					<td colspan="16" align="center">Details of Consignee / Shipped to:</td>

				</tr>
				<tr>
					<td colspan="2">Name</td>
					<?php
					$id = $row['quot_cust'];
					$c = mysqli_query($conn, "SELECT * FROM consignee WHERE id='$id' ") or die(mysqli_error());
					$cu = mysqli_fetch_array($c);
					$sid = $cu['sid'];
					$squery = mysqli_query($conn, "SELECT * FROM state WHERE sid ='$sid' ") or die(mysqli_error());
					$ss = mysqli_fetch_array($squery);
					?>
					<td colspan="19"><b><?php echo $cu['custname']; ?></b></td>

					<td colspan="">Name</td>
					<?php
					$iddd = $row['conname'];
					$s = mysqli_query($conn, "SELECT * FROM consignee WHERE id='$iddd' ") or die(mysqli_error());
					$ru = mysqli_fetch_array($s);

					$rsid = $ru['sid'];
					$squery = mysqli_query($conn, "SELECT * FROM state WHERE sid ='$rsid' ") or die(mysqli_error());
					$sss = mysqli_fetch_array($squery);
					?>
					<td colspan="16"><b><?php echo $ru['custname']; ?></b></td>

				</tr>
				<tr>
					<td colspan="2" height="60">Address</td>
					<td colspan="19"><?php echo $cu['addr']; ?><?php //echo $ru['pin_code']; 
																?></td>

					<td colspan="1">Address</td>
					<td colspan="19"><?php echo $ru['addr']; ?><?php //echo $ru['pin_code']; 
																?></td>

				</tr>
				<tr>
					<td colspan="2">GSTIN</td>
					<td colspan="19" class="a"><?php echo $cu['gstin']; ?></td>

					<td colspan="1">GSTIN</td>
					<td colspan="12" class="a"><?php echo $ru['gstin']; ?></td>

				</tr>
				<tr>
					<td colspan="2">State</td>
					<td colspan="17" class="a"><?php echo $ss['state']; ?></td>

					<td colspan="1">State Code</td>
					<td colspan="1" class="a"><?php echo $ss['state_code']; ?></td>
					<td colspan="">State</td>
					<td colspan="3" class="a"><?php echo $sss['state']; ?></td>

					<td colspan="2">State Code</td>
					<td colspan="" class="a"><?php echo $sss['state_code']; ?></td>

				</tr>
				<tr>
					<td colspan="30"></td>

				</tr>
				<tr>
					<td rowspan="" width="10">Sr No.</td>
					<td rowspan="" width="" colspan="20" align="center">Description</td>
					<td>HSN</td>
					<td>Qty.pcs</td>
					<td>Rate</td>
					<td rowspan="" align="center" width="px">Amount</td>
					<td rowspan="" align="center">Dis.</td>
					<td rowspan="" align="center" colspan="2">Taxable value</td>
				</tr>
				<?php
				$sno = 1;
				$id = $_REQUEST['id'];
				$sqli = mysqli_query($conn, "SELECT * FROM invoice_desc WHERE quot_id='$id' ") or die(mysqli_error());
				while ($r = mysqli_fetch_array($sqli)) {
					$itemID = $r['item_desc'];
					$pro = mysqli_query($conn, "SELECT * FROM item_detail WHERE p_sno='$itemID' ") or die(mysqli_error());
					$name = mysqli_fetch_array($pro);
				?>
					<tr>
						<td width="10"><?php echo $sno; ?></td>
						<td colspan="20" width="" class="a"><?php echo $name['p_name']; ?></td>
						<td><?php echo $name['p_hsn']; ?></td>
						<td width="10" align="center" class="a"><?php echo $r['quantity']; ?></td>
						<td align="right" class="a"><?php echo number_format(($r['rate']), 2) ?></td>
						<td align="right" class="a"><?php echo number_format(($r['total']), 2) ?></td>
						<td align="right" class="a"><?php echo number_format(($r['dis']), 2) ?>%</td>
						<td colspan="2" align="right" class="a"><?php echo number_format(($r['tax_val']), 2) ?></td>
					</tr>
				<?php $sno++;
				} ?>

				<td colspan="30"></td>

				</tr>

				<tr>
					<td colspan="14"> L.R No </td>
					<td colspan="8"> <?php echo $row['lrno']; ?></td>
					<?php
					$id = $row['quot_id'];
					$cc = mysqli_query($conn, "SELECT sum(quantity) FROM invoice_desc where quot_id='$id' ") or die(mysqli_error());
					$cuu = mysqli_fetch_array($cc);
					//$cuid = $cu['sid'];
					?>
					<td colspan="" align="center"><b><?php echo $cuu['sum(quantity)']; ?></b></td>

					<td colspan="2"><b>Total</b></td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['subtotal']), 2); ?></td>

				</tr>

				<tr>
					<td colspan="14">Transport</td>
					<td colspan="9"><?php echo $row['transmode']; ?></td>

					<td colspan="2">Packing</td>
					<td colspan="3" align="right" class="a"><?php echo $row['packing']; ?></td>

				</tr>
				<tr>
					<td colspan="14">Vehicle No.</td>
					<td colspan="9"><?php echo $row['vehicleno']; ?></td>

					<td colspan="2" class="border">Transportation</td>
					<td colspan="3" align="right" class="a"><?php echo $row['transpotation']; ?></td>

				</tr>

				<tr>
					<td colspan="23"></td>
					<td colspan="2"><b>Nett Amount </b></td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['subtotal'] + $row['transpotation'] + $row['packing']), 2); ?></td>

				</tr>



				<tr <?php if ($row['cgst_amt'] == '0.00') {
						echo "style='display:none' ";
					} ?>>
					<td colspan="23"></td>
					<td colspan="2">CGST @<?php echo $row['cgst']; ?>% </td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['cgst_amt']), 2) ?></td>

				</tr>
				<tr <?php if ($row['sgst_amt'] == '0.00') {
						echo "style='display:none' ";
					} ?>>
					<td colspan="23"></td>
					<td colspan="2">UTGST @<?php echo $row['sgst'] ?>%</td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['sgst_amt']), 2) ?>&nbsp;</td>

				</tr>
				<tr <?php if ($row['igst_amt'] == '0.00') {
						echo "style='display:none' ";
					} ?>>
					<td colspan="23">&nbsp;</td>

					<td colspan="2">IGST @<?php echo $row['igst'] ?>%</td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['igst_amt']), 2) ?>&nbsp;</td>
				</tr>

				<tr>
					<td colspan="23"><b>HDFC BANK A/c no.</b>&nbsp;&nbsp;&nbsp;&nbsp;00742023400639
					</td>
					<td colspan="2"><b>Round Off</b></td>

					<td colspan="4" align="right" class="a"><?php echo $row['rvalue']; ?>&nbsp;</td>

				</tr>
				<tr>
					<td colspan="23"><b>RTGS/NEFT IFSC:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HDFC1200074</td>
					<td colspan="2"><b>Grand Total</b></td>

					<td colspan="4" align="right" class="a"><i class="fa fa-rupee"></i> <?php echo number_format(($row['grandtotal']), 2) ?></td>

				</tr>
				<tr>
					<td colspan="30">
						<?php

						$number = $row['grandtotal'];
						$no = round($number);
						$point = round($number - $no, 2) * 100;
						$hundred = null;
						$digits_1 = strlen($no);
						$i = 0;
						$str = array();
						$words = array(
							'0' => '', '1' => 'One', '2' => 'Two',
							'3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
							'7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
							'10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
							'13' => 'Thirteen', '14' => 'Fourteen',
							'15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
							'18' => 'Eighteen', '19' => 'Nineteen', '20' => 'Twenty',
							'30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
							'60' => 'Sixty', '70' => 'Seventy',
							'80' => 'Eighty', '90' => 'Ninety'
						);
						$digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
						while ($i < $digits_1) {
							$divider = ($i == 2) ? 10 : 100;
							$number = floor($no % $divider);
							$no = floor($no / $divider);
							$i += ($divider == 10) ? 1 : 2;
							if ($number) {
								$plural = (($counter = count($str)) && $number > 9) ? '' : null;
								$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
								$str[] = ($number < 21) ? $words[$number] .
									" " . $digits[$counter] . $plural . " " . $hundred
									:
									$words[floor($number / 10) * 10]
									. " " . $words[$number % 10] . " "
									. $digits[$counter] . $plural . " " . $hundred;
							} else $str[] = null;
						}
						$str = array_reverse($str);
						$result = implode('', $str);
						$points = ($point) ?
							"." . $words[$point / 10] . " " .
							$words[$point = $point % 10] : '';
						echo "<b>" . "Amount In Words: " . "</b>" . "Rupees  " . $result  . $points . " Only";
						?>


					</td>



				</tr>




				<tr rowspan="">
					<td colspan="24" valign="top"><b>NOTE:</b> &nbsp;1. This Invoice is due for payment on_______</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Interest at the rate of 15% p.a will be charged after due date.</br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3. our responsibility ceases no sooner the goods leave our premises.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Subject to <b>SILVASSA</b> Jurisdiction
					</td>
					<td colspan="4" rowspan="" height="80" cellborder="0" align="right" valign="top"><b>For DEMO</b><br><br><br><br>Authorised Signatory</td>



				</tr>


			</tbody>
			<!-- <tfoot>
				<tr>
					<td colspan="30" height="" width=""align="center"></td>
				
				</tr>
			</tfoot>
			-->
		</table>
	</div>


	<div class="page">
		<table align="center" class="">
			<tr>

				<td colspan="26" align="right" height="10">
					<font size="2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<b><u>TAX INVOICE CUM CHALLAN</u></b></font> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; Duplicate
				</td>


			</tr>
		</table>
		<table class="tableizer-table" height="297mm" width="" align="center" border="">


			<thead>

				<tr>
					<th colspan="30" valign="bottam">
						<font size="6"><b>DEMO</b></font>
					</th>

				</tr>
			</thead>

			<tbody>
				<tr>

					<td colspan="30" align="center"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, animi.</br> Lorem ipsum dolor sit amet.</td>

				</tr>
				<tr>

					<td colspan="30" align="center">
						<font size=""><b>GSTIN: 26AANFS4221Q1ZN </b></font>
					</td>

				</tr>


				<tr>
					<td colspan="30"></td>

				</tr>

				<tr>
					<td colspan="12">Inv. No.</td>

					<td colspan="5" class="a"><?php echo $row['quot_no']; ?></td>

					<td colspan="1">Inv.Date</td>
					<td colspan="3" class="a"><?php $time = strtotime($row['inv_date']);
												$myFormatForView = date("d/m/Y", $time);
												//$myFormatForView = date("d/m/Y g:i A", $time);
												// $myFormatForView is some thing like: 01/31/14 1:05 PM
												//dd [.\t-] mm [.-] YY
												echo $myFormatForView; ?></td>

					<td colspan="3">Date of Supply </td>
					<td colspan="8"><?php
									//	$time = strtotime($row['supplydate']);
									//$myFormatForView = date("d/m/Y", $time);
									//		echo $myFormatForView; 
									echo $row['supplydate']; ?>
					</td>
				</tr>
				<tr>
					<td colspan="12">Ord. No. </td>
					<td colspan="5"> <?php echo $row['order_no']; ?> </td>

					<td colspan="1"> Ord.Date </td>
					<td colspan="3"> <?php $time = strtotime($row['order_date']);
										$myFormatForView = date("d/m/Y", $time);



										echo $myFormatForView;  ?></td>

					<td colspan="3">Place of Supply</td>
					<td colspan="8">&nbsp;</td>
				</tr>

				</tr>




				<tr>
					<td colspan="30"></td>

				</tr>
				<tr>
					<td colspan="21" align="center">Details of Reciver / Bill to:</td>

					<td colspan="16" align="center">Details of Consignee / Shipped to:</td>

				</tr>
				<tr>
					<td colspan="2">Name</td>
					<?php
					$id = $row['quot_cust'];
					$c = mysqli_query($conn, "SELECT * FROM customer WHERE id='$id' ") or die(mysqli_error());
					$cu = mysqli_fetch_array($c);
					$sid = $cu['sid'];
					$squery = mysqli_query($conn, "SELECT * FROM state WHERE sid ='$sid' ") or die(mysqli_error());
					$ss = mysqli_fetch_array($squery);
					?>
					<td colspan="19"><b><?php echo $cu['custname']; ?></b></td>

					<td colspan="">Name</td>
					<?php
					$iddd = $row['conname'];
					$s = mysqli_query($conn, "SELECT * FROM consignee WHERE id='$iddd' ") or die(mysqli_error());
					$ru = mysqli_fetch_array($s);

					$rsid = $ru['sid'];
					$squery = mysqli_query($conn, "SELECT * FROM state WHERE sid ='$rsid' ") or die(mysqli_error());
					$sss = mysqli_fetch_array($squery);
					?>
					<td colspan="16"><b><?php echo $ru['custname']; ?></b></td>

				</tr>
				<tr>
					<td colspan="2" height="60">Address</td>
					<td colspan="19"><?php echo $cu['addr']; ?><?php //echo $ru['pin_code']; 
																?></td>

					<td colspan="1">Address</td>
					<td colspan="19"><?php echo $ru['addr']; ?><?php //echo $ru['pin_code']; 
																?></td>

				</tr>






				<tr>
					<td colspan="2">GSTIN</td>
					<td colspan="19" class="a"><?php echo $cu['gstin']; ?></td>

					<td colspan="1">GSTIN</td>
					<td colspan="12" class="a"><?php echo $ru['gstin']; ?></td>

				</tr>
				<tr>
					<td colspan="2">State</td>
					<td colspan="17" class="a"><?php echo $ss['state']; ?></td>

					<td colspan="1">State Code</td>
					<td colspan="1" class="a"><?php echo $ss['state_code']; ?></td>
					<td colspan="">State</td>
					<td colspan="3" class="a"><?php echo $sss['state']; ?></td>

					<td colspan="2">State Code</td>
					<td colspan="" class="a"><?php echo $sss['state_code']; ?></td>

				</tr>
				<tr>
					<td colspan="30"></td>

				</tr>


				<tr>
					<td rowspan="" width="10">Sr No.</td>
					<td rowspan="" width="" colspan="20" align="center">Description</td>
					<td>HSN</td>
					<td>Qty.pcs</td>
					<td>Rate</td>
					<td rowspan="" align="center" width="px">Amount</td>
					<td rowspan="" align="center">Dis.</td>
					<td rowspan="" align="center" colspan="2">Taxable value</td>
				</tr>
				<?php
				$sno = 1;
				$id = $_REQUEST['id'];
				$sqli = mysqli_query($conn, "SELECT * FROM invoice_desc WHERE quot_id='$id' ") or die(mysqli_error());
				while ($r = mysqli_fetch_array($sqli)) {
					$itemID = $r['item_desc'];
					$pro = mysqli_query($conn, "SELECT * FROM item_detail WHERE p_sno='$itemID' ") or die(mysqli_error());
					$name = mysqli_fetch_array($pro);
				?>
					<tr>
						<td width="10"><?php echo $sno; ?></td>
						<td colspan="20" width="" class="a"><?php echo $name['p_name']; ?></td>
						<td><?php echo $name['p_hsn']; ?></td>
						<td width="10" align="center" class="a"><?php echo $r['quantity']; ?></td>
						<td align="right" class="a"><?php echo number_format(($r['rate']), 2) ?></td>
						<td align="right" class="a"><?php echo number_format(($r['total']), 2) ?></td>
						<td align="right" class="a"><?php echo number_format(($r['dis']), 2) ?>%</td>
						<td colspan="2" align="right" class="a"><?php echo number_format(($r['tax_val']), 2) ?></td>
					</tr>
				<?php $sno++;
				} ?>

				<td colspan="30"></td>

				</tr>

				<tr>
				<tr>
					<td colspan="14"> L.R No </td>
					<td colspan="8"> <?php echo $row['lrno']; ?></td>
					<?php
					$id = $row['quot_id'];
					$cc = mysqli_query($conn, "SELECT sum(quantity) FROM invoice_desc where quot_id='$id' ") or die(mysqli_error());
					$cuu = mysqli_fetch_array($cc);
					//$cuid = $cu['sid'];
					?>
					<td colspan="" align="center"><b><?php echo $cuu['sum(quantity)']; ?></b></td>

					<td colspan="2"><b>Total</b></td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['subtotal']), 2); ?></td>

				</tr>

				<tr>
					<td colspan="14">Transport</td>
					<td colspan="9" class="a"><?php echo $row['transmode']; ?></td>

					<td colspan="2">Packing</td>
					<td colspan="3" align="right" class="a"><?php echo $row['packing']; ?></td>

				</tr>
				<tr>
					<td colspan="14">Vehicle No.</td>
					<td colspan="9"><?php echo $row['vehicleno']; ?></td>

					<td colspan="2" class="border">Transportation</td>
					<td colspan="3" align="right" class="a"><?php echo $row['transpotation']; ?></td>

				</tr>

				<tr>
					<td colspan="23"></td>
					<td colspan="2"><b>Nett Amount </b></td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['subtotal'] + $row['transpotation'] + $row['packing']), 2); ?></td>

				</tr>



				<tr <?php if ($row['cgst_amt'] == '0.00') {
						echo "style='display:none' ";
					} ?>>
					<td colspan="23"></td>
					<td colspan="2">CGST @<?php echo $row['cgst']; ?>% </td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['cgst_amt']), 2) ?></td>

				</tr>
				<tr <?php if ($row['sgst_amt'] == '0.00') {
						echo "style='display:none' ";
					} ?>>
					<td colspan="23"></td>
					<td colspan="2">UTGST @<?php echo $row['sgst'] ?>%</td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['sgst_amt']), 2) ?>&nbsp;</td>

				</tr>
				<tr <?php if ($row['igst_amt'] == '0.00') {
						echo "style='display:none' ";
					} ?>>
					<td colspan="23">&nbsp;</td>

					<td colspan="2">IGST @<?php echo $row['igst'] ?>%</td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['igst_amt']), 2) ?>&nbsp;</td>
				</tr>

				<tr>
					<td colspan="23"><b>HDFC BANK A/c no.</b>&nbsp;&nbsp;&nbsp;&nbsp;00742023400639
					</td>
					<td colspan="2"><b>Round Off</b></td>

					<td colspan="4" align="right" class="a"><?php echo $row['rvalue']; ?>&nbsp;</td>

				</tr>
				<tr>
					<td colspan="23"><b>RTGS/NEFT IFSC:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HDFC1200074</td>
					<td colspan="2"><b>Grand Total</b></td>

					<td colspan="4" align="right" class="a"><i class="fa fa-rupee"></i> <?php echo number_format(($row['grandtotal']), 2) ?></td>

				</tr>
				<tr>
					<td colspan="30">
						<?php

						$number = $row['grandtotal'];
						$no = round($number);
						$point = round($number - $no, 2) * 100;
						$hundred = null;
						$digits_1 = strlen($no);
						$i = 0;
						$str = array();
						$words = array(
							'0' => '', '1' => 'One', '2' => 'Two',
							'3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
							'7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
							'10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
							'13' => 'Thirteen', '14' => 'Fourteen',
							'15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
							'18' => 'Eighteen', '19' => 'Nineteen', '20' => 'Twenty',
							'30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
							'60' => 'Sixty', '70' => 'Seventy',
							'80' => 'Eighty', '90' => 'Ninety'
						);
						$digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
						while ($i < $digits_1) {
							$divider = ($i == 2) ? 10 : 100;
							$number = floor($no % $divider);
							$no = floor($no / $divider);
							$i += ($divider == 10) ? 1 : 2;
							if ($number) {
								$plural = (($counter = count($str)) && $number > 9) ? '' : null;
								$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
								$str[] = ($number < 21) ? $words[$number] .
									" " . $digits[$counter] . $plural . " " . $hundred
									:
									$words[floor($number / 10) * 10]
									. " " . $words[$number % 10] . " "
									. $digits[$counter] . $plural . " " . $hundred;
							} else $str[] = null;
						}
						$str = array_reverse($str);
						$result = implode('', $str);
						$points = ($point) ?
							"." . $words[$point / 10] . " " .
							$words[$point = $point % 10] : '';
						echo "<b>" . "Amount In Words: " . "</b>" . "Rupees  " . $result  . $points . " Only";
						?>


					</td>



				</tr>




				<tr rowspan="">
					<td colspan="24" valign="top"><b>NOTE:</b> &nbsp;1. This Invoice is due for payment on_______</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Interest at the rate of 15% p.a will be charged after due date.</br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3. our responsibility ceases no sooner the goods leave our premises.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Subject to <b>SILVASSA</b> Jurisdiction
					</td>
					<td colspan="4" rowspan="" height="80" cellborder="0" align="right" valign="top"><b>For DEMO</b><br><br><br><br>Authorised Signatory</td>



				</tr>


			</tbody>
			<!-- <tfoot>
				<tr>
					<td colspan="30" height="" width=""align="center"></td>
				</tr>
			</tfoot>
			-->
		</table>
	</div>

	<div class="page">
		<table align="center" class="">
			<tr>

				<td colspan="26" align="right" height="10">
					<font size="2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<b><u>TAX INVOICE CUM CHALLAN</u></b></font> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp Transporter copy
				</td>


			</tr>
		</table>
		<table class="tableizer-table" height="297mm" width="" align="center" border="">


			<thead>

				<tr>
					<th colspan="30" valign="bottam">
						<font size="6"><b>DEMO</b></font>
					</th>

				</tr>
			</thead>

			<tbody>
				<tr>

					<td colspan="30" align="center"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, animi.</br> Lorem ipsum dolor sit amet.</td>

				</tr>
				<tr>

					<td colspan="30" align="center">
						<font size=""><b>GSTIN: 26AANFS4221Q1ZN </b></font>
					</td>

				</tr>


				<tr>
					<td colspan="30"></td>

				</tr>

				<tr>
					<td colspan="12">Inv. No.</td>

					<td colspan="5" class="a"><?php echo $row['quot_no']; ?></td>

					<td colspan="1">Inv.Date</td>
					<td colspan="3" class="a"><?php $time = strtotime($row['inv_date']);
												$myFormatForView = date("d/m/Y", $time);
												//$myFormatForView = date("d/m/Y g:i A", $time);
												// $myFormatForView is some thing like: 01/31/14 1:05 PM
												//dd [.\t-] mm [.-] YY
												echo $myFormatForView; ?></td>

					<td colspan="3">Date of Supply </td>
					<td colspan="8"><?php
									//	$time = strtotime($row['supplydate']);
									//$myFormatForView = date("d/m/Y", $time);
									//		echo $myFormatForView; 
									echo $row['supplydate']; ?>
					</td>
				</tr>
				<tr>
					<td colspan="12">Ord. No. </td>
					<td colspan="5"> <?php echo $row['order_no']; ?> </td>

					<td colspan="1"> Ord.Date </td>
					<td colspan="3"><?php $time = strtotime($row['order_date']);
									$myFormatForView = date("d/m/Y", $time);



									echo $myFormatForView;  ?></td>

					<td colspan="3">Place of Supply</td>
					<td colspan="8">&nbsp;</td>
				</tr>

				</tr>




				<tr>
					<td colspan="30"></td>

				</tr>
				<tr>
					<td colspan="21" align="center">Details of Reciver / Bill to:</td>

					<td colspan="16" align="center">Details of Consignee / Shipped to:</td>

				</tr>
				<tr>
					<td colspan="2">Name</td>
					<?php
					$id = $row['quot_cust'];
					$c = mysqli_query($conn, "SELECT * FROM customer WHERE id='$id' ") or die(mysqli_error());
					$cu = mysqli_fetch_array($c);
					$sid = $cu['sid'];
					$squery = mysqli_query($conn, "SELECT * FROM state WHERE sid ='$sid' ") or die(mysqli_error());
					$ss = mysqli_fetch_array($squery);
					?>
					<td colspan="19"><b><?php echo $cu['custname']; ?></b></td>

					<td colspan="">Name</td>
					<?php
					$iddd = $row['conname'];
					$s = mysqli_query($conn, "SELECT * FROM consignee WHERE id='$iddd' ") or die(mysqli_error());
					$ru = mysqli_fetch_array($s);

					$rsid = $ru['sid'];
					$squery = mysqli_query($conn, "SELECT * FROM state WHERE sid ='$rsid' ") or die(mysqli_error());
					$sss = mysqli_fetch_array($squery);
					?>
					<td colspan="16"><b><?php echo $ru['custname']; ?></b></td>

				</tr>
				<tr>
					<td colspan="2" height="60">Address</td>
					<td colspan="19"><?php echo $cu['addr']; ?><?php //echo $ru['pin_code']; 
																?></td>

					<td colspan="1">Address</td>
					<td colspan="19"><?php echo $ru['addr']; ?><?php //echo $ru['pin_code']; 
																?></td>

				</tr>






				<tr>
					<td colspan="2">GSTIN</td>
					<td colspan="19" class="a"><?php echo $cu['gstin']; ?></td>

					<td colspan="1">GSTIN</td>
					<td colspan="12" class="a"><?php echo $ru['gstin']; ?></td>

				</tr>
				<tr>
					<td colspan="2">State</td>
					<td colspan="17" class="a"><?php echo $ss['state']; ?></td>

					<td colspan="1">State Code</td>
					<td colspan="1" class="a"><?php echo $ss['state_code']; ?></td>
					<td colspan="">State</td>
					<td colspan="3" class="a"><?php echo $sss['state']; ?></td>

					<td colspan="2">State Code</td>
					<td colspan="" class="a"><?php echo $sss['state_code']; ?></td>

				</tr>
				<tr>
					<td colspan="30"></td>

				</tr>


				<tr>
					<td rowspan="" width="10">Sr No.</td>
					<td rowspan="" width="" colspan="20" align="center">Description</td>
					<td>HSN</td>
					<td>Qty.pcs</td>
					<td>Rate</td>
					<td rowspan="" align="center" width="px">Amount</td>
					<td rowspan="" align="center">Dis.</td>
					<td rowspan="" align="center" colspan="2">Taxable value</td>
				</tr>
				<?php
				$sno = 1;
				$id = $_REQUEST['id'];
				$sqli = mysqli_query($conn, "SELECT * FROM invoice_desc WHERE quot_id='$id' ") or die(mysqli_error());
				while ($r = mysqli_fetch_array($sqli)) {
					$itemID = $r['item_desc'];
					$pro = mysqli_query($conn, "SELECT * FROM item_detail WHERE p_sno='$itemID' ") or die(mysqli_error());
					$name = mysqli_fetch_array($pro);
				?>
					<tr>
						<td width="10"><?php echo $sno; ?></td>
						<td colspan="20" width="" class="a"><?php echo $name['p_name']; ?></td>
						<td><?php echo $name['p_hsn']; ?></td>
						<td width="10" align="center" class="a"><?php echo $r['quantity']; ?></td>
						<td align="right" class="a"><?php echo number_format(($r['rate']), 2) ?></td>
						<td align="right" class="a"><?php echo number_format(($r['total']), 2) ?></td>
						<td align="right" class="a"><?php echo number_format(($r['dis']), 2) ?>%</td>
						<td colspan="2" align="right" class="a"><?php echo number_format(($r['tax_val']), 2) ?></td>
					</tr>
				<?php $sno++;
				} ?>

				<td colspan="30"></td>

				</tr>

				<tr>
				<tr>
					<td colspan="14"> L.R No </td>
					<td colspan="8"> <?php echo $row['lrno']; ?></td>
					<?php
					$id = $row['quot_id'];
					$cc = mysqli_query($conn, "SELECT sum(quantity) FROM invoice_desc where quot_id='$id' ") or die(mysqli_error());
					$cuu = mysqli_fetch_array($cc);
					//$cuid = $cu['sid'];
					?>
					<td colspan="" align="center"><b><?php echo $cuu['sum(quantity)']; ?></b></td>

					<td colspan="2"><b>Total</b></td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['subtotal']), 2); ?></td>

				</tr>

				<tr>
					<td colspan="14">Transport</td>
					<td colspan="9"><?php echo $row['transmode']; ?></td>

					<td colspan="2">Packing</td>
					<td colspan="3" align="right" class="a"><?php echo $row['packing']; ?></td>

				</tr>
				<tr>
					<td colspan="14">Vehicle No.</td>
					<td colspan="9"><?php echo $row['vehicleno']; ?></td>

					<td colspan="2" class="border">Transportation</td>
					<td colspan="3" align="right" class="a"><?php echo $row['transpotation']; ?></td>

				</tr>

				<tr>
					<td colspan="23"></td>
					<td colspan="2"><b>Nett Amount </b></td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['subtotal'] + $row['transpotation'] + $row['packing']), 2); ?></td>

				</tr>



				<tr <?php if ($row['cgst_amt'] == '0.00') {
						echo "style='display:none' ";
					} ?>>
					<td colspan="23"></td>
					<td colspan="2">CGST @<?php echo $row['cgst']; ?>% </td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['cgst_amt']), 2) ?></td>

				</tr>
				<tr <?php if ($row['sgst_amt'] == '0.00') {
						echo "style='display:none' ";
					} ?>>
					<td colspan="23"></td>
					<td colspan="2">UTGST @<?php echo $row['sgst'] ?>%</td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['sgst_amt']), 2) ?>&nbsp;</td>

				</tr>
				<tr <?php if ($row['igst_amt'] == '0.00') {
						echo "style='display:none' ";
					} ?>>
					<td colspan="23">&nbsp;</td>

					<td colspan="2">IGST @<?php echo $row['igst'] ?>%</td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['igst_amt']), 2) ?>&nbsp;</td>
				</tr>

				<tr>
					<td colspan="23"><b>HDFC BANK A/c no.</b>&nbsp;&nbsp;&nbsp;&nbsp;00742023400639
					</td>
					<td colspan="2"><b>Round Off</b></td>

					<td colspan="4" align="right" class="a"><?php echo $row['rvalue']; ?>&nbsp;</td>

				</tr>
				<tr>
					<td colspan="23"><b>RTGS/NEFT IFSC:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HDFC1200074</td>
					<td colspan="2"><b>Grand Total</b></td>

					<td colspan="4" align="right" class="a"><i class="fa fa-rupee"></i> <?php echo number_format(($row['grandtotal']), 2) ?></td>

				</tr>
				<tr>
					<td colspan="30">
						<?php

						$number = $row['grandtotal'];
						$no = round($number);
						$point = round($number - $no, 2) * 100;
						$hundred = null;
						$digits_1 = strlen($no);
						$i = 0;
						$str = array();
						$words = array(
							'0' => '', '1' => 'One', '2' => 'Two',
							'3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
							'7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
							'10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
							'13' => 'Thirteen', '14' => 'Fourteen',
							'15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
							'18' => 'Eighteen', '19' => 'Nineteen', '20' => 'Twenty',
							'30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
							'60' => 'Sixty', '70' => 'Seventy',
							'80' => 'Eighty', '90' => 'Ninety'
						);
						$digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
						while ($i < $digits_1) {
							$divider = ($i == 2) ? 10 : 100;
							$number = floor($no % $divider);
							$no = floor($no / $divider);
							$i += ($divider == 10) ? 1 : 2;
							if ($number) {
								$plural = (($counter = count($str)) && $number > 9) ? '' : null;
								$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
								$str[] = ($number < 21) ? $words[$number] .
									" " . $digits[$counter] . $plural . " " . $hundred
									:
									$words[floor($number / 10) * 10]
									. " " . $words[$number % 10] . " "
									. $digits[$counter] . $plural . " " . $hundred;
							} else $str[] = null;
						}
						$str = array_reverse($str);
						$result = implode('', $str);
						$points = ($point) ?
							"." . $words[$point / 10] . " " .
							$words[$point = $point % 10] : '';
						echo "<b>" . "Amount In Words: " . "</b>" . "Rupees  " . $result  . $points . " Only";
						?>


					</td>



				</tr>




				<tr rowspan="">
					<td colspan="24" valign="top"><b>NOTE:</b> &nbsp;1. This Invoice is due for payment on_______</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Interest at the rate of 15% p.a will be charged after due date.</br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3. our responsibility ceases no sooner the goods leave our premises.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Subject to <b>SILVASSA</b> Jurisdiction
					</td>
					<td colspan="4" rowspan="" height="80" cellborder="0" align="right" valign="top"><b>For DEMO</b><br><br><br><br>Authorised Signatory</td>



				</tr>


			</tbody>
			<!-- <tfoot>
				<tr>
					<td colspan="30" height="" width=""align="center"></td>
				</tr>
			</tfoot>
			-->
		</table>
	</div>

	<div class="page">
		<table align="center" class="">
			<tr>

				<td colspan="26" align="right" height="10">
					<font size="2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<b><u>TAX INVOICE CUM CHALLAN</u></b></font> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; Extra copy
				</td>


			</tr>
		</table>
		<table class="tableizer-table" height="297mm" width="" align="center" border="">
			<thead>
				<tr>
					<th colspan="30" valign="bottom">
						<font size="6"><b>DEMO</b></font>
					</th>
				</tr>
			</thead>

			<tbody>
				<tr>

					<td colspan="30" align="center"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, animi.</br> Lorem ipsum dolor sit amet.</td>

				</tr>
				<tr>

					<td colspan="30" align="center">
						<font size=""><b>GSTIN: 26AANFS4221Q1ZN </b></font>
					</td>

				</tr>


				<tr>
					<td colspan="30"></td>

				</tr>

				<tr>
					<td colspan="12">Inv. No.</td>

					<td colspan="5" class="a"><?php echo $row['quot_no']; ?></td>

					<td colspan="1">Inv.Date</td>
					<td colspan="3" class="a"><?php $time = strtotime($row['inv_date']);
												$myFormatForView = date("d/m/Y", $time);
												//$myFormatForView = date("d/m/Y g:i A", $time);
												// $myFormatForView is some thing like: 01/31/14 1:05 PM
												//dd [.\t-] mm [.-] YY
												echo $myFormatForView; ?></td>

					<td colspan="3">Date of Supply </td>
					<td colspan="8"><?php
									//	$time = strtotime($row['supplydate']);
									//$myFormatForView = date("d/m/Y", $time);
									//		echo $myFormatForView; 
									echo $row['supplydate']; ?>
					</td>
				</tr>
				<tr>
					<td colspan="12">Ord. No. </td>
					<td colspan="5"> <?php echo $row['order_no']; ?> </td>

					<td colspan="1"> Ord.Date </td>
					<td colspan="3"><?php $time = strtotime($row['order_date']);
									$myFormatForView = date("d/m/Y", $time);



									echo $myFormatForView;  ?></td>

					<td colspan="3">Place of Supply</td>
					<td colspan="8">&nbsp;</td>
				</tr>

				</tr>




				<tr>
					<td colspan="30"></td>

				</tr>
				<tr>
					<td colspan="21" align="center">Details of Reciver / Bill to:</td>

					<td colspan="16" align="center">Details of Consignee / Shipped to:</td>

				</tr>
				<tr>
					<td colspan="2">Name</td>
					<?php
					$id = $row['quot_cust'];
					$c = mysqli_query($conn, "SELECT * FROM customer WHERE id='$id' ") or die(mysqli_error());
					$cu = mysqli_fetch_array($c);
					$sid = $cu['sid'];
					$squery = mysqli_query($conn, "SELECT * FROM state WHERE sid ='$sid' ") or die(mysqli_error());
					$ss = mysqli_fetch_array($squery);
					?>
					<td colspan="19"><b><?php echo $cu['custname']; ?></b></td>

					<td colspan="">Name</td>
					<?php
					$iddd = $row['conname'];
					$s = mysqli_query($conn, "SELECT * FROM consignee WHERE id='$iddd' ") or die(mysqli_error());
					$ru = mysqli_fetch_array($s);

					$rsid = $ru['sid'];
					$squery = mysqli_query($conn, "SELECT * FROM state WHERE sid ='$rsid' ") or die(mysqli_error());
					$sss = mysqli_fetch_array($squery);
					?>
					<td colspan="16"><b><?php echo $ru['custname']; ?></b></td>

				</tr>
				<tr>
					<td colspan="2" height="60">Address</td>
					<td colspan="19"><?php echo $cu['addr']; ?><?php //echo $ru['pin_code']; 
																?></td>

					<td colspan="1">Address</td>
					<td colspan="19"><?php echo $ru['addr']; ?><?php //echo $ru['pin_code']; 
																?></td>

				</tr>






				<tr>
					<td colspan="2">GSTIN</td>
					<td colspan="19" class="a"><?php echo $cu['gstin']; ?></td>

					<td colspan="1">GSTIN</td>
					<td colspan="12" class="a"><?php echo $ru['gstin']; ?></td>

				</tr>
				<tr>
					<td colspan="2">State</td>
					<td colspan="17" class="a"><?php echo $ss['state']; ?></td>

					<td colspan="1">State Code</td>
					<td colspan="1" class="a"><?php echo $ss['state_code']; ?></td>
					<td colspan="">State</td>
					<td colspan="3" class="a"><?php echo $sss['state']; ?></td>

					<td colspan="2">State Code</td>
					<td colspan="" class="a"><?php echo $sss['state_code']; ?></td>

				</tr>
				<tr>
					<td colspan="30"></td>

				</tr>


				<tr>
					<td rowspan="" width="10">Sr No.</td>
					<td rowspan="" width="" colspan="20" align="center">Description</td>
					<td>HSN</td>
					<td>Qty.pcs</td>
					<td>Rate</td>
					<td rowspan="" align="center" width="px">Amount</td>
					<td rowspan="" align="center">Dis.</td>
					<td rowspan="" align="center" colspan="2">Taxable value</td>
				</tr>
				<?php
				$sno = 1;
				$id = $_REQUEST['id'];
				$sqli = mysqli_query($conn, "SELECT * FROM invoice_desc WHERE quot_id='$id' ") or die(mysqli_error());
				while ($r = mysqli_fetch_array($sqli)) {
					$itemID = $r['item_desc'];
					$pro = mysqli_query($conn, "SELECT * FROM item_detail WHERE p_sno='$itemID' ") or die(mysqli_error());
					$name = mysqli_fetch_array($pro);
				?>
					<tr>
						<td width="10"><?php echo $sno; ?></td>
						<td colspan="20" width="" class="a"><?php echo $name['p_name']; ?></td>
						<td><?php echo $name['p_hsn']; ?></td>
						<td width="10" align="center" class="a"><?php echo $r['quantity']; ?></td>
						<td align="right" class="a"><?php echo number_format(($r['rate']), 2) ?></td>
						<td align="right" class="a"><?php echo number_format(($r['total']), 2) ?></td>
						<td align="right" class="a"><?php echo number_format(($r['dis']), 2) ?>%</td>
						<td colspan="2" align="right" class="a"><?php echo number_format(($r['tax_val']), 2) ?></td>
					</tr>
				<?php $sno++;
				} ?>

				<td colspan="30"></td>

				</tr>

				<tr>
				<tr>
					<td colspan="14"> L.R No </td>
					<td colspan="8"> <?php echo $row['lrno']; ?></td>
					<?php
					$id = $row['quot_id'];
					$cc = mysqli_query($conn, "SELECT sum(quantity) FROM invoice_desc where quot_id='$id' ") or die(mysqli_error());
					$cuu = mysqli_fetch_array($cc);
					//$cuid = $cu['sid'];
					?>
					<td colspan="" align="center"><b><?php echo $cuu['sum(quantity)']; ?></b></td>

					<td colspan="2"><b>Total</b></td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['subtotal']), 2); ?></td>

				</tr>

				<tr>
					<td colspan="14">Transport</td>
					<td colspan="9"><?php echo $row['transmode']; ?></td>

					<td colspan="2">Packing</td>
					<td colspan="3" align="right" class="a"><?php echo $row['packing']; ?></td>

				</tr>
				<tr>
					<td colspan="14">Vehicle No.</td>
					<td colspan="9"><?php echo $row['vehicleno']; ?></td>

					<td colspan="2" class="border">Transportation</td>
					<td colspan="3" align="right" class="a"><?php echo $row['transpotation']; ?></td>

				</tr>

				<tr>
					<td colspan="23"></td>
					<td colspan="2"><b>Nett Amount </b></td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['subtotal'] + $row['transpotation'] + $row['packing']), 2); ?></td>

				</tr>



				<tr <?php if ($row['cgst_amt'] == '0.00') {
						echo "style='display:none' ";
					} ?>>
					<td colspan="23"></td>
					<td colspan="2">CGST @<?php echo $row['cgst']; ?>% </td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['cgst_amt']), 2) ?></td>

				</tr>
				<tr <?php if ($row['sgst_amt'] == '0.00') {
						echo "style='display:none' ";
					} ?>>
					<td colspan="23"></td>
					<td colspan="2">UTGST @<?php echo $row['sgst'] ?>%</td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['sgst_amt']), 2) ?>&nbsp;</td>

				</tr>
				<tr <?php if ($row['igst_amt'] == '0.00') {
						echo "style='display:none' ";
					} ?>>
					<td colspan="23">&nbsp;</td>

					<td colspan="2">IGST @<?php echo $row['igst'] ?>%</td>
					<td colspan="4" align="right" class="a"><?php echo number_format(($row['igst_amt']), 2) ?>&nbsp;</td>
				</tr>

				<tr>
					<td colspan="23"><b>HDFC BANK A/c no.</b>&nbsp;&nbsp;&nbsp;&nbsp;00742023400639
					</td>
					<td colspan="2"><b>Round Off</b></td>

					<td colspan="4" align="right" class="a"><?php echo $row['rvalue']; ?>&nbsp;</td>

				</tr>
				<tr>
					<td colspan="23"><b>RTGS/NEFT IFSC:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HDFC1200074</td>
					<td colspan="2"><b>Grand Total</b></td>

					<td colspan="4" align="right" class="a"><i class="fa fa-rupee"></i> <?php echo number_format(($row['grandtotal']), 2) ?></td>

				</tr>
				<tr>
					<td colspan="30">
						<?php

						$number = $row['grandtotal'];
						$no = round($number);
						$point = round($number - $no, 2) * 100;
						$hundred = null;
						$digits_1 = strlen($no);
						$i = 0;
						$str = array();
						$words = array(
							'0' => '', '1' => 'One', '2' => 'Two',
							'3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
							'7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
							'10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
							'13' => 'Thirteen', '14' => 'Fourteen',
							'15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
							'18' => 'Eighteen', '19' => 'Nineteen', '20' => 'Twenty',
							'30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
							'60' => 'Sixty', '70' => 'Seventy',
							'80' => 'Eighty', '90' => 'Ninety'
						);
						$digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
						while ($i < $digits_1) {
							$divider = ($i == 2) ? 10 : 100;
							$number = floor($no % $divider);
							$no = floor($no / $divider);
							$i += ($divider == 10) ? 1 : 2;
							if ($number) {
								$plural = (($counter = count($str)) && $number > 9) ? '' : null;
								$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
								$str[] = ($number < 21) ? $words[$number] .
									" " . $digits[$counter] . $plural . " " . $hundred
									:
									$words[floor($number / 10) * 10]
									. " " . $words[$number % 10] . " "
									. $digits[$counter] . $plural . " " . $hundred;
							} else $str[] = null;
						}
						$str = array_reverse($str);
						$result = implode('', $str);
						$points = ($point) ?
							"." . $words[$point / 10] . " " .
							$words[$point = $point % 10] : '';
						echo "<b>" . "Amount In Words: " . "</b>" . "Rupees  " . $result  . $points . " Only";
						?>


					</td>



				</tr>




				<tr rowspan="">
					<td colspan="24" valign="top"><b>NOTE:</b> &nbsp;1. This Invoice is due for payment on_______</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Interest at the rate of 15% p.a will be charged after due date.</br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3. our responsibility ceases no sooner the goods leave our premises.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Subject to <b>SILVASSA</b> Jurisdiction
					</td>
					<td colspan="4" rowspan="" height="80" cellborder="0" align="right" valign="top"><b>For DEMO</b><br><br><br><br>Authorised Signatory</td>



				</tr>


			</tbody>
			<!-- <tfoot>
				<tr>
					<td colspan="30" height="" width=""align="center"></td>
				</tr>
			</tfoot>
			-->
		</table>
	</div>
</body>

</html>

<script>
	{
		window.print();
	}
</script>