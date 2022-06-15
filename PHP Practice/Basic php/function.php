<?php declare(strict_types=1);

// function writeMsg(){
//     echo "This is Function <br>";
// }

// writeMsg();

// function name($fname){
//     echo "Your Name is $fname <br>";
// }

// name("Kamrul");
// name("Hasan");

// function name($fname, $year){
//     echo "Your Name is $fname & Year is $year!<br>";
// }

// name("Kamrul", 1996);
// name("Hasan", 1998);

// function Add(int $x, int $y){
//     echo $x + $y;
//     echo "<br>";
// }

// Add(4, "5");
// Add(5, 5);
// Add(5, 9);

// after declaring: declare(strict_types=1);

// function Add(int $x, int $y){
//     echo $x + $y;
//     echo "<br>";
// }

// // Add(4, "5");
// Add(5, 5);
// Add(5, 9);

// function defaultArgument(int $x = 50){
//     echo $x;
//     echo "<br>";
// }

// defaultArgument(20);
// defaultArgument();
// defaultArgument(89);
// defaultArgument(80);
// defaultArgument();

// function add(int $x, int $y){
//     $z = $x + $y;
//     return $z;
// }

// $res = add(5, 9);
// echo "$res <br>";

// function add(float $x, float $y) : float{
//     $z = $x + $y;
//     return $z;
// }

// $res = add(5.6, 9.5);
// echo "$res <br>";

// function add(float $x, float $y) : int{
//     $z = $x + $y;
//     return (int) $z;
// }

// $res = add(5.6, 9.5);
// echo "$res <br>";

function ref(int &$x){
    $x += 5;
}
$res = 5;
ref($res);

echo $res;