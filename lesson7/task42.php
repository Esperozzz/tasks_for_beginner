<?php

include_once '../header.php';

$startLine = 1;
$pyramidHeight = 9;

for ($currentRow = $startLine; $currentRow <= $pyramidHeight; $currentRow++) {
    echo str_repeat($currentRow, $currentRow) . LINE_BREAK;
}
