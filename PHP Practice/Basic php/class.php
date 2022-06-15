<?php

class car{
    public $color;
    public $model;

    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }

    public function message(){
        return "My car color is ".$this->color. " & model is ".$this->model;
    }
}

$myCar = new car("Red", "BMW");

$res = $myCar->message();
echo $res;