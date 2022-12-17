<?php
// CLASS RECTANGLE
require('class/1_rectangle.php');

$rec1 = new Rectangle(15, 60);
$rec2 = new Rectangle(10, 10);

$rectangles = [$rec1, $rec2];

echo "\n---------- Rectangle ----------\n";

foreach ($rectangles as $rect){$rect->afficherRectangle($rect);}

// CLASS TRIANGLERECTANGLE
require('class/1_triangle.php');

$tri = new Triangle(2, 5);

echo "\n---------- Triangle Rectangle ----------\n";

echo $tri->afficherTriangle($tri);

// CLASS CERCLE
require('class/1_cercle.php');

$cer = new Cercle(22);

echo "\n---------- Cercle ----------\n";

echo $cer->afficherCercle($cer);

// CLASS PAVÉ - PARALLÉLÉPIPÈDE
require('class/1_parallelepipede.php');

$paral = new Parallelepipede(6, 4, 10);

echo "\n---------- Parallélépipède ----------\n";

echo $paral->afficherParal($paral);

// CLASS PYRAMIDE
require('class/1_pyramide.php');

$pyra = new Pyramide(10, 20);

echo "\n---------- Pyramide ----------\n";

echo $pyra->afficherPyramide($pyra);

// CLASS SPHÈRE
require('class/1_sphere.php');

$sphere = new Sphere(10);

echo "\n---------- Sphère ----------\n";

echo $sphere->volume($sphere);