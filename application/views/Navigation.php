<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Task-Manager Navigation</title>
        <link href="<?php echo base_url() ?>assets/css/navigationStyle/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo base_url() ?>assets/css/navigationStyle/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/navigationStyle/operationsAccountsHR.css" type="text/css"  media="all"/>
        <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.js"></script>
        
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        
    </head>
<body>
    <div class="container">
    <div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12" id="main_container">
    	<div class="col-md-3 col-sm-12 col-xs-12 left">
    		<button type="button" class="col-md-12 col-sm-12 col-xs-12 mainMenuButton">Operations</button>
             <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
             <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
	            <a href="http://bridges/bridgessms/Bridges_School_Software/staffAssignmentF/TaskAssignment.php" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Staff Assignment</a>
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
             <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
	            <a href="http://bridges/bridgessms/Bridges_School_Software/weapons-list/manage-weapons-check-list.php" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Weapons Control</a>
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
             <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
	            <a href="http://bridges/bridgessms/Bridges_School_Software/operation/manage-technologies.php" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Equipment, IT, Stores</a>
            </div>
    	</div>
    	<div class="col-md-3 col-sm-12 col-xs-12 left">
        	<button type="button" class="col-md-12 col-sm-12 col-xs-12 mainMenuButton">Admin - Accounts Ops</button>
             <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
             <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
	            <a href="http://bridges/bridgessms/Bridges_School_Software/students-fee/transactions.php" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Revenue</a>
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
             <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
	            <a href="http://bridges/bridgessms/Bridges_School_Software/organogram/manage-ledger.php" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Expenses</a>
            </div>
        </div>

        <div class="col-md-3 col-sm-12 col-xs-12 left">
        	<button type="button" class="col-md-12 col-sm-12 col-xs-12 mainMenuButton">Admin - HR</button>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="<?php echo base_url()?>employeeUpdate" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Employee Update</a>
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="<?php echo base_url()?>attendance/Attendance_Sheet" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Attendance Sheet</a>
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="<?php echo base_url()?>Hr_Dashboard" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Dashboard</a>
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="<?php echo base_url()?>Employee_reg/letterFormat" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Notices<a href="<?php echo base_url()?>Employee_reg/View_letterFormat"  class="view">-View-</a><a  class="view" href="<?php echo base_url() ?>Employee_reg/letterFormat">Data</a></a>
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="<?php echo base_url()?>Admin/AssignedRoles" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Assign Role</a>
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="<?php echo base_url()?>Salaryslip/payroll_Sheet_final" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Payroll System</a>
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="<?php echo base_url()?>Salaryslip" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Salary Slip</a>
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="<?php echo base_url()?>taskmanagement/taskManager?id=1" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank"> Manage task </a>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
        	<button type="button" class="col-md-12 col-sm-12 col-xs-12 mainMenuButton">LMS</button>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="http://bridges/bridgessms/lmsadmin.thebridgesschool.pk" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">LMS Module</a>
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="http://bridges/bridgessms/Bridges_School_Software/Standardized-Tests/index.php" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Standardized Tests</a>
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="http://bridges/bridgessms/Bridges_School_Software/behaviour-management-system/Student_3_months_report.php" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Behavior Management</a>
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="http://bridges/bridgessms/Bridges_School_Software/assembly/assembly_view.php" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Assembly Observation</a>
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="http://bridges/bridgessms/Bridges_School_Software/performance-appraisal/index.php" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">HomeWork</a>
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="http://bridges/bridgessms//Bridges_School_Software/newsletter/insert_newsletter.php" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Newsletter</a>
            </div>
            <?php  if(isset($newsletter->id)) {?>

            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <form action="http://bridges/bridgessms//Bridges_School_Software/newsletter/view.php" style="display: inline !important;" method="post">
                          <input type="hidden" name="id" value="<?php echo $newsletter->id; ?>" />
                          <input type="hidden" name="date_1" value="<?php echo $newsletter->day;?>" />
                          <input type="hidden" name="newsletterYear" value="<?php echo $newsletter->year;?>" />
                          <input class="subMenuButton col-md-10 col-sm-10 col-xs-10" type="submit" value=" View Latest Newsletter" />
                      </form>
                <!-- <a href="http://bridges/bridgessms//Bridges_School_Software/newsletter/insert_newsletter.php" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Current Newsletter</a> -->
            </div>
          <?php } ?>
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="http://bridges/bridgessms/Bridges_School_Software/newsletter/view_newsletter.php" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">View Newsletter</a>
            </div>            
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="http://bridges/bridgessms/Bridges_School_Software/website/addNews.php" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank"> New News</a>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12 left">
            <button type="button" class="col-md-12 col-sm-12 col-xs-12 mainMenuButton">Admin - Recent</button>
             <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <input type="checkbox" id="checkBox" class="checkBox col-md-2 col-sm-2 col-xs-2"/> 
                <a href="<?php echo base_url("Employee_reg/emp_module_20181029")?>" class="subMenuButton col-md-10 col-sm-10 col-xs-10" target="_blank">Dashboard New</a>
            </div>
        </div>
    </div>
    </div></div>
    <div class="col-md-3 hidden-xs" style="margin-top:20px;"></div>
</body>
</html>
