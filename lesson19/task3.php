<?php

include_once '../header.php';

function lowNum(int $num): int
{
    $splitNumber = str_split($num);
    $numbersSum = array_sum($splitNumber);
    if ($numbersSum > 9) {
        $numbersSum = lowNum($numbersSum);
    }
    return $numbersSum;
}
