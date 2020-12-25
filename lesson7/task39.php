<?php

include_once '../header.php';

$characterSet = 'abcdefghijklmnopqrstuvwxyz';
$shuffleCharacterSet = str_shuffle($characterSet);
$uniqueStringLength = 6;
$offset = 0;
$uniqueString = substr($shuffleCharacterSet, $offset, $uniqueStringLength);

echo $uniqueString;
