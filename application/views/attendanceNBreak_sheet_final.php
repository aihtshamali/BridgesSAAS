<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bridges Attendance</title>
	<!-- <link rel="stylesheet" type="text/css" href="<php echo base_url();?>assets/emp_profile/css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/emp_profile/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	

	<!-- <link rel="stylesheet" type="text/css" media="all" href="<php echo base_url();?>assets/emp_profile/css/styles.css"> -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/emp_profile/tablesort/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/emp_profile/tablesort/js/jquery.tablesorter.min.js"></script>


	<style type="text/css" >
		td{
			padding: 0px !important;
			font-size: 16px;
		}
		th{
			padding-left: 0px !important;
			font-size: 16px;
		}
		.border{
			border-top: 2px solid #ddd;
		}
		.logo{
			width: 90px; 
			height: 100px;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.heading{
			/* margin-top: 10px; */
			margin-bottom: 10px;
			font-weight: 700;
			font-size: 16px;
				
		}
		@media print {
             html, body {
                 margin:0;
                 padding:0;
              
              }
    		#hidePrint{
    			display: none;
    		}
    		td{
			padding: 0px !important;
			font-size: 16px;
		}
		th{
			padding-left: 0px !important;
			font-size: 16px;
		}
		.border{
			border-top: 2px solid #ddd;
		}
		.logo{
			width: 100px; 
			height: 110px;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.heading{
			/* margin-top: 10px; */
			margin-bottom: 10px;
			font-weight: 700;
			font-size: 20px;
				
		}
	</style>
</head>
<body>
<div class="container">
	<div class="coll-sm-12 text-center">
		<div>
			<img class="logo" src="<?php echo base_url();?>assets/emp_profile/card/img/logo.png" >
		</div>
		<div class="heading" ">
			Bridges Employee Directory and Details
		</div>
		<div class="heading" ">
			<?php echo date('Y-m-d');?>
		</div>
	</div>
	<table id="myTable" class="table table-responsive">
		<thead>
		
		<tr class="border">
			<th  align="center" data-sorter="false">#</th>
			<th  align="center">Level</th>
			<th  align="center">Employee Name</th>
			<th  align="center">Title</th>
			<th  align="center">Project</th>
			<th  align="center">Grade</th>
			<th  align="center">Expe</th>
			<th  align="center">In</th>
			<th  align="center">Out</th>
			<th  align="center">Start</th>
			<th  align="center">End</th>
		</tr>
		</thead>
		<tbody>
		<?php $i=1;foreach ($attendance_sheet as $value) :?>

		<?php if($this->session->userdata('usertype') == "HR" || $this->session->userdata('usertype') == "Director" || $this->session->userdata('id')==$value->userid) { ?>
		<tr id="inc">
			<td data-sorter="false" ><?php echo $i;?> <?php //echo $value->userid;?></td>
			<td style="text-align: center;"><?php echo $value->level_name;?> </td>
			<td class="text-capitalize"><?php echo $value->fname?> <?php echo $value->lname?></td>
			<td><?php echo strip_tags($value->job_title);?></td>
			<td><?php echo $value->project_title;?></td>
			<td><?php echo $value->add_on_1;?></td>
			<td><?php echo $value->add_on_2;?></td>
			<td><?php echo $value->time_in;?></td>
			<td><?php echo $value->time_out;?></td>
			<td><?php echo $value->break_in;?></td>
			<td><?php echo $value->break_out;?></td>

		</tr>
		<?php } $i++; endforeach;?>

		</tbody>
	</table>
</div>	
<script>
	 $(document).ready(function() 
    { 
        $("#myTable").tablesorter(); 

        var table = $("#myTable");
		table.bind("sortEnd",function() { 
		    var i = 1;
		    table.find("tr:gt(0)").each(function(){
		        $(this).find("td:eq(0)").text(i);
		        i++;
		    });
		}); 

    });

</script>


</body>
</html>