<?php

include_once '../header.php';

$formsSend = isset($_POST['submit']);
$answer = $_POST['answer'] ?? '';

?>
<!doctype html>
<html lang="en">
<head>
    <title>Task 3</title>
</head>
<body>
<form action="<?=$scriptName?>" method="post">
    <h3>Знаете ли вы php? </h3>
    <input type="radio" name="answer" value="yes" checked> Да<br>
    <input type="radio" name="answer" value="no"> Нет<br>
    <input type="submit" name="submit" value="Отправить">
</form>

<?php if ($answer === 'yes'): ?>
    <h3>Да</h3>
<?php endif; ?>
<?php if ($answer === 'no'): ?>
    <h3>Нет</h3>
<?php endif; ?>
    
</body>
</html>