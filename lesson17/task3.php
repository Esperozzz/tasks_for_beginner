<?php

include_once '../header.php';

function getDigitsSum(int $num): int
{
    $arrayOfTens = str_split($num);
    return array_sum($arrayOfTens);
}
