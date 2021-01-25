<?php

include_once '../header.php';

$formsSend = isset($_POST['submit']);
$userName = $_POST['name'] ?? '';
$userAge = $_POST['age'] ?? '';
$userMessage = $_POST['message'] ?? '';
$errorMessages = [];

if (!empty($userName)) {
    $userName = strip_tags(trim($_POST['name']));
} else {
    $errorMessages[] = 'Вы не указали свое имя';
}

if (!empty($userAge)) {
    $userAge = strip_tags(trim($_POST['age']));
} else {
    $errorMessages[] = 'Вы не указали свой возраст';
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
        <title>Task 2</title>
    </head>
    <body>
        
        <?php if ($formsSend && !empty($errorMessages)): ?>
            
            <ul style="color: red;">
                
            <?php foreach ($errorMessages as $message): ?>
                
                <li><?=$message?></li>
                
            <?php endforeach; ?>
                
            </ul>
            
        <?php endif; ?>

        <?php if (!$formsSend || !empty($errorMessages)): ?>
            
        <form action="<?=$scriptName?>" method="post">
            
            <label for="name">Введите свое имя: </label><br>
            <input type="text" name="name" id="name"><br>
                
            <label for="age">Введите свой возраст: </label><br>
            <input type="text" name="age" id="age"><br>
                
            <label for="message">Напишите немного о себе: </label><br>
            <textarea name="message" id="message"></textarea><br>
                
            <input type="submit" name="submit" value="Отправить">
                
        </form>

        <?php else: ?>

        <p>Привет, <?=$userName?>, <?=$userAge?> лет.</p>
        <p>Твое сообщение: <?=$userMessage?></p>

        <?php endif; ?>

    </body>
</html>