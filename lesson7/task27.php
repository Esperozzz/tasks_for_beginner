<?php

include_once '../header.php';

$text = 'html css php';
$delimiter = ' ';

$newArray = explode($delimiter, $text);

print_r($newArray);
