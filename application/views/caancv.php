<html>
<head>
<iframe src="http://docs.google.com/gview?url=http://remote.url.tld/path/to/document.doc&embedded=true"></iframe>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php echo form_open_multipart('caan/cvuploaded/') ?>
<input type="hidden" name="uid" value="<?php echo $emp->userid; ?>">
<input name="cv" type="file" class="form-control">
<br>
<button type="submit" class="form-control">Submit</button>
<?php echo form_close(); ?>     
</body>
</html>