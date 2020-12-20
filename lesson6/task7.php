<?php

include_once '../header.php';

$num = 587;

$result = sqrt($num);

$arr = [
    'ceil' => ceil($result),
    'floor' => floor($result)
];

print_r($arr);
