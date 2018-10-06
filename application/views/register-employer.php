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
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '197993167337745',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=197993167337745";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--header start here-->
<div class="header">
		<div class="header-main">
		       <h1>Welcome, Let's sign you up</h1>
			<div class="header-bottom" style="margin:15px;">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
					<h3><?php echo validation_errors(); echo $this->session->flashdata('error'); ?></h3>
					<?php echo form_open('user/registerEmployer');?>	
					 
					 	<?php 
					 	$data = array(
					 		'name' => 'companyname',
					 		'id' => 'companyname',
					 		'type' => 'text',
					 		'placeholder' => 'Company Name',
					 		'onfocus' => 'this.value="";',
					 		'onblur' => 'if (this.value == "") {this.value = "Email";}'
					 	);
					 	echo form_input($data); ?>
					
					<?php 
					 	$data = array(
					 		'name' => 'email',
					 		'id' => 'email',
					 		'type' => 'text',
					 		'placeholder' => 'Email',
					 		'onfocus' => 'this.value="";',
					 		'onblur' => 'if (this.value == "") {this.value = "Email";}'
					 	);
					 	echo form_input($data); ?>

					<?php echo form_password('password', ''); ?>

					<?php echo form_upload('upload', 'upload'); ?>
						<div class="remember">
						 <div class="forgot">
						 	<h6><a href="<?php echo base_url();?>/user/">Back to Login! </a> &nbsp;&nbsp;&nbsp;
						 	<a href="<?php echo base_url();?>/user/registerEmployee">Register as Employee</a></h6>
						 </div>
						<div class="clear"> </div>
					  </div>
					   
						<input type="submit" value="Register">
					</form>	
					<?php echo form_close();?>
					<div class="header-left-top">
						<div class="sign-up"> <h2>Low on Time? Register now using</h2> </div>
					
					</div>
					<div class="header-social wthree">
						<div class="fb-login-button face" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="false"></div>
							
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