<!DOCTYPE html>
<html>
<head>
	<title>Add salary slip</title>
</head>
<body>
<?php echo form_open('Salaryslip/addSalary/'.$id); ?>
		<?php 
		 $data = array(
		 	'name' => 'fname',
		 	'type' => 'text',
		 	'placeholder' => 'First Name',
		 	'value' => set_value('fname')
		 	);
		 echo form_input($data);
		 ?>

		<?php 
		$data = array(
			'name' => 'lname',
			'type' => 'text',
			'placeholder' => 'Last Name',
			'value' => set_value('fname')
			);
		echo form_input($data);
		 ?>

		 <?php
		 $data = array(
		 	'name' => 'salarymnth',
		 	'type' => 'date',
		 	'value' => set_value('salarymnth')
		 	);
		 echo form_input($data);
		 ?>

		 <?php
		 $data = array(
		 	'name' => 'gsalary',
		 	'type' => 'number',
		 	'placeholder' => 'Gross salary',
		 	'value' => set_value('gsalary')
		 	);
		 echo form_input($data);
		 ?>
		 <?php
		 $data = array(
		 	'name' => 'deduction',
		 	'type' => 'number',
		 	'placeholder' => 'Deduction',
		 	'value' => set_value('deduction')
		 	);
		 echo form_input($data);
		 ?>
		 <?php
		 $data = array(
		 	'name' => 'addition',
		 	'type' => 'number',
		 	'placeholder' => 'Addition',
		 	'value' => set_value('addition')
		 	);
		 echo form_input($data);
		 ?>
		 <?php
		 $data = array(
		 	'name' => 'leaves',
		 	'type' => 'number',
		 	'placeholder' => 'leaves',
		 	'value' => set_value('leaves')
		 	);
		 echo form_input($data);
		 ?>
		 <?php
		 $data = array(
		 	'name' => 'payable',
		 	'type' => 'number',
		 	'placeholder' => 'payable',
		 	'value' => set_value('payable')
		 	);
		 echo form_input($data);
		 ?>
		<button type="submit" class="btn btn-default pull-right">Submit</button>

<?php echo form_close(); ?>

<button class="btn btn-success btn-md" data-toggle="modal" data-target="#pay-monthly">
    Pay
</button>
<!-- Salary Pay Modal -->
<div class="modal fade" id="pay-monthly" tabindex="-1" role="dialog" 
     aria-labelledby="payBymonth" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="payBymonth">
                    Edit Salary
                </h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
        <?php echo form_open('Salaryslip/addSalary/'.$key->userid); ?>
        <?php
        $data = array(
        	'name' => 'userid',
        	'type' => 'hidden',
		 	'class' => 'form-control',
        	'value'=> $key->userid
        	);
        ?>
        <div class="form-group">
        <label>First Name:</label>
		<?php 
		 $data = array(
		 	'name' => 'fname',
		 	'type' => 'text',
		 	'placeholder' => 'First Name',
		 	'class' => 'form-control',
		 	'value' => $key->firstname
		 	);
		 echo form_input($data);
		 ?>
		 </div>

       <div class="form-group">
        <label>Last Name:</label>
		<?php 
		$data = array(
			'name' => 'lname',
			'type' => 'text',
			'placeholder' => 'Last Name',
		 	'class' => 'form-control',
			'value' => $key->lastname
			);
		echo form_input($data);
		 ?>
		 </div>

		<div class="form-group">
		<label>Salary Month:</label>
		 <?php
		 $data = array(
		 	'name' => 'salarymnth',
		 	'type' => 'date',
		 	'class' => 'form-control',
		 	'value' => set_value('sl')
		 	);
		 echo form_input($data);
		 ?>

		</div>
		 <div class="form-group">
		 <label>Gross Salary:</label>
		 <?php
		 $data = array(
		 	'name' => 'gsalary',
		 	'type' => 'number',
		 	'placeholder' => 'Gross salary',
		 	'class' => 'form-control',
		 	'value' => $key->actual_salary
		 	);
		 echo form_input($data);
		 ?>

		</div>
		 <div class="form-group">
		 <label>Deductions:</label>
		 <?php
		 $data = array(
		 	'name' => 'deduction',
		 	'type' => 'number',
		 	'placeholder' => 'Deduction',
		 	'class' => 'form-control',
		 	'value' => $reduced
		 	);
		 echo form_input($data);
		 ?>

		</div>
		 <div class="form-group">
		 <label>Addition:</label>
		 <?php
		 $data = array(
		 	'name' => 'addition',
		 	'type' => 'number',
		 	'placeholder' => 'Addition',
		 	'class' => 'form-control',
		 	'value' => set_value('addition')
		 	);
		 echo form_input($data);
		 ?>

		</div>
		 <div class="form-group">
		 <label>Leaves:</label>
		 <?php
		 $data = array(
		 	'name' => 'leaves',
		 	'type' => 'number',
		 	'placeholder' => 'leaves',
		 	'class' => 'form-control',
		 	'value' => 0
		 	);
		 echo form_input($data);
		 ?>
		</div>
		 <div class="form-group">
		 <label>Payable:</label>
		 <?php
		 $data = array(
		 	'name' => 'payable',
		 	'type' => 'number',
		 	'placeholder' => 'payable',
		 	'class' => 'form-control',
		 	'value' => $actualSalary
		 	);
		 echo form_input($data);
		 ?>
		 </div>
		<button type="submit" class="btn btn-default pull-right">Submit</button>

<?php echo form_close(); ?>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>