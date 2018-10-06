<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Unauthorized</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
	body{
		margin-top:10px;
	background-image: url('<?= base_url()?>assets/images/403ForbiddenError.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    /*color:red; */
    /*background-color:black;*/
}
</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if($this->session->userdata('id')){ ?>
				<span class="pull-right"><a  href="<?= base_url() ?>Employee_reg/emp_module_1/<?= $this->session->userdata('id');?>"><img src="<?= base_url() ?>assets/images/userProf.png" style="width:25px" alt="">Home</a></span>
				<?php } ?>
				<?php if($this->session->userdata('id')){ ?>
				<span class="pull-right"><a  href="<?= base_url() ?>user/logout"><img src="<?= base_url() ?>assets/images/signout.png" style="width:25px" alt="">Logout</a></span>
				<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>