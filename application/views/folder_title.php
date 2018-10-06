<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Title</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" media="all" href="<?php echo base_url();?>assets/emp_profile/card/css/styletitle.css">   
    <script src="<?php echo base_url();?>assets/emp_profile/card/js/printThis.js" ></script>
  </head>
  <body>
       <?php 
        $level=0; 
                      
             if (isset($user_project_title->level_id)) {
                         foreach ($levels as $item ) {
                          if ($user_project_title->level_id == $item->id) {
                            $level=$item->level_name;
                            }
                } 
              }

            $card = "print_size_school";
            $profile ="profile_school";
            $logo ="redlogopng.png";
            $footer = "emergency-contact-school";
            if (isset($user_project_title->project_id)) {
            if ($user_project_title->project_id == 1){
                $card = "print_size_consortium";
                $profile ="profile_consortium";
                $logo ="logo.png";
                $footer = "emergency-contact-consortium";
                
              }
            if ($user_project_title->project_id == 2){
                $card = "print_size_school";
                $profile ="profile_school";
                $logo ="redlogopng.png";
                $footer = "emergency-contact-school";
               
              }
            if ($user_project_title->project_id == 3){
                $card = "print_size_analytic";
                $profile ="profile_analytic";
                $logo ="bridges-analytics.png";
                $footer = "emergency-contact-analytic";

              }
              $color="black";
              if($level<4){
                $color="#f01010 !important";
              }      
        }?>

    <section class="<?php echo $card;?> print" id="printarea">
      <div class="container-fluid">

        <div class="row" style="color:<?php echo $color; ?>"> 

            <div class="col-lg- ml-2 logo-section float-left">
                <img class="logo" src="<?php echo base_url();?>assets/emp_profile/card/img/<?php echo $logo;?>" alt="logo">
            </div>
             <div class="col-lg- logo-section float-left">
                <img class="logo <?php echo $profile;?>" src="<?php if(isset($user_details->upload_picture)) {echo $user_details->upload_picture;} else{ echo base_url()."assets/emp_profile/card/img/images.jpg" ;}?>" alt="profile">
            </div>
            <!--  <div class="col-lg-2 text-center title-bg float-left">
              <h1 class="project-title">
                <php if (isset($user_project_title->project_id)) {
                     foreach ($project as $item ) {
                      if ($user_project_title->project_id == $item->id) {
                        echo $item->project_title;
                        }
                    } 
                  }?>
              </h1>
           </div> -->

             <div class="float-left name-section">
                 <h1 class="name-text m-0">
                   <?php if(isset($emp->fname)) echo $emp->fname; ?>
                    <?php if(isset($emp->lname)) echo $emp->lname; ?>
                  </h1>
                   <h1 class="id-text">Level :
                    <?php $level=0; if (isset($user_project_title->level_id)) {
                         foreach ($levels as $item ) {
                          if ($user_project_title->level_id == $item->id) {
                            echo $item->level_name;$level=$item->level_name;
                            }
                        } 
                      }?>
                  </h1>
                    <h1 class="id-text">Title : 
                  <?php if (isset($user_project_title->job_title)) {
                    echo strip_tags($user_project_title->job_title);
                  }?>
              </h1>
               <h1 class="id-text">Shift :
                  <?php 
                      if(isset($user_details->time_in)){
                         echo date("g:i A", strtotime($user_details->time_in)) ;
                      }
                      if(isset($user_details->time_out)){
                         echo " - ".date("g:i A", strtotime($user_details->time_out) ) ;
                      }
                  ?>
              </h1>
               <h1 class="id-text">Break : 
               
                  <?php 
                      if(isset($user_details->break_in)){
                         echo date("g:i A", strtotime($user_details->break_in)) ;
                      }
                      if(isset($user_details->break_out)){
                         echo " - ".date("g:i A", strtotime($user_details->break_out) ) ;
                      }
                  ?>
              </h1>
             
            </div>
           
            <div class="col-lg-2 mt-1 float-left name-section">
              
               <h1 class="id-text">ID # <?php echo $id;?></h1>
                    <h1 class="id-text">Emergency Contact Number : 
                        <?php if(isset($user_details->emergency_contact_1)) echo $user_details->emergency_contact_1;   ?>
                    </h1>
                     <h1 class="id-text">Created on : 
                        <?php  echo date('Y-m-d');   ?>
                    </h1>
            </div>
            <div class="col-lg-2 mt-1 float-left name-section">
                <h1 class="id-text">Address : 
                        <?php  echo $user_details->address;   ?>
                </h1>

                <h1 class="id-text since-text">Employee Since : 
                   <?php if(isset($user_details->hired_on)) echo $user_details->hired_on; ?>
                </h1>
                  
            </div>
           
           <div class="clearfix"></div>
           <div class="col-12 p-0">
              <div class="float-left" style="border-top: 1px solid #000; color: transparent; margin-top: 6px;">
                 **
              </div>
               <div class="float-right" style="border-top: 1px solid #000; color: transparent; margin-top: 6px;">
                 **
              </div>
           </div>
          
        </div>
      </div>
    </section>
  <div class="col">
     <button type="button" id="hidePrint" class=" btn btn-success mt-5 text-center" > Print </button>  
  </div>

   


<script type="text/javascript" charset="utf-8">
  $("#hidePrint").click(function () {    
    window.print();
  });
 
</script>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>