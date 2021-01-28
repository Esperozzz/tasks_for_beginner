<?php

include_once '../header.php';
include_once 'helper_functions.php';

$formsSend = isset($_POST['submit']);

$age = $_POST['age'] ?? '';

switch ($age) {
    case ('20'): ;
        $age = 'Менее 20 лет';
        break;
    case ('10-25'): ;
        $age = 'от 10 до 25 лет';
        break;
    case ('26-30'): ;
        $age = 'от 26 до 30 лет';
        break;
    case ('30'): ;
        $age = 'более 30 лет';
        break;
    default:
        $age = '';
        break;
}

?>
<!doctype html>
<html lang="en">
<head>
    <title>Task 3</title>
</head>
<body>
<form action="<?=$scriptName?>" method="post">
    <h3>Сколько Вам лет? </h3>
    <input type="radio" name="age" value="20" checked> менее 25<br>
    <input type="radio" name="age" value="10-25"> 20 - 25<br>
    <input type="radio" name="age" value="26-30"> 26 - 30<br>
    <input type="radio" name="age" value="30"> более 30<br>
    <input type="submit" name="submit" value="Отправить">
</form>

<?php if (!empty($age)): ?>
    <h3><?=$age?></h3>
<?php endif; ?>
    
</body>
</html>