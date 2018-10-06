<!DOCTYPE html>
<html lang="en">
<head>
  <title>List Letter Formate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>List Letter Formate</h2>
  <!-- <p></p>             -->
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr. #</th>
        <th>Heading</th>
        <th>Description</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $i = 1;
        foreach($letter_formats as $letters) {?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $letters->headingContent; ?></td>
        <td><?php echo $letters->DescriptionContent; ?></td>
        <td><a href="<?php echo base_url() ?>Employee_reg/letterFormat/<?= $letters->id;?>">Edit</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
