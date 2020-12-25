<?php

include_once '../header.php';

define('PALINDROME', 'является палиндромом');
define('NOT_A_PALINDROME', 'не является палиндромом');

$word = 'level';
$inverseWord = strrev($word);

if ($inverseWord === $word) {
    echo $word . ' ' . PALINDROME;
} else {
    echo $word . ' ' . NOT_A_PALINDROME;
}
