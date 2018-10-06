<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php  echo form_open_multipart('caan/savebenefit/'.$emp->userid); ?>

<table class="table table-responsive">
<tbody>
<tr>
	<th></th>
	<th>Benefit</th>
	<th>Applicable Since</th>
	<th>Form</th>
	<th>Cost</th>
	<th>Bridges Contribution</th>
	<th>Employee Contribution</th>

</tr>
<td style="width:150px;">
<?php echo $emp->firstname." ".$emp->lastname; ?> </td>
<tr class="pick-1">
<td colspan="2">
	<select class="form-control" name="insurance0">
	<option value="health insurance">Health Insurance</option>
	<option value="bonus">Bonus</option>
	<option value="eobi">EOBI</option>
	<option value="social security">Social Security</option>
	<option value="transport logistics">Transport & logistic</option>
	</select>
</td>
<input type="number" id="numField" name="fieldNum" value="0" hidden>
<td><input class="form-control" type="date" name="since0"></td>
<td><input class="form-control" type="file" name="form0"></td>
<td><input class="form-control" type="text" name="cost0"></td>
<td><input class="form-control" type="text" name="bridges0"></td>
<td><input class="form-control" type="text" name="employee0"></td>
</tr>

<tr>
<td colspan="6"><button id="projectBtn" class="btn btn-small btn-primary">Add new</button></td>
<td colspan="3"><input type="submit" name="okay" class="btn btn-small btn-primary" value="Save"></td>
</tr>
</tbody>

</table>
</form>
<?php echo form_close(); ?>     
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

var i=0;
	
	var i=1;var j=0;
$("#projectBtn").on('click',function(event){
    event.preventDefault();
    i++;j++;
    var cloned=$(".pick-1:first").clone(true).prop('class','pick-'+i);
    cloned.find('input').each(function(){
      this.name=this.name.replace('0',j);
    });
    cloned.find('select').each(function(){
      this.name=this.name.replace('0',j);
    });
    
    $('#numField').val(j);
    
    cloned.insertAfter('.pick-'+(i-1)+':last');
    
});


</script>
</html>