<?php

include_once '../header.php';

$numbersSet = '1234567890';
$splitLength = 2;

$splitNumbers = str_split($numbersSet, $splitLength);
$sumOfPairs = array_sum($splitNumbers);

echo $sumOfPairs;
