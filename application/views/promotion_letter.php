<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->
<html>
<head>
<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="//cdn.ckeditor.com/4.7.2/basic/ckeditor.js"></script>
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
.fonts{
  font-family:  "Aparajita Italic", !important;
  font-size: 25px !important;
  font-style: normal !important;
  font-variant: normal !important;
  font-weight: 500 !important;
  line-height: 22px !important;
}
.footer{
/*  margin-top: 60px;
  bottom: 0px; position: absolute;*/
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
  margin-left: 250px;
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

<?php if(file_exists('uploads/Promotionletters/'.$id.'.html')) header('Location: '.base_url().'uploads/Promotionletters/'.$id.'.html'); ?>

<div class="container content" style="position: relative; margin-left: 96px; margin-right: 96px;margin-top:25px">
    <?php foreach($employee as $emp){ ?>
  
  <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="testimonials">
              <div class="active item">
              <!-- <div style="margin-left: 280" > -->
              <div class="row">
              
  <div class="col-md-4 col-xs-5" style="margin-left: 6px"></div><div class="col-md-5 col-xs-5" style="margin-left: -8px" >
  <?php if($emp->hired_for_project==2){ ?><img src="<?php echo base_url(); ?>Logoz/red-logo.png"  style=" width: 130px;">
  <?php }  elseif($emp->hired_for_project==3) {?>  
<img src="<?php echo base_url(); ?>assets/emp_profile/card/img/bridges-analytics.png" style="width:130px;">  
<?php } 
  else { ?><img src="<?php echo base_url(); ?>Logoz/logo.png"  style=" width: 130px;border: 2px solid gray;"><?php } ?></div>
                  </div>
                  <br/>
                  
                  <div class="row" align=""> 
                   <div class="col-md-1 col-xs-2"></div>
                  <div class="col-md-2 col-xs-2 red " ></div><div class="col-md-8 col-xs-6 lbheader" style="padding-left: 0px;font-style: italic">
                  <p style="padding:0px; margin:0 25px;font-size:30px">Promotion Letter</p>
                  </div>
                  </div>
          <br><br><br>
         
                  <div class="fonts" style="margin-bottom: 0px; padding-bottom: 0px;">
                  <div id="editor1" contenteditable="true">
                  <p style="font-size:22px;font-weight: bold"><strong><span class="red Bold">
                Congratulations!
                    </span></strong> <br/><br/>
      Based on your previous perfomance, Brigdes Administration in consultation with your seniors has decided to promote you to the next level as follows: <br/><br/>
<span class="red">The Bridges <strong>
<!-- </strong> -->
We look forward to welcoming you to <span class="red">Bridges  Please let us know if you have any questions, or we can provide any additional information.
<br/><br/>
Sincerely,
<br>
<br>

Manager HR<br/>
The Bridges <strong><?php if($emp->hired_for_project==2){ ?> School <?php } else { ?> Consortium<?php } ?>
  </strong>
                  
                  </p>
                  
                </div>
            </div>
        </div>
    </div>
     <!-- <div id="signBody0"  style="width: 200px; " class="pull-left">
    <div id="signBody1" class="signbody" style="height: 100px">
    <canvas id="test1" style="border: none;"  ></canvas>
    
    <div class="links column-right" style="margin-top: 5px;">
      <a href="javascript:" onclick='$("#test1").data("jqScribble").clear();'>Clear</a>
      <a href="javascript:" onclick='save("1");'>Save</a>
    </div>
    </div>
  </div> -->
   <!-- <div id="signBody0" style="width: 200px; " class="pull-right">
    <div id="signBody2" class="signbody" style="height: 100px">
    <canvas id="test2" style="border:none ;" ></canvas>
    
    <div class="links column-right" style="margin-top: 5px;">
      <a href="javascript:" id="clear" onclick='$("#test2").data("jqScribble").clear();'>Clear</a>
      <a href="javascript:" onclick='save("2");'>Save</a>
    </div>
    </div>
      
  </div> -->
  <div class="row" style="clear: both;margin-top:90px">
    <div style="float:left; margin-left: 20px">
    <p >HR</p>
    </div>
    <div style="float:right;margin-right: 20px" >
    
    <p align="left">Applicant</p>
    </div>
  </div>
  <br>
  <div style="clear: both" id="buttonDiv" class="pull-right">
<a class="btn btn-success" onclick="saveDoc()" style="clear: both">submit</a>
</div></div>
</div>
        
        

  <?php }  ?>
<div style="margin-top:50px;text-align: center; border-top: 1px solid black;width: 100%" class="footer">
<div class="fonts"  style="text-align: center">
<p style="font-size:18px;"> <a href="https://www.thebridgesschool.pk"><u>www.thebridgesschool.pk</u></a> - info@thebridgesschool.org<br><span contenteditable="true" onblur="savefooter(this)" id="footerlocation"> <?php if($emp->project_location) {?><?php echo $emp->project_location; } else{?>152-Abu Bakar Block-New Garden Town-Lahore-Pakistan-Phone#+92-42-35844869 <?php } ?> 
  </span> </p>
</div>
</div>
    
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdn.ckeditor.com/4.7.2/basic/ckeditor.js"></script>
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
    <?php if(file_exists('uploads/offerempSign/'.$emp->id.'-'.$i.'.png')){ ?>
        $('#signBody<?=$i;?>').html("<img src='<?php echo base_url(); ?>uploads/offerempSign/<?=$emp->id;?>-<?=$i;?>.png' id='emp' style='border-bottom:1px solid black' />");
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
        $.post('<?php echo base_url();?>caan/saveofferSign/', {imagedata: imageData,userid: '<?=$emp->id?>',emp_num: empnum}, function(response)
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
    url:'<?php echo base_url(); ?>caan/updatefooter/<?=$emp->id?>',
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

   function saveDoc(){

            $('#buttonDiv').html(" ");
      
      $("div[contenteditable='true']" ).each(function( index ) {
          $(this).attr('class', ' ');
          $(this).attr('id', ' ');
          $(this).attr('role', ' ');
          $(this).attr('contenteditable', 'false');
      });

      jQuery.ajax({
            url: "<?php echo base_url();?>caan/savePromotion/<?=$emp->id;?>",
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
