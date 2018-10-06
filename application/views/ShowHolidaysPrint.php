<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Holidays</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style type="text/css">
	#holidayHeaderImg{
		margin: 0px 15px;
		max-height: 110px;
	}

	#holidayHeader{
		font-weight: bold;
		font-size: 30px;
		margin-top: 15px;
		text-align: center;
	}
.table.no-border tr td, .table.no-border tr th {
  border-width: 0;
  text-align: center;
  font-size: 22px;
}
</style>

</head>
<body onload="printFun()">
	<div class="container" >
	
	<div id="holidayHeader">
		<img id="holidayHeaderImg" src="<?=base_url()?>assets/images/red-logo.png">
		<div style="display: inline-flex;">
		The Bridges School <br>
		The Bridges Development Consortium
		</div>
		<img id="holidayHeaderImg" src="<?=base_url()?>assets/images/final_logo.jpg">
	</div>
<hr>
	<h2 align="center">List of Public / School Holidays</h2>
<hr>
		<table class="table table-responsive no-border">
			<tr>
				<th>Name</th>
				<th>Type of Holiday</th>
				<th>Date</th>
			</tr>
			
			<?php
				if($holidays){
			 foreach ($holidays as $h) {
			 	if($h->status){
				echo '<tr>
				<td>'.$h->name.'</td>
				<td>'.$h->description.'</td>
				<td>'.$h->date.'</td>
				</tr>';
				}
			}
		}
		else
			echo "<tr> <td> No Data Inserted </td></tr>";
			?>
		</table>
	</div>
</body>
</html>

<script type="text/javascript">
	function printFun() {
		// window.print();
		// window.close();
	}
</script>