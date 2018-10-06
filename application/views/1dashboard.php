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
</style>
<div class="container-fluid">
	<div class="container">
		<div class="parent">
			<div class="row">
				<div class="height-65 col-md-3">
					<div class="height-35 cluster-1 bg-light-gry">

						<p class="small center"><b>Assign Students to Clubs</b><br>
						Students needs to be assigned to clubs</p>
						<!-- <div class="flexbox flexbox5">
							<div class="strong">Name: </div><div class="name">Muhammad Anees Abbas</div>
						</div>
						<div class="flexbox flexbox5">
							<div class="strong">Description: </div><div class="name">This is description.Lorum ipsum dolor sit amet.
						Lorum ipsum dolor sit amet.</div>
						</div> -->
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
						<div class="child-box bg-green"></div>
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
									<span  style="background: red;"></span>
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
	</div><!-- 
		<div class="row">
			<div class="col-md-1 bg-light-gry">
				<div class="row">1</div>
				<div class="row">2</div>
			</div>
			<div class="col-md-2 bg-mid-gry">
				<div class="row">1</div>
				<div class="row">2</div>
				<div class="row">3</div>
				<div class="row">4</div>
				<div class="row">5</div>
			</div>
			<div class="col-md-8 bg-full-gry">3</div>
			<div class="col-md-1 bg-light-gry">4</div>
		</div> -->
		<div class="row">
			<div class="row bg-mid-gry">
				<div class="col-md-1">1
				</div>
				<div class="col-md-2">
					<div class="row">1</div>
					<div class="row">2</div>
					<div class="row">3</div>
					<div class="row">4</div>
					<div class="row">5</div>
				</div>
				<div class="col-md-8">
					2
				</div>
				<div class="col-md-1">
					3
				</div>
			</div>
			<div class="row bg-full-gry">2</div>
		</div>
</div>