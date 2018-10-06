<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bridges Attendance</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
<style type="text/css" >
.text-decoration-none{
	text-decoration: none !important;
}
.my-20{
	margin-top: 20px;
	margin-bottom: : 20px;
}
.custom-width{
	width:160px ;
}
</style>
<body>	
<section class="my-20">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 text-center">

				  <!-- Trigger the modal with a button -->
				  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExistingEmployeeModal">Existing Employee</button>

				  <!-- Modal -->
				  <div class="modal fade" id="ExistingEmployeeModal" role="dialog">
				    <div class="modal-dialog">
				      <!-- Modal content-->
				      <div class="modal-content">
				        <div class="modal-body">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				           <form class="form-inline" action="<?php echo base_url();?>Hr_Dashboard/Get_Employee" method="post">
				           		<div class="form-group">
			           				<label for="selcct_user">Select Employee</label>
						           	   <select id="selcct_user" class="form-contro select2 custom-width" name="id">
							          	<?php foreach ($user_list as $item ) :?>
							          		<option value="<?php echo $item->userid;?>" ><?php echo $item->fname." ".$item->lname;?></option>
							          	<?php endforeach;?>
							           </select>
				           		</div>
				           		 <button type="submit" class="btn btn-primary btn-sm">Submit</button>
				           </form>
				        </div>				      
				      </div>				      
				    </div>
				  </div>
  				
				
  				  <!-- Trigger the modal with a button -->
  				  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#InductEmployeeModal">Induct New Employee</button>

				  <!-- Modal -->
				  <div class="modal fade" id="InductEmployeeModal" role="dialog">
				    <div class="modal-dialog">
				      <!-- Modal content-->
				      <div class="modal-content">
				        <div class="modal-body">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				           <form class="form-inline" action="<?php echo base_url();?>Hr_Dashboard/Get_Employee" method="post">
				           		<div class="form-group">
			           				<label for="selcct_user">Assign ID</label>
						           	 <input type="text" name="id">
				           		</div>
				           		 <button type="submit" class="btn btn-primary btn-sm">Submit</button>
				           </form>
				        </div>				      
				      </div>				      
				    </div>
				  </div>

			</div>
		</div>
	</div>
</section>
 
<script type="text/javascript">
	$(document).ready(function() {
		$('.select2').select2();
	});
</script>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>