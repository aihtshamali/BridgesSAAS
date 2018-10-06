<html>
<head>
<title>Covenant Polices</title>
		<meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
		<script id="toRemove" src="https://cdn.ckeditor.com/4.7.2/full/ckeditor.js"></script>
		<!-- <link href="http://sdk.ckeditor.com/theme/css/sdk-inline.css" rel="stylesheet"> -->
		<script src="http://code.jquery.com/jquery-1.5.2.min.js" type="text/javascript" ></script>
		<script src="<?php echo base_url();?>assets/hrPolices/jquery.jqscribble.js" type="text/javascript"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php if(file_exists('uploads/CovenantEStaff/'.$user_id.'.html')) header('Location: '.base_url().'uploads/CovenantEStaff/'.$user_id.'.html'); ?>
<style>
    
    #page{
        text-align: left;
        width: 700px;
    }

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
<center>
<div id="page">
<center>
<!-- <br><br> -->
<?php
// echo'<pre>';print_r($user);	
 if($user->hired_for_project==2){ ?>
<img src="<?php echo base_url(); ?>/assets/images/final_logo.jpg" style="max-height:75px;">  
<?php } else {?>  
<img src="<?php echo base_url(); ?>/assets/images/red-logo.png" style="max-height:75px;">  
<?php } ?>
<!-- <br><br>  -->
<div id="1" contenteditable="true">
<?php echo $this->hr_m->getCovenantPolicyContent('1'); ?>
</div>
<!-- <div id="2" contenteditable="true">
<php echo $this->hr_m->getHrPolicyContent('2'); ?>
</div> -->
<br><br></center>
<div id="3" contenteditable="true">
<?php echo $this->hr_m->getCovenantPolicyContent('3'); ?>
</div>
<!-- <div style="width:250px;" class="pull-right">
	<b>Employee Signature</b>
		<div id="signBody0">
		<canvas id="signCanvas0" style="border: 1px solid #efefef;"></canvas>
		
		<div class="links column-right" style="margin-top: 5px;">
			<a href="javascript:" onclick='$("#signCanvas0").data("jqScribble").clear();'>Clear</a>
			<a href="javascript:" onclick='save0();'>Save</a>
		</div>
		</div>
	</div> -->
<div class="clearfix"></div>
<!-- <br> -->
<div id="4" contenteditable="true">
<?php echo $this->hr_m->getCovenantPolicyContent('4'); ?>
</div>

<!-- <div style="width:250px;" class="pull-right"> 	<b>Employee Signature</b> 		<div id="signBody1"> 		<canvas id="signCanvas1" style="border: 1px solid #efefef;"></canvas> 		 		<div class="links column-right" style="margin-top: 5px;"> 			<a href="javascript:" onclick='$("#signCanvas1").data("jqScribble").clear();'>Clear</a> 			<a href="javascript:" onclick='save1();'>Save</a> 		</div> 		</div> 	</div> <div class="clearfix"></div> -->
<br>
<div id="5" contenteditable="true">
<?php echo $this->hr_m->getCovenantPolicyContent('5'); ?>
</div>

<!-- <div style="width:250px;" class="pull-right"> 	<b>Employee Signature</b> 		<div id="signBody2"> 		<canvas id="signCanvas2" style="border: 1px solid #efefef;"></canvas> 		 		<div class="links column-right" style="margin-top: 5px;"> 			<a href="javascript:" onclick='$("#signCanvas2").data("jqScribble").clear();'>Clear</a> 			<a href="javascript:" onclick='save2();'>Save</a> 		</div> 		</div> 	</div> <div class="clearfix"></div> -->

<div id="6" contenteditable="true">
<?php echo $this->hr_m->getCovenantPolicyContent('6'); ?>
</div>

<!-- <div style="width:250px;" class="pull-right"> 	<b>Employee Signature</b> 		<div id="signBody3"> 		<canvas id="signCanvas3" style="border: 1px solid #efefef;"></canvas> 		 		<div class="links column-right" style="margin-top: 5px;"> 			<a href="javascript:" onclick='$("#signCanvas3").data("jqScribble").clear();'>Clear</a> 			<a href="javascript:" onclick='save3();'>Save</a> 		</div> 		</div> 	</div> <div class="clearfix"></div> -->

<div id="7" contenteditable="true">
<?php echo $this->hr_m->getCovenantPolicyContent('7'); ?>
</div>

<!-- <div style="width:250px;" class="pull-right"> 	<b>Employee Signature</b> 		<div id="signBody4"> 		<canvas id="signCanvas4" style="border: 1px solid #efefef;"></canvas> 		 		<div class="links column-right" style="margin-top: 5px;"> 			<a href="javascript:" onclick='$("#signCanvas4").data("jqScribble").clear();'>Clear</a> 			<a href="javascript:" onclick='save4();'>Save</a> 		</div> 		</div> 	</div> <div class="clearfix"></div> -->

<div id="8" contenteditable="true">
<?php echo $this->hr_m->getCovenantPolicyContent('8'); ?>
</div>

<!-- <div style="width:250px;" class="pull-right"> 	<b>Employee Signature</b> 		<div id="signBody5"> 		<canvas id="signCanvas5" style="border: 1px solid #efefef;"></canvas> 		 		<div class="links column-right" style="margin-top: 5px;"> 			<a href="javascript:" onclick='$("#signCanvas5").data("jqScribble").clear();'>Clear</a> 			<a href="javascript:" onclick='save5();'>Save</a> 		</div> 		</div> 	</div> <div class="clearfix"></div> -->

<div id="9" contenteditable="true">
<?php echo $this->hr_m->getCovenantPolicyContent('9'); ?>
</div>

<!-- <div style="width:250px;" class="pull-right"> 	<b>Employee Signature</b> 		<div id="signBody6"> 		<canvas id="signCanvas6" style="border: 1px solid #efefef;"></canvas> 		 		<div class="links column-right" style="margin-top: 5px;"> 			<a href="javascript:" onclick='$("#signCanvas6").data("jqScribble").clear();'>Clear</a> 			<a href="javascript:" onclick='save6();'>Save</a> 		</div> 		</div> 	</div> <div class="clearfix"></div> -->

<div id="10" contenteditable="true">
<?php echo $this->hr_m->getCovenantPolicyContent('10'); ?>
</div>

<!-- <div style="width:250px;" class="pull-right"> 	<b>Employee Signature</b> 		<div id="signBody7"> 		<canvas id="signCanvas7" style="border: 1px solid #efefef;"></canvas> 		 		<div class="links column-right" style="margin-top: 5px;"> 			<a href="javascript:" onclick='$("#signCanvas7").data("jqScribble").clear();'>Clear</a> 			<a href="javascript:" onclick='save7();'>Save</a> 		</div> 		</div> 	</div> <div class="clearfix"></div> -->

<div id="11" contenteditable="true">
<?php echo $this->hr_m->getCovenantPolicyContent('11'); ?>
</div>

<div id="13" contenteditable="true">
<?php echo $this->hr_m->getCovenantPolicyContent('13'); ?>
</div>


<!-- <div style="width:250px; " class="pull-right"> 	<b>Employee Signature</b> 		<div id="signBody8"> 		<canvas id="signCanvas8" style="border: 1px solid #efefef;"></canvas> 		 		<div class="links column-right" style="margin-top: 5px;"> 			<a href="javascript:" onclick='$("#signCanvas8").data("jqScribble").clear();'>Clear</a> 			<a href="javascript:" onclick='save8();'>Save</a> 		</div> 		</div> 	</div> <div class="clearfix"></div> -->





<div id="12" contenteditable="true" >
<?php echo $this->hr_m->getCovenantPolicyContent('12'); ?>
</div>

<div style="width:250px;"> 
	
	<div id="signBody9"><!-- 	 <canvas id="signCanvas9" style="border: 1px solid #efefef;"></canvas> 	<div class="links column-right" style="margin-top: 5px;"> 			<a href="javascript:" onclick='$("#signCanvas9").data("jqScribble").clear();'>Clear</a> 			<a href="javascript:" onclick='save9();'>Save</a> 		</div> 		</div> 	</div> <div class="clearfix"></div> -->

</div>

<br><br><br>

<!-- <div id="buttonDiv">
<a href="javascript:" onclick="saveDoc();" class="btn-primary" style="text-decoration: none; padding: 8px;"> &nbsp; &nbsp; Save HR Policy &nbsp; &nbsp; </a>
</div>
 -->
<br><br>
</center>

</body>

<script type="text/javascript">

	<?php for($i=0; $i<=9; $i++){ ?>
		
		<?php if(file_exists('uploads/empSigncovenant/'.$user_id.'-'.$i.'.png')){ ?>
				$('#signBody<?=$i;?>').html("<img src='<?php echo base_url(); ?>uploads/empSigncovenant/<?=$user_id;?>-<?=$i;?>.png' alt='Signature'/>");
		<?php } ?>

        function save<?=$i;?>()
		{
			$("#signCanvas<?=$i;?>").data("jqScribble").save(function(imageData)
			{	
				$.post('<?php echo base_url(); ?>caan/CovenantEStaffSignSave/<?=$user_id;?>/<?=$i;?>', {imagedata: imageData}, function(response)
					{
						$('#signBody<?=$i;?>').html(response);
					});
			});
		}

    <?php } ?>

		$(document).ready(function()
		{
            <?php for($i=0; $i<=9; $i++){ ?>
			$("#signCanvas<?=$i;?>").jqScribble();
            <?php } ?>
		});

			$("div[contenteditable='true']" ).each(function( index ) {
				
				var content_id = $(this).attr('id');
				
				// console.log(content_id);
				
				CKEDITOR.inline( content_id, {
					on: {
						blur: function( event ) {
							var data = event.editor.getData();
							// console.log(content_id+' => '+data);

							var request = jQuery.ajax({
								url: "<?php echo base_url();?>caan/CovenantEStaffContentSave",
								type: "POST",
								data: {
									content : data,
									content_id : content_id
								},
								dataType: "html"
							});
		
						}
					}
				} );
		
			});

		CKEDITOR.on('instanceCreated', function (event) {
        var editor = event.editor,
            element = editor.element;
            console.log('instanceCreated');
        // if (element.is('h1', 'h2', 'h3') || element.getAttribute('id') == 'editorTitle') {
            editor.on('configLoaded', function () {
            	console.log('configLoaded');
                // Remove unnecessary plugins to make the editor simpler.
                editor.config.removePlugins = 'find,flash,' +
                    'forms,iframe,image,newpage,removeformat,' +
                    'smiley,specialchar,stylescombo,templates';

                // Rearrange the layout of the toolbar.
                editor.config.toolbarGroups = [
                    { name: 'editing', groups: ['basicstyles'] },
                    { name: 'undo' },
                    //{ name: 'clipboard', groups: ['selection', 'clipboard'] },
                  { name: 'styles' },
                    { name: 'colors' },
                    { name: 'tools' }
                  //  { name: 'about' }
                ];
            });
        // }
    	});
		
		function saveDoc() {
			$('#buttonDiv').html(" ");
			
			$("div[contenteditable='true']" ).each(function( index ) {
					$(this).attr('class', ' ');
					$(this).attr('id', ' ');
					$(this).attr('role', ' ');
					$(this).attr('contenteditable', 'false');
			});
			// window.location= '<php echo base_url(); ?>uploads/hrPolices/<?=$user_id;?>.html';
			// $.post('<php echo base_url(); ?>caan/saveHrPolicy/<?=$user_id;?>', {fileContent: document.documentElement.outerHTML}, function(response)
			// 	{
			// 		window.location.href= response;
			// 	});

			jQuery.ajax({
						url: "<?php echo base_url();?>caan/saveCovenantEStaff/<?=$user_id;?>",
						type: "POST",
						data: {
							fileContent : $('#page').html() //document.documentElement.outerHTML
						},
						success: function (response) {
         				window.location.href= response;
    					 },
						dataType: "html"
						});
		}

</script>
<script>		$('#12 p:first-child').css('padding-bottom','30px');
</script>        
</html>