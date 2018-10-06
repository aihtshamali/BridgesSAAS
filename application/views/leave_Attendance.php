
<?php  //echo "<pre>"; var_dump($userPerformance);   exit; ?>
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

    $dat=date('Y-'.$mont.'-'.$day);
    // print_r($pub);echo '<br>';
    for($ho=0;$ho<count($public_holidays);$ho++){
      // print_r($public_holidays[$ho]);
      if($public_holidays[$ho]->date==$dat){
       // print_r($public_holidays[$ho]);
        return $public_holidays[$ho];
      }
    }
    return 0;
  }
//print_r($attendance_leave);
              //exit();
?>
      

      <div class="task1-wrapper flexbox">
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
               //$d = date("Y-m-t", strtotime($thisMonth));
      
        // print_r($mont);
            
             // print_r($month);exit;
            
        ?>
        <table class="performance-table" id="tr-table" style="width:88.5%;height:66.5px;">
          <thead>
            <tr>
              <?php
                  $begin  = new DateTime(date('Y-m-d', strtotime("first day ")));
                  $end    = new DateTime(date('Y-m-d', strtotime("last day ")));
                 // print_r($end);
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
<?php 


?>



<?php $x= 0;
// // $mo=$month+1;
// if($mo<10){
//   $mo="0"+$mo;
// }
// print_r($month);
$sun= getSundays($year,$month);
  for($i = 1 ; $i <= $maxDays; $i++) {
  echo "<tr>";

  // echo $i+" ";
  $counter=0;$at=null;
    # code...
if($attendance_leave) 
{  foreach ($attendance_leave as $attend) {
  if($i<10)
    $i='0'.$i;
    if($attend->date==date('Y-'.$month.'-'.$i))
        {
          $at=$attend;$co=1;
        }
 }       
}
$da=$i;
// if($i<10)
//  { $da='0'.$i;}
// print_r($attendance_leave);exit;
  $public=getd($da,$month,$public_holidays);
    // var_dump($public);

if($public){
  if($public->status>0 && $public->description=="School Holiday"){
     echo '<td></td>';
     echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/schoolEvents.GIF" height="9" style="margin-left:9px;" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="Leave Statement Report" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="margin-left:9px;color:green;" onclick="leaved('.$i.')"></i></td>';
            echo '<td></td>';
            $counter=1;
  }
   else if($public->status>0 && $public->description=="Public Holiday"){
     echo '<td></td>';
     echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/holidaysBlue.png" height="10" style="margin-left:9px;" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="Leave Statement Report" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="margin-left:9px;color:green;" onclick="leaved('.$i.')"></i></td>';
            echo '<td></td>';
            $counter=1;
  }
}
else if($at){
  $holi=@explode('-',$at->date);
   if($at->status<0 && $holi[2]==$i){
    $currentday=$i;
     echo '<td></td>';
     echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/absentBlack.png" height="9" style="margin-left:9px;" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="Leave Statement Report" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="margin-left:9px;color:green;" onclick="leaved('.$i.')"></i></td>';
            echo '<td></td>'; 
      $counter=1;
  }
  else if($at->status>0 && $holi[2]==$i){
     $currentday=$i;
     echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/images.png" height="8" style="margin-left:9px;" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="Leave Statement Report" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="margin-left:9px;color:green;" onclick="leaved('.$i.')"></i></td>'; 
            echo '<td></td>';
      $counter=1;
   }

else if($at->status==0 && $holi[2]==$i){

     echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td align="center"><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/imagesEmpty.png" height="8" style="margin-left:9px;" <i class=" flag-toggle1" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="Leave Statement Report" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="margin-left:9px;color:green;" onclick="leaved('.$i.')"></i></td>'; 
            echo '<td></td>';
      $counter=1;
  }

}

  if($counter==1)
    continue;
  if(!isset($attendance[$i]) && in_array($i, $sun) && $counter!=1)
  {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/holidaysBlue.png" height="10" style="margin-left:9px;"</td>';
  }

 elseif (!isset($attendance[$i])) {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      // echo '<td align="center"><i class="fa fa-circle-thin flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom"  title="Leave Statement" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="margin-left:4px;color:green;"  onclick="leave('.$i.')"></i></td>';
      echo '<td align="center"><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/AbsentHollow.png" height="8px" style="margin-left:9px;" <i class=" flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="Leave Statement" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="margin-left:9px;color:green;" onclick="leave('.$i.')"></i></td>';
    }

    elseif($attendance[$i] == "intime") {
      echo '<td><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/presenttick.png" height="9" style="margin-left:9px;"></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
    }
    elseif($attendance[$i] == "late15") {
      echo '<td></td>';
      echo '<td class="td-width"><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/presenttick.png" height="9" style="margin-left:9px;"></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
    }
    elseif($attendance[$i] == "latehr") {
      echo '<td></td>';
      echo '<td></td>';
       echo '<td class="td-width"><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/presenttick.png" height="9" style="margin-left:9px;"></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
    }
    elseif($attendance[$i] == "half") {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/presenttick.png" height="9" style="margin-left:9px;"></td>';
      echo '<td></td>';
       echo '<td></td>';
    }
    elseif($attendance[$i] == "sunday") {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/presenttick.png" height="9" style="margin-left:9px;"></td>';
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
      echo '<td align="center"><img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/attendence/AbsentHollow.png" height="8px" style="margin-left:9px;" <i class=" flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="Leave Statement" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="margin-left:9px;color:green;" onclick="leave('.$i.')"></i></td>';
  }
    echo "</tr>";
}
?>
          </tbody>
        </table>
      </div>
<!-- Hidden Fields -->
<!-- Popover Body -->
<!-- <php print_r($public_holidays);exit;?> -->
  <div id="flag-content-wrapper" style="display: none">
        <form method="post" action="<?php echo base_url();?>Salaryslip/saveLeave" > 
        <div class="form-group">
            <div class="pull-left" ><label for="">Remaining Leaves-
              <?php if($attendance_leave)
              //print_r($attendance_leave);
              //exit(); 
              {?>
              <input  name="holidays" type="number"  value="<?php echo $attendance_leave[0]->holidays; ?>" readonly style="border: none;width:34px">
              <?php } else { ?>
              <input  name="holidays" type="number"  value="24" readonly style="border: none;width:34px">
              <?php } ?>
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
            <input type="hidden" name="userid" value="<?php echo ($userid); ?>">
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
       <form method="post" action="<?php echo base_url();?>Salaryslip/updateLeave" > 
        <div class="form-group">
            <div class="pull-left" ><label for="">Remaining Leaves-
             <span id="holidaysnum"></span>
             <!-- <input id="holidaysnum" name="holidays" type="number"  value="" readonly style="border: none;width:34px"> -->
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
            <input type="hidden" name="userid" value="<?php echo ($userid); ?>">
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


function leave(day){
  if(day<10)
      day="0"+day;
  $("#day").val((year+"-"+month+"-"+day));
  // alert($("#day").val());
  console.log(_attendance_leave);
    var us=null;
    for (var i = 0; i < _attendance_leave.length; i++) {
     if(_attendance_leave[i]['date']==(year+"-"+month+"-"+day))
     {
        us=_attendance_leave[i];
        break;
     }
    }
    if(us)
      $('#holidaysnum').val(us['holidays']);
    else
      $('#holidaysnum').val('24');

  // console.log(year+"-"+month+"-"+day);
}


var day;
function leaved(d){


  day=d;
  if(day<10)
    {day="0"+d;}
// var month = currentTime.getMonth();
// if(month<10)
//     month="0"+month;


var us=null;
// alert(year+"-"+month+"-"+day);
    for (var i = 0; i < _attendance_leave.length; i++) {
     if(_attendance_leave[i]['date']==(year+"-"+month+"-"+day))
     {
        us=_attendance_leave[i];
        break;
     }
    }

    if(us!=null){
      // console.log(us);
      document.getElementById('holidaysnum').innerHTML=us['holidays'];
      document.getElementById('disap_Reason').innerHTML=us['disap_reason'];
      document.getElementById('reason').innerHTML=us['app_reason'];
      document.getElementById('monetize_reason').innerHTML=us['monetize_reason'];
      document.getElementById('monetize_holiday').innerHTML='<input type="number" min="0" id="monetize_holiday" value = "'+us['monetize_day']+'" class="form-control" placeholder="Monetize Holidays" name="monetizeHoliday">';
      if(us['status']==1){
         console.log('sd');
          document.getElementById('approvedHoliday').innerHtml='<input type="checkbox" name="approve" checked>';
          console.log(document.getElementById('approvedHoliday'));
        }
      else if(us['status']==-1)
          $('#disap_Holiday').innerHTML='<input type="checkbox"  name="disapprove"  checked="checked">';
    }
  $("#day1").val((year+"-"+month+"-"+day));
  console.log("#day1");

}

//PHP file my_ajax_receiver.php

// <php echo \'<label  class="pull-left"> Approve : </label><input type="checkbox" name="approve"  id="reason-submit" />\'>


function check() {
  // body...
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