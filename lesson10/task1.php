<?php

include_once '../header.php';

if (!empty($_POST['user_name'])) {
    $userName = $_POST['user_name'];
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Task 1</title>
</head>
<body>
<div class="container">
    <h1>Добрый день!</h1>

    <form class="row g-3">
        <div class="col-12">
            <label for="inputName" class="form-label">Введите свое имя </label>
            <input type="text" class="form-control" id="inputName" placeholder="Введите имя " name="user_name">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Отправить</button>
        </div>
    </form>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>