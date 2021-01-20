<?php

include_once '../header.php';

function isNumberInRange(int $num): bool
{
    return ($num > 0) && ($num < 10);
}
