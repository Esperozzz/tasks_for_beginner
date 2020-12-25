<?php

include_once '../header.php';

$rowText = 'var_test_text';
$formattedText = explode('_', $rowText);
$formattedText = implode(' ', $formattedText);
$formattedText = ucwords($formattedText);

print_r($formattedText);