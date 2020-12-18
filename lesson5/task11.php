<?php

include_once '../header.php';

$arr = [-4, -3, -2, -1, 0, 1, 2, 3, 4, 5];
$result = 0;

foreach ($arr as $item) {
    $result += $item;
}

echo $result;
