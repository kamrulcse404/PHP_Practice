<?php

// sprintf return value

$fname = "Issac";
$lname = "Newton";

printf("His name is %s %s\n",$fname, $lname);
$output = sprintf("His name is %s %s\n",$fname, $lname);
echo $output;
echo "\n";
echo ucwords($output);
