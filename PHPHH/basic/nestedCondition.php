<?php

$condition1 = true;
$condition2 = false;
$condition3 = true;

if ($condition1) {
    if ($condition2) {
        if ($condition3) {
            echo "Hello\n";
        }else {
            echo "No 1\n";
        }
    }else {
        echo "No 2\n";
    }
}else {
    echo "No 3\n";
}
echo "---------------------------\n";

if ($condition1 && $condition2 && $condition3) {
    echo "Hello\n";
}elseif ($condition1 && $condition2) {
    echo "No 1\n";
}elseif ($condition1) {
    echo "No 2\n";
}else{
    echo "No 3\n";
}