<?php  //echo "<pre>"; var_dump($assigned);  exit; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Task2</title><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style3.css">

<!-- Font Awesome -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 --><!-- <style type="text/css">
	.section{
  width:1.2%;
  height:2%;
  font-size: 14px;
  color: white;
	background-color:#BF0F00;
	cursor: pointer;
}
.red-color
{
  background-color:#BF0F00;
  width:80%;
  height:2px;
  margin:auto;
    left: 0;
    right: 0;
  bottom: 3px;
  position: relative; 
}
.green-color
{
  background-color:#21E500;
  width:80%;
  margin:auto;
    left: 0;
    right: 0;
  height:2px;
  bottom: 0;
  position: relative; 
}
.flexbox{
  display: -webkit-box;      /* OLD - iOS 6-, Safari 3.1-6 */
  display: -moz-box;         /* OLD - Firefox 19- (buggy but mostly works) */
  display: -ms-flexbox;      /* TWEENER - IE 10 */
  display: -webkit-flex;     /* NEW - Chrome */
  display: flex;  
  
    -webkit-flex-flow: row wrap;
    flex-wrap: wrap;
}


.flexbox1{
  justify-content: space-around;
}

.flexbox2{
  justify-content: space-between;
}

.flexbox3{
  justify-content: flex-end;
}

.flexbox4{
  justify-content: center;
}
.flexbox5{
    justify-content: flex-start;
}
.relative{
  position: relative;
}
.absolute{
  position: absolute;
}
.font-1-5{
font-size: 10px;
}
</style> -->
<style type="text/css">
/*.decorate{
	
    -webkit-transition: 0.3s linear;
    -moz-transition: 0.3s linear;
    -o-transition: 0.3s linear;
    transition: 0.3s linear;
}
.decorate:hover{
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.3);
	text-decoration: underline;
}*/
.custom-bars{
	top: 0 !important;
	left: 0 !important;
	right: 0 !important;
}
.blr-0{
	bottom:0;
	left: 0;
	right: 0;
}
.bg-green{
	background: green;
}
.height-100{
	height: 100px;
}
.height-50{
	height: 50px;
}
.height-25{
	height: 25px;
}
.height-30{
	height: 30px;
}
.width-80{
	width: 80%;
	margin: auto;
}
.btn-success-custom{
	width: 120px;
}
.db{
	display: block;
}
.w-20{
	width: 20%;
}
		.sub-child-box{
			display: block;
		    width: 80%;
		    height: 80%;
		    margin: auto;
		    padding-top: 7px;
		    transform: translateY(13%);
		}
		.overflow-ell{
			display: block;
		    max-width: 100%;
		    overflow: hidden;
		    text-overflow: ellipsis;
		    white-space: nowrap;
		}
.AttendanceAndPerformance
{
	display: block;
    float: left;
    width: 100%;
}

.main_container 
{
    background-color: #F7F7F7; 
    width: 769px;
}

.left_headingtasks 
{
    width: 88px;
    height: 12.3px;
    float: left;
    text-align: right;
    padding-right: 3px;
    font-style: italic;
    line-height: 11px;
    font-size: 10px;
    margin-right: 1px;
    background: #e2dbdb;
}

.right_values 
{
    border-bottom: 1px solid white;
    border-top: 0px;
    border-right: 1px solid #FFF;
    width: 21.874px;
    height: 13.3px;
    float: left;
    text-align: center;
    font-weight: bold;
    background-color: #676767;
    line-height: 13px;
    color: #FFF;
    font-family: calibri;
    font-size: 12px;
}
.height-80{
	height: 80px;
}
.m-auto{
	margin: auto !important; 
}
.width-90{
	width: 90%;
}
/*Zain
.well{
	padding: 0 !important;
	padding-left: 10px;
	max-height: 140px;
	overflow: scroll;
	overflow-x:hidden;
}
.well .row{
	width: 95%;
	margin: auto;
}
.custom-row-width{
	width: 100%;
	margin: auto;
}
.relative{
	padding: 2px 5px;
}
.relative .name-badge{
	border-radius: 0;
	background: rgba(211,221,221,0.75);
	padding: 2px 3px;
}

.name-badge:hover{
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}*/
/*.circle{
	width: 10px;
	height: 10px;
	display: block;
	background: green;
	border-radius: 50%;
}
*//*End*/
</style>
</head>
<body>
	<!-- testing starts here -->
<!-- 
					<button class="btn btn-success" data-toggle="modal" data-target="#editTask" id="TaskPopup">Open</button>
				
					<div class="modal fade" id="editTask" role="dialog">
					<div class="modal-dialog custom-modal-set">
					<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
					</div>
					<div class="modal-body">
					<div class="editTaskPopup"></div>
					<input type="hidden" class="form-control" id="getTaskId"  value="<?= $task->task_id ?>" >
					</div>
					</div> 
					</div>
					</div>
 -->
				<!-- testing ends here -->
			<div class="">
			
			
			<div class="task-div" style="width: 100%;">
				<input type="hidden" class="form-control" id="getTaskId"  value="<?= $task->task_id ?>" >

				 <div class="row text-center custom-row-width">
<!-- 				  <div class="row">
 -->					  <div class="col-md-12 padding-0">

					   
					    	<div class="relative">

							<div class="row flexbox width-90 m-auto">
								<div class="height-100 width-80">

									<div class="height-50 cluster-1 btrr-8 bg-light-gry" style="width: 121%; height: 80%; margin-left: -65px; border-radius: 5px; background-color: #f5f5f5;">
										<center><b><?= $task->taskname?></b></center>
			    						<center><?= $task->taskdescription?></center><br/>
						    				<div class="w-20 height-80 relative flexbox flexbox2" style="float: right; margin-top: -30px;">
												<button class="btn btn-success-custom db btn-slim btn-success" style="width: 87px; margin-left: 35px;" id="TaskPopup">Edit Task</button>
												<button class="btn db btn-success-custom btn-slim btn-success" style="width: 87px; margin-left: 35px;">Completed</button>
												<button class="btn db btn-success-custom btn-slim btn-success" style="width: 87px; margin-left: 35px;">Incompleted</button>
											</div>
									

									<div class="height-30 fs-10 cluster-2 bg-mid-gry flexbox center">
										<div class="child-box bblr-8 relative">
											<span class="bg-green sub-child-box"></span>
										</div>
										<?php 
										foreach ($assigned as $assign) 
										{
										?>
									<div class="child-box relative" >
									<span class="decorate overflow-ell" onclick="assignedUser(<?php echo $assign->userid; ?>,'<?php echo $assign->taskid; ?>')" style="cursor: pointer;"><?= $assign->firstname." ".$assign->lastname?></span>
									<!--  -->
									<span class="absolute blr-0">	
<?php
									$rating = $this->taskmanagement_m->get_assigned_tasks_percentage( $assign->taskid,  $assign->userid);

									echo "<div id='custom-bars' class='custom-bars'><br><span style='top:8px;background: ".((isset($rating[0])) ? $rating[0] : '#b2aeae' ).";height: 3px;width: 60%;'></span>";


									echo "<span style='top:3px;background: ".((isset($rating[1])) ? $rating[1] : 'green' ).";height: 3px;width: 60%;'></span></div>";

?>
						         <!--  <span class="red-color absolute"></span>
						          <span class="green-color absolute"></span> -->

</span>					        
</div>
<?php
							}
?>	<!-- 
								<div class="child-box"></div>
								<div class="child-box"></div> -->
</div>
</div>
								</div>

																
</div><!-- Row ends here -->
							</div>
	  					
					  </div>
				  <!-- </div> -->
				 </div>
		

				<!-- Message Box by Anees -->
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 m-auto">
							<div class="row">
							
								<div class="col-md-12 padding-0">
									<div class="well mb-0" id="showMsgs" style="width: 94%; margin-left: 22px;">
										<?php
												foreach ($getMsgs as $msg) 
												{ 
													$newMsg =(($msg->type == 0) ? $msg->msg : "<a href='".base_url()."uploads/".$msg->msg."' target='_blank'>Attachment</a>");
										?>
									  <div class="row">
										<div class="col-md-8 padding-0"><?= $this->taskmanagement_m->get_db_value('name', 'ba_users', array("id" => $msg->userid))." : ".$newMsg ?> 
										</div>
										<div class="col-md-4 padding-0"><?= date("M d, y H:i:s" , strtotime($msg->created)) ?></div>
									  </div>			

										<?php			
												}
										?>										
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-9 padding-0">
									<div class="input-group" style="margin-left: 22px;">
								    	<span class="input-group-addon">Message</span>
								    	<input type="text" class="form-control" id="msg" name="msg" placeholder="Message...">
								    </div>
								</div>
								<div class="col-md-3 flexbox mt-2">
									<div class="mr-10">
									<a href="#" class="getComments" onclick="addMessage()"><i class="fa fa-send-o send-btn"></i></a>
									</div>
									<div class="relative mr-10">
									<form enctype="multipart/form-data"  id="postData"  method="post" action="<?= base_url('taskmanagement/saveAttach'); ?>" >
										<input type="hidden" name="taskid" id="taskid" value="<?php $link = $_SERVER['PHP_SELF'];
    $link_array = explode('/',$link);
    echo $page = end($link_array); ?>">
										<input type="file" id="attachFile" class="none absolute" name="attachFile">
										<label for="attachFile"><i class="fa fa-paperclip attach-btn"></i></label>
									</form>
									</div>
									<div class="mr-10">
										<a href="#"><i class="fa fa-mobile send-btn"></i></a>
									</div>
									<div>
										<a href="#"><i class="fa fa-video-camera send-btn"></i></a>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="wells assignedUsers">

					</div><!-- assignedUsers -->
				</div>
				<!-- Message Box End -->
	
       <!-- <h3 class="text-center">Alligned To Cluster & Activities</h3>
        <div class="row">
              <div class="col-md-3">
                  <div class="form-group">
                    <label for="cluster-1" class="text-center">Operations</label>
                      <?php
                      $data = array(
                        'id' => 'cluster-1',
                        'name' => 'cluster-1',
                        'class' => 'form-control'
                        );
                          echo form_multiselect('brand[]', $cluster1, $selecterdclusters1, $data);
                      ?>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
                    <label for="cluster-2" class="text-center">Strategic</label>
                   <?php
                      $data = array(
                        'id' => 'cluster-2',
                        'name' => 'cluster-2',
                        'class' => 'form-control'
                        );
                          echo form_multiselect('brand[]', $cluster2, $selecterdclusters2, $data);
                      ?>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
                    <label for="cluster-3" class="text-center">Resource</label>
                    <?php
                      $data = array(
                        'id' => 'cluster-3',
                        'name' => 'cluster-3',
                        'class' => 'form-control'
                        );
                          echo form_multiselect('brand[]', $cluster3, $selecterdclusters3, $data);
                      ?>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
                    <label for="cluster-4" class="text-center">OutReach</label>
                    <?php
                      $data = array(
                        'id' => 'cluster-4',
                        'name' => 'cluster-4',
                        'class' => 'form-control'
                        );
                          echo form_multiselect('brand[]', $cluster4, $selecterdclusters4, $data);
                      ?>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <label for="cluster-5" class="text-center">Performances</label>
                    <?php
                      $data = array(
                        'id' => 'cluster-5',
                        'name' => 'cluster-5',
                        'class' => 'form-control'
                        );
                          echo form_multiselect('brand[]', $cluster5, $selecterdclusters5, $data);
                      ?>
                  </div>
              </div>
        </div> -->
<!--         <div class="row">
 -->               
        <!-- <div class="row text-center">
            <h3>Team</h3>
            <?php foreach ($assigned as $assign) {
                    //echo $assign->firstname .' '. $assign->lastname." &nbsp ";
            }?>
            <br>
        </div> -->  
      <!--   <div class="row">
            <div class="col-md-4">
               <div class="form-inline">   
                  <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <div><?php echo $task->startdate;?></div>
                  </div>
               </div>   
            </div>
            <div class="col-md-4"> 
               <div class="form-inline">   
                  <div class="form-group">
                    <label for="end_date">End Date:</label>
                    <div ><?php echo $task->enddate;?></div>
                  </div>
               </div> 
            </div>
            <div class="col-md-4">
                <div >
                  <?php if($task->ongoing == 1) {
                            echo "On Going Task";
                          } else {
                            echo "Not On Going";
                          }
                          ;?></div>
            </div>
          </div> 
        </div> -->
				<!-- task1-wrapper -->
<!-- 	 			<div class="task1-wrapper">
					<?php    //Maximum days of Current Month
							 /*$thisMonth= date("d-m-Y");
							 $d=date("Y-m-t", strtotime($thisMonth));
							 $date=@split("-", $d);
							 $maxDays=$date[2];*/
					?>
					<table class="table">
						<thead>
							<tr>
								<th colspan="2"></th>	
								<?php
									/* for ($i=1; $i<=$date[2]; $i++){ 
									 	echo '<th>'.$i.'</th>';
									 }*/
								?>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="2" class="thClass">100%</td>
								<?php
									/* for ($i=1; $i<=$date[2]; $i++){ 
									 	echo '<td>'.$i.'</td>';
									 }*/
								?>
							</tr>
							<tr>
								<td colspan="2" class="thClass">80%</td>
								<?php
									/* for ($i=1; $i<=$date[2]; $i++){ 
									 	echo '<td>'.$i.'</td>';
									 }*/
								?>
							</tr>
							<tr>
								<td colspan="2" class="thClass">60%</td>
								<?php
									/* for ($i=1; $i<=$date[2]; $i++){ 
									 	echo '<td>'.$i.'</td>';
									 }*/
								?>
							</tr>
							<tr>
								<td colspan="2" class="thClass">40%</td>
								<?php
									/* for ($i=1; $i<=$date[2]; $i++){ 
									 	echo '<td>'.$i.'</td>';
									 }*/
								?>
							</tr>
							<tr>
								<td colspan="2" class="thClass">20%</td>
								<?php
									/* for ($i=1; $i<=$date[2]; $i++){ 
									 	echo '<td>'.$i.'</td>';
									 }*/
								?>
							</tr>
							<tr>
								<td colspan="2" class="thClass">0%</td>
								<?php
									 /*for ($i=1; $i<=$date[2]; $i++){ 
									 	echo '<td>'.$i.'</td>';
									 }*/
								?>
							</tr>
						</tbody>
					</table>
				</div>
 -->				<!-- task1-wrapper End -->
				<div class="ShowAttendance"></div>
				<div class="ShowPerformance"></div>
				<div class="showEvaluation"></div>
				
				<!-- Nagesh Work -->
<!-- 					<div class="section">
						<div class="tagline box-padding-bottom">
						&nbsp;&nbsp;Score as an Employee  [35%] &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Score as an Employee with Monitoring Responsibility [35%]
						</div>
							<div>
								<textarea id="inputField1" placeholder="Enter Text" rows="2" name="text1"></textarea>
							   <select id="selectField1" name="Option1">
							      <option>5%</option>
							      <option>10%</option>
							      <option>15%</option>
							      <option>20%</option>
							      <option>25%</option>
							      <option>30%</option>
							      <option>35%</option>
							      <option>40%</option>
							      <option>45%</option>
							      <option>50%</option>
							      <option>55%</option>
							      <option>60%</option>
							      <option>65%</option>
							      <option>70%</option>
							      <option>75%</option>
							      <option>80%</option>
							      <option>85%</option>
							      <option>90%</option>
							      <option>95%</option>
							      <option>100%</option>
							    </select>
							    <textarea id="inputField1" placeholder="Enter Text" rows="2" name="text2"></textarea>
							   <select id="selectField2" name="Option2">
							      <option>5%</option>
							      <option>10%</option>
							      <option>15%</option>
							      <option>20%</option>
							      <option>25%</option>
							      <option>30%</option>
							      <option>35%</option>
							      <option>40%</option>
							      <option>45%</option>
							      <option>50%</option>
							      <option>55%</option>
							      <option>60%</option>
							      <option>65%</option>
							      <option>70%</option>
							      <option>75%</option>
							      <option>80%</option>
							      <option>85%</option>
							      <option>90%</option>
							      <option>95%</option>
							      <option>100%</option>
							    </select>
							</div>
							<div>
								<textarea id="inputField3" placeholder="Enter Text" rows="2" name="text3"></textarea>
							    <select id="selectField3" name="Option3">
							      <option>5%</option>
							      <option>10%</option>
							      <option>15%</option>
							      <option>20%</option>
							      <option>25%</option>
							      <option>30%</option>
							      <option>35%</option>
							      <option>40%</option>
							      <option>45%</option>
							      <option>50%</option>
							      <option>55%</option>
							      <option>60%</option>
							      <option>65%</option>
							      <option>70%</option>
							      <option>75%</option>
							      <option>80%</option>
							      <option>85%</option>
							      <option>90%</option>
							      <option>95%</option>
							      <option>100%</option>
							    </select>
							    <textarea id="inputField4" placeholder="Enter Text" rows="2" name="text4"></textarea>
							    <select id="selectField4" name="Option4">
							      <option>5%</option>
							      <option>10%</option>
							      <option>15%</option>
							      <option>20%</option>
							      <option>25%</option>
							      <option>30%</option>
							      <option>35%</option>
							      <option>40%</option>
							      <option>45%</option>
							      <option>50%</option>
							      <option>55%</option>
							      <option>60%</option>
							      <option>65%</option>
							      <option>70%</option>
							      <option>75%</option>
							      <option>80%</option>
							      <option>85%</option>
							      <option>90%</option>
							      <option>95%</option>
							      <option>100%</option>
							    </select>
							</div>
							<div>
								<textarea id="inputField5" placeholder="Enter Text" rows="2" name="text5"></textarea>
							   <select id="selectField5" name="Option5">
							      <option>5%</option>
							      <option>10%</option>
							      <option>15%</option>
							      <option>20%</option>
							      <option>25%</option>
							      <option>30%</option>
							      <option>35%</option>
							      <option>40%</option>
							      <option>45%</option>
							      <option>50%</option>
							      <option>55%</option>
							      <option>60%</option>
							      <option>65%</option>
							      <option>70%</option>
							      <option>75%</option>
							      <option>80%</option>
							      <option>85%</option>
							      <option>90%</option>
							      <option>95%</option>
							      <option>100%</option>
							    </select>
							    <textarea id="inputField6" placeholder="Enter Text" rows="2" name="text6"></textarea>
							   <select id="selectField6" name="Option6">
							      <option>5%</option>
							      <option>10%</option>
							      <option>15%</option>
							      <option>20%</option>
							      <option>25%</option>
							      <option>30%</option>
							      <option>35%</option>
							      <option>40%</option>
							      <option>45%</option>
							      <option>50%</option>
							      <option>55%</option>
							      <option>60%</option>
							      <option>65%</option>
							      <option>70%</option>
							      <option>75%</option>
							      <option>80%</option>
							      <option>85%</option>
							      <option>90%</option>
							      <option>95%</option>
							      <option>100%</option>
							    </select>
							</div>
					  	<div class="box-padding-left">  
						  	<button class="btn btn-slim btn-success">Submit</button>
						</div>
					</div> -->
	
									<!-- Section -->
					
				<!-- Nagesh Work End -->
			</div><!-- task_div -->
		</div><!-- container_div -->

<script type="text/javascript">
	$(document).ready(function() {
	    $('#msg').keydown(function(event) {
	        if (event.keyCode == 13) {
	            $(".getComments").click();
	            return false;
	         }
	    });
	});

	function addMessage() {
   var elem = document.getElementById('showMsgs');
   elem.scrollTop = elem.scrollHeight;
	}
</script>
	
<script type="text/javascript">
//haroon

$(document).ready(function(){
$("#TaskPopup").on("click", function()
	{

		$.post("<?php echo base_url();?>"+"taskmanagement/editTask", {taskId:$("#getTaskId").val()}, function( response ){
			$(".task-div").html(response);
		});

	});



	// Table
	// $(".btn-danger").on('click',function(){
	// 	$("table").each(function() {
 //        var $this = $(this);
 //        var newrows = [];
 //        $this.find("tr").each(function(){
 //            var i = 0;
 //            $(this).find("td").each(function(){
 //                i++;
 //                if(newrows[i] === undefined) { newrows[i] = $("<tr></tr>"); }
 //                newrows[i].append($(this));
 //            });
 //        });
 //        $this.find("tr").remove();
 //        $.each(newrows, function(){
 //            $this.append(this);
 //        });
 //        return false;
 //    });
	// 

	//for msg text only
	$(".getComments").on("click", function(){

		if($("#msg").val() == "")
		{
			alert("please enter msg before send.");
			return false;
		}	

		var userId   = "<?= $this->session->userdata('id')  ?>";	
		var userName = "<?= $this->session->userdata('name') ?>";
		
		$.post("<?php echo base_url();?>"+"taskmanagement/saveMsg", { userId: userId, taskId: $("#taskid").val(), msg: $("#msg").val() } , function( response )
		{	
			if( response == "TRUE" )
			{
				var currentDate = "<?= date("M d, y H:i:s") ?>";
				var appendMsg = '<div class="row"><div class="col-md-8 padding-0">'+userName+" : "+$("#msg").val()+'</div><div class="col-md-4 padding-0">'+currentDate+'</div></div>';

				$("#showMsgs").append(appendMsg);
				$("#msg").val("")
			}	
			
		});

	});
	//for msg text only

	//for image files

	$("#attachFile").change(function(evt){
	    
	    evt.preventDefault();
	    var formData = new FormData($("#postData")[0]);
	    var userName = "<?= $this->session->userdata('name') ?>";
	    
	    $.ajax({
	        url: $("#postData").attr('action'),
	        type: 'POST',
	        data: formData,
	        processData: false,
	        contentType: false,
	        success: function (response) 
	        {
	            splitResponse = response.split("|-|");
	            
	            if( splitResponse[0] === "TRUE" )
	            {	
	            	var newBaseUrl = "<?= base_url() ?>";
	            	var currentDate = "<?= date("M d, y H:i:s") ?>";
	            	//var appendMsg = "<br>"+userName+":<a href='"+newBaseUrl+"uploads/"+splitResponse[1]+"' target='_blank'> Attachment </a>";

	            	var appendMsg = '<div class="row"><div class="col-md-8 padding-0">'+userName+" : "+"<a href='"+newBaseUrl+"uploads/"+splitResponse[1]+"' target='_blank'> Attachment </a>"+'</div><div class="col-md-4 padding-0">'+currentDate+'</div></div>';
					$("#showMsgs").append(appendMsg);
	            }
	            else 
	            	alert(splitResponse[1]);
	            	
	        },
	        error: function (error) 
	        {
	        	 console.log(error);
	            
	        }
		    });

	}); 


	//for image files

});

	//for egt AssignedUsers 


	function assignedUser(userId, taskId)
	{
		$(".showEvaluation, .ShowAttendance, .ShowPerformance").html("");
		
		$.post("<?php echo base_url();?>"+"taskmanagement/getAssignedUser",{userId:userId, taskId:taskId }, function( response ){
			$(".assignedUsers").html(response);
		});

	}


	//for egt AssignedUsers 


	//for evaluation 

	function TaskEvaluationExtend(userId, taskid, callback) {
		
	}

	function TaskEvaluation(userId, role, taskid)
	{	

		$.post("<?php echo base_url();?>"+"taskmanagement/getTaskEvaluation",{userId:userId,role:role,taskid:taskid}, function( response ){

			$(".showEvaluation").html(response);
		});

	}


	//for evaluation 

	//for attendance

	function ShowAttendance(employeeID, subTaskID)
	{	
		employeeID = 6; 
		$.ajax({
			method: "POST",
			cache: false,
			url: "../../../taskManagementWithMatrix/ajaxLeadershipReport.php",
			data:{"AttendanceEvaluationMain":true, employeeID:employeeID,subTaskID:subTaskID},
			success: function(ViewHeadingsResponse)
			{	
				console.log(ViewHeadingsResponse);
				$(".ShowAttendance").html(ViewHeadingsResponse);
			}
		});	
	}
	//for attendance

	//for add task

	function AddTask()
	{	
		$.post("<?php echo base_url();?>"+"taskmanagement/addTask", function( response ){
			$(".task-div").html(response);
		});

	}
	//for add task


	$("#TaskPopup").on("click", function()
	{

		$.post("<?php echo base_url();?>"+"taskmanagement/editTask", {taskId:$("#getTaskId").val()}, function( response ){
			$(".task-div").html(response);
		});

	});


	//for Performance 


	function userPerformance(userId)
	{
		$.post("<?php echo base_url();?>"+"taskmanagement/getUserPerformance",{userId:userId}, function( response )
		{
			$(".ShowPerformance").html(response);
		});
	}


	//for Performance 
</script>
</body>
</html>
				
