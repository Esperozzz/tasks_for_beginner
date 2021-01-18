<?php

include_once 'header.php';

//Если есть ошибки, вывести их на экран
if (!empty($errorMessages)) {
    include_once 'error_messages.php';
}

if (!empty($result)) {
    include_once 'result_message.php';
} else {
    include_once 'form.php';
}

include_once 'footer.php';
