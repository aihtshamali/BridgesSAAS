<div>

			<div class="task-div">

				<div class="col-md-12 div-top-bar"> Edit Task</div>

				<div class="col-md-12"><span class="pull-right hide-task" onclick="hideEditTask()"><i class="fa fa-times fa-2x" aria-hidden="true"></i>

				</span></div>

				<input type="hidden" class="form-control" id="getTaskId"  value="<?= $task->task_id ?>" >



				 <div class="row text-center custom-row-width">

<!-- 				  <div class="row">

 -->					  <div class="col-md-12 padding-0" >

					

					     	<div class="relative">



							<div class="row">

								<div class="width-90 m-auto">



									<div class="cluster-1 padding-0 btrr-8 well bg-light-gry task-desc flexbox m-height-80">

										<div class="col-md-12 padding-0">



				<span class="pull-right"><?php echo $task->startdate; ?></span>

										<center><b><?= $task->taskname?></b></center>

				<span class="pull-right"><?php echo $task->enddate; ?></span>

			    						<center><?= $task->taskdescription?></center><br/>



										<div class="height-30 fs-10 cluster-2 bg-mid-gry flexbox center">

										<div class="child-box bblr-8 relative">

											<span class="sub-child-box sub-child-box-lg" style="background-color: <?php echo $this->taskmanagement_m->rating_percen($id) ?> "></span>

										</div>

										<?php

										//print_r($assigned); 

										foreach ($assigned as $assign) 

										{



										?>

								<div class="child-box relative bdr-lgry" >

									<span class="decorate overflow-ell" onclick="assignedUser(<?php echo $assign->userid; ?>,'<?php echo $assign->taskid; ?>')" style="cursor: pointer;"><?= $assign->firstname."<br>".$assign->lastname?></span>

									<!--  -->

									<span class="absolute blr-0">	

<?php

									$rating = $this->taskmanagement_m->get_assigned_tasks_percentage( $assign->taskid,  $assign->userid,  $assign->role);

									// print_r($rating);exit;

									echo "<div id='custom-bars' class='custom-bars'><br><span style='top:9px;background: ".((isset($rating[0])) ? $rating[0] : '#b2aeae' ).";height: 3px;width: 60%;'></span>";





									echo "<span style='top:3px;background: ".((isset($rating[1])) ? $rating[1] : '#B2AEAE' ).";height: 3px;width: 60%;'></span></div>";

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



<?php

    if( $this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "Principal" || $this->session->userdata('usertype') == "Cordinator" )

    {

?>

							<div class="col-md-12 pdt-3 flexbox flexbox4 bg-performance">

								<button class="btn btn-success btn-slim btn-success-custom" id="TaskPopup">Edit Task</button>

								<button class="btn btn-success btn-slim btn-success-custom" id=""  data-toggle="modal" data-target="#confirm-delete">Delete Task</button>

								<button class="btn btn-success btn-slim btn-success-custom"  id="disable1" <?= (($task->taskstatus == "Completed" || $task->taskstatus == "Incomplete") ? "disabled" : "" ) ?> onclick="t_status_get(<?php echo $task->task_id; ?>, 'Completed')">Completed</button>

								<button class="btn btn-success btn-slim btn-success-custom" id="disable2" <?= (($task->taskstatus == "Completed" || $task->taskstatus == "Incomplete") ? "disabled" : "" ) ?> onclick="t_status_get(<?php echo $task->task_id; ?>, 'Incomplete')">Incomplete</button>

								<!--
								<button class="btn btn-success btn-slim btn-success-custom" onclick="removeClass()" id="#checkEvaluate">Evaluate</button>
								-->


							<div class="none" id="tooltip">Please Select a Team Member.</div>

							

							</div>

<?php

	}

?>							

								</div>

							</div>													

							</div><!-- Row ends here -->

							</div>

	  					

					  </div>

				  <!-- </div> -->

				 </div>

		



				<!-- Message Box by Anees -->

				<div class="">

					<div class="row">

						<div class="width-90 m-auto">

							<div class="row well padding-0">

							

								<div class="col-md-12 padding-0">

									<div class="well chat-box pdb-5 mb-0" id="showMsgs" style="margin-bottom: 0 !important;">

										<?php

												foreach ($getMsgs as $msg) 

												{ 

													$newMsg =(($msg->type == 0) ? $msg->msg : "<a href='".base_url()."uploads/".$msg->msg."' target='_blank'>Attachment</a>");

										?>

									  <div class="row">

									  <div class="col-md-2 padding-0">

									  	<input type="checkbox" class="msgcbox" name="msg" id="msgcheck<?php echo $msg->id; ?>" onchange="sendID(<?php echo $msg->id; ?>)" style="margin-right: 5px; margin-top:0;"  <?= (($msg->remark == '1') ? "checked" :'' );?> ><?= date("M d, H:i" , strtotime($msg->created)) ?>

									  </div>

									  <div class="col-md-10 padding-0" id="relcomment<?php echo $msg->id; ?>" style="line-height: 10px;"><?= $this->taskmanagement_m->get_db_value('fname', 'newba_users', array("id" => $msg->userid))." : ".$newMsg ?> 

										</div>

									  </div>

										

										<?php			

												}

										?>										

									</div>

								</div>

								<!-- <div class="col-md-3 flexbox mt-2 pdr-0">

									<div style="margin:0 3px 3px 0;">

									</div>

								</div> -->



								<div class="row">

									<div class="col-md-12 padding-0">

										<div class="input-group col-md-12">

									    	<input type="text" class="form-control" id="msg" name="msg" placeholder="Message..." style="background-color: rgba(250, 250, 250, 1);">

									    </div>

									    <div class="flexbox flexbox4 pdt-3 bg-performance" style="padding: 8px 12px 5px 8px;">

										

										<button class="getComments btn btn-success btn-success-custom btn-slim">Send</button>

										<div class="relative" style="margin-right:3px;">

											<form enctype="multipart/form-data"  id="postData"  method="post" action="<?= base_url('taskmanagement/saveAttach'); ?>" >

												<input type="hidden" name="taskid" id="taskid" value="<?php $link = $_SERVER['PHP_SELF'];

												    $link_array = explode('/',$link);

												    echo $page = end($link_array); ?>">

												<input type="file" id="attachFile" class="none absolute" name="attachFile">

												<label for="attachFile" class="btn btn-success  btn-success-custom btn-slim">Attachment</label>

											</form>

										</div>

										<button class="btn btn-success btn-success-custom btn-slim">Audio</button>

										<button class="btn btn-success btn-success-custom btn-slim">Video</button>

									</div>

									</div>

									<!-- <div class="col-md-3 flexbox">

										<button class="btn btn-success btn-success-custom btn-slim">Audio</button>

										<button class="btn btn-success btn-success-custom btn-slim">Video</button>

										<button class="getComments btn btn-success btn-success-custom btn-slim" onclick="addMessage()">Send</button>

										<div class="relative" style="margin-right:3px;">

											<form enctype="multipart/form-data"  id="postData"  method="post" action="<?= base_url('taskmanagement/saveAttach'); ?>" >

												<input type="hidden" name="taskid" id="taskid" value="<?php $link = $_SERVER['PHP_SELF'];

												    $link_array = explode('/',$link);

												    echo $page = end($link_array); ?>">

												<input type="file" id="attachFile" class="none absolute" name="attachFile">

												<label for="attachFile" class="btn btn-success  btn-success-custom btn-slim">Attachment</label>

											</form>

										</div>

									</div> -->

								</div>

							<!-- </div> -->

							</div>



							<div class="row">

								<!-- <div class="col-md-9 padding-0">

									<div class="input-group" style="margin-left: 22px;">

								    	<span class="input-group-addon">Message</span>

								    	<input type="text" class="form-control" id="msg" name="msg" placeholder="Message...">

								    </div>

								</div> -->

								<!-- <div class="col-md-3 flexbox mt-2">

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

								</div> -->

							</div>

						</div>

					</div>

					<div class="wells assignedUsers"></div><!-- assignedUsers -->

				</div>

			

				<div class="ShowAttendance"></div>

				<div class="ShowPerformance"></div>

				<div class="showEvaluation"></div>

			

			</div><!-- task_div -->

		</div><!-- container_div -->

<!-- Modal -->

<div id="commentSender" class="modal fade" role="dialog">

  <div class="modal-dialog">



    <!-- Modal content-->

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" onclick="uncheck_comment(<?php echo $msg->id; ?>)">&times;</button>

        <h4 class="modal-title">Pass Comments</h4>

      </div>

      <div class="modal-body">

        	<div class="height-30 fs-10 cluster-2 bg-mid-gry flexbox center">

        		<input type="hidden" id="hiddenid" />

				<?php 

				foreach ($assigned as $assign) 

				{

				?>

				<div class="child-box relative bdr-lgry" >

				<span class="decorate overflow-ell" onclick="sendcomment(<?php echo $assign->userid; ?>)" style="cursor: pointer;"><?= $assign->firstname."<br> ".$assign->lastname?></span>				        

				</div>

				<?php

				}

				?>

			</div>

      </div>

      <!-- <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="uncheck_comment(<?php echo $msg->id;?>)">Close</button>

      </div> -->

    </div>



  </div>

</div>



<script type="text/javascript">

	$(document).ready(function() {

	    $('#msg').keydown(function(event) {

	        if (event.keyCode == 13) {



	            $(".getComments").click();

	            return false;

	         }

	    });



	     var elem = document.getElementById('showMsgs');

	   var msg = $("#msg").val();

	   $("#showMsgs").append(msg);

	   elem.scrollTop = elem.scrollHeight;

	});

</script>

	

<script type="text/javascript">



//haroon

function uncheck_comment(comment_id){



	$("#msgcheck"+comment_id).prop('checked', false);	

}



$(document).ready(function(){

$("#TaskPopup").on("click", function()

	{	  	

		 var clusterid = <?php echo $_POST['clusterId']; ?> ;



		var tID = $("#getTaskId").val();

		$.post("<?php echo base_url();?>"+"taskmanagement/editTask", {
			clusterId: <?php echo $clusterId; ?>,
			taskId:$("#getTaskId").val() }, 

			function( response ){

			$(".task-div").html(response+'<input type="hidden" name="tID[]" id="gettID" value="'+tID+'">');

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



	});



	//for msg text only

	$(".getComments").on("click", function(){



		if($("#msg").val() == "")

		{

			alert("please enter msg before send.");

			return false;

		}	

		var userId   = "<?= $this->session->userdata('id')  ?>";	

		var userName = "<?= $this->session->userdata('name') ?>";

		var taskid = "<?=$id?>";		

		$.post("<?php echo base_url();?>"+"taskmanagement/saveMsg", { userId: userId, taskId: taskid, msg: $("#msg").val() } , function( response )

		{	

			var response = $.trim(response);

				

			if(response != "FALSE" )

			{

					// tat

				var currentDate = '<input type="checkbox" name="msg" id="msgcheck" style="margin-right: 5px;margin-top:0"><?= date("M d, H:i") ?>';

				var appendMsg = '<div class="row"><div class="col-md-2 padding-0">'+currentDate+'</div><div class="col-md-10 padding-0" style="line-height: 10px;">'+userName+" : "+$("#msg").val()+'</div></div>';

				$("#showMsgs").append(appendMsg);

				var elem = document.getElementById('showMsgs');

				elem.scrollTop = elem.scrollHeight;

				$("#msg").val("")

			}	

			

		});



	});

	//for msg text only



	//for image files



$("#attachFile").on('change',function(evt){

    

    evt.preventDefault();

    var formData = new FormData($("#postData")[0]);

    var userName = "<?= $this->session->userdata('name') ?>";

    var taskid = "<?= $task->task_id ?>";

     formData.append("taskid",taskid);

 $.ajax({

	        url: $("#postData").attr('action'),

	        type: 'POST',

	        data: formData,

	        processData: false,

	        contentType: false,

	        success: function (response) 

	        {

	        	var response = response.trim();

	            splitResponse = response.split("|-|");

	            

	            if( splitResponse[0] != "FALSE" )

	            {	

	            	var newBaseUrl = "<?= base_url() ?>";

	            	var currentDate = "<?= date("M d,  H:i") ?>";

	            	//var appendMsg = "<br>"+userName+":<a href='"+newBaseUrl+"uploads/"+splitResponse[1]+"' target='_blank'> Attachment </a>";

	            	var appendMsg = '<div class="row"><div class="col-md-2 padding-0"><i class="fa fa-paperclip" aria-hidden="true" style="margin-right:9px;"></i>'+currentDate+'</div><div class="col-md-10 padding-0">'+userName+" : "+"<a href='"+newBaseUrl+"uploads/"+splitResponse[1]+"' target='_blank'> Attachment </a>"+'</div></div>';

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





	function TaskEvaluation(userId, role, taskid)

	{	

			var clusterName="<?=$clussternumber?>";

		$.post("<?php echo base_url();?>"+"taskmanagement/getTaskEvaluation",{userId:userId,role:role,taskid:taskid,clustername:clusterName}, function( response ){



			$(".showEvaluation").html(response);

		});



	}





	//for evaluation 



	//for attendance



	function ShowAttendance(userId)

	{	

		$('#att').unbind("click");

		// employeeID = 6; 

		// $.ajax({

		// 	method: "POST",

		// 	cache: false,

		// 	url: "../../../taskManagementWithMatrix/ajaxLeadershipReport.php",

		// 	data:{"AttendanceEvaluationMain":true, employeeID:employeeID,subTaskID:subTaskID},

		// 	success: function(ViewHeadingsResponse)

		// 	{	

		// 		console.log(ViewHeadingsResponse);

		// 		$(".ShowAttendance").html(ViewHeadingsResponse);

		// 	}

		// });	

		$.post("<?php echo base_url();?>"+"taskmanagement/getAttendance",{userId:userId}, function( response )

		{

			$(".ShowAttendance").html(response);

		});

	}

	//for attendance



	

/*

	$("#TaskPopup").on("click", function()

	{

		var tID = $("#gettID").val();

		$.post("<?php echo base_url();?>"+"taskmanagement/editTask", {taskId:$("#getTaskId").val()}, function( response ){

			$(".task-div").html(response+'<input type="hidden" name="tID[]" id="gettID" value="'+tID+'">');

		});



	});*/





	//for Performance 





	function userPerformance(userId)

	{

		$('#per').unbind("click");



		$.post("<?php echo base_url();?>"+"taskmanagement/getUserPerformance",{userId:userId}, function( response )

		{

			$(".ShowPerformance").html(response);

		});

	}

	function t_status_get(userid, status){

		$.post("<?php echo base_url();?>"+"taskmanagement/t_status",{userid:userid, status:status}, function( response )

		{

		console.log(response);

		if(response == "TRUE")

		{

			$('#disable1').prop('disabled', true);

			$('#disable2').prop('disabled', true);



		}

		if (response == "FALSE") 

		{

			$('#disable1').prop('disabled', false);

			$('#disable2').prop('disabled', false);

		}



		});

	}

	// remarks or comments check

	function sendcomment(userid)

	{

		var comment_id = $("#hiddenid").val();

		$.post("<?php echo base_url(). 'salaryslip/remark'; ?>",

			{comment_id:comment_id,

				userid:userid},

			function(data){

				//alert(data);

				$("#commentSender").modal('hide');



			}

		);

	}



	function sendID(id){

		$("#hiddenid").val(id);

		var ckbox = $('.msgcbox');

    // $('input').on('click',function () {

        if (ckbox.is(':checked')) {

        	$("#commentSender").modal('show');

        } else {

            uncheck_comment();

        }

    // });

		// if ($(this).is(':checked')) {

		// 	alert("checked");

		// }else{

		// 	alert("unchecked");



		// }

	}



	function Delete_Task(taskid){

		$.post("<?php echo base_url();?>"+"taskmanagement/delete_task",{taskid:taskid}, function( response )

		{

		var response = $.trim(response)

     

		if(response == "TRUE")

		{

			$('#confirm-delete').modal('hide');

	     	location.reload();

			

		}

		if (response == "FALSE") 

		{

			alert('Some Error Occured');



			

		}



		});

	}

$( document ).ready(function() {

	

	$('#employees').change(function(){

  	var id=$("#employees").val();

 	alert();

    $.ajax({

        type: "POST",

        url: "<?php echo site_url('taskmanagement/get_user_initials'); ?>", 

        data: {id:id},

         success :   function(data){

          var dataArray=jQuery.parseJSON(data);

          $("#init").text(dataArray.initials);

          $("#desig").text(dataArray.designation);     

          $("#projects").text(dataArray.project_title);     

        }

        });

    });



       $("tbody").each(function() {

        var $this = $(this);

        var newrows = [];

        $this.find("tr").each(function(){

            var i = 0;

            $(this).find("td").each(function(){

                i++;

                if(newrows[i] === undefined) { newrows[i] = $("<tr></tr>"); }

                newrows[i].append($(this));

            });

        });

        $this.find("tr").remove();

        $.each(newrows, function(){

            $this.append(this);

        });

        return false;

    });

});





	//for Performance 

</script>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog width-30">

        <div class="modal-content">

            <div class="modal-body">

               <h2 class="h2">Do you really want to delete?</h2>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-slim btn-success-custom" data-dismiss="modal">Cancel</button>

                <a class="btn btn-danger btn-slim btn-success-custom" onclick="Delete_Task(<?php echo $task->task_id; ?>, 'Completed')">Yes</a>

            </div>

        </div>

    </div>

</div>

				

