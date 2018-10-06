<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bridges Attendance</title>
	<!-- <link rel="stylesheet" type="text/css" href="<php echo base_url();?>assets/emp_profile/css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/emp_profile/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	

	<!-- <link rel="stylesheet" type="text/css" media="all" href="<php echo base_url();?>assets/emp_profile/css/styles.css"> -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/emp_profile/tablesort/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/emp_profile/tablesort/js/jquery.tablesorter.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<style type="text/css" >
	.Cusheight{
		height: 3px !important;
		max-height: 3px !important;
	}
	.bg-performance , .performance-table thead tr th {
    background-color: #dbdbdb !important;
  }
  .performance-table tbody tr td {
    background-color: #F7F7F7 !important;
  }
.tdCustom {
    width: 100%;
    height: 18px;
    padding-right: 3px;
    font-style: italic;
    text-align: right;
    background-color: #e2dbdb;
    font-size: 10px;
    line-height: 11px;
    border-bottom: 1px solid white;}

	.flexbox{
	display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-flow: row wrap;
    flex-wrap: wrap;
	}
	.performance-table thead tr th, .performance-table tbody tr td{
	border-bottom: 1px solid white;
    border-top: 0px;
    border-right: 1px solid #FFF;
    border-bottom: 1px solid #FFF;
    width: 21.874px;
     height: 17.3px; 
    text-align: center;
    font-weight: bold;
    background-color: #dbdbdb;
    line-height: 13px;
    color: #555;
    font-family: calibri;
    font-size: 12px;
		}
		td{
			padding: 0px !important;
			font-size: 16px;
      text-align: center !important;
		}
		th{
			padding-left: 0px !important;
			font-size: 16px;
		}
		.border{
			border-top: 2px solid #ddd;
		}
		.logo{
			width: 90px; 
			height: 100px;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.heading{
			/* margin-top: 10px; */
			margin-bottom: 10px;
			font-weight: 700;
			font-size: 16px;
				
		}
		@media print {
             html, body {
                 margin:0;
                 padding:0;
              
              }

    		#hidePrint{
    			display: none;
    		}
    		td{
			padding: 0px !important;
			font-size: 12px;
		}
		th{
			padding-left: 0px !important;
			font-size: 14px;
		}
		.border{
			border-top: 2px solid #ddd;
		}
		.logo{
			width: 100px; 
			height: 110px;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.heading{
			/* margin-top: 10px; */
			margin-bottom: 10px;
			font-weight: 700;
			font-size: 16px;
				
		}
  }
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12" align="center">
				<h3><?php  echo ucfirst($printinfo->purpose);?> Procedure Report </h3>
                <p>(<?php  echo $user->fname; echo ' '; echo $user->lname; ?>)</p>
			</div>
		</div>
	</div>
	<div class="container" style="padding:20px">	
	  	
	  <div id="flag-content-wrapper" style="">
        <form method="post" action="<?php echo base_url();?>Salaryslip/saveLeave" > 
        <div class="form-group" style="border:1px solid #ccc;">
              <label for="" class="pull-left" style="margin-left:10px">Late <span class="LateSpan"><?php echo $printinfo->lateinput; ?></span> 
			  </label> 
			  <label id ="" for="" class="pull-right" style="margin-right:10px">Leaves <span class="LeavesSpan"><?php echo $printinfo->leaveinput; ?></span>
            </label>
            <label for="" style="border-bottom:1px solid #ccc;width:100%;text-align:center">Remaining Leaves-
              (<span class="Totalholiday" style=""><?php echo $printinfo->holidays?></span>)
              <input  name="holidays" type="hidden"  class="holidaysLe" value="24"  style="border: none;width:34px" readonly>
              <input  name="purpose" type="hidden"  class="purpose" value="24"  style="border: none;width:34px" readonly>
            </label>
            <br>
            <div  style="padding:0 10px;border:1px solid #ccc;">
            <label for="">Monetize My Leave</label>
            <?php if($printinfo->purpose=="monetized"){
               echo '<input type="checkbox"  class="pull-right" checked name="monetizeHoliday">' ;               
            }
            else{
               echo '<input type="checkbox"  class="pull-right" name="monetizeHoliday">';}                
             ?>
            </div>

            <?php if($printinfo->purpose=="late") {?>
            <div id="late"  style="border:1px solid #ccc; padding: 7px">
            <label for="">Reason for being Late</label>
            <input type="hidden" name="Latday" id="Ldate" value="">
            <textarea rows="2" name="LateReason" id="" cols="20" class="form-control" id="reason" placeholder="Late Reason (Application Status)"><?php print_r($printinfo->LateReason);?></textarea>
            </div>
            <?php } else if($printinfo->purpose=="absent" || $printinfo->AbsentReason!=null){ ?>
            <div id="absent" style="border:1px solid #ccc; padding: 7px">
            <label for="">Reason for being Absent</label>
            <input type="hidden" name="absentDay" id="absentDay" value="">
            <textarea rows="2" name="absentReason" id="absentReason" cols="20" class="form-control" id="reason" placeholder="Absent Reason (Application Status)"><?php print_r($printinfo->AbsentReason) ?></textarea>
            </div>
            <?php } else if($printinfo->purpose=="leave" || $printinfo->leaveReason!=null){?>
            <div id="leave" style="border:1px solid #ccc; padding: 7px">
            <label for="">Application for Leave</label>
            <input type="hidden" name="day" id="day" value="">
            <input type="hidden" name="userid" class="userid" value="">
            <textarea rows="2" name="leaveReason" cols="20" class="form-control"  placeholder="Leave Reason (Application Status)"><?php print_r($printinfo->leaveReason)?></textarea>
            </div>
            <?php } ?>
            <div  style="border:1px solid #ccc; padding: 7px;border-top: 2px solid #ccc">
            <label for="">Comments by HR</label>
            <textarea rows="2" name="disap_Reason" cols="20" class="form-control"  placeholder=" ( HR's Feedback )"><?php print_r($printinfo->disap_Reason); ?></textarea>
            <label for="" class="pull-left">Allowed : </label><?php if(isset($printinfo->approve)) { if($printinfo->approve=="on"){ ?><input type="checkbox" checked name="approve"  /><?php } else{ ?>
            <input type="checkbox"  name="approve"  /><?php } }else echo '<input type="checkbox"  name="approve"  />'; ?>
            <div class="pull-right">
            <label for="" class="">Disallowed: </label><?php if(isset($printinfo->disapprove)){ if($printinfo->disapprove=="on"){ ?><input type="checkbox" class="btn btn-slim" checked name="disapprove"  />
            <?php } else{ ?> <input type="checkbox" class="btn btn-slim" name="disapprove"  /> <?php } }else echo '<input type="checkbox" class="btn btn-slim" name="disapprove"  />'?>
            </div><br>
            </div>
            <button type="button" onclick="print('flag-content-wrapper')"  class="btn btn-default btn-xs pull-left" id="reasonPrint" >Print</button>
            <button type="submit" class="btn btn-xs pull-right"  >Submit</button>
        </div>
        </form>
  </div>
</div>
</body>

<script>
var _printinfo='<?=json_encode((array)($printinfo))?>'
_printinfo=JSON.parse(_printinfo);
</script>
<script>
   $( document ).ready(function() {
    if(_printinfo['applicationURL']!=""){
          window.open(_printinfo['applicationURL'], 'Application');

    }
    if(_printinfo['applicationCertificate']!=""){
          window.open(_printinfo['applicationCertificate'], 'Application Certificate');

    }

    });
</script>
</html>