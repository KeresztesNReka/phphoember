<?php
header('content-type:image/png');
$image = imagecreatetruecolor(500, 500);
$values = array(
            250,  140,
            220,  150,
            260,  155,
);
$black = imagecolorallocate($image, 0, 0, 0);
$white = imagecolorallocate($image, 255, 255, 255);
$orange = imagecolorallocate($image, 255, 165, 0);
imagefilledellipse($image, 250, 150, 100, 100, $white);
imagefilledellipse($image, 250, 250, 150, 150, $white);
imagefilledellipse($image, 250, 350, 200, 200, $white);
imagefilledellipse($image, 250, 230, 20, 20, $black);
imagefilledellipse($image, 250, 270, 20, 20, $black);
imagefilledellipse($image, 250, 330, 20, 20, $black);
imagefilledellipse($image, 250, 370, 20, 20, $black);
imagefilledellipse($image, 235, 130, 15, 15, $black);
imagefilledellipse($image, 265, 130, 15, 15, $black);
imagefilledrectangle($image, 240, 160, 260, 165, $black);
imagefilledpolygon($image, $values, 3, $orange);
header("Content-type: image/png");
imagepng($image);
?>