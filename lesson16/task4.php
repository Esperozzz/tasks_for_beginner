<?php

include_once '../header.php';

$numbersSet = [2, 2, 1, 5, 8, 10];

function addUpToTen(array $numbers): int
{
    $sum = 0;
    $arraySize = count($numbers);
    for ($i = 0; $i < $arraySize; $i++) {
        $sum += $numbers[$i];
        if ($sum === 10) {
            //Количество сложенных элементов
            return $i + 1;
        }
    }
    return 0;
}
