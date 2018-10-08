<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assigned</title>

	<link rel="stylesheet" href="<?=base_url('assets/css/w3.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/emp_profile/css/bootstrap.min.css">
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
					<td style="width:5%">
						<!--
						<a href="<?php echo base_url() ?>/Admin/EditAssignedRole/<?= $assigned->id ?>" class="btn btn-success btn-sm">Edit</a>
						<a class="btn btn-success btn-sm" href="<?php echo base_url()?>/Admin/DeleteAssignedRole/<?= $assigned->id ?>" >Delete</a>
						-->

						<input type="button" class="btn btn-success btn-sm" style="width:100%" onclick="window.location.href='<?php echo base_url() ?>/Admin/EditAssignedRole/<?= $assigned->id ?>'" value="Edit">
						
					</td>
					<td style="width:5%">
						<input type="button" class="btn btn-success btn-sm" style="width:100%" onclick="document.getElementById('deleteItem').style.display='block'" value="Delete">
					</td>
					
				</tr>
				<?php } ?>
			</tbody>		
		</table>
	</div>
	<div id="deleteItem" class="w3-modal">
	    <div class="w3-modal-content w3-animate-opacity">
	      <header class="w3-container w3-text-teal">
	        <h2>Confirmation</h2>
	      </header>

			<div class="w3-container">
			<form method="POST" action="">
			  <label>Do you really want to delete this assignment? </label>
			  <div style="float:right">
				  <input class="btn btn-success btn-sm" type="button" value="Yes" onclick="window.location.href='<?php echo base_url()?>/Admin/DeleteAssignedRole/<?= $assigned->id ?>'">
				  <input class="btn btn-success btn-sm" type="button" value="No" onclick="document.getElementById('deleteItem').style.display='none'">
			  </div>
			</form>
			</div>
	      	<footer class="w3-container w3-text-teal">
        		<p> </p>
      		</footer>
	    </div>
  	</div>
</body>
</html>