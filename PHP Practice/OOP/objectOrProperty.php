<?php

class Fruit{

    public $name;
    public $color;

    function set_Name($name){
        $this->name = $name;
    }

    function get_Name(){
        return $this->name;
    }
}

$mango = new Fruit();
$mango->set_Name("Amrupali");

echo $mango->get_Name();