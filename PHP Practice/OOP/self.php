<?php

class Goodbye{
    const LEAVE_MESSAGE = "Hello, Welcome to PHP world";

    public function bye(){
        echo self :: LEAVE_MESSAGE;
    }
}

$goodBye = new Goodbye();
$goodBye->bye();