<?php

include_once '../header.php';
include_once 'helper_functions.php';

$formsSend = isset($_POST['submit']);
$year = $_POST['year'] ?? '';

if (is_numeric($year)) {
    $fridays = fridayOfTheThirteenthYear($year);
} else {
    $year = '';
}

?>
<!doctype html>
<html lang="en">
<head>
    <title>Task 20</title>
</head>
<body>
<form action="<?=$scriptName?>" method="post">
    <label for="year">Укажите год в формате ГГГГ: </label><br>
    <input type="text" name="year" id="year"><br>
    <input type="submit" name="submit" value="Отправить">
</form>

<?php if ($formsSend && !empty($year)): ?>
    <h3>Все пятницы 13 указанного года:</h3>
    <ul>
        <?php foreach ($fridays as $friday): ?>
        <li><?=$friday?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php if ($formsSend && empty($year)): ?>
    <h3>Не корректно указан год</h3>
<?php endif; ?>

</body>
</html>