<!DOCTYPE html>
<html>
<head>
	<title>Change password</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php echo form_close(); ?>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Change Password</button>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Password</h4>
        </div>
        <div class="modal-body">
<p>Old Password</p>
<?php 
	$data = array(
		'name' => 'xpass1',
		'id' => 'xpass',
		'type' => 'password',						 		
	);
	echo form_input($data); 
 ?>
 <p>New Password</p>
 <?php
 	$data = array(
 		'name' => 'newpass',
 		'id' => 'newpass',
 		'type' => 'password',
 		);
 	echo form_input($data);
 ?>
<p>Confirm Password</p>
<?php 
	$data = array(
		'name' => 'repass',
		'id' => 'repass',
		'type' => 'password',
		'onekeyup'=> 'passMach()',
		);
	echo form_input($data);
?>
<button type="submit" id="create_btn" onclick="getVal()">Submit</button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <script type="text/javascript">
  function getVal(){
    var xpass = $('#xpass').val();
    var newpass = $('#newpass').val();
    var repass = $('#repass').val();
    if (newpass==repass) {
    $.post("pass_change_values",
    	{ xpass:xpass, newpass:newpass, repass:repass },
        function(data){
        	alert(data);
      }
        );
     }
     else{
     	alert('Confirm password field mismatch!')
     }
  }

  function passMach() {
  	alert();
  }
  // getVal End
  </script>
</body>
</html>