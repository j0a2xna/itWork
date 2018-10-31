
<?php

session_start();
$font = 'LaBelleAurore.ttf';

header('Content-Type: image/jpeg');
$im = imagecreatetruecolor(155,40);

$black = imagecolorallocate($im, 0, 0);
$greyish = imagecolorallocate($im, 215, 215, 215);


imagecolorallocate($image, 215, 215, 215);
imagefilledrectangle($im, 8, 8, 150, 30, $greyish);

$length = 7;
$text = substr (str_shuffle(md5(time())), 0, $length);

$_SESSION["cap"] = $captcha_num; //checking if text matches outlives the server

imagettftext($im, 20, 6, 15, 25, $black, $font, $text);


imagejpeg($im);
imagedestroy($image);

?>
