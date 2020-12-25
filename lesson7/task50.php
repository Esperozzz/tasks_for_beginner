<?php

include_once '../header.php';

define('MIN_LENGTH_LINE', 5);
define('MAX_LENGTH_LINE', 10);

$str = '';
$len = mt_rand(MIN_LENGTH_LINE, MAX_LENGTH_LINE);

for ($charCount = 0; $charCount <= $len; $charCount++) {
    $randomCharCode = mt_rand(ASCII_LOWERCASE_A_CODE, ASCII_LOWERCASE_Z_CODE);
    $str .= chr($randomCharCode);
}

echo $str;
