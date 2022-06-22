<?php

trait message1{
    public function msg1(){
        echo "OOP is fun <br>";
    }
}

trait message2{
    public function msg2(){
        echo "OOP reduces code duplication! <br>";
    }
}

class Welcome{
    use message1;
}

class Welcome1{
    use message1, message2;
}

$obj = new Welcome();
$obj->msg1();

echo "<br>";

$obj1 = new Welcome1();
$obj1->msg1();
$obj1->msg2();