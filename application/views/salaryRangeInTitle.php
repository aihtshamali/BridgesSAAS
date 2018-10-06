<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Position</title>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/stylecaanjobs.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
		 <h1>New Salary Range</h1>
		 <div class="container">
		 	<form action="<?php echo base_url();?>/Hr/insertSalaryRange/" method="Post" >
		 	<div class="form-group">
		 		<label for="">Salary Range : </label>
		 		<input type="text" class="form-control" style="display: inline;width: 20%" name="salary" placeholder="Salary Range...">
		 		<label for="">Project: </label>
		 		<select name="project_id" class="form-control" style="display: inline;width: 20%"  class="pull-right">
		 			<?php 
		 			foreach ($projects as $project) {
		 			 ?>
		 			 <option value="<?php echo $project->id?>"> <?php echo $project->project_title?></option>
		 			 <?php
		 			}
		 			 ?>
		 		</select>
		 		<label for="">Position : </label>
		 		<select name="level_id" class="form-control" style="display: inline;width: 20%"  class="pull-right">
		 			<?php 
		 			foreach ($positions as $position) {
		 			 ?>
		 			 <option value="<?php echo $position->id?>"> <?php echo $position->name;?></option>
		 			 <?php
		 			}
		 			 ?>
		 		</select>
		 	</div>
		 	<div>
		 		<input type="submit" class="btn btn-success pull-right">
		 	</div>
		 	</form>
		 </div>
		</div>
	</body>
	</html>	