<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Settlement Letter</title>
<meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
		<script id="toRemove" src="https://cdn.ckeditor.com/4.7.2/full/ckeditor.js"></script>
		<!-- <link href="http://sdk.ckeditor.com/theme/css/sdk-inline.css" rel="stylesheet"> -->
		<script src="http://code.jquery.com/jquery-1.5.2.min.js" type="text/javascript" ></script>
		<script src="<?php echo base_url();?>assets/hrPolices/jquery.jqscribble.js" type="text/javascript"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
	div {
		font-family: nag;
	}
	.fonts{
    font-family: "nag";
    font-size: 15px;
    font-style: normal;
    font-variant: normal;
    font-weight: 500;
    line-height: 17.4px;	}
 }
@media print { 
	.lower_body{
		margin-top: 100px;

	}
	.newfont{
		font-family:'Jameel Noori Nastaleeq';
		font-size:22px; 
		font-style:normal;
		font-variant:normal;
		font-weight: normal; letter-spacing: normal; 
		line-height: 29px;
		padding-left:10px;
	}
body {
  margin: 2cm !important;
    /*width: 210mm;*/
    height: 100%;
    font-family: "Helvetica Neue",Helvetica,sans-serif;
    font-size: 15px;
    font-style: normal;
    font-variant: normal;
    font-weight: 500;
    line-height: 17.4px;	
  }

  p#bodyUrdu{
  	font-family:'Jameel Noori Nastaleeq';
  	font-size:22px; 
  	font-style:normal;
  	font-variant:normal;
  	font-weight: normal; 
  	letter-spacing: normal; 
  	line-height: 29px;

  }
 	
#printfooter {
  display: inline-block;
    position: fixed;
    vertical-align: bottom;
    width: 100%;
    bottom: 0;
  }
}
#printfooter {
  position: absolute;
  bottom: 0;
  }

</style>
</head>
<body>
	<?php
	function urdu_date(){

	$week = array(
		'Monday' => 'پیر',
		'Tuesday' => 'منگل',
		'Wednesday' => 'بدھ',
		'Thursday' => 'جمعرات',
		'Friday' => 'جمعه',
		'Saturday' => 'هفته',
		'Sunday' => 'اتوار'
	);

	$months = array(
		'January' => 'جنوری',
		'February' => 'فروری',
		'March' => 'مارچ',
		'April' => 'اپریل',
		'May' => 'مئی',
		'June' => 'جون',
		'July' => 'جولائی',
		'August' => ' اگست',
		'September' => ' ستمبر',
		'October' => 'اکتوبر',
		'November' => 'نومبر',
		'December' => 'دسمبر'
	);
	
	$date = $week[date('l')] ."&nbsp;". date('d') ."&nbsp;". $months[ date('F')] ."&nbsp;".date('Y')."ء" ;

	return $date;
}
	?>

	<div class="container" style="margin-top: 30px">
		<?php foreach ($employee as $emp): ?>
			<div class="row">
				<div class="col-md-12" align="center">
					<?php if($emp->hired_for_project==2){ ?><img src="<?php echo base_url(); ?>Logoz/red-logo.png"  style=" width: 130px;"><?php } else { ?><img src="<?php echo base_url(); ?>Logoz/logo.png"  style=" width: 130px;border: 2px solid gray;"><?php } ?>
						<br><br>
					<div class="col-md-6 col-md-offset-3 newfont" style="padding-left: 0px;"><p style="padding:0px; margin:0px;font-size:30px;font-family:'Jameel Noori Nastaleeq'; font-style:normal;font-variant:normal;font-weight: bold; letter-spacing: normal; line-height: 29px;padding-left:10px">معاہدہ عدم وابستگی و وصولی بقایاجات وواجبات </p>
					</div>
				</div>
			</div>
			<br><br><br>
			
			<div class="row "  style="margin:89px 0 0 0px;margin-left: 25px;" >
				<div class="col-md-6 col-md-offset-3 newfont" style="font-family:'Jameel Noori Nastaleeq';font-size:22px; font-style:normal;font-variant:normal;font-weight: normal; letter-spacing: normal; line-height: 29px;padding-left:10px"  contenteditable="true">
					<p  id="bodyUrdu"  >

					<?php if(isset($settlement_letter)) 
					{ echo $settlement_letter->bodyUrdu;} else {?>
						This is to declare that the resignation / termination of the said employee have been accepted by the Competent Authority and he/she will not be eligible for any benefits of employment.
					Moreover, on clearance of all dues payable to him/her by the Company, he/she stands released from the services and this letter shall serve as a full and final settlement between both parties.
					<?php } ?>
					</p>
					
				</div>
			<!-- 	<div class="col-md-8 col-md-offset-2" style="padding-left:10px">
					<p style="" id="bodyUrdu" contenteditable="true" >
					<php if(isset($settlement_letter)) 
					{ echo $settlement_letter->bodyUrdu;} else {?>
						This Block is For Urdu Text.
					<php } ?>
					</p>

				</div> -->
			</div>
			<span class="lower_body" style="margin-top: 100px">
			<div class="row"  style="margin-top: 200px">
				<div class="col-md-7 col-md-offset-2 " >
						<h4 class="pull-right" style="padding: 0; margin: 0;font-weight: 700;"><span>_______________________</span> : دستخط </h4>
				</div>
			</div>
			<div class="row" style="margin-top: 20px">
				<div class="col-md-7 col-md-offset-2" >
					<h4 class="pull-right" style="padding: 0; margin: 0;font-weight: 700;"> تاریخ : <span style="margin-right:5px"> <?php echo  urdu_date();?>  </span> </h4>
				</div>
			</div>
			</span>
			<!-- <div class="row">
				<div style="text-align: center; border-top: 1px solid black;" class="col-md-6 col-md-offset-1" id="printfooter">
				<div class="fonts"  style="text-align: center">
				<p style="font-size:18px;"> <a href="https://www.thebridgesschool.pk"><u>www.thebridgesschool.pk</u></a> - info@thebridgesschool.org<br><span contenteditable="false" onblur="savefooter(this)" id="footerlocation"> <php if($emp->project_location) {?><php echo $emp->project_location; } else{?>152-Abu Bakar Block-New Garden Town-Lahore-Pakistan-Phone#+92-42-35844869 <php } ?> 
  				</span> </p>
		   </div>
		</div>
			</div> -->
		 <?php endforeach ?>
			
		</div>	
</body>
<script>



	$("p[contenteditable='true']" ).each(function() {
				// alert('ge');	
				var content_id = $(this).attr('id');
				
				// console.log(content_id);
				// alert(content_id);
				CKEDITOR.inline( content_id, {
					on: {
						blur: function( event ) {
							var data = event.editor.getData();
							// alert(dataEng);
							// alert(data);
							// console.log(content_id+' => '+data);

							var request = jQuery.ajax({
								url: "<?php echo base_url();?>Employee_reg/saveSettlementLetterUrdu/<?php echo $settlement_letter->id;?>",
								type: "POST",
								data: {	
									content : data,
									// engData : dataEng,	
									field_name : content_id
								},
								dataType: "html"
							});
		
						}
					}
				} );
		
			});
	
</script>
</html>