<?php

error_reporting(-1);

//Границы значений символов Unicode для строчных и прописных букв
define('ASCII_UPPERCASE_A_CODE', 65);
define('ASCII_UPPERCASE_Z_CODE', 90);
define('ASCII_LOWERCASE_A_CODE', 97);
define('ASCII_LOWERCASE_Z_CODE', 122);

define('LINE_BREAK', '<br>');
define('IS', 'есть');
define('YES', 'да');
define('NO', 'нет');

$countTasks = 7;
$lessonNum = 16;

/*
for ($i = 1; $i <= $countTasks; $i++) {
    copy('task.php', '/storage/emulated/0/php/tasks/lesson' . $lessonNum . '/task' . $i . '.php');
}
*/