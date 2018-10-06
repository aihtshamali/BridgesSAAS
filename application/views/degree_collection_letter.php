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
			.DetailPortion
				{
					clear: both;
					margin: 0px !important;
					padding: 0px !important;
					border:1px solid #000;
				}
			@media print
				{
					.colorW td b{color:#fff !important;}
				}
</style>
<center>
<div id="page">
<center>
<?php
 if($user->hired_for_project==2){ ?>
<img src="<?php echo base_url(); ?>/assets/images/final_logo.jpg" style="max-height:75px;">  
<?php } else {?>  
<img src="<?php echo base_url(); ?>/assets/images/red-logo.png" style="max-height:75px;">  
<?php } ?>
<!-- <br><br>  -->
<div id="1" contenteditable="true">
<p style="margin-left:0in; margin-right:0in; text-align:center"><strong><em><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">The Bridges Group</span></span></em></strong></p>
</div>
<br><br>
</center>
<div id="3" contenteditable="true">
<p style="margin-left:0in; margin-right:0in; text-align:center"><span style="font-size:26pt"><span style="font-family:Cambria,serif"><span style="color:#17365d">Undertaking</span></span></span>
</p>
</div>

<div class="clearfix" style="border:1px solid black"></div>

<br>

<div id="5" contenteditable="true" style="text-align:center;">
<p style="height: 61%;">I (<?php  echo $emp[0]->fname.' '.$emp[0]->lname ;?>) have received my orginal educational documents on <?=date('d-M-Y')?>

</p>
</div>

<br><br><br>
<br><br>
<div style="position: absolute;bottom:0;width: inherit;">
	<b style="float: left;">
		Admin<br/><br/>
		The Bridges School
	</b>
	<b style="float: right;">
		
		<table>
			<tr>
				<td><b style="float: right;">Name:</b></td>
				<td><b>_______________</b></td>
			</tr>
			<tr class="colorW" style="padding:10px; color:#fff !important">
				<td><b style="float: right;">______:</b></td>
				<td><b>_______________</b></td>
			</tr>
			<tr>
				<td><b style="float: right;">Signature:</b></td>
				<td><b>_______________</b></td>
			</tr>
		</table>
	</b><br/><br/><br/>

	<p style="border-top:1px solid #000;text-align: center;align-items: center;">
		www.thebridgesschool.pk - info@thebridgesschool.org
		<br/> 
		<?php if($user->project_location) {?><?php echo $user->project_location; } else{?>152-Abu Bakar Block-New Garden Town-Lahore-Pakistan-Phone#+92-42-35844869 <?php } ?> 
                </span> 
	</p>
</div>
</center>

</body>

</html>