<?php
	include_once("conn.php");
if(isset($_POST["Add"]))
{	
	echo $cname=$_POST["c_name"];
	echo $cgst=$_POST["c_gst"];
	echo $add=$_POST["c_addr"];
	echo $city=$_POST["c_city"];
	echo $state=$_POST["c_state"];
	echo $pin=$_POST["c_pin"];
	echo $con=$_POST["c_phone"];
	echo $mob=$_POST["c_mob"];
	 $sql="insert into customer(c_name,c_gstin,c_address,c_city,c_state,c_pincode,c_cont,c_mobile) values('".$cname."','".$cgst."','".$add."','".$city."','".$state."','".$pin."','".$con."','".$mob."') ";
  
   if(mysqli_query($conn, $sql))
   {
   $msg="Added Successfully";
   //windows.alert("added");
   }
   else
   {
 $msg="required field missing";
   }
}

?>

<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>
  
  <?php include_once("menu.php"); ?>
	<div style="padding-left:16px">
  <h2>CREATE CUSTOMER</h2>
  <LEGEND></LEGEND>
</div>

  <div class="container">
    <div class="row clearfix">
		<div class="col-md-8 column">
		
		


		
		
		
		
			<table class="table table-bordered table-hover" id="tab_logic">
				<form method="post" action="">
				<thead>
					<tr>
						<th class="text-center">
							<label class="col-xl-3 control-label">Customer Name: </label>
						</th>
						
						 <th class="col-md-8">
							<input type="text" data-error="Enter customer name" required="required" name="c_name" class="form-control white-class" >
						</th> 
					</tr>
					
					<tr>
						<th class="text-center" >
							<label class="col-xl-3 control-label">GSTIN: </label>
						</th>
						
						 <th class="col-md-8">
							<input type="text" data-error="Enter gstin" required="" name="c_gst" class="form-control white-class" >
						</th> 
					</tr>

					
					<tr>
									
						<th class="text-center" >
							<label class="col-xl-3 control-label">Address: </label>
						</th>
						
						 <th class="col-md-18">
							<textarea name="c_addr"> </textarea >
						</th> 
					</tr>
					
					<tr>
						<th class="text-center" >
							<label class="col-xl-3 control-label">City: </label>
						</th>
						
						 <th class="col-md-8">
							<input type="text" data-error="Enter city" required="required" name="c_city" class="form-control white-class" >
						</th> 
					</tr>
					
					<tr>
						<th class="text-center" >
							<label class="col-xl-3 control-label">State: </label>
						</th>
						
						 <th class="col-md-8">
							<select class="form-control white-class" name="c_state">
								<?php
                            echo $sql="select * from state" ;
						$result=mysqli_query($conn, $sql);
						while($row=mysqli_fetch_row($result))
						{ ?>
							<option> <?php echo $row[2]; ?> </option>
							
						<?php }
						?>
							</select>
						</th> 
					</tr>
					
					<tr>
						<th class="text-center" >
							<label class="col-xl-3 control-label">Pin code: </label>
						</th>
						
						 <th class="col-md-8">
							<input type="number" data-error="Enter pin code" required="required" name="c_pin" class="form-control white-class" >
						</th> 
					</tr>
					
					<tr>
						<th class="text-center" >
							<label class="col-xl-3 control-label">Contact No: </label>
						</th>
						
						 <th class="col-md-8">
							<input type="text" data-error="Enter phone No" required="required" name="c_phone" class="form-control white-class" >
						</th> 
					</tr>
					
					<tr>
						<th class="text-center" >
							<label class="col-xl-3 control-label">Mobile </label>
						</th>
						
						 <th class="col-md-8">
							<input type="text" data-error="Enter mobile No" required="required" name="c_mob" class="form-control white-class" >
						</th> 
					</tr>

					<tr>
						
						
						 <th class="col-md-8 text-center" colspan="2" >
							<input type="submit" name="Add" value="Add" class="button">
							
							<input type="reset" name="cancel" value="Reset" class="button">
						</th> 	
					</tr>
					


					
				</thead>
					
				
				
				<tbody>
										
					
				</tbody>
				</form>
			</table>
			</div>
		</div>
	
		
</div>
</body>
</html>


