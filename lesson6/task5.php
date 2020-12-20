<?php

include_once '../header.php';

$arr = [4, 2, 5, 19, 13, 0, 10];

$result = 0;

foreach ($arr as $item) {
    $result += $item;
}

echo sqrt($result);
