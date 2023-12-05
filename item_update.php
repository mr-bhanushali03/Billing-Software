<!--	if(isset($_POST["Add"]))
{
	
	
	 $pc=$_POST['prd_no'];
	 $pn=$_POST['itm_name']. " for " . $_POST['proce']. " only. " .$_POST['size'];
	 $psac=$_POST['SAC'];
	 $ptax=$_POST['tax_no'];
	
 echo $sql="insert into item_detail(p_code,p_name,p_hsn,p_taxrate) values('".$pc."','".$pn."','".$psac."','".$ptax."') ";
  
  if(mysqli_query($conn, $sql))
   {
   //$msg="Added Successfully";
   echo '<script type="text/javascript">alert("Item successfully Added")</script>';
   //header("location: customer-list.php");
   }
   else
   
	   echo '<script type="text/javascript">alert("Invalid data")</script>';
   
	
}-->
<?php

include_once("conn.php");
$id = $_REQUEST['id'];
$retrive_query = mysqli_query($conn, "select * from item_detail where p_sno='$id'") or die(mysqli_error());
$r = mysqli_fetch_array($retrive_query);

if (isset($_POST["update"])) {
	$pc = $_POST['prd_no'];
	$pn = $_POST['itm_name'];
	$psac = $_POST['SAC'];
	$ptax = $_POST['tax_no'];

	$sql = "update item_detail set p_code='" . $pc . "', p_name='" . $pn . "', p_hsn='" . $psac . "', p_taxrate='" . $ptax . "' where p_sno=$id";
	if (mysqli_query($conn, $sql) > 0) {
		header("location:item-list.php");
	} else {
		header("location:item_update.php");
	}
}

?>

<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<style>
		input:focus {
			background-color: yellow;
		}
	</style>

</head>

<body>

	<?php include_once("menu.php"); ?>
	<div style="padding-left:16px">
		<h2>ITEM DETAIL........</h2>
		<LEGEND></LEGEND>
	</div>

	<div class="container">
		<div class="row clearfix">
			<div class="col-md-8 column">
				<table class="table table-bordered table-hover" id="tab_logic">
					<form method="post" action="" id="updated">

						<thead>
							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">product code: </label>
								</th>

								<th class="col-md-8">
									<input type="text" value="<?php echo $r['p_code']; ?>" data-error="Enter product code" required="required" name="prd_no" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Item Name: </label>
								</th>

								<th class="col-md-8">
									<input type="text" value="<?php echo $r['p_name']; ?>" data-error="Enter product Type" required="required" name="itm_name" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label value="<?php echo $r['p_code']; ?>" class="col-xl-3 control-label">Item Service Code: </label>
								</th>

								<th class="col-md-8">
									<input type="text" value="<?php echo $r['p_hsn']; ?>" data-error="Enter HSN" required="required" name="SAC" class="form-control white-class">
								</th>
							</tr>

							<tr>
								<th class="text-center">
									<label class="col-xl-3 control-label">Tax Rate %: </label>
								</th>

								<th class="col-md-8">
									<input type="number" value="<?php echo $r['p_taxrate']; ?>" data-error="Enter tax rate" required="required" name="tax_no" class="form-control white-class">
								</th>
							</tr>

							<tr>


								<th class="col-md-8 text-center" colspan="2">
									<input type="submit" name="update" value="UPDATE" class="btn btn-primary text-orange">

									<input type="reset" name="cancel" value="CANCEL" class="btn btn-primary text-red">
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
	<script>
		$(document).ready(function() {
			$('#updated').submit(function() {
				alert('Successfully Updated');
			});
		});
	</script>
</body>

</html>