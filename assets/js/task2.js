//Add Outcomes
$("#addOutcome").on('click',function(){
	var ID=parseInt($("#hiddenChild").val())+1;
	$("#hiddenChild").val(ID);
	var newDiv='<div class="outcome-child" id="outcome-child-'+ID+'"><div class="child-level2"><button type="button" class="close" id="close'+ID+'" onclick="delOutcome(this.id)">&times;</button></div><textarea name="outcome[]"></textarea></div>';
	$(".outcome").append(newDiv);
	return false;
});
//Add Tool
$("#addTool").on('click',function(){
	var ID=parseInt($("#hiddenTool").val())+1;
	$("#hiddenTool").val(ID);
	var newDiv='<div class="tool-child" id="tool-child-'+ID+'"><div class="tool-child-head"><span class="badge">'+ID+'</span><button type="button" class="close" id="toolClose'+ID+'" onclick="delTool(this.id)">&times;</button></div><input type="text" name="linkTitle[]" placeholder="Title"><input type="text" name="link[]" placeholder="Link"></div>';
	$(".tool_div").append(newDiv);
	return false;
});
// Outcomes close button
function delOutcome(id){
	$("#"+id).parents().eq(1).remove(); 
}
// Outcomes close button
function delTool(id){
	$("#"+id).parents().eq(1).remove();
}
