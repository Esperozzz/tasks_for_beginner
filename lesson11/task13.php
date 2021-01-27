<?php

include_once '../header.php';
include_once 'helper_functions.php';

$formsSend = isset($_POST['submit']);
$date = $_POST['date'] ?? '';

if (matchDateFormat('d.m.Y', $date)) {
    $date = convertDateToTimestamp('.', $date);
    $day = dayOfTheWeek($date);
} else {
    $day = '';
}

?>
<!doctype html>
<html lang="en">
<head>
    <title>Task 13</title>
</head>
<body>
    
    <form action="<?=$scriptName?>" method="post">
        <label for="date">Введите дату в формате дд.мм.гггг: </label><br>
        <input type="text" name="date" id="date"><br>
        <input type="submit" name="submit" value="Отправить">
    </form>

    <?php if ($formsSend && !empty($day)): ?>
        <h3>День недели указанной даты является: <?=$day?></h3>
    <?php endif; ?>
        
    <?php if ($formsSend && empty($day)): ?>
        <h3>Дата указана не корректно</h3>
    <?php endif; ?>
    

</body>
</html>