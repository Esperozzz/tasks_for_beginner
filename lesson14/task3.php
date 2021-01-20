<?php

include_once '../header.php';

function negativeNumber(int $number): bool
{
    if ($number < 0) {
        return true;
    }
    return false;
}
