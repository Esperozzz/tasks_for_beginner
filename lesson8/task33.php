<?php

include_once '../header.php';

$numbersSet = [1, 2, 3, 4, 5];

$firstElement = array_shift($numbersSet);
$lastElement = array_pop($numbersSet);

echo 'First element: ' . $firstElement . LINE_BREAK;
echo 'Last element: ' . $lastElement . LINE_BREAK;
