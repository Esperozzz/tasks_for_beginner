<?php

include_once '../header.php';


$lowerBound = 1;
$upperBound = 10;
$arrayOfNumbers = range($lowerBound, $upperBound);
$productArrayNumbers = array_product($arrayOfNumbers);

echo $productArrayNumbers;
