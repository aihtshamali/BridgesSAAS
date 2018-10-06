<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <h2>Active Users</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Marital Satus</th>
        <th>Date of Birth</th>
        <th>Email</th>
        <th>City</th>
        <th>Country</th>
        <th>Nationalities</th>
        <th>Number of Dependents</th>
        <th>Website</th>
        <th>Career Objective</th>
        <th>Job Objective</th>
        <th>address</th>
      </tr>
    </thead>
    <tbody>
      <?php
	foreach ($emp_profile as $emp) {    
	// echo $emp->name;     
 ?>
      <tr class="active">
        <td><?php echo $emp->name; ?></td>
        <td><?php echo $emp->phone; ?></td>
        <td><?php echo $emp->gender;?></td>
        <td><?php echo $emp->maritalstatus;?></td>
        <td><?php echo $emp->dob;?></td>
        <td><?php echo $emp->email;?></td>
        <td><?php echo $emp->city;?></td>
        <td><?php echo $emp->country;?></td>
        <td><?php echo $emp->nationalities;?></td>
        <td><?php echo $emp->numofdep;?></td>
        <td><?php echo $emp->website;?></td>
        <td><?php echo $emp->careerobj;?></td>
        <td><?php echo $emp->jobobj;?></td>
        <td><?php echo $emp->address;?></td>
        <td><a href="<?php base_url()?><?php echo "employee_edit/" .$emp->userid; ?>">Edit</a></td>
        <td><a href="<?php base_url()?><?php echo "employee_view/" .$emp->userid; ?>">View</a></td>
      <?php }?>
      </tr>
    </tbody>
  </table>

  <h2>All Users</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Marital Satus</th>
        <th>Date of Birth</th>
        <th>Email</th>
        <th>City</th>
        <th>Country</th>
        <th>Nationalities</th>
        <th>Number of Dependents</th>
        <th>Website</th>
        <th>Career Objective</th>
        <th>Job Objective</th>
        <th>address</th>
      </tr>
    </thead>
    <tbody>
      <?php
	foreach ($emp_deactive as $emp_de) {    
	// echo $emp->name;     
 ?>
      <tr class="active">
        <td><?php echo $emp_de->name; ?></td>
        <td><?php echo $emp_de->phone; ?></td>
        <td><?php echo $emp_de->gender;?></td>
        <td><?php echo $emp_de->maritalstatus;?></td>
        <td><?php echo $emp_de->dob;?></td>
        <td><?php echo $emp_de->email;?></td>
        <td><?php echo $emp_de->city;?></td>
        <td><?php echo $emp_de->country;?></td>
        <td><?php echo $emp_de->nationalities;?></td>
        <td><?php echo $emp_de->numofdep;?></td>
        <td><?php echo $emp_de->website;?></td>
        <td><?php echo $emp_de->careerobj;?></td>
        <td><?php echo $emp_de->jobobj;?></td>
        <td><?php echo $emp_de->address;?></td>
        <td><a href="<?php base_url()?><?php echo "employee_edit/" .$emp_de->userid; ?>">Edit</a></td>
      <?php }?>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
