  <style type="text/css">
    .inner-div{
      width: 100%; margin-left:; background-color: white; box-shadow: 10px 0px 10px #888888;
    }
    .form-setting{
      width: 86.5%; margin-left: 54px;
    }
  </style>        
<?php //echo "<pre>"; var_dump($taskEvaluation);  exit; ?>
<?php
  
  $options = array(0 => '0%',
                    5 => '5%',
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
                   85 => '85%',
                   90 => '90%',
                   95 => '95%',
                   100 => '100%'
                  );
?>
<form  id="evaluatePostData" class="form-setting" method="post" action="<?= base_url('Taskmanagement/saveEvaluateTask'); ?>">
      <div class="inner-div">
        
          <!-- Section 1 Starts Here Task-->
          <input type="hidden" name="iUserId" value="<?= $iUserId ?>">
          <input type="hidden" name="iTaskId" value="<?= $iTaskId ?>">
          <input type="hidden" name="clusterId" value="<?= $clustername ?>">
          <div class="section well padding-0">
          <input type="hidden" name="iSectionId1" value="1">


          <input type="hidden" class="section1Count" name="section1Count" value="<?= $this->taskmanagement_m->get_db_value('count(1)', 'bm_tasks_evaluation', array('sectionid' => 1,'cluster_id'=>$clustername))?>">


            <div class="tagline box-padding-bottom" style="background-color: #dbdbdb; color: #444;">
            &nbsp;&nbsp;Performance on Assigned Tasks &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Score as an Employee with Monitoring Responsibility [35%]
            </div>


<?php  
        $evaluationData = $evaluationText;
        //$evaluationData = ((count($evaluation) > 0) ? $evaluation : $evaluationText );
        //var_dump($evaluationData); exit;
        $x = 1;
?>
        <div class=" inner-section-parent row">
          <div class="col-md-12 padding-0 input_fields_wrap">
<?php
        foreach ($evaluationData as  $section1Eva) 
        {
          // print_r($x);
            // var_dump($section1Eva); exit;
          if($section1Eva["sectionid"] == 1)
          {  
            $value =  ((isset($section1Eva["id"])) ? $section1Eva["id"] : "");
?>    
              <div class="inner-section form-group col-md-6 padding-0 m-0 flexbox">
                <textarea class="form-control" id="inputField<?= $x ?>" placeholder="Enter Text" rows="2" name="section1text<?php echo $x; ?>" <?= (($this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "Principle" || $sRole == "Monitor" ) ? " ": "disabled='disabled'" ) ?> ><?= (( isset($section1Eva["title"])) ? $section1Eva["title"] : "") ?></textarea>
                
                <input type="hidden" name="section1textId<?= $x ?>" value="<?= $value ?>">
                <div class="secDiv">
                  <div class="remove_field" id="dataid_<?=$section1Eva['id'];?>"><i class="fa fa-times" aria-hidden="true"></i></div>
                  <div class="secDropDown">
                   <?php 
                  $iRating =  $this->taskmanagement_m->get_db_value('rating', 'bm_tasks_rating', array('evaluationid' =>  $section1Eva["id"], 'global' => 1, 'userid' => $iUserId, 'taskid' => $iTaskId));
                  $value1 =  (($iRating != "") ? $iRating : "");

                   echo  form_dropdown("section1Option$x", $options, $value1,"class='form-control'"); ?> 
                   </div>
                </div>
              </div>
<?php     $x++;
          }

          
        }
?>
          </div>
         </div>
          <div class="wrapp" style="margin:10px 15px 0;">
              <button class="add_field_button btn btn-slim btn-success" date-count1="<?= $this->taskmanagement_m->get_db_value('count(1)', ' bm_tasks_rating', array('global' => 1, 'userid' => $iUserId, 'taskid' => $iTaskId))?>">Add New Item</button>
            </div>

            <div class="box-padding-left">  
              <br>
          </div>
          </div>

          <!-- Section 1 ends Here -->

           
		  
		  
		  
		  
          <!-- Section 2 Starts Here  Company-->

  <div class="section well padding-0">
          <input type="hidden" name="iSectionId3" value="3">


          <input type="hidden" class="section3Count" name="section3Count" value="<?= $this->taskmanagement_m->get_db_value('count(1)', 'bm_tasks_evaluation', array('sectionid' => 3,'cluster_id'=>$clustername))?>">


            <div class="tagline box-padding-bottom" style="background-color: #dbdbdb; color: #444;">
            &nbsp;&nbsp;Adherence to Hr Policy &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Score as an Employee with Monitoring Responsibility [35%]
            </div>


<?php  
        $x = 1;
?>
        <div class=" inner-section-parent row">
          <div class="col-md-12 padding-0 input_fields_wrap3">
<?php
        foreach ($evaluationData as  $section1Eva) 
        {
            //var_dump($section1Eva); exit;
          if($section1Eva["sectionid"] == 3)
          {  
            $value =  ((isset($section1Eva["id"])) ? $section1Eva["id"] : "");
?>    
              <div class="inner-section form-group col-md-6 padding-0 m-0 flexbox">
                <textarea class="form-control" id="inputField<?= $x ?>" placeholder="Enter Text" rows="2" name="section3text<?= $x ?>" <?= (($this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "Principal" || $sRole == "Monitor" ) ? " ": "disabled='disabled'" ) ?> ><?= (( isset($section1Eva["title"])) ? $section1Eva["title"] : "") ?></textarea>
                
                <input type="hidden" name="section3textId<?= $x ?>" value="<?= $value ?>">
                <div class="secDiv">
                  <div class="remove_field" id="dataid_<?=$section1Eva['id'];?>"><i class="fa fa-times" aria-hidden="true"></i></div>
                  <div class="secDropDown">
                   <?php 
                  $iRating =  $this->taskmanagement_m->get_db_value('rating', 'bm_tasks_rating', array('evaluationid' =>  $section1Eva["id"], 'global' => 3, 'userid' => $iUserId, 'taskid' => $iTaskId));

                  $value1 =  (($iRating != "") ? $iRating : "");

                   echo  form_dropdown("section3Option$x", $options, $value1,"class='form-control'"); ?> 
                   </div>
                </div>
              </div>
<?php     $x++;
          }

          
        }
?>
          </div>
         </div>
          <div class="wrapp3" style="margin:10px 15px 0;">
              <button class="add_field_button3 btn btn-slim btn-success">Add New Item</button>
            </div>

            <div class="box-padding-left">  
              <br>
          </div>
          </div>


          <!-- Section 2 ends Here -->








      <!-- Section 3 Starts Here  Rank-->

  <div class="section well padding-0">
          <input type="hidden" name="iSectionId4" value="4">


          <input type="hidden" class="section4Count" name="section4Count" value="<?= $this->taskmanagement_m->get_db_value('count(1)', 'bm_tasks_evaluation', array('sectionid' => 4,'cluster_id'=>$clustername,'userid'=>$iUserId))?>">


            <div class="tagline box-padding-bottom" style="background-color: #dbdbdb; color: #444;">
            &nbsp;&nbsp;Performance According to Job Description &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Score as an Employee with Monitoring Responsibility [35%]
            </div>


<?php  
        $x = 1;
?>
        <div class=" inner-section-parent row">
          <div class="col-md-12 padding-0 input_fields_wrap4">
<?php
        foreach ($evaluationData as  $section1Eva) 
        {
            //var_dump($section1Eva); exit;
          if($section1Eva["sectionid"] == 4 && $section1Eva['userid']==$iUserId)
          {  
            $value =  ((isset($section1Eva["id"])) ? $section1Eva["id"] : "");
			       // print_r($section1Eva);
             // print_r($section1Eva['id']);
      ?>    

              <div class="inner-section form-group col-md-6 padding-0 m-0 flexbox">
                <textarea class="form-control" id="inputField<?= $x ?>" placeholder="Enter Text" rows="2" name="section4text<?= $x ?>" <?= (($this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "Principal" || $sRole == "Monitor" ) ? " ": "disabled='disabled'" ) ?> ><?= (( isset($section1Eva["title"])) ? $section1Eva["title"] : "") ?></textarea>
                <input type="hidden" name="section4textId<?= $x ?>" value="<?= $value ?>">
                <div class="secDiv">
                  <div class="remove_field" id="dataid_<?=$section1Eva['id'];?>"><i class="fa fa-times" aria-hidden="true"></i></div>
                  <div class="secDropDown">
                   <?php 
            $iRating =  $this->taskmanagement_m->get_db_value('rating', 'bm_tasks_rating', array('evaluationid' =>  $section1Eva["id"], 'global' => 4, 'userid' => $iUserId, 'taskid' => $iTaskId)); 
            // print_r($iRating);
                  $value1 =  (($iRating != "") ? $iRating : "");

                   echo  form_dropdown("section4Option$x", $options, $value1,"class='form-control'"); ?> 
                   </div>
                </div>
              </div>
<?php     $x++;
          }

          
        }
?>
          </div>
        	<input type="hidden" name="userid" value="<?php echo $iUserId;?>">

         </div>
          <div class="wrapp4" style="margin:10px 15px 0;">
              <button class="add_field_button4 btn btn-slim btn-success">Add New Item</button>
            </div>

            <div class="box-padding-left">  
              <br>
          </div>
          </div>

      <!-- Section 3 ends Here -->



          <!-- Section 4 Starts Here Monitor-->
          <?php
          if($sRole == "Monitor" || $this->session->userdata('usertype')=='Director')
          {  
          ?>
           <div class="section well padding-0">
          <input type="hidden" name="iSectionId2" value="2">


          <input type="hidden" class="section2Count" name="section2Count" value="<?= $this->taskmanagement_m->get_db_value('count(1)', 'bm_tasks_evaluation', array('sectionid' => 2,'cluster_id'=>$clustername))?>">


            <div class="tagline box-padding-bottom" style="background-color: #dbdbdb; color: #444;">
            &nbsp;&nbsp;Performance as Task Monitor &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Score as an Employee with Monitoring Responsibility [35%]
            </div>


<?php  
        //$evaluationData = ((count($evaluation) > 0) ? $evaluation : $evaluationText );
        //var_dump($evaluationData); exit;
        $x = 1;
?>
        <div class=" inner-section-parent row">
          <div class="col-md-12 padding-0 input_fields_wrap2">

<?php
        foreach ($evaluationData as  $section1Eva) 
        {
            //var_dump($section1Eva); exit;
          if($section1Eva["sectionid"] == 2)
          {  
            $value =  ((isset($section1Eva["id"])) ? $section1Eva["id"] : "");
?>    
              <div class="inner-section form-group col-md-6 padding-0 m-0 flexbox">
                <textarea class="form-control" id="inputField<?= $x ?>" placeholder="Enter Text" rows="2" name="section2text<?= $x ?>" <?= (($this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "Principal" || $sRole == "Monitor" ) ? " ": "disabled='disabled'" ) ?> ><?= (( isset($section1Eva["title"])) ? $section1Eva["title"] : "") ?></textarea>
                
                <input type="hidden" name="section2textId<?= $x ?>" value="<?= $value ?>">
                <div class="secDiv">
                  <div class="remove_field" id="dataid_<?=$section1Eva['id'];?>"><i class="fa fa-times" aria-hidden="true"></i></div>
                  <div class="secDropDown">
                   <?php 
            $iRating =  $this->taskmanagement_m->get_db_value('rating', 'bm_tasks_rating', array('evaluationid' =>  $section1Eva["id"], 'global' => 2, 'userid' => $iUserId, 'taskid' => $iTaskId)); 
                  $value1 =  (($iRating != "") ? $iRating : "");

                   echo  form_dropdown("section2Option$x", $options, $value1,"class='form-control'"); ?> 
                   </div>
                </div>
              </div>
<?php     $x++;
          }

          
        }
?>
          </div>
         </div>
          <div class="wrapp2" style="margin:10px 15px 0;">
              <button class="add_field_button2 btn btn-slim btn-success" date-count2="<?= $this->taskmanagement_m->get_db_value('count(1)', ' bm_tasks_rating', array('global' => 1, 'userid' => $iUserId, 'taskid' => $iTaskId))?>">Add New  Item</button>
            </div>

            <div class="box-padding-left">  
              <br>
          </div>
          </div>
<?php
		  }
?>

          <!-- Section 4 Ends Here -->


          




          </div>
          <button class="btn btn-slim btn-success" id="ajaxFormSubmit" style="width: 90px; margin:10px 68px 10px;" <?= (($this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "Cordinator" || $sRole == "Monitor" ) ? " ": "disabled='disabled'" ) ?> >Submit</button>
          <span><label for="">Date:</label><input type="date" name="evalutaion_date" id="evaluation_date"  style="display:inline; width: unset;height: 22px;" class="form-control" ></span>       

         </form> 
      </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>

<script type="text/javascript">
  var flag=false;
  $('#evaluation_date').change( function(){
    if($("#evaluation_date").val()){
      flag=true;
    }else{
      flag=false;
      alert("Enter Date First");
    }
  });
  $(document).ready(function() 
  {
    var max_fields   = 100; 
    var wrapper      = $(".input_fields_wrap");
    var add_button   = $(".add_field_button"); 
    
    var x = $(".section1Count").val(); 
    var y = $(add_button).attr("date-count1"); 
    var field_id=$("input[name='']");
    console.log($(".section1Count").val());
  
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++;

            $(".section1Count").val(x);
            $(wrapper).append('<div class="inner-section form-group col-md-6 padding-0 m-0 flexbox"><textarea class="form-control" id="inputField'+x+'" placeholder="Enter Text" rows="2" name="section1text'+x+'" ></textarea><div class="secDiv"><div class="remove_field"><i class="fa fa-times" aria-hidden="true"></i></div><div class="secDropDown"><select class="form-control" id="selectField'+x+'" name="section1Option'+x+'"><option value="5">5%</option><option value="10">10%</option><option value="15">15%</option><option value="20">20%</option><option value="25">25%</option><option value="30">30%</option><option value="35">35%</option><option value="40">40%</option><option value="45">45%</option><option value="50">50%</option><option value="55">55%</option><option value="60">60%</option><option value="65">65%</option><option value="70">70%</option><option value="75">75%</option><option value="80">80%</option><option value="85">85%</option><option value="90">90%</option><option value="95">95%</option><option value="100">100%</option></select></div></div></div>'); //add input box
        }

    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
       e.preventDefault(); $(this).closest('.inner-section').remove(); x--;
        $(".section1Count").val(x);
        var text_id=this.id.split("_");
        text_id=text_id[1];
      $.ajax({
        url:'<?php echo base_url(); ?>Taskmanagement/DeleteEvalutionData/'+text_id,
        type: 'POST',
        data: {},
        async: false,
        success: function (data) {
          if (data.includes("File already exists")) {
            //toastr.warning( data , "Warning");
          }
          else{
            //toastr.success("File Upload Successfully");
            
          }
          console.log(data);
        },
        cache: false,
        contentType: false,
        processData: false
      });

    });

  });

//for section2


$(document).ready(function() 
  {
    var max_fields   = 100; 
    var wrapper      = $(".input_fields_wrap2");
    var add_button   = $(".add_field_button2"); 
    
    var x = $(".section2Count").val(); 
    
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++;

            $(".section2Count").val(x);
            $(wrapper).append('<div class="inner-section form-group col-md-6 padding-0 m-0 flexbox"><textarea class="form-control" id="inputField'+x+'" placeholder="Enter Text" rows="2" name="section2text'+x+'" ></textarea><div class="secDiv"><div class="remove_field"><i class="fa fa-times" aria-hidden="true"></i></div><div class="secDropDown"><select class="form-control" id="selectField'+x+'" name="section2Option'+x+'"><option value="5">5%</option><option value="10">10%</option><option value="15">15%</option><option value="20">20%</option><option value="25">25%</option><option value="30">30%</option><option value="35">35%</option><option value="40">40%</option><option value="45">45%</option><option value="50">50%</option><option value="55">55%</option><option value="60">60%</option><option value="65">65%</option><option value="70">70%</option><option value="75">75%</option><option value="80">80%</option><option value="85">85%</option><option value="90">90%</option><option value="95">95%</option><option value="100">100%</option></select></div></div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        
     console.log(this.id);   e.preventDefault(); $(this).closest('.inner-section').remove(); x--;
        $(".section2Count").val(x);
        var text_id=this.id.split("_");
        text_id=text_id[1];
      $.ajax({
        url:'<?php echo base_url(); ?>Taskmanagement/DeleteEvalutionData/'+text_id,
        type: 'POST',
        data: {},
        async: false,
        success: function (data) {
          if (data.includes("File already exists")) {
            //toastr.warning( data , "Warning");
          }
          else{
            //toastr.success("File Upload Successfully");
            
          }
          console.log(data);
        },
        cache: false,
        contentType: false,
        processData: false
      });
    });
});
 
//  end section 2


//for section3

 
$(document).ready(function() 
  {
    var max_fields   = 100; 
    var wrapper      = $(".input_fields_wrap3");
    var add_button   = $(".add_field_button3"); 
    
    var x = $(".section3Count").val(); 
  
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++;

            $(".section3Count").val(x);
            $(wrapper).append('<div class="inner-section form-group col-md-6 padding-0 m-0 flexbox"><textarea class="form-control" id="inputField'+x+'" placeholder="Enter Text" rows="2" name="section3text'+x+'" ></textarea><div class="secDiv"><div class="remove_field"><i class="fa fa-times" aria-hidden="true"></i></div><div class="secDropDown"><select class="form-control" id="selectField'+x+'" name="section3Option'+x+'"><option value="5">5%</option><option value="10">10%</option><option value="15">15%</option><option value="20">20%</option><option value="25">25%</option><option value="30">30%</option><option value="35">35%</option><option value="40">40%</option><option value="45">45%</option><option value="50">50%</option><option value="55">55%</option><option value="60">60%</option><option value="65">65%</option><option value="70">70%</option><option value="75">75%</option><option value="80">80%</option><option value="85">85%</option><option value="90">90%</option><option value="95">95%</option><option value="100">100%</option></select></div></div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
     console.log(this.id);   e.preventDefault(); $(this).closest('.inner-section').remove(); x--;
        $(".section3Count").val(x);
        var text_id=this.id.split("_");
        text_id=text_id[1];
      $.ajax({
        url:'<?php echo base_url(); ?>Taskmanagement/DeleteEvalutionData/'+text_id,
        type: 'POST',
        data: {},
        async: false,
        success: function (data) {
          if (data.includes("File already exists")) {
            //toastr.warning( data , "Warning");
          }
          else{
            //toastr.success("File Upload Successfully");
            
          }
          console.log(data);
        },
        cache: false,
        contentType: false,
        processData: false
      });
    });
});

//  end section 3




//for section4


$(document).ready(function() 
  {
    var max_fields   = 100; 
    var wrapper      = $(".input_fields_wrap4");
    var add_button   = $(".add_field_button4"); 
    
    var x = $(".section4Count").val(); 
  
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++;

            $(".section4Count").val(x);
            $(wrapper).append('<div class="inner-section form-group col-md-6 padding-0 m-0 flexbox"><textarea class="form-control" id="inputField'+x+'" placeholder="Enter Text" rows="2" name="section4text'+x+'" ></textarea><div class="secDiv"><div class="remove_field"><i class="fa fa-times" aria-hidden="true"></i></div><div class="secDropDown"><select class="form-control" id="selectField'+x+'" name="section4Option'+x+'"><option value="5">5%</option><option value="10">10%</option><option value="15">15%</option><option value="20">20%</option><option value="25">25%</option><option value="30">30%</option><option value="35">35%</option><option value="40">40%</option><option value="45">45%</option><option value="50">50%</option><option value="55">55%</option><option value="60">60%</option><option value="65">65%</option><option value="70">70%</option><option value="75">75%</option><option value="80">80%</option><option value="85">85%</option><option value="90">90%</option><option value="95">95%</option><option value="100">100%</option></select></div></div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
     console.log(this.id);   e.preventDefault(); $(this).closest('.inner-section').remove(); x--;
        $(".section4Count").val(x);
        var text_id=this.id.split("_");
        text_id=text_id[1];
      $.ajax({
        url:'<?php echo base_url(); ?>Taskmanagement/DeleteEvalutionData/'+text_id,
        type: 'POST',
        data: {},
        async: false,
        success: function (data) {
          if (data.includes("File already exists")) {
            //toastr.warning( data , "Warning");
          }
          else{
            //toastr.success("File Upload Successfully");
            
          }
          console.log(data);
        },
        cache: false,
        contentType: false,
        processData: false
      });
    });
});


//  end section 4



//for section5


$(document).ready(function() 
  {
    var max_fields   = 100; 
    var wrapper      = $(".input_fields_wrap5");
    var add_button   = $(".add_field_button5"); 
    
    var x = $(".section5Count").val(); 
  
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++;

            $(".section5Count").val(x);
            $(wrapper).append('<div class="inner-section form-group col-md-6 padding-0 m-0 flexbox"><textarea class="form-control" id="inputField'+x+'" placeholder="Enter Text" rows="2" name="section5text'+x+'" ></textarea><div class="secDiv"><div class="remove_field"><i class="fa fa-times" aria-hidden="true"></i></div><div class="secDropDown"><select class="form-control" id="selectField'+x+'" name="section5Option'+x+'"><option value="5">5%</option><option value="10">10%</option><option value="15">15%</option><option value="20">20%</option><option value="25">25%</option><option value="30">30%</option><option value="35">35%</option><option value="40">40%</option><option value="45">45%</option><option value="50">50%</option><option value="55">55%</option><option value="60">60%</option><option value="65">65%</option><option value="70">70%</option><option value="75">75%</option><option value="80">80%</option><option value="85">85%</option><option value="90">90%</option><option value="95">95%</option><option value="100">100%</option></select></div></div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
     console.log(this.id);   e.preventDefault(); $(this).closest('.inner-section').remove(); x--;
        $(".section5Count").val(x);
        var text_id=this.id.split("_");
        text_id=text_id[1];
      $.ajax({
        url:'<?php echo base_url(); ?>Taskmanagement/DeleteEvalutionData/'+text_id,
        type: 'POST',
        data: {},
        async: false,
        success: function (data) {
          if (data.includes("File already exists")) {
            //toastr.warning( data , "Warning");
          }
          else{
            //toastr.success("File Upload Successfully");
            
          }
          console.log(data);
        },
        cache: false,
        contentType: false,
        processData: false
      });
    });
});


//  end section 5



//for section6


$(document).ready(function() 
  {
    var max_fields   = 100; 
    var wrapper      = $(".input_fields_wrap6");
    var add_button   = $(".add_field_button6"); 
    
    var x = $(".section6Count").val(); 
  
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++;

            $(".section6Count").val(x);
            $(wrapper).append('<div class="inner-section form-group col-md-6 padding-0 m-0 flexbox"><textarea class="form-control" id="inputField'+x+'" placeholder="Enter Text" rows="2" name="section6text'+x+'" ></textarea><div class="secDiv"><div class="remove_field"><i class="fa fa-times" aria-hidden="true"></i></div><div class="secDropDown"><select class="form-control" id="selectField'+x+'" name="section6Option'+x+'"><option value="5">5%</option><option value="10">10%</option><option value="15">15%</option><option value="20">20%</option><option value="25">25%</option><option value="30">30%</option><option value="35">35%</option><option value="40">40%</option><option value="45">45%</option><option value="50">50%</option><option value="55">55%</option><option value="60">60%</option><option value="65">65%</option><option value="70">70%</option><option value="75">75%</option><option value="80">80%</option><option value="85">85%</option><option value="90">90%</option><option value="95">95%</option><option value="100">100%</option></select></div></div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
     console.log(this.id);   e.preventDefault(); $(this).closest('.inner-section').remove(); x--;
        $(".section6Count").val(x);
        var text_id=this.id.split("_");
        text_id=text_id[1];
      $.ajax({
        url:'<?php echo base_url(); ?>Taskmanagement/DeleteEvalutionData/'+text_id,
        type: 'POST',
        data: {},
        async: false,
        success: function (data) {
          if (data.includes("File already exists")) {
            //toastr.warning( data , "Warning");
          }
          else{
            //toastr.success("File Upload Successfully");
            
          }
          console.log(data);
        },
        cache: false,
        contentType: false,
        processData: false
      });
    });
});


//  end section 6




//for section7

$(document).ready(function() 
  {
    var max_fields   = 100; 
    var wrapper      = $(".input_fields_wrap7");
    var add_button   = $(".add_field_button7"); 
    
    var x = $(".section7Count").val(); 
  
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++;

            $(".section7Count").val(x);
            $(wrapper).append('<div class="inner-section form-group col-md-6 padding-0 m-0 flexbox"><textarea class="form-control" id="inputField'+x+'" placeholder="Enter Text" rows="2" name="section7text'+x+'" ></textarea><div class="secDiv"><div class="remove_field"><i class="fa fa-times" aria-hidden="true"></i></div><div class="secDropDown"><select class="form-control" id="selectField'+x+'" name="section7Option'+x+'"><option value="5">5%</option><option value="10">10%</option><option value="15">15%</option><option value="20">20%</option><option value="25">25%</option><option value="30">30%</option><option value="35">35%</option><option value="40">40%</option><option value="45">45%</option><option value="50">50%</option><option value="55">55%</option><option value="60">60%</option><option value="65">65%</option><option value="70">70%</option><option value="75">75%</option><option value="80">80%</option><option value="85">85%</option><option value="90">90%</option><option value="95">95%</option><option value="100">100%</option></select></div></div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
     console.log(this.id);   e.preventDefault(); $(this).closest('.inner-section').remove(); x--;
        $(".section7Count").val(x);
        var text_id=this.id.split("_");
        text_id=text_id[1];
      $.ajax({
        url:'<?php echo base_url(); ?>Taskmanagement/DeleteEvalutionData/'+text_id,
        type: 'POST',
        data: {},
        async: false,
        success: function (data) {
          if (data.includes("File already exists")) {
            //toastr.warning( data , "Warning");
          }
          else{
            //toastr.success("File Upload Successfully");
            
          }
          console.log(data);
        },
        cache: false,
        contentType: false,
        processData: false
      });
    });
});


//  end section 7





//for section8

$(document).ready(function() 
  {
    var max_fields   = 100; 
    var wrapper      = $(".input_fields_wrap8");
    var add_button   = $(".add_field_button8"); 
    
    var x = $(".section8Count").val(); 
  
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++;

            $(".section8Count").val(x);
            $(wrapper).append('<div class="inner-section form-group col-md-6 padding-0 m-0 flexbox"><textarea class="form-control" id="inputField'+x+'" placeholder="Enter Text" rows="2" name="section8text'+x+'" ></textarea><div class="secDiv"><div class="remove_field"><i class="fa fa-times" aria-hidden="true"></i></div><div class="secDropDown"><select class="form-control" id="selectField'+x+'" name="section8Option'+x+'"><option value="5">5%</option><option value="10">10%</option><option value="15">15%</option><option value="20">20%</option><option value="25">25%</option><option value="30">30%</option><option value="35">35%</option><option value="40">40%</option><option value="45">45%</option><option value="50">50%</option><option value="55">55%</option><option value="60">60%</option><option value="65">65%</option><option value="70">70%</option><option value="75">75%</option><option value="80">80%</option><option value="85">85%</option><option value="90">90%</option><option value="95">95%</option><option value="100">100%</option></select></div></div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
     console.log(this.id);   e.preventDefault(); $(this).closest('.inner-section').remove(); x--;
        $(".section8Count").val(x);
        var text_id=this.id.split("_");
        text_id=text_id[1];
      $.ajax({
        url:'<?php echo base_url(); ?>Taskmanagement/DeleteEvalutionData/'+text_id,
        type: 'POST',
        data: {},
        async: false,
        success: function (data) {
          if (data.includes("File already exists")) {
            //toastr.warning( data , "Warning");
          }
          else{
            //toastr.success("File Upload Successfully");
            
          }
          console.log(data);
        },
        cache: false,
        contentType: false,
        processData: false
      });
    });
});


//  end section 8



//for section9

$(document).ready(function() 
  {
    var max_fields   = 100; 
    var wrapper      = $(".input_fields_wrap9");
    var add_button   = $(".add_field_button9"); 
    
    var x = $(".section9Count").val(); 
  
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++;

            $(".section9Count").val(x);
            $(wrapper).append('<div class="inner-section form-group col-md-6 padding-0 m-0 flexbox"><textarea class="form-control" id="inputField'+x+'" placeholder="Enter Text" rows="2" name="section9text'+x+'" ></textarea><div class="secDiv"><div class="remove_field"><i class="fa fa-times" aria-hidden="true"></i></div><div class="secDropDown"><select class="form-control" id="selectField'+x+'" name="section9Option'+x+'"><option value="5">5%</option><option value="10">10%</option><option value="15">15%</option><option value="20">20%</option><option value="25">25%</option><option value="30">30%</option><option value="35">35%</option><option value="40">40%</option><option value="45">45%</option><option value="50">50%</option><option value="55">55%</option><option value="60">60%</option><option value="65">65%</option><option value="70">70%</option><option value="75">75%</option><option value="80">80%</option><option value="85">85%</option><option value="90">90%</option><option value="95">95%</option><option value="100">100%</option></select></div></div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
     console.log(this.id);   e.preventDefault(); $(this).closest('.inner-section').remove(); x--;
        $(".section9Count").val(x);
        var text_id=this.id.split("_");
        text_id=text_id[1];
      $.ajax({
        url:'<?php echo base_url(); ?>Taskmanagement/DeleteEvalutionData/'+text_id,
        type: 'POST',
        data: {},
        async: false,
        success: function (data) {
          if (data.includes("File already exists")) {
            //toastr.warning( data , "Warning");
          }
          else{
            //toastr.success("File Upload Successfully");
            
          }
          console.log(data);
        },
        cache: false,
        contentType: false,
        processData: false
      });
    });
});


//  end section 9


  $(document).ready(function(){

    $("#ajaxFormSubmit").click(function(e)
    { 
            e.preventDefault(); //STOP default action
        //alert("ZXczxc");
        if(flag==true){
           var postData = $("#evaluatePostData").serializeArray();
           var formURL  = $("#evaluatePostData").attr("action");
           // console.log(postData);
           // $(postData).each(function(i, field){
           //    dataObj[field.name] = field.value;
           //  });
           // console.log(dataObj);
           $.ajax(
           {
               url : formURL,
               type: "POST",
               data : postData,
               success:function(data, textStatus, jqXHR) 
               {
                  console.log(data);
    
                 // $(".editTask-div").hide();
                 
               },
               // error: function(jqXHR, textStatus, errorThrown) 
               // {
                         
               // }
           });
            alert("Data submitted successfully");
          }else
            alert("Enter Date First");

            // e.unbind(); //unbind. to stop multiple form submit.
    });

  });


   /* $( "#add-row" ).click(function() 
    { 
      //console.log($(this).attr("data-count"));
      var x = $(this).attr("data-count")+1;

      $(".append-row").append('<div class="inner-section"><textarea id="inputField'+x+'" placeholder="Enter Text" rows="2" name="text'+x+'" ></textarea><select id="selectField'+x+'" name="Option'+x+'"  ><option value="5">5%</option><option value="10">10%</option><option value="15">15%</option><option value="20">20%</option><option value="25">25%</option><option value="30">30%</option><option value="35">35%</option><option value="40">40%</option><option value="45">45%</option><option value="50">50%</option><option value="55">55%</option><option value="60">60%</option><option value="65">65%</option><option value="70">70%</option><option value="75">75%</option><option value="80">80%</option><option value="85">85%</option><option value="90">90%</option><option value="95">95%</option><option value="100">100%</option></select><textarea id="inputField'+x+1+'" placeholder="Enter Text" rows="2" name="text'+x+1+'"  ></textarea><select id="selectField'+x+1+'" name="Option'+x+1+'"  ><option value="5">5%</option><option value="10">10%</option><option value="15">15%</option><option value="20">20%</option><option value="25">25%</option><option value="30">30%</option><option value="35">35%</option><option value="40">40%</option><option value="45">45%</option><option value="50">50%</option><option value="55">55%</option><option value="60">60%</option><option value="65">65%</option><option value="70">70%</option><option value="75">75%</option><option value="80">80%</option><option value="85">85%</option><option value="90">90%</option><option value="95">95%</option><option value="100">100%</option></select></div>');
  });*/



</script>