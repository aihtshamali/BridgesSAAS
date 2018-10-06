<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Social Platforms</title>
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
    tr{
        text-align: left;
    }
    td{
        vertical-align: middle; 
    }

    </style>
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-md-12"  style="text-align:center">
                <h3>Platforms</h3>
        <br>
        <?php if(isset($social)){ ?>
        <form action="<?php echo base_url();?>Hr/UpdateSocialPlatforms/<?php echo $social->id; ?>" method="POST">
        <table class="table-responsive table">
            <tr>
                <td><label for="">Name</label></td>
                <td><input type="text" name="name" class="form-control" value="<?php echo $social->name; ?>" style="width:50%"></td>
                <td><label for="">Status</label></td>
                <td><input type="Checkbox" name="status" <?php echo $social->status==1 ? "checked" : "" ?> class=""></td>
                <td><input type="submit" name="Update" class="btn btn-success btn-sm"></td>
            </tr>
        </table>
        </form>
        <?php } else{ ?>
        <form action="<?php echo base_url();?>Hr/SocialPlatforms" method="POST">
        <table class="table-responsive table">
            <tr>
                <td><label for="">Name</label></td>
                <td><input type="text" name="name" class="form-control" style="width:50%"></td>
                <td><label for="">Status</label></td>
                <td><input type="Checkbox" name="status" class=""></td>
                <td><input type="submit" name="submit" class="btn btn-success btn-sm"></td>
            </tr>
        </table>
        </form>
        <?php } ?>
        <hr> 
		<table class="table table-responsive">
			<thead>
            <tr>
                <th>Sr.No</th>
                <th>Name</th>
                <th>Created_at</th>
                <th>Action</th>
            </tr>         
            </thead>
            <?php foreach ($social_platforms as $social) {
               ?> 
                <tr>
                    <td><?php print_r($social->name) ?></td>
                    <td><?php print_r($social->status ? "Active" : "Not Active") ?></td>
                    <td><?php print_r($social->created_at) ?></td>
	       			<td><span><a style="margin:0 5px" href="<?php echo base_url();?>Hr/SocialPlatforms/<?php echo $social->id; ?>" class="btn btn-info btn-xs">Edit</a></span><span><a href="<?php echo base_url();?>Hr/deleteSocial/<?php echo $social->id; ?>" class="btn btn-xs btn-danger">Delete</a></span></td>
			     </tr>
               <?php
            } ?>
		</table>
        </div>
	</div>
    </div>
</body>
</html>