<?php

include_once '../header.php';

$message = 'Позиция первой буквы "b" в строке: ';
$text = 'abc abc abc';
$needle = 'b';
$startPosition = 3;

$position = strpos($text, $needle, $startPosition) + 1;

echo $message . $position;
