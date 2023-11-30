<?php require_once("sqlfiles/conn.php"); 
 
 ?>
 <?php 
$sd=$_REQUEST['sd'];
$ed=$_REQUEST['ed'];
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="BASIC_Data.xls"');
		header('Cache-Control: max-age=0');

 ?>
 
 
 <!DOCTYPE html>
<html>
<head>
 </head>
<body>
        
<!-- Start content -->
	 <div class="content-page">

                <!-- Start content -->

                <div class="content">



                <div class="container">



                        <div class="row">

                            <div class="col-sm-12">

                                <div class="card-box">

                                 
                                    <div class="row">
                                     <div class="col-sm-12">
                                    <div class="row">
                                     <div class="col-sm-12">
									<div class="container">
                                    <table id="view" class="table">
                                        <thead>
											<tr>
                                                <td>No. of Recipients</td>
                                                <td>No. of Invoices</td>
                                                <td></td>
                                                <td>Total Invoice Value</td>
                                                <td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td>Total Taxable Value</td>
												<td>Total cess</td>
                                            </tr>
											<?php
													$cc=mysqli_query($conn, "select count(quot_no),sum(grandtotal),count(DISTINCT(quot_cust))from invoice where inv_date BETWEEN '".$sd."' AND  '".$ed."' ") or die(mysqli_error());
													$cuu = mysqli_fetch_array($cc);
											?>
											<tr>
                                                <td align="center"><b><?php echo $cuu['count(DISTINCT(quot_cust))']; 
													?></b>
												</td>
                                                <td align="center"><b><?php echo $cuu['count(quot_no)'];?></b></td>
                                                <td></td>
                                                <td align="right">
														<b><?php echo number_format(($cuu['sum(grandtotal)']),2);?>
												</td>
                                                <td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>


												
												<td align="right"><b><?php 
													$cc=mysqli_query($conn, "select sum((subtotal+transpotation+packing)) from invoice where inv_date BETWEEN '".$sd."' AND  '".$ed."' ") or die(mysqli_error());
													$cuu = mysqli_fetch_array($cc);
													echo number_format(($cuu['sum((subtotal+transpotation+packing))']),2);
													?></b></td>
												<td><b></b></td>
												
												<?php ?>	
                                            <tr>
                                                <td>GSTIN</td>
                                                <td>Invoice No. </td>
                                                <td>Invoice Date </td>
                                                <td>Invoice Value</td>
                                                <td>Place of Supply</td>
												<td>Reverse Charge</td>
												<td>Invoice Type</td>
												<td>E-Commerce GSTIN</td>
												


												<td>Rate</td>
												<td>Taxable Value</td>
												<td>Cess Amount</td>

                                            </tr>
                                        </thead>
                                        <?php 
                                             $retrive_query=mysqli_query($conn, "select * from invoice where inv_date BETWEEN '".$sd."' AND  '".$ed."' ") or die(mysqli_error());
                                             while($row=mysqli_fetch_array($retrive_query))
                                             {  
												$cus = $row['quot_cust'];
												$s = mysqli_query($conn, "SELECT * FROM customer WHERE id='$cus' ")or die(mysqli_error());
												$r = mysqli_fetch_array($s);
											  
												$s = $r['sid'];
												$sd = mysqli_query($conn, "SELECT * FROM state WHERE sid='$s' ")or die(mysqli_error());
												$sdd = mysqli_fetch_array($sd);
											 
											 
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $r['gstin'];  ?></td>
                                                <td align="center"><?php echo $row['quot_no']; ?></td>
                                                <td><?php $time = strtotime($row['inv_date']);
															$myFormatForView = date("d/m/Y", $time);
															echo $myFormatForView;  ?></td>
                                                <td align="right"><?php echo number_format(($row['grandtotal']),2); ?></td>
                                                <td><?php
												  
											  
												echo $sdd['state_code'],"-".$sdd['state'];			


												?>
												
												</td>
												<td align="center"><?php echo "N"; ?></td>
												<td align="center"><?php echo "Regular"; ?></td>
												<td><?php ?></td>
												
												<td><?php echo number_format(($row['sgst']+$row['igst']+$row['cgst']),2); ?></td>
												<td align="right"><?php echo number_format(($row['subtotal']+$row['transpotation']+$row['packing']),2); ?></td>
												<td><?php  ?></td>
                                            </tr>
												<?php }   ?>
												
                                        </tbody>
                                    </table>
									</div>
                                </div>
                            </div><!-- end col -->
                                 </div>
                        <!-- end row -->

                    </div> <!-- container -->
					</div>
           
                   </div><!-- content -->


            </div>
</div>

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


           

        </div>
        <!-- END wrapper -->
                                      
   </body>
</html>   
<script >
$(document).ready(function () {
        $("#search").click(function () {
            $("#tblExport").btechco_excelexport({
                containerid: "Null"
               , datatype: $datatype.Table
            });
        });
    });
	
</script><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
