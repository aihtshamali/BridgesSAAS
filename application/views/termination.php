<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->
<html>
<head>
  <meta charset="utf-8"/>
 <!--  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="//cdn.ckeditor.com/4.7.3/basic/ckeditor.js"></script>
  <script src="<php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="http://code.jquery.com/jquery-1.5.2.min.js" type="text/javascript" ></script>
  <script src="<php echo base_url();?>assets/jquery.jqscribble.js" type="text/javascript"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->


  <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="//cdn.ckeditor.com/4.7.3/basic/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-1.5.2.min.js" type="text/javascript" ></script>
<script src="<?php echo base_url();?>assets/jquery.jqscribble.js" type="text/javascript"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <style>
  .links a {
    padding-left: 10px;
    margin-left: 10px;
    border-left: 1px solid #000;
    text-decoration: none;
    color: #999;
  }
  .links a:first-child {
    padding-left: 0;
    margin-left: 0;
    border-left: none;
  }
  .links a:hover {text-decoration: underline;}
  .column-left {
    display: inline; 
    float: left;
  }
  .column-right {
    display: inline; 
    float: right;
  }
  .sign_line{
    border-top: 1px solid #000;
  }
  
  .sign_line_r{
    border-top: 1px solid #000;
  }
  .display-none{
    display: none;
  }
</style>
<style type="text/css">
  /***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/
@media print{
/*.signbody{
  margin: 50px;
}
*/
/*.print_footr{
  width: 200px !important;
}*/
@page  
{ 
 /* margin: 300px !important;
  padding: 300px !important;*/

}
.hidde-print{
  display: none;
}
.sign_line{
    border-top: 2px solid #000;
    position: fixed;
    bottom: 520;
    left:110;
    width: 200px !important;
  }


  .sign_line_r{
    border-top: 2px solid #000;
    position: fixed;
    bottom: 120;
    right:110;
    width: 200px !important;
  }
.fonts{
  font-family:  "Aparajita Italic", !important;
  font-size: 15px !important;
  font-style: normal !important;
  font-variant: normal !important;
  font-weight: 400 !important;
  line-height: 16px !important;
}
.footer{

  /*margin-top: 60px;*/
 position: fixed;
left:0 !important;
right:0 !important;
bottom: 0;

}

.sign_div_print{
  position: fixed;
  bottom: 100px;
}
.margin-17{
  margin-left: -17px !important;
}

img#emp{
  border-bottom: 1px solid black;
}
.lbheader{
  margin-left: 30px;
}


}
/* Content */
.content {
  padding-top: 15px;
}
@font-face {
 font-family: nag;
 src: url(mako);
}

div{
 font-family: nag;
}
/* Testimonials */
.testimonials blockquote {
  background: #f8f8f8 none repeat scroll 0 0;
  border: medium none;
  color: #666;
  display: block;
  font-size: 14px;
  line-height: 20px;
  padding: 15px;
  position: relative;
}
.testimonials blockquote::before {
  width: 0; 
  height: 0;
  right: 0;
  bottom: 0;
  content: " "; 
  display: block; 
  position: absolute;
  border-bottom: 20px solid #fff;    
  border-right: 0 solid transparent;
  border-left: 15px solid transparent;
  border-left-style: inset; /*FF fixes*/
  border-bottom-style: inset; /*FF fixes*/
}
.red{
  color: red;
}
.fonts{
  font-family:  "Aparajita Italic";
  font-size: 15px;
  font-style: normal;
  font-variant: normal;
  font-weight: 500;
  line-height: 17.4px;
}
.margin-left{
  /*margin-left: 250px;*/
  font-size: 16px; 
}
.margin-17{
  margin-left: -17px;
}
.margin-left-logo{
  margin-left: 200px;
  font-size: 16px; 
}
.testimonials blockquote::after {
  width: 0;
  height: 0;
  right: 0;
  bottom: 0;
  content: " ";
  display: block;
  position: absolute;
  border-style: solid;
  border-width: 20px 20px 0 0;
  border-color: #e63f0c transparent transparent transparent;
}
.testimonials .carousel-info img {
  border: 1px solid #f5f5f5;
  border-radius: 150px !important;
  height: 75px;
  padding: 3px;
  width: 75px;
}
.testimonials .carousel-info {
  overflow: hidden;
}
.testimonials .carousel-info img {
  margin-right: 15px;
}
.testimonials .carousel-info span {
  display: block;
}
.testimonials span.testimonials-name {
  color: #e6400c;
  font-size: 16px;
  font-weight: 300;
  margin: 23px 0 7px;
}
.testimonials span.testimonials-post {
  color: #656565;
  font-size: 12px;
}
.Bold{
  font-weight: bold;
}


</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript" >

// $(document).ready(function() {
//  // window.print();
// });

</script>
</head>
<body style="height: auto;">

  <div class="container content" style="position: relative; margin-left: 96px; margin-right: 96px;margin-top:25px">
    <?php foreach($employee as $emp){ ?>

    <?php 
      $filename = $emp->id.'_1';

        $i = 1;
        while ( $i<= 100) {
           if (!file_exists("uploads/termination/".$emp->id.'_'.$i.".html" )) {
            $filename = $emp->id.'_'.$i;
            break;
           }
           $i++;
        }

    ?>

    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="testimonials">
          <div class="active item">
            <!-- <div style="margin-left: 280" > -->
              <div class="row">

                <div class="col-md-4 col-xs-5" style="margin-left: 6px"></div><div class="col-md-5 col-xs-5" style="margin-left: -8px" ><?php if($emp->hired_for_project==2){ ?><img src="<?php echo base_url(); ?>Logoz/red-logo.png"  style=" width: 130px;"><?php } else { ?><img src="<?php echo base_url(); ?>Logoz/logo.png"  style=" width: 130px;border: 2px solid gray;"><?php } ?></div>
              </div>
              <br/>

              <div class="row" align=""> 
               <div class="col-md-1 col-xs-2"></div>
               <div class="col-md-2 col-xs-2 red " ></div>
             <!--   <div  class="col-md-8 col-xs-6 lbheader fonts" style="padding-left: 0px;font-style: italic"><p style="padding:0px; margin:0px;font-size:30px; " contenteditable="true">Termination Letter</p>
               </div> -->
             </div>
             <br><br><br>
              

             <div class="fonts" style="margin-bottom: 0px; padding-bottom: 0px;">
              <div id="letter_subject" contenteditable="true">
                <p style="font-size:22px;font-weight: bold">
                  <strong>
                    <span class="red Bold">
                      Subject:
                    </span>
                  </strong>
                </p>
              </div>
            </div>
            <?php $gender="Mr"; ?>
             <div class="fonts" style="margin-bottom: 0px; padding-bottom: 0px;">
              <div id="editor1" contenteditable="true">
                <p style="font-size:22px;font-weight: ;">
                  
                  <span class="red Bold">
                         <?php echo $emp->fname; ?> <?php echo $emp->lname; ?>
                  </span>
                <br/>
                    Address:
                    <span class="red"><?php echo $emp->address; ?></span>
                  <br/>
                      CNIC: <span class="red"><?php echo $emp->cnic_no; ?></span>
                    <br/>
                      Email: <span class="red"><?php echo $emp->email; ?></span>
                      <br>
                      Contact: <span class="red"><?php echo $emp->contact_no; ?></span>
                      <br>
                      Date: <span class="red"><?php echo date('Y-m-d'); ?></span>

                    <br>
                    <?php if(strtolower($emp->gender)!="male"){ $gender="Mrs";} ?>
                    <!-- Subject: <span class="red" id="letter_subject" > </span> -->
                    <br/><br/><br>
                      Dear <?php echo $gender; ?><strong><span class="red"> <?php echo $emp->lname; ?>,</span></strong><br/>
                      <br/>
                      We regret to inform you that we would no longer be needing your services beyond Dec 25, 2017.
                      A settlement letter will be duly issued to you on the above date after completing the procedures listed in the HR policy that you had signed.
                      <br>
                      <br>
                      Should you have any questions on the procedures please feel free to contact the HR department in person.

                   
                        <br/><br/>
                        Regards,
                        <br>
                        <br>

                        Manager HR<br/>
                        The Bridges <strong><?php if($emp->hired_for_project==2){ ?> School <?php } else { ?> Consortium<?php } ?>
                        </strong>

                      </p>

                 <!--   <br>
                   <br>
                   <br>
                   <br>
                    <p>
                     ___________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       ____________
                   </p>
                   <p>
                     Admin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                       Applicant
                   </p> -->
                    <p>
                    
                   </p>

             

                   </div>
                  </div>
                </div>
              </div>
              <!-- <div id="signBody0"  style="width: 200px; " class="pull-left">
                <div id="signBody1" class="signbody" style="height: 100px">
                  <canvas id="test1" style="border: 1px solid #999;"  ></canvas>

                  <div class="links column-right" style="margin-top: 5px; ">
                    <a href="javascript:" onclick='$("#test1").data("jqScribble").clear();'>Clear</a>
                    <a href="javascript:" onclick='save("1");'>Save</a>
                  </div>
                </div>
              </div> -->
              <!-- <div id="signBody0" style="width: 200px; " class="pull-right">
                <div id="signBody2" class="signbody" style="height: 100px">
                  <canvas id="test2" style="border: 1px solid #999;" ></canvas>

                  <div class="links column-right" style="margin-top: 5px;">
                    <a href="javascript:" id="clear" onclick='$("#test2").data("jqScribble").clear();'>Clear</a>
                    <a href="javascript:" onclick='save("2");'>Save</a>
                  </div>
                </div>
              </div> -->
              <!-- change -->
              <!-- <div class="row" style="clear: both">
                <div style="float:left; margin-left: 20px;  ">
                  <p class="sign_line" style=" width: 100px; margin-top: 25px;" >Admin</p>
                </div>
                <div style="float:right;margin-right: 20px" > -->
                
                  <!-- <p class="sign_line_r" align="left"  style="width: 100px; margin-top: 100px;">Applicant</p> -->
                </div>
              </div> 
              <br>
              
            
           
            </div>
          </div>
          
          <div class="print_footr" >
            
          
            <div style="clear: both" id="buttonDiv" class="pull-right hidde-print sign_div_print">
                <a class="btn btn-success" onclick="saveDoc() ;savetabledata()" style="clear: both">submit</a>
              </div>

              <div style="clear: both;" id="buttonprint" class="pull-right hidde-print display-none sign_div_print">
                <a class="btn btn-success" onclick="window.print();" style="clear: both">Print</a>
              </div>


            <?php }  ?>
            <div style="margin-top:50px;text-align: center; border-top: 1px solid black;width: 100% " class="footer">
              <div class="fonts"  style="text-align: center">
                <p style="font-size:18px;"> <a href="https://www.thebridgesschool.pk"><u>www.thebridgesschool.pk</u></a> - info@thebridgesschool.org<br><span contenteditable="true" onblur="savefooter(this)" id="footerlocation"> <?php if($emp->project_location) {?><?php echo $emp->project_location; } else{?>152-Abu Bakar Block-New Garden Town-Lahore-Pakistan-Phone#+92-42-35844869 <?php } ?> 
                </span> </p>
              </div>
            </div>
          </div>
            <?php// print_r($employee);?>
          </body>

          <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
          <script src="//cdn.ckeditor.com/4.7.2/basic/ckeditor.js"></script>
          <script src="<php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>
          <script src="http://code.jquery.com/jquery-1.5.2.min.js" type="text/javascript" ></script>
          <script src="<php echo base_url();?>assets/jquery.jqscribble.js" type="text/javascript"></script> -->
            
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
          <script src="//cdn.ckeditor.com/4.7.3/basic/ckeditor.js"></script>
          <script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>
          <script src="http://code.jquery.com/jquery-1.5.2.min.js" type="text/javascript" ></script>
          <script src="<?php echo base_url();?>assets/jquery.jqscribble.js" type="text/javascript"></script>


          <script type="text/javascript">

  /**
  We're defining the event on the `body` element, 
  because we know the `body` is not going away.
  Second argument makes sure the callback only fires when 
  the `click` event happens only on elements marked as `data-editable`
  */


  <?php for($i=1; $i<3; $i++){ ?>
    <?php if(file_exists('uploads/terminationSign/'.$filename.'-'.$i.'.png')){ ?>
      $('#signBody<?=$i;?>').html("<img src='<?php echo base_url(); ?>uploads/terminationSign/<?=$filename;?>-<?=$i;?>.png' id='emp' style='border-bottom:1px solid black' />");
      <?php } }?>


      function save(empnum)
      {



        var id="#";
        var si="#";
        if(empnum==1){
          id+="test1";
          si+="signBody1";
        //alert('d');

      }
      else{
        id+="test2";
        si+="signBody2";
      }

      $(id).data("jqScribble").save(function(imageData)
      {
        $.post('<?php echo base_url();?>Termination/saveofferSign/', {imagedata: imageData,userid: '<?=$filename?>',emp_num: empnum}, function(response)
        {
          $(si).html(response);
        }); 
      });
              // $("#signBody1").css({ borderBottom: "1px solid gray" });
      // $("#signBody1").css({ borderBottom: "1px solid gray" });

    }
    function savefooter(object){
  // var name=object.id.split('_');
  var id=object.id;
  var text=$('#'+object.id).html();
  $.ajax({
    type:'POST',
    url:'<?php echo base_url(); ?>Termination/updatefooter/<?=$emp->id?>',
    data: {
      data:text
    },
    success: function(data){
      console.log(data);  
    }
  });
        // $.ajax(  
        // {  
        //  type:'POST',
        //  url:'<php echo base_url(); ?>CorporateProfile/saveplacement',
        //  data: personal_details,
        //  success: function(data)
        //  {
        //    console.log(data);
        //  }
        // });
  // alert(name[0]);
  // alert(id);
}

function savetabledata() {
    letter_subject =  $("#letter_subject").html();
    letter_subject = $(letter_subject).text();
    letter_subject = letter_subject.replace('Subject:',"");
    user_id = "<?php echo $emp->id;?>" ;
    file_name_js = "<?php echo $filename;?>" ;
    // alert(letter_subject);
       $.ajax({  
         type:'POST',
         url:'<?php echo base_url(); ?>Termination/saveletterdb',
         data: {id : user_id, subject : letter_subject,file_name : file_name_js},
         success: function(data)
         {
           console.log(data);
         }
        });
    // var instance = CKEDITOR.instances.letter_subject.getData();
    // alert(letter_subject);
}

function saveDoc(){

 $('#buttonDiv').html(" ");
 $('#buttonprint').removeClass("display-none");
 $("#letter_subject").attr('contenteditable', 'false');

 $("div[contenteditable='true']" ).each(function( index ) {
  $(this).attr('class', ' ');
  $(this).attr('id', ' ');
  $(this).attr('role', ' ');
  $(this).attr('contenteditable', 'false');
});

 jQuery.ajax({
  url: "<?php  echo base_url();?>Termination/saveOffer/<?=$emp->id;?>",
  type: "POST",
  data: {
              fileContent : document.documentElement.outerHTML //document.documentElement.outerHTML
            },
            success: function (response) {
              window.location.href= response;
            },
            dataType: "html"
          });

}

$(document).ready(function()
{
  $("#test2").jqScribble();
  $("#test1").jqScribble();

//      $('#button').on('click',function(){
//  // alert("hello");
//   $("textarea #cke_editor .cke_1 cke cke_reset cke_chrome cke_editor_editor cke_ltr cke_browser_webkit cke_browser_quirks").replaceWith( "" );

// });

              // $("#signBody0").css({ borderBottom: "1px solid gray" });
            }); 


          </script>
          </html>
