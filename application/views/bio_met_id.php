<!DOCTYPE html>
<html>
<head>
	<title>Badge</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Encode+Sans+Condensed:100,200,300,400,500,600,700,800,900');
		*{
			box-sizing: border-box;
			-webkit-box-sizing: border-box;
		}
		body{
			margin: 0;
			padding: 0;
			font-weight: normal;
			letter-spacing: 1px;
			font-family: 'Encode Sans Condensed', sans-serif;
		}
		a, td, th, table, div, span{
			font-size: 12px;
		}
		a{
			color: #000;
			text-decoration: none;
		}
		.boxed-wrap{
			width: 50%;
			margin: 0 auto;
			overflow: hidden;
		}
		.topbar, .bottom-bar{
			height: 20px;
			width: 100%;
			display: block;
			background-color: #365e92;
			position: relative;
			z-index: 2;
		}
		.t-center{
			text-align: center;
		}
		.mHead{
			font-size: 20px;
			text-transform: uppercase;
			letter-spacing: 3px;
			font-weight: 600;
			margin: 0;
		}
		.em-row{
			background-color: #365e92;
			color: #fff;
			margin-top: 10px;
			position: relative;
			z-index: 2;
		}
		.em-row img{
			float: left;
			margin-right: 20px;
		}
		.em-row .info{
			float: left;
		}
		.em-row:after{
			display: block;
			content: '';
			clear: both;
		}
		.em-name{
			font-size: 25px;
			margin: 30px 0 0;
		}
		.em-desig{
			font-size: 16px;
			margin: 0;
		}
		.em-id{
			margin: 5px 0;
			display: block;
			font-size: 14px;
		}
		.em-content{
			font-size: 20px;
		}
		.em-content *{
			margin: 3px 0;
			font-weight: 400;
		}
		.topbar:after{
			    content: url(head-logo.jpg);
    background-repeat: no-repeat;
    float: right;
    display: block;
    z-index: -2;
    position: absolute;
    right: -100px;
    opacity: 0.1;
		}
		.bottom-bar:after{
			    content: url(head-logo.jpg);
    background-repeat: no-repeat;
    float: right;
    display: block;
    z-index: -2;
    position: absolute;
    left: -100px;
    opacity: 0.1;
    top: -150px;
		}
	</style>
</head>
<body>
				<?php
					//foreach($data1 as $data)
					//{
				// print_r($data);
						?>
							<!--<option value="<?php //echo $data['emp_id']; ?>"><?php //echo $data['title']; ?></option>-->
					
	<div class="boxed-wrap">
		<div class="topbar"></div>
		<div class="t-center">
			<img src="<?php echo base_url()?>uploads/head-logo.jpg" width="150" alt="The Bridges" />
			<h2 class="mHead">the bridges analytics</h2>
		</div>
		<div class="em-row">
		<img src="<?php echo 		$data->upload_picture;?>" width="160" width="160" alt="employeer" />
		<!--<img src="<?php //echo base_url()."/uploads/".$data['emp_image'];?>" width="160" alt="" />-->
			<div class="info">
				<h3 class="em-name">Name : <?php echo $data->fname; ?></h3>
				<h4 class="em-desig">Level : <?php echo $data->job_title;?></h4>
				<h4 class="em-desig">Title : <?php   ?></h4>
				<h4 class="em-desig">Shift : <?php echo $data->time_in; ?></h4>
				<h4 class="em-desig">Break : <?php  ?></h4>
				<span class="em-id">ID # 346</span>
			</div>
		</div>
		<div class="t-center em-content">
			<h4>Emergency Contact Number: <?php  //$data['emergency_phone'] ?></h4>
			<h4>Employee Since: <?php// echo //$data['date_employeed'] ?></h4>
			<img src="<?php echo base_url()?>uploads/sign.jpg" width="150" alt="" />
			<h4>Authorized Signature</h4>
		</div>
		<div class="bottom-bar"></div>
	</div>
		<?php
				//	}
				?>
</body>
</html>