<?php

include_once '../header.php';

$lowerBound = 1;
$upperBound = 20;

$numbersSet = range($lowerBound, $upperBound);
$sumOfNumbers = array_sum($numbersSet);
$numbersCount = count($numbersSet);
$arithmeticMean = $sumOfNumbers / $numbersCount;

echo 'Arithmetic mean: ' . $arithmeticMean;
