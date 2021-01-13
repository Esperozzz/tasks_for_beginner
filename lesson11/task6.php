<?php

include_once '../header.php';

$dateFormat = 'Y-m-d H:i:s';
$currentDate = time();
$formattedDate = date($dateFormat, $currentDate);

echo $formattedDate;
