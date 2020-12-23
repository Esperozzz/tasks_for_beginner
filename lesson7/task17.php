<?php

include_once '../header.php';

$text = '1a2b3c4b5d6e7f8g9h0';
$dataToReplace = ['a', 'b', 'c'];
$newData = [1, 2, 3];

echo str_replace($dataToReplace, $newData, $text);