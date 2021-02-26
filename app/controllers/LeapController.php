<?php

$parseYear = (int)$_POST['year'];
$parseMonth = (int)$_POST['month'];
$monthOfYear = $monthArray[$parseMonth];

$isLeapYear = ($parseYear % 4) || (($parseYear % 100 === 0) && ($parseYear % 400)) ? 0 : 1;
$daysInMonth = ($parseMonth === 2) ? (28 + $isLeapYear) : 31 - ($parseMonth - 1) % 7 % 2;

if($isLeapYear) {
    $is = 'is';
} else {
    $is = 'isn`t';
}

$outputAboutYear = "Year $parseYear $is leap";
$outputAboutMonth = "In $monthOfYear $daysInMonth days";
