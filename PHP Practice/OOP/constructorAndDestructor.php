<?php

class Fruit{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function get_name(){
        return $this->name;
    }

    function get_color(){
        return $this->color;
    }

    function __destruct(){
        echo "The Mango name is $this->name and  color is $this->color from destructor";
    }
}

$Mango = new Fruit("Himshagor", "green");

// echo "Mango name is ".$Mango->get_name();
// echo " and color is ".$Mango->get_color();
// echo "<br>";