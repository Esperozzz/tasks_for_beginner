<?php

include_once '../header.php';

$numbersSet = [63, 2, 46, 75, 47, 31, 42, 49, 3, 25, 25, 51, 91, 18, 2, 98, 16, 79];
$repeatingNumber = false;

for ($currentNumber = 0; $currentNumber < count($numbersSet) - 1; $currentNumber++) {
    if ($numbersSet[$currentNumber] === $numbersSet[$currentNumber + 1]) {
        $repeatingNumber = true;
        break;
    }
}

if ($repeatingNumber) {
    echo YES;
} else {
    echo NO;
}
