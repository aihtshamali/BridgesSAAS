<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assigned</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/emp_profile/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
 	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
</head>
<body>
	<div class="container" style="padding:10px 0">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 style="display:inline">Assigned Users</h3>
				<span class="pull-right"><a href="<?php echo base_url() ?>Admin/AssignRole" class="btn btn-primary btn-sm">Assign New Employee</a></span>
			</div>
		</div>
		<table class="table table-responsive">
			<thead>
				<th>
					Employee
				</th>
				<th>
					Roles
				</th>
				<th>
					Actions
				</th>
			</thead>
			<tbody>
				<?php foreach ($AssignedRoles as $assigned) { 
					?>
				<tr>
					<td>
						<?php echo $assigned->fname. ' '.$assigned->lname; ?>
					</td>
					<td>
						<?php echo $assigned->name?>
						
					</td>
					<td>
						<a href="<?php echo base_url() ?>/Admin/EditAssignedRole/<?= $assigned->id ?>" class="btn btn-success btn-sm">Edit</a>
						<a class="btn btn-success btn-sm" href="<?php echo base_url()?>/Admin/DeleteAssignedRole/<?= $assigned->id ?>" >Delete</a>
					</td>
					
				</tr>
				<?php } ?>
			</tbody>		
		</table>
	</div>
</body>
</html>