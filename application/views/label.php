<!DOCTYPE html>
<html>
<head>
	<title>Label</title>
	<style type="text/css">
		body
			{
				margin: 0px !important;
				padding: 0px !important;
			}
		h1, h2, h3, h4, h5, h6, p
			{
				padding: 0px !important;
				margin: 0px !important;
				font-family: Roboto !important;
			}
		.LabelBody
			{
			    width: 100% !important;
			    height: 120px;
			}
		.smallDiv
			{
				width: 15% !important;
				height: 100%;
				float: left;
			}
		.smallDiv img
			{
				width: 50% !important;
			}
		.smallDiv h3
			{
			}
		.brown
			{
				background-color: #8B4513 !important;
			}
		.rotate-90
			{
				transform: rotate(-90deg);
			}
		.paddingLeft
			{
				padding-left: 50px !important;
			}
		.DarkGreen
			{
				background-color: #446f38 !important;
			}
		.whiteText
			{
				color: #fff !important;
			}
		.bigDiv
			{
				width: 53.5% !important;
				float: left;
				height: 100%;
			}
		.bigDiv p
			{
				padding-top: 35px !important;
			}
		.BigHalfHeight
			{
				height: 60%;
				clear: both;
			}
		.SmallHeightOfHalfHeight
			{
				border-bottom: 1px solid #ccc;
				min-height:23.5%; 
			}
		.SmallWidthOfHalfHeight
			{
				width: 40%;
				min-height: 16px;
				float: left;
			}
		.BigWidthOfHalfHeight
			{
				border-left: 1px solid #ccc;
				width: 58%;
				min-height: 16px;
				float: left;
			}
		.SmallHalfHeight
			{
				height: 37%;
				clear: both;
				background-color: #ffea02 !important;
				color: #000 !important;
			}
		.SmallHalfHeight center p
			{
				color: #000 !important;
			}
		.marginTop
			{
				margin-top: -57px !important;
			}
		.BigHalfHeight p, .BigHalfHeight input, .SmallHeightOfHalfHeight p, .SmallHeightOfHalfHeight input, .SmallWidthOfHalfHeight p, .SmallWidthOfHalfHeight input, .BigWidthOfHalfHeight p, .BigWidthOfHalfHeight input, .SmallHalfHeight p, .SmallHalfHeight input
			{
				font-size: 12px;
				line-height: 16px;
				color: #ccc;
			}
		.LabelInput
			{
				background-color: transparent;
				border:1px solid #fff;
				width: 20px;
				margin-top: 40px;
				text-align: center;
				font-size: 26px;
				margin-left: 20px;
				font-weight: 400;
			}
		.LabelTextArea
			{
				background-color: transparent;
				border:1px solid #fff;
				text-align: center;
				font-size: 16px;
				font-weight: 200;
				margin-bottom:-45px;
				overflow: hidden;
				height: 96px;
				margin-left: 11px;
			}
		.inputTransparentBigDiv
			{
				background-color: transparent;
				border:1px solid #fff;
				margin-top: 20px;
				text-align: center;
				overflow: hidden;
				height: 85px;
			}
		.SmallWidthOfHalfHeightInput
			{
				width: 95%;height: 7px;border-right:1px solid #ccc;border:none;
			}
        @page 
        	{
        		size: auto;
        		margin: 0in 0in 0in 0in;    
          	}
          ::placeholder 
          		{ /* Chrome, Firefox, Opera, Safari 10.1+ */
				    color: #ccc;
				    opacity: 0.8; /* Firefox */
				}
		@media print
			{
				.LabelBody
					{
						height:96px !important;
					}
				.BigHalfHeight p, .BigHalfHeight input, .SmallHeightOfHalfHeight p, .SmallHeightOfHalfHeight input, .SmallWidthOfHalfHeight p, .SmallWidthOfHalfHeight input, .BigWidthOfHalfHeight p, .BigWidthOfHalfHeight input, .SmallHalfHeight p, .SmallHalfHeight input
					{
						font-size: 11px;
						line-height: 14px;
						color: #b5b3b3 !important;
					}
				.SmallHeightOfHalfHeight
					{
						min-height:18%;
						margin-top: -3px !important; 
						border-bottom: none !important;
					}
				.SmallWidthOfHalfHeight
					{
						width: 40%;
						min-height: 12px;
						float: left;
					}
				.BigWidthOfHalfHeight
					{
						border-left:1px solid #ccc !important;
						width: 58%;
						min-height: 12px;
						float: left;
					}
				.BigWidthOfHalfHeight input{border-left:1px solid #ccc !important;}
					.smallDiv img 
						{
						    width: 50% !important;
						}
					.bigDiv p
						{
							padding-top: 25px !important;
						}
					.marginTop
						{
							margin-top: -50px !important;
						}
					.LabelInput
						{
							background-color: transparent;
							border:none !important;
							width: 20px;
							margin-top: 0px !important;
							text-align: center;
							font-size: 22px;
							margin-left: 20px;
							font-weight: 400;
						}
					.LabelTextArea
						{
							background-color: transparent;
							border:none !important;
							text-align: center;
							font-size: 16px;
							font-weight: 200;
							margin-bottom:-45px;
							overflow: hidden;
							height: 96px;
							margin-left: 0px;
							width:100px;
							resize: none !important;
						}
					.inputTransparentBigDiv
						{
							background-color: transparent;
							border:none !important;
							margin-top: 20px;
							text-align: center;
							overflow: hidden;
							resize: none !important;
							height: 45px;							
						}
					.SmallWidthOfHalfHeightInput
						{
							width: 95%;height: 7px;border-bottom: 1px solid #ccc !important;
						}
					.SmallHalfHeight
						{
							height: 28%;
							clear: both;
							background-color: #ffea02 !important;
							color: #000 !important;
						}
					.hideOnPrint
						{
							display: none !important;
						}
			}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(function () {
	    $(":file").change(function () {
	        if (this.files && this.files[0]) {
	            var reader = new FileReader();
	            reader.onload = imageIsLoaded;
	            reader.readAsDataURL(this.files[0]);
	        }
	    });
		});

		function imageIsLoaded(e) {
		    $('#myImg').attr('src', e.target.result);
		};
	</script>
</head>
<body>
	<div class="LabelBody">
		<div class="smallDiv">
			<center>
				<img id="myImg" class="rotate-90" src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new//assets/images/red-logo.png" />			
			</center>
		</div>
		<div class="smallDiv brown">
			<!-- <center> -->
				<!-- <p class="whiteText rotate-90 marginTop">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2<br/>testing<br/>testing<br/>testing
				</p> -->				
			<!-- </center> -->
			<input type="text" name="" class="rotate-90 whiteText LabelInput" placeholder="#"  />
			<textarea class="rotate-90 whiteText LabelTextArea" cols="8" placeholder="title here"  style="" ></textarea>
		</div>
		<div class="bigDiv DarkGreen">
			<center>
				<!-- 
					<p class="whiteText ">
						Description<br/>month-month	
					</p>
				 -->
				<textarea class="inputTransparentBigDiv whiteText" placeholder="Description here" style="font-size: 20px;font-weight: 600; " ></textarea>
			</center>
		</div>
		<div class="smallDiv">
			<div class="BigHalfHeight">
				<div class="SmallHeightOfHalfHeight">
					<div class="SmallWidthOfHalfHeight">
						<input type="text" name="" class="SmallWidthOfHalfHeightInput" placeholder="0.0" style="" />
					</div>
					<div class="BigWidthOfHalfHeight">
						<input type="text" name="" class="SmallWidthOfHalfHeightInput" placeholder="Desc..." style="" />						
					</div>					
				</div>
				<div class="SmallHeightOfHalfHeight">
					<div class="SmallWidthOfHalfHeight">
						<input type="text" name="" class="SmallWidthOfHalfHeightInput" placeholder="0.0.0" style="" />
					</div>
					<div class="BigWidthOfHalfHeight">
						<input type="text" name="" class="SmallWidthOfHalfHeightInput" placeholder="Desc..." style="" />
					</div>					
				</div>
				<div class="SmallHeightOfHalfHeight">
					<div class="SmallWidthOfHalfHeight">
						<input type="text" name="" class="SmallWidthOfHalfHeightInput" placeholder="0.0.0.0" style="" />
					</div>
					<div class="BigWidthOfHalfHeight">
						<input type="text" name="" class="SmallWidthOfHalfHeightInput" placeholder="Desc..." style="" />
					</div>					
				</div>
				<div class="SmallHeightOfHalfHeight">
					<div class="SmallWidthOfHalfHeight">
						<input type="text" name="" class="SmallWidthOfHalfHeightInput" placeholder="0.0.0.0.0" style="" />
					</div>
					<div class="BigWidthOfHalfHeight">
						<input type="text" name="" class="SmallWidthOfHalfHeightInput" placeholder="Desc..." style="" />
					</div>					
				</div>				
			</div>
			<div class="SmallHalfHeight">
				<center>
					<textarea placeholder="Text here" style="font-size: 10px;font-weight: 200;color: #000;background-color: transparent;border:none;resize: none;text-align: center;" ></textarea>
				</center>				
			</div>
		</div>	
	</div>
	<div style="clear: both;" class="hideOnPrint">
		<input type='file' />
	</div>
</body>
</html>