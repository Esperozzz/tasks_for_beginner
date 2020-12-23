<?php

include_once '../header.php';

$array = [
    'html',
    'css',
    'php'
];
$glue = ',';

$text = implode($glue, $array);

echo $text;