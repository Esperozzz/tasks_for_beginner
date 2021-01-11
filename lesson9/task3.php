<?php

include_once '../header.php';

$lowerBound = 1;
$upperBound = 100;
$numbersSet = range($lowerBound, $upperBound);
$glue = '<br>';

$columnOfNumbers = implode($glue, $numbersSet);

echo $columnOfNumbers;
