<?php

include_once '../header.php';

$numbersSet = [1, 22, 4, 4, 4, 9, 11];
$repeatCounter = 1;
$lastNumber = 0;
$repeatNum = 0;

foreach ($numbersSet as $key => $number) {
    if ($number === $lastNumber) {
        $repeatCounter++;
        if ($repeatCounter === 3) {
            $repeatNum = $number;
        }
    }
    $lastNumber = $number;
}

echo $repeatNum;
