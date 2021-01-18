<?php

include_once '../header.php';

function expression(int $minuend, int $subtract, int $divisor): float
{
    if ($divisor === 0) {
        return 0;
    }
    return ($minuend - $subtract) / $divisor;
}
