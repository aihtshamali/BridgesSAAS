<?php //var_dump($tasks); exit; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple jQuery</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style type="text/css">
.bg-light-gry{
	background: #f9f9f9;
}
.bg-mid-gry{
	background: #f0f0f0;
}
.bg-full-gry{
	background: #dbdbdb;
}
.bg-green{
	background: green;
}
.strong{
	font-weight: bold;
}
.width{
	width: 100%;
}
.height-65{
	height: 65px;
}
.height-12{
	height: 12px;
}
.height-16{
	height: 16px;
}
.height-35{
	height: 35px;
	border-radius: 8px 8px 0px 0px
}
.height-20{
	height: 16px;
}
.height-20-with-border{
	height: 18px;
	border-radius: 0px 0px 8px 8px;
}
.fs-10{
	font-size: 10px;
}
.width-88{
	width: 88%;
}
.center {
	text-align: center;
}
.child-box{
	width: 10%;
}
.block {
	display: block;
	text-decoration: none;
	color: black;
}
body{
	font-size: 12px;
	background-color: #ccc;
}

#custom-bars{    
	height: 100%;
    /* padding-top: 10px; */
    position: relative;
    /* float: right; */
    width: auto;
}
#custom-bars span{
	position: absolute;
    transition: all 150ms ease-in-out;
    display: block;
    width: 80%;
    height: 3px;
    left: 0;
    right: 0;
    margin: auto;
}
#custom-bars span:nth-of-type(1){
    /*transform: translateY(5px);*/
    bottom: 3px;
}
#custom-bars span:nth-of-type(2){
	/*transform: translateY(9px);*/
	bottom: 8px;
}
#custom-bars span:nth-of-type(3){
	/*transform: translateY(13px);*/
	bottom: 13px;
}
.m-top{
	margin-top: 50px;
}

.width-12p{
    width: 12%;
}
.width-71-3p{
    width: 71.3%;
}
.btlr-8{
	border-top-left-radius: 8px;
}
.btrr-8{
	border-top-right-radius: 8px;
}
.bblr-8{
	border-bottom-left-radius: 8px;
}
.bbrr-8{
	border-bottom-right-radius: 8px;
}
.col-md-1,
.col-md-2,
.col-md-8{
	height: inherit;
}
.width-d-5{
	width: calc(87%/5);
}
.padding-0{
	padding: 0;
}
.date-diff-result{
	font-size: 9px;
	padding-top: 2px;
}
/*Header*/
header{
		height: 70px;
		background: green;
	}
	.header-logo{
		width: 72px;
	    position: relative;
	    height: 71px;
	    left: -27px;
	}
	.logo-with-text{

	}
	.header-logo-text{
		left: 4%;
	    top: 50%;
	    transform: translateY(-50%);
	    color: #fff;
	    font-weight: 600;


	    font-size: 33px;
	}
	.padding-0{
		padding: 0;
	}
	.child-block span{
		display: block;
	    font-size: 9px;
	    font-weight: 600;
	    color: #fff;
	}
	.text-center{
		text-align: center;
	}
	.text-left{
		text-align: left;
	}
	.text-right{
		text-align: right;
	}
	.custom-header-icons{
		color: #fff;
		line-height: 70px;
	}
	.custom-header-icons i{
		cursor: pointer;
		opacity: 0.7;
		display: inline-block;
		font-size: 20px;
		margin-left: 10px;
	}
	.custom-header-icons i:hover{
		opacity: 1;
	}
	.opacity-0-7{
		opacity: 0.7;
	}
	abbr[title] {
 		border-bottom: none !important;
  		cursor: pointer !important;
  		text-decoration: none !important;
	}
	/*Zain CSS*/
		.e-width{
			width: 12.5%;
		}
		.width62{
			width: 62.5%;
		}
		.width-20{
			width: 20%;
		}
		.width-20 .row{
			width: 100%;
			margin: 0;
		}
		.parent-for{
			margin-bottom: 2px;
		}
		.border-r{
			border-right: 1px solid gainsboro;
		}
		body{
			background-color: #EEE;
		}
	/*End*/
</style>
<header>
		<div class="row">
			<div class="col-md-2 flexbox flexbox2">
				<div class="logo-with-text relative">
					<img src="images/logo.png" class="header-logo">
					<span class="absolute header-logo-text">5</span>
				</div>
				<div class="child-block text-right opacity-0-7">
					<span>Impact :</span>
					<span>Cluster 5 :</span>
					<span>Outcome -S :</span>
					<span>Outcome -S :</span>
				</div>
			</div>
			<div class="col-md-8">
				<div class="child-block opacity-0-7">
					<span>Impact of Performance Cluster Goes Here</span>
					<span>Cluster name Goes here</span>
					<span>Lorum ipsum dolor sit amet.</span>
					<span>Lorum ipsum dolor sit amet.</span>
					<span>Lorum ipsum dolor sit amet.</span>
				</div>
			</div>
			<div class="col-md-2 custom-header-icons" style="background: green;">
				<abbr title="Edit Profile"><i class="fa fa-pencil"></i></abbr>
				<abbr title="Print Document"><i class="fa fa-print"></i></abbr>
				<abbr title="Sign Out"><i class="fa fa-sign-out"></i></abbr>
			</div>
		</div>
	</header>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-2"></div>
		<div class="col-md-7"></div>
		<div class="col-md-2"></div>
	</div>
<!-- Body Starts -->
<div class="container-fluid">
		<div class="row bg-full-gry">
			<div class="col-md-1 e-width">Outputs</div>
			<div class="col-md-2 e-width">Activities</div>
			<div class="col-md-8 width62">Task &amp; Process</div>
			<div class="col-md-1 e-width">Resources</div>
		</div>
		<?php $counter=1; foreach ($activities as $activity) { 
			//var_dump($activity); ?>
		<div class="row height-65 parent-for" style="border-bottom:2px solid green;">
					<?php if($counter<2){
					?>
					<div class="col-md-1 e-width border-r" style="background: white;"><br><br><br>Outputs - S</div>
					<?php
					}elseif($counter<3){
						echo '<div class="col-md-1 e-width border-r" style="background: white;"><br><br><br>Outputs - O</div>';
					} else {
						echo '<div class="col-md-1 e-width border-r" style="background: white;"></div>';
					}
					?>
				<div class="col-md-10 padding-0" style="background: white;width:75%;">
				<div class="col-md-2 border-r" style="width:16.666%;">
					<?php echo $activity['0']['title']; ?>
				</div>
				<div class="col-md-8 flexbox" style=" width: 83.33%; padding:0;">			
							<?php foreach ($activity as $details) { ?>				
					<div class="parent width-20 border-r">
						<div class="row">
							<div class="height-65">		
								<div class="height-35 cluster-1 btrr-8 bg-light-gry">
									<a href="task2/<?=$details['task_id']?>?id=<?php echo $_GET['id'];?>" class="small block center"><b><?=$details['taskname']?></b><br><?=$details['taskdescription']?>
									</a>
								</div>
								<div class="">
									<div class="height-12 fs-10 cluster-2 bg-mid-gry flexbox center">
										<div class="child-box"></div>
										<?php $x=1; $y=7; $na=array();

										$keys = array(0,1,2,3,4,5,6,7);
										$na = array_fill_keys($keys,' ');

										foreach ($details[0] as $member) { 
											if ($member['role'] == 'Leader') { 
												$na[0] = $member;
											} elseif($member['role'] == 'Member') {
												$na[$x] = $member; 
												$x++;
											} else {
												$na[$y] = $member;
												$y--;
												} 
											}

											for ($i=0; $i < 8; $i++) { 
												if(is_array($na[$i])) {
												echo '<div class="child-box">'.$na[$i]['initials'].'</div>';
												//echo '<div class="child-box">'.print_r($rating).'</div>';
												}else
													echo '<div class="child-box"> </div>';
											}?>
									</div>
								
									<div class="height-20-with-border center cluster-3 bg-full-gry flexbox">
										<div class="child-box bg-green bblr-8"></div>
										<div class="child-box">
											<div id="custom-bars">
													<span style="background: green;"></span>
													<span style="background: orange;"></span>
											</div>
										</div>
										<div class="child-box">		
											<div id="custom-bars">
													<span style="background: red;"></span>
													<span style="background: yellow;"></span>
											</div>
										</div>
										<div class="child-box"></div>
										<div class="child-box"></div>
										<div class="child-box"></div>
										<div class="child-box"></div>
										<div class="child-box"></div>
										<div class="child-box">
											<div id="custom-bars">
													<span style="background: red;"></span>
													<span style="background: orange;"></span>
													<span style="background: green;"></span>
											</div>
										</div>
										<?php
											$date=date('Y-m-d');
											$date1 = date_create($date);
											$date2=date_create($details['enddate']);
											$diff=date_diff($date1,$date2);	 
										?>
										<div class="child-box date-diff-result">
											<?php
											echo (($details['ongoing']=='0')?  '&infin;' : $diff->format("%R%a"))?></div>
									</div>
								</div>
							</div>	
						</div>
					</div>

							<?php } ?>		

					<!--  -->
				</div>
			</div>
			<div class="col-md-1 e-width" style="background: #ccc;"></div>
				<!-- Activities row Starts -->
			
			<!-- Activities ends here -->
			
		</div>
		<?php
		$counter++;
		}
	?>
</div>
