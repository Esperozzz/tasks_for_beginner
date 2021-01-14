<?php

include_once '../header.php';

$monthFormat = 't';
$currentTimestamp = time();
$numberOfDaysPerMonth = date($monthFormat, $currentTimestamp);

echo $numberOfDaysPerMonth;
