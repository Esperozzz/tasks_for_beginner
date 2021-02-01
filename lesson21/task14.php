<?php

include_once '../header.php';

$numbersSet = [1, 2, 3, 4, 6, 9, 11];
$squaresSum = 0;

foreach ($numbersSet as $number) {
    $squaresSum += $number;
}

$result = floor(sqrt($squaresSum));

echo $result;
