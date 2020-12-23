<?php

include_once '../header.php';

$text = 'String for test';
$offset = 2;
$replacementLenght = 5;
$newText = '!!!';
$newText = substr_replace(
    $text,
    $newText,
    $offset,
    $replacementLenght
);

echo $newText . '<br>';
