<?php

include_once '../header.php';

$str = 'https://old.code.mu/tasks/php/base/rabota-so-strokovymi-funkciyami-v-php.html';

$http = 'http://';
$https = 'https://';

if (substr($str, 0, 7) === $http ||
    substr($str, 0, 8) === $https
) {
    echo YES;
} else {
    echo NO;
}