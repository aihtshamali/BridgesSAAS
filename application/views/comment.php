<?php echo form_open("salaryslip/comment");?>

				  <label for="city">Name *</label>
				  <select class="form-control" name="name">
				    <?php foreach ($users as $id): ?>
				    <option  value="<?php echo $id->userid?>" <?php echo  set_select('firstname', $id); ?>> <?php echo $id->firstname." ". $id->lastname;?></option>
				     <?php endforeach; ?> 
				  </select>

                <label for="remark">Remarks</label>
                <input type="textarea" name="remark"> 

                <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-default">Submit</button>
                    <!-- <button name="cancel" type="reset" class="btn btn-default">Reset</button> -->
                </div>
                <?php echo form_close(); ?>