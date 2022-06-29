<?php

//constant
define('PI', 3.1416);
echo PI;
echo "\n";
echo constant("PI");
echo "\n";


echo "Value of PI = {PI} \n"; // constant value doesn't work with single or double qoutation
echo 'Value of PI = {PI}'; 
echo "\n";

$cons = "constant";

echo "Value of PI = ". PI;
echo "\n";
echo "Value of PI = {$cons("PI")} \n";//$cons == constant("PI") 

//we can change nornal variable value.
echo "\n";
$task = "read";
echo $task;
echo "\n";
$task = "write";
echo $task;


