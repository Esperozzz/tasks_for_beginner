<?php

include_once '../header.php';

$formsSend = isset($_POST['submit']);
$userAge = $_POST['age'] ?? '';
$errorMessages = [];

if (!empty($userAge)) {
    $userAge = strip_tags(trim($_POST['age']));
} else {
    $errorMessages[] = 'Вы не указали свой возраст';
}

?>
<!doctype html>
<html lang="en">
    <head>
        <title>Task 3</title>
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
            <label for="age">Введите свой возраст: </label><br>
            <input type="text" name="age" id="age"><br>
            
            <input type="submit" name="submit" value="Отправить">
        </form>

        <?php else: ?>

        <p>Привет, ваш возраст: <?=$userAge?> лет.</p>

        <?php endif; ?>

    </body>
</html>
