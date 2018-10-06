<html>
<head>

<title>Letter Format</title>

		<meta charset="utf-8"/>

        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>

        <meta name="apple-mobile-web-app-capable" content="yes"/>

		<meta name="apple-mobile-web-app-status-bar-style" content="black"/>

		<script id="toRemove" src="https://cdn.ckeditor.com/4.7.2/full/ckeditor.js"></script>

		<!-- <link href="http://sdk.ckeditor.com/theme/css/sdk-inline.css" rel="stylesheet"> -->

		<script src="http://code.jquery.com/jquery-1.5.2.min.js" type="text/javascript" ></script>

		<script src="<?php echo base_url();?>assets/hrPolices/jquery.jqscribble.js" type="text/javascript"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- ajax cdn -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" integrity="sha256-xykLhwtLN4WyS7cpam2yiUOwr709tvF3N/r7+gOMxJw=" crossorigin="anonymous" />
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha256-3blsJd4Hli/7wCQ+bmgXfOdK7p/ZUMtPXY08jmxSSgk=" crossorigin="anonymous"></script>
    	<!-- end ajax -->
    	<!-- toaster -->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" />
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
    	<!-- end toaster -->

</head>

<body>

<style>

    

    #page{

        text-align: left;

        width: 700px;

    }



    .links a {

				padding-left: 10px;

				margin-left: 10px;

				border-left: 1px solid #000;

				text-decoration: none;

				color: #999;

			}

			.links a:first-child {

				padding-left: 0;

				margin-left: 0;

				border-left: none;

			}

			.links a:hover {text-decoration: underline;}

			.column-left {

				display: inline; 

				float: left;

			}

			.column-right {

				display: inline; 

				float: right;

			}

			.DetailPortion

				{

					clear: both;

					margin: 0px !important;

					padding: 0px !important;

					border:1px solid #000;

				}

			@media print

				{

					.colorW td b{color:#fff !important;}
					#submitbtn{display: none;}

				}

</style>

<center>

<div id="page">

<center>

<img src="<?php echo base_url(); ?>/assets/images/red-logo.png" style="max-height:75px;">  

<!-- <br><br>  -->

<div id="1" contenteditable="true">

<p style="margin-left:0in; margin-right:0in; text-align:center"><strong><em><span style="font-size:12.0pt"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">The Bridges Group</span></span></em></strong></p>

</div>

<br><br>

</center>
<form action="<?php echo base_url() ?>Hr/form_letter_format" method="Post">

<?php if(isset($letter)){ ?>

<div id="headerContent" contenteditable="true">
	<?php echo $letter->headingContent; ?>
</div>




<br>

<div id="descriptionContent" contenteditable="true" style="text-align:center;min-height: 63%;">
	<?php echo $letter->DescriptionContent; ?>
	
</div>
<input type="hidden" name="idval" id="idval" value="<?php echo $letter->id; ?>" style="float: right;"/>
<input type="submit" name="Update" id="updatebtn" value="Update" style="float: right;"/>
<?php } else {?>



<div id="headerContent" contenteditable="true">

<p style="margin-left:0in; margin-right:0in; text-align:center"><span style="font-size:26pt"><span style="font-family:Cambria,serif"><span style="color:#17365d">Heading (Edit-able)</span></span></span>

</p>

</div>




<br>

<div id="descriptionContent" contenteditable="true" style="text-align:center;min-height: 63%;">

<p style="height: 61%;">Add Content Here (Edit-able)



</p>
</div>
<input type="submit" name="submit" id="submitbtn" style="float: right;"/>

<?php } ?>
</form>
<br><br><br>

<br><br>

<div  style="position: relative;bottom:0;width: inherit;" >

	<!-- <b style="float: left;">

		Regards,<br/>

		Admin<br/>

		The Bridges School

	</b>

	<b style="float: right;">

		

	</b><br/><br/><br/> -->



	<p style="border-top:1px solid #000;text-align: center;align-items: center;">

		www.thebridgesschool.pk - info@thebridgesschool.org

		<br/> 

		152-Abu Bakar Block-New Garden Town-Lahore-Pakistan-Phone#+92-42-35844869  

                </span> 

	</p>

</div>

</center>
<script>
    $("#submitbtn").click(function(e) {
    	e.preventDefault();
        var headerContent = $('#headerContent').html();           
        var descriptionContent = $('#descriptionContent').html(); 
        var formData = new FormData();
        formData.append('headingContent',headerContent );
        formData.append('descriptionContent',descriptionContent );

			console.log(formData);
			$.ajax({
				url:'<?php echo base_url() ?>Employee_reg/form_letter_format',
				type: 'POST',
				data: formData,
				async: false,
				success: function (data) {
					if (data==1) {
						toastr.success("Data Posted Successfully");
					}
					else{
						toastr.warning( data , "Warning");
						// $('#cv_button').attr("href",data);
					}
					console.log(data);
				},
				cache: false,
				contentType: false,
				processData: false
			});
			return false;
    });


//  For Updation



 $("#updatebtn").click(function(e) {
    	e.preventDefault();
        var headerContent = $('#headerContent').html();           
        var descriptionContent = $('#descriptionContent').html(); 
        var idval = $('#idval').val(); 
        var formData = new FormData();
        formData.append('headingContent',headerContent );
        formData.append('descriptionContent',descriptionContent );
        formData.append('id',idval);
			console.log(formData);
			$.ajax({
				url:'<?php echo base_url() ?>Employee_reg/Updateform_letter_format',
				type: 'POST',
				data: formData,
				async: false,
				success: function (data) {
					if (data==1) {
						toastr.success("Data Posted Successfully");
					}
					else{
						toastr.warning( data , "Warning");
						// $('#cv_button').attr("href",data);
					}
					console.log(data);
				},
				cache: false,
				contentType: false,
				processData: false
			});
			return false;
    });



</script>


</body>



</html>