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
  .inputText
    {
      border-radius: 10px 0px 10px 0px;
      -webkit-transition: all 1s ease;
      transition: all 1s ease;
    }
  .inputText:focus
    {
      box-shadow: 5px 5px 17px #0000008a;
      -webkit-transition: all 1s ease;
      transition: all 1s ease;
    }
  .inputText:hover
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
  .mid
    {
      float: right !important;
    }
  .newBlogStyle
    {
      float: left;
      color: #fff;
      background: green;
      border-radius: 10px;
      margin: 17px;
      padding: 10px;
      max-width: 20%;
      -webkit-transition: all 1s ease;
      transition: all 1s ease;
    }
  .newBlogStyle:hover
    {  
      cursor: pointer;  
      border-radius: 10px 0px 10px 0px;
      box-shadow: 5px 5px 17px #0000008a;
      -webkit-transition: all 1s ease;
      transition: all 1s ease;
    }
  .newBlogContantStyle
    {
      clear: both;
      float: right;
      margin-top: 3px;
    }
  .newBlogStyle a
    {
      color: #fff !important;
      float: left;
    }
  .textColorChangeOnHover:hover
    {
      color:green;
      -webkit-transition: all 1s ease;
      transition: all 1s ease;
      cursor: pointer;
    }
  p
    {
      margin: 0;
    }
  .pointerOnHover:hover
    {
      cursor: pointer;
    }
</style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center textColorChangeOnHover">
        <h2> <i> <?php  echo ($grievance[0]->fname).' '; echo ($grievance[0]->lname) ?> </i></h2>
      </div>
    </div>
    <div> 
      <form method="POST" action="<?php echo base_url();?>/Employee_reg/NewBLogEntry">  
        <table class="inline-table table table-resposnive">
            <tr>  
                  <td class="mid inputButton pointerOnHover">  
                      <label> Title: </label> 
                      <input type="text" name="name" class="inputText">
                      <input type="hidden" name="created_for" value="<?php echo $id;?>">
                      <input type="submit" value="submit" class="inputButton">
                  </td> 
            </tr> 
        </table>
      </form>
    </div>
    <div class="row"> 
          <?php foreach ($grievance as $p) {
           ?>
           <div class="newBlogStyle ">
               <a href="<?php echo base_url() ?>/Employee_reg/emp_blog/<?php echo $p->post_id;?>"> <?php  echo $p->name; ?></a>
                <i class="newBlogContantStyle"><?php  echo $p->created_at; ?> </i>
            </div>
         <?php }  ?> 
    </div>
  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
