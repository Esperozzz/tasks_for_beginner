<?php

include_once '../header.php';
include_once 'helper_functions.php';

$formsSend = isset($_POST['submit']);
$date = $_POST['date'] ?? '';

if (matchDateAndTimeFormat($date)) {
    $timestamp = strtotime($date);
    $newDateFormat = date('H:i:s d.m.Y', $timestamp);
} else {
    $newDateFormat = '';
}

?>
<!doctype html>
<html lang="en">
<head>
    <title>Task 17</title>
</head>
<body>
    
    <form action="<?=$scriptName?>" method="post">
        <label for="date">Введите дату в формате гггг-мм-ддTчч:мм:сс : </label><br>
        <input type="text" name="date" id="date"><br>
        <input type="submit" name="submit" value="Отправить">
    </form>

    <?php if ($formsSend && !empty($newDateFormat)): ?>
        <h3>Конвертированный формат даты: <?=$newDateFormat?></h3>
    <?php endif; ?>
        
    <?php if ($formsSend && empty($newDateFormat)): ?>
        <h3>Дата указана не корректно</h3>
    <?php endif; ?>
    

</body>
</html>