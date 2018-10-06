<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php //echo form_open_multipart('caan/cvuploaded/') ?>
<h1><?php if (isset($name)){
echo $name;} ?></h1>
<table class="table table-responsive">
<tbody>
<tr>

	<th>Employee</th>
	<th>Benefit</th>
	<th>Applicable Since</th>
	<th>Form</th>
	<th>Cost</th>
	<th>Bridges Contribution</th>
	<th>Employee Contribution</th>

</tr>
<tr>
<td></td>

<td>
	<select>
	<option value="health insurance">Health Insurance</option>
	<option value="bonus">Bonus</option>
	<option value="eobi">EOBI</option>
	<option value="social security">Social Security</option>
	</select>
</td>
<td><input type="date" name="since"></td>
<td><input type="file" name="form"></td>
<td><input type="text" name="cost"></td>
<td><input type="text" name="bridges"></td>
<td></td>
</tr>
</tbody>
</table>
<button onclick="sent()">Check</button>
<?php //echo form_close(); ?>     
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script type="text/javascript">
function sent()
{
$.post( "senddata", data:{ 'name': "John" } );

}
</script>
</html>