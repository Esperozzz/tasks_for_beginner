<?php

include_once '../header.php';

function numberOverTen(int $number1, int $number2): bool
{
    $sum = $number1 + $number2;
    
    if ($sum > 10) {
        return true;
    }
    return false;
}
