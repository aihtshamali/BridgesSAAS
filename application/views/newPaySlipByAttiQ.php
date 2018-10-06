<html>
	<head>
		<title>Pay Slip</title>
		<style>
			body
				{
					margin: 0px !important;
					padding: 0px !important;
				}
			.main
				{
					max-width: 100%;
					padding: 0% 10% 0% 10% !important;
				}
			.headerDiv
				{
					height: auto !important;	
					position: relative;
				}
			.big33Div
				{
					max-width: 39.5% !important;
					width: 39.5% !important;
					float: left;
					height: 100%;
				}
			.mid30Div
				{
					max-width: 30% !important;
					width: 30% !important;
					float: left;
					height: 100%;
				}
			.last29Div
				{
					max-width: 29.5% !important;
					width: 29.5% !important;
					float: left;
					height: 100%;
				}
			.tablesDiv
				{
					position: relative;
					clear: both;
				}
			.totalAndSignedDiv
				{
					position: relative;
					clear: both;
				}
			.padding-top-3px
				{
					clear: both;
					padding-top: 3px !important;
				}
			.border
				{
					border:1px solid #000;
				}
			.border-left
				{
					border-left: 2px solid #777;
				}
			.height-subDivs-header
				{
					height: 85px !important;
					max-height: 90px !important;
					background: #dbdbdb;
				}
			.height-subDivs-table
				{
					height: 225px !important;
					max-height: 225px !important;
				}
			.headerFirstSmall
				{
					float: left;
					width: 25%;
					max-width: 25%;
					height: 100%;
				}
			.headerFirstBig
				{
					float: left;
					width: 70.5%;
					max-width: 70.5%;
					height: 100%;
				}
			.halfWidth
				{
					width: 45.5%;
					max-width: 48.5%;
					height: 97.5%;
					max-height: 100%;
					float: left;
				}
			.halfOfhalfWidth
				{
					width: 21.5%;
					max-width: 22.5%;
					height: 97.5%;
					max-height: 100%;
					float: left;					
				}
			.halfHeight
				{
					height: 49.5%;
					max-height: 49.5%;
					width: 100%;
					max-width: 100%;
					clear: both;
				}
			.cutPaper
				{
					width: 98% !important;
					max-width: 98% !important;
					padding: 0%;
				}
			.headerFirstSmall img
				{
					float: right;
					padding-right: 15%;
					padding-top: 11%;
				}
			.headerFirstBig b
				{
					font-size: 15px !important;
					padding-left: 14px;
				}
			p, div, span, td, a, h1, h2, h3, h4, h5, h6, ul, ol, li, dd, dt, th, tr 
				{
    				font-family: Roboto !important;
				}
			@media print
				{
					textarea{height: 90% !important;max-height: 90% !important;}
					.headerFirstBig
						{
							width: 70.5% !important;
						}
					.halfWidth
						{
							width: 48% !important;
						}					
					.headerFirstBig b
						{
							font-size: 11px !important;
							font-weight: 900;
							text-align: inline;
						}
					td
						{
							overflow: hidden;
							line-height: 14px;
							font-size: 12px;
						}
					.height-subDivs-header
						{
							height: 75px !important;
						}
					.printViewSmallLast
						{
							width: 43% !important;
							max-width: 45% !important;
							line-height: 8px !important;
							font-size: 11px;
							margin-left: -17px;
						}
					.printViewBigLast
						{
							width: fit-content !important;
							max-width: fit-content !important;
							line-height: 8px !important;
							font-size: 11px;
						}
					.printViewSmallMid
						{
							width: 35% !important;
							line-height: 8px !important;
							font-size: 11px;
						}
					.printViewBigMid
						{
							width: 55% !important;
							line-height: 8px !important;
							font-size: 11px;
						}
					.headerFirstBig b
						{
						    font-size: 7px !important;
						    padding-left: 10px !important;
						}
					.headerFirstBig
						{
							padding-top: 27px !important;
						}
					.headerFirstSmall b
						{
						    font-size: 7px !important;
						    padding-left: 0px !important;

						}
					.headerFirstSmall
						{
							padding-top: 27px !important;
						}
					.headerFirstSmall img {
						    padding-top: 0% !important;
						}
					.printViewSmallMidPA{margin-left:-60px;float:left;width: 70% !important;max-width:70% !important;margin-top: -4px;}
					.printViewBigMidPA{float:left;width:15% !important;margin-top: -4px;}					
					.dontShow{display: none;}	
					.borderPrint{height: 44% !important;max-height: 45% !important;}	
					.width30eachPrintView{width: 20% !important;
							line-height: 8px !important;
							font-size: 11px;}	
					.printViewSmallMidSS{margin-left:-58px;float:left;width: 70% !important;max-width:70% !important;margin-top: -4px;}
					.width30eachPrintViewSS{width: 20% !important;
							line-height: 8px !important;
							font-size: 11px;}	
					.height-subDivs-table{height: 245px !important; max-height: 245px !important;}
					.height-subDivs-header {
						    background: #dbdbdb !important;
						}
					.printViewSmallMidSSLast{margin-left:-50px;float:left;width: 65% !important;max-width:70% !important;margin-top: -4px;}
					.colorBlack{color: #000 !important;}
					.printViewBackgroundColor
						{
							background: #dbdbdb !important;
						}
						::-webkit-input-placeholder {
						   font-size: 8px !important;
						}
						:-moz-placeholder {
						   font-size: 8px !important;
						}
						::-moz-placeholder {
						   font-size: 8px !important;
						}
						:-ms-input-placeholder {  
						   font-size: 8px !important;
						}
		#scissors 
			{
			    height: 30px; /* image height */
			    width: 90%;
			    margin: auto auto;
			    background-image: url('http://pngimages.net/sites/default/files/scissor-png-image-84436.png');
			    background-size: 25px 30px;
			    background-repeat: no-repeat;
			    background-position: left;
			    position: relative;
			    margin-top: 10px;
			    margin-bottom: 10px;
			}
		#scissors div 
			{
			    position: relative;
			    top: 50%;
			    border-top: 3px dashed black;
			    margin-top: -3px;
			}
					

				}
				.rightText
					{
						text-align: right !important;
						padding-right: 14px;
					}
				.leftText
					{
						text-align: left !important;
						padding-left: 5px!important;
					}
				.padding-left
					{
						padding-left: 5px;
					}
				.padding_right_14px
					{
						padding-right: 14px;
					}
				.padding_left_14px
					{
						padding-left: 14px !important;
					}
				.headerFirstSmall b
					{
						font-size: 14px;
					}
				.titleRight
					{
						float: right;
					}
				.lineHeight17px
					{
						line-height: 8px;
					}
				.halfWidth i
					{
						font-size: 13px;
					}
				::-webkit-input-placeholder {
				   font-style: italic;
				}
				:-moz-placeholder {
				   font-style: italic;  
				}
				::-moz-placeholder {
				   font-style: italic;  
				}
				:-ms-input-placeholder {  
				   font-style: italic; 
				}
			.textColor
				{
					color: #777 !important;
				}
			td
				{
					font-size: 10px !important;
				}
			td b
				{
					font-size: 10px !important;
				}
			td i
				{
					font-size: 10px !important;
				}
		#scissors 
			{
			    height: 30px; /* image height */
			    width: 100%;
			    margin: auto auto;
			    background-image: url('http://pngimages.net/sites/default/files/scissor-png-image-84436.png');
			    background-size: 25px 30px;
			    background-repeat: no-repeat;
			    background-position: left;
			    position: relative;
			    margin-top: 10px;
			    margin-bottom: 10px;
			}
		#scissors div 
			{
			    position: relative;
			    top: 50%;
			    border-top: 3px dashed black;
			    margin-top: -3px;
			}
		@media screen and (max-width: 480px) 
			{
			    
			}
		</style>
	</head>
	<body>
		<div class="main">
			  
        <div class="ShowAttendance "></div>
        <div class="ShowPerformance mgr-btm-5">
        </div>
			<div id="scissors">
			    <div></div>
			</div>
			<div class="headerDiv padding-top-3px height-subDivs-header printViewBackgroundColor">
				<div class="big33Div">
					<div class="headerFirstSmall">
						<img class="img-center" src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new//assets/images/final_logo.jpg" width="40"/>
					</div>
					<div class="headerFirstBig" style="padding-top: 13px;">
						<b class="border-left padding-left">Compensation Slip</b><br/>
						<b class="border-left padding-left">Bridges Development Consortium</b>
					</div>
				</div>
				<div class="mid30Div">
					<table class="" style="width: 100%">
						<th>
							<b>Current Month</b>
						</th>
						<tr class="">
							<td class="halfWidth rightText padding_right_14px printViewSmallMid"><b>Issued On:  </b></td>
							<td class="halfWidth leftText printViewBigMid"> date issued here</td>
						</tr>
						<tr class="">
							<td class="halfWidth rightText padding_right_14px printViewSmallMid"><b>Project:  </b></td>
							<td class="halfWidth leftText printViewBigMid"> Project title here</td>
						</tr>
						<tr class="">
							<td class="halfWidth rightText padding_right_14px printViewSmallMid"><b>Star Date:  </b></td>
							<td class="halfWidth leftText printViewBigMid">Star Date here</td>
						</tr>
						<tr class="">
							<td class="halfWidth rightText padding_right_14px printViewSmallMid"><b>End Date:  </b></td>
							<td class="halfWidth leftText printViewBigMid">End Date here</td>
						</tr>						
					</table>
				</div>
				<div class="last29Div">
					<table class="" style="width: 100%">
						<th>
							<b>Year to Date</b>
						</th>
						<tr class="">
							<td class="halfWidth rightText printViewSmallLast"><b>Issued On:  </b></td>
							<td class="halfWidth leftText printViewBigLast"> date issued here</td>
						</tr>
						<tr class="">
							<td class="halfWidth rightText printViewSmallLast"><b>Project:  </b></td>
							<td class="halfWidth leftText printViewBigLast"> Project title here</td>
						</tr>
						<tr class="">
							<td class="halfWidth rightText printViewSmallLast"><b>Job Start Date:  </b></td>
							<td class="halfWidth leftText printViewBigLast">Star Date here</td>
						</tr>					
					</table>
				</div>
			</div>
			<div class="tablesDiv padding-top-3px height-subDivs-table textColor">
				<div class="big33Div">
					<div class="halfHeight">
						<div class="headerFirstSmall">
							<b class="rightText padding_right_14px titleRight" style="clear: both">Name: </b>
							<b class="rightText padding_right_14px titleRight" style="clear: both">Title: </b>
							<b class="rightText padding_right_14px titleRight" style="clear: both">CNIC: </b>
							<b class="rightText padding_right_14px titleRight" style="clear: both">Employee ID: </b>
						</div>
						<div class="headerFirstBig">
							<b class="leftText padding_left_14px border-left">Name: </b><br/>
							<b class="leftText padding_left_14px border-left">Title: </b><br/>
							<b class="leftText padding_left_14px border-left">CNIC: </b><br/>
							<b class="leftText padding_left_14px border-left">Employee ID: </b><br/>
						</div>	
					</div>
					<div class="halfHeight">
						<div class="headerFirstSmall">
						</div>
						<div class="headerFirstBig">
							<b class="border-left">Comments</b></br>
							<textarea style="padding-left:14px !important;width: 100%;height: 70%;border:none;border-left:2px solid #777;overflow:hidden;" rows="4" cols="50" placeholder="Enter comments..."></textarea>
						</div>	
					</div>				
				</div>
				<div class="mid30Div">
					<div class="halfHeight borderPrint" style="height: 42% !important;max-height: 42% !important;">
					<table class="textColor" style="width: 100%">
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><b>Basic Salary:  </b></td>
							<td class="halfWidth leftText  printViewBigMid "><b>Rs.40000</b></td>
						</tr>
						<tr class="">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><b>Deduction:  </b></td>
							<td class="halfWidth leftText  printViewBigMid "> <b>Rs.0</b></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px printViewSmallMid "><i>Fine:  </i></td>
							<td class="halfWidth leftText  printViewBigMid "><i> - </i></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><i>Performance:  </i></td>
							<td class="halfWidth leftText  printViewBigMid "><i> - </i></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><i>Advances:  </i></td>
							<td class="halfWidth leftText  printViewBigMid "><i> - </i></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><b><i>Security:  </i></b></td>
							<td class="halfWidth leftText  printViewBigMid "><b><i> - </i></b></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid"><b><i>Tax:  </i></b></td>
							<td class="halfWidth leftText  printViewBigMid "><b><i> - </i></b></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMidPA "><b><i>Punctuality & Absentse:  </i></b></td>
							<td class="halfWidth leftText  printViewBigMidPA "><b><i> 0 </i></b></td>
						</tr>
					</table>	
					</div>
					<div class="halfHeight">
						<table class="textColor" style="width: 100%">
							<tr class="">
								<td class="halfWidth rightText padding_right_14px printViewSmallMid"><b>Benefits:  </b></td>
								<td class="halfOfhalfWidth leftText width30eachPrintView">Employer</td>
								<td class="halfOfhalfWidth leftText width30eachPrintView">Co-pay</td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMid"><i>Bonus:  </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintView"><i> + </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintView"><i> + </i></td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><i>Social Security:  </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintViewSS"><i> + </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintViewSS"><i> + </i></td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMid"><i>EOBI:  </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintViewSS"><i> + </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintViewSS"><i> + </i></td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><i>Health Insurance:  </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintViewSS"><i> + </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintViewSS"><i> + </i></td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><i>Transport & logistic:  </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintViewSS"><i> + </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintViewSS"><i> + </i></td>
							</tr>
							<tr class="">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><b>Benefit-Total:  </b></td>
								<td class="halfWidth printViewBigMid">Rs.0</td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMid"><b>Attendance:  </b></td>
								<td class="halfWidth printViewBigMid">-</td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidPA"><i>Monetized Leave:  </i></td>
								<td class="halfWidth printViewBigMid">0</td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidPA"><i>Leaves-Available:  </i></td>
								<td class="halfWidth printViewBigMid">4</td>
							</tr>
						</table>	
					</div>
				</div>
				<div class="last29Div">
					<div class="halfHeight borderPrint" style="height: 42% !important;max-height: 42% !important;">
					<table class="textColor" style="width: 100%">
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMidSS "><b>Basic Salary:  </b></td>
							<td class="halfWidth leftText  printViewBigMid "><b>Rs.40000</b></td>
						</tr>
						<tr class="">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><b>Deduction:  </b></td>
							<td class="halfWidth leftText  printViewBigMid "> <b>Rs.0</b></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px printViewSmallMid "><i>Fine:  </i></td>
							<td class="halfWidth leftText  printViewBigMid "><i> - </i></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><i>Performance:  </i></td>
							<td class="halfWidth leftText  printViewBigMid "><i> - </i></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><i>Advances:  </i></td>
							<td class="halfWidth leftText  printViewBigMid "><i> - </i></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><b><i>Security:  </i></b></td>
							<td class="halfWidth leftText  printViewBigMid "><b><i> - </i></b></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid"><b><i>Tax:  </i></b></td>
							<td class="halfWidth leftText  printViewBigMid "><b><i> - </i></b></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMidPA "><b><i>Punctuality & Absentse:  </i></b></td>
							<td class="halfWidth leftText  printViewBigMidPA "><b><i> 0 </i></b></td>
						</tr>					
					</table>	
					</div>
					<div class="halfHeight">
						<table class="textColor" style="width: 100%">
							<tr class="">
								<td class="halfWidth rightText padding_right_14px printViewSmallMid"><b>Benefits:  </b></td>
								<td class="halfWidth leftText printViewBigMid">-</td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMid"><i>Bonus:  </i></td>
								<td class="halfWidth printViewBigMid"><i> + </i></td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><i>Social Security:  </i></td>
								<td class="halfWidth printViewBigMid"><i> + </i></td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMid"><i>EOBI:  </i></td>
								<td class="halfWidth printViewBigMid"><i> + </i></td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><i>Health Insurance:  </i></td>
								<td class="halfWidth printViewBigMid"><i> + </i></td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><i>Transport & logistic:  </i></td>
								<td class="halfWidth printViewBigMid"><i> + </i></td>
							</tr>
							<tr class="">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><b>Benefit-Total:  </b></td>
								<td class="halfWidth printViewBigMid">Rs.0</td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMid"><b>Attendance:  </b></td>
								<td class="halfWidth printViewBigMid">-</td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><i>Monetized Leave:  </i></td>
								<td class="halfWidth printViewBigMid">0</td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><i>Leaves-Available:  </i></td>
								<td class="halfWidth printViewBigMid">4</td>
							</tr>
						</table>	
					</div>
				</div>
			</div>
			<div class="totalAndSignedDiv padding-top-3px printViewBackgroundColor" style="height: 60px !important;background: #dbdbdb;">
				<div class="big33Div">
				</div>
				<div class="mid30Div">
					<table class="textColor" style="width: 100%;color: #000 !important;">
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px printViewSmallMid">Payed Total:  </td>
							<td class="halfWidth leftText printViewBigMid"><b>Rs.400000</b></td>
						</tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr class="">
							<td class="halfWidth rightText padding_right_14px printViewSmallMidSSLast"><b>Approved By:  </b></td>
							<td class="halfWidth leftText printViewBigMid colorBlack"><b>__________________</b></td>
						</tr>
					</table>
				</div>
				<div class="last29Div">
					<table class="textColor" style="width: 100%;color: #000 !important;">
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px printViewSmallMid">YTD Total:  </td>
							<td class="halfWidth leftText printViewBigMid"><b>Rs.400000</b></td>
						</tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr class="">
							<td class="halfWidth rightText padding_right_14px printViewSmallMidSSLast"><b>Approved By:  </b></td>
							<td class="halfWidth leftText printViewBigMidSS"><b>__________________</b></td>
						</tr>
					</table>
				</div>
			</div>
			<!--Second div-->
			<div id="scissors">
			    <div></div>
			</div>
			<div class="headerDiv padding-top-3px height-subDivs-header printViewBackgroundColor">
				<div class="big33Div">
					<div class="headerFirstSmall">
						<img class="img-center" src="http://bridges/bridgessms/Bridges_School_Software/taskmanager-new//assets/images/final_logo.jpg" width="40"/>
					</div>
					<div class="headerFirstBig" style="padding-top: 13px;">
						<b class="border-left padding-left">Compensation Slip</b><br/>
						<b class="border-left padding-left">Bridges Development Consortium</b>
					</div>
				</div>
				<div class="mid30Div">
					<table class="" style="width: 100%">
						<th>
							<b>Current Month</b>
						</th>
						<tr class="">
							<td class="halfWidth rightText padding_right_14px printViewSmallMid"><b>Issued On:  </b></td>
							<td class="halfWidth leftText printViewBigMid"> date issued here</td>
						</tr>
						<tr class="">
							<td class="halfWidth rightText padding_right_14px printViewSmallMid"><b>Project:  </b></td>
							<td class="halfWidth leftText printViewBigMid"> Project title here</td>
						</tr>
						<tr class="">
							<td class="halfWidth rightText padding_right_14px printViewSmallMid"><b>Star Date:  </b></td>
							<td class="halfWidth leftText printViewBigMid">Star Date here</td>
						</tr>
						<tr class="">
							<td class="halfWidth rightText padding_right_14px printViewSmallMid"><b>End Date:  </b></td>
							<td class="halfWidth leftText printViewBigMid">End Date here</td>
						</tr>						
					</table>
				</div>
				<div class="last29Div">
					<table class="" style="width: 100%">
						<th>
							<b>Year to Date</b>
						</th>
						<tr class="">
							<td class="halfWidth rightText printViewSmallLast"><b>Issued On:  </b></td>
							<td class="halfWidth leftText printViewBigLast"> date issued here</td>
						</tr>
						<tr class="">
							<td class="halfWidth rightText printViewSmallLast"><b>Project:  </b></td>
							<td class="halfWidth leftText printViewBigLast"> Project title here</td>
						</tr>
						<tr class="">
							<td class="halfWidth rightText printViewSmallLast"><b>Job Start Date:  </b></td>
							<td class="halfWidth leftText printViewBigLast">Star Date here</td>
						</tr>					
					</table>
				</div>
			</div>
			<div class="tablesDiv padding-top-3px height-subDivs-table textColor">
				<div class="big33Div">
					<div class="halfHeight">
						<div class="headerFirstSmall">
							<b class="rightText padding_right_14px titleRight" style="clear: both">Name: </b>
							<b class="rightText padding_right_14px titleRight" style="clear: both">Title: </b>
							<b class="rightText padding_right_14px titleRight" style="clear: both">CNIC: </b>
							<b class="rightText padding_right_14px titleRight" style="clear: both">Employee ID: </b>
						</div>
						<div class="headerFirstBig">
							<b class="leftText padding_left_14px border-left">Name: </b><br/>
							<b class="leftText padding_left_14px border-left">Title: </b><br/>
							<b class="leftText padding_left_14px border-left">CNIC: </b><br/>
							<b class="leftText padding_left_14px border-left">Employee ID: </b><br/>
						</div>	
					</div>
					<div class="halfHeight">
						<div class="headerFirstSmall">
						</div>
						<div class="headerFirstBig">
							<b class="border-left">Comments</b></br>
							<textarea style="padding-left:14px !important;width: 100%;height: 70%;border:none;border-left:2px solid #777;overflow:hidden;" rows="4" cols="50" placeholder="Enter comments..."></textarea>
						</div>	
					</div>				
				</div>
				<div class="mid30Div">
					<div class="halfHeight borderPrint" style="height: 42% !important;max-height: 42% !important;">
					<table class="textColor" style="width: 100%">
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><b>Basic Salary:  </b></td>
							<td class="halfWidth leftText  printViewBigMid "><b>Rs.40000</b></td>
						</tr>
						<tr class="">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><b>Deduction:  </b></td>
							<td class="halfWidth leftText  printViewBigMid "> <b>Rs.0</b></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px printViewSmallMid "><i>Fine:  </i></td>
							<td class="halfWidth leftText  printViewBigMid "><i> - </i></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><i>Performance:  </i></td>
							<td class="halfWidth leftText  printViewBigMid "><i> - </i></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><i>Advances:  </i></td>
							<td class="halfWidth leftText  printViewBigMid "><i> - </i></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><b><i>Security:  </i></b></td>
							<td class="halfWidth leftText  printViewBigMid "><b><i> - </i></b></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid"><b><i>Tax:  </i></b></td>
							<td class="halfWidth leftText  printViewBigMid "><b><i> - </i></b></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMidPA "><b><i>Punctuality & Absentse:  </i></b></td>
							<td class="halfWidth leftText  printViewBigMidPA "><b><i> 0 </i></b></td>
						</tr>
					</table>	
					</div>
					<div class="halfHeight">
						<table class="textColor" style="width: 100%">
							<tr class="">
								<td class="halfWidth rightText padding_right_14px printViewSmallMid"><b>Benefits:  </b></td>
								<td class="halfOfhalfWidth leftText width30eachPrintView">Employer</td>
								<td class="halfOfhalfWidth leftText width30eachPrintView">Co-pay</td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMid"><i>Bonus:  </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintView"><i> + </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintView"><i> + </i></td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><i>Social Security:  </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintViewSS"><i> + </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintViewSS"><i> + </i></td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMid"><i>EOBI:  </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintViewSS"><i> + </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintViewSS"><i> + </i></td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><i>Health Insurance:  </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintViewSS"><i> + </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintViewSS"><i> + </i></td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><i>Transport & logistic:  </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintViewSS"><i> + </i></td>
								<td class="halfOfhalfWidth leftText width30eachPrintViewSS"><i> + </i></td>
							</tr>
							<tr class="">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><b>Benefit-Total:  </b></td>
								<td class="halfWidth printViewBigMid">Rs.0</td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMid"><b>Attendance:  </b></td>
								<td class="halfWidth printViewBigMid">-</td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidPA"><i>Monetized Leave:  </i></td>
								<td class="halfWidth printViewBigMid">0</td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidPA"><i>Leaves-Available:  </i></td>
								<td class="halfWidth printViewBigMid">4</td>
							</tr>
						</table>	
					</div>
				</div>
				<div class="last29Div">
					<div class="halfHeight borderPrint" style="height: 42% !important;max-height: 42% !important;">
					<table class="textColor" style="width: 100%">
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMidSS "><b>Basic Salary:  </b></td>
							<td class="halfWidth leftText  printViewBigMid "><b>Rs.40000</b></td>
						</tr>
						<tr class="">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><b>Deduction:  </b></td>
							<td class="halfWidth leftText  printViewBigMid "> <b>Rs.0</b></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px printViewSmallMid "><i>Fine:  </i></td>
							<td class="halfWidth leftText  printViewBigMid "><i> - </i></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><i>Performance:  </i></td>
							<td class="halfWidth leftText  printViewBigMid "><i> - </i></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><i>Advances:  </i></td>
							<td class="halfWidth leftText  printViewBigMid "><i> - </i></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid "><b><i>Security:  </i></b></td>
							<td class="halfWidth leftText  printViewBigMid "><b><i> - </i></b></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMid"><b><i>Tax:  </i></b></td>
							<td class="halfWidth leftText  printViewBigMid "><b><i> - </i></b></td>
						</tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px  printViewSmallMidPA "><b><i>Punctuality & Absentse:  </i></b></td>
							<td class="halfWidth leftText  printViewBigMidPA "><b><i> 0 </i></b></td>
						</tr>					
					</table>	
					</div>
					<div class="halfHeight">
						<table class="textColor" style="width: 100%">
							<tr class="">
								<td class="halfWidth rightText padding_right_14px printViewSmallMid"><b>Benefits:  </b></td>
								<td class="halfWidth leftText printViewBigMid">-</td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMid"><i>Bonus:  </i></td>
								<td class="halfWidth printViewBigMid"><i> + </i></td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><i>Social Security:  </i></td>
								<td class="halfWidth printViewBigMid"><i> + </i></td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMid"><i>EOBI:  </i></td>
								<td class="halfWidth printViewBigMid"><i> + </i></td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><i>Health Insurance:  </i></td>
								<td class="halfWidth printViewBigMid"><i> + </i></td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><i>Transport & logistic:  </i></td>
								<td class="halfWidth printViewBigMid"><i> + </i></td>
							</tr>
							<tr class="">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><b>Benefit-Total:  </b></td>
								<td class="halfWidth printViewBigMid">Rs.0</td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMid"><b>Attendance:  </b></td>
								<td class="halfWidth printViewBigMid">-</td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><i>Monetized Leave:  </i></td>
								<td class="halfWidth printViewBigMid">0</td>
							</tr>
							<tr class="lineHeight17px">
								<td class="halfWidth rightText padding_right_14px printViewSmallMidSS"><i>Leaves-Available:  </i></td>
								<td class="halfWidth printViewBigMid">4</td>
							</tr>
						</table>	
					</div>
				</div>
			</div>
			<div class="totalAndSignedDiv padding-top-3px printViewBackgroundColor" style="height: 60px !important;background: #dbdbdb;">
				<div class="big33Div">
				</div>
				<div class="mid30Div">
					<table class="textColor" style="width: 100%;color: #000 !important;">
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px printViewSmallMid">Payed Total:  </td>
							<td class="halfWidth leftText printViewBigMid"><b>Rs.400000</b></td>
						</tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr class="">
							<td class="halfWidth rightText padding_right_14px printViewSmallMidSSLast"><b>Approved By:  </b></td>
							<td class="halfWidth leftText printViewBigMid colorBlack"><b>__________________</b></td>
						</tr>
					</table>
				</div>
				<div class="last29Div">
					<table class="textColor" style="width: 100%;color: #000 !important;">
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr class="lineHeight17px">
							<td class="halfWidth rightText padding_right_14px printViewSmallMid">YTD Total:  </td>
							<td class="halfWidth leftText printViewBigMid"><b>Rs.400000</b></td>
						</tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr class="">
							<td class="halfWidth rightText padding_right_14px printViewSmallMidSSLast"><b>Approved By:  </b></td>
							<td class="halfWidth leftText printViewBigMidSS"><b>__________________</b></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>