<?php

include_once '../header.php';
include_once 'helper_functions.php';

$formsSend = isset($_POST['submit']);
$date = $_POST['date'] ?? '';

if (matchDateAndTimeFormat($date)) {
    $timestamp = strtotime($date);
    $newDateFormat = date('H:i-s Y.m.d', $timestamp);
} else {
    $newDateFormat = '';
}

//2025-12-31T12:13:59

?>
<!doctype html>
<html lang="en">
<head>
    <title>Task 14</title>
</head>
<body>
    
    <form action="<?=$scriptName?>" method="post">
        <label for="date">Введите дату в формате дд-мм-гггг: </label><br>
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