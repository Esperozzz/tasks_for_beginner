<?php

include_once '../header.php';

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

function isHappyTicket(int $num): bool
{
    $rightPart = $num % 1000;
    $leftPart = ($num - $rightPart) / 1000;

    $rightPartSum = sumOfDigits($rightPart);
    $leftPartSum = sumOfDigits($leftPart);

    return $rightPartSum === $leftPartSum;
}

function sumOfDigits(int $num): int
{
    return array_sum(str_split($num));
}

$arr = range(100000, 999999);
echo '<pre>';
print_r(happyTickets($arr));
echo '</pre>';