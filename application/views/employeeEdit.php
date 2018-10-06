<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Update</title>
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
        box-shadow: 0px -15px 25px 5px #888888;
    }
    .shadow{
        box-shadow: 0px 0px 25px 0px #888888; margin-top: 1%;
        padding-top: 4%;
    }
    .docs{
        margin-bottom: 15px;
    }
    .shadow-pinfo{
        box-shadow: 0px 0px 25px 0px #888888;
    }
    .mrg-tp-25{
        margin-top: 25px;
    }
    </style>

    
</head>
<!-- <?php var_dump($emp); ?> -->
<body>
    <div class="container cv flexbox">
        <div class="all profile-edit ">
            <!-- <div class="head-name row-c flexbox flexbox2 shadow-header" id="row1A">
                <div class="row1">
                    <div><i class="fa fa-user bck"></i><label>Employee Profile</label></div>
                </div>
                <div class="row2 flexbox flexbox2">
                </div>
            </div> -->
            <div class="head-name row-c flexbox flexbox2 shadow-header" id="row1A">
                <div class="row1">
                    <div><i class="fa fa-user bck"></i><label>Employee Profile</label></div>
                </div>
                <div class="row2 flexbox flexbox2">
                    <div class="objectives">
                        <ul>
                            <li>
                                <input type="text" name="empName" value="<?=$emp->firstname." ".$emp->lastname ?>" id="empNameEdit" placeholder="Your Name" class="input-transparent">
                            </li><li><p><?=$emp->gender?>, 26. Lahore, Pakistan</p></li>
                            <li><p>Gegree, University, Lahore abc@gmail.com</p></li>
                            <li><p>+92334-066-7800, abc@gmail.com</p></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        <?php echo form_open('employeeUpdate/empUpdate/'.$emp->userid); ?>
            <div class="profile-body shadow-pinfo">
                <!-- <div class="cv-head flexbox flexbox2" id="row2A"> -->
                    <div class="row1 relative">
                        <!-- <div class="head-image image"></div> -->
                    </div>
                    <div class="row2 first relative">
                        <div class="objectives">
                        
                        </div>
                    </div>
                <!-- </div> -->
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
                            <textarea name="empCareer" cols="40" rows="3" type="text" id="empCareerEdit" placeholder="Career Objective..." class="textarea-input"></textarea>
                            <span class="text-danger"></span>
                        </div>
                        <div class="objectives">
                            <h3>job objective</h3>
                            <textarea name="empJobObj" cols="40" rows="3" type="text" id="empObjEdit" placeholder="Job Objective..." class="textarea-input"></textarea>
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
                    <div class="row1">
                    </div>
                    <div class="row2 relative">
                        <div class="edit-items">
                            <span id="add-btn-3" class="edit-text-btn" onclick="text3()">Save</span>
                        </div> 
                        <div class="objectives objectives2">
                            <h3>Personal Profile</h3>
                            <ul class="ul-flex-list">
                                <li><b>First Name:</b>
                                    <?php 
                                    $data = array(
                                        'name' => 'firstName',
                                        'id' => 'empProfNameEdit',
                                        'type' => 'text',
                                        'placeholder' => 'Your Name',
                                        'class' => 'input-transparent col49',
                                        'value' => $emp->firstname,                                    
                                    );
                                    echo form_input($data); 
                                     ?>
                                </li>    
                         <span class="text-danger"><?php echo form_error('empName'); ?></span>
                         <ul class="ul-flex-list">
                                <li><b>Last Name:</b>
                                    <?php 
                                    $data = array(
                                        'name' => 'lastName',
                                        'id' => 'empProfNameEdit',
                                        'type' => 'text',
                                        'placeholder' => 'Your Name',
                                        'class' => 'input-transparent col49',
                                        'value' => $emp->lastname,                                    
                                    );
                                    echo form_input($data); 
                                     ?>
                                </li>    
                         <span class="text-danger"><?php echo form_error('empName'); ?></span>
                                <li><b>Gender:</b>
                                    <?php 
                                    $data = array(
                                        'Male' => 'Male',
                                        'Female' => 'Female',
                                        );
                                    $data2 = array(
                                        'name' => 'empGender',
                                        'class' => 'input-transparent col49',                                       
                                    );
                                    echo form_dropdown('empGender',$data,$emp->gender,$data2); 
                                    ?>
                                </li>
                                    
                                
                                <li><b>Date of Birth:</b>
                                    <?php 
                                    $data = array(
                                        'name' => 'empDob',
                                        'id' => 'empNoDEdit',
                                        'type' => 'date',
                                        'placeholder' => 'Date of Birth',
                                        'class' => 'input-transparent col49',
                                        'value' => $emp->date_of_birth,
                                    );
                                    echo form_input($data); 
                                     ?>
                                    </li>
                                <span class="text-danger"><?php echo form_error('empDob'); ?></span>
                                </li>

                                <li>
                                    <b>CNIC:</b>
                                    <?php
                                    $data = array(
                                        'name' => 'cnic',
                                        'type' => 'text',
                                        'placeholder' => 'CNIC',
                                        'class' => 'input-transparent col49',
                                        'value' => $emp->cnic_no,
                                        );
                                    echo form_input($data);
                                    ?>
                                </li>
                                <li>
                                    <b>Employee Code:</b>
                                    <?php
                                    $data = array(
                                        'name' => 'empCode',
                                        'type' => 'text',
                                        'placeholder' => 'Employee Code',
                                        'class' => 'input-transparent col49',
                                        'value' => $emp->emp_code, 
                                        );
                                    echo form_input($data);
                                    ?>
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
                                        'value' => $emp->p_email,                                       
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
                                        'value' => $emp->contact_no,
                                    );
                                    echo form_input($data); 
                                     ?>
                                </li>
                                <li>
                                    <b>Home Phone:</b>
                                    <?php
                                    $data = array(
                                        'name' => 'homePhone',
                                        'type' => 'text',
                                        'placeholder' => 'Employee Home Phone',
                                        'class' => 'input-transparent col49',
                                        'value' => $emp->home_phone,
                                        );
                                    echo form_input($data);
                                    ?>
                                </li>
                            <span class="text-danger"><?php echo form_error('empPhone'); ?></span>
                                <li><b>Address:</b>
                                    <?php
                                    $data = array(
                                        'name' => 'address',
                                        'type' => 'text',
                                        'placeholder' => 'Address',
                                        'class' => 'input-transparent col49',
                                        'value' => $emp->address,
                                        );
                                    echo form_input($data);
                                    ?>
                                </li>
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
                            <input type="text" name="expComp" value="" placeholder="Company Name" class="input-transparent">
                            <p id="certiDateInput">From:
                            <input type="text" name="expDateFrom" value="" id="expDateFrom" class="input-transparent hasDatepicker">

                            Till:
                            <input type="text" name="expDateTO" value="" id="expDateTo" class="input-transparent hasDatepicker">
                            <input type="checkbox" id="1" name="expDateCheck"><label for="1">Present</label></p>
                        </div>
                        <div class="objectives">
                            <input type="text" name="expPosition" value="" id="expPosition" placeholder="Experience Position" class="input-transparent">
                             <textarea name="expDescription" cols="40" rows="3" type="text" id="expDescInput" placeholder="Experience Description..." class="textarea-input"></textarea>
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
                            <input type="text" name="eduInst" value="" id="eduInstInput" placeholder="Institute Name" class="input-transparent">
                                <select name="empCountry" id="eduCountryInput">
                                <option value="" selected="selected">--Country--</option>
                                <option value="pakistan">Pakistan</option>
                                <option value="india">India</option>
                                <option value="united-states">United States</option>
                                <option value="united-kingdom">United Kingdom</option>
                                </select>
                                                                    <select name="empCity" id="eduCityInput" value="">
                                <option value="" selected="selected">--City--</option>
                                <option value="abbottabad">Abbottabad</option>
                                <option value="bahawalpur">Bahawalpur</option>
                                <option value="chitral">chitral</option>
                                <option value="lahore">Lahore</option>
                                </select>
                                                            <span class="text-danger"></span>
                                                            </div>
                                                                <select name="empEducation" id="eduDegreeInput" multiple="multiple" class="tokenize-sample">
                                <option value="" selected="selected">--EDUCATION--</option>
                                <option value="fsc-eng">F.Sc(Engineering)</option>
                                <option value="fsc-med">F.Sc(Medical)</option>
                                <option value="ics">ICS</option>
                                <option value="fa">F.A</option>
                                </select>
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
                            <select name="commSkills" id="commSkillsInput" multiple="multiple" class="tokenize-sample">
                            <option value="" selected="selected">--Managerial--</option>
                            <option value="skill-1">skill-1</option>
                            <option value="skill-2">skill-2</option>
                            <option value="skill-3">skill-3</option>
                            <option value="skill-4">skill-4</option>
                            </select>
                                                    </div>
                                                    <div class="objectives">
                                                        <h3>Managerial Skills</h3>
                                                            <select name="mangSkills" id="compSkillsInput" multiple="multiple" class="tokenize-sample">
                            <option value="" selected="selected">--Managerial--</option>
                            <option value="skill-1">skill-1</option>
                            <option value="skill-2">skill-2</option>
                            <option value="skill-3">skill-3</option>
                            <option value="skill-4">skill-4</option>
                            </select>
                                                    </div>  
                                                    <div class="objectives">
                                                        <h3>Computer Skills</h3>

                                                            <select name="computer" id="compSkillsInput" multiple="multiple" class="tokenize-sample">
                            <option value="" selected="selected">--Select--</option>
                            <option value="ms-office">MS Office</option>
                            <option value="ms-access">MS Access</option>
                            <option value="ms-excel">MS Excel</option>
                            <option value="windows">Windows</option>
                            </select>
                                                    </div>
                                                    <div class="objectives">
                                                        <h3>Technical Skills</h3>

                                                            <select name="techSkills" id="techSkills" multiple="multiple" class="tokenize-sample">
                            <option value="" selected="selected">--Select--</option>
                            <option value="html5">HTML5</option>
                            <option value="css3">CSS3</option>
                            <option value="php">PHP</option>
                            <option value="javascript">javaScript</option>
                            </select>
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
                            <select name="motherLang" id="motherLangInput" class="tokenize-sample">
                                <option value="" selected="selected">--Select--</option>
                                <option value="urdu">urdu</option>
                                <option value="english">English</option>
                                <option value="hindi">Hindi</option>
                                <option value="punjabi">Punjabi</option>
                                </select>
                                                        </div>
                                                        <div class="onjectives">
                                                            <h3>Other Languages</h3>
                                                            <select name="otherLang" id="otherLangInput" multiple="multiple" class="tokenize-sample">
                                <option value="" selected="selected">--Select--</option>
                                <option value="urdu">urdu</option>
                                <option value="english">English</option>
                                <option value="hindi">Hindi</option>
                                <option value="punjabi">Punjabi</option>
                            </select>
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
                                <input type="text" name="certiTitle" value="" placeholder="Certification Title" class="input-transparent">
                            <p id="certiDateInput">Date:
                            <input type="text" name="certiDate" value="" id="certiDateFrom" class="input-transparent col49 hasDatepicker">
                            </p>
                            </div>
                            <textarea name="certiDesc" cols="40" rows="3" type="text" id="certiDescInput" placeholder="Certification Description" class="textarea-input"></textarea>
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
                            <select name="hobbAndInter" id="hobbAndInter" multiple="multiple" class="tokenize-sample">
<option value="" selected="selected">--Select--</option>
<option value="football">Football</option>
<option value="reading">Reading</option>
<option value="gardening">Gardening</option>
<option value="games">Games</option>
</select>
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
                                    <input type="text" name="rpersonName" value="" id="personName" placeholder="Person Name" class="input-transparent show">
                                </li>
                                <li>
                                    <input type="text" name="roccupation" value="" id="occupation" placeholder="Occupation" class="input-transparent show">
                                    </li>
                                <li>
                                    <input type="text" name="rAddress" value="" id="address" placeholder="Address" class="input-transparent show">
                                </li>
                                <li>
                                    <input type="text" name="rEmail" value="" id="email" placeholder="Email" class="input-transparent show">
                                </li>
                                <span class="text-danger"></span>
                                <li>
                                    <input type="text" name="rNumber" value="" id="number" placeholder="Contact Number" class="input-transparent show">
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
                            <textarea name="whyMe" cols="40" rows="3" type="text" id="whyMe" placeholder="Why i..." class="textarea-input"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
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
                            
                            <li><b>Hired For Project:</b>
                                    <?php 
                                    $data = array(
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5',
                                        '6' => '6',
                                        );
                                    $data2 = array(
                                        'name' => 'hired-for-project',
                                        'class' => 'input-transparent col49',                                   
                                    );
                                    
                                    echo form_dropdown('hired-for-project',$data,$emp->hired_for_project,$data2); 
                                    ?>
                                </li>
                                <span class="text-danger"><?php echo form_error('hired-for'); ?></span>

                                <li><b>Status:</b>
                                    <?php 
                                    $data = array(
                                        '1' => 'Active',
                                        '0' => 'DeActive',
                                        );
                                    $data2 = array(
                                        'name' => 'status',
                                        'class' => 'input-transparent col49',                                   
                                    );
                                    
                                    echo form_dropdown('status',$data,$emp->status,$data2); 
                                    ?>
                                </li>
                                <span class="text-danger"><?php echo form_error('status'); ?></span>

                            <li><b>Cluster:</b>
                                    <?php 
                                    $data = array(
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5',
                                        '6' => '6',
                                        );
                                    $data2 = array(
                                        'name' => 'cluster',
                                        'class' => 'input-transparent col49',                                   
                                    );
                                    echo form_dropdown('cluster',$data,$emp->cluster,$data2); 
                                    ?>
                                </li>
                                <span class="text-danger"><?php echo form_error('cluster'); ?></span>
                            <li><b>Placement Level:</b>
                                    <?php 
                                    $data = array(
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5',
                                        '6' => '6',
                                        '7' => '7'
                                        );
                                    $data2 = array(
                                        'name' => 'placement-level',
                                        'class' => 'input-transparent col49',                                
                                    );
                                    echo form_dropdown('placement-level',$data,$emp->placement_level,$data2); 
                                    ?>
                                </li>
                                <span class="text-danger"><?php echo form_error('placement-level'); ?></span>
                            <li><b>Title:</b>
                                    <?php 
                                    $data = array(
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5',
                                        '6' => '6',
                                        '7' => '7',
                                        '8' => '8',
                                        '9' => '9',
                                        '10' => '10',
                                        '11' => '11',
                                        '12' => '12',
                                        '13' => '13',
                                        '14' => '14',
                                        '15' => '15'
                                        );
                                    $data2 = array(
                                        'name' => 'title',
                                        'class' => 'input-transparent col49',                                   
                                    );
                                    echo form_dropdown('title',$data,$emp->title,$data2); 
                                    ?>
                                </li>
                                <span class="text-danger"><?php echo form_error('title'); ?></span>
                                
                            <li><b>Step:</b>
                                    <?php 
                                    $data = array(
                                        'name' => 'step',
                                        'type' => 'text',
                                        'class' => 'input-transparent col49',
                                        'placeholder' => 'Step',
                                        'value' => $emp->step,
                                        );
                                    echo form_input($data); 
                                    ?>
                                </li>
                                <span class="text-danger"><?php echo form_error('actual-salary'); ?></span>
                            <li><b>Salary:</b>
                                    <?php 
                                    $data = array(
                                        'name' => 'actual-salary',
                                        'type' => 'text',
                                        'class' => 'input-transparent col49',
                                        'value' => $emp->actual_salary,
                                        );
                                    echo form_input($data); 
                                    ?>
                                </li>
                                <span class="text-danger"><?php echo form_error('actual-salary'); ?></span>
                                <li><b>Designation:</b>
                                    <div class="row">
									<div class="col-md-4">
	  
	  <select  name="ran">
	  <option value="1">Executive<option>
	  <option value="2">Associate<option>
	  <option value="3">Assistant<option>
	  </select>
      </div>
	  <div class="col-md-4">
	  
	  <select  name="clu">
	  <option value="1">Consulting<option>
	  <option value="2">Analytics<option>
	  <option value="3">Education<option>
	  <option value="4">Marketing<option>
	  <option value="5">Accounts<option>
	  <option value="6">Operation<option>
	  <option value="7">HR<option>
	  </select>
      </div>
	  <div class="col-md-4">
	  
	  <select  name="des">
	  <option value="1">Manager<option>
	  <option value="2">Sr. Manager<option>
	  <option value="3">Coordinator<option>
	  <option value="4">Project Manager<option>
	  <option value="5">Sr. Supervisor<option>
	  <option value="6">Asst. Officer<option>
	  
	  </select>
      </div>
	  </div>
                                </li>
                                <span class="text-danger"><?php echo form_error('actual-salary'); ?></span>
                                <li><b>Descripter:</b>
                                    <?php 
                                    $data = array(
                                        'name' => 'descripter',
                                        'type' => 'text',
                                        'class' => 'input-transparent col49',
                                        'placeholder' => 'Descripter',
                                        'value' => $emp->Descripter,
                                        );
                                    echo form_input($data); 
                                    ?>
                                </li>
                                <span class="text-danger"><?php echo form_error('actual-salary'); ?></span>
                            <li><b>Hired On:</b>
                                <?php
                                $data = array(
                                    'name' => 'hired-on',
                                    'type' => 'date',
                                    'class' => 'input-transparent col49',
                                    'value' => $emp->hired_on,
                                    );
                                echo form_input($data);
                                ?>
                            </li>
                            <span class="text-danger"><?php echo form_error('hired-on'); ?></span>
                            <li>
                                <b>Work Experience:</b>
                                <?php
                                $data = array(
                                    'name' => 'workExp',
                                    'type' => 'text',
                                    'class' => 'input-transparent col49',
                                    'value' => $emp->work_experience,
                                    );
                                echo form_input($data);
                                ?>
                            </li>
                            <li>
                                <b>Professional Industry:</b>
                                <?php
                                $data = array(
                                    'name' => 'professionalIndustry',
                                    'type' => 'text',
                                    'class' => 'input-transparent col49',
                                    'value' => $emp->professional_industry,
                                    );
                                echo form_input($data);
                                ?>
                            </li>
                            <li>
                                <b>Functional Area:</b>
                                <?php
                                $data = array(
                                    'name' => 'functionalArea',
                                    'type' => 'text',
                                    'class' => 'input-transparent col49',
                                    'placeholder' => 'Functional Area',
                                    'value' => $emp->functional_area,
                                    );
                                echo form_input($data);
                                ?>
                            </li>
                            <li>
                                <b>Career Level:</b>
                                <?php
                                $data = array(
                                    'name' => 'careeLevel',
                                    'type' => 'text',
                                    'class' => 'input-transparent col49',
                                    'placeholder' => 'Career Levle',
                                    'value' => $emp->career_level,
                                    );
                                echo form_input($data);
                                ?>
                            </li>
                            <li><b>Shift:</b>
                                    <?php 
                                    $data = array(
                                        'Morning' => 'Morning',
                                        'Evening' => 'Evening',
                                        'Part Time' => 'Part Time',
                                        );
                                    $data2 = array(
                                        'name' => 'shift',
                                        'class' => 'input-transparent col49',                       
                                    );
                                    echo form_dropdown('shift',$data,$emp->shift,$data2); 
                                    ?>
                                </li>
                                <span class="text-danger"><?php echo form_error('shift'); ?></span>
                            <li><b>Time In:</b>
                                    <?php 
                                    $data = array(
                                        'name' => 'timeIn',
                                        'type' => 'time',
                                        'class' => 'input-transparent col49',
                                        'value' => $emp->time_in,
                                        );
                                    echo form_input($data); 
                                    ?>
                                </li>
                                <span class="text-danger"><?php echo form_error('timing'); ?></span>
                                <li><b>Time Out:</b>
                                    <?php 
                                    $data = array(
                                        'name' => 'timeOut',
                                        'type' => 'time',
                                        'class' => 'input-transparent col49',
                                        'value' => $emp->time_out,
                                        );
                                    echo form_input($data); 
                                    ?>
                                </li>
                                <span class="text-danger"><?php echo form_error('timing'); ?></span>
                                <li><b>Attendance Id:</b>
                                    <?php 
                                    $data = array(
                                        'name' => 'userid',
                                        'type' => 'text',
                                        'class' => 'input-transparent col49',
                                        'value' => $emp->userid,
                                        );
                                    echo form_input($data); 
                                    ?>
                                </li>
                            </ul>
                    </div>
                </div>
        
            </div>  
            <div class="profile-body shadow docs">   
        
                <div class="row-c flexbox flexbox2 " id="row5A">
                    <div class="row1">
                        <div><i class="fa fa-pencil-square-o bck"></i><label>Emergency Contact</label></div>
                    </div>
                    <div class="row2">
                        <div class="vertical-center dotted-border"></div>
                    </div>
                    <div class="row1"></div>
                    <div class="row2 relative">
                        <ul class="ul-flex-list-2">
                            <li><b>Person Name to call in Emergency:</b>
                                <?php 
                                    $data = array(
                                        'name' => 'pname',
                                        'type' => 'text',
                                        'placeholder' => 'Person Name',
                                        'class' => 'input-transparent col49',                                   
                                        'value' => $emp->emergency_person_name,
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
                                        'value' => $emp->relationship_to_person,                                       
                                    );
                                    echo form_input($data); 
                                     ?>
                            </li>
                            <span class="text-danger"><?php echo form_error('relationship'); ?></span>
                            <li><b>Emergency Person Contact:</b>
                                <?php 
                                    $data = array(
                                        'name' => 'contact1',
                                        'type' => 'text',
                                        'placeholder' => 'Emergency Contact-1',
                                        'class' => 'input-transparent col49',
                                        'value' => $emp->emergency_contact_1,                                       
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
                                        'placeholder' => 'Person Address',
                                        'class' => 'input-transparent col49',
                                        'value' => $emp->emergency_person_address_1 ,                                       
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
                                        'value' => $emp->e_email,                                        
                                    );
                                    echo form_input($data); 
                                     ?>
                            </li>
                            <span class="text-danger"><?php echo form_error('e-email'); ?></span>
                        </ul>
                    </div>
                </div>
        <button type="submit" class="btn btn-default pull-right mrg-tp-25">Submit</button>
        <?php echo form_close(); ?>
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
                            <select name="table" id="table">
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
                            <input class="pull-left" type="file" id="file" name="file">
                            <input type="hidden" name="id" id="id" value="52">
                            <button id="upload">Upload</button>
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