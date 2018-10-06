<!-- <pre> <?php  //var_dump($assignedUsers); exit; ?> -->

<style type="text/css">



</style>

<?php  if( $this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "Cordinator" || $this->session->userdata('id') == $assignedUsers->userid || $SessionUserRole == "Monitor" ) {//var_dump($assignedUsers); exit; ?>

  <div class="width-90 m-auto well padding-0" style="padding-top: 5px;">

<div class="row">

  <div class="col-md-12 pdr-0 flexbox">

      <div class="col-md-1">

        <img src="<?php echo base_url()?>/assets/images/red-logo.png" width="50">

      </div>

      <div class="col-md-5 pdl-0">

         <label class="bold-label">Name : </label><?= $assignedUsers->firstname." ".$assignedUsers->lastname ?><br>

         <label class="bold-label">Designation : </label><?= $assignedUsers->designation ?>

      </div>



      <div class="col-md-5"> 

      <!-- <= $assignedUsers->actual_salary ?> -->

         <label class="bold-label">Salary :###### </label><br>

     <!--  Assigned Task : <?= $this->taskmanagement_m->get_db_value('count(*)', 'bm_tasks_assigned', array("userid" => $assignedUsers->userid)) ?><br> -->

      <label class="bold-label">Completed : </label><?php echo $this->taskmanagement_m->get_task_counts($assignedUsers->userid) ?>

      </div>

    

    </div>

<div class="col-md-12 flexbox flexbox4 bg-performance att-per-ev-btn" >

<!-- <div class="height-80 relative flexbox flexbox2">

</div> -->



<?php

    if( $this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "Cordinator" || $this->session->userdata('id') == $assignedUsers->userid || $SessionUserRole == "Monitor" )

    {

?>

      <button class="btn btn-success db btn-slim btn-success-custom" id="att" onClick="ShowAttendance('<?php echo $assignedUsers->userid; ?>','1')" >Attendance</button>

      <button class="btn db btn-success btn-slim btn-success-custom" id="per"  onClick="userPerformance('<?php echo $assignedUsers->userid; ?>')" >Performance</button>

      

      </br>

      <button class="btn db btn-success btn-slim btn-success-custom" onclick="TaskEvaluation(<?php echo $assignedUsers->userid; ?>, '<?php echo $SessionUserRole; ?>', <?php echo $assignedUsers->taskid; ?> )" >Evaluation</button>



      

<?php

    }

  } else { echo "<span style='margin-left:80px'>You do not have access";}

?>



    </div>

    </div>



    

  </div> 