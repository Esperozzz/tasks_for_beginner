<?php

include_once '../header.php';

$alphabet = range('a', 'z');
shuffle($alphabet);

$glue = '';
$offset = 0;
$length = 6;

$shuffleAlphabet = implode($glue, $alphabet);
$randomString = substr($shuffleAlphabet, $offset, $length);

echo $randomString;
