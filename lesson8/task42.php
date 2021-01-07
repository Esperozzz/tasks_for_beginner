<?php

include_once '../header.php';

$itemsWithSpaces = [' a ', ' b ', ' с '];

$itemsWithTrimSpaces = array_map('rtrim', $itemsWithSpaces);

var_dump($itemsWithTrimSpaces);
