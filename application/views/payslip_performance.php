<style type="text/css">
  .present
    {
      clear:both;margin-top:9px !important;margin-left:104px !important;
    }
  .flexboxIn
    {
      height:66.5px !important; width:11.5%;background:#f5f5f5 !important;
    }
</style>
<?php  //echo "<pre>"; var_dump($userPerformance);   exit; ?>
       

      <div class="flexbox performanceMain">
        <div class="flexboxIn" style="">
          <div class="tdCustom">Performance</div>
          <div class="tdCustom">80%-100%</div>
          <div class="tdCustom">60%-79%</div>
          <div class="tdCustom">40%-59%</div>
          <div class="tdCustom">20%-39%</div>
          <div class="tdCustom">0%-19%</div>

        </div>
        <?php    //Maximum days of Current Month
             //$thisMonth= date("d-m-Y");
             //$d = date("Y-m-t", strtotime($thisMonth));
             //var_dump($date); die();
             //$d = date("Y-m-t", strtotime("-1 months"));
             //$date=@explode("-", $d);
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
          <tbody class="ptbody">

<?php 

foreach ($userPerformance as $performance) {
  echo "<tr>";

  if ($performance == 'empty') {
      echo '<td class="td-width"></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
    }
    elseif($performance >= 80 && $performance <= 100) {
      echo '<td><img src="'.base_url().'assets/attendence/images.png" height="10" style="margin-left:4px;" height="10" style="margin-left:4px;"></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
    }
    elseif($performance >= 60 && $performance < 80) {
      echo '<td></td>';
      echo '<td class="td-width"><img src="'.base_url().'assets/attendence/images.png" height="10" style="margin-left:4px;"></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      
    }
    elseif($performance >= 40 && $performance < 60) {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td class="td-width"><img src="'.base_url().'assets/attendence/images.png" height="10" style="margin-left:4px;"></td>';
      echo '<td></td>';
      echo '<td></td>';
    }
    elseif($performance >= 20 && $performance < 40) {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="'.base_url().'assets/attendence/images.png" height="10" style="margin-left:4px;"></td>';
      echo '<td></td>';
    }
    elseif($performance >= 0 && $performance < 20) {
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td></td>';
      echo '<td><img src="'.base_url().'assets/attendence/images.png" height="10" style="margin-left:4px;" height="10" style="margin-left:4px;"></td>';
    }
    echo "</tr>";
}
?>          </tbody>
        </table>
      </div>
      <div class="present" style="">
      <span style="margin-left: 40px;font-size: 8px"> Present -<img src="<?=base_url()?>assets/attendence/presenttick.png"  height="8" style="margin-left:4px;">  </span>
      <span style="margin-left: 40px;font-size: 8px"> Applied for Leave -<img src="<?=base_url()?>assets/attendence/imagesEmpty.png"  height="8" style="margin-left:4px;">  </span>  
      <span style="margin-left: 40px;font-size: 8px"> Approved Leaves -<img src="<?=base_url()?>assets/attendence/images.png"  height="8" style="margin-left:4px;">  </span>
      <span style="margin-left: 40px;font-size: 8px"> Absent -<img src="<?=base_url()?>assets/attendence/AbsentHollow.png"  height="8" style="margin-left:4px;">  </span>
      <span style="margin-left: 40px;font-size: 8px;"> Un-Approved Leaves -<img src="<?=base_url()?>assets/attendence/absentBlack.png"  height="9" style="margin-left:4px;position: relative;bottom: -1px">  </span>
            <span style="margin-left: 40px;font-size: 8px"> Un-approved Absent -<img src="<?=base_url()?>assets/attendence/imageSun.gif" height="8" style="margin-left:4px;">  </span>
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

   $(".ptbody").each(function() {
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