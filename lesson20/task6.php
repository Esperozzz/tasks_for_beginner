<?php

include_once '../header.php';
include_once 'helper_functions.php';

$formsSend = isset($_POST['submit']);
$languages = $_POST['lang'] ?? [];

?>
<!doctype html>
<html lang="en">
<head>
    <title>Task 3</title>
</head>
<body>
<form action="<?=$scriptName?>" method="post">
    <h3>Какие языки программирования Вы знаете? </h3>
    <select name="lang[]" multiple>
        <option value="html">html</option>
        <option value="css">css</option>
        <option value="php">php</option>
        <option value="javascript">javascript</option>
    </select>
    <br>
    <input type="submit" name="submit" value="Отправить">
</form>

<ul>
<?php foreach ($languages as $lang): ?>
      <li><?=$lang?></li>
<?php endforeach; ?>
</ul>
    
</body>
</html>