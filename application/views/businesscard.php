<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Business Card</title>
	<!-- <link rel="stylesheet" type="text/css" href="<php echo base_url();?>assets/emp_profile/css/style.css"> -->
  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <!-- <link rel="stylesheet" type="text/css" href="<php echo base_url();?>assets/css/style1.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	 -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" />
  <!-- <link rel="stylesheet" type="text/css" media="all" href="<php echo base_url();?>assets/emp_profile/css/styles.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	@media print{
	@page {
    size: 50.8mm 88.9mm; /* landscape */
    /* you can also specify margins here: */
    margin: 25mm;
    margin-right: 45mm;    /*// for compatibility with both A4 and Letter */
  }


.col-md-1 {width:8%;  float:left;}
.col-md-2 {width:16%; float:left;}
.col-md-3 {width:25%; float:left;}
.col-md-4 {width:33%; float:left;}
.col-md-5 {width:42%; float:left;}
.col-md-6 {width:50%; float:left;}
.col-md-7 {width:58%; float:left;}
.col-md-8 {width:66%; float:left;}
.col-md-9 {width:75%; float:left;}
.col-md-10{width:83%; float:left;}
.col-md-11{width:92%; float:left;}
.col-md-12{width:100%; float:left;}
	.w3-container, .w3-panel {
    padding: 0.01em 7px;
}
	body>div.container{
		font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
		font-size: 18px;
		/*padding: 60px 45px !important;*/
	}
	img.imag{
		width: 100px;
	}

	}
	h5{
		margin:0;
	}
	body{
		font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
		font-size:12px;

	}
	p.small{
	   line-height: 0.9;
	}

	body{
		height: 50.8mm;
		width: 88.9mm;
		
		 /* landscape */
    /* you can also specify margins here: */
    	/*margin: 25mm;*/
	}
	</style>
</head>
<body style="">
<div class="row">
	<div class="col-md-12" style="padding:0;margin:0">
		<span class="pull-left" style=" padding-left: 15px;">+</span>
		<span class="pull-right" style="">+</span>
	</div>
</div>
<div class="w3-container" style="padding-bottom:30px;padding-top:45px;">
	<div class="row ">
		<div class="col-md-12">
		<div class="col-md-5" style="border-right:2px solid darkgray" >
			<?php if($user->hired_for_project==2){ ?>
			<div class="text-center" style="margin-top:5px;">	
			<img src="<?php echo base_url(); ?>Logoz/red-logo.png" class="imag"  style=" width: 40px;">
			<div class="text-center">
			<p style="line-height:1.0" class="Projecttitle">The Bridges School</p>
			</div>
			</div>
			<?php } else { ?>
			<div class="text-center" style="margin-top:5px;">
			<img src="<?php echo base_url(); ?>Logoz/logo.png" class="imag" style=" width: 40px;">
			<div class="text-center" style="font-size:12px;padding-top:5px;">
				<p style="line-height:1.0;" class="Projecttitle">The Bridges Consortium
				</p>
			</div>
			</div>
			<?php } ?>
		</div>
		<div class="col-md-7" >
			<div class="">
				<h5><?php echo $user->fname ?> <?php echo $user->lname ?></h5>
				<span><p  style="font-size:9px"><?php 
							echo $designation->job_title;
					?></p>
				</span>
			</div>
			<br>
			<div>
				<p class="small" style="margin:0;font-size: 12px;"><?php echo $user->contact_no; ?></p>
				<p class="small" style="margin:0;font-size: 10px;"><?php echo $user->email; ?></p>
			</div>
		</div>		
	</div>
	</div>
</div>	
<div class="row">
	<div class="col-md-12" style="padding:0;margin:0">
		<span class="pull-left" style="padding-left: 15px;">+</span>
		<span class="pull-right" style="">+</span>		
	</div>
</div>
</body>
</html>