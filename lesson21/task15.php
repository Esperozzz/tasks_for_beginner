<?php

include_once '../header.php';

$numbersSet = [1, 22, 3, 4, 6, 9, 11];
$numbersSum = 0;

foreach ($numbersSet as $number) {
    if ($number > 0 && $number < 10) {
        $numbersSum += $number;
    }
}

echo $numbersSum;
