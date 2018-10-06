<html>
<head>
<title>Bridges Analytics</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://bridges/bridgessms/caan/assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="http://bridges/bridgessms/caan/assets/css/styles.css">
    <!-- Owl Carusel -->
    <link href="http://bridges/bridgessms/caan//assets/css/jquery.barCharts.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" type="text/css" href="http://bridges/bridgessms/caan//assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="http://bridges/bridgessms/caan//assets/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="http://bridges/bridgessms/caan//assets/css/owl.theme.green.css">
    <style type="text/css">
    #divs{
        text-align: justify;
    -ms-text-justify: distribute-all-lines;
    text-justify: distribute-all-lines;
    width:100%;
    }
    .not-active {

   pointer-events: none;
   cursor: default;
}
    </style>


    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- charts -->
    <script type="text/javascript"  src="http://bridges/bridgessms/caan/assets/js/jquery.barChart.js"></script>
    <script type="text/javascript" src="http://bridges/bridgessms/caan/assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    <script type="text/javascript" src="http://bridges/bridgessms/caan/assets/js/dashboard.js"></script>
    <script type="text/javascript" src="http://bridges/bridgessms/caan/assets/js/jquery.tokenize.js"></script>
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="excanvas.js"></script><![endif]-->
    <!-- <script language="javascript" type="text/javascript" src="jquery.min.js"></script> -->
    <script type="text/javascript" src="http://bridges/bridgessms/caan/assets/js/Chart.js"></script>
    
    <script type="text/javascript" src="http://bridges/bridgessms/caan/assets/js/equal-sections.js"></script>

    <script type="text/javascript" src="http://bridges/bridgessms/caan/assets/js/owl.carousel.js"></script>  
</head>
<body>

  
    <div class="dashboard-wrapper">
        <div class="dashboard-header" style="height: 43px">
            <div class="row" style="background-color: #C6CACC;color: #676A6B">
            <div class="col-md-3 col-sm-6" ><img src="<?php echo base_url(); ?>Logoz/caan-logo.png" style="height: 41px"></div>
                        <div class="col-md-6 col-sm-6" style="text-align: center;"><img src="<?php echo base_url(); ?>Logoz/caan slogan.png" style="height:38px"></div>
                <div class="col-md-3 col-sm-6 col-xs-6 header-right centerText">
                    <!-- <span>
                        <p class="paddingUp">Welcome John <span><a href="#" class="whiteLink" style="margin-left: 15px;"> Logout</a></span></p>
                    </span> -->
                    <div class="socialMedia" style="margin-top: 6px; padding-left: 100px;background-color: #C6CACC">
                        <span>
							<a href="#">
                                <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
                            </a>
                        </span>
                    </div> 
                </div>
            </div>
        </div>
        <!-- dashboard-header -->
		
        <div class="dashboard-body-wrapper">
            <div class="dashboard-body">
                <div class="row section1-row">
                    <div class="col-md-3 col-sm-3 col-xs-12 dashboard-section-hr s1"  style="width: 19.80%;">
                        <h1 class="1h h1Class" style="right: -23px;">1</h1>
                        <i class="fa fa-user-o fa-4x col-md-3" aria-hidden="true" class="1i"></i>
                        <!-- <img src="images/user-50.png"> -->
                        
						<div class="labelDiv">
                            <label class="1l labelClass">PLACEMENT & RECORDS</label>
                        </div>
                        <br/>
                        <div class="features">
                            <p style="margin-top: 1px; line-height: 1em; color: rgba(211,211,211,0.8);">
                                <span style="cursor:pointer;font-size: 15px;" id="loadAnnouncement">Pre-Hire Reminders</span>
                                <br><span>Role and Placement</span>
                                <br><span>Profile Completion</span>
                                <br><span>Paperwork Agreement</span>
								
								<br><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">Filter
          <span class="glyphicon glyphicon-filter"></span>
        </a></button>
							</p>
							
							
                        
						</div>
						
                        <div class="tagSpace-hr" style="color: rgba(211,211,211,0.8);padding-left: 5px;line-height:1em;">
                            <h5 class="campaignName"></h5>
                            <h6 class="campaignStart" style="font-size: 10px; line-height:15px;"></h6>
                        </div>

                    </div>
		


				<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Filter Employees</h4>
      </div>
	  <form method="post" action="<?php echo base_url(); ?>index.php/Caan/offermade/">
      <div class="modal-body">
	  <div class="row">
	  <div class="col-md-6">
	  <label>First Name</label>
	  <input name="fname" type="text" class="form-control">
      </div>
	  <div class="col-md-6">
	  <label>Last Name</label>
	  <input name="lname" type="text" class="form-control">
      </div>
	  </div>
	  <div class="row">
	  <div class="col-md-12">
	  <label>Address</label>
	  <input name="address" type="text" class="form-control">
	  </div>
	  </div>
	  <div class="row">
	  <div class="col-md-12">
	  <label>Email</label>
	  <input name="email" type="text" class="form-control">
      </div>
	  </div>
	  <div class="row">
	  <div class="col-md-6">
	  <label>Contact No.</label>
	  <input name="phn" type="text" class="form-control">
      </div>
	  <div class="col-md-6">
	  <label>Probation Period</label>
	  <input name="probation" type="text" class="form-control">
      </div>
	  </div>
	  <div class="row">
	  <div class="col-md-6">
	  <label>Joining Date</label>
	  <input name="joining" type="date" class="form-control">
      </div>
	  <div class="col-md-6">
	  <label>Salary</label>
	  <input name="salary" type="text" class="form-control">
      </div>
	  </div>
	  
	  <div class="row">
	  <h5><strong>Designation</strong></h5>
	  <div class="col-md-4">
	  
	  <select class="form-control" name="d1">
	  <option value="Executive">Executive<option>
	  <option value="Associate">Associate<option>
	  <option value="Assistant">Assistant<option>
	  </select>
      </div>
	  <div class="col-md-4">
	  
	  <select class="form-control" name="d2">
	  <option value="Consulting">Consulting<option>
	  <option value="Analytics">Analytics<option>
	  <option value="Education">Education<option>
	  <option value="Marketing">Marketing<option>
	  <option value="Accounts">Accounts<option>
	  <option value="Operation">Operation<option>
	  <option value="HR">HR<option>
	  </select>
      </div>
	  <div class="col-md-4">
	  
	  <select class="form-control" name="d3">
	  <option value="Manager">Manager<option>
	  <option value="Sr. Manager">Sr. Manager<option>
	  <option value="Coordinator">Coordinator<option>
	  <option value="Project Manager">Project Manager<option>
	  <option value="Sr. Supervisor">Sr. Supervisor<option>
	  <option value="Asst. Officer">Asst. Officer<option>
	  
	  </select>
      </div>
	  </div>
	  
	  <div class="row">
	  <h5><strong>Shift Timing</strong></h5>
	  <div class="col-md-6">
	  <label>Start Time</label>
	  <input name="from" type="time" class="form-control">
      </div>
	  <div class="col-md-6">
	  <label>End Time</label>
	  <input name="to" type="time" class="form-control">
      </div>
	  </div>
	  
      </div>
      <div class="modal-footer">
		<button type="submit" class="btn btn-default" >Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </form>
	  </div>
    </div>

  </div>
</div>









<div id="myModalcv" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload CV</h4>
      </div>
      <form method="post" action="">
      <div class="modal-body">
      <input type="file" class="form-control">
      </div>
    </form>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" >Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




		<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Filter Employees</h4>
      </div>
	  <form method="post" action="">
      <div class="modal-body">
	  <h6>Type</h6>
        <select>
		<option value="profile">
		Profile
		</option>
		<option value="campaign">
		Campaign
		</option>
		
		</select>
      </div>
      <div class="modal-footer">
		<button type="submit" class="btn btn-default" >Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
</form>
    </div>
  </div>
</div>

                    <div class="col-md-3 col-sm-3 col-xs-12 dashboard-section-Hr s2" style="width: 19.80%;">
                        <i class="fa fa-search fa-4x col-md-4" aria-hidden="true" class="2i"></i>
                        <!-- <img src="images/search-52.png"> -->
                        <div class="labelDiv">
                            <label class="2l labelClass" style="text-align: center">ROLES & RESPONSIBILITIES</label>
                        </div>
                        <h1 class="2h h1Class">2</h1>
                     <div class="features">
                            <p style="margin-top: 20px; line-height: 1em; color: rgba(211,211,211,0.8);">
                                <span style="cursor:pointer" >Task Description & <br/>Practical Knowledge</span>
                                <br/>Task Management<br/>Performance Management
                            </p>
                        </div>
                        <div class="tagSpace-hr">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 dashboard-section-Hr s3" style="width: 19.80%;">
                        <i class="fa fa-users fa-4x col-md-4" aria-hidden="true" class="3i"></i>
                        <!-- <img src="images/Contract Job-50.png"> -->
                        <div class="labelDiv">
                            <label class="3l labelClass" style="text-align: center" >EMPLOYEMENT PROTOCOLS</label>
                        </div></br>
                        <h1 class="3h h1Class">3</h1>
                       <div class="features">
                        <p style="margin-top: 2px; line-height: 1em; color: rgba(211,211,211,0.8);">
                                <span style="cursor: pointer;">Employee Handbook<br/>Timing Logistics Equipment<br/>Ethics & Code Accounting<br/>Intellectual, P Secrecy</span>
                            </p>
                        </div>

                        <div class="tagSpace-hr"></div>
                    </div>
                <div class="col-md-3 col-sm-3 col-xs-12 dashboard-section-Hr s4" style="width: 19.80%;">
                        <i class="fa fa-file-text-o fa-4x col-md-4" aria-hidden="true" class="4i"></i>
                        <div class="labelDiv">
                            <label class="4l labelClass" style="text-align: center" >COMPENSATION & BENEFITS</label>
                        </div><br/>
                        <h1 class="4h h1Class">4</h1>
                        <div class="features">
                        <p style="margin-top: 2px; line-height: 1em; color: rgba(211,211,211,0.8);">
                                Compensation<br/>Benefits<br/>Leaves
                            </p>
                        </div>
                        <div class="tagSpace-hr"></div>
                    </div>
                    <div class="col-md-3 dashboard-section-Hr s5" style="width: 19.80%; border:0;">
                        <i class="fa fa-handshake-o fa-4x col-md-4" aria-hidden="true" class="5i"></i>
                        <!-- <img src="images/Helping Hand-50.png"> -->
                        <div class="labelDiv">
                            <label class="5l labelClass" style="text-align: center">RETENTION/REPLACEMENT</label>
                        </div></br>
                        <h1 class="5h h1Class">5</h1>
                       <div class="features">
                            <p style="margin-top: 2px; line-height: 1em; color: rgba(211,211,211,0.8);">
                            Training<br/>Retension, Growth Company<br/>Culture & Social Network<br/>Replacement
                            </p>
                        </div>
                        <div class="tagSpace-hr"></div>
                    </div>
                    </div>
                </div><!-- section1 -->
				<?php foreach($employee as $emp) { ?>
                <div class="col-md-3 col-xs-3 col-sm-3 col-sm-3 col-xs-3 " style="width:19.8%">
                            
                                        <div class="col-md-11 section-employer paddingUp" style="width:267px;height: 161px;">
                                        <div style="position:relative;background-color:#f4f6f9;width:260px;height: 157px;"><div style="font-size: 10px;margin-left:135px;">



                                        <?php if($emp->upload_cv) 
                                        { ?>
                                        <a target="_blank" href="<?php echo $emp->upload_cv; ?>">Original CV (3.1.a), </a>
                                        <?php } else { ?>
                                        <a href="<?php echo base_url(); ?>caan/cv/<?php echo $emp->userid;?>">Original CV (3.1.a), </a>
                                        <?php } ?>
                                        <a href="<?php echo base_url(); ?>index.php/caan/getEmployee/<?php echo $emp->userid; ?>">Professional Profile (3.1.b)</a><br>
                                        <a href="<?php echo base_url(); ?>index.php/caan/getEmployee/<?php echo $emp->userid; ?>">Employment Profile (3.1.c)</a><br>
                                        <a href="<?php echo base_url(); ?>index.php/Caan/biometric/<?php echo $emp->userid; ?>">Biometric</a>,
                                        <a href="#"  onclick="prints(<?php echo $emp->userid; ?>,'<?=$emp->upload_cnic;?>','<?=$emp->upload_payslip_prev;?>','<?=$emp->upload_degree;?>')">Print evidence</a><br>
                                        <a href="<?php echo base_url(); ?>index.php/Caan/offermade/<?php echo $emp->userid; ?>">Offer</a>, <a href="<?php echo base_url(); ?>index.php/Caan/offer/<?php echo $emp->userid; ?>">Offer Letter</a>, <a href="<?php echo base_url(); ?>index.php/Caan/offer/<?php echo $emp->userid; ?>">Re Offer Letter (3.1.d)</a>,<?php if($emp->cardfine>0){ ?>
                                        <a href="<?php echo base_url(); ?>index.php/Caan/biometric/<?php echo $emp->userid; ?>">Re issue card</a>
                                        <?php } else { ?>
                                         <a class="not-active" href="<?php echo base_url(); ?>index.php/Caan/biometric/<?php echo $emp->userid; ?>">Re issue card</a>
                                        <?php } ?>
                                        <br/>
                    <?php 
                    if(!file_exists('uploads/hrPolices/'.$emp->userid.'.html'))
                        $hrPolicyURL= base_url().'caan/hrPolices/'.$emp->userid;
                    else
                        $hrPolicyURL= base_url().'uploads/hrPolices/'.$emp->userid.'.html';

                    ?>
                                        <a href="<?php echo $hrPolicyURL; ?>">HR & Security Policy (3.1.e)</a>
                                        <br/>
                                        <a href="#">Parking,</a> <a href="#">Office Space (3.1.f)</a><br/>
                                        <a href="#">Equipment, (3.1.g)</a><br/>
                                        <a href="<?php echo base_url(); ?>index.php/Caan/emergency/<?php echo $emp->userid; ?>">Emergency Contacts (3.1.h)</a><br/><a href="<?php echo base_url(); ?>index.php/Caan/benefits/<?php echo $emp->userid; ?>">Benefits Profile (3.1.i)</a><!--<a href="#">Officespace Equipment</a> <a href="#">Parking Security</a><br/><a href="#">parking Security</a><br/><a href="#">Officespace</a> <a href="#">Equipment</a>.-->
                                        </div></div>
                                        <div style="position:relative;background-color:#d4d5d6;width:126px;height:157px;top:-157px;"><div style="font-size: 10px;margin-left: 76px;">Offer<br/><br/>Hiring<br/>Agreement<br/><br/><br/><br/>Logistics
                                        </div></div>
										<?php 
										$dob=$emp->date_of_birth;
										$from = new DateTime($dob);
										$to   = new DateTime('today');
										$age=$from->diff($to)->y;


										?>
                                         <div style="position:relative;text-align:center;background-color:#e0e2e5;width:75px;height: 277px;top:-310"><span style="font-size: 10px;line-height: 100%"><?php echo $emp->fname; ?> <?php echo $emp->lname; ?><br/><?php echo $age; ?>,<?php echo $emp->gender; ?><br/><?php echo $emp->city; ?><br/><a   onClick="return confirm('Do you really want to delete this user?');" href="<?php echo base_url(); ?>index.php/Caan/index/<?php echo $emp->userid; ?>" data-toggle="tooltip" title="Click to Make Inactive"><span class="glyphicon glyphicon-ok"></span></a><br><a href="<?php echo $emp->upload_picture; ?>"><img src="<?php echo $emp->upload_picture; ?>" class="img-circle" alt="Cinque Terre" width="50" height="50"></a><br/><a href="">Shifts</a><br><?php echo $emp->pro; ?><br/><?php echo $emp->desn; ?><br/>
                                        </span></div>
                                        
                                         
                                         <canvas id="mycanvas" width="0" height="0"></canvas>
                                              
                                </div><!-- portion 1 -->
                                </div>
                    <div class="col-md-3 col-xs-3 col-sm-3 col-sm-3 col-xs-3 " style="width:19.8%;margin-left: 2px;">
                            
                                        <div class="col-md-11 section-employer paddingUp" style="width:267px;height: 161px;">
                                        <div style="position:relative;background-color:#f4f6f9;width:260px;height: 157px;"><div style="font-size: 11px;margin-left:100px;line-height: 100%"><a href="#">Manual (Pdf)</a><br/><a href="#">(main topics listed)</a><br/><a href="#">Communication (blog)</a><br/><a href="#">Event calender</a><br/><a href="#">Career Lattice(pdf)</a><br/><a href="#">Role & Placement</a> <br/><br/><a href="#">Manual(pdf)</a><br/>Essentials
                                        </div></div>
                                        <div style="position:relative;background-color:#d4d5d6;width:95px;height:157px;top:-157px;"><div style="font-size: 11px;margin-left: 10px;line-height: 100%">About &<br/>Company<br/>Culture<br/><br/>Role & Placement<br/><br/>Code & Ethics
                                        </div></div>
                                      <canvas id="mycanvas" width="0" height="0"></canvas>
                                              
                                </div><!-- portion 1 -->
                                </div>
                                <div class="col-md-3 col-xs-3 col-sm-3 col-sm-3 col-xs-3 " style="width:19.8%;margin-left: 3px;">
                            
                                        <div class="col-md-11 section-employer paddingUp" style="width:267px;height: 161px;">
                                        <div style="position:relative;background-color:#f4f6f9;width:260px;height: 157px;"><div style="font-size: 11px;margin-left:100px;"><a href="#">(pdf)<br/>Essentials</a><br/><a href="#">A&P Policy (pdf)</a><br/><a href="#">A&P Matrix (app)</a><br/><a href="#">A&P (Score)</a><br/><a href="#">T&P Operations Matrix</a><br/><a href="#">T&P Operations (Score)</a><br/><a href="#">OP-sheet</a>
                                        </div></div>
                                        <div style="position:relative;background-color:#d4d5d6;width:95px;height:157px;top:-157px;"><div style="font-size: 11px;margin-left: 10px;line-height: 100%">SOP<br/><br/>Attendance & Punctuality<br/><br/><br/><br/>Tasks&<br/>Performance
                                        </div></div>
                                      
                                         <canvas id="mycanvas" width="0" height="0"></canvas>
                                              
                                </div><!-- portion 1 -->
                                </div>
                                <div class="col-md-3 col-xs-3 col-sm-3 col-sm-3 col-xs-3 " style="width:19.8%;margin-left: 3px;">
                            
                                        <div class="col-md-11 section-employer paddingUp" style="width:267px;height: 161px;">
                                        <div style="position:relative;background-color:#f4f6f9;width:260px;height: 157px;"><div style="font-size: 11px;margin-left:100px;"><a href="#">(app)</a><br/><br/><br/><a href="#">Packages (pdf)(scans)</a><br/><a href="#" data-toggle="modal" id="Leave" data-id="<?php echo $emp->userid;?>" data-target="#LeaveManagement">Leave Manager(app)</a><br/><br/><a href="#">Holiday</a>
                                        </div></div>
                                       
                                        <div style="position:relative;background-color:#d4d5d6;width:95px;height:157px;top:-157px;"><div style="font-size: 11px;margin-left: 10px;">Compensation<br/>& Payroll<br/><br/>Benefits Packages<br/><br/>Leaves &<br/>Holidays
                                        </div></div>
                                         
                                         <canvas id="mycanvas" width="0" height="0"></canvas>
                                              
                                </div><!-- portion 1 -->
                                </div>
                                <div class="col-md-3 col-xs-3 col-sm-3 col-sm-3 col-xs-3 " style="width:19.8%;margin-left: 3px;">
                             <div class="col-md-11 section-employer paddingUp" style="width:267px;height: 161px;">
                                        <div style="position:relative;background-color:#f4f6f9;width:260px;height: 157px;"><div style="font-size: 11px;margin-left:100px;"><a href="#">Manual (pdf)</a><br/><a href="#">essentials</a><br/><br/><a href="#">(appointmrnts with)</a><br/><br/><a href="#">Exit Policy (pdf)(essentials)</a><br/><a href="#">Exit Comm(blog)</a>
                                        </div></div>
                                        <div style="position:relative;background-color:#d4d5d6;width:95px;height:157px;top:-157px;"><div style="font-size: 11px;margin-left: 10px;">Grievance<br/>Procedure<br/><br/>Counselling<br/><br/>Exit &<br/>Replacement
                                        </div></div>
                                       <canvas id="mycanvas" width="0" height="0"></canvas>
                                              
                                </div><!-- portion 1 -->
                                </div>
								<?php } ?>


<div id="LeaveManagement" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Leave Assigned</h4>
      </div>
      <div class="modal-body">

      <form  id ="hel" action="<?php echo base_url()?>Hr/AssignForLeave" method="Post">
        <input type="hidden" id="userid" name="userid">
        <label>Month: </label>
        <select name="month" class="form-control">
          <?php $j=0; for($i=1;$i<=12;$i++) {
              $j=$i;
            if($j<10)
            {
              $j="0".$j;
            }
            ?>
            
          <option value="<?php echo $j ?>"><?php echo $i; ?></option>
          <?php }?>
        </select>
        <button type="submit" class="btn submitdiv btn-default" >Submit</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                   <!--  <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                           
                                </div>
                </div>
                  <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>  <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>  <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>  <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>  <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>  <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>  <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>  <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>  <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>  <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>  <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>  <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div>
                <div class="col-md-3 col-xs-3 col-sm-3" style="width:19.8%">
                                        <div class="col-md-11 section-employer paddingUp">
                                            <canvas id="mycanvas" width="80" height="80"></canvas>
                                </div>
                </div> -->

            </div>
						<!-- dashboard-body -->
        </div><!-- dashboard-body-wrapper -->
    </div><!-- dashboard-wrapper -->
	
	<script>
	function del() 
{
    var conf= confirm("Do you really want to make this user Inactive?");
    if (conf== true){
       document.frm.action = "delete.php";
       document.frm.submit();
    }else{
      return;
    }
}
function prints(id,cnic,presal,degree)
{
    // e.preventDefault();
    // alert(cv);

    window.open("caan/printevidence/"+id);
    window.open(cnic).print();
    window.open(presal).print();
    window.open(degree).print();
    // window.open("www.fb.com").print();
    // window.open("www.google.com").print();
    // return false;
}

$(document).on("click", "#Leave", function () {
     var userid = $(this).data('id');
     $("#userid").val(userid);


     //   Ajax


      $('.sadfsa').on('click', function(e)
      {
        e.preventDefault();
        var personal_details = $("#hel").serialize();
        console.log(personal_details);
        $.ajax( 
        {
          type:'POST',
          url:'<?php echo base_url(); ?>Hr/AssignForLeave',
          data: personal_details,
          success: function(data)
          {
            console.log(data);
          }
        });
      });
     // alert($("#userid").val());
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
function type()
{
	alert("hello");
}
	</script>
    </body>
    </html>-