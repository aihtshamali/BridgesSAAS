<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Card</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets1/css/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets1/css/normalize.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <style type="text/css">
    .col49{
        width: 49%;
    }
    .shadow-header{
        box-shadow: 0px -15px 25px 5px #888888;
    }
    .shadow{
        box-shadow: 0px 0px 25px 0px #888888; margin-top: 1%;
        padding-top: 4%;
    }
    .docs{
        margin-bottom: 15px;
    }
    .shadow-pinfo{
        box-shadow: 0px 0px 25px 0px #888888;
    }
    .mrg-tp-25{
        margin-top: 25px;
    }
    img {
    max-width: 100%;
    max-height: 100%;
}
.portrait {
    height: 80px;
    width: 30px;
}

.landscape {
    height: 30px;
    width: 80px;
}

.square {
    height: 120px;
    width: 100px;
}

    </style>
<!--   'relationship_to_person' => $this->input->post('relation'),                    
                    'emergency_contact_1' => $this->input->post('contact'),
                    'emergency_person_address_1' => $this->input->post('address'),
                    'e_email'=>$this->input->post('email'),
                    'e_city'-->
    
</head>
<!-- <?php var_dump($emp); ?> -->
<body>
    <div align=center style="width:300px; margin-left: 15px; margin-right: 7px; margin-top: 5px; margin-bottom: 5px;">
        <div style="padding:5px 10px ;margin:0  0 0 0;background-color:maroon"></div>
        <div style="padding-top: 10px;"> <?php if($emp->hired_for_project==2){ ?><img src="<?php echo base_url(); ?>Logoz/red-logo.png"  style=" width: 50px;"><?php } else { ?><img src="<?php echo base_url(); ?>Logoz/logo.png"  style=" width: 50px;"><?php } ?></div>
        <div> <?php if($emp->hired_for_project==2){ ?><p style="color:maroon;font-weight: bold">THE BIRDGES SCHOOL</p><?php } else { ?><p style="color:maroon;font-weight: bold">THE BIRDGES CONSORTIUM</p><?php } ?></div>
            <div class="row" style="margin-left: 1px;">
            <div class="col-md-3" style="margin: 0;padding:0">
            <img src="<?php echo $emp->upload_picture; ?>"  style="" class="pull-left square" alt="Profile-Pic">
            </div>
            <div class="col-md-6" style="margin: 0;padding:0">
            <div style="height: 120px;background-color:maroon;max-height: 120px;width: 220px">
                <p style="font-size:15px;color:white; padding-left: 10px;margin-top: 10px;margin-bottom: auto" class="pull-left"><?php echo $emp->fname; ?> <?php echo $emp->lname; ?></p>
                <p style="font-size:15px;color:white;padding-left: 10px;clear: both; margin-bottom: auto" class="pull-left"><?php echo $emp->job_title; ?></p>
                <p style="font-size:15px;color:white;padding-left: 10px;clear: both; margin-bottom: auto" class="pull-left"><?php echo date('h:i A', strtotime($emp->time_in)); ?>-<?php echo date('h:i A', strtotime($emp->time_out)); ?></p>
                <p style="font-size:15px;color:white;padding-left: 10px;clear: both; margin-bottom: auto" class="pull-left"><?php echo $emp->break_in; ?>-<?php echo $emp->break_out; ?></p>
                
                <p style="font-size:15px;color:white;padding-left: 10px;clear: both; margin-bottom: auto" class="pull-left">ID # <?php echo $emp->userid; ?></p>
                <br>

            </div>

            </div>

            <div align=center style="align-content: center;">

                <p style="padding-top:10px; font-size:12px; font-weight: bold; color:maroon;padding-left: 10px;clear: both; margin-bottom: auto; align-content: :center;"  >Emergency Contact Number: <?php echo $emp->emergency_contact_1; ?></p>
                <p style="font-weight: bold; font-size:12px;color:maroon;padding-left: 10px;clear: both; margin-bottom: auto; align-content: :center;"  >Employee Since: <?php echo date('M d, Y',strtotime($emp->hired_on)); ?></p>
                <img align="center" src="">
            </div>
            <div style="padding:5px 10px ;margin:0  0 0 0;background-color:maroon"></div>
        </div>
    </div>
            
</body>
</html>
<script type="text/javascript">
    $( function(){
        $( "#expDateFrom,#expDateTo,#certiDateTo,#certiDateFrom").datepicker();
    } );
</script>