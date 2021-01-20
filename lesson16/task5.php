<?php

include_once '../header.php';

$numbersSets = [[1, 2, 3], [4, 5], [6]];
$numbersSum = 0;

foreach ($numbersSets as $array) {
    foreach ($array as $num) {
        $numbersSum += $num;
    }
}

echo $numbersSum;
