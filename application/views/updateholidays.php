<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Insert Holiday</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <div class="container" style="margin-top:50px; ">
        <h3>Edit Holiday</h3>
      
      <?php foreach ($holidayDetails as $hol) {
            # code...
       ?>
       <form method="post" style="margin-left: 25px;" action="<?php echo base_url();?>Attendance/saveholidays/<?php echo $hol->id; ?>" >
       <div>
      	<label for="">Holiday Name</label>
      	<input type="text" class="form-control" name="name" value="<?php echo $hol->name;?>">
      </div>
      <div >
      	<label for="">Holiday Description</label>
      	<input type="text" class="form-control" name="description" value="<?php echo $hol->description;?>">
      </div>
      <div >
      	<label for="">Date</label>
      	<input type="date" class="form-control" name="date" value="<?php echo $hol->date;?>">
      </div>
      <div class="pull-left">
      <?php if($hol->status){ 
        echo '<label for="  ">Yes-<input type="radio" class="" name="holiday[0]" value="1" checked></label>
              <label>No- <input type="radio" name="holiday[0]" value="0" ></label> 
        ';
       } else { 
        echo '<label for="  ">Yes-<input type="radio" class="" name="holiday[0]" value="1" ></label>
            <label for="  ">No-<input type="radio" class="" name="holiday[0]" value="0" checked></label>
        ';
        }?>
       
      </div>
      <div class="pull-right"> 
      </div>
	  	<button name="edit" type="submit" class="btn btn-success pull-right" >Update</button>
      </div>
      <?php } ?>
</form>
</div>
</html>