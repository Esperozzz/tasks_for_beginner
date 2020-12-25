<?php

include_once '../header.php';

$char = 'x';
$startCharPerLine = 1;
$endCharPerLine = 9;

for ($countCharsPerLine = $startCharPerLine;
     $countCharsPerLine <= $endCharPerLine;
     $countCharsPerLine++
) {
    echo str_repeat($char, $countCharsPerLine) . LINE_BREAK;
}