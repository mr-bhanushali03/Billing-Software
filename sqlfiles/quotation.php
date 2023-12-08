<?php
require_once("conn.php");
$action = $_POST['action'];
if ($action == 'INSERT') {
	$current_date = date("Y-m-d");
	$quot_no = $_POST['quot_no'];
	$order_no = $_POST['order_no'];
	$inv_date = $_POST['inv_date'];
	$order_date = $_POST['order_date'];
	$q_custname = $_POST['q_custname'];
	$lrno = $_POST['lrno'];
	$transmode = $_POST['transmode'];
	//$state = $_POST['state'];
	//$statecode = $_POST['statecode'];
	$cons_name = $_POST['cons_name'];
	$supplydate = $_POST['supplydate'];
	$vehicleno = $_POST['vehicleno'];
	$sub_total = $_POST['sub_total'];
	$packing = $_POST['packing'];
	$frieght = $_POST['frieght'];
	$net_total = $_POST['net_total'];
	$order_date = $_POST['order_date'];
	$grand_total = $_POST['grand_total'];
	$rofval = $_POST['rofval'];
	if ($_POST['cgstper'] == '') {
		$cgstper = '';
		$cgst_tot = '';
	} else {
		$cgstper = $_POST['cgstper'];
		$cgst_tot = $_POST['cgst_tot'];
	}
	if ($_POST['igstper'] == '') {
		$igstper = '';
		$igst_add = '';
	} else {
		$igstper = $_POST['igstper'];
		$igst_add = $_POST['igst_add'];
	}
	if ($_POST['sgstper'] == '') {
		$sgstper = '';
		$sgst_tot = '';
	} else {
		$sgstper = $_POST['sgstper'];
		$sgst_tot = $_POST['sgst_tot'];
	}
	$c_year = date('Y');

	$c_month = date('m');



	$check_query = mysqli_query($conn, "select * from invoice where year(inv_date)='$c_year' and month(inv_date)='$c_month' order by q_n desc limit 1 ") or die(mysqli_error());
	if (mysqli_num_rows($check_query)) {
		$row = mysqli_fetch_array($check_query);
		$q_n = intval($row['q_n']) + 1;
	} else {
		$q_n = '100';
	}
	$insert_query = mysqli_query($conn, "insert into invoice (`quot_no`, `q_n`, `order_no`, `quot_cust`, `transmode`, `supplydate`, `conname`, `lrno`, `vehicleno`, `subtotal`, `packing`, `transpotation`, `grandtotal`, `cgst`, `igst`, `sgst`, `cgst_amt`, `igst_amt`, `sgst_amt`, `inv_date`, `order_date`, `rvalue`)
	values('$quot_no','$q_n','$order_no','$q_custname','$transmode','$supplydate','$cons_name','$lrno','$vehicleno','$sub_total','$packing','$frieght','$grand_total','$cgstper','$igstper','$sgstper','$cgst_tot','$igst_add','$sgst_tot','$current_date','$order_date','$rofval')") or die(mysqli_error());

	$quot_id = mysqli_insert_id($conn);

	$item_desc1 = $_POST['item_id'];

	$quantity1 = $_POST['item_quantity'];
	$unit1 = $_POST['unit'];
	$rate1 = $_POST['item_rate'];

	$total1 = $_POST['item_total'];
	$discount1 = $_POST['discount'];
	$taxableval1 = $_POST['taxableval'];


	foreach ($item_desc1 as $key => $value) {

		$item_desc = $value;

		$quantity = $quantity1[$key];
		$unit = $unit1[$key];
		$rate = $rate1[$key];
		$total = $total1[$key];
		$discount = $discount1[$key];
		$taxableval = $taxableval1[$key];

		$insert_desc = mysqli_query($conn, "insert into invoice_desc (`quot_id`, `item_desc`,  `quantity`, `unit`, `rate`, `total`, `dis`, `tax_val`, `updated_date`) 
	  		values('$quot_id','$item_desc','$quantity','$unit','$rate','$total','$discount','$taxableval','$current_date_time')");
	}



	if ($insert_query) {

		echo "1";
	}
} elseif ($action == "UPDATE") {
	$current_date = date("Y-m-d");
	$q_custname = $_POST['q_custname'];
	$lrno = $_POST['lrno'];
	$transmode = $_POST['transmode'];
	//$state = $_POST['state'];
	//$statecode = $_POST['statecode'];
	$cons_name = $_POST['cons_name'];
	$supplydate = $_POST['supplydate'];
	$vehicleno = $_POST['vehicleno'];
	$sub_total = $_POST['sub_total'];
	$packing = $_POST['packing'];
	$frieght = $_POST['frieght'];
	$net_total = $_POST['net_total'];
	$order_date = $_POST['order_date'];
	$grand_total = $_POST['grand_total'];
	$rofval = $_POST['rofval'];
	if ($_POST['cgstper'] == '') {
		$cgstper = '';
		$cgst_tot = '';
	} else {
		$cgstper = $_POST['cgstper'];
		$cgst_tot = $_POST['cgst_tot'];
	}
	if ($_POST['igstper'] == '') {
		$igstper = '';
		$igst_add = '';
	} else {
		$igstper = $_POST['igstper'];
		$igst_add = $_POST['igst_add'];
	}
	if ($_POST['sgstper'] == '') {
		$sgstper = '';
		$sgst_tot = '';
	} else {
		$sgstper = $_POST['sgstper'];
		$sgst_tot = $_POST['sgst_tot'];
	}

	$quot_id = $_POST['inv_id'];

	$item_desc1 = $_POST['item_id'];

	$quantity1 = $_POST['item_quantity'];
	$unit1 = $_POST['unit'];
	$rate1 = $_POST['item_rate'];

	$total1 = $_POST['item_total'];
	$discount1 = $_POST['discount'];
	$taxableval1 = $_POST['taxableval'];
	$sql = mysqli_query($conn, "UPDATE `invoice` SET 
    `quot_cust`= '$q_custname',
    `transmode`= '$transmode',
    `supplydate`= '$supplydate',
    `conname`= '$cons_name',
    `lrno`= '$lrno',
    `vehicleno`= '$vehicleno',
    `subtotal`= '$sub_total',
    `packing`= '$packing',
    `transpotation`= '$frieght',
    `grandtotal`= '$grand_total',
    `cgst`= '$cgstper ',
    `igst`= '$igstper',
    `sgst`= '$sgstper',
    `cgst_amt`= '$cgst_tot',
    `igst_amt`= '$igst_add',
    `sgst_amt`= '$sgst_tot',
    `rvalue`= '$rofval'
    WHERE quot_id='$quot_id'");
	if ($sql) {
		$dq = mysqli_query($conn, "DELETE FROM invoice_desc WHERE quot_id='$quot_id' ") or die(mysqli_error());
		if ($dq) {
			foreach ($item_desc1 as $key => $value) {

				$item_desc = $value;

				$quantity = $quantity1[$key];
				$unit = $unit1[$key];
				$rate = $rate1[$key];
				$total = $total1[$key];
				$discount = $discount1[$key];
				$taxableval = $taxableval1[$key];

				$insert_desc = mysqli_query($conn, "insert into invoice_desc (`quot_id`, `item_desc`,  `quantity`, `unit`, `rate`, `total`, `dis`, `tax_val`, `updated_date`) 
	  		values('$quot_id','$item_desc','$quantity','$unit','$rate','$total','$discount','$taxableval','$current_date_time')");
			}
		}
	}

	if ($insert_desc) {

		echo "2";
	}
} elseif ($action == 'DELETE') {

	$quot_id = $_POST['quot_id'];

	$delete_query = mysqli_query($conn, "DELETE FROM quotation WHERE quot_id='$quot_id'") or die(mysqli_error());

	if ($delete_query) {

		echo "1";
	}
}
