<?php

use Esp\Tasks\Classes\Math;

include_once '../header.php';
include_once '../classes/Math.php';
include_once '../classes/SafeInt.php';
include_once '../classes/SafeIntException.php';

function squareNum($num)
{
    $math = new Math();
    return $math->squareNumber($num);
}

try {
    echo squareNum(9223372036854775807);
} catch (Exception $e) {
    echo 'Произошло переполнение числа';
}
