<?php

$n = 12;

if ($n == 12) {
    echo "Twelve\n";
} elseif ($n == 10) {
    echo "Ten\n";
} else {
    echo "A Number\n";
}

$result = (12 == $n) ? 'Twelve' : ((10 == $n) ? 'Ten' : 'A Number');
echo $result;
echo "\n";

$number = 12;
$res = ($number > 0) ? 'Positive' : (($number < 0) ? 'Negative' : 'Zero');
echo $res;