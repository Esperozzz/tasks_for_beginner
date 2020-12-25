<?php

include_once '../header.php';

$rawText = 'ab-cd-ef';
$rowOccurrence = '-';
$formattedText = strrchr($rawText, $rowOccurrence);

echo $formattedText;
