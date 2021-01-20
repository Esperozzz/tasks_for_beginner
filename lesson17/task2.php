<?php

include_once '../header.php';
//Подключение пользовательской функции
include_once 'task1.php';

$numbersSet = [8, -13, 3, 7, 15, 1, 0, -1, 10, 7, 9, 12, 14, 2, 11];
$numbersSetInRange = [];

foreach ($numbersSet as $num) {
    if (isNumberInRange($num)) {
        $numbersSetInRange[] = $num;
    }
}

print_r($numbersSetInRange);
