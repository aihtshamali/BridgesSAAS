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
body{
	font-size: 12px;
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
</style>
<div>
	<div id="TopHeaderAllContentContainer">
            
            <div class="HeaderCOntainer">
            	<div class="LogoContainer">5</div>
                <div class="impactClusterOutputContainer" id="impactClusterOutputContainer">
<div class="impactontainer">
    <div class="impactheading">Impact: </div>
    <div class="impactDetail">Impact of Performance Cluster Goes Here</div>
</div>
<div class="clr"></div>
<div class="impactontainer">
    <div class="impactheading">Cluster 5: </div>
    <div class="impactDetail">Cluster name Goes Here e.g(Art &amp; Drama Club Cluster)sdsd</div>
</div>
<div class="clr"></div>
<div class="impactontainer">
    <div class="impactheading">Outcome - S : </div>
    <div class="impactDetail">Construction governance failures can lead to the construction of the wrong infrastructure, poor quality construction, and excessively high prices for work. There is some evidence </div>
</div>
<div class="clr"></div>
<div class="impactontainer">
    <div class="impactheading">Outcome - P : </div>
    <div class="impactDetail">Construction governance failures can lead to the construction of the wrong infrastructure, poor quality construction, and excessively high prices for work. There is some evidence </div>
</div>
<div class="clr"></div></div>
               	<!--	EDITABLE DIV CONTAINER START FROM HERE	-->
                <div class="impactClusterOutputContainerEditable">
                    <div class="impactontainer">
                    	<div class="impactheading"><input type="text" name="impactHeading" id="impactHeading" value="Impact: " class="headingOfLeft"></div>
                        <div class="impactDetail"><input type="text" name="impactDetail" id="impactDetail" value="Impact of Performance Cluster Goes Here" class="detailsOfRight"></div>
                    </div>
                    <div class="clr"></div>
                    <div class="impactontainer">
                    	<div class="impactheading"><input type="text" name="Clusterheading" id="Clusterheading" value="Cluster 5: " class="headingOfLeft"></div>
                        <div class="impactDetail"><input type="text" name="ClusterDetail" id="ClusterDetail" value="Cluster name Goes Here e.g(Art &amp; Drama Club Cluster)sdsd" class="detailsOfRight"></div>
                    </div>
                   	<div class="clr"></div>
                    <div class="impactontainer">
                    	<div class="impactheading"><input type="text" name="OutPutSHeading" id="OutPutSHeading" value="Outcome - S : " class="headingOfLeft"></div>
                        <div class="impactDetail"><input type="text" name="OutPutSDetail" id="OutPutSDetail" value="Construction governance failures can lead to the construction of the wrong infrastructure, poor quality construction, and excessively high prices for work. There is some evidence " class="detailsOfRight"></div>
                    </div>
                    <div class="clr"></div>
                    <div class="impactontainer">
                    	<div class="impactheading"><input type="text" name="OutPutOheading" id="OutPutOheading" value="Outcome - P : " class="headingOfLeft"></div>
                        <div class="impactDetail"><input type="text" name="OutPutODetail" id="OutPutODetail" value="Construction governance failures can lead to the construction of the wrong infrastructure, poor quality construction, and excessively high prices for work. There is some evidence " class="detailsOfRight"></div>
                    </div>
                    <div class="clr"></div>
                </div>
                <!--	EDITABLE DIV CONTAINER END FROM HERE	-->
               	<div class="HeaderButtonsCOntainer">
                	                    <style> .LogoutContainer{display:block;}</style>
                </div> 
            </div>          
            <div style="clear:both;"></div>
            
		</div>
		<!-- Header Ends -->
</div>
<!-- Body Starts -->
<div class="container-fluid">
		<div class="row bg-full-gry">
			<div class="col-md-1">Outputs</div>
			<div class="col-md-2 width-12p">Activities</div>
			<div class="col-md-8 width-88p">Task &amp; Process</div>
			<div class="col-md-1">Resources</div>
		</div>
		<div class="row height-65">
			
			
				<?php foreach ($tasks as $task) { ?>
				<div class="col-md-1" style="background: green;">Outputs</div>
						<div class="col-md-10">
				<div class="col-md-2 width-12p">
					Activities
				</div>
				<div class="col-md-8 width-p72-1 flexbox flexbox2" style=" width: 88%;">			
								<div class="parent">
									<div class="row">
										<div class="height-65">
											<div class="height-35 cluster-1 btrr-8 bg-light-gry">
												<p class="small center"><b><?=$task->taskname?></b><br>
												Students needs to be assigned to clubs</p>
											</div>
											<div class="height-12 fs-10 cluster-2 bg-mid-gry flexbox center">
												<div class="child-box"></div>
												<div class="child-box">HY</div>
												<div class="child-box">MS</div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box">MB</div>
												<div class="child-box"></div>					
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
												<div class="child-box">03</div>
											</div>
										</div>
									</div>
									<div class="row relative"> 
									</div>
									<div class="row">
									</div>
								</div>
								<div class="parent">
									<div class="row">
										<div class="height-65">
											<div class="height-35 cluster-1 btrr-8 bg-light-gry">
												<p class="small center"><b>Assign Students to Clubs</b><br>
												Students needs to be assigned to clubs</p>
											</div>
											<div class="height-12 fs-10 cluster-2 bg-mid-gry flexbox center">
												<div class="child-box"></div>
												<div class="child-box">HY</div>
												<div class="child-box">MS</div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box">MB</div>
												<div class="child-box"></div>					
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
												<div class="child-box">03</div>
											</div>
										</div>
									</div>
									<div class="row relative"> 
									</div>
									<div class="row">
									</div>
								</div>
								<div class="parent">
									<div class="row">
										<div class="height-65">
											<div class="height-35 cluster-1 btrr-8 bg-light-gry">
												<p class="small center"><b>Assign Students to Clubs</b><br>
												Students needs to be assigned to clubs</p>
											</div>
											<div class="height-12 fs-10 cluster-2 bg-mid-gry flexbox center">
												<div class="child-box"></div>
												<div class="child-box">HY</div>
												<div class="child-box">MS</div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box">MB</div>
												<div class="child-box"></div>					
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
												<div class="child-box">03</div>
											</div>
										</div>
									</div>
									<div class="row relative"> 
									</div>
									<div class="row">
									</div>
								</div>
								<div class="parent">
									<div class="row">
										<div class="height-65">
											<div class="height-35 cluster-1 btrr-8 bg-light-gry">
												<p class="small center"><b>Assign Students to Clubs</b><br>
												Students needs to be assigned to clubs</p>
											</div>
											<div class="height-12 fs-10 cluster-2 bg-mid-gry flexbox center">
												<div class="child-box"></div>
												<div class="child-box">HY</div>
												<div class="child-box">MS</div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box">MB</div>
												<div class="child-box"></div>					
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
												<div class="child-box">03</div>
											</div>
										</div>
									</div>
									<div class="row relative"> 
									</div>
									<div class="row">
									</div>
								</div>
								<div class="parent">
									<div class="row">
										<div class="height-65">
											<div class="height-35 cluster-1 btrr-8 bg-light-gry">
												<p class="small center"><b>Assign Students to Clubs</b><br>
												Students needs to be assigned to clubs</p>
											</div>
											<div class="height-12 fs-10 cluster-2 bg-mid-gry flexbox center">
												<div class="child-box"></div>
												<div class="child-box">HY</div>
												<div class="child-box">MS</div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box"></div>
												<div class="child-box">MB</div>
												<div class="child-box"></div>					
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
												<div class="child-box">03</div>
											</div>
										</div>
									</div>
									<div class="row relative"> 
									</div>
									<div class="row">
									</div>
								</div>
				</div>
			</div>
			<div class="col-md-1" style="background: #ccc;">Resources</div>
				<?php } ?>
				<!-- Activities row Starts -->
			
			<!-- Activities ends here -->
			
		</div>
</div>