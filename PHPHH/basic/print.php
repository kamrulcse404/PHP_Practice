<?php

/*

data type
--------------
integer
double/float
boolean
string 
null
array
object
resource
*/

// $var = 12;
// echo "Kamrul \n";
// echo 123;
// echo "\n";
// echo var_dump($var);

$name = "Earth";
var_dump($name);
var_dump("Kamrul");
$age = 12;
var_dump($age);
$age = NULL;
var_dump($age);
$age = '';
var_dump($age);
$name1 = "Kamrul";
$name2 =  "Hasan";
var_dump($name1, $name2);
$age = true;
var_dump($age);
$age = false;
var_dump($age);
$age = 12.23;
var_dump($age);

$name = "Earth";
// echo "We're living on {$name} \n";
// echo 'We\'re living on ' . $name;
// echo "\n";

printf("We're living on %s \n", $name);
printf("We're living on %s \n", strtoupper($name)); //for function like( strtoupper) reason we use printf
printf("His firstname is %s and Second name is %s\n", $name1, $name2);
printf("His %sName is %s %s\n", "Full", $name1, $name2);
echo "--------------------------------------------- \n";

// for multiline print we use echo
echo "Hello 
My name is
Md {$name1} Hasan, 
How are you?";

// new line
// \n use in console and <br/> use in browser for new line
