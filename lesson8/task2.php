<?php

include_once '../header.php';

$lowerBound = -5;
$upperBound = 15;
$arr = range($lowerBound, $upperBound);

//Уменьшаем общее количество элементов массива на 1, т.к. массивы начинают остчет с нуля
$lastArrItem = $arr[count($arr) - 1];

echo $lastArrItem;
