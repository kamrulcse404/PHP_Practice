<?php

class Fruit{
    public $name;
    protected $color;
    private $weight;

    function set_name($name){
        $this->name = $name;
    }

    protected function set_color($color){
        $this->color = $color;
    }

    private function set_weight($weight){
        $this->weight = $weight;
    }
}

$apple = new Fruit();

$apple->set_name("Apple"); //OK
// $apple->set_color("Red"); //error
// $apple->set_weight("100 g"); //error