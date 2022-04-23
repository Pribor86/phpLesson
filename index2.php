<?php

$im = imagecreatetruecolor(200, 200);

$blue = imagecolorallocate($im, 0, 0, 255);
$red = imagecolorallocate($im, 255, 0, 0);
$green = imagecolorallocate($im, 0, 255, 0);

imagefilledrectangle ($im, 80, 120, 120,160, $blue); //залитый прямоугольник

imagefilledellipse($im, 100, 105, 30, 30, $red); //залитый круг

$values = array( 100, 70, // Point 1 (x, y)// массив точек для треугольника
    90, 90, // Point 2 (x, y)
    110, 90); // Point 3 (x, y)

imagefilledpolygon($im, $values,3,$green); //рисование треугольника

header("Content-type: image/png"); // прорисовка

imagepng($im);