<?php

include_once '../header.php';

function isHappyTicket(int $num): bool
{
    $partOfTheNumber = str_split($num, 3);
    $sumLefPart = array
    return $partOfTheNumber[0] === $partOfTheNumber[1];
}

var_dump(isHappyTicket(654456));
