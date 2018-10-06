<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project Selection</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
	.header{
		display: inline;
		margin:10px;
		margin-left: 0px;
		font-weight: bold; 
	}
	.border{
	border-top:1px solid black;
	} 
.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
		padding-left: 0;padding-right: 0;
	}
/*	.container{
		width: 103%;
    margin-left: 42px;
    padding-right: 20px;
/*		width: 94%;
    margin-left: 85px;
    padding-right: 20px;
	}*/
</style>
</head>
<body >
	
	
<div class="container">
	<div class="row">

	<div align="center" class="col-md-12" id="title_div">
		<br>
				<span class="pull-right"><a class="btn btn-sm btn-success" href="<?php echo base_url(); ?>\Hr\EdittitleByProject_view\<?php echo $reviews->userid; ?>">Edit</a></span>

			<h3>Project : 
				<?php echo $reviews->project_name; ?>
			 </h3>
			<p style="display: inline;">Level : 
				<?php echo $reviews->level_name; ?>
			 </p> - 
			<p style="display: inline;">Salary Range : 
				<?php echo $reviews->salary; ?>
			 </p>
			 <p style="display: inline;">Title : 
				<?php echo $reviews->cluster_name; ?>
				<?php echo $reviews->position_name; ?>
			 </p>
			<!-- <p><?php echo $reviews->job_title; ?></p> -->
	</div>
	</div>
	<br><br><br>
	<div class="form-group row">
		<div class="col-md-2">
		<label for="" style="display: block;">1</label>
		</div>
		<div class=" col-offset-2 col-md-8">
			<p for="">What is expected of the candidate in terms of understanding the bigger issue of the cluster/ professional area he/she
			is applying for? How well does he/she know the issues related to the field and its universe</p>
			<p><?php echo $reviews->known_issues; ?></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		<label for="" style="display: block;">2</label>
		</div>
		<div class=" col-offset-2 col-md-8">
			<p for="">How is the candidate expected to resolve and strategize the outstanding and potential issue of the cluster/professional area he/she  is applying for</p>
			<p><?php echo $reviews->potential_issue	; ?></p>

			
		</div>		
	</div>
	<div class="row">
		<div class="col-md-2">
		<label for="" style="display: block;">3</label>
		</div>
		<div class=" col-offset-2 col-md-8">
			<p for="">What skill sets and trainings are expected of the candidates</p>
			<p><?php echo $reviews->skills_set; ?></p>
			
		</div>		
	</div>
	<div class="row">
		<div class="col-md-2">
		<label for="" style="display: block;">4</label>
		</div>
		<div class=" col-offset-2 col-md-8">
			<p for="">What relief is the candidate expected to bring to the organization (results expected)</p>
			<p><?php echo $reviews->relief; ?></p>
			
			
		</div>		
	</div>
	<div class="row">
		<div class="col-md-2">
		<label for="" style="display: block;">5</label>
		</div>
		<div class=" col-offset-2 col-md-8">
			<p for="">How the candidates presence will be related to the overall goals of the organization (results expected towards goals)</p>
			<p><?php echo $reviews->overall_goals; ?></p>
			
		</div>
		
	</div>
	<div class="row">
<!-- 		<div class="col-md-2">
		<label for="" style="display: block;">5</label>
		</div> -->
		<div class=" col-md-offset-2 col-md-8">
			<p for="">What is expected of the candidates at th particular level he/she will be operating at: </p>
			<p><?php echo $reviews->particular_level; ?></p>
			
		</div>
		
	</div>
	
	
<!-- //	<input type="button" value="Submit" class="btn btn-small btn-success pull-right"> -->
</div>
</body>
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
	<!-- <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$( document ).ready(function() {
});




</script>
</html>