
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
  <h2 style="text-align: center;">Employee Detail List</h2>
  <table class="table table-bordered table-hover table-striped" style="background: white;">
    <thead>
      <tr>
      	<th>#</th>
        <th>Employee Code</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Cluster</th>
        <th>Level</th>
        <th>Address</th>
        <th>Contact No</th>
        <th>E-mail</th>
        <th><a href="<?php echo base_url(); ?>employeeUpdate/activeUsers/1">Active</a>/<a href="<?php echo base_url(); ?>employeeUpdate/activeUsers/0">Inactive</a></th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sr=1;
	foreach ($employee as $emp) {    
     
 ?>
      <tr>
      	<td><?=$sr;?></td>
      	<td><?=$emp->userid;?></td>
        <td><?php echo $emp->fname." ".$emp->lname; ?></td>
        <td><?php echo $emp->gender;?></td>
        <td><?php echo $emp->cluster;?></td>
        <td><?php echo $emp->job_title; ?></td>
        <td><?php echo $emp->address;?></td>
        <td><?php echo $emp->contact_no; ?></td>
        <td><?php echo $emp->email;?></td>
        <td><?php $status = "Active";
        if ($emp->status == 1) {
        	$status = "Inactive";
        }
        echo '<a href="'.base_url().'employeeUpdate/inActiveUser/'.$emp->userid.'">'.$status.'</a>';?></td>
        <td><a href="<?php base_url()?>Employee_reg/emp_module_1/<?php echo $emp->userid; ?>">Edit</a></td>
        <!-- <td><a href="<php base_url()?><php echo "employeeView/" .$emp->userid; ?>">View</a></td> -->
      <?php $sr++; }?>
      </tr>
    </tbody>
  </table>

</div>

</body>
</html>
