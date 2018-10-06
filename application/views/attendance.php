<?php  //echo "<pre>"; var_dump($userPerformance);   exit; ?>
      

      <div class="task1-wrapper flexbox">
        <div  style="height:66.5px; width:11.5%;background:#f5f5f5">
          <div class="tdCustom">Attendance</div>
          <div class="tdCustom">In Time</div>
          <div class="tdCustom">Late by 15</div>
          <div class="tdCustom">Late by an hour</div>
          <div class="tdCustom">Half day</div>
          <div class="tdCustom">Leave</div>
          <div class="tdCustom">Absent</div>

        </div>
        <?php    //Maximum days of Current Month
             $thisMonth= date("d-m-Y");
             $d=date("Y-m-t", strtotime($thisMonth));
             $date=@explode("-", $d);
             $maxDays=$date[2];
        ?>
        <table class="performance-table" id="tr-table" style="width:88.5%;height:66.5px;">
          <thead>
            <tr>
              <?php
                 for ($i=1; $i<=$date[2]; $i++){ 
                  echo '<th>'.$i.'</th>';
                 }
              ?>
            </tr>
          </thead>
          <tbody class="atbody">
<?php $x= 0;
  for($i = 1; $i < 32; $i++) {
    //var_dump($attendance);
    if (isset($attendance[$i])) {
      $relaxation = explode('-', $attendance[$i]);
    }
  echo "<tr>";
  if (!isset($attendance[$i])) {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><i class="fa fa-circle-thin flag-toggle" id="flag-toggle'.$i.'" aria-hidden="true" data-placement="bottom" title="Leave Statement" tabindex="1" data-toggle="tooltip" title="Leave Reason" style="margin-left:4px;color:green;" onclick="leave('.$i.')"></i></td>';
      echo '<td></td>'; 
    }
    elseif($relaxation[0] == "relaxation") {
      echo '<td><img src="'.base_url().'/assets/attendence/images-blue.png" data-toggle="tooltip" data-original-title="'.$relaxation[1].'" height="9" style="margin-left:4px;"></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
    }
    elseif($attendance[$i] == "intime") {
      echo '<td><img src="'.base_url().'/assets/attendence/images.png" height="9" style="margin-left:4px;"></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
    }
    elseif($attendance[$i] == "late15") {
      echo '<td></td>';
      echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/images.png" height="9" style="margin-left:4px;"></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
    }
    elseif($attendance[$i] == "latehr") {
      echo '<td></td>';
      echo '<td></td>';
       echo '<td class="td-width"><img src="'.base_url().'/assets/attendence/images.png" height="9" style="margin-left:4px;"></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
    }
    elseif($attendance[$i] == "half") {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="'.base_url().'/assets/attendence/images.png" height="9" style="margin-left:4px;"></td>';
      echo '<td></td>';
       echo '<td></td>';
    }
    elseif($attendance[$i] == "absent") {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="'.base_url().'/assets/attendence/images.png" height="9" style="margin-left:4px;"></td>';
       echo '<td></td>';
    }
    echo "</tr>";
}
?>
          </tbody>
        </table>
      </div>
<!-- Hidden Fields -->
<input type="hidden" name="day" id="day" value="">
<!-- Popover Body -->
  <div id="flag-content-wrapper" style="display: none">
        <div class="form-group">
            <textarea rows="2" cols="20" class="form-control" id="reason" placeholder="Leave Reason"></textarea>
            <button type="button" class="btn btn-slim" id="reason-submit" onclick="reason_submit()">Submit</button>
        </div>
  </div>

<script type="text/javascript">

function leave(day){
  $("#day").val(day);
}

function reason_submit(){
   var reason = $("#reason").val();
   var date = $("#day").val();
  $.post("apply_leave",{reason:reason,date:date},function(data){
  $(".flag-toggle").popover('hide');
  }
  );
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

  });
</script>