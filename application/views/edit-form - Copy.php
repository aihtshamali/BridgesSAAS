  <!-- <pre> -->  
<?php  //var_dump($assigned); exit; ?>
<!-- 
<div class="container">
  <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Open</button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog custom-modal-set">
    
       
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body"> -->
           <form action="<?= base_url('taskmanagement/update_task'); ?>" accept-charset="utf-8" id="theForm" method="post">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
         
            <label>Task Title:</label>
            <input type="text" class="form-control" id="task_title" name="task_title" placeholder="Task Title" value="<?= $task->taskname ?>">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10">
        <div class="form-group">
          <label for="task_description" class="text-center">Task Description:</label>
          <textarea class="form-control" rows="3" id="task_description" name="task_description" placeholder="Task Description"><?= $task->taskdescription ?></textarea>
        </div>
        </div>
      </div>
       <h3 class="text-center">Alligned To Cluster & Activities</h3>
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
                          echo form_multiselect('cluster-1[]', $cluster1, $selecterdclusters1, $data);
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
                          echo form_multiselect('cluster-2[]', $cluster2, $selecterdclusters2, $data);
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
                          echo form_multiselect('cluster-3[]', $cluster3, $selecterdclusters3, $data);
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
                          echo form_multiselect('cluster-4[]', $cluster4, $selecterdclusters4, $data);
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
                          echo form_multiselect('cluster-5[]', $cluster5, $selecterdclusters5, $data);
                      ?>
                  </div>
              </div>
        </div>
        <div class="row">

        <div class="row text-center">
            <h3>Team</h3>
        </div>    
        <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <select class="form-control" id="employees">
                      <?php
                      foreach ($users as $user) {
                        ?>
                        <option value="<?=$user['userid'];?>"><?=$user['firstname'] .' '.$user['lastname'] ;?></option>
                        <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-1">
                    <div class="form-control" id="init">Initial</div>
                </div>
                <div class="col-md-2">
                    <div class="form-control" id="desig">Designation</div>
                </div>
                <div class="col-md-1">
                    <div class="form-control" id="projects">Project</div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <select class="form-control" id="clubs">
                      <option>1</option>
                      <option>1</option>
                      <option>1</option>
                      <option>1</option>
                      <option>1</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-5">
                    <div class="form-control">
                        <label class="radio-inline">
                          <input type="radio" name="employee_role" value="Team Leader">Team Leader
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="employee_role" value="Team member">Team Member
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="employee_role" value="Moniter">Moniter
                        </label>
                        <button type="button" class="btn-small btn-success small pull-right" id="add-row">Add</button>
                    </div>
                </div>
        </div> 
        <div class="row mt-5" id="appended-rows">
<?php 
          foreach ($assigned as $assign) 
          { 
?>          
              <div class="row">
                <div class="col-md-3">
                <div class="well well-sm"><?=  $assign->firstname .' '. $assign->lastname ?><input type="hidden" name="sRole[]" value="<?= $assign->role ?>"><input type="hidden" id="abc" name="employeeID[]" value="<?= $assign->userid ?>"/><input type="hidden" id="abc" name="taskId[]" value="<?= $assign->taskid ?>"/></div>
                </div>
                <div class="col-md-1">
                    <div class="well well-sm"><?= $assign->initials ?></div>
                </div>
                <div class="col-md-2">
                    <div class="well well-sm"><?= $assign->designation ?></div>
                </div>
                <div class="col-md-1">
                    <div class="well well-sm"><?= $assign->hired_for_project ?></div>
                </div>
                <div class="col-md-1">
                    <div class="well well-sm">clubs</div>
                </div>
                <div class="col-md-4">
                    <div class="well well-sm"><?= $assign->role ?></div>
                </div>
              </div>
<?php
          }
?>
        </div>
        <div class="row">
            <div class="col-md-4">
               <div class="form-inline">   
                  <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" value="<?= $task->startdate ?>">
                  </div>
               </div>   
            </div>
            <div class="col-md-4"> 
               <div class="form-inline">   
                  <div class="form-group">
                    <label for="end_date">End Date:</label>
                      <input type="date" class="form-control" id="end_date" name="end_date" value="<?= $task->enddate ?>" >
                  </div>
               </div> 
            </div>
            <div class="col-md-4">
                <div class="form-control">
                  <label class="radio-inline">Ongoing</label>
                    <label class="radio-inline">
                      <input type="radio" name="ongoing" <?= (($task->ongoing === 1) ? "checked='checked'" : "" ) ?> >Yes
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="ongoing" <?= (($task->ongoing !== 1) ? "checked='checked'" : "" ) ?> >No
                    </label>
                </div>

            </div>
          </div> 

          <div class="row text-center mt-20">
              <button class="btn btn-success" type="submit" id="target">Update Task</button>
          </div>
          
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form> 
<!--       </div>
    </div>
  </div>
</div> -->

<script type="text/javascript">
  $( "#add-row" ).click(function() {
    // appends an item to the end
    var id=$("#employees").val();
    /*var employeeName=$("#employees").text();*/
    var employeeName = $('#employees').find(":selected").text();
    
    var initials = $("#init").text();
    var designation =$("#desig").text();
    var projects =$("#projects").text();
    var role = $('input[name=employee_role]:checked').val();
    $( "#appended-rows" ).append('<div class="row"><div class="col-md-3">\
                    <div class="well well-sm">'+employeeName+'</div>\
                </div>\
                <div class="col-md-1">\
                    <div class="well well-sm">'+initials+'</div>\
                </div>\
                <div class="col-md-2">\
                    <div class="well well-sm">'+designation+'</div>\
                </div>\
                <div class="col-md-1">\
                    <div class="well well-sm">'+projects+'</div>\
                </div>\
                <div class="col-md-1">\
                    <div class="well well-sm">clubs</div>\
                </div>\
                <div class="col-md-4">\
                    <div class="well well-sm">'+role+'</div>\
                </div>\
        </div>');
    $("form").append('<input type="hidden" name="sRole[]" value="'+role+'">\
      <input type="hidden" id="abc" name="employeeID[]" value="'+id+'"/>');
});

</script>