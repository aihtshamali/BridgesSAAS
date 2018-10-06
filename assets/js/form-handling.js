/* Announcement Title Managment Strats */
$("#edit-btn").click(function(){
    $(".form-data").hide();
    $(".form-editing").show();
	var textbox123 = $( "#rpTitle" ).text();
	document.getElementById("title").value=textbox123; 
});
function text()
{
	var textbox = document.getElementById("title").value;
		var text = document.getElementById("rpTitle");
	text.value =  name;
		$.post("php/manage-merit-ajax.php","textbox="+textbox,function(response){
		
	});
	document.getElementById("rpTitle").innerHTML=textbox;
	$(".form-editing").hide();
	$(".form-data").show();
}
/* Announcement Title ends here*/

$("#edit-btn-0").click(function(){
    $("#edit-btn-0, #jobDescription, #skillsReq").hide();
    $("#add-btn-0, #jobDescInput, #skillsReqInput").addClass("show");
	var textbox123 = $( "#jobDescription" ).text();
	document.getElementById("jobDescInput").value=textbox123;
	var textbox123 = $( "#skillsReq" ).text();
	document.getElementById("skillsReqInput").value=textbox123; 
});
function text0()
{
	var textbox00 = document.getElementById("jobDescInput").value;
	var text00 = document.getElementById("skillsReqInput");
	text.value =  name;
		$.post("php/manage-merit-ajax.php","textbox="+textbox,function(response){
		
	});
	document.getElementById("rpTitle").innerHTML=textbox;
	$(".form-editing").hide();
	$(".form-data").show();
}





/* Announcement Job Details Starts here*/
$("#edit-btn-2").click(function(){
	/*Hiding text fields*/
    $(".ul-flex-list .abc-hide, #edit-btn-2").hide();
    /*Showing inputs fields*/
    $(".ul-flex-list .list-inputs").show();
    $("#add-btn-2").addClass("show");

	var listItemsLength = $('ul.ul-flex-list li').length;
	for(var start=1; start<=listItemsLength; start++)
	{
		var assignToSpan = $("ul.ul-flex-list > li:nth-child("+start+") span").text();
		$("ul.ul-flex-list > li:nth-child("+start+") input[type='text']").val(assignToSpan);
	}	
});

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
	$.post("test.php","salaryRange="+salaryRange+"&careerLevel="+careerLevel+
		"&jobLocation="+jobLocation+"&comIndustry="+comIndustry+"&comType="+comType+
		"&empStatus="+empStatus+"&empType="+empType+"&jobeRole="+jobeRole+"&numOfVac="+numOfVac,function(response2){
		alert(response2);
	});
	$(".form-editing").hide();
}

/*Announcement job details ends here*/

/*Announcement Preffered Starts here*/

$("#edit-btn-3").click(function(){
	/*Hiding text fields*/
    $(".ul-flex-list-2 .abc-hide, #edit-btn-3").hide();
    /*Showing inputs fields*/
    $(".ul-flex-list-2 .list-inputs").show();
    $("#add-btn-3").addClass("show");
	
	var listItemsLength = $('ul.ul-flex-list-2 li').length;
	for(var start=1; start<=listItemsLength; start++)
	{
		var assignToSpan = $("ul.ul-flex-list-2 > li:nth-child("+start+") span").text();
		$("ul.ul-flex-list-2 > li:nth-child("+start+") input[type='text']").val(assignToSpan);
	}
});

var annPrefCareerLevel, annPrefYearsOfExp, annPrefResidenceLoc, annPrefGender, annPrefNationality, 
annPrefDegree, annPrefAge;
function text3()
{
	var annPrefCareerLevel = document.getElementById("annPrefCareerLevel").value;
	var annPrefYearsOfExp = document.getElementById("annPrefYearsOfExp").value;
	var annPrefResidenceLoc = document.getElementById("annPrefResidenceLoc").value;
	var annPrefGender = document.getElementById("annPrefGender").value;
	var annPrefNationality = document.getElementById("annPrefNationality").value;
	var annPrefDegree = document.getElementById("annPrefDegree").value;
	var annPrefAge = document.getElementById("annPrefAge").value;
	$.post("test.php","annPrefCareerLevel="+annPrefCareerLevel+"&annPrefYearsOfExp="+annPrefYearsOfExp+
		"&annPrefResidenceLoc="+annPrefResidenceLoc+"&annPrefGender="+annPrefGender+"&annPrefNationality="+annPrefNationality+
		"&annPrefDegree="+annPrefDegree+"&annPrefAge="+annPrefAge,function(response3){
		alert(response3);
	});
	$(".form-editing").hide();
}

/*Announcement Preffered Ends here*/


/*coporate-profile section#2 starts here*/
$("#edit-btn-cor-edit-1").click(function(){
	/*Hiding text fields*/
    $(".cor-edit-1 .abc-hide, #edit-btn-cor-edit-1").hide();
    /*Showing inputs fields*/
    $(".cor-edit-1 .list-inputs").show();
    $("#add-btn-cor-edit-1").addClass("show");
	
	var listItemsLength = $('ul.cor-edit-1 li').length;
	for(var start=1; start<=listItemsLength; start++)
	{
		var assignToSpan = $("ul.cor-edit-1 > li:nth-child("+start+") span").text();
		$("ul.cor-edit-1 > li:nth-child("+start+") input[type='text']").val(assignToSpan);
	}
});

var corProfComIndustry, corProfComType, corProfLocation, corProfEmail, corProfPhone, 
corProfEmployees;
function text3()
{
	var corProfComIndustry = document.getElementById("corProfComIndustry").value;
	var corProfComType = document.getElementById("corProfComType").value;
	var corProfLocation = document.getElementById("corProfLocation").value;
	var corProfEmail = document.getElementById("corProfEmail").value;
	var corProfPhone = document.getElementById("corProfPhone").value;
	var corProfEmployees = document.getElementById("corProfEmployees").value;
	$.post("test.php","corProfComIndustry="+corProfComIndustry+"&corProfComType="+corProfComType+
		"&corProfLocation="+corProfLocation+"&corProfEmail="+corProfEmail+"&corProfPhone="+corProfPhone+
		"&corProfEmployees="+corProfEmployees,function(responseCorSec1){
		alert(responseCorSec1);
	});
}

/* Ends here*/

/*coporate-profile section#2 starts here*/
$("#edit-btn-cor-edit-2").click(function(){
	/*Hiding text fields*/
    $(".cor-edit-2 .abc-hide, #edit-btn-cor-edit-2").hide();
    /*Showing inputs fields*/
    $(".cor-edit-2 .list-inputs").show();
    $("#add-btn-cor-edit-2").addClass("show");
	
	var listItemsLength = $('ul.cor-edit-2 li').length;
	for(var start=1; start<=listItemsLength; start++)
	{
		var assignToSpan = $("ul.cor-edit-2 > li:nth-child("+start+") span").text();
		$("ul.cor-edit-2 > li:nth-child("+start+") input[type='text']").val(assignToSpan);
	}
});

var corProfSalaryRange, corProfYearsOfExp, corProfJobLocation, corProfGender, corProfNationality, 
corProfDegree, corProfAge;
function text3()
{
	var corProfSalaryRange = document.getElementById("corProfSalaryRange").value;
	var corProfYearsOfExp = document.getElementById("corProfYearsOfExp").value;
	var corProfJobLocation = document.getElementById("corProfJobLocation").value;
	var corProfGender = document.getElementById("corProfGender").value;
	var corProfNationality = document.getElementById("corProfNationality").value;
	var corProfDegree = document.getElementById("corProfDegree").value;
	var corProfAge = document.getElementById("corProfAge").value;
	$.post("test.php","corProfSalaryRange="+corProfSalaryRange+"&corProfYearsOfExp="+corProfYearsOfExp+
		"&corProfJobLocation="+corProfJobLocation+"&corProfGender="+corProfGender+"&corProfNationality="+corProfNationality+
		"&corProfDegree="+corProfDegree+"&corProfAge="+corProfAge,function(response3){
		alert(response3);
	});
}

/*Announcement Preffered Ends here*/

/*employee profile job expectaion starts here*/
$("#edit-btn-4").click(function(){
	//Hiding text fields
    $(".abc-hide, #edit-btn-4").hide();
    //Showing inputs fields
    $(".employee-expectations .list-inputs").show();
    $("#add-btn-cor-edit-2").addClass("show");
	
	var listItemsLength = $('ul.employee-expectations li').length;
	for(var start=1; start<=listItemsLength; start++)
	{
		var assignToSpan = $("ul.employee-expectations > li:nth-child("+start+") span").text();
		$("ul.employee-expectations > li:nth-child("+start+") input[type='text']").val(assignToSpan);
	}
});

var corProfSalaryRange, corProfYearsOfExp, corProfJobLocation, corProfGender, corProfNationality, 
corProfDegree, corProfAge;
function text3()
{
	var corProfSalaryRange = document.getElementById("corProfSalaryRange").value;
	var corProfYearsOfExp = document.getElementById("corProfYearsOfExp").value;
	var corProfJobLocation = document.getElementById("corProfJobLocation").value;
	var corProfGender = document.getElementById("corProfGender").value;
	var corProfNationality = document.getElementById("corProfNationality").value;
	var corProfDegree = document.getElementById("corProfDegree").value;
	var corProfAge = document.getElementById("corProfAge").value;
	$.post("test.php","corProfSalaryRange="+corProfSalaryRange+"&corProfYearsOfExp="+corProfYearsOfExp+
		"&corProfJobLocation="+corProfJobLocation+"&corProfGender="+corProfGender+"&corProfNationality="+corProfNationality+
		"&corProfDegree="+corProfDegree+"&corProfAge="+corProfAge,function(response3){
		alert(response3);
	});
}

/*Announcement Preffered Ends here*/

/*employee profile job expectaion starts here*/
$("#edit-btn-job-expectations").click(function(){
	//Hiding text fields
    $(".abc-hide, #edit-btn-job-expectations").hide();
    //Showing inputs fields
    $(".employee-job-expectations .list-inputs").show();
    $("#add-btn-cor-edit-2").addClass("show");
	
	var listItemsLength = $('ul.employee-job-expectations li').length;
	for(var start=1; start<=listItemsLength; start++)
	{
		alert();
		var assignToSpan = $("ul.employee-job-expectations > li:nth-child("+start+") span").text();
		$("ul.employee-job-expectations > li:nth-child("+start+") input[type='text']").val(assignToSpan);
	}
});

var corProfSalaryRange, corProfYearsOfExp, corProfJobLocation, corProfGender, corProfNationality, 
corProfDegree, corProfAge;
function employeeJobExpectations()
{
	var empTarJobTitEdit = document.getElementById("empTarJobTit").value;
	var empLocationEdit = document.getElementById("empLocation").value;
	var empCareerLevEdit = document.getElementById("empCareerLev").value;
	var empCareerObjEdit = document.getElementById("empCareerObj").value;
	var empTarJobTitEdit = document.getElementById("empTarJobTit").value;
	var empTypeEdit = document.getElementById("empType").value;
	var empStatusEdit = document.getElementById("empStatus").value;
	var empSalaryEdit = document.getElementById("empSalary").value;
	var empNotPeriodEdit = document.getElementById("empNotPeriod").value;
	var empLastSalEdit = document.getElementById("empLastSal").value;
		
	$.post("test.php","empTarJobTitEdit="+empTarJobTitEdit+"&empLocationEdit="+empLocationEdit+"&empCareerLevEdit="+empCareerLevEdit+"&empCareerObjEdit="+empCareerObjEdit+"&empTarJobTitEdit="+empTarJobTitEdit+"&empTypeEdit="+empTypeEdit+"&empStatusEdit="+empStatusEdit+"&empSalaryEdit="+empSalaryEdit+"&empNotPeriodEdit="+empNotPeriodEdit+"&empLastSalEdit="+empLastSalEdit,function(response){

	});
}

/*Ends here*/