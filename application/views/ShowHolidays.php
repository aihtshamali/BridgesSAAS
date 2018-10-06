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
</head>
<body>
	<div class="container" >
	<h3>Holidays: </h3> 
	<div class="pull-right">
		<a href="Javascript:" onclick="window.open('<?php echo base_url(); ?>Attendance/publicHolidaysPrint')" class="btn btn-sm btn-primary">Print</a>
		&nbsp; &nbsp;
		<a href="<?php echo base_url(); ?>Attendance/insertHolidays" class="btn btn-sm btn-primary">Add new Record</a>
	</div>
		<table class="table table-responsive table-hover">
			<tr>
				<th>Name</th>
				<th>Type of Holiday</th>
				<th>Date</th>
				<th>Holiday</th>
			</tr>
			
			<?php
				if($holidays){
			 foreach ($holidays as $h) {
				echo '			<form action="'.base_url().'attendance/insertholidays/'.$h->id.'" method="post"><tr>
				<td><p data-editable>'.$h->name.'</p></td>
				<td><p data-editable>'.$h->description.'</p></td>
				<td><p data-editable>'.$h->date.'</p></td>';
				if($h->status)
					echo '<td>Yes</td>';
				else
					echo '<td>No</td>';

				echo '<td><a href="'.base_url().'attendance/updateholidays/'.$h->id.'" class="btn btn-primary">Edit</button></td>
				<td><a href="'.base_url().'attendance/insertholidays/'.$h->id.'" id="1"  class="btn btn-primary btn-xs">+</button>
				    <a style="margin-left:5px;" href="'.base_url().'attendance/delhoildays/'.$h->id.'" id="1"  class="btn btn-primary btn-xs"> &#10005;</button> </td>
			</tr></form>';
			}

		}
		else
			echo "<tr> <td> No Data Inserted </td></tr>";
			?>
		</table>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
	
	/**
  We're defining the event on the `body` element, 
  because we know the `body` is not going away.
  Second argument makes sure the callback only fires when 
  the `click` event happens only on elements marked as `data-editable`
*/
$('body').on('click', '[data-editable]', function(){
  
  var $el = $(this);
              
  var $input = $('<input/>').val( $el.text() );
  $el.replaceWith( $input );
  
  var save = function(){
    var $p = $('<p data-editable />').text( $input.val() );
    $input.replaceWith( $p );
  };
  
  /**
    We're defining the callback with `one`, because we know that
    the element will be gone just after that, and we don't want 
    any callbacks leftovers take memory. 
    Next time `p` turns into `input` this single callback 
    will be applied again.
  */
  $input.one('blur', save).focus();
  
});
</script>
</html>