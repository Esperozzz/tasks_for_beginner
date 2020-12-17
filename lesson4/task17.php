<?php

include_once '../header.php';

$a = 1;
$b = 3;

if ($a <= 1 && $b >= 3) {
    $a += $b;
    echo "Сумма: {$a}<br>";
} else {
    $a -= $b;
    echo "Разность: {$a}<br>";
}

$a = 0;
$b = 6;

if ($a <= 1 && $b >= 3) {
    $a += $b;
    echo "Сумма: {$a}<br>";
} else {
    $a -= $b;
    echo "Разность: {$a}<br>";
}

$a = 3;
$b = 5;

if ($a <= 1 && $b >= 3) {
    $a += $b;
    echo "Сумма: {$a}<br>";
} else {
    $a -= $b;
    echo "Разность: {$a}<br>";
}
