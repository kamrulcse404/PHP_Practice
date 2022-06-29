<?php

$year = 2008;

if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 ==0)) {
    echo "$year is leap year\n";
}else {
    echo "$year is not leap year\n";
}

if ($year % 4 ==0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "$year is leap year\n";
}elseif ($year % 4 == 0 && $year % 100 == 0) {
    echo "$year is not leap year\n";
}elseif ($year % 4 == 0) {
    echo "$year is leap year\n";
}else {
    echo "$year is not leap year\n";
}