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
<link href="<?php 
echo base_url();?>assets/assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
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
		       <h1>Welcome, Let's sign you up</h1>
			<div class="header-bottom" style="margin:15px;">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
					<h3><?php echo validation_errors(); echo $this->session->flashdata('error'); ?></h3>
					<?php echo form_open('user/register');?>	
					 
					 	<?php 
					 	$data = array(
					 		'name' => 'fname',
					 		'id' => 'fname',
					 		'type' => 'text',
					 		'value' => 'First Name',
					 		'onfocus' => 'this.value="";',
					 		'onblur' => 'if (this.value == "") {this.value = "Email";}'
					 	);
					 	echo form_input($data); ?>
					
					<?php 
					 	$data = array(
					 		'name' => 'email',
					 		'id' => 'email',
					 		'type' => 'text',
					 		'value' => 'Email',
					 		'onfocus' => 'this.value="";',
					 		'onblur' => 'if (this.value == "") {this.value = "Email";}'
					 	);
					 	echo form_input($data); ?>

					<?php echo form_password('password', 'password'); ?>
						<div class="remember">
						 <div class="forgot">
						 	<h6><a href="<?php echo base_url();?>/user/">Back to Login! </a></h6>
						 </div>
						<div class="clear"> </div>
					  </div>
					   
						<input type="submit" value="Register">
					</form>	
					<?php echo form_close();?>
					<div class="header-left-top">
						<div class="sign-up"> <h2>Not a member? Register now using</h2> </div>
					
					</div>
					<div class="header-social wthree">
							
							<?php echo "<a href='$login_url'><img class='face'>Facebook</a>"; ?>

							<a href="<?php echo base_url();?>/user/" class="email"><h5>Login</h5></a>
							<a href="#" class="twitt"><h5>Twitter</h5></a>

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