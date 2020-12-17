<?php

include_once '../header.php';

$a = 5;

if ($a === 0 || $a === 2) {
    $a += 7;
} else {
    $a /= 10;
}
echo "Результат: {$a}<br>";


$a = 0;

if ($a === 0 || $a === 2) {
    $a += 7;
} else {
    $a /= 10;
}
echo "Результат: {$a}<br>";


$a = -3;

if ($a === 0 || $a === 2) {
    $a += 7;
} else {
    $a /= 10;
}
echo "Результат: {$a}<br>";


$a = 2;

if ($a === 0 || $a === 2) {
    $a += 7;
} else {
    $a /= 10;
}
echo "Результат: {$a}<br>";
