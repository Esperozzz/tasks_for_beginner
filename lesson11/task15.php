<?php

include_once '../header.php';
include_once 'helper_functions.php';

$formsSend = isset($_POST['submit']);
$date1 = $_POST['date1'] ?? '';
$date2 = $_POST['date2'] ?? '';

if (matchDateFormat('d-m-Y', $date1) && matchDateFormat('d-m-Y', $date2)) {
    $date1 = convertDateToTimestamp('-', $date1);
    $date2 = convertDateToTimestamp('-', $date2);
    $laterDate = getLaterDate($date1,$date2);
    $laterDate = date('d-m-Y', $laterDate);
} else {
    $laterDate = '';
}

?>
<!doctype html>
<html lang="en">
<head>
    <title>Task 14</title>
</head>
<body>
    
    <h3>Определение наибольшей даты</h3>
    <form action="<?=$scriptName?>" method="post">
        <label for="date1">Введите первую дату в формате дд-мм-гггг: </label><br>
        <input type="text" name="date1" id="date1"><br>
            <label for="date2">Введите вторую дату в формате дд-мм-гггг: </label><br>
        <input type="text" name="date2" id="date2"><br>
        <input type="submit" name="submit" value="Отправить">
    </form>

    <?php if ($formsSend && !empty($laterDate)): ?>
        <h3>Наибольшая дата из двух является : <?=$laterDate?></h3>
    <?php endif; ?>
        
    <?php if ($formsSend && empty($laterDate)): ?>
        <h3>Даты указаны не корректно</h3>
    <?php endif; ?>
    

</body>
</html>