<?php

include_once '../header.php';

function checkbox(string $name)
{
    $checked = '';
    if (isset($_POST[$name]) && $_POST[$name] == 1) {
        $checked = 'checked';
    }
    return "<input type=\"hidden\" name=\"{$name}\" value=\"0\"><input type=\"checkbox\" name=\"{$name}\" value=\"1\" {$checked}>";
}
