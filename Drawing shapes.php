<?php
//Creating a blanked image
$width=400;
$height=400;
//Create the image with width and height
$image=imagecreate($width,$height);

//set background color
$bgcolor=imagecolorallocate($image,255,0,0);

//Set header
header('Content-Type:image/jpeg');

//output the image
imagejpeg($image);
?>


<?php
//Drawing a line
$w=400;
$h=400;
//Create the image
$image=imagecreate($w,$h);

//Set background color
$bgcolor=imagecolorallocate($image,200,200,200);
//set line color
$lcolor=imagecolorallocate($image,0,0,0);
//Draw a line
imageline($image,10,50,100,50,$lcolor);
//set the header
header('Content-Type:image/jpeg');
//output the image
imagejpeg($image);
?>


<?php
//Drawing a rectangle
$w=400;
$h=400;
$image=imagecreate($w,$h);
$bgcolor=imagecolorallocate($image,200,200,200);
$lcolor=imagecolorallocate($image,0,0,0);
imagerectangle($image,30,40,90,120,$lcolor);
header('Content-Type:image/jpeg');
imagejpeg($image);
?>


<?php
//Drawing a rectangle
$w=400;
$h=400;
$image=imagecreate($w,$h);
$bgcolor=imagecolorallocate($image,200,200,200);
$lcolor=imagecolorallocate($image,0,0,0);
imagerectangle($image,30,40,90,120,$lcolor);
header('Content-Type:image/jpeg');
imagejpeg($image);
?>



<?php
//Drawing filled rectangle
$w=400;
$h=400;
$image=imagecreate($w,$h);
$bgcolor=imagecolorallocate($image,200,200,200);
$color=imagecolorallocate($image,0,0,255);
imagefilledrectangle($image,30,40,90,120,$color);
header('Content-Type:jpeg');
imagejpeg($image);
?>



<?php
//Image with text
$w=400;
$h=400;
$image=imagecreate($w,$h);
$bgcolor=imagecolorallocate($image,0,0,0);
$text="Hello Yaswanth";
$textcolor= imagecolorallocate($image,255,255,255);
$fontsize=5;
imagestring($image,$fontsize,50,100,$text,$textcolor);
header('Content-Type:jpeg');
imagejpeg($image);
?>
