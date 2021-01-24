<?php

include_once '../header.php';

function cut(string $text, int $length = 10): string
{
    if ($length <= 0) {
        return '';
    }
    return mb_substr($text, 0, $length);
}
