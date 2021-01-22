<?php

include_once '../header.php';

/**
 * Пример: 1 яблоко, 3 яблока, 8 яблок
 */
function pluralNoun(int $count, $one, $twoOfFour, $fiveOrMore): string
{
    if ($count > 14 || $count < -14) {
        $count = $count % 10;
    }
    
    if ($count === 1 || $count === -1) {
        return $one;
    } else if (($count >= 2 && $count <= 4) || ($count <= -2 && $count >= -4)) {
        return $twoOfFour;
    } else {
        return $fiveOrMore;
    }
}
