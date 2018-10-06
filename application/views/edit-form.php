<style>
 .input-sm-h25{
  height: 25px !important;
}
.pdr-5{
  padding-right: 5px !important;
}
.tiQfixed
  {
    min-height: 40px !important;
    max-height: auto !important;
    margin:0px !important;
    padding: 0px !important;
    text-align: center;
    line-height: 15px;
  }
.padding_top10
  {
    padding-top:7px !important;
  }
</style>
 
<!-- <div class="modal-body"> -->
           <form action="<?= base_url('taskmanagement/update_task'); ?>" accept-charset="utf-8" id="hideIn" method="post" class="fs-11 hideIn">
      <div class="col-md-12"><span class="pull-right hide-task" onclick="ShowPreviousTask()" id="showPrevious"><i class="fa fa-times fa-2x" aria-hidden="true"></i>
        </span></div>
        
      <div class="row">
         <div class="col-md-3"></div>
        <div class="col-md-3">
          <div class="form-group">
            <input type="hidden" name="taskId1" value="<?php echo $_POST['taskId']; ?>">
            <h4 style="text-align: center;">Task Title:</h4>
            <input type="text" class="form-control fs-11 input-sm-h25 pd-3by5" id="task_title" name="task_title" placeholder="Task Title" value="<?= $task->taskname ?>">
          </div>
        </div>
         <div class="col-md-2">
          <h4 style="text-align:center;">Effort Required</h4>
          <?php 
          $options = array(1 => 1,
                        2 => 2,
                        3 => 3,
                        4 => 4,
                        5 => 5);
          $classes = array('class' => 'form-control fs-11 input-sm-h25');
                        echo form_dropdown('effort', $options, $task->effort, $classes);
                        ?>
          
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <div class="form-group">
          <h4 for="task_description" style="text-align: center;">Task Description:</h4>
          <textarea class="form-control" rows="3" id="task_description" name="task_description" placeholder="Task Description"><?= $task->taskdescription ?></textarea>
        </div>
        </div>
      </div>
       <h4 class="text-center">Alligned To Cluster & Activities</h4>
        <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="cluster-1" class="text-center">Operations</label>
                      <?php
                      $data = array(
                          'id' => 'cluster-selected',
                          'name' => 'cluster-selected',
                          'class' => 'form-control fs-11 pd-3by5'
                        );
                        echo form_multiselect('cluster-selected[]', $clusterCurrent, $selectedClusters, $data);
                      ?>
                  </div>
              </div>

              <!--
              <div class="col-md-2 w-20 pdr-5">
                  <div class="form-group">
                    <label for="cluster-1" class="text-center">Operations</label>
                      <?php
                      $data = array(
                        'id' => 'cluster-1',
                        'name' => 'cluster-1',
                        'class' => 'form-control fs-11 pd-3by5'
                        );
                          echo form_multiselect('cluster-1[]', $cluster1, $selecterdclusters1, $data);
                      ?>
                  </div>
              </div>
              <div class="col-md-2 w-20 pdr-5 pdl-0">
                  <div class="form-group">
                    <label for="cluster-2" class="text-center">Strategic</label>
                   <?php
                      $data = array(
                        'id' => 'cluster-2',
                        'name' => 'cluster-2',
                        'class' => 'form-control fs-11 pd-3by5'
                        );
                          echo form_multiselect('cluster-2[]', $cluster2, $selecterdclusters2, $data);
                      ?>
                  </div>
              </div>
              <div class="col-md-2 w-20 pdr-5 pdl-0">
                  <div class="form-group">
                    <label for="cluster-3" class="text-center">Resource</label>
                    <?php
                      $data = array(
                        'id' => 'cluster-3',
                        'name' => 'cluster-3',
                        'class' => 'form-control fs-11 pd-3by5'
                        );
                          echo form_multiselect('cluster-3[]', $cluster3, $selecterdclusters3, $data);
                      ?>
                  </div>
              </div>
              <div class="col-md-2 w-20 pdr-5 pdl-0">
                  <div class="form-group">
                    <label for="cluster-4" class="text-center">OutReach</label>
                    <?php
                      $data = array(
                        'id' => 'cluster-4',
                        'name' => 'cluster-4',
                        'class' => 'form-control fs-11 pd-3by5'
                        );
                          echo form_multiselect('cluster-4[]', $cluster4, $selecterdclusters4, $data);
                      ?>
                  </div>
              </div>
              <div class="col-md-2 w-20 pdl-0">
                  <div class="form-group">
                    <label for="cluster-5" class="text-center">Performances</label>
                    <?php
                      $data = array(
                        'id' => 'cluster-5',
                        'name' => 'cluster-5',
                        'class' => 'form-control fs-11 pd-3by5'
                        );
                          echo form_multiselect('cluster-5[]', $cluster5, $selecterdclusters5, $data);
                      ?>
                  </div>
              </div>
              -->
        </div>
        <div class="row">

        <div class="row text-center">
            <h4>Team</h4>
        </div>    
        <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <select class="form-control fs-11 input-sm-h25 tiQfixed" id="employees">
                      <?php
                        foreach ($users as $user) 
                          {
                      ?>
                      <option value="<?=$user['userid'];?>"><?=$user['firstname'] .' '.$user['lastname'] ;?></option>
                      <?php
                          }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-1 padding-0">
                    <div class="form-control fs-11 tiQfixed padding_top10" id="init">Initial</div>
                </div>
                <div class="col-md-2" style="padding-left:5px; padding-right:5px;">
                    <div class="form-control fs-11 input-sm-h25 tiQfixed padding_top10" id="desig">Designation</div>
                </div>
                <div class="col-md-1 padding-0">
                    <div class="form-control fs-11 input-sm-h25 tiQfixed padding_top10" id="projects">Project</div>
                </div>
                <div class="col-md-1" style="padding:0 5px;">
                  <div class="form-group fs-11">
                    <select class="form-control fs-11 input-sm-h25 tiQfixed" id="clubs">
                      <option>1</option>
                      <option>1</option>
                      <option>1</option>
                      <option>1</option>
                      <option>1</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-5 wd-40 pd-3by5" style="padding:0;">
                    <div class="form-control fs-11 input-sm-h25 tiQfixed padding_top10">
                        <label class="radio-inline fs-11">
                          <input type="radio" name="employee_role" value="Team Leader" checked>Team Leader
                        </label>
                        <label class="radio-inline fs-11">
                          <input type="radio" name="employee_role" value="Team member">Team Member
                        </label>
                        <label class="radio-inline fs-11">
                          <input type="radio" name="employee_role" value="Monitor">Monitor
                        </label>
                        <button type="button" class="btn btn-slim btn-success pull-right" id="add-row">Add</button>
                    </div>
                </div>
        </div> 
        <div class="row mt-5" id="appended-rows">
<?php 
          foreach ($assigned as $assign) 
          { 
//echo "<pre>";          var_dump($assign); exit;
?>          
              <div class="row" id="delRole<?= $assign->userid ?>">
                <div class="col-md-2" style="padding-right:5px;">
                <div class="well well-sm"><?=  $assign->firstname .' '. $assign->lastname ?><input type="hidden" name="sRole[]" value="<?= $assign->role ?>"><input type="hidden" id="abc" name="employeeID[]" value="<?= $assign->userid ?>"/><input type="hidden" id="abc" name="taskId[]" value="<?= $assign->taskid ?>"/></div>
                </div>
                <div class="col-md-1 padding-0">
                    <div class="well well-sm"><?= $assign->initials ?></div>
                </div>
                <div class="col-md-2" style="padding-left:5px; padding-right:5px;">
                    <div class="well well-sm"><?= $assign->job_title ?></div>
                </div>
                <div class="col-md-1 padding-0">
                    <div class="well well-sm"><?= $assign->hired_for_project ?></div>
                </div>
                <div class="col-md-1" style="padding:0 5px;">
                    <div class="well well-sm">clubs</div>
                </div>
                
              
                <div class="col-md-5 wd-40 pd-3by5" style="padding:0;">
                    <div class="form-control fs-11 input-sm-h25 pdr-0 pdl-0" style="padding:5px;">
                      
                      <?php
                      if ($assign->role == 'Team Leader') {
                        echo '
                            <label class="radio-inline fs-11">
                              <input type="radio" name="employee_role'.$assign->userid.'" value="Team Leader" onchange="save_role('.$assign->userid.',' .$assign->taskid.')" checked>Team Leader
                            </label>';
                          }else{

                        echo '<label class="radio-inline fs-11">
                              <input type="radio" name="employee_role'.$assign->userid.'" value="Team Leader" onchange="save_role('.$assign->userid.',' .$assign->taskid.')">Team Leader
                            </label>';
                          }
                        if ($assign->role == 'Team member') {
                          echo '<label class="radio-inline fs-11">
                                  <input type="radio" name="employee_role'.$assign->userid.'" value="Team member" onchange="save_role('.$assign->userid.',' .$assign->taskid.')" checked>Team Member
                                </label>';
                        }else{
                          echo '<label class="radio-inline fs-11">
                                  <input type="radio" name="employee_role'.$assign->userid.'" value="Team member" onchange="save_role('.$assign->userid.',' .$assign->taskid.')">Team Member
                                </label>';
                        }
                        if ($assign->role == 'Monitor') {
                          echo '<label class="radio-inline fs-11">
                                  <input type="radio" name="employee_role'.$assign->userid.'" value="Monitor" onchange="save_role('.$assign->userid.',' .$assign->taskid.')" checked>Monitor
                                </label>';
                        }else{
                          echo '<label class="radio-inline fs-11">
                                  <input type="radio" name="employee_role'.$assign->userid.'" value="Monitor" onchange="save_role('.$assign->userid.',' .$assign->taskid.')">Monitor
                                </label>';
                        }
                        echo '<span class="pull-right" style="cursor: pointer;" onclick="deleteuser('.$assign->userid.',' .$assign->taskid.')"><i class="fa fa-times" aria-hidden="true"></i></span>';
                      ?>

                </div>
              </div>
          </div>   
<?php
          }
?>
        </div>
        <div class="row">
            <div class="col-md-3 pdr-0">
               <div class="form-inline">   
                  <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="date" class="form-control fs-11 input-sm-h25" id="start_date" name="start_date" value="<?= $task->startdate ?>">
                  </div>
               </div>   
            </div>
            <div class="col-md-3 pdr-0"> 
               <div class="form-inline">   
                  <div class="form-group">
                    <label for="end_date">End Date:</label>
                      <input type="date" class="form-control fs-11 input-sm-h25" id="end_date" name="end_date" value="<?= $task->enddate ?>" >
                  </div>
               </div> 
            </div>
            <div class="col-md-3 padding-0">
                <label class="radio-inline"></label>
                <div class="form-control fs-11 input-sm-h25">
                  <label class="radio-inline">Ongoing</label>
                    <label class="radio-inline">
                      <input type="radio" name="ongoing" value="1" <?= (($task->ongoing == 1) ? "checked='checked'" : "" ) ?> >Yes
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="ongoing" value="0" <?= (($task->ongoing == 0) ? "checked='checked'" : "" ) ?> >No
                    </label>
                </div>
            </div>
            <div class="col-md-3 pdl-0">
                <label class="radio-inline"></label>
                <div class="form-control fs-11 input-sm-h25 pdr-0 pdl-0">
                  <label class="radio-inline">Recurring</label>
                    <label class="radio-inline">
                      <input type="radio" name="reccuring" <?= (($task->reccuring === 1) ? "checked='checked'" : "" ) ?> >Yes
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="reccuring" <?= (($task->reccuring !== 1) ? "checked='checked'" : "" ) ?> >No
                    </label>
                </div>
            </div>
          </div> 

          <div class="row text-center mt-20">
              <button class="btn btn-success" onclick="return updateTask()" id="target">Update Task</button>
          </div>
          
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form> 
        <input type="hidden" id="delFresh" value="1"/>
<!--       </div>
    </div>
  </div>
</div> -->

<script type="text/javascript">
  $( "#add-row" ).click(function() {
    // appends an item to the end
    var id=$("#employees").val();
    var fid =$("#delFresh").val();
    /*var employeeName=$("#employees").text();*/
    var employeeName = $('#employees').find(":selected").text();
    
    var initials = $("#init").text();
    var designation =$("#desig").text();
    var projects =$("#projects").text();
    var role = $('input[name=employee_role]:checked').val();
    $( "#appended-rows" ).append('<div class="row" id="frow'+fid+'"><div class="col-md-2" style="padding-right:5px;">\
                    <div class="well well-sm">'+employeeName+'</div>\
                </div>\
                <div class="col-md-1 padding-0">\
                    <div class="well well-sm">'+initials+'</div>\
                </div>\
                <div class="col-md-2" style="padding-left:5px; padding-right:5px;">\
                    <div class="well well-sm">'+designation+'</div>\
                </div>\
                <div class="col-md-1 padding-0">\
                    <div class="well well-sm">'+projects+'</div>\
                </div>\
                <div class="col-md-1" style="padding:0 5px;">\
                    <div class="well well-sm">clubs</div>\
                </div>\
                <div class="col-md-5 wd-40 pd-3by5 padding-0">\
                    <div class=" well well-sm">'+role+'<span class="pull-right" style="cursor: pointer;" onclick="deleteFuser('+fid+')"><i class="fa fa-times" aria-hidden="true"></i></span></div>\
                </div>\
        </div>');
    $("#delFresh").val(parseInt(fid)+1);
    $("form").append('<input type="hidden" name="sRole[]" value="'+role+'">\
      <input type="hidden" id="abc" name="employeeID[]" value="'+id+'"/>');


});


function updateTask()
{
      /*e.preventDefault(); //STOP default action
        e.unbind(); //unbind. to stop multiple form submit.*/

      var postData = $("#hideIn").serializeArray();
       var formURL  = $("#hideIn").attr("action");

      var c1 = $("#cluster-1").val();
      var c2 = $("#cluster-2").val();
      var c3 = $("#cluster-3").val();
      var c4 = $("#cluster-4").val();
      var c5 = $("#cluster-5").val();
      if (c1 == 'null' || c2 == 'null' || c3 == 'null' || c4 == 'null' || c5 == 'null') {
        alert("Select Cluster First");
        return false;
      };
       console.log(postData);
       console.log(formURL);
       $.ajax(
       {
           url : formURL,
           type: "POST",
           data : postData,
           success:function(data, textStatus, jqXHR) 
           {
              location.reload();
           },
           error: function(jqXHR, textStatus, errorThrown) 
           {
               //if fails      
           }
       });
       return false;
        
}
function deleteFuser(fid){
  $("#frow"+fid).remove();
  return false;
}

function save_role(userid, taskid)
{
  var role = $('input[name=employee_role'+userid+']:checked').val();
  $.post("update_role",
    {
      role:role,
      userid:userid,
      taskid:taskid
    }, function(data){

    }

    );
  alert(role);
}

function deleteuser(userid, taskid)
{


       $.post("delete_assigned_user",
           {
           userid : userid,
           taskid : taskid
         },
           function(response) 
           {
              $("#delRole"+userid).remove();
           }
       //     error: function(response) 
       //     {
       //         //if fails      
       //     }
       // });
       // return false;
        
);
     }
$('#employees').change(function(){
  var id=$("#employees").val();

    $.ajax({
        type: "POST",
        url: "<?php echo site_url('taskmanagement/get_user_initials'); ?>", 
        data: {id:id},
         success :   function(data){
          var dataArray=jQuery.parseJSON(data);
          $("#init").text(dataArray.initials);
          $("#projects").text(dataArray.project_title);     
        }
        });
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('taskmanagement/get_designation'); ?>", 
        data: {id:id},
        success :   function(data){
          var dataArray=jQuery.parseJSON(data);
          $("#desig").text(dataArray.job_title);     
            
        }
        });
    });

</script>