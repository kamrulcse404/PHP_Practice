<?php

// Static properties can be called directly - without creating an instance of a class.

class PI{
    public static $value = 3.1416;
}

echo PI :: $value . "<br>";

class pi1{
    public static $value1 = 3.1416;

    public function staticValue(){
        return self :: $value1;
    }
}

$obj = new pi1();
echo $obj->staticValue()."<br>";

class x{
    public static $value2 = 323;
}

class y extends x{
    public function xStatic(){
        return parent :: $value2;
    }
}

echo y :: $value2 . "<br>";

$obj1 = new y();
echo $obj1->xStatic(). "<br>";