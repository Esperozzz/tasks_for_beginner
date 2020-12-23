<?php

include_once '../header.php';

$text = 'http://old.code.mu/tasks/php/base';
$httpProtocol = 'http://';
$startingPosition = 0;
$startOfMatch = strpos($text, $httpProtocol);

if ($startOfMatch === $startingPosition) {
    echo YES;
} else {
    echo NO;
}