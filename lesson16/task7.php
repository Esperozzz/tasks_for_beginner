<?php

include_once '../header.php';

$arraySet = [];
$countItems = 3;
$numOfArrays = 3;

$sum = 0;
for ($key = 0; $key < $numOfArrays; $key++) {
    for ($i = 1; $i <= $countItems; $i++) {
        $sum++;
        $arraySet[$key][] = $sum;
    }
}

print_r($arraySet);
