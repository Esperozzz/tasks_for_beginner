<?php

include_once '../header.php';

$numbersSets = [[1, 2, 3], [4, 5], [6]];

$resultSum = 0;
foreach ($numbersSets as $numbers) {
    $resultSum += array_sum($numbers);
}

echo $resultSum;
