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
	<link rel="stylesheet" type="text/css" href="<php echo base_url()?>assets/emp_profile/css/style.css">
    <link rel="stylesheet" type="text/css" href="<php echo base_url()?>assets/emp_profile/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
 -->
<section id="section4">
<h2 style="background:red";><font color="white">3.4 Compensation & Benefits</font></h2>
	<div class="wrapper">
	<div class="section_wrapper">
			<div class="level_1_heading">
				<div class="container">
					3.4.a Leaves
				</div>
			</div>
			<div class="container">
				<!-- Level 2 Section -->
				<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i>  Leaves System 3.4.a.1</h3>
					<div class="row">
						<div class="col-sm-4 col-sm-push-1 profile_inputs full">
							<div class="form-group">
								<label for="date"><a href="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/Salaryslip/attendance/Attendance_Sheet">Leaves System</a></label>
							</div>
							<div class="form-group">
								<label for="date"><a href="#">Customized Leave Arrangement</a></label>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="section_wrapper">
			<div class="level_1_heading">
				<div class="container">
					3.4.b Benefits
				</div>
			</div>
			<div class="container">
				<!-- Level 2 Section -->
				<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Benefits Programs 3.4.b.1</h3>
					<div class="row">
						<div class="col-sm-4 col-sm-push-1 profile_inputs full">
							<div class="form-group">
								<label for="date"><a href="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/Caan/benefits/<?php echo $id;?>">Benefits Programs</a></label>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="section_wrapper">
			<div class="level_1_heading">
				<div class="container">
					3.4.c Compensation & Payroll
				</div>
			</div>
			<div class="container">
				<!-- Level 2 Section -->
				<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Compensation System 3.4.c.1</h3>
					<div class="row">
						<div class="col-sm-4 col-sm-push-1 profile_inputs full">
							<div class="form-group">
								<label for="date">Compensation System</label>
							</div>
						</div>
					</div>
				</div>
				<?php if($this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR"){ ?>
				<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Advances 3.4.c.2</h3>
					<div class="row">
						<div class="col-sm-4 col-sm-push-1 profile_inputs full">
							<div class="form-group">
								<label for="date">Advance Availed by Date</label>
							</div>
						</div>
					</div>
				</div>
				<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Monthly Payroll Sheet 3.4.b.3</h3>
					<div class="row">
						<div class="col-sm-4 col-sm-push-1 profile_inputs full">
							<div class="form-group">
								<label for="date"><a href="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/Salaryslip/">Monthly Payroll Sheet</a></label>
							</div>
							<div class="form-group">
								<label for="date"><a href="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/Salaryslip/">Compensation Sheet</a></label>
							</div>
						</div>
					</div>
				</div>
				<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Compensation Slips 3.4.c.4</h3>
					<div class="row">
						<div class="col-sm-4 col-sm-push-1 profile_inputs full">
							<div class="form-group">
								<label for="date">Compensation Slips</label>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		
	</div>
	</div>
				
	<script type="text/javascript" src="<?php echo base_url()?>assets/emp_profile/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/emp_profile/js/bootstrap.min.js"></script>
	
</section>
</html>
