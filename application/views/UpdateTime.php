<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Time</title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	<h3>Update Attendance</h3>
	<form action="<?=base_url();?>Attendance/UpdateAttendance" method="post">
		<div class="form-group">
			<label for="">ID</label>
			<input type="number" name="userid" class="form-control" placeholder="Enter ID...">
		</div>
		<div class="form-group">
			<label for="">Time</label>
			<input type="time" name="time" class="form-control" placeholder="Enter Time...">
		</div>
		<div class="form-group">
			<label for="">Date</label>
			<input type="date" name="date" class="form-control" placeholder="Select Date...">
		</div>
		<input type="submit" class="btn btn-success" value"Submit">
		</form>
	</div>
</body>
</html>