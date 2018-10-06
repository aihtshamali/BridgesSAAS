<!DOCTYPE html>
<html>
<head>
	<title>Salary Slip View</title>

	<link href="<?php echo base_url();?>assets/bootstrap-editable-folder/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/style4.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url();?>assets/css/style3.css" rel="stylesheet" media="all">


</head>
<style type="text/css">
	body{
		background-color: #f0f0f0;
	}
	.salary-header{
		width: 100%;
		height: 70px;
		background-color: green;
		color: white; 
	}
	.slip-wrapper{
		font-family:'Roboto Condensed', sans-serif;
		background-color: #f0f0f0;
	}
	.salary-table{
		width: 80%;
		margin: auto;
		background-color: #dbdbdb;
		min-height: 100px;
	}
	.salary-table-head{
		width: 100%;
		height: 25px;
		display: flex;
	}
	.salary-head-child{
		width: 14.28%;
		height: 100%;
		line-height: 15px;
		background-color: green;
		color: white;
		text-align: left;
		border-right: 1px solid lightgrey;
		padding: 5px; 
	}
	.salary-table-body{
		display: flex;
	}
	.salary-body-child{
		width: 14.28%;
		height: 25px;
		line-height: 15px;
		padding: 5px;
		background-color: #f9f9f9;
		color: black;
		text-align: left;
		border-right: 1px solid lightgrey; 
		border-bottom: 1px solid lightgrey; 
	}
	.link_span{
		color: #001196;
		cursor: pointer;
	}
	a:hover{
		text-decoration: none;
	}
	i{
		color: green;
		cursor: pointer;
	}
	.popover{
		width: 40% !important;
		padding: 0;
	}
	.popover-content{
		padding: 9px 2px !important;
	}
	.verticle-center{
		position: relative;
		top: 50%;
		transform: translateY(-50%);
	}
	.white_i{
		color: white !important;
		position: relative;
		top: 50%;
		transform: translateY(-20%);

	}
	.border-div{
		background-color: #dbdbdb;
		width: 100%;
		height: 50px;
	}
	.border-div .row{
		height: 100%;
	}
	.buttons-div{
		width: 50%;
		height: inherit;
		margin: auto;
	}
	.custom-va{
		position: relative;
		top: 50%;
		transform: translateY(-27%);
	}
	.white-text{
		color: white;
	}
	.wd-35{
		width: 35%;
		line-height: 16px !important;
	}
</style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<body>
	<div class="slip-wrapper">
		<div class="salary-header">
			<div class="logo-with-text relative">
				<img src="<?php echo base_url();?>assets/images/logo.png" class="header-logo">
			</div>
		</div>
		<div class="border-div">
			<div class="buttons-div">
				<div class="row">
					<div class="col-md-3 verticle-center pdl-0">
					<button class="btn btn-success input-sm pull-right wd-35" type="button">
					<a href="<?php echo base_url(); ?>/Salaryslip" class="white-text"> Back</a></button>
					</div>
					<div class="col-md-3 verticle-center">
						<select class="form-control input-sm" id="select-team" onchange="team();" >
							<option>--Select--</option>
							<option id="it" value="5">IT Team</option>
							<option id="school" value="2">School Staff</option>
							<option id="crew" value="1">Crew</option>
						</select>
					</div>
					<div class="col-md-3 verticle-center pdl-0">
						<input type="month" class="form-control input-sm" name="month" id="getMonth" onchange="month()">
					</div>
					<div class="col-md-2 verticle-center pdl-0 custom-va">
						<button class="btn btn-success input-sm" onclick="get_checks()"><i class="fa fa-print white_i" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>
		</div>
		<!-- salary-header -->
		<div class="salary-table">
			<div class="salary-table-head">
				<div class="salary-head-child">
					<input type="checkbox" class="pull-left" id="checkAll" value="0">&nbsp First Name
				</div>
				<div class="salary-head-child">Last Name</div>
				<!-- <div class="salary-head-child">Joining Date</div> -->
				<!-- <div class="salary-head-child">Shift</div> -->
				<div class="salary-head-child">Salary Month</div>
				<div class="salary-head-child">Gross Salary</div>
				<div class="salary-head-child">Deduction</div>
				<div class="salary-head-child">Additional</div>
				<div class="salary-head-child">Leaves</div>
				<div class="salary-head-child">Payable</div>
				<!-- <div class="salary-head-child"></div> -->
			</div>
			<?php
			$total_salary =0; $total_deduction = 0; $total_gross = 0; $total_additional=0;
				foreach ($users as $key) {
			?>
			<div class="salary-table-body">
				<input type="hidden" id="hidden-id" value="<?php echo $key->id;?>">
				<div class="salary-body-child">
					<input type="checkbox" class="pull-left" id="checkIt<?php echo $key->userid;?>" value="<?php echo $key->userid;?>"> &nbsp
					<a href="<?php echo base_url();?>Salaryslip/payslip/<?=$key->userid;?>" target="_blank" class="link_span" id="link_span<?php echo $key->userid;?>"><?php echo $key->firstname;?></a>
				</div>
				<div class="salary-body-child"><?php echo $key->lastname;?></div>
				<div class="salary-body-child"><?php
					$date=strtotime($key->salarymonth);
					$month=date("F",$date);
					$year=date("Y",$date);
				 echo $month."-".$year; ?></div>
				<div class="salary-body-child">Rs. 
				<?php 
				$total_gross +=$key->actual_salary;
				echo $key->actual_salary ?></div>
				<div class="salary-body-child">Rs. 
					 <?php
					 $total_deduction += $key->deduction;
					  echo $key->deduction; ?> 
					<i class="fa fa-info-circle flag-toggle" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="<?=$deduction[$key->userid]?> Day(s) Deduction" tabindex="1"></i>
				</div>
				<div class="salary-body-child">Rs.<?php 
				$total_additional += $key->additional;
				 echo $key->additional ?> 
					<i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="No Additional"></i>
				</div>
				<div class="salary-body-child"><?= $key->leaves ?></div>
				<div class="salary-body-child">Rs. <?php
				$total_salary += $key->payable;
				echo $key->payable ?></div>
			</div>
			<?php
				}

			?>
			<!-- end row -->
			<div class="salary-table-body" style="padding-bottom: 41px; padding-top: 23px;">
				<input type="hidden" id="hidden-id" value="202">
				<div class="salary-body-child">
					
					<a href="Salaryslip/payslip/46" target="_blank" class="link_span" id="link_span46"></a>
				</div>
				<div class="salary-body-child"></div>
				<div class="salary-body-child"></div>
				<div class="salary-body-child">Rs.<?= $total_gross; ?> </div>
				<div class="salary-body-child">
					Rs.<?= $total_deduction ?> 
				</div>
				<div class="salary-body-child">
					Rs.<?= $total_additional ?>
				</div>
				<div class="salary-body-child">Total Payables</div>
				<div class="salary-body-child">Rs. <?php echo $total_salary; ?></div>
			</div>

			<!-- End row end -->
			<div class="pull-right" style=></div>
		</div>
		<!-- salary-table -->
	</div>
	<!-- Popover Body -->
	<div id="flag-content-wrapper" style="display: none">
		<div class="row">
	        <div class="col-md-4 form-group pdr-0 pdl-0">
	        	<input type="text" class="form-control" name="ded1">
	        </div>
	        <div class="col-md-8 pdr-0">
				<textarea rows="1" cols="20" class="form-control" id="comment" placeholder="Enter Comments"></textarea>	        
			</div>
        </div>
        <div class="row">
	        <div class="col-md-4 form-group pdr-0 pdl-0">
	        	<input type="text" class="form-control" name="ded1">
	        </div>
	        <div class="col-md-8 pdr-0">
				<textarea rows="1" cols="20" class="form-control" id="comment" placeholder="Enter Comments"></textarea>	        
			</div>
        </div>
        <div class="row">
	        <div class="col-md-4 form-group pdr-0 pdl-0">
	        	<input type="text" class="form-control" name="ded1">
	        </div>
	        <div class="col-md-8 pdr-0">
				<textarea rows="1" cols="20" class="form-control" id="comment" placeholder="Enter Comments"></textarea>	        
			</div>
        </div>
	</div>
</body>
</html>

<script src="<?php echo base_url();?>assets/bootstrap-editable-folder/bootstrap-editable/js/bootstrap-editable.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
function get_checks(){
 var checkValues = $('input[type=checkbox]:checked').map(function()
    {
       return $(this).val();

    }).get();

 	$.post("Salaryslip/print_Salaryslip/payslip",
 		{checkedids:checkValues},
 		function(data)
 		{
 			var newWindow = window.open("", "_blank");
 			 newWindow.document.write(data);
 		}

 	);
}


$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 

    $('[data-toggle="popover"]').popover(); 

   $(".flag-toggle").popover({
        toggle: 'popover',
        placement: 'bottom',
        title: 'Flag this content',
        html: true,
        content: function() {
          return $('#flag-content-wrapper').html();
        }
    });

	// Check All
	$("#checkAll").click(function(){
	    $('input:checkbox').not(this).prop('checked', this.checked);
	});
});

function team()
{
	var id = $('#select-team').val();
	$.post("", 
		{id:id},
		function(responce){
			var doc = document.open("text/html", 'replace');
			doc.write(responce);
			$("#select-team option[id='id']").attr("selected", "selected");
			// $("#abc").setvalue(id);
			doc.close();
		}
	);
}

function month(){
	var month = $("#getMonth").val();
	// $.post("",
	// 	{month:month},
	// 	function(responce) {
	// 		var doc = document.open("text/html",'replace');
	// 		doc.write(responce);
	// 		doc.close();
	// 	}
	// 	);

window.location.href = "<?php echo base_url('Salaryslip/salaryByMonth/');?>"+month;

	// $.post("<?php echo base_url(); ?>/Salaryslip/add_salary",
	// 	{month:month},
	// 	function(responce){
	// 		var doc = document.open("text/html", 'replace');
	// 		doc.write(responce);
	// 		doc.close();
	// 	}
	// 	);
	}
</script>
