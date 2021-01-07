<?php

include_once '../header.php';

$lowerBound = 1;
$upperBound = 9;
$glue = '-';
$arrayOfNumbers = range($lowerBound, $upperBound);
$resultedString = implode($glue, $arrayOfNumbers);

echo $resultedString;
