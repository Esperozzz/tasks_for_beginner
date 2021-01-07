<?php

include_once '../header.php';

$lowerBound = 1;
$upperBound = 100;
$arrayOfNumbers = range($lowerBound, $upperBound);
$sumArrayNumbers = array_sum($arrayOfNumbers);

echo $sumArrayNumbers;
