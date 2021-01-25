<?php

include_once '../header.php';

$login = 'user';
$password = '123456';

$userAccess = false;

$formsSend = isset($_POST['submit']);
$userLogin = $_POST['login'] ?? '';
$userPassword = $_POST['password'] ?? '';
$errorMessages = [];

if (!empty($userLogin)) {
    $userLogin = trim($_POST['login']);
} else {
    $errorMessages[] = 'Вы не указали логин';
}

if (!empty($userPassword)) {
    $userPassword = trim($_POST['password']);
} else {
    $errorMessages[] = 'Вы не указали пароль';
}

if ($userLogin === $login && $userPassword === $password) {
    $userAccess = true;
} else {
    $errorMessages[] = 'Пароль или логин не совпадает. Доступ запрещен!';
}

?>
<!doctype html>
<html lang="en">
    <head>
        <title>Task 4</title>
    </head>
    <body>
        
        <?php if ($formsSend && !empty($errorMessages)): ?>
            
            <ul style="color: red;">
                
            <?php foreach ($errorMessages as $message): ?>
                
                <li><?=$message?></li>
                
            <?php endforeach; ?>
                
            </ul>
            
        <?php endif; ?>

        <?php if ((!$formsSend || !empty($errorMessages)) && !$userAccess): ?>
            
        <form action="<?=$scriptName?>" method="post">
            <label for="login">Введите логин: </label><br>
            <input type="text" name="login" id="login"><br>
                
            <label for="password">Введите пароль: </label><br>
            <input type="password" name="password" id="password"><br>
                     
            <input type="submit" name="submit" value="Отправить">
        </form>

        <?php else: ?>

        <h3>Доступ разрешен!</h3>

        <?php endif; ?>

    </body>
</html>