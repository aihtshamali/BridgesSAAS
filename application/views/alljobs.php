
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="<?php echo base_url();?>assets/bootstrap-editable-folder/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/style4.css" rel="stylesheet" media="all">
	<link href="<?php echo base_url();?>assets/css/style3.css" rel="stylesheet" media="all">

</head>
<style type="text/css">
	body{
		background-color: #f0f0f0;
	}
	.salary-header{
		width: 100%;
		height: 70px;
		background-color: green;
		color: white; 
	}
</style>
<body>

<div class="slip-wrapper">
<div class="salary-header">
	<div class="logo-with-text relative">
		<img src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/assets/images/logo.png" class="header-logo">
	</div>
</div>
</div>

<div class="container">
  <h2 style="text-align: center;">Jobs List</h2>
  <table class="table table-bordered table-hover table-striped" style="background: white;">
    <thead>
      <tr>
      	<th>#</th>
        <th>Industry</th>
        <th>Company Type</th>
        <th>Location</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Total Employees</th>
        
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sr=1;
	foreach ($jobs as $job) {    
     
 ?>
      <tr>
      	<td><?=$sr;?></td>
      	<td><?=$job->company_industry;?></td>
        <td><?php echo $job->company_type; ?></td>
        <td><?php echo $job->location;?></td>
        <td><?php echo $job->email;?></td>
        <td><?php echo $job->phone; ?></td>
        <td><?php echo $job->total_employees;?></td>
        <td><a href="<?php echo base_url();?>corporateprofile/ViewJob/<?php echo $job->id; ?>">View</a> / <a href="<?php echo base_url();?>/CorporateProfile/CompanyAdd/<?php echo $job->id; ?>">Edit</a> / <a href="<?php echo base_url();?>/CorporateProfile/Apply/<?php echo $job->id; ?>"> Apply</a></td>
        <!-- <td><a href="<php base_url()?><php echo "employeeView/" .$emp->userid; ?>">View</a></td> -->
      
      </tr>
      <?php $sr++;} ?>
    </tbody>
  </table>

</div>

</body>
</html>
