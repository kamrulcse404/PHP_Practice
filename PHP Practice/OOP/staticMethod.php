<?php

// Static methods can be called directly - without creating an instance of the class first.

class Greeting{
    public static function welcome(){
        echo "hello world <br>";
    }
}

Greeting :: welcome();

class Greeting1{
    public function welcome1(){
        echo "Hello PHP world <br>";
    }

    public function __construct(){
        self :: welcome1();
    }
}

new Greeting1();

class Greeting2{
    public static function welcome2(){
        echo "hello PHP world 1 <br>";
    }
}

class GretingOther{
    public function message(){
        Greeting2 :: welcome2();
    }
}

$obj = new GretingOther();
$obj->message();

class Domain{
    protected static function getWebSiteName(){
        echo "www.kamrulHasan.com <br>";
    }
}

class DomainK extends Domain{
    public $webName;

    public function __construct(){
        $this->webName = parent :: getWebSiteName();
    }
}

new DomainK();