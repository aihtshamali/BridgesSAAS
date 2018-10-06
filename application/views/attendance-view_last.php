<?php
$date = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Staff Attendance</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo '
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
'; ?><?php echo '
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
'; ?>
<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url(); ?>assets/css/attendance.css">
</head>
<body>
<div class="divTable" style="width: 90%;border: 4px solid #858282;  margin:0 auto" >
<div class="divTableBody">
	<!--<div class="divTableRow table-head" id="head">
		<div class="divTableCell">Sr #</div>
		<div class="divTableCell col-148" style="text-align: center">Name</div>
		<div class="divTableCell col-148" style="text-align: center">Hired For Project</div>
		<div class="divTableCell col-148" style="text-align: center">Actual Time</div>
		<div class="divTableCell col-148" style="text-align: center">Arrival time</div>
		<div class="divTableCell col-148" style="text-align: center">Late(hh:mm)</div>
		<div class="divTableCell col-148" style="text-align: center">Relaxation</div>
		<div class="divTableCell col-148" style="text-align: center">Late Reason</div>
	</div>-->
	<h1>Staff Attendance</h1>
	<label>Date</label>: <input type="date" id="attendanceDate" onchange="a_date()"/>
	<table class="table">
		<tr>
			<th>Sr #</th>
			<th>Name</th>
			<th>Hired For Project</th>
			<th>Actual Time</th>
			<th>Arrival time</th>
			<th>Late(hh:mm)</th>
			<th>Relaxation</th>
			<th>Late Reason</th>
			<th>Action</th>
		</tr>
		<?php
		$i=1;
		foreach($attendace_log as $attendance){
		$check_in = strtotime($attendance->check_in);
		$arrival_time = explode('-', $attendance->timings);
		$arrival_time = strtotime($arrival_time[1]);
		$late = $check_in-$arrival_time;
		?>
		<!--Row 1 -->
		<!--<div class="divTableRow" id="row1" style="height:30px; background:#CBD4D6" >
			<div class="divTableCell"><?php echo $i; ?></div>
			<div class="divTableCell col-148" ><?php echo $attendance->firstname.' '.$attendance->lastname; ?></div>
			<div class="divTableCell col-148" ><?php echo date('h:i a', $arrival_time); ?></div>
			<div class="divTableCell col-148" ><?php echo date('h:i a', $check_in); ?></div>
			<div class="divTableCell col-148" style="padding:0px;"><?php echo date('h:i a', $check_in); ?></div>
			<div class="divTableCell col-148" ><?php echo $attendance->user_id; ?></div>
			<div class="divTableCell col-148" style="text-align: center; padding:11px;">
				<input type="checkbox" name="Relaxation" value="yes">
			</div>
			<div class="divTableCell col-148" >
				<input type="text" name="reason" class="form-control">
			</div>
		</div>-->
		<tr>
			<th><?php echo $i; ?></th>
			<td><?php echo $attendance->user_id; ?></td>
			<td><?php echo $attendance->firstname.' '.$attendance->lastname; ?></td>
			<td><?php echo date('h:i a', $arrival_time); ?></td>
			<td><?php echo date('h:i a', $check_in); ?></td>
			<td><?php echo $attendance->check_in; ?></td>
			<td><input type="checkbox" name="Relaxation" value="yes"></td>
			<td>
				<?php if($late > 0){ ?>
				<input type="text" name="reason" class="form-control">
				<?php } ?>
			</td>
			<td><input type="button" class="btn btn-primary" value="Update"></td>
		</tr>
		<!-- Row Ending -->
		<?php $i++;} ?>
	</table>
</div>
<!-- Table Ending -->
</body>
</html>
<script type="text/javascript">
	function a_date(){
		attendance_date = $("#attendanceDate").val();
		$.post("get",
		{
			date:attendance_date
		}, function(data){
		}

			);
	}
</script>