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
	</style>
</head>
<body>
		<div class="bg-mid-gry" style="font-size: 30px" align="center">
			<h2>Form A.1 Corporate Profile</h2>
		</div>
	<div class="container">
		<?php if($company==NULL){ 
		echo '<form  method="POST" action="'.base_url().'CorporateProfile/saveCompanyAdd"  enctype="multipart/form-data">';
 }
 else {
echo '<form  method="POST" action="'.base_url().'CorporateProfile/saveCompanyAdd/'.$company->id.'"  enctype="multipart/form-data">';
	 } ?>
<div id="alert" style="padding: 10px;" >	 
</div>
		<!-- <div id="success" style="background-color: green;padding: 30px;" >	 -->
		<!-- </div> -->
		<div class="row">
				<?php  if ($company==NULL){ ?>
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="pull-right">
				<h4 class="">Corporate Profile <span> <img class="icon" src="<?php echo base_url() ?>/assets/Corporate-images/speaker.png" alt=""></span></h4>
				
				</div>	
				<div class="pull-right" style="margin-top:50px;">	
				<div>
					<img  alt="Profile" id="blah" class="images img-circle" height="auto" width="185">
						  <div class="middle">
						  <input type="file" name="dp" id="imgupload"  onchange="readURL(this)" style="display: none"> 
						    <div class="text"><span id="OpenImgUpload">Upload</span></div>
						  </div>

				</div>
				</div>
			</div>
			<!-- Description of Video: <input type="text" name="description_entered"/><br><br> -->
<!-- <input type="file" name="file"/><br><br> -->
			<div class="col-md-9 col-sm-12 col-xs-12">
				<h4 class="fnt-bold">Bridges</h4>	
				<p class="fnt-bold">Bridges</p>
				<p class="fnt-bold">Near Muslim Town,Pakistan</p>
				<p class="fnt-bold">03000000000,C@gmail.com</p>
				<p class="fnt-bold">www.thebridges.com</p>
				<div class="brdr-top-btm-gry" style="padding:10px 0 20px 0 ">
					<textarea name="description" cols="118" rows="8"></textarea>
				</div>
				<div>
						<label for="" class="disp-inl pull-left ">Company Industry</label>
						<input type="text" class="form-control pull-right disp-inl" style="width: auto;" name="company_industry">
				</div>
					<div style="clear: both">
						<label for="" class="disp-inl pull-left">Company Type</label>
						<input type="text" class="form-control pull-right disp-inl" style="width: auto;" name="company_type">
					</div>
					<div style="clear: both">
						<label for="" class="disp-inl pull-left">Location</label>
						<input type="text" class="form-control pull-right disp-inl" style="width: auto;" name="location">
					</div>
							<div style="clear: both">
										<label for="" class="disp-inl pull-left">Email</label>
										<input type="email" class="form-control pull-right" style="width: auto;" name="company_email">
									</div>
			<div style="clear:both">
				<label for="" class="pull-left">Phone</label>
				<input type="text" class="form-control pull-right" style="width: auto;" name="company_phone">
			</div>
			<div style="clear: both">
				<label for="" class="pull-left">Employee</label>	
				<input type="number" min="0" class="form-control disp-inl pull-right" style="width: auto;" name="company_employeeQty">
			</div>
			<div class="pull-right" style="clear: both">
				<!-- <div><a href="#">Edit</a></div> -->
				<div><button type="submit" id="" class="btn btn-success" style="margin-top: 30px">Save</button></div>
				<!-- <div><button type="submit" >New</button></div> -->
			</div>
			<?php } else { ?>
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="pull-right">
				<h4 class="">Corporate Profile <span> <img class="icon" src="<?php echo base_url() ?>/assets/Corporate-images/speaker.png" alt=""></span></h4>
				
				</div>	
				<div class="pull-right" style="margin-top:50px;">	
				<div>
					<img  alt="Profile" id="blah" src="<?php echo $company->company_image; ?>" class="images img-circle" height="auto" width="185">
						  <div class="img-circle">
						  	
						  <input type="file" name="dp" id="imgupload"  onchange="readURL(this)" style="display:none"> 
						    <div class="text"><span id="OpenImgUpload">Upload</span></div>
						  </div>

				</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-12 col-xs-12">
				<h4 class="fnt-bold">Bridges</h4>
				<p class="fnt-bold">Bridges</p>
				<p class="fnt-bold">Near Muslim Town,Pakistan</p>
				<p class="fnt-bold">03000000000,C@gmail.com</p>
				<p class="fnt-bold">www.thebridges.com</p>
				<div class="brdr-top-btm-gry" style="padding:10px 0 20px 0 ">
					<textarea name="description" cols="118" rows="8"><?php echo $company->company_description; ?></textarea>
				</div>
				<div>
						<label for="" class="disp-inl pull-left ">Company Industry</label>
						<input type="text" class="form-control pull-right disp-inl" value="<?php echo $company->company_industry; ?>" style="width: auto;" name="company_industry">
				</div>
					<div style="clear: both">
						<label for="" class="disp-inl pull-left">Company Type</label>
						<input type="text" class="form-control pull-right disp-inl" value="<?php echo $company->company_type; ?>" style="width: auto;" name="company_type">
					</div>
					<div style="clear: both">
						<label for="" class="disp-inl pull-left">Location</label>
						<input type="text" class="form-control pull-right disp-inl" style="width: auto;" value="<?php echo $company->location; ?>" name="location">
					</div>
							<div style="clear: both">
										<label for="" class="disp-inl pull-left">Email</label>
										<input type="email" class="form-control pull-right" style="width: auto;" value="<?php echo $company->email; ?>" name="company_email">
									</div>
			<div style="clear:both">
				<label for="" class="pull-left">Phone</label>
				<input type="text" class="form-control pull-right" value="<?php echo $company->phone; ?>" style="width: auto;" name="company_phone">
			</div>
			<div style="clear: both">
				<label for="" class="pull-left">Employee</label>	
				<input type="number" min="0" class="form-control disp-inl pull-right" style="width: auto;" value="<?php echo $company->total_employees; ?>" name="company_employeeQty">
			</div>
			<div class="pull-right" style="clear: both">
				<!-- <div><a href="#">Edit</a></div> -->
				<div><button type="submit" id="" class="btn btn-success" style="margin-top: 30px">Save</button></div>
				<!-- <div><button type="submit" >New</button></div> -->
			</div>
			<?php } ?>
			</div>
		</div>
		</form>
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
		<form action="<?php echo base_url();?>CorporateProfile/saveJob" method="POST">
		<div class="row"> <div class="col-md-3">	</div>	
			<?php  if ($job==NULL){ ?>
			<div class="col-md-9 ">

					<!-- <input type="text" name="company_id" value="123"> -->
				
				<div class="jobs1" style="">
				<div style="clear: both">		
						<label for=""  class="">Job Title</label>
						<input type="text" class="form-control pull-right disp-inl" style="width: auto;" name="job_title[0]">
				</div>
				<?php if($company){
				echo '<input type="text" style="display:none" id="company_id" name="company_id" value="'. $company->id.'">';
				 } else{
				echo '<input type="text" style="display: none;" id="company_id" name="company_id" value="">';
				 }?>
				<div style="clear: both">
						<label for="" class="disp-inl pull-left ">Salary</label>
						<input type="text" class="form-control pull-right disp-inl" style="width: auto;" name="salary[0]">
				</div>
					<div style="clear: both">
						<label for="" class="disp-inl pull-left">Years of Experience</label>
						<input type="text" class="form-control pull-right disp-inl" style="width: auto;" name="experience[0]">
					</div>
							<div style="clear: both">
										<label for="" class="disp-inl pull-left">Residence Location</label>
										<input type="text" class="form-control pull-right" style="width: auto;" name="location[0]">
									</div>
			<div style="clear:both">
				<label for="" class="pull-left">Gender</label>
				<input type="text" class="form-control pull-right" style="width: auto;" name="gender[0]">
			</div>
			<div style="clear: both">
				<label for="" class="pull-left">Industry</label>	
				<input type="text"  class="form-control disp-inl pull-right" style="width: auto;" name="industry[0]">
			</div>
			<div style="clear: both">
				<label for="" class="pull-left">Employee Type</label>	
				<input type="text"  class="form-control disp-inl pull-right" style="width: auto;" name="emptype[0]">
			</div>
			<div style="clear: both">
				<label for="" class="pull-left">Posted Date</label>	
				<input type="date"  class="form-control disp-inl pull-right" style="width: auto;" name="pdate[0]">
			</div>
			<div class="pull-right" style="clear: both">
				<span class="cloned"><button id="add" type="button" class="btn btn-primary btn-xs">+</button></span>
				<span class="cloned"><button id="1remove" type="button" onclick="removeit(this.id)" class="btn btn-primary btn-xs">-</button></span>
			</div>
			</div>
	</div>
</div>

	<?php } else { $i=0; foreach($job as $job)
		{?>
			<?php if($i==0){?>
		<div class="col-md-9 ">
<?php } ?>
<input type="text" name="jobid[<?=$i?>]" value="<?php echo $job->id; ?>" style="display: none">
					
					<!-- <input type="text" name="company_id" value="<?php echo $company->id; ?>"> -->
				<div class="jobs1" style="">
				<div style="clear: both">		
						<label for=""  class="">Job Title</label>
						<input type="text" class="form-control pull-right disp-inl" style="width: auto;" value="<?php echo $job->title; ?>" name="job_title[<?=$i?>]">
				</div>
				<input value="<?php echo $company->id; ?>" type="text" style="display: none;" id="company_id" name="company_id">
				<div style="clear: both">
						<label for="" class="disp-inl pull-left ">Salary</label>
						<input type="text" class="form-control pull-right disp-inl" value="<?php echo $job->salary; ?>" style="width: auto;" name="salary[<?=$i?>]">
				</div>
					<div style="clear: both">
						<label for="" class="disp-inl pull-left">Years of Experience</label>
						<input type="text" class="form-control pull-right disp-inl" style="width: auto;" value="<?php echo $job->experience; ?>" name="experience[<?=$i?>]">
					</div>
							<div style="clear: both">
										<label for="" class="disp-inl pull-left">Residence Location</label>
										<input type="text" class="form-control pull-right" style="width: auto;" value="<?php echo $job->residence; ?>" name="location[<?=$i?>]">
									</div>
			<div style="clear:both">
				<label for="" class="pull-left">Gender</label>
				<input type="text" class="form-control pull-right" style="width: auto;" value="<?php echo $job->gender; ?>" name="gender[<?=$i?>]">
			</div>
			<div style="clear: both">
				<label for="" class="pull-left">Industry</label>	
				<input type="text"  class="form-control disp-inl pull-right" style="width: auto;" value="<?php echo $job->industry; ?>" name="industry[<?=$i?>]">
			</div>
			<div style="clear: both">
				<label for="" class="pull-left">Employee Type</label>	
				<input type="text"  class="form-control disp-inl pull-right" style="width: auto;" value="<?php echo $job->employement_type; ?>" name="emptype[<?=$i?>]">
			</div>
			<div style="clear: both">
				<label for="" class="pull-left">Posted Date</label>	
				<input type="date"  class="form-control disp-inl pull-right" style="width: auto;" value="<?php echo date('Y-m-d',strtotime($job->created_at)); ?>" name="pdate[<?=$i?>]">
			</div>
			<div class="pull-right" style="clear: both">
				<span class="cloned"><button id="add" type="button" class="btn btn-primary btn-xs">+</button></span>
				<span class="cloned"><button id="1remove" type="button" onclick="removeit(this.id)" class="btn btn-primary btn-xs">-</button></span>
			</div>
			<?php if($i==0){?>
		</div>
		<?php } ?>
	<?php $i++; }} ?>
	<div class="button pull-right" style="padding-top:20px "><button class="btn btn-success" type="submit">Save</button></div>
	</div>

</form>
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
<script>
	// var company_id=-1;
$( document ).ready(function() {	
	
	var i=1;var j=0;
// var cloned=$(".jobs1:first").clone(true);
	$("button#add").click(function(e){
    e.preventDefault();
    i++;j++;
    var cloned=$(".jobs"+(i-1)+":first").clone(true).attr('class','jobs'+i);
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



//   AJAX


var  img='';

$("button#savecompany").click(function(e){
	// img=$('#blah').attr('src');
// var datastring = $("form#company").serialize();
// console.log(datastring+'&dp='+encodeURIComponent(img));
// $('div#alert').show();
// $('div#alert').text($("form#company").serialize());
// $.ajax({
//     type: "POST",
//     url: "<?php echo base_url(); ?>CorporateProfile/saveCompanyAdd",
//     data: datastring+'&r='+encodeURIComponent(imag),
//     dataType: "json",
//     success: function(data) {
//     	if(data){
//     		alert('hello');
//     	// $('div#alert').addClass="alert-success";    	
//     	// $('div#alert').innerHTML="<p>Save Successfully<p>";
//     	$('input#company_id').val(data);
// 	}
    // else{
    	// $('div#alert').addClass="alert-danger";
		// $('div#alert').innerHTML="<p>Error<p>";
    // }
    // $('div#alert').show();
    	// $("div#alert").hide(1000);
	    // window.setTimeout(function() {
    	// $("#alert").fadeTo(500, 0).slideUp(500, function(){
        // $(this).remove(); 
    // });
// }, 4000);
        // alert('<php echo $data['company_id']; ?>');
        //var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
        // do what ever you want with the server response
//     },
//     error: function() {
//         alert('error occured');
//     }

// });
});
        $('#OpenImgUpload').click(function(){
         $('#imgupload').trigger('click'); 
     });

function readURL(input) {


            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                	$('')
                    $('#blah').attr('src', e.target.result);
                    // img=e.target.result;	
                };
                reader.readAsDataURL(input.files[0]);
            }

// console.log(new FormData('form'));

		 // $.ajax({
   //      url: "<?php echo base_url(); ?>CorporateProfile/saveCompanyAdd",
   //      type: $(this).attr("method"),
   //      dataType: "JSON",
   //      data: new FormData(this),
   //      processData: false,
   //      contentType: false,
   //      success: function (data, status)
   //      {

   //      },
   //      error: function (xhr, desc, err)
   //      {

   //      }
   //  }); 




        }

</script>
</html>