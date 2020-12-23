<?php

include_once '../header.php';

$text = 'слова слова слова';
$dot = '.';

$modifiedText = rtrim($text, $dot) . $dot;

echo $modifiedText;
