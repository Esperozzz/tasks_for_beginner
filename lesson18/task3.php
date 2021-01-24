<?php

include_once '../header.php';

/**
 * @param array $numbers
 * @return array
 */
function happyTickets(array $numbers): array
{
    $happyTickets = [];

    foreach ($numbers as $num) {
        if (isHappyTicket($num)) {
            $happyTickets[] = $num;
        }
    }

    return $happyTickets;
}

/**
 * @param int $num
 * @return bool
 */
function isHappyTicket(int $num): bool
{
    $rightPart = $num % 1000;
    $leftPart = ($num - $rightPart) / 1000;

    $rightPartSum = sumOfDigits($rightPart);
    $leftPartSum = sumOfDigits($leftPart);

    return $rightPartSum === $leftPartSum;
}

/**
 * @param int $num
 * @return int
 */
function sumOfDigits(int $num): int
{
    return array_sum(str_split($num));
}
