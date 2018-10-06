<style type="text/css">

.padding {
  padding-right: 3px;
  padding-left: 4px;
}
.input-sm-h25{
	height: 25px !important;
}
.pdr-5{
	padding-right: 5px !important;
}
.div-top-bar{
  height: 20px; background-color:#dbdbdb;text-align: center; line-height: 19px;
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
.margin_custom
  {
    margin-left: -14px !important;
  }
.lablePaddingLeft
  {
    padding-left: 5px !important;
  }
</style>
<div>
<form id="theFormm"  method="post" action="<?= base_url(); ?>/Taskmanagement/create_task">
      <div class="col-md-12 div-top-bar">
        Add Task
      </div>
      <div class="row">
        <div class="col-md-3"></div>
          <div class="col-md-3">
          <div class="form-group">
            
            <!-- <form action="create_task" accept-charset="utf-8" id="theForm" method="post"> -->
            
            <h4 style="text-align:center;">Task Title</h4>
            <input type="text" class="form-control fs-11 input-sm-h25 pd-3by5" id="task_title" name="task_title" placeholder="Task Title">
          </div>
        </div>
        <div class="col-md-2">
          <h4 style="text-align:center;">Effort Required</h4>
          <select name="effort" class="form-control fs-11 input-sm-h25">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
          </select>
        </div>
        <div class="col-md-4">
          <span class="pull-right hide-task" onclick="hideAddTask()"><i class="fa fa-times fa-2x" aria-hidden="true"></i>
          </span>
        </div>
      </div>
      <div class="row">

        <div class="col-md-12">
        <div class="form-group">
          <h4 style="text-align:center;">Task Description</h4>
          <textarea class="form-control fs-11" rows="3" id="task_description" name="task_description" placeholder="Task Description"></textarea>
          <input type="hidden" name="clusterid"  value="<?=$clusterid?>"> 
        </div>
        </div>
      </div>
        <h4 class="text-center">Alligned To Cluster & Activities</h4>
        <div class="row">
          <div class="form-group col-md-12">
            <?php
              /*
              $classes = array('class' => 'form-control fs-11',
                                    'id' => 'selCluster',
                                    'style' => "width:100%; height:40px;"
                                    );

              $options= $clusterCurrent;
              echo form_dropdown('categories', $options, 1, $classes);*/

              $data = array(
                'id' => 'cluster-selected',
                'name' => 'cluster-selected',
                'class' => 'form-control fs-11 pd-3by5',
                'onChange' => 'checkCluster()'
              );
              echo form_multiselect('cluster-selected[]', $clusterCurrent, array(), $data);

            ?>
            </div>
              <!--
              <div class="col-md-2 w-20 pdr-5">
                  <div class="form-group">
                    <label for="cluster-1" class="text-center">1- Operations</label>
                      <?php
                      $data = array(
                        'id' => 'cluster-1',
                        'name' => 'cluster-1',
                        'class' => 'form-control fs-11 pd-3by5',
                        'onChange' => 'checkCluster()'
                        );
                          echo form_multiselect('cluster-1[]', $cluster1, array(), $data);
                      ?>
                  </div>
              </div>
              <div class="col-md-2 w-20 pdr-5 pdl-0">
                  <div class="form-group">
                    <label for="cluster-2" class="text-center">2- Strategic</label>
                   <?php
                      $data = array(
                        'id' => 'cluster-2',
                        'name' => 'cluster-2',
                        'class' => 'form-control fs-11 pd-3by5',
                        'onChange' => 'checkCluster()'
                        );
                          echo form_multiselect('cluster-2[]', $cluster2, array(), $data);
                      ?>
                  </div>
              </div>
              <div class="col-md-2 w-20 pdr-5 pdl-0">
                  <div class="form-group">
                    <label for="cluster-3" class="text-center">3- Resource</label>
                    <?php
                      $data = array(
                        'id' => 'cluster-3',
                        'name' => 'cluster-3',
                        'class' => 'form-control fs-11 pd-3by5',
                        'onChange' => 'checkCluster()'
                        );
                          echo form_multiselect('cluster-3[]', $cluster3, array(), $data);
                      ?>
                  </div>
              </div>
              <div class="col-md-2 w-20 pdr-5 pdl-0">
                  <div class="form-group">
                    <label for="cluster-4" class="text-center">4- OutReach</label>
                    <?php
                      $data = array(
                        'id' => 'cluster-4',
                        'name' => 'cluster-4',
                        'class' => 'form-control fs-11 pd-3by5',
                        'onChange' => 'checkCluster()'
                        );
                          echo form_multiselect('cluster-4[]', $cluster4, array(), $data);
                      ?>
                  </div>
              </div>
              <div class="col-md-2 w-20 pdl-0">
                  <div class="form-group">
                    <label for="cluster-5" class="text-center">5- Performances</label>
                    <?php
                      $data = array(
                        'id' => 'cluster-5',
                        'name' => 'cluster-5',
                        'class' => 'form-control fs-11 pd-3by5',
                        'onChange' => 'checkCluster()'
                        );
                          echo form_multiselect('cluster-5[]', $cluster5, array(), $data);
                      ?>
                  </div>
              </div>
              -->
        </div>
        <div class="row text-center">
            <h4>Team</h4>
        </div>    
        <div class="row">
                <div class="col-md-2" style="padding-right:5px;">
                  <div class="form-group">
                    <select class="form-control fs-11 input-sm-h25 pdr-0 pdl-0 tiQfixed" id="employees">
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
                <div class="col-md-1" style="padding:0;">
                    <div class="form-control fs-11 pdr-0 input-sm-h25 pdr-0 pdl-0 tiQfixed padding_top10" id="init">Initial</div>
                </div>
                <div class="col-md-2" style="padding-left:5px; padding-right:5px;">
                    <div class="form-control fs-11 input-sm-h25 pdr-0 pdl-0 tiQfixed padding_top10" id="desig">Designation</div>
                </div>
                <div class="col-md-1" style="padding:0;">
                    <div class="form-control fs-11 input-sm-h25 pdr-0 pdl-0 tiQfixed padding_top10" id="projects">Project</div>
                </div>
                <div class="col-md-1" style="padding:0 5px;margin:0px !important;width: fit-content !important;max-width: 101px !important;">
                  <div class="form-group">
                    <select class="form-control fs-11 input-sm-h25 pdr-0 pdl-0 tiQfixed" id="clubs" style="">
                      <option>Bobcats</option>
                      <option>Science</option>
                      <option>Art & Literature</option>
                      <option>Language and History</option>
                      <option>Mathematics</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-5 pd-3by5" style="width:37%;margin-top:-4px;">
                    <div class="form-control fs-11 input-sm-h25 pdr-0 pdl-0 tiQfixed padding_top10">
                        <label class="radio-inline ">
                          <input type="radio" class="margin_custom" name="employee_role" value="Team Leader">Team Leader
                        </label>
                        <label class="radio-inline ">
                          <input type="radio" class="margin_custom" name="employee_role" value="Team member" checked>Team Member
                        </label>
                        <label class="radio-inline ">
                          <input type="radio" class="margin_custom" name="employee_role" value="Monitor">Monitor
                        </label>
                        <button type="button" class="btn btn-slim btn-success pull-right" id="add-row">Add</button>
                    </div>
                </div>
        </div>
        <!-- Append Rows here -->
        <div class="row mt-5" id="appended-rows"></div>
        <h4 style="text-align:center;">Deadlines</h4>
        <div class="row">
            <div class="col-md-3 pdr-0">
                <label class="radio-inline"></label>

               <div class="form-inline">   
                  <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="date" class="form-control fs-11 input-sm-h25" id="start_date" name="start_date">
                    <div id="empoyyee" name="start_wwdate"></div>
                  </div>
               </div>   
            </div>
            <div class="col-md-3 pdr-0"> 
                <label class="radio-inline"></label>
            
               <div class="form-inline">   
                  <div class="form-group">
                    <label for="end_date">End Date:</label>
                    <input type="date" class="form-control fs-11 input-sm-h25" id="end_date" name="end_date">
                  </div>
               </div> 
            </div>
            <div class="col-md-3 padding-0">
                <label class="radio-inline"></label>
                <div class="form-control fs-11 input-sm-h25 pd-3by5">
                  <label class="radio-inline">Ongoing</label>
                    <label class="radio-inline">
                      <input type="radio" name="ongoing">Yes
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="ongoing" checked >No
                    </label>
                </div>
            </div>
             <div class="col-md-3 pdl-0">
                <label class="radio-inline"></label>

                <div class="form-control fs-11 input-sm-h25 pd-3by5">
                  <label class="radio-inline">Recurring</label>
                    <label class="radio-inline">
                      <input type="radio" name="reccuring" value="1">Yes
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="reccuring" value="0" checked >No
                    </label>
                </div>
            </div>
          </div>  
          <div class="row text-center mt-20">
              <button class="btn btn-success target" type="submit" id="target" disabled>Submit Task</button>
          </div>
          </form>
          <input type="hidden" id="delFresh" value="1"/>
</div>  

<script type="text/javascript">

function getID(id){
  /*var id = this.value;*/
  return id;
}
$( "#add-row" ).click(function() {
    // appends an item to the end
    var id=$("#employees").val();
    /*var employeeName=$("#employees").text();*/
    var employeeName = $('#employees').find(":selected").text();
    var fid = $("#delFresh").val();
    var initials = $("#init").text();
    var designation =$("#desig").text();
    var projects =$("#projects").text();
    var role = $('input[name=employee_role]:checked').val();
// console.log(id);  console.log(role);

  
    $( "#appended-rows" ).append('<div class="row" id="frow'+fid+'"><div class="col-md-2 pdr-0">\
                    <div class="well well-sm fs-11">'+employeeName+'</div>\
                </div>\
                <div class="col-md-1  padding">\
                    <div class="well well-sm fs-11">'+initials+'</div>\
                </div>\
                <div class="col-md-2  padding">\
                    <div class="well well-sm fs-11">'+designation+'</div>\
                </div>\
                <div class="col-md-1  padding">\
                    <div class="well well-sm fs-11">'+projects+'</div>\
                </div>\
                <div class="col-md-1  padding">\
                    <div class="well well-sm fs-11">clubs</div>\
                </div>\
                <div class="col-md-5 pdl-0">\
                    <div class="well well-sm fs-11">'+role+'<span class="pull-right" style="cursor: pointer;" onclick="deleteFuser('+fid+')"><i class="fa fa-times" aria-hidden="true"></i></span></div>\
                </div>\
        </div>');
$("#delFresh").val(parseInt(fid)+1);
    $("#theFormm").append('<input type="hidden" name="sRole[]" value="'+role+'">\
      <input type="hidden" id="abc" name="employeeID[]" value="'+id+'"/>');
});

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

  function deleteFuser(fid){
  $("#frow"+fid).remove();
  return false;
  }

  function checkCluster(){ 

      /*
      var c1 = $("select[name='cluster-1[]'] option:selected").length;
      var c2 = $("select[name='cluster-2[]'] option:selected").length;
      var c3 = $("select[name='cluster-3[]'] option:selected").length;
      var c4 = $("select[name='cluster-4[]'] option:selected").length;
      var c5 = $("select[name='cluster-5[]'] option:selected").length;
      if (c1 > 0 || c2 > 0 || c3 > 0 || c4 > 0 || c5 > 0) {
        $(".target").prop('disabled',false);

      }
      */
      isSelect= $("select[name='cluster-selected[]'] option:selected").length > 0;
      //console.log("");

      if (isSelect) {
        $(".target").prop('disabled',false);
      }
  }

        </script>
      