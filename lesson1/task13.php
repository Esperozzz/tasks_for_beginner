<?php

include_once '../header.php';

//Секунд в минуте
define('SEC_IN_MIN', 60);
//Минут в часе
define('MIN_IN_HOUR', 60);
//Часов в сутках
define('HOURS_IN_DAY', 24);
//Дней в месяце (месяц в среднем)
define('DAYS_IN_MONTH', 30);

echo 'Seconds per hour: ' . SEC_IN_MIN * MIN_IN_HOUR . '<br>';
echo 'Seconds in days: ' . SEC_IN_MIN * MIN_IN_HOUR * HOURS_IN_DAY . '<br>';
echo 'Seconds per month: ' . SEC_IN_MIN * MIN_IN_HOUR * HOURS_IN_DAY * DAYS_IN_MONTH . '<br>';
