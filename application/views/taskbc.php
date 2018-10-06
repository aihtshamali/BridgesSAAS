<?php //var_dump($tasks) ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple jQuery</title>
	

  

   

</head>
<style type="text/css">

</style>
<header>
		<div class="row h-inherit flexbox custom-header">
			
	<div class="addTask-div drag"></div>
	<div class="editTask-div drag"></div>
			<div class="col-md-1 e-width flexbox flexbox2 bdr-white">
				<div class="logo-with-text relative">
					<img src="<?php echo base_url();?>assets/images/logo.png" class="header-logo">
					<span class="absolute header-logo-text"><?php echo $activityid; ?></span>
				</div>
			</div>
			<div class="wd-76 bdr-white flexbox h-inherit">
				<div class="col-md-2 pdt-10 gre-gry child-block e-width wd-16-6 text-right bdr-white">
					<span>Impact :</span>
					<span>Cluster - 5 :</span>
					<span>Outcome - S :</span>
					<span>Outcome - S :</span>
				</div>
				<div class="child-block pdt-10 col-md-10">
					<span>Impact of Performance Cluster Goes Here</span>
					<span>Cluster name Goes here</span>
					<span>Lorum ipsum dolor sit amet.</span>
					<span>Lorum ipsum dolor sit amet.</span>
				</div>
			</div>
			<div class="e-width-1 col-md-1 gre-gry text-center padding-0 custom-header-icons" >
				<abbr title="Edit Profile"><i class="fa fa-pencil"></i></abbr>
				<abbr title="Print Document"><i class="fa fa-print"></i></abbr>
				<a style="color: white;" href="<?php echo base_url('user/logout'); ?>"><abbr title="Sign Out"><i class="fa fa-sign-out"></i></a></abbr>
			</div>
		</div>
</header>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-2"></div>
		<div class="col-md-7"></div>
		<div class="col-md-2"></div>
	</div>
<!-- Body Starts -->
<div class="" style="margin-top:-50px;">
		<!-- Salman -->
		<?php 		
					$counter=0; 
					$output1=2;
					$output2=3;
					foreach ($activities as $activity) 
		{ 
			//var_dump($activity); 
			if ($counter%4==0) { ?>
			
			<div class="row no-row-padding bg-full-gry main-dv">
			<div class="col-md-2 output-div">
				<div class="tabs-dv fs-10 pull-right output2-div">Output - S
					<span class="action pull-left">
						<i class="fa fa-plus" aria-hidden="true"></i>
						
					</span>
				</div>
			</div>
			<div class="col-md-2 output-div">
				<div class="tabs-dv fs-10 pull-right output2-div">Activities 
					<span class="action pull-left">
						<i class="fa fa-plus" aria-hidden="true" data-toggle="modal" data-target="#addActivity"></i>
						
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
				<div class="tabs-dv fs-10 pull-right resource-div">&nbsp Resources 
				<span class="action pull-left">
					<span class="fa fa-plus" id="resAddition"></span>
						
					</span>
				</div>
			</div>
			</div>
		<?php
			}
			?>
		<div class="row height-65 parent-for">
					<?php 
					if($counter==1){
					?>
					<div class="col-md-1 e-width bdr-light pdr-0 relative" style="background: white;"><span class="absolute bg-full-gry out-task" style="text-align: left;">Outputs - O</span></div>
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
				<i class="fa fa-ellipsis-v pull-right salman-icon-dot" aria-hidden="true"  onClick="editTask('sssss','1')"></i>
					<?php if(!empty($activity['0']))
						echo $activity['0']['title']; ?>

						<span class="bg-full-gry emp-row"></span>
					
				</div>
				<div class="col-md-8 flexbox bdr-light" style=" width: 83.33%; padding:0;">
				
							<?php foreach ($activity as $details) { ?>				
					<div class="parent width-20 border-r">
						<div class="row">
								<div class="height-65">
								<div class="height-35 cluster-1 btrr-8 bg-light-gry">
									<i class="fa fa-ellipsis-v pull-right salman-icon-dot" aria-hidden="true"  onClick="editTaskPopup('<?= $details['task_id'] ?>', '<?= $_GET['id'] ?>' )"></i>

									<a style="cursor: pointer;" class="small task-title block center" data-toggle="modal" data-target="#editTask" onClick="editTaskPopup('<?= $details['task_id'] ?>', '<?= $_GET['id'] ?>' )"><b class="task-title"><?=$details['taskname']?></b><br><?=$details['taskdescription']?>
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

												echo '<div class="child-box bdr-light">'.$na[$i]['initials'].'</div>';
												$rating = $this->taskmanagement_m->get_assigned_tasks_percentage($na[$i]['taskid'], $na[$i]['userid']);
?>

<?php 												} 
											
											else
												echo '<div class="child-box"> </div>';
										} ?>

								</div>

									
								<div class="height-18 center cluster-3 bg-full-gry flexbox">
									<div class="child-box bblr-8 relative">
										<span class="sub-child-box" style="background-color: <?php echo $this->taskmanagement_m->rating_percen($details['task_id']) ?>;"></span>
									</div>

<?php 									for ($i=0; $i < 8; $i++) { 
											if(is_array($na[$i])){

												$rating = $this->taskmanagement_m->get_assigned_tasks_percentage($na[$i]['taskid'], $na[$i]['userid']);

												echo "<div class='child-box'><div id='custom-bars'><span style='background: ".((isset($rating[0])) ? $rating[0] : '#b2aeae' ).";height: 3px;width: 14px;'></span>";
												echo "<span style='background: ".((isset($rating[1])) ? $rating[1] : '#b2aeae' ).";height: 3px;width: 14px;'></span></div></div>";
											} 
											
											else
												echo '<div class="child-box"> </div>';
										} ?>
									
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

										$y = ($y / $diff2) * 100;
										$daysleft = $diff->format("%r%a");
									}
									?>
									<div class="fs-11 child-box" >
									<span class="sub-child-box" style="background-color:<?= $this->taskmanagement_m->color($y)?>; color:white; font-weight:bold;">
										<?php
										//echo (($y < 0 ) ? "red" : "green");
										
										//echo $diff1; echo $diff2;
										echo $daysleft ?></span></div>
		  						</div>
							</div>	
						</div>
						
					</div>
							<?php } ?>			

					
				</div>

				<!-- <span class="action pull-right">
					<i class="fa fa-arrow-down" aria-hidden="true"></i>
				</span> -->
			</div>

			<div class="col-md-1 e-width pdl-0" style="background: white;display: flex;">
				<div class="border-r" style="width: 9%;padding: 1px;height: 100%;line-height: 70px;font-size:10px;background-color: #f0f0f0;"><i class="fa fa-arrow-down" aria-hidden="true"></i></div>

			   <?php if ($counter==0) { ?>
				<div class="custom-resources drag"></div>
				<?php 
				foreach ($bm_tools as $tools){ 
				// var_dump($tools);
					$link = $tools['link']; ?>
			 	 <a style="color: green;" href="<?php echo prep_url($link);?> "> <?php echo $tools['title']; ?></a> 	
			 	 <?php } ?> 
			  <?php } ?>
			</div>			 	
				<!-- Add Activities on Popup row Starts -->
				<!-- <div class="btns"></div> -->				

				  <div class="modal fade drag" id="addActivity" role="dialog">
					<div class="modal-dialog custom-modal-set">

					   
					  <div class="modal-content">
					    <div class="modal-header">
					      <button type="button" class="close" data-dismiss="modal">&times;</button>
					      <h4 class="modal-title">Add Activity</h4>
					    </div>
					    <div class="modal-body">
					<form action="<?= base_url('taskmanagement/addActivity'); ?>" accept-charset="utf-8" id="theForm" method="post">
						<div class="row">
							<div class="col-md-10">
								<div class="form-group">
								<br>
									<!-- <label>Activity Title:</label> -->
									<input type="hidden" class="form-control" id="clusterId" name="clusterId" value="<?= $_GET["id"] ?>" >
									<input type="text" class="form-control" id="activityTitle" name="activityTitle" placeholder="Activity Title" required="">
								</div>
							</div>
						</div><br>
					    
						<div class="modal-footer">
							<button type="text" class="btn btn-danger" data-dismiss="modal">Close</button>
							 <button class="btn btn-info" type="submit" id="target">Add Activity</button>
						</div>
					</form> 
					   </div>
					</div>
					</div>
					</div> 
				<!-- Add Activities on Popup row ends here -->

				<!-- editTask popup window stRTS -->

				  <div class="modal fade drag" id="editTaskPopup" role="dialog">
					<div class="modal-dialog custom-modal-set">

					   
					  <div class="modal-content">
					    <div class="modal-header">
					      <button type="button" class="close" data-dismiss="modal">&times;</button>
					      <h4 class="modal-title">Edit Task</h4>
					    </div>
					    <div class="modal-body">
					<form action="<?= base_url('taskmanagement/addActivity'); ?>" accept-charset="utf-8" id="theForm" method="post">
						<div class="row">
							<div class="col-md-10">
								<div class="form-group">
								<br>
									<!-- <label>Activity Title:</label> -->
									<input type="hidden" class="form-control" id="clusterId" name="clusterId" value="<?= $_GET["id"] ?>" >
									<input type="text" class="form-control" id="activityTitle" name="activityTitle" placeholder="Activity Title" required="">
								</div>
							</div>
						</div><br>
					    
						<div class="modal-footer">
							<button type="text" class="btn btn-danger" data-dismiss="modal">Close</button>
							 <button class="btn btn-info" type="submit" id="target">Update Task</button>
						</div>
					</form> 
					   </div>
					</div>
					</div>
					</div> 

					<!-- edit task popup ends here -->
<!-- Comment by Zain -->
				<!-- Add task on Popup starts here -->
					<!-- <div class="modal" id="addTask" role="dialog">
					<div class="modal-dialog custom-modal-set" style="width:59%;margin-left:29.15%;margin-top:408px;">
					  <div class="modal-content" style="margin-left:-75px;border-radius:0;">
					    <div class="modal-header" style="padding:0 !important;">
					    	<div class="modal-custom-header" style="height:25px;width100%;background:#dbdbdb;">
					      <button type="button" class="close" data-dismiss="modal">&times;</button>
					      <h4 class="modal-title" style="font-size:12px;text-align:center;">Add Task</h4>
					  		</div>
					      <div class="modal-body">
<?php
						if($counter == 0)
						// echo '<div class="task-div"></div>';
?>

					      </div>
					    </div>
					</div>
					</div>
					</div> 
 -->
				<!-- Add task on Popup ends here -->

				<!-- Add Resources on Popup ends here -->
				

				
				<!-- Add Resource on Popup row ends here -->



				
		</div>
		<?php
		$counter++;
		$output2=$output2+3;
		}
	?>

	</div>

