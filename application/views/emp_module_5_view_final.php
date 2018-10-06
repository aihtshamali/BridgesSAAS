<!-- <!DOCTYPE html>

<html lang="zxx">

<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">

	<meta name="keywords" content="">

	<meta name="author" content="">

	<title>The Bridges</title>

	<link rel="stylesheet" type="text/css" href="<php echo base_url()?>assets/emp_profile/css/style.css">

    <link rel="stylesheet" type="text/css" href="<php echo base_url()?>assets/emp_profile/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

 -->

<section id="section5">

<h2 style="background:red";><font color="white">3.5 Retention & Replacement</font></h2>

	<div class="wrapper">

	<div class="section_wrapper">

			<div class="level_1_heading">

				<div class="container">

					3.5.a Grievance & Counselling

				</div>

			</div>

			<div class="container">

				<!-- Level 2 Section -->

				<div class="level_2_row">

					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Grievance & Counselling Filling 3.5.a.1</h3>

					<div class="row">

						<div class="col-sm-4 col-sm-push-1 profile_inputs full">

							<div class="form-group">

								<label for="date"><a target="_blank" href="<?php echo base_url() ?>Employee_reg/grievance_blog/<?php echo $id ?>">Grievance & Counselling Filling & Blog</a></label>

							</div>

						</div>

					</div>

				</div>

				<!-- <div class="level_2_row">

					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i>  Grievance & Counselling Blog 3.5.a.2</h3>

					<div class="row">

						<div class="col-sm-4 col-sm-push-1 profile_inputs full">

							<div class="form-group">

								<label for="date">Grievance & Counselling Blog</label>

							</div>

						</div>

					</div>

				</div> -->

			</div>

		</div> 

		<?php if($this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR"){ ?>

		<div class="section_wrapper">

			<div class="level_1_heading">

				<div class="container">

					3.5.b Exit

				</div>

			</div>

			<div class="container">

				<!-- Level 2 Section -->

				<div class="level_2_row">

					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Exit Interview3.5.b.1</h3>

					<div class="row">

						<div class="col-sm-4 col-sm-push-1 profile_inputs full">

							<div class="form-group">

								<label for="date">Exit Interview</label>

							</div>

						</div>

					</div>

				</div>

				

			</div>



			<div class="level_1_heading">

				<div class="container">

					3.5.c Exit Procedure

				</div>

			</div>

			<div class="row bottom_headings">

				<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Exit Procedure 3.5.c.1</h3>

				<div class="row">

					

					

					<div class="col-sm-5 col-sm-push-1 profile_inputs" style="margin-left: 14px;">

					<div class="form-group " style="" >

						<label for="resignation_letter" style="color: #337ab7;">Resignation Letter</label>

						

						<?php if (isset($id)) {?>

						<form  action="<?php echo base_url(); ?>Employee_reg/Resignationletter" id="resignation_letter_form" method="post" enctype="multipart/form-data">

							<span class="text-center">

								<input type="hidden" name="userid" value="<?php echo $id;?>">

								<input style="display: none;" type="submit" value="upload" />

								<input type="file" name="resignation_letter"  value="" class="sr-only"  id="resignation_letter" >

								<label for="resignation_letter" class="btn btn-primary pull-right" style="" > Upload  </label>



							</span>

							

						</form> <?php } ?>



						<!-- <input type="text" class="form-control" id="passwords" value="Passwords" name=""> -->

					</div>

					<br>

					<!-- <div class="row" style="clear:both;margin-top: 5px;" id="" align="right"> -->

						<div class="">

							<?php if(isset($user_details->resignation_letter)) {?>

								<a data-fancybox="gallery" href="<?php  echo $user_details->resignation_letter;  ?>"><img src="<?php echo $user_details->resignation_letter;  ?>" width="100%" height="100%"	 alt="" /></a>

							<?php }?>

						</div>

					<!-- </div> -->

					<br>

						<form action="" id="exit_employee" method="post"  enctype="multipart/form-data">

							<input type="hidden" name="userid" value="<?php echo $id;?>">



							<div class="form-group">

								<label for="title_d">ID Card Collected</label>

								<select class="form-control" id="exit_id_card_collected" value="<?php //echo $row['id_card_collected	'] ?>" name="exit_id_card_collected">

									

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->id_card_collected =="1"?'selected':''; }?> value="1">Yes</option>

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->id_card_collected =="0"?'selected':''; }?> value="0">No</option>

									

								</select>

							</div>

							<div class="form-group">

								<label for="shift_d">Uniform Collected</label>

								<select class="form-control" id="exit_uniform_collected" name="exit_uniform_collected">

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->uniform_collected =="1"?'selected':''; }?> value="1">Yes</option>

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->uniform_collected =="0"?'selected':''; }?> value="0">No</option>

									

								</select>

							</div>

							<div class="form-group">

								<label for="salary_d">Equipment Acquired</label>

								<select class="form-control" id="exit_equipment_collected" value="<?php  ?>" name="exit_equipment_collected">

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->equipment_collected =="1"?'selected':''; }?> value="1">Yes</option>

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->equipment_collected =="0"?'selected':''; }?> value="0">No</option>

									

								</select>

								<div class="form-group" >

									<div style="margin-left: 15px;">

										<?php $i=1; foreach($equipments as $equipment){?>

										<?php echo $i." - "; ?>	

										<?php echo $equipment->title." <br> "; ?>

										<?php $i++; }?>

									</div>

								</div>

							</div>

							<div class="form-group">

								<label for="date_current_d">Office Space Keys ETC.</label>

								<select class="form-control" id="exit_office_space_collected"  name="exit_office_space_collected">

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->office_spaceNkeys =="1"?'selected':''; }?> value="1">Yes</option>

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->office_spaceNkeys =="0"?'selected':''; }?> value="0">No</option>

									

								</select>

							</div>

							<div class="form-group">

								<label for="advance_loans">Advances/Loans Setted</label>

								<select class="form-control" id="exit_advances_collected" value="<?php  ?>" name="exit_advances_collected">

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->advance_loan =="1"?'selected':''; }?> value="1">Yes</option>

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->advance_loan =="0"?'selected':''; }?> value="0">No</option>

									

								</select>

							</div>

							<div class="form-group">

								<label for="securities">Securities</label>

								<select class="form-control" id="exit_securities_collected" value="<?php  ?>" name="exit_securities_collected">

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->securities =="1"?'selected':''; }?> value="1">Yes</option>

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->securities =="0"?'selected':''; }?> value="0">No</option>

									

								</select>

							</div>

							<div class="form-group">

								<label for="securities">Password</label>

								<select class="form-control" id="password_exit_collected"  name="password_exit_collected">

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->password =="1"?'selected':''; }?> value="1">Yes</option>

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->password =="0"?'selected':''; }?> value="0">No</option>

									

								</select>



							<div class="form-group" style="padding-left:0">

								<label for="passwords"><a href="<?php echo base_url();?>Hr/AssignedPasswords">Change Passwords</a></label>

								<div>

									<table class="table">

											<?php foreach ($socials as $social) {

												?>

												<tr>

													<td>

														<label style='margin:left:10px;'><a href="<?php echo base_url();?>Hr/AssignedPasswords/<?php echo $social->id ?>"><?php echo $social->platform ?></a></label>	

													</td>

													<td>

														<label style='margin-left:120px;'><?php echo $social->username ?></label>	

													</td>

												</tr>

											<?php	} ?>

									</table>

								</div>

							</div>

							</div>

							<div class="form-group">

								<label for="paperwork_d">Paperwork/Softcopies/Documents</label>

								<select class="form-control" id="exit_paperwork_collected" value="<?php  ?>" name="exit_paperwork_collected">

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->paperwork =="1"?'selected':''; }?> value="1">Yes</option>

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->paperwork =="0"?'selected':''; }?> value="0">No</option>

									

								</select>

							</div>

							<div class="form-group">

								<label for="paperwork_d">Employment Data and Biometrics Archived</label>

								<select class="form-control" id="exit_biometrics_collected" value="<?php  ?>" name="exit_biometrics_collected">

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->emp_data_biometric =="1"?'selected':''; }?> value="1">Yes</option>

									<option <?php if (isset($exit_procedure)) {echo $exit_procedure->emp_data_biometric =="0"?'selected':''; }?> value="0">No</option>

									

								</select>

							</div>

							<div class="form-group">

								<label for="project_prom">Date Out*</label>

								<input type="date" class="form-control" id="exit_date" value="<?php if(isset($exit_procedure)) echo $exit_procedure->date_out;  ?>" name="date_out">

							</div>

							<div class="form-group">

								<label for="paperwork">Comments & Remarks</label>

								<?php if (!isset($exit_procedure)) {?>

								<textarea style="padding: 8px ;" class="form-control" id="on_boarding_by_position_softcopies"  name="comments_and_remarks" placeholder="Paperwork/Document/Softcopies" style="height: 100px; margin-bottom: 15px"></textarea>

								<?php } else { echo '<textarea style="padding: 8px ;" class="form-control" id="on_boarding_by_position_softcopies"  name="comments_and_remarks" placeholder="Paperwork/Document/Softcopies" style="height: 100px; margin-bottom: 15px">'.$exit_procedure->remarks.'</textarea>'; } ?>

							</div>

							<div class="sep"></div>

							<div class="form-group">

								<label for="">Verified By Director</label>

								<input type="checkbox" class="pull-right" style="width:4%;height: 20px;" value="1" <?php if(isset($exit_procedure)) {if($exit_procedure->checkedByDirector==1) echo 'checked disabled'; else echo ''; } ?> name="checkedByDirector">



							</div>

							<br>

							<div class="form-group">

								<input type="submit" class="btn btn-primary pull-right" id="on_boarding_exit_employee" value="Submit" name="" />

							</div>

						</form>

						<div class="form-group">

							<label for="passwords"><a href="<?php echo base_url()?>Employee_reg/settlementOffer/<?php echo $id; ?>">Settlement Letter English</a></label>

							<br>

							<label for="passwords"><a href="<?php echo base_url()?>Employee_reg/settlementOfferUrdu/<?php echo $id; ?>">Settlement Letter Urdu</a></label>

							<?php if (isset($id)) {?>

							<form  action="<?php echo base_url(); ?>Employee_reg/saveSettlement" id="SettlementForm" method="post" enctype="multipart/form-data" id="HrForm">

								<span class="text-center">

									<input type="hidden" name="userid" value="<?php echo $id;?>">

									<input style="display: none;" type="submit" value="upload" />

									<input type="file" name="SettlementUpload"  value="" class="sr-only"  id="SettlementUpload" >

									<label for="SettlementUpload" class="btn btn-primary pull-right" style="" > Upload  </label>



								</span>



							</form> <?php } ?>



						</div>



					</div>

					<?php if(isset($exit_procedure)) {

						if($exit_procedure->checkedByDirector==1){ ?>

						<div class="row" style="clear:both;margin-left:69px" id="" align="left">

							<div class="col-md-5 col-md-offset-1">

								<a  href="<?php  echo base_url()?>Salaryslip/payslip/<?=$id?>?last=1" target="_blank">Final Payslip</a>

							

							</div>

						</div>

						<?php } }	?>



					<div class="row" style="clear:both;margin-top: 5px;" id="" align="right">

						<div class="col-md-5 col-md-offset-2">

							<?php if(isset($user_details->upload_settlement_letter)) {?><a data-fancybox="gallery" href="<?php  echo $user_details->upload_settlement_letter;  ?>"><img src="<?php echo $user_details->upload_settlement_letter;  ?>" width="100%" height="100%"	 alt="" /></a>

							<?php }?>

						</div>

					</div>



					<div class="row">

						<div class="col-sm-5 col-sm-push-1 profile_inputs" style="margin-left: 14px;">



						<div class="">

								<?php if(file_exists('uploads/experience_letter/'.$id.'.html')):?>

									<object data="<?php echo base_url();?>uploads/experience_letter/<?php echo $id; ?>.html" width="560" height="900"  type="text/html">

									</object>

						<div class="col-md-12" style="padding-bottom:28px;padding-top: 5px;">

								<a  style="width: 50px;" onclick='printexperience_letter(<?=$id?>)'  class="btn btn-primary pull-right" >

								Print

								</a>

						</div>



									<?php else: 

										echo '<a style="margin-left: 18px;"  href="'.base_url().'Caan/Experience_letter/'.$id.'">Experience Letter</a>';

									 endif;?> 

									

						</div>

					</div>

					</div>







				</div>

				



			</div>

			





		</div>

		</div>

		

		<div class="section_wrapper">

			<div class="level_1_heading">

				<div class="container">

					3.3.c Create Title & Job Desciption <!--Job Desciption-->



				</div>

			</div>

			<div class="container">

				<!-- Level 2 Section -->

				<div class="level_2_row">

					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i>  Create Title & Job Desciption 3.3.c.1</h3>

					<div class="row">

						<div class="col-sm-4 col-sm-push-1 profile_inputs full">

							<div class="form-group">

								<label for="date"><a target="_blank" href="<?php echo base_url();?>Hr/titleByProject_view/<?php echo $id ;?>"> Title & Job Desciption Archives </a></label>

								<p id="emp_job_description" class="" style="color: #555;background-color: #fff;" placeholder="Project Location.">

									<table class="table table-responisve">

										<?php if (isset($users_project_title)) {

											// print_r($users_project_title);

										 foreach ($users_project_title as $item ) {

										 ?>

										 <tr>

										 <?php

										 	if($item->overall_goals)

										 	echo '<td><input type="checkbox" checked></td><td><label for="">'.$item->level_name.'</label></td><td><label for="" style="padding-left:20px"><a target="_blank" href="'.base_url().'Hr/titleByProject_view/'.$item->userid.'">'.$item->job_title.'</a></label></td><td>'.$item->created_at.'<br>';

										 	else

										 	echo '<td><input type="checkbox" ></td><td><label for="">'.$item->level_name.'</label></td><td><label for="" style="padding-left:20px"><a target="_blank" href="'.base_url().'Hr/titleByProject_view/'.$item->userid.'">'.$item->job_title.'</a></label></td><td>'.$item->created_at.'<br>';

										?>

										</tr>

										<?php		

										}	

									}

									?>

									</table>

							</div>

						</div>

					</div>

				</div>

				

				

			</div>

		</div>



		<div class="section_wrapper">

			<div class="level_1_heading">

				<div class="container">

					3.5.d Replacement

				</div>

			</div>

			<div class="container">

				<!-- Level 2 Section -->

				<div class="level_2_row">

					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true"></i> Replacement Campaign 3.5.d.1</h3>

					<div class="row">

						<div class="col-sm-5 col-sm-push-1 profile_inputs full">

							<form action="" id="exit_employee" method="post"  enctype="multipart/form-data">

								<div class="form-group">

									<label for="project_prom">Job Title</label>

									<input type="text" class="form-control form-control-custom" id="project_prom" value="Job Title" name="">

								</div>

								<div class="form-group">

									<label for="project_prom">Salary</label>

									<input type="text" class="form-control form-control-custom" id="project_prom" value="Project" name="">

								</div>

								<div class="form-group">

									<label for="project_prom">Year of Experience</label>

									<input type="text" class="form-control form-control-custom" id="project_prom" value="Experience" name="">

								</div>

								<div class="form-group">

									<label for="project_prom">Residence Location</label>

									<input type="text" class="form-control form-control-custom" id="project_prom" value="Address" name="">

								</div>

								<div class="form-group">

									<label for="project_prom">Gender</label>

									<input type="text" class="form-control form-control-custom" id="project_prom" value="Male/Female" name="">

								</div>

								<div class="form-group">

									<label for="project_prom">Industry</label>

									<input type="text" class="form-control form-control-custom" id="project_prom" value="Industry" name="">

								</div>

								<div class="form-group">

									<label for="project_prom">Employee Type</label>

									<input type="text" class="form-control form-control-custom" id="project_prom" value="e.g I.T" name="">

								</div>

								<div class="form-group">

									<label for="project_prom">Posted Date</label>

									<input type="text" class="form-control form-control-custom" id="project_prom" value="mm/dd/yyyy" name="">

								</div>

								<div class="sep"></div>

								<div class="form-group">

									<input type="submit" class="btn btn-primary pull-right" id="on_boarding_exit_employee" value="Submit" name="" />

								</div>

							</form>

							<div class="sep"></div>

								<div class="form-group">

									<label for=""><a href="<?= base_url() ?>Employee_reg/letterFormat" class="btn btn primary">Letter Format

									</a>

									</label>

									

								</div>

						</div>

					</div>

				</div>

				

			</div>

		</div>



		<?php } ?>

	</div>

				

	<script type="text/javascript" src="<?php echo base_url()?>assets/emp_profile/js/jquery.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/emp_profile/js/bootstrap.min.js"></script>

	

</section>

</html>

