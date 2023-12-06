 <?php require_once("sqlfiles/conn.php"); ?>
 <!DOCTYPE html>
 <html>

 <head>
     <title>CONSIGNEE LIST</title>
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="css/core.css" rel="stylesheet" type="text/css" />
     <link href="css/components.css" rel="stylesheet" type="text/css" />
     <link href="css/icons.css" rel="stylesheet" type="text/css" />
     <link href="css/pages.css" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="css/dataTables.bootstrap.css" />
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

                             <h4 class="header-title m-t-0 m-b-30">Consignee List</h4>
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="row">
                                         <div class="col-sm-12">
                                             <div align="right" style="padding-right:50px;"><a href="consignee.php"><button type="button" class="btn btn-success">
                                                         <font size="3"><i class="fa fa-plus"> ADD NEW</i></font>
                                                     </button></a></div>
                                             <div class="card-box table-responsive">
                                                 <table class="table table-bordered table-striped paginate" align="center">
                                                     <thead>
                                                         <tr>
                                                             <th>Sr No</th>
                                                             <th>Consignee Name </th>
                                                             <th>Contact No </th>
                                                             <th>Email </th>
                                                             <th>State </th>
                                                             <th>Action</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         <?php
                                                            $sr_no = 1;
                                                            $retrive_query = mysqli_query($conn, "select * from consignee ORDER BY id DESC") or die(mysqli_error());
                                                            while ($row = mysqli_fetch_array($retrive_query)) {
                                                                $sid = $row['sid'];
                                                                $s = mysqli_query($conn, "SELECT * FROM state WHERE sid='$sid' ") or die(mysqli_error());
                                                                $r = mysqli_fetch_array($s);

                                                            ?>

                                                             <tr>
                                                                 <td><?php echo $sr_no++; ?></td>
                                                                 <td><?php echo $row['custname']; ?></td>
                                                                 <td><?php echo $row['cno']; ?></td>
                                                                 <td><?php echo $row['email']; ?></td>
                                                                 <td><?php echo $r['state']; ?></td>
                                                                 <td><a href="consigneer_view.php?C_id=<?php echo $row['id'] ?>" class="btn btn-primary text-orange" target="" class="on-default remove-row"><i class="fa fa-eye"> View</i></a></td>
                                                             </tr>
                                                         <?php } ?>
                                                     </tbody>
                                                 </table>
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
             <script src="js/jquery.min.js"></script>
             <!-- Bootstrap JS -->
             <script src="js/bootstrap.min.js"></script>
             <script src="js/jsdatatable/jquery.dataTables.min.js"></script>
             <script src="js/jsdatatable/dataTables.bootstrap.js"></script>
             <script src="js/jsdatatable/global.js"></script> <!-- END wrapper -->