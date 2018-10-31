  <style type="text/css">
    .inner-div{
      width: 100%; margin-left:; background-color: white; box-shadow: 10px 0px 10px #888888;
    }
    .form-setting{
      width: 86.5%; margin-left: 54px;
    }
  </style>        

<?php
  $options = array(0 => '0%', 5 => '5%', 10 => '10%', 15 => '15%', 20 => '20%', 25 => '25%', 30 => '30%', 35 => '35%', 40 => '40%', 45 => '45%', 50 => '50%', 55 => '55%', 60 => '60%', 65 => '65%', 70 => '70%', 75 => '75%', 80 => '80%', 85 => '85%', 90 => '90%', 95 => '95%', 100 => '100%');

?>

<!-- This form provides seperated implementation of dynamic object, intial objects are loaded with php while javascript adds them in the run time-->
<form  id="evaluatePostData" class="form-setting" method="post" action="<?= base_url('Taskmanagement/saveEvaluateTask'); ?>">
  <div id="sectionContainer" class="inner-div">
    <input type="hidden" name="iUserId" value="<?= $iUserId ?>">
    <input type="hidden" name="iTaskId" value="<?= $iTaskId ?>">
    <input type="hidden" name="clusterId" value="<?= $clustername ?>">
    <input type="hidden" name="maxSection" value="<?= count($evaluationText) ?>">

    <input type="button" value="Add section" class="btn btn-slim btn-success" style="margin:10px 10px; width: 90px;" <?= fhkCheckAuthPermission(['canMarkEvalution', "canDoEverything"]) ? " ": "disabled='disabled'"; ?> onclick='sectionToggle(null)'></input>
      <!-- sectionToggle(null) -->
    <br/>

    <!-- dynamic sections -->
    <?php //echo "<pre>"; var_dump($evaluationText);  exit; ?>
    <?php
    $sectionCount= 0;
    foreach ($evaluationText as $sectionId => $section) {
      $sectionCount ++;
      //var_dump($section["eval"]); print_r("<br/><br/>"); die();
      ?>
      <!-- Generic  Starts Here Task-->
      <input type="hidden" name="iSectionId<?=$sectionCount;?>" value="<?=$section["section_id"];?>">
      <input type="hidden" class="section1Count" name="section<?=$sectionCount;?>Count" value="<?= count($section["eval"]) ?>">

      <div class="section well padding-0">
        <div class="tagline box-padding-bottom" style="height:17px; background-color: #dbdbdb; color: #444;" >
          <span id="sectionEditTitle<?=$sectionCount;?>"><?= $section['title'] ?> </span>
          <span style="font-weight:bold; float:right; margin-right: 21px;">
            <span style="color:teal;"> <i onclick='sectionToggle({
              sectionIndex: <?= $sectionCount; ?>,
              id: <?= $section["section_id"]; ?>,
              title: "<?= $section['title'];?>",
              position: <?= $section['position'];?>,
              weightage: <?= $section['weightagePoints'];?>,
              isClusterSpecific: <?= $section['cluster_id']!==null? "true": "false";?>,
              clusterId: <?= $clustername?>,
            })' class="fa fa-wrench"; aria-hidden="true"></i> </span>
            <span id="sectionEditPercentage<?=$sectionCount;?>" style="color:blue;"> <?= "[" . $section['weightagePoints'] ."%]"?> </span>
          </span>
        </div>

        <!-- items per section -->
        <div class=" inner-section-parent row">
          <div id='itemContainer<?=$section["section_id"];?>' class="col-md-12 padding-0 input_fields_wrap">
          <?php
            $itemCount= 0;
            foreach ($section["eval"] as $itemId => $item) {
              $itemCount++;
              //var_dump($itemList); echo "someItem <br>";
              ?>
              <input type="hidden" name="section<?=$sectionCount;?>textId<?=$itemCount?>" value="<?=$item['id'];?>">
              <input type="hidden" name="section<?=$sectionCount;?>user<?=$itemCount?>" value="<?=$item['userid']==null?'true':'false';?>">

              <div class="inner-section form-group col-md-6 padding-0 m-0 flexbox">
                <textarea onblur="changeItemOnBlur(this)" name="section<?php echo $sectionCount;?>text<?php echo $itemCount;?>" class="form-control" placeholder="Enter Text" rows="3" <?= fhkCheckAuthPermission(['canMarkEvalution', "canDoEverything"]) ? " ": "disabled='disabled'"; ?> > <?= (isset($item["title"])) ? $item["title"] : ""; ?>
                </textarea>
                <div class="secDiv">
                  <div class="remove_field" style="color:red"><i onclick='openDeleteForm(false, <?=$item['id'];?>);' class="fa fa-times" aria-hidden="true"></i> </div>
                  <div class="secDropDown">
                    <?php 
                      $value= $item["rating"]!==null? $item["rating"]: "";
                      if(fhkCheckAuthPermission(['canMarkEvalution', "canDoEverything"]))
                        echo  form_dropdown("section".$sectionCount."Option".$itemCount, $options, $value,"class='form-control'");
                      else
                        echo  form_dropdown("section".$sectionCount."Option".$itemCount, $options, $value,"class='form-control' disabled='disabled'");
                    ?> 
                  </div>
                </div>
              </div>
              <?php
            }
          ?>
          </div>

          <!-- openAddItemForm looks for addToSection attribute to find index of last added item-->
          <!-- NOTE: $itemCounter is used outside the loop as it still holds legit value for next candidate-->
          <input 
            addToSection='{"sectionId": <?=$section["section_id"];?>, "sectionIndex": <?=$sectionCount;?>, "itemCount": <?=$itemCount;?>}' 
            type="button" onclick='openAddItemForm(this);'
            value="Add item" class="btn btn-slim btn-success" style="width: 90px; margin:10px 68px 10px;"
            <?= fhkCheckAuthPermission(['canMarkEvalution', "canDoEverything"]) ? " ": "disabled='disabled'"; ?>> </input>
        </div>
      </div>
    <?php
    }
    ?>
  </div>  

  <button class="btn btn-slim btn-success" style="float:right; width: 90px; margin:10px 68px 10px;" <?= fhkCheckAuthPermission(['canMarkEvalution', "canDoEverything"]) ? " ": "disabled='disabled'"; ?> >Submit</button>
  <span style="float:left"><label for="">Date:</label><input name="evalutaion_date" type="date" style="display:inline; width: unset; margin: 7px;" class="form-control" value="<?=date('Y-m-d')?>"></span>
</form>

<!-- delete modal -->
<div id="deleteItem" class="w3-modal">
  <div class="w3-modal-content w3-animate-opacity">
    <header class="w3-container" style="color:white">
      <h2>Confirmation</h2>
    </header>

  <div class="w3-container">
  <form method="POST" action="">
    <label style="margin:10px 10px"> Do you really want to delete this item? </label>
    <div style="float:right; margin:10px 10px">
      <input class="btn btn-success btn-sm" type="button" id="genericDeleteButton" value="Yes" onclick='alert("Controlled by openDeleteForm.")'>
      <input class="btn btn-success btn-sm" type="button" value="No" onclick='modalVisible("deleteItem", false);'>
    </div>
  </form>
  </div>
      <footer class="w3-container w3-text-teal">
        <p> </p>
      </footer>
  </div>
</div>

<!-- Add item -->
<div id="addItem" class="w3-modal">
  <div class="w3-modal-content w3-animate-opacity" style="width:30%">
      <header class="w3-container" style="color:white">
        <span onclick='modalVisible("addItem", false);' class="w3-button w3-display-topright">&times;</span>
        <h2>Add item</h2>
      </header>

    <div class="w3-container">
    <form method="POST" action="">
      <input type="hidden" name="iUserId" value="<?= $iUserId ?>">
      <div style="margin:10px 10px">
        Title: <input name="title" type="text" placeholder="Add item description" required> <br/>
        <input name="isUserSpecific" type="checkbox"> User specific <span style="color:green;"> (Yes means item will only be available for the selected user.) </span>
      </div>
      <div style="float:right; margin:10px 10px">
        <input id="queueItemReference" class="btn btn-success btn-sm" type="button" value="Submit" onclick='alert("Controlled by openAddItemForm.")'>
      </div>
    </form>
    </div>
      <footer class="w3-container w3-text-teal">
        <p> </p>
      </footer>
  </div>
</div>

<!-- Add section -->
<div id="configureSection" class="w3-modal" style="z-index:2">
  <div class="w3-modal-content w3-animate-opacity" style="width:30%">
    <header class="w3-container" style="color:white">
      <span onclick='modalVisible("configureSection", false);' class="w3-button w3-display-topright">&times;</span>
      <h2 id="modalSection">Add section</h2>
    </header>

    <div class="w3-container">
    <form method="POST" action="">
      <input type="hidden" name="clusterId" value="<?= $clustername ?>">
      <div style="margin:10px 10px">
        Title: <input name="sectionTitle" type="text" placeholder="Add section title" required> <br/><br/>
        Place Last: <input name="isLast" type="checkbox" checked> <br/><br/>
        Position: <input name="position" type="text" placeholder="Position" required disabled> <br/><br/>
        Weigtage: <input name="weightage" type="text" placeholder="Weigtage" required> <br/><br/>
        <input name="isClusterSpecific" type="checkbox"> Cluster specific <span style="color:green;"> (No means section will show up on all clusters.) </span><br/>
      </div>
      <div style="float:right; margin:10px 10px">
        <input type="button" value="Delete" id="sectionDeleteButton" onclick='alert("Controlled by sectionToggle.")' class="btn btn-success btn-sm"'>
        <input type="button" value="Submit" id="sectionSubmitButton" class="btn btn-success btn-sm" onclick='alert("Controlled by sectionToggle.")'>
      </div>
    </form>
    </div>
      <footer class="w3-container w3-text-teal">
        <p> </p>
      </footer>
  </div>
</div>

<!-- loader -->
<div id="loaderArea" class="w3-modal" style="z-index:9999">
  <div class="w3-modal-content" style="display: flex; align-items: center; margin:auto; position:relative; padding:0; outline:0; background: #fff0;">
    <img src="<?=base_url('assets/images/loading.gif')?>" alt="Loading" style="margin: 50%; height:50%; width: 50%;">
  </div>
</div>

<script type="text/javascript">

  //helper function to convert form data into json use it like formToJSON(myForm.elements)
  const formToJSON = elements => [].reduce.call(elements, (data, element) => {
    data[element.name] = element.value;
    return data;
  }, {});

  //helper function for json parse, removes any hidden charachters in the string
  function cleanJsonParse(text) {
    text = text.replace(/\\n/g, "\\n")  
     .replace(/\\'/g, "\\'")
     .replace(/\\"/g, '\\"')
     .replace(/\\&/g, "\\&")
     .replace(/\\r/g, "\\r")
     .replace(/\\t/g, "\\t")
     .replace(/\\b/g, "\\b")
     .replace(/\\f/g, "\\f");
    // remove non-printable and other non-valid JSON chars
    text = text.replace(/[\u0000-\u0019]+/g,""); 
    return JSON.parse(text);
  }

  //open and close any modal in your page
  function modalVisible(name, bool) {
    if(bool)
      document.getElementById(name).style.display='block'
    else
      document.getElementById(name).style.display='none'
  }

  //places gif on true
  function loader(isLoad) {
    modalVisible("loaderArea", isLoad);
  }
  //================================Code below is for add item functionality
  //this will update items on blur
  //this will update dropdown value on change
  function changeItemOnBlur(inputField){
    thisInputId= document.getElementsByName(inputField.name.replace("text", "textId"))[0].value;
    toPost= {"id": thisInputId, "title":inputField.value}

    $.ajax({
      url:'<?= base_url('Taskmanagement/saveEvaluationItemOnBlur'); ?>', type: 'POST',
      data: toPost,
      success: function (data) {
        //do nothing
      },
    });
  }

  //this will open new item form with additional arguments
  function openAddItemForm(buttonField){

    //Now we will let create item modal know the exact section from which add item is called
    addItemFormButton= document.getElementById("queueItemReference");
    addItemFormButton.onclick= function() {
      addItemInDatabase(addItemFormButton.form, buttonField);
    };

    modalVisible("addItem", true);
  }

  //modal is closed and data is submitted to server 
  function addItemInDatabase(myForm, buttonField){
    //NOTE: this is one of the most difficult function in this document. Be patient and read following instructions
    //This function looks for "addSection" attribute attached to html tag from which the form was open
    //Addsection will contain an object which should contain three fields.
    //"sectionId" in conjuction of itemContainerX tag is used to fetch dom location where item will be placed
    //"sectionIndex" and "itemCount" are only used to name form tags based on the sequence
    section= cleanJsonParse(buttonField.getAttribute("addToSection"));
    toPost= formToJSON(myForm.elements);
    toPost.isUserSpecific= myForm.elements.namedItem("isUserSpecific").checked;
    toPost.sessionId= section.sectionId;

    $.ajax({
      url:'<?= base_url('Taskmanagement/createEvaluationItem'); ?>', type: 'POST',
      data: toPost,
      success: function (data) {
        if(data.newid) {
          section.itemCount++;
          buttonField.setAttribute("addToSection", JSON.stringify(section));
          document.getElementsByName('section'+section.sectionIndex+'Count')[0].value= section.itemCount;
          addItemInSection(section, data.newid, toPost.title, toPost.isUserSpecific);
        }
      },
    });
    
    modalVisible("addItem", false);
  }

  function addItemInSection(section, newItemId, text, isUserSpecific){
    //console.log(section.sectionId);
    //console.log(section);
    document.getElementById("itemContainer"+section.sectionId).insertAdjacentHTML('beforeend', '<input type="hidden" name="section'+section.sectionIndex+'textId'+section.itemCount+'" value="'+newItemId+'"><input type="hidden" name="section'+section.sectionIndex+'user'+section.itemCount+'" value="'+isUserSpecific+'"> <div class="inner-section form-group col-md-6 padding-0 m-0 flexbox"><textarea onblur="changeItemOnBlur(this)" class="form-control" placeholder="Enter Text" rows="3" name="section'+section.sectionIndex+'text'+section.itemCount+'">'+text+'</textarea><div class="secDiv"> <div class="remove_field" style="color:red"><i onclick=\'openDeleteForm(false, '+newItemId+');\' class="fa fa-times" aria-hidden="true"></i> </div><div class="secDropDown">' + jsDropDown(section) + '</div></div></div>');
  }

  //generates a new dropdown with name based on arguments
  function jsDropDown(section) {
    return '<select class="form-control" name="section'+section.sectionIndex+'Option'+section.itemCount+'">' 
      + '<option value="0">0%</option><option value="5">5%</option><option value="10">10%</option><option value="15">15%</option><option value="20">20%</option><option value="25">25%</option><option value="30">30%</option><option value="35">35%</option><option value="40">40%</option><option value="45">45%</option><option value="50">50%</option><option value="55">55%</option><option value="60">60%</option><option value="65">65%</option><option value="70">70%</option><option value="75">75%</option><option value="80">80%</option><option value="85">85%</option><option value="90">90%</option><option value="95">95%</option><option value="100">100%</option>'
      + '</select>'
  }

  //================================Code below is for add section functionality

  //this function makes our section modal reusable for both edit and create functionalities
  function sectionToggle(item){

    sectionSubmitButton= document.getElementById("sectionSubmitButton");
    sectionDeleteButton= document.getElementById("sectionDeleteButton");

    sectionDeleteButton.style.visibility= item==null? "hidden": "";
    sectionDeleteButton.onclick= function() {
      openDeleteForm(true, item.id);
    }

    isLastCheckbox= document.getElementsByName("isLast")[0];
    positionInput= document.getElementsByName("position")[0];
    //toggle is last option based on edit or add options
    isLastCheckbox.checked= positionInput.disabled= item==null? true: false;
    isLastCheckbox.onclick= function() {
      positionInput.disabled= isLastCheckbox.checked;
    }
    
    //change top header and button message of the form
    document.getElementById("modalSection").innerHTML = item==null? "Add section": "Edit section";
    sectionSubmitButton.value= item==null? "Create": "Update";

    //add any values associated with form fields for edit case
    document.getElementsByName("sectionTitle")[0].value= item==null? "": item.title;
    positionInput.value= item==null? 0: item.position;
    document.getElementsByName("weightage")[0].value= item==null? "": item.weightage;
    document.getElementsByName("isClusterSpecific")[0].checked= item==null? false: item.isClusterSpecific;

    //form button will redirect according to update or edit
    sectionSubmitButton.onclick= item==null? 
      function() {
        toPost= formToJSON(sectionSubmitButton.form.elements);
        toPost.isClusterSpecific= sectionSubmitButton.form.elements.namedItem("isClusterSpecific").checked;
        toPost.isLast= sectionSubmitButton.form.elements.namedItem("isLast").checked;
        addNewSection(toPost);
      } :
      function() {
        toPost= formToJSON(sectionSubmitButton.form.elements);
        toPost.isClusterSpecific= sectionSubmitButton.form.elements.namedItem("isClusterSpecific").checked;
        toPost.isLast= sectionSubmitButton.form.elements.namedItem("isLast").checked;
        toPost.sectionId= item.id;
        updateSection(toPost, item.sectionIndex);
      };

    //open section entry form
    modalVisible("configureSection", true);
  }

  function openDeleteForm(isSection, id){
    
    //var hitUrl= isSection? ": ;
    document.getElementById("genericDeleteButton").onclick= isSection?
    function(){
      deleteSomething("Taskmanagement/DeleteSectionData/"+id);
    }:
    function(){
      deleteSomething("Taskmanagement/DeleteEvalutionData/"+id);
    };

    modalVisible("deleteItem", true);
  }

  function deleteSomething(hitUrl){
    $.ajax({
      url:'<?= base_url(''); ?>' + hitUrl, type: 'GET',
      success: function (data) {
        loader(true);
        TaskEvaluationExtended(<?= $iUserId ?>, <?= $iTaskId ?>, function(){
          loader(false);
        });
      },
    });
  }

  function updateSection(toPost, sectionIndex) {
    $.ajax({
      url:'<?= base_url('Taskmanagement/updateEvaluationSection'); ?>', type: 'POST',
      data: toPost,
      success: function (data) {
        document.getElementById("sectionEditTitle"+sectionIndex).innerHTML= toPost.sectionTitle;
        document.getElementById("sectionEditPercentage"+sectionIndex).innerHTML= "["+toPost.weightage+"%]";
        loader(true);
        TaskEvaluationExtended(<?= $iUserId ?>, <?= $iTaskId ?>, function(){
          loader(false);
        });
      },
    });

    modalVisible("configureSection", false);
  }

  function addNewSection(toPost) {

    // supply title, cluster_id, weightagePoints, position, isLastPlacement from form
    // in php define function which gets maximum position based on cluster
    sectionCount= document.getElementsByName("maxSection")[0];

    $.ajax({
      url:'<?= base_url('Taskmanagement/createEvaluationSection'); ?>', type: 'POST',
      data: toPost,
      success: function (data) {
        console.log(data);
        if(data.newid) {
          sectionCount.value++;
          document.getElementById("sectionContainer").insertAdjacentHTML('beforeend', sectionHtmlData(data.newid, sectionCount.value, toPost));
          loader(true);
          TaskEvaluationExtended(<?= $iUserId ?>, <?= $iTaskId ?>, function(){
            loader(false);
          });a
        }
      },
    });

    modalVisible("configureSection", false);
  }

  function sectionHtmlData(sectionId, sectionIndex, newObj){
    return ' \
      <input type="hidden" name="iSectionId'+sectionIndex+'" value="'+sectionId+'"> \
      <input type="hidden" class="section1Count" name="section'+sectionIndex+'Count" value="0"> \
       \
      <div class="section well padding-0"> \
        <div class="tagline box-padding-bottom" style="height:17px; background-color: #dbdbdb; color: #444;"> \
        <span id="sectionEditTitle"'+sectionIndex+'> '+newObj.sectionTitle+'</span> \
          <span style="font-weight:bold; float:right; margin-right: 21px;"> \
            <span style="color:teal;">  \
              <i onclick=\'sectionToggle({ \
                sectionIndex: '+sectionIndex+', \
                id: '+sectionId+', \
                title: "'+newObj.sectionTitle+'", \
                position: '+newObj.position+', \
                weightage: '+newObj.weightage+', \
                isClusterSpecific: '+newObj.isClusterSpecific+', \
                clusterId: '+newObj.clusterId+', \
              })\' class="fa fa-wrench"; aria-hidden="true"></i> </span> \
            <span id="sectionEditPercentage"'+sectionIndex+' style="color:blue;">['+newObj.weightage+'%]</span> \
          </span> \
        </div> \
         \
        <!-- items per section -->  \
        <div class=" inner-section-parent row"> \
          <div id="itemContainer'+sectionId+'" class="col-md-12 padding-0 input_fields_wrap"> \
          </div> \
         \
          <input  \
            addToSection=\'{"sectionId": '+sectionId+', "sectionIndex": '+sectionIndex+' , "itemCount":0}\'  \
            type="button" onclick="openAddItemForm(this);" \
            value="Add item" class="btn btn-slim btn-success" style="width: 90px; margin:10px 68px 10px;" \
            <?= fhkCheckAuthPermission(["canMarkEvalution", "canDoEverything"]) ? " ": "disabled=\'disabled\'"; ?>> </input> \
        </div> \
      </div> \
    '
    ;
  }
</script>

<?php die(); ?>






























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
          //var_dump($section1Eva); exit;
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
          <!-- Generic section ends Here -->

          <!-- Section 1 Starts Here Task-->
          <div class="section well padding-0">

          
          <!--
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
          //var_dump($section1Eva); exit;
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
          -->
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