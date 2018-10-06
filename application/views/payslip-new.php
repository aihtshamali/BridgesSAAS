<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/payslip/printQuery.css">
<style type="text/css">
p, div, span, td, a, h1, h2, h3, h4, h5, h6, ul, ol, li, dd, dt, th, tr,body
{
   font-family: Roboto !important;
}

/* New Css*/

.bg-color{
  background-color: #f5f5f5;
}
.img-pad{
padding: 4px 0 0px 85px; 
}
.thead{
  font-weight: bold;
}
.bdr-pd{
  border-left: 3px groove; 
  padding-left: 8px;
}
.fw-bold{
  font-weight: bold;
}
.tp-margin{
  margin-top: 15px;
}
.fs-11{
  font-size: 11px;
}
.fs-18{
  font-size: 18px;
}
.lft-pd{
  text-align: left;
  padding-left: 20px;
}
.pad-2nd-row{
  padding: 8px 0 8px 60px; 
}
  .mgr-btm-5{
    margin-bottom: 2px !important;
  }
  .fl-width{
    width: 100%;
  }
  .mid-bg-color{
    background-color: #f0f0f0;
  }
  .u-mtb-10 {
    margin-top: 10px;
    /* margin-bottom: 30px; */
    width: 98%;
    float: right;
  }
  .print_dot {
    display: block;
    width: 20px;
    height: 2px;
    background-color: #a09c9c;
    /* border-radius: 50%; */
    margin-left: 4px;
}
.task1-wrapper{
  width: 100% !important;
}
img{
  vertical-align: text-top;
}

</style>

<script type="text/javascript">

  function TaskEvaluation(userId, role, taskid)
  { 

    $.post("<?php echo base_url();?>"+"taskmanagement/getTaskEvaluation",{userId:userId,role:role,taskid:taskid}, function( response ){

      $(".showEvaluation").html(response);
    });

  }


  // for evaluation 

  // for attendance

  function ShowAttendance(userId)
  { 
    $('#att').unbind("click");
    $.post("<?php echo base_url();?>"+"taskmanagement/payslip_getAttendance",{userId:userId}, function( response )
    {
      $(".ShowAttendance").html(response);
    });
  }
  // for attendance
function userPerformance(userId)
  {
    $('#per').unbind("click");

    $.post("<?php echo base_url();?>"+"Salaryslip/payslip_getUserPerformance",{userId:userId}, function( response )
    {
      $(".ShowPerformance").html(response);
    });
  } 

  //for Performance 
</script>
<?php
  $d = date("Y-m-t", strtotime("-1 months"));
  $date=@explode("-", $d);
  $maxDays=$date[2];
?>
<div class="container ">
<?php
 if($userdetails->hired_for_project == 2 || $userdetails->hired_for_project == 3) {?>
<div class="bg-color img-pad tp-margin" style="width: 100%">
<table class="table-responsive" >
  <tr >
    <td style="padding-right: 5px;">
          <img src="<?php echo base_url()?>/assets/images/red-logo.png" width="40">
    </td>
    <td style="vertical-align: middle; padding-left: 3px;" class="fw-bold">
          <div class="bdr-pd fs-14">Performance Evaluation</div>
          <div class="bdr-pd fs-14">The Bridges School </div>
          
    </td>
  </tr>
</table>
</div>
<?php } else {?>


<div class="bg-color img-pad tp-margin" style="width: 100%">
<table class="table-responsive" >
  <tr >
    <td style="padding-right: 15px;">
          <img  src="<?php echo base_url()?>/assets/images/final_logo.jpg" width="40">
    </td>
    <td style="vertical-align: middle; " class="fw-bold">
          <div class="bdr-pd fs-14" >Performance Evaluation</div>
          <div class="bdr-pd fs-14">Bridges Development Consortium</div>
    </td>
  </tr>
</table>
</div>

<!-- </div> -->

<?php } ?>


<div class="pad-2nd-row fs-11 thead pull-left" style="align-content: left;">
  <table cellspacing="2">
    <tr>
      <td align="right" >Name: </td><td class="lft-pd"><?= $userdetails->firstname?> <?= $userdetails->lastname?></td>
    </tr><tr>
      <td align="right" >Title: </td><td class="lft-pd"><?= $userdetails->job_title; ?></td>
    </tr><tr>
      <td align="right" >CNIC: </td><td class="lft-pd"><?= $userdetails->cnic_no; ?></td>
    </tr><tr>
      <td align="right" >Employee ID: </td><td class="lft-pd"><?= $userdetails->userid; ?></td>
    </tr>
  </table>
</div>


<div class="pad-2nd-row fs-11 thead pull-right" style="align-content: left;">
  <table cellspacing="2">
    <tr>
      <td align="right" >Issued on: </td><td class="lft-pd"><?php echo  date('d-m-y'); ?></td>
    </tr><tr>
      <td align="right" >Project: </td><td class="lft-pd"><?= $userdetails->project_title; ?></td>
    </tr><tr>
      <td align="right" >Start Date: </td><td class="lft-pd"><?php 
          $prev_date = date("F-y", strtotime("-1 months"));
          echo date('01-m-y', strtotime($prev_date)); ?></td>
    </tr><tr>
      <td align="right" >End Date: </td><td class="lft-pd"><?php echo date('t-m-y',strtotime($prev_date)); ?></td>
    </tr>
  </table>
</div>

        <div class="ShowAttendance "></div>
        <div class="ShowPerformance mgr-btm-5"></div>    
  


<div class="fl-width mid-bg-color" align="center">
<span class="fs-18">Remarks</span></div>


<div class="">
  
</div>

  <div class="table-custom fs-10 u-pd-0">
    
    <div class="tbody h-70">
    
      <!-- <div class=" bg-mid-gry  flexbox">
        <div class="tr wd-15 u-tar">
          <div class="db fs-11"></div>
        </div>
        <div class=" wd-75-ht0">
          <div class="db fs-20 u-tac tr-pd-6" >Remarks</div>
        </div>
        <div class="tr wd-15"></div>
      </div> -->
      <div class="tr-row1 bg-mid-full-gry flexbox">
        <div class="tr wd-15 u-tar">
        </div>
          <div class=" fs-11 "></div>
        <div class="tr wd-15"></div>
      </div>
      <div class="tr-row bg-performance  flexbox remark-height" style="height: 100px">
      
        <div class="th wd-15 u-tar wd-12-p">
            <?php foreach ($comments as $value) {
             echo  date('d-m-Y',strtotime($value->created)) .'<br>'; 
            }
            ?>
        </div>
        <div class="tr " style="width: 34%;">
        <?php foreach ($comments as $value): ?>
         <?= $userdetails->firstname." ".$userdetails->lastname." : " ?> &emsp; &emsp; <?= $value->msg; ?> <br>
        <?php endforeach ?>
        </div>
        <div class="tr wd-15">
            <img class="img-table" src="<php echo base_url()?>/assets/images/logo_dull_full.jpg" width="50"> 
          
        </div>
      </div>
    </div>
  </div>
  




  <div class="ht-20">
  <i class="fa fa-cut icon_cut" aria-hidden="true"></i>
  <div class="u-mtb-10" style="display:flex;">
  <?php for($i=0; $i<51; $i++){?>
  <span class="print_dot"></span>
  <?php } ?>
  </div>
</div>


<?php
 if($userdetails->hired_for_project == 2 || $userdetails->hired_for_project == 3) {?>
<div class="bg-color img-pad tp-margin" style="width: 100%">
<table class="table-responsive" >
  <tr >
    <td style="padding-right: 5px;">
          <img src="<?php echo base_url()?>/assets/images/red-logo.png" width="40">
    </td>
    <td style="vertical-align: middle; padding-left: 3px;" class="fw-bold">
          <div class="bdr-pd fs-14">Performance Evaluation</div>
          <div class="bdr-pd fs-14">The Bridges School </div>
          
    </td>
  </tr>
</table>
</div>
<?php } else {?>


<div class="bg-color  tp-margin">
<span  class="img-pad" style="width:230px" >
   <img   src="<?php echo base_url()?>/assets/images/final_logo.jpg" width="40">
</span>

      <span class="bdr-pd fs-14"  >Compensation Slip <div  class="bdr-pd fs-14">Bridges Development Consortium</div></span>
</div>

<!-- <div class=" bg-color img-pad tp-margin" style="width: 100%">
<table class="  table-responsive" style="display: inline">
  <tr >
    <td style="padding-right: 15px;">
          <img  src="<?php echo base_url()?>/assets/images/final_logo.jpg" width="40">
    </td>
    <td  style="vertical-align: middle; " class="fw-bold">
          <div class="bdr-pd fs-14" >Compensation Slip</div>
          <div class="bdr-pd fs-14">Bridges Development Consortium</div>
    </td>
  </tr>
</table>
<span> current</span>

</div>
 -->
<!-- </div> -->

<?php } ?>




  <div class="table-custom fs-10  u-pd-0">
    <div class="thead bg-light-gry h-70 flexbox" style="height:63px; background: #f5f5f5;border-bottom: 2px solid #dbdbdb;">
    <div class="th wd-15 u-tar wd-12-p img-pd">
    <?php if ($userdetails->hired_for_project == 2 || $userdetails->hired_for_project == 3) { ?>
      <div class="db">
          <div class="">
          <img class="img-center" class="img-table" src="<?php echo base_url()?>/assets/images/red-logo.png" width="40">
          </div>
        </div>
    <?php  } else{ ?>
        <div class="db">
          <div class="">
          <img class="img-center" class="img-table" src="<?php echo base_url()?>/assets/images/final_logo.jpg" width="40">
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="th wd-70 u-pd-0 ht-97">
        <div class="th-child" style="padding: 10px 0 0 0; width: 42.5%;"> 
          <div class="bdr-pd fs-14">Compensation Slip</div>
          <div class="bdr-pd fs-14"><?php if($userdetails->hired_for_project == 2 || $userdetails->hired_for_project == 3 ){ ?>The Bridges School <?php } else{ ?>Bridges Development Consortium<?php } ?></div>
          <div class="db fw-n"></div>
          <div class="db fw-n"></div>
        </div>
        <div class="th-child u-tac mnth" style=""> <p class="mnth-txt">Current Month</p>
          <div class="th-child mnth-wd1"> 
            
            <div class="db">Issued on:</div>
            <div class="db">Project:</div>
            <!-- style="position: relative;left: -80px;" -->
            <div class="db"  style="    padding-top: 1px;">Start Date:</div>
            <div class="db" >End Date: </div>
          </div>
          <div class="th-child mnth-wd2" >
            <div class="db"><?php echo  date('d-m-y'); ?></div>
            <div class="db"><?= $userdetails->project_title ?></div>
            <!--Start Date style="position: absolute;left: 765px;" -->
            <div class="db" ><?php echo date('t-m-y',strtotime($prev_date)); ?></div>
            <!-- End DAte -->
            <div class="db" ><?php 
            $prev_date = date("F-y", strtotime("-1 months"));
            echo date('01-m-y', strtotime($prev_date)); ?></div>
          </div>
        </div>
        <div class="th-child u-tar u-pdr-5 yr-wd1">
          <div class="db">Issued on:</div>
          <div class="db">Project:</div>
          <div class="db">Job Start Date:</div>
          <!-- <div class="db">End Date:</div> -->

        </div>
      </div>
      
      <div class="th wd-12-p relative yr-wd2">
      <p class="yr-txt">Year to Date</p>
          <div class="db" style="margin-top: 1px;"><?php echo  date('d-m-y'); ?></div>
          <div class="db"><?= $userdetails->project_title ?></div>
          <div class="db"><?php echo date('d-m-y',strtotime($userdetails->hired_on)); ?></div>
          <!-- <div class="db"><?php echo date('t-m-y',strtotime($prev_date)); ?></div> -->
      </div>
      
    </div>
    
  </div>

<!-- Table starts here -->
  <div class="table-custom fs-10  u-pd-0">
    <div class="thead bg-light-gry h-70 flexbox" style="height: 190px;">
      <div class="th wd-15 u-tar wd-12-p" style="padding:10px 10px 10px 10px">
        <div class="db">Name:</div>
        <div class="db fw-n">Title:</div>
        <div class="db fw-n">CNIC:</div>
        <div class="db fw-n">Employee ID:</div>
        <div class="db fw-n">Emp. Since:</div>
        
        
      </div>
      <div class="th wd-70 u-pd-0 ">
        <div class="th-child" style="width: 43%;padding:10px 0 10px 0"> 
          <div class="db bdr-pd"><?= $userdetails->firstname?> <?= $userdetails->lastname?></div>
          <div class="db bdr-pd fw-n"><?= $userdetails->job_title?></div>
          <div class="db bdr-pd fw-n"><?= $userdetails->cnic_no?></div>
          <div class="db bdr-pd fw-n"><?= $userdetails->userid?></div>
          <div class="db bdr-pd fw-n"><?= date("d-m-Y",strtotime($userdetails->hired_on)); ?></div>
      
        <br><div class="db bdr-pd">Comments </div>
        <div id="firstComment " class="bdr-pd dot_gry fnt-wt" contenteditable="true" style="text-align: left;  width: 100%; height: 72px; padding:0 3px 3px 3px;padding-left: 8px"> <span style="margin-right: 4px"> <?php if(isset($newcomment->comment)) echo $newcomment->comment;  else echo "Enter Comment"; ?></span> </div><span class="pull-right"> Leaves-Available(<?php if($attendance_leave){ echo $attendance_leave[0]->holidays;} else { echo "24"; }?>)</span>
        </div>
<!-- TODO  -->
        <div class="th-child u-tar u-pdr-5 fw-n" style="width: 15%;">
          <div class="db fw-n">Basic Salary:</div>
          <div class="db">Deduction:</div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Fine:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Performance:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Advances:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Security:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Tax:</span></div>
          <div class="db">Benefits:</div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Bonus:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Social Security:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">EOBI:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Health Insurance:</span></div>
            <div class="db fs-8" align="left" style="position: absolute;"><span  class=" dot_gry fnt-wt" >Transport & logistic: </span>
            </div>
            <br>
          <div class="db fw-n">Benefit-Total:</div>
          <div class="db fw-n">Attendance:</div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Attendance:</span></div>
            
        </div>

        <div class="th-child u-pdr-5 wd-12-p fw-n" style="width:10%;">
          <div class="db">Rs.<?= $userdetails->actual_salary?></div>
          <!-- <php echo $deduction;exit; ?> -->
          <div class="db">- Rs.<?php $after_deduct =((($userdetails->actual_salary)/$maxDays)* intVal($deduction)); 
          if($userdetails->hired_for_project==2){
            $after_deduct +=0;
            echo intVal($after_deduct);
          }
          else{
          echo intVal($after_deduct);
          }?>/</div>
          <div class="db fs-8">-</div>
          <div class="db fs-8">-</div>
          <div class="db fs-8">-</div>
          <div class="db fs-8"><?php 
          if($userdetails->hired_for_project==2){
            echo "0";
          }
           ?></div>
          <div class="db"><?php //$after_deduct =((($userdetails->actual_salary)/$maxDays)*$deduction); echo intVal($after_deduct)?></div>
          <div class="db fs-8">-</div>
          <div class="db fs-8">Employer</div>
          
          <div class="db fs-8"><?=$bonusEmp?></div>
          <div class="db fs-8"><?=$socialSecurityEmp?></div>
          <div class="db fs-8"><?=$eobiEmp?></div>
          <div class="db fs-8"><?=$healthInsuranceEmp?></div>
          <?php
          $benefits=0;
          if($bonusEmp!='-') 
          $benefits+=$bonusEmp;
          if($eobiEmp!='-')
          $benefits+=$socialSecurityEmp;
          if($healthInsuranceEmp!='-')
            $benefits+=$eobiEmp;
          if($healthInsuranceEmp!='-')
            $benefits+=$healthInsuranceEmp; 
          ?>
          <div class="db fs-8">-</div>
          <div class="db"  style="position: relative;top:3px">Rs.<?=$benefits;?></div>
<!--           <div class="db fs-8" style="position: relative;top: -2px;">-</div> -->
          <div class="db fs-8" style="position: relative;top: 5px;">-</div>
          <div class="db fs-8" style="position: relative;top: 5px;">- <?php $attendance =((($userdetails->actual_salary)/$maxDays)*$deduction); echo intVal($attendance); ?></div>
        </div>

        <div class="th-child u-tar u-pdr-5 fw-n" style="width: 27.5%;">
          <div class="db">Basic Salary:</div>
          <div class="db">Deduction:</div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Fine:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Performance:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Advances:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Security:</span></div>
          <div class="db">Benefits:</div>
            <div class="db fs-8 pull-left">Co-pay</div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Bonus:</span></div>
          <span class="pull-left db fs-8"><?=$bonusBri;?></span>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Social Security:</span></div>
<span class="pull-left db fs-8"><?=$socialSecurityBri;?></span>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">EOBI:</span></div>
<span class="pull-left db fs-8"><?=$eobiBri;?></span>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Health Insurance:</span></div>
<span class="pull-left db fs-8"><?=$healthInsuranceBri;?></span>
            <div class="db fs-8" align="left" style="position: relative;left: 43px;"><span  class=" dot_gry fnt-wt" >Transport & logistic: </span></div>
            <div class="db fw-n">Attendance:</div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Attendance:</span></div>
        </div>

      </div>
      <div class="th wd-12-p fw-n">
          <div class="db">Rs.<?= $userdetails->actual_salary?></div>

          <div class="db">- Rs.<?php $after_deduct =((($userdetails->actual_salary)/$maxDays)* intVal($deduction)); 
          if($userdetails->hired_for_project==2){
            $after_deduct +=0;
            echo intVal($after_deduct);
          }
          else{
          echo intVal($after_deduct);
          }?></div>
          <div class="db fs-8">-</div> 
          <!-- <div class="db fs-8">- <php $attendance =((($userdetails->actual_salary)/$maxDays)*$deduction); echo intVal($attendance); ?></div> -->
          <div class="db fs-8">-</div>
          <div class="db"><?php //$after_deduct =((($userdetails->actual_salary)/$maxDays)*$deduction); echo intVal($after_deduct)?></div>
          <div class="db fs-8"><?php 
          if($userdetails->hired_for_project==2){
            echo "0";
          } ?></div>
          <div class="db fs-8">-</div>
          <div class="db fs-8">-</div>
          <div class="db fs-8"><?=$bonusBri?></div>
          <div class="db fs-8"><?=$socialSecurityBri?></div>
          <div class="db fs-8"><?=$eobiBri?></div>
          <div class="db fs-8"><?=$healthInsuranceBri?></div>
          <div class="db fs-8">-</div>
          <div class="db fs-8">-</div>
          <div class="db fs-8" style="position: relative;top: -2px;">-</div>
          <div class="db fs-8" style="position: relative;top: -2  px;">-</div>
          <div class="db fs-8" style="position: relative;top: -3px;">- <?php $attendance =((($userdetails->actual_salary)/$maxDays)*$deduction); echo intVal($attendance); ?></div>
          <div class="db fs-8" style="position: relative;top: -4px;"></div>

      </div>
    </div>
    <div class="tbody h-70">
      <div class="tr-row bg-mid-gry  flexbox">
        <div class="tr wd-15 u-tar wd-12-p" style="line-height:0;">
        </div>
        <div class="tr wd-70 pd-tp-0">
            <div class="tr u-tar wd-20">
              <div class="db">&nbsp;</div>
            </div>
          <div class="tr u-tar wd33">
            <div class="db">Payed Total:</div>
          </div>
          <div class="tr wd-12-p" >
            <div class="db fs-10 thead" style=" position: relative;left: -6px; width:100%;">Rs.<?= intval($userdetails->actual_salary-intval($after_deduct))?></div>
          </div>
          <div class="tr u-tar ttl">
            <div class="db">YTD Total:</div>
          </div>
        </div>
        <div class="tr wd-12-p">
          <div class="db fs-10 thead">Rs.<?= intval($userdetails->actual_salary-intval($after_deduct))?></div>
        </div>
      </div>
      <div class="tr-row bg-mid-full-gry flexbox" style="height: 12px;">
        <div class="tr wd-15 u-tar lh-0 wd-12-p">
          <!-- <div class="db fs-11">Additional</div> -->
        </div>
        <div class="tr wd-70">
        </div>
        <div class="tr wd-15"></div>
      </div>
        <div class="tr-row bg-performance ">
          <div class="top-left fs-11 flexbox">
            <div class="col-md-4"> 
              <label class="fi prpd" style="">Prepared By:</label><span class="lts-0">&emsp;&emsp;---------------------------------------------------</span>
            </div>
            <div class="col-md-4">
              <label class="fi aprvd">Approved By:</label><span class="lts-0">&emsp;&emsp;---------------------------------------------------</span>
            </div>
            <div class="col-md-4 ">
              <label class="fi recvd">Recieved By:</label><span class="lts-0">&emsp;&emsp;---------------------------------------------------</span>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="ht-20">
  <i class="fa fa-cut icon_cut" aria-hidden="true"></i>
  <div class="u-mtb-10" style="display:flex;">
  <?php for($i=0; $i<51; $i++){?>
  <span class="print_dot"></span>
  <?php } ?>
  </div>
</div>
<?php if($userdetails->hired_for_project == 2 || $userdetails->hired_for_project == 3) {?>
  <div class="table-custom fs-10  u-pd-0">
    <div class="thead bg-light-gry h-70 flexbox" style="height:63px; background: #f5f5f5; border-bottom:2px solid #dbdbdb;">
    <div class="th wd-15 u-tar wd-12-p img-pd">
    <?php if ($userdetails->hired_for_project == 2 || $userdetails->hired_for_project == 3) { ?>
      <div class="db">
          <div class="">
          <img class="img-center" class="img-table" src="<?php echo base_url()?>/assets/images/red-logo.png" width="40">
          </div>
        </div>
    <?php  } else{ ?>
        <div class="db">
          <div class="">
          <img class="img-center" class="img-table" src="<?php echo base_url()?>/assets/images/final_logo.jpg" width="40">
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="th wd-70 u-pd-0 ht-97">
        <div class="th-child" style="padding: 10px 0 0 0; width: 42.5%;"> 
          <div class="bdr-pd fs-14">Compensation Slip</div>
          <div class="bdr-pd fs-14"><?php if($userdetails->hired_for_project == 2 || $userdetails->hired_for_project == 3){ ?>The Bridges School <?php } else{ ?>Bridges Development Consortium<?php } ?></div>
          <div class="db fw-n"></div>
          <div class="db fw-n"></div>
        </div>
        <div class="th-child u-tac mnth" style=""> <p class="mnth-txt">Current Month</p>
          <div class="th-child mnth-wd1"> 
            
            <div class="db">Issued on:</div>
            <div class="db">Project:</div>
            <!-- style="position: relative;left: -80px;" -->
            <div class="db"  style="    padding-top: 1px;">Start Date: </div>
            <div class="db" > End Date: </div>
          </div>
          <div class="th-child mnth-wd2" >
            <div class="db"><?php echo  date('d-m-y'); ?></div>
            <div class="db"><?= $userdetails->project_title ?></div>
            <!--Start Date style="position: absolute;left: 765px;" -->
            <div class="db" > <?php echo date('t-m-y',strtotime($prev_date)); ?></div>
            <!-- End DAte -->
            <div class="db" ><?php 
            $prev_date = date("F-y", strtotime("-1 months"));
            echo date('01-m-y', strtotime($prev_date)); ?></div>
          </div>
        </div>
        <div class="th-child u-tar u-pdr-5 yr-wd1">
          <div class="db">Issued on:</div>
          <div class="db">Project:</div>
          <div class="db">Job Start Date:</div>
          <!-- <div class="db">End Date:</div> -->

        </div>
      </div>
      
      <div class="th wd-12-p relative yr-wd2">
      <p class="yr-txt">Year to Date</p>
          <div class="db" style="margin-top: 1px;"><?php echo  date('d-m-y'); ?></div>
          <div class="db"><?= $userdetails->project_title ?></div>
          <div class="db"><?php echo date('d-m-y',strtotime($userdetails->hired_on)); ?></div>
          <!-- <div class="db"><php echo date('t-m-y',strtotime($prev_date)); ?></div> -->
      </div>
      
    </div>
    
  </div>

<?php } else {?>



<!-- Pending -->

 <div class="table-custom fs-10  u-pd-0">
    <div class="thead bg-light-gry h-70 flexbox" style="height:63px; background: #f5f5f5;border-bottom: 2px solid #dbdbdb;">
    <div class="th wd-15 u-tar wd-12-p img-pd">
        <div class="db">
          <div class="">
          <img class="img-center" class="img-table" src="<?php echo base_url()?>/assets/images/final_logo.jpg" width="40">
          </div>
        </div>
        <div class="db"></div>
        <div class="db"></div>
        <div class="db"></div>
      </div>
      <div class="th wd-70 u-pd-0 ht-97">
        <div class="th-child" style="padding: 10px 0 0 0; width: 42.5%;"> 
          <div class="bdr-pd fs-14">Compensation Slip</div>
          <div class="bdr-pd fs-14">Bridges Development Consortium</div>
          <div class="db fw-n"></div>
          <div class="db fw-n"></div>
        </div>
        <div class="th-child u-tac mnth" style=""> <p class="mnth-txt">Current Month</p>
          <div class="th-child mnth-wd1"> 
            <div class="db">Issued on:</div>
            <div class="db">Project:</div>
            <div class="db">Start Date:</div>
            <div class="db">End Date:</div>
          </div>
          <div class="th-child mnth-wd2" >
            <div class="db"><?php echo  date('d-m-y'); ?></div>
            <div class="db"><?= $userdetails->project_title ?></div>
            <div class="db"><?php 
            $prev_date = date("F-y", strtotime("-1 months"));
            echo date('01-m-y', strtotime($prev_date)); ?></div>
            <div class="db"><?php echo date('t-m-y',strtotime($prev_date)); ?></div>
          </div>
        </div>
        <div class="th-child u-tar u-pdr-5 yr-wd1">
          <div class="db">Issued on:</div>
          <div class="db">Project:</div>
          <div class="db">Job Start Date:</div>
          <!-- <div class="db">End Date:</div> -->

        </div>
      </div>
      
      <div class="th wd-12-p relative yr-wd2">
      <p class="yr-txt">Year to Date</p>
          <div class="db" style="margin-top: 1px;"><?php echo  date('d-m-y'); ?></div>
          <div class="db"><?= $userdetails->project_title ?></div>
          <div class="db"><?php echo date('d-m-y',strtotime($userdetails->hired_on)); ?></div>
          <!-- <div class="db"><php echo date('t-m-y',strtotime($prev_date)); ?></div> -->
      </div>
      
    </div>
    
  </div>
<?php } ?>  

  <!-- Table starts here -->
  <div class="table-custom fs-10  u-pd-0">
    <div class="thead bg-light-gry h-70 flexbox" style="height: 190px;">
      <div class="th wd-15 u-tar wd-12-p" style="padding:10px 10px 10px 10px;">
        <div class="db ">Name:</div>
        <div class="db fw-n">Title:</div>
        <div class="db fw-n">CNIC:</div>
        <div class="db fw-n">Employee ID:</div>
        <div class="db fw-n">Emp. Since:</div>
      </div>

      <div class="th wd-70 u-pd-0 ">
        <div class="th-child" style="width: 43%;padding:10px 0px 10px 0px"> 
          <div class="db  bdr-pd"><?= $userdetails->firstname?> <?= $userdetails->lastname?></div>
          <div class="db fw-n bdr-pd "><?= $userdetails->job_title?></div>
          <div class="db fw-n  bdr-pd"><?= $userdetails->cnic_no?></div>
          <div class="db fw-n  bdr-pd"><?= $userdetails->userid?></div>
          <div class="db fw-n  bdr-pd"><?= date("d-m-Y",strtotime($userdetails->hired_on)); ?></div>
        <br><div class="db  bdr-pd" style="margin-bottom: 0px;">Comments </div>
        <div id="secondComment" class="bdr-pd dot_gry fnt-wt" style="text-align: left;  width: 100%; height: 75px; padding:0 3px 3px 3px;padding-left: 8px"> <?php if(isset($newcomment->comment)) echo $newcomment->comment; else echo "Enter Comment" ?> </div><span class="pull-right">Leaves-Available(<?php if($attendance_leave){ echo $attendance_leave[0]->holidays;} else { echo "24"; }?>)</span>
        </div>
<!-- TODO  -->
        <div class="th-child u-tar u-pdr-5 fw-n" style="width: 15%;">
          <div class="db fw-n">Basic Salary:</div>
          <div class="db">Deduction:</div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Fine:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Performance:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Advances:</span></div>

            <div class="db fs-8"><span class=" dot_gry fnt-wt">Security:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Tax:</span></div>
          <div class="db">Benefits:</div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Bonus:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Social Security:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">EOBI:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Health Insurance:</span></div>
            
            <div class="db fs-8"  align="center" style="position: absolute;"><span  class=" dot_gry fnt-wt" >Transport & logistic: </span></div>
              <br>
              <div class="db fw-n">Benefit - Total:</div>
              <div class="db fw-n">Attendance:</div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Attendance:</span></div>
        </div>

        <div class="th-child u-pdr-5 wd-12-p fw-n" style="width:10%;">
          <div class="db">Rs.<?= $userdetails->actual_salary?></div>
          <div class="db">- Rs.<?php $after_deduct =((($userdetails->actual_salary)/$maxDays)* intVal($deduction)); 
          if($userdetails->hired_for_project==2){
            $after_deduct +=0;
            echo intVal($after_deduct);
          }
          else{
          echo intVal($after_deduct);
          }?></div>
          <div class="db fs-8">-</div>
          <div class="db fs-8">-</div>
          <div class="db fs-8"><?php 
          if($userdetails->hired_for_project==2){
            echo "0";
          }
           ?></div>
          <!-- <div class="db"><?php //$after_deduct =((($userdetails->actual_salary)/$maxDays)*$deduction); echo intVal($after_deduct)?></div> -->
          <div class="db fs-8">-</div>
          <div class="db fs-8">-</div>
          <div class="db fs-8">-</div>
          <div class="db fs-8">Employer</div>
          <div class="db fs-8" style="position: relative;top:2px"><?=$bonusEmp?></div>
          <div class="db fs-8" style="position: relative;top:2px"><?=$socialSecurityEmp?></div>
          <div class="db fs-8" style="position: relative;top:2px"><?=$eobiEmp?></div>
          <div class="db fs-8" style="position: relative;top:2px"><?=$healthInsuranceEmp?></div>
          <div class="db fs-8" style="position: relative;top:2px">-</div>
          <div class="db " style="position: relative;top:6px">Rs.<?=$benefits?></div>
          <!-- <div class="db fs-8"></div> -->
          <div class="db fs-8" style="position: relative;top:8px">-</div>
          <div class="db fs-8" style="position: relative;top:7px">- <?php $attendance =((($userdetails->actual_salary)/$maxDays)*$deduction); echo intVal($attendance); ?></div>

        </div>

        <div class="th-child u-tar u-pdr-5 fw-n" style="width: 27.5%;">
          <div class="db">Basic Salary:</div>
          <div class="db">Deduction:</div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Fine:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Performance:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Advances:</span></div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Security:</span></div>
            <!-- <div class="db fs-8"><span class=" dot_gry fnt-wt">Tax:</span></div> -->
          <div class="db">Benefits:</div>
            <div class="db fs-8 pull-left" style="position: relative;top:-3px">Co-pay</div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt" > Bonus:</span></div>
            <span class="pull-left db fs-8" style="position: relative;top:-3px"><?=$bonusBri;?></span>
            <div class="db fs-8"><span class=" dot_gry fnt-wt" >Social Security:</span></div>
            <span class="pull-left db fs-8" style="position: relative;top:-3px"><?=$socialSecurityBri;?></span>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">EOBI:</span></div>
            <span class="pull-left db fs-8" style="position: relative;top:-3px"><?=$eobiBri;?></span>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Health Insurance:</span></div>
            <span class="pull-left db fs-8" style="position: relative;top:-3px"><?=$healthInsuranceBri;?></span>
            <div class="db fs-8" align="left" style="position: relative;
    left: 43px;"><span  class=" dot_gry fnt-wt" >Transport & logistic: </span></div>
              <div class="db fw-n">Attendance:</div>
            <div class="db fs-8"><span class=" dot_gry fnt-wt">Attendance:</span></div>
        </div>

      </div>
      <div class="th wd-12-p fw-n">
          <div class="db">Rs.<?= $userdetails->actual_salary?></div>
          <div class="db">- Rs.<?php $after_deduct =((($userdetails->actual_salary)/$maxDays)* intVal($deduction)); 
          if($userdetails->hired_for_project==2){
            $after_deduct +=0;
            echo intVal($after_deduct);
          }
          else{
          echo intVal($after_deduct);
          }?></div>
          <div class="db fs-8">-</div> 
          <div class="db fs-8">-</div>
          <div class="db fs-8"><?php 
          if($userdetails->hired_for_project==2){
            echo "0";
          } ?></div>
          <div class="db"><?php //$after_deduct =((($userdetails->actual_salary)/$maxDays)*$deduction); echo intVal($after_deduct)?></div>
          <div class="db fs-8">-</div>
          <div class="db fs-8">-</div>
          <div class="db fs-8"><?=$bonusEmp?></div>
          <div class="db fs-8"><?=$socialSecurityEmp?></div>
          <div class="db fs-8"><?=$eobiEmp?></div>
          <div class="db fs-8"><?=$healthInsuranceEmp?></div>
          <div class="db fs-8">-</div>
          <div class="db fs-8">-</div>
 <div class="db fs-8" style="position: relative;top: -2px;">-</div>
 <div class="db fs-8" style="position: relative;top: -2px;">-</div>
          <div class="db fs-8" style="position: relative;top: -6px;">- <?php $attendance =((($userdetails->actual_salary)/$maxDays)*$deduction); echo intVal($attendance); ?></div>
          <div class="db fs-8" style="position: relative;top: -4px;"></div>

      </div>
    </div>
    <div class="tbody h-70">
      <div class="tr-row bg-mid-gry  flexbox">
        <div class="tr wd-15 u-tar wd-12-p" style="line-height:0;">
        </div>
        <div class="tr wd-70 pd-tp-0">
            <div class="tr u-tar wd-20">
              <div class="db">&nbsp;</div>
            </div>
          <div class="tr u-tar wd33">
            <div class="db">Payed Total:</div>
          </div>
          <div class="tr wd-12-p" style="position:relative; margin-left: -6px;">
            <div class="db fs-10 thead">Rs.<?= intval($userdetails->actual_salary-intval($after_deduct))?></div>
          </div>
          <div class="tr u-tar ttl">
            <div class="db">YTD Total:</div>
          </div>
        </div>
        <div class="tr wd-12-p">
          <div class="db fs-10 thead">Rs.<?= intval($userdetails->actual_salary-intval($after_deduct))?></div>
        </div>
      </div>
      <div class="tr-row bg-mid-full-gry flexbox" style="height: 12px;">
        <div class="tr wd-15 u-tar lh-0 wd-12-p">
          <!-- <div class="db fs-11">Additional</div> -->
        </div>
        <div class="tr wd-70">
        </div>
        <div class="tr wd-15  "></div>
      </div>
        <div class="tr-row bg-performance ">
          <div class="top-left fs-11 flexbox">
            <div class="col-md-4"> 
              <label class="fi prpd" style="">Prepared By:</label><span class="lts-0">&emsp;&emsp;---------------------------------------------------</span>
            </div>
            <div class="col-md-4">
              <label class="fi aprvd">Approved By:</label><span class="lts-0">&emsp;&emsp;---------------------------------------------------</span>
            </div>
            <div class="col-md-4 ">
              <label class="fi recvd">Recieved By:</label><span class="lts-0">&emsp;&emsp;---------------------------------------------------</span>
            </div>
          </div>
      </div>
    </div>
  </div>
  
      </div>
  <!-- Table ends here -->
  
  <!-- Table starts here -->

  <!-- Table ends here -->
        <div class="showEvaluation"></div>
</div>
    <script id="toRemove" src="https://cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script>
 <script type="text/javascript">
  window.onload = function() {
  ShowAttendance(<?=$userdetails->userid?>,'1');
  userPerformance(<?=$userdetails->userid?>);
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

    CKEDITOR.inline("firstComment", {
          on: {
            blur: function( event ) {
              var data = event.editor.getData();
               // console.log(' => '+data);
              var request = jQuery.ajax({
                url: "<?php echo base_url();?>Salaryslip/saveComment",
                type: "POST",
                data: {
                  content : data,
                  user_id : <?= $userdetails->userid; ?>,
                  month   : "<?php echo date('Y-m-01', strtotime($prev_date)); ?>"
                },
                success: function (responseData) {
                    console.log(responseData);   
                },
                dataType: "html"
              });
            
               $("#secondComment").html(data);
            }
          }
        });

 </script>