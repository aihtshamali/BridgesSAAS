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

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>


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
			Bridges Employee Additions
		</div>
	</div>
</div>	
	<div class="col-sm-offset-1 col-sm-10 off" style="margin-top: 15px;">
		<form class="form-inline" action="<?php echo base_url();?>salaryslip/Additional_Save" method="post">
		<div class="form-group">
			<label for="">User</label>
			<select id="selcct_user" class="form-contro select2 custom-width" name="userid">
	          	<?php foreach ($user_list as $item ) :?>
	          		<option value="<?php echo $item->userid;?>" ><?php echo $item->fname." ".$item->lname;?></option>
	          	<?php endforeach;?>
	         </select>
		</div>
		
		<div class="form-group">
			<label for="">Details</label>
			<input type="text" class="" id="" name="reason" placeholder="Details">
		</div>

		<div class="form-group">
			<label for="">Amount</label>
			<input type="text" class="" id="" name="amount" placeholder="Amount">
		</div>
		
		<div class="form-group">
			<label for="">Date</label>
			<input type="date" class="" id="" name="mounth">
		</div>

		<button type="submit" class="">Submit</button>
		</form>
	</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('.select2').select2();
	});
</script>


</body>
</html>