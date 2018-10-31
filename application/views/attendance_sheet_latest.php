  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<title>Bridges Attendance</title>
  	<!-- <link rel="stylesheet" type="text/css" href="<php echo base_url();?>assets/emp_profile/css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/emp_profile/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- <link rel="stylesheet" type="text/css" href="<php echo base_url();?>assets/css/style1.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	 -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" />
    <!-- <link rel="stylesheet" type="text/css" media="all" href="<php echo base_url();?>assets/emp_profile/css/styles.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>

    <!-- // <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script> -->

    
    <!--<script type="text/javascript" src="<php echo base_url();?>assets/emp_profile/tablesort/js/jquery.tablesorter.min.js"></script> -->
     <!-- <script type="text/javascript" src="<php echo base_url();?>assets/emp_profile/tablesort/js/jquery-1.10.2.min.js"></script> -->
   

    <style type="text/css" >
  .table>tbody>tr>td{
         vertical-align: middle !important;
  }
    .myButton {
      background:url('<?php echo base_url(); ?>assets/images/calendar.gif') no-repeat;
      cursor:pointer;
      width: 16px;
      height: 16px;
      color:transparent;
      border: none;
  }
    th{
      text-align: center;
    }
    .flexbox {
      display: -webkit-box;
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-flex-flow: row wrap;
      flex-wrap: wrap;
    }
    td{
     padding: 0px !important;
     font-size: 12px;
   }
   th{
     padding-left: 0px !important;
     font-size: 14px;
   }
   .border{
     border-top: 2px solid #ddd;
   }
   .logo{
     width: 90px; 
     height: 100px;
     margin-top: 10px;
     margin-bottom: 10px;
   }
   .heading{
     /* margin-top: 10px; */
     margin-bottom: 10px;
     font-weight: 700;
     font-size: 16px;

   }
   @media print {
     html, body {
       margin:0;
       padding:0;

     }
     .myButton {
      background:url('<?php echo base_url(); ?>assets/images/calendar.gif') no-repeat;
      cursor:pointer;
      width: 16px;
      height: 16px;
      color:transparent;
      border: none;
  }
     #hidePrint{
       display: none;
     }
     td{
       padding: 0px !important;
       font-size: 8px;

     }
     th{
       padding-left: 0px !important;
       font-size: 12px;
       text-align: center;
     }
     .border{
       border-top: 2px solid #ddd;
     }
     .logo{
       width: 100px; 
       height: 110px;
       margin-top: 10px;
       margin-bottom: 10px;
     }
     .heading{
       /* margin-top: 10px; */
       margin-bottom: 10px;
       font-weight: 700;
       font-size: 20px;

     }
   }

   .tdCustom {
    width: 100%;
    height: 14px;
    padding-right: 3px;
    font-style: italic;
    text-align: right;
    background-color: #e2dbdb !important;
    font-size: 10px;
    line-height: 11px;
    border-bottom: 1px solid white;
  }


  .payslip .task1-wrapper{
    width: 100% !important;
  }
  .performance-table tbody tr td {
    background-color: #F7F7F7 !important;
  }
  .bg-performance , .performance-table thead tr th {
    background-color: #dbdbdb !important;

  }
  .payslip .task1-wrapper{
    width: 100% !important;
  }
  .performance-table thead tr th {
    border-bottom: 1px solid white;
    border-top: 0px;
    border-right: 1px solid #FFF;
    border-bottom: 1px solid #FFF;
    width: 21.874px;
    /* height: 13.3px; */
    text-align: center;
    font-weight: bold;
    background-color: #dbdbdb;
    line-height: 13px;
    color: #555;
    font-family: calibri;
    font-size: 12px;
  }
  .performance-table tbody tr td {
    height: 13.3px !important;
    width: 21.874px;
    border-right: 1px solid #FFF;
    border-bottom: 1px solid #FFF;
    font-size: 10px;
    background-color: #F7F7F7;
    display: table-cell;
  }

   table.performance-table tbody tr td{
    text-align: center;
  }
  </style>
  </head>
  <body>
  <?php
  $month = isset($_GET['month']) ? $_GET['month'] : date('m');
  $day = isset($_GET['day']) ? $_GET['day'] : date('d');
  $year = isset($_GET['year']) ? $_GET['year'] : date('Y');

  // print_r($month);exit;
  $currentdate=$year.'-'.$month.'-'.$day;
  ?>
  	<?php function getSundays($y,$m){ 
      $date = "$y-$m-01";
      $first_day = date('N',strtotime($date));
      $first_day = 7 - $first_day + 1;
      $last_day =  date('t',strtotime($date));
      $days = array();
      for($i=$first_day; $i<=$last_day; $i=$i+7 ){
        $days[] = $i;
      }
      return  $days;
    }

    function getd($day,$mont,$public_holidays){
      if($day<10)
          $day='0'.$day;
      $dat=$mont.'-'.$day;
      // print_r($dat);echo '<br>';
      for($ho=0;$ho<count($public_holidays);$ho++){
        list($year,$month,$da)=explode('-', $public_holidays[$ho]->date);
        $tempdate=$month.'-'.$da;
        // print_r($tempdate);
        if($dat==$tempdate){
         // print_r($public_holidays[$ho]);
          return $public_holidays[$ho];
        }
      }
      return null;
    }
    function getleave($day,$mont,$attendance_leave,$userid,$year){

        if($day<10)
          $day="0".$day;
      $dat=date($year.'-'.$mont.'-'.$day);
      // print_r($dat);echo '<br>';exit;
      for($ho=0;$ho<count($attendance_leave);$ho++){
        // print_r($attendance_leave[$ho]);
        if($attendance_leave[$ho]->date==$dat && $userid==$attendance_leave[$ho]->userid){
         // print_r($attendance_leave[$ho]);
          return $attendance_leave[$ho];
        }
      }
      return null;
    }
    ?>

    <div class="" style="margin:0px 30px;">
      <div class="col-sm-12 text-center">
        <div class="heading" >
          <div style="margin-top:10px;">
           <img class="logo" class="pull-left" style="height:30px;width:30px" src="<?= base_url($this->SharedModel->getProjectInfo()->logo);?>" >

           Bridges Employee Attendance Sheet,
           <span style="margin-left:20px">
              <label>Date</label>: <strong class="text-success"><?php echo $currentdate; ?></strong> 
              <!--<button type="button" class="btn btn-default btn-md text-success"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></button>--> 
              <input  class="myButton" data-date-format="yyyy-mm-dd" id="datepicker">            
           </span>
           <br/>
           <span class="" style="margin-top:3px">
              <h4> <b> Director Signature: <b> __________ </h4>
           </span>

         <div style="clear:both;">
         <label for=""><img src="<?php echo base_url();?>/assets/attendence/red-tick.png" height="10"><span style="font-size:12px;font-weight:unset;margin-left: 3px;">Approved Late</span></label>
         <label for=""><img src="<?php echo base_url();?>/assets/attendence/red-cross.png" height="10"><span style="font-size:12px;font-weight:unset;margin-left: 3px;">Unapproved Late</span></label>
         <label for=""><img src="<?php echo base_url();?>/assets/attendence/images-tick.png" height="10"><span style="font-size:12px;font-weight:unset;margin-left: 3px;">Approved holiday (Paid)</span></label>
         <label for=""><img src="<?php echo base_url();?>/assets/attendence/unpaidApproved.png" height="12"><span style="font-size:12px;font-weight:unset;margin-left: 3px;">Approved holiday (Unpaid)</span></label>
         <label for=""><img src="<?php echo base_url();?>/assets/attendence/unapproved.png" height="12"><span style="font-size:12px;font-weight:unset;margin-left: 3px;">Unapproved holiday</span></label>
         <label for=""><img src="<?php echo base_url();?>/assets/attendence/holidaysBlue.png" height="12"> <span style="font-size:12px;font-weight:unset">Public holidays</span></label>
         <label for=""><img src="<?php echo base_url();?>/assets/attendence/schoolEvents.gif" height="10"><span style="font-size:12px;font-weight:unset;margin-left: 3px;">School holidays</span></label>
         
         </div>
       </div>
       <div class="col-sm-12 text-center">
       </div>

     </div>
     <table id="myTable" class="table table-responsive">
      <thead>

        <tr class="border">
         <th  align="center">#</th>
         <th  align="center">L</th>
         <th  align="center">Employee Name</th>
         <th  align="center">Title</th>
         <th  align="center">Project</th>
         <th colspan="4" align="center">Attendance</th>
         <th  align="center">U</th>
         <th  align="center">A</th>
         <th  align="center">Ac</th>
       </tr>
     </thead>
     <tbody>
      <?php $cou=1; 
      $prevTitle=null;
      foreach ($attendance_sheet as $value) :

      //$this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR" || $this->session->userdata('id')==$value->userid
      if(fhkCheckAuthPermission(["canViewAllAttendances", "canDoEverything"])){
      ?>

      <?php
        
        if($prevTitle!=null){
          if($prevTitle!=$value->project_title)
            $bottomPadding= "border-top:3px solid";
          else
            $bottomPadding= "";
        }
        else
          $bottomPadding= "";

        $prevTitle= $value->project_title;
      ?>
      <tr id="userid<?=$value->userid?>" style="<?= $bottomPadding?>">
       <td><?php echo $cou;?> <?php //echo $value->userid;?></td>
       <td style="text-align: center;"><?php echo $value->level_name;?> </td>
       <td class="text-capitalize" ><?php echo $value->fname?> <?php echo $value->lname?></td>
       <td><?php echo strip_tags($value->job_title);?></td>
       <td><?php echo $value->project_title;?></td>
       <td colspan="4">      

        <div class="task1-wrapper flexbox">
          <div  style=" width:9%;background:#f5f5f5">
             <?php if($cou%10==0 or $cou==1){ ?>
            <div class="tdCustom" style="margin-left:3px;">Days</div>
            <?php } ?>

            <div class="tdCustom" style="margin-left:3px; height:16px">Count.</div>
          </div>
          <?php 
          $curDay=date('d');
          // print_r($attendance_leave);exit;
          $a_date=date($year.'-'.$month.'-d');
          $d= date("Y-m-t", strtotime($a_date));
          // print_r($d);exit;

          $date=@explode("-", $d);
          $maxDays=$date[2];
          $month=$date[1];
          $year=$date[0];
          

          ?>
          
          <table class="performance-table" id="tr-table" style="width:88.5%;height:7.5px;">
            <thead>
              <tr>
                <?php

                if($cou%10==0 or $cou==1){ 

                  $begin  = new DateTime(date($year.'-'.$month.'-1'));
                  $end    = new DateTime(date($year.'-'.$month.'-t'));
                  
                  for ($i=1; $i<=$date[2]; $i++){ 
                


                    if($begin->format("N") == 7){
                      echo '<th style="background:red !important; color:white !important;">'.$i.'</th>';

                    } else if($curDay==$i && $month==date('m')){
                      echo '<th style="background:orange !important; color:white !important;">'.$i.'</th>';

                    }

                    else{
                      echo '<th>'.$i.'</th>';
                    }
                    $begin->modify("+1 day");
                  }
                }
                ?>
              </tr>
            </thead>
            
            <tbody class="">


              <?php

                $late=0;$leave=0;
                $leaveapproved=0;
                $leaveUnapproved=0;
                $x= 0;
                $public=null;
                $leav=null;
                $purpose=null;
                $sun= getSundays($year,$month);
                // echo'<pre>';print_r($attendance);exit;
                echo "<tr>";
            for($i = 1 ; $i <= $maxDays; $i++) {
              
                $latetime="";
                $purp=1;
                $title="Absence";
                
                  if($i>=$curDay && $month==date('m'))
                  {
                    $title="Leave";
                    $purp=3;
                  }
                

              // Setting Late titles

              if(isset($attendance[$value->userid][$i])){
                if($attendance[$value->userid][$i] == "latehr")
                  $latetime="An hour";
                elseif($attendance[$value->userid][$i] == "late15")
                  $latetime="15 mints";
                elseif($attendance[$value->userid][$i] == "half")
                  $latetime="Half Day";
                elseif($attendance[$value->userid][$i] == "full")
                  $latetime="Full Day";
              }
                //  i = day
              if(isset($public_holidays))
                $public=getd($i,$month,$public_holidays);
              if(isset($attendance_leave))
                {
                  $leav=getleave($i,$month,$attendance_leave,$value->userid,$year);
                }  
      // var_dump($public);

              if($public){
                if($public->status==1 && $public->description=="School Holiday" && $value->hired_for_project==2){
                  if(isset($attendance[$value->userid][$i])){
                    if($attendance[$value->userid][$i]){
                      echo '<td><img src="'.base_url().'/assets/attendence/schoolEventsPresent.GIF" height="10" <i class="" id="flag'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.$public->name.'" tabindex="1" data-toggle="tooltip"  ></i></td>';
                    }

                  }
                  else
                    echo '<td><img src="'.base_url().'/assets/attendence/schoolEvents.GIF" height="9" <i class="" id="flag'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.$public->name.'" tabindex="1" data-toggle="tooltip"  ></i></td>';
                


                }
                else if($public->status==1 && $public->description=="Public Holiday"){
                  // Leave Section will be displayed here
                  if($leav){

                  }
                  // if(isset($attendance[$value->userid][$i])){
                  //   if($attendance[$value->userid][$i]=="SatPresent"){
                  //     echo '<td><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/holidaysPresent.png" height="12"  <i class="" id="flag'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.$public->name.'" tabindex="1" data-toggle="tooltip"  ></i></td>';
                  //   }

                  // }
                  // else
                  echo '<td><img src="'.base_url().'/assets/attendence/holidaysBlue.png" height="10"  <i class="" id="flag'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.$public->name.'" tabindex="1" data-toggle="tooltip"  ></i></td>';
                }
                else{  // for normal attendance if status !=1
                
                  if($leav){
                    
                  // print_r($leav);
                  // print_r($leav);exit;
                  if($leav->purpose=="absent")
                    $purpose=1;
                  if($leav->purpose=="late")
                    $purpose=2;
                  if($leav->purpose=="leave")
                    $purpose=3;
                 //Leave status ==-1 (Disapproved) status ==0 (Applied) status ==1 (Approved) status ==2 (Unannounced) 
                  if($leav->status==-1)
                  {   
                    if($leav->purpose=="late")
                      {
                        $late++;
                        echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/red-cross.png" height="12" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report Unapproved ('.$latetime.')" tabindex="1" data-toggle="tooltip"  onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')"></i></td>';  
                      }
                    else
                      {
                        $leave++;
                        $leaveUnapproved++;
                        echo '<td><img src="'.base_url().'/assets/attendence/unapproved.png" height="15" style="" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report" tabindex="1" data-toggle="tooltip"  style="color:green;" onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')"></i></td>';
                      }
                  }
                  else if($leav->status==1){
                     if($leav->status==1 && $leav->monetize_day=="on")
                      {
                        echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/AbsentHollow.png" height="9" <i class="flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report Approved ('.$latetime.')" tabindex="1" data-toggle="tooltip" onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')"  ></i></td>';
                      }
                      elseif($leav->purpose=="late")
                      {
                        // echo '<td>LAte</td>';
                        
                        echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/red-tick.png" height="12" <i class="flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report Approved ('.$latetime.')" tabindex="1" data-toggle="tooltip" onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')"  ></i></td>';  

                      }else if($leav->unpaid>0){
                        echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/unpaidApproved.png" height="15" <i class="flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report Unpaid Approved" tabindex="1" data-toggle="tooltip" onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')"  ></i></td>';  

                      }
                      else
                      {
                        $leaveapproved++;
                        $leave++;
                        echo '<td><img src="'.base_url().'/assets/attendence/images-tick.png" height="12" style="" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report" tabindex="1" data-toggle="tooltip" style="color:green;" onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')"></i></td>'; 
                      }
                  }
                  else if($leav->status==0)
                  { 
                      if($leav->purpose=="late")
                      {
                        $late++;
                        echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/lateapplied.png" height="13" <i class="flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="Late Procedure Report ('.ucfirst($latetime).')" tabindex="1" data-toggle="tooltip"  onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')" ></i></td>';  

                      }
                      else{
                          $leave++;
                         echo '<td align="center"><img src="'.base_url().'/assets/attendence/imagesEmpty.png" height="12" style="" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.$leav->purpose.' Procedure Report" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="color:green;" onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')"></i></td>'; 
                       }
                }
                else if($leav->status==2)
                { 
                          $leave++;
                         echo '<td align="center"><img src="'.base_url().'/assets/attendence/absentBlack.png" height="12" style="" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.$leav->purpose.' Procedure Report" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="color:green;" onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')"></i></td>'; 
                }
              }

              elseif(!isset($attendance[$value->userid][$i]) && in_array($i, $sun)){
                
                      echo '<td><img src="'.base_url().'/assets/attendence/holidaysBlue.png" height="10" style=""></td>';
                   
              }
              elseif(!isset($attendance[$value->userid][$i])){
                echo '<td align="center"><img src="'.base_url().'/assets/attendence/AbsentHollow.png" height="8px" style="" <i class=" flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="'.$title.' Procedure Statement" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="color:green;" onclick="leave('.$i.','.$value->userid.','.$late.','.$leave.','.$purp.')"></i></td>';
              }
              elseif($attendance[$value->userid][$i]=="intime"){
                if(isset($changed)){
                    if(isset($changed[$value->userid])){
                      if(isset($changed[$value->userid][$i]))
                      {
                        if($changed[$value->userid][$i]=="changed"){
                          echo '<td align="center"><img src="'.base_url().'/assets/attendence/presentChanged.png" height="13px" style="" ></td>';

                        }
                        else
                          echo '<td><img src="'.base_url().'/assets/attendence/presenttick.png" height="10" style=""></td>';
                      }     
                    else
                      echo '<td><img src="'.base_url().'/assets/attendence/presenttick.png" height="10" style=""></td>';

                  }
                  else
                      echo '<td><img src="'.base_url().'/assets/attendence/presenttick.png" height="10" style=""></td>';

                }
                  else
                      echo '<td><img src="'.base_url().'/assets/attendence/presenttick.png" height="10" style=""></td>';
                
              }
              elseif($attendance[$value->userid][$i] == "late15" || $attendance[$value->userid][$i] == "latehr" || $attendance[$value->userid][$i] == "half" || $attendance[$value->userid][$i] == "full") {
                $late++;
                if(isset($changed)){
                    if(isset($changed[$value->userid])){
                      if(isset($changed[$value->userid][$i]))
                      {
                        if($changed[$value->userid][$i]=="changed"){
                            echo '<td align="center"><img src="'.base_url().'/assets/attendence/Late.png" height="13px" style="" ></td>';

                     }
                     else
                      echo '<td><img src="'.base_url().'/assets/attendence/Late.png" height="10" style="" <i class=" flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="Late Procedure Report ('.$latetime.')" tabindex="1" data-toggle="tooltip"  style="color:green;" onclick="leave('.$i.','.$value->userid.','.$late.','.$leave.',2)"></i></td>';
                    }     
                    else
                      echo '<td><img src="'.base_url().'/assets/attendence/Late.png" height="10" style="" <i class=" flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="Late Procedure Report ('.$latetime.')" tabindex="1" data-toggle="tooltip"  style="color:green;" onclick="leave('.$i.','.$value->userid.','.$late.','.$leave.',2)"></i></td>';

                  }
                  else
                      echo '<td><img src="'.base_url().'/assets/attendence/Late.png" height="10" style="" <i class=" flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="Late Procedure Report ('.$latetime.')" tabindex="1" data-toggle="tooltip"  style="color:green;" onclick="leave('.$i.','.$value->userid.','.$late.','.$leave.',2)"></i></td>';

                }
                  else
                    echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/Late.png" height="9" <i class=" flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="Late Procedure Report ('.$latetime.')" tabindex="1" data-toggle="tooltip"  style="color:green;" onclick="leave('.$i.','.$value->userid.','.$late.','.$leave.',2)"></i></td>';
                
              }

                  // echo '<td align="center"><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/AbsentHollow.png" height="8px" style="" <i class=" flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="Leave Procedure Statement" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="color:green;" onclick="leave('.$i.','.$value->userid.','.$late.','.$leave.','.$purp.')"></i></td>';
                }
            }
              else if($leav){
                    
                  // print_r($leav);
                  // print_r($leav);exit;
                  if($leav->purpose=="absent")
                    $purpose=1;
                  if($leav->purpose=="late")
                    $purpose=2;
                  if($leav->purpose=="leave")
                    $purpose=3;

                  if($leav->status==-1)
                  {   
                    if($leav->purpose=="late")
                      {
                        $late++;
                        echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/red-cross.png" height="12" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report Unapproved ('.$latetime.')" tabindex="1" data-toggle="tooltip"  onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')"></i></td>';  
                      }
                    else
                      {
                        $leave++;
                        $leaveUnapproved++;
                        echo '<td><img src="'.base_url().'/assets/attendence/unapproved.png" height="15" style="" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report" tabindex="1" data-toggle="tooltip"  style="color:green;" onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')"></i></td>';
                      }
                  }
                  else if($leav->status==1){
                       if($leav->status==1 && $leav->monetize_day=="on")
                      {
                        echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/AbsentHollow.png" height="9" <i class="flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report Approved ('.$latetime.')" tabindex="1" data-toggle="tooltip" onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')"  ></i></td>';
                      }
                      elseif($leav->purpose=="late")
                      {
                        // echo '<td>LAte</td>';
                        
                        echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/red-tick.png" height="12" <i class="flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report Approved ('.$latetime.')" tabindex="1" data-toggle="tooltip" onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')"  ></i></td>';  

                      }else if($leav->unpaid>0){
                        echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/unpaidApproved.png" height="15" <i class="flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report Unpaid Approved" tabindex="1" data-toggle="tooltip" onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')"  ></i></td>';  

                      }
                      else
                      {
                        $leaveapproved++;
                        $leave++;
                        echo '<td><img src="'.base_url().'/assets/attendence/images-tick.png" height="12" style="" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report" tabindex="1" data-toggle="tooltip" style="color:green;" onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')"></i></td>'; 
                      }
                  }
                  else if($leav->status==0)
                  { 
                      if($leav->purpose=="late")
                      {
                        $late++;
                        echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/lateapplied.png" height="13" <i class="flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="Late Procedure Report ('.ucfirst($latetime).')" tabindex="1" data-toggle="tooltip"  onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')" ></i></td>';  

                      }
                      else{
                          $leave++;
                         echo '<td align="center"><img src="'.base_url().'/assets/attendence/imagesEmpty.png" height="12" style="" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.$leav->purpose.' Procedure Report" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="color:green;" onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')"></i></td>'; 
                       }
                }
                else if($leav->status==2)
                { 
                          $leave++;
                         echo '<td align="center"><img src="'.base_url().'/assets/attendence/absentBlack.png" height="12" style="" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.$leav->purpose.' Procedure Report" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="color:green;" onclick="leaved('.$i.','.$value->userid.','.$late.','.$leave.','.$purpose.')"></i></td>'; 
                }
              }

              elseif(!isset($attendance[$value->userid][$i]) && in_array($i, $sun)){
                
                      echo '<td><img src="'.base_url().'/assets/attendence/holidaysBlue.png" height="10" style=""></td>';
                   
              }
              elseif(!isset($attendance[$value->userid][$i])){
                echo '<td align="center"><img src="'.base_url().'/assets/attendence/AbsentHollow.png" height="8px" style="" <i class=" flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="'.$title.' Procedure Statement" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="color:green;" onclick="leave('.$i.','.$value->userid.','.$late.','.$leave.','.$purp.')"></i></td>';
              }
              elseif($attendance[$value->userid][$i]=="intime"){
                // echo "<td>".$attendance[$value->userid][$i]."</td>";
                if(isset($changed)){
                    if(isset($changed[$value->userid])){
                      if(isset($changed[$value->userid][$i]))
                      {
                        if($changed[$value->userid][$i]=="changed"){
                            echo '<td align="center"><img src="'.base_url().'/assets/attendence/presentChanged.png" height="13px" style="" ></td>';

                        }
                        else
                          echo '<td><img src="'.base_url().'/assets/attendence/presenttick.png" height="10" style=""></td>';
                    }     
                    else
                      echo '<td><img src="'.base_url().'/assets/attendence/presenttick.png" height="10" style=""></td>';

                  }
                  else
                      echo '<td><img src="'.base_url().'/assets/attendence/presenttick.png" height="10" style=""></td>';

                }
                  else
                      echo '<td><img src="'.base_url().'/assets/attendence/presenttick.png" height="10" style=""></td>';
                
              }
              elseif($attendance[$value->userid][$i] == "late15" || $attendance[$value->userid][$i] == "latehr" || $attendance[$value->userid][$i] == "half" || $attendance[$value->userid][$i] == "full") {
                $late++;
                if(isset($changed)){
                    if(isset($changed[$value->userid])){
                      if(isset($changed[$value->userid][$i]))
                      {
                        if($changed[$value->userid][$i]=="changed"){
                            echo '<td align="center"><img src="'.base_url().'/assets/attendence/Late.png" height="13px" style="" ></td>';
                        }
                        else
                          echo '<td><img src="'.base_url().'/assets/attendence/Late.png" height="10" style="" <i class=" flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="Late Procedure Report ('.$latetime.')" tabindex="1" data-toggle="tooltip"  style="color:green;" onclick="leave('.$i.','.$value->userid.','.$late.','.$leave.',2)"></i></td>';
                      }     
                      else
                        echo '<td><img src="'.base_url().'/assets/attendence/Late.png" height="10" style="" <i class=" flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="Late Procedure Report ('.$latetime.')" tabindex="1" data-toggle="tooltip"  style="color:green;" onclick="leave('.$i.','.$value->userid.','.$late.','.$leave.',2)"></i></td>';

                    }
                    else
                        echo '<td><img src="'.base_url().'/assets/attendence/Late.png" height="10" style="" <i class=" flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="Late Procedure Report ('.$latetime.')" tabindex="1" data-toggle="tooltip"  style="color:green;" onclick="leave('.$i.','.$value->userid.','.$late.','.$leave.',2)"></i></td>';

                  }
                  else
                    echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/Late.png" height="9" <i class=" flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="Late Procedure Report ('.$latetime.')" tabindex="1" data-toggle="tooltip"  style="color:green;" onclick="leave('.$i.','.$value->userid.','.$late.','.$leave.',2)"></i></td>';
                
              }
              // elseif(isset($attendance[$value->userid][$i])){
              elseif($attendance[$value->userid][$i]=="SatPresent"){
                      // echo "<td>".$attendance[$value->userid][$i]."</td>";
                      echo '<td><img src="'.base_url().'/assets/attendence/holidaysPresent.png" height="12"></td>';
              }
                    // else
                      // echo '<td align="center"><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/holidaysBlue.png" height="10px" style="" ></td>';
              // }
              elseif($attendance[$value->userid][$i]=="sunday"){
                // echo "<td>".$attendance[$value->userid][$i]."</td>";
              // Sunday Changed
              // if(isset($attendance[$value->userid][$i])){

              //       if($attendance[$value->userid][$i]=="SatPresent"){
              //         // echo "<td>".$attendance[$value->userid][$i]."</td>";
              //         echo '<td><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/holidaysPresent.png" height="12"  </td>';
              //       }
              //       else
              //         echo '<td align="center"><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/holidaysBlue.png" height="10px" style="" ></td>';

              //     }
              //     else
                    echo '<td align="center"><img src="'.base_url().'/assets/attendence/holidaysBlue.png" height="10px" style="" ></td>';
              }
              // else if(!isset($attendance[$value->userid][$i]))
                // echo '<td align="center"><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/AbsentHollow.png" height="8px" style="" <i class=" flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="'.$title.' Procedure Statement" tabindex="1" data-toggle="tooltip"  style="color:green;" onclick="leave('.$i.','.$value->userid.','.$late.','.$leave.','.$purp.')"></i></td>';

              else{
                echo '<td align="center"><img src="'.base_url().'/assets/attendence/AbsentHollow.png" height="8px" style="" <i class=" flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="'.$title.' Procedure Statement" tabindex="1" data-toggle="tooltip"  style="color:green;" onclick="leave('.$i.','.$value->userid.','.$late.','.$leave.','.$purp.')"></i></td>';

              }

        }
              echo "</tr>";
        ?>
      </tbody>
    </table>
  </div>  <!-- attendance div.task-wrapper-->  
  </td>
  <td><?php echo $leaveUnapproved; ?></td>
  <td><?php echo $leaveapproved; ?></td>
  <?php if(isset($accumalatedData[$value->userid])){ ?>
  <td><?php echo $accumalatedData[$value->userid] ?></td>
  <?php }

    else{ ?>
  <td><?php echo '0' ?></td>
  <?php } 
   $cou++;
  ?>
  </tr>
  <?php } endforeach;?>

  </tbody>
  </table>
  </div>
  <!-- Hidden Fields -->
  <!-- Popover Body -->
  <!-- <php print_r($public_holidays);exit;?> -->
  <div id="flag-content-wrapper" style="display: none">
    <form id="flag-content-wrapper-form" method="post" action="<?php echo base_url();?>/Salaryslip/saveLeave" enctype="multipart/form-data"> 
      <div class="form-group">
        
        <div class="">
          <span class="pull-left" style="margin-right:20px">
            <label for="">Late <span class="latespan">0</span></label>
          </span>
          <span class="pull-right" style="">
            <label for="">Leave <span class="leavespan">0</span></label>
          </span>
        </div>
        <div style="text-align:center;border-bottom:1px solid #ccc">
          <span style="margin-left:13px">
          <label for="">Remaining Leaves: <span class="remainingleave">
            <input  name="holidays" type="number"  value="2"  readonly style="border: none;width:34px">
            </span>
          </label>
          </span>
        </div>
      <?php
        //$this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR"
        if(fhkCheckAuthPermission(["canMonetizeLeave", "canDoEverything"])){ 
      ?>
      <div class="monetizeDiv" style="border:1px solid #ccc; padding: 7px">
        <label for="">Monetize My Leave</label>
        <span class="pull-right monetized">
          <input type="checkbox"  name="monetizeHoliday">
        </span>
      </div>
      <?php } ?>
    <div class="late" style="border:1px solid #ccc; padding: 7px">
      <label for="">Reason for Being Late</label>
      <input type="hidden" name="day" id="day1" value="">
      <input type="hidden" class="popupuserid" name="userid" value="">
      <textarea rows="2" name="LateReason" id="reason" cols="20" class="form-control" id="reason" placeholder="Late Reason (Application Status)"></textarea>
    </div>
      <input type="hidden" name="lateinput" class="lateinput">
      <input type="hidden" name="leaveinput" class="leaveinput">

    <div class="absent" style="border:1px solid #ccc; padding: 7px">
      <label for="">Reason for Being Absent</label>
      <input type="hidden" name="day" id="day1" value="">
      <input type="hidden" name="purpose" class="purpose" value="">
      <textarea rows="2" name="AbsentReason" id="reason" cols="20" class="form-control" id="reason" placeholder="Absent Reason (Application Status)"></textarea>
    </div>

      <div class="leave" style="border:1px solid #ccc; padding: 7px">
        <label for="">Apply for My Leave</label>
        <input type="hidden" name="day" id="day" value="">
        <input type="hidden" class="popupuserid" name="userid" value="">
        <textarea rows="2" name="leaveReason" cols="20" class="form-control"  placeholder="Leave Reason (Application Status)"></textarea>
      </div>
      <?php  
     $allowed="disabled";
     //$this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR"
      if(fhkCheckAuthPermission(["canWriteFeedBackOnApplications", "canDoEverything"])
        ){ 
        $allowed="";
        }
        ?>
    
        <div  style="border:1px solid #ccc; padding: 7px;border-top: 2px solid #ccc">
        <label for="">HR's Feedback</label>
        <textarea <?= $allowed?> rows="2" name="disap_Reason" cols="20" class="form-control"  placeholder=" (HR)"></textarea>
        
        <div class="" style="font-size: 13px;">
          <label for="" class="">Unpaid-Allowed : </label><input class="pull-right" type="radio" value="approve_unpaid" name="selectedStatus" <?= $allowed?>  />
        </div>
        
        <div class="" style="font-size: 13px;">
        <label for="" class="">Paid-Allowed : </label><input class="pull-right" type="radio" value="approve" name="selectedStatus"<?= $allowed?> />
        </div>
        
        <div class=" " style="font-size: 13px;">
          <label for="" class="">Disallowed: </label><input  type="radio" class="btn btn-slim pull-right" value="disapprove" name="selectedStatus" <?= $allowed;?> />      
        </div>

        <div style="font-size: 13px;">
          <label for="" class="unannouncedSpan">Unannounced: </label><span class="pull-right" id="unannouncedSpan"><input id="unannounced" type="radio" class="unannouncedSpan" value="unannounced" name="selectedStatus" <?= $allowed;?> ></span>
        </div>
        <br>
      </div>
      
      <div class="text-center">
        <label for="ApplicationUpload" style="padding:0;margin:0;font-size:9px" class="glyphicon glyphicon-paperclip text-center btn btn-xs" >Upload-App</label>  
        <input type="file" id="ApplicationUpload" class="sr-only" name="ApplicationUpload" />
        <label for="ApplicationCertifUpload" style="padding:0;margin:0;font-size:9px" class="glyphicon glyphicon-paperclip text-center btn btn-xs" >Upload-Certif</label>  
        <input type="file" id="ApplicationCertifUpload" class="sr-only" name="ApplicationCertifUpload" />
        <input type="hidden" class="ApplicationUpload" name="applicationURL">
        <input type="hidden" class="ApplicationCertifUpload" name="applicationCertificate">
      
      <button type="Print" class="btn btn-xs pull-left" onclick="printPopover('flag-content-wrapper-form')" >Print</button>
      <button type="submit" class="btn btn-xs pull-right"  >Submit</button>
    
      </div>
    </div>
  </form>
  </div>

  <div id="flag-content-wrapper1" style="display: none">
   <form id="flag-content-wrapper1-form" method="post" action="<?php echo base_url();?>/Salaryslip/updateLeave" enctype="multipart/form-data"> 
    <div class="form-group">
      
    <div class="" >
          <span class="pull-left" style="margin-right:20px">
            <label for="">Late <span class="latespan">0</span></label>
          </span>
          <span class="pull-right" style="">
            <label for="">Leave <span class="leavespan">0</span></label>
          </span>
        </div>
        <div style="text-align:center;border-bottom:1px solid #ccc">
          <span style="margin-left:13px">
          <label for="">Remaining Leaves: <span class="remainingleave">
            <input  name="holidays" type="number"  value="2"  readonly style="border: none;width:34px">
            </span>
          </label>
          </span>
        </div>
     <?php
      //$this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR"
      if(fhkCheckAuthPermission(["canMonetizeLeave", "canDoEverything"])) { 
    ?>  
     <div class="monetizeDiv" style="border:1px solid #ccc; padding: 7px">
      <input type="hidden" name="leave_id" id="leave_id">
      <label for="">Monetize My Leave</label>
    <span class="pull-right monetized">
      <input type="checkbox"  name="monetizeHoliday">
    </span>
  </div>
  <?php }?>
  <div class="late"  style="border:1px solid #ccc; padding: 7px">
    <label for="">Reason for Being Late</label>
    <input type="hidden" name="day" id="day2" value="">
    <input type="hidden" class="popupuserid" name="userid" value="">
    <textarea rows="2" name="LateReason"  cols="20" class="form-control" id="Latereason" placeholder="Late Reason (Application Status)"></textarea>
  </div>
    <input type="hidden" name="lateinput" class="lateinput">
    <input type="hidden" name="leaveinput" class="leaveinput">
  <div class="absent"  style="border:1px solid #ccc; padding: 7px">
    <label for="">Reason for Being Absent</label>
    <!-- <input type="hidden" name="day" id="day1" value=""> -->
    <input type="hidden" name="purpose" class="purpose" value="">
   <textarea rows="2" name="AbsentReason" cols="20" class="form-control" id="Absentreason" placeholder="Absent Reason (Application Status)"></textarea>
  </div>
  <div class="leave" style="border:1px solid #ccc; padding: 7px">
    <label for="">Apply for My Leave</label>
    <!-- <input type="hidden" name="day" id="day1" value=""> -->
    <textarea rows="2" name="leaveReason"  cols="20" class="form-control" id="Leavereason" placeholder="Leave Reason (Application Status)"></textarea>
  </div>

  <?php  
     $allowed="disabled";
     //$this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR"
      if(fhkCheckAuthPermission(["canWriteFeedBackOnApplications", "canDoEverything"])){ 
        $allowed="";
        }
  ?>

  <div  style="border:1px solid #ccc; padding: 7px;border-top: 2px solid #ccc">
    <label for="">HR's Feedback</label>
    <textarea <?= $allowed;?> rows="2" name="disap_Reason" cols="20" id="disap_Reason" class="form-control" id="reason" placeholder=" (HR)"></textarea>
    <div style="font-size: 13px;">
       <label for=""> Unpaid-Allowed : </label>
       <span id="approvedHolidayunpaid"><input <?= $allowed;?> id="unpaidApproved" class="pull-right" type="radio" value="approve_unpaid" name="selectedStatus"/> </span>
    </div>
    <div style="font-size: 13px;">
       <label for="" >Paid-Allowed : </label>
       <span id="approvedHolidayc"><input id="approved" <?= $allowed;?> class="pull-right " type="radio" value="approve" name="selectedStatus"/> </span>
    </div>
    <div style="font-size: 13px;">
      <label for="" class="">Disallowed: </label><span class="pull-right" id="disap_Holidayc"><input id="unapproved" <?= $allowed;?> type="radio"  value="disapprove" name="selectedStatus" /></span>
    </div>
    <div style="font-size: 13px;">
      <label for="" class="unannouncedSpan">Unannounced: </label><span class="pull-right" id="unannouncedSpanid"><input id="unannounced" <?= $allowed;?> type="radio" class="unannouncedSpan" value="unannounced" name="selectedStatus" /></span>
    </div>
    <br>
  </div>

  <div class="text-center">
        <span style="padding:0 5px;"><label for="ApplicationUpload" style="padding:0;margin:0;font-size:9px" class="glyphicon glyphicon-paperclip text-center btn btn-xs" >Upload-App</label>  
        <input type="file" id="ApplicationUpload" class="sr-only" name="ApplicationUpload" />
        <label for="ApplicationCertifUpload" style="padding:0;margin:0;font-size:9px" class="glyphicon glyphicon-paperclip text-center btn btn-xs" >Upload-Certif</label>  
        <input type="file" id="ApplicationCertifUpload" class="sr-only" name="ApplicationCertifUpload" />
        <input type="hidden" class="ApplicationUpload" name="applicationURL">
        <input type="hidden" class="ApplicationCertifUpload" name="applicationCertificate">
        </span>
  <button type="Print" class="btn btn-xs pull-left" onclick="printPopover('flag-content-wrapper1-form')" >Print</button>
  <button type="submit" class="btn btn-xs pull-right" id="reason-submit" >Submit</button>
  </div>
  </div>
  </form>
  </div>  
  </body>
  <?php   //print_r($accumalatedData);exit; ?>
  <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
  <script>

  var _attendance_leave='<?=json_encode((array)($attendance_leave))?>'
  _attendance_leave=JSON.parse(_attendance_leave);
  var _remaining_holidays='<?=json_encode($accumalatedData)?>'
  _remaining_holidays=JSON.parse(_remaining_holidays);

  // console.log(_remaining_holidays);
  </script>


  <script type="text/javascript">


  var dat=$('#data_div').html();
  if(dat)
   dat=dat.split('-');

    // Return today's date and time
    var currentTime = new Date();
    var month="<?php echo $month; ?>";
    $('#monthinput').val(month);
  // returns the month (from 0 to 11)

  // returns the year (four digits)
  var year = "<?php echo $year;?>";


  function leave(day,userid,late,leave,purpose){

    if(day<10)
      day="0"+day;
    // alert($("#day").val());
    var us=null;
    $("#day").val((year+"-"+month+"-"+day));
    if(_attendance_leave){
    for (var i = 0; i < _attendance_leave.length; i++) {
     if(_attendance_leave[i]['userid']==userid)
     {
      us=_attendance_leave[i];
      break;
     }
    }
  }
    //console.log(_attendance_leave);

    $('.latespan').html(late);
    $('.leavespan').html(leave);
    $('.popupuserid').val(userid);
    //var usertype="<?= $this->session->userdata('usertype')?>";
    //var user_id="<?= $this->session->userdata('id')?>";
    if(usertype =="Director" || usertype =="HR" || userid==user_id || true){

     
        if(purpose==1){
          
          $('.leave').hide();
          $('.late').hide();
          $('.monetizeDiv').hide();
          $('.absent').show();
          $('.purpose').val('absent');
          $('.unannouncedSpan').show();

        }
        else if(purpose==2){
          $('.leave').hide();
          $('.late').show();
          $('.monetizeDiv').hide();
          $('.absent').hide();
          $('.purpose').val('late');
          $('.unannouncedSpan').hide();

        }
        else if(purpose==3){
          $('.leave').show();
          $('.late').hide();
          $('.monetizeDiv').show();
          $('.absent').hide();
          $('.purpose').val('leave');
          $('.unannouncedSpan').show();
        }

        $('.lateinput').val(late);
        $('.leaveinput').val(leave);
      if(_remaining_holidays)
        $('.remainingleave').html('<input  name="holidays" type="number"  value="'+_remaining_holidays[userid]+'"  readonly style="border: none;width:34px">');
      else
        $('.remainingleave').val('2');
    }
    else{
      $('#flag-content-wrapper-form').hide();
      alert('You are not AUTHORIZED');
      return;
      }
    // console.log(year+"-"+month+"-"+day);
  }


  var day;
  function leaved(d,userid,late,leave,purpose){
    // console.log(_attendance_leave);

    day=d;
    var us=null;
    if(day<10)
      day="0"+day;
    // alert(day);
    $("#day2").val(year+"-"+month+"-"+day);

    for (var i = 0; i < _attendance_leave.length; i++) {
    if(_attendance_leave[i]['date']==(year+"-"+month+"-"+day) && _attendance_leave[i]['userid']==userid)
     {
      us=_attendance_leave[i];
      break;
     }

  }
  // console.log(us);
      var usertype="<?= $this->session->userdata('usertype')?>";
      var user_id="<?= $this->session->userdata('id')?>";
    if(usertype =="Director" || usertype =="HR" || userid==user_id){
    $('.lateinput').val(late);
    $('.leaveinput').val(leave);
    if(us['purpose']=="monetized")
      {
        $('.monetized').html('<input type="checkbox" checked name="monetizeHoliday">');
        purpose=3;
      }

    if(purpose==1){
      $('.leave').hide();
      $('.late').hide();
      $('.monetizeDiv').hide();
      $('.absent').show();
      $('.unannouncedSpan').show();
      // $('.purpose').val('absent');
    }
    else if(purpose==2){
      $('.leave').hide();
      $('.late').show();
      $('.monetizeDiv').hide();
      $('.absent').hide();
      $('.unannouncedSpan').hide();
      // $('.purpose').val('late');

    }
    else if(purpose==3){
      $('.leave').show();
      $('.late').hide();
      $('.monetizeDiv').show();
      $('.absent').hide();
      $('.unannouncedSpan').show();
      // $('.purpose').val('leave');
    }
    $('.latespan').html(late);
    $('.leavespan').html(leave);
    $('.popupuserid').val(userid);

    $('#approvedHolidayunpaid').html('<input id="unpaidApproved" class="pull-right" type="radio" <?= $allowed;?>  value="approve_unpaid" name="selectedStatus">');

    $('#approvedHolidayc').html('<input type="radio" class="pull-right" <?= $allowed;?> value="approve" name="selectedStatus">');
    $('#disap_Holidayc').html('<input type="radio" <?= $allowed;?> class="pull-right" value="disapprove" name="selectedStatus">');

    $('#unannouncedSpan').html('<input type="radio" <?= $allowed;?> class="pull-right" value="unannounced" name="selectedStatus">'); 
    

  if(us!=null){
        if(us["holidays"])
          $('.remainingleave').html('<input  name="holidays" type="number"  value="'+us["holidays"]+'"  readonly style="border: none;width:34px">');
        else
        $('.remainingleave').html('<input  name="holidays" type="number"  value="24"  readonly style="border: none;width:34px">');
        $('#leave_id').val(us['id']);
        $('.purpose').val(us['purpose']);
        document.getElementById('disap_Reason').innerHTML=us['disap_reason'];
        document.getElementById('Leavereason').innerHTML=us['app_reason'];
        document.getElementById('Latereason').innerHTML=us['late_reason'];
        document.getElementById('Absentreason').innerHTML=us['absent_reason'];
        if(us['application_upload']){
          $('input.ApplicationUpload').val(us['application_upload']);
        }
        if(us['application_certificate_upload']){
          $('input.ApplicationCertifUpload').val(us['application_certificate_upload']);
        }
        if(us['monetize_day']!='' || us['monetize_day']!=null)
          document.getElementsByClassName('monetized').innerHTML='<input <?= $allowed;?> type="checkbox"  name="monetizeHoliday" checked>';

        if(us['unpaid']==1){
           $('#approvedHolidayunpaid').html('<input id="unpaidApproved" <?= $allowed;?> class="pull-right" type="radio" checked value="approve_unpaid" name="selectedStatus">');
        }
        else if(us['status']==1){
           $('#approvedHolidayc').html('<input type="radio" <?= $allowed;?> class="pull-right" value="approve" checked name="selectedStatus">');
       }
       else if(us['status']==-1){
              $('#disap_Holidayc').html('<input type="radio" <?= $allowed;?> class="pull-right" value="disapprove" checked name="selectedStatus">');
         }
        else if(us['status']==2){
            $('#unannouncedSpanid').html('<input class="unannouncedSpan" type="radio" <?= $allowed;?> class="pull-right" value="unannounced" checked name="selectedStatus">'); 
            //alert($('#unannouncedSpan').html());
       }
    }
    $("#day1").val((year+"-"+month+"-"+day));
  }else{
      $('#flag-content-wrapper1-form').hide();
      alert('You are not AUTHORIZED');
      return;
  }
  }

  function printPopover(id){
    $('#'+id).attr('action', '<?php echo base_url("Attendance/print_leave");?>');
    $('#'+id).attr('target', '_blank');
    $("#"+id).submit();
  }

  $(function() {
      $(window).focus(function() {
        $('#flag-content-wrapper-form').attr('action', '<?php echo base_url();?>/Salaryslip/saveLeave');
        $('#flag-content-wrapper-form1').attr('action', '<?php echo base_url();?>/Salaryslip/updateLeave');
      });
    });

  $(document).ready(function(){

    

      $(".myButton").on('change', function(){
      var date = $(this).val();
      var d=date.split('-');
      // alert(date);
      window.location.href = '<?php echo base_url(); ?>attendance/Attendance_Sheet?year='+d[0]+'&month='+d[1]+'&day='+d[2];
      
    });

  $(function(){

      $("#datepicker").datepicker({
        showOn: "button",
        buttonImage: "<?php echo base_url(); ?>assets/images/calendar.gif",
        buttonImageOnly: true,
        buttonText: "Select Date",
        dateFormat: "yy-mm-dd"
      });
    });


    $('[data-toggle="tooltip"]').tooltip(); 
     //pop
      $('[data-toggle="popover"]').popover(); 

      $(".flag-toggle").popover({
        toggle: 'popover',
        placement: 'bottom',
        title: 'Flag this content',
        html: true,
        content: function() {
          return $('#flag-content-wrapper').html();
        },
      }); 

      $(".flag-toggle1").popover({

        toggle: 'popover',
        placement: 'bottom',
        title: 'Flag this content',
        html: true,
        content: function() {
          return $('#flag-content-wrapper1').html();
        },
      });

      $("input[name='ApplicationCertifUpload']").on('change',function(){
        $('input.ApplicationCertifUpload').val($("input[name='ApplicationCertifUpload']").val());
      });

      $("input[name='ApplicationUpload']").on('change',function(){
        $('input.ApplicationUpload').val($("input[name='ApplicationUpload']").val());
      });

      // $("#myTable").tablesorter(); 

    });


  </script>
  </html>