<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Bridges Analytics</title>
<script src="<?php 
$this->load->helper('url');
echo base_url();?>js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/css/style1.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header start here-->
<div class="header">

		<div class="header-main">
		       <h1>Welcome, Let's Get Started!</h1>
		       <div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
			<div class="header-bottom" style="margin:15px;">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
					<h3><?php echo validation_errors(); echo $this->session->flashdata('error'); ?></h3>
					<?php echo form_open('user?id=1');?>	
					 
					 	<?php 
					 	$data = array(
					 		'name' => 'email',
					 		'id' => 'email',
					 		'type' => 'text',
					 		'placeholder' => 'Email',
					 		'value' => '',
					 		'autofill '=> 'off',
					 		'onfocus' => 'this.value="";',
					 		'onblur' => 'if (this.value == "") {this.value = "Email";}'
					 	);
					 	echo form_input($data); ?>
					
					<?php echo form_password('password', ''); ?>
						<div class="remember">
			             <span class="checkbox1">
							   <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
						 </span>
						 <div class="forgot">
						 	<h6><a href="<?php echo base_url();?>/user/forget">Forgot Password?</a></h6>
						 </div>
						<div class="clear"> </div>
					  </div>

                            <input type="hidden" name="redirect" value="<?php echo current_url(); ?>"/>
					   
						<input type="submit" value="Login">
					
					<?php echo form_close();?>
					<div class="header-left-top">
						<div class="sign-up"> <h2>Not a member? Register now as</h2> </div>
					
					</div>
					<div class="header-social wthree">
							<a href="<?php echo base_url();?>/user/registerEmployer" class="employer"><h5>Employer</h5></a>
							<a href="<?php echo base_url();?>/user/registerEmployee" class="employee"><h5>Employee</h5></a>
						</div>
						
				</div>
				</div>
			  
			</div>
		</div>
</div>
<!--header end here-->
<div class="copyright">
	<p>© 2017 Bridges Analytics. All rights reserved. <a href="http://Neuro9.net/" target="_blank">  Neuro9 </a></p>
</div>
<!--footer end here-->
</body>
</html>