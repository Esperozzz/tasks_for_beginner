<?php

include_once '../header.php';

/**
 * Пример: 1 яблоко, 3 яблока, 8 яблок
 */
function pluralNoun(
    int $count,
    string $one,
    string $twoOfFour,
    string $fiveOrMore): string {

    if ($count > 14 || $count < -14) {
        $count = $count % 10;
    }
    
    if ($count === 1 || $count === -1) {
        return $one;
    }
    if (($count >= 2 && $count <= 4) || ($count <= -2 && $count >= -4)) {
        return $twoOfFour;
    }
    return $fiveOrMore;
}
