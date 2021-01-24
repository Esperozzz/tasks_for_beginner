<?php

include_once '../header.php';

function arrPrint(array $numbers, $startKey): void
{
    if (!isset($numbers[$startKey])) {
        return;
    }
    echo $numbers[$startKey] . LINE_BREAK;
    arrPrint($numbers, $startKey + 1);
}
