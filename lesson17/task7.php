<?php

include_once '../header.php';

function getDivisors(int $num): array
{
    $divisorsSet = [];
    if ($num > 0) {
        for ($divisor = 1; $divisor <= $num; $divisor++) {
            if ($num % $divisor === 0) {
                $divisorsSet[] = $divisor;
            }
        }
    }
    return $divisorsSet;
}
