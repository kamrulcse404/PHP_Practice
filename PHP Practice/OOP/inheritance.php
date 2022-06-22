<?php

// class Fruit{
//     public $name;
//     public $color;

//     public function __construct($name, $color){
//         $this->name = $name;
//         $this->color = $color;
//     }

//     public function intro(){
//         echo "The fruit is {$this->name} and color is {$this->color} <br>";
//     }
// }

// class Strawberry extends Fruit{
//     public function message(){
//         echo "Am i fruit or berry <br>";
//     }
// }

// $Strawberry = new Strawberry("Strawberry", "red");
// $Strawberry->intro();
// $Strawberry->message();



//Protected
// class Fruit{
//     public $name;
//     public $color;

//     public function __construct($name, $color){
//         $this->name = $name;
//         $this->color = $color;
//     }

//     protected function intro(){
//         echo "The fruit is {$this->name} and color is {$this->color} <br>";
//     }
// }

// class Strawberry extends Fruit{
//     public function message(){
//         echo "Am i fruit or berry <br>";
//     }
// }

// $Strawberry = new Strawberry("Strawberry", "red");
// $Strawberry->intro();  //error because protected method or property only can access derived class

// $Strawberry->message();



//protected method or property only can access 


class Fruit{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro(){
        echo "The fruit is {$this->name} and color is {$this->color} <br>";
    }
}

class Strawberry extends Fruit{
    public function message(){
        $this->intro();
        echo "Am i fruit or berry <br>";
    }
}

$Strawberry = new Strawberry("Strawberry", "red");

$Strawberry->message();


