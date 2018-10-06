<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bridges Attendance</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/emp_profile/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/emp_profile/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	

</head>
<body>
<div class="container">
	<table class="table table-responsive">
		<?php $redund= '';$i=1;
		 foreach ($attendance_sheet as $value) {
		 	if($value->shift_id){ 
			if($redund!=$value->project_title ){
			?>
		<thead>
		<tr >
			
			<th colspan="6" style="text-align:center"><?php echo $value->project_title;?></th>
		</tr>
		<tr>
			<th  align="center">Sr No.</th>
			<th  align="center">Employee Name</th>
			<th  align="center">Shift Title</th>
			<th  align="center">Shift Time</th>
			<th  align="center">Break Slot</th>
			<th  align="center">Break Time</th>
		</tr>
		</thead>
		<?php $redund=$value->project_title; }?>
		<tr>
			<td>
				<?php echo $i;?>
			</td>
			<td><?php echo $value->fname?> <?php echo $value->lname?></td>
			<td><?php echo $value->shift_title;?></td>
			<td><?php echo $value->shift_time;?></td>
			<td><?php echo $value->shift_break_slot;?></td>
			<td><?php echo $value->shift_break;?></td>
		</tr>
		<tbody></tbody>
		<?php $i++;} }?>
	</table>
</div>	
</body>
</html>