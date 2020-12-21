<?php

include_once '../header.php';

$str = 'http://old.code.mu/tasks/php/base/rabota-so-strokovymi-funkciyami-v-php.html';

$http = 'http://';

if (substr($str, 0, 7) === $http) {
    echo YES;
} else {
    echo NO;
}
