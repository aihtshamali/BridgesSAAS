<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Settlement Letter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="//cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-1.5.2.min.js" type="text/javascript" ></script>
<script src="<?php echo base_url();?>assets/jquery.jqscribble.js" type="text/javascript"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
div {
		font-family: nag;
	}
	.fonts{
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;

    font-size: 15px;
    font-style: normal;
    font-variant: normal;
    font-weight: 500;
    line-height: 17.4px;	}

@media print { 
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
	<div class="container" style="margin-top: 30px">
		<?php foreach ($employee as $emp): ?>
			<div class="row">
					<div class="col-md-12" align="center">
					<?php if($emp->hired_for_project==2){ ?><img src="<?php echo base_url(); ?>Logoz/red-logo.png"  style=" width: 130px;"><?php } else { ?><img src="<?php echo base_url(); ?>Logoz/logo.png"  style=" width: 130px;border: 2px solid gray;"><?php } ?>
						<br><br>
					<div class="col-md-12" style="padding-left: 0px;"><p style="padding:0px; margin:0px;font-size:30px;font-style: italic;font-family: nag">Final Settlement Letter</p>
					</div>
				</div>
			</div>
			<br><br><br>
			<div class="row"  >
				<div class="col-md-6 col-md-offset-2">
					<h4 style="padding: 0; margin: 0;font-weight: 700;">Date: <span><?php echo date("d-M-Y"); ?></span> </h4>
				</div>
			</div>
			<div class="row" >
				<div class="col-md-6 col-md-offset-2" >
						<h4 style="padding: 0; margin: 0;font-weight: 700;">Name: <span><?php echo $emp->fname; ?> <?php echo $emp->lname; ?></span> </h4>
				</div>
			</div>
					<div class="row fonts"  style="margin:29px 0 0 0px" >
				<div class="col-md-8 col-md-offset-2" style="padding-left:10px">
					<p style="font-size:20px;" id="bodyEng" contenteditable="true"  >
					<?php if(isset($settlement_letter)) 
					{ echo $settlement_letter->bodyEng;} else {?>
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
			<div class="row">
				<div style="text-align: center; border-top: 1px solid black;" class="col-md-6 col-md-offset-1" id="printfooter">
				<div class="fonts"  style="text-align: center">
				<p style="font-size:18px;"> <a href="https://www.thebridgesschool.pk"><u>www.thebridgesschool.pk</u></a> - info@thebridgesschool.org<br><span contenteditable="false" onblur="savefooter(this)" id="footerlocation"> <?php if($emp->project_location) {?><?php echo $emp->project_location; } else{?>152-Abu Bakar Block-New Garden Town-Lahore-Pakistan-Phone#+92-42-35844869 <?php } ?> 
  				</span> </p>
		   </div>
		</div>
			</div>
		<?php endforeach ?>

		</div>	
</body>
<script>



	$("p[contenteditable='true']" ).each(function() {
				// alert('ge');	
				var content_id = $(this).attr('id');
				
				// console.log(content_id);
				
				CKEDITOR.inline( content_id, {
					on: {
						blur: function( event ) {
							var data = event.editor.getData();
							// alert(dataEng);
							// alert(data);
							// console.log(content_id+' => '+data);

							var request = jQuery.ajax({
								url: "<?php echo base_url();?>Employee_reg/saveSettlementLetter/<?php echo $settlement_letter->id;?>",
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