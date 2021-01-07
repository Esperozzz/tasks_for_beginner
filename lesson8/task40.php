<?php

include_once '../header.php';

$numbersSet = [1, 2, 3, 4, 5];

$squareRootSet = array_map('sqrt', $numbersSet);

print_r($squareRootSet);
