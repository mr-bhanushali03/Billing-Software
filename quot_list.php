 <?php require_once("sqlfiles/conn.php"); ?>
 <!DOCTYPE html>
<html>
<head>
 <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/core.css" rel="stylesheet" type="text/css" />
        <link href="css/components.css" rel="stylesheet" type="text/css" />
        <link href="css/icons.css" rel="stylesheet" type="text/css" />
        <link href="css/pages.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
        <link href="css/font/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="select2-master/dist/css/select2.min.css">
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
                                 <h4 class="header-title m-t-0 m-b-30">INVOICE LIST</h4>
                                    <div class="row">
                                     <div class="col-sm-12">
                                    <div class="row">
                                     <div class="col-sm-12">
                                        
                                <div class="card-box table-responsive">
                                     <table class="table table-bordered table-striped paginate" align="center">
                                        <thead>
                                            <tr>
                                                 <th>Sr No</th>
                                                 <th>Invoice No </th>
                                                <th>Customer Name </th>
                                                <th>Invoice Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                             $sr_no=1;
                                             $retrive_query=mysqli_query($conn, "select * from invoice order by quot_id desc") or die(mysqli_error());
                                             while($row=mysqli_fetch_array($retrive_query))
                                             {  
                                                 $quot_no=$row['quot_no'];
                                                 $cname = $row['quot_cust'];
                                                 $sql = mysqli_query($conn, "SELECT * FROM customer Where id='$cname' ")or die(mysqli_error());
                                                 $roow = mysqli_fetch_array($sql);                                                
                                        ?>                                       
                                            <tr>
                                                <td><?php echo $sr_no++; ?></td>
                                                <td><?php echo $row['quot_no']; ?></td>
                                                <td><?php echo $roow['custname']; ?></td>                                       
                                                <td><?php echo $row['inv_date']; ?></td>
												<td><a href="view_bill.php?q_id=<?php echo $row['quot_id'] ?>" class="btn btn-primary text-orange" target="" class="on-default remove-row"><i class="fa fa-eye"> View Bill</i></a>&nbsp;&nbsp;<a href="invoice.php?inv_id=<?php echo $row['quot_id'] ?>" class="btn btn-primary text-orange" target="" class="on-default remove-row"><i class="fa fa-pencil"> Edit Bill</i></a></td>
                                            </tr>
                                         <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- end col -->
                                 </div>
                    </div> <!-- container -->
					</div>
                   </div><!-- content -->
            </div>
</div>
        </div>
        <script src="js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
<script src="js/jsdatatable/jquery.dataTables.min.js"></script>
    <script src="js/jsdatatable/dataTables.bootstrap.js"></script>   
    <script src="js/jsdatatable/global.js"></script>
    <script type="text/javascript" src="select2-master/dist/js/select2.min.js"></script> 
    <script>
      $('.select2').select2();
    </script>