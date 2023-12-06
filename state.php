<?php
require_once("sqlfiles/conn.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title>State List</title>
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
				<legend class="header-title m-t-0 m-b-30"> <B>Add New State.........</b></Legend>
				<div class="row clearfix">
					<div class="col-md-8 column">
						<table class="table table-bordered table-hover" id="tab_logic">
							<form method="post" action="" id="item_entry">
								<thead>
									<tr>
										<th class="text-center">
											<label class="col-xl-3 control-label">State Name: </label>
										</th>
										<th class="col-md-8">
											<input type="text" data-error="Enter State name" required="required" name="state" class="form-control white-class" placeholder="Enter State name">
										</th>
									</tr>
									<tr>
										<th class="text-center">
											<label class="col-xl-3 control-label">State ID: </label>
										</th>
										<th class="col-md-8">
											<input type="text" data-error="Enter State ID" required="" name="sid" class="form-control white-class" placeholder="State ID">
										</th>
									</tr>
									<tr>
										<th class="col-md-8 text-center" colspan="2">
											<input type="submit" name="Add" value="Add" class="btn btn-primary text-orange">
											<input type="reset" name="cancel" value="Reset" class="btn btn-primary text-orange">
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


<script>
	$("#item_entry").on('submit', (function(e) {
		if (e.isDefaultPrevented()) {} else {
			e.preventDefault();
			$.ajax({
				url: "sqlfiles/state.php", // Url to which the request is send
				type: "POST", // Type of request to be send, called as method
				data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false, // The content type used when sending data to the server.
				cache: false, // To unable request pages to be cached
				processData: false, // To send DOMDocument or non processed data file it is set to false
				success: function(data) // A function to be called if request succeeds
				{
					//alert(data);
					if (data.trim() == '0') {
						alert("some error occur pls try again latter");
						//location.reload();
					} else if (data.trim() == '1') {
						alert("State Added Successfully")
						location.href = "state-list.php";
						//location.reload();
					} else if (data.trim() == '2') {
						alert("state id allready exist");
					} else if (data.trim() == '3') {
						alert("state allready Exist");
					}

				}
			});
		}

	}));
</script>z