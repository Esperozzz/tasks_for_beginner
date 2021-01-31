<?php

include_once '../header.php';

function inputForm(string $type, string $name, string $value): string
{
    return "<input type=\"{$type}\" name=\"{$name}\" value=\"{$value}\">";
}
