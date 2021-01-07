<?php

include_once '../header.php';

$characterSet = ['a', 'b', 'c', 'b', 'a'];

$uniqueElementsArr = array_unique($characterSet);

print_r($uniqueElementsArr);
