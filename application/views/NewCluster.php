<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Cluster</title>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/stylecaanjobs.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
		 <h1>New Cluster</h1>
		 <div class="container">
		 	<form action="<?php echo base_url();?>/Hr/insertCluster/" method="Post" >
		 	<div class="form-group">
		 		<label for="">Cluster : </label>
		 		<input type="text" class="form-control" style="display: inline;width: 20%" name="cluster" placeholder="Cluster...">
		 		<label for="">Level: </label>
		 		<select name="level_id" class="form-control" style="display: inline;width: 20%"  class="pull-right">
		 			<?php 
		 			foreach ($levels as $level) {
		 			 ?>
		 			 <option value="<?php echo $level->id?>"> <?php echo $level->level_name;?></option>
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