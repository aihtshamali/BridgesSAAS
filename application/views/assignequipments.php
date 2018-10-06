<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<h1>Assign Equipments</h1>
<form method="post" action="<?php echo base_url(); ?>/caan/addequipment">
<table class="table table-responsive"  style="margin: 0 auto;">
	<thead>
        <tr>
            <th>Equipment</th>
            <th>Assigned To</th>
            
        </tr>
	</thead>
    <tbody>
    	
        <tr>
        	
            	
			<td>
                <input type="hidden" name="id" value="<?php echo $user[0]->userid; ?>">
                <input type="text" name="equipment">
                
            </td>
			<td>
                <?php echo $user[0]->fname; ?>
                <input type="hidden" name="assigned" value="<?php echo $user[0]->fname; ?>">    
            </td>
            <td><input type="submit" class="btn btn-success" name="addSubmit" value="Submit" /></td>        
        </tr>
        
	</tbody>
</table>

</form>

<table class="table table-responsive"  style="margin: 0 auto;">
    <thead>
        <tr>
            <th>Equipment</th>
            <th>Assigned To</th>
            <th>Actions</th>    
        </tr>
    </thead>
    <tbody>
        <?php foreach($equipments as $equipment)
        { ?>
        <tr>
            
                
            <td>
                <input type="hidden" name="equipmentid" value="<?php echo $equipment->id; ?>">
                <input type="hidden" name="id" value="<?php echo $user[0]->userid; ?>">
                <input type="text" name="equipment" value="<?php echo $equipment->equipment; ?>">
                
            </td>
            <td>
                <?php echo $user[0]->fname; ?>
                <input type="hidden" name="assigned" value="<?php echo $user[0]->fname; ?>">    
            </td>
            <td><a href="<?php echo base_url(); ?>/caan/addequipment/<?php echo $equipment->id; ?>"><span class="glyphicon glyphicon-edit"></span></a></td>        
        </tr>
        <?php } ?>
    </tbody>
</table>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

var i=0;
	
	var i=1;var j=0;
$("#projectBtn").on('click',function(event){
    event.preventDefault();
    i++;j++;
    var cloned=$(".pick-1:first").clone(true).prop('class','pick-'+i);
    cloned.find('input').each(function(){
      this.name=this.name.replace('0',j);
    });
    cloned.find('select').each(function(){
      this.name=this.name.replace('0',j);
    });
    
    $('#numField').val(j);
    
    cloned.insertAfter('.pick-'+(i-1)+':last');
    
});


</script>
</html>