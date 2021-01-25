<?php

include_once '../header.php';

$formsSend = isset($_POST['submit']);
$userName = $_POST['name'] ?? '';
$userMessage = $_POST['message'] ?? '';
$errorMessages = [];

if (!empty($userName)) {
    $userName = strip_tags(trim($_POST['name']));
} else {
    $errorMessages[] = 'Вы не указали свое имя';
}

if (!empty($userMessage)) {
    $userMessage = strip_tags(trim($_POST['message']));
} else {
    $errorMessages[] = 'Вы не указали информацию о себе';
}

?>
<!doctype html>
<html lang="en">
<head>
    <title>Task 6</title>
</head>
<body>

<?php if ($formsSend && !empty($errorMessages)): ?>

    <ul style="color: red;">
        <?php foreach ($errorMessages as $message): ?>
            <li><?=$message?></li>
        <?php endforeach; ?>
    </ul>

<?php endif; ?>


    <form action="<?=$scriptName?>" method="post">
        <label for="name">Введите свое имя: </label><br>
        <input type="text" name="name" id="name" value="<?=$userName?>"><br>
        <label for="message">Напишите немного о себе: </label><br>
        <textarea name="message" id="message"><?=$userMessage?></textarea><br>
        <input type="submit" name="submit" value="Отправить">
    </form>
</body>
</html>