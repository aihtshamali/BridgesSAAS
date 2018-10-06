<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Roles</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/emp_profile/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
 	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
</head>
<body>
	<div class="container" style="padding:10px 0">

		<?php if(!isset($assigned_data)) {?>
		<form action="<?php echo base_url()?>Admin/AssignPermission" method="POST">
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
					<tr>
						<td>
							<select name="user_id" class="form_control" id="">
								<option value="">Select Employee</option>
								<?php foreach ($users as $user) {?>
									<option value="<?php echo $user->id ?>"><?php echo $user->fname.' '.$user->lname ?></option>
								<?php } ?>
							</select>
						</td>
						<td>
							<select name="role_id" class="form_control" id="">
								<option value="">Roles</option>
								<?php foreach ($roles as $role) {?>
									<option value="<?php echo $role->id ?>"><?php echo $role->name ?></option>
								<?php } ?>
							</select>
						</td>
						<td>
							<button type="submit" value="" class="btn btn-success btn-sm" > Assigned</button>
						</td>
					</tr>
				</tbody>		
			</table>
		</form>
		<?php } else { ?>
		<form action="<?php echo base_url()?>Admin/UpdateAssignedPermission" method="POST">
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
					<input type="hidden" name="id" value="<?php echo $assigned_data->id?>">
					<tr>
						<td>
							<select name="user_id" class="form_control" id="">
								<option value="">Select Employee</option>
								<?php foreach ($users as $user) {?>
									<option value="<?php echo $user->id ?>" <?php if($assigned_data->user_id==$user->id) echo 'selected'; else echo ''; ?> ><?php echo $user->fname.' '.$user->lname ?></option>
								<?php } ?>
							</select>
						</td>
						<td>
							<select name="role_id" class="form_control" id="">
								<option value="">Roles</option>
								<?php foreach ($roles as $role) {?>
									<option value="<?php echo $role->id ?>" <?php if($assigned_data->role_id==$role->id) echo 'selected'; else echo ''; ?>  ><?php echo $role->name ?></option>
								<?php } ?>
							</select>
						</td>
						<td>
							<button type="submit" value="" class="btn btn-success btn-sm" > Assigned</button>
						</td>
					</tr>
				</tbody>		
			</table>
		</form>
		<?php } ?>
	</div>
</body>
</html>