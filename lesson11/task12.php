<?php

include_once '../header.php';

define('FIRST_YEAR_OF_OUR_ERA', 1);

$script = $_SERVER['SCRIPT_NAME'];

if (isset($_POST['submit'])) {

    $enteredYear = $_POST['year'];

    if ($enteredYear < FIRST_YEAR_OF_OUR_ERA || $enteredYear > PHP_INT_MAX) {

    }


    print_r($_POST);
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
      <label for="year">Enter year</label><br>
      <input type="text"  id="year" name="year"><br>
      <input type="submit" name="submit" value="Confirm">
    </form>
  </body>
</html>
