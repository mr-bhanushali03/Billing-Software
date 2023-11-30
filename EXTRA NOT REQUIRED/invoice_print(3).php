<?php
	require_once("conn.php");
	$id = $_REQUEST['q_id'];
	$sql = mysqli_query($conn, "SELECT * FROM invoice WHERE quot_id='$id' ")or die(mysqli_error());
	$row = mysqli_fetch_array($sql);
 ?>
<html>
	<head>
		<style type="text/css">
	table.tableizer-table {
		 border-collapse: collapse;

		font-size: 12px;
		border: 1px solid Black; 
		font-family: Arial, Helvetica, sans-serif;
	} 
	.tableizer-table td {
		padding: 4px;
		margin: 1px;
		border: 1px solid Black;
	}
	.tableizer-table th {
		background-color: 
		color: Black;
		font-weight: bold;
	}
</style>

	</head>
	

	<body>
	<table align="center">
		<tr>
				
				<td colspan="26" align="center" height="10"> <font size="2"><b><u>TAX INVOICE	</u></b></font></td>
					
				
		</tr>
	</table>
<table class="tableizer-table" height="297mm" width="210mm" align="center" border="">


<thead>		

	<tr >
			<th colspan="30" valign="bottam"><font size="6">SARAL ELECTRICALS</font></th>`
			
	</tr>
	</thead>

<tbody>
		 <tr>
				
				<td colspan="30" align="center"> 22,Raj Industrial Estate,66 KV Amli, Industrial Area,</br> SILVASSA-396 230, (U.T) Ph.:(0260)2643317</td>
				
		</tr>
		<tr>
				
				<td colspan="30" align="center"><font size=""><b>GSTIN: 21427XJ388884663 </b></font></td>
				
		</tr>
		
		
		<tr>
				<td colspan="30"></td>
				
		</tr>
		
		<tr>
				<td colspan="2">Invoice No.</td>
				
				<td colspan="12"><?php echo $row['quot_no']; ?></td>
				
				<td colspan="1">Inv.Date</td>
				<td colspan="8"><?php echo $row['inv_date']; ?></td>
				
				<td colspan="3">Date of Supply </td>
				<td colspan="8"><?php echo $row['supplydate']; ?></td>	
		</tr>
		<tr>
				<td colspan="2">Order No. </td>
				<td colspan="12"> <?php echo $row['order_no']; ?> </td>
				
				<td colspan="1"> Ord.Date </td>
				<td colspan="8"> <?php echo $row['order_date']; ?></td>
				
				<td colspan="3">Place of Supply</td>
				<td colspan="8">&nbsp;</td>
		</tr>
		
		</tr>
		
		
		
		
	<tr>
			<td colspan="30"></td>
			
	</tr>
	<tr>
			<td colspan="21" align="center">Details of Reciver | Bill to:</td>
			
			<td colspan="16" align="center">Details of Consignee | Shipped to:</td>
			
	</tr>
	<tr>
			<td colspan="1">Name</td>
			<?php
				$id = $row['conname'];
				$c = mysqli_query($conn, "SELECT * FROM customer WHERE id='$id' ")or die(mysqli_error());
				$cu = mysqli_fetch_array($c);
			 ?>
			<td  colspan="20"><?php echo $cu['custname']; ?></td>
			
			<td colspan="1">Name</td>
			<?php
				$id = $row['conname'];
				$s = mysqli_query($conn, "SELECT * FROM consignee WHERE id='$id' ")or die(mysqli_error());
				$ru = mysqli_fetch_array($s);
			 ?>
			<td colspan="16"><?php echo $ru['custname']; ?></td>
			
	</tr>
	<tr>
			<td colspan="2" height="60">Address</td>
			<td colspan="19"><?php echo $cu['addr']; ?></td>
			
			<td colspan="1">Address</td>
			<td colspan="19"><?php echo $ru['addr']; ?></td>
			
	</tr>
	
	
	
	
	
	
	<tr>
			<td colspan="2" >GSTIN</td>
			<td colspan="19"><?php echo $ru['gstin']; ?></td>
			
			<td colspan="1">GSTIN</td>
			<td colspan="12"><?php echo $cu['gstin']; ?></td>
			
	</tr>
	<tr>
			<td colspan="2">State</td>
			<td colspan="17"><?php echo $row['state']; ?></td>
			
			<td colspan="1">State Code</td>
			<td colspan="1"><?php echo $row['stateCode']; ?></td>
			<td colspan="">State</td>
			<td colspan="3">&nbsp;</td>
			
			<td colspan="2">State Code</td>
			<td colspan="">&nbsp;</td>
			
	</tr>
	<tr>
			<td colspan="30"></td>
			
	</tr>

	
	<tr>
			<td rowspan="" width="1">Sr No.</td>
			<td rowspan="" width="" colspan="20" align="center" >Description</td>
			<td>HSN</td>
			<td>Qty.</td>
			<td>Rate</td>
			<td rowspan="" align="center" width="px">Amount</td>
			<td rowspan="" align="center">Dis.</td>
			<td rowspan="" align="center" colspan="2">Taxable value</td>
	</tr>
	<?php 
	$sno=1;
	$id = $_REQUEST['q_id'];
		$sqli = mysqli_query($conn, "SELECT * FROM invoice_desc WHERE quot_id='$id' ")or die(mysqli_error());
		while ($r = mysqli_fetch_array($sqli)) {	
			$hsn = $r['item_desc'];
			$pro = mysqli_query($conn, "SELECT * FROM product_detail WHERE p_name='$hsn' ")or die(mysqli_error());
			$name = mysqli_fetch_array($pro);
	?>
 <tr>
	<td><?php echo $sno; ?></td>
	<td colspan="20" width=""><?php echo $r['item_desc']; ?></td>
	<td><?php echo $name['p_hsn']; ?></td>
	<td width="10"><?php echo $r['quantity'].$r['unit']; ?></td>
	<td><?php echo $r['rate']; ?></td>
	<td><?php echo $r['total']; ?></td>
	<td><?php echo $r['dis']; ?></td>
	<td colspan="2"><?php echo $r['tax_val']; ?></td>
</tr>
<?php $sno++; } ?>

	<td colspan="30"></td>
	
 </tr>
 
  <tr>
	<td colspan="5"> L.R No </td>
	<td colspan="17"> <?php echo $row['lrno']; ?>&nbsp;</td>
	
	
	<td colspan="3"><b>Total</b></td>
	<td colspan="4"></td>
	
</tr>

<tr>
	<td colspan="5">Transportation Mode </td>
	<td colspan="17"><?php echo $row['transmode']; ?>		&nbsp;			</td>
	
	<td colspan="3">Packing Charge</td>
	<td colspan="3"><?php echo $row['packing']; ?>&nbsp;</td>
	
</tr>
 <tr>
		<td colspan="5">Vechical Number</td>
		<td colspan="17"><?php echo $row['vehicleno']; ?>	&nbsp;				</td>	
	
	<td colspan="3">Transportation charge</td>
	<td colspan="3"><?php echo $row['transpotation']; ?>&nbsp;</td>
	
</tr>

 <tr>
	<td colspan="22"></td>
	<td colspan="3"><b>Net Amount</b></td>
	<td colspan="4"><?php echo $row['subtotal']; ?>&nbsp;</td>
	
</tr>



 <tr <?php if($row['cgst_amt'] == '0.00'){ echo "style='display:none' "; } ?>>
	<td colspan="22"></td>
	<td colspan="3">Add : CGST</td>
	<td colspan="4"><?php echo $row['cgst_amt'] ?>&nbsp;</td>
	
</tr>
<tr <?php if($row['sgst_amt'] == '0.00'){ echo "style='display:none' "; } ?>>
	<td colspan="22"></td>
	<td colspan="3">Add : SGST</td>
	<td colspan="4"><?php echo $row['sgst_amt'] ?>&nbsp;</td>
	
</tr>
<tr <?php if($row['igst_amt'] == '0.00'){ echo "style='display:none' "; } ?> >
	<td colspan="22">&nbsp;</td>
	
	<td colspan="3">Add : IGST</td>
	<td colspan="4"><?php echo $row['igst_amt'] ?>&nbsp;</td>
	</tr>
	 <tr>
	<td colspan="22">&nbsp;</td>
	<td colspan="3"><b>Round Of value</b></td>

	<td colspan="4"><?php echo $row['rvalue'] ?>&nbsp;</td>
	
 </tr>
 <tr>
	<td colspan="22">&nbsp;</td>
	<td colspan="3"><b>Grand Total</b></td>

	<td colspan="4"><?php echo $row['grandtotal'] ?>&nbsp;</td>
	
 </tr>
 <tr>
	<td colspan="30"></td>
	
 
 
 </tr>
 
 
 
 
 <tr rowspan="">
	
	<td colspan="30" rowspan="" height="80" cellborder="0" align="right" valign="top"><b>For SARAL ELECTRICALS</b><br><br><br><br>Authorised Signatory</td>
	
	
	
</tr>

 
 </tbody>
 <tfoot>
    <tr>
      <td colspan="30" height="" width=""align="center">Subject to SILVASSA Jurisdiction</td>
      
    </tr>
  </tfoot>
 


</table>


	</body>
</html>