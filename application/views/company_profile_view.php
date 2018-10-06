<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<title>Corporate Profile</title>
	<style>
		.disp-inl{
			display: inline;
		}
	p, div, span, td, a, h1, h2, h3, h4, h5, h6, ul, ol, li, dd, dt, th, tr{
   		font-family: Roboto !important;
	}
	.right-marg-20{
		margin-right: 20px;
	}	
	.marg-40{
		margin-right: 40px;
		margin-left: 40px;
	}
	.icon{
		height: 25px;
		width: auto;
	}
	.fnt-bold{
		font-weight: bold;
	}
	.col-md-9 p{
		padding:0;
		margin:0px;
	}
	.brdr-top-btm-gry{
		border-top:1px solid #b7b7b7;
		border-bottom:1px solid #b7b7b7;
	}
	.bg-mid-gry{
    background-color: #f0f0f0 !important;
  }
  .img-circular{
 width: 200px;
 height: 200px;
 /*background-image: url('http://strawberry-fest.org/wp-content/uploads/2012/01/Coca-Cola-logo.jpg');*/
 background-size: cover;
 display: block;
}

	</style>
</head>


<body>


		<div class="bg-mid-gry" style="font-size: 30px" align="center">
			<h2>Form A.1 Corporate Profile</h2>
		</div>
	<div class="container">


		<!-- <div id="success" style="background-color: green;padding: 30px;" >	 -->
		<!-- </div> -->
		<div class="row">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="pull-right">
				<h4 class="">Corporate Profile <span> <img class="icon" src="<?php echo base_url(); ?>/assets/Corporate-images/speaker.png" alt="speaker-icon"></span></h4>
				</div>	
				<div class="pull-right" style="">	
					<img src="<?=$company->company_image;?>"   style="width: 200px;border: 1px;border-radius: 50%" alt="Add-Logo">
				</div>
			</div>
			<div class="col-md-9 col-sm-12 col-xs-12">
				<h4 class="fnt-bold">Bridges</h4>
				<p class="fnt-bold">Bridges</p>
				<p class="fnt-bold">Near Muslim Town,Pakistan</p>
				<p class="fnt-bold">03000000000,C@gmail.com</p>
				<p class="fnt-bold">www.thebridges.com</p>
				<div class="brdr-top-btm-gry" style="padding:10px 0 20px 0 ">
					<p name="description" cols="118" rows="8"><?=$company->company_description?></p>
				</div>
				<div>
						<label for="" class="disp-inl pull-left ">Company Industry</label>
						<p class="pull-right"> <?=$company->company_industry?> </p>
				</div>
					<div style="clear: both">
						<label for="" class="disp-inl pull-left">Company Type</label>
						<p class="pull-right"> <?=$company->company_type?> </p>

					</div>
					<div style="clear: both">
						<label for="" class="disp-inl pull-left">Location</label>
						<p class="pull-right"> <?=$company->location?> </p>
						
					</div>
							<div style="clear: both">
								<label for="" class="disp-inl pull-left">Email</label>
								<p class="pull-right"> <?=$company->email?> </p>
											
							</div>
			<div style="clear:both">
				<label for="" class="pull-left">Phone</label>
				<p class="pull-right"> <?=$company->phone?> </p>
				
			</div>
			<div style="clear: both">
				<label for="" class="pull-left">Employee</label>	
				<p class="pull-right"> <?=$company->total_employees?> </p>
				
			</div>
			<div style="clear: both">
				<label for="" class="pull-left">Status</label>	
				<p class="pull-right"> <?=$company->status=="1" ? "Active" : "Closed"?> </p>	
			</div>
			<div class="pull-right" style="clear: both">
        <td><a href="<?php echo base_url();?>/CorporateProfile/CompanyAdd/<?php echo $company->id; ?>">Edit</a></td>
				<!-- <div><button type="submit" >New</button></div> -->
			</div>
			
			</div>
		</div>
	</div>



<!--   A.2  -->
<div class="bg-mid-gry" style="font-size: 30px" align="center">
			<p>Form A.2 Corporate Profile</p>
</div>
	<div class="container">
		<div class="row">

			<div class="col-md-3 ">
				<span class="pull-right">
				<h4 class="">Campaign <span> <img class="icon" src="<?php echo base_url() ?>/assets/Corporate-images/person.png" alt=""></span></h4>
				</span>
			</div>
			<div class="col-md-9" style="border-top:2px solid gray;margin: 22px 0px">	</div>
		</div>
		<div class="row"> <div class="col-md-3">	</div>	
			
			<div class="col-md-9 ">
			<?php 
			foreach($jobs as $job){
			?>
				
				<div class="jobs1" style="">
				<div style="clear: both">		
						<label for=""  class="">Job Title</label>
						<p class="pull-right"><?=$job->title;?></p>
				</div>
				<div style="clear: both">
						<label for="" class="disp-inl pull-left ">Salary</label>
						<p class="pull-right"><?=$job->salary;?></p>
				</div>
					<div style="clear: both">
						<label for="" class="disp-inl pull-left">Years of Experience</label>
						<p class="pull-right"><?=$job->experience;?></p>
						
					</div>
							<div style="clear: both">
								<label for="" class="disp-inl pull-left">Residence Location</label>
								<p class="pull-right"><?=$job->residence;?></p>
											
							</div>
			<div style="clear:both">
				<label for="" class="pull-left">Gender</label>
				<p class="pull-right"><?=$job->gender;?></p>
			</div>
			<div style="clear: both">
				<label for="" class="pull-left">Industry</label>	
				<p class="pull-right"><?=$job->industry;?></p>
				
			</div>
			<div style="clear: both">
				<label for="" class="pull-left">Employee Type</label>	
				<p class="pull-right"><?=$job->salary;?></p>
			</div>
			<div style="clear: both">
				<label for="" class="pull-left">Posted Date</label>	
				<p class="pull-right"><?=$job->created_at;?></p>
				
			</div>
			<div style="clear: both">
				<label for="" class="pull-left">Status</label>	
				<p class="pull-right"><?= $job->status==1 ?"Active":"Closed" ?></p>

			</div>
			</div>
			<div style="width: 100%;padding: 20px  0;clear: both">
				<div style="border-bottom: 1px solid gray;">
					
				</div>
			</div>
			<?php } ?>
	</div>
</div>
</div>
</body>
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

<script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-1.5.2.min.js" type="text/javascript" ></script>
<!-- <script src="<?php echo base_url();?>assets/jquery.jqscribble-.js" type="text/javascript"></script> -->
<!-- <script>
	var company_id=-1;
$( document ).ready(function() {	
	
	var i=1;var j=0;
var cloned=$(".jobs1:first").clone(true);
	$("button#add").click(function(e){
    e.preventDefault();
    cloned.attr('class','jobs'+i);
    i++;j++;
    cloned.find('input').each(function(){
      this.name=this.name.replace('['+0+']','['+j+']');
    });
// console.log(i);
    // cloned.find('textarea').each(function(){
    //   this.name=this.name.replace('['+0+']','['+j+']');
    // });
    
    // console.log(cloned);
    cloned.insertAfter('.jobs'+(i-1)+':last');
    cloned.find('#'+(i-1)+'remove').attr('id',i+'remove');
    // $('#'+(i-1)+'remove').attr('id',i+'remove');

});

$("div#alert").hide();
});
	function removeit(id){
	// e.preventDefault()
    // alert(parseInt(id));
    $(".jobs"+parseInt(id)).remove();
    // cloned.find('textarea').each(function(){
    //   this.name=this.name.replace('['+0+']','['+j+']');
    // });
    
    // cloned.insertAfter('.jobs'+(i-1)+':last');

}

$("button#savecompany").click(function(e){
var datastring = $("#company").serialize();
$.ajax({
    type: "POST",
    url: "<?php echo base_url(); ?>CorporateProfile/saveCompanyAdd",
    data: datastring,
    dataType: "json",
    success: function(data) {
    	if(data){
    	$('div#alert').addClass="alert-success";    	
    	$('div#alert').innerHTML="<p>Save Successfully<p>";
    	$('input#company_id').val(data);
	}
    else{
    	$('div#alert').addClass="alert-danger";
		$('div#alert').innerHTML="<p>Error<p>";
    }
    $('div#alert').show();
    	$("div#alert").hide(1000);
	    window.setTimeout(function() {
    	$("#alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
        // alert('<php echo $data['company_id']; ?>');
        //var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
        // do what ever you want with the server response
    },
    error: function() {
        alert('error handing here');
    }

});
});
</script> -->
</html>