 <style>
  td{
    text-align: center;
  }
</style>
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
  
  // print_r($attendance);exit;
  ?>

      
  
      <div class="flexbox">
        <div  style="height:66.5px; width:11.5%;background:#f5f5f5">
          <div class="tdCustom">Attendance</div>
          <div class="tdCustom">In Time</div>
          <div class="tdCustom">Late by 15</div>
          <div class="tdCustom">Late by an hour</div>
          <div class="tdCustom">Half day</div>
          <div class="tdCustom">Official Leave</div>
          <div class="tdCustom">Absent</div>

        </div>
        <?php    //Maximum days of Current Month
             //$thisMonth= date("d-m-Y");
             //$d = date("Y-m-t", strtotime($thisMonth));
              /*
             $d = date("Y-m-t", strtotime("-1 months"));
             $date=@explode("-", $d);
             
             $month=$date[1];
             $year=$date[0];
             */
             // print_r($year);exit;

             $maxDays=$date[2];
            
        ?>
        <table class="performance-table" id="tr-table" style="width:88.5%;height:66.5px;">
          <thead>
            <tr>
              <?php
                  //$begin  = new DateTime(date('$year-$month-01', strtotime("first day of -1 month")));
                  //$begin  = new DateTime(date('$year-$month-01', strtotime("first day of -1 month")));

                  $begin    = new DateTime(date("Y-m-01", strtotime($year.'-'.$month)));
                  $end    = new DateTime(date("Y-m-t", strtotime($year.'-'.$month)));
                  
                  //$begin  = new DateTime(date('Y-m-d', strtotime("first day of -1 month")));
                  //$end    = new DateTime(date('Y-m-d', strtotime("last day of -1 month")));
                 
                  //var_dump($end); die();

                 for ($i=1; $i<=$date[2]; $i++){ 
                  if($begin->format("N") == 7){
                  echo '<th style="background:red !important; color:white !important;">'.$i.'</th>';

                  }
                  
                  else{
                    echo '<th>'.$i.'</th>';
                  }
                  $begin->modify("+1 day");
                 }
              ?>
            </tr>
          </thead>
          
          <tbody class="atbody">



<?php $x= 0;

              $late=0;$leave=0;
              $leaveapproved=0;
              $leaveUnapproved=0;
              $x= 0;
              $public=null;
              $leav=null;
              $purpose=null;

  $sun= getSundays($year,$month);
  $curDay=date('d');
  // print_r($userdetails);exit;
  for($i = 1 ; $i <= $maxDays; $i++) {
    
              $latetime="";
              $purp=1;
              $title="Absence";
              $counter=0;
                if($i>=$curDay && $month==date('m'))
                {
                  $title="Leave";
                  $purp=3;
                }

            echo "<tr>";




            if(isset($public_holidays))
              $public=getd($i,$month,$public_holidays);
            if(isset($attendance_leave))
            {
              $leav=getleave($i,$month,$attendance_leave,$userid,$year);
            }  
            $count=1;
            if($public){
              if($public->status>0 && $public->description=="School Holiday" && $userdetails->hired_for_project==2){
                 if(isset($attendance[$i])){
                  if($attendance[$i]){
                    echo '<td></td>';
                    echo '<td></td>';
                    echo '<td></td>';
                    echo '<td></td>';
                    echo '<td><img src="'.base_url().'attendence/schoolEventsPresent.GIF" height="9" <i class="" id="flag'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.$public->name.'" tabindex="1" data-toggle="tooltip"  ></i></td>';
                    echo '<td></td>';
                  } 

                }
                else{
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td><img src="'.base_url().'/assets/attendence/schoolEvents.GIF" height="9" <i class="" id="flag'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.$public->name.'" tabindex="1" data-toggle="tooltip"  ></i></td>';
                echo '<td></td>';
                $count=0;
              }
              }
              else if($public->status>0 && $public->description=="Public Holiday"){
               if(isset($attendance[$i])){
                  if($attendance[$i]){
                    echo '<td></td>';
                    echo '<td></td>';
                    echo '<td></td>';
                    echo '<td></td>';
                    echo '<td><img src="'.base_url().'/assets/attendence/holidaysPresent.png" height="12" <i class="" id="flag'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.$public->name.'" tabindex="1" data-toggle="tooltip"  ></i></td>';
                    echo '<td></td>';
                  } 

                }
                else{
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td></td>';
                echo '<td><img src="'.base_url().'/assets/attendence/holidaysBlue.png" height="11"  <i class="" id="flag'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.$public->name.'" tabindex="1" data-toggle="tooltip"  ></i></td>';
                echo '<td></td>';
              }
              }
            //   else if(!$count){

            //     echo '<td></td>';
            //     echo '<td>dsf</td>';
            //     echo '<td></td>';
            //     echo '<td></td>';
            //     echo '<td align="center"><img src="'.base_url().'/assets/attendence/AbsentHollow.png" height="8px" style="" <i class=" flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="Leave Procedure Statement" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="color:green;" onclick="leave('.$i.','.$purpose.')"></i></td>';
            //     echo '<td></td>';
            // }
            else
            {


              if($leav){
                  
                // print_r($leav);
                // print_r($leav);exit;
                if($leav->purpose=="absent")
                  $purpose=1;
                if($leav->purpose=="late")
                  $purpose=2;
                if($leav->purpose=="leave")
                  $purpose=3;

                if($leav->status<0)
                {   
                  // if($leav->purpose=="late")
                  //   {
                      // $late++;
                  //     echo '<td></td>';
                  //     echo '<td></td>';
                  //     echo '<td></td>';
                  //     echo '<td></td>';
                  //     echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/Late.png" height="12" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report Unapproved ('.$latetime.')" tabindex="1" data-toggle="tooltip"  onclick="leaved('.$i.','.$userid.','.$late.','.$leave.','.$purpose.')"></i></td>';  
                  //     echo '<td></td>';
                  //   }
                  // else
                  //   {
                      $leave++;
                      $leaveUnapproved++;
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td><img src="'.base_url().'/assets/attendence/unapproved.png" height="12" style=""  </td>';
                      echo '<td></td>';
                    // }
                }
                else if($leav->status>0){
                    
                    if($leav->unpaid==1){

                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/unpaidapproved.png" height="15"  </td>';  
                      echo '<td></td>';

                    }elseif($leav->status==2){

                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/absentBlack.png" height="15"  </td>';  
                      echo '<td></td>';

                    }
                    else
                    {
                      $leaveapproved++;
                      $leave++;
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td><img src="'.base_url().'/assets/attendence/images-tick.png" height="12" style="" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report" tabindex="1" data-toggle="tooltip" style="color:green;" onclick="leaved('.$i.','.$purpose.')"></i></td>'; 
                      echo '<td></td>';
                    }
                }
                else if($leav->status==0)
                { 
                    // if($leav->purpose=="late")
                    // {
                    //   $late++;
                    //   echo '<td></td>';
                    //   echo '<td></td>';
                    //   echo '<td></td>';
                    //   echo '<td></td>';
                    //   echo '<td></td>';
                    //   echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/lateapplied.png" height="13" <i class="flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="Late Procedure Report ('.ucfirst($latetime).')" tabindex="1" data-toggle="tooltip"  onclick="leaved('.$i.','.$userid.','.$late.','.$leave.','.$purpose.')" ></i></td>';  

                    // }
                    // else{
                        $leave++;
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td align="center"><img src="'.base_url().'/assets/attendence/imagesEmpty.png" height="12" style="" </td>'; 
                        echo '<td></td>';
                     // }
              }
            }

  // echo $i+" ";

  elseif (!isset($attendance[$i]) && in_array($i, $sun))
  {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="'.base_url().'/assets/attendence/holidaysBlue.png" height="11" style=""</td>';
      echo '<td></td>';
  }

 elseif (!isset($attendance[$i])) {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      // echo '<td align="center"><i class="fa fa-circle-thin flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="Leave Statement" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="margin-left:4px;color:green;"  onclick="leave('.$i.')"></i></td>';
      echo '<td align="center"><img src="'.base_url().'/assets/attendence/AbsentHollow.png" height="8px" style=""  </td>';
    }

    elseif($attendance[$i] == "intime") {
      echo '<td><img src="'.base_url().'/assets/attendence/presenttick.png" height="9" style=""></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
    }
    elseif($attendance[$i] == "late15") {
      
      echo '<td></td>';
      echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/presenttick.png" height="9" style="" </td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
    }
    elseif($attendance[$i] == "latehr") {
      echo '<td></td>';
      echo '<td></td>';
       echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/presenttick.png" height="9" style="" </td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
    }
    elseif($attendance[$i] == "half") {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="'.base_url().'/assets/attendence/presenttick.png" height="9" style=""  </td>';
      echo '<td></td>';
       echo '<td></td>';
    }
    elseif($attendance[$i] == "sunday") {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="'.base_url().'/assets/attendence/holidaysPresent.png" height="9" style=""></td>';
       echo '<td></td>';
    }
    else
  {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      // echo '<td align="center"><i class="fa fa-circle-thin flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="Leave Statement" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="margin-left:4px;color:green;" onclick="leave('.$i.')"></i></td>';
      echo '<td align="center"><img src="'.base_url().'/assets/attendence/AbsentHollow.png" height="8px" style=""  </td>';
  }

              
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

                if($leav->status<0)
                {   
                  if($leav->purpose=="late")
                    {
                      $late++;
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/red-cross.png" height="12" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report Unapproved ('.$latetime.')" tabindex="1" data-toggle="tooltip" onclick="leaved('.$i.','.$userid.','.$late.','.$leave.','.$purpose.')"></i></td>';  
                      echo '<td></td>';
                    }
                  else
                    {
                      $leave++;
                      $leaveUnapproved++;
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td><img src="'.base_url().'/assets/attendence/unapproved.png" height="12" style=""  </td>';
                      echo '<td></td>';
                    }
                }
                else if($leav->status>0){
                    if($leav->purpose=="late")
                    {
                      
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/red-tick.png" height="12" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report Unapproved ('.$latetime.')" tabindex="1" data-toggle="tooltip"  onclick="leaved('.$i.','.$userid.','.$late.','.$leave.','.$purpose.')"></i></td>';  
                      echo '<td></td>';
                    }
                  
                    elseif($leav->unpaid>0){

                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/unpaidapproved.png" height="15"  </td>';  
                      echo '<td></td>';

                    }elseif($leav->status==2){

                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/absentBlack.png" height="15"  </td>';  
                      echo '<td></td>';

                    }
                    else
                    {
                      $leaveapproved++;
                      $leave++;
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td></td>';
                      echo '<td><img src="'.base_url().'/assets/attendence/images-tick.png" height="12" style="" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="'.ucfirst($leav->purpose).' Procedure Report" tabindex="1" data-toggle="tooltip" style="color:green;" onclick="leaved('.$i.','.$purpose.')"></i></td>'; 
                      echo '<td></td>';
                    }
                }
                else if($leav->status==0)
                { 
                    // if($leav->purpose=="late")
                    // {
                    //   $late++;
                    //   echo '<td></td>';
                    //   echo '<td></td>';
                    //   echo '<td></td>';
                    //   echo '<td></td>';
                    //   echo '<td></td>';
                    //   echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/lateapplied.png" height="13" <i class="flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="Late Procedure Report ('.ucfirst($latetime).')" tabindex="1" data-toggle="tooltip"  onclick="leaved('.$i.','.$userid.','.$late.','.$leave.','.$purpose.')" ></i></td>';  

                    // }
                    // else{
                        $leave++;
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td align="center"><img src="'.base_url().'/assets/attendence/imagesEmpty.png" height="12" style="" </td>'; 
                        echo '<td></td>';
                     // }
              }
            }

  // echo $i+" ";

  elseif (!isset($attendance[$i]) && in_array($i, $sun))
  {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="'.base_url().'/assets/attendence/holidaysBlue.png" height="11" style=""</td>';
      echo '<td></td>';
  }

 elseif (!isset($attendance[$i])) {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      // echo '<td align="center"><i class="fa fa-circle-thin flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="Leave Statement" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="margin-left:4px;color:green;"  onclick="leave('.$i.')"></i></td>';
      echo '<td align="center"><img src="'.base_url().'/assets/attendence/AbsentHollow.png" height="8px" style=""  </td>';
    }

    elseif($attendance[$i] == "intime") {
      echo '<td><img src="'.base_url().'/assets/attendence/presenttick.png" height="9" style=""></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
    }
    elseif($attendance[$i] == "late15") {
      
      echo '<td></td>';
      echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/presenttick.png" height="9" style="" </td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
    }
    elseif($attendance[$i] == "latehr") {
      echo '<td></td>';
      echo '<td></td>';
       echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/presenttick.png" height="9" style="" </td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
    }
    elseif($attendance[$i] == "half") {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="'.base_url().'/assets/attendence/presenttick.png" height="9" style="" </td>';
      echo '<td></td>';
       echo '<td></td>';
    }
    elseif($attendance[$i] == "sunday") {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="'.base_url().'/assets/attendence/holidaysPresent.png" height="9" style=""></td>';
       echo '<td></td>';
    }
    else
  {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      // echo '<td align="center"><i class="fa fa-circle-thin flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="Leave Statement" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="margin-left:4px;color:green;" onclick="leave('.$i.')"></i></td>';
      echo '<td align="center"><img src="'.base_url().'/assets/attendence/AbsentHollow.png" height="8px" style=""  </td>';
  }
    echo "</tr>";
}
?>
          </tbody>
        </table>
      </div>
<!-- Hidden Fields -->
<!-- Popover Body -->


<div id="flag-content-wrapper" style="display: none">
  <form id="flag-content-wrapper-form" method="post" action="<?php echo base_url();?>Salaryslip/saveLeave" > 
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

          <input  name="holidays" type="number"  value="<?php if($remainingholidays){ echo $remainingholidays->holidays;} else { echo "2"; }?>"  readonly style="border: none;width:34px">
          </span>
        </label>
        </span>
      </div>
    
    <div class="monetizeDiv" style="border:1px solid #ccc; padding: 7px">
      <label for="">Monetize My Leave</label>
      <span class="pull-right monetized">
        <input type="checkbox"  name="monetizeHoliday">
      </span>
    </div>
  <div class="late" style="border:1px solid #ccc; padding: 7px">
    <label for="">Reason for Being Late</label>
    <input type="hidden" name="day" id="day1" value="">
    <input type="hidden" class="popupuserid" name="userid" value="<?php echo $userid; ?>">
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
      <input type="hidden" class="popupuserid" name="userid" value="<?php echo $userid; ?>">
      <textarea rows="2" name="leaveReason" cols="20" class="form-control"  placeholder="Leave Reason (Application Status)"></textarea>
    </div>
    <div  style="border:1px solid #ccc; padding: 7px;border-top: 2px solid #ccc">
      <label for="">HR's Feedback</label>
      <textarea rows="2" name="disap_Reason" cols="20" class="form-control"  placeholder=" (HR)"></textarea>
      
      <div class="" style="font-size: 13px;">
        <label for="" class="">Unpaid-Allowed : </label><input class="pull-right" type="checkbox" name="approve_unpaid"  />
      </div>
      
      <div class="" style="font-size: 13px;">
      <label for="" class="">Paid-Allowed : </label><input class="pull-right" type="checkbox" name="approve" />
      </div>
      
      <div class=" " style="font-size: 13px;">
        <label for="" class="">Disallowed: </label><input  type="checkbox" class="btn btn-slim pull-right" name="disapprove"  />      
      </div>
      <br>
    </div>
    <button type="Print" class="btn btn-xs pull-left" onclick="printPopover('flag-content-wrapper-form')" >Print</button>
    <button type="submit" class="btn btn-xs pull-right"  >Submit</button>
  </div>
</form>
</div>

<div id="flag-content-wrapper1" style="display: none">
 <form id="flag-content-wrapper1-form" method="post" action="<?php echo base_url();?>Salaryslip/updateLeave" > 
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
          <input  name="holidays" type="number"  value="<?php if($remainingholidays){ echo $remainingholidays->holidays;} else { echo "2"; }?>"  readonly style="border: none;width:34px">
          </span>
        </label>
        </span>
      </div>
   <div class="monetizeDiv" style="border:1px solid #ccc; padding: 7px">
    <label for="">Monetize My Leave</label>
  <span class="pull-right monetized">
    <input type="checkbox"  name="monetizeHoliday">
  </span>
</div>
<div class="late"  style="border:1px solid #ccc; padding: 7px">
  <label for="">Reason for Being Late</label>
  <input type="hidden" name="day" id="day2" value="">
  <input type="hidden" class="popupuserid" name="userid" value="<?php echo $userid; ?>">
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
<div  style="border:1px solid #ccc; padding: 7px;border-top: 2px solid #ccc">
  <label for="">HR's Feedback</label>
  <textarea rows="2" name="disap_Reason" cols="20" id="disap_Reason" class="form-control" id="reason" placeholder=" (HR)"></textarea>
  <div style="font-size: 13px;">
     <label for="" >Unpaid-Allowed : </label>
     <span id="approvedHolidayunpaid"><input id="unpaidapproved" class="pull-right" type="checkbox" name="approve_unpaid" /> </span>
  </div>
  <div style="font-size: 13px;">
     <label for="" >Paid-Allowed : </label>
     <span id="approvedHolidayc"><input id="approved" class="pull-right " type="checkbox" name="approve" /> </span>
  </div>
  <div style="font-size: 13px;">
    <label for="" class="">Disallowed: </label><span class="pull-right" id="disap_Holidayc"><input id="unapproved" type="checkbox"  name="disapprove"  /></span>
  </div>
  <br>
</div>
<button type="Print" class="btn btn-xs pull-left" onclick="printPopover('flag-content-wrapper1-form')" >Print</button>
<button type="submit" class="btn btn-xs pull-right" id="reason-submit" >Submit</button>
</div>
</form>
</div>  




<!-- <php print_r($public_holidays);exit;?> -->
<!--   <div id="flag-content-wrapper" style="display: none">
        <form method="post" action="<php echo base_url();?>Salaryslip/saveLeave" > 
        <div class="form-group">
            <div class="pull-left" ><label for="">Remaining Leaves-
              <php if($attendance_leave)
              //print_r($attendance_leave);
              //exit(); 
              {?>
              <input  name="holidays" type="number"  value="<php echo $attendance_leave[0]->holidays; ?>" readonly style="border: none;width:34px">
              <php } else { ?>
              <input  name="holidays" type="number"  value="24" readonly style="border: none;width:34px">
              <php } ?>
              </label>
            </div>
            <br>
            <div  style="border:1px solid #ccc; padding: 7px">
            <label for="">Monetize My Leave</label><br>
            <textarea rows="2" name="monetizeReason" cols="20" class="form-control"  style="display: inline" placeholder="Monetize Reason"></textarea><input type="number" min="0" class="form-control" placeholder="Monetize Holidays" name="monetizeHoliday">
            </div>
            <div  style="border:1px solid #ccc; padding: 7px">
            <label for="">Apply for My Leave</label>
            <input type="hidden" name="day" id="day" value="">
            <input type="hidden" name="userid" value="<php echo ($userid); ?>">
            <textarea rows="2" name="leaveReason" cols="20" class="form-control"  placeholder="Leave Reason (Application Status)"></textarea>
            </div>
            <div  style="border:1px solid #ccc; padding: 7px;border-top: 2px solid #ccc">
            <label for="">Admin's Feedbacksss</label>
            <textarea rows="2" name="disap_Reason" cols="20" class="form-control"  placeholder=" (Admin)"></textarea>
            <label for="" class="pull-left">Approve : </label><input type="checkbox" name="approve"  />
            <div class="pull-right">
            <label for="" class="">Disapprove: </label><input type="checkbox" class="btn btn-slim" name="disapprove"  />
            </div><br>
            </div>
            <button type="submit" class="btn btn-xs pull-right"  >Submit</button>
        </div>
        </form>
  </div>

  <div id="flag-content-wrapper1" style="display: none">
       <form method="post" action="<php echo base_url();?>Salaryslip/updateLeave" > 
        <div class="form-group">
            <div class="pull-left" ><label for="">Remaining Leaves-
             <span id="holidaysnum"></span>
             <!-- <input id="holidaysnum" name="holidays" type="number"  value="" readonly style="border: none;width:34px"> --
              </label>
            </div>
            <br>
            <div  style="border:1px solid #ccc; padding: 7px">
            <label for="">Monetize My Leave</label><br>
            <textarea rows="2" name="monetizeReason" cols="20"  class="form-control" id="monetize_reason" style="display: inline" placeholder="Monetize Reason"></textarea><div id="monetize_holiday"><input type="number" min="0" id="" class="form-control" placeholder="Monetize Holidays" name="monetizeHoliday"></div>
            </div>
            <div  style="border:1px solid #ccc; padding: 7px">
            <label for="">Apply for My Leave</label>
            <input type="hidden" name="day" id="day1" value="">
            <input type="hidden" name="userid" value="<php echo ($userid); ?>">
            <textarea rows="2" name="leaveReason" id="reason" cols="20" class="form-control" id="reason" placeholder="Leave Reason (Application Status)"></textarea>
            </div>
            <div  style="border:1px solid #ccc; padding: 7px;border-top: 2px solid #ccc">
            <label for="">Admin's Feedback</label>
            <textarea rows="2" name="disap_Reason" cols="20" id="disap_Reason" class="form-control" id="reason" placeholder=" (Admin)"></textarea>
            <label for="" class="pull-left">Approve : </label><span id="approvedHoliday"><input type="checkbox" name="approve" /> </span>
            <div class="pull-right">
            <label for="" class="">Disapprove: </label><span id="disap_Holiday"><input type="checkbox"  name="disapprove"  /></span>
            </div><br>
            </div>
            <button type="submit" class="btn btn-xs pull-right" id="reason-submit" >Submit</button>
        </div>
        </form>
</div>

 -->

<script>
  var _attendance_leave='<?=json_encode((array)($attendance_leave))?>'
  _attendance_leave=JSON.parse(_attendance_leave);
</script>


<script type="text/javascript">

// alert($('#data_div').html());

  var dat=$('#data_div').html();
  dat=dat.split('-');

  // alert(dat);
  // Return today's date and time
var currentTime = new Date();
var month="<?php echo $month; ?>";
// alert(month);
$('#monthinput').val(month);
// alert(month);
// returns the month (from 0 to 11)

// returns the year (four digits)
var year = currentTime.getFullYear();


function leave(day,purpose){
  
if(day<10)
    day="0"+day;
  // alert($("#day").val());
  var us=null;
  $("#day").val((year+"-"+month+"-"+day));
  for (var i = 0; i < _attendance_leave.length; i++) {
   if(_attendance_leave[i]['date']==(year+"-"+month+"-"+day))
   {
    us=_attendance_leave[i];
    break;
   }
  }
  console.log(us);

  // $('.latespan').html(late);
  // $('.leavespan').html(leave);
  // $('.popupuserid').val(userid);
  if(purpose==1){
    $('.leave').hide();
    $('.late').hide();
    $('.monetizeDiv').hide();
    $('.absent').show();
    $('.purpose').val('absent');
  }
  else if(purpose==2){
    $('.leave').hide();
    $('.late').show();
    $('.monetizeDiv').hide();
    $('.absent').hide();
    $('.purpose').val('late');

  }
  else if(purpose==3){
    $('.leave').show();
    $('.late').hide();
    $('.monetizeDiv').show();
    $('.absent').hide();
    $('.purpose').val('leave');
  }
  // $('.lateinput').val(late);
  // $('.leaveinput').val(leave);
// if(_remaining_holidays)
//   $('.remainingleave').html('<input  name="holidays" type="number"  value="'+_remaining_holidays[userid]+'"  readonly style="border: none;width:34px">');
// else
//   $('.remainingleave').val('24');

  // if(day<10)
  //     day="0"+day;
  // $("#day").val((year+"-"+month+"-"+day));
  // alert($("#day").val());
  //   var us=null;
  //   for (var i = 0; i < _attendance_leave.length; i++) {
  //    if(_attendance_leave[i]['date']==(year+"-"+month+"-"+day))
  //    {
  //       us=_attendance_leave[i];
  //       break;
  //    }
  //   }
  //   if(us)
  //     $('#holidaysnum').val(us['holidays']);
  //   else
  //     $('#holidaysnum').val('24');

  // console.log(year+"-"+month+"-"+day);
}


var day;
function leaved(d,purpose){

  day=d;
  var us=null;
  if(day<10)
    day="0"+day;
  // alert(day);
  $("#day2").val(year+"-"+month+"-"+day);

  for (var i = 0; i < _attendance_leave.length; i++) {
  if(_attendance_leave[i]['date']==(year+"-"+month+"-"+day) )
   {
    us=_attendance_leave[i];
    break;
   }

}
// console.log(us);
  // $('.lateinput').val(late);
  // $('.leaveinput').val(leave);
// alert(purpose);
  if(purpose==1){
    $('.leave').hide();
    $('.late').hide();
    $('.monetizeDiv').hide();
    $('.absent').show();
    $('.purpose').val('absent');
  }
  else if(purpose==2){
    $('.leave').hide();
    $('.late').show();
    $('.monetizeDiv').hide();
    $('.absent').hide();
    $('.purpose').val('late');

  }
  else if(purpose==3){
    $('.leave').show();
    $('.late').hide();
    $('.monetizeDiv').show();
    $('.absent').hide();
    $('.purpose').val('leave');
  }
  // $('.latespan').html(late);
  // $('.leavespan').html(leave);
  // $('.popupuserid').val(userid);
  $('#approvedHolidayunpaid').html('<input id="unpaidapproved" class="pull-right" type="checkbox"  name="approve_unpaid">');
  $('#approvedHolidayc').html('<input type="checkbox" class="pull-right" name="approve" >');
  $('#disap_Holidayc').html('<input type="checkbox" class="pull-right" name="disapprove">');

if(us!=null){
      $('.purpose').val(us['purpose']);
      document.getElementById('disap_Reason').innerHTML=us['disap_reason'];
      document.getElementById('Leavereason').innerHTML=us['app_reason'];
      document.getElementById('Latereason').innerHTML=us['late_reason'];
      document.getElementById('Absentreason').innerHTML=us['absent_reason'];

      if(us['monetize_day']!='' || us['monetize_day']!=null)
        document.getElementsByClassName('monetized').innerHTML='<input type="checkbox"  name="monetizeHoliday" checked>';
      if(us['unpaid']==1){
         $('#approvedHolidayunpaid').html('<input id="unpaidapproved" class="pull-right" type="checkbox" checked name="approve_unpaid">');
      }
      else if(us['status']==1){
         $('#approvedHolidayc').html('<input type="checkbox" class="pull-right" name="approve" checked>');
     }
     else if(us['status']==-1){
            $('#disap_Holidayc').html('<input type="checkbox" class="pull-right" name="disapprove" checked>');
       } 
  }
  $("#day1").val((year+"-"+month+"-"+day));


}


function reason_sub(){
   var reason = $("#reason").val();
   var remaining=parseInt($("#holidays").text());
   var date = $("#day").val();
  //  // alert('hello');
   // $.ajax({
   // //  type:"POST",
   //  url:"<php echo base_url('Salaryslip/saveLeave');?>",
   //  data:{
   //    reason:reason,date:date,remaining:remaining},
   //  datatype:'json',
   //  success:function(response){
   //      var data=JSON.parse(response);
   //  }
   // });
  // $.post("<php echo base_url();?>"+"Salaryslip/saveLeave",{reason:reason,date:date},function(response){
  // $(".flag-toggle").popover('hide');
  // }
  // );
}
$(document).ready(function(){
  // $(".btn-danger").click(function(){


    $('[data-toggle="tooltip"]').tooltip(); 

   $(".atbody").each(function() {
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
        return false;
    });

   //pop
    // $('[data-toggle="popover"]').popover(); 

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



  });
</script>