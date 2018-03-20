<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Street Food</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<?php include("db_connect.php"); include("Actions/index.php");?>
	</head>
	<body>
		<div class="container">
			<div class="container-fluid col-lg-8">
				<div class="panel panel-default panel-primary">
					<div class="panel-heading">
						Street Food 
					</div>
					<div class="panel-body">
						<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form">
							<legend>Add Stalls</legend>
							<div class="form-group">
								<label for="">Stall Name</label>
								<input type="text" class="form-control" id="" placeholder="Name" name="cust_name">
							</div>
							<div class="form-group">
								<label for="">Speciality</label>
								<input type="text" class="form-control" id="" placeholder="Speciality" name="spcl">
							</div>
							<div class="form-group">
								<label for="">Location</label>
								<input type="text" class="form-control" id="" placeholder="Location" name="loc">
							</div>
							<div class="form-group">
								<label for="">Address</label>
								<textarea name="stall_address" id="inputAddress" class="form-control" rows="3" required="required" placeholder="Address"></textarea>
							</div>
							<div class="form-group">
								<label for="">Contact Number</label>
								<input type="Number" class="form-control" id="" placeholder="Contact Number" name="num">
							</div>
							<div class="form-group">
								<label for="">Category</label>
								<select name="dropdown" id="input" class="form-control" required="required">
									<option value="shop">Shop</option>
									<option value="stall">Stall</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary" name="submit_button">Submit</button>
							<button type="submit" class="btn btn-primary" name="update_button" style="float:right">Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 		<script src="Hello World"></script>
	</body>
</html>