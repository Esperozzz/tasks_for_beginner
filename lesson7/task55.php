<?php

include_once '../header.php';

$rowText = 'var_test_text';
$delimiter = '_';
$glue = ' ';

$rowTextArr = explode($delimiter, $rowText);
$rowTextInLine = implode($glue, $rowTextArr);
$formattedText = ucwords($rowTextInLine);
$formattedText = lcfirst($formattedText);
$formattedText = str_replace(' ', '', $formattedText);


print_r($formattedText);