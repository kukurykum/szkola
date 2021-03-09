<?php
//Mateusz Białas 3c
class Odcinek {
    private $x1, $y1, $x2, $y2;

    function __construct($x1=null, $y1=null, $x2=null, $y2=null){
        $this->x1 = $x1;
        $this->y1 = $y1;
        $this->x2 = $x2;
        $this->y2 = $y2;

        foreach ($this as $key => $value) {
            if(!is_int($value) || $key > 100 || $key < -100)
                $this->$key = rand(-100, 100);
        }
    }

    function liczDlugosc(){
        return sqrt(pow($this->x2 - $this->x1, 2) + pow($this->y2 - $this->y1, 2));
    }

}


