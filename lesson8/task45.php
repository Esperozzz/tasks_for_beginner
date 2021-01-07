<?php

include_once '../header.php';

$numbersSet = '1234567890';
$itemLength = 1;

$arrNumbersSet = str_split($numbersSet, $itemLength);
$sumOfNumbers = array_sum($arrNumbersSet);

echo $sumOfNumbers;
