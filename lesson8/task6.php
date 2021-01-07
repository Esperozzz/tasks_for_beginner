<?php

include_once '../header.php';

$arr = [1, 2, 3, 4, 5];
$sumArrayNumbers = array_sum($arr);
$arrayCount = count($arr);

//Среднее арифметическое элементов массива
$arrayArithmeticMean = $sumArrayNumbers / $arrayCount;

echo $arrayArithmeticMean;
