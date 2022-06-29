<?php

/*
Number System
-------------------------
%s use for string
%d use for decimal
%b use for binary
%o use for octal
%x and %X use for hexadecimal
%f use for float and double

number declear
-------------------
$n = 12 decimal
$n = 012 octal (use 0 before number for octal)
$n = 0x12 hexadecimal (use 0x before number for hexadecimal)
$n = 0b101010 hexadecimal (use 0b before number for binary)

 */


$n = 12;
printf("The decimal number is %d = %d\n", $n, $n);

$n = 012;
printf("The octal number is %o equvalent decimal is %d\n", $n, $n);

$n = 0xf;
printf("The hexadecimal number is %X equvalent decimal is %d\n", $n, $n);

$n = 0b111;
printf("The binary number is %b equvalent decimal is %d\n", $n, $n);



