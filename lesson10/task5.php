<?php

include_once '../header.php';

$formsSend = isset($_POST['submit']);
$userName = $_POST['name'] ?? '';
$errorMessages = [];

if (!empty($userName)) {
    $userName = strip_tags(trim($_POST['name']));
} else {
    $errorMessages[] = 'Вы не указали свое имя';
}

?>
<!doctype html>
<html lang="en">
<head>
    <title>Task 5</title>
</head>
<body>
    <form action="<?=$scriptName?>" method="post">
        <label for="name">Введите свое имя: </label><br>
        <input type="text" name="name" id="name" value="<?=$userName?>"><br>

        <input type="submit" name="submit" value="Отправить">
    </form>
</body>
</html>