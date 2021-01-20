<?php

include_once '../header.php';

$array = [];
$numberOfItems = 10;

for ($i = 1; $i <= $numberOfItems; $i++) {
    $array[] = str_repeat('x', $i);
}

var_dump($array);
