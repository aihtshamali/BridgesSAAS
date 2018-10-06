<!DOCTYPE html>
<html>
<head>
	<title>Hr form</title>
</head>
<body>
<div class="container">

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Personal Information</h4> 
            </div>
            <?php echo $this->session->flashdata('msg'); ?>
            <div class="panel-body">
                <?php $attributes = array("name" => "registrationform");
                echo form_open("hr/new_recruitment", $attributes);?>
                <div class="form-group">
                    <label for="fname">First Name *</label>
                    <input class="form-control inlineFormInput" name="fname" placeholder="First Name" type="text" value="<?php echo set_value('fname'); ?>" />
                    <span class="text-danger"><?php echo form_error('fname'); ?></span>
                </div>

                <div class="form-group">
                    <label for="lname">Last Name *</label>
                    <input class="form-control" name="lname" placeholder="Last Name" type="text" value="<?php echo set_value('lname'); ?>" />
                    <span class="text-danger"><?php echo form_error('lname'); ?></span>
                </div>

                <div class="form-group">
                	<label for="gender">Gender *</label>
	                	<label class="radio-inline">
	                		<input type="radio" name="gender" value="Male" <?php echo set_radio('gender', 'Male'); ?>>Male
	                	</label>
	                	<label class="radio-inline">
	                		<input type="radio" name="gender" value="Female" <?php echo set_radio('gender', 'Female'); ?>>Female
	                	</label>
	                	<span class="text-danger"><?php echo form_error('gender'); ?></span>
                </div>

                <div class="form-group">
				        <label class="control-label" for="date">Date of Birth *</label>
				        <input class="form-control" name="date" placeholder="MM/DD/YYYY" type="date" value="<?php echo set_value('date'); ?>" />
		            <span class="text-danger"><?php echo form_error('date'); ?></span>
                </div>
                
                <div class="form-group">
                    <label for="address">Address *</label>
                    <input class="form-control" name="address" placeholder="Address" type="text" value="<?php echo set_value('address'); ?>" />
                    <span class="text-danger"><?php echo form_error('address'); ?></span>
                </div>

                <div class="form-group">
				  <label for="city">City *</label>
				  <select class="form-control" name="city">
				    <?php foreach ($cities as $id => $city): ?>
				    <option  value="<?php echo $id?>" <?php echo  set_select('city', $id); ?>> <?php echo $city;?></option>
				     <?php endforeach; ?> 
				  </select>
				  <span class="text-danger"><?php echo form_error('city'); ?></span>
				</div>

                <div class="form-group">
                    <label for="cnic">CNIC NO *</label>
                    <input class="form-control" name="cnic" placeholder="CNIC NO" type="text" value="<?php echo set_value('cnic'); ?>" />
                    <span class="text-danger"><?php echo form_error('cnic'); ?></span>
                </div>

                <div class="form-group">
                	<label for="contact-mobile">Contact Mobile *</label>
                	<input class="form-control" type="text" name="contact-mobile" value="<?php echo set_value('contact-mobile'); ?>">
                	<span class="text-danger"><?php echo form_error('contact-mobile'); ?></span>
                </div>

                <div class="form-group">
                	<label for="home-phone">Home Phone *</label>
                	<input class="form-control" type="text" name="home-phone" placeholder="Home phone" value="<?php echo set_value('home-phone'); ?>" />
                	<span class="text-danger"><?php echo form_error('home-phone'); ?></span>
                </div>

                <div class="form-group">
                	<label for="email">E-mail *</label>
                	<input class="form-control" type="text" name="email" placeholder="E-mail" value="<?php echo set_value('email'); ?>">
                	<span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>

                <div class="panel-heading">
                <h4>3. Emergency Contact </h4> 
            	</div>

                <div class="form-group">
                    <label for="pname">Person Name to call in Emergency *</label>
                    <input class="form-control" name="pname" placeholder="Enter Name to call in Emergency" type="text" value="<?php echo set_value('pname'); ?>" />
                    <span class="text-danger"><?php echo form_error('pname'); ?></span>
                </div>

                <div class="form-group">
                    <label for="relationship">Relationship to the person *</label>
                    <input class="form-control" name="relationship" placeholder="Enter Person Relationship" type="text" value="<?php echo set_value('relationship'); ?>" />
                    <span class="text-danger"><?php echo form_error('relationship'); ?></span>
                </div>

                <div class="form-group">
                	<label for="contact1">Emergency Contact Person-1</label>
                	<input class="form-control" type="text" name="contact1" placeholder="Enter Your Phone No" value="<?php echo set_value('contact1'); ?>" />
                	<span class="text-danger"><?php echo form_error('contact1'); ?></span>
                </div>

                <div class="form-group">
                	<label for="contact2">Emergency Contact Person-2</label>
                	<input class="form-control" type="text" name="contact2" placeholder="Enter Your Phone No" value="<?php echo set_value('contact2'); ?>" />
                	<span class="text-danger"><?php echo form_error('contact2'); ?></span>
                </div>

                <div class="form-group">
                    <label for="address1">Emergency Contact Person Address1 *</label>
                    <input class="form-control" name="address1" placeholder="Emergency Contact Person Address" type="text" value="<?php echo set_value('address1'); ?>" />
                    <span class="text-danger"><?php echo form_error('address1'); ?></span>
                </div>

                <div class="form-group">
                    <label for="address2">Emergency Contact Person Address2 *</label>
                    <input class="form-control" name="address2" placeholder="Emergency Contact Person Address" type="text" value="<?php echo set_value('address2'); ?>" />
                    <span class="text-danger"><?php echo form_error('address2'); ?></span>
                </div>
                
                <div class="form-group">
				  <label for="city">City *</label>
				  <select class="form-control" name="city">
				    <?php foreach ($cities as $id => $city): ?>
				    <option  value="<?php echo $id?>" <?php echo  set_select('city', $id); ?>> <?php echo $city;?></option>
				     <?php endforeach; ?> 
				  </select>
				  <span class="text-danger"><?php echo form_error('city'); ?></span>
				</div>

                <div class="form-group">
                	<label for="e-email">E-mail *</label>
                	<input class="form-control" type="text" name="e-email" placeholder="E-mail" value="<?php echo set_value('email'); ?>">
                	<span class="text-danger"><?php echo form_error('e-email'); ?></span>
                </div>

                <div class="panel-heading">
                <h4>4. Professional Information </h4> 
            	</div>

                <div class="form-group">
                    <label for="job-start-date">First Job Start date</label>
                    <input class="form-control" name="job-start-date" placeholder="MM/DD/YYYY" type="date" value="<?php echo set_value('job-start-date'); ?>" />
                    <span class="text-danger"><?php echo form_error('job-start-date'); ?></span>
                </div>

                <div class="form-group">
				  <label for="work-exp">Work Experience</label>
				  <select class="form-control" id="work-exp" name="work-exp" >
				  	<option value=" ">--Select--</option>
				    <option value="1 " <?php echo set_select('work-exp', '1'); ?>>Less Than one Year</option>
				    <option value="2 " <?php echo set_select('work-exp', '2'); ?>>1 Year</option>
				  </select>
				  <span class="text-danger"><?php echo form_error('work-exp'); ?></span>
				</div>

                <div class="form-group">
                	<label for="p-industry">Professional Industry</label>
                	<select class="form-control" name="p-industry">
                		<option value=" ">--Select--</option>
				    	<option value="CS" <?php echo set_select('p-industry', 'CS'); ?>> Computer Science</option>
				  	</select>
                	<span class="text-danger"><?php echo form_error('p-industry'); ?></span>
                </div>

                <div class="form-group">
                	<label for="f-area">Functional Area</label>
                	<select class="form-control" name="f-area">
                		<option value=" ">--Select--</option>
				    	<option value="development" <?php echo set_select('f-area', 'development'); ?>> Development</option>
				  	</select>
                	<span class="text-danger"><?php echo form_error('f-area'); ?></span>
                </div>

                <div class="form-group">
                    <label for="c-level">Career Level</label>
                    <select class="form-control" name="c-level">
                    	<option value=" ">--Select--</option>
				    	<option  value="middle" <?php echo set_select('c-level', 'middle'); ?>> Middle</option>
				  	</select>
                    <span class="text-danger"><?php echo form_error('c-level'); ?></span>
                </div>

                <div class="panel-heading">
                	<h4>5. Organizational Information </h4> 
            	</div>

                <div class="form-group">
                    <label for="initials">Initials *</label>
                    <input class="form-control" type="text" name="initials" value="<?php echo set_value('initials'); ?>" />
                    <span class="text-danger"><?php echo form_error('initials'); ?></span>
                </div>

                <div class="form-group">
                	<label for="hired-on">Hired On *</label>
                	<input class="form-control" type="date" name="hired-on" value="<?php echo set_value('hired-on'); ?>" >
                <span class="text-danger"><?php echo form_error('hired-on'); ?></span>
                </div>

                <div class="form-group">
				  <label for="hired-for">Hired for Project</label>
				  <select class="form-control" name="hired-for" >
				  	<option value=" ">--Select--</option>
				    <option value="1 " <?php echo set_select('hired-for', '1'); ?>>Less Than one Year</option>
				    <option value="2 " <?php echo set_select('hired-for', '2'); ?>>1 Year</option>
				  </select>
				  <span class="text-danger"><?php echo form_error('hired-for'); ?></span>
				</div>

                <div class="form-group">
                	<label for="cluster">Cluster</label>
                	<select class="form-control" name="cluster">
                		<option value=" ">--Select--</option>
				    	<option value="1" <?php echo set_select('cluster', '1'); ?>> Cluster</option>
				  	</select>
                	<span class="text-danger"><?php echo form_error('cluster'); ?></span>
                </div>

                <div class="form-group">
                	<label for="placement-level">Placement Level</label>
                	<select class="form-control" name="placement-level">
                		<option value=" ">--Select--</option>
				    	<option value="1" <?php echo set_select('placement-level', '1'); ?>> Placement level</option>
				  	</select>
                	<span class="text-danger"><?php echo form_error('placement-level'); ?></span>
                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <select class="form-control" name="title">
                    	<option value=" ">--Select--</option>
				    	<option  value="title" <?php echo set_select('title', 'title'); ?>> Title</option>
				  	</select>
                    <span class="text-danger"><?php echo form_error('title'); ?></span>
                </div>

                <div class="form-group">
                	<label for="designation">Designation</label>
                	<input class="form-control" type="text" name="designation" placeholder="designation" value="<?php echo set_value('designation'); ?>">
                	<span class="text-danger"><?php echo form_error('designation'); ?></span>
                </div>

                <div class="form-group">
                	<label for="possible-salary">Possible Salary</label>
                	<input class="form-control" type="text" name="possible-salary" value="<?php echo set_value('possible-salary'); ?>">
                	<span class="text-danger"><?php echo form_error('possible-salary'); ?></span>
                </div>

                <div class="form-group">
                	<label for="actual-salary">Actual Salary</label>
                	<select class="form-control" name="actual-salary">
                		<option value="">--Select--</option>
                		<option value="actual Salary" <?php echo set_select('actual-salary', 'actual Salary'); ?>>Actual Salary</option>
                	</select>
                	<span class="text-danger"><?php echo form_error('actual-salary'); ?></span>
                </div>

                <div class="form-group">
                    <label for="step">Step</label>
                    <select class="form-control" name="step">
                    	<option value=" ">--Select--</option>
				    	<option  value="step" <?php echo set_select('step', 'step'); ?> >Step</option>
				  	</select>
                    <span class="text-danger"><?php echo form_error('step'); ?></span>
                </div>

                <div class="form-group">
                    <label for="shift">Shift</label>
                    <select class="form-control" name="shift">
                    	<option value=" ">--Select--</option>
				    	<option  value="shift" <?php echo set_select('shift', 'shift'); ?>>Shift</option>
				  	</select>
                    <span class="text-danger"><?php echo form_error('shift'); ?></span>
                </div>

                <div class="form-group">
                    <label for="timing">Timings</label>
                    <select class="form-control" name="timing">
                    	<option value=" ">--Select--</option>
				    	<option  value="timing" <?php echo set_select('timing', 'timing'); ?>>Timings</option>
				  	</select>
                    <span class="text-danger"><?php echo form_error('timing'); ?></span>
                </div>

                <div class="form-group">
                    <label for="c-unit">Curricular Unit</label>
                    <select class="form-control" name="c-unit">
                    	<option value=" ">--Select--</option>
				    	<option  value="c-unit" <?php echo set_select('c-unit', 'c-unit'); ?>>Curricular Unit</option>
				  	</select>
                    <span class="text-danger"><?php echo form_error('c-unit'); ?></span>
                </div>

                <div class="form-group">
                    <label for="a-club">Acedemic Club</label>
                    <select class="form-control" name="a-club">
                    	<option value=" ">--Select--</option>
				    	<option  value="Academic Club" <?php echo set_select('a-club', 'Academic Club'); ?>>Academic Club</option>
				  	</select>
                    <span class="text-danger"><?php echo form_error('a-club'); ?></span>
                </div>

                <div class="form-group">
                    <label for="a-club-role">Acedemic Club Role</label>
                    <select class="form-control" name="a-club-role">
                    	<option value=" ">--Select--</option>
				    	<option  value="a-club-role" <?php echo set_select('a-club-role', 'a-club-role'); ?>>Acdemic Club Role</option>
				  	</select>
                    <span class="text-danger"><?php echo form_error('a-club-role'); ?></span>
                </div>

                <div class="form-group">
                	<label for="job-decription">Job Description</label>
                	<textarea class="form-control" rows="10" name="job-decription" ></textarea>
                    <span class="text-danger"><?php echo form_error('job-decription'); ?></span>                	
                </div>

                <div class="form-group">
                	<label for="remarks">Remarks</label>
                	<textarea class="form-control" rows="10" name=="remarks"></textarea>
                    <span class="text-danger"><?php echo form_error('remarks'); ?></span>                	
                </div>

                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Signup</button>
                    <button name="cancel" type="reset" class="btn btn-default">Reset</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>