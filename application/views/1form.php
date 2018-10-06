<div class="container">
  <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Open</button>
    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog custom-modal-set">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <form>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <?php form_open('taskmanagement/submit'); ?>
            <label for="task_title">Task Title:</label>
            <input type="text" class="form-control" id="task_title" placeholder="Task Title">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10">
        <div class="form-group">
          <label for="task_description" class="text-center">Task Description:</label>
          <textarea class="form-control" rows="3" id="task_description" placeholder="Task Description"></textarea>
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
                        'class' => 'form-control'
                        );
                          echo form_multiselect('brand[]', $cluster1, array(), $data);
                      ?>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
                    <label for="cluster-2" class="text-center">Strategic</label>
                   <?php
                      $data = array(
                        'id' => 'cluster-2',
                        'class' => 'form-control'
                        );
                          echo form_multiselect('brand[]', $cluster2, array(), $data);
                      ?>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
                    <label for="cluster-3" class="text-center">Resource</label>
                    <?php
                      $data = array(
                        'id' => 'cluster-3',
                        'class' => 'form-control'
                        );
                          echo form_multiselect('brand[]', $cluster3, array(), $data);
                      ?>
                  </div>
              </div>
              <div class="col-md-2">
                  <div class="form-group">
                    <label for="cluster-4" class="text-center">OutReach</label>
                    <?php
                      $data = array(
                        'id' => 'cluster-4',
                        'class' => 'form-control'
                        );
                          echo form_multiselect('brand[]', $cluster4, array(), $data);
                      ?>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <label for="cluster-5" class="text-center">Performances</label>
                    <?php
                      $data = array(
                        'id' => 'cluster-5',
                        'class' => 'form-control'
                        );
                          echo form_multiselect('brand[]', $cluster5, array(), $data);
                      ?>
                  </div>
              </div>
        </div>
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
                        <option value="<?=$user['id'];?>"><?=$user['firstname'] .' '.$user['lastname'] ;?></option>
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
                    <div class="form-control">Project</div>
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
                          <input type="radio" name="employee_role">Team Leader
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="employee_role">Team Member
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="employee_role">Moniter
                        </label>
                        <button type="button" class="btn-small btn-success small pull-right" id="add-row">Add</button>
                    </div>
                </div>
        </div>
        <!-- Append Rows here -->
        <div class="row mt-5" id="appended-rows"></div>
        <div class="row">
            <div class="col-md-4">
               <div class="form-inline">   
                  <div class="form-group">
                    <label for="start_date">Start Date:</label>
                    <input type="date" class="form-control" id="start_date">
                  </div>
               </div>   
            </div>
            <div class="col-md-4"> 
               <div class="form-inline">   
                  <div class="form-group">
                    <label for="end_date">End Date:</label>
                    <input type="date" class="form-control" id="end_date">
                  </div>
               </div> 
            </div>
            <div class="col-md-4">
                <div class="form-control">
                  <label class="radio-inline">Ongoing</label>
                    <label class="radio-inline">
                      <input type="radio" name="ongoing">Yes
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="ongoing">No
                    </label>
                </div>
            </div>
          </div>  
          <div class="row text-center mt-20">
              <button class="btn btn-success">Submit Task</button>
          </div>
          <?php form_close(); ?>
    </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$( "#add-row" ).click(function() {
    // appends an item to the end
    $( "#appended-rows" ).append( ' <div class="row"><div class="col-md-3">\
                    <div class="well well-sm">Initial</div>\
                </div>\
                <div class="col-md-1">\
                    <div class="well well-sm">Initial</div>\
                </div>\
                <div class="col-md-2">\
                    <div class="well well-sm">Designation</div>\
                </div>\
                <div class="col-md-1">\
                    <div class="well well-sm">Project</div>\
                </div>\
                <div class="col-md-1">\
                    <div class="well well-sm">clubs</div>\
                </div>\
                <div class="col-md-4">\
                    <div class="well well-sm">This is abc.</div>\
                </div>\
        </div>' );
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
          $("#desig").text(dataArray.Designation_main);     
        }
        });
    });

</script>