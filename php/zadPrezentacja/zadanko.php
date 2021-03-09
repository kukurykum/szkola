<?php
    function z1($a){
        if ($a >= 0 && $a <= 100){
            echo "liczba $a znajduje sie w przedziale 0-100 <br>";
        }
        else {
            echo "liczba $a poza przedzialem <br>";
        }
    }
    function z2($a){
        if (($a >= 0 && $a <= 100) || ($a >= 200 && $a <= 1000)){
            echo "liczba $a znajduje sie w przedziale 0-100 lub 200-1000 <br>";
        }
        else {
            echo "liczba $a jest poza przedzialem <br>";
        }
    }
    function z3($a, $b){
        if ($b != 0 ){
            $dzielenie = $a / $b;
            echo "wynik dzielenia to: $dzielenie <br>";
        }
        else
            echo "nie dziel przez $b <br>";
    }
    function z4($a, $b, $c){
        $odejmowanie = $b - $c;
        if ($odejmowanie != 0 ){
            $dzielenie = $a / $odejmowanie;
            echo "wynik dzialania to: $dzielenie <br>";
        }
        else
            echo "nie dziel przez $odejmowanie <br>";
    }
    function z5($a){
        if ($a < 0) {
            $a *= -1;
            if ($a >= 0 && $a <= 10)
                echo "wartosc bezwgledna jest z zakresu 0-10<br>";
            else
                echo "nie jest z zakresu 0-10<br>";
        }
    }
    function z6($a, $b){
        $suma = $a + $b;
        if ($suma > 100)
            echo "suma jest wieksza od 100<br>";
        else 
            echo "suma mniejsza od 100 <br>";
    }
    function z7($a){
        if ($a < 0){
            $a *= -1;
            echo "wartosc bezwzgledna to $a <br>";
        }
        else 
            echo "wartosc bezwzgledna to $a<br>";
    }
    function z8($a){
        if ($a > -10 && $a < 10){
            if ($a < 0){
                $a *= -1;
                echo "wartosc bezwzgledna to $a <br>";
            }
            else 
                echo "wartosc bezwzgledna to $a<br>";
        }
        else 
            echo "liczba poza przedzialem<br>";
    }
    function z9($a){
        if ($a == 10 || $a == 20 || $a == 30){
            echo "wartosc to 10, 20 lub 30 <br>";
        }
        else 
            echo "zla wartosc <br>";
    }
    function z10($a){
        if ($a % 2 == 0)
            echo "liczba $a jest podzielna przez 2<br>";
        else 
            echo "liczba $a nie jest podzielna przez 2<br>";
    }
    
    z1(5);
    z2(150);
    z3(120,17);
    z4(10,6,4);
    z5(-8);
    z6(100,5);
    z7(-19);
    z8(80);
    z9(20);
    z10(443);
?>