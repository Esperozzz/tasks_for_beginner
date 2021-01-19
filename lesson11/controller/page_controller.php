<?php

include_once 'layout/header.php';

if (!empty($errorMessages)) {
    include_once 'layout/error_messages.php';
}

if (empty($errorMessages) && !empty($messages)) {
    include_once 'layout/result_message.php';
} else {
    include_once 'layout/form.php';
}

include_once 'layout/footer.php';
