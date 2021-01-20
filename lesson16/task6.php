<?php

include_once '../header.php';

$itemsSets = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
$numbersSum = 0;

foreach ($itemsSets as $arrayLevel1) {
    foreach ($arrayLevel1 as $arrayLevel2) {
        foreach ($arrayLevel2 as $num) {
            $numbersSum += $num;
        }
    }
}

echo $numbersSum;
