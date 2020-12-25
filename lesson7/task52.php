<?php

include_once '../header.php';

$rawText = 'ab-cd-ef';
$rowOccurrence = '-';
$formattedText = strstr($rawText,  $rowOccurrence);

echo $formattedText;
