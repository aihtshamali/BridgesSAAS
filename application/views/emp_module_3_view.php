<!-- <!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<title>The Bridges</title>
	<link rel="stylesheet" type="text/css" href="<php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<php echo base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head> -->

<section id="section3">
<h2 style="background:red";><font color="white">3.3 Employment Protocols</font></h2>
	<div class="wrapper">
	<div class="section_wrapper">
			<div class="level_1_heading">
				<div class="container">
					3.3.a Attendance and Punctuality
				</div>
			</div>
			<div class="container">
				<!-- Level 2 Section -->
				<?php if($this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR") print_r($this->session->userdata('usertype'));{ ?>
				<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Attendance System 3.3.a.1 </h3>
					<div class="row">
						<div class="col-sm-4 col-sm-push-1 profile_inputs full">
							<div class="form-group">
								<label for="date"> <a href="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/Salaryslip/payslip/<?php echo $id;?>">Attendance System</a></label>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
				<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i>  Attendance Sheet 3.3.a.2 </h3>
					<div class="row">
						<div class="col-sm-4 col-sm-push-1 profile_inputs full">
							<div class="form-group">
								<label for="date"> <a href="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/Salaryslip/payslip/<?php echo $id;?>">Attendance Sheet </a></label>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="section_wrapper">
			<div class="level_1_heading">
				<div class="container">
					3.3.b Job Desciption
				</div>
			</div>
			<div class="container">
				<!-- Level 2 Section -->
				<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i>  JD Archives 3.3.b.1</h3>
					<div class="row">
						<div class="col-sm-4 col-sm-push-1 profile_inputs full">
							<div class="form-group">
								<label for="date">JD Archives</label>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
		<div class="section_wrapper">
			<div class="level_1_heading">
				<div class="container">
					 Task & Performance
				</div>
			</div>
			<div class="container">
				<!-- Level 2 Section -->
				<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Task & Performance matrix 3.3.c.1</h3>
					<div class="row">
						<div class="col-sm-4 col-sm-push-1 profile_inputs full">
							<div class="form-group">
								<label for="date"> <a href="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/?id=<?php echo $id;?>" >Task & Performance matrix</label> </a>
							</div>
						</div>
					</div>
				</div>
				<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Operations Matrix 3.3.c.2</h3>
					<div class="row">
						<div class="col-sm-4 col-sm-push-1 profile_inputs full">
							<div class="form-group">
								<label for="date"><a href="http://bridges/bridgessms/Bridges_School_Software/staffAssignmentF/taskAssignment.php">Operations Matrix</a></label>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	</div>
				
	
</section>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
</html>
