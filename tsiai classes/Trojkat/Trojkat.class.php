<?php
//Mateusz Białas 3c
class Trojkat {

    public $h, $a;


    function __construct(){
        $this->h = rand(1, 100);
        $this->a = rand(1, 100);
    }

    function poleTrojkata() {
        return ($this->a * $this->h) / 2;
    }

    function __destruct() {
        // TODO: Implement __destruct() method.
    }

    function getInfo(){
        return "Trójkąt o podstawie $this->a i wysokości $this->h ma pole powierzchni ".$this->poleTrojkata().".";
    }

}

