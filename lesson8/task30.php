<?php

include_once '../header.php';

$firstLetter = 'a';
$lastLetter = 'z';

$alphabet = range($firstLetter, $lastLetter);
shuffle($alphabet);

print_r($alphabet);
