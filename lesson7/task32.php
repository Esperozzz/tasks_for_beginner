<?php

include_once '../header.php';

$text = '1234567890';
$splitLength = 2;
$glue = '-';

$newArray = str_split($text, $splitLength);
$newTextFormat = implode($glue, $newArray);

echo $newTextFormat;
