<?php

include_once '../header.php';

$date = date_create('2025-12-31');
$date = date_modify($date, '+2 day');
echo date_format($date, 'Y-m-d') . LINE_BREAK;

$date = date_modify($date, '1 month');
echo date_format($date, 'Y-m-d') . LINE_BREAK;

$date = date_modify($date, '+3 day');
echo date_format($date, 'Y-m-d') . LINE_BREAK;

$date = date_modify($date, '+1 year');
echo date_format($date, 'Y-m-d') . LINE_BREAK;

$date = date_modify($date, '-3 day');
echo date_format($date, 'Y-m-d') . LINE_BREAK;
