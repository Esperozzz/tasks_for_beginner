<?php

include_once '../header.php';

$text = '12345678';
$decPoint = ' ';
$thousandsSep = ' ';
$decimals = 0;
$formattedText = number_format(
    $text,
    $decimals,
    $decPoint,
    $thousandsSep
);

echo $formattedText;
