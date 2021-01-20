<?php

include_once '../header.php';

function getDigitSum(int $num): int
{
    $arrayOfTens = str_split($num);
    return array_sum($arrayOfTens);
}
