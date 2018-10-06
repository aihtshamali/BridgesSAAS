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
		width: 95%;
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
		height: auto;
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
	.pay-btn{
		margin: -5px -6px 0px;
	}
	.btn-sm{
		height: 20px;
		width: 40px;
	    margin: -3px 0 0 20px;
	}
	@media print
		{
			.salary-table 
				{
				    width: 100%;
				    margin: auto;
				    background-color: #dbdbdb;
				    min-height: 100px;
				}
			.border-div
				{
					display:none;
				}
			.salary-head-child 
				{
				    height: 100%;
				    line-height: 11px !important;
				    background-color: green !important;
				    color: white !important;
				    text-align: left;
				    padding: 2px !important;
				}
			.wd_8_PrintView
				{
					width: 9% !important;
				    border-right: 1px solid lightgrey !important;
				}
			.wd_12_PrintView
				{
					width: 12% !important;
				    border-right: 1px solid lightgrey !important;
				}
			.none_PrintView
				{
					display: none; 
				}
			.salary-header
				{
					background-color: green !important;
				}
			a[href]:after 
				{
				    content: none !important;
				}
			.margin_top_printView
				{
					margin-top: -11px !important;
				}
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
		
		<b style="color:green"><?php echo $date1 = date("d-".$month."-".$year); ?></b>
		<div class="border-div">
			<div class="buttons-div">
				<div class="row">
					<div class="col-md-3 verticle-center pdl-0">
					<button class="btn btn-success input-sm pull-right wd-35" type="button">
					<a href="http://bridges/bridgessms/Bridges_School_Software/navigations/Accounts-&-HR-System.php" class="white-text"> Back</a></button>
					</div>
					<div class="col-md-3 verticle-center">
						<select class="form-control input-sm" id="select-team" onchange="team();" >
							<option>--Select--</option>
							<option id="all" value="10">All</option>
							<option id="crew" value="1">Bridge Development Consortium</option>
							<option id="school" value="2">The Bridges School</option>
							<option id="office" value="4">Bridges Analytics</option>
							<option id="it" value="5">Bridges IT</option>
						</select>
					</div>
					<div class="col-md-3 verticle-center pdl-0">
						<input type="month" class="form-control input-sm" name="month" id="getMonth" value="<?php  if(isset($month)) echo date($year."-".$month); else echo date("Y-m", strtotime("-1 months"));?>" onchange="month()">
					</div>
					<div class="col-md-2 verticle-center pdl-0 custom-va">
						<button class="btn btn-success input-sm" id="printPage" onclick="window.print();"><i class="fa fa-print white_i" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>
		</div>
		<!-- start print function>
		<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>
			function get_checks()
			{
			     var printContents = document.getElementById(printPage).innerHTML;
			     var originalContents = document.body.innerHTML;

			     document.body.innerHTML = printContents;

			     window.print();

			     document.body.innerHTML = originalContents;
			}	
		</script>
		<!--end print funtion-->

		<!-- salary-header -->
		<div class="salary-table">
			<div class="salary-table-head">
				<div class="salary-head-child wd_12_PrintView" style="width: 18%;">
					<input type="checkbox" class="pull-left none_PrintView" id="checkAll" value="0">&nbsp First Name
				</div>
				<div class="salary-head-child wd_12_PrintView">Last Name</div>
				<div class="salary-head-child wd_12_PrintView">Joining Date</div>
				<div class="salary-head-child wd_8_PrintView">Shift</div>
				<div class="salary-head-child wd_8_PrintView">Salary Month</div>
				<div class="salary-head-child wd_8_PrintView">Gross Salary</div>
				<div class="salary-head-child wd_8_PrintView">Deduction</div>
				<div class="salary-head-child wd_8_PrintView">Additional</div>
				<div class="salary-head-child wd_8_PrintView">Leaves</div>
				<div class="salary-head-child wd_8_PrintView">Payable</div>
				<!--<div class="salary-head-child wd_8_PrintView">Paid</div> -->
				<div class="salary-head-child none_PrintView"> Status </div>
			</div>
			<?php
			$counter = 0;
			$total_salary =0; $total_deduction = 0; $total_gross = 0;
				// echo '<pre>';print_r($users);exit;
				foreach ($users as $key) {
						if($key->job_title=="Director")
							continue;
					//if(!isset($key->fname)) continue;
			?>
			<div class="salary-table-body">
				<input type="hidden" id="hidden-id" value="<?php echo $key->id;?>">
				<div class="salary-body-child wd_12_PrintView" style="width: 18%;">
					<form class="margin_top_printView" method="POST" target="_blank" action="<?php echo base_url();?>index.php/Salaryslip/payslip/<?=$key->userid;?>">
						<input type="checkbox" style="" class="pull-left none_PrintView" id="checkIt<?php echo $key->userid;?>" value="<?php echo $key->userid;?>"> &nbsp
						<input type="hidden" name="month" value="<?=$month;?>">
						<input type="hidden" name="year" value="<?=$year;?>">
					<button type="submit" style="border:none; background:none;" target="_blank" class="link_span" id="link_span<?php echo $key->userid;?>"><?php echo $key->fname;?></button>
					</form>
				</div>
				<div class="salary-body-child wd_12_PrintView"><?php echo $key->lname;?></div>
				<div class="salary-body-child wd_12_PrintView"><?php echo $key->hired_on;?></div>
				<div class="salary-body-child wd_8_PrintView"><?php echo $key->time_in;?></div>
				<div class="salary-body-child wd_8_PrintView"><?php echo $date1 = date($year."-".$month."-t"); ?></div>
				<div class="salary-body-child wd_8_PrintView">Rs. <?php echo $key->actual_salary; 
				$total_gross += $key->actual_salary;?></div>
				<div class="salary-body-child wd_8_PrintView">Rs. 
					<?php 

					/*$d = date($year."-".$month."-t",strtotime('-1 months'));
		             $date=@explode("-", $d);
		             $maxDays=$date[2]; 
		             */
		             //print_r('--'.$maxDays);
		             $perdaySalary = $key->actual_salary/$maxDays; 
		             $reduced = intval($deduction[$key->userid]*$perdaySalary);
		             if($key->hired_for_project==2){
		             	//$reduced +=1000;
		             }
		             echo "$reduced";
		             //echo "$reduced(". $deduction[$key->userid]. "/$maxDays) $year-$month" ;
		             //var_dump($deduction[$key->userid]); die();
		             $total_deduction += $reduced; ?> 
					<i class="fa fa-info-circle flag-toggle" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="<?=$deduction[$key->userid]?> Day(s) Deduction" tabindex="1"></i>
				</div>
				<div class="salary-body-child wd_8_PrintView">Rs.0 
					<i class="fa fa-info-circle" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="No Additional"></i>
				</div>
				<div class="salary-body-child wd_8_PrintView">0</div>
				<div class="salary-body-child wd_8_PrintView">Rs. <?php $finalSalary=$key->actual_salary-$reduced;
				echo  $finalSalary; 
				$total_salary += $finalSalary; ?></div>
				
				<!-- <div class="salary-body-child wd_8_PrintView"> </div> -->
				<?php
				
				foreach ($salary as $salarykey) {
					if ($key->userid == $salarykey->userid && $salarykey->paid) {
						//echo "Paid";
						$pay = "paid";
						 $counter = 1;
						 }
				}
				?> 
				
				<div class="salary-body-child none_PrintView">
				<button <?php if($counter) echo "disabled";?> class="btn btn-success btn-sm" data-toggle="modal" data-target="#pay-monthly" data-userid="<?php echo $key->userid."/".$key->fname."/".$key->lname."/".$date1."/".$key->actual_salary."/".$reduced."/".$finalSalary; ?>" ><?php if($counter){echo '<p class="pay-btn">Paid</p>'; $counter=0;} else{ echo'<p class="pay-btn">Pay</p>';}?></button>
				</div>
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
				<div class="salary-body-child"></div>
				<div class="salary-body-child"></div>
				<div class="salary-body-child" style="width: 15%;">Rs. <?=$total_gross;?></div>
				<div class="salary-body-child">
					Rs. <?=$total_deduction;?>
				</div>
				<div class="salary-body-child">
					Rs. 0
				</div>
				<div class="salary-body-child" style="width: 17%;">Total Payables</div>
				<div class="salary-body-child">Rs. <?php echo $total_salary; ?></div>
				<div class="salary-body-child"></div>
				<div class="salary-body-child"></div>

			</div>

			<!-- End row end -->
			<div class="pull-right" ></div>
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
<!-- Salary Pay Modal -->
<div class="modal fade" id="pay-monthly" tabindex="-1" role="dialog" 
     aria-labelledby="payBymonth" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="payBymonth">
                    Edit Salary
                </h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
        <?php echo form_open('Salaryslip/addSalary'); ?>
        <input type="hidden" name="month" value="<?=$month;?>">
		<input type="hidden" name="year" value="<?=$year;?>">
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
        <label>First Name:</label>
		<?php 
		 $data = array(
		 	'name' => 'fname',
		 	'id' => 'fname',
		 	'type' => 'text',
		 	'placeholder' => 'First Name',
		 	'class' => 'form-control',
		 	'readonly' => 'readonly',
		 	// 'value' => $key->firstname
		 	);
		 echo form_input($data);
		 ?>
		 </div>

       <div class="form-group">
        <label>Last Name:</label>
		<?php 
		$data = array(
			'name' => 'lname',
			'id' => 'lname',
			'type' => 'text',
			'placeholder' => 'Last Name',
		 	'class' => 'form-control',
		 	'readonly' => 'readonly',
			// 'value' => $key->lastname
			);
		echo form_input($data);
		 ?>
		 </div>

		<div class="form-group">
		<label>Salary Month:</label>
		 <?php
		 $data = array(
		 	'name' => 'salaryMonth',
		 	'id' =>  'salaryMonth',
		 	'type' => 'text',
		 	'class' => 'form-control',
		 	'readonly' => 'readonly',
		 	//'value' => '2018-09-01',
		
		 	);

		 echo form_input($data);
		 ?>
		</div>
		<div class="form-group">
		<label>Actual Salary:</label>
		 <?php
		 $data = array(
		 	'name' => 'actual-salary',
		 	'id' => 'actual-salary',
		 	'type' => 'number',
		 	'class' => 'form-control',
		 	'readonly' => 'readonly',
		 	// 'value' => set_value('sl')
		 	);
		 echo form_input($data);
		 ?>
		</div>
		 <div class="form-group">
		 <label>Deduction:</label>
		 <?php
		 $data = array(
		 	'name' => 'deduction',
		 	'id' => 'deduction',
		 	'type' => 'number',
		 	'placeholder' => 'Deduction',
		 	'class' => 'form-control',
		 	'readonly' => 'readonly',
		 	// 'value' => $key->actual_salary
		 	);
		 echo form_input($data);
		 ?>

		 <!--
		</div>
		 <div class="form-group">
		 <label>Additionals:</label>
		 <?php
		 $data = array(
		 	'name' => 'additional',
		 	'id' => 'additional',
		 	'type' => 'number',
		 	'placeholder' => 'Additionals',
		 	'class' => 'form-control',
		 	'readonly' => 'readonly',
		 	// 'value' => $reduced
		 	);
		 echo form_input($data);
		 ?>

		</div>
		 <div class="form-group">
		 <label>Leaves:</label>
		 <?php
		 $data = array(
		 	'name' => 'leaves',
		 	'id' => 'leaves',
		 	'type' => 'number',
		 	'placeholder' => 'Leaves',
		 	'class' => 'form-control',
		 	'readonly' => 'readonly',
		 	// 'value' => set_value('addition')
		 	);
		 echo form_input($data);
		 ?>
		-->
		</div>
		 <div class="form-group">
		 <label>Payable:</label>
		 <?php
		 $data = array(
		 	'name' => 'payable',
		 	'id' => 'payable',
		 	'type' => 'number',
		 	'placeholder' => 'Payable',
		 	'class' => 'form-control',
		 	'readonly' => 'readonly',
		 	);
		 echo form_input($data);
		 ?>
		</div>
		
		
		<div class="form-group">
			<label>Fine:</label>
			<?php
			$data=array(
				'name' => 'fine',
				'id' => 'fine',
				'type' => 'number',
				'class' => 'form-control',
				'placeholder' => 'Fine'
				);
			echo form_input($data);
			?>
			
		</div>
		<div class="form-group">
			<label>Performance:</label>
			<?php
			$data=array(
				'name' => 'performance',
				'id' => 'performance',
				'type' => 'number',
				'class' => 'form-control',
				'placeholder' => 'Performance'
				);
			echo form_input($data);
			?>
			
		</div>
		<div class="form-group">
			<label>Advance:</label>
			<?php
			$data=array(
				'name' => 'paid',
				'id' => 'paid',
				'type' => 'number',
				'class' => 'form-control',
				'placeholder' => 'Paid Salary'
				);
			echo form_input($data);
			?>

		</div>
		<div class="form-group">
			<label>Security:</label>
			<?php
			$data=array(
				'name' => 'security',
				'id' => 'security',
				'type' => 'number',
				'class' => 'form-control',
				'placeholder' => 'Security'
				);
			echo form_input($data);
			?>
			
		</div>
		<div class="form-group">
			<label>Tax:</label>
			<?php
			$data=array(
				'name' => 'tax',
				'id' => 'tax',
				'type' => 'number',
				'class' => 'form-control',
				'placeholder' => 'Tax'
				);
			echo form_input($data);
			?>
			
		</div>
		<button type="submit" class="btn btn-primary pull-right" style="margin: 30px 0 0 10px;">Submit</button>

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
			$("#abc").setvalue(id);
			doc.close();
		}
	);
}

function month(){
	var month = $("#getMonth").val();
	window.location.href = "<?php echo base_url('Salaryslip/salaryByMonth/');?>"+month;
	}

// SET VALUES IN MODAL
$('#pay-monthly').on('show.bs.modal', function(e) {
    var userid = $(e.relatedTarget).data('userid');
	//console.log(userid);console.log(userid);

    var [userid, firstname, lastname, date, actual_salary, deduction, finalSalary] = userid.split('/');
	var date1 = date.split('-');
	var date1 = date[1] + '/' + date[2] + '/' + date[0];
	
	//console.log(date);
	$("#userid").val(userid);
	$("#fname").val(firstname);
	$("#lname").val(lastname);
	$("#salaryMonth").val(date);
	$("#actual-salary").val(actual_salary);
	$("#deduction").val(deduction);
	$("#payable").val(finalSalary);
	
});
</script>
