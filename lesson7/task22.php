<?php

include_once '../header.php';

$message = 'Позиция последней буквы "b" в строке: ';
$text = 'abc abc abc';
$needle = 'b';
$position = strrpos($text, $needle) + 1;

echo $message . $position;
