Welcome!!
<?php
// Create a 55x30 image
$im = imagecreatetruecolor(200, 100);
$white = imagecolorallocate($im, 255, 255, 255);
$blue = imagecolorallocate($im, 0, 0, 255);
$green = imagecolorallocate($im, 0, 255, 0);

// Draw a white rectangle
//imagefilledrectangle($im, 4, 4, 192, 92, $blue);
imagefilledrectangle($im, 4, 4, 192, 92, $green);

// Save the image
header('Content-Type: image/png');
imagePNG($im, './imagefilledrectangle.png');
imagedestroy($im);
echo $_SERVER['SERVER_ADDR']
?>
