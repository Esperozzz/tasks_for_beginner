<?php

include_once '../header.php';

define('FIRST_YEAR_OF_OUR_ERA', 1);

$inputSent = 'ok';
$script = $_SERVER['SCRIPT_NAME'];

print_r($_POST);

if (isset($_POST['submit']) && $_POST['submit'] === $inputSent) {
    $enteredYear = $_POST['year'];
    if (
        $enteredYear > FIRST_YEAR_OF_OUR_ERA
        || $enteredYear < PHP_INT_MAX
    ) {

    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hello, world!</title>
  </head>
  <body>
    <form action="<?=$script?>" method="post">
      <label for="year">Enter year</label>
      <input type="text"  id="year" name="year">
      <button type="submit" name="submit" value="ok">Confirm</button>
    </form>
  </body>
</html>

 