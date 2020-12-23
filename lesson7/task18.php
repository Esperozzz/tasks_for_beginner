<?php

include_once '../header.php';

$text = '1a2b3c4b5d6e7f8g9h0';
$dataToReplace = range(0,9);
$newValue = '';

echo str_replace($dataToReplace, $newValue, $text);
