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
			
		<div align="center">
			<span class="pull-right btn btn-success" ><a href="<?php echo base_url() ?>Hr/insertCluster" style="color:white;">Create Cluster</a></span>
			<span class="pull-right btn btn-success"><a href="<?php echo base_url() ?>Hr/insertPosition" style="color:white;">Create Positions</a></span>
			<h3>Pick a Level, Salary Range & Title by Project</h3>
			<span class="pull-right" id="view_page">
				
			</span>
		</div>
<?php $counter=0; ?>
		<table class="table table-responsive">
			<tr>
				<th>Level</th>
				<?php
				// print_r($reviews);exit;
				foreach ($projects as $project) {
				 ?>
				<th>Project By <?php echo $project->project_title; ?></th>
				<th>Salary Range</th>
				<?php } ?>
				<th>Cluster
					<!-- <p>Cluster</p> -->
				</th>
			</tr>
			<?php foreach ($levels as $level) {
				
				?>
			<tr>
				<td><?php 
					 	if($reviews->level_id==$level->id){ 
					 		$clusterExist=true; // If level exist then only  select its cluster
					 		?>
					<input type="radio" name="level" id="lev<?php echo  $level->id; ?>" class="level level<?php echo $counter ?>" value="<?php echo $level->level_name;?>" checked>
					<span contenteditable="true" onblur="save(this)" id="level_editable<?php echo $level->id; ?>"><?php echo $level->level_name; ?></span>
					<?php } else{ $clusterExist=false;?>
					<input type="radio" name="level" id="lev<?php echo  $level->id; ?>" class="level level<?php echo $counter ?>" value="<?php echo $level->level_name;?>" >
					<span contenteditable="true" onblur="save(this)" id="level_editable<?php echo $level->id; ?>"><?php echo $level->level_name; ?></span>
					<?php }?>	
				</td>

					 	<td>
				<?php
					foreach ($positions as $position) {
				if($projects[0]->id==$position->project_id && $level->id==$position->level_id) {?>
					 		<p><?php
							   if($reviews->position_id==$position->id){ ?>
					 			<input type="radio" class="position position<?php echo $counter ?>" id="pos<?php echo  $position->project_id; ?>-<?php echo $position->id; ?>" value="<?php echo  $projects[0]->project_title; ?> - <?php echo $position->name; ?>" name="position" checked> 
					 			<span contenteditable="true" onblur="save(this)" id="position_editable<?php echo $position->id; ?>"><?php echo $position->name; ?></span>
					 			<?php } else { ?>
					 			<input type="radio" class="position position<?php echo $counter ?>" id="pos<?php echo  $position->project_id; ?>-<?php echo $position->id; ?>" value="<?php echo  $projects[0]->project_title; ?> - <?php echo $position->name; ?>" name="position" disabled> 
					 			<span contenteditable="true" onblur="save(this)" id="position_editable<?php echo $position->id; ?>"><?php echo $position->name; ?></span>
					 			
								<?php }?>
							</p>
				<?php	}
				 } ?> 
					 	</td>
					 	<td>
					 	<?php foreach ($positions as $position) {
				if($projects[0]->id==$position->project_id && $level->id==$position->level_id) { 
				if($reviews->position_id==$position->id){ ?>
					 		<input name='salary_range' value="<?php echo $position->salary_range; ?>" id="salary<?php echo $position->id; ?>" class='form-control salary_range salary<?php echo $counter ?>' style='display:inline;border:none;width: 150px' placeholder='Salary...'>
					<?php }else { ?>
						<input name='salary_range' value="<?php echo $position->salary_range; ?>" id="salary<?php echo $position->id; ?>" class='form-control salary_range salary<?php echo $counter ?>' style='display:inline;border:none;width: 150px' placeholder='Salary...' disabled>
					<?php }
				}} ?>
						</td>
				<td>
				<?php
					foreach ($positions as $position) {
				if($projects[1]->id==$position->project_id && $level->id==$position->level_id) {?>
					 		<p>
					 			<?php
							   if($reviews->position_id==$position->id){ ?>
					 			<input type="radio" class="position position<?php echo $counter ?>" id="pos<?php echo  $position->project_id; ?>-<?php echo $position->id; ?>" value="<?php echo  $projects[0]->project_title; ?> - <?php echo $position->name; ?>" name="position" checked> 
					 			<span contenteditable="true" onblur="save(this)" id="position_editable<?php echo $position->id; ?>"><?php echo $position->name; ?></span>
					 			<?php } else { ?>
					 			<input type="radio" class="position position<?php echo $counter ?>" id="pos<?php echo  $position->project_id; ?>-<?php echo $position->id; ?>" value="<?php echo  $projects[0]->project_title; ?> - <?php echo $position->name; ?>" name="position" disabled> 
					 			<span contenteditable="true" onblur="save(this)" id="position_editable<?php echo $position->id; ?>"><?php echo $position->name; ?></span>
					 			
								<?php }?>
					 		</p>

				<?php	} } ?> 
				</td>
				<td>
					 	<?php foreach ($positions as $position) {
				if($projects[1]->id==$position->project_id && $level->id==$position->level_id) {
				if($reviews->position_id==$position->id){ ?>
					 		<input name='salary_range' value="<?php echo $position->salary_range; ?>" id="salary<?php echo $position->id; ?>" class='form-control salary_range salary<?php echo $counter ?>' style='display:inline;border:none;width: 150px' placeholder='Salary...'>
					<?php }else { ?>
						<input name='salary_range' value="<?php echo $position->salary_range; ?>" id="salary<?php echo $position->id; ?>" class='form-control salary_range salary<?php echo $counter ?>' style='display:inline;border:none;width: 150px' placeholder='Salary...' disabled>
					<?php } }} ?>
						</td>
						<td>
				<?php
					foreach ($positions as $position) {
				if($projects[2]->id==$position->project_id && $level->id==$position->level_id) {?>
						<p>
							<?php
							   if($reviews->position_id==$position->id){ ?>
					 			<input type="radio" class="position position<?php echo $counter ?>" id="pos<?php echo  $position->project_id; ?>-<?php echo $position->id; ?>" value="<?php echo  $projects[0]->project_title; ?> - <?php echo $position->name; ?>" name="position" checked> 
					 			<span contenteditable="true" onblur="save(this)" id="position_editable<?php echo $position->id; ?>"><?php echo $position->name; ?></span>
					 			<?php } else { ?>
					 			<input type="radio" class="position position<?php echo $counter ?>" id="pos<?php echo  $position->project_id; ?>-<?php echo $position->id; ?>" value="<?php echo  $projects[0]->project_title; ?> - <?php echo $position->name; ?>" name="position" disabled> 
					 			<span contenteditable="true" onblur="save(this)" id="position_editable<?php echo $position->id; ?>"><?php echo $position->name; ?></span>
					 			
								<?php } ?>
					 	</p>

				<?php	} } ?> 
					 	</td>

					 	<td>
					 	<?php foreach ($positions as $position) {
				if($projects[2]->id==$position->project_id && $level->id==$position->level_id) {	
					 		if($reviews->position_id==$position->id){ ?>
					 		<input name='salary_range' value="<?php echo $position->salary_range; ?>" id="salary<?php echo $position->id; ?>" class='form-control salary_range salary<?php echo $counter ?>' style='display:inline;border:none;width: 150px' placeholder='Salary...'>
					<?php }else { ?>
						<input name='salary_range' value="<?php echo $position->salary_range; ?>" id="salary<?php echo $position->id; ?>" class='form-control salary_range salary<?php echo $counter ?>' style='display:inline;border:none;width: 150px' placeholder='Salary...' disabled>
					<?php }  }} 

					?>
						</td>

				<td width="200px">
		<?php if($reviews->LeftCluster_id && $clusterExist) {?>
			<input type="radio" name="cluster_name<?php echo $counter;?>" id="clusterL<?php echo $counter; ?>" style="display: inline" class="cluster clusterL cluster<?php echo $counter ?>"  checked> 
			<?php } else{?>
			<input type="radio" name="cluster_name<?php echo $counter;?>" id="clusterL<?php echo $counter; ?>" style="display: inline" class="cluster clusterL cluster<?php echo $counter ?>"  disabled> 
		<?php }	?>
			<select name="cluster_name" style="display: inline;width: 140px;" id="cluster<?php echo $counter;?>" class="form-control clusters"	>	

				<?php 
				foreach ($clusters as $cluster) {
				// if($level->id==$cluster->level_id){
			// echo $clusters[17]->name;
					 		if($reviews->cluster_id==$cluster->id && $reviews->level_id==$level->id){ 
				
					?>
					
					
					 	<option  value="<?php 	echo $cluster->id ?>" selected><?php echo $cluster->name;?></option>
					 	<?php } else { ?>
					 	<option  value="<?php 	echo $cluster->id ?>"><?php echo $cluster->name;?></option>
<!-- <p style="display: inline"><span contenteditable="true" onblur="save(this)" id="cluster_editable<php echo $cluster->id; ?>"><php echo $cluster->name; ?></span></p> -->
					
						<!-- <br> -->
			<?php 	} }?>
				 </select>
				 <?php if($reviews->RightCluster_id && $clusterExist){?>
				 <input type="radio" style="display: inline;" name="cluster_name<?php echo $counter;?>"  id="clusterR<?php echo $counter; ?>"  class="cluster clusterR cluster<?php echo $counter; ?>" value="<php echo $cluster->name;?>" checked>
				<?php }else{?>
				 <input type="radio" style="display: inline;" name="cluster_name<?php echo $counter;?>" id="clusterR<?php echo $counter; ?>"  class="cluster clusterR cluster<?php echo $counter; ?>" value="<php echo $cluster->name;?>" disabled>
				<?php } ?>		
				</td>


			</tr>
			<?php  $counter++; } ?>	
			
		</table>


	</div>
</div>
<div class="container " style="clear:both">
	<div class="row">
	<div class="col-md-offset-3 col-md-7">
	<span class="" id="project_div">
			<?php echo $reviews->project_name; ?>
	</span>
	<span class="" id="level_div">
			<?php echo $reviews->level_name; ?>
	</span>	
	<span class="" id="salary_range_div">
			<?php echo $reviews->salary; ?>
	</span>
	<span class="" id="clusterL_div">
			<?php echo $reviews->cluster_name; ?>
			
	</span>

	<span class="" id="position_div">
			<?php echo $reviews->position_name; ?>

	</span>
	<span class="" id="clusterR_div">
			
	</span>
	</div>
		<div class="col-md-1 col-md-offset-1">
			<input type="submit" id="submit_btn" class="pull-right btn btn-small btn-success">
		</div>
	</div>


</div>
	<br><br><br>
<div class="container">
	<div class="row">
	<div align="center" class="col-md-12" id="title_div">
		
	</div>
	</div>
	<br><br><br>
		<form action="" id="users_">

		<input type="hidden" name="project_id" value="<?php echo $reviews->project_id?>" id="proj_id">
		<input type="hidden" name="position_id" value="<?php echo $reviews->position_id?>" id="pos_id">
		<input type="hidden" name="level_id" value="<?php echo $reviews->level_id?>" id="lev_id">
		<input type="hidden" name="cluster_id" value="<?php echo $reviews->cluster_id;?>" id="clust_id">
		<input type="hidden" name="LeftCluster_id" id="Leftclust_id" value="<?php echo $reviews->LeftCluster_id; ?>">
		<input type="hidden" name="RightCluster_id" id="Rightclust_id" value="<?php echo $reviews->RightCluster_id ?>">
		<input type="hidden" name="salary" value="<?php echo $reviews->salary?>" id="sal_range">
		<input type="hidden" name="userid" id="userid" value="<?php echo $userid; ?>">


		<input type="hidden" name="job_title" id="job_title_input" value="<?php echo($reviews->job_title); ?>" >
	
	<div class="form-group row">
		<div class="col-md-2">
		<label for="" style="display: block;">1</label>
		</div>
		<div class=" col-offset-2 col-md-8">
			<p for="">What is expected of the candidate in terms of understanding the bigger issue of the cluster/ professional area he/she
			is applying for? How well does he/she know the issues related to the field and its universe</p>
			<textarea name="known_issues" id="" cols="120" rows="5"><?php echo $reviews->known_issues ?></textarea>
		</div>
	</div>
<div class="row">
		<div class="col-md-2">
		<label for="" style="display: block;">2</label>
		</div>
		<div class=" col-offset-2 col-md-8">
			<p for="">How is the candidate expected to resolve and strategize the outstanding and potential issue of the cluster/professional area he/she  is applying for</p>
			<textarea name="potential_issue" id="" cols="120" rows="5"><?php echo $reviews->potential_issue ?></textarea>

		</div>		
	</div>
	<div class="row">
		<div class="col-md-2">
		<label for="" style="display: block;">3</label>
		</div>
		<div class=" col-offset-2 col-md-8">
			<p for="">What skill sets and trainings are expected of the candidates</p>
			<textarea name="skills_set" id="" cols="120" rows="5"><?php echo $reviews->skills_set	 ?></textarea>
		</div>		
	</div>
	<div class="row">
		<div class="col-md-2">
		<label for="" style="display: block;">4</label>
		</div>
		<div class=" col-offset-2 col-md-8">
			<p for="">What relief is the candidate expected to bring to the organization (results expected)</p>
			<textarea name="relief" id="" cols="120" rows="5"><?php echo $reviews->relief;	 ?></textarea>
			
		</div>		
	</div>
	<div class="row">
		<div class="col-md-2">
		<label for="" style="display: block;">5</label>
		</div>
		<div class=" col-offset-2 col-md-8">
			<p for="">How the candidates presence will be related to the overall goals of the organization (results expected towards goals)</p>
			<textarea name="overall_goals" id="" cols="120" rows="5"><?php echo $reviews->overall_goals;	 ?></textarea>
			
		</div>
		
	</div>
	<div class="row">
<!-- 		<div class="col-md-2">
		<label for="" style="display: block;">5</label>
		</div> -->
		<div class=" col-md-offset-2 col-md-8">
			<p for="">What is expected of the candidates at th particular level he/she will be operating at: </p>
			<textarea name="particular_level" id="" cols="120" rows="5"><?php echo $reviews->particular_level;	 ?></textarea>
			
		</div>
		
	</div>
	<div class="row">
	<div class="col-md-1 col-md-offset-10">
			<input type="submit" id="users_submit_btn" class="pull-right btn btn-small btn-success">
		</div>
		</div>
	</form>
<!-- //	<input type="button" value="Submit" class="btn btn-small btn-success pull-right"> -->
</div>



<!-- <div class="container">
	<table id="user_descriptionLinks">
	<thead>
		<th>Sr.No</th>
		<th style="text-align: center;">Title</th>
	</thead>
	<tbody>
	<php
	$i=1; 
	foreach ($user_description as $description) { ?>
	<tr>
		<td class="col_num"><php echo $i; ?></td>
		<td><a href="<php echo base_url(); ?>/Hr/UserReviews/<php echo $description->id;?>"><php echo $description->job_title; ?></a></td>
	</tr>
	<php $i++;	} ?>
	</table>
</div>
 -->
</body>
<script src="//cdn.ckeditor.com/4.7.2/basic/ckeditor.js"></script>
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
	<!-- <script type="text/javascript" src="<php echo base_url()?>assets/js/jquery.js"></script> -->
<!-- <script type="text/javascript" src="<php echo base_url()?>assets/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$( document ).ready(function() {
	var lev_id="<?php echo $reviews->level_id ; ?>",pos_id="<?php echo $reviews->position_id ; ?>",clust_id="<?php echo $reviews->cluster_id ; ?>",salary="<?php echo $reviews->salary ; ?>",proj_id="<?php echo $reviews->project_id ; ?>";
	var project	,NclusterL_id="<?php echo $reviews->LeftCluster_id ; ?>";var NclusterR_id="<?php echo $reviews->RightCluster_id ; ?>";
	console.log(clust_id+" - "+pos_id+" - "+proj_id+" - "+lev_id);	

	$( ".clusterR" ).on('change',function() {
		var temp=$(this).attr('id');
	// temp=temp.split('-');
	 clust_id=parseInt(temp.replace(/[^0-9\.]/g, ''), 10);
	NclusterL_id=$( "#cluster"+clust_id).val();
	var cluster=''+$( "#cluster"+clust_id+" option:selected").text()+'';
  			$('#clusterL_div').html('');
	NclusterR_id=$( "#cluster"+clust_id).val();
	NclusterL_id=null;

  		var newdiv=$('#clusterR_div').html(cluster);
  		clust_id=NclusterR_id;
	$( "#Leftclust_id").val('');
  		
  		console.log(cluster);
});

$( ".clusterL" ).on('change',function() {
	var temp=$(this).attr('id');
	// temp=temp.split('-');
	 clust_id=parseInt(temp.replace(/[^0-9\.]/g, ''), 10);
	 NclusterR_id=$( "#cluster"+clust_id).val();

	var cluster=$( "#cluster"+clust_id+" option:selected").text();
  			$('#clusterR_div').html('');
	 NclusterL_id=$( "#cluster"+clust_id).val();
		NclusterR_id=null;
  		
  		var newdiv=$('#clusterL_div').html(cluster);
  		clust_id=NclusterL_id;
  			$( "#Rightclust_id").val('');

  		console.log(newdiv);
});

var enabled=null;
$( ".level" ).on('change',function() {
	var temp=$(this).attr('id');
		// alert(temp);
	// temp=temp.split('-');
	lev_id=parseInt(temp.replace(/[^0-9\.]/g, ''), 10);


	var clas=$(this).attr("class").split(' ');
	
	var id=parseInt(parseInt(clas[1].replace(/[^0-9\.]/g, ''), 10));
		if(enabled!=null)
		{
		$('.position'+enabled).prop('disabled',true);
		$('.cluster'+enabled).prop('disabled',true);
		$('.salary'+enabled).prop('disabled',true);

		}
		$('.position'+id).prop('disabled',false);
		$('.cluster'+id).prop('disabled',false);
		$('.salary'+id).prop('disabled',false);
		enabled=id;
		// parseInt(this.attr('class'));



  		var cluster=''+$(this).val()+'';
  		var newdiv=$('#level_div').html(cluster);

});

$( ".position" ).on('change',function() {
	// alert('hello');
	var str=$(this).val();
	str=str.split('-');
	// alert(str);
	var temp=$(this).attr('id');
	temp=temp.split('-');
	proj_id=parseInt(temp[0].replace(/[^0-9\.]/g, ''), 10);
	// alert(proj_id);
	pos_id=temp[1];
 salary=document.getElementById('salary'+pos_id).value;	
  		
  		$('#project_div').html(str[0]);
  		$('#position_div').html(str[1]);
		$('#salary_range_div').html('<p style="display:inline;padding:5px;">'+salary+'</p>');

  		
});
$( ".salary_range" ).on('change',function() {
	salary=$(this).val();
  		
  		$('#salary_range_div').html('<p style="display:inline;padding:5px;">'+$(this).val()+'</p>');
  		

});
// var lev_id,pos_id,clust_id,salary,proj_id;
	var clusterL=null, clusterR=null,position_div=null;
$('#submit_btn').on('click',function(e){
	e.preventDefault();
	// console.log(clust_id+" - "+pos_id+" - "+proj_id+" - "+lev_id);	
	$('#clust_id').val(clust_id);
	$('#pos_id').val(pos_id);
	$('#proj_id').val(proj_id);
	$('#lev_id').val(lev_id);
	$('#sal_range').val(salary);
	if(NclusterL_id)
	$('#Leftclust_id').val(NclusterL_id);
	else if(NclusterR_id)
	$('#Rightclust_id').val(NclusterR_id);
	// console.log($('#clust_id').val()+" - "+
	// $('#pos_id').val()+" - "+
	// $('#proj_id').val()+" - "+
	// $('#lev_id').val())
	 project_div=$('#project_div').html();
	// alert($('#level_div').id);
	var level_id=$('#level_div').html();
	 position_div=$('#position_div').html();
	 clusterR_div=$('#clusterR_div').html();
	 clusterL_div=$('#clusterL_div').html();
	var salary_range=$('#salary_range_div').html();
	// console.log("Left"+clusterL_div);
	// console.log("Right"+clusterR_div);
	if(clusterL_div){
	$('#title_div').html('Project: '+project_div+'Level: '+level_id+'Salary Range: '+salary_range+' Title: '+''+clusterL_div+''+position_div+'');
	$('#job_title_input').val(clusterL_div+''+position_div+'');
}
	else{

	$('#title_div').html('Project: '+project_div+'Level: '+level_id+'Salary Range: '+salary_range+' Title: '+''+position_div+''+clusterR_div+'');
		$('#job_title_input').val(position_div+''+clusterR_div+'');
}

});


//  User Description Ajax
			$('#users_submit_btn').on('click', function(e)
			{
				e.preventDefault();
			if(clusterL)
	$('#job_title_input').val(clusterL_div+''+position_div+'');	
else if(clusterR)
	$('#job_title_input').val(position_div+''+clusterR_div);	
			var current_id=$('#userid').val();
			// alert(current_id);hidden
// alert('<php echo base_url(); ?>Hr/updatetitlePage_data/'+current_id);
				var data = $("form#users_").serialize();
				console.log(data);
				$.ajax(	
				{	
					type:'POST',
					url:'<?php echo base_url(); ?>Hr/updatetitlePage_data/'+current_id,
					data: data,
					success: function(data)
					{
						// alert(data);
						if(data)
						alert("Updated SuccessFully");
						else
						alert("Updation Failed");
					}
				});
				
			 });


});

$('.salary_range').on('blur',function(){
	var d=$(this).attr('id');	
	var salary=$(this).val();	
	var posi_id=parseInt(d.replace(/[^0-9\.]/g, ''), 10);
	console.log(pos_id + " - "+ salary);
	$.ajax({
		type:'POST',
		url:'<?php echo base_url(); ?>Hr/updateSalary',
		data: {
			position_id:posi_id,salary_range:salary
		},
		success: function(data){
			console.log(data);	
		}
	});

});

 function save(object){
	var name=object.id.split('_');
	var id=parseInt(name[1].replace(/[^0-9\.]/g, ''), 10);
	var text=$('#'+object.id).html();

	$.ajax({
		type:'POST',
		url:'<?php echo base_url(); ?>Hr/update'+name[0]+'/'+id,
		data: {
			data:text
		},
		success: function(data){
			console.log(data);	
		}
	});
				// $.ajax(	
				// {	
				// 	type:'POST',
				// 	url:'<php echo base_url(); ?>CorporateProfile/saveplacement',
				// 	data: personal_details,
				// 	success: function(data)
				// 	{
				// 		console.log(data);
				// 	}
				// });
	// alert(name[0]);
	// alert(id);
	}


</script>
</html>