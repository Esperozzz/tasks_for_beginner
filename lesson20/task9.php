<?php

include_once '../header.php';

function checkbox(string $name)
{
    return "<input type=\"hidden\" name=\"{$name}\" value=\"0\"><input type=\"checkbox\" name=\"{$name}\" value=\"1\">";
}

print_r($_REQUEST);

echo '<form>';
echo checkbox('box');
echo '<input type="submit" name="submit" value="ok">';
echo '</form>';
