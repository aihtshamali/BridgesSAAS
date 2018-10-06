$( document ).ready(function() {
    
    if ($('.made-tokenize').tokenize()) {
    	$("#edit-btn-6").click(function(){
	    $("#eduDegree, #eduInst, #eduCaC, #eduDate").hide();
	    $("#eduDegreeInput, #eduInstInput, #eduCountryInput, #eduCityInput,#eduDateEdit").addClass("show");
	    $(".style-list span").hide();
	    $("#add-btn-6").addClass("show");
	    $("#edit-btn-6").hide();
	});
    }
    else{
    	alert('Fail');
    }
});
for (i = 1; i < 13; i++) { 
	if (i<=2) {
		var highestColumns = Math.max($('#row'+i+'A').outerHeight(),$('#evrow'+i+'A').outerHeight());
		$('#evrow'+i+'A').outerHeight(highestColumns);
	}
	else{
		var highestColumns = Math.max($('#row'+i+'A').innerHeight(),$('#evrow'+i+'A').outerHeight());
		$('#evrow'+i+'A').outerHeight(highestColumns-33);
	}
}



for (j = 1; j < 5; j++) { 
	if (j<=2) {
		var heighestColumns = Math.max($('#annProfileEH'+j+'A').outerHeight(),$('#EVannProfileEH'+j+'A').outerHeight());
		$('#EVannProfileEH'+j+'A').outerHeight(heighestColumns);
	}
	else{
		var heighestColumns = Math.max($('#annProfileEH'+j+'A').innerHeight(),$('#EVannProfileEH'+j+'A').outerHeight());
		$('#EVannProfileEH'+j+'A').outerHeight(heighestColumns-33);
	}
}

for (k = 1; k < 5; k++) { 
	if (k<=2) {
		var heighestColumns = Math.max($('#corProfileEH'+k+'A').outerHeight(),$('#EVcorProfileEH'+k+'A').outerHeight());
		$('#EVcorProfileEH'+k+'A').outerHeight(heighestColumns);
	}
	else{
		var heighestColumns = Math.max($('#corProfileEH'+k+'A').innerHeight(),$('#EVcorProfileEH'+k+'A').outerHeight());
		$('#EVcorProfileEH'+k+'A').outerHeight(heighestColumns-33);
	}
}


//Tokenize 

	 	