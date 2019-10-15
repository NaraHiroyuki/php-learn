<?php 
require_once('TriangleFigure2.php');

$tri = new TriangleFigure();
$tri->setBase(-10);
$tri->setHeight(-10);
echo "三角形の面積:{$tri->getArea()}";
?>