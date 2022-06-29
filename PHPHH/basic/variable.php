<?php

$name = "Bangladesh";

$age = 234;

$word = "age";
echo "$name \n";
echo $$word;
echo "\n"; //new line \n alwayes in double qoutation.
echo "Hello $name how are you? \n";
echo "Hello {$name} how are you? \n";
echo 'hello $name \n'; //single qoutation doesn't work for \n and variable. for variable we should use (.) (comcatination operator)
echo "\n";
echo 'hello ' . $name. ' How are you?';
echo "\n";
