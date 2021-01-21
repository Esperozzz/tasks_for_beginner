<?php

include_once '../header.php';

define('MIN_RANGE', 0);
define('MAX_RANGE', 10);

function isNumberInRange(int $num): bool
{
    return ($num > MIN_RANGE) && ($num < MAX_RANGE);
}
