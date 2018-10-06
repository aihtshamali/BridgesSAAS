<!DOCTYPE html>
<html>
<head>
	<title>Emergency Contact</title>
</head>
<body>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Emergency Contact</h4> 
            </div>
            <?php echo $this->session->flashdata('msg'); ?>
            <div class="panel-body">
                <?php $attributes = array("name" => "registrationform");
                echo form_open("hr/emergency_contact_detail", $attributes);?>
                <div class="form-group">
                    <label for="pname">Person Name to call in Emergency *</label>
                    <input class="form-control" name="pname" placeholder="Enter Name to call in Emergency" type="text" value="<?php echo set_value('pname'); ?>" />
                    <span class="text-danger"><?php echo form_error('pname'); ?></span>
                </div>

                <div class="form-group">
                    <label for="relationship">Relationship to the person *</label>
                    <input class="form-control" name="relationship" placeholder="Enter Person Relationship" type="text" value="<?php echo set_value('relationship'); ?>" />
                    <span class="text-danger"><?php echo form_error('relationship'); ?></span>
                </div>

                <div class="form-group">
                	<label for="contact1">Emergency Contact Person-1</label>
                	<input class="form-control" type="text" name="contact1" placeholder="Enter Your Phone No" value="<?php echo set_value('contact1'); ?>" />
                	<span class="text-danger"><?php echo form_error('contact1'); ?></span>
                </div>

                <div class="form-group">
                	<label for="contact2">Emergency Contact Person-2</label>
                	<input class="form-control" type="text" name="contact2" placeholder="Enter Your Phone No" value="<?php echo set_value('contact2'); ?>" />
                	<span class="text-danger"><?php echo form_error('contact2'); ?></span>
                </div>

                <div class="form-group">
                    <label for="address1">Emergency Contact Person Address1 *</label>
                    <input class="form-control" name="address1" placeholder="Emergency Contact Person Address" type="text" value="<?php echo set_value('address1'); ?>" />
                    <span class="text-danger"><?php echo form_error('address1'); ?></span>
                </div>

                <div class="form-group">
                    <label for="address2">Emergency Contact Person Address2 *</label>
                    <input class="form-control" name="address2" placeholder="Emergency Contact Person Address" type="text" value="<?php echo set_value('address2'); ?>" />
                    <span class="text-danger"><?php echo form_error('address2'); ?></span>
                </div>
                
                <div class="form-group">
				  <label for="city">City *</label>
				  <select class="form-control" name="city">
				    <?php foreach ($cities as $id => $city): ?>
				    <option  value="<?php echo $id?>" <?php echo  set_select('city', $id); ?>> <?php echo $city;?></option>
				     <?php endforeach; ?> 
				  </select>
				  <span class="text-danger"><?php echo form_error('city'); ?></span>
				</div>

                <div class="form-group">
                	<label for="email">E-mail *</label>
                	<input class="form-control" type="text" name="email" placeholder="E-mail" value="<?php echo set_value('email'); ?>">
                	<span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>  

                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Signup</button>
                    <button name="cancel" type="reset" class="btn btn-default">Reset</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>