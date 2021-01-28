<?php

include_once '../header.php';

function checkbox(string $name): bool
{
    return "<input type=\"hidden\" name=\"{$name}\" value=\"0\"><input type=\"checkbox\" name=\"{$name}\" value=\"1\">";
}

echo checkbox('box');
