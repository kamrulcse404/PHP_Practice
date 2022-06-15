<?php

// $x = 23;
// echo $x;
// echo "<br>";

// $x = "Kamrul Hasan";
// echo $x;

// $x = PHP_INT_MAX;
// echo $x;
// echo "<br>";

// $x = PHP_INT_MIN;
// echo $x;
// echo "<br>";

// $x = PHP_INT_SIZE;
// echo $x;
// echo "<br>";

// $x = 23;
// // echo is_float($x);
// var_dump(is_int($x));
// echo "<br>";

// $x = 32.21;
// var_dump(is_int($x));
// // echo is_int($x);
// echo "<br>";

// echo PHP_FLOAT_MAX;
// echo "<br>";
// echo PHP_FLOAT_MIN;
// echo "<br>";

// echo -PHP_FLOAT_MAX;
// echo "<br>";

// echo PHP_FLOAT_DIG;
// echo "<br>";

// echo PHP_FLOAT_EPSILON;
// echo "<br>";

$x =32;
echo var_dump(is_finite($x));
echo "<br>";
$x =1.9e411;
echo var_dump(is_finite($x));
echo "<br>";
$x =1.9e411;
echo var_dump(is_infinite($x));
echo "<br>";





