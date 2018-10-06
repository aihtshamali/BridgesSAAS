<?php

$data = $_POST['imagedata'];
$filename = 'uploads/empSign/'.$user_id.'-'.$signNum.'.png';
//Need to remove the stuff at the beginning of the string
$data = substr($data, strpos($data, ",")+1);
$data = base64_decode($data);
$imgRes = imagecreatefromstring($data);
$fullUrl = base_url().'/'.$filename;
if($imgRes !== false && imagepng($imgRes, $filename) === true)
    echo "<img src='{$fullUrl}' alt='Signature'/>";

?>