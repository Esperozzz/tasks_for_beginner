<?php

include_once '../header.php';
include_once 'task7.php';

function getCommonDivisors(int $numFirst, int $numSecond): array
{
    $divisorsSetFirst = getDivisors($numFirst);
    $divisorsSetSecond = getDivisors($numSecond);
    
    $commonDivisorsSet = [];
    foreach ($divisorsSetFirst as $divisorFirst) {
        foreach ($divisorsSetSecond as $divisorSecond) {
            if ($divisorFirst === $divisorSecond) {
                $commonDivisorsSet[] = $divisorFirst;
            }
        }
    }
    return $commonDivisorsSet;
}
