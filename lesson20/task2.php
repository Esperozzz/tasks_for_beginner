<?php

include_once '../header.php';

$formsSend = isset($_POST['submit']);
$languages = $_POST['lang'] ?? [];

?>
<!doctype html>
<html lang="en">
<head>
    <title>Task 2</title>
</head>
<body>
<form action="<?=$scriptName?>" method="post">
    <h3>Укажите языки программирования которые вы знаете: </h3>
    <input type="checkbox" name="lang[0]" id="html" value="html">
    <label for="html">html</label>
    <input type="checkbox" name="lang[1]" id="css" value="css">
    <label for="css">css</label>
    <input type="checkbox" name="lang[2]" id="php" value="php">
    <label for="php">php</label>
    <input type="checkbox" name="lang[3]" id="javascript" value="javascript">
    <label for="javascript">javascript</label><br>
    <input type="submit" name="submit" value="Отправить">
</form>

<ul>
<?php foreach ($languages as $lang): ?>
      <li><?=$lang?></li>
<?php endforeach; ?>
</ul>

</body>
</html>