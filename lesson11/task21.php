<?php

include_once '../header.php';

$format = 'd-m-Y';
$currentDay = date($format);
$currentDay = date_create($currentDay);
$currentDay = date_modify($currentDay, '-100 day');

echo date_format($currentDay, $format);
