<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Update</title>
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
    </style>
<!--   'relationship_to_person' => $this->input->post('relation'),                    
                    'emergency_contact_1' => $this->input->post('contact'),
                    'emergency_person_address_1' => $this->input->post('address'),
                    'e_email'=>$this->input->post('email'),
                    'e_city'-->
    
</head>
<!-- <?php var_dump($emp); ?> -->
<body>
    <?php echo form_open('caan/addemergencycontact/'.$emp->userid); ?>
            <div class="profile-body shadow">   
        
                <div class="row-c flexbox flexbox2 " id="row5A">
                    <div class="row1">
                        <div><i class="fa fa-pencil-square-o bck"></i><label>Emergency Contact</label></div>
                    </div>
                    <div class="row2">
                        <div class="vertical-center dotted-border"></div>
                    </div>
                    <div class="row1"></div>
                    <div class="row2 relative">
                        <ul class="ul-flex-list-2">
                            <li><b>Person Name to call in Emergency:</b>
                             <input type="text" value="<?php echo $emp->emergency_person_name; ?>" name="name" placeholder="Person Name" class="input-transparent col49">   
                                
                            </li>
                            
                            <li><b>Relationship to the person:</b>
                                <input type="text" value="<?php echo $emp->relationship_to_person; ?>" name="relation" placeholder="Relation" class="input-transparent col49">   
                                
                            </li>
                            

                            
                            <li><b>Emergency Contact Person:</b>
                                <input type="text" value="<?php echo $emp->emergency_contact_1; ?>" name="contact" placeholder="Contact No" class="input-transparent col49">   
                                
                            </li>
                            
                            
                            <li><b>Emergency Contact Person Address:</b>
                                <input type="text" name="address" value="<?php echo $emp->emergency_person_address_1 ?>" placeholder="Person Address" class="input-transparent col49">   
                                
                            </li>
                            
                            
                            <li><b>E-mail:</b>
                                <input type="text" name="email" value="<?php echo $emp->e_email ?>" placeholder="Email" class="input-transparent col49">   
                                
                            </li>
                            
                            <li><b>City:</b>
                                <input type="text" name="city" value="<?php echo $emp->e_city; ?>" placeholder="City" class="input-transparent col49">   
                            
                            </li>
                        </ul>
                    </div>
                </div>
        <button type="submit" class="btn btn-default pull-right">Submit</button>
        <?php echo form_close(); ?>
                </div>

</body>
</html>
<script type="text/javascript">
    $( function(){
        $( "#expDateFrom,#expDateTo,#certiDateTo,#certiDateFrom").datepicker();
    } );
</script>