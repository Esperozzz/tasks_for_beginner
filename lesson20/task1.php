<?php

include_once '../header.php';
include_once 'helper_functions.php';

$formsSend = isset($_POST['submit']);
$year = $_POST['year'] ?? '';

if (!is_numeric($year)) {
    $year = '';
}

?>
<!doctype html>
<html lang="en">
<head>
    <title>Task 12</title>
</head>
<body>
<form action="<?=$scriptName?>" method="post">
    <label for="year">Укажите год в формате ГГГГ: </label><br>
    <input type="text" name="year" id="year"><br>
    <input type="submit" name="submit" value="Отправить">
</form>

<?php if (!empty($year) && isLeapYer($year)): ?>
    <h3>Год високосный</h3>
<?php elseif (!empty($year) && !isLeapYer($year)): ?>
    <h3>Год не високосный</h3>
<?php else: ?>
<?php endif; ?>

</body>
</html>