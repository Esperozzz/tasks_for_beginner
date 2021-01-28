<?php

include_once '../header.php';

function inputForm(string $type, string $name, string $value): string
{
    if (isset($_REQUEST[$value])) {
        $name = $_REQUEST[$value];
    }
    return "<input type=\"{$type}\" name=\"{$name}\" value=\"{$value}\">";
}
