<?php

include_once '../header.php';

$upperBound = 1;
$lowerBound = 100;
$numbersSet = range(1, 10);

$squareRootNumbers = array_map('sqrt', $numbersSet);

print_r($squareRootNumbers);
