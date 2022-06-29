<?php

$fname = "Issac";
$lname = "Newton";

printf("His name is %s %s\n", $fname, $lname);

//variable swap
printf('His name is %2$s %1$s', $fname, $lname);// for this we have to use single qoutation
echo "\n";

printf("The decinal number equevalent %d is %b\n",12, 12);
printf('The decinal number equevalent %1$d is %1$b',12);

echo "\n";

$num = 23.4532;
printf("%.2f\n", $num);

$num = 231;
$num1 = 21;

printf("%05d\n", $num);
printf("%05d\n", $num1);

$num = 231.2341;
$num1 = 21.231;

printf("%011.6f\n", $num);
printf("%011.6f\n", $num1);

