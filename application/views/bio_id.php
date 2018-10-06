<!DOCTYPE html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Bio ID</title>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/emp_profile/card/css/style.css">   
    <script src="<?php echo base_url();?>assets/emp_profile/card/js/printThis.js" ></script>

    <!-- snack bar-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fhkComponents/snackBar.css">
    <script src="<?php echo base_url();?>assets/fhkComponents/snackBar.js" ></script>


  </head>

  <body>

       <?php 

          if (isset($user_project_title->project_id)) {
              foreach ($project as $item ) {
                if ($user_project_title->project_id == $item->id) {
                  $userProject= $item;
                }
              }
          }

          //var_dump($project); die();

          $card = "print_size_general";

          $profile ="profile_general";

          if(isset($userProject)) {
            $fontColor= $userProject->themeColorFront;
            $themeColor= $userProject->themeColorBack;
            $logo = $userProject->logo;
            $header= "border-top: 8px solid #$themeColor;";
            $footer = "background: #$themeColor !important; color: #$fontColor;";

          } else {
            $header= "border-top: 8px solid #b00202;";
            $logo ="assets/emp_profile/card/img/companyLogo.png";
            $footer = "background: #b00202 !important; color: #fff;";
          }

          if (isset($user_project_title->project_id)) {




            /*
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
              */

        }


          /*
            if(isset($faculty)){

              if($faculty=='Admin_Faculty'){

                $card = "print_size_FacultyAdmin";

                $profile ="profile_FacultyAdmin";

                $logo ="bluelogopng.png";

                $footer = "emergency-contact-FacultyAdmin";

                }

              }
          */
        ?>

            



    <section class="<?php echo $card;?> print" style="<?= $header ?>" id="printarea">
      <!--
        <?php if(isset($faculty)){ ?>
      <h3 class="name-text" style="font-size: 19px;font-weight: 900 !important;padding: 0px !important;margin: 0px !important;text-align:  center;color: #005099;line-height: 17px;">
          Admin Faculty
      </h3>
      <?php } ?> -->

      <div class="container-fluid">

        <div class="row"> 

             <div class="w-100 text-center">

                <img class="mt-2 logo" src="<?php echo base_url() . $logo;?>" alt="logo">

            </div>

            <div class="col-12 text-center">

              <h1 class="project-title">

                <?php if (isset($user_project_title->project_id)) {

                     foreach ($project as $item ) {

                      if ($user_project_title->project_id == $item->id) {

                        echo $item->project_title;

                        }

                    } 

                  }?>

              </h1>

            

               <h1 class="name-text">

                   <?php if(isset($emp->fname)) echo $emp->fname; ?>

                    <?php if(isset($emp->lname)) echo $emp->lname; ?>

                  </h1>

            </div>

             <div class="col-5 text-center m-0 p-0">

                <img class="mt-2 logo <?php echo $profile;?>" src="<?php if(isset($user_details->upload_picture)) {echo  base_url().$user_details->upload_picture;} else{ echo base_url()."assets/emp_profile/card/img/images.jpg" ;}?>" onerror="this.src= '<?= base_url()."/assets/emp_profile/card/img/placeHolder.png" ?>'">

            </div>



            <div class="col-7 p-0 m-0 mt-2" style="margin-left: -8px !important;">

                <!--   <h1 class="name-text"> Name: 

                   <php if(isset($emp->fname)) echo $emp->fname; ?>

                    <php if(isset($emp->lname)) echo $emp->lname; ?>

                  </h1> -->



              <h1 class="id-text"><span style="color: transparent;">.</span>Level :

                <?php if (isset($user_project_title->level_id)) {

                     foreach ($levels as $item ) {

                      if ($user_project_title->level_id == $item->id) {

                        echo $item->level_name;

                        }

                    } 

                  }?>

              </h1>

              <h1 class="id-text"><span style="color: transparent;">.</span>Title : 

                  <?php if (isset($user_project_title->job_title)) {

                    echo strip_tags($user_project_title->job_title);

                  }?>

              </h1>

               <h1 class="id-text"><span style="color: transparent;">.</span>Shift :

                  <?php 

                      if(isset($user_details->time_in)){

                         echo date("g:i A", strtotime($user_details->time_in)) ;

                      }

                      if(isset($user_details->time_out)){

                         echo " - ".date("g:i A", strtotime($user_details->time_out) ) ;

                      }

                  ?>

              </h1>



              <h1 class="id-text"><span style="color: transparent;">.</span>Break : 

               <!--  <php foreach($shifts as $item){

                    if (!isset($user_details->shift_id)) {

                      Break;

                    }

                    if($item->id == $user_details->shift_id){

                      echo $item->shift_break_slot;

                    }

                  } ?> -->

                  <?php 

                      if(isset($user_details->break_in)){

                         echo date("g:i A", strtotime($user_details->break_in)) ;

                      }

                      if(isset($user_details->break_out)){

                         echo " - ".date("g:i A", strtotime($user_details->break_out) ) ;

                      }

                  ?>

              </h1>

               <h1 class="id-text"><span style="color: transparent;">.</span>Employee Since : 

                <?php if(isset($user_details->hired_on)) echo date("d-m-Y", strtotime($user_details->hired_on)); ?>

              </h1>



               <h1 class="id-text"><span style="color: transparent;">.</span>ID # <?php echo $id;?></h1>

                



              <!--  <h1 class="id-text">

                    <span style="color: transparent;">.</span>Card # 

                    <php if(isset($card_data->NumberofCards)) echo $card_data->NumberofCards+1; else echo 1;?>

                </h1> -->

              



              

            </div>

              



            <div class="col-12 text-center mt-1">

               <h1 class="id-text">

                    <span style="color: transparent;"></span>Issue 1 :

                     <?php if(isset($card_data->FirstIssueDate)) echo date("d-m-Y", strtotime($card_data->FirstIssueDate));  else echo date('d-m-Y');?>

               </h1>

               <h1 class="id-text">

                    <span style="color: transparent;">.</span>Issue <?php if(isset($card_data->NumberofCards)) echo $card_data->NumberofCards+1; else echo 1;?> :

                     <?php echo date('d-m-Y');?>

               </h1>



            </div>

             <div class="w-100 text-center" style="padding:0%;">

                 <img class="mt-1 sign" src="<?php echo base_url();?>assets/emp_profile/card/img/AhmedSignature.png" alt="sign" style="width:  33%;height: 25px;padding-bottom:  4px;">

            </div>

             <div class="text-center w-100" style="padding: 7px;padding-bottom: 17px; <?php echo $footer;?>">

                <h1 class="id-text"><span style="color: transparent;">.</span>Emergency Contact Number <br/> 

                <?php if(isset($user_details->emergency_contact_1)) echo $user_details->emergency_contact_1;   ?>

              </h1>

             </div>

        </div>

      </div>

    </section>



<script type="text/javascript">
  //this script controls print button behaviour. If the box is checked you will get print only else a new card will be issue and user will be fined for that
    //this.form.submit()
    /*
  $("form").submit(function(e){
      e.preventDefault();
      if($('#printControl').checked)
        alert('Just print!')
      else
        alert('Something else');
  });*/

  function issueCard(form){
    openSnackBar('snackbar1', 2000);

    setTimeout(function(){form.submit();}, 3000);
    return false;
  }


</script>

<div class="mt-5 text-center mb-5" id="hidePrint">

  <!-- <input id="printControl" type="checkbox" checked="checked"> Only Print <br> -->
  <div class="snackbar" id="snackbar1"> Issuing new card. </div>
  <form action="<?php echo base_url();?>Employee_reg/save_bio_id" method="post" accept-charset="utf-8">

    <input type="hidden" name="User_id" value="<?php echo $id;?>" >

    <input type="hidden" name="NumberofCards" value="<?php if(isset($card_data->NumberofCards)) echo $card_data->NumberofCards+1; else echo 1;?>" >

    <input type="hidden" name="FirstIssueDate" value="<?php if(isset($card_data->FirstIssueDate)) echo $card_data->FirstIssueDate; else echo date('Y-m-d');?>" >

    <input type="hidden" name="LastIssue" value=" <?php echo date('Y-m-d');?>" >

    <!-- onclick="this.form.submit()" -->
    <button onclick="issueCard(this.form)" type="button" id="btn" class="btn btn-success" > Issue </button>  
    <button onclick="window.print();" type="button" id="btn" class="btn btn-success" > Print </button>
  </form>
</div>

<?php //function title($value){

      // switch ($value) {

      //   case '1':

      //     return $value.'st';

      //     break;

      //    case '1':

      //     return $value.'st';

      //     break;

      //   case '1':

      //     return $value.'st';

      //     break;

      //   default:

      //     # code...

      //     break;

      // }

//}?>



<script type="text/javascript" charset="utf-8">

/*
  $("#btn").click(function () {    

    

  });
*/
 

</script>



    <!-- jQuery first, then Tether, then Bootstrap JS. -->

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  </body>

</html>