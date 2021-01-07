<?php

include_once '../header.php';

$characterSet = ['a', 'b', 'c', 'b', 'a'];

$numberOfElements = array_count_values($characterSet);

print_r($numberOfElements);
