<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?= base_url();?>assets\bootstrap-year-calendar\css\bootstrap-year-calendar.css">
	<link rel="stylesheet" href="<?= base_url();?>assets\assets\bootstrap\css\bootstrap.css">
</head>
<body>
	<div id="calendar">
		
	</div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?=  base_url();?>assets\js\bootstrap.js"></script>
<script src="<?=  base_url();?>assets\bootstrap-year-calendar\js\bootstrap-year-calendar.js"></script>
<script> var holidays= '<?= json_encode($holidays)?>';
</script>
<script type="text/javascript">
	var hol=jQuery.parseJSON(holidays);
	// console.log(holidays);
	$(function() {
    var currentYear = new Date().getFullYear();

    var borderDateTime = new Date(currentYear, 1, 20).getTime();
    var redDateTime = new Date(currentYear, 0, 12).getTime();
    $('#calendar').calendar({ 
        customDayRenderer: function(element, date) {
        	   for (var i = hol.length - 1; i >= 0; i--) {
	var dat=hol[i]['date'].split('-');
	// if()
	    var circleDateTime = new Date(dat[0], dat[1]-1, dat[2]).getTime();
            // if(date.getTime() == redDateTime) {
            //     $(element).css('font-weight', 'bold');
            //     $(element).css('font-size', '15px');
            //     $(element).css('color', 'green');
            // }
             if(date.getTime() == circleDateTime) {
                $(element).css('background-color', 'red');
                $(element).css('color', 'white');
                $(element).css('border-radius', '20px');
                $(element).css('padding', '0px');
            }
            // else if(date.getTime() == borderDateTime) {
            //     $(element).css('border', '2px solid blue');
            // }
        }
    }
    });

});
</script>
</html>