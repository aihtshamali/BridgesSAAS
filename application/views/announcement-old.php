<!DOCTYPE html>
<html lang="en">
<head>
 	<title>CV Format</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
	<style type="text/css">
		.form-editing{
			display: none;
		}
		.edit-text-btn{
			color: #0362A2;
			text-decoration: underline;
			margin-left: 15px;
			cursor: pointer;
			padding-top: 2px;
		}
		input{
			background: transparent;
			border: 0;
			border-bottom: 1px solid #f2f1f1;
		}
		.list-inputs{
			display: none;
		}
	</style>
</head>
<body>
	<div class="container company flexbox">
		<div class="profile-edit">
			<div class="head-name row-c flexbox flexbox2" id="profileEH1A">
				<div class="row1">
					<div><i class="fa fa-volume-up bck"></i><label>Announcement</label></div>
				</div>
				<div class="row2 flexbox flexbox2">
					<div class="objectives">
						<ul>
							<li class="flexbox form-data"><p class="fName" id="rpTitle">Hr Manager</p><span id="edit-btn" class="edit-text-btn">Edit</span></li>
							<li class="flexbox form-editing"><input id="title" class="" type="text" placeholder="Enter Job title..."><button onclick="text()" class="btn btn-default">Add</button></li>
							<li><p>Dell Incorporation Ltd.</p></li>
							<li><p>Near Muslim Town</p></li>
							<li><p>+92-3-42-123-4567, info@company.com</p></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="profile-body">
				<div class="cv-head flexbox flexbox2" id="profileEH2A">
					<div class="row1 relative">
						<div class="company-image">
							<img class="image" src="images/3.jpg">
						</div>
					</div>
					<div class="row2 first">
						<div class="objectives objectives2">
							<h3>job description</h3>
							<p>Accomplishes department objectives by managing staff; planning and evaluating department activities. Lorum ipsum dolor sit amet. lorum ipsum dolor sit amet. lorum ipsum dolor sit amet. lorum ipsum dolor sit amet.</p>
						</div>

						<div class="objectives objectives2">
							<h3>skills required</h3>
							<p>
								 Presentation Skills, 
								 Internal Communications, 
								 Informing Others, 
								 Verbal Communication, 
								 Closing Skills, 
								 Motivation for Sales 
							</p>
						</div>
					</div>
				</div>
				<div class="row-c flexbox flexbox2" id="profileEH3A">
					<div class="row1">
						<div><i class="fa fa-pencil-square-o bck"></i><label>JOB DETAILS</label></div>
					</div>
					<div class="row2">
						<div class="vertical-center dotted-border"></div>
					</div>
					<div class="row1"></div>
					<div class="row2">
						<div class="objectives">
							<span id="edit-btn-2" class="edit-text-btn">Edit</span>
							<button class="btn btn-default list-inputs" onclick="text2()">Submit</button>
							<ul class="ul-flex-list">
								<li> Monthly Salary Range: <span class="abc abc-hide"> Unspecified</span><input id="salaryRange" class="list-inputs" type="text" placeholder="Enter..."></li>
								<li> Career Level: <span class="abc abc-hide"> Exective/Director</span><input id="careerLevel" class="list-inputs" type="text" placeholder="Enter..."></li>
								<li> Job Location: <span class="abc abc-hide"> Riyadh, SA</span><input id="jobLocation" class="list-inputs" type="text" placeholder="Enter..."></li>
								<li> Company Industry: <span class="abc abc-hide"> Education</span><input id="comIndustry" class="list-inputs" type="text" placeholder="Enter..."></li>
								<li> Company Type: <span class="abc abc-hide"> Private Sector</span><input id="comType" class="list-inputs" type="text" placeholder="Enter..."></li>
								<li> Employment Status: <span class="abc abc-hide"> Full Time</span><input id="empStatus" class="list-inputs" type="text" placeholder="Enter..."></li>
								<li> Employment Type: <span class="abc abc-hide"> unspecified</span><input id="empType" class="list-inputs" type="text" placeholder="Enter..."></li>
								<li> Jobe Role: <span class="abc abc-hide"> Human Resources</span><input id="jobeRole" class="list-inputs" type="text" placeholder="Enter..."></li>
								<li> Number of Vacancies: <span class="abc abc-hide"> unspecified</span><input id="numOfVac" class="list-inputs" type="text" placeholder="Enter..."></li>
								<li> Job Ref.: <span class="abc abc-hide"> unspecified</span><input id="jobRef" class="list-inputs" type="text" placeholder="Enter..."></li>
							</ul>
						</div>	
					</div>
				</div>
				<div class="row-c flexbox flexbox2" id="profileEH3A">
					<div class="row1">
						<div><i class="fa fa-user bck"></i><label>PREFERRED</label></div>
					</div>
					<div class="row2">
						<div class="vertical-center dotted-border"></div>
					</div>
					<div class="row1"></div>
					<div class="row2">
						<div class="objectives">
							<ul class="ul-flex-list">
								<li> Career Level: <span class="abc"> Mid Career</span></li>
								<li> Years of Experience: <span class="abc"> Min: 2</span></li>
								<li> Residence Location: <span class="abc"> unspecified</span></li>
								<li> Gender: <span class="abc"> unspecified</span></li>
								<li> Nationality: <span class="abc"> unspecified</span></li>
								<li> Degree: <span class="abc"> unspecified</span></li>
								<li> Age: <span class="abc"> unspecified</span></li>
							</ul>
						</div>	
					</div>
				</div>
			</div>	
		</div>	
	</div>
	<script type="text/javascript" src="js/script.js">	</script>
	<script type="text/javascript">

		$("#edit-btn").click(function(){
		    $(".form-data").hide();
		    $(".form-editing").show(); 
		});
		$("#edit-btn-2").click(function(){
		    $(".abc-hide").hide();
		    $(".list-inputs").show(); 
		});

	</script>

	<script type="text/javascript">
	    function text()
	    {
		var textbox = document.getElementById("title").value;
	  	var text = document.getElementById("rpTitle");
		text.value =  name;
	  	$.post("php/manage-merit-ajax.php","textbox="+textbox,function(response){
			
		});
	  	document.getElementById("rpTitle").innerHTML=textbox;
		$(".form-editing").hide();
	    }
	    /*Function for list-inputs*/

	    var salaryRange, careerLevel, jobLocation, comIndustry, comType, 
	    empStatus, empType,jobeRole,numOfVac;
	    function text2()
	    {
		var salaryRange = document.getElementById("salaryRange").value;
		var careerLevel = document.getElementById("careerLevel").value;
		var jobLocation = document.getElementById("jobLocation").value;
		var comIndustry = document.getElementById("comIndustry").value;
		var comType = document.getElementById("comType").value;
		var empStatus = document.getElementById("empStatus").value;
		var empType = document.getElementById("empType").value;
	  	var jobeRole = document.getElementById("jobeRole");
		var numOfVac = document.getElementById("numOfVac").value;
		text.value =  name;
	  	$.post("test.php","salaryRange="+salaryRange+"&careerLevel="+careerLevel+
	  		"&jobLocation="+jobLocation+"&comIndustry="+comIndustry+"&comType="+comType+
	  		"&empStatus="+empStatus+"&empType="+empType+"&jobeRole="+jobeRole+"&numOfVac="+numOfVac,function(response2){
			alert(response2);
		});
	  	/*document.getElementById("rpTitle").innerHTML=textbox;*/
		$(".form-editing").hide();
	    }
	</script>
</body>
</html>