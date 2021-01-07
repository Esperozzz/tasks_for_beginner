<?php

include_once '../header.php';

$characterSet = ['a', '-', 'b', '-', 'c', '-', 'd'];
$needle = '-';
$strictSearch = true;
$replacement = [];
$replacementLength = 1;

$firstOccurrence = array_search($needle, $characterSet, $strictSearch);
$resultOfReplacement = array_splice(
    $characterSet,
    $firstOccurrence,
    $replacementLength
);

print_r($characterSet);
