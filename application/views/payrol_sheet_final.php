<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 
	<title>Payroll Sheet Final</title>
	<!-- <link rel="stylesheet" type="text/css" href="<php echo base_url();?>assets/emp_profile/css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/emp_profile/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	

	<!-- <link rel="stylesheet" type="text/css" media="all" href="<php echo base_url();?>assets/emp_profile/css/styles.css"> -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/emp_profile/tablesort/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/emp_profile/tablesort/js/jquery.tablesorter.min.js"></script>


	<style type="text/css" >
		.mp-0{
			margin:0px !important;
			padding: 0px !important;
		}
		td{
			padding: 0px !important;
			font-size: 14px;
		}
		th{
			padding-left: 0px !important;
			font-size: 14px;
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
			font-size: 14px;
		}
		th{
			padding-left: 0px !important;
			font-size: 14px;
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
	}
	</style>
</head>
<body>
<div class="">
	<div class="col-sm-12 text-center">
      <div class="heading" >
       <img class="logo" class="pull-left" style="height:30px;width:30px" src="<?= base_url($this->SharedModel->getProjectInfo()->logo);?>" >
       Bridges Employee Payroll Sheet
       <div style="margin-left:20px">
          <label>Date</label>: <strong class="text-success"><?php echo date('d-m-Y'); ?></strong>  
          <!--<button type="button" class="btn btn-default btn-md text-success"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></button>--> 
       </div>
     </div>
     <div class="col-sm-12 text-center">
     </div>

   </div>
	<table id="myTable" class="table table-responsive">
		<thead>
		
		<tr class="border">
			<th  align="center" data-sorter="false">Serial</th>
			<th  align="center">Employee Name</th>
			<th  align="center">Title</th>
			<th  align="center">Level</th>
			<th  align="center">Project</th>
			<th  align="center">Grade</th>
			<th  align="center" style="width:60px; ">Expe</th>
			<th  align="center">Actual Salary</th>
			<th  align="center">Salary Deductions</th>
			<th id="add" align="center">Additions</th>
			<th id="add" align="center">Monetized</th>
			<th  align="center">Payable</th>
			
		</tr>
		</thead>
		<tbody>

		<?php
			$total_salary_full=0;
			$total_actual_salary_full=0;
			$total_salary_school=0;
			$total_salary_Juniorschool=0;
			$total_salary_Juniorschool_add=0;
			$total_actual_salary_junior_school = 0;
			$total_deduction_Juniorschool = 0;
			$total_salary_analytics=0;
			$total_salary_consortium=0;
			$additional_tolal =0;
			$total_salary_school_add=0;
			$total_salary_consortium_add=0;
			$total_salary_analytics_add=0;
			$total_deduction_school = 0;
			$total_deduction_analytics = 0;
			$total_deduction_consortium = 0;
			$total_actual_salary_full_school = 0;
			$total_actual_salary_full_analytics = 0;
			$total_actual_salary_full_consortium = 0;
			$total_monetized=0;
			$counter = 0;
			$total_salary =0; $total_deduction = 0; $total_gross = 0;?>

		<?php  $i=1;foreach ($attendance_sheet as $value) :

		if($value->actual_salary=="")
			continue;
		
		$after_monetized=0;

		?>

				<!-- <php 	echo'<pre>';print_r($value);  ?> -->

 		<!-- <php $redund=$value->project_title; ?> -->
		<tr id="inc">
			<td data-sorter="false" ><?php  echo $i;?> <?php // echo $value->userid;?></td>
			<td class="text-capitalize"><?php echo $value->fname?> <?php echo $value->lname?></td>
			<td><?php echo strip_tags($value->job_title);?></td>
			<td><?php echo $value->level_name;?></td>
			<td><?php echo $value->project_title;?></td>
			<td><?php echo $value->add_on_1;?></td>
			<td><?php echo $value->add_on_2;?></td>

			<td>
				<?php 
					echo $value->actual_salary;
					$total_actual_salary_full = $total_actual_salary_full +$value->actual_salary;
					?>
					
				</td>

			<td style="text-align: left;">
				<?php //echo $value->deduction;?> 
				<?php $d = date("Y-m-t", strtotime("-1 months"));
		             $date=@explode("-", $d);
		             $maxDays=$date[2]; 
		             $perdaySalary = $value->actual_salary/$maxDays; 
		             $reduced = intval($deduction[$value->userid]*$perdaySalary);
		             if($value->hired_for_project==2){
		             	//$reduced +=1000;
		             }

		             // CALCULATING MONETIZED
					if(isset($monetized)){ if(isset($monetized[$value->userid])) {
						$after_monetized = intval($monetized[$value->userid]*$perdaySalary);
					} else $after_monetized=0;} else $after_monetized=0;

					$total_monetized+=$after_monetized;
		             
		             echo 'Rs.'.$reduced;
		             $total_deduction += $reduced; 

		             if (!strcmp($value->project_title,'The Bridges School') && strcmp($value->project_title,'Bridges Consortium') &&
							strcmp($value->project_title,'Bridges Analytics') ) {
						 if(intval($value->level_name)>3 ){
						 $total_deduction_school =$total_deduction_school + $reduced;
						 $total_actual_salary_full_school =$total_actual_salary_full_school + $value->actual_salary;
						 $total_salary_school =$total_salary_school + ($value->actual_salary-$reduced+$after_monetized);
						}
						else{
							$total_deduction_Juniorschool =$total_deduction_Juniorschool + intval($deduction[$value->userid]*$perdaySalary);
							// echo ' -'.$total_deduction_Juniorschool;
						    $total_actual_salary_junior_school =$total_actual_salary_junior_school + $value->actual_salary;
							// echo ' -'.$total_actual_salary_junior_school;

						 $total_salary_Juniorschool =$total_salary_Juniorschool + ($value->actual_salary-intval($deduction[$value->userid]*$perdaySalary))+$after_monetized;
							// echo ' -'.$total_salary_Juniorschool;

						}
					}
						if ( strcmp($value->project_title,'The Bridges School') && !strcmp($value->project_title,'Bridges Consortium') &&
							strcmp($value->project_title,'Bridges Analytics')  ) {
						 $total_deduction_consortium =$total_deduction_consortium + $reduced;
						 $total_actual_salary_full_consortium =$total_actual_salary_full_consortium + $value->actual_salary;
						 $total_salary_consortium =$total_salary_consortium + ($value->actual_salary-$reduced)+$after_monetized;


						}
						if ( strcmp($value->project_title,'The Bridges School') && strcmp($value->project_title,'Bridges Consortium') &&
							!strcmp($value->project_title,'Bridges Analytics') ) {
						 $total_deduction_analytics =$total_deduction_analytics + $reduced;
						 $total_actual_salary_full_analytics =$total_actual_salary_full_analytics + $value->actual_salary;
						 $total_salary_analytics =$total_salary_analytics + ($value->actual_salary-$reduced)+$after_monetized;


						}




		             ?> 
				 <?php // print_r($deduction[$value->userid]);?> 
			</td>
			<td>
				<?php $additional_val= $additional[$value->userid]->amount;
					if($additional_val){
						// echo "string"; 
						if (!strcmp($value->project_title,'The Bridges School') && strcmp($value->project_title,'Bridges Consortium') &&
							strcmp($value->project_title,'Bridges Analytics') ) {
							if(intval($value->level_name)>3)
						 		$total_salary_school_add =$total_salary_school_add + $additional_val;
						 	else
						 		$total_salary_Juniorschool_add = $total_salary_Juniorschool_add + $additional_val;
						}
						if ( strcmp($value->project_title,'The Bridges School') && !strcmp($value->project_title,'Bridges Consortium') &&
							strcmp($value->project_title,'Bridges Analytics')  ) {
						 $total_salary_consortium_add =$total_salary_consortium_add + $additional_val;

						}
						if ( strcmp($value->project_title,'The Bridges School') && strcmp($value->project_title,'Bridges Consortium') &&
							!strcmp($value->project_title,'Bridges Analytics') ) {
						 $total_salary_analytics_add =$total_salary_analytics_add + $additional_val;

						}
						echo 'Rs.'.$additional_val;
					}
					else{
						echo 'Rs.'."0";
					}
					$additional_tolal = $additional_tolal + $additional_val;
				?>
				
			</td>
			<td>
				<?php   
					echo $after_monetized;
						 ?>
			</td>
			<td>
				<?php echo 'Rs.'.($value->actual_salary-$reduced+$after_monetized);?>
				<?php $total_salary_full=$total_salary_full+($value->actual_salary-$reduced)+$after_monetized;

				?>
			</td>
			
		</tr>
		<?php $i++; endforeach;?>
		</tbody>
			<thead>
				<tr class="{ sorter: false }">
					<th class="empty"></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th><?php echo $total_actual_salary_full; ?></th>
					<th><?php echo $total_deduction; ?> </th>
					<th> <?php echo $additional_tolal;?></th>
					<th> <?php echo $total_monetized; ?> </th>
					<th><?php echo $total_salary_full; ?></th>
				</tr>
				<tr class="{ sorter: false }">
					<th class="empty"></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th style="width: 98px;" >School Staff</th>
					<th><?php echo $total_actual_salary_full_school; ?></th>
					<th><?php echo $total_deduction_school; ?> </th>
					<th> <?php echo $total_salary_school_add;?></th>
					<th> </th>
					<th><?php echo $total_salary_school; ?></th>
				</tr>
				<tr class="{ sorter: false }">
					<th class="empty"></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th>School Crew</th>
					<th><?php echo $total_actual_salary_junior_school; ?></th>
					<th><?php echo $total_deduction_Juniorschool; ?> </th>
					<th> <?php echo $total_salary_Juniorschool_add;?></th>
					<th> </th>
					<th><?php echo $total_salary_Juniorschool; ?></th>
				</tr>
				<tr class="{ sorter: false }">
					<th class="empty"></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th>Consortium</th>
					<th><?php echo $total_actual_salary_full_consortium; ?></th>
					<th><?php echo $total_deduction_analytics; ?> </th>
					<th><?php echo $total_salary_consortium_add;?></th>
					<th> </th>
					<th><?php echo $total_salary_consortium; ?></th>
				</tr>
				<tr class="{ sorter: false }">
					<th class="empty"></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th>Analytics</th>
					<th><?php echo $total_actual_salary_full_analytics; ?></th>
					<th><?php echo $total_deduction_analytics; ?> </th>
					<th> <?php echo $total_salary_analytics_add;?></th>
					<th> </th>
					<th><?php echo $total_salary_analytics; ?></th>
				</tr>
			</thead>
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
		   $('.empty').html(' ');
		}); 

    });
	 $('#add').on('click',  function() {
	 	window.open('<?php echo base_url();?>salaryslip/Additional');
	 });
</script>


</body>
</html>