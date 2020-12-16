<?php

include_once '../header.php';

$hour = date('H');
$minutes = date('i');
$seconds = date('s');

echo "Текущее время - {$hour}:{$minutes}:{$seconds}";
