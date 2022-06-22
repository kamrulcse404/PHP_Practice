<?php

class Fruit{
    public $name;
    public $color;

    public function __constuct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function intro(){
        echo "The fruit name is $this->name and color is $this->color <br>";
    }
}


class Strawberry extends Fruit{
    public $weight;

    public function __construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro(){
        echo "The fruit name is $this->name and color is $this->color and weight is $this->weight g<br>";
    }
}

$Strawberry = new Strawberry("Strawberry", "Red", 1000);
$Strawberry->intro();