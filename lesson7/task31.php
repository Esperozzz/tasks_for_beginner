<?php

include_once '../header.php';

$text = '1234567890';
$splitLength = 1;

$newArray = str_split($text, $splitLength);

print_r($newArray);
