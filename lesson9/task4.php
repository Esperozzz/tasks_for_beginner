<?php

include_once '../header.php';

$startIndex = 0;
$count = 10;
$value = 'x';

$duplicateValues = array_fill($startIndex, $count, $value);

print_r($duplicateValues);
