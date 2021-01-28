<?php

include_once '../header.php';
include_once 'helper_functions.php';

$formsSend = isset($_POST['submit']);
$userName = $_POST['name'] ?? '';
$hello = $_POST['hello'] ?? '';

if ($hello !== 'on') {
    $hello = '';
}

?>
<!doctype html>
<html lang="en">
<head>
    <title>Task 1</title>
</head>
<body>
<form action="<?=$scriptName?>" method="post">
    <label for="name">Укажите ваше имя: </label><br>
    <input type="text" name="name" id="name"><br>
        <label for="hello">Поприветствовать пользователя: </label>
    <input type="checkbox" name="hello" id="hello"><br>
    <input type="submit" name="submit" value="Отправить">
</form>

<?php if (!empty($userName) && empty($hello)): ?>
    <h3>Досвидание <?=$userName?></h3>  
<?php endif; ?>
    
<?php if (!empty($userName) && !empty($hello)): ?>
    <h3>Приветстаую <?=$userName?></h3>  
<?php endif; ?>

</body>
</html>