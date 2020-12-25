<?php

include_once '../header.php';

$error = 'Нет такой буквы';
$lowercaseCharMessage = 'Маленькая буква';
$uppercaseCharMessage = 'Большая буква';
$alphabetLet = ord('D');

if ($alphabetLet >= ASCII_UPPERCASE_A_CODE &&
    $alphabetLet <= ASCII_UPPERCASE_Z_CODE
) {
    echo $uppercaseCharMessage;
} elseif ($alphabetLet >= ASCII_LOWERCASE_A_CODE &&
          $alphabetLet <= ASCII_LOWERCASE_Z_CODE
) {
    echo $lowercaseCharMessage;
} else {
    echo $error;
}
