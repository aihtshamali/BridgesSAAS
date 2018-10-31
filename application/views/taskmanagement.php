<DOCTYPE html>

	<html lang="en">

	<head>

		<meta charset="UTF-8">

		<title>Simple jQuery</title>
		<link rel="stylesheet" href="<?=base_url('assets/css/w3.css');?>">
	</head>

	<style type="text/css">

		.input-sm-h25{

			height: 25px !important;

		}

		.summaryInput{

			border: 0;

			background-color: transparent;

			padding: 0 !important;

			display: block;

			color: white;

			font-size:12px;

			font-weight: 600;

			width: 80%;

		}

		.summaryInput:focus{

			background-color: rgba(92, 184, 92, 0.31);

		}

		.pass{

			max-width: 95%;

			margin: 0 auto;

		}

		.pass-labels{

			margin-left: 12px;

		}

		.pass-button{

			margin-top: 10px;

			background-color: green;

			color: white;

			margin-left: 8px;

		}

		.modal-width{

			max-width: 45%;

			margin: 0 auto;

		}

		.delete_resources{

			color: gray; 

			font-size: 10px;

			/*margin: 0 auto;*/

			/*margin-top: 5px;*/

			cursor: pointer;

			top:-3px;

		}

		.del_activity{

			color: gray; 

			font-size: 10px;

			/*margin: 0 auto;*/

			margin-top: 5px;

			margin-right: 7px;

			cursor: pointer;	

		}

		.resource-icon-dot{

			color: #dbdbdb;

			font-size: 18px;

			cursor: pointer;

			margin-top: 3px;

		}

	</style>

	<header>

		<div class="row h-inherit flexbox custom-header">

			<div class="col-md-1 e-width flexbox flexbox2 bdr-white">

				<div class="logo-with-text relative">

					<img src="<?php echo base_url();?>assets/images/logo.png" class="header-logo">

					<span class="absolute header-logo-text"><?php echo $activityid; ?></span>

				</div>

			</div>

			<div class="wd-76 bdr-white flexbox h-inherit">

				<div class="col-md-2 pdt-10 gre-gry child-block e-width wd-16-6 text-right bdr-white">

					<span>Impact :</span>

					<span>Cluster - <?=$this->input->get('id')?> :</span>

					<span>Outcome - O :</span>

					<span>Outcome - S :</span>

				</div>

				<div class="child-block col-md-10 pdt-10" id="summary">

					<!--
					<div id="sumEdit" class="col-md-11">

						<span class="remove" id="impS"><?=$header->impact?></span>

						<span class="remove"><?=$header->clustername?></span>

						<span class="remove" id="outos"><?=$header->outcomeo?></span>

						<span class="remove" id="outss"><?=$header->outcomes?></span>

					</div>

					<div id="sumSave" class="col-md-10">

						<input type="text" class="pd-3by5 summaryInput" id="impactInput" placeholder="Impact" />

						<span><?=$header->clustername?></span>

						<input type="text" class="pd-3by5 summaryInput" id="outcomeOInput"  placeholder="Outcome - O"/>

						<input type="text" class="pd-3by5 summaryInput" id="outcomeSInput" placeholder="Outcome - S" />
						
						col-md-1
					</div>
				-->

				<?php
				$options = array();
				for($i=0; $i<count($clusterData); $i++)
					$options[$clusterData[$i]["id"]] = $clusterData[$i]["clustername"];
				?>

					<!--
					<span class="remove" style="display:block; float:left; width:70%;"><?= $options[$activityid] ?> </span>
				-->

				<div class="" style="width:70%; display:block; float:left;">

					<span style="" > Select cluster: </span>
					<?php 

							//REMOVE: This code is now dynamically allocated.
							/*
	          				$options = array(1 => "Operations",
					                        2 => "Accounts",
					                        3 => "HR",
					                        4 => "Outreach and Operations",
					                        5 => "Learning Management System");
	          				//var_dump($options); die(); */

					                        $classes = array('class' => 'form-control input-sm-h25 fs-11 padding-0',

					                        	'id' => 'selCluster',
					                        	'style' => "width:200px;"

					                        	);

					                        echo form_dropdown('effort', $options, $this->input->get('id'), $classes);

					                        ?>

				</div>
				<div class="" style="width:30%; display:block; float:left;">

                	<form method="POST" action="<?= base_url('taskmanagement/create_cluster'); ?>">
						<input style="width:70%; display:block; float:left;" type="text" class="form-control" name="clustername" placeholder="Add new cluster" required>
						<button style="background:#a7e6a7; width:15%; display:block; float:left; margin-left:7px" class="btn btn-info" type="submit"><i class="fa fa-plus" aria-hidden="true" style="color:#fff; 008000;a"></i></button>
					</form>
				</div>
					                </div>

					            </div>

					            <div class="e-width-1 col-md-1 gre-gry text-center padding-0 custom-header-icons" >

					            	<abbr title="Edit Profile" id="editSum"><i class="fa fa-pencil" onClick="summary()"></i></abbr>

					            	<abbr title="Print Document"><i class="fa fa-print"></i></abbr>

					            	<a style="color: white;" href="<?php echo base_url('user/logout'); ?>"><abbr title="Sign Out"><i class="fa fa-sign-out"></i></a></abbr>

					            	<i class="fa fa-key" data-toggle="modal" data-target="#myModal"></i>

					            </div>

					        </div>

					    </header>

					    <div>

					    	<!-- Modal -->

					    	<div class="modal fade " id="myModal" role="dialog">

					    		<div class="modal-dialog">



					    			<!-- Modal content-->

					    			<div class="modal-content modal-width">

					    				<div class="modal-header">

					    					<button type="button" class="close" data-dismiss="modal">&times;</button>

					    					<h3 class="modal-title">Change Password</h3>

					    				</div>

					    				<div class="modal-body">

					    					<p class="pass-labels">Old Password</p>

					    					<?php 

					    					$data = array(

					    						'name' => 'xpass1',

					    						'id' => 'xpass',

					    						'type' => 'password',

					    						'class' => 'form-control pass',						 		

					    						);

					    					echo form_input($data); 

					    					?>

					    					<p class="pass-labels">New Password</p>

					    					<?php

					    					$data = array(

					    						'name' => 'newpass',

					    						'id' => 'newpass',

					    						'type' => 'password',

					    						'class' => 'form-control pass',

					    						);

					    					echo form_input($data);

					    					?>

					    					<p class="pass-labels">Confirm Password</p>

					    					<?php 

					    					$data = array(

					    						'name' => 'repass',

					    						'id' => 'repass',

					    						'type' => 'password',

					    						'class' => 'form-control pass',

					    						);

					    					echo form_input($data);

					    					?>

					    					<button class="btn btn-default pass-button" type="submit" id="create_btn" onclick="getVal()">Submit</button>

					    				</div>

					    				<div class="modal-footer">

					    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

					    				</div>

					    			</div>



					    		</div>

					    	</div>



					    </div>

					    <div class="row">

					    	<div class="col-md-1"></div>

					    	<div class="col-md-2"></div>

					    	<div class="col-md-7"></div>

					    	<div class="col-md-2"></div>

					    </div>

					    <!-- Body Starts -->

					    <div class="" style="margin-top:-50px;">

					    	<!-- Salman -->

					    	<br/> <br/> <br/>
					    	<?php 		

					    	$counter=0; 

					    	$output1=2;

					    	$output2=3;

					    	$tools = 0;

					    	if(!$activities) {
					    		echo "<div class=\"customActivities drag\"></div>";
					    		echo "<button style=\"margin-left:10px\" class='btn' onclick=\"addAct()\"> Add first activity </button>";
					    	} 

					    	/*
					    	else {
					    		$isThereAnyTask=0;
					    		for($c=0; $c<count($activities); $c++)
					    			$isThereAnyTask += count($activities[$c]);

					    		if($isThereAnyTask==0) {
						    		echo "<div class=\"customActivities drag\"></div>";
						    		echo "<button style=\"margin-left:10px\" class='btn' onclick=\"addAct()\"> Add another activity </button> <br>";

						    		echo "<ul style=\"margin: 10px;\" class=\"list-group\">";
							    		for($x=0; $x<count($activity2); $x++){
						    				$temp =$activity2[$x]["title"];

						    				echo "<li class=\"list-group-item\"> $temp </li>";
							    		}
						    		echo "</ul>";

						    		echo "<button style=\"margin-left:10px\" class='btn' onClick=\"AddTask()\"> Add task </button>";
						    	}
					    	}
					    	*/
					    	foreach ($activities as $activity) 

					    		{ 
					    			//var_dump($activities); echo("<br/><br/>");
									//var_dump($activity2); die();
					    			//if(!$activity) continue;

					    			$zz=0; 	

					    			$taskcounter = 0;

					    			if ($counter%4==0) { ?>



					    				<div class="row no-row-padding bg-full-gry main-dv" style="margin-top:-5px;">

					    					<div class="col-md-2 output-div">

												

					    						<div class="tabs-dv fs-10 pull-right output2-div">Output - S

					    							<span class="action pull-left">

					    								<i class="fa fa-plus" aria-hidden="true"></i>



					    							</span>

					    						</div>

					    					</div>

					    					<!-- Add New Activities  -->

					    					<div class="customActivities drag"></div>

					    					<!-- End Add New Activities  -->

					    					<div class="col-md-2 output-div">

					    						<div class="tabs-dv fs-10 pull-right output2-div">Activities 

					    							<span class="action pull-left">

<!-- 						<i class="fa fa-plus" aria-hidden="true" data-toggle="modal" data-target="#addActivity"></i>

-->

<i class="fa fa-plus" aria-hidden="true" id="addActivity"></i>



</span>

</div>

</div>

<div class="col-md-6 task-process">

	<div class="tabs-dv fs-10 pull-right output2-div">

		<span class="action pull-left">

			<i class="fa fa-plus" aria-hidden="true" onClick="AddTask()"></i>



		</span>Task &amp; Process

	</div>

</div>

<div class="col-md-2 output-div">

	<div class="tabs-dv fs-10 pull-right resource-div"> Resources 

		<span class="action pull-left">

			<i class="fa fa-plus" id="resAddition"></i>



		</span>

	</div>

</div>

</div>

<?php

}

?>

<div class="row height-65 parent-for grandParent<?php echo $counter;?>">

	<?php 

	//print_r($counter);
	//$counter==1 || $counter==5 || $counter==9
	if($counter%4!=3 && $counter%2==1){

		?>


		<div class="col-md-1 e-width bdr-light pdr-0 relative" style="background: white;"><span class="absolute bg-full-gry fs-11 out-task" style="text-align: right; padding-right: 4px;">Outputs - O</span></div>

		<?php

					}/*elseif($counter==3){

						echo '<div class="col-md-1 e-width border-r pdr-0 relative" style="background: white;"><span class="absolute bg-full-gry out-task">Outputs - O</span></div>';

					}*/ else {

						echo '<div class="col-md-1 e-width border-r pdr-0 relative" style="background: white;"></div>';

					}
					?>

					<!-- Salman ends here -->

					<div class="col-md-10 padding-0" style="background: white;width:75%;">

						<div class="col-md-2 border-r fs-11 pdr-0" style="width:16.666%;height: 64px;">



					<?php
						$activity1id = $activity2[$counter]['id'];

						$activity1title = $activity2[$counter]['title'];

						print_r($activity2[$counter]['title']);
					?> 

				<i class="glyphicon glyphicon-remove pull-right del_activity"  id="del-activity" onclick="del_activity(<?= $activity1id ?>)"></i>

				<i class="fa fa-ellipsis-v pull-right salman-icon-dot" aria-hidden="true" data-toggle="modal" data-target="#editTaskPopup"  onClick="editTasks('<?php echo $activity1id ?>' ,'<?php echo $activity1title; ?>')"></i>

<span class="bg-full-gry emp-row"></span>



</div>

<div class="col-md-8 flexbox bdr-light" style=" width: 83.33%; padding:0;">



	<?php foreach ($activity as $details) {

							//echo "<pre>"; var_dump($details); exit; 



		if($zz < 5) {  ?>



			<div class="parent width-20 border-r">

				<div class="row">

					<div class="height-65">

						<div class="height-35 cluster-1 btrr-8 bg-light-gry">

							<i class="fa fa-ellipsis-v pull-right salman-icon-dot" aria-hidden="true"  onClick="editTaskPopup('<?= $details['task_id'] ?>','<?= $_GET['id'] ?>')"></i>

<a style="cursor: pointer;" class="small task-title block center" data-toggle="modal" data-target="#editTask" onClick="editTaskPopup('<?= $details['task_id'] ?>','<?= $_GET['id'] ?>')"><span class="task-title" style="font-weight:bold;"><?=$details['taskname']?></span><br><?=$details['taskdescription']?>

</a>

</div>

<div class="height-12 fs-10 cluster-2 bg-mid-gry flexbox center">



	<div class="child-box" style="color:<?php echo $this->taskmanagement_m->color_reverse($details['effort'] * 20); ?>"><?=$details['effort']?></div>

	<?php $x=1; $y=7; $na=array();



	$keys = array(0,1,2,3,4,5,6,7);

	$na = array_fill_keys($keys,' ');



	foreach ($details[0] as $member) { 

		if ($member['role'] == 'Team Leader') { 

			$na[0] = $member;

		} elseif($member['role'] == 'Team member') {

			$na[$x] = $member; 

			$x++;

		} else {

			$na[$y] = $member;

			$y--;

		} 

	}



	$z = 0;



	for ($i=0; $i < 8; $i++) { 

		if(is_array($na[$i])){



			if ($this->taskmanagement_m->check_comments($na[$i]['userid'], $na[$i]['taskid'])== '1') {

				echo '<div class="child-box bdr-light" style="color:#fff !important; background: #000; font-weight:700;"  data-toggle="tooltip" title="'.$na[$i]['firstname']." ".$na[$i]['lastname'].'"!">'.$na[$i]['initials'].'</div>';

			}

			elseif ($this->taskmanagement_m->check_comments($na[$i]['userid'], $na[$i]['taskid'])== '2') {

				echo '<div class="child-box bdr-light" style="color:#fff; background: blue; font-weight:700;"  data-toggle="tooltip" title="'.$na[$i]['firstname']." ".$na[$i]['lastname'].'"!">'.$na[$i]['initials'].'</div>';

			}

			elseif ($this->taskmanagement_m->check_comments($na[$i]['userid'], $na[$i]['taskid'])== '3') {

				echo '<div class="child-box bdr-light" style="color:blue; border: 1px solid blue; font-weight:700;"  data-toggle="tooltip" title="'.$na[$i]['firstname']." ".$na[$i]['lastname'].'"!">'.$na[$i]['initials'].'</div>';

			}

			elseif ($this->taskmanagement_m->check_comments($na[$i]['userid'], $na[$i]['taskid'])== '4') {

				echo '<div class="child-box bdr-light" style="color:blue; font-weight:700;"  data-toggle="tooltip" title="'.$na[$i]['firstname']." ".$na[$i]['lastname'].'"!">'.$na[$i]['initials'].'</div>';

			}

			elseif ($this->taskmanagement_m->check_comments($na[$i]['userid'], $na[$i]['taskid'])== '5') {

				echo '<div class="child-box bdr-light" style="color:grey; font-weight:700;"  data-toggle="tooltip" title="'.$na[$i]['firstname']." ".$na[$i]['lastname'].'"!">'.$na[$i]['initials'].'</div>';

			}





			//$rating = $this->taskmanagement_m->get_assigned_tasks_percentage($na[$i]['taskid'], $na[$i]['userid'], $na[$i]['role']);

		} 

		else

			echo '<div class="child-box"> </div>';

	} ?>

</div>

<div class="height-18 center cluster-3 bg-full-gry flexbox">

	<div class="child-box bblr-8 relative">
		<span class="sub-child-box" style="background-color: red;"></span>
		
		<span class="sub-child-box" style="background-color: <?=$this->taskmanagement_m->rating_percen($details['task_id']);?>"></span>
	</div>

	<?php 						

	for ($i=0; $i < 8; $i++) {
		if(is_array($na[$i])) {



			$rating = $this->taskmanagement_m->get_assigned_tasks_percentage_extended($na[$i]['taskid'], $na[$i]['userid']);



			echo "<div class='child-box'><div id='custom-bars'><span value='1' style='background: ".((isset($rating[1])) ? $rating[1] : '#b2aeae' ).";height: 3px;width: 14px;'></span>";

			echo "<span value='12' style='background: ".((isset($rating[0])) ? $rating[0] : '#b2aeae' ).";height: 3px;width: 14px;'></span>";

			if(isset($rating[2])) {

				echo "<span value='13' style='background: ".((isset($rating[2])) ? $rating[2] : '#b2aeae' ).";height: 3px;width: 14px;'></span></div></div>";

			} else {

				echo "</div></div>";

			}



		} 



		else

			echo '<div class="child-box"> </div>';

	} 

	?>



	<?php									

	$diff = date_diff(date_create(date('Y-m-d')), date_create($details['enddate']));



	$diff1 = date_diff(date_create(date('Y-m-d')), date_create($details['startdate']));

	$diff2 = date_diff( date_create($details['startdate']), date_create($details['enddate']));

	if ($details['enddate'] == 0000-00-00 || $details['ongoing'] == 1) {

		$y = 200;

		$daysleft = '&infin;';

	} else {

		$diff1 = $diff1->format("%r%a");

		$diff2 = $diff2->format("%r%a");

		$y = $diff2 + $diff1;



		$y = ($y / $diff2) * 100;

		$daysleft = $diff->format("%r%a"); }

		?>

		<div class="fs-11 child-box" >



			<?php if ($details['taskstatus']=='Completed') {

				echo '<span class="sub-child-box">';

				echo '<i class="fa fa-check" style="color:green" aria-hidden="true"></i>';

			} elseif ($details['taskstatus']=='Incomplete'){

				echo '<span class="sub-child-box">';

				echo '<i class="fa  fa-times" style="color:red" aria-hidden="true"></i>';

			} else {

				echo '<span class="sub-child-box" style="background-color:'.$this->taskmanagement_m->color($y).'; color:white; font-weight:bold;">'.$daysleft.'</span>';

														//echo $daysleft;

			}?>



		</div>

	</div>

</div>	

</div>



</div>

<?php  } else { 

	if($zz ==5) {  echo '<div class="moreTask" id="moreTask'.$counter.'" style="background-color:white;">'; } ?>

	<div class="parent width-20 border-r">

		<div class="row">

			<div class="height-65">

				<div class="height-35 cluster-1 btrr-8 bg-light-gry">

					<i class="fa fa-ellipsis-v pull-right salman-icon-dot" aria-hidden="true"  onClick="editTaskPopup('<?= $details['task_id'] ?>', '<?= $_GET['id'] ?>' )"></i>



<a style="cursor: pointer;" class="small task-title block center" data-toggle="modal" data-target="#editTask" onClick="editTaskPopup('<?= $details['task_id'] ?>', '<?= $_GET['id'] ?>' )"><b class="task-title" style="font-weight:bold;"><?=$details['taskname']?></b><br><?=$details['taskdescription']?>

</a>

</div>

<div class="height-12 fs-10 cluster-2 bg-mid-gry flexbox center">

	<div class="child-box"></div>

	<?php $x=1; $y=7; $na=array();



	$keys = array(0,1,2,3,4,5,6,7);

	$na = array_fill_keys($keys,' ');



	foreach ($details[0] as $member) { 

		if ($member['role'] == 'Team Leader') { 

			$na[0] = $member;

		} elseif($member['role'] == 'Team member') {

			$na[$x] = $member; 

			$x++;

		} else {

			$na[$y] = $member;

			$y--;

		} 

	}



	$z = 0;



	for ($i=0; $i < 8; $i++) { 

		if(is_array($na[$i])){



			if ($this->taskmanagement_m->check_comments($na[$i]['userid'], $na[$i]['taskid'])== '1') {

				echo '<div class="child-box bdr-light" style="color:#fff !important; background: #000; font-weight:700;"  data-toggle="tooltip" title="'.$na[$i]['firstname']." ".$na[$i]['lastname'].'"!">'.$na[$i]['initials'].'</div>';

			}

			elseif ($this->taskmanagement_m->check_comments($na[$i]['userid'], $na[$i]['taskid'])== '2') {

				echo '<div class="child-box bdr-light" style="color:#fff; background: blue; font-weight:700;"  data-toggle="tooltip" title="'.$na[$i]['firstname']." ".$na[$i]['lastname'].'"!">'.$na[$i]['initials'].'</div>';

			}

			elseif ($this->taskmanagement_m->check_comments($na[$i]['userid'], $na[$i]['taskid'])== '3') {

				echo '<div class="child-box bdr-light" style="color:blue; border: 1px solid blue; font-weight:700;"  data-toggle="tooltip" title="'.$na[$i]['firstname']." ".$na[$i]['lastname'].'"!">'.$na[$i]['initials'].'</div>';

			}

			elseif ($this->taskmanagement_m->check_comments($na[$i]['userid'], $na[$i]['taskid'])== '4') {

				echo '<div class="child-box bdr-light" style="color:blue; font-weight:700;"  data-toggle="tooltip" title="'.$na[$i]['firstname']." ".$na[$i]['lastname'].'"!">'.$na[$i]['initials'].'</div>';

			}

			elseif ($this->taskmanagement_m->check_comments($na[$i]['userid'], $na[$i]['taskid'])== '5') {

				echo '<div class="child-box bdr-light" style="color:grey; font-weight:700;"  data-toggle="tooltip" title="'.$na[$i]['firstname']." ".$na[$i]['lastname'].'"!">'.$na[$i]['initials'].'</div>';

			}





			//$rating = $this->taskmanagement_m->get_assigned_tasks_percentage($na[$i]['taskid'], $na[$i]['userid'], $na[$i]['role']);

		} 

		else

			echo '<div class="child-box"> </div>';

	} ?>





</div>





<div class="height-18 center cluster-3 bg-full-gry flexbox">

	<div class="child-box bblr-8 relative">
		
		<span class="sub-child-box" style="background-color: <?=$this->taskmanagement_m->rating_percen($details['task_id']);?>"></span>

	</div>

	<?php 									

	for ($i=0; $i < 8; $i++) { 

		if(is_array($na[$i])){ 

			$rating = $this->taskmanagement_m->get_assigned_tasks_percentage_extended($na[$i]['taskid'], $na[$i]['userid']);



			echo "<div class='child-box'><div id='custom-bars'><span value='1' style='background: ".((isset($rating[1])) ? $rating[1] : '#b2aeae' ).";height: 3px;width: 14px;'></span>";

			echo "<span value='12' style='background: ".((isset($rating[0])) ? $rating[0] : '#b2aeae' ).";height: 3px;width: 14px;'></span>";

			if(isset($rating[2])) {

				echo "<span value='13' style='background: ".((isset($rating[2])) ? $rating[2] : '#b2aeae' ).";height: 3px;width: 14px;'></span></div></div>";

			} else {

				echo "</div></div>";

			}

		} 



		else

			echo '<div class="child-box"> </div>';

	} 

	?>

	<?php



	$diff = date_diff(date_create(date('Y-m-d')), date_create($details['enddate']));



	$diff1 = date_diff(date_create(date('Y-m-d')), date_create($details['startdate']));

	$diff2 = date_diff( date_create($details['startdate']), date_create($details['enddate']));

	if ($details['enddate'] == 0000-00-00 ) {

		$y = 200;

		$daysleft = '&infin;';

	} else {

		$diff1 = $diff1->format("%r%a");

		$diff2 = $diff2->format("%r%a");

		$y = $diff2 + $diff1;

		if ($diff2 != 0) {

			$y = ($y / $diff2) * 100;

		}

		$daysleft = $diff->format("%r%a");

	}

	?>

	<div class="fs-11 child-box" >



		<?php if ($details['taskstatus']=='Completed') {

			echo '<span class="sub-child-box">';

			echo '<i class="fa fa-check" style="color:green" aria-hidden="true"></i>';

		} elseif ($details['taskstatus']=='Incomplete'){

			echo '<span class="sub-child-box">';

			echo '<i class="fa  fa-times" style="color:red" aria-hidden="true"></i>';

		} else {

			echo '<span class="sub-child-box" style="background-color:'.$this->taskmanagement_m->color($y).'; color:white; font-weight:bold;">';

			echo $daysleft;

		}?>

	</span></div>

</div>

</div>	

</div>

</div>

<?php } ?>

<!--/ More task div -->

<?php  $zz++; } if ($zz == count($activity) && $zz>5) {

	echo '</div>';

}?>





</div><!-- task-div end -->



				<!-- <span class="action pull-right">

					<i class="fa fa-arrow-down" aria-hidden="true"></i>

				</span> -->

			</div>



			









			<div class="col-md-1 e-width pdl-0" style="background: white;display: flex;">

				<div class="border-r"  style="width: 9%;padding: 1px;height: 100%;line-height: 70px;font-size:10px;background-color: #f0f0f0; "><i class="fa fa-arrow-down" id="showMore-arrow<?php echo $counter;?>" aria-hidden="true" onclick="showMore(<?php echo $counter;?>)" style="<?php if($zz < 6) echo 'display:none !important'; ?>"></i></div>

				<?php

				if($counter == '0'){

					echo '<div class="custom-resources drag"></div>';

				}

				?>

<!-- 

	<input type="hidden" name="delete_resources" id="delete_resources" value="<?php echo $bm_tools[$counter]['toolid']; ?>" > -->



	<!-- <div class="custom-resources drag"></div> -->

	<div style="width: 100%;">

		<?php if (isset($bm_tools[$tools])) { 

			for ($i=0; $i <4 ; $i++) { 

				if (!isset($bm_tools[$tools])) {

					break;

				}

				?>

				<div style="display:flex; height: 17px;">

					<a class="fs-11" style="color: green; margin-left:5px; width:85%; " href="<?php echo prep_url($bm_tools[$tools]['link']);?> " target='_blank'> <?php echo $bm_tools[$tools]['title']; ?></a>

					<span class="pull-right" style="width:15%;">

						<i class="fa fa-ellipsis-v  resource-icon-dot" aria-hidden="true" data-toggle="modal" data-target="#editResources" onclick="editResources('<?= $bm_tools[$tools]['toolid']?>','<?= $bm_tools[$tools]['title']?>','<?= $bm_tools[$tools]['link']?>')"></i>

						<i class="glyphicon glyphicon-remove delete_resources"  id="delete_resources" 	onclick="delete_resources(<?=$bm_tools[$tools]['toolid']?>)" ></i> 

					</span>

				</div>

				<?php $tools++; }

			} ?> 

		</div>

		<!-- '<?php //echo $activity0id; ?>','<?php //echo $activity0title; ?>'		   -->

	</div>			 	



	<!-- editTask popup window starts -->



	<div class="modal fade" id="editTaskPopup" role="dialog">

		<div class="modal-dialog custom-modal-set">





			<div class="modal-content">

				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<h4 class="modal-title">Edit Task</h4>

				</div>

				<div class="modal-body">

					<form action="<?= base_url('taskmanagement/editBmTaskPopup'); ?>" accept-charset="utf-8" id="theForm" method="post">

						<div class="row">

							<div class="col-md-10">

								<div class="form-group">

									<br>

									<!-- <label>Activity Title:</label> -->

									<input type="hidden" class="form-control" id="editTaskclusterId" name="editTaskclusterId" value="<?= $_GET["id"] ?>" >

									<input type="hidden" class="form-control" id="bmTaskId" name="bmTaskId" value="" >

									<input type="text" class="form-control" id="taskTitle" name="taskTitle" placeholder="Task Title" required>

								</div>

							</div>

						</div><br>



						<div class="modal-footer">

							<button class="btn btn-info" type="submit" id="target">Update Task</button>

						</div>

					</form> 

				</div>

			</div>

		</div>

	</div> 



</div>

<?php

$counter++;

$output2=$output2+3;

}

?>



</div>



<div class="addTask-div drag"></div>

<div class="editTask-div drag"></div>



<!-- editResources popup window starts -->



<div class="modal fade" id="editResources" role="dialog">

	<div class="modal-dialog custom-modal-set">





		<div class="modal-content">

			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal">&times;</button>

				<h4 class="modal-title">Edit Resources</h4>

			</div>

			<div class="modal-body">

				<form action="<?= base_url('taskmanagement/editResources'); ?>" accept-charset="utf-8" id="theForm" method="post">

					<div class="row">

						<div class="col-md-10">

							<div class="form-group">

								<br>

								<input type="hidden" name="id" value="<?php echo $this->input->get('id'); ?>">

								<input type="hidden" class="form-control" id="toolid" name="toolid" value="" >

								<input type="text" class="form-control" id="title" name="title" value="" 

								placeholder="Title">

								<input type="text" class="form-control" name="link" id="link" value="" 

								placeholder="link">

							</div>

						</div>

					</div><br>



					<div class="modal-footer">

						<button class="btn btn-info" type="submit" id="target">Update Resource</button>

					</div>

				</form> 

			</div>

		</div>

	</div>

</div>

<script type="text/javascript">

	$(document).ready(function(){

		// tooltip for full name

		$('[data-toggle="tooltip"]').tooltip(); 



		$("#sumSave").hide();

	});



//for add task

function AddTask()

{ 

	var clusterid = <?php echo $this->input->get('id'); ?> ;



	$.post("<?php echo base_url();?>"+"taskmanagement/addTask?id="+"<?php echo $this->input->get('id');?>",

		function( response ){

			$(".addTask-div").html(response);

			$(".addTask-div").css('visibility','visible');

			$("body, html").animate({ 

				scrollTop: $(".addTask-div").offset().top 

			}, 600);



			if (clusterid == '1') {

				$("#cluster-1").css('box-shadow','inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(92,184,92,1)');

			};

			if (clusterid == '2') {

				$("#cluster-2").css('box-shadow','inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(92,184,92,1)');

			};

			if (clusterid == '3') {

				$("#cluster-3").css('box-shadow','inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(92,184,92,1)');

			};

			if (clusterid == '4') {

				$("#cluster-4").css('box-shadow','inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(92,184,92,1)');

			};

			if (clusterid == '5') {

				$("#cluster-5").css('box-shadow','inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(92,184,92,1)');

			};

		});



}

  //for add task



  //for edit task

  function editTasks(id,title)

  {

  	$("#bmTaskId").val(id);

  	$("#taskTitle").val(title);

  }



  $(".moreTask").hide();



  function showMore(cnt){

  	$("#showMore-arrow"+cnt).removeClass("fa-arrow-down");

  	$("#showMore-arrow"+cnt).addClass("fa-arrow-up");

  	var parent_height= $("#showMore-arrow"+cnt).parent().height();

  	var aheight = parseInt(parent_height)*parseInt(cnt+1);

  	$("#moreTask"+cnt).css('top', parent_height+2);

  	$(".grandParent"+cnt).animate({ marginBottom: '141px'}, 800);

  	setTimeout( function(){ 

  		$("#moreTask"+cnt).show();

  		$("#moreTask"+cnt).css('opacity','1.0');

  	}  , 700 );

  	$("#showMore-arrow"+cnt).attr("onclick","goBack("+cnt+")");



  }



  function goBack(cnt){

  	$("#showMore-arrow"+cnt).removeClass("fa-arrow-up");

  	$("#showMore-arrow"+cnt).addClass("fa-arrow-down");

  	$(".grandParent"+cnt).animate({ marginBottom: '4px'}, 800);

  	setTimeout( function(){ 

  		$(".moreTask").hide();

  	}  , 200 );

  	$("#showMore-arrow"+cnt).attr("onclick","showMore("+cnt+")");



  }



  //for edit task

	addAct= function() {
	  	$(".customActivities").html('<form action="<?= base_url('taskmanagement/addActivity'); ?>" accept-charset="utf-8" id="theForm" method="post"><div class="row fs-11"><div class="col-md-12"><div class="form-group"><label>Activity Title:</label><span class="close pull-right" data-dismiss="modal" onClick="hide_addActivity()">x</span><input type="text" class="form-control input-sm-h25 fs-11 padding-0" id="activityTitle" name="activityTitle" placeholder="Activity Title" required> <input type="hidden" name="clusterid" value="<?= $this->input->get("id")?>"><button class="btn btn-slim pull-right" type="submit" id="target">Add Activity</button></div></div></div></form>');

	  	$( ".customActivities" ).css({'visibility':'visible','z-index':'999','width':'12.5%','height':'6.24%','background-color':'white','left':'168px','top':'90px'});

	 		// $( "body" ).on('click','#addActivity');
	}

  $("#addActivity").click(function() {
  	addAct();
  });



  $("#selCluster").on('change', function()

  {

  	window.location.replace('<?php echo base_url();?>index.php/taskmanagement/taskmanager/?id='+this.value);

  }

  );



  function hide_addActivity(){

  	$( ".customActivities" ).html("");

  	$( ".customActivities" ).css('visibility','hidden');

  }

  function summary(){

  	$("#summary").find('.remove').hide();



  	var impact = $("#impS").text();

  	var oco = $("#outos").text();

  	var ocs = $("#outss").text();



  	$("#sumSave").show();



  	$("#impactInput").val(impact);

  	$("#outcomeOInput").val(oco);

  	$("#outcomeSInput").val(ocs);

  	$("#editSum").html('<i class="fa fa-floppy-o" aria-hidden="true" onClick="saveSummary()"></i>');



  }



  function saveSummary(){

  	var impact = $("#impactInput").val();

  	var oco = $("#outcomeOInput").val();

  	var ocs = $("#outcomeSInput").val();

  	var  clusterid = <?=$this->input->get('id')?>;

  	$.post("update_header",

  	{

  		impact:impact,

  		outcomeo:oco,

  		outcomes:ocs,

  		clusterid:clusterid

  	},

  	function(response){

  		$("#editSum").html('<i class="fa fa-pencil" onClick="summary()"></i>');

  		$("#impS").text(impact);

  		$("#outos").text(oco);

  		$("#outss").text(ocs);

  		$("#sumSave").hide();

  		$("#summary").find('.remove').show();

  	}

  	);

  }

</script>

<script type="text/javascript">

	function getVal(){

		var xpass = $('#xpass').val();

		var newpass = $('#newpass').val();

		var repass = $('#repass').val();

		if (newpass==repass) {

			$.post("<?php echo base_url();?>/user/pass_change_values",

				{ xpass:xpass, newpass:newpass, repass:repass },

				function(data){

					alert(data);

				}

				);

		}

		else{

			alert('Password fields mismatch!');

		}  

	}

  // getVal End



  function delete_resources(toolid){

  	var r=confirm("Do you want to delete this?")

  	if (r==true){

  		$.post("<?php echo base_url();?>taskmanagement/delete_resources",

  			{ toolid:toolid},

  			function(data){

  				if(data == 1){

  					document.location.reload();

  				}

  				else{

  					//alert(data);

  				}

  			}



  			);

  	}

  	else{

  		return false;

  	}

  }



  function del_activity(activityid){

  	var r=confirm("Do you want to delete this?")

  	if (r==true){

  		$.post("<?php echo base_url();?>taskmanagement/del_activity",

  			{ activityid:activityid},

  			function(data){

  				if(data == 1){

  					document.location.reload();

  				}

  				else{

  					//'Please delete your tasks first'
  					//alert(data);

  				}

  			}



  			);

  	}

  	else{

  		return false;

  	}

  }





  function editResources(toolid,title,link){

  	$("#toolid").val(toolid);

  	$("#title").val(title);

  	$("#link").val(link);

  	

  }

</script>

