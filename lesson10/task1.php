<?php

include_once '../header.php';

$name = $_POST['name'] ?? '';

if (!empty($name)) {
    $userName = strip_tags(trim($name));
} else {
    $userName = '';
}

?>
<!doctype html>
<html lang="en">
    <head>
        <title>Task 1</title>
    </head>
    <body>

        <?php if (empty($userName)): ?>

        <form action="<?=$scriptName?>" method="post">
            <label for="name">Введите свое имя: </label>
            <input type="text" name="name" id="name"><br>
            <input type="submit" name="submit">
        </form>

        <?php else: ?>

        <h3>Привет, <?=$userName?>!</h3>

        <?php endif; ?>

    </body>
</html>