 <?php require_once("sqlfiles/conn.php"); ?>
 <?php 
 
	if(isset($_POST["search"]))
	{
		
		$sd=$_POST['sdate'];
		$ed=$_POST['edate'];
		
		/*header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="BASIC_Data.xls"');
		header('Cache-Control: max-age=0');*/
}       
if(isset($_POST['Export'])){
		$sd=$_POST['sdate'];
		$ed=$_POST['edate'];
	header("location:test.php?sd=".$sd."&ed=".$ed);
}
			
{
	if(isset($_POST["view"]))
		{
		
		$sd=$_POST['sdate'];
		$ed=$_POST['edate'];
		
   //header('Content-Type: application/vnd.ms-excel');
//header('Content-Disposition: attachment;filename="BASIC_Data.xls"');
//header('Cache-Control: max-age=0');
            // Submission from
			//$filename = $_POST["sdate"].".xls"; 
         //header("Content-Type: application/vnd.ms-excel");
			//header("Content-Disposition: attachment; filename=\"$filename\"");
			//header('Cache-Control: max-age=0');
//ExportFile($data);
 //$_POST["ExportType"] = '';
 
		}

//function ExportFile($records) {
// $heading = false;
 //if(!empty($records))
   //foreach($records as $row) {
 //if(!$heading) {
    //display field/column names as a first row
 //echo implode("\t", array_keys($row)) . "\n";
   //$heading = true;
// }
//echo implode("\t", array_values($row)) . "\n";
  // }
 //exit;
//}
}
 ?>
 
 
 <!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="Scripts/jquery.techbytarun.excelexportjs.js"></script>
 <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/core.css" rel="stylesheet" type="text/css" />
        <link href="css/components.css" rel="stylesheet" type="text/css" />
        <link href="css/icons.css" rel="stylesheet" type="text/css" />
        <link href="css/pages.css" rel="stylesheet" type="text/css" />
        <link href="css/font/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel="stylesheet" type="text/css" />
        </head>
<body>
        <?php include_once("menu.php"); ?>
<!-- Start content -->
	 <div class="content-page">

                <!-- Start content -->

                <div class="content">



                <div class="container">



                        <div class="row">

                            <div class="col-sm-12">

                                <div class="card-box">

                                 <h4 class="header-title m-t-0 m-b-30">Invoice List</h4>
                                    <div class="row">
                                     <div class="col-sm-12">
                                    <div class="row">
                                     <div class="col-sm-12">
                                         <div class="form-group">
										 <form action="" method="POST">                                          
											<label class="col-md-1 control-label">Start Date: </label>
												<div class="col-md-2">
														<input type="date" name="sdate" class="form-control " id="sdate"  required="true">
												<div class="help-block with-errors"></div> 
												</div>
													<label class="col-md-1 control-label">End Date: </label>
													<div class="col-md-2">
															<input type="date" name="edate" class="form-control " id="edate" required="true" >															
														<div class="help-block with-errors"></div> 
													</div>													
													<div class="col-md-2">															
														<input type="submit" name="search" id="search" value="search" class="button btn">
														<input type="submit" name="Export"  id="Export" value="Export" class="button btn">
														<div class="help-block with-errors"></div> 
													</div>
													
													
											</form>
									</div>
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
													 if(isset($_POST["search"]))
												{
													$cc=mysqli_query($conn, "select count(quot_no),sum(grandtotal),count(DISTINCT(quot_cust))from invoice where inv_date BETWEEN '".$sd."' AND  '".$ed."' ") or die(mysqli_error());
													$cuu = mysqli_fetch_array($cc);
											?>
											<tr>
                                                <td><b><?php echo $cuu['count(DISTINCT(quot_cust))']; 
													?></b>
												</td>
                                                <td><b><?php echo $cuu['count(quot_no)'];?></b></td>
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
												
												<?php }?>	
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
												
																					
                                             //$sr_no=1;
											 if(isset($_POST["search"]))
												{
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
                                                <td><?php echo $row['quot_no']; ?></td>
                                                <td><?php $time = strtotime($row['inv_date']);
															$myFormatForView = date("d/m/Y", $time);
															echo $myFormatForView;  ?></td>
                                                <td align="right"><?php echo $row['grandtotal']; ?></td>
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
												<?php } }  ?>
												
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
	
</script>