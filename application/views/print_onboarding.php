<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<title>Print-able Form</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/emp_profile/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/emp_profile/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/emp_profile/js/jquery.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" integrity="sha256-xykLhwtLN4WyS7cpam2yiUOwr709tvF3N/r7+gOMxJw=" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha256-3blsJd4Hli/7wCQ+bmgXfOdK7p/ZUMtPXY08jmxSSgk=" crossorigin="anonymous"></script>
	<!-- <title>Document</title> -->
	<style>
	.profile_inputs input[type="text"], .companies input[type="text"], .profile_inputs select, .profile_inputs input[type="date"], .profile_inputs input[type="time"]
    {
    	width: 200px !important;
    }

	.PrintViewSis
		{
			width:fit-content !important;
			text-align: left !important;
			padding-left:100px !important;

		}
		.level_1_heading
		{
			background-color: rgb(255, 187, 119) !important;
		    color: white !important;
		    font-size: 25px !important;
		    padding: 2px;
		    font-weight: bold;
		}
	  a[href]:after {
	    content: none !important;
	  }
	  select {
		-webkit-appearance: none;
		-moz-appearance: none;
		appearance: none;
		border: none; /* If you want to remove the border as well */
		background: none;
	}
	input[type=checkbox]
	{
	  /* Double-sized Checkboxes */
	  -ms-transform: scale(2); /* IE */
	  -moz-transform: scale(2); /* FF */
	  -webkit-transform: scale(1); /* Safari and Chrome */
	  -o-transform: scale(2); /* Opera */
	  padding: 10px;
	}

	/* Might want to wrap a span around your checkbox text */
	.checkboxtext
	{
	  /* Checkbox text */
	  font-size: 110%;
	  display: inline;
	}
	label {
	    display: inline-block;
	    max-width: 100%;
	    margin-bottom: 5px;
	    font-weight: 700;
	    width: 45%;
	}
	@media print 
		{
		    .form-group{}
		    .col-sm-6{width: 75% !important;}
		    .level_2_heading{border-bottom: none !important;padding-bottom: 1px !important; margin-top: 1px !important;padding: 3px !important;}
		    .sep 
		    	{
				    width: 100%;
				    display: block;
				    clear: both;
				    height: 0px !important;
				    border-bottom: none !important;
				    margin: 0px 0 !important;
				}
				.level_2_row 
					{
					    padding-bottom: 0px !important;
					    border-bottom: none !important;
					}
				.user_thumbnail 
					{
					    margin-top: 0px !important;
					    width: 0px !important;
					    float: left;
					    padding: 0 0px;
					    display: none !important;
					}
				p {margin: 0 0 0px !important;}
 	    }
	</style>
</head>
<body>


		<div class="section_wrapper" id="emp_profile_sec">
			<div class="level_1_heading">
				<div class="container">
					3.1.F  - Employment Profile
				</div>
			</div>
			<div class="container">
				<!-- Level 2 Section -->
				<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Onboarding by Demographic 3.1.d.1</h3>
					<div class="row" id="form-14">
						<div class="col-sm-6 col-sm-push-1 profile_inputs">
						<div class="user_thumbnail">
							<img src="heelo.png" width="120" alt="" />
						</div>
								<!-- <input disabled type="hidden" name="id" value="<?php echo $id;?>"> -->
								<div class="form-group">

																<input  type="checkbox" name="">
                                   <label for="first_name">First Name</label>
								<input disabled  type="text" class="form-control edit" id="emp_firstname"
								value="<?php if(isset($emp->fname)) echo $emp->fname; ?>" name="fname">
							</div>

							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="last_name">Last Name</label>
								<input disabled type="text" class="form-control edit" id="emp_lastname" value="<?php if(isset($emp->lname)) echo $emp->lname; ?>" name="lname">
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="initials">Initials</label>
								<input disabled type="text" class="form-control edit" id="emp_initials" value="<?php if(isset($user_details->initials)) echo $user_details->initials; ?>" name="initials">
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="cnic">CNIC</label>
								<input disabled type="text" class="form-control edit" id="emp_cnic_no" value="<?php if(isset($user_details->cnic_no)) echo $user_details->cnic_no; ?>" name="cnic_no">
							</div>

							<div class="form-group">
													<input  type="checkbox" name="">
                                   <label style="">CNIC Scan</label>

							</div>
							<div class="form-group" style="">
													<input  type="checkbox" name="">
                                   <label for="home_address">Phone Number</label>
								<input disabled type="text" class="form-control edit" id="emp_contact_no" value="<?php if(isset($user_details->contact_no)) echo $user_details->contact_no; ?>" name="contact_no">
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label style="">Previous Employee Payslip</label>

							</div>
							<div class="form-group" style="margin-top: 0;">
								<p  class=" edit" style="float: right;background: #7777771f;margin-left: 50px !important;" name="payslip_remarks" id=""  placeholder="payslip remarks"><?php if(isset($user_details->payslip_remarks)) echo $user_details->payslip_remarks; ?></p>
							</div>
							<div class="form-group" style="">
																<input  type="checkbox" name="">
                                   <label style="" for="home_address">Reference Letter (Call Comments)</label>

								<p  class="edit" style="float: right;width: 200px;background: #7777771f;" name="reference_letter_p" id="emp_reference_letter_p"  placeholder="Why i..."><?php if(isset($user_details->reference_letter_textarea)) echo $user_details->reference_letter_textarea; ?></p>

							</div>
							<div class="form-group" style="">
																<input  type="checkbox" name="">
                                   <label  style="">Copy of Original/Latest Degree</label>
								<!-- <input disabled type="file" class="form-control" id="employement_profile_boarding_latest_degree" name="employement_profile_boarding_latest_degree"> -->

							</div>
							<div class="form-group"  style="">
																<input  type="checkbox" name="">
                                   <label for="home_address">Home Address</label>
								<input disabled type="text" class="form-control edit" id="emp_address" value="<?php if(isset($user_details->address)) echo $user_details->address; ?>" name="address">
							</div>


							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="dob">Date of Birth</label>
								<input disabled type="date" class="form-control edit" id="emp_date_of_birth" value="<?php  if(isset($user_details->date_of_birth)) echo $user_details->date_of_birth; ?>" name="date_of_birth">
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label style="">Employee Image</label>
								<!-- <input disabled type="file" class="form-control" id="employement_profile_boarding_picture" name="employee_image"> -->

							</div>
							<div class="sep"></div>
							<div class="form-group">


							</div>

						</div>

					</div>
				</div>




				<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Onboarding Emergency Profile 3.1.d.2</h3>
					<div class="row" id="form-15">
						<div class="col-sm-6 col-sm-push-1 profile_inputs">
							<div class="form-group">
								<input disabled type="hidden" name="id" value="<?php echo $id ;?>">
																<input  type="checkbox" name="">
                                   <label for="">Emergency Contact Person Name*</label>
								<input disabled type="text" class="form-control edit PrintViewSis" placeholder="Emergency Contact Name" id="" value="<?php if(isset($user_details->emergency_person_name)) echo $user_details->emergency_person_name;   ?>" name="emergency_person_name">
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="">Emergency Contact Person Relation*</label>
								<input disabled type="text" class="form-control edit PrintViewSis" placeholder="Emergency Contact Relation" id="" value="<?php if(isset($user_details->relationship_to_person)) echo $user_details->relationship_to_person;   ?>" name="relationship_to_person">
							</div>

							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="">Emergency Contact Person Address*</label>
								<input disabled type="text" class="form-control edit PrintViewSis" placeholder="Emergency Contact Address" id="" value="<?php if(isset($user_details->emergency_person_address_1)) echo $user_details->emergency_person_address_1;   ?>" name="emergency_person_address_1">
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="">Emergency Contact Person Phone*</label>
								<input disabled type="text" class="form-control edit PrintViewSis" placeholder="Emergency Contact Phone" id="" value="<?php if(isset($user_details->emergency_contact_1)) echo $user_details->emergency_contact_1;   ?>" name="emergency_contact_1">
							</div>
							<div class="sep"></div>
							<div class="form-group">
								<!--<input disabledtype="submit" class="btn btn-primary pull-right" id="employement_profile_emergency_submit" value="Submit" name="" />-->


							</div>
						</div>
					</div>

				</div>




					<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Onboarding by Current Position 3.1.d.3</h3>
					<div class="row" id="form-16">
						<div class="col-sm-6 col-sm-push-1 profile_inputs">
						<!-- <form action="" id="form_16_form" method="post"  enctype="multipart/form-data"> -->
							<div class="form-group">
								<input disabled type="hidden" name="id" value="<?php echo $id;?>">
																<input  type="checkbox" name="">
                                   <label for="project">Project</label>
								<!-- <select class="form-control edit" id="" name="hired_for_project">
									<option value=""> Select Project </option>
									<php foreach($project as $item) :?>
											<php if($user_details->hired_for_project == $item->id):?>
												<option value="<php echo $item->id; ?>" selected > <php echo $item->project_title; ?></option>
											<php else:?>
												<option value="<php echo $item->id; ?>"><php echo $item->project_title; ?></option>
											<php endif;?>
									<php endforeach; ?>
								</select> -->
								<span>
									<?php if (isset($user_project_title->project_id)) {
										 foreach ($project as $item ) {
											if ($user_project_title->project_id == $item->id) {
												echo $item->project_title;
												}
										}
									}?>
								</span>
							</div>

							<div class="form-group" style="">
																<input  type="checkbox" name="">
                                   <label for="on_boarding_title_by_project">Project Location</label>
								<p  name="project_location"  style="float: right;padding-left: 35px !important;padding: 0px !important;margin:0px !important;" id="" class="form-control mc edit" placeholder="Project Location."><?php if(isset($user_details->project_location)) echo $user_details->project_location; ?></p>
								<!-- <input disabled type="text" class="form-control edit" id="" value="<?php  ?>" name="" > -->
							</div>
							<div class="form-group" >
																<input  type="checkbox" name="">
                                   <label for=""><a target="_blank" href="<?php echo base_url();?>Hr/titleByProject_view/<?php echo $id ;?>">Create Title by Project</a></label>
								<span>
									<?php if (isset($user_project_title->job_title)) {
										echo $user_project_title->job_title;
									}?>
								</span>
								<!-- <input disabled type="text" class="form-control edit" id="" value="<?php  ?>" name=""> -->
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="">Level by Projects</label>
								<!-- <input disabled type="text" readonly class="form-control edit" id="" > -->
								<span>
									<?php if (isset($user_project_title->level_id)) {
										 foreach ($levels as $item ) {
											if ($user_project_title->level_id == $item->id) {
												echo $item->level_name;
												}
										}
									}?>
								</span>
							</div>
							<div class="form-group">

																<input  type="checkbox" name="">
                                   <label for="">Job Description by Title </label>
								<span  name="job_description" id="" class=" mc edit" placeholder="Project Location."><?php if(isset($user_details->job_description)) echo $user_details->job_description; ?></span>
							</div>
							<!-- <div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="job_description">Job Description (JD) by Cluster</label>
								<input disabled type="text" class="form-control" id="job_description" value="<?php //echo $row['jod_desc'] ?>" name="">
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="expertise_cluster">Expertise - Cluster (school)</label>
								<input disabled type="text" class="form-control" id="expertise_cluster" value="Expertise" name="">
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="expertise_approach">Expertise - Approach (school only)</label>
								<input disabled type="text" class="form-control" id="expertise_approach" value="Expertise Approach" name="">
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
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
																<input  type="checkbox" name="">
                                   <label for="">Suggested Salary</label>
								<input disabled type="text" class="form-control edit" id="" name="suggested_salary"
								 value="<?php if(isset($user_details->suggested_salary)) echo $user_details->suggested_salary; ?>" placeholder="Suggested Salary"/>
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="">Actual Salary</label>
								<input disabled type="text" class="form-control edit" id="" name="actual_salary" value="<?php if(isset($user_details->actual_salary)) echo $user_details->actual_salary; ?>" placeholder="Actual Salary">
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for=""><a target="_blank" href="<?php echo base_url();?>Caan/benefits/<?php echo $id;?>">Applicable Benefits</a></label>

								<div class="row" style="margin-left: 1px; font-size: 12px; float: right; margin-right: 173px;">
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
								<!-- <input disabled type="text" class="form-control" id="title_crew" value="" name=""> -->
							</div>
							<div class="form-group multi">
																<input  type="checkbox" name="">
                                   <label for="shift" class="main">Shift* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<select class="form-control edit" name="shift_id" style="width: 196px !important" >
									<option value="">select shift</option>
									<?php foreach ($shifts as $item) :?>
										<?php if ($item->id == $user_details->shift_id): ?>
											<option value="<?php echo $item->id ?>" selected >
												<?php echo $item->shift_title ;?>
											</option>
										<?php else :?>
											<option value="<?php echo $item->id ?>">
												<?php echo $item->shift_title ;?>
											</option>
										<?php endif;?>
									<?php endforeach;?>


								</select>
								<!--								<input  type="checkbox" name="">
                                   <label for="shift_regular" class="sub_label">Regular</label>
								<input disabled type="radio" id="shift_regular" value="" name="shift">

																<input  type="checkbox" name="">
                                   <label for="shift_part_1" class="sub_label">Part 1</label>
								<input disabled type="radio" id="shift_part_1" value="" name="shift">

																<input  type="checkbox" name="">
                                   <label for="shift_part_2" class="sub_label">Part 2</label>
								<input disabled type="radio" id="shift_part_2" value="" name="shift">-->
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="salary">Break*</label>
								<div class="row" style="margin-left: 1px; font-size: 12px; float: right; margin-right: 5px;">
									<?php foreach($shifts as $item){
										if (!isset($user_details->shift_id)) {
											Break;
										}
										if($item->id == $user_details->shift_id){
											echo $item->shift_break_slot;
										}
									} ?>
								</div>

								<!-- <select id="on_boarding_by_position_break" value="<?php  ?>" name="on_boarding_by_position_break">
									<option>choose one</option>

												<option <?php  ?> value="<?php ?>"><?php ?></option>

								</select> -->
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="salary">
									<a href="#">
										Printable Shift & Break sheet*
									</a>
								</label>
								<!-- <input disabled type="text" class="form-control" id="salary" value="60000" name=""> -->
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="date_employeed">Date Employeed*</label>
								<input disabled type="date" class="form-control edit"  name="hired_on" value="<?php if(isset($user_details->hired_on)) echo $user_details->hired_on; ?>">
							</div>

							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="uniform">Uniform</label>
								<select class="form-control edit" style="padding-left: 5px !important;" name="uniform">
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

																<input  type="checkbox" name="">
                                   <label for="">
									<a target="_blank" href="http://bridges/bridgessms/Bridges_School_Software/operation/add-technology-item.php"> Equipment Provided </a></label>
								<span style="float: right;">
									<?php $i=1; foreach($equipments as $equipment){?>
									<?php echo $i." - "; ?>
									
									<?php 
									if($i%2==0){
									echo $equipment->title.","; 
									}else
										echo $equipment->title."<br>"; 

									  $i++; }?>
								</span>
								</div>

 						<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="office">Office</label>
								<select  name="office_id" class="form-control edit" style="width: 196px !important;">
									<option>Select office</option>
									<?php foreach ($office as $item) :?>
										<?php if ($item->id == $user_details->office_id): ?>
											<option value="<?php echo $item->id ?>" selected >
												<?php echo $item->office_tittle ;?>
											</option>
										<?php else :?>
											<option value="<?php echo $item->id ?>">
												<?php echo $item->office_tittle ;?>
											</option>
										<?php endif;?>
									<?php endforeach;?>
								</select>
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="passwords">Create Logins</label>
								<span class=" edit"  name="login_share" placeholder="List of Company Passwords Shared" ><?php if(isset($user_details->login_share)) echo $user_details->login_share; ?></span>
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="paperwork">Paperwork/Document/Softcopies</label>
								<span class=" edit" id=""  name="paperwork_share" placeholder="Paperwork/Document/Softcopies"><?php if(isset($user_details->paperwork_share)) echo $user_details->paperwork_share; ?></span>
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="paperwork">Comments and Remarks</label>
								<span class=" edit" id=""  name="remarks" placeholder="Comments and Remarks" style="margin-bottom: 15px"><?php if(isset($user_details->remarks)) echo $user_details->remarks; ?></span>
							</div>

							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label>Print Hard Copy Record for Filing</label>
								<!-- <input disabled type="button" class="btn btn-primary pull-right" id="on_boarding_by_position_submit" value="Print" name="" style="padding: 0px 12px !important; " /> -->
								<!-- <input disabled type="text" class="form-control" id="passwords" value="Passwords" name=""> -->
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="passwords"><a target="_blank" href="<?php echo base_url()?>Employee_reg/bio_employee_id/<?php echo $id; ?>">Create Biomet. Employee ID</a></label>
								<!-- <input disabled type="text" class="form-control" id="passwords" value="Passwords" name=""> -->
							</div>
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for=""><a href="#">Request for a New ID (Fine Rs.1000)</a></label>
								<!-- <input disabled type="text" class="form-control" id="passwords" value="Passwords" name=""> -->
							</div>
							<div class="sep"></div>
							<div class="form-group">
								<!--<input disabled type="submit" class="btn btn-primary pull-right" id="on_boarding_by_position_submit" value="Submit" name="" />-->
								<!-- <input disabled id="submit-16" type="button" onclick="submitform('form-16')" class="btn btn-primary pull-right" value="Submit" name="" style="margin-bottom: 5px;padding: 0px 6px !important; margin-left: 2px;"> -->


								<!-- <button type="button" onclick="editform('form-16')" class="btn btn-primary pull-right" style="padding-left: 5px !important;
									padding-right: 5px !important;
									padding-top: 0px !important;
									padding-bottom: 0px !important;
									background: rgb(214, 214, 214) !important;">
										<img class="" style="width: 13px;height: 16px; margin-bottom: 2px !important;" src="<?php echo base_url();?>\assets/emp_profile\img\edit1.png" alt="edit" >
								</button> -->
							</div>
							<!-- </form> -->
						</div>
					</div>
				</div>




						<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Parking , Office Space 3.1.d.5</h3>
					<div class="row">
						<div class="col-sm-6 col-sm-push-1 profile_inputs">
							<div class="form-group">
																<input  type="checkbox" name="">
                                   <label for="project_prom">Parking , Office Space*</label>
								<input disabled type="text" class="form-control" id="project_prom" value="Parking , Office Space" name="">
							</div>
							<div class="sep"></div>
							<div class="form-group">
								<!--<input disabledtype="submit" class="btn btn-primary pull-right" value="Submit" name="" />-->


							</div>
						</div>
					</div>
				</div>
			</div>
</body>
</html>
