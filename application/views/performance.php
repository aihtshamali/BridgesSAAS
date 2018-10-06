<?php  //echo "<pre>"; var_dump($userPerformance);   exit; ?>

      

      <div class="task1-wrapper flexbox">

        <div  style="height:66.5px; width:11.5%;background:#f5f5f5">

          <div class="tdCustom">Performance</div>

          <!-- <div class="tdCustom">100%</div> -->

          <div class="tdCustom">80%-100%</div>

          <div class="tdCustom">60%-79%</div>

          <div class="tdCustom">40%-59%</div>

          <div class="tdCustom">20%-39%</div>

          <div class="tdCustom">0%-19%</div>



        </div>

        <?php    //Maximum days of Current Month

             $thisMonth= date("d-m-Y");

             $d=date("Y-m-t", strtotime($thisMonth));

             $date=@explode("-", $d);

             $maxDays=$date[2];

        ?>

        <table class="performance-table" style="width:88.5%;height:66.5px;">

          <thead>

            <tr>

              <?php

                 for ($i=1; $i<=$date[2]; $i++){ 

                  echo '<th>'.$i.'</th>';

                 }

              ?>

            </tr>

          </thead>

          <tbody class="ttbody">



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

    elseif($performance > 80 && $performance <= 100) {

      echo '<td style="background-color:green;color:white;font-weight:bold;text-align:center;">'.intval($performance).'</td>';

      echo '<td></td>';

      echo '<td></td>';

      echo '<td></td>';

      echo '<td></td>';

      echo '<td></td>';

    }

    elseif($performance > 60 && $performance <= 80) {

      echo '<td></td>';

      echo '<td style="background-color:green;color:white;font-weight:bold;text-align:center;">'.intval($performance).'</td>';

      // echo '<td class="td-width"><img src="'.base_url().'assets/attendence/green;color:white;font-weight:bold;text-align:center;On80.png" height="10" style="margin-left:4px;"></td>';

      echo '<td></td>';

      echo '<td></td>';

      echo '<td></td>';

      echo '<td></td>';

      

    }

    elseif($performance > 40 && $performance <= 60) {

      echo '<td></td>';

      echo '<td></td>';

      echo '<td style="background-color:green;color:white;font-weight:bold;text-align:center;">'.intval($performance).'</td>';



      // echo '<td class="td-width"><img src="'.base_url().'assets/attendence/green;color:white;font-weight:bold;text-align:center;On60.png" height="10" style="margin-left:4px;"></td>';

      echo '<td></td>';

      echo '<td></td>';

      echo '<td></td>';

      echo '<td></td>';

    }

    elseif($performance > 20 && $performance <= 40) {

      echo '<td></td>';

      echo '<td></td>';

      echo '<td></td>';

      echo '<td style="background-color:green;color:white;font-weight:bold;text-align:center;">'.intval($performance).'</td>';

      

      // echo '<td><img src="'.base_url().'assets/attendence/yellow-mustard.png" height="10" style="margin-left:4px;"></td>';

      echo '<td></td>';

      echo '<td></td>';

    }

    elseif($performance >= 0 && $performance <= 20) {

      echo '<td></td>';

      echo '<td></td>';

      echo '<td></td>';

      echo '<td></td>';

      echo '<td></td>';

      echo '<td style="background-color:green;color:white;font-weight:bold;text-align:center;">'.intval($performance).'</td>';

      

      // echo '<td><img src="'.base_url().'assets/attendence/imageSun.gif" height="10" style="margin-left:4px;" height="10" style="margin-left:4px;"></td>';

    }

    echo "</tr>";

}

?>

          </tbody>

        </table>

      </div>



<script type="text/javascript">

$(document).ready(function(){

   $(".ttbody").each(function() {

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



  });

</script>