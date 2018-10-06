<!DOCTYPE html>
<html lang="zxx">
<head>
<style type="text/css">
.res-tbl
{
border: none !important;
}
/*// td {
    // border: none !important;
// }
// th {
    // border: none !important;
// }	*/
.edit-form{
	background-color: #eee !important;
}

  select::-ms-expand {
    display: none;
  }
 select{
    /*width:100px;*/
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    /*padding: 2px 30px 2px 2px;*/
    /*border: none;*/
   /* background: transparent url("http://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/br_down.png") no-repeat right center;*/
}
</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<title>The Bridges</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/emp_profile/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/emp_profile/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/emp_profile/js/jquery.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" integrity="sha256-xykLhwtLN4WyS7cpam2yiUOwr709tvF3N/r7+gOMxJw=" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha256-3blsJd4Hli/7wCQ+bmgXfOdK7p/ZUMtPXY08jmxSSgk=" crossorigin="anonymous"></script>


	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->


<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script> -->
	<script type="text/javascript">
					$( document ).ready(function() {
					    // $('textarea').attr("readonly","readonly") ;	
					    $('textarea').css("padding","0px") ;
					    // $('input').attr("readonly","readonly") ;	
					});
					function editform(id){
						var elem = $( '#'+id+' .edit');
					    $.each(elem, function(index, value) {
					    	$(value).addClass("edit-form");	
					    	$(value).attr("readonly",false) ;
					    	$(value).css("padding","8px") ;	

					    });
					}
					function submitform(id){
						var elem = $( '#'+id+' .edit');
					    $.each(elem, function(index, value) {
					    	$(value).removeClass("edit-form");	
					    	$(value).attr("readonly","readonly") ;
					    	$(value).css("padding","0px") ;
					    });
					}
			</script>
</head>
<style type="text/css">
	@media print {
	html,body{height:100%;width:100%;margin:0;padding:0;}
 @page {
	/*size: A4 potrait;*/
	max-height:100%;
	max-width:100%
	}
   img {
	width:100%;
	height:100%;
	display:block;
	}
	.level_1_heading
	{
	background-color: rgb(255, 187, 119) !important;
    color: white !important;
    font-size: 25px !important;
    padding: 2px;
    font-weight: bold;
	}
}
</style>
<body>
	<div class="level_1_heading">
		<div class="container">
					3.1.E  - Employment Profile
		</div>
	</div>
	<div class="container">
				<!-- Level 2 Section -->
				<div class="level_2_row">
					<h3 class="level_2_heading"><i class="fa fa-user" aria-hidden="true" align="center"></i> Uploaded Degree</h3>
					<img src="<?php echo $upload_degree	; ?>" alt="">
				</div>
			</div>
</body>
</html>