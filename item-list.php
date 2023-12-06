 <?php require_once("sqlfiles/conn.php"); ?>
 <!DOCTYPE html>
 <html>

 <head>
     <title>ITEM LIST</title>
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
                             <h4 class="header-title m-t-0 m-b-30">ITEM LIST</h4>
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="row">
                                         <div class="col-sm-12">
                                             <div align="right" style="padding-right:50px;"><a href="item_detail.php"><button type="button" class="btn btn-success">
                                                         <font size="3"><i class="fa fa-plus"> ADD NEW</i></font>
                                                     </button>
                                                 </a>
                                             </div>
                                             <div class="card-box table-responsive">
                                                 <table class="table table-bordered table-striped paginate" align="center">
                                                     <thead>
                                                         <tr>
                                                             <th>Sr No</th>
                                                             <th>Item Name </th>
                                                             <th>HSN NO </th>
                                                             <th>Action</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         <?php
                                                            $sr_no = 1;
                                                            $retrive_query = mysqli_query($conn, "select * from item_detail ORDER BY p_sno DESC") or die(mysqli_error());
                                                            while ($row = mysqli_fetch_array($retrive_query)) {
                                                            ?>

                                                             <tr>
                                                                 <td><?php echo $sr_no++; ?></td>
                                                                 <td><?php echo $row['p_name']; ?></td>
                                                                 <td><?php echo $row['p_hsn']; ?></td>

                                                                 <td><a href="item_view.php?i_id=<?php echo $row['p_sno'] ?>" class="btn btn-primary text-orange" target="" class="on-default remove-row"><i class="fa fa-eye"> View</i></a></td>
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