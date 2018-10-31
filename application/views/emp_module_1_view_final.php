<!DOCTYPE html>
<html lang="zxx">
<head>
	<style type="text/css">
	.btn-file {
		position: relative;
		overflow: hidden;
	}
	.btn-file input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		min-width: 100%;
		min-height: 100%;
		font-size: 100px;
		text-align: right;
		filter: alpha(opacity=0);
		opacity: 0;
		outline: none;
		background: white;
		cursor: inherit;
		display: block;
	}
	.res-tbl
	{
		border: none !important;
	}
	table.passwords>tbody>tr>td{
		padding: 0!important;
		border:none !important;
	}
	.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, 
	.table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th
	{
		border:none !important;
		padding: 0 !important;
	}
    .edit-form{
    	background-color: #eee !important;
    }

    select::-ms-expand {
    	display: none;
    }
    select{
    	/*width:100px;*/
    	-webkit-appearance: none;
    	-moz-appearance: none;
    	appearance: none;
    	/*padding: 2px 30px 2px 2px;*/
    	/*border: none;*/
    	/* background: transparent url("http://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/br_down.png") no-repeat right center;*/
    }
    .row > .column {
    	padding: 0 8px;
    }

    .w-445{
    	width: 445px !important;
    }

    div.show-image {
    	position: relative;
    	float:left;
    	margin:5px;
    }
    div.show-image:hover img{
    	/*opacity:0.5;*/
    }
    div.show-image:hover a:first-child {
    	display: block;
    }
    div.show-image a:first-child {
    	position:absolute;
    	display:none;
    }
    div.show-image a:first-child.update {
    	top:10px;
    	left:1px;
    }
    div.show-image a:first-child.delete {
    	top:0;
    	left:79%;
    }


    div.show-image-cnic {
    	position: relative;
    	float:left;
    	margin:5px;
    }
    div.show-image-cnic:hover img{
    	/*opacity:0.5;*/
    }
    div.show-image-cnic:hover a:first-child {
    	display: block;
    }
    div.show-image-cnic a:first-child {
    	position:absolute;
    	display:none;
    }
    div.show-image-cnic a:first-child.update {
    	top:0px;
    	left:15px;
    }
    div.show-image-cnic a:first-child.delete {
    	top:0;
    	left:79%;
    }

    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>The Bridges</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/emp_profile/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/emp_profile/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/emp_profile/js/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" integrity="sha256-xykLhwtLN4WyS7cpam2yiUOwr709tvF3N/r7+gOMxJw=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha256-3blsJd4Hli/7wCQ+bmgXfOdK7p/ZUMtPXY08jmxSSgk=" crossorigin="anonymous"></script>


	<link rel="icon" href="<?php echo base_url()?>/assets/images/red-logo.png">

    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->


    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>

	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script> -->
	<script type="text/javascript">
	$( document ).ready(function() {
					    // $('textarea').attr("readonly","readonly") ;	
					    $('textarea').css("padding","0px") ;
					    // $('input').attr("readonly","readonly") ;	
					});
	function editform(id){
		var elem = $( '#'+id+' .edit');
		$.each(elem, function(index, value) {
			$(value).addClass("edit-form");	
			$(value).attr("readonly",false) ;
			$(value).css("padding","8px") ;	

		});
	}
	function submitform(id){
		var elem = $( '#'+id+' .edit');
		$.each(elem, function(index, value) {
			$(value).removeClass("edit-form");	
			$(value).attr("readonly","readonly") ;
			$(value).css("padding","0px") ;
		});
	}
	</script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>

<body>
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<span class="pull-right col-md-1">
					<a style="color: white;" href="<?php echo base_url('user/logout'); ?>"><abbr title="Sign Out"><img style="width:40%" src="<?=base_url()?>assets/images/signout.png" alt="SignOut"></abbr></a>
				</span>
			</div>
		</div>
	</div>
	<section id="section1">

		<?php if($this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR" || fhkCheckAuthPermission(["canViewProfiles", "canDoEverything"])){ ?>
		
		<h2 style="background:red;"><font color="white">3.1 Onboarding & Records</font></h2>
		<div class="wrapper">

			<div class="section_wrapper">
			<!--<div class="level_1_heading">
				<div class="container">
					3.1.a Original CV
				</div>
			</div>-->

			<div class="container">
				<!-- Level 2 Section -->
				<div class="level_2_row">

					<form  action="<?php echo base_url(); ?>Employee_reg/SaveCV" method="post" enctype="multipart/form-data" id="UploadCVForm">
						<!-- <php echo form_open_multipart('Welcome/SaveCV');?>	 -->
						<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> 
							Upload Original CV

							<span class="text-center">
							<!-- <label for="User_CV" class="btn btn-primary" style="margin-left: 331px;" > Upload  </label>
							<input id="User_CV" type="file" name="userfileCV"  value="" class="sr-only" > -->
							
								<!-- <label class="float-left ml-3" for="schedule"><i class="fa fa-upload"></i></label>
								<input id="schedule" onchange="this.form.submit();" type="file" name="userfile" size="20" accept="image/*" style="display:none;" /> -->
								<label for="User_CV" class="btn btn-primary" style="margin-left: 308px;" >
									<?php 
									if(isset($user_details->upload_cv)){
										if ($user_details->upload_cv) {
											echo "Uploaded";
										}
										else{
											echo "Upload";
										}
									}else{
										echo "Upload";
									}

									?>
								<!-- <?//php if(isset($user_details->upload_cv)): ?>
								Uploaded
								<?php// else:?>
								 Upload
								 <?php// endif;?> -->
								</label>
								<!-- onchange="SaveFile(this)" -->
								<input id="User_CV" type="file"  name="userfileCV" class="sr-only"  onchange="uploadCV()" >
								<input type="hidden" name="id" value="<?php echo $id;?>"> 
								<input style="display: none;" type="submit" value="upload" />
							</span>

							<div for="" class="" style=" margin-bottom:5px!important; margin-left: 504px;" >
								<a download="download" id="cv_button" href="<?php if(isset($user_details->upload_cv)) echo $user_details->upload_cv; ?>" target="_blank"  class="btn btn-primary" style="padding-left: 9px !important; 
									padding-right: 10px !important;">D.load</a>
								</div>

							</h3>
						</form>
						<div class="col-sm-6">


							<form action="<?php echo base_url();?>Employee_reg/form_14" id="UploadCVFormImg" method="post"  enctype="multipart/form-data">
								<div class="form-group" style="padding-left: 123px; margin-bottom: 8px;">
									<label for="User_CV_img" class="" style="float: left;">  Upload CV Picture  </label>
									<input id="User_CV_img" type="file" name="userfileCVimg"  value="" class="sr-only"  onchange="uploadCVImg()" >
									<input type="hidden" name="id" value="<?php echo $id;?>">
									<input style="display: none;" type="submit" value="upload" />
									<label for="User_CV_img" class="btn btn-primary pull-right"> Upload </label>
								</div>								
							</form>

							<div class="row" style="margin-top: 5px;">
								<div class="col-md-12 ">
									<?php foreach ($user_img as $item) :?>
									<div class="show-image">
										<a id="cv_btn_<?php echo $item->id;?>" class="btn btn-primary update" onclick="delbyid(<?php echo $item->id;?>)" style="float: right;" data-toggle="modal" data-target="#delModal">x</a>

										<a id="cv_img_<?php echo $item->id;?>" data-fancybox="gallery" href="<?php  echo $item->cnic; ?>"><img   src="<?php  echo $item->cnic; ?>" width="100%" class="fifty" height="100%" style=" margin-top: 10px; margin-bottom: 10px; border: 1px solid #ddd;" alt="" /></a>
									</div>

								<?php endforeach; ?>
								<!-- Modal -->
								<div id="delModal" class="modal fade" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<p>Are sure you want to delete this picture.</p>
											</div>
											<div class="modal-footer">
												<form id="del_cv_img_form" action="<?php echo base_url();?>Employee_reg/DeleteCVImg" method="Post">
													<input type="hidden" name="id" id="del_cv_img_id">
													<button id="del_cv_img_form_btn" type="submit" class="btn btn-danger pull-right" data-dismiss="modal" >Delete</button>
												</form>
												<button id="model_close_cv_img" type="button" class="btn btn-default" data-dismiss="modal" style="margin-right:5px;">Cancel</button>

											</div>
										</div>

									</div>
								</div>
								<!-- model end -->
								<!-- Modal -->
								<div id="delimgModal" class="modal fade" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<p>Are sure you want to delete this picture.</p>
											</div>
											<div class="modal-footer">
												<form id="del_img_form" action="<?php echo base_url();?>Employee_reg/DeleteImg" method="Post">
													<input type="hidden" name="id" value="<?php echo $id;?>" >
													<input type="hidden" name="field_name" id="del_field_name" >
													<input type="hidden" name="" id="remove_field_class" >
													<button id="del_img_form_btn" type="submit" class="btn btn-danger pull-right" data-dismiss="modal" >Delete</button>
												</form>
												<button id="model_close_img" type="button" class="btn btn-default" data-dismiss="modal" style="margin-right:5px;">Cancel</button>

											</div>
										</div>

									</div>
								</div>
								<!-- model end -->
							</div>
						</div>
					</div>
					<div class="form-control" style="">
						<div class="row">

						</div>
					</div>
					<!--<div class="row">
						<div class="col-sm-4 col-sm-push-1 profile_inputs full">
							<div class="form-group">
								<label for="date"><a href="<?php //echo base_url()?>welcome/offermade/<?php //echo $row['emp_id']; ?>">Offer</a></label>
							</div>
						</div>
					</div>-->

				</div>
			</div>

		</div>


		<div class="section_wrapper">
			<div class="level_wrapper" id="form4">
				<div class="level_1_heading">
					<div class="container">
						3.1.b - Professional Profile
					</div>
				</div>
				<div class="container">
					<!-- Level 2 Section -->
					<div class="level_2_row">
						<h3 class="level_2_heading"><i class="fa fa-file-text" aria-hidden="true"></i> Profile Summary</h3>
						<div id="form-1" class="row">
							<!-- <form action="" method="post"> -->
							<div class="user_thumbnail">
								<img src="<?php if(isset($user_details->upload_picture)) echo $user_details->upload_picture;?>" width="120" height="120" alt="no img uploaded" style="border: 1px solid #ddd;" />
							</div>
							<div class="col-sm-4 custom_width">
								<h4 class="level_3_heading">Career Objective</h4>
								<textarea  name="career_objective" id=""class="form-control mc edit" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing."></textarea>
								<h4 class="level_3_heading">Job Objective</h4>
								<textarea name="job_objective"  id="" class="form-control mc edit" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing."></textarea>
								<div class="sep"></div>
								<div class="form-group">
									<input onclick="submitform('form-1')" type="submit" style="margin-left: 2px;" class="btn btn-primary pull-right" value="Submit" name="">

									<button onclick="editform('form-1')" class="btn btn-primary submitdivExperience pull-right" style="padding-left: 5px !important;
									padding-right: 5px !important;
									padding-top: 0px !important;
									padding-bottom: 0px !important;
									background: rgb(214, 214, 214) !important;">
									<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
								</button>
							</div>
						</div>
						<!-- </form> -->
						<div class="col-sm-6" style="float: right;">
							<div class="col-sm-2 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3 text-center" style="width: 99px;margin: 0px !important;
							padding: 0px !important;">
							<h5 class="box_heading">Profile Score</h5>
							<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-sm-3 text-center" style="width: 98px; margin: 0px !important;
						padding: 0px !important;" >
						<h5 class="box_heading">Interview Score</h5>
						<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-sm-4">
						<h5 class="box_heading">Interview Instructions</h5>
						<select class="form-control" multiple>
							<option value="volvo">Is resume professional and...</option>
							<option value="saab">Is resume professional and...</option>
							<option value="opel">Is resume professional and...</option>
							<option value="audi">Is resume professional and...</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- /Level 2 Section -->

		<!-- Level 2 Section -->
		<div class="level_2_row">
			<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Personal Details</h3>
			<div id="form-2" class="row">
				<div class="col-sm-5 col-sm-push-1 profile_inputs">
					<h4 class="level_3_heading">Personal Profile</h4>
					<div class="form-group">
						<label for="first_name">First Name</label>
						<input type="text" class="form-control edit" id="first_name" value="First Name" name="">
					</div>
					<div class="form-group">
						<label for="last_name">Last Name</label>
						<input type="text" class="form-control edit" id="last_name" value="Last Name" name="">
					</div>
					<div class="form-group">
						<label for="initials">Initials</label>
						<input type="text" class="form-control edit" id="initials" value="Initials" name="">
					</div>
					<div class="form-group">
						<label for="cnic">CNIC</label>
						<input type="text" class="form-control edit" id="cnic" value="3010303030303" name="">
					</div>
					<div class="form-group">
						<label for="gender">Gender</label>
						<input type="text" class="form-control edit" id="gender" value="Male" name="">
					</div>
					<div class="form-group">
						<label for="marital_status">Marital Status</label>
						<input type="text" class="form-control edit" id="marital_status" value="Single" name="">
					</div>
					<div class="form-group">
						<label for="dependence">Number of Dependence</label>
						<input type="text" class="form-control edit" id="dependence" value="4" name="">
					</div>
					<div class="sep"></div>
					<h4 class="level_3_heading">Contact Info</h4>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control edit" id="email" value="Email" name="">
					</div>
					<div class="form-group">
						<label for="mobile">Mobile</label>
						<input type="text" class="form-control edit" id="mobile" value="1 28 128 712" name="">
					</div>
					<div class="form-group">
						<label for="website">Website</label>
						<input type="text" class="form-control edit" id="website" value="www.google.com" name="">
					</div>
					<div class="form-group">
						<label for="address">Home Address</label>
						<input type="text" class="form-control edit" id="address" value="Home address" name="">
					</div>
					<div class="form-group">
						<label for="nationality">Citizenship</label>
						<input type="text" class="form-control edit" id="nationality" value="Citizenship" name="">
					</div>
					<div class="form-group">
						<label for="country">Country of Residence</label>
						<input type="text" class="form-control edit" id="country" value="Country of Residence" name="">
					</div>

					<div class="sep"></div>
					<div class="form-group">
						<input onclick="submitform('form-2')" style="margin-left: 2px;" type="submit" class="btn btn-primary pull-right" value="Submit" name="" />

						<button onclick="editform('form-2')"  class="btn btn-primary submitdivExperience pull-right" style="padding-left: 5px !important;
						padding-right: 5px !important;
						padding-top: 0px !important;
						padding-bottom: 0px !important;
						background: rgb(214, 214, 214) !important;">
						<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
					</button>
				</div>
			</div>
			<div class="col-sm-6 col-sm-push-1">
							<!-- <div class="col-sm-3 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Profile Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Rubric Form</h5>
								<select class="form-control" multiple>
									<option value="">Is resume professional and...</option>
									<option value="">Is resume professional and...</option>
									<option value="">Is resume professional and...</option>
									<option value="">Is resume professional and...</option>
								</select>
							</div> -->
							<div class="col-sm-2 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3 text-center" style="width: 99px;margin: 0px !important;
							padding: 0px !important;">
							<h5 class="box_heading">Profile Score</h5>
							<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-sm-3 text-center" style="width: 98px; margin: 0px !important;
						padding: 0px !important;" >
						<h5 class="box_heading">Interview Score</h5>
						<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-sm-4">
						<h5 class="box_heading">Interview Instructions</h5>
						<select class="form-control" multiple>
							<option value="volvo">Is resume professional and...</option>
							<option value="saab">Is resume professional and...</option>
							<option value="opel">Is resume professional and...</option>
							<option value="audi">Is resume professional and...</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- /Level 2 Section -->


		<!-- Level 2 Section -->
		<div class="level_2_row">
			<h3 class="level_2_heading"><i class="fa fa-language" aria-hidden="true"></i> Languages</h3>
			<div class="row" id="form-5">
				<div class="col-sm-5 col-sm-push-1 profile_inputs full">
					<div class="language">
						<h4 class="level_3_heading">Native Language</h4>
						<div class="form-group">
							<select class="form-control edit">
								<option>English</option>
								<option>English</option>
								<option>English</option>
								<option>English</option>
								<option>English</option>
								<option>English</option>
							</select>
						</div>
						<h4 class="level_3_heading">Other Languages</h4>
						<div class="form-group">
							<select class="form-control edit" style="height: 90px;" multiple="">
								<option value="">English</option>
								<option value="">English</option>
								<option value="">English</option>
								<option value="">English</option>
							</select>
						</div>
					</div>
					<div class="sep"></div>
							<!--<div class="form-group" id="submitdiv0">
								<input type="button" class="btn btn-primary submitdivExperience pull-right" value="Add" name="" style="margin-bottom: 5px;padding: 0px 14px !important;">
							</div>-->
							<div class="form-group">
								<!--<input type="submit" class="btn btn-primary pull-right" value="Submit" name="">-->
								<input onclick="submitform('form-5')" type="button" class="btn btn-primary submitdivExperience pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">

								<button style="margin-left: 2px; background: rgb(214, 214, 214) !important;" class="btn btn-primary submitdivExperience pull-right">
									<i class="fa fa-plus" aria-hidden="true"></i>
								</button>

								<button onclick="editform('form-5')" class="btn btn-primary submitdivExperience pull-right" style="padding-left: 5px !important;
								padding-right: 5px !important;
								padding-top: 0px !important;
								padding-bottom: 0px !important;
								background: rgb(214, 214, 214) !important;">
								<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
							</button>
						</div>
					</div>
					<div class="col-sm-6 col-sm-push-1">
							
							<div class="col-sm-2 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3 text-center" style="width: 99px;margin: 0px !important;
							padding: 0px !important;">
							<h5 class="box_heading">Profile Score</h5>
							<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-sm-3 text-center" style="width: 98px; margin: 0px !important;
						padding: 0px !important;" >
						<h5 class="box_heading">Interview Score</h5>
						<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-sm-4">
						<h5 class="box_heading">Interview Instructions</h5>
						<select class="form-control" multiple>
							<option value="volvo">Is resume professional and...</option>
							<option value="saab">Is resume professional and...</option>
							<option value="opel">Is resume professional and...</option>
							<option value="audi">Is resume professional and...</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- /Level 2 Section -->

		<!-- Level 2 Section -->
		<div class="level_2_row">
			<h3 class="level_2_heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education</h3>
			<div class="row" id="form-4">
				<div class="col-sm-5 col-sm-push-1 profile_inputs">
					<h4 class="level_3_heading">Institute Name</h4>
					<div class="profile_inputs full">
						<div class="form-group">
							<select class="form-control edit">
								<option>City</option>
								<option>City</option>
								<option>City</option>
								<option>City</option>
								<option>City</option>
								<option>City</option>
							</select>
						</div>
						<div class="form-group">
							<select class="form-control edit">
								<option>Country</option>
								<option>Country</option>
								<option>Country</option>
								<option>Country</option>
								<option>Country</option>
								<option>Country</option>
							</select>
						</div>
						<div class="form-group">
							<select class="form-control edit">
								<option>Year</option>
								<option>Year</option>
								<option>Year</option>
								<option>Year</option>
								<option>Year</option>
								<option>Year</option>
							</select>
						</div>
						<div class="form-group">
							<select class="form-control edit">
								<option>Degree</option>
								<option>Degree</option>
								<option>Degree</option>
								<option>Degree</option>
							</select>
						</div>
						<div class="form-group">
							<select class="form-control edit">
								<option>Field of Study</option>
								<option>Field of Study</option>
								<option>Field of Study</option>
								<option>Field of Study</option>
							</select>
						</div>
								<!-- <div class="form-group">
									<select class="form-control scroll_italic" style="height: 90px;" multiple="">
										<option value="">Field of Study</option>
										<option value="">Field of Study</option>
										<option value="">Field of Study</option>
										<option value="">Field of Study</option>
									</select>
								</div> -->
								<!-- <div class="form-group">
									<select class="form-control" style="height: 90px;" multiple="">
										<option value="">F.Sc (Engineering)</option>
										<option value="">F.Sc (Engineering)</option>
										<option value="">F.Sc (Engineering)</option>
										<option value="">F.Sc (Engineering)</option>
										<option value="">F.Sc (Engineering)</option>
									</select>
								</div> -->
							</div>
							<div class="sep"></div>
							<!--<div class="form-group" id="submitdiv0">
								<input type="button" class="btn btn-primary submitdivExperience pull-right" value="Add" name="" style="margin-bottom: 5px;padding: 0px 14px !important;">
							</div>-->
							<div class="form-group">
								<!--<input type="submit" class="btn btn-primary pull-right" value="Submit" name="">-->
								<input onclick="submitform('form-4')" type="button" class="btn btn-primary pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">

								<button style="margin-left: 2px; background: rgb(214, 214, 214) !important;" class="btn btn-primary pull-right">
									<i class="fa fa-plus" aria-hidden="true"></i>
								</button>

								<button onclick="editform('form-4')" class="btn btn-primary pull-right" style="padding-left: 5px !important;
								padding-right: 5px !important;
								padding-top: 0px !important;
								padding-bottom: 0px !important;
								background: rgb(214, 214, 214) !important;">
								<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
							</button>
						</div>
					</div>
					<div class="col-sm-6 col-sm-push-1">
							<!-- <div class="col-sm-3 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Profile Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Rubric Form</h5>
								<select class="form-control" multiple>
									<option value="">Is resume professional and...</option>
									<option value="">Is resume professional and...</option>
									<option value="">Is resume professional and...</option>
									<option value="">Is resume professional and...</option>
								</select>
							</div> -->
							<div class="col-sm-2 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3 text-center" style="width: 99px;margin: 0px !important;
							padding: 0px !important;">
							<h5 class="box_heading">Profile Score</h5>
							<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-sm-3 text-center" style="width: 98px; margin: 0px !important;
						padding: 0px !important;" >
						<h5 class="box_heading">Interview Score</h5>
						<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-sm-4">
						<h5 class="box_heading">Interview Instructions</h5>
						<select class="form-control" multiple>
							<option value="volvo">Is resume professional and...</option>
							<option value="saab">Is resume professional and...</option>
							<option value="opel">Is resume professional and...</option>
							<option value="audi">Is resume professional and...</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- /Level 2 Section -->

		<!-- Level 2 Section -->
		<div class="level_2_row">
			<h3 class="level_2_heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Award & Achievements</h3>
			<div class="row" id="form-6">
				<div class="col-sm-5 col-sm-push-1 profile_inputs">
					<div class="profile_inputs">
						<h4 class="level_3_heading">Certification Title</h4>
						<div class="form-group">
							<label for="date">Date:</label>
							<input type="text" class="form-control edit" id="date" placeholder="mm/dd/yyyy" name="">

						</div>

						<div class="form-group"><label>Awards Description:</label>
							<textarea class="form-control edit" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."></textarea>
						</div>
					</div>
					<div class="sep"></div>
							<!--<div class="form-group" id="submitdiv0">
								<input type="button" class="btn btn-primary submitdivExperience pull-right" value="Add" name="" style="margin-bottom: 5px;padding: 0px 14px !important;">
							</div>-->
							<div class="form-group">
								<!--<input type="submit" class="btn btn-primary pull-right" value="Submit" name="">-->
								<input onclick="submitform('form-6')" type="button" class="btn btn-primary submitdivExperience pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">

								<button style="margin-left: 2px; background: rgb(214, 214, 214) !important;" class="btn btn-primary submitdivExperience pull-right">
									<i class="fa fa-plus" aria-hidden="true"></i>
								</button>

								<button onclick="editform('form-6')" class="btn btn-primary submitdivExperience pull-right" style="padding-left: 5px !important;
								padding-right: 5px !important;
								padding-top: 0px !important;
								padding-bottom: 0px !important;
								background: rgb(214, 214, 214) !important;">
								<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
							</button>
						</div>
					</div>
					<div class="col-sm-6 col-sm-push-1">
							<!-- <div class="col-sm-3 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Profile Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Rubric Form</h5>
								<select class="form-control" multiple>
									<option value="volvo">Is resume professional and...</option>
									<option value="saab">Is resume professional and...</option>
									<option value="opel">Is resume professional and...</option>
									<option value="audi">Is resume professional and...</option>
								</select>
							</div> -->
							<div class="col-sm-2 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3 text-center" style="width: 99px;margin: 0px !important;
							padding: 0px !important;">
							<h5 class="box_heading">Profile Score</h5>
							<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-sm-3 text-center" style="width: 98px; margin: 0px !important;
						padding: 0px !important;" >
						<h5 class="box_heading">Interview Score</h5>
						<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-sm-4">
						<h5 class="box_heading">Interview Instructions</h5>
						<select class="form-control" multiple>
							<option value="volvo">Is resume professional and...</option>
							<option value="saab">Is resume professional and...</option>
							<option value="opel">Is resume professional and...</option>
							<option value="audi">Is resume professional and...</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- /Level 2 Section -->

		<!-- Level 2 Section -->
		<div class="level_2_row">
			<h3 class="level_2_heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Certification</h3>
			<div class="row" id="form-7">
				<form action="post">
					<div class="col-sm-5 col-sm-push-1 profile_inputs">
						<div class="profile_inputs">
							<h4 class="level_3_heading">Certification Title</h4>
							<div class="form-group">
								<label for="date">Date:</label>
								<input type="text" class="form-control edit" id="date" value="mm/dd/yyyy" name="">
							</div>
							<div class="form-group"><label>Awards Description:</label> 
								<textarea class="form-control edit" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."></textarea>
							</div>
						</div>
						<div class="sep"></div>
							<!--<div class="form-group" id="submitdiv0">
								<input type="button" class="btn btn-primary submitdivExperience pull-right" value="Add" name="" style="margin-bottom: 5px;padding: 0px 14px !important;">
							</div>-->
							<div class="form-group">
								<!--<input type="submit" class="btn btn-primary pull-right" value="Submit" name="">-->
								<input onclick="submitform('form-7')" type="button" class="btn btn-primary submitdivExperience pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">

								<button style="margin-left: 2px; background: rgb(214, 214, 214) !important;" class="btn btn-primary submitdivExperience pull-right">
									<i class="fa fa-plus" aria-hidden="true"></i>
								</button>

								<button onclick="editform('form-7')" class="btn btn-primary submitdivExperience pull-right" style="padding-left: 5px !important;
								padding-right: 5px !important;
								padding-top: 0px !important;
								padding-bottom: 0px !important;
								background: rgb(214, 214, 214) !important;">
								<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
							</button>
						</div>
					</div>
				</form>
				<div class="col-sm-6 col-sm-push-1">
							<!-- <div class="col-sm-3 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Profile Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Rubric Form</h5>
								<select class="form-control" multiple>
									<option value="volvo">Is resume professional and...</option>
									<option value="saab">Is resume professional and...</option>
									<option value="opel">Is resume professional and...</option>
									<option value="audi">Is resume professional and...</option>
								</select>
							</div> -->
							<div class="col-sm-2 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3 text-center" style="width: 99px;margin: 0px !important;
							padding: 0px !important;">
							<h5 class="box_heading">Profile Score</h5>
							<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-sm-3 text-center" style="width: 98px; margin: 0px !important;
						padding: 0px !important;" >
						<h5 class="box_heading">Interview Score</h5>
						<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-sm-4">
						<h5 class="box_heading">Interview Instructions</h5>
						<select class="form-control" multiple>
							<option value="volvo">Is resume professional and...</option>
							<option value="saab">Is resume professional and...</option>
							<option value="opel">Is resume professional and...</option>
							<option value="audi">Is resume professional and...</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- /Level 2 Section -->


		<!-- Level 2 Section -->
		<div class="level_2_row">
			<h3 class="level_2_heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Projects</h3>
			<div class="row" id="form-13">
				<div class="col-sm-5 col-sm-push-1 profile_inputs">
					<div class="profile_inputs">
						<h4 class="level_3_heading">Projects Title</h4>
						<div class="form-group">
							<label for="date">Date</label>
							<input  type="text" class="form-control" id="date" value="" placeholder="mm/dd/yyyy" name="">
						</div>
						<div class="form-group"><label>Projects Description:</label> 
							<textarea class="form-control edit" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."></textarea>
						</div>
								<!--<div class="sep"></div>
								<h4 class="level_3_heading">Upload video/Voice</h4>
								<div class="form-group">
									<input type="file" class="form-control" name="">
								</div>-->
								<div class="sep"></div>
								<div class="form-group">
									<!--<input type="submit" class="btn btn-primary pull-right" value="Submit" name="">-->
									<input onclick="submitform('form-13')" type="button" class="btn btn-primary submitdivExperience pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">

									<button style="margin-left: 2px; background: rgb(214, 214, 214) !important;" class="btn btn-primary submitdivExperience pull-right">
										<i class="fa fa-plus" aria-hidden="true"></i>
									</button>

									<button onclick="editform('form-13')" class="btn btn-primary submitdivExperience pull-right" style="padding-left: 5px !important;
									padding-right: 5px !important;
									padding-top: 0px !important;
									padding-bottom: 0px !important;
									background: rgb(214, 214, 214) !important;">
									<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
								</button>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-sm-push-1">
							<!-- <div class="col-sm-3 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="" aria-hidden="true" data-original-title="Title"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="" aria-hidden="true" data-original-title="Title"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="" aria-hidden="true" data-original-title="Title"></i>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Profile Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Rubric Form</h5>
								<select class="form-control" multiple="">
									<option value="volvo">Is resume professional and...</option>
									<option value="saab">Is resume professional and...</option>
									<option value="opel">Is resume professional and...</option>
									<option value="audi">Is resume professional and...</option>
								</select>
							</div> -->
							<div class="col-sm-2 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3 text-center" style="width: 99px;margin: 0px !important;
							padding: 0px !important;">
							<h5 class="box_heading">Profile Score</h5>
							<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-sm-3 text-center" style="width: 98px; margin: 0px !important;
						padding: 0px !important;" >
						<h5 class="box_heading">Interview Score</h5>
						<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-sm-4">
						<h5 class="box_heading">Interview Instructions</h5>
						<select class="form-control" multiple>
							<option value="volvo">Is resume professional and...</option>
							<option value="saab">Is resume professional and...</option>
							<option value="opel">Is resume professional and...</option>
							<option value="audi">Is resume professional and...</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- /Level 2 Section -->

		<!-- Level 2 Section -->
		<div class="level_2_row">
			<h3 class="level_2_heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Skills</h3>
			<div class="row" id="form-12">
				<div class="col-sm-5 col-sm-push-1 profile_inputs">
					<h4 class="level_3_heading">Area of Experties</h4>
					<div class="profile_inputs full">
						<div class="form-group">
							<select class="form-control edit">
								<option>Select Area</option>
								<option></option>
								<option></option>
								<option></option>
								<option></option>
							</select>
						</div>
						<div class="form-group">
							<input type="button" class="btn btn-primary submitdivExperience pull-right edit" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px; margin-top: 5px;">

						</div>
						<div class="sep"></div>
						<h4 class="level_3_heading">Specific Skills within the Area of Experties</h4>
						<div class="form-group">
							<textarea style="margin-bottom: 5px;" class="form-control edit" placeholder="Select Specific Skills"></textarea>
									<!--<input type="text" placeholder="" name="">
									<select class="form-control">
										<option></option>
										<option></option>
										<option></option>
										<option></option>
										<option></option>
									</select>-->
								</div>
								<div class="form-group">
									<input onclick="submitform('form-12')" type="button" class="btn btn-primary submitdivExperience pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">

									<button style="margin-left: 2px; background: rgb(214, 214, 214) !important;" class="btn btn-primary submitdivExperience pull-right">
										<i class="fa fa-plus" aria-hidden="true"></i>
									</button>

									<button onclick="editform('form-12')" class="btn btn-primary submitdivExperience pull-right" style="padding-left: 5px !important;
									padding-right: 5px !important;
									padding-top: 0px !important;
									padding-bottom: 0px !important;
									background: rgb(214, 214, 214) !important;">
									<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
								</button>
							</div>
						</div>
								<!--<div class="form-group checkgrp">
									<label>HTML</label>
									<input type="checkbox" name="">
									<br>
									<label>HTML</label>
									<input type="checkbox" name="">
									<br>
									<label>HTML</label>
									<input type="checkbox" name="">
									<br>
									<label>HTML</label>
									<input type="checkbox" name="">
								</div>-->
								<!--<div class="sep"></div>
								<h4 class="level_3_heading">Tools</h4>
								<div class="form-group checkgrp">
									<label>HTML</label>
									<input type="checkbox" name="">
									<br>
									<label>HTML</label>
									<input type="checkbox" name="">
									<br>
									<label>HTML</label>
									<input type="checkbox" name="">
									<br>
									<label>HTML</label>
									<input type="checkbox" name="">
								</div>
								<div class="sep"></div>
								<h4 class="level_3_heading">Android Development Skills</h4>
								<div class="form-group checkgrp">
									<label>HTML</label>
									<input type="checkbox" name="">
									<br>
									<label>HTML</label>
									<input type="checkbox" name="">
									<br>
									<label>HTML</label>
									<input type="checkbox" name="">
									<br>
									<label>HTML</label>
									<input type="checkbox" name="">
								</div>
								<div class="sep"></div>
								<h4 class="level_3_heading">Framework</h4>
								<div class="form-group checkgrp">
									<label>HTML</label>
									<input type="checkbox" name="">
									<br>
									<label>HTML</label>
									<input type="checkbox" name="">
									<br>
									<label>HTML</label>
									<input type="checkbox" name="">
									<br>
									<label>HTML</label>
									<input type="checkbox" name="">
								</div>
								<div class="sep"></div>
								<h4 class="level_3_heading">Programming Concepts</h4>
								<div class="form-group checkgrp">
									<label>HTML</label>
									<input type="checkbox" name="">
									<br>
									<label>HTML</label>
									<input type="checkbox" name="">
									<br>
									<label>HTML</label>
									<input type="checkbox" name="">
									<br>
									<label>HTML</label>
									<input type="checkbox" name="">
								</div>
							</div>
							<div class="sep"></div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary pull-right" value="Submit" name="">
							</div>
						</div>-->
						<!--<div class="col-sm-6 col-sm-push-1">
							<div class="col-sm-3 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Profile Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Rubric Form</h5>
								<select class="form-control" multiple>
									<option value="volvo">Is resume professional and...</option>
									<option value="saab">Is resume professional and...</option>
									<option value="opel">Is resume professional and...</option>
									<option value="audi">Is resume professional and...</option>
								</select>
							</div>
						</div>-->
					</div>
				</div>

			</div>

			<!-- /Level 2 Section -->


			<!-- Level 2 Section -->
			<div class="level_2_row">
				<h3 class="level_2_heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Hobbies & Interests</h3>
				<div class="row" id="form-9">
					<div class="col-sm-5 col-sm-push-1 profile_inputs full">
						<div class="profile_inputs full">
							<div class="form-group">
								<select class="form-control edit" style="height: 90px;" multiple="">
									<option value="">Football</option>
									<option value="">Reading</option>
								</select>
							</div>
						</div>
						<div class="sep"></div>
						<div class="form-group">
							<!--<input type="submit" class="btn btn-primary pull-right" value="Submit" name="">-->
							<input onclick="submitform('form-9')" type="button" class="btn btn-primary submitdivExperience pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">

							<button style="margin-left: 2px; background: rgb(214, 214, 214) !important;" class="btn btn-primary submitdivExperience pull-right">
								<i class="fa fa-plus" aria-hidden="true"></i>
							</button>

							<button onclick="editform('form-9')" class="btn btn-primary submitdivExperience pull-right" style="padding-left: 5px !important;
							padding-right: 5px !important;
							padding-top: 0px !important;
							padding-bottom: 0px !important;
							background: rgb(214, 214, 214) !important;">
							<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
						</button>
					</div>
				</div>
				<div class="col-sm-6 col-sm-push-1">
							<!-- <div class="col-sm-3 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Profile Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Rubric Form</h5>
								<select class="form-control" multiple>
									<option value="volvo">Is resume professional and...</option>
									<option value="saab">Is resume professional and...</option>
									<option value="opel">Is resume professional and...</option>
									<option value="audi">Is resume professional and...</option>
								</select>
							</div> -->
							<div class="col-sm-2 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3 text-center" style="width: 99px;margin: 0px !important;
							padding: 0px !important;">
							<h5 class="box_heading">Profile Score</h5>
							<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-sm-3 text-center" style="width: 98px; margin: 0px !important;
						padding: 0px !important;" >
						<h5 class="box_heading">Interview Score</h5>
						<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-sm-4">
						<h5 class="box_heading">Interview Instructions</h5>
						<select class="form-control" multiple>
							<option value="volvo">Is resume professional and...</option>
							<option value="saab">Is resume professional and...</option>
							<option value="opel">Is resume professional and...</option>
							<option value="audi">Is resume professional and...</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- /Level 2 Section -->

		<!-- Level 2 Section -->
		<div class="level_2_row">
			<h3 class="level_2_heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Social Capital Profile</h3>
			<div class="row" id="form-10">
				<div class="col-sm-5 col-sm-push-1 profile_inputs">


					<div class="">
						<div>List Social Media Presence</div>
						<!-- <button>Select Social Media</button> -->
						<div class="form-group">
							<select class="form-control edit" style="width: 48%;float: left;">	
								<option value="">Select Social Media</option>
								<option value="">Select Social Media</option>
								<option value="">Select Social Media</option>
							</select>

								<!-- </div>
								<div class="form-group"> -->
									<input  type="text" class="form-control" id="date" value="" placeholder="Add Link Here..." name="">
									<!-- <textarea class="form-control edit" style="height: 25px !important;width: 48%;float: right;    margin-top: -20px;" placeholder="Add Link Here..."></textarea> -->
								</div>
								<!-- <input type="text" class="form-control" name=""> -->
							</div>
							
							<div class="sep"></div>
							<div class="form-group" id="">

								<input onclick="submitform('form-10')" type="button" class="btn btn-primary submitdivExperience pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">

								<button style="margin-left: 2px; background: rgb(214, 214, 214) !important;" class="btn btn-primary submitdivExperience pull-right">
									<i class="fa fa-plus" aria-hidden="true"></i>
								</button>

								<button onclick="editform('form-10')" class="btn btn-primary submitdivExperience pull-right" style="padding-left: 5px !important;
								padding-right: 5px !important;
								padding-top: 0px !important;
								padding-bottom: 0px !important;
								background: rgb(214, 214, 214) !important;">
								<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
							</button>
						</div>
							<!--<div class="form-group">
								<input type="submit" class="btn btn-primary pull-right" value="Submit" name="">
							</div>-->
						</div>
						<div class="col-sm-6 col-sm-push-1">
							<!-- <div class="col-sm-3 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Profile Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Rubric Form</h5>
								<select class="form-control" multiple>
									<option value="">Is resume professional and...</option>
									<option value="">Is resume professional and...</option>
									<option value="">Is resume professional and...</option>
									<option value="">Is resume professional and...</option>
								</select>
							</div> -->
							<div class="col-sm-2 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3 text-center" style="width: 99px;margin: 0px !important;
							padding: 0px !important;">
							<h5 class="box_heading">Profile Score</h5>
							<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-sm-3 text-center" style="width: 98px; margin: 0px !important;
						padding: 0px !important;" >
						<h5 class="box_heading">Interview Score</h5>
						<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-sm-4">
						<h5 class="box_heading">Interview Instructions</h5>
						<select class="form-control" multiple>
							<option value="volvo">Is resume professional and...</option>
							<option value="saab">Is resume professional and...</option>
							<option value="opel">Is resume professional and...</option>
							<option value="audi">Is resume professional and...</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- /Level 2 Section -->

		<!-- Level 2 Section -->
		<div class="level_2_row">
			<h3 class="level_2_heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> What's Unique About my Candidacy?</h3>
			<div class="row" id="form-11">
				<div class="col-sm-5 col-sm-push-1 profile_inputs full">
					<div class="">
						<small>Description of unique selling point (USP)</small>
						<div class="form-group">
						</div>
					</div>
					<div class="profile_inputs full">
						<small>Add text</small>
						<div class="form-group">
							<textarea class="form-control edit" style="height: 100px;" placeholder="Why i..."></textarea>
						</div>
					</div>
					<div class="">
						<small style="float: left;padding-left: 10px;">Add Audio</small>
						<div class="form-group">
							<!-- <input type="file" class="form-control" name=""> -->
							<input type="submit" id="employement_profile_demographic_submit" class="btn btn-primary pull-right" value="Upload" name="" />
						</div>
					</div>
					<div class="">
						<small style="padding-left: 10px;">Add video</small>
						<div class="form-group">
							<!-- <input type="file" class="form-control" name=""> -->
							<input type="submit" id="employement_profile_demographic_submit" class="btn btn-primary pull-right" value="Upload" name="" />

						</div>
					</div>
							<!-- <div class="profile_inputs full">
								<div class="form-group">
									<textarea class="form-control" style="height: 100px;" placeholder="Why i..."></textarea>
								</div>
							</div> -->
							<div class="sep"></div>
							<div class="form-group">
								<input style="margin-left: 6px;" onclick="submitform('form-11')" type="submit" class="btn btn-primary pull-right" value="Submit" name="">
								<button onclick="editform('form-11')" class="btn btn-primary submitdivExperience pull-right" style="padding-left: 5px !important;
								padding-right: 5px !important;
								padding-top: 0px !important;
								padding-bottom: 0px !important;
								background: rgb(214, 214, 214) !important;">
								<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
							</button>
						</div>
					</div>
					<div class="col-sm-6 col-sm-push-1">
							<!-- <div class="col-sm-3 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Profile Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Rubric Form</h5>
								<select class="form-control" multiple>
									<option value="volvo">Is resume professional and...</option>
									<option value="saab">Is resume professional and...</option>
									<option value="opel">Is resume professional and...</option>
									<option value="audi">Is resume professional and...</option>
								</select>
							</div> -->
							<div class="col-sm-2 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3 text-center" style="width: 99px;margin: 0px !important;
							padding: 0px !important;">
							<h5 class="box_heading">Profile Score</h5>
							<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-sm-3 text-center" style="width: 98px; margin: 0px !important;
						padding: 0px !important;" >
						<h5 class="box_heading">Interview Score</h5>
						<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-sm-4">
						<h5 class="box_heading">Interview Instructions</h5>
						<select class="form-control" multiple>
							<option value="volvo">Is resume professional and...</option>
							<option value="saab">Is resume professional and...</option>
							<option value="opel">Is resume professional and...</option>
							<option value="audi">Is resume professional and...</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- /Level 2 Section -->




		<!-- Level 2 Section -->
		<div class="level_2_row" id="work_experience0">
			<h3 class="level_2_heading"><i class="fa fa-briefcase" aria-hidden="true"></i> Work Experience</h3>
			<!-- <form action=""> -->
			<div class="row" id="form-3" >
						<!-- <span class="pull-left">
							<button class="btn btn-primary mr_right" id="add">+</button>
						</span> -->
						<div class="col-sm-5 col-sm-push-1 profile_inputs">
							<!-- <form action="" id="form-work_experience"> -->
							<h4 class="level_3_heading" style="display: inline">Company Name</h4>
							<input type="hidden" id="jb_users_id" name="userid">
							<input type="text" name="company_name[0]" class="form-control edit" placeholder="Enter Company Name...">
							<div class="company">
								<div class="form-group">
									<label for="from">From:</label>
									<input type="date" class="form-control edit" id="from_date" value="mm/dd/yyyy" name="from[0]">
								</div>
								<div class="form-group" id="till0">
									<label for="from">Till:</label>
									<input type="date" class="form-control edit" id="till_date" value="mm/dd/yyyy" name="till[0]">
								</div>
								<div class="form-group" id="present0">
									<label for="present">Present:</label>
									<input type="checkbox" id="present" class="edit" name="present[0]">
								</div>
								<div class="form-group"><label>Experience Position:</label>
									<textarea class="form-control edit" name="experience_position[0]" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."></textarea>
								</div>
							</div>
							<div class="sep"></div>
							<!--<div class="form-group" id="submitdiv0">
								<input type="button" class="btn btn-primary submitdivExperience pull-right" value="Add" name="" style="margin-bottom: 5px;padding: 0px 14px !important;">
							</div>-->
							<div class="form-group" >
								<input onclick="submitform('form-3')" type="button" class="btn btn-primary pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">

								<button style="margin-left: 2px; background: rgb(214, 214, 214) !important;" class="btn btn-primary pull-right">
									<i class="fa fa-plus" aria-hidden="true"></i>
								</button>

								<button onclick="editform('form-3')" class="btn btn-primary pull-right" style="padding-left: 5px !important;
								padding-right: 5px !important;
								padding-top: 0px !important;
								padding-bottom: 0px !important;
								background: rgb(214, 214, 214) !important;">
								<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
							</button>
						</div>
					</div>
					<div class="col-sm-6 col-sm-push-1">
							<!-- <div class="col-sm-3 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Profile Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Rubric Form</h5>
								<select class="form-control" multiple>
									<option value="">Is resume professional and...</option>
									<option value="">Is resume professional and...</option>
									<option value="">Is resume professional and...</option>
									<option value="">Is resume professional and...</option>
								</select>
							</div> -->
							<div class="col-sm-2 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3 text-center" style="width: 99px;margin: 0px !important;
							padding: 0px !important;">
							<h5 class="box_heading">Profile Score</h5>
							<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-sm-3 text-center" style="width: 98px; margin: 0px !important;
						padding: 0px !important;" >
						<h5 class="box_heading">Interview Score</h5>
						<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-sm-4">
						<h5 class="box_heading">Interview Instructions</h5>
						<select class="form-control" multiple>
							<option value="volvo">Is resume professional and...</option>
							<option value="saab">Is resume professional and...</option>
							<option value="opel">Is resume professional and...</option>
							<option value="audi">Is resume professional and...</option>
						</select>
					</div>
				</div>
				<!-- </form> -->
			</div>
		</div>
		<!-- /Level 2 Section -->

		<!-- Level 2 Section -->
				<!-- <div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Certification</h3>
					<div class="row">
						<div class="col-sm-5 col-sm-push-1 profile_inputs full">
							<div class="profile_inputs full">
								<h4 class="level_3_heading">Certification Title</h4>
								<div class="form-group">
									<label for="date">Date:  mm/dd/yyyy</label>
									<input style="display: none;" type="text" class="form-control" id="date" value="" name="">
								</div>
								<div class="form-group"><label>Certification Description:</label> 
									<textarea style="padding: 8px;" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."></textarea>
								</div>
								<div class="sep"></div>
								<h4 class="level_3_heading">Upload video/Voice</h4>
								<div class="form-group">
									<input type="file" class="form-control" name="">
								</div>
								<div class="sep"></div>
								<div class="form-group">
									<!-<input type="submit" class="btn btn-primary pull-right" value="Submit" name="">-->
									<!-- <input type="button" class="btn btn-primary submitdivExperience pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">

									<button style="margin-left: 2px; background: rgb(214, 214, 214) !important;" class="btn btn-primary submitdivExperience pull-right">
										<i class="fa fa-plus" aria-hidden="true"></i>
									</button>

									<button class="btn btn-primary submitdivExperience pull-right" style="padding-left: 5px !important;
										padding-right: 5px !important;
										padding-top: 0px !important;
										padding-bottom: 0px !important;
										background: rgb(214, 214, 214) !important;">
											<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
									</button>
								</div>
							</div>
						</div>
						
					</div>
				</div> -->
				<!-- /Level 2 Section -->

				<!-- Level 2 Section -->
				<!-- <div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Awards</h3>
					<div class="row">
						<div class="col-sm-5 col-sm-push-1 profile_inputs full">
							<div class="profile_inputs full">
								<h4 class="level_3_heading">Awards Title</h4>
								<div class="form-group">
									<label for="date">Date:  mm/dd/yyyy</label>
									<input style="display: none;" type="text" class="form-control" id="date" value="" name="">
								</div>
								<div class="form-group"><label>Awards Description:</label> 
									<textarea style="padding: 8px;" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."></textarea>
								</div> -->
								<!--<div class="sep"></div>
								<h4 class="level_3_heading">Upload video/Voice</h4>
								<div class="form-group">
									<input type="file" class="form-control" name="">
								</div>-->
								<!-- <div class="sep"></div>
								<div class="form-group"> -->

									<!--<input type="submit" class="btn btn-primary pull-right" value="Submit" name="">-->
									<!-- <input type="button" class="btn btn-primary submitdivExperience pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">

									<button style="margin-left: 2px; background: rgb(214, 214, 214) !important;" class="btn btn-primary submitdivExperience pull-right">
										<i class="fa fa-plus" aria-hidden="true"></i>
									</button>

									<button class="btn btn-primary submitdivExperience pull-right" style="padding-left: 5px !important;
										padding-right: 5px !important;
										padding-top: 0px !important;
										padding-bottom: 0px !important;
										background: rgb(214, 214, 214) !important;">
											<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
									</button>
								</div>
							</div>
						</div>
						
					</div>
				</div> -->
				<!-- /Level 2 Section -->



				<!-- Level 2 Section -->
				<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> References</h3>
					<div class="row" id="form-8">
						<div class="col-sm-5 col-sm-push-1 profile_inputs full">
							<div class="profile_inputs full">
								<div class="form-group">
									<input type="text" class="form-control edit" id="" value="Person Name" name="">
								</div>
								<div class="form-group">
									<input type="text" class="form-control edit" id="" value="Occupation" name="">
								</div>
								<div class="form-group">
									<input type="text" class="form-control edit" id="" value="Address" name="">
								</div>
								<div class="form-group">
									<input type="text" class="form-control edit" id="" value="Email" name="">
								</div>
								<div class="form-group">
									<input type="text" class="form-control edit" id="" value="Contact Number" name="">
								</div>
							</div>
							<div class="sep"></div>
							<div class="form-group">
								<!--<input type="submit" class="btn btn-primary pull-right" value="Submit" name="">-->
								<input onclick="submitform('form-8')" type="button" class="btn btn-primary submitdivExperience pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">

								<button style="margin-left: 2px; background: rgb(214, 214, 214) !important;" class="btn btn-primary submitdivExperience pull-right">
									<i class="fa fa-plus" aria-hidden="true"></i>
								</button>

								<button onclick="editform('form-8')" class="btn btn-primary submitdivExperience pull-right" style="padding-left: 5px !important;
								padding-right: 5px !important;
								padding-top: 0px !important;
								padding-bottom: 0px !important;
								background: rgb(214, 214, 214) !important;">
								<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
							</button>
						</div>
					</div>
					<div class="col-sm-6 col-sm-push-1">
							<!-- <div class="col-sm-3 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Profile Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Rubric Form</h5>
								<select class="form-control" multiple>
									<option value="volvo">Is resume professional and...</option>
									<option value="saab">Is resume professional and...</option>
									<option value="opel">Is resume professional and...</option>
									<option value="audi">Is resume professional and...</option>
								</select>
							</div> -->
							<div class="col-sm-2 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="Title" aria-hidden="true"></i>
							</div>
							<div class="col-sm-3 text-center" style="width: 99px;margin: 0px !important;
							padding: 0px !important;">
							<h5 class="box_heading">Profile Score</h5>
							<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star active" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-sm-3 text-center" style="width: 98px; margin: 0px !important;
						padding: 0px !important;" >
						<h5 class="box_heading">Interview Score</h5>
						<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="30%">
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star active" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-sm-4">
						<h5 class="box_heading">Interview Instructions</h5>
						<select class="form-control" multiple>
							<option value="volvo">Is resume professional and...</option>
							<option value="saab">Is resume professional and...</option>
							<option value="opel">Is resume professional and...</option>
							<option value="audi">Is resume professional and...</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<!-- /Level 2 Section -->





		<!-- Level 2 Section -->
				<!--<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Placement Details</h3>
					<div class="row">
						<div class="col-sm-5 col-sm-push-1 profile_inputs">
							<div class="profile_inputs">
								<div class="form-group">
									<label for="job_title">Job Title</label>
									<input type="text" class="form-control" id="job_title" value="8" name="">
								</div>
								<div class="form-group">
									<label for="last_name">Designation</label>
									<select class="form-control">
										<option>Executive</option>
									</select>
								</div>
								<div class="form-group">
									<label for="time_in">Time In</label>
									<input type="text" class="form-control" id="time_in" value="11:30 AM" name="">
								</div>
								<div class="form-group">
									<label for="time_out">Time Out</label>
									<input type="text" class="form-control" id="time_out" value="11:30 AM" name="">
								</div>
								<div class="form-group">
									<label for="hired_for">Hired for Project</label>
									<select class="form-control">
										<option>Bridges Development</option>
									</select>
								</div>
								<div class="form-group">
									<label for="age">Age</label>
									<input type="text" class="form-control" id="age" value="Age" name="">
								</div>
								<div class="form-group">
									<label for="salary">Salary</label>
									<input type="text" class="form-control" id="salary" value="60000" name="">
								</div>
								<div class="form-group">
									<label for="joining_date">Joining Date</label>
									<input type="date" class="form-control" id="joining_date" value="01/11/2016" name="">
								</div>
								<div class="form-group">
									<label for="employee_code">Employee Code</label>
									<input type="text" class="form-control" id="employee_code" value="1298129" name="">
								</div>
								<div class="form-group">
									<label for="attendance_id">Attendance ID</label>
									<input type="text" class="form-control" id="attendance_id" value="123" name="">
								</div>				
								<div class="sep"></div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary pull-right" value="Submit" name="">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-sm-push-1">
							<div class="col-sm-3 attachments">
								<h5 class="box_heading">Attachments</h5>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="" aria-hidden="true" data-original-title="Title"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="" aria-hidden="true" data-original-title="Title"></i>
								<i class="fa fa-file-text" data-toggle="tooltip" data-placement="bottom" title="" aria-hidden="true" data-original-title="Title"></i>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Profile Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Score</h5>
								<div class="p_score" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="30%">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-sm-3">
								<h5 class="box_heading">Interview Rubric Form</h5>
								<select class="form-control" multiple="">
									<option value="volvo">Is resume professional and...</option>
									<option value="saab">Is resume professional and...</option>
									<option value="opel">Is resume professional and...</option>
									<option value="audi">Is resume professional and...</option>
								</select>
							</div>
						</div>
					</div>
				</div>-->
				<!-- /Level 2 Section -->
			</div>
		</div>

		<div class="section_wrapper">
			<div class="level_1_heading">
				<div class="container">
					3.1.c Offer
				</div>
			</div>
			<div class="container">
				<!-- Level 2 Section -->
				<div class="level_2_row">

					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i><a target="_blank"
						href="<?php echo base_url()?>Caan/offer/<?php echo $id;?>" > Offer1  3.1.c.1</a></h3>
					<!--<div class="row">
						<div class="col-sm-4 col-sm-push-1 profile_inputs full">
							<div class="form-group">
								<label for="date"><a href="<?php //echo base_url()?>welcome/offermade/<?php //echo $row['emp_id']; ?>"> Offer</a></label>
							</div>
						</div>
					</div>-->
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> <a target="_blank" href="<?php echo base_url()?>Caan/offer/<?php echo $id;?>"> Offer2  3.1.c.2</a></h3>
					<!--<div class="row">
						<div class="col-sm-4 col-sm-push-1 profile_inputs full">
							<div class="form-group">
								<label for="date"><a href="<?php  ?>"> Re Offer</a></label>
							</div>
						</div>
					</div>-->
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> <a target="_blank" href="<?php echo base_url()?>Caan/offer/<?php echo $id;?>">  Offer3  3.1.c.3</a></h3>
					<!--<div class="row">
						<div class="col-sm-4 col-sm-push-1 profile_inputs full">
							<div class="form-group">
								<label for="date"><a href="<?php //echo base_url()?>welcome/offer/<?php //echo $row['emp_id']; ?>">  Offer Letter</a></label>
							</div>
						</div>
					</div>-->
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Offer Outcome  3.1.c.4</h3>
					
					<div class="row">
						<div class="col-sm-4 col-sm-push-1 profile_inputs full">
							<div class="form-group">
								<label for="date"><a href="<?php echo base_url()?>Caan/offer/<?php echo $id;?>">Offer Accepted</a><br>
									<a href="<?php echo base_url()?>Caan/offer/<?php echo $id;?>">Salary Accepted</a><br>
									<a href="<?php echo base_url()?>Caan/offer/<?php echo $id;?>">On date</a><br></label>
								</div>
							</div>
						</div>
						<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> <a href="<?php echo base_url()?>Caan/offer/<?php echo $id; ?>">  Offer Letter  3.1.c.5</a></h3>



						<div class="row">

							<div class="col-sm-6" style="margin-bottom: 20px;">
								<div class="">
									<?php if(file_exists('uploads/offerletters/'.$id.'.html')):?>
									<object data='<?php echo base_url()."uploads/offerletters/".$id.".html" ;?>' width="560" height="900"  type="text/html">
									</object>
									<div class="" style="padding-bottom:28px;padding-top: 5px;">
										<a  style="width: 50px;" onclick='printofferletter()'  class="btn btn-primary pull-right" >
											Print
										</a>
									</div>

								<?php endif;?> 
								<?php // echo base_url()."uploads/offerletters/".$id.".html" ;?>
							</div>

							<?php if(isset($user_details)){
								if ($user_details->upload_offerLetter)
									{?>
								<img src="<?php echo $user_details->upload_offerLetter; ?>" style="width: 100%;" alt="Offer Letter">
								<?php }}?>
								<div class="form-group" style="margin-top: 5px;">
									<form action="" method="POST" id="OfferLetterForm">
										<input type="hidden" name="userid" value="<?php echo $id; ?>">
										<!-- <input type="file" class="form-control" id="employement_profile_boarding_picture" name="employee_image"> -->
										<label for="emp_upload_offer" style="" class="btn btn-primary pull-right" >
											Upload
										</label>
										<input type="file" onchange="SaveFile(this)" id="emp_upload_offer" class="sr-only" name="upload_offer" />
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
				
			</div>

			<?php } ?>  <!-- Session userdata -->			
			<div class="section_wrapper" id="emp_profile_sec">
				<div class="level_1_heading " style="color:rgb(255,255,255) !important;">
					<div class="container">
						3.1.d  - Employment Profile
					</div>
				</div>
			
				<div class="container">
					<!-- Level 2 Section -->
			<?php if($this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR" || fhkCheckAuthPermission(["canViewProfiles", "canDoEverything"])){ ?>
					<section class="page">
						<div class="level_2_row ">
							<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Onboarding by Demographic 3.1.d.1</h3>
							<div class="row" id="form-14">
								<div class="user_thumbnail show-image-cnic" style="margin-top: 0px;">
									<a id="cv_btn_" class="btn btn-primary update remove-img" onclick="delbyfield('remove-img','upload_picture')"  data-toggle="modal" data-target="#delimgModal">x</i></a>
									<img class="remove-img" src="<?php if(isset($user_details->upload_picture)) echo $user_details->upload_picture;?>" width="120" height="120" alt="no img uploaded" style="border: 1px solid #ddd;" />
								</div>

								<div class="col-sm-5  profile_inputs w-445" style="padding-left: 19px;">
									<form action="<?php echo base_url();?>Employee_reg/form_14" id="personal_details" method="post"  enctype="multipart/form-data">

										<input type="hidden" name="id" value="<?php echo $id;?>">
										<div class="form-group">
											<label for="first_name">First Name</label>
											<input type="text" class="form-control edit" id="emp_firstname" 
											value="<?php if(isset($emp->fname)) echo $emp->fname; ?>" name="fname">
										</div>

										<div class="form-group">
											<label for="last_name">Last Name</label>
											<input type="text" class="form-control edit" id="emp_lastname" value="<?php if(isset($emp->lname)) echo $emp->lname; ?>" name="lname">
										</div>
										<div class="form-group">
											<label for="initials">Initials</label>
											<input type="text" class="form-control edit" id="emp_initials" value="<?php if(isset($user_details->initials)) echo $user_details->initials; ?>" name="initials">
										</div>
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" class="form-control edit" id="email" value="<?php if(isset($emp->email)) echo $emp->email; ?>" name="email">
										</div>
										<div class="form-group">
											<label for="initials">Password</label>
											<input type="text" class="form-control edit" id="emp_initials" value="<?php if(isset($emp->password)) echo $emp->password; ?>" name="password">
										</div>
										<div class="form-group">
											<!-- <php print_r($user_details); exit; ?> -->
											<label style="float: left;">Employee Image</label>
											<!-- <input type="file" class="form-control" id="employement_profile_boarding_picture" name="employee_image"> -->
											<input type="file" onchange="savePicture(this,'<?=$id?>')" id="emp_upload_picture" class="sr-only" name="upload_picture" />
											<label for="emp_upload_picture" class="btn btn-primary pull-right">
												Upload
											</label>
											
										</div>
										<div class="form-group">
											<label for="">CNIC</label>
											<input type="text" class="form-control edit" id="emp_cnic_no" value="<?php if(isset($user_details->cnic_no)) echo $user_details->cnic_no; ?>" name="cnic_no">
										</div>

										<div class="form-group">
											
											<label style="float: left;">CNIC Scan Front</label>
											<input type="file" id="emp_upload_cnic" onchange="savePicture(this,'<?=$id?>')"   name="upload_cnic" class="sr-only" />
											<label for="emp_upload_cnic" class="btn btn-primary pull-right"> Upload </label>
											
										</div>
										<div class="row" style="clear:both;margin-top: 5px;" id="upload_cnic_scan" align="right">

											<div class="col-sm-push-6 col-md-6 remove-cnic show-image-cnic" style="">
												<a id="cv_btn_" class="btn btn-primary update remove-cnic" onclick="delbyfield('remove-cnic','upload_cnic')"  data-toggle="modal" data-target="#delimgModal">x</a>
												<?php if(isset($user_details->upload_cnic)) {?>
												<a data-fancybox="gallery" href="<?php  echo $user_details->upload_cnic;  ?>">
													<img   src="<?php echo $user_details->upload_cnic;  ?>" width="100%" class="fifty" height="100%" alt="" />
												</a>
												
												<?php }?>
											</div>
										</div>
										<div class="form-group" style="margin-top: 3px;">
											
											<label style="float: left;">CNIC Scan Back</label>
											<input type="file" id="emp_upload_cnic_back" onchange="savePicture(this,'<?=$id?>')"   name="upload_cnic_back" class="sr-only" />
											<label for="emp_upload_cnic_back" class="btn btn-primary pull-right"> Upload </label>
											
										</div>
										<div class=" row" style="clear:both;margin-top: 5px;" id="upload_cnic_scan" align="right">

											<div class="col-sm-push-6 col-md-6 show-image-cnic remove-cnic-back" style="">
												<a id="cv_btn_" class="btn btn-primary update remove-cnic" onclick="delbyfield('remove-cnic-back','upload_cnic_back')"  data-toggle="modal" data-target="#delimgModal">x</a>
												<?php if(isset($user_details->upload_cnic_back)) {?>
												<a data-fancybox="gallery" href="<?php  echo $user_details->upload_cnic_back;  ?>">
													<img   src="<?php echo $user_details->upload_cnic_back;  ?>" width="100%" class="fifty" height="100%" alt="" />
												</a>
												
												<?php }?>
											</div>
										</div>
										<div class="form-group" style="margin-top: 3px;">
											<label for="home_address">Phone Number</label>
											<input type="text" class="form-control edit" id="emp_contact_no" value="<?php if(isset($user_details->contact_no)) echo $user_details->contact_no; ?>" name="contact_no">
										</div>
										<div class="form-group">
											<label style="float: left;">Previous Employee Payslip</label>
											<input type="file" onchange="savePicture(this,'<?=$id?>')" id="emp_upload_payslip_prev"  class="sr-only" name="upload_payslip_prev" />
											<label for="emp_upload_payslip_prev" class="btn btn-primary pull-right"> Upload </label><br />
											
										</div>
										<div class="row " style="clear:both;margin-top: 5px;" id="upload_cnic_scan" align="right">
											<div class="col-md-12 show-image-cnic remove-payslip-prev">
												<a id="cv_btn_" class="btn btn-primary update" onclick="delbyfield('remove-payslip-prev','upload_payslip_prev')"  data-toggle="modal" data-target="#delimgModal">x</i></a>

												<?php if(isset($user_details->upload_payslip_prev)) {?><a data-fancybox="gallery" href="<?php  echo $user_details->upload_payslip_prev;  ?>"><img src="<?php echo $user_details->upload_payslip_prev;  ?>" width="100%" height="100%"	 alt="" /></a>
												<?php }?>
											</div>
										</div>
										<div class="form-group" style="margin-top: 3px;">
											<textarea  class="form-control edit" name="payslip_remarks" id="emp_payslip_remarks" style="height: 100px;" placeholder="payslip remarks"><?php if(isset($user_details->payslip_remarks)) echo $user_details->payslip_remarks; ?></textarea>
										</div>
										<div class="form-group" style="margin-top: 3px;">
											<label style="float: left;" for="home_address">Reference Letter (Call Comments)</label>
											<input type="file" onchange="savePicture(this,'<?=$id?>')" id="emp_upload_reference_letter" class="sr-only" name="upload_reference_letter" />
											<label for="emp_upload_reference_letter" class="btn btn-primary pull-right"> Upload </label>
											<textarea  class="form-control edit" name="reference_letter_textarea" id="emp_reference_letter_textarea" style="height: 100px;" placeholder="Why i..."><?php if(isset($user_details->reference_letter_textarea)) echo $user_details->reference_letter_textarea; ?></textarea>
											<input style="margin-top: 3px;" name="reference_letter_input" type="text" class="form-control edit" id="emp_reference_letter_input" value="<?php if(isset($user_details->reference_letter_input)) echo $user_details->reference_letter_input;   ?>" name="">
										</div>
										<div class="page show-image-cnic remove-reference-letter" style="clear:both;margin-top: 5px;" id="" align="right">
											<a id="cv_btn_" class="btn btn-primary update" onclick="delbyfield('remove-reference-letter','upload_reference_letter')"  data-toggle="modal" data-target="#delimgModal">x</i></a>
											<?php if(isset($user_details->upload_reference_letter)) {?><a data-fancybox="gallery" href="<?php  echo $user_details->upload_reference_letter;  ?>">
											<img class="pull-right" id="myImg" src="<?php echo $user_details->upload_reference_letter;  ?>" width="100%" height="100%" alt="" /></a>
											<?php }?>
										</div>
										<div class="form-group" style="margin-top: 3px;">
											<label  style="float: left;">Copy of Original/Latest Degree</label>
											<!-- <input type="file" class="form-control" id="employement_profile_boarding_latest_degree" name="employement_profile_boarding_latest_degree"> -->
											<input type="file"  id="emp_upload_degree" onchange="savePicture(this,'<?=$id?>')" class="sr-only"  name="upload_degree" />
											<label for="emp_upload_degree" class="btn btn-primary pull-right"> Upload </label>
										
										</div>

										<div class="show-image-cnic remove-upload-degree" style="clear:both;margin-top: 5px;" id="" align="right">
											<a id="cv_btn_" class="btn btn-primary update" onclick="delbyfield('remove-upload-degree','upload_degree')"  data-toggle="modal" data-target="#delimgModal">x</i></a>
											<?php if(isset($user_details->upload_degree)) {?><a data-fancybox="gallery" href="<?php  echo $user_details->upload_degree;  ?>"><img id="myImg" src="<?php echo $user_details->upload_degree;  ?>" width="100%" height="100%" alt="" /></a>
											<?php }?>
										</div>
										<div class="form-group"  style="margin-top: 3px;">
											<label for="home_address">Home Address</label>
											<input type="text" class="form-control edit" id="emp_address" value="<?php if(isset($user_details->address)) echo $user_details->address; ?>" name="address">
										</div>

										<div class="form-group"  style="margin-top: 3px;">
											<label for="home_address">
												Home Address Google Map.
											</label>
											<input type="text" class="form-control edit" id="emp_address_g_map" value="<?php if(isset($user_details->address_g_map)) echo htmlentities(	$user_details->address_g_map); ?>" name="address_g_map">
										</div>
										<div class="" style="margin-top: 5px;">

											<div class=""  style="margin-left: 10px;">

												<?php if(isset($user_details->address_g_map)) {
													echo $user_details->address_g_map;
												}?>
											</div>

											<div class="form-group">
												<label for="dob">Date of Birth</label>
												<input type="date" class="form-control edit" id="emp_date_of_birth" value="<?php  if(isset($user_details->date_of_birth)) echo $user_details->date_of_birth; ?>" name="date_of_birth">
											</div>

											<div class="sep"></div>
											<div class="form-group">

												<button type="submit"  onclick="submitform('form-14'); "  id="submit_14" class="btn btn-primary submitdivExperience pull-right" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">Submit</button>

												<button type="button" onclick="javascript:void(0); editform('form-14')" class="btn btn-primary print-hide pull-right" style="padding-left: 5px !important;
												padding-right: 5px !important;
												padding-top: 0px !important;
												padding-bottom: 0px !important;
												background: rgb(214, 214, 214) !important;">
												<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
											</button>
										</div>
									</form>
								</div>

							</div>
						</div>
					</section>
					<?php } ?>
					<section class="page">
						<!-- /Level 2 Section -->
						<div class="level_2_row">
							<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Onboarding Emergency Profile 3.1.d.2</h3>
							<div class="row" id="form-15">
								<form id="form_15_form" action="<?php echo base_url();?>Employee_reg/form_15" method="post">
									<div class="col-sm-5 col-sm-push-1 profile_inputs" >
										<div class="form-group">
											<input type="hidden" name="id" value="<?php echo $id ;?>">
											<label for="">Emergency Contact Person Name*</label>
											<input type="text" class="form-control edit" placeholder="Emergency Contact Name" id="emergency_person_name" value="<?php if(isset($user_details->emergency_person_name)) echo $user_details->emergency_person_name;   ?>" name="emergency_person_name" reqiured>
										</div>
										<div class="form-group">
											<label for="">Emergency Contact Person Relation*</label>
											<input type="text" class="form-control edit" placeholder="Emergency Contact Relation" id="relationship_to_person" value="<?php if(isset($user_details->relationship_to_person)) echo $user_details->relationship_to_person;   ?>" name="relationship_to_person" required>
										</div>

										<div class="form-group">
											<label for="">Emergency Contact Person Address*</label>
											<input type="text" data-validation="required" class="form-control edit" id="emergency_person_address_1" value="<?php if(isset($user_details->emergency_person_address_1)) echo $user_details->emergency_person_address_1;   ?>" name="emergency_person_address_1" required>
										</div>
										<div class="form-group">
											<label for="">Emergency Contact Person Phone*</label>
											<input type="text" class="form-control edit" placeholder="Emergency Contact Phone" id="emergency_contact_1" value="<?php if(isset($user_details->emergency_contact_1)) echo $user_details->emergency_contact_1;   ?>" name="emergency_contact_1">
										</div>
										<div class="sep"></div>
										<div class="form-group">
											<!--<input type="submit" class="btn btn-primary pull-right" id="employement_profile_emergency_submit" value="Submit" name="" />-->
										<?php if($this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR" || fhkCheckAuthPermission(["canViewProfiles", "canDoEverything"])){ ?>
											<input id="submit-15" type="submit" onclick="submitform('form-15')" value="Submit" class="btn btn-primary submitdivExperience pull-right" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">
										
											<button  onclick="editform('form-15')" type="button" class="btn btn-primary print-hide pull-right" style="padding-left: 5px !important;
											padding-right: 5px !important;
											padding-top: 0px !important;
											padding-bottom: 0px !important;
											background: rgb(214, 214, 214) !important;">
											<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
											</button>
										<?php } ?>
									</div>
								</div>
							</div>
						</form>
					</div>
		

					<!-- Level 2 Section -->

					<div class="level_2_row ">
						<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Onboarding by Current Position 3.1.d.3</h3>
						<div class="row" id="form-16">
							<div class="col-sm-5 col-sm-push-1 profile_inputs">
								<?php if($this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR" || fhkCheckAuthPermission(["canViewProfiles", "canDoEverything"])) { ?>
								<form action="" id="form_16_form" method="post"  enctype="multipart/form-data">
									<div class="form-group">
										<input type="hidden" name="id" value="<?php echo $id;?>">
										<label for="project">Project</label>
							
									<div class="row text-form" id="emp_project" >
										
										<?php $hired_for=null;
										if(isset($user_project_title->project_id))
											$hired_for=$user_project_title->project_id;

										if (isset($user_project_title->project_id)) {
											foreach ($project as $item ) {
												if ($user_project_title->project_id == $item->id) {
													echo $item->project_title;
													echo '<input type="hidden" name="user_description_id" value="'.$user_project_title->id.'">';
													$hired_for=$user_project_title->project_id;
												}
											}	
										}
										    echo '<input type="hidden" name="hired_for_project" value="'.$hired_for.'">';
										?>
									</div>
								</div>

								<div class="form-group" style="margin-top: 3px;">
									<label for="on_boarding_title_by_project">Project Location</label>
									<textarea  name="project_location" id="emp_project_location" class="form-control mc edit" placeholder="Project Location."><?php if(isset($user_details->project_location)) echo $user_details->project_location; ?></textarea>
									<!-- <input type="text" class="form-control edit" id="" value="<?php  ?>" name="" > --> 
								</div>
								<div class="form-group" >
									<label for=""><a target="_blank" href="<?php echo base_url();?>Hr/titleByProject_view/<?php echo $id ;?>">Create Title by Project</a></label>
									<div class="row text-form" id="emp_job_tittle" >
										<?php if (isset($user_project_title->job_title)) {
											echo $user_project_title->job_title;
											echo '<input type="hidden" name="job_title" value="'.$user_project_title->job_title.'" >';

										}?>
									</div>
									<!-- <input type="text" class="form-control edit" id="" value="<?php  ?>" name=""> -->
								</div>
								<div class="form-group">
									<label for="">Level by Projects</label>
									<!-- <input type="text" readonly class="form-control edit" id="" > -->
									<div class="row text-form" id="emp_level" >
										<?php if (isset($user_project_title->level_id)) {
											foreach ($levels as $item ) {
												if ($user_project_title->level_id == $item->id) {
													echo $item->level_name;
												}
											}	
										}?>
									</div>
								</div>
							<?php } ?> <!-- Session UserData -->	
								<div class="form-group">

									<label for="">Job Description by Title </label>
									<p id="emp_job_description" class="" style="color: #555;background-color: #fff;" placeholder="Project Location."><?php if(isset($user_project_title))print_r( "<br><br>".$user_project_title->known_issues."<br><br>".$user_project_title->potential_issue."<br><br>".$user_project_title->skills_set."<br><br>".$user_project_title->relief."<br><br>".$user_project_title->overall_goals	."<br><br>".$user_project_title->particular_level); ?></p>
								</div>
								 <!-- Session User Type Bracket-->
								<?php if($this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR" || fhkCheckAuthPermission(["canViewProfiles", "canDoEverything"])){ ?>
								<div class="form-group">
									<label for="">Additional Responsibilities by Employee</label>
									<textarea class="form-control edit" name="add_responsibility" id="" cols="30" rows="10"><?php if (isset($user_details->add_responsibilities)) echo $user_details->add_responsibilities; ?></textarea>
								</div>
								<div class="form-group" style="margin-top: 3px;">
									<label for="">Additional Details 1</label>
									<input type="text" class="form-control edit" id="" name="add_on_1" value="<?php if(isset($user_details->add_on_1)) echo $user_details->add_on_1; ?>" >
									<!-- <select class="form-control edit" name="grade_id" >
										<option value="">select grade</option>
										<php foreach ($grades as $item) :?>
											<php if ($item->id == $user_details->grade_id): ?>
												<option value="<php echo $item->id ?>" selected > 
													<php echo $item->title ;?>
												</option>
											<php else :?>
												<option value="<php echo $item->id ?>">
													<php echo $item->title ;?>
												</option>
											<php endif;?>
										<php endforeach;?>
										</select> -->
									</div>
									<div class="form-group">
										<label for="">Additional Details 2</label>
										<input type="text" class="form-control edit" id="" name="add_on_2" value="<?php if(isset($user_details->add_on_2)) echo $user_details->add_on_2; ?>" >
									<!-- <select class="form-control edit" name="expertise_id" >
										<option value="">select subject cluster</option>
										<php foreach ($expertise as $item) :?>
											<php if ($item->id == $user_details->expertise_id): ?>
												<option value="<php echo $item->id ?>" selected > 
													<php echo $item->title ;?>
												</option>
											<php else :?>
												<option value="<php echo $item->id ?>">
													<php echo $item->title ;?>
												</option>
											<php endif;?>
										<php endforeach;?>
										</select> -->
									</div>
									<div class="form-group">
										<label for="">Additional Details 3</label>
										<input type="text" class="form-control edit" id="" name="add_on_3" value="<?php if(isset($user_details->add_on_3)) echo $user_details->add_on_3; ?>" >
									</div>
									<div class="form-group">
										<label for="">Additional Details 4</label>
										<input type="text" class="form-control edit" id="" name="add_on_4" value="<?php if(isset($user_details->add_on_4)) echo $user_details->add_on_4; ?>" >
									</div>
							<!-- <div class="form-group">
								<label for="job_description">Job Description (JD) by Cluster</label>
								<input type="text" class="form-control" id="job_description" value="<?php //echo $row['jod_desc'] ?>" name="">
							</div>
							<div class="form-group">
								<label for="expertise_cluster">Expertise - Cluster (school)</label>
								<input type="text" class="form-control" id="expertise_cluster" value="Expertise" name="">
							</div>
							<div class="form-group">
								<label for="expertise_approach">Expertise - Approach (school only)</label>
								<input type="text" class="form-control" id="expertise_approach" value="Expertise Approach" name="">
							</div>
							<div class="form-group">
								<label for="title_crew">Grade (School)</label>
								<select class="form-control" id="on_boarding_by_position_grade" value="<?php  ?>" name="on_boarding_by_position_grade">
									<option>choose one</option>
									<option value="Play Group">Play Group</option>
									<option value="Nursery">Nursery</option>
									<option value="Kinder Garten">Kinder Garten</option>
									<option value="One">One</option>
									<option value="Two">Two</option>
									<option value="Three">Three</option>
									<option value="Four">Four</option>
									<option value="Five">Five</option>
									<option value="Six">Six</option>
									<option value="Seven">Seven</option>
									<option value="O1">O1</option>
									<option value="O2">O2</option>
									<option value="O3">O3</option>
									<option value="A1">A1</option>
									<option value="A2">A2</option>
								</select>
							</div> -->

							<div class="form-group" style="margin-top: 5px;">
								<label for="">Suggested Salary</label>
								<input type="text" class="form-control edit" id="emp_suggested_salary" name="suggested_salary" 
								value="<?php if (isset($user_project_title->level_id)) {
									foreach ($levels as $item ) {
										if ($user_project_title->userid == $id) {
											echo $user_project_title->salary;
											break;
										}	
									}	
								}
								elseif(isset($user_details->suggested_salary)) echo $user_details->suggested_salary; ?>" placeholder="Suggested Salary"/>

							</div>
							<div class="form-group">
								<label for="">Actual Salary</label>
								<input type="text" class="form-control edit" id="emp_actual_salary" name="actual_salary" value="<?php if(isset($user_details->actual_salary)) echo $user_details->actual_salary; ?>" placeholder="Actual Salary">
							</div>
							<div class="form-group" style="width:72.5% !important;">
								<label for=""><a target="_blank" href="<?php echo base_url();?>Caan/benefits/<?php echo $id;?>">Applicable Benefits</a></label>

								<div class="row text-form" >
									<?php 
									$length = count($user_benefits); 
									$i=0;
									if ($length < 1) {
										echo "None.";
									}
									?>
									<?php foreach ($user_benefits as $item ) {
										echo $item->insurance;
										if ($i == $length-1) {
											echo ".";
										}
										else{
											echo " , ";
											echo " <br> ";
										}
										$i++;
									}?>
								</div>
								<!-- <input type="text" class="form-control" id="title_crew" value="" name=""> -->
							</div>
						<!-- 	<div class="form-group multi">
								<label for="shift" class="main">Shift* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<select class="form-control edit" name="shift_id" >
									<option value="">select shift</option>
									<php foreach ($shifts as $item) :?>
										<php if ($item->id == $user_details->shift_id): ?>
											<option value="<php echo $item->id ?>" selected > 
												<php echo $item->shift_title ;?>
											</option>
										<php else :?>
											<option value="<php echo $item->id ?>">
												<php echo $item->shift_title ;?>
											</option>
										<php endif;?>
									<php endforeach;?>
												
											
								</select>
							</div> -->
						<!-- 	<div class="form-group">
								<label for="salary">Break*</label>
								<div class="row text-form" >
									<php foreach($shifts as $item){
										if (!isset($user_details->shift_id)) {
											Break;
										}
										if($item->id == $user_details->shift_id){
											echo $item->shift_break_slot;
										}
									} ?>
								</div> -->
								
								<!-- <select id="on_boarding_by_position_break" value="<?php  ?>" name="on_boarding_by_position_break">
									<option>choose one</option>
									
												<option <?php  ?> value="<?php ?>"><?php ?></option>
									
											</select> -->
											<!-- </div> -->

											<div class="form-group">
												<label for="">Shift In*</label>
												<input type="time" class="form-control edit" style=" width: 150px;
												height: 17px;
												line-height: 1;
												float: right;" id="emp_time_in" value="<?php if(isset($user_details->time_in)) echo $user_details->time_in;   ?>" name="time_in" required>
											</div>

											<div class="form-group" style="margin-top: 3px;">
												<label for="">Shift Out*</label>
												<input type="time" class="form-control edit" style=" width: 150px;
												height: 17px;
												line-height: 1;
												float: right; " id="emp_time_out" value="<?php if(isset($user_details->time_out)) echo $user_details->time_out;   ?>" name="time_out" required>
											</div>
											<div class="form-group" style="margin-top: 3px;">
												<label for="">Break Start*</label>
												<input type="time" class="form-control edit" style=" width: 150px;
												height: 17px;
												line-height: 1;
												float: right; " id="emp_break_in" value="<?php if(isset($user_details->break_in)) echo $user_details->break_in;   ?>" name="break_in" required>
											</div>
											<div class="form-group" style="margin-top: 3px;">
												<label for="">Break End*</label>
												<input type="time" class="form-control edit" style=" width: 150px;
												height: 17px;
												line-height: 1;
												float: right; " id="emp_break_out" value="<?php if(isset($user_details->break_out)) echo $user_details->break_out;   ?>" name="break_out" required>
											</div>



											<div class="form-group">
												<label for="salary">
													<a target="_blank" href="<?php echo base_url(); ?>/attendance/Attendance_Sheet_final">
														Printable Employee Directory & Details*
													</a>
												</label>
											</div>


											<div class="form-group">
												<label for="date_employeed">Date Employeed*</label>
												<input type="date" id="emp_hired_on" class="form-control edit"  name="hired_on" value="<?php if(isset($user_details->hired_on)) echo $user_details->hired_on; ?>">
											</div>
	
											<div class="form-group">
												<label for="uniform">Uniform</label>
												<!--<input type="text" class="form-control" id="uniform" value="Uniform" name="">-->
												<select class="form-control edit"  name="uniform" style="padding-left: 3px !important;">
													<?php 
													if(isset($user_details->uniform)){
														if($user_details->uniform == "Yes"){
															echo "<option selected value='Yes'>Yes</option>";}
															else{
																echo "<option value='Yes'>Yes</option>";
															}
															if($user_details->uniform == "No"){
																echo "<option selected value='No'>No</option>";}
																else{
																	echo "<option value='No'>No</option>";
																}
															}
															else{
																echo "<option value='Yes'>Yes</option>";
																echo "<option value='No'>No</option>";

															}
															?>

														</select>
													</div>
													<div class="form-group">

														<label for="">
															<a target="_blank" href="http://bridges/bridgessms/Bridges_School_Software/operation/add-technology-item.php"> Equipment Provided </a></label>
														
														<div class="form-group" style="width:96% !important;">
															<div class="row text-form" style="margin-bottom: 4px;"> 
																<?php $i=1; foreach($equipments as $equipment){?>
																<?php echo $i." - "; ?>	
																<?php echo $equipment->title." <br> "; ?>
																<?php $i++; }?>
															</div>
															<!-- <label for="equipment">Equipment Provided</label> -->

														</div>
														<!-- <div class="<col>-md-3"> -->
<!-- 								<input type="text" class="form-control" id="equipment" value="Equipment" name="">
								<table class="table table-responsive">
								<php $i=0; $check=true; foreach ($equipments as $equipment) {
									if($i%2==0 ){
									
									?>
									<tr>
										<php } ?>
										<td>
											<input type="checkbox" name="equipment[]" value="<php echo $equipment->title; ?>">
										
											<label for=""><php echo $equipment->title;?></label>
										</td>
							<php 
							if($i%2!=0  ){
									
									?>
									</tr>
														
							<php } $i++;	} ?>
							</table>
							</div>
						-->							<div class="form-group">
						<label for="office">Office Keys</label>
						<input type="text" id="emp_office_text" class="form-control edit"  name="office" value="<?php if(isset($user_details->office)) echo $user_details->office; ?>">
								<!-- <select  name="office_id" class="form-control edit" >
									<option>Select office</option>
									<php foreach ($office as $item) :?>
										<php if ($item->id == $user_details->office_id): ?>
											<option value="<php echo $item->id ?>" selected > 
												<php echo $item->office_tittle ;?>
											</option>
										<php else :?>
											<option value="<php echo $item->id ?>">
												<php echo $item->office_tittle ;?>
											</option>
										<php endif;?>
									<php endforeach;?>												
									</select> -->
								</div>
								
							<div class="form-group">
								<label for="passwords"><a href="<?php echo base_url();?>Hr/AssignedPasswords">Create Logins</a></label>
								<div>
									<table class="table passwords">
											<?php foreach ($socials as $social) {
												?>
												<tr>
													<td>
														<label style='margin:left:10px;'><a href="<?php echo base_url();?>Hr/AssignedPasswords/<?php echo $social->id ?>"><?php echo $social->platform ?></a></label>	
													</td>
													<td style="text-align: left;">
														<label style='margin-left:120px;'><?php echo $social->username ?></label>	
													</td>
												</tr>
											<?php	} ?>
									</table>
								</div>
							</div>
					<!-- todo -->
								<div class="form-group">
									<label for="paperwork">Paperwork/Document/Softcopies</label>
									<textarea class="form-control edit" id="emp_paperwork_share"  name="paperwork_share" placeholder="Paperwork/Document/Softcopies"><?php if(isset($user_details->paperwork_share)) echo $user_details->paperwork_share; ?></textarea>
								</div>
								<div class="form-group">
									<label for="paperwork">Comments and Remarks</label>
									<textarea class="form-control edit" id="emp_remarks"  name="remarks" placeholder="Comments and Remarks" style="margin-bottom: 15px"><?php if(isset($user_details->remarks)) echo $user_details->remarks; ?></textarea>
								</div>
							<!-- <div class="form-group">
								<button>
									<a href="<?php  ?>">Print Hard Copy Record for Filing</a>
								</button>
							</div> -->
							<div class="form-group">
								<label>Print Hard Copy Record for Filing</label>
								<input type="button"  class="btn btn-primary pull-right" id="on_boarding_by_position_submit" value="Print"  name="" style="padding: 0px 12px !important; margin-top: 3px;" />
								
							</div>
							<div class="form-group">
								<label for="">
									<?php if (isset($user_details->upload_cnic)  && isset($user_details->upload_degree) && isset($user_details->upload_picture) && isset($user_details->emergency_person_name) && isset($user_details->relationship_to_person) && isset($user_details->emergency_person_address_1) && isset($user_details->emergency_contact_1) ) {?>
									<a href="<?php echo base_url()?>Employee_reg/bio_id/<?php echo $id; ?>">Create Biomet. Employee ID</a>
									<?php }else {?>
									<a href="javascript:void(0)">Create Biomet. Employee ID</a>
									<?php } ?>
									<br/>
									<?php if (isset($user_details->upload_cnic) && isset($user_details->upload_degree) && isset($user_details->upload_picture) && isset($user_details->emergency_person_name) && isset($user_details->relationship_to_person) && isset($user_details->emergency_person_address_1) && isset($user_details->emergency_contact_1) ) {?>
									<a href="<?php echo base_url()?>Employee_reg/Facultybio_id/<?php echo $id; ?>">Create Biomet. Admin Faculty ID</a>
									<?php }else {?>
									<a href="javascript:void(0)">Create Biomet. Employee ID</a>
									<?php }?>



								</label>
							</div>

							<div class="form-group">
								<label for="">
									<a href="<?php echo base_url()?>Employee_reg/temp_id/<?php echo $id; ?>">Create Temp Employee ID</a>
								</label>
							</div>

							<div class="form-group">
								<label for="">
									<?php if (isset($user_details->upload_cnic) && isset($user_details->upload_degree) && isset($user_details->upload_picture) && isset($user_details->emergency_person_name) && isset($user_details->relationship_to_person) && isset($user_details->emergency_person_address_1) && isset($user_details->emergency_contact_1) ) {?>
									<a href="<?php echo base_url()?>Employee_reg/folder_title/<?php echo $id; ?>">Create Folder Title</a>
									<?php }else {?>
									<a href="javascript:void(0)">Create Folder Title</a>
									<?php }?>
								</label>
							</div>
							<div class="form-group">
								<label for=""><a href="<?php echo base_url()?>Hr/label">Create Folder Label</a></label>
							</div>
							<div class="form-group">
								<label for=""><a href="#">Request for a New ID (Fine Rs.1000)</a></label>
							</div>

							<div class="sep"></div>
							<div class="form-group">
								
								<input id="submit-16" type="button" onclick="submitform('form-16')" class="btn btn-primary pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">


								<button type="button" onclick="editform('form-16')" class="btn btn-primary print-hide pull-right" style="padding-left: 5px !important;
								padding-right: 5px !important;
								padding-top: 0px !important;
								padding-bottom: 0px !important;
								background: rgb(214, 214, 214) !important;">
								<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
							</button>

						</div>
						<div class="sep"></div>
						   <!-- <php } ?> Session User Type Bracket-->
					</form>
				</div>
			</div>
		</div>
	</section>
	<div class="row bottom_headings">
		<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Employee Exit Date 3.1.d.4</h3>
		<div class="col-sm-5 col-sm-push-1 profile_inputs">

			<!-- <h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Re-Onboarding Employee 3.1.d.4</h3> -->
			<div class="clearfix">
			<b class="pull-left">
				Exit Date
			</b>
			<span class="pull-right"><?php if(isset($exit_procedure)) echo $exit_procedure->date_out; ?></span>
			</div>
		</div>
	</div>
	<!-- /Level 2 Section -->
		
	<!-- ReOnboarding Employee -->

<div class="row bottom_headings">
		<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Re-Onboarding Employee 3.1.d.5</h3>
		<div class="col-sm-5 col-sm-push-1 profile_inputs">
			<div class="form-group">
				 <?php
				 if(isset($employee_history_onboard)) 
				 foreach ($employee_history_onboard as $history) {
				 
				 ?>
				 	<table class="table" style="border:none">
				 		<thead>
				 			<tr>
				 				<th>Previous Title</th>
				 				<th>Previous Joining Date</th>
				 				<th>Previous Exit Date</th>
				 			</tr>

				 		</thead>
				 		<tbody>
				 			<tr>
				 				<td><?php echo $history->job_title; ?></td>
				 				<td><?php echo $history->hired_on; ?></td>
				 				<td><?php echo $history->date_out; ?></td>
				 			</tr>
				 		</tbody>
				 	</table>
				<?php } ?>
			</div>
			<form action="<?php echo base_url();?>Hr/ReOnboardAnEmployee/<?php echo $id;?>" id="on_boarding" method="post"  enctype="multipart/form-data">

				<div class="form-group">
					<label for="on_boarding_title_by_project">Project</label>
					<div class="row text-form" id="emp_project" >
						<?php
						 if (isset($user_project_title->project_id)) {
							foreach ($project as $item ) {
								if ($user_project_title->project_id == $item->id) {
									echo $item->project_title;
									echo '<input type="hidden" name="user_description_id" value="'.$user_project_title->id.'">';
								}
							}	
						}?>
					</div>
				</div>
				<div class="form-group" style="height: 42px">
					<label for="on_boarding_title_by_project">Project Location</label>
					<textarea  name="project_location" id="emp_project_location" class="form-control mc edit" placeholder="Project Location."><?php if(isset($user_details->project_location)) echo $user_details->project_location; ?></textarea>
				</div>
				<div class="form-group" style="width:92% !important;">
					<label><a href="<?php echo base_url();?>Hr/titleByProject_view/<?php echo $id ;?>">Create Title by Project</a></label>
					<div class="row text-form" id="emp_job_tittle" >
						<?php
						 if (isset($user_project_title->job_title)) {
							echo $user_project_title->job_title;
						}

						?>
						<input type="hidden" name="hired_for_project" value="<?php echo $user_project_title->project_id; ?>">
						<input type="hidden" name="hired_on" value="<?php echo $user_details->hired_on; ?>">
					</div>
				</div>
				<div class="form-group" style="width: 66% !important;">
					<label for="on_boarding_level_by_project">Level by Projects</label>
					<div class="row text-form" id="emp_level" >
						<?php if (isset($user_project_title->level_id)) {
							foreach ($levels as $item ) {
								if ($user_project_title->level_id == $item->id) {
									echo $item->level_name;
								}
							}	
						}?>
					</div>
				</div>
				
				<div class="form-group" style="margin-top: 5px;">
					<label for="">Suggested Salary</label>
					<input type="text" class="form-control edit" id="emp_suggested_salary" name="suggested_salary" 
					value="<?php if (isset($user_project_title->level_id)) {
						foreach ($levels as $item ) {
							if ($user_project_title->userid == $id) {
								echo $user_project_title->salary;
								break;
							}	
						}	
					}
					elseif(isset($user_details->suggested_salary)) echo $user_details->suggested_salary; ?>" placeholder="Suggested Salary"/>
				</div>
				<div class="form-group">
					<label for="title_crew">Actual Salary</label>
					<input type="text" class="form-control edit" id="emp_actual_salary" name="actual_salary" value="<?php if(isset($user_details->actual_salary)) echo $user_details->actual_salary; ?>" placeholder="Actual Salary">
				</div>
				<div class="form-group" style="width: 72% !important;">
					<label for=""><a target="_blank" href="<?php echo base_url();?>Caan/benefits/<?php echo $id;?>">Applicable Benefits</a></label>
					<div class="row text-form" >
						<?php 
						$length = count($user_benefits); 
						$i=0;
						if ($length < 1) {
							echo "None.";
						}
						?>
						<?php foreach ($user_benefits as $item ) {
							echo $item->insurance;
							if ($i == $length-1) {
								echo ".";
							}
							else{
								echo " , ";
								echo " <br> ";
							}
							$i++;
						}?>
					</div>
					<!-- <input type="text" class="form-control" id="title_crew" value="Title Crew" name=""> -->
				</div>
				<div class="form-group multi">
					<label for="shift" class="main">Shift In* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="time" class="form-control edit" style=" width: 150px;
												height: 17px;
												line-height: 1;
												float: right;" id="emp_time_in" value="<?php if(isset($user_details->time_in)) echo $user_details->time_in;   ?>" name="time_in" required>			<!--<label for="shift_regular" class="sub_label">Regular</label>
								<input type="radio" id="shift_regular" value="" name="shift">
								
								<label for="shift_part_1" class="sub_label">Part 1</label>
								<input type="radio" id="shift_part_1" value="" name="shift">
								
								<label for="shift_part_2" class="sub_label">Part 2</label>
								<input type="radio" id="shift_part_2" value="" name="shift">-->
				</div>
				<div class="form-group" style="margin-top: 3px;">
					<label for="">Shift Out*</label>
					<input type="time" class="form-control edit" style=" width: 150px;
					height: 17px;
					line-height: 1;
					float: right; " id="emp_time_out" value="<?php if(isset($user_details->time_out)) echo $user_details->time_out;   ?>" name="time_out" required>
				</div>
							
				<div class="form-group" style="margin-top: 3px;">
					<label for="">Break Start*</label>
					<input type="time" class="form-control edit" style=" width: 150px;
					height: 17px;
					line-height: 1;
					float: right; " id="emp_break_in" value="<?php if(isset($user_details->break_in)) echo $user_details->break_in;   ?>" name="break_in" required>
				</div>
				<div class="form-group" style="margin-top: 3px;">
					<label for="">Break End*</label>
					<input type="time" class="form-control edit" style=" width: 150px;
					height: 17px;
					line-height: 1;
					float: right; " id="emp_break_out" value="<?php if(isset($user_details->break_out)) echo $user_details->break_out;   ?>" name="break_out" required>
				</div>


							<div class="form-group">
								<a target="_blank" href="<?php echo base_url(); ?>/attendance/Attendance_Sheet_final">
														Printable Employee Directory & Details*
								</a>
								
							</div>
							<div class="form-group">
								<label for="date_employeed">Joining Date*</label>
								<input type="date" id="emp_hired_on" class="form-control edit"  name="hired_on" value="<?php if(isset($user_details->hired_on)) echo $user_details->hired_on; else echo date('m/d/Y');?>">
							</div>
							<div class="form-group">
								<label for="">
															<a target="_blank" href="http://bridges/bridgessms/Bridges_School_Software/operation/add-technology-item.php"> Equipment Provided </a></label>
														</div>
														<div class="form-group" style="width: 97% !important;">
															<div class="row text-form" style="margin-bottom: 4px;"> 
																<?php $i=1; foreach($equipments as $equipment){?>
																<?php echo $i." - "; ?>	
																<?php echo $equipment->title." <br> "; ?>
																<?php $i++; }?>
															</div>
															<!-- <label for="equipment">Equipment Provided</label> -->

														</div>
							<div class="form-group" style="width: 96% !important;">
								<label for="passwords"><a href="<?php echo base_url();?>Hr/AssignedPasswords">Create Logins</a></label>
								<div>
									<table class="table passwords" style="border:none;">
											<?php foreach ($socials as $social) {
												?>
												<tr>
													<td>
														<label style='margin:left:10px;'><a href="<?php echo base_url();?>Hr/AssignedPasswords/<?php echo $social->id ?>"><?php echo $social->platform ?></a></label>	
													</td>
													<td style="text-align: left;">
														<label style='margin-left:120px;'><?php echo $social->username ?></label>	
													</td>
												</tr>
											<?php	} ?>
									</table>
								</div>
							</div>
								<div class="form-group">
									<label for="paperwork">Paperwork/Document/Softcopies</label>
									<textarea class="form-control edit" id="emp_paperwork_share"  name="paperwork_share" placeholder="Paperwork/Document/Softcopies"><?php if(isset($user_details->paperwork_share)) echo $user_details->paperwork_share; ?></textarea>
								</div>
								<div class="form-group">
									<label for="paperwork">Comments and Remarks</label>
									<textarea class="form-control edit" id="emp_remarks"  name="remarks" placeholder="Comments and Remarks" style="margin-bottom: 15px"><?php if(isset($user_details->remarks)) echo $user_details->remarks; ?></textarea>
								</div>

							<!-- <div class="form-group">
								<button>
									<a href="<?php  ?>">Print Hard Copy Record for Filing</a>
								</button>
							</div> -->
							
							
							<!-- <div class="form-group">
								<label for="passwords"><a href="#">Request for a New ID (Fine Rs.1000)</a></label>
								
							</div> -->
							<div class="sep"></div>
							<div class="form-group">								
								<input type="submit" class="btn btn-primary submitdivExperience pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">
							</div>
					</form>
				</div>
			</div>


	<!--  /ReonBoardingClosing-->

	<!-- Document Submitted Div -->
<?php if ($this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "HR" || fhkCheckAuthPermission(["canViewProfiles", "canDoEverything"])) : ?>	
	<div class="level_2_row">
		<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Degree Submitted 3.1.d.6</h3>
		<div class="row">
			<div class="col-sm-5 col-sm-push-1 profile_inputs">
				<div class="form-group">
					

					<?php $degree_collection_letter=null;$checked=false;
					if(isset($user_details->degree_collection_letter)){

						$degree_collection_letter= $user_details->degree_collection_letter;
						$checked=true;
					}
					else
						$hrPolicyURL=base_url().'caan/degree_collection_letter/'.$id;

					?>

					<?php 
					if($checked) {?>
					<div class="row">
						<div class="col-sm-12 remove-CovenantEStaff show-image-cnic">
							<?php if(isset($user_details->degree_collection_letter) && $user_details->degree_collection_letter!=null):?>
							<a id="cv_btn_" class="btn btn-primary update " onclick="delbyfield('remove-CovenantEStaff','degree_collection_letter')"  data-toggle="modal" data-target="#delimgModal">x</i></a>
							<img src="<?php echo $user_details->degree_collection_letter; ?>" class="" width="100%" alt="">
						<?php endif;?>
					</div>
				</div>
				<?php } ?>	
				<label for="project_prom"><a target="_blank" href="<?php echo base_url().'caan/degree_collection_letter/'.$id;?>"> Degree Collection for Essential Staff*</a></label>
				<input type="checkbox"<?= $checked ? 'checked' : '' ?> disabled class="pull-right">
			</div>
			<div class="sep"></div>
			<div class="form-group">
				<form action="<?php echo base_url(); ?>Employee_reg/Savedegree_collection_letter" method="post" enctype="multipart/form-data" id="Savedegree_collection_letterForm">
					<span class="text-center">
						<input type="hidden" name="userid" value="<?php echo $id;?>">
						<input style="display: none;" type="submit" value="upload" />
						<input type="file" onchange="SavePicture(this,'<?=$id?>')" name="degree_collection_letter"  value="" class="sr-only"  id="degree_collection_letter" >
						<label for="degree_collection_letter" class="btn btn-primary pull-right" style="" > Upload  </label>
					</span>						
				</form>
			</div>
			</div>
		</div>
	</div>		
<?php endif; ?>
	<!-- /Document Submitted Div -->



	<div class="level_2_row">
		<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> HR & Security Policy 3.1.d.7</h3>
		<div class="row">
			<div class="col-sm-5 col-sm-push-1 profile_inputs">
				<div class="form-group">

					<?php $hrPolicyURL=null;$checked=false;
					if(isset($user_details->hr_policy)){

						$hrPolicyURL= $user_details->hr_policy;
						$checked=true;
					}
					else
						$hrPolicyURL=base_url().'caan/hrPolices/'.$id;

					?>

					<?php 
					if($checked) {?>
					<div class="row">
						<?php if(isset($user_details->hr_policy) && $user_details->hr_policy!= null):?>
						<div class="col-sm-12 remove-hr-policy show-image-cnic">
							<a id="cv_btn_" class="btn btn-primary update " onclick="delbyfield('remove-hr-policy','hr_policy')"  data-toggle="modal" data-target="#delimgModal">x</i></a>
							<img src="<?php echo $hrPolicyURL; ?>" class="" width="100%" alt="HR Policy">
						</div>
					<?php endif	;?>

				</div>
				<?php } ?>	


				<label for="project_prom"><a target="_blank" href="<?php echo base_url().'caan/hrPolices/'.$id;?>">Sign HR & Security Policy*</a></label>
				<!-- <input type="text" class="form-control" id="project_prom" value="HR & Security Policy" name=""> -->
			</div>
			<div class="sep"></div>
			<div class="form-group">
				<form  action="<?php echo base_url(); ?>Employee_reg/SaveHrPolicy" method="post" enctype="multipart/form-data" id="HrForm">
					<span class="text-center">
						<input type="hidden" name="userid" value="<?php echo $id;?>">
						<input style="display: none;" type="submit" value="upload" />
						<input type="file" name="uploadHr"  value="" class="sr-only"  id="HrUpload" >
						<label for="HrUpload" class="btn btn-primary pull-right" style="" > Upload  </label>

					</span>

				</form>
			</div>
			<!-- <input type="button" class="btn btn-primary pull-right" id="HrPrint" value="Print" name="" style="padding: 0px 14px !important;" /> -->

		</div>
	</div>
</div>

<?php //print_r($user_project_title->job_title);?>
<?php if ($this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "HR" || fhkCheckAuthPermission(["canViewProfiles", "canDoEverything"])) :?>
	<div class="level_2_row">
		<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Covenant for Essential Staff 3.1.d.8</h3>
		<div class="row">
			<div class="col-sm-5 col-sm-push-1 profile_inputs">
				<div class="form-group">

					<?php $CovenantEStaffURL=null;$checked=false;
					if(isset($user_details->CovenantEStaff)){

						$CovenantEStaffURL= $user_details->CovenantEStaff;
						$checked=true;
					}
					else
						$hrPolicyURL=base_url().'caan/CovenantEStaff/'.$id;

					?>

					<?php 
					if($checked) {?>
					<div class="row">
						<div class="col-sm-12 remove-CovenantEStaff show-image-cnic">
							<?php if(isset($user_details->CovenantEStaff) && $user_details->CovenantEStaff!=null):?>
							<a id="cv_btn_" class="btn btn-primary update " onclick="delbyfield('remove-CovenantEStaff','CovenantEStaff')"  data-toggle="modal" data-target="#delimgModal">x</i></a>
							<img src="<?php echo $user_details->CovenantEStaff; ?>" class="" width="100%" alt="">
						<?php endif;?>
					</div>
				</div>
				<?php } ?>	
				<label for="project_prom"><a target="_blank" href="<?php echo base_url().'caan/CovenantEStaff/'.$id;?>"> Covenant for Essential Staff*</a></label>
			</div>
			<div class="sep"></div>
			<div class="form-group">
				<form  action="<?php echo base_url(); ?>Employee_reg/SaveCovenantEStaff" method="post" enctype="multipart/form-data" id="CovenantEStaffForm">
					<span class="text-center">
						<input type="hidden" name="userid" value="<?php echo $id;?>">
						<input style="display: none;" type="submit" value="upload" />
						<input type="file" name="uploadCovenantEStaff"  value="" class="sr-only"  id="CovenantEStaffUpload" >
						<label for="CovenantEStaffUpload" class="btn btn-primary pull-right" style="" > Upload  </label>
					</span>						
				</form>
			</div>
		</div>
	</div>
</div>
<?php endif ;?>





<div class="level_2_row">
	<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Parking , Office Space 3.1.d.9</h3>
	<div class="row">
		<div class="col-sm-5 col-sm-push-1 profile_inputs">
			<div class="form-group">
				<label for="project_prom">Parking , Office Space*</label>
				<input type="text" class="form-control" id="project_prom" value="Parking , Office Space" name="">
			</div>
			<div class="sep"></div>
			<div class="form-group">
				<!--<input type="submit" class="btn btn-primary pull-right" value="Submit" name="" />-->
				<input type="button" class="btn btn-primary submitdivExperience pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">


				<button class="btn btn-primary print-hide pull-right" style="padding-left: 5px !important;
				padding-right: 5px !important;
				padding-top: 0px !important;
				padding-bottom: 0px !important;
				background: rgb(214, 214, 214) !important;">
				<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
			</button>
		</div>
	</div>
</div>
</div>

<div class="level_2_row">
	<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> 
		Induct Employee
		<span class="text-center">							
			<a target="_blank" href="<?php echo base_url();?>Employee_reg/emp_module_1/<?php echo $id;?>" class="btn btn-primary" style="margin-left: 329px; padding-left: 8px !important;
				padding-right: 8px !important;" > Induct  </a>
			</span>
		</h3>

	</div>
<?php } ?> <!-- Session USertype-->

</div>

<!-- Div added by me -->
</div>
					<!-- todo -->
<!-- Level 2 Section -->
<?php if($this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR" || fhkCheckAuthPermission(["canViewProfiles", "canDoEverything"])){ ?>
<div class="level_2_row">
	<div class="level_1_heading">
		<div class="container">
			Promote/Reposition 3.1.d
		</div>
	</div>
	<div class="row bottom_headings">
		<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Promote/Reposition 3.1.d.1</h3>
		<div class="col-sm-5 col-sm-push-1 profile_inputs">
			<div class="form-group">
				 <?php foreach ($employee_history as $history) {
				 ?>
				 	<table class="table" style="border:none">
				 		<thead>
				 			<tr>
				 				<th>Previous Title</th>
				 				<th>Promoted On</th>
				 			</tr>

				 		</thead>
				 		<tbody>
				 			<tr>
				 				<td><?php echo $history->job_title; ?></td>
				 				<td><?php echo $history->promoted_at; ?></td>
				 			</tr>
				 		</tbody>
				 	</table>
				<?php } ?>
			</div>
			<form action="<?php echo base_url();?>/Hr/PromoteAnEmployee/<?php echo $id;?>" id="on_boarding" method="post"  enctype="multipart/form-data">

				<div class="form-group">
					<label for="on_boarding_title_by_project">Project</label>
					<div class="row text-form" id="emp_project" >
						<?php if (isset($user_project_title->project_id)) {
							foreach ($project as $item ) {
								if ($user_project_title->project_id == $item->id) {
									echo $item->project_title;
									echo '<input type="hidden" name="user_description_id" value="'.$user_project_title->id.'">';
								}
							}	
						}?>
					</div>
					<input type="hidden" name="hired_for_project" value="<?php echo $user_project_title->project_id; ?>">
				</div>
				<div class="form-group" style="height: 42px">
					<label for="on_boarding_title_by_project">Project Location</label>
					<textarea  name="project_location" id="emp_project_location" class="form-control mc edit" placeholder="Project Location."><?php if(isset($user_details->project_location)) echo $user_details->project_location; ?></textarea>
				</div>
				<div class="form-group" style="width:92% !important;">
					<label><a href="<?php echo base_url();?>Hr/titleByProject_view/<?php echo $id ;?>">Create Title by Project</a></label>
					<div class="row text-form" id="emp_job_tittle" >
						<?php if (isset($user_project_title->job_title)) {
							echo $user_project_title->job_title;
							echo '<input type="hidden" name="job_title" value="'.$user_project_title->job_title.'">';
						}?>
					</div>

				</div>
				<div class="form-group" style="width: 66% !important;">
					<label for="on_boarding_level_by_project">Level by Projects</label>
					<div class="row text-form" id="emp_level" >
						<?php if (isset($user_project_title->level_id)) {
							foreach ($levels as $item ) {
								if ($user_project_title->level_id == $item->id) {
									echo $item->level_name;
								}
							}	
						}?>
					</div>
				</div>
<!-- 				<div class="form-group">

					<label for="on_boarding_level_by_project" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"><a href="#">Job Description by Title and Date</a></label>

				</div>
 -->
				
				<div class="form-group" style="margin-top: 5px;">
					<label for="">Suggested Salary</label>
					<input type="text" class="form-control edit" id="emp_suggested_salary" name="suggested_salary" 
					value="<?php if (isset($user_project_title->level_id)) {
						foreach ($levels as $item ) {
							if ($user_project_title->userid == $id) {
								echo $user_project_title->salary;
								break;
							}	
						}	
					}
					elseif(isset($user_details->suggested_salary)) echo $user_details->suggested_salary; ?>" placeholder="Suggested Salary"/>
				</div>
				<div class="form-group">
					<label for="title_crew">Actual Salary</label>
					<input type="text" class="form-control edit" id="emp_actual_salary" name="actual_salary" value="<?php if(isset($user_details->actual_salary)) echo $user_details->actual_salary; ?>" placeholder="Actual Salary">
				</div>
				<div class="form-group" style="width: 72% !important;">
					<label for=""><a target="_blank" href="<?php echo base_url();?>Caan/benefits/<?php echo $id;?>">Applicable Benefits</a></label>
					<div class="row text-form" >
						<?php 
						$length = count($user_benefits); 
						$i=0;
						if ($length < 1) {
							echo "None.";
						}
						?>
						<?php foreach ($user_benefits as $item ) {
							echo $item->insurance;
							if ($i == $length-1) {
								echo ".";
							}
							else{
								echo " , ";
								echo " <br> ";
							}
							$i++;
						}?>
					</div>
					<!-- <input type="text" class="form-control" id="title_crew" value="Title Crew" name=""> -->
				</div>
				<div class="form-group multi">
					<label for="shift" class="main">Shift In* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="time" class="form-control edit" style=" width: 150px;
												height: 17px;
												line-height: 1;
												float: right;" id="emp_time_in" value="<?php if(isset($user_details->time_in)) echo $user_details->time_in;   ?>" name="time_in" required>			<!--<label for="shift_regular" class="sub_label">Regular</label>
								<input type="radio" id="shift_regular" value="" name="shift">
								
								<label for="shift_part_1" class="sub_label">Part 1</label>
								<input type="radio" id="shift_part_1" value="" name="shift">
								
								<label for="shift_part_2" class="sub_label">Part 2</label>
								<input type="radio" id="shift_part_2" value="" name="shift">-->
				</div>
				<div class="form-group" style="margin-top: 3px;">
					<label for="">Shift Out*</label>
					<input type="time" class="form-control edit" style=" width: 150px;
					height: 17px;
					line-height: 1;
					float: right; " id="emp_time_out" value="<?php if(isset($user_details->time_out)) echo $user_details->time_out;   ?>" name="time_out" required>
				</div>
							
				<div class="form-group" style="margin-top: 3px;">
					<label for="">Break Start*</label>
					<input type="time" class="form-control edit" style=" width: 150px;
					height: 17px;
					line-height: 1;
					float: right; " id="emp_break_in" value="<?php if(isset($user_details->break_in)) echo $user_details->break_in;   ?>" name="break_in" required>
				</div>
				<div class="form-group" style="margin-top: 3px;">
					<label for="">Break End*</label>
					<input type="time" class="form-control edit" style=" width: 150px;
					height: 17px;
					line-height: 1;
					float: right; " id="emp_break_out" value="<?php if(isset($user_details->break_out)) echo $user_details->break_out;   ?>" name="break_out" required>
				</div>


							<div class="form-group">
													<a target="_blank" href="<?php echo base_url(); ?>/attendance/Attendance_Sheet_final">
														Printable Employee Directory & Details*
													</a>
								
							</div>
							<div class="form-group">
								<label for="date_employeed">Date Employeed*</label>
								<input type="date" id="emp_hired_on" class="form-control edit"  name="hired_on" value="<?php if(isset($user_details->hired_on)) echo $user_details->hired_on; ?>">
							</div>
							
							<!-- <div class="form-group">
								<label for="uniform">Uniform</label>
								<select class="form-control edit"  name="uniform" style="padding-left: 3px !important;">
													<php 
													if(isset($user_details->uniform)){
														if($user_details->uniform == "Yes"){
															echo "<option selected value='Yes'>Yes</option>";}
															else{
																echo "<option value='Yes'>Yes</option>";
															}
															if($user_details->uniform == "No"){
																echo "<option selected value='No'>No</option>";}
																else{
																	echo "<option value='No'>No</option>";
																}
															}
															else{
																echo "<option value='Yes'>Yes</option>";
																echo "<option value='No'>No</option>";

															}
															?>

								</select>
							</div>
 -->
							<div class="form-group">
								<label for="">
															<a target="_blank" href="http://bridges/bridgessms/Bridges_School_Software/operation/add-technology-item.php"> Equipment Provided </a></label>
														</div>
														<div class="form-group" style="width: 97% !important;">
															<div class="row text-form" style="margin-bottom: 4px;"> 
																<?php $i=1; foreach($equipments as $equipment){?>
																<?php echo $i." - "; ?>	
																<?php echo $equipment->title." <br> "; ?>
																<?php $i++; }?>
															</div>
															<!-- <label for="equipment">Equipment Provided</label> -->

														</div>
							<!-- </div> -->
							<!-- <div class="form-group">
								<label for="office">Office</label>
									<input type="text" id="emp_office_text" class="form-control edit"  name="office" value="<php if(isset($user_details->office)) echo $user_details->office; ?>">

							</div>
							 -->
							<div class="form-group" style="width: 96% !important;">
								<label for="passwords"><a href="<?php echo base_url();?>Hr/AssignedPasswords">Create Logins</a></label>
								<div>
									<table class="table passwords" style="border:none;">
											<?php foreach ($socials as $social) {
												?>
												<tr>
													<td>
														<label style='margin:left:10px;'><a href="<?php echo base_url();?>Hr/AssignedPasswords/<?php echo $social->id ?>"><?php echo $social->platform ?></a></label>	
													</td>
													<td style="text-align: left;">
														<label style='margin-left:120px;'><?php echo $social->username ?></label>	
													</td>
												</tr>
											<?php	} ?>
									</table>
								</div>
							</div>
								<div class="form-group">
									<label for="paperwork">Paperwork/Document/Softcopies</label>
									<textarea class="form-control edit" id="emp_paperwork_share"  name="paperwork_share" placeholder="Paperwork/Document/Softcopies"><?php if(isset($user_details->paperwork_share)) echo $user_details->paperwork_share; ?></textarea>
								</div>
								<div class="form-group">
									<label for="paperwork">Comments and Remarks</label>
									<textarea class="form-control edit" id="emp_remarks"  name="remarks" placeholder="Comments and Remarks" style="margin-bottom: 15px"><?php if(isset($user_details->remarks)) echo $user_details->remarks; ?></textarea>
								</div>

							<!-- <div class="form-group">
								<button>
									<a href="<?php  ?>">Print Hard Copy Record for Filing</a>
								</button>
							</div> -->
							<div class="form-group">
								<label>Print Hard Copy Record for Filing</label>
								
								<input type="button"  class="btn btn-primary pull-right" id="on_boarding_by_position_submit" value="Print"  name="" style="padding: 0px 12px !important; margin-top: 3px;" />
								<!-- <input type="text" class="form-control" id="passwords" value="Passwords" name=""> -->
							</div>
							<div class="form-group">
								<?php if (isset($user_details->upload_cnic) && isset($user_details->upload_payslip_prev) && isset($user_details->upload_degree) && isset($user_details->upload_picture) && isset($user_details->emergency_person_name) && isset($user_details->relationship_to_person) && isset($user_details->emergency_person_address_1) && isset($user_details->emergency_contact_1) ) {?>
								<a href="<?php echo base_url()?>Employee_reg/bio_id/<?php echo $id; ?>">Create Biomet. Employee ID</a>
								<?php }else {?>
								<a href="javascript:void(0)">Create Biomet. Employee ID</a>
								<?php }?>
								
							</div>
							<div class="form-group">
								<label for="passwords"><a href="#">Request for a New ID (Fine Rs.1000)</a></label>
								<!-- <input type="text" class="form-control" id="passwords" value="Passwords" name=""> -->
							</div>
							<div class="sep"></div>
							<div class="form-group">
								<!--<input type="submit" class="btn btn-primary pull-right" id="on_boarding_by_position_submit" value="Submit" name="" />-->
								<input type="submit" class="btn btn-primary submitdivExperience pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;">


								<button class="btn btn-primary submitdivExperience pull-right" style="padding-left: 5px !important;
								padding-right: 5px !important;
								padding-top: 0px !important;
								padding-bottom: 0px !important;
								background: rgb(214, 214, 214) !important;">
								<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
							</button>
						</div>
					</form>
				</div>
			</div>

			<!-- Level 2 Section -->
			<div class="row bottom_headings">
				<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Official Correspondence 3.1.c.4</h3>
				<div class="row">
					<div class="col-sm-5 col-sm-push-1 profile_inputs full" style="margin-left: 14px;">
						<div class="profile_inputs">
							<h4 class="level_3_heading">
								<a target="_blank" href="<?php echo base_url();?>Termination/Letter/<?php echo $id;?>">
									Letter Head
								</a>
							</h4>
						</div>
						<?php $letter_index=1; foreach ($user_letters as  $value) :?>

						<div class="form-group">
							<label for="" ><a target="_blank" href="<?php echo base_url()."uploads/termination/".$value->filename.".html"; ?>">
								<?php echo $letter_index++.".  ".$value->subject; ?>

							</a></label>

							<div class="row text-form" id="" style="margin-right: 12px !important; " >
								<?php echo $value->date; ?>
							</div>
						</div>
					<?php endforeach;?>

					<div class="form-group">
						<label for="" ><a href="<?php echo base_url();?>Termination/Letter/<?php echo $id;?>">Official Communication Letter</a></label>

						<div class="row text-form" id="" style="margin-right: 12px !important; " >
							<!-- 12-01-2017 -->
						</div>
					</div>

					<form action="" id="UploadletterFormImg" method="post"  enctype="multipart/form-data">
						<div class="form-group" style="margin-bottom: 8px;">
							<label for="User_letter_img" class="" style="float: left;">  Upload Letter Picture  </label>
							<input id="User_letter_img" type="file" name="userletterimg"  value="" class="sr-only"  onchange="uploadletterImg()" >
							<input type="hidden" name="id" value="<?php echo $id;?>">
							<input style="display: none;" type="submit" value="upload" />
							<label for="User_letter_img" class="btn btn-primary pull-right"> Upload </label>
						</div>								
					</form>
					<br>


					<div class="row" style="margin-top: 5px;">
						<div class="col-md-12 ">

							<?php foreach ($user_letter_img as $item) :?>
							<div class="show-image">
								<a id="cv_btn_<?php echo $item->id;?>" class="btn btn-primary update" onclick="delbyidletter(<?php echo $item->id;?>)" style="float: right;" data-toggle="modal" data-target="#delModalletter">x</a>

								<a id="letter_img_<?php echo $item->id;?>" data-fancybox="gallery" href="<?php  echo $item->pic_name; ?>"><img   src="<?php  echo $item->pic_name; ?>" width="100%" class="fifty" height="100%" style="height: 300px ; margin-top: 10px; margin-bottom: 10px; border: 1px solid #ddd;" alt="" /></a>
							</div>

						<?php endforeach; ?>
						<!-- Modal -->
						<div id="delModalletter" class="modal fade" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-body">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<p>Are sure you want to delete this picture.</p>
									</div>
									<div class="modal-footer">
										<form id="del_letter_img_form" action="<?php echo base_url();?>Employee_reg/DeleteletterImg" method="Post">
											<input type="hidden" name="id" id="del_letter_img_id">
											<button id="del_letter_img_form_btn" type="submit" class="btn btn-danger pull-right" data-dismiss="modal" >Delete</button>
										</form>
										<button id="model_close_letter_img" type="button" class="btn btn-default" data-dismiss="modal" style="margin-right:5px;">Cancel</button>

									</div>
								</div>

							</div>
						</div>
						<!-- model end -->

					</div>
				</div>
					<form action="" id="UploadletterResponseFormImg" method="post"  enctype="multipart/form-data">
						<div class="form-group" style="margin-bottom: 8px;">
							<label for="User_letter_Response_img" class="" style="float: left;">  Official Correspondence Response  </label>
							<input id="User_letter_Response_img" type="file" name="userletterResponseimg"  value="" class="sr-only"  onchange="uploadletterResponseImg()" >
							<input type="hidden" name="id" value="<?php echo $id;?>">
							<input style="display: none;" type="submit" value="upload" />
							<label for="User_letter_Response_img" class="btn btn-primary pull-right"> Upload </label>
						</div>								
					</form>
			<div class="row" style="margin-top: 5px;">
						<div class="col-md-12 ">

							<?php foreach ($user_letter_img as $item) :?>
							<div class="show-image">
								<a id="cv_btn_<php echo $item->id;?>" class="btn btn-primary update" onclick="delbyidletterResponse(<php echo $item->id;?>)" style="float: right;" data-toggle="modal" data-target="#delModalletter">x</a>

								<a id="letter_img_<?php echo $item->id;?>" data-fancybox="gallery" href="<?php  echo $item->response_image; ?>">
								<img   src="<?php  echo $item->response_image; ?>" width="100%" class="fifty" height="100%" style="height: 300px ; margin-top: 10px; margin-bottom: 10px; border: 1px solid #ddd;" alt="" />
							</a>
							</div>

						<?php endforeach; ?>
						<!-- Modal -->
<!-- 						<div id="delModalletter" class="modal fade" role="dialog">
							<div class="modal-dialog">

								< Modal content
								<div class="modal-content">
									<div class="modal-body">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<p>Are sure you want to delete this picture.</p>
									</div>
									<div class="modal-footer">
										<form id="del_letter_img_form" action="<php echo base_url();?>Employee_reg/DeleteletterImg" method="Post">
											<input type="hidden" name="id" id="del_letter_img_id">
											<button id="del_letter_img_form_btn" type="submit" class="btn btn-danger pull-right" data-dismiss="modal" >Delete</button>
										</form>
										<button id="model_close_letter_img" type="button" class="btn btn-default" data-dismiss="modal" style="margin-right:5px;">Cancel</button>

									</div>
								</div>

							</div>
						</div>
 -->						<!-- model end -->

					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- /Level 2 Section -->

	<!-- Level 2 Section -->
	<div class="row bottom_headings">
		<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Promote/Reposition Letter 3.1.c.5</h3>
		<div class="row">
			<div class="col-sm-5 col-sm-push-1 profile_inputs full"  style="margin-left: 14px;">
				<div class="form-group">
					<label for="date" style="margin-bottom: 10px !important;"><a target="_blank" href="<?php echo base_url()?>hr/promotionLetter/<?php echo $id; ?>">Promote/Reposition Letter</a></label>
				</div>
			</div>
		</div>
	</div>
	<!-- /Level 2 Section -->				
	<?php } ?>
	<!-- Level 2 Section -->
	<?php if($this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR" || fhkCheckAuthPermission(["canViewProfiles", "canDoEverything"])){ ?>
	
	<div class="level_2_row">

		<div class="level_1_heading">
			<div class="container">
				3.1.e Employment History
			</div>
		</div>
		<div class="row bottom_headings">
			<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Employment History by Dates 3.1.e.1</h3>
			<div class="row">
				<div class="col-sm-5 col-sm-push-1 profile_inputs"  style="margin-left: 14px;">
					<form action="" id="on_boarding" method="post"  enctype="multipart/form-data">
							<div class="form-group">
								<label for="on_boarding_title_by_project">Project</label>
								<input type="text" readonly class="form-control" id="on_boarding_title_by_project" value="<?php  ?>" name="">
							</div>
							<div class="form-group" style="height: 42px">
								<label for="on_boarding_title_by_project">Project Location</label>
								<input type="text" readonly class="form-control" id="on_boarding_title_by_project" value="<?php  ?>" name="" style="height: 38px;">
							</div>
							<div class="form-group">
								<label for="" ><a href="<?php echo base_url();?>Hr/titleByProject_view/<?php echo $id ;?>">Create Title by Project</a></label>
								<input type="text" readonly class="form-control" id="on_boarding_title_by_project" value="<?php  ?>" name="">
							</div>
							<div class="form-group">
								<label for="on_boarding_level_by_project">Level by Projects</label>
								<input type="text" readonly class="form-control" id="on_boarding_level_by_project" value="<?php  ?>" name="">
							</div>
							<div class="form-group">
								<!--<label for="job_description"><button type="submit">Job Description</button></label>-->
								<!-- <button type="button" class="btn btn-info btn-lg" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#myModal" >Job Description</button> -->
								<label for="on_boarding_level_by_project" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false"><a href="#">Job Description by Title and Date</a></label>
								<!--<textarea type="text" placeholder="Job Description (JD) by level" class="form-control" id="on_boarding_by_position_job_description" value="<?php //echo $row['jod_desc'] ?>" name="on_boarding_by_position_job_description"></textarea>-->
							</div>
							<div class="form-group">
								<label for="title_crew">Suggested Salary</label>
								<input type="hidden" class="form-control" id="on_boarding_by_position_selected_projectTitle" name="on_boarding_by_position_selected_projectTitle" value="<?php  ?>" placeholder="Suggested Salary"/>
								<input type="hidden" class="form-control" id="on_boarding_by_position_selected_project" name="on_boarding_by_position_selected_project" value="<?php  ?>" placeholder="Suggested Salary"/>
								<input type="text" class="form-control" readonly id="on_boarding_by_position_suggested_salary" name="on_boarding_by_position_suggested_salary" value="<?php  ?>" placeholder="Suggested Salary"/>
							</div>
							<div class="form-group">
								<label for="title_crew">Actual Salary</label>
								<input type="text" class="form-control" id="on_boarding_by_position_actual_salary" name="on_boarding_by_position_actual_salary" value="<?php  ?>" placeholder="Actual Salary">
							</div>
							<div class="form-group">
								<label for="title_crew"><a href="#">Applicable Benefits</a></label>
								<!-- <input type="text" class="form-control" id="title_crew" value="Title Crew" name=""> -->
							</div>
							<div class="form-group multi">
								<label for="shift" class="main">Shift* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<select id="on_boarding_by_position_shift" name="on_boarding_by_position_shift" value="<?php  ?>">
									<option>choose one</option>
									<option <?php  ?> value="<?php ?>"></option>

								</select>
								
							</div>
							<div class="form-group">
								<label for="salary">Break*</label>
								<select id="on_boarding_by_position_break" value="<?php  ?>" name="on_boarding_by_position_break">
									<option>choose one</option>
									<option <?php  ?> value="<?php ?>"><?php ?></option>
								</select>
							</div>
							<div class="form-group">
								<label for="salary">Printable Shift & Break sheet*</label>
								<input type="text" class="form-control" id="salary" value="60000" name="">
							</div>
							<div class="form-group">
								<label for="date_employeed">Date Employeed*</label>
								<input type="date" class="form-control" id="on_boarding_by_position_date_employed" name="on_boarding_by_position_date_employed" value="<?php  ?>">
							</div>
							
							<div class="form-group">
								<label for="uniform">Uniform</label>
								<!--<input type="text" class="form-control" id="uniform" value="Uniform" name="">-->
								<select class="form-control" id="on_boarding_by_position_uniform" value="<?php  ?>" name="on_boarding_by_position_uniform">
									<option <?php  ?> value="1">Yes</option>
									<option <?php  ?> value="0">No</option>
									
								</select>
							</div>
							<div class="form-group">
								<label for="equipment">Equipment Provided</label>
								<input type="text" class="form-control" id="equipment" value="Equipment" name="">
							</div>
							<div class="form-group">
								<label for="office">Office</label>
								<select id="on_boarding_by_position_office" name="on_boarding_by_position_office" value="<?php  ?>">
									<option>choose one</option>
									<option <?php  ?>  value=" ">#<?php  ?></option>

								</select>
							</div>
							<div class="form-group">
								<label for="passwords"><a href="<?php echo base_url();?>Hr/AssignedPasswords">Create Logins</a></label>
								<div>
									<table class="table passwords " style="border:none;">
											<?php foreach ($socials as $social) {
												?>
												<tr>
													<td>
														<label style='margin:left:10px;'><a href="<?php echo base_url();?>Hr/AssignedPasswords/<?php echo $social->id ?>"><?php echo $social->platform ?></a></label>	
													</td>
													<td style="text-align: left;">
														<label style='margin-left:120px;'><?php echo $social->username ?></label>	
													</td>
												</tr>
											<?php	} ?>
									</table>
								</div>
							</div>
							<div class="form-group">
								<label for="paperwork">Paperwork/Document/Softcopies</label>
								<textarea class="form-control" id="on_boarding_by_position_softcopies"  name="on_boarding_by_position_softcopies" placeholder="Paperwork/Document/Softcopies" style="height: 100px;"><?php  ?></textarea>
							</div>
							<div class="form-group">
								<label for="paperwork">Comments and Remarks</label>
								<textarea  style=" margin-bottom: 8px !important;" class="form-control" id="on_boarding_by_position_softcopies"  name="comments_and_remarks" placeholder="Paperwork/Document/Softcopies" style="height: 100px; margin-bottom: 15px"><?php  ?></textarea>
							</div>
							<div class="form-group" style="margin-top: 8px;">
								<label>Print Hard Copy Record for Filing</label>
								<input style="margin-top: 3px; width: 50px;" type="button" class="btn btn-primary pull-right" id="on_boarding_by_position_submit" value="Print" name="" />
							</div>
							<div class="form-group">
								<label for="passwords">
									<?php if (isset($user_details->upload_cnic) && isset($user_details->upload_payslip_prev) && isset($user_details->upload_degree) && isset($user_details->upload_picture) && isset($user_details->emergency_person_name) && isset($user_details->relationship_to_person) && isset($user_details->emergency_person_address_1) && isset($user_details->emergency_contact_1) ) {?>
									<a href="<?php echo base_url()?>Employee_reg/bio_id/<?php echo $id; ?>">Create Biomet. Employee ID</a>
									<?php }else {?>
									<a href="javascript:void(0)">Create Biomet. Employee ID</a>
									<?php }?>
								</label>
								
							</div>
							<div class="form-group">
								<label for="passwords"><a href="#">Request for a New ID (Fine Rs.1000)</a></label>
								<!-- <input type="text" class="form-control" id="passwords" value="Passwords" name=""> -->
							</div>
							<div class="sep"></div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary pull-right" id="on_boarding_by_position_submit" value="Submit" name="" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Level 2 Section --> 
		<?php } ?> <!--SEssion Usertype -->
		
		<!-- <php if($this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR"){ ?> -->
		<!-- <div class="level_2_row">

			<div class="level_1_heading">
				<div class="container">
					3.1.f Exit Procedure
				</div>
			</div>
			<div class="row bottom_headings">
				<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Exit Procedure 3.1.f.1</h3>
				<div class="row">
					
					
					<div class="col-sm-5 col-sm-push-1 profile_inputs" style="margin-left: 14px;">
					<div class="form-group " style="" >
						<label for="resignation_letter" style="color: #337ab7;">Resignation Letter</label>
						
						<php if (isset($id)) {?>
						<form  action="<php echo base_url(); ?>Employee_reg/Resignationletter" id="resignation_letter_form" method="post" enctype="multipart/form-data">
							<span class="text-center">
								<input type="hidden" name="userid" value="<php echo $id;?>">
								<input style="display: none;" type="submit" value="upload" />
								<input type="file" name="resignation_letter"  value="" class="sr-only"  id="resignation_letter" >
								<label for="resignation_letter" class="btn btn-primary pull-right" style="" > Upload  </label>

							</span>
							
						</form> <php } ?>

					</div>
					<br>
						<div class="">
							<php if(isset($user_details->resignation_letter)) {?>
								<a data-fancybox="gallery" href="<php  echo $user_details->resignation_letter;  ?>"><img src="<php echo $user_details->resignation_letter;  ?>" width="100%" height="100%"	 alt="" /></a>
							<php }?>
						</div>

					<br>
						<form action="" id="exit_employee" method="post"  enctype="multipart/form-data">
							<input type="hidden" name="userid" value="<php echo $id;?>">

							<div class="form-group">
								<label for="title_d">ID Card Collected</label>
								<select class="form-control" id="exit_id_card_collected" value="<?php //echo $row['id_card_collected	'] ?>" name="exit_id_card_collected">
									
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->id_card_collected =="1"?'selected':''; }?> value="1">Yes</option>
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->id_card_collected =="0"?'selected':''; }?> value="0">No</option>
									
								</select>
							</div>
							<div class="form-group">
								<label for="shift_d">Uniform Collected</label>
								<select class="form-control" id="exit_uniform_collected" name="exit_uniform_collected">
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->uniform_collected =="1"?'selected':''; }?> value="1">Yes</option>
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->uniform_collected =="0"?'selected':''; }?> value="0">No</option>
									
								</select>
							</div>
							<div class="form-group">
								<label for="salary_d">Equipment Acquired</label>
								<select class="form-control" id="exit_equipment_collected" value="<?php  ?>" name="exit_equipment_collected">
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->equipment_collected =="1"?'selected':''; }?> value="1">Yes</option>
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->equipment_collected =="0"?'selected':''; }?> value="0">No</option>
									
								</select>
								<div class="form-group" >
									<div style="margin-left: 15px;">
										<php $i=1; foreach($equipments as $equipment){?>
										<php echo $i." - "; ?>	
										<php echo $equipment->title." <br> "; ?>
										<php $i++; }?>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="date_current_d">Office Space Keys ETC.</label>
								<select class="form-control" id="exit_office_space_collected"  name="exit_office_space_collected">
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->office_spaceNkeys =="1"?'selected':''; }?> value="1">Yes</option>
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->office_spaceNkeys =="0"?'selected':''; }?> value="0">No</option>
									
								</select>
							</div>
							<div class="form-group">
								<label for="advance_loans">Advances/Loans Setted</label>
								<select class="form-control" id="exit_advances_collected" value="<?php  ?>" name="exit_advances_collected">
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->advance_loan =="1"?'selected':''; }?> value="1">Yes</option>
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->advance_loan =="0"?'selected':''; }?> value="0">No</option>
									
								</select>
							</div>
							<div class="form-group">
								<label for="securities">Securities</label>
								<select class="form-control" id="exit_securities_collected" value="<?php  ?>" name="exit_securities_collected">
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->securities =="1"?'selected':''; }?> value="1">Yes</option>
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->securities =="0"?'selected':''; }?> value="0">No</option>
									
								</select>
							</div>
							<div class="form-group">
								<label for="securities">Password</label>
								<select class="form-control" id="password_exit_collected"  name="password_exit_collected">
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->password =="1"?'selected':''; }?> value="1">Yes</option>
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->password =="0"?'selected':''; }?> value="0">No</option>
									
								</select>

							<div class="form-group" style="padding-left:0">
								<label for="passwords"><a href="<php echo base_url();?>Hr/AssignedPasswords">Change Passwords</a></label>
								<div>
									<table class="table">
											<php foreach ($socials as $social) {
												?>
												<tr>
													<td>
														<label style='margin:left:10px;'><a href="<php echo base_url();?>Hr/AssignedPasswords/<php echo $social->id ?>"><php echo $social->platform ?></a></label>	
													</td>
													<td>
														<label style='margin-left:120px;'><php echo $social->username ?></label>	
													</td>
												</tr>
											<php	} ?>
									</table>
								</div>
							</div>
							</div>
							<div class="form-group">
								<label for="paperwork_d">Paperwork/Softcopies/Documents</label>
								<select class="form-control" id="exit_paperwork_collected" value="<?php  ?>" name="exit_paperwork_collected">
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->paperwork =="1"?'selected':''; }?> value="1">Yes</option>
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->paperwork =="0"?'selected':''; }?> value="0">No</option>
									
								</select>
							</div>
							<div class="form-group">
								<label for="paperwork_d">Employment Data and Biometrics Archived</label>
								<select class="form-control" id="exit_biometrics_collected" value="<?php  ?>" name="exit_biometrics_collected">
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->emp_data_biometric =="1"?'selected':''; }?> value="1">Yes</option>
									<option <php if (isset($exit_procedure)) {echo $exit_procedure->emp_data_biometric =="0"?'selected':''; }?> value="0">No</option>
									
								</select>
							</div>
							<div class="form-group">
								<label for="project_prom">Date Out*</label>
								<input type="date" class="form-control" id="exit_date" value="<php if(isset($exit_procedure)) echo $exit_procedure->date_out;  ?>" name="date_out">
							</div>
							<div class="form-group">
								<label for="paperwork">Comments & Remarks</label>
								<php if (!isset($exit_procedure)) {?>
								<textarea style="padding: 8px ;" class="form-control" id="on_boarding_by_position_softcopies"  name="comments_and_remarks" placeholder="Paperwork/Document/Softcopies" style="height: 100px; margin-bottom: 15px"></textarea>
								<php } else { echo '<textarea style="padding: 8px ;" class="form-control" id="on_boarding_by_position_softcopies"  name="comments_and_remarks" placeholder="Paperwork/Document/Softcopies" style="height: 100px; margin-bottom: 15px">'.$exit_procedure->remarks.'</textarea>'; } ?>
							</div>
							<div class="sep"></div>
							<div class="form-group">
								<label for="">Verified By Director</label>
								<input type="checkbox" class="pull-right" style="width:4%;height: 20px;" value="1" <php if(isset($exit_procedure)) {if($exit_procedure->checkedByDirector==1) echo 'checked disabled'; else echo ''; } ?> name="checkedByDirector">

							</div>
							<br>
							<div class="form-group">
								<input type="submit" class="btn btn-primary pull-right" id="on_boarding_exit_employee" value="Submit" name="" />
							</div>
						</form>
						<div class="form-group">
							<label for="passwords"><a href="<php echo base_url()?>Employee_reg/settlementOffer/<php echo $id; ?>">Settlement Letter English</a></label>
							<br>
							<label for="passwords"><a href="<php echo base_url()?>Employee_reg/settlementOfferUrdu/<php echo $id; ?>">Settlement Letter Urdu</a></label>
							<php if (isset($id)) {?>
							<form  action="<php echo base_url(); ?>Employee_reg/saveSettlement" id="SettlementForm" method="post" enctype="multipart/form-data" id="HrForm">
								<span class="text-center">
									<input type="hidden" name="userid" value="<php echo $id;?>">
									<input style="display: none;" type="submit" value="upload" />
									<input type="file" name="SettlementUpload"  value="" class="sr-only"  id="SettlementUpload" >
									<label for="SettlementUpload" class="btn btn-primary pull-right" style="" > Upload  </label>

								</span>

							</form> <php } ?>

						</div>

					</div>
					<php if(isset($exit_procedure)) {
						if($exit_procedure->checkedByDirector==1){ ?>
						<div class="row" style="clear:both;margin-left:69px" id="" align="left">
							<div class="col-md-5 col-md-offset-1">
								<a  href="<php  echo base_url()?>SalarySlip/payslip/<?=$id?>?last=1" target="_blank">Final Payslip</a>
							
							</div>
						</div>
						<php } }	?>

					<div class="row" style="clear:both;margin-top: 5px;" id="" align="right">
						<div class="col-md-5 col-md-offset-2">
							<php if(isset($user_details->upload_settlement_letter)) {?><a data-fancybox="gallery" href="<php  echo $user_details->upload_settlement_letter;  ?>"><img src="<?php echo $user_details->upload_settlement_letter;  ?>" width="100%" height="100%"	 alt="" /></a>
							<php }?>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-5 col-sm-push-1 profile_inputs" style="margin-left: 14px;">

						<div class="">
								<php if(file_exists('uploads/experience_letter/'.$id.'.html')):?>
									<object data="<php echo base_url();?>uploads/experience_letter/<php echo $id; ?>.html" width="560" height="900"  type="text/html">
									</object>
						<div class="col-md-12" style="padding-bottom:28px;padding-top: 5px;">
								<a  style="width: 50px;" onclick='printexperience_letter(<?=$id?>)'  class="btn btn-primary pull-right" >
								Print
								</a>
						</div>

									<php else: 
										echo '<a style="margin-left: 18px;"  href="'.base_url().'Caan/Experience_letter/'.$id.'">Experience Letter</a>';
									 endif;?> 
									
						</div>
					</div>
					</div>



				</div>
				

			</div>
			


		</div>

	</div> -->
	<!-- <php } ?> -->
	<!-- /Level 2 Section -->

	<!-- /Level 2 Section -->
</div>
</div>
</div>
</div>
<!-- </h2> -->
</section>

</body>

<?php

$this->load->view('emp_module_2_view_final.php');
$this->load->view('emp_module_3_view_final.php');
$this->load->view('emp_module_4_view_final.php');
$this->load->view('emp_module_5_view_final.php');
?>


<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/emp_profile/js/jquery.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/emp_profile/js/bootstrap.min.js"></script>
<script>
  // var jsuser_details='<=json_encode((array)($user_details))?>';
  // jsuser_details=JSON.parse(jsuser_details);
  </script>

  <!-- AJax start -->
  <script type="text/javascript">

  $('#on_boarding_by_position_submit').on('click',function(e){
  	e.preventDefault();
			// console.log(jsuser_details);	
			<?php if (isset($user_details->upload_cnic)  && isset($user_details->upload_degree) && isset($user_details->upload_picture) ) :?>
			window.open("<?php echo $user_details->upload_cv;?>");
			// window.open("<? //php echo base_url()?>Hr/Opencv?upload_cv=<? // php echo $user_details->upload_cv;?>");
			window.open("<?php echo base_url()?>Hr/Opencnic?upload_cnic=<?php echo $user_details->upload_cnic;?>&upload_cnic_back=<?php echo $user_details->upload_cnic_back;?>");
			// window.open("<php echo base_url()?>Hr/OpenCnicBack?upload_cnic_back=<php echo $user_details->upload_cnic_back;?>");
			window.open("<?php echo base_url()?>Hr/UploadPrePayslip?upload_payslip_prev=<?php echo $user_details->upload_payslip_prev;?>");
				window.open("<?php echo base_url()?>Hr/Openrefrenceletter?upload_reference_letter=<?php echo $user_details->reference_letter_textarea;?>");
			window.open("<?php echo base_url()?>Hr/UploadDegree?upload_degree=<?php echo $user_details->upload_degree;?>");
			window.open("<?php echo base_url()?>Hr/UploadPicture?upload_picture=<?php echo $user_details->upload_picture;?>");
			window.open("<?php echo base_url()?>Hr/printOnboarding/<?php echo $id;?>");
			<?php endif;?>
		});




  $('#HrPrint').on('click',function(e){
  	e.preventDefault();
			// alert('hello');
			window.open("<php echo base_url().'caan/hrPolices/'.$user_details->userid.'.html';?>").print();
		});

		// printofferletter
		function printofferletter() {
			myWindow =	window.open("<?php  echo base_url()."uploads/offerletters/".$id.".html" ;?>");
			myWindow.focus();
			myWindow.print();
			// myWindow.close().wait(2000);
		}
		function printexperience_letter(id) {
			myWindow =	window.open("<?php  echo base_url()?>uploads/experience_letter/"+id+".html");
			myWindow.focus();
			myWindow.print();
			// myWindow.close().wait(2000);
		}



		//  Upload CV Ajax

		function uploadCV(){

			var formData = new FormData(document.getElementById("UploadCVForm"));
			console.log(formData);
			$.ajax({
				url:'<?php echo base_url(); ?>Employee_reg/SaveCV',
				type: 'POST',
				data: formData,
				async: false,
				success: function (data) {
					if (data.includes("File already exists")) {
						toastr.warning( data , "Warning");
					}
					else{
						toastr.success("File Upload Successfully");
						$('#cv_button').attr("href",data);
					}
					console.log(data)
				},
				cache: false,
				contentType: false,
				processData: false
			});
			return false;

		}

		// function savePicture(emp_id,userid){
			 
		// 	 input=document.getElementById(emp_id);
		// 	name=input.name;
		// 	//  if(!/(\.bmp|\.gif|\.jpg|\.JPEG|\.jpeg|\.png)$/i.test($("#"+emp_id).value)) {
		// 	// 	alert('INVALID FILE');
		// 	// 	document.getElementById(emp_id).value='';
		// 	// 	return false;
		// 	// } 
		// 	if (input.files && input.files[0]) { 
		// 	  var reader = new FileReader(); 
		// 	  reader.onload = function (e) {	
		// 	  // $('#img_loader').show();	
		// 	  // $('#photo_file').hide();	
		// 	  var data_file = e.target.result;
		// 	 	UploadFile(data_file,name,userid);
		// 	  }; 
		// 	  reader.readAsDataURL(input.files[0]); 
		// 	}      		
		// }
		// function UploadFile(data,name,userid){
		// 	 var filename=name;
		// 	 $.ajax({
		// 		 type: "POST",	
		// 		 url: "<=base_url()?>Employee_reg/saveEmployeeImages",							
		// 		 data: {'file_name':name,[name]:data,'id':userid},							
		// 		 cache: false,		
		// 		 success: function(responseText)	
		// 		 {		
		// 		 console.log(responseText);							
		// 		 //$('#img_loader').hide();
		// 		 //$('#image_child').attr('src', data).width('50').height('50');	
		// 		 alert('Image Uploaded');	
		// 		 }	
		// });  }



	//  Upload CV img Ajax

 $('#imageUploadForm').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));

// function savePicture(element_id,userid)
// 	{
// 	        $("").submit();
//     }


	function savePicture(obj,userid)
	{	

			// console.log(obj.files[0]);
			// var file_data = $('#'+element_id).prop('files')[0];   
			var Colname=obj.name;
			var data=obj.files[0]
			var formData = new FormData();
			formData.append('userid',userid);
			formData.append('name',Colname);
			formData.append([Colname],data);
			// console.log(formData);
			$.ajax({
				url:'<?php echo base_url(); ?>Employee_reg/saveEmployeeImages',
				type: 'POST',
				data: formData,
				async: false,
				success: function (data) {
					console.log(data);
					if (data.includes("File already exists")) {
						toastr.warning( data , "Warning");
					}
					else{
						toastr.success("File Upload Successfully");
						$('#cv_button').attr("href",data);
					}
					console.log(data);
				},
				cache: false,
				contentType: false,
				processData: false
			});
			return false;


		}

 
	function uploadCVImg(){
			// alert("sdasda");
			var formData = new FormData(document.getElementById("UploadCVFormImg"));
			console.log(formData);
			$.ajax({
				url:'<?php echo base_url(); ?>Employee_reg/SaveCVImg',
				type: 'POST',
				data: formData,
				async: false,
				success: function (data) {
					if (data.includes("File already exists")) {
						toastr.warning( data , "Warning");
					}
					else{
						toastr.success("File Upload Successfully");
						$('#cv_button').attr("href",data);
					}
					console.log(data)
				},
				cache: false,
				contentType: false,
				processData: false
			});
			return false;

		}

 //  Upload CV img Ajax

 function uploadletterImg(){
			// alert("sdasda");
			var formData = new FormData(document.getElementById("UploadletterFormImg"));
			console.log(formData);
			$.ajax({
				url:'<?php echo base_url(); ?>Employee_reg/SaveletterImg',
				type: 'POST',
				data: formData,
				async: false,
				success: function (data) {
					if (data.includes("File already exists")) {
						toastr.warning( data , "Warning");
					}
					else{
						toastr.success("File Upload Successfully");
						$('#cv_button').attr("href",data);
					}
					console.log(data)
				},
				cache: false,
				contentType: false,
				processData: false
			});
			return false;

		}
 function uploadletterResponseImg(){
			// alert("sdasda");
			var formData = new FormData(document.getElementById("UploadletterResponseFormImg"));
			console.log(formData);
			$.ajax({
				url:'<?php echo base_url(); ?>Employee_reg/SaveletterResponseImg',
				type: 'POST',
				data: formData,
				async: false,
				success: function (data) {
					if (data.includes("File already exists")) {
						toastr.warning( data , "Warning");
					}
					else{
						toastr.success("File Upload Successfully");
						$('#cv_button').attr("href",data);
					}
					console.log(data)
				},
				cache: false,
				contentType: false,
				processData: false
			});
			return false;

		}



		$('#HrUpload').on('change',function(){

			var formData = new FormData(document.getElementById("HrForm"));
			console.log(formData);
			$.ajax({
				url:'<?php echo base_url(); ?>Employee_reg/SaveHrPolicy',
				type: 'POST',
				data: formData,
				async: false,
				success: function (data) {
					if (data.includes("File already exists")) {
						toastr.warning( data , "Warning");
					}
					else{
						toastr.success("File Upload Successfully");

					}
					console.log(data)
				},
				cache: false,
				contentType: false,
				processData: false
			});
			return false;

		});
		$('#resignation_letter').on('change',function(){

			var formData = new FormData(document.getElementById("resignation_letter_form"));
			console.log(formData);
			$.ajax({
				url:'<?php echo base_url(); ?>Employee_reg/Resignationletter',
				type: 'POST',
				data: formData,
				async: false,
				success: function (data) {
					if (data.includes("File already exists")) {
						toastr.warning( data , "Warning");
					}
					else{
						toastr.success("File Upload Successfully");

					}
					console.log(data)
				},
				cache: false,
				contentType: false,
				processData: false
			});
			return false;

		});

		$('#CovenantEStaffUpload').on('change',function(){

			var formData = new FormData(document.getElementById("CovenantEStaffForm"));
			console.log(formData);
			$.ajax({
				url:'<?php echo base_url(); ?>Employee_reg/SaveCovenantEStaff',
				type: 'POST',
				data: formData,
				async: false,
				success: function (data) {
					if (data.includes("File already exists")) {
						toastr.warning( data , "Warning");
					}
					else{
						toastr.success("File Upload Successfully");

					}
					console.log(data)
				},
				cache: false,
				contentType: false,
				processData: false
			});
			return false;

		});
		$('#degree_collection_letter').on('change',function(){

			var formData = new FormData(document.getElementById("Savedegree_collection_letterForm"));
			console.log(formData);
			$.ajax({
				url:'<?php echo base_url(); ?>Employee_reg/Savedegree_collection_letter',
				type: 'POST',
				data: formData,
				async: false,
				success: function (data) {
					if (data.includes("File already exists")) {
						toastr.warning( data , "Warning");
					}
					else{
						toastr.success("File Upload Successfully");

					}
					console.log(data)
				},
				cache: false,
				contentType: false,
				processData: false
			});
			return false;

		});


// function printDiv() 
// {

//   var divToPrint=document.getElementById('emp_profile_sec');

//   var newWin=window.open('','Print-Window');

//   newWin.document.open();

//   newWin.document.write('<html>\
// 	<link rel="stylesheet" type="text/css" href="<php echo base_url()?>assets/emp_profile/css/style.css">\
//     <link rel="stylesheet" type="text/css" href="<php echo base_url()?>assets/emp_profile/css/bootstrap.min.css">\
// 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" integrity="sha256-xykLhwtLN4WyS7cpam2yiUOwr709tvF3N/r7+gOMxJw=" crossorigin="anonymous" /><style>@media print {\
//  textarea.form-control {\
//     line-height: 1;\
//     padding: 0;\
//     transition: all ease 0.3s;\
//     -webkit-transition: all ease 0.3s;\
//     -ms-transition: all ease 0.3s;\
//     padding-top: 6px;\
// } \
// 	.page {\
//             page-break-after: always;\
//         } img {	}\
//         @media print { img.fifty{}.make-grid(sm);\
// \
//     .visible-xs {\
//         .responsive-invisibility();\
//     }\
//     .hidden-xs {\
//         .responsive-visibility();\
//     }\
//     .hidden-xs.hidden-print {\
//         .responsive-invisibility();\
//     }\
//     .hidden-sm {\
//         .responsive-invisibility();\
//     }\
//     .visible-sm {\
//         .responsive-visibility();\
//     } .print-hide{display:none;} .level_1_heading{color:#fff !important;}\
//         	a[href]:after {\
//     content: none !important;\
//   }  }</style>\
// 	<body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

//   newWin.document.close();

//   setTimeout(function(){newWin.close();},10);

// }







// function submit_form_14(){
	$(document).ready(function(){
		// Get the modal

		$('#submit_14').on('click', function(e)
		{
		// check_target_dir = "http://bridges/bridgessms/Bridges_School_Software/taskmanager-new/uploads/";
		if (required_field( "#emp_firstname", "First Name is required")) {
			return false;
		}
		if (required_field( "#emp_lastname", "Last Name to person is required")) {
			return false;
		}				
		if (required_field( "#emp_initials", "Initials is required")) {
			return false;
		}
		if (required_field( "#emp_cnic_no", "CNIC is required")) {
			return false;
		}

		// emp_upload_cnic , upload_cnic
		check_upload_cnic = "<?php if (isset($user_details->upload_cnic)) echo $user_details->upload_cnic;?>";
		if (!check_upload_cnic && !$('#emp_upload_cnic').val() ) {
			toastr.error( "CNIC Front is required" , "Error");
			return false;
		}

		// temp remove
		 upload_cnic_back = "<php if (isset($user_details->upload_cnic_back)) echo $user_details->upload_cnic_back;?>";
		 if (!upload_cnic_back && !$('#emp_upload_cnic_back').val() ) {
		 	toastr.error( "CNIC Back is required" , "Error");
		 	return false;
		 }


		if (required_field( "#emp_contact_no", "Contact is required")) {
			return false;
		}
		//emp_upload_payslip_prev ,upload_payslip_prev
		check_upload_payslip_prev = "<?php  if (isset($user_details->upload_payslip_prev)) echo $user_details->upload_payslip_prev;?>";
		if (!check_upload_payslip_prev && !$('#emp_upload_payslip_prev').val() && !$('#emp_payslip_remarks').val()  ) {
			toastr.error( "Payslip is required" , "Error");
			return false;
		}

		// if (required_field( "#emp_payslip_remarks", "Payslip remarks is required")) {
		// 	return false;
		// }
		// emp_upload_reference_letter ,upload_reference_letter
		check_upload_reference_letter = "<?php  if (isset($user_details->upload_reference_letter)) echo $user_details->upload_reference_letter;?>";
		if (!check_upload_reference_letter && !$('#emp_upload_reference_letter').val() && !$('#emp_reference_letter_textarea').val() ) {
			toastr.error( "Reference letter is required" , "Error");
			return false;
		}


		// if (required_field( "#emp_reference_letter_textarea", "Reference letter is required")) {
		// 	return false;
		// }
		// emp_upload_degree ,upload_degree
		check_emp_upload_degree = "<?php   if (isset($user_details->upload_degree)) echo $user_details->upload_degree;?>";
		if (!check_emp_upload_degree && !$('#emp_upload_degree').val() ) {
			toastr.error( "Degree is required" , "Error");
			return false;
		}
		if (required_field( "#emp_address", "Address is required")) {
			return false;
		}
		if (required_field( "#emp_date_of_birth", "Date of Birth is required")) {
			return false;
		}
		// emp_upload_picture , upload_picture
		check_upload_picture = "<?php   if (isset($user_details->upload_picture)) echo $user_details->upload_picture;?>";
		if (!check_upload_picture && !$('#emp_upload_picture').val() ) {
			toastr.error( "Picture is required" , "Error");
			return false;
		}

		var formData = new FormData(document.getElementById("personal_details"));
		console.log(formData);
		$.ajax({
			url:'<?php echo base_url();?>Employee_reg/form_14',
			type: 'POST',
			data: formData,
			async: false,
			success: function (data) {
				if (data.includes("File already exists")) {
					toastr.warning( data , "Warning");
				}
				else{
					toastr.success("Data Upload Successfully");
					$('#cv_button').attr("href",data);
				}
				console.log(data);
			},
			cache: false,
			contentType: false,
			processData: false
		});
		return false;
	});

});
$("#emp_upload_offer").on('change',function(){

	var formData = new FormData(document.getElementById("OfferLetterForm"));
	console.log(formData);
	$.ajax({
		url:'<?php echo base_url();?>Employee_reg/uploadOffer',
		type: 'POST',
		data: formData,
		async: false,
		success: function (data) {
			if (data.includes("File already exists")) {
				toastr.warning( data , "Warning");
			}
			else{
				toastr.success("Data Upload Successfully");
				$('#cv_button').attr("href",data);
			}
			console.log(data);
		},
		cache: false,
		contentType: false,
		processData: false
	});
	return false;
});
$("#SettlementUpload").on('change',function(){
	alert("he");
	var formData = new FormData(document.getElementById("SettlementForm"));
	console.log(formData);
	$.ajax({
		url:'<?php echo base_url();?>Employee_reg/saveSettlement',
		type: 'POST',
		data: formData,
		async: false,
		success: function (data) {
			if (data.includes("File already exists")) {
				toastr.warning( data , "Warning");
			}
			else{
				toastr.success("Data Upload Successfully");
				$('#cv_button').attr("href",data);
			}
			console.log(data);
		},
		cache: false,
		contentType: false,
		processData: false
	});
	return false;
});


$(document).ready(function(){

			// form-15 ajax
			$('#submit-15').on('click', function(e)
			{
				e.preventDefault();
				
				if (required_field( "#emergency_person_name", "Emergency person name is required")) {
					return false;
				}
				if (required_field( "#relationship_to_person", "Relationship to person is required")) {
					return false;
				}				
				if (required_field( "#emergency_person_address_1", "Emergency person address is required")) {
					return false;
				}
				if (required_field( "#emergency_contact_1", "Emergency person contact is required")) {
					return false;
				}
				// alert("validation pass");

				var personal_details = $("#form_15_form").serialize();
				// console.log(personal_details);
				$.ajax(	
				{
					type:'POST',
					url:'<?php echo base_url(); ?>Employee_reg/form_15',
					data: personal_details,
					success: function(data)
					{
						toastr.success("Data Upload Successfully");
						console.log(data);
					}
				});
			});


			

			// del_cv_img_form
			$('#del_cv_img_form_btn').on('click', function(e)
			{
				e.preventDefault();

				var personal_details = $("#del_cv_img_form").serialize();
				// console.log(personal_details);
				$.ajax(	
				{
					type:'POST',
					url:'<?php echo base_url(); ?>Employee_reg/DeleteCVImg',
					data: personal_details,
					success: function(data)
					{
						toastr.success("Data Delete Successfully");
						id = $('#del_cv_img_id').val();
						$("#cv_img_"+id).remove();
						$("#cv_btn_"+id).remove();
						$('#model_close_cv_img').click();
						//$('#delModal').modal('toggle');
						console.log(data);
					}
				});
			});


			// del_cv_img_form
			$('#del_letter_img_form_btn').on('click', function(e)
			{
				e.preventDefault();

				var personal_details = $("#del_letter_img_form").serialize();
				// console.log(personal_details);
				$.ajax(	
				{
					type:'POST',
					url:'<?php echo base_url(); ?>Employee_reg/DeleteletterImg',
					data: personal_details,
					success: function(data)
					{
						toastr.success("Data Delete Successfully");
						id = $('#del_letter_img_id').val();
						$("#letter_img_"+id).remove();
						$("#letter_img_"+id).remove();
						$('#model_close_letter_img').click();
						console.log(data);
					}
				});
			});

			// form_16 ajax
			$('#submit-16').on('click', function(e)
			{
				e.preventDefault();

				if (required_html( "#emp_project", "Project is required")) {
					return false;
				}
				if (required_field( "#emp_project_location", "Project title is required")) {
					return false;
				}
				if (required_html( "#emp_job_tittle", "Job title is required")) {
					return false;
				}
				if (required_html( "#emp_level", "Level is required")) {
					return false;
				}
				// if (required_field( "#emp_job_description", "Job description is required")) {
				// 	return false;
				// }
				if (required_field( "#emp_suggested_salary", "Suggested salary is required")) {
					return false;
				}
				if (required_field( "#emp_actual_salary", "Actual salary is required")) {
					return false;
				}
				if (required_field( "#emp_actual_salary", "Actual salary is required")) {
					return false;
				}   

				if (required_field( "#emp_time_in", "Shift In is required")) {
					return false;
				}
				if (required_field( "#emp_time_out", "Time out is required")) {
					return false;
				}
				if (required_field( "#emp_break_in", "Break Start is required")) {
					return false;
				}
				if (required_field( "#emp_break_out", "Break End is required")) {
					return false;
				}


				// check_shift_id = "<php if (isset($user_details->shift_id)) echo $user_details->shift_id ?>";
				// if (!check_shift_id) {
				// 	toastr.error( "Shift is required" , "Error");
				// 	return false;
				// }
				if (required_field( "#emp_actual_salary", "Actual salary is required")) {
					return false;
				}

				if (required_field( "#emp_hired_on", "Date Employeed is required")) {
					return false;
				}

				// check_uniform = "<php echo $user_details->uniform ?>";
				// if (!check_uniform) {
				// 	toastr.error( "Uniform is not selected" , "Error");
				// 	return false;
				// }

				// check_office_id = "<php echo $user_details->office_id ?>";
				// if (!check_office_id) {
				// 	toastr.error( "Office is not selected" , "Error");
				// 	return false;
				// }
				// if (required_field( "#emp_office_text", "Office is required")) {
				// 	return false;
				// }

				// if (required_field( "#emp_login_share", "Logins are required")) {
				// 	return false;
				// }

				if (required_field( "#emp_paperwork_share", "Paperwork is required")) {
					return false;
				}


				if (required_field( "#emp_remarks", "Remarks is required")) {
					return false;
				}


				var personal_details = $("#form_16_form").serialize();
				// console.log(personal_details);
				$.ajax(	
				{
					type:'POST',
					url:'<?php echo base_url(); ?>Employee_reg/form_16',
					data: personal_details,
					success: function(data)
					{
						toastr.success("Data Upload Successfully");
						console.log(data);
					}
				});
			});

});
$('#on_boarding_exit_employee').on('click',function(e){
	e.preventDefault();
	var exit_data = $("#exit_employee").serialize();
				// console.log(exit_data);
				$.ajax(	
				{
					type:'POST',
					url:'<?php echo base_url(); ?>Employee_reg/exit_procedure',
					data: exit_data,
					success: function(data)
					{
						toastr.success("Data Upload Successfully");
						
					}
				});
			});

		// form validation
		function required_field( fieldId , message){
			// alert("done");
			var fielddata = $(fieldId ).val();
				// if (fielddata != undefined && fielddata != null) {
					if ($(fieldId ).val()) {

					// alert("not null");
					return false;
				}
				// alert(fielddata);
				toastr.error( message , "Error");					
				return true;
			}

			function required_html( fieldId , message){
				var fielddata = $(fieldId ).html();
				if ($(fieldId ).html()) {
					return false;
				}
				toastr.error( message , "Error");					
				return true;
			}

			function delbyid(id){
				$('#del_cv_img_id').val(id);	
			}

			function delbyidletter(id){
				$('#del_letter_img_id').val(id);	
			}function delbyidletter(id){
				$('#del_letter_img_id').val(id);	
			}


			function delbyfield(removeclass,fieldname){
				$('#del_field_name').val(fieldname);
				$('#remove_field_class').val(removeclass);
			}


	// del_img_form
	$('#del_img_form_btn').on('click', function(e)
	{
		e.preventDefault();
		removeclass =$('#remove_field_class').val();
		console.log(removeclass);
		var personal_details = $("#del_img_form").serialize();
		$.ajax(	
		{
			type:'POST',
			url:'<?php echo base_url(); ?>Employee_reg/DeleteImg',
			data: personal_details,
			success: function(data)
			{
				toastr.success("Data Delete Successfully");
				id = $('#del_cv_img_id').val();
				$("."+removeclass).remove();
			}
		});
		
	});


	</script>






</body>
</html>
