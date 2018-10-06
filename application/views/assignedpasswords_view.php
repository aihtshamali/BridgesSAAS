<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assigned Passwords</title>
    <!-- <link rel="stylesheet" type="text/css" href="<php echo base_url()?>assets/emp_profile/css/style.css"> -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/emp_profile/js/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" integrity="sha256-xykLhwtLN4WyS7cpam2yiUOwr709tvF3N/r7+gOMxJw=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha256-3blsJd4Hli/7wCQ+bmgXfOdK7p/ZUMtPXY08jmxSSgk=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>
<style>
  
</style>
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align:center">
                <h3 style="">Password Sheet</h3>
               <span class="pull-right"><a href="<?php echo base_url();?>Hr/SocialPlatforms" class="btn btn-success btn-sm">New Platform</a></span>
            </div>
        </div>
        <?php if(isset($assigned)){ ?>
        <form action="<?php echo base_url();?>Hr/UpdateAssignedPasswords/<?php echo $assigned->id?>" method="POST">
            <?php if(isset($passwordChanged)){
                echo '<input type="hidden" name="changed" value="1" >';
            } ?>
        <table class="table-responsive table">
            <tr>
                <td><label for="">Name</label></td>
                <td><select class="form-control" name="platform" id="">
                    <?php 

                    foreach ($social_platforms as $social): 
                     
                     if($assigned->social_platform_id==$social->id){
                        ?>   

                        <option value="<?php echo $social->id ?>" selected><?php echo $social->name; ?></option>
                    <?php }else{ ?>
                        <option value="<?php echo $social->id ?>" ><?php echo $social->name; ?></option>
                    <?php } endforeach ?>
                </select></td>

                <td><label for="">Username:</label></td>
                <td><input type="text" name="username" value="<?php echo $assigned->username ?>" class="form-control" ></td>
                <td><label for="">Password:</label></td>
                <td><input type="text" name="password" value="<?php echo $assigned->password ?>" class="form-control" ></td>
                <td><label for="">Users:</label></td>
                <td><select class="form-control" name="userid" id="">
                    <?php  foreach ($users as $user):
                    if($user->id==$assigned->assigned_to){
                     ?>
                        <option value="<?php echo $user->id ?>" selected><?php echo $user->fname; ?></option>
                    <?php }else{ ?>
                        <option value="<?php echo $user->id ?>"><?php echo $user->fname; ?></option>
                    <?php } endforeach ?>
                </select>
            </td>
            <td><input type="submit" class="btn btn-success btn-sm" value="Assign"></td>
            </tr>
        </table>
        </form>
        <?php } else{ ?>
        <form action="<?php echo base_url();?>Hr/AssignedPasswords" method="POST">
        <table class="table-responsive table">
            <tr>
                <td><label for="">Name</label></td>
                <td><select class="form-control" name="platform" id="">
                    <?php foreach ($social_platforms as $social): ?>

                        <option value="<?php echo $social->id ?>"><?php echo $social->name; ?></option>
                    <?php endforeach ?>
                </select></td>
                <td><label for="">Username:</label></td>
                <td><input type="text" name="username" class="form-control" ></td>
                <td><label for="">Password:</label></td>
                <td><input type="text" name="password" class="form-control" ></td>
                <td><label for="">Users:</label></td>
                <td><select class="form-control" name="userid" id="">
                    <?php  foreach ($users as $user): ?>
                        <option value="<?php echo $user->id ?>"><?php echo $user->fname; ?></option>
                    <?php endforeach ?>
                </select>
            </td>
            <td><input type="submit" class="btn btn-success btn-sm" value="Assign"></td>
            </tr>
        </table>
        </form>
        <?php } ?>
        <hr>
		<table class="table table-responsive">
			<thead>
            <tr>
                <th>Platforms</th>
                <th>UserName</th>
                <th>Passwords</th>
                <th>Changed Passwords</th>
                <th>Assigned To</th>
                <th>Actions</th>
            </tr>         
            </thead>
            <?php  foreach ($socialAssigned as $social ): ?>
            <tr>
				<td><?php print_r($social->platform); ?></td>
                <td><?php print_r($social->username); ?></td>
                <td><?php print_r($social->password); ?></td>
                <td><?php print_r($social->changed_password); ?></td>
                <td><?php print_r($social->user); ?></td>
                <td><span><a style="margin:0 5px" href="<?php echo base_url();?>Hr/AssignedPasswords/<?php echo $social->id; ?>" class="btn btn-info btn-xs">Edit</a></span><span><a href="<?php echo base_url();?>Hr/DeleteAssignedPasswords/<?php echo $social->id; ?>" class="btn btn-xs btn-danger">Delete</a></span>
                <span><a href="<?php echo base_url();?>Hr/AssignedPasswords/<?php echo $social->id; ?>?changed=1" class="btn btn-xs btn-danger">Change Password</a></span>
                </td>
			</tr>
                
            <?php endforeach ?>
		</table>
	</div>
</body>
</html>