<?php
	require_once("sqlfiles/conn.php");
	$id = $_REQUEST['sid'];
	$retrive_query=mysqli_query($conn, "select * from state where sid='$id'") or die(mysqli_error());
    $r=mysqli_fetch_array($retrive_query)
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
   <?php include_once("menu.php"); ?>
   <br><br>
   <div class="content-page">

                <!-- Start content -->

 <div class="content">
  <div class="container">
  <legend class="header-title m-t-0 m-b-30"> <B>View State..........</b></Legend>
    <div class="row clearfix">
		<div class="col-md-8 column" align="center">
		
			<table class="table table-bordered table-hover" id="tab_logic">
			
				<form method="post" action="" id="item_entry">
				<thead>
					<tr>
						<th class="text-center">
							<label class="col-xl-3 control-label">State Name: </label>
						</th>						
						 <th class="col-md-8">
							<input type="text" value="<?php echo $r['state'];?>"data-error="Enter State name" required="required" name="state" class="form-control white-class" placeholder="Enter State name">
						</th> 
					</tr>					
					<tr>
						<th class="text-center" >
							<label class="col-xl-3 control-label">State ID: </label>
						</th>						
						 <th class="col-md-8">
							<input type="text" value="<?php echo $r['state_code'];?>"data-error="Enter State ID" required="" name="sid" class="form-control white-class" placeholder="State ID">
						</th> 
					</tr>
					<tr>
						 <th class="col-md-8 text-center" colspan="2" >
							<a href="state_update.php?s_id=<?php echo $r['sid'] ?>" class="btn btn-primary text-orange" target="" class="on-default remove-row"><i class="fa fa-eye" > Want to Update???</i></a>
							<a href="state-list.php" class="btn btn-primary text-orange" target="" class="on-default remove-row"><i class="fa fa-eye" > Cancel</i></a>
						</th> 	
					</tr>
				</thead>				
				</form>
			</table>
			</div>
		</div>
	
	
</div>
</div>
</div>
</body>
</html>

