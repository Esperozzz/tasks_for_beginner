<?php

include_once '../header.php';

$number = 1673;
$itemLength = 1;

$numberDischarges = str_split($number, $itemLength);
$sumOfNumbers = array_sum($numberDischarges);

echo $sumOfNumbers;
