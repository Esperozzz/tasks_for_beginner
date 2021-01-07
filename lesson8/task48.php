<?php

include_once '../header.php';

$numbersSet = [1, 2, 4, 5, 5];

$sortAscending = sort($numbersSet, SORT_NUMERIC);
$secondMaxItem = array_pop($numbersSet);

echo $secondMaxItem;
