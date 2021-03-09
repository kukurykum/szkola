<?php
require_once('Trojkat.class.php');

$triangle1 = new Trojkat();
$triangle2 = new Trojkat();

echo $triangle1 -> a; echo '<br>';
echo $triangle1 -> h; echo '<br>';
echo $triangle1 -> poleTrojkata(); echo '<br>';
echo '<br>';

echo $triangle2 -> a; echo '<br>';
echo $triangle2 -> h; echo '<br>';
echo $triangle2 -> poleTrojkata(); echo '<br>';
echo '<br>';

//raporty o trjkątach
echo $triangle1 -> getInfo();
echo $triangle2 -> getInfo();
