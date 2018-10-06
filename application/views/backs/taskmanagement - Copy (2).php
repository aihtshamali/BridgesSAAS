<?php //var_dump($tasks) ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple jQuery</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style3.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/styles.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/normalize.css"> -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<style type="text/css">

.modal-backdrop.in {
	opacity: 0;
}
html {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*, *:before, *:after {
  -webkit-box-sizing: inherit;
  -moz-box-sizing: inherit;
  box-sizing: inherit;
  }
.h-inherit{
	height: inherit;
}
.wd-75{
	width: 75%;
} 
.bdr-white{
	border-right: 1px solid #fff;
}  
.bg-light-gry{
	background: #f9f9f9;
}
.bg-mid-gry{
	background: #f0f0f0;
}
.bg-full-gry{
	background: #dbdbdb;
	height: 25px;
}
.bg-green{
	background: green;
}
.strong{
	font-weight: bold;
}
.width{
	width: 100%;
}
.height-65{
	height: 65px;
}
.height-12{
	height: 12px;
}
.height-16{
	height: 16px;
}
.height-35{
	height: 35px;
	border-radius: 8px 8px 0px 0px
}
.height-20{
	height: 16px;
}
.height-18{
	height: 18px;
}
.fs-10{
	font-size: 10px;
}
.width-88{
	width: 88%;
}
.center {
	text-align: center;
}
.child-box{
	width: 10%;
}
.block {
	display: block;
	text-decoration: none;
	color: black;
}
body{
	font-size: 12px;
	//overflow: hidden;
	position: relative;
	background-color: #eee;
}


#custom-bars{    
	height: 100%;
    /* padding-top: 10px; */
    position: relative;
    /* float: right; */
    width: auto;
    top: 15px;
    right: 10px;
    left: -1px !important;
}
#custom-bars span{
	/*position: absolute;
    transition: all 150ms ease-in-out;
    display: block;
    width: 80%;
    height: 3px;
    left: 0;
    right: 0;
    margin: auto;*/
    position: absolute;
    transition: all 150ms ease-in-out;
    display: block;
    width: 80%;
    /* height: 3px; */
    /* left: 0; */
    right: 1px;
    /* margin: auto; */
}
#custom-bars span:nth-of-type(1){
    /*transform: translateY(5px);*/
    bottom: 3px;
}
#custom-bars span:nth-of-type(2){
	/*transform: translateY(9px);*/
	bottom: 8px;
}
#custom-bars span:nth-of-type(3){
	/*transform: translateY(13px);*/
	bottom: 13px;
}
.m-top{
	margin-top: 50px;
}

.width-12p{
    width: 12%;
}
.width-71-3p{
    width: 71.3%;
}
.btlr-8{
	border-top-left-radius: 8px;
}
.btrr-8{
	border-top-right-radius: 8px;
}
.bblr-8{
	border-bottom-left-radius: 8px;
}
.bbrr-8{
	border-bottom-right-radius: 8px;
}
.col-md-1,
.col-md-2,
.col-md-8{
	height: inherit;
}
.width-d-5{
	width: calc(87%/5);
}
.padding-0{
	padding: 0;
}
.date-diff-result{
	font-size: 9px;
	padding-top: 2px;
}
/*Header*/
header{
		height: 70px;
		background: green;
		font-family: 'Roboto', sans-serif;
	}
	.custom-header{
		font-family: 'Roboto' !important;
    	font-weight: 100;
    	letter-spacing: 1px;
	}
	.header-logo{
		width: 58px;
	    position: relative;
	    height: 68px;
	    left: -27px;
	}
	.logo-with-text{

	}
	.pdr-0{
		padding-right: 0;
	}
	.header-logo-text{
	    right: -93px;
	    top: 50%;
	    transform: translateY(-50%);
	    color: #fff;
	    font-weight: 800;
	    font-size: 54px;
	}
	.padding-0{
		padding: 0;
	}
	.child-block span{
		display: block;
	    font-size: 12px;
	    font-weight: 600;
	    color: #fff;
	    font-style: italic;
	    line-height: 1.1em;
	}
	.text-center{
		text-align: center;
	}
	.text-left{
		text-align: left;
	}
	.text-right{
		text-align: right;
	}
	.custom-header-icons{
		color: #fff;
		line-height: 70px;
	}
	.custom-header-icons i{
		cursor: pointer;
		opacity: 0.7;
		display: inline-block;
		font-size: 20px;
		margin-left: 10px;
	}
	.custom-header-icons i:hover{
		opacity: 1;
	}
	.opacity-0-7{
		opacity: 0.7;
	}
	abbr[title] {
 		border-bottom: none !important;
  		cursor: pointer !important;
  		text-decoration: none !important;
	}
	/*Zain CSS*/
		.e-width{
			width: 12.5%;
		}
		.width62{
			width: 62.5%;
		}
		.width-20{
			width: 20%;
		}
		.width-20 .row{
			width: 100%;
			margin: 0;
		}
		.parent-for{
			margin-bottom: 2px;
		}
		.border-r{
			border-right: 1px solid #bfb9b9;
		}
		.wd-16-6{
			width: 16.6%;
		}
		.pdt-10{
			padding-top: 6px;
		}
		.out-task{
			    left: 0;
    right: 0;
    width: 100%;
    /*border: 1px solid #000;*/
    bottom: 0;
    border-right: 0;
    text-align: center;
    	height: 18px;
		}
		.col-md-2{
			height: inherit;
		}
		.gre-gry{
			background: #769876 !important;
		}
		.sub-child-box{
			display: block;
		    width: 80%;
		    height: 80%;
		    margin: auto;
		    padding-top: 7px;
		    transform: translateY(13%);
		}
		.task-title{
			font-size: 11px;
		}
		.cluster-1{
			padding-top: 3px;
		    line-height: 0.90em;
		}
		.emp-row{	
		    display: block;
		    position: absolute;
		    height: 18px;
		    bottom: -1px;
		    left: 0;
		    right: 0;
		}
		.fs-11{
			font-size: 11px;
		}
	/*End*/
	.btn-slim{
	width: auto;
	height: 20px;
	padding: 4px 8px !important;
	font-size: 11px !important;
	line-height: 11px !important;
	border-radius: 0;
}
.row{
	margin-left: 0 !important;
	margin-right: 0 !important;
}
.btns{
	width: 100%;
	height: 25px;
	display: flex;
}
.output-btns, .activity-btns{
		width: 12.5%;
		height: inherit;
		padding: 0 8px;
	}
	.task-btns{
		width: 62.5%;
		height: inherit;
	}
	.tool-btn{
		width: 16.66%;
		height: inherit;
	}/*.action{
		display: inline-block;
		height: 20px;
		width: 20px;
		background-color: green;
		border-radius:50%;
		line-height: 20px;
	}*/
	.action i{
		color: green;
		margin: 0 3px;
		cursor: pointer;
	}
	.editTask-div{
		position: absolute;
		z-index: 100;
		top: 425px;
		width: 60%;
		background-color: white;
		margin-left: 20.5%;
		width: 71.5%;
		box-shadow: 2px	 2px 2px 0 rgba(0,0,0,0.16), 0 0 0 1px rgba(0,0,0,0.08);
	}
	.addTask-div{
		position: absolute;
		z-index: 100;
		top: 425px;
		width: 60%;
		background-color: white;
		margin-left: 25%;
		width: 62.5%;
		box-shadow: 2px	 2px 2px 0 rgba(0,0,0,0.16), 0 0 0 1px rgba(0,0,0,0.08);
		/*min-height:650px;*/ 
	}
	.hide-task{
		color: #9d9d9d;
		cursor: pointer;
		display: block;
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
			<div class="wd-75 bdr-white flexbox h-inherit">
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
			<div class="e-width col-md-1 gre-gry text-center padding-0 custom-header-icons" >
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
			
		<div class="row no-row-padding bg-full-gry" style="margin-top:50px;height: 19px;line-height:19px;">
			<div class="col-md-1 text-center border-r e-width" style="text-align:right;"><span class="action pull-left"><i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>Output - S</div>
			<div class="col-md-2 text-center e-width" style="text-align:left;">Activities <span class="action pull-right"><i class="fa fa-plus" aria-hidden="true" data-toggle="modal" data-target="#addActivity"></i><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></div>
			<div class="col-md-8 text-center border-r width62" style="text-align:right;"><span class="action"><i class="fa fa-plus" aria-hidden="true" onClick="AddTask()"></i><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>Task &amp; Process </div>
			<div class="col-md-1 text-center e-width" style="text-align:left;">Resources <span class="action pull-right"><i class="fa fa-plus"  data-toggle="modal" data-target="#addResource" aria-hidden="true"></i><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></div>
		</div>
		<?php
			}
			?>
		<div class="row height-65 parent-for">
					<?php 
					if($counter==1){
					?>
					<div class="col-md-1 e-width border-r pdr-0 relative" style="background: white;"><span class="absolute bg-full-gry out-task">Outputs - O</span></div>
					<?php
					}/*elseif($counter==3){
						echo '<div class="col-md-1 e-width border-r pdr-0 relative" style="background: white;"><span class="absolute bg-full-gry out-task">Outputs - O</span></div>';
					}*/ else {
						echo '<div class="col-md-1 e-width border-r pdr-0 relative" style="background: white;"></div>';
					}
					?>
			<!-- Salman ends here -->
				<div class="col-md-10 padding-0" style="background: white;width:75%;">
				<div class="col-md-2 border-r fs-11" style="width:16.666%;height: 64px;">

					<?php if(!empty($activity['0']))
						echo $activity['0']['title']; ?>
					
					<?php
					if ($output2%$output1 ==0)
					{
					?>
					<span class="bg-full-gry emp-row"></span>
					<?php } 
					?>
					
				</div>
				<div class="col-md-8 flexbox" style=" width: 83.33%; padding:0;">
				
							
							<?php foreach ($activity as $details) { ?>				
					<div class="parent width-20 border-r">
						<div class="row">
								<div class="height-65">
								<div class="height-35 cluster-1 btrr-8 bg-light-gry">
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

												echo '<div class="child-box">'.$na[$i]['initials'].'</div>';
												$rating = $this->taskmanagement_m->get_assigned_tasks_percentage($na[$i]['taskid'], $na[$i]['userid']);
?>

<?php 												echo "<div id='custom-bars'><br><span style='background: ".((isset($rating[0])) ? $rating[0] : '#b2aeae' ).";height: 3px;width: 14px;'></span>";
												echo "<br><span style='background: ".((isset($rating[1])) ? $rating[1] : '#b2aeae' ).";height: 3px;width: 14px;'></span></div>";
											} 
											
											else
												echo '<div class="child-box"> </div>';
										} ?>

								</div>

									
								<div class="height-18 center cluster-3 bg-full-gry flexbox">
									<div class="child-box bblr-8 relative">
										<span class="sub-child-box" style="background-color: <?php echo $this->taskmanagement_m->rating_percen($details['task_id']) ?> "></span>
									</div>
									<div class="child-box" id="a1"></div>
									<div class="child-box" id="a2"></div>
									<div class="child-box" id="a3"></div>
									<div class="child-box" id="a4"></div>
									<div class="child-box" id="a5"></div>
									<div class="child-box" id="a6"></div>
									<div class="child-box" id="a7"></div>
									<div class="child-box" id="a8"></div>
									<?php
										$date=date('Y-m-d');
										$date1 = date_create($date);
										$date2=date_create($details['enddate']);
										$diff=date_diff($date1,$date2);	 
									?>
									<div class="child-box date-diff-result">
										<?php
										echo (($details['ongoing']=='0')?  '&infin;' : $diff->format("%R%a"))?></div>
								</div>
							</div>	
						</div>
					</div>

							<?php } ?>		

					
				</div>
			</div>

			<?php if ($counter==0) { ?>
				
			<div class="col-md-1 e-width" style="background: white;  padding-top: 25px;">
				<?php foreach ($bm_tools as $tools){ 
					$link = $tools['link']; ?>
			 	 <a style="color: green;" href="<?php echo prep_url($link);?> "> <?php echo $tools['title']; ?> <br> <br> </a> 
			 	<?php } ?>
			</div>
			<?php } ?>
				<!-- Add Activities on Popup row Starts -->
				<!-- <div class="btns"></div> -->
<?php
				if($counter == 3)
				{
	?>
					<!-- // echo '<div class="btns">
					// 		<div class="output-btns">
					// 			<button class="btn btn-success btn-slim">Edit Output</button>
					// 			<button class="btn btn-success btn-slim">Add Output</button>
					// 		</div>
					// 		<div class="activity-btns">
					// 			<button class="btn btn-success btn-slim">Edit Activity</button>
					// 			<button class="btn btn-success btn-slim">Add Activity</button>
					// 		</div>
					// 		<div class="task-btns">
					// 			<button class="btn btn-success btn-slim">Edit Task</button>
					// 			<button class="btn btn-success btn-slim">Add Task</button>
					// 		</div>
					// 		<div class="tool-btns">
					// 			<button class="btn btn-success btn-slim" ata-toggle="modal" data-target="#edit-tool" id="editTool">Edit Tool</button>
					// 			<button class="btn btn-success btn-slim" ata-toggle="modal" data-target="#add-tool" id="addTool">Add Tool</button>
					// 		</div>
					// 	</div>';
					// echo '<div class="btns">
					// <button class="btn btn-slim btn-success" data-toggle="modal" data-target="#addActivity">Add Activity</button>
					// &nbsp;&nbsp;<button class="btn btn-slim btn-success" data-toggle="modal" data-target="#addTask" onClick="AddTask()" >Add Task</button>
					// </div>'; -->
<?php
				}
				
?>


				<!-- Add task on Popup starts here -->
				<!-- 	<div class="modal" id="editTask" role="dialog">
					<div class="modal-dialog custom-modal-set" style="width:59%;margin-left:29.15%;margin-top:70px;">
					  <div class="modal-content" style="margin-left:-75px;border-radius:0;">
					    <div class="modal-header" style="padding:0 !important;">
					    	<div class="modal-custom-header" style="height:25px;width100%;background:#dbdbdb;">
					      <button type="button" class="close" data-dismiss="modal">&times;</button>
					      <h4 class="modal-title" style="font-size:12px;text-align:center;">Add Task</h4>
					  		</div>
					      <div class="modal-body">
<?php
							if($counter == 0)
							// echo '<div class="editTask-div"></div>';
?>

					      </div>
					    </div>
					</div>
					</div>
					</div> --> 

				<!-- Add task on Popup ends here -->
				

				  <div class="modal fade" id="addActivity" role="dialog">
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
				

				  <div class="modal fade" id="addResource" role="dialog">
					<div class="modal-dialog custom-modal-set">

					   
					  <div class="modal-content">
					    <div class="modal-header">
					      <button type="button" class="close" data-dismiss="modal">&times;</button>
					      <h4 class="modal-title">Add Resource</h4>
					    </div>
					    <div class="modal-body">
					<form action="<?= base_url('taskmanagement/addResource'); ?>" accept-charset="utf-8" id="theForm" method="post">
						<div class="row">
							<div class="col-md-10">
								<div class="form-group">
								<br>
									<!-- <label>Activity Title:</label> -->
									<input type="hidden" class="form-control" id="clusterId" name="clusterId" value="<?= $_GET["id"] ?>" >
									<input type="text" class="form-control" id="resourceTitle" name="resourceTitle" placeholder="Resource Title" required>
									<br>
									<input type="text" class="form-control" id="resourceLink" name="resourceLink" placeholder="Resource Link" required>

								</div>
							</div>
						</div><br>
					    
						<div class="modal-footer">
							<button type="text" class="btn btn-danger" data-dismiss="modal">Close</button>
							 <button class="btn btn-info" type="submit" id="target">Add Resource</button>
						</div>
					</form> 
					   </div>
					</div>
					</div>
					</div> 
				<!-- Add Resource on Popup row ends here -->



				
		</div>
		<?php
		$counter++;
		$output2=$output2+3;
		}
	?>

	</div>

	<div class="addTask-div"></div>
	<div class="editTask-div"></div>
<script type="text/javascript">
	
	//for add task

	function AddTask() {		

		$.post("<?php echo base_url();?>"+"taskmanagement/addTask", function( response )
		{
			$(".addTask-div").html(response);
			$(".addTask-div").css('z-index','9980');
	
		});

	}
	//for add task

	//for editTask


	function editTaskPopup(taskId, clusterId)
	{
		$.post("<?php echo base_url();?>"+"taskmanagement/editTaskPopup", {taskId:taskId, clusterId:clusterId}, function( response ){
			//console.log(response);
			$(".editTask-div").html(response);
		});
	}

	function hideAddTask(){
			$(".addTask-div").hide();
	}
	//for edit task

	/*$('.modal[data-color]').on('show hidden', function(e) 
	{
	$('body').toggleClass('modal-color-' + $(this).data('color'));
	});
*/

$(document).ready(function(){

	$('#hhhh').click(function(){
		alert("asdasda");
	});
});
</script>