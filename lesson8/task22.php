<?php

include_once '../header.php';

$characterSet = ['a', '-', 'b', '-', 'c', '-', 'd'];
$needle = '-';
$strictSearch = true;
$replacement =

$firstOccurrence = array_search($needle, $characterSet, $strictSearch);

echo $firstOccurrence;
