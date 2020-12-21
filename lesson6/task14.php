<?php

include_once '../header.php';

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$num = 10;
$result = 0;
$i = 0;

foreach ($arr as $item) {
    $result += $item;
    $i++;
    if ($result > $num) {
        break;
    }
}

echo 'Необходимо ' . $i .
 ' итераций, что бы сумма первых элементов' . 
 'массива привысела число ' . $num;
