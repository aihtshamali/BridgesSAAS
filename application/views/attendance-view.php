<?php
$date = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Staff Attendance</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php echo '
<style type="text/css">
@media print {
#importb{
	display:none;
}
input[type="submit"]{
  display: none !important;	
}
button{
      display: none !important;
    }
.no_prnt{
	display:none;
}
 a[href]:after {
    content: none !important;
  }
.late{
	color:red !important;
}
.margin-print{
	margin-left:475px !important;
	margin-top:0px;
}
.container{
	font-size:16px !important;
}
.width-150{
	width:170px !important;
}
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
'; ?><?php echo '
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
'; ?>
<link type="text/css" rel="stylesheet" media="all" href="<?php echo base_url(); ?>assets/css/attendance.css">
<script>
	$(function(){
		$("#datepicker").datepicker({
			showOn: "button",
			buttonImage: "<?php echo base_url(); ?>assets/images/calendar.gif",
			buttonImageOnly: true,
			buttonText: "Select Date",
			dateFormat: "yy-mm-dd"
		});
	});
</script>
</head>
<body>
<?php //require_once('include/header.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-4" style="margin-left: 440px"><img src="<?php echo base_url();?>assets/images/red-logo.png" style="width: 70px;margin-left: 50px;">
			<h3 class="margin-print-2">Staff Attendance</h3>
			<label>Date</label>: <strong class="text-success"><?php echo $date; ?></strong> <!--<button type="button" class="btn btn-default btn-md text-success"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></button>--> <input type="hidden" id="datepicker">
		</div>
		<div class="col-md-2 text-right ">
			<button type="button"  id ="importb" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal" style="margin-top:20px"><strong>Import Log</strong></button>
			
		</div>
	</div>
	<p></p>
	<?php if(isset($error)){ ?>
	<div class="alert alert-danger"><?php echo $error; ?></div>
	<?php } ?>
	<?php if(isset($success)){ ?>
	<div class="alert alert-success"><?php echo $success; ?></div>
	<?php } ?>
	<table class="table">
		<tr>
			<th>Sr #</th>
			<th>Name</th>
			<th class="width-150" style="width: 150px">Hired For Project</th>
			<th>Shift/Timing</th>
			<th>Check In</th>
			<th>Check Out</th>
			<th>Status</th>
			<th>Late Time</th>
			<th>Reason</th>
			<th class="no_prnt">Action</th>
			<th class="no_prnt">Edit</th>
		</tr>
		<?php
		if(empty($attendace_log)){
		?>
		<tr><td colspan="9" class="text-danger text-center">No record found</td></tr>
		<?php
		}
		$i=1;
		foreach($attendace_log as $attendance){
			
		$check_in = strtotime($attendance->check_in);
		$time_in = strtotime($attendance->time_in);
		
		 	$datetime1 = date_create($attendance->check_in);
		    $datetime2 = date_create($attendance->time_in);
			
			
			
			$checklate=  $time_in-$check_in;
			
			
            $checkl= round(($check_in - $time_in) / 60,2);
			
			//echo $checklate;
			//echo "<br>";
		    
		    $interval = date_diff($datetime1, $datetime2);
			$check=null;
		    if($checkl>15)
		    	$check="text-danger late";
		$late = $interval->format('%R%h Hour(s) %i Minutes');
		// print_r($late);
		$latec=$late;
		// $check=str_split($latec, " ");
		$latet= explode("-",$latec);
		// print_r($check);

		//$latet=$latet[1];
		//echo $late;
		//echo "<br>";
		//$test=explode("-","-0 Hour(s) 6 Minutes");
		//echo $test[1];
		//echo "<br>";
		
		?>
		<!--Row 1 -->
		<tr>
			<th><?php echo $i; ?></th>
			<td><?php echo $attendance->firstname.' '.$attendance->lastname; ?></td>
			<td><?php echo $attendance->project_title; ?></td>
			<td>
			<!-- <button class="btn btn-success btn-sm"> </button> -->
			<div data-toggle="modal" data-target="#changeTimeIn" data-userid="<?php echo $attendance->user_id."/".$attendance->time_in; ?>" style="cursor: pointer;" > <?php echo date('h:i a', $time_in); ?></div>
			</td>
			<td><?php 
			$checkAtt=true;
				if ($attendance->check_in == '00:00:00') {
					echo 'Absent';  $checkAtt=false;?>
			<?php	} else echo date('h:i a', $check_in)?></td>

				<td><?php if ($attendance->check_out == '00:00:00') {
					echo '-';  ?>
			<?php	} else echo date('h:i a', strtotime($attendance->check_out));?>
				
				</td>
			<?php if($checkl <=15 && $checkAtt){ ?>
			<td><span class="text-success"><?php echo "Intime";?></span></td>
			<?php }
				else {?>
			<td><span class="text-danger late"><?php echo "Late";?></span></td>
			<?php }  if($checklate < 0 && $attendance->check_in != '00:00:00'){ ?>
			<td><span class="<?php echo $check ? $check : '' ?>"><?php echo  $latet[1]; ?></span></td>

				<form name="update_form_<?php echo $attendance->id; ?>" action="" method="post" enctype="multipart/form-data" id="sup_<?php echo $attendance->id; ?>">
				<td>
				<?php if(!empty($attendance->reason)){ ?>
				<input type="text" name="reason" id="res_<?php echo $attendance->id; ?>"  value="<?php echo $attendance->reason; ?>">
				<?php } else { ?>
				<input type="text" name="reason" id="res_<?php echo $attendance->id; ?>">
				<?php } ?>
				</td>
				<td>
					<input type="checkbox" name="relaxation"  id="rel_<?php echo $attendance->id; ?>" >
				</td>
			
			<td>
				
				<div class="no_prnt">
				<input type="submit" name="supervise" date-id="<?php echo $attendance->id; ?>" class="btn btn-primary" value="Update"> 
				<input type="hidden" name="attendance_id"  value="<?php echo $attendance->id; ?>">
				</div>
				</form>
			</td>
			<div class="no_prnt">
			<td><a href="<?php echo base_url(); ?>Salaryslip/attendancePerUser/<?=$attendance->user_id ?>" target="_blank">
				<button class="btn btn-primary">View Attandance</button>
				</a>
			</td>

		</div>
			<?php } elseif($attendance->check_in == '00:00:00') { ?>
				
			<td colspan="1" class="text-danger">Absent</td>
			<form name="update_form_<?php echo $attendance->id; ?>" action="" method="post" enctype="multipart/form-data" id="sup_<?php echo $attendance->id; ?>">
			<td>
				<?php if(!empty($attendance->reason)){ echo $attendance->reason; } else { ?>
				<input type="text" name="reason" class="form-control" id="res_<?php echo $attendance->id; ?>">
				<?php } ?>
			</td>
			<td>
				
				<?php if(empty($attendance->relexation)){ ?>
				<input type="checkbox" name="relaxation" value="yes" id="rel_<?php echo $attendance->id; ?>" >
				<?php } else {if($attendance->relexation == 1){echo 'Yes';}else{echo 'No';}}?>
			</td>
			
			<div id="no_prnt">
			<td>
				<?php if($attendance->relexation != 1) { ?>
				
				<input type="submit" name="supervise" date-id="<?php echo $attendance->id; ?>" class="btn btn-primary" value="Update"> <?php } ?>
				<input type="hidden" name="attendance_id"  value="<?php echo $attendance->id; ?>">
				</form>
			</td>
			
			<td>
			<div class="no_prnt">
			<a href="<?php echo base_url(); ?>Salaryslip/attendancePerUser/<?=$attendance->user_id ?>" target="_blank"><button class="btn btn-primary no_prnt" >View Attendance</button></a></div></td>
			<td>
				<button type="button" class="btn btn-info btn-sm attendancePresent" data-id="<?php echo $attendance->user_id;?>" data-toggle="modal" data-target="#AttendanceModal">Attendance</button>
			</td>
			<?php } else { ?>
			<td colspan="3" ></td>
			<td>
			<div class="no_prnt">
			<a href="<?php echo base_url(); ?>Salaryslip/attendancePerUser/<?=$attendance->user_id ?>" target="_blank"><button class="btn btn-primary no_prnt" >View Attendace</button></a></div>

			</td>
	
			<?php  }?>
			
		</tr>
		<!-- Row Ending -->
		<?php $i++; }?>
	</table>
</div>
<!-- Table Ending -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form name="import_form" method="post" action="" enctype="multipart/form-data" id="import_form">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Import Attendance Log</h4>
			</div>
			<div class="modal-body">
				<input type="file" name="file"/>
				<input type="hidden" name="import" />
			</div>
			<input type="date" class="form-control" name="cdate" placeholder="Enter Date...">
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			</form>
		</div>
	</div>
</div><!-- Modal -->
<div class="modal fade" id="AttendanceModal" tabindex="-1" role="dialog" aria-labelledby="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
	<div class="modal-header">
        <h3 class="modal-title text-center">Present At</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
			<form  method="post" action="<?php echo base_url(); ?>Attendance/InsertAttendance" enctype="multipart/form-data" id="">
				<div class="form-group" style="padding:0 10px">
					<label for="">Date</label>
					<input type="date" style="width:50%;" id="date"  name="date" class="form-control">
				</div>
				<div class="form-group" style="padding:0 10px">
					<label for="">Time</label>
					<input type="time" style="width:50%;" name="time" class="form-control">
					<input type="hidden"  id="userid" name="userid" class="form-control">
				</div>
				<div class="form-group" style="padding:0 10px">
					<input type="submit" class="btn btn-sm btn-success">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Time Change -->
<div class="modal fade" id="changeTimeIn" tabindex="-1" role="dialog" 
     aria-labelledby="changeTimeIn" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="changeTimeIn">
                    Edit Time
                </h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
        <?php echo form_open('Attendance/addTime'); ?>
        <?php
        $data = array(
        	'name' => 'userid',
        	'id' => 'userid',
        	'type' => 'hidden',
		 	'class' => 'form-control',
        	// 'value'=> $key->userid
        	);
        echo form_input($data);
        ?>
        <div class="form-group">
        <label>Time In:</label>
		<?php 
		 $data = array(
		 	'name' => 'timeIn',
		 	'id' => 'timeIn',
		 	'type' => 'time',
		 	'class' => 'form-control',
		 	// 'value' => $key->firstname
		 	);
		 echo form_input($data);
		 ?>
		 </div>

		<button type="submit" class="btn btn-primary pull-right" style="margin: 31px 0 0 10px;">Submit</button>

		<?php echo form_close(); ?>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
            </div>
        </div>
    </div>
</div>
<?php //require_once('include/footer.php'); ?>
<script type="text/javascript">
$(document).on("click", ".attendancePresent", function () {
     var date="<?php echo $date;?>";
     var userid = $(this).data('id');
     $('#date').val(date);
     $('#userid').val(userid);
     // alert(userid);
});
$(document).ready(function(){
	$(".hasDatepicker").on('change', function(){
		var date = $(this).val();
		//alert(date);
		window.location.href = '<?php echo base_url(); ?>attendance?date='+date;
		
	});
	$(".update").click(function(){
		var aid = $(this).data('id');
		$.post('<?php echo base_url(); ?>attendance/update', {'aid':aid,'relxation':relaxation,'reason':reason}, function(data){
			alert(data);
		});	
	});
});

$('#changeTimeIn').on('show.bs.modal', function(e){
	var userid = $(e.relatedTarget).data('userid');
	var [userid, time] = userid.split('/');
	$("#userid").val(userid);
	$("#timeIn").val(time);
})

</script>
</body>
</html>