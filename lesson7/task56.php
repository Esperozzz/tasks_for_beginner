<?php

include_once '../header.php';

$numbersArr = range(-1, 100);

foreach ($numbersArr as $num) {
    if (( (integer) substr($num, 0, 1) === 3) ||
        ( (integer) substr($num, -1, 1) === 3)
    ) {
        echo $num . LINE_BREAK;
    }
}