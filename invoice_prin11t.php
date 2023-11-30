<?php 
	require_once("conn.php");
	$id = $_REQUEST['id'];
	$sql = mysqli_query($conn, "SELECT * FROM invoice WHERE quot_id='$id' ")or die(mysqli_error());
	$row = mysqli_fetch_array($sql);
 ?>
<?php
  
	$number = $row['grandtotal'];
   $no = round($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'One', '2' => 'Two',
    '3' => 'Three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
    '7' => 'Seven', '8' => 'Eight', '9' => 'Nine',
    '10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
    '13' => 'Thirteen', '14' => 'Fourteen',
    '15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
    '18' => 'Eighteen', '19' =>'Nineteen', '20' => 'Twenty',
    '30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
    '60' => 'Sixty', '70' => 'Seventy',
    '80' => 'Eighty', '90' => 'Ninety');
   $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? '' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
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
  $echowd= "<b>"."Amount In Words: "."</b>". "Indian Rupees  ".$result  . $points . " Only." ;
 ?>
	
<html>
<head>
	<link href="css/icons.css" rel="stylesheet" type="text/css" />
        <link href="css/pages.css" rel="stylesheet" type="text/css" />
        <link href="css/font/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel="stylesheet" type="text/css" />
		
		<style type="text/css">
table {
border-collapse: collapse;
font-size: 12px;
		border: 1px solid Black; 
		font-family: Arial, Helvetica, sans-serif;
}
table.main_table {
border: 1px solid black; 
border-width: 1px 0 0 1px;
border-right: 1px solid black;

}
td {
width: 0%; 
border: 1px solid black; 
border-width: 0 1px 1px 0;
}
td.child_table_wrap {
border-width: 0;
}
.a{
	
	font-weight: bold;
}


</style>
<style>
@page { size 8.9in 11.5in; margin: cm }
div.page { page-break-after: always }
</style>
</head>

<body>
<div class="page" >
<table align="center">
<tbody>
<tr>
<td colspan="" align="center" height="10" style="border-bottom: thin double  #fff; border-top: thin double  #fff;border-left: thin double #fff ;border-right: thin double #fff;"><span style="font-size: small;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<b><u>TAX INVOICE CUM CHALLAN</u></b>	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; Orignal</td>
</tr>
</tbody>
</table>

<table class="main_table" cellpadding=4 cellspacing=4  style="height="297mm;"width:205mm" border="" align="center">
<thead>
<tr>
<th style="text-align: center; width: 1523px;" colspan="30" valign="bottam"><span style="font-size: xx-large;"><strong>SARAL INSTRUMENTS SALES</strong></span></th>
</tr>
</thead>
<tbody>
<tr>
<td style="width: 1523px;" colspan="30" align="center">15 Vapi Co-op. Hsg.soc.,411 G.I.D.C., Near Shradha Apartment,Gunjan Road,VAPI-396 195. Dist. Valsad GUJARAT</td>
</tr>
<tr>
<td style="width: 1523px; height: 2px; border-bottom: thin double  #fff; border-left: thin double  black;border-right: thin double  black;" cellpadding="0" colspan="30" align="center"><strong>GSTIN: 24ABGPJ1104R1ZQ </strong></td>
</tr>
<!--<tr>
<td style="width: 1523px;" colspan="30"></td>
</tr>-->
<tr >
<td colspan="30" style="border-width: 0px 0 0 0px;" class="child_table_wrap">
<table colspan=3 cellpadding=4 cellspacing=4 class="child_table">
<tbody style="border-left: thin double  #fff; border-right: thin double  #fff;">

<tr style="border-width: solid 0px; border-width:0px solid #000;">
<td style="width: 80px;border-width: solid 1000px;" colspan="">Invoice No.</td>
<td style="width: 230px;" colspan="3" class="a"><?php echo $row['quot_no']; ?></td>
<td style="width: 90px;" colspan="">Inv.Date</td>
<td style="width: 319px;" colspan="14"><?php $time = strtotime($row['inv_date']);
									$myFormatForView = date("d/m/Y", $time);
									//$myFormatForView = date("d/m/Y g:i A", $time);
									// $myFormatForView is some thing like: 01/31/14 1:05 PM
									//dd [.\t-] mm [.-] YY
									echo $myFormatForView; ?></td>
<td style="width: px;" colspan="10">Date of Supply</td>
<td style="width: 805px;" colspan="5">
<?php 
$due = strtotime($row['supplydate']);
if($due == strtotime('0000-00-00')){
    $due =  strtotime('2000-00-00');
}
else
{
$time = strtotime($row['supplydate']);

$newformat = date('d/m/Y',$time);

echo $newformat;
}										//$time = strtotime($row['supplydate']);
										//$myFormatForView = date("d/m/Y", $time);
											//	echo $myFormatForView; 
										//echo $row['supplydate']; ?></td>
</tr>
<tr>
<td style="width: 50px;"  colspan="">Order No.</td>
<td style="width: 189px;" colspan="3"><?php echo $row['order_no']; ?></td>
<td style="width: 90px;" colspan="">Ord.Date</td>
<td style="width: 319px;" colspan="14"><?php 
$due = strtotime($row['order_date']);
if($due == strtotime('0000-00-00')){
    $due =  strtotime('2000-00-00');
}
else
{
$time = strtotime($row['order_date']);

$newformat = date('d/m/Y',$time);

echo $newformat;
}		


// 2003-10-16?>
</td>
<td style="width: 300px;" colspan="10">Place of Supply</td>
<td style="width: 802px;" colspan="5">&nbsp;</td>
</tr>


</tbody>
</table>
</td>
</tr>

<tr >
<td colspan="30" class="child_table_wrap">
<table colspan=3 cellpadding=4 cellspacing=4 class="child_table">
<tbody>
<tr style="border-bottom: thin double  #fff; border-left: thin double #fff ;border-right: thin double black; border-top: thin double  #fff;">
<td style="width: 388px; border-left: thin double #fff;" colspan="" align="center">Details of Reciver / Bill to:</td>
<td style="width: 380px; border-right: thin double #fff;" colspan="" align="center">Details of Consignee / Shipped to:</td>
</tr>

</tbody>
</table>
</td>
</tr>


<tr>
<td colspan="30" class="main_table">
<table colspan=3 cellpadding=4 cellspacing=4 class="child_table">
<tbody style="border-left: thin double  #fff; border-right: thin double  #fff;">
<tr>
<td style="width: px;" colspan="0">Name</td>
<?php 
				$id = $row['quot_cust'];
				$c = mysqli_query($conn, "SELECT * FROM customer WHERE id='$id' ")or die(mysqli_error());
				$cu = mysqli_fetch_array($c);
				$sid = $cu['sid'];
				$squery = mysqli_query($conn, "SELECT * FROM state WHERE sid ='$sid' ")or die(mysqli_error());
				$ss = mysqli_fetch_array($squery);
			 ?>
<td style="width:346px " colspan="15" class="a"><?php echo $cu['custname'] ?></td>
<td style="width: px;" colspan="">Name</td>
<?php 
				$iddd = $row['conname'];
				$s = mysqli_query($conn, "SELECT * FROM consignee WHERE id='$iddd' ")or die(mysqli_error());
				$ru = mysqli_fetch_array($s);
				
				$rsid = $ru['sid'];
				$squery = mysqli_query($conn, "SELECT * FROM state WHERE sid ='$rsid' ")or die(mysqli_error());
				$sss = mysqli_fetch_array($squery);
			 ?>
<td style="width:340px " colspan="15"class="a"><?php echo $ru['custname']?></td>
</tr>
<tr>
<td style="width: px;" colspan="" height="60">Address</td>
<td style="width: px;" colspan="15"><?php 
$bar = (($cu['addr']));
$bar = ucwords($bar);             // HELLO WORLD!
//$bar = ucwords(strtolower($bar));

$pin=$cu['pin_code'];
 
if($pin>0)
{
	$msg ='-'.$pin;
}
else
{
	$msg = ' ';
}
echo wordwrap($bar,50,"<br>\n").$msg;
 ?>
 
 </td>	

<td style="width: px;" colspan="">Address</td>
<td style="width: px;" colspan="15"><?php 
$bar = (($ru['addr']));
$bar = ucwords($bar);             // HELLO WORLD!
//$bar = ucwords(strtolower($bar));

 $pin=$ru['pin_code'];
 
if($pin>0)
{
	$msg1 ='-'.$pin;
}
else
{
	$msg1 = ' ';
}
echo wordwrap($bar,50,"<br>\n").$msg1;
 ?></td>
</tr>
<tr>
<td style="width: px;" colspan="">GSTIN</td>
<td style="width: px;" colspan="15"class="a"><?php echo $cu['gstin']; ?></td>
<td style="width: px;" colspan="">GSTIN</td>
<td style="width: px;" colspan="15"class="a"><?php echo $ru['gstin']; ?></td>
</tr>


<tr>
<td colspan="30"class="child_table_wrap">
<table colspan=3 cellpadding=2 cellspacing=0 class="child_table" >
<tbody style="border-left: thin double  #fff; border-right: thin double  #fff;">
<tr style="border-bottom: thin double #fff;border-left: thin double #fff;border: thin double #fff;border-top: thin double #fff;">


<td style="width: 45px;" colspan="">State</td>
<td style="width: 231px;" colspan="" class="a">&nbsp;<?php echo $ss['state']; ?></td>
<td style="width: 68px;" colspan="">State Code</td>
<td style="width: 33px" colspan="" align="center" class="a"><?php echo $ss['state_code']; ?></td>
<td style="width: 49px;" colspan=""align="center">State</td>
<!--<td style="width: 225px; border-bottom: thin double  #fff" colspan="">&nbsp;</td>-->
<td style="width: 220px;" colspan=""; class="a">&nbsp;<?php echo $sss['state']; ?></td>
<td style="width: 68px;" colspan="";align="center">State Code</td>
<td style="width: 25px;" colspan=""; align="center"class="a"><?php echo $sss['state_code']; ?></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>


</tr>
<tr >
<td colspan="30" class="child_table_wrap" style="width: 100%;">
<table colspan="30" cellpadding=4 cellspacing=4 class="child_table" style="width: 100%;">
<tbody style="border-left: thin double  #fff; border-right: thin double  #fff;">
<tr >
<td style="width: 10;" rowspan="" >Sr No.</td>
<td style="width: 350px;" colspan="" rowspan="" align="center">Description</td>
<td style="width: px; text-align:center;">HSN</td>
<td style="width: ;text-align:center;">Qty. pcs</td>
<td style="width: ;text-align:center;">Rate</td>
<td style="width: ;" rowspan="" align="center">Amount</td>
<td style="width: ;" rowspan="" align="center">Dis.</td>
<td style="width: ;" colspan="" rowspan="" align="center">Taxable value</td>
</tr>
  <?php 
	$sno=1;
	$id = $_REQUEST['id'];
		$sqli = mysqli_query($conn, "SELECT * FROM invoice_desc WHERE quot_id='$id' ")or die(mysqli_error());
		while ($r = mysqli_fetch_array($sqli)) {	
			$hsn = $r['item_desc'];
			$pro = mysqli_query($conn, "SELECT * FROM item_detail WHERE p_name='$hsn' ")or die(mysqli_error());
			$name = mysqli_fetch_array($pro);
	?>
  <tr>
<td style="width: 10" rowspan=""><?php echo $sno; ?></td>
<td style="width: 380px;" colspan="" rowspan="" align="left"><?php echo $name['p_name']; ?></td>
<td style="width: px;text-align:center;"><?php echo $name['p_hsn']; ?></td>
<td style="width: px;"align="center"><?php 



$num = $r['quantity'];
//$num = 4;
$num_padded = sprintf("%02d", $num);

echo $num_padded; 

?> </td>
<td style="width: px;"align="right"><?php echo number_format(($r['rate']),2) ?></td>
<td style="width: px;" rowspan="" align="right"><?php echo number_format(($r['total']),2) ?></td>
<td style="width: px;" rowspan="" align="right"><?php echo number_format(($r['dis']),2) ?>%</td>
<td style="width: px;" colspan="" rowspan="" align="right"><?php echo number_format(($r['tax_val']),2) ?></td>
</tr>
  <?php $sno++; } ?>
  
  
</tbody>
</table>
</td>



<tr >
<td style="width: px; border-Top: thin double black" colspan="">L.R No</td>
<td style="width: 48%;" colspan="21"><?php echo $row['lrno']; ?></td>
<?php 
				$id = $row['quot_id'];
				$cc = mysqli_query($conn, "SELECT sum(quantity) FROM invoice_desc where quot_id='$id' ")or die(mysqli_error());				
				$cuu = mysqli_fetch_array($cc);
				//$cuid = $cu['sid'];
			 ?>
<td style="width: 10%" colspan="" align="center" class="a">
<?php 

$num = $cuu['sum(quantity)'];

//$num = 4;
$num_padded = sprintf("%02d", $num);
if($num_padded<=01)
{
	echo $num_padded.' '.'Pc.'; 
	//$data1 . ' ' . $data2;
}
else
{
echo $num_padded.' '.'Pcs.'; 
}
?> </td>


<td style="width:% ;" colspan=""><strong>Total</strong></td>
<td style="width: %px;" colspan=2"" align="right"class="a"><?php echo $row['subtotal']; ?></td>
</tr>
<tr>
<td style="width: 10%;" colspan="">Transport</td>
<td style="width: px;" colspan="22"><?php echo $row['transmode']; ?></td>
<td style="width: px;" colspan="">Packing</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['packing']),2)?></td>
</tr>
<tr>
<td style="width: px;" colspan="">Vehicle No.</td>
<td style="width: px;" colspan="22"><?php echo $row['vehicleno']; ?></td>
<td class="" style="width: px;" colspan="">Transportation</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['transpotation']),2) ?></td>
</tr>
<tr>
<td style="width: px;" colspan="23">&nbsp;</td>
<td style="width: px;" colspan=""><strong>Nett Amount </strong></td>
<td style="width: px;" colspan="2" align="right"class="a"><?php echo number_format(($row['subtotal']+$row['transpotation']+$row['packing']),2); ?></td>
</tr>
<tr <?php  if($row['cgst_amt'] == '0.00'){ echo "style='display:none' "; } ?>>
<td style="width: px;" colspan="23">&nbsp;</td>
<td style="width: px;" colspan="">CGST @ &nbsp;<?php echo $row['cgst']; ?>%</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['cgst_amt']),2) ?></td>
</tr>
<tr <?php if($row['sgst_amt'] == '0.00'){ echo "style='display:none' "; } ?>>
<td style="width: px;" colspan="23">&nbsp;</td>
<td style="width: px;" colspan="">SGST @ &nbsp;<?php echo $row['sgst'] ?>%</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['sgst_amt']),2) ?></td>
</tr>
<tr <?php if($row['igst_amt'] == '0.00'){ echo "style='display:none' "; } ?>>
<td style="width: px;" colspan="23">&nbsp;</td>
<td style="width: px;" colspan="">IGST @ &nbsp;<?php echo $row['igst'] ?>%</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['igst_amt']),2) ?></td>
</tr>
<tr>
<td style="width: px;" colspan="23"><strong>HDFC BANK A/c no.</strong>&nbsp;&nbsp;&nbsp;&nbsp;00742020001746</td>
<td style="width: px;" colspan=""<?php if($row['rvalue'] == '0.00'){ echo "style='display:none' "; } ?>><strong>Round Off</strong></td>
<td style="width: px;" colspan="2" align="right"><?php echo $row['rvalue']; ?></td>
</tr>


<td style="width: px;" colspan="23"><strong>RTGS/NEFT IFSC:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HDFC0000074</td>
<td style="width: px;" colspan=""><strong>Grand Total</strong></td>
<td style="width: px;" colspan="2" align="right"class="a"><i class="fa fa-rupee"></i>&nbsp;<?php echo number_format(($row['grandtotal']),2) ?></td>
</tr>


<tr>
<td style="width: px;" colspan="30"><?php echo $echowd;?></td>
</tr>
<tr>
<td style="width: px;" colspan="23" valign="top"><strong>NOTE:</strong> &nbsp;1. This Invoice is due for payment on_______.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Interest at the rate of 15% p.a will be charged after due date.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. our responsibility ceases no sooner the goods leave our premises.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Subject to <strong>VAPI</strong> Jurisdiction</td>
<td style="width: px;" colspan="5" rowspan="" align="right" valign="top" height="80"><strong>For SARAL INSTRUMENTS SALES</strong><br /><br /><br /><br />PROPRIETOR</td>
</tr>

</tbody>
<!-- <tfoot>
   <tr>
      <td colspan="30" height="" width=""align="center"></td>
      
    </tr>
  </tfoot>
 --></table>
</div>



<div class="page">
<table align="center">
<tbody>
<tr>
<td colspan="" align="center" height="10" style="border-bottom: thin double  #fff; border-top: thin double  #fff;border-left: thin double #fff ;border-right: thin double #fff;"><span style="font-size: small;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp;<b><u>TAX INVOICE CUM CHALLAN</u></b>	&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp Duplicate</td>
</tr>
</tbody>
</table>

<table class="main_table" cellpadding=4 cellspacing=4 style="height="297mm;"width:205mm" border="" align="center">
<thead>
<tr>
<th style="text-align: center; width: 1523px;" colspan="30" valign="bottam"><span style="font-size: xx-large;"><strong>SARAL INSTRUMENTS SALES</strong></span></th>
</tr>
</thead>
<tbody>
<tr>
<td style="width: 1523px;" colspan="30" align="center">15 Vapi Co-op. Hsg.soc.,411 G.I.D.C., Near Shradha Apartment,Gunjan Road,VAPI-396 195. Dist. Valsad GUJARAT</td>
</tr>
<tr>
<td style="width: 1523px; height: 2px; border-bottom: thin double  #fff; border-left: thin double  black;border-right: thin double  black;" cellpadding="0" colspan="30" align="center"><strong>GSTIN: 24ABGPJ1104R1ZQ </strong></td>
</tr>
<!--<tr>
<td style="width: 1523px;" colspan="30"></td>
</tr>-->
<tr >
<td colspan="30" style="border-width: 0px 0 0 0px;" class="child_table_wrap">
<table colspan=3 cellpadding=4 cellspacing=4 class="child_table">
<tbody style="border-left: thin double  #fff; border-right: thin double  #fff;">

<tr style="border-width: solid 0px; border-width:0px solid #000;">
<td style="width: 80px;border-width: solid 1000px;" colspan="">Invoice No.</td>
<td style="width: 230px;" colspan="3" class="a"><?php echo $row['quot_no']; ?></td>
<td style="width: 90px;" colspan="">Inv.Date</td>
<td style="width: 319px;" colspan="14"><?php $time = strtotime($row['inv_date']);
									$myFormatForView = date("d/m/Y", $time);
									//$myFormatForView = date("d/m/Y g:i A", $time);
									// $myFormatForView is some thing like: 01/31/14 1:05 PM
									//dd [.\t-] mm [.-] YY
									echo $myFormatForView; ?></td>
<td style="width: px;" colspan="10">Date of Supply</td>
<td style="width: 805px;" colspan="5">
<?php 
$due = strtotime($row['supplydate']);
if($due == strtotime('0000-00-00')){
    $due =  strtotime('2000-00-00');
}
else
{
$time = strtotime($row['supplydate']);

$newformat = date('d/m/Y',$time);

echo $newformat;
}										//$time = strtotime($row['supplydate']);
										//$myFormatForView = date("d/m/Y", $time);
											//	echo $myFormatForView; 
										//echo $row['supplydate']; ?></td>
</tr>
<tr>
<td style="width: 50px;"  colspan="">Order No.</td>
<td style="width: 189px;" colspan="3"><?php echo $row['order_no']; ?></td>
<td style="width: 90px;" colspan="">Ord.Date</td>
<td style="width: 319px;" colspan="14"><?php 
$due = strtotime($row['order_date']);
if($due == strtotime('0000-00-00')){
    $due =  strtotime('2000-00-00');
}
else
{
$time = strtotime($row['order_date']);

$newformat = date('d/m/Y',$time);

echo $newformat;
}		


// 2003-10-16?>
</td>
<td style="width: 300px;" colspan="10">Place of Supply</td>
<td style="width: 802px;" colspan="5">&nbsp;</td>
</tr>


</tbody>
</table>
</td>
</tr>

<tr >
<td colspan="30" class="child_table_wrap">
<table colspan=3 cellpadding=4 cellspacing=4 class="child_table">
<tbody>
<tr style="border-bottom: thin double  #fff; border-left: thin double #fff ;border-right: thin double black; border-top: thin double  #fff;">
<td style="width: 388px; border-left: thin double #fff;" colspan="" align="center">Details of Reciver / Bill to:</td>
<td style="width: 380px; border-right: thin double #fff;" colspan="" align="center">Details of Consignee / Shipped to:</td>
</tr>

</tbody>
</table>
</td>
</tr>


<tr>
<td colspan="30" class="main_table">
<table colspan=3 cellpadding=4 cellspacing=4 class="child_table">
<tbody style="border-left: thin double  #fff; border-right: thin double  #fff;">
<tr>
<td style="width: px;" colspan="0">Name</td>
<?php 
				$id = $row['quot_cust'];
				$c = mysqli_query($conn, "SELECT * FROM customer WHERE id='$id' ")or die(mysqli_error());
				$cu = mysqli_fetch_array($c);
				$sid = $cu['sid'];
				$squery = mysqli_query($conn, "SELECT * FROM state WHERE sid ='$sid' ")or die(mysqli_error());
				$ss = mysqli_fetch_array($squery);
			 ?>
<td style="width:346px " colspan="15" class="a"><?php echo $cu['custname'] ?></td>
<td style="width: px;" colspan="">Name</td>
<?php 
				$iddd = $row['conname'];
				$s = mysqli_query($conn, "SELECT * FROM consignee WHERE id='$iddd' ")or die(mysqli_error());
				$ru = mysqli_fetch_array($s);
				
				$rsid = $ru['sid'];
				$squery = mysqli_query($conn, "SELECT * FROM state WHERE sid ='$rsid' ")or die(mysqli_error());
				$sss = mysqli_fetch_array($squery);
			 ?>
<td style="width:340px " colspan="15"class="a"><?php echo $ru['custname']?></td>
</tr>
<tr>
<td style="width: px;" colspan="" height="60">Address</td>
<td style="width: px;" colspan="15"><?php 
$bar = (($cu['addr']));
$bar = ucwords($bar);             // HELLO WORLD!
$pin=$cu['pin_code'];
 
if($pin>0)
{
	$msg ='-'.$pin;
}
else
{
	$msg = ' ';
}
echo wordwrap($bar,50,"<br>\n").$msg;
 ?>
 
 </td>

<td style="width: px;" colspan="">Address</td>
<td style="width: px;" colspan="15"><?php 
$bar = (($ru['addr']));
$bar = ucwords($bar);             // HELLO WORLD!
//$bar = ucwords(strtolower($bar));

$pin=$ru['pin_code'];
 
if($pin>0)
{
	$msg1 ='-'.$pin;
}
else
{
	$msg1 = ' ';
}
echo wordwrap($bar,50,"<br>\n").$msg1;
 ?></td>
</tr>
<tr>
<td style="width: px;" colspan="">GSTIN</td>
<td style="width: px;" colspan="15"class="a"><?php echo $cu['gstin']; ?></td>
<td style="width: px;" colspan="">GSTIN</td>
<td style="width: px;" colspan="15"class="a"><?php echo $ru['gstin']; ?></td>
</tr>


<tr>
<td colspan="30"class="child_table_wrap">
<table colspan=3 cellpadding=2 cellspacing=0 class="child_table" >
<tbody style="border-left: thin double  #fff; border-right: thin double  #fff;">
<tr style="border-bottom: thin double #fff;border-left: thin double #fff;border: thin double #fff;border-top: thin double #fff;">


<td style="width: 45px;" colspan="">State</td>
<td style="width: 231px;" colspan="" class="a">&nbsp;<?php echo $ss['state']; ?></td>
<td style="width: 68px;" colspan="">State Code</td>
<td style="width: 33px" colspan="" align="center" class="a"><?php echo $ss['state_code']; ?></td>
<td style="width: 49px;" colspan=""align="center">State</td>
<!--<td style="width: 225px; border-bottom: thin double  #fff" colspan="">&nbsp;</td>-->
<td style="width: 220px;" colspan=""; class="a">&nbsp;<?php echo $sss['state']; ?></td>
<td style="width: 68px;" colspan="";align="center">State Code</td>
<td style="width: 25px;" colspan=""; align="center"class="a"><?php echo $sss['state_code']; ?></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>


</tr>
<tr >
<td colspan="30" class="child_table_wrap" style="width: 100%;">
<table colspan="30" cellpadding=4 cellspacing=4 class="child_table" style="width: 100%;">
<tbody style="border-left: thin double  #fff; border-right: thin double  #fff;">
<tr >
<td style="width: 10;" rowspan="" >Sr No.</td>
<td style="width: 350px;" colspan="" rowspan="" align="center">Description</td>
<td style="width: px; text-align:center;">HSN</td>
<td style="width: ;text-align:center;">Qty.pcs</td>
<td style="width: ;text-align:center;">Rate</td>
<td style="width: ;" rowspan="" align="center">Amount</td>
<td style="width: ;" rowspan="" align="center">Dis.</td>
<td style="width: ;" colspan="" rowspan="" align="center">Taxable value</td>
</tr>
  <?php 
	$sno=1;
	$id = $_REQUEST['id'];
		$sqli = mysqli_query($conn, "SELECT * FROM invoice_desc WHERE quot_id='$id' ")or die(mysqli_error());
		while ($r = mysqli_fetch_array($sqli)) {	
			$hsn = $r['item_desc'];
			$pro = mysqli_query($conn, "SELECT * FROM item_detail WHERE p_sno='$hsn' ")or die(mysqli_error());
			$name = mysqli_fetch_array($pro);
	?>
  <tr>
<td style="width: 10" rowspan=""><?php echo $sno; ?></td>
<td style="width: 380px;" colspan="" rowspan="" align="left"><?php echo $name['p_name']; ?></td>
<td style="width: px;text-align:center;"><?php echo $name['p_hsn']; ?></td>
<td style="width: px;"align="center"><?php 



$num = $r['quantity'];
//$num = 4;
$num_padded = sprintf("%02d", $num);

echo $num_padded; 

?> </td>
<td style="width: px;"align="right"><?php echo number_format(($r['rate']),2) ?></td>
<td style="width: px;" rowspan="" align="right"><?php echo number_format(($r['total']),2) ?></td>
<td style="width: px;" rowspan="" align="right"><?php echo number_format(($r['dis']),2) ?>%</td>
<td style="width: px;" colspan="" rowspan="" align="right"><?php echo number_format(($r['tax_val']),2) ?></td>
</tr>
  <?php $sno++; } ?>
  
  
</tbody>
</table>
</td>



<tr >
<td style="width: px; border-Top: thin double black" colspan="">L.R No</td>
<td style="width: 48%;" colspan="21"><?php echo $row['lrno']; ?>&nbsp;</td>
<?php 
				$id = $row['quot_id'];
				$cc = mysqli_query($conn, "SELECT sum(quantity) FROM invoice_desc where quot_id='$id' ")or die(mysqli_error());				
				$cuu = mysqli_fetch_array($cc);
				//$cuid = $cu['sid'];
			 ?>
<td style="width: 10%" colspan="" align="center" class="a">
<?php 

$num = $cuu['sum(quantity)'];

$num_padded = sprintf("%02d", $num);
if($num_padded<=01)
{
	echo $num_padded.' '.'Pc.'; 
	//$data1 . ' ' . $data2;
}
else
{
echo $num_padded.' '.'Pcs.'; 
}
?> </td>


<td style="width:% ;" colspan=""><strong>Total</strong></td>
<td style="width: %px;" colspan=2"" align="right"class="a"><?php echo $row['subtotal']; ?></td>
</tr>
<tr>
<td style="width: 10%;" colspan="">Transport</td>
<td style="width: px;" colspan="22"><?php echo $row['transmode']; ?></td>
<td style="width: px;" colspan="">Packing</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['packing']),2)?></td>
</tr>
<tr>
<td style="width: px;" colspan="">Vehicle No.</td>
<td style="width: px;" colspan="22"><?php echo $row['vehicleno']; ?></td>
<td class="" style="width: px;" colspan="">Transportation</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['transpotation']),2) ?></td>
</tr>
<tr>
<td style="width: px;" colspan="23">&nbsp;</td>
<td style="width: px;" colspan=""><strong>Nett Amount </strong></td>
<td style="width: px;" colspan="2" align="right"class="a"><?php echo number_format(($row['subtotal']+$row['transpotation']+$row['packing']),2); ?></td>
</tr>
<tr <?php  if($row['cgst_amt'] == '0.00'){ echo "style='display:none' "; } ?>>
<td style="width: px;" colspan="23">&nbsp;</td>
<td style="width: px;" colspan="">CGST @ &nbsp;<?php echo $row['cgst']; ?>%</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['cgst_amt']),2) ?></td>
</tr>
<tr <?php if($row['sgst_amt'] == '0.00'){ echo "style='display:none' "; } ?>>
<td style="width: px;" colspan="23">&nbsp;</td>
<td style="width: px;" colspan="">SGST @ &nbsp;<?php echo $row['sgst'] ?>%</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['sgst_amt']),2) ?></td>
</tr>
<tr <?php if($row['igst_amt'] == '0.00'){ echo "style='display:none' "; } ?>>
<td style="width: px;" colspan="23">&nbsp;</td>
<td style="width: px;" colspan="">IGST @ &nbsp;<?php echo $row['igst'] ?>%</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['igst_amt']),2) ?></td>
</tr>
<tr>
<td style="width: px;" colspan="23"><strong>HDFC BANK A/c no.</strong>&nbsp;&nbsp;&nbsp;&nbsp;00742020001746</td>
<td style="width: px;" colspan=""<?php if($row['rvalue'] == '0.00'){ echo "style='display:none' "; } ?>><strong>Round Off</strong></td>
<td style="width: px;" colspan="2" align="right"><?php echo $row['rvalue']; ?></td>
</tr>


<td style="width: px;" colspan="23"><strong>RTGS/NEFT IFSC:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HDFC0000074</td>
<td style="width: px;" colspan=""><strong>Grand Total</strong></td>
<td style="width: px;" colspan="2" align="right"class="a"><i class="fa fa-rupee"></i>&nbsp;<?php echo number_format(($row['grandtotal']),2) ?></td>
</tr>


<tr>
<td style="width: px;" colspan="30"><?php echo $echowd;?></td>
</tr>
<tr>
<td style="width: px;" colspan="23" valign="top"><strong>NOTE:</strong> &nbsp;1. This Invoice is due for payment on_______.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Interest at the rate of 15% p.a will be charged after due date.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. our responsibility ceases no sooner the goods leave our premises.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Subject to <strong>VAPI</strong> Jurisdiction</td>
<td style="width: px;" colspan="5" rowspan="" align="right" valign="top" height="80"><strong>For SARAL INSTRUMENTS SALES</strong><br /><br /><br /><br />PROPRIETOR</td>
</tr>

</tbody>
<!-- <tfoot>
   <tr>
      <td colspan="30" height="" width=""align="center"></td>
      
    </tr>
  </tfoot>
 --></table>
</div>



<div class="page">
<table align="center">
<tbody>
<tr>
<td colspan="" align="center" height="10" style="border-bottom: thin double  #fff; border-top: thin double  #fff;border-left: thin double #fff ;border-right: thin double #fff;"><span style="font-size: small;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<b><u>TAX INVOICE CUM CHALLAN</u></b>	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp Transporter Copy</td>
</tr>
</tbody>
</table>

<table class="main_table" cellpadding=4 cellspacing=4 style="height="297mm;"width:205mm" border="" align="center">
<thead>
<tr>
<th style="text-align: center; width: 1523px;" colspan="30" valign="bottam"><span style="font-size: xx-large;"><strong>SARAL INSTRUMENTS SALES</strong></span></th>
</tr>
</thead>
<tbody>
<tr>
<td style="width: 1523px;" colspan="30" align="center">15 Vapi Co-op. Hsg.soc.,411 G.I.D.C., Near Shradha Apartment,Gunjan Road,VAPI-396 195. Dist. Valsad GUJARAT</td>
</tr>
<tr>
<td style="width: 1523px; height: 2px; border-bottom: thin double  #fff; border-left: thin double  black;border-right: thin double  black;" cellpadding="0" colspan="30" align="center"><strong>GSTIN: 24ABGPJ1104R1ZQ </strong></td>
</tr>
<!--<tr>
<td style="width: 1523px;" colspan="30"></td>
</tr>-->
<tr >
<td colspan="30" style="border-width: 0px 0 0 0px;" class="child_table_wrap">
<table colspan=3 cellpadding=4 cellspacing=4 class="child_table">
<tbody style="border-left: thin double  #fff; border-right: thin double  #fff;">

<tr style="border-width: solid 0px; border-width:0px solid #000;">
<td style="width: 80px;border-width: solid 1000px;" colspan="">Invoice No.</td>
<td style="width: 230px;" colspan="3" class="a"><?php echo $row['quot_no']; ?></td>
<td style="width: 90px;" colspan="">Inv.Date</td>
<td style="width: 319px;" colspan="14"><?php $time = strtotime($row['inv_date']);
									$myFormatForView = date("d/m/Y", $time);
									//$myFormatForView = date("d/m/Y g:i A", $time);
									// $myFormatForView is some thing like: 01/31/14 1:05 PM
									//dd [.\t-] mm [.-] YY
									echo $myFormatForView; ?></td>
<td style="width: px;" colspan="10">Date of Supply</td>
<td style="width: 805px;" colspan="5">
<?php 
$due = strtotime($row['supplydate']);
if($due == strtotime('0000-00-00')){
    $due =  strtotime('2000-00-00');
}
else
{
$time = strtotime($row['supplydate']);

$newformat = date('d/m/Y',$time);

echo $newformat;
}										//$time = strtotime($row['supplydate']);
										//$myFormatForView = date("d/m/Y", $time);
											//	echo $myFormatForView; 
										//echo $row['supplydate']; ?></td>
</tr>
<tr>
<td style="width: 50px;"  colspan="">Order No.</td>
<td style="width: 189px;" colspan="3"><?php echo $row['order_no']; ?></td>
<td style="width: 90px;" colspan="">Ord.Date</td>
<td style="width: 319px;" colspan="14"><?php 
$due = strtotime($row['order_date']);
if($due == strtotime('0000-00-00')){
    $due =  strtotime('2000-00-00');
}
else
{
$time = strtotime($row['order_date']);

$newformat = date('d/m/Y',$time);

echo $newformat;
}		


// 2003-10-16?>
</td>
<td style="width: 300px;" colspan="10">Place of Supply</td>
<td style="width: 802px;" colspan="5">&nbsp;</td>
</tr>


</tbody>
</table>
</td>
</tr>

<tr >
<td colspan="30" class="child_table_wrap">
<table colspan=3 cellpadding=4 cellspacing=4 class="child_table">
<tbody>
<tr style="border-bottom: thin double  #fff; border-left: thin double #fff ;border-right: thin double black; border-top: thin double  #fff;">
<td style="width: 388px; border-left: thin double #fff;" colspan="" align="center">Details of Reciver / Bill to:</td>
<td style="width: 380px; border-right: thin double #fff;" colspan="" align="center">Details of Consignee / Shipped to:</td>
</tr>

</tbody>
</table>
</td>
</tr>


<tr>
<td colspan="30" class="main_table">
<table colspan=3 cellpadding=4 cellspacing=4 class="child_table">
<tbody style="border-left: thin double  #fff; border-right: thin double  #fff;">
<tr>
<td style="width: px;" colspan="0">Name</td>
<?php 
				$id = $row['quot_cust'];
				$c = mysqli_query($conn, "SELECT * FROM customer WHERE id='$id' ")or die(mysqli_error());
				$cu = mysqli_fetch_array($c);
				$sid = $cu['sid'];
				$squery = mysqli_query($conn, "SELECT * FROM state WHERE sid ='$sid' ")or die(mysqli_error());
				$ss = mysqli_fetch_array($squery);
			 ?>
<td style="width:346px " colspan="15" class="a"><?php echo $cu['custname'] ?></td>
<td style="width: px;" colspan="">Name</td>
<?php 
				$iddd = $row['conname'];
				$s = mysqli_query($conn, "SELECT * FROM consignee WHERE id='$iddd' ")or die(mysqli_error());
				$ru = mysqli_fetch_array($s);
				
				$rsid = $ru['sid'];
				$squery = mysqli_query($conn, "SELECT * FROM state WHERE sid ='$rsid' ")or die(mysqli_error());
				$sss = mysqli_fetch_array($squery);
			 ?>
<td style="width:340px " colspan="15"class="a"><?php echo $ru['custname']?></td>
</tr>
<tr>
<td style="width: px;" colspan="" height="60">Address</td>
<td style="width: px;" colspan="15"><?php 
$bar = (($cu['addr']));
$bar = ucwords($bar);             // HELLO WORLD!
//$bar = ucwords(strtolower($bar));
$pin=$cu['pin_code'];
 
if($pin>0)
{
	$msg ='-'.$pin;
}
else
{
	$msg = ' ';
}
echo wordwrap($bar,50,"<br>\n").$msg;
 ?>
 
 </td>

<td style="width: px;" colspan="">Address</td>
<td style="width: px;" colspan="15"><?php 
$bar = (($ru['addr']));
$bar = ucwords($bar);             // HELLO WORLD!
//$bar = ucwords(strtolower($bar));

$pin=$ru['pin_code'];
 
if($pin>0)
{
	$msg1 ='-'.$pin;
}
else
{
	$msg1 = ' ';
}
echo wordwrap($bar,50,"<br>\n").$msg1;
 ?></td>
</tr>
<tr>
<td style="width: px;" colspan="">GSTIN</td>
<td style="width: px;" colspan="15"class="a"><?php echo $cu['gstin']; ?></td>
<td style="width: px;" colspan="">GSTIN</td>
<td style="width: px;" colspan="15"class="a"><?php echo $ru['gstin']; ?></td>
</tr>


<tr>
<td colspan="30"class="child_table_wrap">
<table colspan=3 cellpadding=2 cellspacing=0 class="child_table" >
<tbody style="border-left: thin double  #fff; border-right: thin double  #fff;">
<tr style="border-bottom: thin double #fff;border-left: thin double #fff;border: thin double #fff;border-top: thin double #fff;">


<td style="width: 45px;" colspan="">State</td>
<td style="width: 231px;" colspan="" class="a">&nbsp;<?php echo $ss['state']; ?></td>
<td style="width: 68px;" colspan="">State Code</td>
<td style="width: 33px" colspan="" align="center" class="a"><?php echo $ss['state_code']; ?></td>
<td style="width: 49px;" colspan=""align="center">State</td>
<!--<td style="width: 225px; border-bottom: thin double  #fff" colspan="">&nbsp;</td>-->
<td style="width: 220px;" colspan=""; class="a">&nbsp;<?php echo $sss['state']; ?></td>
<td style="width: 68px;" colspan="";align="center">State Code</td>
<td style="width: 25px;" colspan=""; align="center"class="a"><?php echo $sss['state_code']; ?></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>


</tr>
<tr >
<td colspan="30" class="child_table_wrap" style="width: 100%;">
<table colspan="30" cellpadding=4 cellspacing=4 class="child_table" style="width: 100%;">
<tbody style="border-left: thin double  #fff; border-right: thin double  #fff;">
<tr >
<td style="width: 10;" rowspan="" >Sr No.</td>
<td style="width: 350px;" colspan="" rowspan="" align="center">Description</td>
<td style="width: px; text-align:center;">HSN</td>
<td style="width: ;text-align:center;">Qty.pcs</td>
<td style="width: ;text-align:center;">Rate</td>
<td style="width: ;" rowspan="" align="center">Amount</td>
<td style="width: ;" rowspan="" align="center">Dis.</td>
<td style="width: ;" colspan="" rowspan="" align="center">Taxable value</td>
</tr>
  <?php 
	$sno=1;
	$id = $_REQUEST['id'];
		$sqli = mysqli_query($conn, "SELECT * FROM invoice_desc WHERE quot_id='$id' ")or die(mysqli_error());
		while ($r = mysqli_fetch_array($sqli)) {	
			$hsn = $r['item_desc'];
			$pro = mysqli_query($conn, "SELECT * FROM item_detail WHERE p_sno='$hsn' ")or die(mysqli_error());
			$name = mysqli_fetch_array($pro);
	?>
  <tr>
<td style="width: 10" rowspan=""><?php echo $sno; ?></td>
<td style="width: 380px;" colspan="" rowspan="" align="left"><?php echo $name['p_name']; ?></td>
<td style="width: px;text-align:center;"><?php echo $name['p_hsn']; ?></td>
<td style="width: px;"align="center"><?php 



$num = $r['quantity'];
//$num = 4;
$num_padded = sprintf("%02d", $num);

echo $num_padded; 

?> </td>
<td style="width: px;"align="right"><?php echo number_format(($r['rate']),2) ?></td>
<td style="width: px;" rowspan="" align="right"><?php echo number_format(($r['total']),2) ?></td>
<td style="width: px;" rowspan="" align="right"><?php echo number_format(($r['dis']),2) ?>%</td>
<td style="width: px;" colspan="" rowspan="" align="right"><?php echo number_format(($r['tax_val']),2) ?></td>
</tr>
  <?php $sno++; } ?>
  
  
</tbody>
</table>
</td>



<tr >
<td style="width: px; border-Top: thin double black" colspan="">L.R No</td>
<td style="width: 48%;" colspan="21"><?php echo $row['lrno']; ?>&nbsp;</td>
<?php 
				$id = $row['quot_id'];
				$cc = mysqli_query($conn, "SELECT sum(quantity) FROM invoice_desc where quot_id='$id' ")or die(mysqli_error());				
				$cuu = mysqli_fetch_array($cc);
				//$cuid = $cu['sid'];
			 ?>
<td style="width: 10%" colspan="" align="center" class="a">
<?php 

$num = $cuu['sum(quantity)'];

//$num = 4;
$num_padded = sprintf("%02d", $num);
if($num_padded<=01)
{
	echo $num_padded.' '.'Pc.'; 
	//$data1 . ' ' . $data2;
}
else
{
echo $num_padded.' '.'Pcs.'; 
}
?> </td>


<td style="width:% ;" colspan=""><strong>Total</strong></td>
<td style="width: %px;" colspan=2"" align="right"class="a"><?php echo $row['subtotal']; ?></td>
</tr>
<tr>
<td style="width: 10%;" colspan="">Transport</td>
<td style="width: px;" colspan="22"><?php echo $row['transmode']; ?></td>
<td style="width: px;" colspan="">Packing</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['packing']),2)?></td>
</tr>
<tr>
<td style="width: px;" colspan="">Vehicle No.</td>
<td style="width: px;" colspan="22"><?php echo $row['vehicleno']; ?></td>
<td class="" style="width: px;" colspan="">Transportation</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['transpotation']),2) ?></td>
</tr>
<tr>
<td style="width: px;" colspan="23">&nbsp;</td>
<td style="width: px;" colspan=""><strong>Nett Amount </strong></td>
<td style="width: px;" colspan="2" align="right"class="a"><?php echo number_format(($row['subtotal']+$row['transpotation']+$row['packing']),2); ?></td>
</tr>
<tr <?php  if($row['cgst_amt'] == '0.00'){ echo "style='display:none' "; } ?>>
<td style="width: px;" colspan="23">&nbsp;</td>
<td style="width: px;" colspan="">CGST @ &nbsp;<?php echo $row['cgst']; ?>%</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['cgst_amt']),2) ?></td>
</tr>
<tr <?php if($row['sgst_amt'] == '0.00'){ echo "style='display:none' "; } ?>>
<td style="width: px;" colspan="23">&nbsp;</td>
<td style="width: px;" colspan="">SGST @ &nbsp;<?php echo $row['sgst'] ?>%</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['sgst_amt']),2) ?></td>
</tr>
<tr <?php if($row['igst_amt'] == '0.00'){ echo "style='display:none' "; } ?>>
<td style="width: px;" colspan="23">&nbsp;</td>
<td style="width: px;" colspan="">IGST @ &nbsp;<?php echo $row['igst'] ?>%</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['igst_amt']),2) ?></td>
</tr>
<tr>
<td style="width: px;" colspan="23"><strong>HDFC BANK A/c no.</strong>&nbsp;&nbsp;&nbsp;&nbsp;00742020001746</td>
<td style="width: px;" colspan=""<?php if($row['rvalue'] == '0.00'){ echo "style='display:none' "; } ?>><strong>Round Off</strong></td>
<td style="width: px;" colspan="2" align="right"><?php echo $row['rvalue']; ?></td>
</tr>


<td style="width: px;" colspan="23"><strong>RTGS/NEFT IFSC:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HDFC0000074</td>
<td style="width: px;" colspan=""><strong>Grand Total</strong></td>
<td style="width: px;" colspan="2" align="right"class="a"><i class="fa fa-rupee"></i>&nbsp;<?php echo number_format(($row['grandtotal']),2) ?></td>
</tr>


<tr>
<td style="width: px;" colspan="30"><?php echo $echowd;?></td>
</tr>
<tr>
<td style="width: px;" colspan="23" valign="top"><strong>NOTE:</strong> &nbsp;1. This Invoice is due for payment on_______.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Interest at the rate of 15% p.a will be charged after due date.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. our responsibility ceases no sooner the goods leave our premises.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Subject to <strong>VAPI</strong> Jurisdiction</td>
<td style="width: px;" colspan="5" rowspan="" align="right" valign="top" height="80"><strong>For SARAL INSTRUMENTS SALES</strong><br /><br /><br /><br />PROPRIETOR</td>
</tr>

</tbody>
<!-- <tfoot>
   <tr>
      <td colspan="30" height="" width=""align="center"></td>
      
    </tr>
  </tfoot>
 --></table>
</div>



<div class="page">
<table align="center">
<tbody>
<tr>
<td colspan="" align="center" height="10" style="border-bottom: thin double  #fff; border-top: thin double  #fff;border-left: thin double #fff ;border-right: thin double #fff;"><span style="font-size: small;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<b><u>TAX INVOICE CUM CHALLAN</u></b>	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; Extra Copy</td>
</tr>
</tbody>
</table>

<table class="main_table" cellpadding=4 cellspacing=4 style="height="297mm;"width:205mm" border="" align="center">
<thead>
<tr>
<th style="text-align: center; width: 1523px;" colspan="30" valign="bottam"><span style="font-size: xx-large;"><strong>SARAL INSTRUMENTS SALES</strong></span></th>
</tr>
</thead>
<tbody>
<tr>
<td style="width: 1523px;" colspan="30" align="center">15 Vapi Co-op. Hsg.soc.,411 G.I.D.C., Near Shradha Apartment,Gunjan Road,VAPI-396 195. Dist. Valsad GUJARAT</td>
</tr>
<tr>
<td style="width: 1523px; height: 2px; border-bottom: thin double  #fff; border-left: thin double  black;border-right: thin double  black;" cellpadding="0" colspan="30" align="center"><strong>GSTIN: 24ABGPJ1104R1ZQ </strong></td>
</tr>
<!--<tr>
<td style="width: 1523px;" colspan="30"></td>
</tr>-->
<tr >
<td colspan="30" style="border-width: 0px 0 0 0px;" class="child_table_wrap">
<table colspan=3 cellpadding=4 cellspacing=4 class="child_table">
<tbody style="border-left: thin double  #fff; border-right: thin double  #fff;">

<tr style="border-width: solid 0px; border-width:0px solid #000;">
<td style="width: 80px;border-width: solid 1000px;" colspan="">Invoice No.</td>
<td style="width: 230px;" colspan="3" class="a"><?php echo $row['quot_no']; ?></td>
<td style="width: 90px;" colspan="">Inv.Date</td>
<td style="width: 319px;" colspan="14"><?php $time = strtotime($row['inv_date']);
									$myFormatForView = date("d/m/Y", $time);
									//$myFormatForView = date("d/m/Y g:i A", $time);
									// $myFormatForView is some thing like: 01/31/14 1:05 PM
									//dd [.\t-] mm [.-] YY
									echo $myFormatForView; ?></td>
<td style="width: px;" colspan="10">Date of Supply</td>
<td style="width: 805px;" colspan="5">
<?php 
$due = strtotime($row['supplydate']);
if($due == strtotime('0000-00-00')){
    $due =  strtotime('2000-00-00');
}
else
{
$time = strtotime($row['supplydate']);

$newformat = date('d/m/Y',$time);

echo $newformat;
}										//$time = strtotime($row['supplydate']);
										//$myFormatForView = date("d/m/Y", $time);
											//	echo $myFormatForView; 
										//echo $row['supplydate']; ?></td>
</tr>
<tr>
<td style="width: 50px;"  colspan="">Order No.</td>
<td style="width: 189px;" colspan="3"><?php echo $row['order_no']; ?></td>
<td style="width: 90px;" colspan="">Ord.Date</td>
<td style="width: 319px;" colspan="14"><?php 
$due = strtotime($row['order_date']);
if($due == strtotime('0000-00-00')){
    $due =  strtotime('2000-00-00');
}
else
{
$time = strtotime($row['order_date']);

$newformat = date('d/m/Y',$time);

echo $newformat;
}		


// 2003-10-16?>
</td>
<td style="width: 300px;" colspan="10">Place of Supply</td>
<td style="width: 802px;" colspan="5">&nbsp;</td>
</tr>


</tbody>
</table>
</td>
</tr>

<tr >
<td colspan="30" class="child_table_wrap">
<table colspan=3 cellpadding=4 cellspacing=4 class="child_table">
<tbody>
<tr style="border-bottom: thin double  #fff; border-left: thin double #fff ;border-right: thin double black; border-top: thin double  #fff;">
<td style="width: 388px; border-left: thin double #fff;" colspan="" align="center">Details of Reciver / Bill to:</td>
<td style="width: 380px; border-right: thin double #fff;" colspan="" align="center">Details of Consignee / Shipped to:</td>
</tr>

</tbody>
</table>
</td>
</tr>


<tr>
<td colspan="30" class="main_table">
<table colspan=3 cellpadding=4 cellspacing=4 class="child_table">
<tbody style="border-left: thin double  #fff; border-right: thin double  #fff;">
<tr>
<td style="width: px;" colspan="0">Name</td>
<?php 
				$id = $row['quot_cust'];
				$c = mysqli_query($conn, "SELECT * FROM customer WHERE id='$id' ")or die(mysqli_error());
				$cu = mysqli_fetch_array($c);
				$sid = $cu['sid'];
				$squery = mysqli_query($conn, "SELECT * FROM state WHERE sid ='$sid' ")or die(mysqli_error());
				$ss = mysqli_fetch_array($squery);
			 ?>
<td style="width:346px " colspan="15" class="a"><?php echo $cu['custname'] ?></td>
<td style="width: px;" colspan="">Name</td>
<?php 
				$iddd = $row['conname'];
				$s = mysqli_query($conn, "SELECT * FROM consignee WHERE id='$iddd' ")or die(mysqli_error());
				$ru = mysqli_fetch_array($s);
				
				$rsid = $ru['sid'];
				$squery = mysqli_query($conn, "SELECT * FROM state WHERE sid ='$rsid' ")or die(mysqli_error());
				$sss = mysqli_fetch_array($squery);
			 ?>
<td style="width:340px " colspan="15"class="a"><?php echo $ru['custname']?></td>
</tr>
<tr>
<td style="width: px;" colspan="" height="60">Address</td>
<td style="width: px;" colspan="15"><?php 
$bar = (($cu['addr']));
$bar = ucwords($bar);             // HELLO WORLD!
$pin=$cu['pin_code'];
 
if($pin>0)
{
	$msg ='-'.$pin;
}
else
{
	$msg = ' ';
}
echo wordwrap($bar,50,"<br>\n").$msg;
 ?>
 
 </td>

<td style="width: px;" colspan="">Address</td>
<td style="width: px;" colspan="15"><?php 
$bar = (($ru['addr']));
$bar = ucwords($bar);             // HELLO WORLD!
//$bar = ucwords(strtolower($bar));

$pin=$ru['pin_code'];
 
if($pin>0)
{
	$msg1 ='-'.$pin;
}
else
{
	$msg1 = ' ';
}
echo wordwrap($bar,50,"<br>\n").$msg1;
 ?></td>
</tr>
<tr>
<td style="width: px;" colspan="">GSTIN</td>
<td style="width: px;" colspan="15"class="a"><?php echo $cu['gstin']; ?></td>
<td style="width: px;" colspan="">GSTIN</td>
<td style="width: px;" colspan="15"class="a"><?php echo $ru['gstin']; ?></td>
</tr>


<tr>
<td colspan="30"class="child_table_wrap">
<table colspan=3 cellpadding=2 cellspacing=0 class="child_table" >
<tbody style="border-left: thin double  #fff; border-right: thin double  #fff;">
<tr style="border-bottom: thin double #fff;border-left: thin double #fff;border: thin double #fff;border-top: thin double #fff;">


<td style="width: 45px;" colspan="">State</td>
<td style="width: 231px;" colspan="" class="a">&nbsp;<?php echo $ss['state']; ?></td>
<td style="width: 68px;" colspan="">State Code</td>
<td style="width: 33px" colspan="" align="center" class="a"><?php echo $ss['state_code']; ?></td>
<td style="width: 49px;" colspan=""align="center">State</td>
<!--<td style="width: 225px; border-bottom: thin double  #fff" colspan="">&nbsp;</td>-->
<td style="width: 220px;" colspan=""; class="a">&nbsp;<?php echo $sss['state']; ?></td>
<td style="width: 68px;" colspan="";align="center">State Code</td>
<td style="width: 25px;" colspan=""; align="center"class="a"><?php echo $sss['state_code']; ?></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>


</tr>
<tr >
<td colspan="30" class="child_table_wrap" style="width: 100%;">
<table colspan="30" cellpadding=4 cellspacing=4 class="child_table" style="width: 100%;">
<tbody style="border-left: thin double  #fff; border-right: thin double  #fff;">
<tr >
<td style="width: 10;" rowspan="" >Sr No.</td>
<td style="width: 350px;" colspan="" rowspan="" align="center">Description</td>
<td style="width: px; text-align:center;">HSN</td>
<td style="width: ;text-align:center;">Qty.pcs</td>
<td style="width: ;text-align:center;">Rate</td>
<td style="width: ;" rowspan="" align="center">Amount</td>
<td style="width: ;" rowspan="" align="center">Dis.</td>
<td style="width: ;" colspan="" rowspan="" align="center">Taxable value</td>
</tr>
  <?php 
	$sno=1;
	$id = $_REQUEST['id'];
		$sqli = mysqli_query($conn, "SELECT * FROM invoice_desc WHERE quot_id='$id' ")or die(mysqli_error());
		while ($r = mysqli_fetch_array($sqli)) {	
			$hsn = $r['item_desc'];
			$pro = mysqli_query($conn, "SELECT * FROM item_detail WHERE p_sno='$hsn' ")or die(mysqli_error());
			$name = mysqli_fetch_array($pro);
	?>
  <tr>
<td style="width: 10" rowspan=""><?php echo $sno; ?></td>
<td style="width: 380px;" colspan="" rowspan="" align="left"><?php echo $name['p_name']; ?></td>
<td style="width: px;text-align:center;"><?php echo $name['p_hsn']; ?></td>
<td style="width: px;"align="center"><?php 



$num = $r['quantity'];
//$num = 4;
$num_padded = sprintf("%02d", $num);

echo $num_padded; 

?> </td>
<td style="width: px;"align="right"><?php echo number_format(($r['rate']),2) ?></td>
<td style="width: px;" rowspan="" align="right"><?php echo number_format(($r['total']),2) ?></td>
<td style="width: px;" rowspan="" align="right"><?php echo number_format(($r['dis']),2) ?>%</td>
<td style="width: px;" colspan="" rowspan="" align="right"><?php echo number_format(($r['tax_val']),2) ?></td>
</tr>
  <?php $sno++; } ?>
  
  
</tbody>
</table>
</td>



<tr >
<td style="width: px; border-Top: thin double black" colspan="">L.R No</td>
<td style="width: 48%;" colspan="21"><?php echo $row['lrno']; ?>&nbsp;</td>
<?php 
				$id = $row['quot_id'];
				$cc = mysqli_query($conn, "SELECT sum(quantity) FROM invoice_desc where quot_id='$id' ")or die(mysqli_error());				
				$cuu = mysqli_fetch_array($cc);
				//$cuid = $cu['sid'];
			 ?>
<td style="width: 10%" colspan="" align="center" class="a">
<?php 

$num = $cuu['sum(quantity)'];

//$num = 4;
$num_padded = sprintf("%02d", $num);
if($num_padded<=01)
{
	echo $num_padded.' '.'Pc.'; 
	//$data1 . ' ' . $data2;
}
else
{
echo $num_padded.' '.'Pcs.'; 
}
?> </td>


<td style="width:% ;" colspan=""><strong>Total</strong></td>
<td style="width: %px;" colspan=2"" align="right"class="a"><?php echo $row['subtotal']; ?></td>
</tr>
<tr>
<td style="width: 10%;" colspan="">Transport</td>
<td style="width: px;" colspan="22"><?php echo $row['transmode']; ?></td>
<td style="width: px;" colspan="">Packing</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['packing']),2)?></td>
</tr>
<tr>
<td style="width: px;" colspan="">Vehicle No.</td>
<td style="width: px;" colspan="22"><?php echo $row['vehicleno']; ?></td>
<td class="" style="width: px;" colspan="">Transportation</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['transpotation']),2) ?></td>
</tr>
<tr>
<td style="width: px;" colspan="23">&nbsp;</td>
<td style="width: px;" colspan=""><strong>Nett Amount </strong></td>
<td style="width: px;" colspan="2" align="right"class="a"><?php echo number_format(($row['subtotal']+$row['transpotation']+$row['packing']),2); ?></td>
</tr>
<tr <?php  if($row['cgst_amt'] == '0.00'){ echo "style='display:none' "; } ?>>
<td style="width: px;" colspan="23">&nbsp;</td>
<td style="width: px;" colspan="">CGST @ &nbsp;<?php echo $row['cgst']; ?>%</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['cgst_amt']),2) ?></td>
</tr>
<tr <?php if($row['sgst_amt'] == '0.00'){ echo "style='display:none' "; } ?>>
<td style="width: px;" colspan="23">&nbsp;</td>
<td style="width: px;" colspan="">SGST @ &nbsp;<?php echo $row['sgst'] ?>%</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['sgst_amt']),2) ?></td>
</tr>
<tr <?php if($row['igst_amt'] == '0.00'){ echo "style='display:none' "; } ?>>
<td style="width: px;" colspan="23">&nbsp;</td>
<td style="width: px;" colspan="">IGST @ &nbsp;<?php echo $row['igst'] ?>%</td>
<td style="width: px;" colspan="2" align="right"><?php echo number_format(($row['igst_amt']),2) ?></td>
</tr>
<tr>
<td style="width: px;" colspan="23"><strong>HDFC BANK A/c no.</strong>&nbsp;&nbsp;&nbsp;&nbsp;00742020001746</td>
<td style="width: px;" colspan=""<?php if($row['rvalue'] == '0.00'){ echo "style='display:none' "; } ?>><strong>Round Off</strong></td>
<td style="width: px;" colspan="2" align="right"><?php echo $row['rvalue']; ?></td>
</tr>


<td style="width: px;" colspan="23"><strong>RTGS/NEFT IFSC:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HDFC0000074</td>
<td style="width: px;" colspan=""><strong>Grand Total</strong></td>
<td style="width: px;" colspan="2" align="right"class="a"><i class="fa fa-rupee"></i>&nbsp;<?php echo number_format(($row['grandtotal']),2) ?></td>
</tr>


<tr>
<td style="width: px;" colspan="30"><?php echo $echowd;?></td>
</tr>
<tr>
<td style="width: px;" colspan="23" valign="top"><strong>NOTE:</strong> &nbsp;1. This Invoice is due for payment on_______.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Interest at the rate of 15% p.a will be charged after due date.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. our responsibility ceases no sooner the goods leave our premises.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Subject to <strong>VAPI</strong> Jurisdiction</td>
<td style="width: px;" colspan="5" rowspan="" align="right" valign="top" height="80"><strong>For SARAL INSTRUMENTS SALES</strong><br /><br /><br /><br />PROPRIETOR</td>
</tr>

</tbody>
<!-- <tfoot>
   <tr>
      <td colspan="30" height="" width=""align="center"></td>
      
    </tr>
  </tfoot>
 --></table>
</div>
</body>
</Html>
<script>{
    window.print();
	exit();

}
</script>