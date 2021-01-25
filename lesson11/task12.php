<?php

include_once '../header.php';
include_once 'helper_functions.php';

$formsSend = isset($_POST['submit']);
$year = $_POST['year'] ?? 0;

?>
<!doctype html>
<html lang="en">
<head>
    <title>Task 12</title>
</head>
<body>
    <form action="<?=$scriptName?>" method="post">
        <label for="year">Укажите год в формате 0000: </label><br>
        <input type="text" name="year" id="year"><br>
        <input type="submit" name="submit" value="Отправить">
    </form>

    <?php if ($formsSend && isLeapYer($year)): ?>
        <h3>Год високосный</h3>
    <?php else: ?>
        <h3>Год не високосный</h3>
    <?php endif; ?>

</body>
</html>