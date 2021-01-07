<?php

include_once '../header.php';

$dataForSorting = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];

sort($dataForSorting);

print_r($dataForSorting);
