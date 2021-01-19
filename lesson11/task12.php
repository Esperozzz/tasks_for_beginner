<?php

include_once '../header.php';
include_once 'controller/controller_variable.php';

define('FIRST_YEAR_OF_OUR_ERA', 1);
$formMessage = 'Enter year';

if (isset($_POST['submit'])) {
    if (!empty($_POST['year'])) {

        $enteredYear = trim($_POST['year']);

        if (!is_numeric($enteredYear)) {
            $errorMessages[] = 'Year must be a number';
        }

        if ($enteredYear < FIRST_YEAR_OF_OUR_ERA || $enteredYear > PHP_INT_MAX) {
            $errorMessages[] = 'Year entered incorrectly';
        }

        if (empty($errorMessages)) {
            $yearTimestamp = mktime(0, 0, 0, 12, 31, $enteredYear);
            $leapYear = date('L', $yearTimestamp);

            if ($leapYear) {
                $messages[] = 'Leap year';
            } else {
                $messages[] = 'Not a leap year';
            }
        }

    } else {
        $errorMessages[] = 'Year not specified';
    }
}

include_once 'controller/page_controller.php';
