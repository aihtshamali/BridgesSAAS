
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Grievance Blog</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <style>
  .selectInput
    {
      border-radius: 10px 0px 10px 0px;
      -webkit-transition: all 1s ease;
      transition: all 1s ease;
    }
  .selectInput:hover
    {
      box-shadow: 5px 5px 17px #0000008a;
      -webkit-transition: all 1s ease;
      transition: all 1s ease;
    }
  .inputButton
    {
      border-radius: 7px;
      -webkit-transition: all 1s ease;
      transition: all 1s ease;
    }
  .inputButton:hover
    {
      box-shadow: 5px 5px 10px #0000008a;
      -webkit-transition: all 1s ease;
      transition: all 1s ease;
    }
  .blog{
    background-color: #e3e8e86b;
     height: 72vh;
    font-family: monospace;
    padding: 1rem;
    /*position: fixed;*/
    overflow-x: hidden;
    overflow-y: auto;
  }
  .jumbotron h2:hover
    {
      cursor: pointer;
      color: green;
      -webkit-transition: all 1s ease;
      transition: all 1s ease;
    }
  .jumbotron h2
    {
      -webkit-transition: all 1s ease;
      transition: all 1s ease;
    }
  p{
    margin: 0;
  }
  .form-control{
    display: inline; 
    width: unset;
  }
  .borderBox
    {
      width: 50%;
      float: right;
      border: 1px solid #0000000f;
      border-radius: 10px 0px 10px 0px;
      -webkit-transition: all 1s ease;
      transition: all 1s ease;
    }
  .borderBox:hover
    {
      border: 1px solid #0000000f;
      border-radius: 10px 0px 10px 0px;
      box-shadow: 5px 5px 17px #0000008a;
      -webkit-transition: all 1s ease;
      transition: all 1s ease;
      cursor: pointer;
    }
  .fontWeight200
    {
      font-weight: 200 !important;
    }
  .memberNameBox
    {
      font-size:10px !important;
      display:inline;
      margin: 1px;
      border: 1px solid green;
      color: green;
      padding: 3px;
      text-align: center;
      -webkit-transition: all 1s ease;
      transition: all 1s ease;
      cursor: pointer;
    }
  .memberNameBox:hover
    {
      color: #fff !important;
      background: green !important;
      -webkit-transition: all 1s ease;
      transition: all 1s ease;
      cursor: pointer;
    }
  .cross
    {
      margin-top: -7px;
      color: #eee;
    }
  .fullWidth
    {
      clear: both;
      width: 100%;
    }
  .leftAlign
    {
      width: fit-content;
      float: left;
      margin: 3px;
      padding: 16px;
      border-radius: 90px 100px 0px 100px;
      background-color: #008000a8;
      color: #fff;
        -webkit-transition: all 1s ease;
        transition: all 1s ease;
    }
  .rightAlign
    {
      width: fit-content;
      float: right;
      text-align: right;
      margin: 3px;
      padding: 16px;
      border-radius: 90px 100px 100px 0px;
      background-color: #fff;
      color: #008000f5;
        -webkit-transition: all 1s ease;
        transition: all 1s ease;
    }
  .textRight
    {
      text-align: right;
    }
  .textleft
    {
      text-align: left;
    }
  .OnHoverShadow:hover
    {    
        box-shadow: 5px 5px 10px #0000008a;
        -webkit-transition: all 1s ease;
        transition: all 1s ease;
        cursor: pointer;
    }
  </style>
  </head>
  <body>
<div class="container">
<header>
<div class="jumbotron text-center" style="padding:20px">
  <h2><i>Welcome to Bridges Grievance Blog</i></h2>
<div>
     <form method="POST" action="<?php echo base_url();?>/Employee_reg/AddgrievanceCommittee">  
        <table class="inline-table table table-resposnive table-sm">
            <tr>  
                <td class="borderBox">  
                  <label style="display:inline"> <span class="fontWeight200">Committee Member : </span> </label>
                        <select name="commiteePerson_id" class="form-control selectInput"  id="">
                          <?php foreach ($users as $user) { ?>
                            <option value="<?php echo $user->id;?>"><?php echo $user->fname; echo " ".$user->lname; ?></option>
                          <?php  } ?>  
                        </select>
                    <input type="hidden" name="post_id" value="<?php echo $messages[0]->post_id;?>"> 
                  <input type="submit" class="inputButton" value="submit">
                </td> 
            </tr> 
        </table>
      </form>
    </div>
    <div class="text-center">
      <?php foreach ($committee_members as $member) {
        if ($member->userid!=$member->created_for)
            echo '<p class="memberNameBox">'.$member->fname.'<b class="cross"> x </b></p>';
        # code...
      } ?>
    </div>
  </div>
</header>
<div class="blog">
  <div class="row" >
    <div class=" col-md-offset-1 col-md-11">
      <span class="messages">
        <?php if(isset($messages)){ foreach ($messages as $message) {
          if($message->user_id!=$session_userid)
            echo '<div class="fullWidth"><p class="leftAlign OnHoverShadow">'.$message->message.'
          </br><span class="textRight">('.$message->fname.' '.$message->lname.')</span></p></div>' ; 
          else
            echo '<div class="fullWidth"><p class="rightAlign OnHoverShadow">'.$message->message.'
          </br><span class="textleft">('.$message->fname.' '.$message->lname.')</span></p></div>' ; 
            
         }} ?>
      </span>
    </div>
  </div>
</div>
<div class="row">
    <form action="<?php echo base_url() ?>/Employee_reg/newMessage" method="POST" id="SendMessageForm">
      <div class="col-md-12">
        <input type="text" name="message" class="form-control" style="display:inline;width: 95%;">
        <input type="hidden" name="post_id" id="post_id" value="<?php 
        if (isset($messages) && empty($messages)===FALSE)
        { echo $messages[0]->post_id; } ?>">
        <input type="hidden" name="Sessionuser_id" value="<?php echo $session_userid; ?>">
        <input type="hidden" name="Foruser" value="<?php echo $id; ?>">
        <input type="submit" class="btn btn-sm btn-success" style="margin:0" id="send" value="Send">
      </div>
    </form>
</div>
<footer id="footer">
<p>copyright text </p>
 </footer>
 </div>

</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){


$('input#send').on('click', function(e)
      {
        e.preventDefault();
        var formData=$("form#SendMessageForm").serialize();
        console.log(formData);
        $.ajax(
        {
          url:'<?php echo base_url(); ?>Employee_reg/newMessage',
          data:formData,
          type:'POST',
          success: function(data)
          {
            
            $("input[name='message']").val(''); // Setting message box empty
              var postid=null;
              postid=$("#post_id").val();
              if(!postid)
                {
                  var dataArray=jQuery.parseJSON(data);
                  postid=dataArray.post_id;
                  $("#post_id").val(dataArray.post_id);
                }
            // Getting Last Message
            $.ajax(
            {
              url:'<?php echo base_url(); ?>Employee_reg/getLatestMessage',
              data:{post_id:postid},
              type:'POST',
              success: function(data)
              {
                var dataArray=jQuery.parseJSON(data);
                // Appending to Last Child of Div.Message
                $("span.messages").append('<span class="clearfix"><p class="pull-right">'+dataArray.message+'</p>\
                  </span> <div class="clearfix"><p class="pull-right">('+dataArray.fname+' '+dataArray.lname+')</p></div>');
                   $('.blog').animate({scrollTop: $('.blog').prop("scrollHeight")}, 500);
              }
            });
          }
        });
      });
       $('.blog').animate({scrollTop: $('.blog').prop("scrollHeight")}, 500);
  });
</script>
</html>
