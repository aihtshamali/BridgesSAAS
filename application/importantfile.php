  <style type="text/css">
    .inner-div{
      width: 100%; margin-left:; background-color: white; box-shadow: 10px 0px 10px #888888;
    }
    .form-setting{
      width: 86.5%; margin-left: 54px;
    }
  </style>        
<?php // echo "<pre>"; var_dump($evaluation);  exit; ?>
<?php
      if($sRole !== "Monitor" || $this->session->userdata('usertype') == "Director" )
      { 

        $options = array(5 => '5%',
                         10 => '10%',
                         15 => '15%',
                         20 => '20%',
                         25 => '25%',
                         30 => '30%',
                         35 => '35%',
                         40 => '40%',
                         45 => '45%',
                         50 => '50%',
                         55 => '55%',
                         60 => '60%',
                         65 => '65%',
                         70 => '70%',
                         75 => '75%',
                         80 => '80%',
                         95 => '95%',
                         90 => '90%',
                         95 => '95%',
                         100 => '100%'
                        );
        /*$selected = 95;

        echo form_dropdown('name', $options, $selected);*/
?>
      <div class="inner-div">
        <form  id="evaluatePostData" class="form-setting" method="post" action="<?= base_url('taskmanagement/saveEvaluateTask'); ?>">
          <!-- Section 1 Starts Here -->
          <input type="hidden" name="iUserId" value="<?= $iUserId ?>">
          <input type="hidden" name="iTaskId" value="<?= $iTaskId ?>">
          <div class="section">
          <input type="hidden" name="iSectionId" value="1">


          <input type="text" class="section1Count" name="section1Count" value="<?= $this->taskmanagement_m->get_db_value('count(*)', 'bm_tasks_evaluation', array('sectionid' => 1))?>">


            <div class="tagline box-padding-bottom" style="background-color: #676767; color: white;">
            &nbsp;&nbsp;Score as an Employee  [35%] &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Score as an Employee with Monitoring Responsibility [35%]
            </div>


<?php  
        $x = 1;
        foreach ($evaluation as  $section1Eva) 
        {
            //var_dump($section1Eva); exit;
          if($section1Eva["sectionid"] == 1)
          {  
?>
              <div class="inner-section">

                <textarea id="inputField<?= $x ?>" placeholder="Enter Text" rows="2" name="text<?= $x ?>" <?= (($this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "Principal" || $sRole == "Monitor" ) ? " ": "disabled='disabled'" ) ?> ><?= (( isset($section1Eva["title"])) ? $section1Eva["title"] : "") ?></textarea>

                <input type="hidden" name="textId<?= $x ?>" value="<?= ((isset($section1Eva["iev_id"])) ? $section1Eva["ev_id"] : "") ?>">

                 <?= form_dropdown("Option$x", $options, $section1Eva["rating"]); ?> 
              
              </div>
<?php
            if($x = 1)
             {
              ?>
               <div class="input_fields_wrap">
                <button class="add_field_button" date-count1="<?= $this->taskmanagement_m->get_db_value('count(*)', 'bm_tasks_evaluation', array('sectionid' => 1))?>">Add More Fields</button>

                <!-- <div><input type="text" name="mytext[]"></div> -->
              </div>
<?php               } 
?>
<?php     $x++;
          }

          
        }
?>

              <div class="box-padding-left">  
                <br>
            </div>
          </div>

          <!-- Section 1 ends Here -->

          <!-- Section 2 Starts Here -->

          <div class="section">
            <input type="hidden" name="iSectionId2" value="2">
            <input type="text" class="section2Count" name="section2Count" value="<?= $this->taskmanagement_m->get_db_value('count(*)', 'bm_tasks_evaluation', array('sectionid' => 2))?>">

            <div class="tagline box-padding-bottom" style="background-color: #676767; color: white;">
            &nbsp;&nbsp;Score as an Employee  [35%] &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Score as an Employee with Monitoring Responsibility [35%]
            </div>


<?php  
        $x = 1;
        foreach ($evaluation as  $section1Eva) 
        {
          if($section1Eva["sectionid"] == 2)
          {  
?>
              <div class="inner-section">

                <textarea id="inputField<?= $x ?>" placeholder="Enter Text" rows="2" name="Sec2text<?= $x ?>" <?= (($this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "Principal" || $sRole == "Monitor" ) ? " ": "disabled='disabled'" ) ?> ><?= (( isset($section1Eva["title"])) ? $section1Eva["title"] : "") ?></textarea>

                <input type="hidden" name="Sec2TextId<?= $x ?>" value="<?= ((isset($section1Eva["iev_id"])) ? $section1Eva["ev_id"] : "") ?>">

                 <?= form_dropdown("Sec2Option$x", $options, $section1Eva["rating"]); ?> 
              
              </div>
<?php
              if($x = 1)
               {
                ?>
                 <div class="input_fields_wrap2">
                <button class="add_field_button2" date-count2="<?= $this->taskmanagement_m->get_db_value('count(*)', 'bm_tasks_evaluation', array('sectionid' => 2))?>" >Add More Fields</button>
                <!-- <div><input type="text" name="mytext[]"></div> -->
              </div>
<?php               } 
?>

<?php     $x++;
          }

          
        }
?>
              
              <div class="box-padding-left">  
              <button class="btn btn-slim btn-success" style="width: 90px; margin-left: -45px;" <?= (($this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "Principal" || $sRole == "Monitor" ) ? " ": "disabled='disabled'" ) ?> >Submit</button>
            </div>
          </div>

          <!-- Section 2 Ends Here -->

         </form> 
      </div>
<?php
        }
        else
        {
?>
              <div class="text-danger"><h4>You do not have access</h4></div>
<?php
        }  
?>    

<?php 
/*$options = array(5 => '5%',
                      10 => '10%',
                      15 => '15%',
                      20 => '20%',
                      25 => '25%',
                      30 => '30%',
                      35 => '35%',
                      40 => '40%',
                      45 => '45%',
                      50 => '50%',
                      55 => '55%',
                      60 => '60%',
                      65 => '65%',
                      70 => '70%',
                      75 => '75%',
                      80 => '80%',
                      95 => '95%',
                      90 => '90%',
                      95 => '95%',
                      100 => '100%'
                      );
$selected = 95;

echo form_dropdown('name', $options, $selected);*/
?>

<script type="text/javascript">


  $(document).ready(function() 
  {
    var max_fields   = 100; 
    var wrapper      = $(".input_fields_wrap");
    var add_button   = $(".add_field_button"); 
    
    var x = $(add_button).attr("date-count1"); 
  
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++;

            $(".section1Count").val(x);
            $(wrapper).append('<div><div class="inner-section"><textarea id="inputField'+x+'" placeholder="Enter Text" rows="2" name="text'+x+'" ></textarea><select id="selectField'+x+'" name="Option'+x+'"  ><option value="5">5%</option><option value="10">10%</option><option value="15">15%</option><option value="20">20%</option><option value="25">25%</option><option value="30">30%</option><option value="35">35%</option><option value="40">40%</option><option value="45">45%</option><option value="50">50%</option><option value="55">55%</option><option value="60">60%</option><option value="65">65%</option><option value="70">70%</option><option value="75">75%</option><option value="80">80%</option><option value="85">85%</option><option value="90">90%</option><option value="95">95%</option><option value="100">100%</option></select></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
        $(".section1Count").val(x);
    });
});


  $(document).ready(function() 
  {
    var max_fields   = 100; 
    var wrapper      = $(".input_fields_wrap2");
    var add_button   = $(".add_field_button2"); 
    
    var x = $(add_button).attr("date-count2"); 
  
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++;

            $(".section2Count").val(x);
            $(wrapper).append('<div><div class="inner-section"><textarea id="inputField'+x+'" placeholder="Enter Text" rows="2" name="Sec2text'+x+'" ></textarea><select id="selectField'+x+'" name="Sec2Option'+x+'"  ><option value="5">5%</option><option value="10">10%</option><option value="15">15%</option><option value="20">20%</option><option value="25">25%</option><option value="30">30%</option><option value="35">35%</option><option value="40">40%</option><option value="45">45%</option><option value="50">50%</option><option value="55">55%</option><option value="60">60%</option><option value="65">65%</option><option value="70">70%</option><option value="75">75%</option><option value="80">80%</option><option value="85">85%</option><option value="90">90%</option><option value="95">95%</option><option value="100">100%</option></select></div><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
        $(".section2Count").val(x);
    })
});







   /* $( "#add-row" ).click(function() 
    { 
      //console.log($(this).attr("data-count"));
      var x = $(this).attr("data-count")+1;

      $(".append-row").append('<div class="inner-section"><textarea id="inputField'+x+'" placeholder="Enter Text" rows="2" name="text'+x+'" ></textarea><select id="selectField'+x+'" name="Option'+x+'"  ><option value="5">5%</option><option value="10">10%</option><option value="15">15%</option><option value="20">20%</option><option value="25">25%</option><option value="30">30%</option><option value="35">35%</option><option value="40">40%</option><option value="45">45%</option><option value="50">50%</option><option value="55">55%</option><option value="60">60%</option><option value="65">65%</option><option value="70">70%</option><option value="75">75%</option><option value="80">80%</option><option value="85">85%</option><option value="90">90%</option><option value="95">95%</option><option value="100">100%</option></select><textarea id="inputField'+x+1+'" placeholder="Enter Text" rows="2" name="text'+x+1+'"  ></textarea><select id="selectField'+x+1+'" name="Option'+x+1+'"  ><option value="5">5%</option><option value="10">10%</option><option value="15">15%</option><option value="20">20%</option><option value="25">25%</option><option value="30">30%</option><option value="35">35%</option><option value="40">40%</option><option value="45">45%</option><option value="50">50%</option><option value="55">55%</option><option value="60">60%</option><option value="65">65%</option><option value="70">70%</option><option value="75">75%</option><option value="80">80%</option><option value="85">85%</option><option value="90">90%</option><option value="95">95%</option><option value="100">100%</option></select></div>');
  });*/



</script>