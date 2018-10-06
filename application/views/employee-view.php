<?php 
foreach ($emp_profile1 as $emp) {	
}
foreach ($work_exp as $work) {
}
foreach ($education as $edu) {
}
foreach ($skills as $skill) {
}
foreach ($certification as $cert) {
}
foreach ($hobbies_to_why_I as $hob) {
}
foreach ($org_info as $org) {
}
foreach ($emergency_contact as $emgr) {
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CV Format</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets1/css/styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets1/css/normalize.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<style type="text/css">
	.col49{
		width: 49%;
	}
	.shadow-header{
		box-shadow: 0px -15px 25px 0px #888888;
	}
	.shadow-pinfo{
		box-shadow: 0px 0px 25px 0px #888888;
	}
	.shadow{
		box-shadow: 0px 0px 25px 0px #888888; margin-top: 1%;
		padding-top: 4%;
	}
	.docs{
		margin-bottom: 15px;
	}
	</style>
	<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <script type="text/javascript">
            $(document).ready(function (e) {
                $('#upload').on('click', function () {
                    var file_data = $('#file').prop('files')[0];
                    var table = $('#table').val();
                    var id = $('#id').val();
                    // alert(id);
                    var form_data = new FormData();
                    form_data.append('file', file_data);
                    $.ajax({
                        url: '<?php echo base_url();?>/hr/upload_files/' +table+'-'+id, // point to server-side controller method
                        dataType: 'text', // what to expect back from the server
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (response) {
                            $('#msg').html(response); // display success response from the server
                        },
                        error: function (response) {
                            $('#msg').html(response); // display error response from the server
                        }
                    });
                });
            });
        </script>
</head>
<body>
	<div class="container cv flexbox">
		<div class="all profile-edit">
			<div class="head-name row-c flexbox flexbox2 shadow-header" id="row1A">
				<div class="row1">
					<div><i class="fa fa-user bck"></i><label>Employee Profile</label></div>
				</div>
				<div class="row2 flexbox flexbox2">
					<div class="objectives">
						<ul>
							<li>
								<?php 
								 	$data = array(
								 		'name' => 'empName',
								 		'id' => 'empNameEdit',
								 		'type' => 'text',
								 		'placeholder' => 'Your Name',
								 		'class' => 'input-transparent',		
								 		'disabled' => 'disabled',						 		
								 	);
								 	echo form_input($data); 
									 ?>
							<li><p>Male, 26. Lahore, Pakistan</p></li>
							<li><p>BSCS, University of Sargodha, Lahore coolanees4@gmail.com</p></li>
							<li><p>+92334-066-7800, coolanees4@gmail.com</p></li>
						</ul>
					</div>
				</div>
			</div>
		<?php echo form_open('hr/employee_profile_update/'.$userid); ?>
			<div class="profile-body shadow-pinfo">
				<div class="cv-head flexbox flexbox2" id="row2A">
					<div class="row1 relative">
						<div class="head-image image"></div>
					</div>
					<div class="row2 first relative">
						<div class="objectives">
						<div class="edit-items">
								<span id="add-btn-2" class="edit-text-btn" onclick="text2()">Save</span>
							</div>  
							<h3>career objective</h3>
							<?php 
								 	$data = array(
								 		'rows' => '3',
								 		'name' => 'empCareer',
								 		'type' => 'text',
								 		'id' => 'empCareerEdit',
								 		'placeholder' => 'Career Objective...',
								 		'class' => 'textarea-input',
								 		'value' => set_value('empCareer'),	
								 		'disabled' => 'disabled',							 		
								 	);
								 	echo form_textarea($data); 
							?>
							<span class="text-danger"><?php echo form_error('empCareer'); ?></span>
						</div>
						<div class="objectives">
							<h3>job objective</h3>
							<?php 
							 	$data = array(
							 		'rows' => '3',
							 		'name' => 'empJobObj',
							 		'type' => 'text',
							 		'id' => 'empObjEdit',
							 		'placeholder' => 'Job Objective...',
							 		'class' => 'textarea-input',	
							 		'value' => set_value('empJobObj'),	
							 		'disabled' => 'disabled',						 		
							 	);
							 	echo form_textarea($data); 
							?>
						</div>
					</div>
				</div>
				<div class="row-c flexbox flexbox2" id="row3A">
					<div class="row1">
						<div><i class="fa fa-user bck"></i><label>PERSONAL DETAILS</label></div>
					</div>
					<div class="row2">
						<div class="vertical-center dotted-border"></div>
					</div>
					<div class="row1"></div>
					<div class="row2 relative">
						<div class="edit-items">
							<span id="add-btn-3" class="edit-text-btn" onclick="text3()">Save</span>
						</div> 
						<div class="objectives objectives2">
							<h3>Personal Profile</h3>
							<ul class="ul-flex-list">
							<li>
									<?php 
								 	$data = array(
								 		'name' => 'userid',
								 		'type' => 'hidden',
								 		'class' => 'input-transparent col49',
								 		'value'	=>  $emp->userid,	
								 		'disabled' => 'disabled',						 		
								 	);
								 	echo form_input($data); 
									 ?>
								</li>

								<li><b>Name:</b>
									<?php 
								 	$data = array(
								 		'name' => 'empName',
								 		'id' => 'empProfNameEdit',
								 		'type' => 'text',
								 		'placeholder' => 'Your Name',
								 		'class' => 'input-transparent col49',
								 		'value'	=>  $emp->name,
								 		'disabled' => 'disabled', 							 		
								 	);
								 	echo form_input($data); 
									 ?>
								</li>	 
						 <span class="text-danger"><?php echo form_error('empName'); ?></span>
								<li><b>Gender:</b>
									<?php 
									$data = array(
										'male' => 'Male',
										'female' => 'Female',
										);
								 	$data2 = array(
								 		'name' => 'empGender',
								 		'class' => 'input-transparent col49',	
								 		'disabled' => 'disabled',							 		
								 	);
								 	echo form_dropdown('empGender',$data,$emp->gender,$data2); 
									?>
								</li>
								<li><b>Marital Status:</b>
									<?php 
									$data = array(
										'single' => 'Single',
										'married' => 'Married',
										'widow' => 'Widow',
										'divorced' => 'Divorced',
										);
								 	$data2 = array(
								 		'name' => 'maritalStatus',
								 		'class' => 'input-transparent col49',
								 		'disabled' => 'disabled',								 		
								 	);
								 	echo form_dropdown('maritalStatus',$data,$emp->maritalstatus,$data2); 
									?>
								</li>	 
								<li><b>Number of Dependence:</b>
									<?php 
								 	$data = array(
								 		'name' => 'numOfDep',
								 		'id' => 'empNoDEdit',
								 		'type' => 'text',
								 		'placeholder' => 'Number of Dependence',
								 		'class' => 'input-transparent col49',						
								 		'value'	=> $emp->numofdep,
								 		'disabled' => 'disabled',
								 	);
								 	echo form_input($data); 
									 ?>
								<li><b>Date of Birth:</b>
									<?php 
								 	$data = array(
								 		'name' => 'empDob',
								 		'id' => 'empNoDEdit',
								 		'type' => 'date',
								 		'placeholder' => 'Date of Birth',
								 		'class' => 'input-transparent col49',
								 		'value' => $emp->dob,
								 		'disabled' => 'disabled',
								 			
								 	);
								 	echo form_input($data); 
									 ?>
									</li>
								<span class="text-danger"><?php echo form_error('empDob'); ?></span>
								</li>
							</ul>
						</div>
						<div class="objectives objectives2">
							<h3>Address</h3>
							<ul class="ul-flex-list">
								<li><b>Email:</b>
									<?php 
								 	$data = array(
								 		'name' => 'empEmail',
								 		'type' => 'email',
								 		'placeholder' => 'Your Email',
								 		'class' => 'input-transparent col49',
								 		'value' => $emp->email,		
								 		'disabled' => 'disabled',						 		
								 	);
								 	echo form_input($data); 
									 ?>
								</li>
							<span class="text-danger"><?php echo form_error('empEmail'); ?></span>
								<li><b>Mobile:</b>

									<?php 
								 	$data = array(
								 		'name' => 'empPhone',
								 		'type' => 'text',
								 		'placeholder' => 'Your Mobile Number',
								 		'class' => 'input-transparent col49',						
								 		'value' => $emp->phone,
								 		'disabled' => 'disabled',
								 	);
								 	echo form_input($data); 
									 ?>
								</li>
							<span class="text-danger"><?php echo form_error('empPhone'); ?></span>
								<li><b>Website:</b>
									<?php 
								 	$data = array(
								 		'name' => 'empWebsite',
								 		'type' => 'text',
								 		'placeholder' => 'Your Website',
								 		'class' => 'input-transparent col49',						
								 		'value'	=> $emp->website,
								 		'disabled' => 'disabled',
								 	);
								 	echo form_input($data); 
									?>
								</li>
								<li><b>Additional Nationalities:</b>
									<?php 
								 	$data = array(
								 		'name' => 'empAddNationalities',
								 		'type' => 'text',
								 		'placeholder' => 'Additional Nationalities',
								 		'class' => 'input-transparent col49',						
								 		'value'	=> $emp->nationalities,
								 		'disabled' => 'disabled',
								 	);
								 	echo form_input($data); 
									?>
								</li>
								<li><b>City</b>
									<?php 
									$data = array(
										'city' => 'empCity',
										'type' => 'text',
										'placeholder' => 'Enter your city',
										'class' => 'input-transparent col49',
										'value'	=> $emp->city,
										'disabled' => 'disabled',
										);
									echo form_input($data);
									?>
								</li>
								<li><b>Residence Country:</b>
									<?php 
								 	$data = array(
								 		'name' => 'empResidence',
								 		'type' => 'text',
								 		'placeholder' => 'Residence Country',
								 		'class' => 'input-transparent col49',
								 		'value'	=> $emp->country,	
								 		'disabled' => 'disabled',						
								 	);
								 	echo form_input($data); 
									?>
								</li>
							<span class="text-danger"><?php echo form_error('empResidence');?></span>
							</ul>
						</div>

					</div>
				</div>
				
				<div class="row-c flexbox flexbox2" id="row5A">
					<div class="row1">
						<div><i class="fa fa-briefcase bck"></i><label>WORK EXPERIENCES</label></div>
					</div>
					<div class="row2">
						<div class="vertical-center dotted-border"></div>
					</div>
					<div class="row1"></div>
					<div class="row2 relative">
					<div class="edit-items">
							<span id="edit-btn-5" class="edit-text-btn">Edit</span>
							<span id="add-btn-5" class="edit-text-btn hide" onclick="text5()">Save</span>
						</div> 
						<div class="flexbox flexbox2">
							<?php 
								 	$data = array(
								 		'name' => 'expComp',
								 		'type' => 'text',
								 		'placeholder' => 'Company Name',
								 		'class' => 'input-transparent',
								 		'value' => isset($work->organization)?$work->organization:'',
								 		'disabled' => 'disabled',								 		
								 	);
								 	echo form_input($data); 
							 ?>
							<p id="certiDateInput">From:
							<?php 
								 	$data = array(
								 		'name' => 'expDateFrom',
								 		'type' => 'text',
								 		'id' => 'expDateFrom',
								 		'class' => 'input-transparent',
								 		'value' => isset($work->from)?$work->from:'',
								 		'disabled' => 'disabled',								 		
								 	);
								 	echo form_input($data); 
							 ?>

							Till:
							<?php 
								 	$data = array(
								 		'name' => 'expDateTO',
								 		'type' => 'text',
								 		'id' => 'expDateTo',
								 		'class' => 'input-transparent',
								 		'value' => isset($work->till)?$work->till:'',
								 		'disabled' => 'disabled',								 		
								 	);
								 	echo form_input($data); 
							 ?> <input type="checkbox" id="1" name="expDateCheck"><label for="1">Present</label></p>
						</div>
						<div class="objectives">
							<?php 
								 	$data = array(
								 		'name' => 'expPosition',
								 		'type' => 'text',
								 		'id' => 'expPosition',
								 		'placeholder' => 'Experience Position',
								 		'class' => 'input-transparent',	
								 		'value' => isset($work->position)?$work->position:'',
								 		'disabled' => 'disabled',							 		
								 	);
								 	echo form_input($data); 
							 ?>
							 <?php 
								 	$data = array(
								 		'rows' => '3',
								 		'name' => 'expDescription',
								 		'type' => 'text',
								 		'id' => 'expDescInput',
								 		'placeholder' => 'Experience Description...',
								 		'class' => 'textarea-input',	
								 		'value' => isset($work->description)?$work->description:'',	
								 		'disabled' => 'disabled',						 		
								 	);
								 	echo form_textarea($data); 
							?>
						</div>
					</div>
				</div>
				<div class="row-c flexbox flexbox2" id="row6A">
					<div class="row1">
						<div><i class="fa fa-mortar-board bck"></i><label>EDUCATION</label></div>
					</div>
					<div class="row2">
						<div class="vertical-center dotted-border"></div>
					</div>
					<div class="row1"></div>
					<div class="row2 relative"> 
						<div class="objectives">
							<div class="flexbox flexbox2">
							<?php 
								 	$data = array(
								 		'name' => 'eduInst',
								 		'type' => 'text',
								 		'id' => 'eduInstInput',
								 		'placeholder' => 'Institute Name',
								 		'class' => 'input-transparent',
								 		'value' => isset($edu->institute)?$edu->institute:'',	
								 		'disabled' => 'disabled',							 		
								 	);
								 	echo form_input($data); 
							 ?>
								<?php 
									$data = array(
										'' => '--Country--',
										'pakistan' => 'Pakistan',
										'india' => 'India',
										'united-states' => 'United States',
										'united-kingdom' => 'United Kingdom',
										);
								 	$data2 = array(
								 		'name' => 'empCountry',
								 		'id' => 'eduCountryInput',			
								 		'disabled' => 'disabled',					 		
								 	);
								 	echo form_dropdown('empCountry',$data,isset($edu->country)?$edu->country:'',$data2); 
									?>
									<?php 
									$data = array(
										'' => '--City--',
										'abbottabad' => 'Abbottabad',
										'bahawalpur' => 'Bahawalpur',
										'chitral' => 'chitral',
										'lahore' => 'Lahore',
										);
								 	$data2 = array(
								 		'name' => 'empCity',
								 		'id' => 'eduCityInput',								 		
								 		'value' => set_value('empCity'),
								 		'disabled' => 'disabled',
								 	);
								 	echo form_dropdown('empCity',$data,isset($edu->city)?$edu->city:'',$data2); 
									?>
							<span class="text-danger"><?php echo form_error('empCity');  ?></span>
							</div>
								<?php 
								$data = array(
									'' => '--EDUCATION--',
									'fsc-eng' => 'F.Sc(Engineering)',
									'fsc-med' => 'F.Sc(Medical)',
									'ics' => 'ICS',
									'fa' => 'F.A',
									);
							 	$data2 = array(
								 	'name' => 'empEducation',
							 		'id' => 'eduDegreeInput',
							 		'multiple' => 'multiple',
							 		'class' => 'tokenize-sample',		
							 		'disabled' => 'disabled',						 		
							 	);
							 	echo form_dropdown('empEducation',$data,isset($edu->degree)?$edu->degree:'',$data2); 
								?>
						</div>
					</div>
				</div>
				<div class="row-c flexbox flexbox2" id="row7A">
					<div class="row1">
						<div><i class="fa fa-bar-chart bck"></i><label>SKILLS</label></div>
					</div>
					<div class="row2">
						<div class="vertical-center dotted-border"></div>
					</div>
					<div class="row1"></div>
					<div class="row2 relative">
						<div class="objectives">
						<div class="edit-items">
								<span id="edit-btn-7" class="edit-text-btn">Edit</span>
								<span id="add-btn-7" class="edit-text-btn hide" onclick="text7()">Save</span>
							</div>
							<h3>Communication Skills</h3>
							<?php 
								$data = array(
									'' => '--Managerial--',
									'skill-1' => 'skill-1',
									'skill-2' => 'skill-2',
									'skill-3' => 'skill-3',
									'skill-4' => 'skill-4',
									);
							 	$data2 = array(
							 		'name' => 'commSkills',
							 		'id' => 'commSkillsInput',
							 		'multiple' => 'multiple',
							 		'class' => 'tokenize-sample',	
							 		'disabled' => 'disabled',							 		
							 	);
							 	echo form_dropdown('commSkills',$data,isset($skill->communicationskills)?$skill->communicationskills:'',$data2); 
								?>
						</div>
						<div class="objectives">
							<h3>Managerial Skills</h3>
								<?php 
								$data = array(
									'' => '--Managerial--',
									'skill-1' => 'skill-1',
									'skill-2' => 'skill-2',
									'skill-3' => 'skill-3',
									'skill-4' => 'skill-4',
									);
							 	$data2 = array(
							 		'name' => 'mangSkills',
							 		'id' => 'compSkillsInput',
							 		'multiple' => 'multiple',
							 		'class' => 'tokenize-sample',	
							 		'disabled' => 'disabled',							 		
							 	);
							 	echo form_dropdown('mangSkills',$data,isset($skill->managerialskills)?$skill->managerialskills:'',$data2); 
								?>
						</div>	
						<div class="objectives">
							<h3>Computer Skills</h3>

								<?php 
								$data = array(
									'' => '--Select--',
									'ms-office' => 'MS Office',
									'ms-access' => 'MS Access',
									'ms-excel' => 'MS Excel',
									'windows' => 'Windows',
									);
							 	$data2 = array(
							 		'name' => 'computer',
							 		'id' => 'compSkillsInput',
							 		'multiple' => 'multiple',
							 		'class' => 'tokenize-sample',	
							 		'disabled' => 'disabled',							 		
							 	);
							 	echo form_dropdown('computer',$data,isset($skill->computer)?$skill->computer:'',$data2); 
								?>
						</div>
						<div class="objectives">
							<h3>Technical Skills</h3>

								<?php 
								$data = array(
									'' => '--Select--',
									'html5' => 'HTML5',
									'css3' => 'CSS3',
									'php' => 'PHP',
									'javascript' => 'javaScript',
									);
							 	$data2 = array(
							 		'id' => 'techSkills',
							 		'multiple' => 'multiple',
							 		'class' => 'tokenize-sample',	
							 		'disabled' => 'disabled',							 		
							 	);
							 	echo form_dropdown('techSkills',$data,isset($skill->technicalskills)?$skill->technicalskills:'',$data2); 
								?>
						</div>
					</div>
				</div>
				<div class="row-c flexbox flexbox2" id="row8A">
					<div class="row1">
						<div><i class="fa fa-group bck"></i><label>LANGUAGES</label></div>
					</div>
					<div class="row2">
						<div class="vertical-center dotted-border"></div>
					</div>
					
					<div class="row1"></div>
					<div class="row2 relative">
						<div class="objectives">
						<div class="edit-items">
								<span id="edit-btn-8" class="edit-text-btn">Edit</span>
								<span id="add-btn-8" class="edit-text-btn hide" onclick="text8()">Save</span>
							</div>
							<h3>Mother Tounge</h3>
							<?php 
							$data = array(
								'' => '--Select--',
								'urdu' => 'urdu',
								'english' => 'English',
								'hindi' => 'Hindi',
								'punjabi' => 'Punjabi',
								);
						 	$data2 = array(
						 		'name' => 'motherLang',
						 		'id' => 'motherLangInput',
						 		'class' => 'tokenize-sample',		
						 		'disabled' => 'disabled',						 		
						 	);
						 	echo form_dropdown('motherLang',$data,isset($skill->motherlanguage)?$skill->motherlanguage:'',$data2); 
							?>
						</div>
						<div class="onjectives">
							<h3>Other Languages</h3>
							<?php 
							$data = array(
								'' => '--Select--',
								'urdu' => 'urdu',
								'english' => 'English',
								'hindi' => 'Hindi',
								'punjabi' => 'Punjabi',
								);
						 	$data2 = array(
						 		'name' => 'otherLang',
						 		'id' => 'otherLangInput',
						 		'multiple' => 'multiple',
						 		'class' => 'tokenize-sample',			
						 		'disabled' => 'disabled',					 		
						 	);
						 	echo form_dropdown('otherLang',$data,isset($skill->otherlanguage)?$skill->otherlanguage:'',$data2); 
							?>
						</div>
					</div>
				</div>
				<div class="row-c flexbox flexbox2" id="row9A">
					<div class="row1">
						<div><i class="fa fa-certificate bck"></i><label>CERTIFICATIONS</label></div>
					</div>
					<div class="row2">
						<div class="vertical-center dotted-border"></div>
					</div>
					<div class="row1"></div>
					<div class="row2 relative">
						<div class="edit-items">
							<span id="edit-btn-9" class="edit-text-btn">Edit</span>
							<span id="add-btn-9" class="edit-text-btn hide" onclick="text9()">Save</span>
						</div> 
						<div class="objectives">
							<div class="flexbox flexbox2">
								<?php 
								 	$data = array(
								 		'name' => 'certiTitle',
								 		'type' => 'text',
								 		'placeholder' => 'Certification Title',
								 		'class' => 'input-transparent',		
								 		'value' => isset($cert->certtitle)?$cert->certtitle:'',	
								 		'disabled' => 'disabled',					 		
								 	);
								 	echo form_input($data); 
							 ?>
							<p id="certiDateInput">Date:
							<?php 
								 	$data = array(
								 		'name' => 'certiDate',
								 		'type' => 'text',
								 		'id' => 'certiDateFrom',
								 		'class' => 'input-transparent col49',
								 		'value' => isset($cert->certdate)?$cert->certdate:'',	
								 		'disabled' => 'disabled',							 		
								 	);
								 	echo form_input($data); 
							 ?>
							</p>
							</div>
							<?php 
								 	$data = array(
								 		'rows' => '3',
								 		'name' => 'certiDesc',
								 		'type' => 'text',
								 		'id' => 'certiDescInput',
								 		'placeholder' => 'Certification Description',
								 		'class' => 'textarea-input',
								 		'value' => isset($cert->certdescription)?$cert->certdescription:'',							
								 		'disabled' => 'disabled',	 		
								 	);
								 	echo form_textarea($data); 
							 ?>
						</div>
					</div>
				</div>
				<div class="row-c flexbox flexbox2" id="row10A">
					<div class="row1">
						<div><i class="fa fa-cutlery bck"></i><label>HOBBIES AND INTERESTS</label></div>
					</div>
					<div class="row2">
						<div class="vertical-center dotted-border"></div>
					</div>
					<div class="row1"></div>
					<div class="row2 relative">
						<div class="objectives">
						<div class="edit-items">
								<span id="add-btn-10" class="edit-text-btn" onclick="text10()">Save</span>
						</div>
							<?php 
							$data = array(
								'' => '--Select--',
								'football' => 'Football',
								'reading' => 'Reading',
								'gardening' => 'Gardening',
								'games' => 'Games',
								);
						 	$data2 = array(
						 		'id' => 'hobbAndInter',
						 		'name' => 'hobbAndInter',
						 		'multiple' => 'multiple',
						 		'class' => 'tokenize-sample',		
						 		'disabled' => 'disabled',						 		
						 	);
						 	echo form_dropdown('hobbAndInter',$data,isset($hob->hobbies)?$hob->hobbies:'',$data2); 
							?>
						</div>
					</div>
				</div>
				<div class="row-c flexbox flexbox2" id="row11A">
					<div class="row1">
						<div><i class="fa fa-anchor bck"></i><label>References</label></div>
					</div>
					<div class="row2">
						<div class="vertical-center dotted-border"></div>
					</div>
					<div class="row1"></div>
					<div class="row2 flexbox flexbox2 relative">
						<div class="edit-items">
							<span id="add-btn-11" class="edit-text-btn" onclick="text11()">Save</span>
						</div> 
						<div class="objectives">
							<ul class="uol">
								<li>
									<?php 
									 	$data = array(
									 		'name' => 'rpersonName',
									 		'type' => 'text',
									 		'id' => 'personName',
									 		'placeholder' => 'Person Name',
									 		'class' => 'input-transparent show',
									 		'value'	=> isset($hob->rpersonname)?$hob->rpersonname:'',
									 		'disabled' => 'disabled',							 		
									 	);
									 	echo form_input($data); 
									?>
								</li>
								<li>
									<?php 
									 	$data = array(
									 		'name' => 'roccupation',
									 		'type' => 'text',
									 		'id' => 'occupation',
									 		'placeholder' => 'Occupation',
									 		'class' => 'input-transparent show',	
									 		'value' => isset($hob->roccupation)?$hob->roccupation:'',
									 		'disabled' => 'disabled',							 		
									 	);
									 	echo form_input($data); 
									?>
									</li>
								<li>
									<?php 
										 	$data = array(
										 		'name' => 'rAddress',
										 		'type' => 'text',
										 		'id' => 'address',
										 		'placeholder' => 'Address',
										 		'class' => 'input-transparent show',								 	
										 		'value' => isset($hob->raddress)?$hob->raddress:'',
										 		'disabled' => 'disabled',
										 	);
										 	echo form_input($data); 
									?>
								</li>
								<li>
									<?php 
										 	$data = array(
										 		'name' => 'rEmail',
										 		'type' => 'text',
										 		'id' => 'email',
										 		'placeholder' => 'Email',
										 		'class' => 'input-transparent show',
										 		'value' => isset($hob->remail)?$hob->remail:'',
										 		'disabled' => 'disabled',
										 	);
										 	echo form_input($data); 
									?>
								</li>
								<span class="text-danger"><?php echo form_error('rEmail'); ?></span>
								<li>
									<?php 
										 	$data = array(
										 		'name' => 'rNumber',
										 		'type' => 'text',
										 		'id' => 'number',
										 		'placeholder' => 'Contact Number',
										 		'class' => 'input-transparent show',								 	
										 		'value' => isset($hob->rnumber)?$hob->rnumber:'',
										 		'disabled' => 'disabled',
										 	);
										 	echo form_input($data); 
									?>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row-c flexbox flexbox2" id="row12A">
					<div class="row1">
						<div><i class="fa fa-child bck"></i><label>WHY I?</label></div>
					</div>
					<div class="row2">
						<div class="vertical-center dotted-border"></div>
					</div>
					<div class="row1"></div>	
					<div class="row2 relative">
						<div class="objectives">
							<?php 
								 	$data = array(
								 		'rows' => '3',
								 		'name' => 'whyMe',
								 		'type' => 'text',
								 		'id' => 'whyMe',
								 		'placeholder' => 'Why i...',
								 		'class' => 'textarea-input',
								 		'value' => isset($hob->whyme)?$hob->whyme:'',	
								 		'disabled' => 'disabled',							 		
								 	);
								 	echo form_textarea($data); 
							 ?>
						</div>
					</div>
				</div>
		<!-- <button type="submit" class="btn btn-default pull-right">Submit</button> -->
		<?php echo form_close(); ?>	
		
			</div>
		
				<?php echo form_open('hr/organization_info_update/'.$userid); ?>
			<div class="profile-body shadow">
								<div class="row-c flexbox flexbox2" id="row6A">
					<div class="row1">
						<div><i class="fa fa-mortar-board bck"></i><label>Placement Information</label></div>
					</div>
					<div class="row2">
						<div class="vertical-center dotted-border"></div>
					</div>
					<div class="row1"></div>
					<div class="row2 relative"> 

						<ul class="ul-flex-list-2">
						<li>
									<?php 
								 	$data = array(
								 		'name' => 'userid',
								 		'type' => 'hidden',
								 		'class' => 'input-transparent col49',
								 		'value'	=>  $emp->userid,				
								 		'disabled' => 'disabled',			 		
								 	);
								 	echo form_input($data); 
									 ?>
								</li>
							<li><b>Initials:</b>
								<?php 
								 	$data = array(
								 		'name' => 'initials',
								 		'type' => 'text',
								 		'placeholder' => '',
								 		'class' => 'input-transparent col49',
								 		'value' => isset($org->initials) ? $org->initials : '',		
								 		'disabled' => 'disabled',
								 	);
								 	echo form_input($data); 
									 ?>
							</li>
							<span class="text-danger"><?php echo form_error('initials'); ?></span>
							<li><b>Hired For Project:</b>
									<?php 
									$data = array(
										'p1' => 'Project 1',
										'p2' => 'Project 2',
										);
								 	$data2 = array(
								 		'name' => 'hired-for',
								 		'class' => 'input-transparent col49',	
								 		'disabled' => 'disabled',							 	
								 	);
								 	echo form_dropdown('hired-for',$data,isset($org->hired_for_project)  ? $org->hired_for_project: '' ,$data2); 
									?>
								</li>
								<span class="text-danger"><?php echo form_error('hired-for'); ?></span>
							<li><b>Cluster:</b>
									<?php 
									$data = array(
										'1' => 'Cluster 1',
										'2' => 'Cluster 2',
										);
								 	$data2 = array(
								 		'name' => 'cluster',
								 		'class' => 'input-transparent col49',		
								 		'disabled' => 'disabled',						 	
								 	);
								 	echo form_dropdown('cluster',$data,isset($org->cluster) ? $org->cluster: '',$data2); 
									?>
								</li>
								<span class="text-danger"><?php echo form_error('cluster'); ?></span>
							<li><b>Placement Level:</b>
									<?php 
									$data = array(
										'1' => 'Placement level 1',
										'2' => 'Placement level 2',
										);
								 	$data2 = array(
								 		'name' => 'placement-level',
								 		'class' => 'input-transparent col49',	
								 		'disabled' => 'disabled',							 
								 	);
								 	echo form_dropdown('placement-level',$data,isset($org->placement_level) ? $org->placement_level:'',$data2); 
									?>
								</li>
								<span class="text-danger"><?php echo form_error('placement-level'); ?></span>
							<li><b>Title:</b>
									<?php 
									$data = array(
										'title' => 'title',
										'title2' => 'title2',
										);
								 	$data2 = array(
								 		'name' => 'title',
								 		'class' => 'input-transparent col49',		
								 		'disabled' => 'disabled',						 	
								 	);
								 	echo form_dropdown('title',$data,isset($org->title) ? $org->title: '',$data2); 
									?>
								</li>
								<span class="text-danger"><?php echo form_error('title'); ?></span>
							<li><b>Designation:</b>
									<?php 
									$data = array(
										'Designation 1' => 'Designation 1',
										'Designation 2' => 'Designation 2',
										);
								 	$data2 = array(
								 		'name' => 'designation',
								 		'class' => 'input-transparent col49',		
								 		'disabled' => 'disabled',						 	
								 	);
								 	echo form_dropdown('designation',$data,isset($org->designation) ? $org->designation:'',$data2); 
									?>
								</li>
								<span class="text-danger"><?php echo form_error('designation'); ?></span>
							<li><b>Possible Salary:</b>
									<?php 
									$data = array(
										'Salary 1' => 'Salary 1',
										'Salary 2' => 'Salary 2',
										);
								 	$data2 = array(
								 		'name' => 'possible-salary',
								 		'class' => 'input-transparent col49',	
								 		'disabled' => 'disabled',							 	
								 	);
								 	echo form_dropdown('possible-salary',$data,isset($org->possible_salary) ? $org->possible_salary:'',$data2); 
									?>
								</li>
								<span class="text-danger"><?php echo form_error('possible-salary'); ?></span>
							<li><b>Actual Salary:</b>
									<?php 
									$data = array(
										'Actual 1' => 'Actual 1',
										'Actual 2' => 'Actual 2',
										);
								 	$data2 = array(
								 		'name' => 'actual-salary',
								 		'class' => 'input-transparent col49',	
								 		'disabled' => 'disabled',							 	
								 	);
								 	echo form_dropdown('actual-salary',$data,isset($org->actual_salary) ? $org->actual_salary:'',$data2); 
									?>
								</li>
								<span class="text-danger"><?php echo form_error('actual-salary'); ?></span>
							<li><b>Step:</b>
								<?php
								$data = array(
									'name' => 'step',
									'type' => 'text',
									'class' => 'input-transparent col49',
									'value' => isset($org->step) ? $org->step: '',
									'disabled' => 'disabled',
									);
								echo form_input($data);
								?>
							</li>
							<span class="text-danger"><?php echo form_error('step'); ?></span>
							<li><b>Hired On:</b>
								<?php
								$data = array(
									'name' => 'hired-on',
									'type' => 'date',
									'class' => 'input-transparent col49',
									'value' => isset($org->hired_on) ? $org->hired_on: '',
									'disabled' => 'disabled',
									);
								echo form_input($data);
								?>
							</li>
							<span class="text-danger"><?php echo form_error('hired-on'); ?></span>
							<li><b>Shift:</b>
									<?php 
									$data = array(
										'Shift 1' => 'Shift 1',
										'Shift 2' => 'Shift 2',
										);
								 	$data2 = array(
								 		'name' => 'shift',
								 		'class' => 'input-transparent col49',			
								 		'disabled' => 'disabled',			
								 	);
								 	echo form_dropdown('shift',$data,isset($org->shift)?$org->shift:'',$data2); 
									?>
								</li>
								<span class="text-danger"><?php echo form_error('shift'); ?></span>
							<li><b>Timings:</b>
									<?php 
									$data = array(
										'Morning' => 'Morning',
										'Evening' => 'Evening',
										);
								 	$data2 = array(
								 		'name' => 'timing',
								 		'class' => 'input-transparent col49',		
								 		'disabled' => 'disabled',				
								 	);
								 	echo form_dropdown('timing',$data,isset($org->timings)? $org->timings:'',$data2); 
									?>
								</li>
								<span class="text-danger"><?php echo form_error('timing'); ?></span>
							<li><b>Curricular Unit:</b>
									<?php 
									$data = array(
										'C Unit' => 'C Unit 1',
										'C Unit 1' => 'C Unit 2',
										);
								 	$data2 = array(
								 		'name' => 'c-unit',
								 		'class' => 'input-transparent col49',	
								 		'disabled' => 'disabled',					
								 	);
								 	echo form_dropdown('c-unit',$data,isset($org->curricular_unit) ? $org->curricular_unit: '',$data2); 
									?>
								</li>
								<span class="text-danger"><?php echo form_error('c-unit'); ?></span>
							<li><b>Academic Club:</b>
									<?php 
									$data = array(
										'Academic Club' => 'Academic Club',
										'C Unit 1' => 'C Unit 2',
										);
								 	$data2 = array(
								 		'name' => 'a-club',
								 		'class' => 'input-transparent col49',	
								 		'disabled' => 'disabled',				
								 	);
								 	echo form_dropdown('a-club',$data,isset($org->academic_club)?$org->academic_club:'',$data2); 
									?>
								</li>	

							<li><b>Academic Club Role:</b>
									<?php 
									$data = array(
										'Academic Club role' => 'Academic Club role',
										'C Unit 1' => 'C Unit 2',
										);
								 	$data2 = array(
								 		'name' => 'a-club-role',
								 		'class' => 'input-transparent col49',		
								 		'disabled' => 'disabled',				
								 	);
								 	echo form_dropdown('a-club-role',$data,isset($org->academic_club_role)?$org->academic_club_role:'',$data2); 
									?>
								</li>								
							</ul>
					</div>
				</div>
		<!-- <button type="submit" class="btn btn-default pull-right">Submit</button> -->
		<?php echo form_close(); ?>
			</div>

		<?php echo form_open('hr/emergency_contact_update/'.$userid); ?>
		<div class="profile-body shadow">
				<div class="row-c flexbox flexbox2" id="row5A">
					<div class="row1">
						<div><i class="fa fa-pencil-square-o bck"></i><label>Emergency Contact</label></div>
					</div>
					<div class="row2">
						<div class="vertical-center dotted-border"></div>
					</div>
					<div class="row1"></div>
					<div class="row2 relative">
						<ul class="ul-flex-list-2">
								<li>
									<?php 
								 	$data = array(
								 		'name' => 'userid',
								 		'type' => 'hidden',
								 		'class' => 'input-transparent col49',
								 		'value'	=>  isset($emp->userid)?$emp->userid:'',
								 		'disabled' => 'disabled',							 		
								 	);
								 	echo form_input($data); 
									 ?>
								</li>
							<li><b>Person Name to call in Emergency:</b>
								<?php 
								 	$data = array(
								 		'name' => 'pname',
								 		'type' => 'text',
								 		'placeholder' => 'Person Name',
								 		'class' => 'input-transparent col49',								 	
								 		'value' => isset($emgr->eperson_name)?$emgr->eperson_name:'',
								 		'disabled' => 'disabled',
								 	);
								 	echo form_input($data); 
									 ?>
							</li>
							<span class="text-danger"><?php echo form_error('pname'); ?></span>
							<li><b>Relationship to the person:</b>
								<?php 
								 	$data = array(
								 		'name' => 'relationship',
								 		'type' => 'text',
								 		'placeholder' => 'Relationship',
								 		'class' => 'input-transparent col49',
								 		'value' => isset($emgr->erelationship)?$emgr->erelationship:'',					
								 		'disabled' => 'disabled',			 		
								 	);
								 	echo form_input($data); 
									 ?>
							</li>
							<span class="text-danger"><?php echo form_error('relationship'); ?></span>

							<li><b>Reference person ocupation:</b>
								<?php 
								$data = array(
									'name' => 'roccupation',
									'type' => 'text',
									'placeholder' => 'Occupation',
									'class' => 'input-transparent col49',
									'value' => isset($emgr->eoccupation)?$emgr->eoccupation:'',
									'disabled' => 'disabled',
									);
								echo form_input($data);
								?>
							</li>
							<span class="text-danger"><?php echo form_error('occupation'); ?></span>
							<li><b>Emergency Contact Person:</b>
								<?php 
								 	$data = array(
								 		'name' => 'contact1',
								 		'type' => 'text',
								 		'placeholder' => 'Emergency Contact-1',
								 		'class' => 'input-transparent col49',
								 		'value' => isset($emgr->enumber)?$emgr->enumber:'',		
								 		'disabled' => 'disabled',						 		
								 	);
								 	echo form_input($data); 
									 ?>
							</li>
							<span class="text-danger"><?php echo form_error('contact1'); ?></span>
							
							<li><b>Emergency Contact Person Address:</b>
								<?php 
								 	$data = array(
								 		'name' => 'address1',
								 		'type' => 'text',
								 		'placeholder' => 'Person1 Address',
								 		'class' => 'input-transparent col49',
								 		'value' => isset($emgr->eaddress)?$emgr->eaddress:'',	
								 		'disabled' => 'disabled',							 		
								 	);
								 	echo form_input($data); 
									 ?>
							</li>
							<span class="text-danger"><?php echo form_error('address1'); ?></span>
							
							<li><b>E-mail:</b>
								<?php 
								 	$data = array(
								 		'name' => 'e-email',
								 		'type' => 'text',
								 		'placeholder' => 'Email',
								 		'class' => 'input-transparent col49',
								 		'value' => isset($emgr->eemail)?$emgr->eemail:'',	
								 		'disabled' => 'disabled',							 		
								 	);
								 	echo form_input($data); 
									 ?>
							</li>
							<span class="text-danger"><?php echo form_error('e-email'); ?></span>
						</ul>
		<!-- <button type="submit" class="btn btn-default pull-right">Submit</button> -->
		<?php echo form_close(); ?>
					</div>
			</div>

	</div>
<div class="shadow docs">
		<div class="row-c flexbox flexbox2" id="row12A">
					<div class="row1">
						<div><i class="fa fa-child bck"></i><label>Upload Documents</label></div>
					</div>
					<div class="row2">
						<div class="vertical-center dotted-border"></div>
					</div>
					<div class="row1"></div>	
					<div class="row2 relative">
						<div class="objectives" style="margin-bottom: 5%;">
												<p id="msg"></p>
					        <?php $id_new = $userid;?>
					        <select name="table" id="table" disabled="disabled">
					            <option value="Picture">Upload Picture</option>
					            <option value="CV">Upload CV</option>
					            <option value="CNIC">Upload Cnic</option>
					            <option value="Matric">Matric</option>
					            <option value="Inter">Inter</option>
					            <option value="Bachlor14">Bachlor-14</option>
					            <option value="Bachlor16">Bachlor-16</option>
					            <option value="M.Phil">M.Phil</option>
					            <option value="Post Doctorate">Post Doctorate</option>
					            <option value="Offer_Letter">Offer Letter</option>
					            <option value="Hr_Policy">Hr Policy</option>
					            <option value="Job_Description">Job Description</option>
					            <option value="Termination">Termination</option>
					            <option value="Promotion">Promotion</option>
					        </select>
					        <input class="pull-left" type="file" id="file" name="file" disabled="disabled" />
					        <input type="hidden" name="id" id="id" value="<?php echo $id_new;?>" >
					        <!-- <button id="upload">Upload</button> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url();?>assets1/js/script.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script type="text/javascript" src="js/form-handling.js"></script>	

</body>
</html>
<script type="text/javascript">
	$( function(){
    	$( "#expDateFrom,#expDateTo,#certiDateTo,#certiDateFrom").datepicker();
  	} );
</script>