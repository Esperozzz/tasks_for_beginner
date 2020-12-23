<?php

include_once '../header.php';

$text = 'aaa aaa aaa aaa aaa';
$space = ' ';
$message = 'Второй пробел находится в позиции - ';

//Ищем первый пробел в строке
$firstSpace = strpos($text, $space);

//Ищем второй пробел в строке
$secondSpace = strpos($text, $space, ++$firstSpace);

echo $message . $secondSpace;
