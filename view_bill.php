<?php
require_once("conn.php");
$id = $_REQUEST['q_id'];
$sql = mysqli_query($conn, "SELECT * FROM invoice WHERE quot_id='$id' ") or die(mysqli_error());
$row = mysqli_fetch_array($sql);
?>

<html moznomarginboxes mozdisallowselectionprint>

<head>
	<title>Invoice</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/icons.css" rel="stylesheet" type="text/css" />
	<link href="css/pages.css" rel="stylesheet" type="text/css" />
	<link href="css/font/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/responsive.css" rel="stylesheet" type="text/css" />

	<style type="text/css">
		table.tableizer-table {
			border-collapse: collapse;

			font-size: 12px;
			border: 1px solid Black;
			font-family: Arial, Helvetica, sans-serif;
		}

		.tableizer-table td {
			padding: 4px;
			margin: 12px;
			border: 1px solid Black;
		}

		.tableizer-table th {
			background-color:
				color: Black;
			font-weight: bold;
		}

		.table {
			border: 0px;
		}

		.bottom {
			border-bottom: 1px solid black;
		}

		.left {
			border-left: 1px solid black
		}

		.a {

			font-weight: bold;
		}
	</style>

</head>


<body>
	<?php

	$last = 0;
	$first = $last - 1;
	$previd = 0;
	$nextid = 0;
	$count = -0;
	$id = $_REQUEST['q_id'];
	$prevquery1 = "SELECT * FROM invoice WHERE quot_id < $id ORDER BY quot_id DESC";
	$prevresult1 = mysqli_query($conn, $prevquery1) or die(mysqli_error());
	while ($prevrow = mysqli_fetch_array($prevresult1)) {
		$first  = $prevrow['quot_id'];
	}
	$prevquery = "SELECT * FROM invoice WHERE quot_id < $id ORDER BY quot_id DESC Limit 1";
	$prevresult = mysqli_query($conn, $prevquery) or die(mysqli_error());
	while ($prevrow = mysqli_fetch_array($prevresult)) {
		$previd  = $prevrow['quot_id'];
	}
	$nextquery = "SELECT * FROM invoice WHERE quot_id > $id ORDER BY quot_id ASC Limit 1";
	$nextresult = mysqli_query($conn, $nextquery) or die(mysqli_error());
	while ($nextrow = mysqli_fetch_array($nextresult)) {
		$nextid  = $nextrow['quot_id'];
	}
	$nextquery2 = "SELECT * FROM invoice WHERE quot_id > $id ORDER BY quot_id ASC";
	$nextresult2 = mysqli_query($conn, $nextquery2) or die(mysqli_error());
	while ($nextrow = mysqli_fetch_array($nextresult2)) {
		$last = $nextrow['quot_id'];
	}
	?>
	<p align="center">
		<button onclick="location.href='view_bill.php?q_id=<?php echo $first; ?>'" class="a">First</button>
		<button onclick="location.href='view_bill.php?q_id=<?php echo $previd; ?>'" class="a">Previous</button>
		<button onclick="location.href='view_bill.php?q_id=<?php echo $nextid; ?>'" class="a">Next</button>
		<button onclick="location.href='view_bill.php?q_id=<?php echo $last; ?>'" class="a">Last</button>
	</p>
	<table align="center" style="page-break-before: always;" class=>
		<tr>

			<td colspan="26" align="center" height="10">
				<font size="2"><b><u>TAX INVOICE CUM CHALLAN </u></b></font>
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

				<td colspan="30" align="center"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, ab?</br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, atque?</td>

			</tr>
			<tr>

				<td colspan="30" align="center">
					<font size=""><b>GSTIN: Lorem, ipsum. </b></font>
				</td>

			</tr>


			<tr>
				<td colspan="30"></td>

			</tr>

			<tr>
				<td colspan="3">Invoice No.</td>

				<td colspan="12" class="a"><?php echo $row['quot_no']; ?></td>

				<td colspan="1">Inv.Date</td>
				<td colspan="5" class="a"><?php $time = strtotime($row['inv_date']);
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
				<td colspan="3">Order No. </td>
				<td colspan="12"> <?php echo $row['order_no']; ?> </td>

				<td colspan="1"> Ord.Date </td>
				<td colspan="5"> <?php $time = strtotime($row['order_date']);
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
				<td colspan="27" align="center">Details of Reciver | Bill to:</td>

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
				<td colspan="27"><b><?php echo $cu['custname']; ?></b></td>

			</tr>
			<tr>
				<td colspan="2" height="60">Address</td>
				<td colspan="27"><?php $bar = (($cu['addr']));
									$bar = ucwords($bar);             // HELLO WORLD!
									//$bar = ucwords(strtolower($bar));


									//echo $cu['addr']; 
									$pin = $cu['pin_code'];

									if ($pin > 0) {
										$msg = '-' . $pin;
									} else {
										$msg = ' ';
									}
									echo wordwrap($bar, 50, "<br>\n") . $msg;
									?>
				</td>

			</tr>

			<tr>
				<td colspan="2">GSTIN</td>
				<td colspan="27" class="a"><?php echo $cu['gstin']; ?></td>

			</tr>
			<tr>
				<td colspan="2">State</td>
				<td colspan="20" class="a"><?php echo $ss['state']; ?></td>

				<td colspan="1">State Code</td>
				<td colspan="4" class="a"><?php echo $ss['state_code']; ?></td>

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
			$id = $_REQUEST['q_id'];
			$sqli = mysqli_query($conn, "SELECT * FROM invoice_desc WHERE quot_id='$id' ") or die(mysqli_error());
			while ($r = mysqli_fetch_array($sqli)) {
				$hsn = $r['item_desc'];
				$pro = mysqli_query($conn, "SELECT * FROM item_detail WHERE p_name='$hsn'") or die(mysqli_error());
				$name = mysqli_fetch_array($pro);
				//$pro2 = mysqli_query($conn, "SELECT * FROM item_detail WHERE p_sno='$hsn'")or die(mysqli_error());
				//$name2 = mysqli_fetch_array($pro2);
			?>
				<tr>
					<td width="10"><?php echo $sno; ?></td>
					<td colspan="20" width="" class="a"><?php echo $r['item_desc']; ?></td>
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
				<td colspan="8"> L.R No </td>
				<td colspan="14"> <?php echo $row['lrno']; ?>&nbsp;</td>
				<?php
				$id = $row['quot_id'];
				$cc = mysqli_query($conn, "SELECT sum(quantity) FROM invoice_desc where quot_id='$id' ") or die(mysqli_error());
				$cuu = mysqli_fetch_array($cc);
				//$cuid = $cu['sid'];
				?>
				<td colspan="" align="center"><b><?php echo $cuu['sum(quantity)']; ?></b> pcs.</td>

				<td colspan="2"><b>Total</b></td>
				<td colspan="4" align="right" class="a"><?php echo number_format(($row['subtotal']), 2); ?></td>

			</tr>

			<tr>
				<td colspan="8">Trans. Mode</td>
				<td colspan="15"><?php echo $row['transmode']; ?> &nbsp; </td>

				<td colspan="2">Packing</td>
				<td colspan="3" align="right"><?php echo $row['packing']; ?>&nbsp;</td>

			</tr>
			<tr>
				<td colspan="8">Vehicle Number</td>
				<td colspan="15"><?php echo $row['vehicleno']; ?> &nbsp; </td>

				<td colspan="2" class="border">Transportation</td>
				<td colspan="3" align="right"><?php echo $row['transpotation']; ?>&nbsp;</td>

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
				<td colspan="4" align="right"><?php echo number_format(($row['cgst_amt']), 2) ?></td>

			</tr>
			<tr <?php if ($row['sgst_amt'] == '0.00') {
					echo "style='display:none' ";
				} ?>>
				<td colspan="23"></td>
				<td colspan="2">UTGST @<?php echo $row['sgst'] ?>%</td>
				<td colspan="4" align="right"><?php echo number_format(($row['sgst_amt']), 2) ?>&nbsp;</td>

			</tr>
			<tr <?php if ($row['igst_amt'] == '0.00') {
					echo "style='display:none' ";
				} ?>>
				<td colspan="23">&nbsp;</td>

				<td colspan="2">IGST @<?php echo $row['igst'] ?>%</td>
				<td colspan="4" align="right"><?php echo number_format(($row['igst_amt']), 2) ?>&nbsp;</td>
			</tr>

			<tr>
				<td colspan="23"><b>HDFC BANK A/c no.</b>&nbsp;&nbsp;&nbsp;&nbsp;00452020000639
				</td>
				<td colspan="2"><b>Round Off</b></td>

				<td colspan="4" align="right"><?php echo $row['rvalue']; ?>&nbsp;</td>

			</tr>
			<tr>
				<td colspan="23"><b>RTGS/NEFT IFSC:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HDFC0120074</td>
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
					echo "<b>" . "Amount In Words: " . "</b>" . "Rupees  " . $result  . $points . " Only.";
					?>

				</td>

			</tr>

			<tr rowspan="">
				<td colspan="24" valign="top"><b>NOTE:</b> &nbsp;1. This Invoice is due for payment on_______</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Interest at the rate of 15% p.a will be charged after due date.</br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3. our responsibility ceases no sooner the goods leave our premises.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Subject to <b>SILVASSA</b> Jurisdiction
				</td>
				<td colspan="4" rowspan="" height="80" cellborder="0" align="right" valign="top"><b>For DEMO</b><br><br><br><br>Authorised Signatory</td>
			</tr>

		</tbody>

	</table>
	<p align="center">
		<a href="invoice_print.php?id=<?php echo $row['quot_id'] ?>" class="btn btn-danger text-orange" target="_blank">
			<font size="8"><i class="fa fa-print"> Print</i></font>
		</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="quot_list.php" class="btn btn-danger text-orange">
			<font size="8"><i class="fa-back"> Cancel</i></font>
		</a>
	</p>

</body>

</html>

<script>
	{
		// window.print();
	}
</script>