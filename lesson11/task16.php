<?php

include_once '../header.php';

$date = '2025-12-31';
$timestamp = strtotime($date);
$newFormatDate = date('d-m-Y', $timestamp);

echo $newFormatDate;
