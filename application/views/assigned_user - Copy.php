<!-- <pre> -->
<style type="text/css">
.fl-right{
  float: right;
}
.well{
  overflow-y: hidden !important;
}
.pd-5{
  padding: 5px !important;
}
</style>
<?php //var_dump($assignedUsers); exit; ?>
  <div class="row">
     <div class="col-md-5 padding-0 fl-right">
      <button class="btn btn-primary" onClick="ShowAttendance('<?php echo $assignedUsers->userid; ?>','1')" >Attendance</button>
      <button class="btn btn-danger" onClick="userPerformance('<?php echo $assignedUsers->userid; ?>')" >Performance</button>
      <button class="btn btn-info" onclick="TaskEvaluation(<?php echo $assignedUsers->userid; ?>, '<?php echo $assignedUsers->role; ?>', <?php echo $assignedUsers->taskid; ?> )" >Evaluation</button>
    </div>

    <div class="col-md-9 pd-5 well padding-0">
    Name : <?= $assignedUsers->firstname." ".$assignedUsers->lastname ?><br>
    Designation : <?= $assignedUsers->designation ?><br>
    Salary : <?= $assignedUsers->actual_salary ?><br>
    Assigned Task : <?= $this->taskmanagement_m->get_db_value('count(*)', 'bm_tasks_assigned', array("userid" => $assignedUsers->userid)) ?>
<br>
    </div>

    <div class="col-md-3 height-80 relative flexbox flexbox2">
      <button class="btn btn-success-custom db btn-slim btn-success"  onClick="ShowAttendance('<?php echo $assignedUsers->userid; ?>','1')" >Attendance</button>
      <button class="btn db btn-success-custom btn-slim btn-success"  onClick="userPerformance('<?php echo $assignedUsers->userid; ?>')" >Performance</button>
      <button class="btn db btn-success-custom btn-slim btn-success" onclick="TaskEvaluation(<?php echo $assignedUsers->userid; ?>, '<?php echo $assignedUsers->role; ?>', <?php echo $assignedUsers->taskid; ?> )" >Evaluation</button>
    </div>
  </div> 