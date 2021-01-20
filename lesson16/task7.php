<?php

include_once '../header.php';

$arraySet = [];
$countItems = 3;
$numOfArrays = 3;
$startKey = 0;

$sum = 0;
for ($key = $startKey; $key < $numOfArrays; $key++) {
    for ($i = 1; $i <= $countItems; $i++) {
        $sum++;
        $arraySet[$key][] = $sum;
    }
}

print_r($arraySet);
