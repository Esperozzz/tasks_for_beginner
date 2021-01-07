<?php

include_once '../header.php';

$assocArray = ['a' => 1, 'b' => 2, 'c' => 3];

$flipArray = array_flip($assocArray);

print_r($flipArray);
