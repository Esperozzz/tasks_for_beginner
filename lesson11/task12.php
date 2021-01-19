<?php

include_once '../header.php';

define('FIRST_YEAR_OF_OUR_ERA', 1);

$script = $_SERVER['SCRIPT_NAME'];
$errorMessages = [];
$messages = [];
$result = '';

if (isset($_POST['submit'])) {
    if (!empty($_POST['year'])) {

        //Очищаем ввод
        $enteredYear = trim($_POST['year']);

        //Проверяем, является ли переменная числом
        if (!is_numeric($enteredYear)) {
            $errorMessages[] = 'Year must be a number';
        }

        //Ввод является положительным числом
        if ($enteredYear < FIRST_YEAR_OF_OUR_ERA || $enteredYear > PHP_INT_MAX) {
            $errorMessages[] = 'Year entered incorrectly';
        }

        //Ошибок нет
        if (empty($errorMessages)) {
            
            $enteredYearTimestamp = mktime(0, 0, 0, 0, 0, $enteredYear);
            $leapYear = date('L', $enteredYearTimestamp);
            
            if ($leapYear) {
                $messages[] = 'Leap year';
            } else {
                $messages[] = 'Not a leap year';
            }
        }
    }
}

include_once 'layout/page_controller.php';
