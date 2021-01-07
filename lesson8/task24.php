<?php

include_once '../header.php';

$characterSet = ['a', 'b', 'c', 'd', 'e'];
$replacements = [ 0 => '!', 3 => '!!'];

$replacementResult = array_replace($characterSet, $replacements);

print_r($replacementResult);
