<?php

include_once '../header.php';

function amicableNumbers(int $num1, int $num2): array
{
    return [];
}

function dividersOfNumber(int $num): array
{
    $dividersOfNumber = [];
    
    if ($num !== 0) {
        for ($divider = 1; $divider <= $num; $divider++) {
            if (($num % $divider) === 0) {
                $dividersOfNumber[] = $divider;
            }
        }
    }
    
    return $dividersOfNumber;
}
