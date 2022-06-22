<?php

// . When one or more classes use the same interface, it is referred to as "polymorphism".

interface Animal{
    public function makeSound();
}


class Cat implements Animal{
    public function makeSound(){
        echo "Mew <br>";
    }
}

class Dog implements Animal{
    public function makeSound(){
        echo "Bark <br>";
    }
}

class Mouse implements Animal{
    public function makeSound(){
        echo "Squeak <br>";
    }
}

$cat = new Cat();
$cat->makeSound();

$dog = new Dog();
$dog->makeSound();

$mouse = new Mouse();
$mouse->makeSound();