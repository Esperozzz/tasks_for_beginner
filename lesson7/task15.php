<?php

include_once '../header.php';

define('MAX_STRING_LENGHT', 5);
define('DOTS', ' ...');

$text = 'Мое имя Александр';


if (mb_strlen($text) > MAX_STRING_LENGHT) {
    echo mb_substr($text, 0, 5) . DOTS . '<br>';
} else {
    echo $text . '<br>';
}
