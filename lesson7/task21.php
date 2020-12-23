<?php

include_once '../header.php';

$message = 'Позиция первой буквы "b" в строке: ';
$text = 'abc abc abc';
$needle = 'b';
$position = strpos($text, $needle) + 1;

echo $message . $position;
