<?php

include_once '../header.php';

$lowerBound = 1;
$upperBound = 100;

$numbersSet = range($lowerBound, $upperBound);
$sumOfNumbers = array_sum($numbersSet);

echo 'Sum of numbers: ' . $sumOfNumbers;
