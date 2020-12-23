<?php

include_once '../header.php';

$date = '2013-12-31';
$delimiter = '-';
$glue = '.';

$dateArray = explode($delimiter, $date);
$newDateFormat = implode($glue, $dateArray);

echo $newDateFormat;
