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
          
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Task Title:</label>
               <div><?php echo $task->taskname;?></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10">
        <div class="form-group">
          <label for="task_description" class="text-center">Task Description:</label>
          <div><?php echo $task->taskdescription;?></div>
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
        </div>
        <div class="row">
               
        <div class="row text-center">
            <h3>Team</h3>
            <?php foreach ($assigned as $assign) {
                    echo $assign->firstname .' '. $assign->lastname." &nbsp ";
            }?>
            <br>
        </div>  
        <div class="row">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>