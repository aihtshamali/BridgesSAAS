<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style type="text/css">
  /***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/
@media print{

.fonts{
  font-family:  "Times New Roman", Times, serif !important;
  font-size: 25px !important;
  font-style: normal !important;
  font-variant: normal !important;
  font-weight: 500 !important;
  line-height: 25px !important;
}

.margin-17{
	margin-left: -17px !important;
}
}
/* Content */
.content {
    padding-top: 30px;
}
@font-face {
   font-family: nag;
   src: url(mako);
}

div{
   font-family: nag;
}
/* Testimonials */
.testimonials blockquote {
    background: #f8f8f8 none repeat scroll 0 0;
    border: medium none;
    color: #666;
    display: block;
    font-size: 14px;
    line-height: 20px;
    padding: 15px;
    position: relative;
}
.testimonials blockquote::before {
    width: 0; 
    height: 0;
  right: 0;
  bottom: 0;
  content: " "; 
  display: block; 
  position: absolute;
    border-bottom: 20px solid #fff;    
  border-right: 0 solid transparent;
  border-left: 15px solid transparent;
  border-left-style: inset; /*FF fixes*/
  border-bottom-style: inset; /*FF fixes*/
}
.red{
  color: red;
}
.fonts{
  font-family:  "Times New Roman", Times, serif;
  font-size: 15px;
  font-style: normal;
  font-variant: normal;
  font-weight: 500;
  line-height: 17.4px;
}
.margin-left{
  margin-left: 250px;
  font-size: 16px; 
}
.margin-17{
	margin-left: -17px;
}
.margin-left-logo{
  margin-left: 200px;
  font-size: 16px; 
}
.testimonials blockquote::after {
    width: 0;
    height: 0;
    right: 0;
    bottom: 0;
    content: " ";
    display: block;
    position: absolute;
    border-style: solid;
    border-width: 20px 20px 0 0;
    border-color: #e63f0c transparent transparent transparent;
}
.testimonials .carousel-info img {
    border: 1px solid #f5f5f5;
    border-radius: 150px !important;
    height: 75px;
    padding: 3px;
    width: 75px;
}
.testimonials .carousel-info {
    overflow: hidden;
}
.testimonials .carousel-info img {
    margin-right: 15px;
}
.testimonials .carousel-info span {
    display: block;
}
.testimonials span.testimonials-name {
    color: #e6400c;
    font-size: 16px;
    font-weight: 300;
    margin: 23px 0 7px;
}
.testimonials span.testimonials-post {
    color: #656565;
    font-size: 12px;
}
</style>
</head>
<body>
<div class="container content">
    
	
	<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="testimonials">
            	<div class="active item">
              <!-- <div style="margin-left: 280" > -->
              <div class="row">
              
	
                  </div>
                  <br/>
                  
                  <div class="row">
                   <div class="col-md-1 col-xs-2"></div>
                  <div class="col-md-3 col-xs-3 red"></div><div class="col-md-8 col-xs-6"><h1>Offer</h1>
                  </div>
                  </div>
                  <br><br><br><br><br><br>
                  <div class="fonts">
				  <?php foreach($employee as $employee){ ?>
                  Mr. <span class="red"><?php echo $employee->fname; ?> <?php echo $employee->lname; ?></span><br/>
                  <span class="red"><?php echo $employee->address; ?></span><br/>
                  <span class="red"><?php echo $employee->email; ?></span><br><span class="red"><?php echo $employee->contact_no; ?></span><br/><br/>
                  Dear <span class="red"><?php echo $employee->fname; ?> <?php echo $employee->lname; ?></span><br/>
                  <br/>
                  The Bridges Consortium is pleased to offer you the position of  <span class="red"><?php echo $employee->rankn; ?> <?php echo $employee->clustern; ?> <?php echo $employee->desn; ?></span>. Your skills and experience seem to fit nicely with the services we require at our offices in <span class="red">152-Abu Bakar Block, New Garden Town, Lahore</span><br/><br/>
As we had discussed, your joining date will be <span class="red"><?php echo $employee->hired_on; ?></span> and work shift will be from <span class="red"><?php echo $employee->time_in; ?> to <?php echo $employee->time_out; ?></span>. We are offering a starting salary of PKR <span class="red"><?php echo $employee->actual_salary; ?></span> to be paid on a monthly basis. You shall initially 
be on a probation for <span class="red"><?php echo $employee->probation; ?> days.</span> Any employee benefits, you might qualify for, will be effective after the end of the probation period. <br/><br/>
We look forward to welcoming you to Bridges Consortium Team, Please let us know if you have any questions or I can provide any additional information.
<br/><br/>
Sincerely,<br/><br/><br/><br/>

				  <?php } ?>
<span class="red">Bilawal Maqsood</span> (HR Manager)<br/>
Director, Human Resources<br/>
The Bridges Consortium

                  
                  </p>
                  
                </div>
            </div>
        </div>
    </div>
</div>
	<br/><br/><br/><br/><br/><br/>
<div style="border: 1px solid black;margin-bottom: -15px;"></div><br/>
<div class="fonts" style="text-align: center;">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;152-Abu Bakar Block, New Garden Town, Lahore  | 042-33333333  <a href="https://www.thebridgesschool.pk"><u>www.thebridgesschool.pk</u></a></div>
</body>
</html>