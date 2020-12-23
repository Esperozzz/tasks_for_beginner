<?php

include_once '../header.php';

$text = 'abacbacbacbaqwerty';
$replacePairs = [
    'a' => 1,
    'b' => 2,
    'c' => 3
];
$dataFrom = 'abc';
$dataTo = '123';



echo strtr($text, $replacePairs) . '<br>';
echo strtr($text, $dataFrom, $dataTo) . '<br>';