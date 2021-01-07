<?php

include_once '../header.php';

$arrayOfNumbers = [1, 2, 3, 4, 5];
$length = 0;

$replacementFirst = ['a', 'b'];
$offsetFirst = 1;

$replacementMiddle = ['c'];
$offsetMiddle = 6;

$replacementEnd = ['e'];
$offsetEnd = 8;


//Заменяем часть массива на символы
array_splice($arrayOfNumbers, $offsetFirst, $length, $replacementFirst);
array_splice($arrayOfNumbers, $offsetMiddle, $length, $replacementMiddle);
array_splice($arrayOfNumbers, $offsetEnd, $length, $replacementEnd);

print_r($arrayOfNumbers);
