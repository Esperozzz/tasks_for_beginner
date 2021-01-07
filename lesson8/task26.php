<?php

include_once '../header.php';

$assocArray = ['a' => 1, 'b' => 2, 'c' => 3];
$numberOfItems = 1;

$randArrayKey = array_rand($assocArray, $numberOfItems);

echo $randArrayKey;
