<?php

function isLeapYer(int $year): bool
{
    $timestamp = mktime(0, 0, 0, 12, 31, $year);
    return (bool) date('L', $timestamp);
}
