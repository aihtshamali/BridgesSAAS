<style type="text/css">

.u-pd-0{
  padding: 0 !important;
}
.u-tar{
  text-align: right;
}
.tr{
 
}
.tr:last-child{
  
}
.u-bdr-0{
  border-right: 0 !important;
}
.th,.tr{
   display: inline-block;
  /*border: 1px solid #000;*/
  border-right: 0;
}
.th:last-child,
.tr:last-child{
  /*border-right: 1px solid #000;*/
}
.table-custom{
  display: block;
}
.thead{
  font-weight: bold;
}
.fw-n{
 font-weight: normal;
}
.wd-15{
  width: 15%;
}
.wd-70{
  width: 70%;
}
.h-70{
  height: auto;
}
.h-70 .th{
  height: 70px;
}
.u-tac{
  text-align: center;
}
.img-table{
  width: 60px !important;
  /*transform: translateY(-17%);*/
}
.bg-mid-full-gry{
  background: #e3e3e3;
}
.th,.tr{
  padding: 10px;
}
.wd-70 .th-child,
.wd-70 .tr-child{
    display: inline-block;
    width: calc(98.2%/3);
    height: 100%;
   /* border-right: 1px solid;*/
    padding: 10px;
    overflow: hidden;
}
.fb{
  font-weight: bold !important;
}
.wd-70 .th-child:after,
.wd-70 .tr-child:after{
  content: '';
  clear: both;
}
.wd-70 .th-child:last-child,
.wd-70 .tr-child:last-child{
  border-right: 0;
}
.tr-row{
  height: 20px;
}
.tr-row .tr{
  border-top: 0;
}
.u-pdr-5{
  padding-right: 5px !important;
}
.payslip .task1-wrapper{
  width: 100% !important;
}
.fi{
  font-style: italic;
}
.lts-0{
  letter-spacing: -2px;
}
.dotted-border{
  border-top: 2px dotted #ccc;
}
.u-mtb-10{
  margin-top: 10px;
  margin-bottom: 10px;
}
.u-pdt-15{
  padding-top: 15px;
}
.bg-green{
  background: green !important;
}
.wd-10{
  margin-left: 10px;
}
.tr-row1{
  height: 9px;
}
.fs-20{
  font-size: 18px;
}

@media print{

  body{
    background-color: #eee !important;
  }
  .container{
    width: 100%;
    margin:auto;
  }
  .bg-performance , .performance-table thead tr th {
    background-color: #dbdbdb !important;
  }
  .performance-table tbody tr td {
    background-color: #F7F7F7 !important;
  }
  .tdCustom {
    background-color: #e2dbdb !important;
  }
  .well{
    background-color: #f5f5f5 !important;
  }
  .fa{
    color: green !important;
  }
  .bg-mid-gry{
    background-color: #f0f0f0 !important;
  }
  .bg-mid-full-gry{
    background-color: #e3e3e3 !important;
  }
  .left9-top3{

  }
}
</style>
<script type="text/javascript">





  function TaskEvaluation(userId, role, taskid)
  { 

    $.post("<?php echo base_url();?>"+"taskmanagement/getTaskEvaluation",{userId:userId,role:role,taskid:taskid}, function( response ){

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
    //  method: "POST",
    //  cache: false,
    //  url: "../../../taskManagementWithMatrix/ajaxLeadershipReport.php",
    //  data:{"AttendanceEvaluationMain":true, employeeID:employeeID,subTaskID:subTaskID},
    //  success: function(ViewHeadingsResponse)
    //  { 
    //    console.log(ViewHeadingsResponse);
    //    $(".ShowAttendance").html(ViewHeadingsResponse);
    //  }
    // });  
    $.post("<?php echo base_url();?>"+"taskmanagement/payslip_getAttendance",{userId:userId}, function( response )
    {
      $(".ShowAttendance").html(response);
    });
  }
  //for attendance
function userPerformance(userId)
  {
    $('#per').unbind("click");

    $.post("<?php echo base_url();?>"+"taskmanagement/getUserPerformance",{userId:userId}, function( response )
    {
      $(".ShowPerformance").html(response);
    });
  }
  
/*
  $("#TaskPopup").on("click", function()
  {
    var tID = $("#gettID").val();
    $.post("<?php echo base_url();?>"+"taskmanagement/editTask", {taskId:$("#getTaskId").val()}, function( response ){
      $(".task-div").html(response+'<input type="hidden" name="tID[]" id="gettID" value="'+tID+'">');
    });

  });*/


  //for Performance 


 



  //for Performance 
</script>
<div class="container payslip">
  <div class="table-custom fs-11 well u-pd-0">
    <div class="thead flexbox">
    <div class="" style="margin-left: 4%;">
          <img class="img-table" src="<?php echo base_url()?>/assets/images/red-logo.png" width="50"> 
    </div>
      <div class="th wd-10 u-tar">
        <div class="db">Name:</div>
        <div class="db">Designation:</div>
        <div class="db">Level:</div>
        <div class="db">Stream:</div>
      </div>
      <div class="th wd-70 u-pd-0">
        <div class="th-child">
          <div class="db"><?= $userdetails->firstname?> <?= $userdetails->lastname?></div>
          <div class="db fw-n"><?= $userdetails->designation?></div>
          <div class="db fw-n"><?= $userdetails->Level?></div>
          <div class="db fw-n">&nbsp;</div>
        </div>
        
        <div class="th-child u-tar u-pdr-5">
          <div class="db">Issued on:</div>
          <div class="db">Project:</div>
          <div class="db">Department:</div>
          <div class="db">Step:</div>
        </div>
      </div>
      <div class="th wd-15" style="margin-left: -23%;">
          <div class="db"><?php echo  date('d-m-y'); ?></div>
          <div class="db"><?= $userdetails->project_title?></div>
          <div class="db"><?=$userdetails->department?></div>
          <div class="db"><?=$userdetails->step?></div>
      </div>
    </div>
  </div  
<!-- "" -->
        <div class="ShowAttendance"></div>
        <div class="ShowPerformance"></div>
<!-- Table starts here -->
  <div class="table-custom fs-10 well u-pd-0">
    <div class="thead bg-light-gry h-70 flexbox">
      <div class="th wd-15 u-tar">
        <div class="db">First Name:</div>
        <div class="db">Designation:</div>
        <div class="db">Level:</div>
        <div class="db"></div>
      </div>
      <div class="th wd-70 u-pd-0">
        <div class="th-child">
          <div class="db"><?= $userdetails->firstname?></div>
          <div class="db fw-n"><?= $userdetails->designation?></div>
          <div class="db fw-n"><?= $userdetails->Level?></div>
          <div class="db fw-n"></div>
        </div>
        <div class="th-child u-tac">
          <!-- <img class="img-table" src="<?php echo base_url()?>/assets/images/red-logo.png" width="50"> -->
        </div>
        <div class="th-child u-tar u-pdr-5">
          <div class="db">Basic Salary:</div>
          <div class="db">Benefits:</div>
          <div class="db">Total:</div>
          <div class="db">Advance Salary:</div>
        </div>
      </div>
      <div class="th wd-15">
          <div class="db">Rs.<?= $userdetails->actual_salary?>/-</div>
          <div class="db">&nbsp;</div>
          <div class="db">Rs.<?=$userdetails->actual_salary?>/-</div>
          <div class="db">&nbsp;</div>
      </div>
    </div>
    <div class="tbody h-70">
      <div class="tr-row bg-mid-gry  flexbox">
        <div class="tr wd-15 u-tar" style="line-height:0;">
          <div class="db fs-11">Deductions</div>
        </div>
        <div class="tr wd-70">
        </div>
        <div class="tr wd-15"></div>
      </div>
      <div class="tr-row bg-mid-full-gry flexbox">
        <div class="tr wd-15 u-tar" style="line-height:0;">
          <div class="db fs-11">Additional</div>
        </div>
        <div class="tr wd-70">
        </div>
        <div class="tr wd-15"></div>
      </div>
            <div class="tr-row bg-performance ">
          <div class="left9-top3 fs-11" style="margin-left: 8% !important; padding-top: 3px;">
            <div class="col-md-4">
              <label class="fi">Prepared By:</label><span class="lts-0">----------------------------------------------------------------------</span>
            </div>
            <div class="col-md-4">
              <label class="fi">Approved By:</label><span class="lts-0">----------------------------------------------------------------------</span>
            </div>
            <div class="col-md-4">
              <label class="fi">Recieved By:</label><span class="lts-0">----------------------------------------------------------------------</span>
            </div>
          </div>
      </div>
    </div>
  </div>
  
<div class="u-mtb-10 dotted-border"></div>
<!-- Table starts here -->
  <div class="table-custom fs-10 well u-pd-0">
    <div class="thead bg-light-gry h-70 flexbox">
      <div class="th wd-15 u-tar">
        <div class="db">First Name:</div>
        <div class="db">Designation:</div>
        <div class="db">Level:</div>
        <div class="db"></div>
      </div>
      <div class="th wd-70 u-pd-0">
        <div class="th-child">
          <div class="db"><?=$userdetails->firstname?></div>
          <div class="db fw-n"><?=$userdetails->designation?></div>
          <div class="db fw-n"><?=$userdetails->Level?></div>
          <div class="db fw-n"></div>
        </div>
        <div class="th-child u-tac">
          <!-- <img class="img-table" src="<?php echo base_url()?>/assets/images/red-logo.png" width="50"> -->
        </div>
        <div class="th-child u-tar u-pdr-5">
          <div class="db">Basic Salary:</div>
          <div class="db">Benefits:</div>
          <div class="db">Total:</div>
          <div class="db">Advance Salary:</div>
        </div>
      </div>
      <div class="th wd-15">
          <div class="db">Rs.<?= $userdetails->actual_salary?>/-</div>
          <div class="db">&nbsp;</div>
          <div class="db">Rs.<?= $userdetails->actual_salary?>/-</div>
          <div class="db">&nbsp;</div>
      </div>
    </div>
    <div class="tbody h-70">
      <div class="tr-row bg-mid-gry  flexbox">
        <div class="tr wd-15 u-tar" style="line-height:0;">
          <div class="db fs-11">Deductions</div>
        </div>
        <div class="tr wd-70">
        </div>
        <div class="tr wd-15"></div>
      </div>
      <div class="tr-row bg-mid-full-gry flexbox">
        <div class="tr wd-15 u-tar" style="line-height:0;">
          <div class="db fs-11">Additional</div>
        </div>
        <div class="tr wd-70">
        </div>
        <div class="tr wd-15"></div>
      </div>
      <div class="tr-row bg-performance ">
          <div class="left9-top3 fs-11" style="margin-left: 8% !important; padding-top: 3px;">
            <div class="col-md-4">
              <label class="fi">Prepared By:</label><span class="lts-0">----------------------------------------------------------------------</span>
            </div>
            <div class="col-md-4">
              <label class="fi">Approved By:</label><span class="lts-0">----------------------------------------------------------------------</span>
            </div>
            <div class="col-md-4">
              <label class="fi">Recieved By:</label><span class="lts-0">----------------------------------------------------------------------</span>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- Table ends here -->
  
  
<div class="u-mtb-10 dotted-border"></div>
<!-- Table starts here -->
  <div class="table-custom fs-10 well u-pd-0">
    
    <div class="tbody h-70">
      <div class="tr-row bg-mid-gry  flexbox">
        <div class="tr wd-15 u-tar">
        </div>
        <div class="tr wd-70">
          <div class="db fs-20 u-tac">Remarks</div>
        </div>
        <!-- <div class="tr wd-15"></div> -->
      </div>
      <div class=" bg-mid-gry  flexbox">

        <div class="tr wd-15 u-tar">
          <div class="db fs-11"></div>
        </div>
        <div class="tr wd-70">
        </div>
        <div class="tr wd-15"></div>
      </div>
      <?php foreach ($comments as  $value) {
          # code...
        ?>
      <div class="tr-row1 bg-mid-full-gry flexbox">
        <div class="tr wd-15 u-tar">
          
        </div>
        
          <div class=" fs-11 "><?php 
            $date = $value->created;
            echo date('d:m:Y', strtotime($date));
            ?>&nbsp;&nbsp;&nbsp;<?= $value->msg;?></div>
        <div class="tr wd-15"></div>
      </div>
      <?php }?>
      <div class="tr-row bg-performance  flexbox">
        <div class="tr wd-15 u-tar">
        </div>
        <div class="tr wd-70">
        </div>
        <div class="tr wd-15"></div>
      </div>
    </div>
  </div>
  <!-- Table ends here -->
        <div class="showEvaluation"></div>
<!--         <div class="row well fs-10">

          <?php 
          foreach ($comments as $value) {
            # code...
            ?>
            <div class="col-md-6 u-pd-0 u-tac"><?= $value->msg;?></div>
            <div class="col-md-6 u-pd-0 u-tac"></div>
          <?php }
          ?>
        </div> -->
</div>


 <script type="text/javascript">
  window.onload = function() {
  ShowAttendance(<?=$userdetails->userid?>,'1');
  userPerformance(<?=$userdetails->userid?>);
  /**/
     /*$("#tr-table").each(function() {
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
    });*/
   /**/
  };
  function PrintDiv(data) {
    var mywindow = window.open();
    var is_chrome = Boolean(mywindow.chrome);
    mywindow.document.write(data);

   if (is_chrome) {
     setTimeout(function() { // wait until all resources loaded 
        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10
        mywindow.print(); // change window to winPrint
        mywindow.close(); // change window to winPrint
     }, 250);
   } else {
        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();
   }

    return true;
}
 </script>