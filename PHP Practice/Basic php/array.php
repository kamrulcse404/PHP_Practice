<?php

// $car = array("MBW", "VOLVO", "TOYOTA");

// sort($car);rsort($car);
// 

// echo "I like ".$car[0].", ".$car[1].", ".$car[2];

// echo "<br>";

// echo count($car);

// for ($i=0; $i < count($car); $i++) { 
//     echo "$car[$i]<br>";
// }

$age = array("Peter" => 90, "Xen" => 40, "Joe" => 43);

// echo $age['Peter'];

// asort($age);
// ksort($age);

// arsort($age);
krsort($age);

foreach ($age as $x => $val) {
    echo "$x = $val <br>";
}

// $car = array(
//     array("BMW", 22, 18),
//     array("VOLVO", 15, 13),
//     array("TOYOTA", 17, 15)
// );

// foreach ($car as $value) {
//     foreach ($value as $val) {
//         echo $val." ";
//     }
//     echo "<br>";
// }

// echo $car[0][0];
// echo "<br>";

// echo $car[0][1];
// echo "<br>";

// echo $car[0][2];
// echo "<br>";

// echo $car[1][0];
// echo "<br>";

// echo $car[1][1];
// echo "<br>";

// echo $car[1][2];
// echo "<br>";

// echo $car[2][0];
// echo "<br>";

// echo $car[2][1];
// echo "<br>";

// echo $car[2][2];
// echo "<br>";