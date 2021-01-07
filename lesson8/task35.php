<?php

include_once '../header.php';

$numbersSet = [1, 2, 3, 4, 5, 6, 7, 8];

while (!empty($numbersSet)) {
    echo array_shift($numbersSet);
    echo array_pop($numbersSet);
}
