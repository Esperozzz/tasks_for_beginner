<?php

include_once '../header.php';

$numbersSet = [90, 6, 1, 4, 9, 19, 5, 62];
$search = 5;
$numberPresentInArray = false;

foreach ($numbersSet as $number) {
    if ($number === $search) {
        $numberPresentInArray = true;
    }
}

if ($numberPresentInArray) {
    echo YES;
} else {
    echo NO;
}
