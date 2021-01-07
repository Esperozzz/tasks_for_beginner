<?php

include_once '../header.php';

$offset = 1;
$length = 3;
$arrayOfNumbers = [1, 2, 3, 4, 5];
$result = array_slice($arrayOfNumbers, $offset, $length);

print_r($result);
