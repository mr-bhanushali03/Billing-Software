<?php
	include_once("conn.php");
	$id = $_REQUEST['C_id'];
	$sql = mysqli_query($conn, "SELECT * FROM customer WHERE id='$id' ")or die(mysqli_error());
	$row = mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<!--<script>
	function ValidatePAN(Obj) {    
        if (Obj.value != "") {
            ObjVal = Obj.value;
            var panPat = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
            if (ObjVal.search(panPat) == -1) {
                alert("Invalid Pan No");
                Obj.focus(pan);
                return false;
            }
        }
  } 



</script>
<script language="JavaScript">

function pan_validate(pan)
{

var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;

if(regpan.test(pan) == false)
{

document.getElementById("status").innerHTML = "Permanent Account Number is not yet valid.";
color: red;

}
else
{

document.getElementById("status").innerHTML = "You have entered a valid Permanent Account Number !"; 

}
}
</script>
<script language="javascript"> 
function gstinn_validate(gstinn)
{

var regpan = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/;

if(regpan.test(gstinn) == false)
{

document.getElementById("gstatus").innerHTML = "GSTIN is not yet valid.";
color: red;

}
else
{

document.getElementById("gstatus").innerHTML = "You have entered a valid GSTIN NO !"; 

}
}

</script>-->


</head>
<body>
   <?php include_once("menu.php"); ?>
	<div style="padding-left:16px">
  <h2>CUSTOMER DETAILS.............</h2>
  <LEGEND></LEGEND>
</div>
  
  <div class="container">
    <div class="row clearfix">
		<div class="col-md-8 column">
		
		


		
		
		
		
			<table class="table table-bordered table-hover" id="tab_logic">
				<form method="post" action="">
				<thead>
					<tr>
						<th class="text-center" >
							<label class="col-xl-3 control-label">Customer Id: </label>
						</th>
						
						 <th class="col-md-8">
							<input type="text" data-error="Enter customer Id" required="required" name="cust_id" value="<?php echo $row['cust_id'];?>" class="form-control white-class" >
						</th> 
					</tr>
				
				
				
					<tr>
						<th class="text-center">
							<label class="col-xl-3 control-label">Customer Name: </label>
						</th>
						
						 <th class="col-md-8">
							<input type="text" data-error="Enter customer name" required="true" name="c_name" value="<?php echo $row['custname'];?>"class="form-control white-class" >
						</th> 	
					</tr>
					
					<!--<tr>
						<th class="text-center" >
							<label class="col-xl-3 control-label">PAN NO: </label>
						</th>
						
						 <th class="col-md-8"><span id="status">Please enter a valid Permanent Account Number.</span></br>
							<input type="text" data-error="Enter gstin" required="" name="pan" value="<?php echo $row['panno'];?>" class="form-control white-class" onkeyup="pan_validate(this.value);"><!--onblur="ValidatePAN(this);"
						</th> 
					</tr>-->
					
					<tr>
						<th class="text-center" >
							<label class="col-xl-3 control-label">GSTIN: </label>
						</th>
						
						 <th class="col-md-8">
							<span id="gstatus">Please enter a valid GSTIN Number.</span></br>
							<input type="text" data-error="Enter gstin" required="" name="gstinn" value="<?php echo $row['gstin'];?>"s class="form-control white-class" onkeyup="gstinn_validate(this.value);">
						</th> 
					</tr>
					

					
					<tr>
									
						<th class="text-center" >
							<label class="col-xl-3 control-label">Address: </label>
						</th>
						
						 <th class="col-md-18">
							<!--<input type="text" data-error="" required="" name="ad1" value="<?php echo $row['addr'];?>"class="form-control white-class" >-->
							<textarea name="c_addr"class="form-control white-class"><?php echo $row['addr'];?> </textarea >
						</th> 
					</tr>
					
					
					<tr>
						<th class="text-center" >
							<label class="col-xl-3 control-label">City: </label>
						</th>
						
						 <th class="col-md-8">
							<input type="text" data-error="Enter city" required="required" name="c_city" value="<?php echo $row['city'];?>"class="form-control white-class" >
						</th> 
					</tr>
					
					
					
					
					
					<tr>
							
						<th class="text-center" >
							<label class="col-xl-3 control-label">State: </label>
						</th>	
							
						 <th class="col-md-8">
						 <?php 
						 $idd = $_REQUEST['C_id'];
						 
						 $sql = mysqli_query($conn, "SELECT * FROM customer WHERE id='$idd' ")or die(mysqli_error());
	
		while ($r = mysqli_fetch_array($sql)) {	
			$hsn = $r['sid'];
			$pro = mysqli_query($conn, "SELECT * FROM state WHERE sid='$hsn' ")or die(mysqli_error());
			$name = mysqli_fetch_array($pro);
							
	?>
							
						 <input type="text" data-error="Enter city" required="required" name="c_state" value="<?php echo $name['state'];?>" class="form-control white-class" >
						 <!--<select id="c_state "name="c_state" class="form-control select2">
						<option  selected>--state--</option>
							</select>
						 
					</tr>
							
							-->           
				</th>	
					<?php }?>
					<tr>
						<th class="text-center" >     
							<label class="col-xl-3 control-label">Country </label>
						</th>
						
						 <th class="col-md-8">
							<input type="text" data-error="Enter country" required="required" name="c_country" value="<?php echo $row['country'];?>" class="form-control white-class" >
						</th> 
					</tr>
					
					<tr>
						<th class="text-center" >
							<label class="col-xl-3 control-label">Pin code: </label>
						</th>
						
						 <th class="col-md-8">
							<input type="number" data-error="Enter pin code" required="required" name="c_pin" value="<?php echo $row['pin_code'];?>" class="form-control white-class" >
						</th> 
					</tr>
					
					<tr>
						<th class="text-center" >
							<label class="col-xl-3 control-label">Contact No: </label>
						</th>
						
						 <th class="col-md-8">
							<input type="text" data-error="Enter phone No" required="required" name="c_phone" value="<?php echo $row['cno'];?>" class="form-control white-class" >
						</th> 
					</tr>
					
					
					
					<tr>
						<th class="text-center" >
							<label class="col-xl-3 control-label">Email Id: </label>
						</th>
						
						 <th class="col-md-8">
							<input type="text" data-error="Enter Email id" required="required" name="emaill" value="<?php echo $row['email'];?>"class="form-control white-class" >
						</th> 
					</tr>

					<tr>
						
						
						 <th class="col-md-8 text-center" colspan="2" >
							<a href="customer_update.php?C_id=<?php echo $row['id'] ?>" class="btn btn-primary text-orange" target="" class="on-default remove-row"><i class="fa fa-eye" > Want to Update???</i></a>
							<a href="customer-list.php" class="btn btn-primary text-orange" target="" class="on-default remove-row"><i class="fa fa-eye" > Cancel</i></a>
							
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


